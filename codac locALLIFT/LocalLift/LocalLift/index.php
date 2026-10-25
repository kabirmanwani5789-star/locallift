<?php
$page_title = "Home";
require_once("includes/header.php");
require_once("includes/navbar.php");
?>

<!-- HERO SECTION -->

<section class="hero position-relative overflow-hidden">

<div class="hero-overlay"></div>

<div class="container">

<div class="row align-items-center min-vh-100">

<div class="col-lg-6">

<span class="shop-badge">
🚀 GPM's Trusted Local Business Platform
</span>

<h1 class="display-4 fw-bold mt-4">
Discover <span class="text-success">Local Businesses</span> Near You
</h1>

<p class="lead mt-4">
LocalLift helps people discover trusted local businesses across
Gaurella • Pendra • Marwahi.
</p>

<div class="mt-4">
<a href="register.php" class="btn btn-success btn-lg">Register Business</a>
<a href="#search" class="btn btn-outline-light btn-lg ms-3">Explore Businesses</a>
</div>

</div>

<div class="col-lg-6 text-center">
<img src="assets/images/hero.png" class="img-fluid hero-image">
</div>

</div>

</div>

</section>

<!-- SEARCH -->

<section id="search" class="py-5 bg-light">

<div class="container">

<div class="text-center mb-5">

<span class="shop-badge">Find Local Businesses</span>

<h2 class="section-title mt-3">
Search Businesses Across GPM
</h2>

<p class="section-subtitle">
Search verified businesses by name, category or location.
</p>

</div>

<div class="search-box">

<div class="row g-3">

<div class="col-lg-4">
<input type="text" class="form-control" placeholder="Business Name">
</div>

<div class="col-lg-3">
<select class="form-select">
<option>Select Category</option>
<option>Medical</option>
<option>Restaurant</option>
<option>Hotel</option>
<option>Gym</option>
<option>Salon</option>
<option>Education</option>
<option>Electronics</option>
</select>
</div>

<div class="col-lg-3">
<select class="form-select">
<option>Select Location</option>
<option>Pendra</option>
<option>Gaurella</option>
<option>Marwahi</option>
</select>
</div>

<div class="col-lg-2">
<button class="btn btn-success w-100">
Search
</button>
</div>

</div>

</div>

</div>

</section>

<!-- POPULAR CATEGORIES -->

<section id="categories" class="py-5">

<div class="container">

<div class="text-center mb-5">

<span class="shop-badge">
Popular Categories
</span>

<h2 class="section-title mt-3">
Explore Businesses by Category
</h2>

<p class="section-subtitle">
Discover trusted local businesses across GPM.
</p>

</div>

<div class="row g-4">

<!-- 8 Category Cards -->

<!-- Medical -->
<div class="col-lg-3 col-md-6">
<div class="category-card text-center">
<i class="fa-solid fa-briefcase-medical fa-3x text-success mb-3"></i>
<h4>Medical</h4>
<p>Hospitals & Medical Stores</p>
</div>
</div>

<!-- Restaurant -->
<div class="col-lg-3 col-md-6">
<div class="category-card text-center">
<i class="fa-solid fa-utensils fa-3x text-danger mb-3"></i>
<h4>Restaurant</h4>
<p>Hotels & Cafes</p>
</div>
</div>

<!-- Gym -->
<div class="col-lg-3 col-md-6">
<div class="category-card text-center">
<i class="fa-solid fa-dumbbell fa-3x text-primary mb-3"></i>
<h4>Gym</h4>
<p>Fitness Centers</p>
</div>
</div>

<!-- Education -->
<div class="col-lg-3 col-md-6">
<div class="category-card text-center">
<i class="fa-solid fa-graduation-cap fa-3x text-warning mb-3"></i>
<h4>Education</h4>
<p>Schools & Coaching</p>
</div>
</div>

<!-- Electronics -->
<div class="col-lg-3 col-md-6">
<div class="category-card text-center">
<i class="fa-solid fa-mobile-screen-button fa-3x text-info mb-3"></i>
<h4>Electronics</h4>
<p>Mobile & Laptop</p>
</div>
</div>

<!-- Fashion -->
<div class="col-lg-3 col-md-6">
<div class="category-card text-center">
<i class="fa-solid fa-shirt fa-3x text-secondary mb-3"></i>
<h4>Fashion</h4>
<p>Clothing Stores</p>
</div>
</div>

<!-- Salon -->
<div class="col-lg-3 col-md-6">
<div class="category-card text-center">
<i class="fa-solid fa-scissors fa-3x text-success mb-3"></i>
<h4>Salon</h4>
<p>Beauty Services</p>
</div>
</div>

<!-- Automobile -->
<div class="col-lg-3 col-md-6">
<div class="category-card text-center">
<i class="fa-solid fa-car fa-3x text-dark mb-3"></i>
<h4>Automobile</h4>
<p>Service Centers</p>
</div>
</div>

</div>

</div>

</section>
<!-- ===========================
      WEBSITE STATISTICS
=========================== -->

<section class="stats py-5">

<div class="container">

<div class="text-center mb-5">

<span class="shop-badge">
LocalLift Insights
</span>

<h2 class="section-title mt-3">
Growing Every Day
</h2>

<p class="section-subtitle">
Live statistics from LocalLift.
</p>

</div>

<div class="row g-4">

<div class="col-lg-3 col-md-6">
<div class="stat-card text-center">
<i class="fa-solid fa-store fa-3x text-success mb-3"></i>
<h2>0</h2>
<p>Businesses</p>
</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="stat-card text-center">
<i class="fa-solid fa-layer-group fa-3x text-primary mb-3"></i>
<h2>8</h2>
<p>Categories</p>
</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="stat-card text-center">
<i class="fa-solid fa-users fa-3x text-warning mb-3"></i>
<h2>0</h2>
<p>Customers</p>
</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="stat-card text-center">
<i class="fa-solid fa-circle-check fa-3x text-danger mb-3"></i>
<h2>0</h2>
<p>Verified Shops</p>
</div>
</div>

</div>

</div>

</section>

<!-- ===========================
      HOW LOCALLIFT WORKS
=========================== -->

<section class="py-5 bg-light">

<div class="container">

<div class="text-center mb-5">

<span class="shop-badge">
How It Works
</span>

<h2 class="section-title mt-3">
Grow Your Business In 4 Easy Steps
</h2>

</div>

<div class="row g-4">

<div class="col-lg-3 col-md-6">
<div class="feature-card text-center">
<h1 class="text-success">1</h1>
<i class="fa-solid fa-user-plus fa-3x text-success my-3"></i>
<h4>Register</h4>
<p>Create your business account.</p>
</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="feature-card text-center">
<h1 class="text-primary">2</h1>
<i class="fa-solid fa-circle-check fa-3x text-primary my-3"></i>
<h4>Verification</h4>
<p>Admin verifies your shop.</p>
</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="feature-card text-center">
<h1 class="text-warning">3</h1>
<i class="fa-solid fa-store fa-3x text-warning my-3"></i>
<h4>Go Live</h4>
<p>Your business becomes public.</p>
</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="feature-card text-center">
<h1 class="text-danger">4</h1>
<i class="fa-solid fa-chart-line fa-3x text-danger my-3"></i>
<h4>Grow</h4>
<p>Receive customer inquiries.</p>
</div>
</div>

</div>

</div>

</section>

<!-- ===========================
      WHY CHOOSE LOCALLIFT
=========================== -->

<section class="py-5">

<div class="container">

<div class="text-center mb-5">

<span class="shop-badge">
Why Choose LocalLift
</span>

<h2 class="section-title mt-3">
Why Businesses Trust Us
</h2>

</div>

<div class="row g-4">

</div>
<!-- ===========================
        OUR SERVICES
=========================== -->

<section class="py-5 bg-light">

<div class="container">

<div class="text-center mb-5">

<span class="shop-badge">
Our Services
</span>

<h2 class="section-title mt-3">
Helping Local Businesses Grow
</h2>

<p class="section-subtitle">
Everything needed to build your digital presence.
</p>

</div>

<div class="row g-4">

<div class="col-lg-4">
<div class="feature-card text-center">
<i class="fa-solid fa-store fa-3x text-success mb-3"></i>
<h4>Business Listing</h4>
<p>Register your business and appear in LocalLift search.</p>
</div>
</div>

<div class="col-lg-4">
<div class="feature-card text-center">
<i class="fa-solid fa-chart-column fa-3x text-primary mb-3"></i>
<h4>Analytics</h4>
<p>Track profile visits and customer engagement.</p>
</div>
</div>

<div class="col-lg-4">
<div class="feature-card text-center">
<i class="fa-solid fa-bullhorn fa-3x text-warning mb-3"></i>
<h4>Promotion</h4>
<p>Promote your business across GPM district.</p>
</div>
</div>

<div class="col-lg-4">
<div class="feature-card text-center">
<i class="fa-solid fa-envelope fa-3x text-info mb-3"></i>
<h4>Customer Inquiry</h4>
<p>Receive inquiries directly from customers.</p>
</div>
</div>

<div class="col-lg-4">
<div class="feature-card text-center">
<i class="fa-solid fa-layer-group fa-3x text-danger mb-3"></i>
<h4>Category Listing</h4>
<p>Businesses are grouped by categories.</p>
</div>
</div>

<div class="col-lg-4">
<div class="feature-card text-center">
<i class="fa-solid fa-mobile-screen-button fa-3x text-success mb-3"></i>
<h4>Responsive Platform</h4>
<p>Works perfectly on desktop, tablet and mobile.</p>
</div>
</div>

</div>

</div>

</section>

<!-- ===========================
      BUSINESS BENEFITS
=========================== -->

<section class="py-5">

<div class="container">

<div class="text-center mb-5">

<span class="shop-badge">
Business Benefits
</span>

<h2 class="section-title mt-3">
Why Businesses Join LocalLift
</h2>

</div>

<div class="row align-items-center">

<div class="col-lg-6">

<ul class="list-group list-group-flush">

<li class="list-group-item">✔ Increase Local Visibility</li>

<li class="list-group-item">✔ Reach More Customers</li>

<li class="list-group-item">✔ Build Digital Presence</li>

<li class="list-group-item">✔ Verified Business Profile</li>

<li class="list-group-item">✔ Easy Customer Connection</li>

<li class="list-group-item">✔ Professional Online Identity</li>

</ul>

</div>

<div class="col-lg-6 text-center">

<img src="assets/images/business-growth.png"
class="img-fluid"
alt="Business Growth">

</div>

</div>

</div>

</section>

<!-- ===========================
      FAQ SECTION
=========================== -->

<section class="py-5 bg-light">

<div class="container">

<div class="text-center mb-5">

<span class="shop-badge">
Frequently Asked Questions
</span>

<h2 class="section-title mt-3">
Got Questions?
</h2>

</div>

<div class="accordion" id="faqAccordion">

<div class="accordion-item">

<h2 class="accordion-header">

<button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#faq1">

What is LocalLift?

</button>

</h2>

<div id="faq1" class="accordion-collapse collapse show">

<div class="accordion-body">

LocalLift is a platform to discover trusted local businesses across Gaurella, Pendra and Marwahi.

</div>

</div>

</div>

<div class="accordion-item">

<h2 class="accordion-header">

<button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq2">

How can I register my business?

</button>

</h2>

<div id="faq2" class="accordion-collapse collapse">

<div class="accordion-body">

Create a Shop Owner account and submit your business for admin approval.

</div>

</div>

</div>

</div>

</div>

</section>

<!-- ===========================
      BECOME A PARTNER
=========================== -->

<section class="py-5">

<div class="container">

<div class="glass-card text-center p-5">

<i class="fa-solid fa-handshake fa-4x text-success mb-4"></i>

<h2>Become a LocalLift Business Partner</h2>

<p>
Join LocalLift and grow your digital presence across GPM.
</p>

<a href="register.php" class="btn btn-success btn-lg mt-3">
Register Your Business
</a>

</div>

</div>

</section>

<!-- ===========================
      CALL TO ACTION
=========================== -->

<section class="py-5 bg-success text-white">

<div class="container text-center">

<h2 class="fw-bold">
Ready to Discover Local Businesses?
</h2>

<p class="mt-3">
Search trusted businesses or register your own business today.
</p>

<div class="mt-4">

<a href="#search" class="btn btn-light btn-lg me-3">
Explore Businesses
</a>

<a href="register.php" class="btn btn-outline-light btn-lg">
Register Business
</a>

</div>

</div>

</section>

<?php
require_once("includes/footer.php");
?>