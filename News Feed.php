<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Campus Connect </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
      <?php include 'navbar.php'; 
      ?>
     
      </div>

      <div>
        <h2><b>Posts</b></h2>
          <?php


            
            $conn = mysqli_connect("localhost", "root", "", "connect");

            // Check the connection
            if (!$conn) {
              die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "SELECT username, post_content FROM posts";
            $result = mysqli_query($conn, $sql);

            $rows = [];
            while ($row = mysqli_fetch_assoc($result)) {
              $rows[] = $row;
            }

            $num = count($rows) - 1;
            for ($i = $num; $i >= 0; $i--) {
              echo "<h4>" . $rows[$i]['username'] . "</h4>";
              echo $rows[$i]['post_content'];
            }


            mysqli_close($conn);
          ?>
      </div>
      

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>