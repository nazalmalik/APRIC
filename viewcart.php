<?php
// Start the session
session_start();

// Database connection
// $con = mysqli_connect('localhost', 'root', '', 'ecommerce');
$con = mysqli_connect('localhost','sutradin_apric','vdqnZzKf6wPsCKt ','sutradin_ecommerce');
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['update_update_btn'])) {
    $update_value = $_POST['update_quantity'];
    $update_id = $_POST['update_quantity_id'];
    $update_quantity_query = mysqli_query($con, "UPDATE `cart` SET quantity = '$update_value' WHERE id = '$update_id'");
    if ($update_quantity_query) {
        header('location: cart.php');
        exit(); // Ensure no further code execution after redirection
    }
}

if (isset($_POST['update_quantity_btn'])) {
    $update_product_name = $_POST['update_product_name'];
    $new_quantity = $_POST['new_quantity'];

    // Update the session with the new quantity
    if (isset($_SESSION['cart'][$update_product_name])) {
        $_SESSION['cart'][$update_product_name]['productQuantity'] = $new_quantity;
    }
}

if (isset($_POST['remove'])) {
    // Handle delete logic here
    $productName = $_POST['PName'];

    // Perform delete query based on your table structure
    $deleteQuery = "DELETE FROM cart WHERE product_name = '$productName'";
    mysqli_query($con, $deleteQuery);
}

if (isset($_GET['remove'])) {
    $remove_id = $_GET['remove'];
    mysqli_query($con, "DELETE FROM `cart` WHERE id = '$remove_id'");
    header('location: viewcart.php');
    exit(); // Ensure no further code execution after redirection
}

if (isset($_GET['delete_all'])) {
    mysqli_query($con, "DELETE FROM `cart`");
    header('location: viewcart.php');
    exit(); // Ensure no further code execution after redirection
}

// Display the cart items
$total = 0;
$ptotal = 0;
$i = 0;

if (isset($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $key => $value) {
        $productName = mysqli_real_escape_string($con, $value['productName']);
        $fetchPriceQuery = mysqli_query($con, "SELECT PSale FROM tblproduct WHERE PName = '$productName'");
        $fetchPriceResult = mysqli_fetch_assoc($fetchPriceQuery);

        // Calculate the total using the fetched PSale value
        $productPrice = (float) $fetchPriceResult['PSale'];
        $ptotal = $productPrice * (int) $value['productQuantity'];
        $total += $ptotal;
        $i = $key + 1;

        // Insert item into the database
        $productName = mysqli_real_escape_string($con, $value['productName']);
        $productPrice = (float) $value['productPrice'];
        $productQuantity = (int) $value['productQuantity'];
        $productSize = mysqli_real_escape_string($con, $value['productSize']);

        // Insert the item into the 'cart' table
        $insertQuery = "INSERT INTO cart (product_name, price, quantity, size) 
                        VALUES ('$productName', $productPrice, $productQuantity, '$productSize')";
        mysqli_query($con, $insertQuery);
    }
}

// Close the database connection
if (isset($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $key => $value) {
        // Fetch PSale column from the database for the product
    }
}



// Close the database connection

?>


<!-- Your HTML code continues below -->
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ... (rest of your head section) ... -->
    <link rel="stylesheet" href="style.css">
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="font-awesome.css">

<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->

<link rel="stylesheet" href="templatemo-hexashop.css">

<link rel="stylesheet" href="owl-carousel.css">

<link rel="stylesheet" href="lightbox.css">

<!-- <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet"> -->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">   
<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha384-rf4lV4ZOZfU4a6qONq0EKQCvPT+2o2D5NUei1pAAEljjy5XKn28Pe5K5tqhuBjCC" crossorigin="anonymous">

<!-- Owl Carousel CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">


<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyFPaB98aUuAXPIfA+7By8jblRSNvm8Jah" crossorigin="anonymous"></script>
<style>
.whatsapp_main {
    position: fixed;
    bottom: 60px;
    left:auto; /* Reset the left property */
    right: -880px; /* Adjust the right property */
    z-index: 1000;
}

.whatsapp-btn {
    max-width: 20%;
    width: 7%; /* Ensures the button is responsive */
}

</style>


</head>
<body>

    <div class="container-fluid" style="background-color:#2a2a2a;"> 
<div class="row"> 
    <div class="col-md-7"> 
        <div class="d-flex" style="color: white;"> 
        <span>
             info@sutradingco.com | +923004301860 | +923154165482 
            </span>
         </div>
         </div> 
<div class="col-md-5 text-right"> <div class="d-flex" style="color: white; ">
 <span > <i class="fas fa-user m-2"></i>Hello,
  <?php 
//   session_start(); 
  if(isset($_SESSION['user'])){ 
    echo $_SESSION['user']; 
    echo" |<a href='form/logout.php' class='text-white text-decoration-none pe-2 m-3'><i class='fas fa-sign-in-alt m-2'></i>Logout</a> "; 
    } 
    else{
     echo" |<a href='form/login.php' class='text-white text-decoration-none pe-2 m-3'><i class='fas fa-sign-in-alt m-2'></i>Login</a> "; 
     } ?>
|<a href="viewcart.php" class="text-white text-decoration-none pe-2 m-3"><i class="fas fa-shopping-cart m-2"></i>Cart</a> 
| <a href="../mystore.php" class="text-white text-decoration-none pe-7 m-3 ">Admin</a> </span>

</div>
 </div>
 </div> 
</div>
<nav class="navbar navbar-expand-lg " style="background-color: black;">
  <a class="navlogo" href="header.php"><img src="images/logo.jpg"  height="50px" ></a>
  <button style="background-color: white ;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span style="background-color: black ; " class="navbar-toggler-icon "  ></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto " style="margin-left: 40%;  padding: 6px;">
      <li class="nav-item " >
        <a class="nav-link" href="header.php"style="color: white; padding-left:-5px; margin-left:-5px;" >ABOUT US</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false" style="color: white; margin-left:4px;">
          MEN'S
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="menjeans.php">Jeans</a>
          <a class="dropdown-item" href="menjacket.php" >Jacket</a>
          <a class="dropdown-item" href="menshirt.php">Shirts</a>
          <!-- <a class="dropdown-item" href="menunderwear.php">UnderWear</a> -->
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false"style="color:white; margin-left:4px;">
          WOMEN'S
        </a>
        <div class="dropdown-menu">
        <a class="dropdown-item" href="womenjeans.php">Jeans</a>
          <!-- <a class="dropdown-item" href="womenjacket..php">Jacket</a> -->
          <a class="dropdown-item" href="womenshirt.php">Shirts</a>
          <!-- <a class="dropdown-item" href="womenclothe.php">Clothes</a> -->
          <a class="dropdown-item" href="womengown.php">Bridal Gowns</a>
          <a class="dropdown-item" href="womenundergarment.php">Women Undergarments</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false"style="color: white; margin-left:4px;">
          KID'S
        </a>
        <div class="dropdown-menu">
        <a class="dropdown-item" href="kid.php">Jeans & Shirts</a>
          <!-- <a class="dropdown-item" href="kidjacket.php">Jacket</a>
          <a class="dropdown-item" href="kidshirt.php">Shirts</a> -->
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false"style="color: white; margin-left:4px;">
          HOME
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="towel.php">Towel</a>
          <a class="dropdown-item" href="socks.php">Socks</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="wholesale.php"style="color: white; margin-left:4px;">WHOLESALE</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php"style="color: white; margin-left:4px;">CONTACT US</a>
      </li>
    </ul>
  </div>
</nav>

    <!-- ... (rest of your body section) ... -->
    <div class="whatsapp_main">
    <a href="https://wa.me/923280809483" target="_blank">
        <img src="../user/images/whatsapp.png" class="whatsapp-btn" alt="WhatsApp" />
    </a>
    </div>
    <!-- <div class="container">
        <div class="row justify-content-around">
            <div class="col-sm-12 col-md-4 col-lg-9">
                <table class="table table-bordered text-center"> -->
                    <!-- ... (existing table structure) ... -->
                    <div class="container">
    <div class="row">
     <div class="col-lg-11 text-center bg-light mb-5 rounded ">
    <h1 class="text-black ">My Cart</h1>
     </div>
    </div>
   </div> 
                    <div class="container" style="margin-top: 50px;">
    <div class="row justify-content-around">
        <div class="col-sm-12 col-md-4 col-lg-9">
            <table class="table  text-center">
                <thead class="  fs-5">
                    <th>Serial No</th>
                    <th>Product Name</th>
                    <th>Product Price</th>
                    <th>Product Quantity</th>
                    <th>Total Price</th>
                    <th>Update</th>
                    <th>Delete</th>
                </thead>

                    <tbody>
                        <?php
                       
                        $ptotal = 0000;
                        $total = 0;
                        $i = 0;
                        if (isset($_SESSION['cart'])) {
                            foreach ($_SESSION['cart'] as $key => $value) {
                                $productName = mysqli_real_escape_string($con, $value['productName']);
                                $fetchPriceQuery = mysqli_query($con, "SELECT PSale FROM tblproduct WHERE PName = '$productName'");
                                $fetchPriceResult = mysqli_fetch_assoc($fetchPriceQuery);
                    
                                // Calculate the total using the fetched PSale value
                                $productPrice = (float) $fetchPriceResult['PSale'];
                                $ptotal = $productPrice * (int) $value['productQuantity'];
                                $total += $ptotal;
                                $i = $key + 1;
                    
                                // Insert item into the database
                                $productName = mysqli_real_escape_string($con, $value['productName']);
                                $productQuantity = (int) $value['productQuantity'];
                                $productSize = mysqli_real_escape_string($con, $value['productSize']);
                    
                                // Insert the item into the 'cart' table
                                $insertQuery = "INSERT INTO cart (product_name, price, quantity, size) 
                                                VALUES ('$productName', $productPrice, $productQuantity, '$productSize')";
                                mysqli_query($con, $insertQuery);
                    
                                echo "
                                <form action='Insertcart.php' method='POST'>
                                    <tr>
                                        <td>$i</td>
                                        <td><input type='hidden' name='PName' value='$value[productName]'>$value[productName]</td>
                                        <td><input type='hidden' name='PPrice' value='$productPrice'>$productPrice</td>
                                        <td><input type='number' name='PQuantity' value='$value[productQuantity]' style='width: 50px;'></td>
                                        <td>$ptotal</td>
                                        <td><button name='update' class='btn-success'>Update</button></td>
                                        <td><button name='remove' class='btn-danger'>Delete</button></td>
                                        <td><input type='hidden' name='item' value='$value[productName]'></td>
                                    </tr>
                                </form>";
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>

            <div class="col-lg-3 text-center bodered">
                <div class="container-fluid bodered">
                    <h3 class="bg-dark text-white">Total</h3>
                    <h1 class="text-black">PKR<?php echo number_format($total, 2) ?></h1>
                     <button class="btn btn-primary btn-block mt-3" onclick="location.href='checkout.php'">Checkout</button>
                    
                </div>
            </div>
        </div>
    </div>
    <footer style="background-color: black; margin-top:80px;">
        <div class="container" style="background-color: black;">
            <div class="row"style="background-color: black; margin-left:7px;">
                <div class="col-lg-4 " style="background-color: black;">
                    <div class="first-item">
                        <div class="logo">
                        <img src="images/logo.jpg"  height="70px" > 
                            <!-- <img src="" alt="hexashop ecommerce templatemo"> -->
                         </div>
                        <ul>
                            <li style="color: white;">House No.880, A Block, Central Park Housing Society,  Ferozepur Road , Lahore</li>
                            <li style="color: white;">info@sutradingco.com</li>
                            <li style="color: white;">+923154165482</li>
                            <li style="color: white;">+923004301860</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4"style="background-color: black; margin-top:30px">
                    <h4>Shopping &amp; Categories</h4>
                    <ul>
                        <li><a href="menjeans.php">Men’s Shopping</a></li>
                        <li><a href="womenjeans.php">Women’s Shopping</a></li>
                        <li><a href="towel.php">Home Shopping</a></li>
                <li><a href="kid.php">Kid’s Shopping</a></li>
                    </ul>
                </div>
                <div class="col-lg-4"style="background-color: black; margin-top:30px;  ">
                    <h4>About</h4>
                    <ul>
                        <!-- <li>Homepage</a></li> -->
                        <li><a href="header.php">About Us</a></li>
                        <li><a href="help.php">Help</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                    </ul> 
                </div>
                <!-- <div class="col-lg-3"style="background-color: black;">
                    <h4>Help &amp; Information</h4>
                    <ul>
                        <li>Help</a></li>
                        <li>FAQ's</a></li>
                        <li>Shipping</a></li>
                        <li>Tracking ID</a></li>
                    </ul>
                </div> -->
                <div class="col-lg-12">
                    <div class="under-footer">
                        <p>Copyright © 2024 APRIC Co., Ltd. All Rights Reserved. </p>
                        
                        <!-- <br>Design: <a href="https://templatemo.com" target="_parent" title="free css templates">TemplateMo</a></p> -->
                        <ul>
    <li><a href="https://www.facebook.com/profile.php?id=61556679121830"><i class="fab fa-facebook"></i></a></li>
    <!-- <li><i class="fab fa-twitter"></i></a></li> -->
    <li><a href="https://www.instagram.com/theaprican/"><i class="fab fa-instagram"></i></a></li>
    <li><a href="https://wa.me/923004301860"><i class="fab fa-whatsapp"></i></a></li>
    
</ul>

                    </div>
                </div>
            </div>
        </div>
    </footer> 
   


<!-- jQuery -->
<script src="jquery-2.1.0.min.js"></script>

<!-- Bootstrap -->
<script src="popper.js"></script>
<script src="bootstrap.min.js"></script>

<!-- Plugins -->
<script src="owl-carousel.js"></script>
<script src="accordions.js"></script>
<script src="datepicker.js"></script>
<script src="scrollreveal.min.js"></script>
<script src="waypoints.min.js"></script>
<script src="jquery.counterup.min.js"></script>
<script src="imgfix.min.js"></script> 
<script src="slick.js"></script> 
<script src="lightbox.js"></script> 
<script src="isotope.js"></script> 

<!-- Global Init -->
<script src="custom.js"></script>

<script>

$(function() {
    var selectedClass = "";
    $("p").click(function(){
    selectedClass = $(this).attr("data-rel");
    $("#portfolio").fadeTo(50, 0.1);
        $("#portfolio div").not("."+selectedClass).fadeOut();
    setTimeout(function() {
      $("."+selectedClass).fadeIn();
      $("#portfolio").fadeTo(50, 1);
    }, 500);
        
    });
});

</script>




</body>
</html>

