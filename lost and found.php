<?php

session_start();

if(!isset($_SESSION['username'])){
    echo "<script>top.window.location = './index.php'</script>";
}

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Campus Connect </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>


      <?php include 'navbar.php'; ?>

     
      <br>
      <br>
     
      <div class="container">
        <form action = "ActivateLost.php" method = "post">

            <div class="form-group">
                <h3>Did you find anything ? Post here !</h3>

                <p>Please write the product name here which you found : </p>
                <input type="text" class="form-control" id="exampleFormControlInput1" name= "product_name" placeholder="Write Product Name only" required>
                <br>
                <textarea class="form-control" id="announcement" name="announcement" rows="4" cols="6" placeholder="Write in Details everything!" required></textarea>
                <br>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="contract_method" placeholder="Method to contract you " required>
                <br>
                <input type="file" class="form-control-file" id="photo" name="photo" >
            </div>
            <br>
            <button type="submit" class="btn btn-dark">Post it!</button>
        </form>
    </div>

    <br>
    <div class="container">
        <a href="People found.php" class="btn btn-dark"> Did you lost something? See if anyone has found it </a>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>



