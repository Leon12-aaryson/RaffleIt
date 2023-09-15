<?php
require "dbconn.php";

//contact form data
if (isset($_POST['submit'])) {
    $eventname = $_POST['eventname'];
    $eventdate = $_POST['eventdate'];
    $enddate = $_POST['enddate'];

    $sql = "INSERT INTO events (eventname, eventdate, enddate) VALUES (:eventname, :eventdate, :enddate)";
    /** @var TYPE_NAME $conn */
    $querry = $conn->prepare($sql);

    $data = [
        ':eventname' => $eventname,
        ':eventdate' => $eventdate,
        ':enddate' => $enddate
    ];

    $insertdata = $querry->execute($data);

    if (isset($insertdata)) {
        $_SESSION['message'] = "Data Inserted";
    } else {
        $_SESSION['message'] = "Data insertion failed";
    }
    header('Location: eventlist.php');
    die();
}
