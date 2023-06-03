<?php

/*


phoenix_resizer_v2.php?src= &w=400
Version: 2.0
                                                                                                                  

*/



function siteURL()

{

    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

    $domainName = $_SERVER['HTTP_HOST'];

    return $protocol.$domainName;

}



header("Access-Control-Allow-Origin: ".siteURL());



if(strpos($_SERVER['HTTP_REFERER'], siteURL()) === false)

	die("Permission Denied!");



(!empty($_GET['src']))?($path=$_GET['src']):(die("Phoenix Resizer v2: Source Missing!"));

(!empty($_GET['w']))?($width=$_GET['w']):($width="auto");

(!empty($_GET['h']))?($height=$_GET['h']):($height="auto");

(!empty($_GET['q']))?($quality=$_GET['q']):($quality=80);



$extension = strtolower(pathinfo($path, PATHINFO_EXTENSION));

	

switch($extension)

{

	case "jpg":

	case "jpeg":

		$image = imagecreatefromjpeg($path);

		break;

	case "png":

		$image = imagecreatefrompng($path);			

		break;

	default:

		die("Please provide a valid image! Only jpg, jpeg and png images are supported!");

}



list($defwidth, $defheight) = getimagesize($path);



if(($width == "auto") && ($height == "auto"))

	die("<strong>Phoenix Image Resizer Error:</strong> You must pass either width or height, at least.");



if($width != "auto")

{

	$new_width = $width;

	

	if($height != "auto")

	{

		$new_height = $height;

	}

	else

	{

		$new_height = $new_width*$defheight/$defwidth;

	}

}

elseif($height != "auto")

{

	$new_height = $height;

	

	if($width != "auto")

	{

		$new_width = $width;

	}

	else

	{

		$new_width = $new_height*$defwidth/$defheight;

	}

}



if($extension == "png")

{

	$png = imagecreatetruecolor($new_width, $new_height);

	imagealphablending($png, false );

	imagesavealpha($png, true );

	imagecopyresampled( $png, $image, 

                   0, 0, 

                   0, 0, 

                   $new_width, $new_height, 

                   $defwidth, $defheight);

}

else

{

	$image = imagescale($image, $new_width, $new_height);

}



if($extension == "jpg" || $extension == "jpeg")

{

	header("Content-type: image/jpeg");

	imagejpeg($image, NULL, $quality);

}

elseif($extension == "png")

{

	header("Content-type: image/png");

	imagepng($png, NULL, 9);

	imagedestroy($png);

}



imagedestroy($image);



/*



Simply use like so: <img src="phoenix_resizer_v2.php?src=slider/1.jpg&w=480" />



*/



?>