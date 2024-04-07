<?php
// handle_payment.php

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['confirm_btn'])) {
    $file = $_FILES['file'];

    // Check if the file was uploaded without errors
    if ($file['error'] === UPLOAD_ERR_OK) {
        // Get binary data of the file
        $imageData = file_get_contents($file['tmp_name']);

        // Database connection (replace with your actual credentials)
        // $con = mysqli_connect('localhost', 'root', '', 'ecommerce');
 $con = mysqli_connect('localhost','sutradin_apric','vdqnZzKf6wPsCKt ','sutradin_ecommerce');
        // Check connection
        if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
        }

        // Insert data into a new table 'payment_images'
        $orderId = $_SESSION['order_id']; // Replace with the actual session variable storing order ID

        $stmt = $con->prepare("INSERT INTO payment_images (order_id, pay_method, image_data) VALUES (?, ?, ?)");
        $payMethod = "Credit Card"; // You can change this based on your payment method
        $stmt->bind_param('iss', $orderId, $payMethod, $imageData);

        if ($stmt->execute()) {
            echo "Payment confirmed, and image details stored in the database.";

            // Update the 'orders' table to mark the order as paid (you need to define 'status' in your 'orders' table)
            $updateOrderStatusStmt = $con->prepare("UPDATE orders SET status = 'Paid' WHERE id = ?");
            $updateOrderStatusStmt->bind_param('i', $orderId);

            if ($updateOrderStatusStmt->execute()) {
                echo "Order status updated to 'Paid'.";
                header('location: thank_you.php');
            } else {
                echo "Error updating order status: " . $updateOrderStatusStmt->error;
            }

            $updateOrderStatusStmt->close();
        } else {
            echo "Error confirming payment: " . $stmt->error;
        }

        $stmt->close();
        $con->close();
    } else {
        echo "Error uploading file: " . $file['error'];
    }
}
?>
