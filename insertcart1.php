<?php
session_start();

if (isset($_POST['addCart'])) {
    // Retrieve product details from the form
    $productName = $_POST['PName'];
    $productPrice = $_POST['PPrice'];
    $productQuantity = isset($_POST['PQuantity']) ? intval($_POST['PQuantity']) : 1;

    // Initialize or retrieve the cart from the session
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    // Check if the product is already in the cart
    $productIndex = -1;
    foreach ($_SESSION['cart'] as $index => $item) {
        if ($item['name'] == $productName) {
            $productIndex = $index;
            break;
        }
    }

    // If the product is already in the cart, update the quantity
    if ($productIndex != -1) {
        $_SESSION['cart'][$productIndex]['quantity'] += $productQuantity;
    } else {
        // If the product is not in the cart, add it
        $newProduct = array(
            'name' => $productName,
            'price' => $productPrice,
            'quantity' => $productQuantity
        );
        $_SESSION['cart'][] = $newProduct;
    }

    // Redirect to the view cart page
    header('Location: viewcart.php');
    exit();
} else {
    // Handle cases where the form wasn't submitted properly
    echo "Error: Form not submitted properly.";
}
?>
