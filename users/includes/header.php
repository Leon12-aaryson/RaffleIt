<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Raffleitapp">
    <meta name="description" content=" Welcome to Raffleitapp.">
    <meta name="keywords" content="Raffleit, Raffleitapp, fundraising, raffles, organisations, raffle, tickets">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="author" content="Aaron Leonard Oluk"> <!-- Favicons -->
    <!-- <link href="assets/images/badge.png" rel="icon"> -->



    <!-- =====================  Google fonts ======================= -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./../static/styles/css/main.css">
    <link rel="stylesheet" href="./../static/styles/css/mediaqr.css">
    <link rel="stylesheet" href="./../static/styles/css/nav.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./../static/styles/css/style.css">
    <link rel="stylesheet" href="./../static/styles/css/styles.css">
    <link rel="stylesheet" href="./assets/css/index.css">
    <link rel="stylesheet" href="./assets/css/admin.css">

    <!-- ========================= CDNS ============================ -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title><?php echo $title; ?></title>
    <style>
        /* Set the background image */
        .hero-section {
            background: linear-gradient(0deg, rgba(0, 0, 0, 0.63) 0%, rgba(0, 0, 0, 0.63) 100%), url('./assets/img/bg-img.jpeg'), lightgray 50% / cover no-repeat;
            /* background: url('./assets/img/bg-img.jpeg') ; */
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            min-height: 25vh;
        }

        /* Customize the opacity of the navbar */
        .navbar {
            background: rgba(33, 82, 115, 0.01);
            backdrop-filter: blur(75px);
            /* Adjust the alpha value for desired transparency */
        }

        /* Customize the color of the navbar text */
        .navbar-dark .navbar-nav .nav-link {
            color: #000;
            /* Change to your desired text color */
        }
    </style>
</head>


<?php require_once "controllerUserData.php"; ?>
<?php

$email = $_SESSION['email'];
$password = $_SESSION['password'];
if ($email != false && $password != false) {
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if ($run_Sql) {
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if ($status == "verified") {
            if ($code != 0) {
                header('Location: reset-code.php');
            }
        } else {
            header('Location: user-otp.php');
        }
    }
} else {
    header('Location: index.php');
}
?>

<body>