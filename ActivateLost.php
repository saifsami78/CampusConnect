<?php
session_start();

if (!isset($_SESSION['username'])) {
    echo "<script>top.window.location = './index.php'</script>";
}

$username = $_SESSION['username'];
$product_name = $_POST['product_name'];
$announcement = $_POST['announcement'];
$contract_method = $_POST['contract_method'];

$conn = mysqli_connect('localhost', 'root', '', 'connect');
if ($conn === false) {
    die('Connection failed: ' . mysqli_connect_error());
}

// Get the uploaded photo file
$photo = $_FILES['photo'];

// Check if the photo is valid
if ($photo['error'] === UPLOAD_ERR_OK) {
    // Get the photo filename
    $photo_filename = $photo['name'];

    // Create a unique filename for the photo
    $unique_filename = uniqid() . '_' . $photo_filename;

    // Save the photo to the server
    move_uploaded_file($photo['tmp_name'], 'uploads/' . $unique_filename);
}

// Insert the new post into the database
$sql = "INSERT INTO lost_and_found (username, product_name, announcement, contact_method, photo_link) VALUES ('$username', '$product_name', '$announcement', '$contract_method', 'uploads/$unique_filename')";

mysqli_query($conn, $sql);

mysqli_close($conn);

echo "Post added !" . "<br>";
header('Location: lost and found.php');
?>