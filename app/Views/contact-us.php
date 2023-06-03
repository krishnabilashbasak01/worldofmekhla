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

  <div class="page-body ">


    <!-- <div class="background_gradient"> -->
    <div class="background_dark_image mt-4" style="background-image: url('/client_assets/images/background/bg_blank.jpg')">
      <div class="min-height-80">
        <div class="container">
          <div class="heading_section mt-4">
            <h1 class="heading_title_white">CONTACT US</h1>
            <img src="/client_assets/images/png/underline_white.png" width="200" alt="" />
          </div>

          <div class="row mt-4">
            <div class="col-12 col-lg-6 col-md-6 text-white">
              <h5 class="text-black">"Feel free to reach out to us anytime. We're here to assist you and answer any questions you may have. Contact us today!"</h5>

              <hr>
              <p class="social-link">
                Kolkata 700000,
                xyz street
              </p>
              <a class="social-link" href="mailto:contact@worldofmekhla.com"><i class="uil uil-envelope"></i> contact@worldofmekhla.com</a>
              <br>
              <a class="social-link" href="tel:+910000000000"><i class="uil uil-mobile-android"></i> +91 0000 0000 00</a>

            </div>
            <div class="col-12 col-lg-6 col-md-6">
              <form action="">
                <h2 class="mb-4 text-white">Write us your query</h2>
                <div class="row">
                  <div class="col-12 col-lg-6 col-md-6"><input class="my-custom-input" type="text" name="name" placeholder="Enter Your name"></div>
                  <div class="col-12 col-lg-6 col-md-6"><input class="my-custom-input" type="text" name="contact_no" placeholder="Enter Your Contact"></div>
                  <div class="col-12 col-lg-12 col-md-12">
                    <input class="my-custom-input" type="email" name="email" placeholder="Enter Your Email">
                  </div>
                  <div class="col-12 col-lg-12 col-md-12">
                    <inpu class="my-custom-input" t type="text" name="subject" placeholder="Enter Your Subject">
                  </div>
                  <div class="col-12 col-lg-12 col-md-12">
                    <textarea class="my-custom-input" name="queery" id="" cols="30" rows="5" placeholder="Write us your query"></textarea>
                  </div>
                  <div class="col">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                  
                </div>





              </form>
            </div>

          </div>

        </div>
      </div>
    </div>


  </div>

  <?php include_once 'components/footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script src="/client_assets/js/main.js"></script>
  <script src="/client_assets/js/sticky-menu.js"></script>
</body>

</html>