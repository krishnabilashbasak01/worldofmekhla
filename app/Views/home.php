<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= $pageTitle ?></title>
  <meta name="description" content="<?= $pageDesc ?>">
  <meta name="keywords" content="<?= $pageKeyWords ?>">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="/client_assets/css/style.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css" />
</head>

<body>
  <!-- nav bar -->
  <?php include_once 'components/header.php'; ?>
  <!-- nav bar -->

  <div id="parchment" class="page-body">
    <div class="media-icons">
      <a href="#"><i class="uil uil-facebook-f"></i></a>
      <a href="#"><i class="uil uil-twitter"></i></a>
      <a href="#"><i class="uil uil-instagram"></i></a>
    </div>
    <div class="main">
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="/client_assets/images/slider/img_2.jpg" alt="" />
            <div class="text-content">
              <p class="big-text">Welcome To</p>
              <p class="small-text">World Of Mekhla</p>
            </div>
          </div>
          <div class="swiper-slide">
            <img src="/client_assets/images/slider/img_3.jpg" alt="" />
            <div class="text-content">
              <p class="big-text">Welcome To</p>
              <p class="small-text">World Of Mekhla</p>
            </div>
          </div>
          <div class="swiper-slide">
            <img src="/client_assets/images/slider/img_4.jpg" alt="" />
            <div class="text-content">
              <p class="big-text">Welcome To</p>
              <p class="small-text">World Of Mekhla</p>
            </div>
          </div>
          <div class="swiper-slide">
            <img src="/client_assets/images/slider/img_5.jpg" alt="" />
            <div class="text-content">
              <p class="big-text">Welcome To</p>
              <p class="small-text">World Of Mekhla</p>
            </div>
          </div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="autoplay-progress">
          <svg viewBox="0 0 48 48">
            <circle cx="24" cy="24" r="20"></circle>
          </svg>
          <span></span>
        </div>
      </div>
    </div>

    <div class="back_ground_picture" style="background-image: url('/client_assets/images/background/img_1.jpg')">
      <div class="noise">
        <div class="container">
          <div class="row">
            <div class="col-12 col-lg-4 mx-auto">
              <div class="music_card">
                <img class="music_card_pic" src="/client_assets/images/picture/mekhla_about.png" alt="" />
                <p class="music_card_title mt-2">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                <a href="/about" class="know_more_btn mt-2" target="_blank" rel="noopener noreferrer">Listen Now</a>
                <a href="/about" class="know_more_btn mt-2" target="_blank" rel="noopener noreferrer">Watch Now
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Musical works -->
    <div class="background_gradient">
      <div class="container">
        <div class="heading_section">
          <h1 class="heading_title_white">MUSICAL WORKS</h1>
          <img src="/client_assets/images/png/underline_white.png" width="200" alt="" />
        </div>

        <div class="row mt-4">
          <div class="col-12 col-lg-4 col-md-4">
            <div class="video_wrapper">
              <iframe width="100%" height="315" src="https://www.youtube.com/embed/SL0DcHCbL9Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
          </div>
          <div class="col-12 col-lg-4 col-md-4">
            <div class="video_wrapper">
              <iframe width="100%" height="315" src="https://www.youtube.com/embed/vs-_E_dTtp0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
          </div>
          <div class="col-12 col-lg-4 col-md-4">
            <div class="video_wrapper">
              <iframe width="100%" height="315" src="https://www.youtube.com/embed/2vxYUs8JVnM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-lg-4 col-md-4 mx-auto">
            <div class="musical_card">
              <p class="music_title">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Asperiores, exercitationem.
              </p>
              <a href="/" class="play_btn"><i class="uil uil-play"></i></a>
            </div>
          </div>
          <div class="col-12 col-lg-4 col-md-4 mx-auto">
            <div class="musical_card">
              <p class="music_title">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Asperiores, exercitationem.
              </p>
              <a href="/" class="play_btn"><i class="uil uil-play"></i></a>
            </div>
          </div>
          <div class="col-12 col-lg-4 col-md-4 mx-auto">
            <div class="musical_card">
              <p class="music_title">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Asperiores, exercitationem.
              </p>
              <a href="/" class="play_btn"><i class="uil uil-play"></i></a>
            </div>
          </div>
          <div class="col-12 col-lg-4 col-md-4 mx-auto">
            <div class="musical_card">
              <p class="music_title">Lorem ipsum dolor sit amet,</p>
              <a href="/" class="play_btn"><i class="uil uil-play"></i></a>
            </div>
          </div>
          <div class="col-12 col-lg-4 col-md-4 mx-auto">
            <div class="musical_card">
              <p class="music_title">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Asperiores, exercitationem. Lorem ipsum dolor sit amet.
              </p>
              <a href="/" class="play_btn"><i class="uil uil-play"></i></a>
            </div>
          </div>
          <div class="col-12 col-lg-4 col-md-4 mx-auto">
            <div class="musical_card">
              <p class="music_title">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Asperiores, exercitationem.
              </p>
              <a href="/" class="play_btn"><i class="uil uil-play"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- About -->
    <div class="background_dark_image" style="background-image: url('/client_assets/images/background/bg_blank.jpg')">

      <div class="container">
        <div class="heading_section">
          <h1 class="heading_title_white">About Mekhla</h1>
          <img src="/client_assets/images/png/underline_white.png" width="200" alt="" />
        </div>

        <ul class="nav nav-pills mb-5 mt-5" id="pills-tab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-biography" type="button" role="tab" aria-controls="pills-biography" aria-selected="true">
              Biography
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-recognition" type="button" role="tab" aria-controls="pills-recognition" aria-selected="false">
              Recognition
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-hobby" type="button" role="tab" aria-controls="pills-hobby" aria-selected="false">
              Hobby
            </button>
          </li>
        </ul>
        <div class="tab-content text-white" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-biography" role="tabpanel" aria-labelledby="pills-biography-tab">
            <div class="row mt-4">
              <div class="col-12 col-lg-6">
                <p class="about_text">
                  Mekhla Dasgupta’s celestial voice and artistic genius have
                  spellbound audiences worldwide. Her unparalleled talent
                  transcends the boundaries of music, as she seamlessly weaves
                  her enchanting vocals with breathtaking paintings and other
                  awe-inspiring forms of art. She is a true visionary, an
                  artist in its purest form, igniting a passion for creativity
                  in all who are lucky enough to witness her exceptional
                  talents.
                </p>
                <p class="mt-2 about_text">
                  She began her musical education at the age of 5 and has
                  since honed her skills with guidance from experts such as
                  Pintu Das, Pranab Mukherjee, Tushar Dua, and Bishwarup
                  Ghoshdastidar. In 2012, she became a disciple of Kumar
                  Mardur at the ITC Sangeet Research Academy.
                </p>

                <p class="mt-2 about_text">
                  In 2010, she was the 1st runner-up in Tarana (ETV Bangla),
                  and in 2013, she won Eto Sur Aar Gaan (DD Bangla). She was a
                  top 5 finalist in Saregamapa (Zee Bangla) in 2016 and
                  received the All-India Radio special prize in Rabindra
                  Sangeet the same year. Her debut earned her Best Female
                  Debut nominations at the Mirchi Music Awards and the Telly
                  Cine Awards in 2017. She started her playback career with
                  ...
                </p>
                <br />
                <a href="/about" class="know_more_btn mt-4" target="_blank" rel="noopener noreferrer">Know More</a>
              </div>
              <div class="col-12 col-lg-6">
                <img src="/client_assets/images/picture/mekhla_about_1.png" width="100%" alt="Mekhla Dasgupta" />
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="pills-recognition" role="tabpanel" aria-labelledby="pills-recognition-tab">
            <div class="row">
              <div class="col-12 col-lg-6 col-md-6">

                <div class="small_heading">
                  <h1>AWARDS</h1>
                  <hr class="text-white" />
                </div>
                <div class="row">
                  <div class="col-6">
                    <div class="awards_text">
                      All India Radio Special Prize <br />
                      in Rabindrasangeet (2017)
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="awards_text">
                      1st Eto Sur Aar Eto Gaan <br />
                      (DD Bangla) (2013)
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="awards_text">
                      1st runner-up in Tarana <br />
                      (ETV Bangla) (2010)
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="awards_text">
                      5th Saregamapa <br />
                      (Zee Bangla) (2017)
                    </div>
                  </div>
                </div>
                <div class="small_heading">
                  <h1>NOMINATIONS</h1>
                  <hr class="text-white" />
                </div>
                <div class="row">
                  <div class="col-6">
                    <div class="awards_text">
                      Best Debut Female Singer <br />
                      for Baje Bina (2017)
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="awards_text">
                      Best Playback Singer for Mon <br />
                      Kyamoner Jonmodin(2023)
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="awards_text">Mirchi Music Awards</div>
                  </div>
                  <div class="col-6">
                    <div class="awards_text">WBFJA</div>
                  </div>
                  <div class="col-6">
                    <div class="awards_text">Tele Cine Awards</div>
                  </div>
                  <div class="col-6">
                    <div class="awards_text">Tele Cine Awards</div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-lg-6 col-md-6">

                <img src="/client_assets/images/picture/Picture12.jpg" width="80%" alt="" srcset="" />
              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="pills-hobby" role="tabpanel" aria-labelledby="pills-hobby-tab">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                <img src="/client_assets/images/hobbies/1.jpg" width="100%" alt="" />
              </div>
              <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                <img src="/client_assets/images/hobbies/2.jpg" width="100%" alt="" />
              </div>
              <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                <img src="/client_assets/images/hobbies/3.jpg" width="100%" alt="" />
              </div>
              <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                <img src="/client_assets/images/hobbies/4.jpg" width="100%" alt="" />
              </div>
              <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                <img src="/client_assets/images/hobbies/5.jpg" width="100%" alt="" />
              </div>
              <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                <img src="/client_assets/images/hobbies/6.jpg" width="100%" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Playback In Movie -->
    <div class="background_dark_image" style="background-image: url('/client_assets/images/background/pic_9.jpg')">
      <div class="container">
        <div class="heading_section mb-4">
          <h1 class="heading_title">Play Back In Movie</h1>
          <img src="/client_assets/images/png/underline.png" width="200" alt="" />
        </div>

        <div class="row">
          <div class="col-12 col-lg-4 col-md-4">
            <div class="video_wrapper">
              <iframe width="100%" height="315" src="https://www.youtube.com/embed/BHdkxbUB3OI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
          </div>
          <div class="col-12 col-lg-4 col-md-4">
            <div class="video_wrapper">
              <iframe width="100%" height="315" src="https://www.youtube.com/embed/ksQk4qzE1SA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
          </div>
          <div class="col-12 col-lg-4 col-md-4">
            <div class="video_wrapper">
              <iframe width="100%" height="315" src="https://www.youtube.com/embed/IvYaZWqsfag" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
          </div>
          <div class="col-12 col-lg-4 col-md-4">
            <div class="video_wrapper">
              <iframe width="100%" height="315" src="https://www.youtube.com/embed/7bmXS9Z_71A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
          </div>
          <div class="col-12 col-lg-4 col-md-4">
            <div class="video_wrapper">
              <iframe width="100%" height="315" src="https://www.youtube.com/embed/cYodwyADDeg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
          </div>
          <div class="col-12 col-lg-4 col-md-4">
            <div class="video_wrapper">
              <iframe width="100%" height="315" src="https://www.youtube.com/embed/5tskOtLqaQI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
          </div>
          <div class="col-12 col-lg-4 col-md-4">
            <div class="video_wrapper">
              <iframe width="100%" height="315" src="https://www.youtube.com/embed/UvZwl0VNew8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
          </div>

          <div class="col-12 col-lg-4 col-md-4">
            <div class="video_wrapper">
              <iframe width="100%" height="315" src="https://www.youtube.com/embed/CuhclJlWiCg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
          </div>
          <div class="col-12 col-lg-4 col-md-4">
            <div class="video_wrapper">
              <iframe width="100%" height="315" src="https://www.youtube.com/embed/skZeb_rLCrI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Album -->
    <div class="background_dark_image" style="background-image: url('/client_assets/images/background/pic_10.jpg')">
      <div class="container">
        <div class="heading_section mb-4">
          <h1 class="heading_title">Album</h1>
          <h4 class="text-white">NAIVEDYA Vol. 1</h4>
          <img src="/client_assets/images/png/underline.png" width="200" alt="" />
        </div>

        <div class="row">
          <div class="col-12 col-lg-4 col-md-4 mx-auto">
            <div class="collaboration">
              <img src="/client_assets/images/thumbnails/OF008lXPKCk.jpg" class="image" alt="" />
              <a href="https://youtu.be/OF008lXPKCk" class="n_play_btn" target="_blank" rel="noopener noreferrer"><i class="uil uil-play"></i></a>
            </div>
          </div>
          <div class="col-12 col-lg-4 col-md-4 mx-auto">
            <div class="collaboration">
              <img src="/client_assets/images/thumbnails/b5RA1JrSJwY.jpg" class="image" alt="" />
              <a href="https://youtu.be/b5RA1JrSJwY" class="n_play_btn" target="_blank" rel="noopener noreferrer"><i class="uil uil-play"></i></a>
            </div>
          </div>
          <div class="col-12 col-lg-4 col-md-4 mx-auto">
            <div class="collaboration">
              <img src="/client_assets/images/thumbnails/MwYWcKb3UJw.jpg" class="image" alt="" />
              <a href="https://youtu.be/MwYWcKb3UJw" class="n_play_btn" target="_blank" rel="noopener noreferrer"><i class="uil uil-play"></i></a>
            </div>
          </div>
          <div class="col-12 col-lg-4 col-md-4 mx-auto">
            <div class="collaboration">
              <img src="/client_assets/images/thumbnails/k3b_lXFns1s.jpg" class="image" alt="" />
              <a href="https://youtu.be/k3b_lXFns1s" class="n_play_btn" target="_blank" rel="noopener noreferrer"><i class="uil uil-play"></i></a>
            </div>
          </div>
          <div class="col-12 col-lg-4 col-md-4 mx-auto">
            <div class="collaboration">
              <img src="/client_assets/images/thumbnails/ZcjW3-fGUko.jpg" class="image" alt="" />
              <a href="https://youtu.be/ZcjW3-fGUko" class="n_play_btn" target="_blank" rel="noopener noreferrer"><i class="uil uil-play"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Musical Collaboration -->
    <!-- <div class="background_dark"> -->
    <div class="pt-5">
      <div class="container">
        <div class="heading_section">
          <!-- <h1 class="heading_title_white">Musical Collaboration</h1> -->
          <!-- <img src="/client_assets/images/png/underline_white.png" width="200" alt="" /> -->
          <h1 class="heading_title">Musical Collaboration</h1>
          <img src="/client_assets/images/png/underline.png" width="200" alt="" />
        </div>

        <div class="small_heading">
          <h1>T-SERIES</h1>
          <hr class="text-white" />
        </div>

        <div class="row">
          <div class="col-12 col-lg-4 col-md-4">
            <div class="collaboration">
              <img src="/client_assets/images/thumbnails/W9Us__ppiHQ.jpg" class="image" alt="" />
              <a href="https://youtu.be/W9Us__ppiHQ" class="n_play_btn" target="_blank" rel="noopener noreferrer"><i class="uil uil-play"></i></a>
            </div>
          </div>
        </div>

        <div class="small_heading mt-5">
          <h1>ZEE MUSIC BANGLA</h1>
          <hr class="text-white" />
        </div>

        <div class="row">
          <div class="col-12 col-lg-4 col-md-4">
            <div class="collaboration">
              <img src="/client_assets/images/thumbnails/SURBIBiEyAE.jpg" class="image" alt="" />
              <a href="https://youtu.be/SURBIBiEyAE" class="n_play_btn" target="_blank" rel="noopener noreferrer"><i class="uil uil-play"></i></a>
            </div>
          </div>
          <div class="col-12 col-lg-4 col-md-4">
            <div class="collaboration">
              <img src="/client_assets/images/thumbnails/gPD7a45BhNs.jpg" class="image" alt="" />
              <a href="https://youtu.be/gPD7a45BhNs" class="n_play_btn" target="_blank" rel="noopener noreferrer"><i class="uil uil-play"></i></a>
            </div>
          </div>

          <div class="col-12 col-lg-4 col-md-4">
            <div class="collaboration">
              <img src="/client_assets/images/thumbnails/fYcZOkQ1-nw.jpg" class="image" alt="" />
              <a href="https://youtu.be/fYcZOkQ1-nw" class="n_play_btn" target="_blank" rel="noopener noreferrer"><i class="uil uil-play"></i></a>
            </div>
          </div>
          <div class="col-12 col-lg-4 col-md-4">
            <div class="collaboration">
              <img src="/client_assets/images/thumbnails/EQMiks2S7gY.jpg" class="image" alt="" />
              <a href="https://youtu.be/EQMiks2S7gY" class="n_play_btn" target="_blank" rel="noopener noreferrer"><i class="uil uil-play"></i></a>
            </div>
          </div>
        </div>

        <div class="small_heading mt-5">
          <h1>SVF</h1>
          <hr class="text-white" />
        </div>

        <div class="row">
          <div class="col-12 col-lg-4 col-md-4">
            <div class="collaboration">
              <img src="/client_assets/images/thumbnails/2ybb3CKDSxs.jpg" class="image" alt="" />
              <a href="https://youtu.be/2ybb3CKDSxs" class="n_play_btn" target="_blank" rel="noopener noreferrer"><i class="uil uil-play"></i></a>
            </div>
          </div>
          <div class="col-12 col-lg-4 col-md-4">
            <div class="collaboration">
              <img src="/client_assets/images/thumbnails/X5isMK80lLg.jpg" class="image" alt="" />
              <a href="https://youtu.be/X5isMK80lLg" class="n_play_btn" target="_blank" rel="noopener noreferrer"><i class="uil uil-play"></i></a>
            </div>
          </div>
          <div class="col-12 col-lg-4 col-md-4">
            <div class="collaboration">
              <img src="/client_assets/images/thumbnails/W6RAX47pQZw.jpg" class="image" alt="" />
              <a href="https://youtu.be/W6RAX47pQZw" class="n_play_btn" target="_blank" rel="noopener noreferrer"><i class="uil uil-play"></i></a>
            </div>
          </div>
          <div class="col-12 col-lg-4 col-md-4">
            <div class="collaboration">
              <img src="/client_assets/images/thumbnails/8lNKIy6pLDw.jpg" class="image" alt="" />
              <a href="https://youtu.be/8lNKIy6pLDw" class="n_play_btn" target="_blank" rel="noopener noreferrer"><i class="uil uil-play"></i></a>
            </div>
          </div>
          <div class="col-12 col-lg-4 col-md-4">
            <div class="collaboration">
              <img src="/client_assets/images/thumbnails/NelRKV3Dt7g.jpg" class="image" alt="" />
              <a href="https://youtu.be/NelRKV3Dt7g" class="n_play_btn" target="_blank" rel="noopener noreferrer"><i class="uil uil-play"></i></a>
            </div>
          </div>
          <div class="col-12 col-lg-4 col-md-4">
            <div class="collaboration">
              <img src="/client_assets/images/thumbnails/76Ifwnu1rl0.jpg" class="image" alt="" />
              <a href="https://youtu.be/76Ifwnu1rl0" class="n_play_btn" target="_blank" rel="noopener noreferrer"><i class="uil uil-play"></i></a>
            </div>
          </div>
          <div class="col-12 col-lg-4 col-md-4">
            <div class="collaboration">
              <img src="/client_assets/images/thumbnails/tmDIDBw7QdY.jpg" class="image" alt="" />
              <a href="https://youtu.be/tmDIDBw7QdY" class="n_play_btn" target="_blank" rel="noopener noreferrer"><i class="uil uil-play"></i></a>
            </div>
          </div>
        </div>
        <div class="small_heading mt-5">
          <h1>TIMES MUSIC</h1>
          <hr class="text-white" />
        </div>

        <div class="row">
          <div class="col-12 col-lg-4 col-md-4">
            <div class="collaboration">
              <img src="/client_assets/images/thumbnails/wJvYSI7dqNQ.jpg" class="image" alt="" />
              <a href="https://youtu.be/wJvYSI7dqNQ" class="n_play_btn" target="_blank" rel="noopener noreferrer"><i class="uil uil-play"></i></a>
            </div>
          </div>
          <div class="col-12 col-lg-4 col-md-4">
            <div class="collaboration">
              <img src="/client_assets/images/thumbnails/nXac1Kq3YGQ.jpg" class="image" alt="" />
              <a href="https://youtu.be/nXac1Kq3YGQ" class="n_play_btn" target="_blank" rel="noopener noreferrer"><i class="uil uil-play"></i></a>
            </div>
          </div>
        </div>
        <div class="small_heading mt-5">
          <h1>RTV</h1>
          <hr class="text-white" />
        </div>

        <div class="row">
          <div class="col-12 col-lg-4 col-md-4">
            <div class="collaboration">
              <img src="/client_assets/images/thumbnails/Ucelgw3koko.jpg" class="image" alt="" />
              <a href="https://youtu.be/Ucelgw3koko" class="n_play_btn" target="_blank" rel="noopener noreferrer"><i class="uil uil-play"></i></a>
            </div>
          </div>
          <div class="col-12 col-lg-4 col-md-4">
            <div class="collaboration">
              <img src="/client_assets/images/thumbnails/3U-_UVwh-uQ.jpg" class="image" alt="" />
              <a href="https://youtu.be/3U-_UVwh-uQ" class="n_play_btn" target="_blank" rel="noopener noreferrer"><i class="uil uil-play"></i></a>
            </div>
          </div>
          <div class="col-12 col-lg-4 col-md-4">
            <div class="collaboration">
              <img src="/client_assets/images/thumbnails/OKGyJHkQLww.jpg" class="image" alt="" />
              <a href="https://youtu.be/OKGyJHkQLww" class="n_play_btn" target="_blank" rel="noopener noreferrer"><i class="uil uil-play"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Brand Collaboration -->
    <div class="background_dark_image" style="background-image: url('/client_assets/images/background/bg_blank.jpg')">

      <div class="container">
        <div class="heading_section mb-5">
          <!-- <h1 class="heading_title_white">Musical Collaboration</h1> -->
          <!-- <img src="/client_assets/images/png/underline_white.png" width="200" alt="" /> -->
          <h1 class="heading_title">Brand Collaboration</h1>
          <img src="/client_assets/images/png/underline.png" width="200" alt="" />
        </div>

        <div class="row mt-4">
          <div class="col-lg-3 col-md-3 col-sm-12 mx-auto">
            <div class="square-image">
              <img src="/client_assets/images/brand/1.jpg" alt="Square Image">
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-12 mx-auto">
            <div class="square-image">
              <img src="/client_assets/images/brand/2.jpg" alt="Square Image">
            </div>
          </div>
        </div>
      </div>





    </div>
    <!-- Brand Collaboration -->
    <div class="background_dark_image" style="background-image: url('/client_assets/images/background/bg_blank.jpg')">

      <div class="container">
        <div class="heading_section mb-5">
          <!-- <h1 class="heading_title_white">Musical Collaboration</h1> -->
          <!-- <img src="/client_assets/images/png/underline_white.png" width="200" alt="" /> -->
          <h1 class="heading_title">Media Coverage</h1>
          <img src="/client_assets/images/png/underline.png" width="200" alt="" />
        </div>

        <div class="row mt-4">
          <div class="col-lg-4 col-md-4 col-sm-12 mx-auto">
            <img src="/client_assets/images/news-media/1.jpg" width="100%" alt="">
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 mx-auto">
            <img src="/client_assets/images/news-media/3.jpg" width="100%" alt="">
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 mx-auto">
            <img src="/client_assets/images/news-media/4.jpg" width="100%" alt="">
          </div>
        </div>
      </div>





    </div>

    <img src="/client_assets/images/picture/band.jpg" width="100%" alt="">

    <!-- social -->
    <div class="background_dark_image" style="background-image: url('/client_assets/images/background/black_circle_bg.jpg')">

      <div class="container">
        <div class="heading_section mb-5">
          <h1 class="heading_title">POPULARITY IN
            SOCIAL WORLD</h1>
          <img src="/client_assets/images/png/underline.png" width="200" alt="" />
        </div>

        <div class="row mt-4">
          <div class="col-12 col-lg-6 col-md-6">
            <div class="social-section">
              <div class="hr-section">
                <div class="social_icon">
                  <a href="http://" target="_blank" rel="noopener noreferrer">
                    <i class="uil uil-facebook-f"></i>
                  </a>
                </div>
                <div class="social_icon">
                  <a href="http://" target="_blank" rel="noopener noreferrer">
                    <i class="uil uil-music"></i>
                  </a>
                </div>
                <div class="social_icon">
                  <a href="http://" target="_blank" rel="noopener noreferrer">
                    <i class="uil uil-twitter"></i>
                  </a>
                </div>
              </div>

              <div class="hr-section">
                <div class="social_icon">
                  <a href="http://" target="_blank" rel="noopener noreferrer">
                    <i class="uil uil-linkedin-alt"></i>
                  </a>
                </div>
                <div class="social_icon">
                  <a href="http://" target="_blank" rel="noopener noreferrer">
                    <i class="uil uil-youtube"></i>
                  </a>
                </div>
                <div class="social_icon">
                  <a href="http://" target="_blank" rel="noopener noreferrer">
                    <i class="uil uil-instagram"></i>
                  </a>
                </div>
              </div>

            </div>

            <div class="small_heading mt-5">
              <h1>AUDIO PLATFORMS</h1>
              <hr class="text-white" />
            </div>
            <div class="row">
              <div class="col-4 col-lg-3 col-md-3">
                <div class="audio-platform-logo">
                  <img src="/client_assets/images/logo/new-logo/Apple.png" width="100%" alt="">
                </div>
              </div>
              <div class="col-4 col-lg-3 col-md-3">
                <div class="audio-platform-logo">
                  <img src="/client_assets/images/logo/new-logo/Amazon.png" width="100%" alt="">
                </div>
              </div>
              <div class="col-4 col-lg-3 col-md-3">
                <div class="audio-platform-logo">
                  <img src="/client_assets/images/logo/new-logo/ganna.png" width="100%" alt="">
                </div>
              </div>
              <div class="col-4 col-lg-3 col-md-3">
                <div class="audio-platform-logo">
                  <img src="/client_assets/images/logo/new-logo/hungama.png" width="100%" alt="">
                </div>
              </div>
              <div class="col-4 col-lg-3 col-md-3">
                <div class="audio-platform-logo">
                  <img src="/client_assets/images/logo/new-logo/Jio_Sawan.png" width="100%" alt="">
                </div>
              </div>
              <div class="col-4 col-lg-3 col-md-3">
                <div class="audio-platform-logo">
                  <img src="/client_assets/images/logo/new-logo/Spotifay.png" width="100%" alt="">
                </div>
              </div>
              <div class="col-4 col-lg-3 col-md-3">
                <div class="audio-platform-logo">
                  <img src="/client_assets/images/logo/new-logo/wink.png" width="100%" alt="">
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6 col-md-6">
            <div class="social_about">
              <img src="client_assets/images/picture/15.jpg" width="100%" alt="">
              <p class="social_about_text">
                Mekhla Dasgupta has huge popularity in the social world. Her social
                platforms have a massive audience with 1.6 M+ followers on Facebook &
                63k+ followers on Instagram with a reach of 13,792,222 on facebook
                and 1,456,316 on Instagram.
              </p>
              <p class="social_about_text">
                Her popularity over Spotify is also remarkable with an audience base
                4,63,492 since 2019. With a subscriber count of over 94.4k and 9
                million views on her channel over the past few years, she has built a
                substantial following on YouTube.
              </p>
            </div>
          </div>
        </div>
      </div>





    </div>

    <?php include_once 'components/footer.php'; ?>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script src="/client_assets/js/main.js"></script>
  <script src="/client_assets/js/sticky-menu.js"></script>
</body>

</html>