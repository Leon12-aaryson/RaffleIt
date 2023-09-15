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

$title = "Events";
require "header.php";
?>

<div class="row whole">
    <?php
    include "sidebar.php";
    ?>
    <div class="col-md-8 ml-4 whole-dash">
        <div class="startcard col-12">
            <h4>Events</h4>
        </div>
        <div class="row p-2">
            <div class="card regcard col-md-5 p-2">
                <div class="card-body">
                    <h5 class="card-title">Upcoming Events</h5>
                    <form action="dbupcoming.php" class="form-group" method="POST">
                        <div class="form-group">
                            <label for="eventname">Event Name</label>
                            <input id="eventname" class="form-control" type="text" id="eventname" name="eventname"
                                placeholder="Enter Event name">
                        </div>
                        <div class="form-group">
                            <label for="eventdate">Event Date</label>
                            <input type="date" name="eventdate" id="eventdate" class="form-control"
                                placeholder="Start date">
                        </div>
                        <div class="form-group">
                            <label for="enddate">End Date</label>
                            <input type="date" name="enddate" id="enddate" class="form-control" placeholder="End date">
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit">SUBMIT</button>
                    </form>
                </div>
            </div>
            <div class="card regcard col-md-6 p-2">
                <div class="card-body">
                    <h5 class="card-title">Recent events</h5>
                    <form action="dbrecent.php" class="form-group" method="POST">
                        <div class="form-group">
                            <label for="eventname">Event Name</label>
                            <input id="eventname" class="form-control" type="text" name="eventname">
                        </div>
                        <div class="form-group">
                            <label for="eventdate">Event Date</label>
                            <input type="date" name="eventdate" id="eventdate" class="form-control"
                                placeholder="Event date">
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit">SUBMIT</button>
                    </form>
                </div>
            </div>
        </div>
    </div>