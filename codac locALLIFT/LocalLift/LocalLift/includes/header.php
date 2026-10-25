<?php
/*
|--------------------------------------------------------------------------
| LocalLift Header
|--------------------------------------------------------------------------
| Author  : Kabir
| Version : 1.0
|--------------------------------------------------------------------------
*/

require_once __DIR__ . "/../config/constants.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport"
      content="width=device-width, initial-scale=1.0">

<title>
<?php
echo isset($page_title)
? $page_title . " | " . SITE_NAME
: SITE_NAME . " | " . SITE_TAGLINE;
?>
</title>

<meta name="description"
content="LocalLift - Hyperlocal Business Discovery Platform">

<meta name="keywords"
content="LocalLift, Business, Local Shops, Directory">

<meta name="author"
content="Kabir Manwani">

<meta name="theme-color"
content="#0F172A">

<meta name="robots"
content="index,follow">

<!-- Bootstrap -->

<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">

<!-- Bootstrap Icons -->

<link
rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<!-- Font Awesome -->

<link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

<!-- Google Font -->

<link
href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
rel="stylesheet">

<!-- AOS Animation -->

<link
href="https://unpkg.com/aos@2.3.4/dist/aos.css"
rel="stylesheet">

<!-- SweetAlert -->

<link
rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

<!-- Custom CSS -->

<link
rel="stylesheet"
href="<?php echo BASE_URL; ?>assets/css/style.css">

<!-- Favicon -->

<link
rel="icon"
href="<?php echo BASE_URL; ?>assets/images/logo.png">

</head>

<body>

<!-- Page Loader -->

<div id="preloader">

<div class="loader"></div>

</div>

<div class="wrapper"></div>