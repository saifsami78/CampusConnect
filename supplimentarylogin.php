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
            header("Location: User Profile.php");
        } else {
            echo "Login failed.";
        }
    }

    $connection->close();
   


?>

