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
        /* padding: 1.5rem; */
    }

    .maintxt h1 {
        font-size: 3.5rem;
        font-weight: 600;
    }

    .maintxt h4 {
        color: #55C595;
        font-weight: 600;
    }

    .test1 {
        width: 50%;
        margin: 0 auto;
        text-align: center;
    }

    .custom-image {
        object-fit: cover;
        /* Adjusts the image to cover the entire container */
        object-position: center;
        /* Centers the image within the container */
        height: 100%;
        /* Ensures the image fills the entire height of the column */
    }

    .works img {
        width: 30px;
    }

    @media (max-width: 756px) {
        .test1 {
            width: 90%;
        }

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
    <div class="row">
        <div class="col-md-6"></div>
        <div class="col-md-6">
            <div class="container d-flex justify-content-center">
                <div class="row">
                    <div class="mt-5 ml-1">
                        <h2>How <span style="color: #55C595; font-weight: 600;">Raffleit</span> Works</h2>
                        <p>Raffleit has several benefits</p>
                    </div>
                    <div class="container">
                        <div class="row works">
                            <div class="col-md-6">
                                <div class="card shadow">
                                    <img src="static/images/fundraising.png" class="card-img-left" alt="Image">
                                    <div class="card-body">
                                        <h5 class="card-title">Card Title</h5>
                                        <p class="card-text">Some text content for the card.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card shadow">
                                    <img src="static/images/fundraising.png" class="card-img-left" alt="Image">
                                    <div class="card-body">
                                        <h5 class="card-title">Card Title</h5>
                                        <p class="card-text">Some text content for the card.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card shadow">
                                    <img src="static/images/fundraising.png" class="card-img-left" alt="Image">
                                    <div class="card-body">
                                        <h5 class="card-title">Card Title</h5>
                                        <p class="card-text">Some text content for the card.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card shadow">
                                    <img src="static/images/fundraising.png" class="card-img-left" alt="Image">
                                    <div class="card-body">
                                        <h5 class="card-title">Card Title</h5>
                                        <p class="card-text">Some text content for the card.</p>
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
<div class="restsec p-3" style="background: #215273;">
    <div class="text-center mt-5 test1" style="color: #FDFDFD;">
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
                                <img src="static/images/donation.jpg" class="card-img-left" alt="Image">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h3 class="card-title fw-bold muted">Save Children Charities Inc</h3>
                                    <h5 class="card-subtitle fw-normal">2023 lifesaving fundraiser</h5>
                                    <h5 class="card-subtitle muted fw-normal">@children</h5>
                                    <p class="card-text">Some text content for the card.</p>
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
                                <img src="static/images/act.jpg" class="card-img-left" alt="Image">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h3 class="card-title fw-bold muted">Save Children Charities Inc</h3>
                                    <h5 class="card-subtitle fw-normal">2023 lifesaving fundraiser</h5>
                                    <h5 class="card-subtitle muted fw-normal">@children</h5>
                                    <p class="card-text">Some text content for the card.</p>
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
                                <img src="static/images/team.jpeg" class="card-img-left" alt="Image">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h3 class="card-title fw-bold muted">Save Children Charities Inc</h3>
                                    <h5 class="card-subtitle fw-normal">2023 lifesaving fundraiser</h5>
                                    <h5 class="card-subtitle muted fw-normal">@children</h5>
                                    <p class="card-text">Some text content for the card.</p>
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
                                <img src="static/images/howto.png" class="card-img-left" alt="Image">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h3 class="card-title fw-bold muted">Save Children Charities Inc</h3>
                                    <h5 class="card-subtitle fw-normal">2023 lifesaving fundraiser</h5>
                                    <h5 class="card-subtitle muted fw-normal">@children</h5>
                                    <p class="card-text">Some text content for the card.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="restsec p-3">
    <div class="text-center">
        <h6 style="color: #55C595;">Testimonials</h6>
        <h2>About Past Raffles</h2>
    </div>
    <div class="row">
        <!-- <div class="col-md-8 p-5" style="color: #FDFDFD; ">
            <h4 style="font-size: 2rem; font-weight: 500;">How <span style="color: #55C595;">raffleit</span><br> attracts individual</h4>
            <p>RaffleItApp connects your raffle to persons and donors outside of your community so they can take
                part in the raffle or donate remotely to your cause. Revolutionize raffles and fundraising!</p>
        </div>
        <div class="col-md-4 howimg text-center">
            <img src="static/images/howto.png" alt="">
        </div> -->
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
            <li class="list-item m-1" style="background: #55C595;">Start Raffling Today<i class='bx bx-chevron-right'></i></li>
            <li class="list-item m-1" style="border: #55C595 1px solid; color: #161616;">Create Raffle<i class='bx bx-chevron-right'></i></li>
        </ul>
    </div>

</div>
<?php

include "footer.php";
