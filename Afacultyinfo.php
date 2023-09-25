<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tellyourself = $_POST['tellyourself'];
    $research = $_POST['rsinterest'];
    $office_hour = $_POST['officehour'];
    $fullname = $_POST['fullname'];
    $Department = $_POST['Departmentname'];
    $facultyID = $_POST['facultyID'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    // Upload photo
    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($_FILES["photo"]["name"]);

    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFile)) {
        // Photo uploaded successfully
        $photo = $targetFile;

        // Establish a database connection
        $conn = mysqli_connect('localhost', 'root', '', 'connect');

        if ($conn === false) {
            die('Connection failed: ' . mysqli_connect_error());
        }

        // Insert faculty information into the database
        $sql = "INSERT INTO facultyinfo (Tellyourself, photo_link, research, Office_Hour, fullname, Department, Faculty_Id, Email, Phone) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssssssss", $tellyourself, $photo, $research, $office_hour, $fullname, $Department, $facultyID, $email, $phone);

        if ($stmt->execute()) {
            echo "Profile updated!";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
        $conn->close();
    } else {
        echo "Photo upload failed.";
    }
}
?>
