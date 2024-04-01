<?php
session_start();
if (!$_SESSION['admin']) {
    header("location: form/login.php");
    exit();
}

// Database connection
// $con = mysqli_connect('localhost', 'root', '', 'ecommerce');
 $con = mysqli_connect('localhost','sutradin_apric','vdqnZzKf6wPsCKt ','sutradin_ecommerce');
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the ID parameter is set in the URL
if (isset($_GET['ID'])) {
    $orderId = mysqli_real_escape_string($con, $_GET['ID']);

    // Delete the order
    $deleteOrderQuery = "DELETE FROM orders WHERE id = $orderId";
    $deleteOrderResult = mysqli_query($con, $deleteOrderQuery);

    // Check if the deletion was successful
    if ($deleteOrderResult) {
        // Redirect back to the orders page after deletion
        header("location: orders.php");
        exit();
    } else {
        echo "Error deleting order: " . mysqli_error($con);
    }
} else {
    echo "Invalid order ID.";
}

// Close the database connection
mysqli_close($con);
?>
