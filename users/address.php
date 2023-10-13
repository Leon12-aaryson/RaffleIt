<?php
$title = "Dashboard | RaffleIt";
$url_file = "dashboard.php";
$file_name = "Addressess";
$title_name = "My Address";
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
                <!-- all-address -->
                <div id="all-address">
                    <h2 class="name-address">The following addresses will be used on the checkout page by default.</h2>
                    <div class="row my-3">
                        <div class="col-6 col-md-3">
                            <div class="address-container">
                                <h4 class="address-title">
                                    Billing address
                                </h4>
                                <p class="address-name">You have not set up this type of address yet.</p>
                                <button class="btn btn-sm btn-success" id="add-billing">Add</button>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="address-container">
                                <h4 class="address-title">
                                    Shipping address
                                </h4>
                                <p class="address-name">You have not set up this type of address yet.</p>
                                <button class="btn btn-sm btn-success" id="add-ship">Add</button>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- add new billing -->
                <div id="add-billing-form">
                    <div class="admin-container">
                        <div class="admin-card">
                            <h3 class="head-title">Billing address</h3>
                            <form>

                                <div class="row gap-0 justify-content-center">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="">First Name</label>
                                            <input type="text">
                                        </div>

                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="">Last Name</label>
                                            <input type="text">
                                        </div>

                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Company Name (optional)</label>
                                    <input type="text" placeholder="Optional">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="email">Street Address</label>
                                    <input type="text" name="" id="email">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="email">Town/City</label>
                                    <input type="text" name="" id="email">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="email">Country/Region</label>
                                    <select name="" class="" placeholder="Select country/region" id="">
                                        <option value="">Select country/region</option>
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="email">Zip Code</label>
                                    <input type="text" name="" id="email">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="email">Phone</label>
                                    <input type="text" name="" id="email">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="email">Email Address</label>
                                    <input type="email" name="" id="email">
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="submit-btn">Save Changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- add new shipping -->
                <div id="add-shipping-form">
                    <div class="admin-container">
                        <div class="admin-card">
                            <h3 class="head-title">Shipping address</h3>
                            <form>

                                <div class="row gap-0 justify-content-center">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="">First Name</label>
                                            <input type="text">
                                        </div>

                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="">Last Name</label>
                                            <input type="text">
                                        </div>

                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Company Name (optional)</label>
                                    <input type="text" placeholder="Optional">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="email">Street Address</label>
                                    <input type="text" name="" id="email">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="email">Town/City</label>
                                    <input type="text" name="" id="email">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="email">Country/Region</label>
                                    <select name="" class="" placeholder="Select country/region" id="">
                                        <option value="">Select country/region</option>
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="email">Zip Code</label>
                                    <input type="text" name="" id="email">
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
    </div>

</main>


<?php include_once("./includes/footer.php") ?>
<script>
    $("#add-billing-form, #add-shipping-form").css('display', 'none');



    $(document).ready(() => {
        $("#add-billing").click(() => {
            $("#all-address").hide();
            // $("#add-billing-form").show();
            $("#add-billing-form").css('display', 'block');

        });
        $("#add-ship").click(() => {
            $("#all-address").hide();
            // $("#add-billing-form").show();
            $("#add-shipping-form").css('display', 'block');

        });
    })
</script>