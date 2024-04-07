<?php
// Database connection
// $con = mysqli_connect('localhost', 'root', '', 'ecommerce');
 $con = mysqli_connect('localhost','sutradin_apric','vdqnZzKf6wPsCKt ','sutradin_ecommerce');

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Form data
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $message = mysqli_real_escape_string($con, $_POST['message']);

    // Insert data into the 'contact_messages' table
    $insertQuery = "INSERT INTO contact_messages (name, email, message) VALUES ('$name', '$email', '$message')";

    if (mysqli_query($con, $insertQuery)) {
        // echo "Message sent successfully!";
    } else {
        echo "Error: " . $insertQuery . "<br>" . mysqli_error($con);
    }
}

// Close the database connection
mysqli_close($con);
?>




<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
<title>Contact Us - APRIC</title>

<!-- bootstrap cdn  -->
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
  <?php session_start(); 
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

<!-- <div class="whatsapp_main">
        <a href="https://wa.me/923004301860" target="_blank"><img src="../user/images/whatsapp.png" style="width: 5%; margin-top: 28%; position: fixed; margin-left: 93%; z-index:auto;"></a>
        </div>  -->
        <!-- <div class="whatsapp_main">
        <a href="https://wa.me/923004301860" target="_blank"><img src="../user/images/whatsapp.png" style="width: 5%;  position:fixed; margin-left: 93%; z-index:1000;"></a>
        </div>   -->
    <!-- ***** Main Banner Area Start ***** -->
   <div style="background-image: url('../user/assets/images/contact1.png ');margin-top:5px; " class="page-heading about-page-heading" id="top">
        <div  style="margin-top: 10px;"  class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2>Contact Us</h2>
                        <!-- <span>Awesome, clean &amp; creative HTML5 Template</span> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->
    <div class="whatsapp_main">
    <a href="https://wa.me/923004301860" target="_blank">
        <img src="../user/images/whatsapp.png" class="whatsapp-btn" alt="WhatsApp" />
    </a>
</div>


    <!-- ***** Contact Area Starts ***** -->
    <div class="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div id="map">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2844.8920279801464!2d74.37797447419824!3d31.31633010043238!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3919a9e3730c9535%3A0x9e04e7c7a9a26f5f!2sCentral%20Park%20Housing%20Scheme!5e1!3m2!1sen!2sus!4v1706649354324!5m2!1sen!2sus" width="550" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                      <!-- You can simply copy and paste "Embed a map" code from Google Maps for any location. -->
                      
                    </div>
                  
                </div>
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Say Hello. Don't Be Shy!</h2>
                        <!-- <span>Details to details is what makes Hexashop different from the other themes.</span> -->
                    </div>
                    <form id="contact" action="" method="post">
                        <div class="row">
                          <div class="col-lg-6">
                            <fieldset>
                              <input name="name" type="text" id="name" placeholder="Your name" required="">
                            </fieldset>
                          </div>
                          <div class="col-lg-6">
                            <fieldset>
                              <input name="email" type="text" id="email" placeholder="Your email" required="">
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <textarea name="message" rows="6" id="message" placeholder="Your message" required=""></textarea>
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <button type="submit" id="form-submit" class="main-dark-button"><i class="fa fa-paper-plane"></i></button>
                          </div>
                        </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Contact Area Ends ***** -->

    <!-- ***** Subscribe Area Starts ***** -->
    
    <footer style="background-color: black; margin-top:10px;">
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
    <!-- <li><i class="fab fa-twitter"></i></a></li> - -->
     <li><a href="https://www.instagram.com/theaprican/"><i class="fab fa-instagram"></i></a></li>
    <li><a href="https://wa.me/923004301860"><i class="fab fa-whatsapp"></i></a></li>
    
</ul> 

                    </div>
                </div>
            </div>
        </div>
    </footer>  
    <script>
      <?php
    if (!empty($responseMessage)) {
            echo "alert('" . addslashes($responseMessage) . "');";
        }
        ?>
    </script>


    

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

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
