<?php
if (isset($_GET['id'])) {
    $orderId = $_GET['id'];
} else {
    echo "Order ID not set in the URL.";
    exit; // Stop further execution if the order ID is not set
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Images</title>
    <!-- Add your CSS and Bootstrap link here -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <div class="container" style="margin-top: 50px; justify-content : center">
        <?php
        // $con = mysqli_connect('localhost', 'root', '', 'ecommerce');
         $con = mysqli_connect('localhost','sutradin_apric','vdqnZzKf6wPsCKt ','sutradin_ecommerce');

        // Fetch payment images associated with the order ID
        $result = $con->query("SELECT * FROM payment_images WHERE order_id = $orderId");

        // Check if there are rows in the result
        if ($result->num_rows > 0) {
            // echo "<h2>Payment Images for Order ID: $orderId</h2>";
            echo "<div class='row'>";

            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<div class='col-md-4 mb-4'>";
                echo "<div class='card'>";
                echo "<img class='card-img-top' src='data:image/png;base64," . base64_encode($row['image_data']) . "' alt='Payment Image'>";
                echo "<div class='card-body'>";
                echo "<p class='card-text'>Payment Method: {$row['pay_method']}</p>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }

            echo "</div>";
        } else {
            echo "No payment images found for Order ID: $orderId.";
        }

        // Close connection
        $con->close();
        ?>
    </div>
</body>
</html>
