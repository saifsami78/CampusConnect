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
                <style>
                  h3{
                    color : mediumseagreen;
                  }
                </style>
                <h3><center>All the names of faculty members are listed below. Click on the name to view their details</center></h3>
                
                <br>
                <?php
                  $conn = mysqli_connect('localhost', 'root', '', 'connect');


                  if ($conn === false) {
                      die('Connection failed: ' . mysqli_connect_error());
                  }

                  $sql = "SELECT * FROM facultyinfo";
                  $query_result = mysqli_query($conn, $sql);


                  if ($query_result === false) {
                    die('Query failed: ' . mysqli_error($conn));
                  }

                  
                  if (mysqli_num_rows($query_result) === 0) {
                      echo '<p>No results found.</p>';
                  } else {
                    $rows = [];
                    while ($row = mysqli_fetch_assoc($query_result)) {
                      $rows[] = $row;
                    }

                    $num = count($rows) - 1;
                    for ($i = $num; $i >= 0; $i--) {


                      echo "<br>";

                      echo "<a href='./Faculty%20info.php?facultyid=". $rows[$i]['id'] ."' style='text-decoration:none'>
                      <div class='card' style='box-shadow: 2px 2px 10px grey'>
                      <div class='card-body'>
                      <p class='card-text d-none'>". $rows[$i]['id'] ."</p>
                        <p class='card-text'>". $rows[$i]['fullname'] ."</p>
                        <p class='card-text'>". $rows[$i]['Department'] ."</p>
                        </div>
                      </div>
                      </a>";
                      echo "<hr>";
                      
                    }
                  }
                    
                  mysqli_close($conn);
                ?>

        </div>
      
    
    

   
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <br>
    <?php include 'footer.html'; ?>
  </body>
</html>