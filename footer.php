<style>
    .contdetail {
        color: gray;
    }

    .list-item {
        text-decoration: none;
        color: #FDFDFD;
    }

    .form-control {
        box-shadow: none !important;
        border: none;
    }

    .custom-input {
        height: 35px;
        border: none;
    }

    .custom-code {
        height: 35px;
        border: none;
    }

    .custom-input:hover,
    .custom-code:hover {
        box-shadow: none;
        border: none !important;
    }

    .custom-button:focus {
        outline: none;
    }

    .footer ul li i {
        padding: .5rem;
        font-size: 2rem !important;
        color: #FDFDFD !important;
    }
</style>

<section class="footer p-3">
    <img src="static/images/raffle.png" alt="raffleitapp logo"><br>
    <div class="row">
        <div class="col-md-3 mt-4">
            <p>Raffleit provides opportunities to
                raise funds for business, non-profit organization or
                even to give persons a wide range of opportunity to raffle
                items or own items once you have taken part in the raffle. </p>
        </div>
        <div class="col-md-3 mt-4">
            <h5>Quick Links</h5>
            <div class="list-group">
                <a href="index.php" class="list-item list-group-item-action">Home</a>
                <a href="about.php" class="list-item list-group-item-action">About</a>
                <a href="works.php" class="list-item list-group-item-action">How Raffleitapp works</a>
                <a href="#" class="list-item list-group-item-action">Testimonial</a>
            </div>
        </div>
        <div class="col-md-3 mt-4">
            <h5>Why Choose Us?</h5>
            <div class="list-group">
                <a href="#" class="list-item list-group-item-action">50% of the total</a>
                <a href="#" class="list-item list-group-item-action">Easy Setup</a>
                <a href="#" class="list-item list-group-item-action">Support</a>
                <a href="#" class="list-item list-group-item-action">Doorstep Delivery</a>
            </div>
        </div>
        <div class="col-md-3 mt-4">
            <h5>Get Email Notifications</h5>
            <p>Raffleit provides opportunities to raise funds for business.</p>
            <form action="message.php" method="POST">
                <div class="input-group mb-3">
                    <input type="text" class="form-control custom-input" placeholder="Enter Your Email" aria-label="Email" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary custom-code" type="submit" name="submit" id="button-addon2" style="background: #55C595; color: #FDFDFD;">Send</button>
                </div>
            </form>
        </div>
    </div>
    <ul class="list-group list-group-horizontal-sm" style="color: #FDFDFD; display: flex; flex-direction: row;">
        <li class="list-item"><i class='bx bxl-behance'></i></li>
        <li class="list-item"><i class='bx bxl-facebook-circle'></i></li>
        <li class="list-item"><i class='bx bxl-instagram'></i></li>
        <li class="list-item"><i class='bx bxl-twitter'></i></li>
    </ul>

    <!-- <div class="contact" id="contact">
        <div class="contform">
            <form action="message.php" method="POST">
                <label for="name">Name</label><br>
                <input type="text" id="name" name="name" placeholder="Name"><br>
                <label for="email">Email</label><br>
                <input type="text" id="email" name="email" placeholder="Email Address"><br>
                <label for="message">Message</label><br>
                <textarea name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea><br>
                <button type="submit" class="btn-send" name="submit">SUBMIT</button>
            </form>
        </div>
        <div class="contdetail">
            <ul>
                <label for="phone">Phone:</label>
                <li>330-265-3334</li>
                <label for="phone">Email:</label>
                <li>raffleit216@gmail.com</li>
            </ul>
        </div>
    </div>
    <center style="padding: 0.5rem;">&copy; All rights reserved to raffleItapp</center>
    <center style="padding: 0.5rem;">Designed by leon</center> -->
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
<script src="static/styles/js/index.js"></script>
</body>

</html>