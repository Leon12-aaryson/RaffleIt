<?php
$title = "Dashboard | RaffleIt";
$url_file = "addraffle.php";
$file_name = "Create Raffles";
$title_name = "Create Raffles";
?>
<?php include_once("includes/header.php") ?>
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

<header>
    <?php include("includes/nav.php"); ?>
</header>
<main>
    <div class="admin-main-container p-3">
        <div class="row p-3">
            <?php
            include "side.php";
            ?>
            <div class="col-12 col-md-9">
                <div class="col-md-8 ml-4 whole-dash">
                    <div class="startcard col-12">
                        <h4>Raffles</h4>
                    </div>
                    <div class="row p-2 col-md-8">
                        <div class="card regcard p-1" style="border: none;">
                            <div class="card-body">
                                <!-- <h5 class="card-title">Create Raffles</h5> -->
                                <form action="dbraffle.php" class="form-group" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="creator" value="<?php echo $email = $_SESSION['email']; ?>">
                                    <!-- <div class="form-group">
                                        <label for="hostname">Host Email</label>
                                        <input id="hostname" class="form-control" type="email" name="creator" placeholder="Enter your email">
                                    </div> -->
                                    <div class="form-group">
                                        <label for="hostname">Host Name</label>
                                        <input id="hostname" class="form-control" type="text" name="hostname" placeholder="Enter Host name">
                                    </div>
                                    <div class="form-group">
                                        <label for="reason">Reason</label>
                                        <input name="reason" id="reason" type="text" class="form-control" placeholder="Enter Reason for raffle">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea name="description" id="description" type="text" class="form-control" cols="30" rows="5" placeholder="Description for raffle"></textarea>
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
            </div>
        </div>
    </div>
</main>