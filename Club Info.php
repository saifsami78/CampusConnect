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


    <div>
        <br>
        <br>
        <h1 > Art & Photography Club </h1>
        <p>President - Ashab Abid Shad
            Vice President - Shariba Mashrura
            General Secretary -  Tanjil Mahmud
            Treasurer - Navila Kabir
        </p>
        <br>
        <h5>Faculty Advisor</h5>
        <p>Mr. Shahriar Iqbal Raj

        shahriar.raj@northsouth.edu
        </p>
        <br>
        <h1 > Athletics Club   </h1>
        <p>President - Md. Rashiq Mahmud Anik
            Vice President(Game & Development) - Md. Sayem Ahmed 
            Vice President (Marketing)- Md. Emran Howlder
            General Secretary - Md. Mohin Uddin Sunmoon
            Joint Secretary- Anwarul Islam Munna
            Joint Secretary- Samsia Matin                                   
            Joint Secretary- Humayra Akhter Oyshi
        </p>
        <br>
        <h5> Faculty Advisor	</h5>
        <p>
            Md. Mehedi Hasan

            mehedi.hasan11@northsouth.edu
        </p>

        <br>
        <h1 > Cine and Drama Club, NSU   </h1>
        <p>
            President - Debangshu Pallab
            Vice President - Md. Muanna Zilan
            General Secretary - Devodyuti Aich
            Joint Secretary- Humayun Ahmed
            Treasurer - Amani Islam 
        </p>
        <br>
        <h5> Faculty Advisor	</h5>
        <p>
            Ms. Parisa Shakur

            parisa.shakur@northsouth.edu
        </p>

        <br>
        <h1 >  Communications Club  </h1>
        <p>
            President - Ali Sadman Sakib
            Vice President - Nusaiba Mirza
            General Secretary -
            Treasurer - Labib
        </p>
        <br>
        <h5> Faculty Advisor	</h5>
        <p>
            Musharrat Hossain 

            musharrat.hossain@northsouth.edu
        </p>      

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        <br>
        <?php include 'footer.html'; ?>
    </body>
</html>