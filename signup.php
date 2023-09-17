<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "connect";

    $connection = new mysqli($servername, $username, $password, $dbname);



    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $club_interest = $_POST['club_interest'];

    if($connection -> connect_error){
        die('Connection Failed: '.$connection->connect_error);
    }
    else{
        $statement = $connection -> prepare("insert into signup (username, email, password, firstname, lastname, club_interest) value (?,?,?,?,?,?)");
        $statement -> bind_param('sssssi', $username, $email, $password, $firstname, $lastname, $club_interest);
        $statement -> execute();
        echo "Registration Completed";
        $statement -> close();
        $connection -> close();
        header("Location: index.php");
    }
   


?>