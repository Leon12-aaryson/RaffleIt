<?php 

$title = "Raffleitapp";

include "header.php";

?>
<header>
    <?php include"nav.php" ?>
</header>
<main>
<div class="admin-container">
    <div class="admin-card">
        <h4 class="title">Login</h4>
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
            <div class="form-group mb-2">
                <div class="forgot-pass"><p><svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 21" fill="none">
<path d="M1.16663 11.375C1.16663 9.48938 1.16663 8.54657 1.75241 7.96079C2.3382 7.375 3.28101 7.375 5.16663 7.375H13.8333C15.7189 7.375 16.6617 7.375 17.2475 7.96079C17.8333 8.54657 17.8333 9.48938 17.8333 11.375V13.875C17.8333 16.7034 17.8333 18.1176 16.9546 18.9963C16.0759 19.875 14.6617 19.875 11.8333 19.875H7.16663C4.3382 19.875 2.92399 19.875 2.04531 18.9963C1.16663 18.1176 1.16663 16.7034 1.16663 13.875V11.375Z" stroke="#215273"/>
<path d="M13.6666 6.33333V5.29167C13.6666 2.99048 11.8011 1.125 9.49992 1.125V1.125C7.19873 1.125 5.33325 2.99048 5.33325 5.29167V6.33333" stroke="#215273" stroke-linecap="round"/>
<circle cx="9.49996" cy="13.6248" r="2.08333" fill="#215273"/>
</svg></p> <p>Forgot Password?</p> </div>
            </div>
            <div class="form-group">
                <button type="submit" class="submit-btn">Login</button>
            </div>
        </form>
    </div>
</div>
</main>
<footer>
<?php include("./footer.php") ?>

</footer>