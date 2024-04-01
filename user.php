<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details - APRIC</title>
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
<?php
$i=0;
// $con = mysqli_connect('localhost','root','','ecommerce');
 $con = mysqli_connect('localhost','sutradin_apric','vdqnZzKf6wPsCKt ','sutradin_ecommerce');
$Record = mysqli_query($con , " SELECT * FROM `tbluser` ");
$row_count = mysqli_num_rows($Record);


?>
<div class="container">
    <div class="row">
        <div class="col-md-10">

        
 

    <table class="table table-secondary table-bordered m-4">
<thead class=" thead-dark text-center">
    <th>S.No</th>
    <th>Name</th>
    <th>Email</th>
    <th>Number</th>
    <th>Delete</th>
    <th>Orders</th>
  
</thead>
<tbody class="text-center text-danger">
    <?php
  while($row =mysqli_fetch_array($Record))  
  {
    echo "
    <tr>
    <td>";?><?php echo ++$i;?><?php echo"</td>
    <td>$row[Username]</td>
    <td>$row[Email]</td>
    <td>$row[Number]</td>
    <td><a href='delete.php?ID=$row[Id]' class='btn btn-outline-danger'>Delete</a></td>
    <td><a href = 'vieworder.php?$row[Id]' class='btn btn-outline-success'>View Order</a></td>
    </tr>
";

   }
?>
  </tbody>

    </table>
    </div>
    <div class="col-md-2 pr-5 text-center">
<h3 class="bg-dark text-white m-4">Total</h3>
<h1><?php echo"$row_count" ?></h1>

</div>
</div>
</div>
  </body>
</html>
