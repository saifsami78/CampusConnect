<?php

session_start();

if(!isset($_SESSION['username'])){
    echo "<script>top.window.location = './index.php'</script>";
}

?>


<?php
  $id = $_GET['facultyid'];
  $conn = mysqli_connect('localhost', 'root', '', 'connect');


  if ($conn === false) {
      die('Connection failed: ' . mysqli_connect_error());
  }

  $sql = "SELECT * FROM facultyinfo where id = '$id' ";
  $query_result = mysqli_query($conn, $sql);


  if ($query_result === false) {
    die('Query failed: ' . mysqli_error($conn));
  }

  
    if (mysqli_num_rows($query_result) === 0) {
        echo '<p>No results found.</p>';
    } else {
        $row = mysqli_fetch_assoc($query_result);
    }
  mysqli_close($conn);
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
          <div class="col - 6">
                  <br>
                  <br>
                  <br>
                  <div class="profile-details">
                    <p><strong>Department:</strong> <?php echo $row['Department']; ?></p>
                    <p><strong>Faculty ID:</strong> <?php echo $row['Faculty_Id']; ?></p>
                    <p><strong>Email:</strong> <?php echo $row['Email']; ?></p>
                    <p><strong>Phone:</strong> <?php echo $row['Phone']; ?></p>
                    <p><strong>Office Hours:</strong></p>
                    <p><?php echo $row['Office_Hour']; ?></p>
                    <p><strong>Research Interests:</strong></p>
                    <p><?php echo $row['research']; ?></p>
                    <p><strong>About Me:</strong></p>
                    <p><?php echo $row['Tellyourself']; ?></p>
                </div>
          </div>
          <div class="col-6">
              <br>
              <br>
              <?php
                  echo '<div style="display: flex; justify-content: center; align-items: center; height: 400px;">';
                  echo '<img src="faculty.jfif" width="220" height="300">';
                  echo '</div>';
              ?>
          </div>
        </div>
      </div>

      
      
      
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  
    <br>
    
  </body>

  <?php include 'footer.html'; ?>
</html>


