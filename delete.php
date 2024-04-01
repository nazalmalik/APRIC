<?php
echo $Id = $_GET['ID'];
// $con = mysqli_connect('localhost','root','','ecommerce');
 $con = mysqli_connect('localhost','sutradin_apric','vdqnZzKf6wPsCKt ','sutradin_ecommerce');
mysqli_query($con,"DELETE FROM `tbluser` WHERE Id= $Id");
// mysqli_query($con,"DELETE FROM `orders` WHERE Id= $Id");
header("location:user.php");
?>