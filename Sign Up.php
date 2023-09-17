<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Campus Connect </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    
      <div class="container">
            <div class="row">
                <div class="col-4">
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <img src="logo.png" alt="what">
                </div>
                <div class="col-2">

                </div>
                <div class="col-6">
                    <br>
                    <br>
                    <br>
                    <br>
                    <p> Name </p>
                  
                    <form action="signup.php" method="post">
                        <div class="row">
                          <div class="col">
                            <input type="text" name="firstname" class="form-control" placeholder="First name" aria-label="First name">
                          </div>
                          <div class="col">
                            <input type="text" name="lastname" class="form-control" placeholder="Last name" aria-label="Last name">
                          </div>
                        </div>
                        <br>
                        <label for="exampleFormControlInput1" class="form-label">Username</label>
                        <input type="username" name = "username" class="form-control" id="exampleFormControlInput1" placeholder="It needs to be unique" required>
                        <br>
                        <label for="exampleFormControlInput1" class="form-label">Email Address</label>
                        <input type="email" name = "email" class="form-control" id="exampleFormControlInput1" placeholder="something@northsouth.edu" required>
                        <br>
                        <label for="exampleFormControlInput1" class="form-label">Password</label>
                        <input type="password" name = "password" class="form-control" id="exampleFormControlInput1" placeholder="must be 6 digit long" required>
                
                        <br>

                        <p>In which club you have interesy ? (If none choose I am not interested to any club)</p>
                        <select class="form-select" name="club_interest" Default aria-label="Default select example">
                            <option selected> </option>
                            <option value="1">Drama and Cine Club</option>
                            <option value="2">Communications Club</option>
                            <option value="3">Athletics Club</option>
                            <option value="4">Art and Photography Club </option>
                            <option value="5"> I am not interested in any club </option>
                        </select>
                        <br>
                        <button type="submit" class="btn btn-outline-success"> Submit </button>
                    </form>
                    


                    

    
                </div>
            </div>
            
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <br>
    <?php include 'footer.html'; ?>
  </body>
</html>