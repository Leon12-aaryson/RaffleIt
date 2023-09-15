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
    header('Location: login-user.php');
}

require "dbconn.php";

if (isset($_POST['delete'])) {
    $id = $_POST['delete'];

    try {
        $sql = "DELETE FROM events where id=:id";
        $statement = $conn->prepare($sql);
        $data = [':id' => $id];
        $execdata = $statement->execute($data);

        if ($execdata) {
            $_SESSION['message'] = "Data Deleted";
        } else {
            $_SESSION['message'] = "Data deletion failed";
        }

        header('Location: eventlist.php');
        die();
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    header("location:eventlist.php");
}

if (isset($_POST['del_recent'])) {
    $id = $_POST['del_recent'];

    try {
        $sql = "DELETE FROM recent where id=:id";
        $statement = $conn->prepare($sql);
        $data = [':id' => $id];
        $execdata = $statement->execute($data);

        if ($execdata) {
            $_SESSION['message'] = "Data Deleted";
        } else {
            $_SESSION['message'] = "Data deletion failed";
        }

        header('Location: eventlist.php');
        die();
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    header("location:eventlist.php");
}

if (isset($_POST['update_event'])) {
    $id = $_POST['id'];
    $eventname = $_POST['eventname'];
    $eventdate = $_POST['eventdate'];
    $enddate = $_POST['enddate'];

    try {
        $sql = "UPDATE events SET eventname=:eventname, eventdate=:eventdate, enddate=:enddate WHERE id=:id";
        $statement = $conn->prepare($sql);
        $data = [
            ':id' => $id,
            ':eventname' => $eventname,
            ':eventdate' => $eventdate,
            ':enddate' => $enddate
        ];
        $execdata = $statement->execute($data);

        if ($execdata) {
            $_SESSION['message'] = "Data Updated";
        } else {
            $_SESSION['message'] = "Data update failed";
        }

        header('Location: eventlist.php');
        die();
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    header("location:eventlist.php");
}