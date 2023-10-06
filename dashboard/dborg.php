<?php
require "dbconn.php";
//gallery data form

$target_dir = "dashboard/static/uploads/";
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
    $orgname = $_POST['orgname'];
    $description = $_POST['descrip'];
    $ownermail = $_POST['owner'];
    $orgemail = $_POST['orgemail'];
    $address = $_POST['address'];

    $sql = "INSERT INTO organisation (owner, orgname, description, logo, address, orgemail) VALUES (:owner, :orgname, :description, :logo, :address, :orgemail)";
    $querry = $conn->prepare($sql);

    $data = [
        ':orgname' => $orgname,
        ':description' => $description,
        ':logo' => $target_file,
        ':address' => $address,
        ':owner' => $ownermail,
        ':orgemail' => $orgemail
    ];

    $insertdata = $querry->execute($data);

    if (isset($insertdata)) {
        $_SESSION['message'] = "Data Inserted";
    } else {
        $_SESSION['message'] = "Data insertion failed";
    }
    header('Location: index.php');
    die();
}
