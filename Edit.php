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

     <div class="container">
            <form action="supplimentarylogin.php" method = "post">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="username">Change your First Name</label>
                    <input type="username" name = "firstname" class="form-control" id="exampleFormControlInput1" placeholder="Your New First Name" >
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="lastname">Change Last Name</label>
                    <input type="username" name = "lastname" class="form-control" id="exampleFormControlInput1" placeholder="Your New Last Name" >
                </div>
                <button type="submit" class="btn btn-dark"> Submit  </button>
            </form>
            <br>

            <form action="supplimentarylogin.php" method = "post">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="username">Change your Email</label>
                    <input type="username" name = "email" class="form-control" id="exampleFormControlInput1" placeholder="Your New Email" >
                </div>
                <button type="submit" class="btn btn-dark"> Submit  </button>
            </form>

            <br>
            <form action="supplimentarylogin.php" method = "post">
                <div class="mb-2">
                    <label for="exampleFormControlInput1" class="username">Write your New Password</label>
                    <input type="username" name = "password" class="form-control" id="exampleFormControlInput1" placeholder="New password" >
                </div>
                <button type="submit" class="btn btn-dark"> Submit  </button>
            </form>

            <br>
            <p> Change your interested club : </p>
            <form action="supplimentarylogin.php" method = "post">
                <div class="mb-3">
                    <select class="form-select" name="club_interest" Default aria-label="Default select example">
                        <option selected> </option>
                        <option value="1">Drama and Cine Club</option>
                        <option value="2">Communications Club</option>
                        <option value="3">Athletics Club</option>
                        <option value="4">Art and Photography Club </option>
                        <option value="5"> I am not interested in any club </option>
                    </select>
                    <button type="submit" class="btn btn-dark"> Submit  </button>
                </div>
                
            </form>
     </div>
   
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>