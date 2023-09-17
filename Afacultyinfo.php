<?php

    $photo = $_SESSION['photo'];
    $tellyourself = $_POST['tellyourself'];
    $research = $_POST['rsinterest'];
    $office_hour = $_POST['officehour'];
    $fullname = $_POST['fullname'];
    $Department = $_POST['Departmentname'];
    $facultyID = $_POST['facultyID'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];


    $conn = mysqli_connect('localhost', 'root', '', 'connect');

    if ($conn === false) {
        die('Connection failed: ' . mysqli_connect_error());
    }

    
    $sql = "INSERT INTO facultyinfo (Tellyourself, photo_link, research, Office_Hour, fullname, Department, Faculty_Id, Email, Phone) VALUES ('$tellyourself', '$photo', '$research', '$office_hour', '$fullname', '$Department', '$facultyID', '$email' , '$phone')";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
    echo "updated!";
    
    header('Location: User Profile.php');

?>
