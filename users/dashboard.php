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
            <li class="sidebar-item"><a href="./ticket.php">My Tickets</a></li>
                <li class="sidebar-item active"><a href="./dashboard.php">Dashboard</a></li>
                <li class="sidebar-item"><a href="">Raffles</a></li>
                <li class="sidebar-item "><a href="./address.php">Addresses</a></li>
                <li class="sidebar-item"><a href="account-details.php">Account Details</a></li>
                <li class="sidebar-item"><a href="payment-methods.php">Payment Method</a></li>
                <li class="sidebar-item"><a href="">Logout</a></li>
            </div>
        </div>
        <div class="col-12 col-md-9">
            <h2>hasjhklsjhkjdjk</h2>
        </div>
       </div>    
</div>

</main>
  

 <?php include_once("./includes/footer.php") ?>