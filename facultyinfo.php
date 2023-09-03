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

      <div class="container">

        <h3><center>Request to fill this form. All your infomation will be available in this website and everyone will be able to see it </center></h3>
        <br>
        <br>
        <form action="">

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Upload your Photo </label>
                    <br>
                    <input type="file" class="form-control-file" id="photo" name="photo">
                </div>



                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Full Name </label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Faculty ID </label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                </div>

                <div class="input-group">
                    <span class="input-group-text">You can describe about yourself in few words  </span>
                    <textarea class="form-control" aria-label="With textarea"></textarea>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"> Office Hour   </label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                </div>


                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"> Email  </label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@northsouth.edu">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"> Contact Number  </label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                </div>

               


                <button type="submit" class="btn btn-primary"> Submit </button>


        </form>

      </div>
      
      

      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>