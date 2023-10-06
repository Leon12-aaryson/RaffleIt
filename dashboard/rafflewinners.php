<?php
$title = "Raffles";
require "header.php";
require "dbconn.php";

// for students table
$sql = "SELECT * FROM winners";
$querry = $conn->prepare($sql);

$retdata = $querry->execute();

$admit = $querry->fetchAll(PDO::FETCH_OBJ);
?>
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
?>

<div class="row whole">
    <?php
    include "sidebar.php";
    ?>
    <div class="col-md-8 ml-4 whole-dash">
        <div class="col-12 clas">
            <label for="">Raffle winners</label>
            <table class="table table-striped table-light table-borderless">
                <thead style="font-weight: 600;">
                    <tr>
                        <td>#</td>
                        <td>Name</td>
                        <td>Email</td>
                        <!-- <td>Edit</td>
                        <td>Delete</td> -->
                    </tr>
                </thead>
                <?php foreach ($admit as $samp) : ?>
                    <tr>
                        <td>
                            <?php echo $samp->id; ?>
                        </td>
                        <td>
                            <?php echo $samp->name; ?>
                        </td>
                        <td>
                            <?php echo $samp->mail; ?>
                        </td>
                        <!-- <td><a href="update.php?id=<?= $samp->id; ?>" class="text-primary">
                                <i class='bx bxs-edit'></i></a></td>
                        <td>
                            <form action="delraffle.php" method="POST">
                                <button type="submit" name="delete" value="<?= $samp->id; ?>" class="text-danger"><i
                                        class='bx bx-trash'></i></button>
                            </form>
                        </td> -->
                    </tr>
                <?php endforeach ?>
            </table>
        </div>

    </div>
</div>