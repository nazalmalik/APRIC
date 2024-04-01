<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APRIC</title>
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
$i = 0;
// $con = mysqli_connect('localhost', 'root', '', 'ecommerce');
 $con = mysqli_connect('localhost','sutradin_apric','vdqnZzKf6wPsCKt ','sutradin_ecommerce');
$Record = mysqli_query($con, "SELECT * FROM `orders`");
$row_count = mysqli_num_rows($Record);
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-secondary table-bordered m-4">
                <thead class="thead-dark text-center">
                    <th>S.No</th>
                    <th>Name</th>
                    <th>Number</th>
                    <th>Email</th>
                    <th>Method</th>
                    <!-- <th>Image</th> -->
                    <th>Address</th>
                    <th>Order Time</th>
                    <th>Orders</th>
                    <th>Delete</th>
                </thead>
                <tbody class="text-center text-danger">
                    <?php
                    while ($row = mysqli_fetch_array($Record)) {
                        $i++;
                        $orderId = $row['id'];
                        $name = $row['name'];
                        $number = $row['number'];
                        $email = $row['email'];
                        $method = $row['method'];
                        $address = $row['flat'] . ', ' . $row['street'] . ', ' . $row['city'] . ', ' . $row['state'] . ', ' . $row['country'] . ' - ' . $row['state_code'];
                        $orderTime = $row['created_at'];

                        echo "
                        <tr>
                            <td>$i</td>
                            <td>$name</td>
                            <td>$number</td>
                            <td>$email</td>
                            <td>$method";

                        // If payment method is 'credit card', show the payment image
                        // echo "<td>";
// if ($method == 'credit card') {
//     echo "<a href='pay_recp.php?id=$orderId'>View Payment Receipt</a><br>";

//     // Check if there are payment images for the order
//     $result = $con->query("SELECT * FROM payment_images WHERE order_id = $orderId");
//     if ($result->num_rows > 0) {
//         echo "<img src='pay_recp.php?id=$orderId' alt='Payment Image' style='max-width: 100px;'>";
//     } else {
//         echo "No Payment Image";
//     }
// } else {
//     echo "-";
// }
// echo "</td>";

                        echo "</td>
                            <td>$address</td>
                            <td>$orderTime</td>
                            <td><a href='order_details.php?id=$orderId'>View Details</a></td>
                            <td><a href='delete_order.php?ID=$orderId' class='btn btn-outline-danger'>Delete</a></td>
                        </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="col-md-5 pr-5 text-center">
            <h3 class="bg-dark text-white m-4">Total Orders</h3>
            <h1><?php echo "$row_count" ?></h1>
        </div>
    </div>
</div>

  </body>
</html>
