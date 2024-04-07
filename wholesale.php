<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
<title>Wholesale - APRIC</title>

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
    .image-container {
            display: flex;
            justify-content: space-between;
            margin: 20px;
        }

        .image-container img {
            width: 150px; /* Adjust the width as needed */
            height: auto;
        }
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
    <!-- ***** Main Banner Area Start ***** -->
    <div class="page-heading1" id="top" style="background-image: url(); margin-top:3px; margin-bottom:13px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div style="margin-top: 3px;" class="inner-content">
                        <h2 style="margin-top: 4px;">Wholesale</h2>
                        <!-- <span>Awesome &amp; Creative HTML CSS layout by TemplateMo</span> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="whatsapp_main">
    <a href="https://wa.me/923280809483" target="_blank">
        <img src="../user/images/whatsapp.png" class="whatsapp-btn" alt="WhatsApp" />
    </a>
</div>
    <div  style="margin-top:-10px;" class="container p-5  bg-dark text-white">
  <h1 style="text-align: left;">Our Mission</h1>
  <p style="color: white;font-size:medium">At APRIC, we're a manufacturer of high-quality fabric based in Lahore, Pakistan. We deal with Denim jeans , jackets , Teens shirts , Bridal Gowns,  undergarments, towel and socks. In addition to our manufacturing capabilities, we also have a dedicated stitching unit where we can create finished products based on your specifications.
Our wholesale program offers competitive pricing and discounts on bulk orders for retailers and other businesses. We work with a variety of clients, in the fashion industry . Whether you're looking for fabric for clothing, or home textiles(towel and socks ), we can provide the materials you need to bring your vision to life.</p>
</div>
<h1 style="text-align: center; font-weight:bolder; margin-top:20px">Our Products</h1>
<div class="container">
<h1 style="text-align: left;margin-left:20px; font-weight:bold; margin-top:20px; margin-bottom:30px;">MEN'S</h1>
<div class="row" style="justify-content:center; ">
    <div col-lg-3>
    <div class="image-container">
        <img src="../user/assets/img/men1.jpg" alt="Image 1">
        <img src="../user/assets/img/men2.jpg" alt="Image 2">
        <img src="../user/assets/img/men3.jpg" alt="Image 3">
    </div>
    </div>
</div>
<div class="row" style="justify-content:center; margin-top:-50px">
    <div col-lg-3>
    <div class="image-container" >
        <img src="../user/assets/img/men4.jpg" alt="Image 1">
        <img src="../user/assets/img/men5.jpg" alt="Image 2">
        <img src="../user/assets/img/men6.jpg" alt="Image 3">
    </div>
    </div>
</div>
<div class="row" style="justify-content:center; margin-top:-50px">
    <div col-lg-3>
    <div class="image-container">
        <img src="../user/assets/img/men7.jpg" alt="Image 1">
        <img src="../user/assets/img/men8.jpg" alt="Image 2">
        <img src="../user/assets/img/men9.jpg" alt="Image 3">
    </div>
    </div>
</div>
    <div class="row" style="justify-content:center;margin-top:-50px">
    <div col-lg-3>
    <div class="image-container">
        <img src="../user/assets/img/men10.jpg" alt="Image 1">
        <img src="../user/assets/img/men11.jpg" alt="Image 2">
        <img src="../user/assets/img/men12.jpg" alt="Image 3">
    </div>
    </div>
    </div>
    <div class="row" style="justify-content:center;margin-top:-50px">
    <div col-lg-3>
    <div class="image-container">
        <img src="../user/assets/img/men13.jpg" alt="Image 1">
        <img src="../user/assets/img/men14.jpg" alt="Image 2">
        <img src="../user/assets/img/men15.jpg" alt="Image 3">
    </div>
    </div>
</div>
</div>

<div class="container">
<h1 style="text-align: left;margin-left:20px; font-weight:bold; margin-top:20px; margin-bottom:30px;">WOMEN'S</h1>
<div class="row" style="justify-content:center; ">
    <div col-lg-3>
    <div class="image-container">
        <img src="../user/assets/img/women1.jpg" alt="Image 1">
        <img src="../user/assets/img/women2.jpg" alt="Image 2">
        <img src="../user/assets/img/women3.jpg" alt="Image 3">
    </div>
    </div>
</div>
<div class="row" style="justify-content:center; margin-top:-40px">
    <div col-lg-3>
    <div class="image-container" >
        <img src="../user/assets/img/women4.jpg" alt="Image 1">
        <img src="../user/assets/img/women5.jpg" alt="Image 2">
        <img src="../user/assets/img/women6.jpg" alt="Image 3">
    </div>
    </div>
</div>
<div class="row" style="justify-content:center; margin-top:-40px">
    <div col-lg-3>
    <div class="image-container">
        <img src="../user/assets/img/women7.jpg" alt="Image 1">
        <img src="../user/assets/img/women8.jpg" alt="Image 2">
        <img src="../user/assets/img/women12.jpg" alt="Image 3">
    </div>
    </div>
</div>
    <div class="row" style="justify-content:center;margin-top:-40px">
    <div col-lg-3>
    <div class="image-container" style="justify-content: left;">
        <img src="../user/assets/img/women10.jpg" alt="Image 1">
        <img src="../user/assets/img/women11.jpg" alt="Image 2">    
    </div>
    </div>
    </div>

</div>
<div class="container">
<h1 style="text-align: left;margin-left:20px; font-weight:bold; margin-top:20px; margin-bottom:30px;">KID'S</h1>
<div class="row" style="justify-content:center; ">
    <div col-lg-3>
    <div class="image-container">
        <img src="../user/assets/img/kid1.jpg" alt="Image 1">
        <img src="../user/assets/img/kid2.jpg" alt="Image 2">
        <img src="../user/assets/img/kid3.jpg" alt="Image 3">
    </div>
    </div>
</div>
<div class="row" style="justify-content:center; margin-top:-40px">
    <div col-lg-3>
    <div class="image-container" >
        <img src="../user/assets/img/kid4.jpg" alt="Image 1">
        <img src="../user/assets/img/kid5.jpg" alt="Image 2">
  
    </div>
    </div>
</div>
</div>
<div class="container">
<h1 style="text-align: left;margin-left:20px; font-weight:bold; margin-top:20px; margin-bottom:30px;">HOME</h1>
<div class="row" style="justify-content:center; ">
    <div col-lg-3>
    <div class="image-container">
        <img src="../user/assets/img/home.jpg" alt="Image 1">
        <img src="../user/assets/img/home1.jpg" alt="Image 2">
        <img src="../user/assets/img/home2.jpg" alt="Image 3">
    </div>
    </div>
</div>
<div class="row" style="justify-content:center; margin-top:-40px">
    <div col-lg-3>
    <div class="image-container" >
        <img src="../user/assets/img/home3.jpg" alt="Image 1">
        <img src="../user/assets/img/home4.jpg" alt="Image 2">
        <img src="../user/assets/img/home5.jpg" alt="Image 3">
    </div>
    </div>
</div>
<div class="row" style="justify-content:center; margin-top:-40px; " >
    <div col-lg-3>
    <div class="image-container">
        <img  src="../user/assets/img/home6.jpg" alt="Image 1">
        <img src="../user/assets/img/home7.jpg" alt="Image 2">
        <!-- <img src="../user/assets/img/home8.jpg" alt="Image 3"> -->
    </div>
    </div>
</div>
 
</div>
<div class="container b-3">
<h2>Contact Us</h2>
<div class="row" style="justify-content: center;">

    <div class="col-sm-2" style="background-color:black; color:white">
      Email: <br>
      Phone No:
    </div>
    <div class="col-sm-4" style="background-color:#2a2a2a;color:white" >
    info@sutradingco.com<br>
    +923004301860 , +923154165482 
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
                            <li style="color: white;">880, Central Park Housing Scheme, Lahore, Punjab, Pakistan</li>
                            <li style="color: white;">info@sutradingco.com</li>
                            <li style="color: white;">+923154165482</li>
                            <li style="color: white;">+923004301860 </li>
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
    $(document).ready(function(){
        $("#product-slider").owlCarousel({
            items: 3, // Set the number of items to display in the slider
            loop: true, // Enable loop mode
            margin: 10, // Set the margin between items
            // width:18rem,
            nav: true, // Show navigation arrows
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        });
    });
</script>
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