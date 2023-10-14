<?php
// session_start();
$title = "Raffleitapp";
include "header.php";
?>
<style>
    .main {
        background: linear-gradient(to bottom, rgba(17, 17, 17, 0.52), rgba(17, 17, 17, 0.52)),
            url('static/images/header.jpg') no-repeat;
        background-size: cover;
        height: 80vh;
    }

    .maintxt h1 {
        font-size: 3.5rem;
        font-weight: 600;
    }

    .maintxt h4 {
        color: #55C595;
        font-weight: 600;
    }

    .custom-image {
        object-fit: cover;
        object-position: center;
        height: 100%;
    }

    .works img {
        width: 30px;
    }

    @media (max-width: 768px) {
        .main {
            height: 110vh;
        }

        .main .maintxt {
            width: 100%;
            margin-top: .1rem;
            padding: 1rem;
        }

        .maintxt h1 {
            font-size: 2rem;
            font-weight: 500;
        }

        .maintxt h4 {
            color: #55C595;
            font-weight: 600;
            margin-top: 1rem;
        }
    }

    @media (min-width: 757px) and (max-width: 1300px) {
        .main {
            height: 100vh;
        }
    }
</style>

<div class="main">
    <?php
    include "nav.php";
    ?>
    <div class="maintxt">
        <h4>COULD YOU BE THE NEXT WINNER?</h4>
        <h1 class="mt-4">Raffle From <br>Anywhere <span style="color:#55C595;">Around <br>the World</h1></span>
        <p>Raffleit provides opportunities to raise funds
            for business, non-profit organization or even to give
            persons a wide range of opportunity to raffle items or own items
            once you have taken part in the raffle. </p>
        <a href="works.php">How it works</a>
    </div>
</div>
<div class="restsec p-3">
    <div class="container starter">
        <div class="row work">
            <div class="col-sm-12 col-md-6">
                <img src="static/images/work.png" alt="">
            </div>
            <div class="col-sm-12 col-md-6">
                <h2>How <span style="color: #55C595; font-weight: 600;">Raffleit</span> Works</h2>
                <p>Raffleit has several benefits</p>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card p-3">
                            <img src="static/images/50.png" class="card-img-left img-fluid" alt="Image">
                            <div class="card-body">
                                <h5 class="card-title">50% of the total</h5>
                                <p class="card-text">he winner gets the price, the person or company
                                    who issues the raffle receives 50% of the total</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card p-3">
                            <img src="static/images/setup.png" class="card-img-left" alt="Image">
                            <div class="card-body">
                                <h5 class="card-title">Easy Setup</h5>
                                <p class="card-text">Set up is free and can be done in a few minutes from the
                                    comfort of your home or office </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card p-2">
                            <img src="static/images/hands.png" class="card-img-left" alt="Image">
                            <div class="card-body">
                                <h5 class="card-title">Support</h5>
                                <p class="card-text">RaffleIt App ensures people everywhere, support your cause
                                    without taking part in the raffle.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card p-2">
                            <img src="static/images/deliver.png" class="card-img-left" alt="Image">
                            <div class="card-body">
                                <h5 class="card-title">Doorstep Delivery</h5>
                                <p class="card-text">Set up is free and can be done in a few minutes from
                                    the comfort of your home or office </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="raft text-center mb-4 d-flex justify-content-center flex-wrap">
                    <ul class="list-group list-group-horizontal-sm">
                        <a href="works.php">
                            <li class="list-item m-1" style="background: #55C595;">LEARN MORE</i></li>
                        </a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="restsec p-3" style="background: #215273;">
    <div class="text-center mt-5 test2" style="color: #FDFDFD;">
        <h2><span style="color: #55C595; font-weight: 600;">Raffleit</span> Collections</h2>
        <p>Raffleit provides opportunities to raise funds for business, non-profit organization or even to give
            persons a wide range of opportunity to raffle items or own items once you have taken part
            in the raffle. </p>
    </div>
    <div class="container mt-5">
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
    <div class="row">
        <div class="col-md-8 p-5" style="color: #FDFDFD; ">
            <h4 style="font-size: 2rem; font-weight: 500;">How <span style="color: #55C595;">raffleit</span><br> attracts individual</h4>
            <p>RaffleItApp connects your raffle to persons and donors outside of your community so they can take
                part in the raffle or donate remotely to your cause. Revolutionize raffles and fundraising!</p>
        </div>
        <div class="col-md-4 howimg text-center">
            <img src="static/images/howto.png" alt="">
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
            <a href="users/addraffle.php">
                <li class="list-item m-1" style="border: #55C595 1px solid; color: #161616;">Create Raffle<i class='bx bx-chevron-right'></i></li>
            </a>
        </ul>
    </div>

</div>

<script>
    const popoverIcon = document.querySelectorAll('.rating i');
    popoverIcon.forEach((el) => {
        return new mdb.Popover(el, {
            content: 'Example text',
            placement: 'top'
        });
    });
</script>
<?php

include "footer.php";
