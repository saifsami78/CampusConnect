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
    <style>
      #ok{
        color: mediumseagreen;
      };
      #footer_text{
        color: mediumseagreen;
        text-decoration: underline;
      }
    </style>
  </head>
  <body>
      <?php include 'navbar.php';
      ?>
      <br>
      <h2 id="ok"><b><center> Posts </center></b></h2><hr><br>                 
      
      

     
      </div>
      <div class="container text-center">
        <a href="Report.php" class="btn btn-success">Report Here if you find any post inappropriate</a>

      </div>

      <div>
        
          <div class="container text-center ">
          <?php


            
            $conn = mysqli_connect("localhost", "root", "", "connect");

            // Check the connection
            if (!$conn) {
              die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "SELECT username, post_content,post_id FROM posts";
            $result = mysqli_query($conn, $sql);

            $rows = [];
            while ($row = mysqli_fetch_assoc($result)) {
              $rows[] = $row;
            }

            
              
              $num = count($rows) - 1;
              for ($i = $num; $i >= 0; $i--) {

                echo'<div class="row">';

                  echo'<div class="col-4">';

                      echo "<br> <br>";

                      echo "<div class='card' style='box-shadow: 2px 2px 10px grey'>
                      <div class='card-body'>
                        <h5 class='card-title' id='ok'>" . $rows[$i]['username'] . "</h5><hr>
                        
                        <p class='card-text'>". $rows[$i]['post_content'] ."</p>
      
                      </div>
                      
                      <div class='card-footer'>
                        <a href='#' class='card-link' id='ok'>" . " Post ID : " .  $rows[$i]['post_id'] . "</a>
                      </div>
      
                     </div>";
                  echo'</div>';

                  $i--;
                  if($i < 0){
                    break;
                  };

                  echo'<div class="col-4">';

                      echo "<br> <br>";

                      echo "<div class='card' style='box-shadow: 2px 2px 10px grey'>
                      <div class='card-body'>
                        <h5 class='card-title' id='ok'>" . $rows[$i]['username'] . "</h5><hr>
                        
                        <p class='card-text'>". $rows[$i]['post_content'] ."</p>
      
                      </div>
                      
                      <div class='card-footer'>
                        <a href='#' class='card-link' id='ok'>" . " Post ID : " .  $rows[$i]['post_id'] . "</a>
                        <a href='Report.php' class='card-link' id='ok'> Report </a>
                        <a href='#' class='card-link' id='ok'>" . " Post ID : " .  $rows[$i]['post_id'] . "</a>;
                        
                      </div>
      
                     </div>";
                  echo'</div>';

                  $i--;
                  if($i < 0){
                    break;
                  }

                  echo'<div class="col-4">';

                      echo "<br> <br>";

                      echo "<div class='card' style='box-shadow: 2px 2px 10px grey'>
                      <div class='card-body'>
                        <h5 class='card-title' id='ok'>" . $rows[$i]['username'] . "</h5><hr>
                        
                        <p class='card-text'>". $rows[$i]['post_content'] ."</p>
      
                      </div>
                      
                      <div class='card-footer'>
                        <a href='#' class='card-link' id='ok'>" . " Post ID : " .  $rows[$i]['post_id'] . "</a>
                      </div>
      
                     </div>";
                  echo'</div>';
                
                echo'</div>';


                
                // echo "<h4>" . $rows[$i]['username'] . "</h4>";
                // echo "<p>" . " Post ID : " .  $rows[$i]['post_id'] . "</p>";
                // echo $rows[$i]['post_content'];
              }
            
           

            


            mysqli_close($conn);
          ?>

          </div>
      </div>
      

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <br>
    <?php include 'footer.html'; ?>
  </body>
</html>