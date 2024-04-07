<?php
session_start();

if (isset($_POST['addCart'])) {
    $product_id = isset($_POST['product_id']) ? $_POST['product_id'] : null;
    $product_size = isset($_POST['size']) ? $_POST['size'] : '';
    $product_quantity = isset($_POST['quantity']) ? intval($_POST['quantity']) : 1;

    if ($product_id !== null) {
        // Retrieve other product details as needed
        // ...

        // Initialize or retrieve the cart from the session
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = array();
        }

        // Check if the product is already in the cart
        $productIndex = -1;
        foreach ($_SESSION['cart'] as $index => $item) {
            if ($item['id'] == $product_id && $item['size'] == $product_size) {
                $productIndex = $index;
                break;
            }
        }

        // If the product is already in the cart, update the quantity
        if ($productIndex != -1) {
            $_SESSION['cart'][$productIndex]['quantity'] += $product_quantity;
        } else {
            // If the product is not in the cart, add it
            $newProduct = array(
                'id' => $product_id,
                'size' => $product_size,
                'quantity' => $product_quantity,
                // Add other product details here
            );
            $_SESSION['cart'][] = $newProduct;
        }

        // Redirect to the view cart page
        header('Location: viewcart.php');
        exit();
    } else {
        echo "Invalid product ID.";
    }
} else {
    echo "Error: Form not submitted properly.";
}

?>
