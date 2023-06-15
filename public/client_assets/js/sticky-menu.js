let hamMenu = document.querySelector(".container-1");
let menu_list = document.querySelector("#menu_list");
hamMenu.addEventListener("click", () => {
  hamMenu.classList.toggle("active");
  menu_list.classList.toggle("in");
});

var navbar = document.getElementById("navbar");

var sticky = navbar.offsetTop;

if (window.pageYOffset >= sticky) {
  // console.log("sticky up");
  navbar.classList.add("sticky");
} else {
  // console.log("sticky down");
  navbar.classList.remove("sticky");
}

var desktopnav = document.getElementById("desktopnav");
// var sticky2 = desktopnav.offsetTop;
// if (window.pageYOffset >= sticky2) {
//   // console.log("sticky up");
//   console.log("sticky", sticky);
//   desktopnav.classList.add("fixed-top");
// } else {
//   // console.log("sticky down");

//   desktopnav.classList.remove("fixed-top");
//   console.log("not sticky", sticky);
// }

// let prevScrollPos = window.scrollY;
let isNavbarFixed = false;

function handleScroll() {
  const currentScrollPos = window.scrollY;

  if (currentScrollPos > 0 && !isNavbarFixed) {
    // Scrolling down, add the fixed-top class
    desktopnav.classList.add("fixed-top");
    isNavbarFixed = true;
  } else if (currentScrollPos === 0 && isNavbarFixed) {
    // Scrolled to the top, remove the fixed-top class
    desktopnav.classList.remove("fixed-top");
    isNavbarFixed = false;
  }
}
window.addEventListener("scroll", handleScroll);
