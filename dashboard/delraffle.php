<?php
require "dbconn.php";

if (isset($_POST['delete'])) {
    $id = $_POST['delete'];

    try {
        $sql = "DELETE FROM raffles where id=:id";
        $statement = $conn->prepare($sql);
        $data = [':id' => $id];
        $execdata = $statement->execute($data);

        if ($execdata) {
            $_SESSION['message'] = "Data Deleted";
        } else {
            $_SESSION['message'] = "Data deletion failed";
        }

        header('Location: rafflelist.php');
        die();
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    header("location: rafflelist.php");
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

        header('Location: rafflelist.php');
        die();
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    header("location:rafflelist.php");
}

if (isset($_POST['update_raffle'])) {
    $id = $_POST['id'];
    $hostname = $_POST['hostname'];
    $reason = $_POST['reason'];
    $startdate = $_POST['startdate'];
    $enddate = $_POST['enddate'];

    try {
        $sql = "UPDATE raffles SET hostname=:hostname, reason=:reason, startdate=:startdate, enddate=:enddate WHERE id=:id";
        $statement = $conn->prepare($sql);
        $data = [
            ':id' => $id,
            ':hostname' => $hostname,
            ':reason' => $reason,
            ':startdate' => $startdate,
            ':enddate' => $enddate
        ];
        $execdata = $statement->execute($data);

        if ($execdata) {
            $_SESSION['message'] = "Data Updated";
        } else {
            $_SESSION['message'] = "Data update failed";
        }

        header('Location: rafflelist.php');
        die();
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    header("location:rafflelist.php");
}
