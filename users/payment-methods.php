<?php
$title = "Dashboard | RaffleIt";
$url_file = "dashboard.php";
$file_name = "Account";
$title_name = "Payment Method";
$active_name = 'pay_method';

?>
<?php include_once("./includes/header.php") ?>
<header>
    <?php include("./includes/nav.php"); ?>
</header>
<main>
    <div class="admin-main-container p-3">
        <div class="row p-3">
        <?php
            include "side.php";
            ?>
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