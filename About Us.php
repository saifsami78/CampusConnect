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
      <style>
        h5{
          color: mediumseagreen;
        }
      </style>



      <div class="container">
        <br>
        <br>
        <br>
        <br>
        <p>Our Campus Connect website is a vibrant online platform designed as part of the CSE 482L course, aimed at bridging the gap and fostering connections among students within our university community. With features such as personalized profiles, interactive discussion forums, and a space to share campus-related updates, we provide a digital hub for students to make friends, engage in meaningful conversations, and stay informed about university events. While the platform doesn't include real-time messaging, our goal is to create a dynamic virtual campus where students can collaborate, share experiences, and build lasting relationships, thereby enriching their university journey</p>
        <br>
        <br>

        <h5>Members : </h5>
        <br>
        
        <p>Md. Saif Uddin Sarker</p>
        <p>Mansib Nawaz</p>
      </div>

      <div class="container">
        <br>
        <br>
        <h3>Having Problem finding the location ? </h3>
        <br>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.0979540596095!2d90.42298167513317!3d23.81511558628923!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c64c103a8093%3A0xd660a4f50365294a!2sNorth%20South%20University!5e0!3m2!1sen!2sbd!4v1696787861524!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

      </div>

      <br>
      <br>
      <br>
      <br>
      <br>
      <br>

      <?php include 'footer.html'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>