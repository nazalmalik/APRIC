<?php
session_start();

if (!isset($_SESSION['cart']) || !is_array($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

if (isset($_POST['update'])) {
    $updatedQuantity = isset($_POST['PQuantity']) ? intval($_POST['PQuantity']) : 1;

    foreach ($_SESSION['cart'] as $key => $value) {
        if ($value['productName'] === $_POST['item']) {
            $_SESSION['cart'][$key]['productQuantity'] = $updatedQuantity;
            break;
        }
    }

    header("location:viewcart.php");
    exit();
}

if (isset($_POST['remove'])) {
    foreach ($_SESSION['cart'] as $key => $value) {
        if ($value['productName'] === $_POST['item']) {
            unset($_SESSION['cart'][$key]);
            $_SESSION['cart'] = array_values($_SESSION['cart']);
            header('location:viewcart.php');
            exit();
        }
    }
}

// Check if 'addCart' is set in POST data
if (isset($_POST['addCart'])) {
    // Retrieve product details from POST data
    $product_name = isset($_POST['PName']) ? $_POST['PName'] : '';
    $product_price = isset($_POST['PPrice']) ? $_POST['PPrice'] : '';
    $product_quantity = isset($_POST['PQuantity']) ? $_POST['PQuantity'] : '';
    $product_size = isset($_POST['Psize']) ? $_POST['Psize'] : '';
    // Check if the product is already in the cart
    $check_product = array_column($_SESSION['cart'], 'productName');
    if (in_array($product_name, $check_product)) {
        echo "
            <script>
            alert('Product already added');
            window.location.href = document.referrer || 'previous_page.php';
            </script>
        ";
        exit; // Stop further execution after redirection
    } else {
        // Add the product to the cart
        $_SESSION['cart'][] = array(
            'productName' => $product_name,
            'productPrice' => $product_price,
            'productQuantity' => $product_quantity,
            'productSize' => $product_size
        );

        header("location:viewcart.php");
        exit(); // Stop further execution after redirection
    }
}

?>
