<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm sticky-top">

<div class="container">

<a class="navbar-brand d-flex align-items-center" href="<?php echo BASE_URL; ?>">

<img src="<?php echo BASE_URL; ?>assets/images/logo.png"
alt="LocalLift Logo"
style="height:65px;width:auto;object-fit:contain;">

<div class="ms-3">

<h3 class="m-0 fw-bold text-white">

LocalLift

</h3>

<small style="color:#bfc7d5;">

Fueling the Future of Local Commerce

</small>

</div>

</a>

<button class="navbar-toggler"
type="button"
data-bs-toggle="collapse"
data-bs-target="#navbarMenu">

<span class="navbar-toggler-icon"></span>

</button>

<div class="collapse navbar-collapse" id="navbarMenu">

<ul class="navbar-nav mx-auto">

<li class="nav-item">

<a class="nav-link <?=($current_page=="index.php")?"active":"";?>"
href="<?php echo BASE_URL;?>">

Home

</a>

</li>

<li class="nav-item">

<a class="nav-link" href="#">

Categories

</a>

</li>

<li class="nav-item">

<a class="nav-link" href="#">

Shops

</a>

</li>

<li class="nav-item">

<a class="nav-link" href="#">

Offers

</a>

</li>

<li class="nav-item">

<a class="nav-link" href="#">

About

</a>

</li>

<li class="nav-item">

<a class="nav-link" href="#">

Contact

</a>

</li>

</ul>

<div class="d-flex">

<a href="<?php echo BASE_URL;?>login.php"
class="btn btn-outline-light me-2">

Login

</a>

<a href="<?php echo BASE_URL;?>register.php"
class="btn btn-success">

Register Shop

</a>

</div>

</div>

</div>

</nav>