<?php
$title = "Raffles";
require "header.php";
require "dbconn.php";

// for students table
$sql = "SELECT * FROM raffles";
$querry = $conn->prepare($sql);

$retdata = $querry->execute();

$admit = $querry->fetchAll(PDO::FETCH_OBJ);
?>

<?php
$sql = "SELECT * FROM raffles";
$querry = $conn->prepare($sql);
$retdata = $querry->execute();
$raffles = $querry->fetchAll(PDO::FETCH_OBJ);
?>


<div class="container">
    <div class="row">
        <?php foreach ($raffles as $samp) : ?>
            <div class="col">
                <div class="card mb-2 mt-2" style="width: 18rem;">
                    <img class="card-img-top" src="dashboard/<?php echo $samp->picture; ?>" alt="Card image cap">
                    <div class="card-body">
                        <!-- <h5 class="card-title"><?php echo $samp->hostname; ?></h5> -->
                        <h6 class="card-subtitle mb-2 text-muted">Host: <?php echo $samp->hostname; ?></h6>
                        <p class="card-text">
                            <?php echo $samp->reason; ?></p>
                        <h6 class="card-subtitle mb-2 text-muted">Start Date: <?php echo $samp->startdate; ?></h6>
                        <h6 class="card-subtitle mb-2 text-muted">End Date: <?php echo $samp->enddate; ?></h6>
                        <form action="dashboard/create-checkout-session.php" method="POST">
                            <input type="hidden" value="<?php echo $samp->id; ?>" name="productId">
                            <input type="hidden" value="<?php echo $samp->hostname; ?>" name="productHost" />
                            <input type="hidden" value="<?php echo $samp->reason; ?>" name="productReason" />


                            <!-- from here downwards be able to send data to database on payments -->

                            <select name="numTickets" class="form-select mb-2" style="width: 50%; box-shadow: none; margin: auto;" aria-label="Default select example">
                                <option selected disabled>Tickets</option>
                                <option value="1">1 Ticket</option>
                                <option value="3">3 Tickets</option>
                                <option value="5">5 Tickets</option>
                            </select>

                            <input type="hidden" value="322422" name="payment_id" />
                            <input type="hidden" value="26" name="payment_amount" />
                            <!-- <input type="hidden" value="434" name="ticket_number" /> -->
                            <input type="hidden" value="stipe" name="payment_method" />
                            <input type="hidden" value="USD" name="currency" />
                            <input type="hidden" value="paid" name="payment_status" />
                            <input type="hidden" value="<?php echo $samp->reason; ?>" name="payment_reason" />

                            <button class="btn btn-primary buy_now_btn" type="submit" name="transdata">Buy ticket</button>
                        </form>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>
<?php include "footer.php"; ?>