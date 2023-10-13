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
            <form>
                <div class="form-group mb-4">
                    <label for="">Username or email address</label>
                    <input type="text">
                </div>
                <div class="form-group mb-2">
                    <label for="">Password</label>
                    <div class="pass">
                        <input id="password" type="password">
                        <i id="togglePassword" class="bi bi-eye-fill"></i>

                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="submit-btn">Register</button>
                </div>
            </form>
        </div>
    </div>



    <div class="container">
        <div class="row">
            <!-- <div class="col-md-4 offset-md-4 form"> -->
            <div class="form login-form">
                <form action="signup-user.php" method="POST" autocomplete="">
                    <h2 class="text-center">Signup Form</h2>
                    <p class="text-center">It's quick and easy.</p>
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
                    <div class="form-group">
                        <input class="form-control" type="text" name="name" placeholder="Full Name" required value="<?php echo $name ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email Address" required value="<?php echo $email ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="cpassword" placeholder="Confirm password" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="signup" value="Signup">
                    </div>
                    <div class="link login-link text-center">Already a member? <a href="login-user.php">Login here</a></div>
                </form>
            </div>
        </div>
    </div>
</main>
<footer>
    <?php include("./footer.php") ?>

</footer>