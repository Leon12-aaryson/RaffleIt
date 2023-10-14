<?php
require "dbconn.php";
//gallery data form

$target_dir = "users/uploads/";
// $target_dir = "dashboard/static/uploads/";
$target_file = $target_dir . basename($_FILES["picture"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


// Check if image file is a actual image or fake image
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["picture"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if (
    $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["picture"]["tmp_name"], $target_file)) {
        echo "The file " . basename($_FILES["picture"]["name"]) . " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["picture"]["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
    // }
    $check = getimagesize($_FILES["picture"]["tmp_name"]);
    $hostname = $_POST['hostname'];
    $description = $_POST['description'];
    $reason = $_POST['reason'];
    $startdate = $_POST['startdate'];
    $enddate = $_POST['enddate'];

    $sql = "INSERT INTO raffles (creator, hostname, reason, picture, startdate, enddate, description) VALUES (:creator, :hostname, :reason, :picture, :startdate, :enddate, :description)";
    $querry = $conn->prepare($sql);

    $data = [
        ':hostname' => $hostname,
        ':reason' => $reason,
        ':creator' => $creator,
        ':picture' => $target_file,
        ':startdate' => $startdate,
        ':enddate' => $enddate,
        ':description' => $description
    ];

    $insertdata = $querry->execute($data);

    if (isset($insertdata)) {
        $_SESSION['message'] = "Data Inserted";
    } else {
        $_SESSION['message'] = "Data insertion failed";
    }
    header('Location: raffles.php');
    die();
}
