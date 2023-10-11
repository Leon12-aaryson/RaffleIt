<?php
// session_start();
$title = "How it works";
// Initialize the session
// Check if the user is logged in, if not then redirect him to login page
// if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
//     header("location: login.php");
//     exit;
// }
include "header.php";
?>

<style>
    .main {
        background: linear-gradient(to bottom, rgba(17, 17, 17, 0.52), rgba(17, 17, 17, 0.52)),
            url('static/images/hands.jpeg');
        background-size: cover;
        height: 50vh;
    }

    .btn {
        border: 1px solid #215273;
        font-weight: bold;
    }

    .btn:focus {
        outline: none;
        box-shadow: none;
    }

    .btn1:focus {
        background: var(--Primary-Color, #215273);
        color: #FFF;
        outline: #215273;
    }

    .btn2:focus {
        background: #55C595;
        color: var(--Base-Color, #FDFDFD);
        outline: #55C595;

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
        <p><i class='bx bxs-home'></i><a href="index=.php">Raffleit</a> <i class='bx bx-chevrons-right'></i> <a href="works.php">How it works</a></p>
        <h2>How RaffleItApp works</h2>
    </div>
</div>
<div class="restsec p-3">
    <div class="container starter">
        <div class="row work">
            <!-- <div class="col-sm-12 col-md-6"> -->
            <h2>How <span style="color: #55C595; font-weight: 600;">Raffleit</span> Works</h2>
            <p>Raffleit has several benefits</p>
            <div class="row">
                <div class="col-sm-3">
                    <div class="card p-3">
                        <img src="static/images/50.png" class="card-img-left img-fluid" alt="Image">
                        <div class="card-body">
                            <h5 class="card-title">50% of the total</h5>
                            <p class="card-text">The winner gets the price, the person or company
                                who issues the raffle receives 50% of the total</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card p-3">
                        <img src="static/images/setup.png" class="card-img-left" alt="Image">
                        <div class="card-body">
                            <h5 class="card-title">Easy Setup</h5>
                            <p class="card-text">Set up is free and can be done in a few minutes from the
                                comfort of your home or office </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card p-3">
                        <img src="static/images/graph.png" class="card-img-left" alt="Image">
                        <div class="card-body">
                            <h5 class="card-title">Ticket Growth</h5>
                            <p class="card-text">You can watch your raffle grow as
                                persons purchase tickets</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card p-3">
                        <img src="static/images/trophy.png" class="card-img-left" alt="Image">
                        <div class="card-body">
                            <h5 class="card-title">Winners</h5>
                            <p class="card-text">Winners are selected automatically</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card p-3">
                        <img src="static/images/hands.png" class="card-img-left" alt="Image">
                        <div class="card-body">
                            <h5 class="card-title">Support</h5>
                            <p class="card-text">Set up is free and can be done in a few minutes from the
                                comfort of your home or office </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card p-3">
                        <img src="static/images/deliver.png" class="card-img-left" alt="Image">
                        <div class="card-body">
                            <h5 class="card-title">Doorstep Delivery</h5>
                            <p class="card-text">Set up is free and can be done in a few minutes from the
                                comfort of your home or office </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card p-2">
                        <img src="static/images/hands.png" class="card-img-left" alt="Image">
                        <div class="card-body">
                            <h5 class="card-title">Electronic Tickets</h5>
                            <p class="card-text">Tickets are electronic and can be shared
                                through links and QR codes</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card p-2">
                        <img src="static/images/setup.png" class="card-img-left" alt="Image">
                        <div class="card-body">
                            <h5 class="card-title">Easy to Us</h5>
                            <p class="card-text">Very Easy to Use: Paperless and Cashless</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="raft1 mb-4 d-flex flex-wrap">
            <ul class="list-group list-group-horizontal-sm">
                <a href="raffles.php">
                    <li class="list-item m-1" style="background: #55C595;">Start Raffling Today<i class='bx bx-chevron-right'></i></li>
                </a>
                <a href="contact_team.php">
                    <li class="list-item m-1" style="border: #55C595 1px solid; color: #161616;">Contact Team<i class='bx bx-chevron-right'></i></li>
                </a>
            </ul>
        </div>
    </div>
</div>
<div class="restsec p-3" style="background: #215273;">
    <div class="row">
        <div class="col-md-8 p-5" style="color: #FDFDFD; ">
            <h6 style="color: #55C595;">TESTIMONIALS</h6>
            <h4 style="font-size: 2rem; font-weight: 500;">About Past <span style="color: #55C595;">Raffles</span></h4>
            <p>Participating in raffles has been a delightful experience. It's like a mini adventure where you have a
                shot at winning something exciting. I appreciate how raffles also serve as a way to support
                various causes. It's a simple yet impactful way to make a difference in the community</p>
        </div>
        <div class="col-md-4 howimg text-center">
            <img src="static/images/howto.png" alt="">
        </div>
    </div>
</div>
<div class="restsec p-3">
    <div class="row p-3">
        <div class="btn-group col-md-6" role="group" aria-label="First group">
            <button type="button" class="btn btn1" id="showHosts">For Host</button>
            <button type="button" class="btn btn2" id="showSupport">For Supporters</button>
        </div>
    </div>


    <div class="row p-4">
        <div class="col-md-12 p-4 hosts" style="display: block;">
            <h5>How to start a 50/50 raffle</h5>
            <p>How to start a 50/50 raffle</p>
            <ul>
                <li><span>Create</span> an account by clicking here or download the iOS or Android app</li>
                <li><span>Click</span> here and Create Raffle</li>
                <li><span>Get</span> a link and share with others that would like to support your raffle.</li>
            </ul>
            <p>Don't forget to add your run time</p>
            <h5>Uses</h5>
            <p><span>To</span> raise funds for any cause at any time wherever you are</p>
            <h5>Pay out</h5>
            <p><span>Payment</span> is fully secured</p>
            <p><span>As soon</span> as the winner confirms that the price has been received, the payout is done within 2 to 7 days depending on location and mode of cash transfer.</p>
            <p><span>Payouts</span> are done after hosting and shipping fees are deducted</p>
            <h5>Other</h5>
            <p><span>Remember</span> to check the legal requirements in your country for such activities</p>
            <p><span>Bank fees</span> (if the transfer is done via the bank) will also be deducted from the payout by the bank</p>
        </div>
        <div class="col-md-12 p-4 support" style="display: none;">
            <h5>How it works</h5>
            <ul>
                <li><span>Create</span> an account OR just support the cause by using the link or better yet download the APP IOS or Android to give you a full experience.</li>
                <li><span>Find</span> other agencies, organizations, and raffles</li>
                <li><span>Get</span> as many tickets as you can afford. The more tickets the greater the savings</li>
                <li><span>Share</span> your raffle links with family, friends, and colleagues</li>
                <li><span>If you</span> are a winner, your prize will be shipped to you within two days. You will receive it within 5 to 14 days depending on location</li>
            </ul>
            <p>Remember to check the legal requirements in your country for such activities</p>
        </div>
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




<script>
    // Get references to the buttons and sections
    const showHostsButton = document.getElementById("showHosts");
    const showSupportButton = document.getElementById("showSupport");
    const hostsSection = document.querySelector(".hosts");
    const supportSection = document.querySelector(".support");

    // Add event listeners to toggle the sections
    showHostsButton.addEventListener("click", function() {
        hostsSection.style.display = "block";
        supportSection.style.display = "none";
    });

    showSupportButton.addEventListener("click", function() {
        hostsSection.style.display = "none";
        supportSection.style.display = "block";
    });
</script>



<?php
include "footer.php";
