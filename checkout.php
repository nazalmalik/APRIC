<?php
session_start();

// Database connection
// $con = mysqli_connect('localhost', 'root', '', 'ecommerce');
$con = mysqli_connect('localhost','sutradin_apric','vdqnZzKf6wPsCKt ','sutradin_ecommerce');
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the user is logged in
// if (!isset($_SESSION['user'])) {
//     header('location: login.php'); // Redirect to the login page if the user is not logged in
//     exit();
// }

// Retrieve the total from the session
$total = isset($_SESSION['total']) ? $_SESSION['total'] : 0;

// Initialize total quantity and total subtotal
$totalQuantity = 0;
$totalSubtotal = 0;

// Check if the order form is submitted
if (isset($_POST['order_btn'])) {
    // Get user information from the form
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $number = mysqli_real_escape_string($con, $_POST['number']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $method = mysqli_real_escape_string($con, $_POST['method']);
    $flat = mysqli_real_escape_string($con, $_POST['flat']);
    $street = mysqli_real_escape_string($con, $_POST['street']);
    $city = mysqli_real_escape_string($con, $_POST['city']);
    $state = mysqli_real_escape_string($con, $_POST['state']);
    $country = mysqli_real_escape_string($con, $_POST['country']);
    $state_code = mysqli_real_escape_string($con, $_POST['state_code']);
    $total_products = mysqli_real_escape_string($con, $_POST['total_products']);
    $total_price = mysqli_real_escape_string($con, $_POST['total_price ']);

    // Insert order information into the database
    $insertOrderQuery = "INSERT INTO orders (name, number, email, method, flat, street, city, state, country, state_code, total_products, total_price) VALUES ('$name', '$number', '$email', '$method', '$flat', '$street', '$city', '$state', '$country', '$state_code', '$totalQuantity', '$total')";

    if (mysqli_query($con, $insertOrderQuery)) {
        // Get the order ID for linking with order_items table
        $orderID = mysqli_insert_id($con);

        // Insert product details into the order_items table
        if (isset($_SESSION['cart'])) {
          foreach ($_SESSION['cart'] as $value) {
              $productName = mysqli_real_escape_string($con, $value['productName']);
              
              // Fetch PSale price from the database
              $fetchPriceQuery = mysqli_query($con, "SELECT PSale FROM tblproduct WHERE PName = '$productName'");
              $fetchPriceResult = mysqli_fetch_assoc($fetchPriceQuery);
              $productPrice = (float) $fetchPriceResult['PSale'];

              $productQuantity = $value['productQuantity'];
              $subtotal = $productQuantity * $productPrice;

              // Insert data into order_items
              $insertProductQuery = "INSERT INTO order_items (order_id, product_name, product_quantity, subtotal) VALUES ('$orderID', '$productName', '$productQuantity', '$subtotal')";
              mysqli_query($con, $insertProductQuery);

              // Accumulate total quantity and total subtotal
              $totalQuantity += $productQuantity;
              $totalSubtotal += $subtotal;
          }
      }

        // Redirect to the credit card page after order insertion
        if ($method === 'credit card') {
            header('location: credit_card.php?order_id=' . $orderID);
            exit();
        }

        // Process other payment methods or perform any other necessary actions
        // ...

        // After processing, redirect to a thank you page or order confirmation page
        header('location: thank_you.php');
        exit();
    } else {
        echo "Error: " . $insertOrderQuery . "<br>" . mysqli_error($con);
    }
}

// Close the database connection

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>checkout</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../user/style.css">
   <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 800px;
      margin: 20px auto;
      background-color: #fff;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      border-radius: 5px;
    }

    form {
      max-width: 600px;
      margin: 0 auto;
    }

    .total {
      display: block;
      background-color: #4CAF50;
      color: #fff;
      padding: 10px;
      text-align: center;
      margin-bottom: 20px;
    }

    .flex {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
    }

    .inputBox {
      width: calc(50% - 10px);
      margin-bottom: 15px;
    }

    .inputBox span {
      display: block;
      margin-bottom: 5px;
      color: #555;
    }

    input, select {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      box-sizing: border-box;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .btn {
      background-color: #4CAF50;
      color: #fff;
      padding: 10px 15px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      width: 140px;
      font-size: medium;
     
    }

    .btn:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
   <!-- <h1 class="heading" >Complete Your Order</h1> -->
<h1 class="heading" style="color: #4CAF50; text-align: center; font-size: 24px; margin-bottom: 20px;">Place Your Order</h1>
 <div class="container">
<form action="" method="post">
<div class="display-order">
    <div class="row">
        <div class="col-md-8 order-details">
        <?php
            // Display selected items and their quantities
            if (isset($_SESSION['cart'])) {
                foreach ($_SESSION['cart'] as $value) {
                    $productName = mysqli_real_escape_string($con, $value['productName']);
                    
                    // Fetch PSale price from the database
                    $fetchPriceQuery = mysqli_query($con, "SELECT PSale FROM tblproduct WHERE PName = '$productName'");
                    $fetchPriceResult = mysqli_fetch_assoc($fetchPriceQuery);
                    $productPrice = (float) $fetchPriceResult['PSale'];
                    
                    $subtotal = $value['productQuantity'] * $productPrice;
                    $totalQuantity += $value['productQuantity']; // Accumulate total quantity
                    $totalSubtotal += $subtotal; // Accumulate total subtotal

                    echo "
                    <div class='mb-3 order-item'>
                        <p><strong>Item:</strong> {$value['productName']}</p>
                        <p><strong>Quantity:</strong> {$value['productQuantity']}</p>
                    </div>";
                }
            }
            
            ?>
        </div>

        <!-- Display total -->
        <div class="col-md-4 order-summary">
            <div class="text-center">
                <h3>Total Quantity: <?php echo $totalQuantity ?></h3>
                <h3>Total: <?php echo number_format($totalSubtotal, 2) ?></h3>
            </div>
        </div>
    </div>
</div>


</div>
      




<div class="container">
<div class="flex">
         <div class="inputBox">
            <span>Your Name</span>
            <input type="text" placeholder="Enter Your Name" name="name" required>
         </div>
         <div class="inputBox">
            <span>Your Number</span>
            <input type="number" placeholder="Enter Your Number" name="number" required>
         </div>
         <div class="inputBox">
            <span>Your Email</span>
            <input type="email" placeholder="Enter Your Email" name="email" required>
         </div>
         <div class="inputBox">
            <span>Payment Method</span>
            <select name="method">
               <option value="cash on delivery" selected>Cash on Devlivery</option>
       <option value="credit card">Credit Card</option>     
            </select>
         </div>
         <div class="inputBox">
            <span>Address 1</span>
            <input type="text" placeholder="e.g. House No." name="flat" required>
         </div>
         <div class="inputBox">
            <span>Address 2</span>
            <input type="text" placeholder="e.g. Street Name" name="street" required>
         </div>
         <div class="inputBox">
            <span>City</span>
            <input type="text" placeholder="e.g. Lahore " name="city" required>
         </div>
         <div class="inputBox">
            <span>State</span>
            <input type="text" placeholder="e.g. Punjab" name="state" required>
         </div>
         <div class="inputBox">
            <span>Country</span>
            <input type="text" placeholder="e.g. Pakistan" name="country" required>
         </div>
         <div class="inputBox">
            <span>State code</span>
            <input type="text" placeholder="e.g. 123456" name="state_code" required>
         </div>
         <input type="submit" value="order now" name="order_btn" class="btn">
        </div>
</div>
</div>
     
   </form>

</section>

</div>

<!-- custom js file link  -->
<!-- Add this script in the head section or at the end of the body section -->


<!-- Modify your form -->
<!-- <form action="" method="post" id="orderForm">
     Your existing form fields -->

    <!-- <input type="submit" value="order now" name="order_btn" class="btn" onclick="submitForm()">
</form> -->

</body>
</html>