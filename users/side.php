<div class="col-12 col-md-3">
    <div class="admin-sidebar">
        <li class="sidebar-item <?php echo $active_name == 'ticket' ?  'active' : '';?>"><a href="./ticket.php">My Tickets</a></li>
        <li class="sidebar-item <?php echo $active_name == 'dashboard' ? 'active' : '';?>"><a href="./dashboard.php">Dashboard</a></li>
        <li class="sidebar-item <?php echo $active_name == 'raffles' ? 'active' : ''?>"><a href="./raffles.php">Raffles</a></li>
        <li class="sidebar-item <?php echo $active_name == 'address' ? 'active' : ''?>"><a href="./address.php">Addresses</a></li>
        <li class="sidebar-item <?php echo $active_name == 'accounts' ? 'active' : ''?>"><a href="account-details.php">Account Details</a></li>
        <li class="sidebar-item <?php echo $active_name == 'pay_method' ? 'active' : ''?>"><a href="./payment-methods.php">Payment Method</a></li>
        <li class="sidebar-item"><a href="logout-user.php">Logout</a></li>
    </div>
</div>