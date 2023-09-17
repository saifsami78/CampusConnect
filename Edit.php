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

      <style>
        h3{
            color : mediumseagreen;
        }
      </style>

     <h3><center> If you want to change one or more information of your profile just write down the new attribute of that and click submit   </center></h3>
     
     <br>
     <br>
     <div class="container">
            <form action="supplimentarylogin.php" method = "post">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="username">Change your First Name</label>
                    <input type="username" name = "firstname" class="form-control" id="exampleFormControlInput1" placeholder="" >
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="lastname">Change Last Name</label>
                    <input type="username" name = "lastname" class="form-control" id="exampleFormControlInput1" placeholder="" >
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="username">Change your Email</label>
                    <input type="username" name = "email" class="form-control" id="exampleFormControlInput1" placeholder="" >
                </div>

                <div class="mb-2">
                    <label for="exampleFormControlInput1" class="username">Write your New Password</label>
                    <input type="username" name = "password" class="form-control" id="exampleFormControlInput1" placeholder="" >
                </div>

                
                

                <button type="submit" class="btn btn-success"> Submit  </button>
                
            </form>

            
            <br>

            <h3>Eventually it will get updated! </h3>
            <br>
            <br>
     </div>
   
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <br>
    <?php include 'footer.html'; ?>
    </body>
</html>