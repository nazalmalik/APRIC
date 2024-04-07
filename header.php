<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
<title>APRIC</title>

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
    <div class="main-banner1" id="top" style="margin-top: -15px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="left-content">
                        <div class="thumb">
                            <div class="inner-content">
                                <h4 style="color: white;">APRIC </h4>
                                <span>Your new &amp;  style oasis</span>
                                <div class="main-border-button">
                                    <a href="#cat_section">Shop Now!</a>
                                </div>
                            </div>
                            <img src="assets/images/index1.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
    <div class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-image">
                        <img src="assets/images/index2.webp" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <h4>About Us</h4>
<span style="color: #2a2a2a;">
APRIC is your one-stop shop for effortless style, sun-kissed with confidence. We offer a curated selection of denim essentials, from classic jeans and jackets to timeless shirts.</span>
<div class="quote">
<i class="fa fa-quote-left"></i><p style="font-size: larger;"><b>At APRIC, we believe style should be accessible and enjoyable.</b></p>
</div>
<span style="color: #2a2a2a;">Beyond clothing, we also provide cozy towels and essential socks, making APRIC your partner in everyday comfort. We cater to both individuals and businesses, serving as a reliable wholesaler for a wide range of apparel and textiles.We offer high-quality products at competitive prices, ensuring you look and feel your best, every day. </span>
                        <!-- <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul> -->
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
    <h2 style="color: black;text-align: center; margin-top: 60px;  font-size: 34px; font-weight: 700;
    color: #2a2a2a;"id="cat_section">
        Our Categories
    </h2>
    <div class="main-banner1" id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="right-content">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Women</h4>
                                            <!-- <span>Best Clothes For Women</span> -->
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <!-- <h4>Women</h4> -->
                                                <!-- <p>Lorem ipsum dolor sit amet, conservisii ctetur adipiscing elit incid.</p> -->
                                                <div class="main-border-button">
                                                    <a href="womenjeans.php">Shop Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="assets/images/women.jpg">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Men</h4>
                                            <!-- <span>Best Clothes For Men</span> -->
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <!-- <h4>Men</h4> -->
                                                <!-- <p>Lorem ipsum dolor sit amet, conservisii ctetur adipiscing elit incid.</p> -->
                                                <div class="main-border-button">
                                                    <a href="menjeans.php">Shop Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="assets/images/index3.jpg">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Kids</h4>
                                            <!-- <span>Best Clothes For Kids</span> -->
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <!-- <h4>Kids</h4> -->
                                                <!-- <p>Lorem ipsum dolor sit amet, conservisii ctetur adipiscing elit incid.</p> -->
                                                <div class="main-border-button">
                                                    <a href="kid.php">Shop Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="assets/images/kid4.JPG">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Home</h4>
                                            <!-- <span>Best Trend Accessories</span> -->
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <!-- <h4>Accessories</h4> -->
                                                <!-- <p>Lorem ipsum dolor sit amet, conservisii ctetur adipiscing elit incid.</p> -->
                                                <div class="main-border-button">
                                                    <a href="towel.php">Shop Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="assets/images/home.JPG">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
    <!-- ***** Footer Start ***** -->
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
                            <li style="color: white;">880, Central Park Housing Scheme, Lahore, Punjab, Pakistan</li>
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
    <script>
    function redirectToPage(pageUrl) {
        window.location.href = pageUrl;
    }
</script>
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