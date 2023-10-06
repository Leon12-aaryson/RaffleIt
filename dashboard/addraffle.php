<?php
$title = "Raffles";
require "header.php";

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
?>

<div class="row whole">
    <?php
    include "sidebar.php";
    ?>
    <div class="col-md-8 ml-4 whole-dash">
        <div class="startcard col-12">
            <h4>Raffles</h4>
        </div>
        <div class="row p-2 col-md-6">
            <div class="card regcard p-1">
                <div class="card-body">
                    <!-- <h5 class="card-title">Create Raffles</h5> -->
                    <form action="dbraffle.php" class="form-group" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="creator" value="<?php echo $email = $_SESSION['email']; ?>">
                        <div class="form-group">
                            <label for="hostname">Host Name</label>
                            <input id="hostname" class="form-control" type="text" name="hostname" placeholder="Enter Host name">
                        </div>
                        <div class="form-group">
                            <label for="reason">Reason</label>
                            <textarea name="reason" id="reason" type="text" class="form-control" cols="30" rows="5" placeholder="Enter Reason for raffle"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="picture">Picture</label>
                            <input id="picture" class="form-control" type="file" name="picture" placeholder="Upload Raffle picture">
                        </div>
                        <div class="form-group">
                            <label for="startdate">Raffle Start Date</label>
                            <input type="date" name="startdate" id="startdate" class="form-control" placeholder="Start date">
                        </div>
                        <div class="form-group">
                            <label for="enddate">End Date</label>
                            <input type="date" name="enddate" id="enddate" class="form-control" placeholder="End date">
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit">SUBMIT</button>
                    </form>
                </div>
            </div>
        </div>
    </div>