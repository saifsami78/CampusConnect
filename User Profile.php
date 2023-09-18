<?php

session_start();

if(!isset($_SESSION['username'])){
    echo "<script>top.window.location = './index.php'</script>";
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>My Profile </title>
  </head>
  <body>
    
    <?php include 'navbar.php'; ?>


    <div class="container">
        <main>
            <!-- toggleable dynamic tab starts here -->
            <br>
            <div class="other-section">
                <ul class="nav nav-tabs justify-content-center">
                    <li class="nav-item"><a data-bs-toggle="tab" class="nav-link active" href="#Post_here"> Post </a></li>
                    <li class="nav-item"><a data-bs-toggle="tab" class="nav-link" href="#AboutMe">About Me </a></li>
                    <li class="nav-item"><a data-bs-toggle="tab" class="nav-link" href="#FacultyProfileMaking">Faculty Profile</a></li>
                </ul>

                <div class="tab-content">
                    <div id="Post_here" class="tab-pane active">
                        <form action = "processpost.php" method = "post">
                          <div class="form-group">
                            <br>
                            <br>
                          
                            <label for="Post"> Want to Post on Anything ? </label>
                            <textarea class="form-control" id="announcement" name="announcement" rows="4" cols="8" required></textarea>
                            <br>
                            
                          </div>
                        
                          <button type="submit" class="btn btn-success">Post it!</button>
                          <br>
                        </form>
                        <br>
                        <br>
                        <div class="container">
                          <style>
                            h3{
                              color: mediumseagreen;
                            }
                          </style>
                          <h3><center> All of your Previous Post </center></h3>
                          <?php
                            $name = $_SESSION['username'];
                            $conn = mysqli_connect('localhost', 'root', '', 'connect');

            
                            if ($conn === false) {
                              die('Connection failed: ' . mysqli_connect_error());
                            }

                            $name = mysqli_real_escape_string($conn, $name);

                            $sql = "SELECT post_content FROM posts where username = '$name' ";
                            $query_result = mysqli_query($conn, $sql);


                            if($query_result === false) {
                              die('Query failed: ' . mysqli_error($conn));
                            }

                            $rows = [];
                            while ($row = mysqli_fetch_assoc($query_result)) {
                              $rows[] = $row;
                            }

                            
                              
                              $num = count($rows) - 1;
                              for ($i = $num; $i >= 0; $i--) {


                                echo "<br>";

                                echo "<div class='card' style='box-shadow: 2px 2px 10px grey'>
                                <div class='card-body'>
                                  <p class='card-text'>". $rows[$i]['post_content'] ."</p>
                                  </div>
                                </div>";
                                echo "<hr>";
                                
                              }

                            mysqli_close($conn);
                          ?>
                        </div>
                    </div>
                    <div id="AboutMe" class="tab-pane fade">
                        <br>
                        <br>
                        <?php
                          $name = $_SESSION['username'];
                          $conn = mysqli_connect('localhost', 'root', '', 'connect');

          
                          if ($conn === false) {
                              die('Connection failed: ' . mysqli_connect_error());
                          }

                          $name = mysqli_real_escape_string($conn, $name);

                          $sql = "SELECT * FROM signup where username = '$name' ";
                          $query_result = mysqli_query($conn, $sql);


                          if ($query_result === false) {
                            die('Query failed: ' . mysqli_error($conn));
                            }

                          
                            if (mysqli_num_rows($query_result) === 0) {
                                echo '<p>No results found.</p>';
                            } else {
                                $row = mysqli_fetch_assoc($query_result);
                                $_SESSION["clubb"] = $row['club_interest'];
                                $club_name = "no name";
                                if($row['club_interest']== 1){
                                  $club_name = "Drama and Cine Club";
                                }
                                else if($row['club_interest'] == 2){
                                  $club_name = "Communications Club";
                                }
                                else if($row['club_interest'] == 3){
                                  $club_name = "Athletics Club";
                                }
                                else if($row['club_interest'] == 4){
                                  $club_name = "Art and Photography Club";
                                }
                                else if($row['club_interest'] == 5){
                                  $club_name = "You are not interested in any club ";
                                }

                            }
                          mysqli_close($conn);
                        ?>

                        <div class="container">
                          <div class="row">
                            <style>
                              h3{
                                color : mediumseagreen;
                              }
                              p{
                                text-decoration: bold;
                                color : black;
                              }
                            </style>
                                <h3><center>User Information </center></h3>
                                <br>
                                <br>
                                <div class="col">
                                    <table class="table">
                                        <tr>
                                            <th>Username</th>
                                            <td><?php echo $row['username']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Name</th>
                                            <td><?php echo $row['firstname'] . ' ' . $row['lastname']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td><?php echo $row['email']; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Interested Club </th>
                                            <td><?php echo $club_name; ?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                          </div>
                          <br>
                        
                          <center><a href="Edit.php" class="btn btn-success"> Edit My Information </a></center>
                        </div>
                    <div id="FacultyProfileMaking" class="tab-pane fade">
                        
                        <style>
                            h3{
                                color: mediumseagreen;
                            }
                        </style>

                        <br>

                        <div class="container">

                            <h3><center>This page is only for faculty members.If you are not a faculty member, please ignore it.All your infomation will be publicly available in this website and everyone will be able to see it </center></h3>
                            <br>
                            <br>
                            <form action="Afacultyinfo.php" method="post">


                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Upload your Photo </label>
                                        <br>
                                        <input type="file" class="form-control-file" id="photo" name="photo">
                                    </div>

                                    <div class="input-group">
                                        <span class="input-group-text">Describe about yourself in few words :   </span>
                                        <textarea class="form-control" aria-label="With textarea" name="tellyourself"></textarea>
                                    </div>

                                    <br>
                                    <p> Research Interest : </p>
                                    <div class="input-group">
                                        <textarea class="form-control" aria-label="With textarea" name="rsinterest"></textarea>
                                    </div>

                                <br>

                                <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label"> Office Hour   </label>
                                        <textarea class="form-control" id="exampleTextarea" rows="3" name="officehour"></textarea>
                                </div>


                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Full Name </label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="fullname">
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Department Name </label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="Departmentname">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Faculty ID </label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="facultyID">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label"> Email  </label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@northsouth.edu" name="email">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label"> Contact Number  </label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="phone">
                                    </div>
                                    <button type="submit" class="btn btn-success"> Submit </button>


                            </form>

                        </div>

                      
                    </div>
                </div>
            </div>
            <!-- toggleable dynamic tab ends here -->
        </main>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <br>
    <br>
  
    <?php include 'footer2.html'; ?>

  </body>
</html>

