<?php
// Process payment logic here
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$phone = $_POST['add'];
$paymentMethod = $_POST['payment_method'];

if ($paymentMethod === 'card') {
    // Additional logic for card payment
    $cardNumber = $_POST['card_number'];
    $expiryDate = $_POST['expiry_date'];
    $cvv = $_POST['cvv'];

    // Perform payment with card details
    // (This is where you would integrate with a payment gateway)
}

// Here you can store the order details in your database or perform other actions
// ...

// Redirect the user to a thank you page
header("Location: thank_you.php");
exit();
?>
