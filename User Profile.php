<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Campus Connect </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <!Navigation Bar>
    <nav class="navbar navbar-expand-lg bg-body-tertiary navbar bg-dark border-bottom border-body" data-bs-theme="dark"">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Home </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"> </span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="About Us.html">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Faculty Info</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Lost and Found</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Club Info.html">Club Info </a>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>
      <! Navigation Bar Chapter finished >

     
      <br>
      <br>
     
      </div>

      <div class="container">
        <div class="row">
       
            <div class="col-8">
              </div>
                <p> Name :  $Name </p>
                <p> Username :  $Username</p>
                <p> Email Id : $Email_Id</p>
                <p> Club Interested : $interested_club</p>
                <p>Which categories of post you don't want to see </p>
               
            </div>
            <div class="col-4">
              <a href="Edit.php" class="btn btn-dark"> Edit </a>
            </div>
        </div>
      </div>

     
      


    <br>
    

    <div class="container">
        <hr>
        <hr>
    </div>

    <div class="container">
        <form>
            <div class="form-group">
                <label for="Post"> Want to Post on Anything ? </label>
                <textarea class="form-control" id="announcement" name="announcement" rows="4" cols="6"></textarea>
                <br>
                <input type="file" class="form-control-file" id="photo" name="photo">
            </div>
            <br>
            <button type="submit" class="btn btn-dark">Post it!</button>
        </form>
    </div>
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>