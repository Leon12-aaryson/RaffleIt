<?php
// session_start();
$title = "Raffleitapp";
include "header.php";
?>
<style>
    .main {
        background: linear-gradient(to bottom, rgba(17, 17, 17, 0.52), rgba(17, 17, 17, 0.52)),
            url('static/images/donat.jpg') no-repeat;
        background-size: cover;
        height: 80vh;
        padding: 1.5rem;
    }

    @media (max-width: 756px) {
        .main {
            height: 50vh;
        }
    }

    @media (max-width: 1300px) {
        .main {
            height: 100vh;
        }
    }
</style>

<div class="main">
    <div class="maintxt">
        <h2>RAFFLE FROM ANYWHERE</h2>
        <p>Raffleit provides opportunities to raise funds for business, non-profit organization or even to give 
            persons a wide range of opportunity to raffle items or own items once you have taken part in the raffle.
        </p>
    </div>
</div>
<div class="restsect">

    <center>
        <div class="tops">
            <h4>HOW RAFFLEIT WORKS</h4>
            <p>RaffleIt has several benefits</p>
            <p>The winner gets the price, the person or company who issues the raffle receives 50% of the total.
                RaffleIt App ensures people everywhere in and outside your community, no matter where they are can take
                part in the raffle or support your cause without taking part in the raffle.
            </p>

        </div>
        <div class="tops">
            <p>Set up is free and can be done in a few minutes from the comfort of your home or office.<br>
                Set up is free and can be done in a few minutes from the comfort of your home or office
                Prices is sent directly to your door step<br>
                Winners are selected automatically<br>
                Tickets are electronic and can be shared through links and QR codes<br>
                You can watch your raffle grow as persons purchase tickets<br>
                Very Easy to Use: Paperless and Cashless
        </div>
        <div class="tops">
            <h4>HOW RAFFLEITAPP ATTRACTS INDIVIDUALS</h4>
            <p>RaffleItApp connects your raffle to persons and donors outside of your community so they can take
                part in the raffle or donate remotely to your cause. Revolutionize raffles and fundraising!</p>
        </div>
    </center>
    <div class="picsec">
        <div class="imgtags">
            <!-- <img src="static/images/team.jpeg" alt=""> -->
            <div class="txt">
                <h4>Simple & Secure</h4>
                <p>Set up a raffle in minutes, for free. No credit card required.
                    Integrated PCI-compliant payment process to collect prices or donations simply, securely
                    and remotely depending on the situation.</p>
            </div>
        </div>
        <div class="imgtags">
            <!-- <img src="static/images/team.jpeg" alt=""> -->
            <div class="txt">
                <h4>Customizable</h4>
                <p>Create a personalized raffle page. Set the duration as long as you'd like. Great
                    for stand-alone raffles or to supplement an existing one.</p>
            </div>
            <!-- <div class="allbtns">
                <a href="createraffle.php" id="btn2">START HERE</a>
                <a href="createraffle.php" id="btn1">DONATIONS</a>
            </div> -->
        </div>
        <div class="imgtags">
            <!-- <img src="static/images/team.jpeg" alt=""> -->
            <div class="txt">
                <h4>Seamless</h4>
                <p>Electronic tickets. Share links and QR codes at your fingertips. Automated raffle countdown,
                    winner selection and payout. Plus analytics!</p>
            </div>
        </div>
    </div>

    <div class="side">
        <div class="sect">
            <img src="static/images/act.jpg" alt="">
            <div class="txt">
                <h4>Raffles Meet Mobile <br> Conveniently Raffle from Anywhere</h4>
                <p>Anyone can raffle from the comfort of their home or business. Additionally,
                    with built in share features, they can spread awareness of your business,
                    your product or charity or nonprofit.</p>
            </div>
        </div>
        <div class="sect">
            <img src="static/images/cheering.jpg" alt="">
            <div class="txt">
                <h4>No hardware.<br>No paper tickets. <br>No cash to manage.</h4>
                <p>Let the technology do the work. With no “stuff” or volunteers to manage,
                    you can now effortlessly rollout enterprise level raffles more efficiently.</p>
            </div>
            <!-- <img src="static/images/cheering.jpg" alt=""> -->
        </div>
        <div class="sect">
            <img src="static/images/donation.jpg" alt="">
            <div class="txt">
                <h4>More Than a Donation <br>It's an Experience.</h4>
                <p>Elevate your game and create engaging digital company raffles, individual
                    raffles or fundraisers that help your cause or brighten the day of a lucky winner.</p>
            </div>
        </div>
    </div>
    <center>
        <div class="tops">
            <h4>Live Support to Help You & Your Event</h4>
            <p>We're more than just a raffle platform. We're passionate about
                fundraising and dedicated to helping you run a successful event for
                your charity. Please don't hesitate to contact us with any questions you might have.

            </p>
        </div>
    </center>
</div>
<?php
include "new.php";
?>
<!-- <center>
    <div class="allbtns">
        <a href="createraffle.php" id="btn2">Start Your Raffle Now</a>
        <a href="createraffle.php" id="btn1">Start Donation</a>
    </div>
</center> -->

<?php

include "footer.php";
