<aside class="col-md-3 ml-1 side-bar">
    <ul class="sidebar ml-2 nav-links menu">
        <li class="item">
            <div class="icon-link sub-btn">
                <a href="#">
                    <i class='bx bxs-user-circle'></i>
                    <span>Profile</span>
                </a>
                <i class='bx bxs-chevron-right dropdown'></i>
            </div>
            <ul class="sub-menu">
                <li><a href="#"><i class='bx bxs-chevrons-right'></i>
                        <?php echo $fetch_info['name'] ?>
                    </a>
                </li>
                <!-- <li><a href="#"><i class='bx bxs-chevrons-right'></i>
                        <?php echo $fetch_info['name'] ?>
                    </a>
                </li> -->
            </ul>

        <li class="item">
            <div class="icon-link sub-btn">
                <a href="#">
                    <i class='bx bxs-dollar-circle'></i>
                    <span>Raffles</span>
                </a>
                <i class='bx bxs-chevron-right dropdown'></i>
            </div>
            <ul class="sub-menu">
                <li><a href="addraffle.php"><i class='bx bxs-chevrons-right'></i>Add Raffles</a>
                </li>
                <li><a href="rafflelist.php"><i class='bx bxs-chevrons-right'></i>Raffle List</a>
                </li>
            </ul>
        </li>
        <li class="item">
            <div class="icon-link sub-btn">
                <a href="#">
                    <i class='bx bxs-group'></i>
                    <span>Organisation</span>
                </a>
                <i class='bx bxs-chevron-right dropdown'></i>
            </div>
            <ul class="sub-menu">
                <li><a href="addorg.php"><i class='bx bxs-chevrons-right'></i>Create Organisation</a>
                </li>
                <li><a href="organisations.php"><i class='bx bxs-chevrons-right'></i>Organisation List</a>
                </li>
            </ul>
        </li>
        <li class="item">
            <div class="icon-link sub-btn">
                <a href="#">
                    <i class='bx bxs-dice-5'></i>
                    <span>Raffle draw</span>
                </a>
                <i class='bx bxs-chevron-right dropdown'></i>
            </div>
            <ul class="sub-menu">
                <li><a href="rafflewinners.php"><i class='bx bxs-chevrons-right'></i>Raffle winners</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="logout-user.php">
                <i class='bx bx-log-out-circle'></i>
                <span>Logout</span>
            </a>
        </li>
    </ul>
</aside>
<style>
    .sidebar {
        background: var(--color-background);
        padding: 1.2rem;
        border-radius: var(--border-radius-1);
    }
</style>

<script src="static/bootstrap/js/jquery.js"></script>
<script src="static/bootstrap/js/bootstrap.min.js"></script>
<script src="static/bootstrap/js/bootstrap.min.js.map"></script>
<script type="text/javascript">
    $(document).ready(function() {
        //jquery for toggle sub menus
        $('.sub-btn').click(function() {
            $(this).next('.sub-menu').slideToggle(100);
            // setTimeout(() => {
            //     $(this).find('.dropdown').toggleClass('rotate');
            // }, 100);
            $(this).find('.dropdown').toggleClass('rotate');
        });
    });
</script>