<?php
    session_start();
    $conn = new mysqli("localhost", "root", "", "connect");
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        header("Location: .php");
    }

    else{
        $announcement = $_POST["announcement"];
        $username = $_SESSION["username"];

        $sql = "INSERT INTO posts (post_content, username) VALUES ('$announcement', '$username')";

        $result = mysqli_query($conn, $sql);

        if ($result) {
        echo "The post was successfully inserted into the database.";
            mysqli_close($conn);
            header("Location:User Profile.php");

        } else {
            echo "The post could not be inserted into the database.";
            mysqli_close($conn);
            header("Location:User Profile.php");
        }

        

    }
?>
