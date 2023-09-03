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
        <form action = "processpost.php" method = "post">
            <div class="form-group">
                <label for="Post"> Want to Post on Anything ? </label>
                <textarea class="form-control" id="announcement" name="announcement" rows="4" cols="6" required></textarea>
                <br>
                <input type="file" class="form-control-file" id="photo" name="photo">
            </div>
            <br>
            <button type="submit" class="btn btn-dark">Post it!</button>
        </form>
    </div>


    <div class="container">
        <hr>
        <hr>
    </div>

      <div class="container">
        <div class="row">
       
            <div>
              <h3><center>User Information </center></h3>
              <div>
                <p> Name :  $Name </p>
                <p> Username :  $Username</p>
                <p> Email Id : $Email_Id</p>
                <p> Club Interested : $interested_club</p>
                <p>Which categories of post you don't want to see </p>
               
            </div>
            <div class="col-4">
              <a href="facultyinfo.php" class="btn btn-dark"> If you are a faculty member, please click here !  </a>
            </div>
            <br>
            <div class="col-4">
              <a href="Edit.php" class="btn btn-dark"> Edit My Information </a>
            </div>
        </div>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>