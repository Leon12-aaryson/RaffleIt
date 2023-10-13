<?php
$title = "Admin Dashboard | RaffleIt";
$url_file = "dashboard.php";
$file_name = "Dashboard";
$title_name = "Admin Dashboard";
?>
<?php include_once("./includes/header.php") ?>
<header>
    <?php include("./includes/nav.php"); ?>
</header>
<main>
    <div class="admin-main-container p-3">
        <div class="row p-3">
            <div class="col-12 col-md-3">
                <div class="admin-sidebar">
                    <li class="sidebar-item"><a href="">My Tickets</a></li>
                    <li class="sidebar-item"><a href="">Dashboard</a></li>
                    <li class="sidebar-item"><a href="">Raffles</a></li>
                    <li class="sidebar-item"><a href="">Addresses</a></li>
                    <li class="sidebar-item active"><a href="">Account Details</a></li>
                    <li class="sidebar-item"><a href="">Payment Method</a></li>
                    <li class="sidebar-item"><a href="">Logout</a></li>
                </div>
            </div>
            <div class="col-12 col-md-9">
                <div class="admin-container">
                    <div class="admin-card">
                        <form>

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
                                <span class="text-muted" style="font-size: 12px;">This how your name will be displayed in the account section</span>
                            </div>

                            <div class="form-group mb-4">
                                <label for="email">Email Address</label>
                                <input type="email" name="" id="email">
                            </div>

                            <h3 class="pass-title">Password Change</h3>
                            <div class="form-group mb-2">
                                <label for="">Current password (leave blank to leave unchanged)</label>
                                <div class="pass">
                                    <input id="password" type="password" readonly value="1234567890">
                                    <i id="togglePassword" class="bi bi-eye-fill"></i>

                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <label for="">New password (leave blank to leave unchanged)</label>
                                <div class="pass">
                                    <input id="npassword" type="password">
                                    <i id="ntogglePassword" class="bi bi-eye-fill"></i>

                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <label for="">Confirm password</label>
                                <div class="pass">
                                    <input id="cpassword" type="password">
                                    <i id="ctogglePassword" class="bi bi-eye-fill"></i>

                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="submit-btn">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>


<?php include_once("./includes/footer.php") ?>