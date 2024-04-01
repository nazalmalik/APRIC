<!DOCTYPE html>
<html lang="en">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- Font Awesome CSS -->
    <title>Orders Details - APRIC</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        h1, h2, p {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        p strong {
            color: #4CAF50;
        }
    </style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APRIC</title>
    <!-- Add your CSS and Bootstrap link here -->
</head>
<body>
    <?php
    // Database connection
    // $con = mysqli_connect('localhost', 'root', '', 'ecommerce');
 $con = mysqli_connect('localhost','sutradin_apric','vdqnZzKf6wPsCKt ','sutradin_ecommerce');
    // Check connection
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if (isset($_GET['id'])) {
        $orderId = mysqli_real_escape_string($con, $_GET['id']);

        // Fetch order information
        $orderQuery = "SELECT * FROM orders WHERE id = $orderId";
        $orderResult = mysqli_query($con, $orderQuery);
        $order = mysqli_fetch_assoc($orderResult);

        if ($order) {
            echo "<h1>Order Details</h1>";
            echo "<p><strong>Order ID:</strong> {$order['id']}</p>";
            echo "<p><strong>Name:</strong> {$order['name']}</p>";
            echo "<p><strong>Number:</strong> {$order['number']}</p>";
            echo "<p><strong>Email:</strong> {$order['email']}</p>";
            echo "<p><strong>Method:</strong> {$order['method']}</p>";
            echo "<p><strong>Address:</strong> {$order['flat']}, {$order['street']}, {$order['city']}, {$order['state']}, {$order['country']} - {$order['state_code']}</p>";
            echo "<p><strong>Order Time:</strong> {$order['created_at']}</p>";

            // Fetch order products
            $productsQuery = "SELECT * FROM order_items WHERE order_id = $orderId";
            $productsResult = mysqli_query($con, $productsQuery);
            echo  "  <div class='container'>";
            echo "<h2>Order Products</h2>";
            echo "<table border='1'>";
            echo "<tr>
                    <th>Product Name</th>
                    <th>Product Quantity</th>
                    <th>Subtotal</th>
                  </tr>";
            echo "</div>";

            $totalOrderPrice = 0;

            while ($product = mysqli_fetch_assoc($productsResult)) {
                echo "<tr>
                        <td>{$product['product_name']}</td>
                        <td>{$product['product_quantity']}</td>
                        <td>{$product['subtotal']}</td>
                      </tr>";

                $totalOrderPrice += $product['subtotal'];
            }

            echo "</table>";
            echo "<p><strong>Total Order Price:</strong> $totalOrderPrice</p>";
        } else {
            echo "<p>Order not found.</p>";
        }
    } else {
        echo "<p>Invalid order ID.</p>";
    }

    // Close the database connection
    mysqli_close($con);
    ?>
  
</body>
</html>
