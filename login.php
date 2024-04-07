<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- bootstrap cdn -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
   <style>
.container{
  margin-top: 8rem;
  border-radius: 5px;
}

   </style>
</head>
<body class="bg-secondary">
<div class="container">
    <div class="row ">
       <div class="col-md-4 shadow bg-white font-monospace  p-3  m-auto border ">
    <form action="login1.php" method="POST"  >
      <!-- enctype="multipart/form-data" -->
    <!-- <form> -->
      <div class="mb-3">
      <!-- class="text-center fw-bold fs-4 text-warning" -->
  <p style="font-weight: bolder; font-size:larger; text-align:center; color:black;" >Login :</p>
      </div>
  <div class="mb-3">
    <label class="form-label">Name :</label>
    <input type="text" name="username" class="form-control"  placeholder="Enter Username">
  </div>
  <div class="mb-3">
    <label class="form-label">Password :</label>
    <input type="password" name="userpassword" class="form-control"  placeholder="Enter Password">
  </div>
 <button name="submit" style="color:black; font-weight:bolder; font-size:medium;" class="bg-success  my-3 form-control">Login</button>
            
  </form>
  </div>
 
  </div>
    </div>
  </div>
</body>
</html>