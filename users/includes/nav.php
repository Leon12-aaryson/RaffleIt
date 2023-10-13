<div class="hero-section">
    <nav class="navbar navbar-expand-lg ">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <li class="toggle"><a href="#"><i class="bx bx-menu"></i></a></li>
        </button>
        <a class="navbar-brand" href="#"><img src="./../static/images/raffle.png" alt=""></a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="/index.php">HOME</a></li>
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="/about.php">ABOUT</a></li>
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="/works.php">HOW IT WORKS</a></li>
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="/contact.php">CONTACT</a></li>
            </ul>
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
<div class="bread">
        <p><i class='bx bxs-home'></i><a href="index.php">Raffleit</a> <i class='bx bx-chevrons-right'></i> <a href="<?php echo $url_file; ?>"><?php echo $file_name; ?></a></p>
        <h2 style="color: white; font-size:24px"><?php echo $title_name; ?></h2>
    </div>
    </div>