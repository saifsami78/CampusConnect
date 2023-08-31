<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Campus Connect </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
      #message1 {
        display: flex;
        justify-content: center;
        background-color: black;
        color: white;
      }
    </style>
    
  </head>
  <body>

    <div class="container">
        <div class="row">
            <div class="col-5">

                <br>
                <br>
                <img src="logo.png" alt="A local image">
            </div>
            <div class="col-2">

            </div>
            <div class="col-5">
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <form action="supplimentarylogin.php" method = "post">
                      <div class="mb-3">
                          <label for="exampleFormControlInput1" class="username">Username</label>
                          <input type="username" name = "username" class="form-control" id="exampleFormControlInput1" placeholder="" required>
                      </div>                  
                      <label for="inputPassword5" class="form-label">Password</label>
                      <input type="password" name = "password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" required>
                      <div id="passwordHelpBlock" class="form-text">
                      </div>
                      <br>
                      <br>
                      <button type="submit" class="btn btn-dark"> Log in  </button>
                </form>
                <br>
                <br>
                <a href="Sign Up.php"> Not having an account ? </a>
            </div>
        </div>
      </div>

      <br>
      <br>
      <div id="message1">
        <p>An website built as part of CSE 482L Course </p>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>