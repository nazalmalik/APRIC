<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ... (your existing head content) ... -->
    <!-- bootstrap cdn -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
<?php
    $id = (isset($_GET['ID']) && !empty($_GET['ID'])) ? $_GET['ID'] : null;
    include 'Config.php';
    $Record = mysqli_query($con, "SELECT * FROM `tblproduct` WHERE id = '$id' ");
    $data = mysqli_fetch_array($Record);
    ?>
<!-- ... (your existing HTML content) ... -->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 m-auto border border-primary">
            <form action="update.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <p style="font-weight: bolder; font-size: larger; text-align: center;" class="text-warning">Update Product :</p>
                </div>
                <div class="mb-3">
                    <label class="form-label">Product Name :</label>
                    <input type="text" value="<?php echo $data['PName'] ?? ''; ?>" name="Pname" class="form-control" placeholder="Enter Name">
                </div>
                <div class="mb-3">
                    <label class="form-label">Product Price :</label>
                    <input type="text" value="<?php echo $data['PPrice'] ?? ''; ?>" name="Pprice" class="form-control" placeholder="Enter Price">
                </div>
                <div class="mb-3">
                    <label class="form-label">Product Image :</label>
                    <input type="file" name="Pimage" class="form-control pl-0 pt-0">
                    <br>
                    <img src="<?php echo $data['PImage'] ?? ''; ?>" alt="" height="200px">
                </div>
                <div class="mb-3">
                    <label class="form-label">Product Sale Price :</label>
                    <input type="text" value="<?php echo $data['PSale'] ?? ''; ?>" name="Sprice" class="form-control" placeholder="Enter Sale Price">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlSelect1">Select Category :</label>
                    <select class="form-control" name="Pages">
                        <option value="main_page">Main Page</option>
                        <option value="men_jeans">Men's Jeans</option>
                        <option value="men_jackets">Men's Jackets</option>
                        <option value="men_shirts">Men's Shirts</option>
                        <option value="women_jeans">Women's Jeans</option>
                        <option value="women_shirts">Women's Shirts</option>
                        <option value="women_undergarment">Women's Undergarment</option>
                        <option value="women_gowns">Women's Bridal Gowns</option>
                        <option value="kids_shirtjeans">Kid's Shirt & Jeans</option>
                        <option value="home_towel">Home Towels</option>
                        <option value="home_socks">Home Socks</option>
                    </select>
                </div>
                <input type="hidden" name="id" value="<?php echo $data['id'] ?? ''; ?>">
                <button name="submit" style="color: black; font-weight: bolder; font-size: medium;" class="bg-danger my-3 form-control">UPDATE</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>
<?php
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $product_name = $_POST['Pname'];
    $product_price = $_POST['Pprice'];
    $product_sprice = $_POST['Sprice'];
    $product_image = $_FILES['Pimage'];
    $image_loc = $_FILES['Pimage']['tmp_name'];
    $image_name = $_FILES['Pimage']['name'];
    $img_des = "Uploadimage/" . $image_name;
    move_uploaded_file($image_loc, "Uploadimage/" . $image_name);
    $product_category = $_POST['Pages'];

    include 'Config.php';

    if (!empty($id)) {
        // Sanitize inputs to prevent SQL injection
        $product_name = mysqli_real_escape_string($con, $product_name);
        $product_price = mysqli_real_escape_string($con, $product_price);
        $product_sprice = mysqli_real_escape_string($con, $product_sprice);
        $img_des = mysqli_real_escape_string($con, $img_des);
        $product_category = mysqli_real_escape_string($con, $product_category);

        // Update query
        $query = "UPDATE `tblproduct` SET `PName`='$product_name', `PPrice`='$product_price', `PSale`='$product_sprice', `PImage`='$img_des', `PCategory`='$product_category' WHERE id = $id";

        if(mysqli_query($con, $query)) {
            header("location:index.php");
            exit; // Stop further execution
        } else {
            echo "Error: " . mysqli_error($con);
        }
    } else {
        echo "Invalid ID";
    }
}
?>