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
            url('static/images/team.png');
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
        <p><i class='bx bxs-home'></i><a href="index.php">Raffleit</a> <i class='bx bx-chevrons-right'></i> <a href="works.php">How it works</a></p>
        <h2>How RaffleItApp works</h2>
    </div>
</div>
<div class="restsec p-3">
    <div class="container contact">
        <div class="row contad">
            <div class="col-sm-12 col-md-6">
                <h2>Write <span style="color: #55C595; font-weight: 600;">Us</span></h2>
                <p>Thank you for reaching out. We value your input. Please fill out the form, and we'll respond promptly.</p>
                <div class="row">
                    <div class="col-sm-8">
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Organisation Type</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Company or business (for non-profit)</option>
                                    <option>Company or business(for profit)</option>
                                    <option>Fundraisers</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Your Questions</label>
                                <textarea type="text" name="" id="" class="form-control" cols="30" rows="10" placeholder="Type out your questions"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Fundraising Size</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>0-5</option>
                                    <option>5-100</option>
                                    <option>1000+</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Full Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter full name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Phone</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                            </div>
                            <button type="submit" class="btn" style="background: #55C595; border: none;">Send <i class='bx bx-chevron-right'></i></button>
                        </form>
                        <p class="mt-3">Ready to raffle?! <a href="raffles.php">Click here</a></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <h2>Contact <span style="color: #55C595; font-weight: 600;">Us</span></h2>
                <p>For any inquiries or assistance, please feel free to reach out to us
                    using the following contact information:</p>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card p-3 address">
                            <div class="card-body">
                                <h6 class="card-title"><i class='bx bxs-map'></i> Address</h6>
                                <ul>
                                    <li>198 West 21th</li>
                                    <li>Street, Suite 721</li>
                                    <li>NY 10010</li>
                                </ul>
                                <h6 class="card-title"><i class='bx bxs-phone'></i> Phones</h6>
                                <ul>
                                    <li>Phone: +1(758) 714-4919</li>
                                    <li>Cel: +1(646) 600-3001</li>
                                </ul>
                                <h6 class="card-title"><i class='bx bx-envelope'></i> Email</h6>
                                <ul>
                                    <li>Gib@raffleit.com</li>
                                    <li>Victordesign@raffleit.com</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card p-3">
                            <img src="static/images/cont.jpeg" class="card-img img-fluid" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
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

<?php
include "footer.php";
