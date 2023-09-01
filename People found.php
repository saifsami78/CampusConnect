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
        <p>All the stuff people has got is listed below .If what you lost is listed below please collect the product id and click on More details and then give the product id.You will get more details and way to contract </p>
      </div>
      
    
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
                echo '<p><strong> Product name: ' . $row['product_name'] . '</p></strong>';
                echo '<p><strong> Post ID: ' . $row['post_id'] . '</strong></p>';
            }
        } 
        else {
            echo '<p>No results found.</p>';
        }


        mysqli_close($conn);

        ?>
        </div>
        

        <div class="container">
            <a href="More details.php" class="btn btn-dark"> More Details</a>
      
        </div>

        



   
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>