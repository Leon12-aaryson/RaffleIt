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
</main>
<footer>
<?php include("./footer.php") ?>

</footer>