<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
<!-- bootstrap cdn -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
   
  </head>
<body>
<div class="container mt-5">
        <div class="row ">
            <div class="col-md-8 m-auto border border-primary ">
                <form action="insert.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <p style="font-weight: bolder; font-size:larger; text-align:center;" class="text-warning">Product Detail:</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Product Name :</label>
                        <input type="text" name="Pname" class="form-control" placeholder="Enter Name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Product Actual Price :</label>
                        <input type="text" name="Pprice" class="form-control" placeholder="Enter Price">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Product Price after Discount :</label>
                        <input type="text" name="Sprice" class="form-control" placeholder="Enter Price">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" form="formimage">Product Image :</label>
                        <input type="file" name="Pimage" id="formimage" class="form-control pl-0  pt-0 ">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlSelect1">Select Category :</label>
    <select class="form-control" name="Pages" >
    <option value="main_page">Main Page</option>
      <!-- <option value="mens">Men's</option> -->
      <option value="men_jeans">Men's Jeans</option>
        <option value="men_jackets">Men's Jackets</option>
        <option value="men_shirts">Men's Shirts</option>
      <!-- <option value="women_jacket">Women's Jackets</option> -->
      <option value="women_jeans">Women's Jeans</option>
      <option value="women_shirts">Women's Shirts</option>
      <option value="women_undergarment">Women's Undergarment</option>
      <option value="women_gowns">Women's Bridal Gowns</option>
       <option value="kids_shirtjeans">Kid's Shirts & Jeans</option>
      <!-- <option value="kids_jackets">Kid's Jackets</option>
      <option value="kids_shirts">Kid's Shirts</option> -->
      <option value="home_towel">Home Towels</option>
      <option value="home_socks">Home Socks</option>
    </select>
                    </div>
                    <button name="submit" style="color:black; font-weight:bolder; font-size:medium;" class="bg-danger  my-3 form-control">UPLOAD</button>
                </form>
            </div>
        </div>
    </div>

<!-- fetch data -->
<div class="container ">
        <div class="row">
            <div class="col-md-10 m-auto">
                <table class="table border border-warning table-hover border my-5 pl-1">
                    <thead class="bg-dark text-white fs-5 font-monospace text-center">
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Sale Price</th>
                            <th scope="col">Image</th>
                            <th scope="col">Category</th>
                            <th scope="col">Update</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>

                    <tbody class="text-center">
                        <?php
                        include 'Config.php';
                        $Record = mysqli_query($con, "SELECT * FROM `tblproduct`");

                        while ($row = mysqli_fetch_array($Record)) {
                            echo "
                                <tr>
                                    <td>$row[id]</td>
                                    <td>$row[PName]</td>
                                    <td>$row[PPrice]</td>
                                    <td>$row[PSale]</td>
                                    <td><img src='$row[PImage]' height='120px' width='150px'></td>
                                    <td>$row[PCategory]</td>
                                    <td><a href='update.php?ID=$row[id]' class='btn btn-success'>Update</a></td>
                                    <td><a href='delete.php?ID=$row[id]' class='btn btn-danger'>Delete</a></td>
                                </tr>
                            ";
                        }
                        ?>
                    </tbody>
</table>
</div> 

</div>
</div>

</body>
</html>