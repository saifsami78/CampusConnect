<?php
session_start();

if (!isset($_SESSION['username'])) {
    echo "<script>top.window.location = './index.php'</script>";
    exit; 
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $username = $_SESSION['username'];

    $conn = mysqli_connect('localhost', 'root', '', 'connect');

    if ($conn === false) {
        die('Connection failed: ' . mysqli_connect_error());
    }

    $username = mysqli_real_escape_string($conn, $_SESSION['username']);
    $sql = "UPDATE signup SET email = '$email', password = '$password', firstname = '$firstname', lastname = '$lastname' where username = '$username'";

    if (mysqli_query($conn, $sql)) {
        mysqli_close($conn);
        header('Location: User Profile.php');
        exit; // Exit to prevent further execution
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }

    mysqli_close($conn);
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

     <h3><center> If you want to change information just fil the form and click submit   </center></h3>
     
     <br>
     <br>
     <div class="container">
            <form action="Edit.php" method = "POST">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="username">Change your First Name</label>
                    <input type="username" name = "firstname" class="form-control" id="exampleFormControlInput1" placeholder="" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="lastname">Change Last Name</label>
                    <input type="username" name = "lastname" class="form-control" id="exampleFormControlInput1" placeholder="" required>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="username">Change your Email</label>
                    <input type="email" name = "email" class="form-control" id="exampleFormControlInput1" placeholder="" required>
                </div>

                <div class="mb-2">
                    <label for="exampleFormControlInput1" class="username">Write your New Password</label>
                    <input type="password" name = "password" class="form-control" id="exampleFormControlInput1" placeholder="" required >
                </div>

                
                

                <button type="submit" class="btn btn-success"> Submit  </button>
                
            </form>

            
            <br>
            <br>
            <br>
     </div>
   
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <br>
    <?php include 'footer.html'; ?>
    </body>
</html>


<?php

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $username = $_SESSION['username'];


    $conn = mysqli_connect('localhost', 'root', '', 'connect');

    if ($conn === false) {
        die('Connection failed: ' . mysqli_connect_error());
    }

    $username = mysqli_real_escape_string($conn, $_SESSION['username']);
    $sql = "UPDATE signup SET email = '$email', password = '$password', firstname = '$firstname', lastname = '$lastname' where username = '$username'";

    if (mysqli_query($conn, $sql)) {
        
        header('Location: User Profile.php');
        mysqli_close($conn);
        exit; 
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
    mysqli_close($conn);
    

?>


