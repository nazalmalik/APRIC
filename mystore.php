<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home Page - APRIC</title>
    <!-- bootstrap cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
  </head>
  <?php
session_start();
if(!$_SESSION['admin']){
  header("location:form/login.php");
}
  ?>
<body>
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
  <a class="navbar-brand"><h1>APRIC</h1></a>
 <span>
  <!-- <i class="fa fa-login"></i> -->
  <!-- <i class="fa fa-user-o" aria-hidden="true"></i> -->
  <i class="fas fa-user"></i>
  Hello , <?php echo $_SESSION['admin'];?>|
  <!-- <i class="fa fa-signout></i> -->
  <!-- <i class="fas fa-sign-out" aria-hidden="true"></i> -->
<i class="fas fa-sign-out-alt"></i>
<a href="form/logout.php">Logout |</a> 
<a href=" "> Admin</a> 
</span>
</div>
</nav> 
<div>
  <h2 class="text-center">Dashboard</h2>
</div>
<div class="col-md-7 bg-danger text-center m-auto">
<a href="product/index.php" class="text-white text-decoration-none fs-4 fw-bold px-5">Add Product</a>
<a href="user.php" class="text-white text-decoration-none fs-4 fw-bold px-5">Users</a>
<a href="orders.php" class="text-white text-decoration-none fs-4 fw-bold px-5">Orders</a>
<!-- <a href="pay_recp.php" class="text-white text-decoration-none fs-4 fw-bold px-5">Payment Receipt</a> -->

</div>
</body>
</html>