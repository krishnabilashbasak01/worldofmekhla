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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" integrity="sha512-H9jrZiiopUdsLpg94A333EfumgUBpO9MdbxStdeITo+KEIMaNfHNvwyjjDJb+ERPaRS6DpyRlKbvPUasNItRyw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <!-- nav bar -->
    <?php include_once 'components/header.php'; ?>
    <!-- nav bar -->
    <div id="parchment">
        <div class="page-body pt-5">
            <div class="container">
                <div class="heading_section mt-5 mb-5">
                    <h1 class="heading_title">Gallery</h1>
                    <img src="/client_assets/images/png/underline.png" width="200" alt="" />
                </div>
                <div class="grid_list">
                    <?php

                    $list = glob("client_assets/images/gallery/*.*");
                    natsort($list);
                    foreach ($list as $image) {
                        echo '<div class="grid-item">
<a data-fancybox="gallery" href="' . $image . '"><img src="' . $image . '"></a>
</div>';
                    }


                    ?>
                </div>
            </div>
        </div>

        <?php include_once 'components/footer.php'; ?>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="/client_assets/js/main.js"></script>
    <script src="/client_assets/js/sticky-menu.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>