<?php
// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user'])) {
    header('location: login.php'); // Redirect to the login page if the user is not logged in
    exit();
}

// Retrieve the total from the session
$total = isset($_SESSION['total']) ? $_SESSION['total'] : 0;

// Initialize total quantity and total subtotal
$totalQuantity = 0;
$totalSubtotal = 0;

// Your existing code...

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ... (rest of your head section) ... -->
</head>
<body>
    <div class="container">
        <h1 class="text-center">Checkout</h1>

        <!-- Display selected items and their quantities -->
        <div class="row">
            <div class="col-md-8">
                <?php
                // Display selected items and their quantities
                if (isset($_SESSION['cart'])) {
                    foreach ($_SESSION['cart'] as $value) {
                        $subtotal = $value['productQuantity'] * $value['productPrice'];
                        $totalQuantity += $value['productQuantity']; // Accumulate total quantity
                        $totalSubtotal += $subtotal; // Accumulate total subtotal

                        echo "
                        <div class='mb-3'>
                            <p><strong>Item:</strong> {$value['productName']}</p>
                            <p><strong>Quantity:</strong> {$value['productQuantity']}</p>
                            <p><strong>Subtotal:</strong> $subtotal</p>
                        </div>";
                    }
                }
                ?>
            </div>

            <!-- Display total -->
            <div class="col-md-4">
                <div class="text-center">
                    <h3>Total Quantity: <?php echo $totalQuantity ?></h3>
                    <h3>Total : <?php echo number_format($totalSubtotal, 2) ?></h3>
                   
                </div>
            </div>
        </div>
    </div>

    <!-- ... (rest of your HTML code) ... -->

</body>
</html>
