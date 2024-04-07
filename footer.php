<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APRIC</title>
</head>
<body>
<footer style="background-color: black; margin-top:5px;">
        <div class="container" style="background-color: black;">
            <div class="row"style="background-color: black;">
                <div class="col-lg-3 " style="background-color: black;">
                    <div class="first-item">
                        <div class="logo">
                        <img src="images/logo.jpg"  height="70px" > 
                            <!-- <img src="" alt="hexashop ecommerce templatemo"> -->
                         </div>
                        <ul>
                            <li><a href="#">House No.880, A Block, Central Park Housing Society,  Ferozepur Road , Lahore</a></li>
                            <li><a href="#">hexashop@company.com</a></li>
                            <li><a href="#">010-020-0340</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3"style="background-color: black;">
                    <h4>Shopping &amp; Categories</h4>
                    <ul>
                        <li><a href="#">Men’s Shopping</a></li>
                        <li><a href="#">Women’s Shopping</a></li>
                        <li><a href="#">Kid's Shopping</a></li>
                    </ul>
                </div>
                <div class="col-lg-3"style="background-color: black;">
                    <h4>About</h4>
                    <ul>
                        <li><a href="#">Homepage</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul> 
                </div>
                <div class="col-lg-3"style="background-color: black;">
                    <h4>Help &amp; Information</h4>
                    <ul>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">FAQ's</a></li>
                        <li><a href="#">Shipping</a></li>
                        <li><a href="#">Tracking ID</a></li>
                    </ul>
                </div>
                <div class="col-lg-12">
                    <div class="under-footer">
                        <p>Copyright © 2024 APRIC Co., Ltd. All Rights Reserved. </p>
                        
                        <!-- <br>Design: <a href="https://templatemo.com" target="_parent" title="free css templates">TemplateMo</a></p> -->
                        <ul>
    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
    <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
    
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