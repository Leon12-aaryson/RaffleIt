<?php require_once "controllerUserData.php"; ?>

<?php
$title = "Raffleitapp";
include("./header.php");
?>
<header>
    <?php include "./nav.php" ?>
</header>
<main>
    <div class="admin-container">
        <div class="admin-card">
            <h4 class="title">Register</h4>
            <form action="register.php" method="POST">
                <?php
                if (count($errors) == 1) {
                ?>
                    <div class="alert alert-danger text-center">
                        <?php
                        foreach ($errors as $showerror) {
                            echo $showerror;
                        }
                        ?>
                    </div>
                <?php
                } elseif (count($errors) > 1) {
                ?>
                    <div class="alert alert-danger">
                        <?php
                        foreach ($errors as $showerror) {
                        ?>
                            <li><?php echo $showerror; ?></li>
                        <?php
                        }
                        ?>
                    </div>
                <?php
                }
                ?>
                <div class="form-group mb-4">
                    <label for="">Full Name</label>
                    <input type="text" name="name" placeholder="Full Name" required value="<?php echo $name ?>">
                </div>
                <div class="form-group mb-4">
                    <label for="email" id="email">Email address</label>
                    <input type="email" name="email" placeholder="Email Address" required value="<?php echo $email ?>">
                </div>
                <div class="form-group mb-4">
                    <label for="password">Password</label>
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <div class="form-group mb-2">
                    <label for="">Password</label>
                    <div class="pass">
                        <input id="password" type="password" name="cpassword" placeholder="Confirm password" required>
                        <i id="togglePassword" class="bi bi-eye-fill"></i>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="submit-btn" name="signup" value="Signup">Register</button>
                </div>
            </form>
        </div>
    </div>

</main>
<footer>
    <?php include("./footer.php") ?>

</footer>