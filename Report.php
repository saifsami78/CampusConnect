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

    <h3><center> Report Page </cente></h3>
     <div class="container">
        <p>If you find any post inappropriate then you can report here </p>
        
        <form action="Report.php" method="post">
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Post ID</label>
                <input type="text" name="post_id"class="form-control" id="exampleFormControlInput1" placeholder="Please write down the post ID" required>
                </div>
                <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Write down why do you think this post is inappropriate? </label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
                </div>
                <br>
                <button type="submit" class="btn btn-success">Submit to Report </button>
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