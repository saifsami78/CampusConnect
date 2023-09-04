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
      <div class="cotainer" >
       
        <h3> <center> All The Stuff People Has got </center></h3>
        <p><center><u>All the items that people have found are listed below. If what you've lost is included in the list, please note down the product ID and click on 'More Details' to access additional information and find out how to contact them </u></center></p>
     
      </div>


        <br>
      
    
        <div class="container">
        <?php

        
        $conn = mysqli_connect('localhost', 'root', '', 'connect');


        if ($conn === false) {
            die('Connection failed: ' . mysqli_connect_error());
        }


        $sql = 'SELECT product_name, post_id FROM lost_and_found';
        $result = mysqli_query($conn, $sql);


        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<p> Product name: ' . $row['product_name'] . '</p>';
                echo '<p> Post ID: ' . $row['post_id'] . '</p>';
            }
        } 
        else {
            echo '<p> No results found.</p>';
        }


        mysqli_close($conn);

        ?>
        </div>
        

        <div class="container">
            <a href="More details.php" class="btn btn-dark"> More Details</a>
      
        </div>

        



   
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <br>
    <?php include 'footer.html'; ?>
  </body>
</html>