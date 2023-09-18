<?php
session_start();

if (!isset($_SESSION['username'])) {
    echo "<script>top.window.location = './index.php'</script>";
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $conn = mysqli_connect('localhost', 'root', '', 'connect');

    if ($conn === false) {
        die('Connection failed: ' . mysqli_connect_error());
    }
    $post_id = $_POST['post'];
    $content = $_POST['content'];

    $sql = "INSERT INTO report (post_id, content) VALUES ('$post_id', '$content')";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
    echo "Reported!";
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
       #ok{
        color: mediumseagreen;
       }
     </style>

    <h3 id="ok"><center> Report Page </cente></h3>
     
     <div class="container">
        <p>If you find any post inappropriate then you can report here </p>
        
        <form action="Report.php" method="post">
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Post ID</label>
                <input type="text" name="post"class="form-control" id="exampleFormControlInput1" placeholder="Please write down the post ID" required>
                </div>
                <br>
                <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Write down why do you think this post is inappropriate? </label>
                <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="5" required></textarea>
                </div>
                <br>
                <button type="submit" class="btn btn-success"> Submit  </button>
        </form>

     </div>
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <br>
    <br>
    <br>
    <br>
    <?php include 'footer.html'; ?>
  </body>
</html>


