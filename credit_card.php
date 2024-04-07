


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Details</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-size: larger;
            font-weight: bold;
        }

        input[type="file"] {
            width: 50%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .confirm-btn {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .confirm-btn:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>

    <div class="container">
        <label style="font-size: larger;">Credit Card Payment</label>

        <div class="container">
            <label for="card_number">Pakistani Clients</label>
            <label for="card_number"><b>Account Title :</b> Shahid Nadeem</label>
            <label for="card_number"><b>Account Number :</b> 0010119761580012</label>
            <label for="card_number"><b>Bank Name :</b> Allied Bank</label>
        </div>

        <div class="container">
            <label for="card_number">International Clients</label>
            <label for="card_number"><b>Account Title :</b> Muhammad Taha Shahid</label>
            <label for="card_number"><b>IBAN :</b> PK97NAYA1234503154165482</label>
            <label for="card_number"><b>Phone No :</b> 03154165482</label>
            <label for="card_number"><b>Bank Name :</b> NayaPay</label>
        </div>

        <br><br>
        <form action="handle_payment.php" method="post" enctype="multipart/form-data">
            <!-- Your existing file input -->
            <label for="phone" style="text-align: left;"><b>Upload Payment Image:</b></label>
            <input type="file" id="file" name="file" accept=".pdf, .jpeg, .jpg, .png" required><br><br>

            <button class="confirm-btn" type="submit" name="confirm_btn">Confirm Payment</button>
        </form>
    </div>

    <script>
        // Remove the existing confirmation script
    </script>

</body>

</html>
