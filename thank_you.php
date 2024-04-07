<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <!-- Add your CSS styles or use a framework like Bootstrap for responsiveness -->
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="container" id="thankYouContainer">
        <img style="margin-left: auto; margin-right: auto;" src="https://png.pngtree.com/png-vector/20191113/ourmid/pngtree-green-check-mark-icon-flat-style-png-image_1986021.jpg" width="24%" alt="">
        <h2 style="margin-top: 20%;">Thank You for Your Order!</h2>
        <p style="font-size: medium; font-weight: 400;">Your order has been successfully placed. We'll contact you shortly.</p>
    </div>

    <script>
        // Wait for 2 seconds and then redirect to header.php
        setTimeout(function() {
            window.location.href = 'header.php';
        }, 3000);
    </script>

</body>
</html>
