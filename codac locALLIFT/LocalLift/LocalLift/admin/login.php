<?php
$page_title = "Admin Login";
require_once("../includes/header.php");
?>

<section class="auth-section">

<div class="container">

<div class="row justify-content-center">

<div class="col-lg-5">

<div class="auth-card">

<div class="text-center mb-4">

<img src="../assets/images/logo.png" width="90" class="mb-3">

<h2 class="fw-bold">

Admin Login

</h2>

<p class="text-muted">

Welcome Back Administrator

</p>

</div>

<form action="login_process.php" method="POST">

<div class="mb-3">

<label class="form-label">

Email Address

</label>

<div class="input-group">

<span class="input-group-text">

<i class="fa fa-envelope"></i>

</span>

<input
type="email"
name="email"
class="form-control"
placeholder="Enter Email"
required>

</div>

</div>

<div class="mb-3">

<label class="form-label">

Password

</label>

<div class="input-group">

<span class="input-group-text">

<i class="fa fa-lock"></i>

</span>

<input
type="password"
name="password"
id="password"
class="form-control"
placeholder="Enter Password"
required>

<button
class="btn btn-outline-secondary"
type="button"
onclick="togglePassword()">

<i class="fa fa-eye"></i>

</button>

</div>

</div>

<div class="d-flex justify-content-between mb-4">

<div>

<input
type="checkbox"
class="form-check-input"
id="remember">

<label for="remember">

Remember Me

</label>

</div>

<a href="#">

Forgot Password?

</a>

</div>

<div class="d-grid">

<button
type="submit"
class="btn btn-success btn-lg">

<i class="fa fa-right-to-bracket"></i>

Login

</button>

</div>

</form>

<hr>

<div class="text-center">

<a href="../index.php">

← Back to Website

</a>

</div>

</div>

</div>

</div>

</div>

</section>

<script>

function togglePassword(){

var x=document.getElementById("password");

if(x.type==="password"){

x.type="text";

}

else{

x.type="password";

}

}

</script>

<?php
require_once("../includes/footer.php");
?>