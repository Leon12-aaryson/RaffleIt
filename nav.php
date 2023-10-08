<nav class="navbar navbar-expand-lg navbar-dark shadow-5-strong">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <li class="toggle"><a href="#"><i class="bx bx-menu"></i></a></li>
        </button>
        <a class="navbar-brand" href="#"><img src="static/images/raffle.png" alt=""></a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <?php
                if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
                    echo '<li class="nav-item raff-item"><a class="nav-link active" aria-current="page" href="raffles.php">View Raffles</a></li>';
                    // echo '<li class="nav-item"><a class="nav-link active" aria-current="page" href="dashboard/login-user.php">Login</a></li>';
                    // echo '<li class="nav-item"><a class="nav-link active" aria-current="page" href="dashboard/signup-user.php">Register</a></li>';
                } else {
                    echo '<li class="nav-item" raff-item><a class="nav-link active" aria-current="page" href="raffles.php">View Raffles</a></li>';
                    // echo '<li class="nav-item"><a class="nav-link active" aria-current="page" href="dashboard/index?logout">Logout</a></li>';
                }
                ?>
        </div>
    </div>
</nav>