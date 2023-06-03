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

    <div id="parchment">

        <div class="page-body pt-5">
            <!-- <div class="background_dark"> -->
            <div class="container">
                <div class="heading_section mt-5">
                    <h1 class="heading_title">About Mekhla</h1>
                    <img src="/client_assets/images/png/underline.png" width="200" alt="" />
                </div>

                <ul class="nav nav-pills mb-5 mt-5" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link nv-black active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-biography" type="button" role="tab" aria-controls="pills-biography" aria-selected="true">
                            Biography
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link nv-black" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-recognition" type="button" role="tab" aria-controls="pills-recognition" aria-selected="false">
                            Recognition
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link nv-black" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-hobby" type="button" role="tab" aria-controls="pills-hobby" aria-selected="false">
                            Hobby
                        </button>
                    </li>
                </ul>
                <div class="tab-content " id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-biography" role="tabpanel" aria-labelledby="pills-biography-tab">
                        <div class="row mt-4">
                            <div class="col-12 col-lg-6">
                                <p class="about_text ">
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
                                    Pintu Das, Pranab Mukherjee, Tushar Dutta, and Bishwarup
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
                                <p class="mt-2 about_text">
                                    "Baje Bina" in "Dekh Kemon Lage" and has
                                    collaborated with several renowned
                                    composers like Jeet Gannguli, Indraadip
                                    Dasgupta, Debojyoti Mishra, Upali
                                    Chaopadhyay, Prabuddha Banerjee,
                                    Soumya Rit, Ranajoy Bhattachajee,
                                    Raghab Chatterjee, Amit Chatterjee,
                                    Barenya Saha. She has had the privilege of
                                    collaborating with some of the biggest
                                    names in the music industry, including
                                    Tseries, Zee Music Bangla, Svf, and Times
                                    Music, among others. Additionally, she
                                    produces, acts, and composes music for
                                    independent albums on her record label,
                                    "World of Mekhla."

                                </p>

                            </div>
                            <div class="col-12 col-lg-6">
                                <img src="/client_assets/images/picture/mekhla_about_1.png" width="100%" alt="Mekhla Dasgupta" />
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-recognition" role="tabpanel" aria-labelledby="pills-recognition-tab">
                        <div class="min-height-80">
                            <div class="row">
                                <div class="col-12 col-lg-6 col-md-6">
                                    <!-- Left -->
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
                                    <!-- Right -->
                                    <img src="/client_assets/images/picture/Picture12.jpg" width="80%" alt="" srcset="" />
                                </div>
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
        <?php include_once 'components/footer.php'; ?>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="/client_assets/js/main.js"></script>
    <script src="/client_assets/js/sticky-menu.js"></script>
</body>

</html>