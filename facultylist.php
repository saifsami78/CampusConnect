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
                <h3><center>All the names of faculty members are listed below. Click on the name to view their details</center></h3>

                <br>
                <a href="faculty info.php">Mr. Khan </a>
                <p>Department : ECE </p>
                <p> Faculty Initial : HJB </p>

                <br>
                <br>

                <a href="faculty info.php">Mr. Kabir </a>
                <p>Department : ECE </p>
                <p> Faculty Initial : HJB </p>


                <br>
                <br>

                <a href="faculty info.php">Mr. Rahman  </a>
                <p>Department : ECE </p>
                <p> Faculty Initial : HRGY </p>

                <br>
                <br>

                <a href="faculty info.php">Mr. Khan </a>
                <p>Department : BBA </p>
                <p> Faculty Initial : HKY </p>

        </div>
      
    
    

   
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <br>
    <?php include 'footer.html'; ?>
  </body>
</html>