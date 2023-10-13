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
            <h4 class="title my-4 text-center text-lg-center">Tell us about yourself</h4>
            <form>
                <div class="form-group mb-4">
                    <label for="">Image Upload</label>
                    <input type="file" id="imageInput" hidden accept="image/*">
                    <div class="preview-img">
                        <img src="./assets/img/user.png" id="imgs" alt="">
                    </div>
                </div>
                <div class="row gap-0 justify-content-center">
                    <div class="col-12 col-md-6">
                        <div class="form-group mb-4">
                            <label for="">First Name</label>
                            <input type="text">
                        </div>
                       
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group mb-4">
                            <label for="">Last Name</label>
                            <input type="text">
                        </div>
                       
                    </div>
                </div>
                <div class="form-group mb-4">
                            <label for="">Display Name</label>
                            <input type="text" placeholder="Optional">
                            <span  class="text-muted" style="font-size: 12px;">This how your name will be displayed in the account section</span>
                        </div>

               <div class="form-group mb-4">
                <label for="email">Email Address</label>
                <input type="email" name="" id="email">
               </div>
               <div class="form-group mb-4">
                <label for="about">Tell us alittle about yourself</label>
                <textarea name="" id="about" cols="30" rows="10" placeholder="Write something..."></textarea>
               </div>
               <div class=" d-flex mb-4 align-items-center">
                <input type="checkbox" style="width: auto; transform: scale(1.3); margin-right:12px"  name="" id="agreement">
                <label for="agreement">I have read and agree to the ios Agreement</label>
               </div>
                <div class="form-group">
                    <button type="submit" class="submit-btn">Complete Profile</button>
                </div>
            </form>
        </div>
    </div>
</main>
<footer>
    <?php include("./footer.php") ?>

</footer>