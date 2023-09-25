<?php
    session_start();
    $connection = new mysqli("localhost", "root", "", "connect");

    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $_SESSION["username"] = $username;
        $password = $_POST['password'];

        $sql = "SELECT * FROM signup WHERE username = '$username' AND password = '$password'";
        $result = $connection->query($sql);

        if ($result->num_rows == 1) {
            echo "Login successful!";
            $_SESSION["username"] = $username;
            $row = $result->fetch_assoc();
            if($row['type'] == 1){
                header("Location: User Profile.php");
            }
            else{
                header("Location: User Profile2.php");
            }
           
        } else {
            echo "Login failed.";
        }
    }

    $connection->close();
   


?>

