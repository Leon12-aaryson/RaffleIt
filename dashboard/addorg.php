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
                    <form action="dborg.php" class="form-group" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="owner" value="<?php echo $email = $_SESSION['email']; ?>">
                        <div class="form-group">
                            <label for="orgname">Organisation Name</label>
                            <input id="orgname" class="form-control" type="text" name="orgname" placeholder="Enter Organisatio name">
                        </div>
                        <div class="form-group">
                            <label for="descrip">Organisation Details</label>
                            <textarea name="descrip" id="descrip" type="text" class="form-control" cols="30" rows="5" placeholder="Organisation Details"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="logo">Organisation Logo</label>
                            <input id="logo" class="form-control" type="file" name="picture" placeholder="Upload Organisation logo">
                        </div>
                        <div class="form-group">
                            <label for="address">Organisation Address</label>
                            <input type="text" name="address" id="address" class="form-control" placeholder="Organisation Address">
                        </div>
                        <div class="form-group">
                            <label for="enddate">Organisation Email</label>
                            <input type="email" name="orgemail" id="enddate" class="form-control" placeholder="Organisation Email">
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit">SUBMIT</button>
                    </form>
                </div>
            </div>
        </div>
    </div>