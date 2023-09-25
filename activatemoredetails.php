<?php

session_start();

if (!isset($_SESSION['username'])) {
    echo "<script>top.window.location = './index.php'</script>";
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Campus Connect</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
<?php include 'navbar.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>
<br>
</html>


<?php

$post_id = $_POST['post_id'];

$conn = mysqli_connect('localhost', 'root', '', 'connect');

if ($conn === false) {
    die('Connection failed: ' . mysqli_connect_error());
}

$sql = "SELECT product_name, announcement, contact_method, photo_link FROM lost_and_found WHERE post_id = $post_id";
$result = mysqli_query($conn, $sql);

if ($result === false) {
    die('Query failed: ' . mysqli_error($conn));
}

if (mysqli_num_rows($result) === 0) {
    echo '<p>No results found.</p>';
} else {
    $row = mysqli_fetch_assoc($result);

    echo '<h2><center>Product Name: ' . $row['product_name'] . '</center></h2>';
    echo '<br>';

    echo '<div style="display: flex; justify-content: center; align-items: center; height: 400px;">';
    echo '<img src="' . $row['photo_link'] . '" width="180" height="300" alt="Product Image">';
    echo '</div>';

    echo '<br>';
    echo '<br>';

    echo '<p><center>Product Details: ' . $row['announcement'] . '</center></p>';
    echo '<p><center>Contract Method: ' . $row['contact_method'] . '</center></p>';
    echo '<br>';
}

mysqli_close($conn);

?>

<?php include 'footer.html'; ?>
