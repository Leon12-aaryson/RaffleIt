<?php
$title = "Raffles";
$url_file = "raffles.php";
$file_name = "Raffles";
$title_name = "Join Live Raffles";
$active_name = 'dashboard';
require "header.php";
require "dbconn.php";

// for students table
$sql = "SELECT * FROM raffles";
$querry = $conn->prepare($sql);

$retdata = $querry->execute();

$admit = $querry->fetchAll(PDO::FETCH_OBJ);
?>

<?php
$sql = "SELECT * FROM raffles";
$querry = $conn->prepare($sql);
$retdata = $querry->execute();
$raffles = $querry->fetchAll(PDO::FETCH_OBJ);
?>

<style>
    .navbar {
        background: rgba(33, 82, 115, 0.01);
        backdrop-filter: blur(75px);

    }
</style>
<div class="hro-section">
    <?php
    include "nav.php";
    ?>
    <!-- <div class=""style="height:10px; background:white; width:2px; display:block; margin:0px 10px"></div> -->
    <div class="bread">
        <p><i class='bx bxs-home'></i><a href="index.php">Raffleit</a> <i class='bx bx-chevrons-right'></i> <a href="<?php echo $url_file; ?>"><?php echo $file_name; ?></a></p>
        <h2 style="color: white; font-size:24px;"> <?php echo $title_name; ?></h2>
    </div>
</div>
<div class="container-fluid bg-white">
    <div class="con p-3 raffle">
        <h3 class="titl">Join Live <span>Raffle</span></h3>
        <div class="row  g-3">
        <?php foreach ($raffles as $samp) : ?>
            <div class="col-12 col-sm-6 col-md-4 raffle">
                <div class="custom-card-raffle" onclick="goto(<?php echo $samp->id ?>)">
                    <div class="first-section">
                        <div class="">
                            <img src="<?php echo $samp->picture; ?>" alt="">
                        </div>
                        <div class="r-text">
                            <h5 class="head"><?php echo $samp->reason; ?></h5>
                            <h5 class="head-sub"><?php echo $samp->reason; ?></h5>
                            <h6>@<?php echo $samp->reason; ?></h6>
                            <h6>Freeeducation.com</h6>
                            <div class="d-flex hj">
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 26" fill="none">
                                        <path opacity="0.3" d="M3.14355 7.375L8.71433 12.375L14.2851 7.375V3H3.14355V7.375Z" fill="#215273" />
                                        <path opacity="0.3" d="M3.14355 7.375L8.71433 12.375L14.2851 7.375V3H3.14355V7.375Z" fill="#215273" />
                                        <path d="M17.0707 0.5H0.358398V8L5.92917 13L0.372326 18.0125L0.358398 25.5H17.0707L17.0568 18.0125L11.5 13L17.0707 8.0125V0.5ZM14.2853 18.625V23H3.14379V18.625L8.71456 13.625L14.2853 18.625ZM14.2853 7.375L8.71456 12.375L3.14379 7.375V3H14.2853V7.375Z" fill="#215273" />
                                    </svg></span> <span>1h 30m</span>
                            </div>
                        </div>

                    </div>
                    <div class="second-section">
                        <div>
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 32 32" fill="none">
                                    <circle cx="16.002" cy="16" r="16" fill="#215273" />
                                    <path d="M20.502 8C18.762 8 17.092 8.88283 16.002 10.2779C14.912 8.88283 13.242 8 11.502 8C8.42195 8 6.00195 10.6376 6.00195 13.9946C6.00195 18.1144 9.40195 21.4714 14.552 26.5722L16.002 28L17.452 26.5613C22.602 21.4714 26.002 18.1144 26.002 13.9946C26.002 10.6376 23.582 8 20.502 8ZM16.102 24.9482L16.002 25.0572L15.902 24.9482C11.142 20.2507 8.00195 17.1444 8.00195 13.9946C8.00195 11.8147 9.50195 10.1798 11.502 10.1798C13.042 10.1798 14.542 11.2589 15.072 12.752H16.942C17.462 11.2589 18.962 10.1798 20.502 10.1798C22.502 10.1798 24.002 11.8147 24.002 13.9946C24.002 17.1444 20.862 20.2507 16.102 24.9482Z" fill="#55C595" />
                                </svg></span>
                        </div>
                        <div class="raff-total">
                            <span>Total Pot</span>
                            <span>$100</span>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</div>
</div>
<?php include "footer.php"; ?>

<script>
    // $(document).ready(function() {
    //     $(".custom-card-raffle").click(() => {
    //         window.location.href = "./raffle-detail.php"
    //     })
    // });

    function showCardDetails(cardId) {
        // Get the card element by its ID
        const card = document.getElementById(cardId);

        // Get the details from the card
        const cardDetails = card.querySelector('p').textContent;

        // Display the details in a separate div
        const cardDetailsDiv = document.getElementById('cardDetails');
        cardDetailsDiv.innerHTML = cardDetails;
    }

   function goto(id){
    console.log(id);
    window.location.href = "./raffle-detail.php?id=" + id;
    }
</script>

<!-- <script>
    let ticketPrice = [{
            id: 1,
            name: 3,
            price: 10
        },
        {
            id: 2,
            name: 30,
            price: 40
        },
        {
            id: 3,
            name: 90,
            price: 60
        },
        {
            id: 4,
            name: 150,
            price: 100
        },
        {
            id: 5,
            name: 300,
            price: 200
        },
    ]

    function allItem() {
        ticketPrice.forEach((item, index) => {
            $("#ticket-holder").append(
                `
            <div class="tickt-choice ${selectedCard == item.id ? 'yes' : ''}" onclick="selectItem('${item.id}','${item.price}','${item.name}')" id="ticket-card"   data-id="${item['id']}" data-price="${item.price}" data-name="${item.name}">
                            <h4>${item['name']} Tickets</h4>
                            <h6>$${item.price}</h6>
                        </div>
            `
            )
        });

    }
    let selectedCard = "";
    let selectedPrice = "";
    let selectedNo = "";




    $(document).ready(function() {

        allItem();

        $("#get_ticket").click(() => {
            if (selectedCard == "") {
                Swal.fire({
                    icon: 'error',
                    title: '',
                    text: 'Please select no. of ticket you want to buy',

                });
                return;
            } else {
                const product_id = 1;
                const product_host = "GIB";
                const product_reason = "Card ticket";
                const ticket_num = selectedNo;
                const amount = selectedPrice;

                const param = {
                    product_id: product_id,
                    product_host: product_host,
                    product_reason: product_reason,
                    ticket_num: ticket_num,
                    amount: amount
                }

                console.log(param);
                localStorage.setItem('tickets', JSON.stringify(param));
                window.location.href = "./make_payment.php";
            }
        });

    });

    function selectItem(id, price, name) {
        $("#ticket-holder").html('');
        if (selectedCard == id) {
            selectedCard = "";
        } else {
            selectedCard = id;
            selectedNo = name;
            selectedPrice = price;

        }

        allItem();
        // console.log(id, price, name);
    }
</script> -->