<?php

    $username = $_SESSION['username'];
    $product_name = $_POST['product_name'];
    $announcement = $_POST['announcement'];
    $contract_method = $_POST['contract_method'];

    $conn = mysqli_connect('localhost', 'root', '', 'connect');

    if ($conn === false) {
        die('Connection failed: ' . mysqli_connect_error());
    }

    
    $sql = "INSERT INTO lost_and_found (username, product_name, announcement, contract_method) VALUES ('$username', '$product_name', '$announcement', '$contract_method')";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
    echo "Post added !" . "<br>";
    
    header('Location: lost and found.php');

?>
