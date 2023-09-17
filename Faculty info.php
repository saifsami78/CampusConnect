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

      <div class="container">
        <div class="row">
       
            <div>
              <div>
                <br>
                <h3><center> Full Name :  $Name </center></h3>
                <?php
                 echo '<div style="display: flex; justify-content: center; align-items: center; height: 400px;">';
                 echo '<img src="faculty.jfif" width="220" height="300">';
                 echo '</div>';
                 ?>
                 <br>
                 <br>
                <textarea class="form-control" aria-label="With textarea">This is Mr. Haq! I love teaching.Mail me if you have similar research interest </textarea>
                <br>
                <p> Faculty ID :  $Faculty ID</p>
                <p> Office Hour : ST : 2:36
                RA : 9: 40 - 4: 20 </p>
                <p> Research Interest : Machine Learning </p>
                <p> Email Id : firstname@northsouth.edu </p>
                <p> Phone Number  : 0187464587 </p>
                
               
            </div>
          
        </div>
      </div>
      
      
      

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  
    <br>
    <?php include 'footer.html'; ?>
  </body>
</html>