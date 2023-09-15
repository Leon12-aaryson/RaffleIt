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

$title = "Update Events";
require "header.php";
?>

<div class="row whole">
    <?php
    include "sidebar.php";
    ?>
    <div class="col-md-8 ml-4 whole-dash">
        <div class="startcard col-12">
            <h4>Add Logos</h4>
        </div>
        <div class="row p-2">
            <div class="card regcard col-md-6 p-2">
                <div class="card-body">
                    <!-- <h5 class="card-title">Admission Form-A</h5> -->
                    <form action="dblogos.php" class="form-group" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="organisation">Organisation</label>
                            <input id="organisation" class="form-control" type="text" id="organisation"
                                name="organisation">
                        </div>
                        <div class="form-group">
                            <label for="picture">Logo</label>
                            <!-- <input type="image" src="" alt="" class="form-control-file" name="picture"> -->
                            <input id="picture" class="form-control-file" type="file" id="picture" name="picture"
                                placeholder="Upload file">
                        </div>
                        <div class="form-group">
                            <label for="upload_date">Upload Date</label>
                            <input id="upload_date" class="form-control" type="date" id="upload_date"
                                name="upload_date">
                        </div>
                        <button type="submit" class="form-group btn btn-primary" name="submit">SUBMIT</button>
                    </form>
                </div>
            </div>
        </div>
    </div>