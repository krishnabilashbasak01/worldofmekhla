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
var sticky2 = desktopnav.offsetTop;
if (window.pageYOffset >= sticky2) {
  // console.log("sticky up");

  desktopnav.classList.add("sticky");
} else {
  // console.log("sticky down");

  desktopnav.classList.remove("sticky");
  desktopnav.style.backgroundColor = "#fff";
}