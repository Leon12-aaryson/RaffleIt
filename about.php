<?php
session_start();
// if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
//     header("location: login.php");
//     exit;
// }

$title = "About Us";
include "header.php";

?>

<style>
    .main {
        background: linear-gradient(to bottom, rgba(17, 17, 17, 0.52), rgba(17, 17, 17, 0.52)),
            url('static/images/about.png');
        background-size: cover;
        height: 40vh;
    }

    .abttxt a {
        color: #FFF;
        margin-left: 0.5rem;
    }

    @media (max-width: 768px) {
        .main {
            height: 55vh;
        }
    }
</style>

</head>

<div class="main">
    <?php
    include "nav.php";
    ?>
    <div class="abttxt">
        <p><i class='bx bxs-home'></i><a href="index.php">Raffleit</a> <i class='bx bx-chevrons-right'></i> <a href="about.php">About Us</a></p>
        <h2>About RaffleItApp</h2>
    </div>
</div>
<div class="restsec p-3">
    <div class="container starter">
        <div class="row work">
            <div class="col-sm-12 col-md-6">
                <img src="static/images/work.png" alt="">
            </div>
            <div class="col-sm-12 col-md-6">
                <h2>About <span style="color: #55C595; font-weight: 600;">Us</span></h2>
                <p>Raffleit has several benefits</p>
                <p>
                    RaffleItApp was created with the idea that everyone can Do Good and Have Fun,
                    and it aims to revolutionise the raffle platform for the twenty-first century by
                    making it easier for anybody to operate a raffle from the comfort of their homes
                    and places of employment.
                </p>
                <p>Through the power of mobile connectivity, our internet platform connects people, businesses,
                    organisations, clubs, charities, and more with a practically infinite audience. This provides
                    everyone with an exciting option to make a difference, along with an accessible interface,
                    to provide an engaging raffle experience both on and off-site.
                </p>
                <p>
                    We're pleased to participate in rewriting the rules of raffles while having
                    fun by offering an effective and scalable solution for everyone to effortlessly hold raffles and reach customers.
                </p>
            </div>
        </div>
    </div>
</div>
<div class="restsec p-3" style="background: #215273;">
    <div class="container">
        <div class="row draws">
            <div class="col-md-3">
                <div class="card">
                    <img src="static/images/live.png" class="card-img-left mx-auto img-fluid" alt="Image">
                    <div class="card-body">
                        <h5 class="card-title">Live Draws</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="static/images/business.png" class="card-img-left mx-auto img-fluid" alt="Image">
                    <div class="card-body">
                        <h5 class="card-title">Business</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="static/images/nonprofit.png" class="card-img-left mx-auto img-fluid" alt="Image">
                    <div class="card-body">
                        <h5 class="card-title">Non-profit</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="static/images/fundraising.png" class="card-img-left mx-auto img-fluid" alt="Image">
                    <div class="card-body">
                        <h5 class="card-title">Fundraising</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="restsec p-3 testimonial">
    <div class="text-center">
        <h6 style="color: #55C595;">Testimonials</h6>
        <h2>About Past Raffles</h2>
    </div>
    <div class="row p-3" style="overflow-x: hidden;">
        <div class="col-sm-4">
            <div class="card shadow mt-2">
                <div class="card-body">
                    <p class="card-text">Raffles are a thrilling experience! I won a fantastic prize
                        and supported a great cause.</p>
                    <div class="row testimon">
                        <div class="col-md-3 d-flex">
                            <img src="static/images/header.jpg" alt="Testimonial Picture" class="img-fluid">
                        </div>
                        <div class="col-md-5 d-flex">
                            <h5 class="muted ml-1 fs-6 fw-normal">Aaron Leonard</h5>
                        </div>
                        <div class="col-md-4">
                            <div class="rating">
                                <ul class="list-unstyled d-flex justify-content-center">
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card shadow mt-2 test3">
                <div class="card-body">
                    <p class="card-text">Raffles engage the community and make a positive impact.
                        A great way to win and give back!</p>
                    <div class="row testimon">
                        <div class="col-md-3 d-flex">
                            <img src="static/images/header.jpg" alt="Testimonial Picture" class="img-fluid">
                        </div>
                        <div class="col-md-5 d-flex">
                            <h5 class="muted ml-1 fs-6 fw-normal">Aaron Leonard</h5>
                        </div>
                        <div class="col-md-4">
                            <div class="rating">
                                <ul class="list-unstyled d-flex justify-content-center">
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card shadow mt-2">
                <div class="card-body">
                    <p class="card-text">Raffles are exciting, and the proceeds help those in need. Win-win!</p>
                    <div class="row testimon">
                        <div class="col-md-3 d-flex">
                            <img src="static/images/header.jpg" alt="Testimonial Picture" class="img-fluid">
                        </div>
                        <div class="col-md-5 d-flex">
                            <h5 class="muted ml-1 fs-6 fw-normal">Aaron Leonard</h5>
                        </div>
                        <div class="col-md-4">
                            <div class="rating">
                                <ul class="list-unstyled d-flex justify-content-center">
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="raft text-center mb-4 d-flex justify-content-center flex-wrap">
        <ul class="list-group list-group-horizontal-sm">
            <a href="raffles.php">
                <li class="list-item m-1" style="background: #55C595;">Start Raffling Today<i class='bx bx-chevron-right'></i></li>
            </a>
        </ul>
    </div>
</div>
<div class="restsec p-3" style="background: #215273;">
    <div class="container mt-5 raffle">
        <div class="d-flex" style="color:#FDFDFD;">
            <h1>Live <span style="color:#55C595;">Raffles</span></h1>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card p-2">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="static/images/unity.jpg" class="card-img-left" alt="Image">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold muted">Save Children Charities Inc</h5>
                                    <h6 class="card-subtitle fw-normal">2023 lifesaving fundraiser</h6>
                                    <h6 class="card-subtitle muted fw-normal">@children</h6>
                                </div>
                                <div class="row testimon">
                                    <div class="col-md-4">
                                        <p class="card-text"><i class='bx bx-stopwatch'></i> 20h 33m</p>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="rating mt-1 ml-3">
                                            <h6>Total Pot</h6>
                                            <li><i class='bx bx-dollar'></i> 100</li>
                                            <!-- <ul class="list-unstyled d-flex justify-content-center">
                                                <li><i class='bx bx-dollar'></i> 100</li>
                                            </ul> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-2">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="static/images/farm.png" class="card-img-left" alt="Image">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold muted">Operation Feed The Nation</h5>
                                    <h6 class="card-subtitle fw-normal">Feed the Nation</h6>
                                    <h6 class="card-subtitle muted fw-normal">@food</h6>
                                </div>
                                <div class="row testimon">
                                    <div class="col-md-4">
                                        <p class="card-text"><i class='bx bx-stopwatch'></i> 20h 33m</p>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="rating mt-1 ml-3">
                                            <h6>Total Pot</h6>
                                            <li><i class='bx bx-dollar'></i> 100</li>
                                            <!-- <ul class="list-unstyled d-flex justify-content-center">
                                                <li><i class='bx bx-dollar'></i> 100</li>
                                            </ul> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card p-2">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="static/images/class.jpg" class="card-img-left" alt="Image">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold muted">Free Education Funding Inc.</h5>
                                    <h6 class="card-subtitle fw-normal">Free Education</h6>
                                    <h6 class="card-subtitle muted fw-normal">@Education</h6>
                                    <!-- <p class="card-text"><i class='bx bx-time'></i> 20h 33m</p> -->
                                </div>
                                <div class="row testimon">
                                    <div class="col-md-4">
                                        <p class="card-text"><i class='bx bx-stopwatch'></i> 20h 33m</p>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="rating mt-1 ml-3">
                                            <h6>Total Pot</h6>
                                            <li><i class='bx bx-dollar'></i> 100</li>
                                            <!-- <ul class="list-unstyled d-flex justify-content-center">
                                                <li><i class='bx bx-dollar'></i> 100</li>
                                            </ul> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-2">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="static/images/tomat.png" class="card-img-left" alt="Image">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold muted">Help Small Business Grow</h5>
                                    <h6 class="card-subtitle fw-normal">2Business</h6>
                                    <h6 class="card-subtitle muted fw-normal">@fundsmallbusinesses</h6>
                                </div>
                                <div class="row testimon">
                                    <div class="col-md-4">
                                        <p class="card-text"><i class='bx bx-stopwatch'></i> 20h 33m</p>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="rating mt-1 ml-3">
                                            <h6>Total Pot</h6>
                                            <li><i class='bx bx-dollar'></i> 100</li>
                                            <!-- <ul class="list-unstyled d-flex justify-content-center">
                                                <li><i class='bx bx-dollar'></i> 100</li>
                                            </ul> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="restsect p-3">
    <div class="text-center test1">
        <h1 style="font-weight: 600;">Get Started Today</h1>
        <p>RaffleItApp connects your raffle to persons and donors outside of your community
            so they can take part in the raffle or donate remotely to your cause.
            Revolutionize raffles and fundraising!</p>
    </div>
    <div class="row p-3" style="overflow-x: hidden;">
        <div class="col-sm-4">
            <div class="card shadow mt-2">
                <div class="card-body">
                    <h3 class="card-title">1</h3>
                    <h5 class="card-title">Create</h5>
                    <p class="card-text">Nonprofits and charities can create an account by clicking
                        here or by downloading the raffleit app on iOS | Google Play</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card shadow mt-2">
                <div class="card-body">
                    <h3 class="card-title">2</h3>
                    <h5 class="card-title">Share raffle</h5>
                    <p class="card-text">Now it's time to get a link to your raffle for you
                        to share your fundraising event with your network.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card shadow mt-2">
                <div class="card-body">
                    <h3 class="card-title">3</h3>
                    <h5 class="card-title">Fundraise</h5>
                    <p class="card-text">Watch your charitable donations grow in real time
                        as technology and community sharing take your fundraising to new heights!</p>
                </div>
            </div>
        </div>
    </div>
    <div class="raft text-center mb-4 d-flex justify-content-center flex-wrap">
        <ul class="list-group list-group-horizontal-sm">
            <a href="raffles.php">
                <li class="list-item m-1" style="background: #55C595;">Start Raffling Today<i class='bx bx-chevron-right'></i></li>
            </a>
            <a href="dashboard/addraffle.php">
                <li class="list-item m-1" style="border: #55C595 1px solid; color: #161616;">Create Raffle<i class='bx bx-chevron-right'></i></li>
            </a>
        </ul>
    </div>
</div>
<?php
include "footer.php";
