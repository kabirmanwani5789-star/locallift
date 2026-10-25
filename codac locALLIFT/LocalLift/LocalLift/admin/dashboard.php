<?php
require_once("header.php");
include("sidebar.php");

/* ==============================
   Dashboard Statistics
============================== */

$totalCategories = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) AS total FROM categories"))['total'];

$totalShops = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) AS total FROM shops"))['total'];

$totalOwners = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) AS total FROM shop_owners"))['total'];

$totalCustomers = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) AS total FROM customers"))['total'];

$pendingShops = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) AS total FROM shops WHERE status='Pending'"))['total'];

$approvedShops = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) AS total FROM shops WHERE status='Approved'"))['total'];

?>

<div class="main">

<div class="content">

<div class="container-fluid">

<h2 class="fw-bold mb-4">
Admin Dashboard
</h2>

<div class="row">

<!-- Categories -->

<div class="col-lg-4 col-md-6 mb-4">

<div class="card shadow border-0">

<div class="card-body text-center">

<i class="fa-solid fa-layer-group fa-3x text-success mb-3"></i>

<h5>Total Categories</h5>

<h2><?= $totalCategories ?></h2>

</div>

</div>

</div>

<!-- Shops -->

<div class="col-lg-4 col-md-6 mb-4">

<div class="card shadow border-0">

<div class="card-body text-center">

<i class="fa-solid fa-store fa-3x text-primary mb-3"></i>

<h5>Total Shops</h5>

<h2><?= $totalShops ?></h2>

</div>

</div>

</div>

<!-- Shop Owners -->

<div class="col-lg-4 col-md-6 mb-4">

<div class="card shadow border-0">

<div class="card-body text-center">

<i class="fa-solid fa-user-tie fa-3x text-warning mb-3"></i>

<h5>Total Shop Owners</h5>

<h2><?= $totalOwners ?></h2>

</div>

</div>

</div>

<!-- Customers -->

<div class="col-lg-4 col-md-6 mb-4">

<div class="card shadow border-0">

<div class="card-body text-center">

<i class="fa-solid fa-users fa-3x text-danger mb-3"></i>

<h5>Total Customers</h5>

<h2><?= $totalCustomers ?></h2>

</div>

</div>

</div>

<!-- Pending Shops -->

<div class="col-lg-4 col-md-6 mb-4">

<div class="card shadow border-0">

<div class="card-body text-center">

<i class="fa-solid fa-clock fa-3x text-info mb-3"></i>

<h5>Pending Shops</h5>

<h2><?= $pendingShops ?></h2>

</div>

</div>

</div>

<!-- Approved Shops -->

<div class="col-lg-4 col-md-6 mb-4">

<div class="card shadow border-0">

<div class="card-body text-center">

<i class="fa-solid fa-circle-check fa-3x text-success mb-3"></i>

<h5>Approved Shops</h5>

<h2><?= $approvedShops ?></h2>

</div>

</div>

</div>

</div>
<!-- ==============================
     RECENT SHOP OWNERS
================================ -->

<div class="row">

<div class="col-lg-6">

<div class="card shadow mb-4">

<div class="card-header bg-primary text-white">

<h5 class="mb-0">
Recent Shop Owners
</h5>

</div>

<div class="card-body">

<div class="table-responsive">

<table class="table table-hover">

<thead>

<tr>

<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Mobile</th>

</tr>

</thead>

<tbody>

<?php

$owners=mysqli_query($conn,"SELECT id,full_name,email,mobile FROM shop_owners ORDER BY id DESC LIMIT 5");

if(mysqli_num_rows($owners)>0){

while($row=mysqli_fetch_assoc($owners)){

?>

<tr>

<td><?= $row['id']; ?></td>

<td><?= $row['full_name']; ?></td>

<td><?= $row['email']; ?></td>

<td><?= $row['mobile']; ?></td>

</tr>

<?php

}

}else{

?>

<tr>

<td colspan="4" class="text-center">

No Shop Owners Found

</td>

</tr>

<?php } ?>

</tbody>

</table>

</div>

</div>

</div>

</div>

<!-- ==============================
     RECENT CUSTOMERS
================================ -->

<div class="col-lg-6">

<div class="card shadow mb-4">

<div class="card-header bg-success text-white">

<h5 class="mb-0">
Recent Customers
</h5>

</div>

<div class="card-body">

<div class="table-responsive">

<table class="table table-hover">

<thead>

<tr>

<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Mobile</th>

</tr>

</thead>

<tbody>

<?php

$customers=mysqli_query($conn,"SELECT id,full_name,email,mobile FROM customers ORDER BY id DESC LIMIT 5");

if(mysqli_num_rows($customers)>0){

while($row=mysqli_fetch_assoc($customers)){

?>

<tr>

<td><?= $row['id']; ?></td>

<td><?= $row['full_name']; ?></td>

<td><?= $row['email']; ?></td>

<td><?= $row['mobile']; ?></td>

</tr>

<?php

}

}else{

?>

<tr>

<td colspan="4" class="text-center">

No Customers Found

</td>

</tr>

<?php } ?>

</tbody>

</table>

</div>

</div>

</div>

</div>

</div>
<!-- ==============================
     PENDING SHOP APPROVALS
================================ -->

<div class="card shadow mb-4">

<div class="card-header bg-warning">

<h5 class="mb-0">
Pending Shop Approvals
</h5>

</div>

<div class="card-body">

<div class="table-responsive">

<table class="table table-hover table-bordered">

<thead class="table-light">

<tr>

<th>ID</th>
<th>Shop Name</th>
<th>Owner</th>
<th>Category</th>
<th>Status</th>
<th width="180">Action</th>

</tr>

</thead>

<tbody>

<?php

$shops=mysqli_query($conn,"
SELECT
shops.id,
shops.shop_name,
shops.status,
shop_owners.full_name,
categories.category_name
FROM shops
LEFT JOIN shop_owners ON shops.owner_id=shop_owners.id
LEFT JOIN categories ON shops.category_id=categories.id
WHERE shops.status='Pending'
ORDER BY shops.id DESC
LIMIT 5
");

if(mysqli_num_rows($shops)>0){

while($row=mysqli_fetch_assoc($shops)){

?>

<tr>

<td><?= $row['id']; ?></td>

<td><?= $row['shop_name']; ?></td>

<td><?= $row['full_name']; ?></td>

<td><?= $row['category_name']; ?></td>

<td>

<span class="badge bg-warning">
<?= $row['status']; ?>
</span>

</td>

<td>

<a href="approve_shop.php?id=<?= $row['id']; ?>" class="btn btn-success btn-sm">
Approve
</a>

<a href="reject_shop.php?id=<?= $row['id']; ?>" class="btn btn-danger btn-sm">
Reject
</a>

</td>

</tr>

<?php

}

}else{

?>

<tr>

<td colspan="6" class="text-center">

No Pending Shop Found

</td>

</tr>

<?php } ?>

</tbody>

</table>

</div>

</div>

</div>

<!-- ==============================
     QUICK ACTIONS
================================ -->

<div class="card shadow">

<div class="card-header bg-dark text-white">

<h5 class="mb-0">

Quick Actions

</h5>

</div>

<div class="card-body">

<a href="categories.php" class="btn btn-success m-2">
<i class="fa fa-layer-group"></i>
Categories
</a>

<a href="shop_owners.php" class="btn btn-primary m-2">
<i class="fa fa-user"></i>
Shop Owners
</a>

<a href="shops.php" class="btn btn-warning m-2">
<i class="fa fa-store"></i>
Shops
</a>

<a href="customers.php" class="btn btn-danger m-2">
<i class="fa fa-users"></i>
Customers
</a>

<a href="settings.php" class="btn btn-secondary m-2">
<i class="fa fa-cog"></i>
Settings
</a>

</div>

</div>

</div>

</div>

</body>

</html>