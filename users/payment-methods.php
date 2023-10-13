<?php
 $title = "Dashboard | RaffleIt";
 $url_file = "dashboard.php";
 $file_name = "Account";
 $title_name = "Payment Method";
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
            <li class="sidebar-item"><a href="./ticket.php">My Tickets</a></li>
                <li class="sidebar-item"><a href="./dashboard.php">Dashboard</a></li>
                <li class="sidebar-item"><a href="">Raffles</a></li>
                <li class="sidebar-item "><a href="./address.php">Addresses</a></li>
                <li class="sidebar-item"><a href="account-details.php">Account Details</a></li>
                <li class="sidebar-item active"><a href="">Payment Method</a></li>
                <li class="sidebar-item"><a href="">Logout</a></li>
            </div>
        </div>
        <div class="col-12 col-md-9">
        <div class="admin-container" style="align-items: flex-start;">
                        <div class="admin-cardi">
                            <h3 class="head-title">Add Payment Method</h3>
                            <div class="row gy-3 gapx-2">
                                <div class="col-4">
                                    <div class="pay-card">
                                        <div class="text-center">
                                            <img src="./assets/img/credit.png" alt="">
                                            <p class="name">Credit/Debit Card</p>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="pay-card">
                                        <div class="text-center">
                                            <img src="./assets/img/cash-app.png" alt="">
                                            <p class="name">Cash App</p>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="pay-card">
                                        <div class="text-center">
                                            <img src="./assets/img/stripe.png" alt="">
                                            <p class="name">Stripe</p>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="pay-card">
                                        <div class="text-center">
                                            <img src="./assets/img/apple-pay.png" alt="">
                                            <p class="name">Apple Pay</p>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="pay-card">
                                        <div class="text-center">
                                            <img src="./assets/img/paypal.png" alt="">
                                            <p class="name">Paypal</p>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="pay-card">
                                        <div class="text-center">
                                            <img src="./assets/img/google-pay.png" alt="">
                                            <p class="name">Google Pay</p>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="pay-card">
                                        <div class="text-center">
                                            <img src="./assets/img/zelle.png" alt="">
                                            <p class="name">Zelle</p>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="pay-card">
                                        <div class="text-center">
                                            <img src="./assets/img/venmo.png" alt="">
                                            <p class="name">Venmo</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
       </div>    
</div>

</main>
  

 <?php include_once("./includes/footer.php") ?>