<?php
$title = "Raffles";
$url_file = "raffles.php";
$file_name = "Raffles";
$title_name = "Join Live Raffles";
$active_name = 'dashboard';
require "header.php";
require "dbconn.php";

// for students table

if(!isset($_GET['id'])){
    header("location: ./index.php");
}

$id = $_GET['id'];
$sql = "SELECT * FROM raffles where id = :id";
$statement = $conn->prepare($sql);
$statement->bindParam(':id', $id, PDO::PARAM_INT);
$statement->execute();
$item = $statement->fetch(PDO::FETCH_ASSOC);

if ($item) {
  
    $dg = $item['id'];
    // print_r();
    echo $dg;
} else {
    // No item with the specified ID was found
    echo "Item not found.";
}
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
    <div class="con p-3">
        <h3 class="titl">Join Live <span>Raffle</span></h3>
        <div class="container-custom">
            <div class="custom-thing">
                <div class="custom-card-raffle">
                    <div class="first-section">
                        <div class="">
                            <img src="./static/images/bag.png" alt="">
                        </div>
                        <div class="r-text">
                            <h5 class="head">Free Education Funding Inc. </h5>
                            <h5 class="head-sub">Free Education</h5>
                            <h6>@Education</h6>
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
                <hr>
                <div class="content">
                    <h5 class="desc">
                        Description
                    </h5>
                    <p class="desc">Lorem ipsum dolor sit amet consectetur adipiscing elit litora, cursus class molestie torquent gravida platea accumsan, felis sapien massa bibendum ante est mollis</p>
                    <h5 class="desc">
                        Item to Raffle
                    </h5>
                    <div class="d-flex">
                        <img src="./static/images/bag.png" id="raff-img" alt="">
                        <img src="./static/images/bag2.png" id="raff-img" alt="">
                        <img src="./static/images/bag3.png" id="raff-img" alt="">
                        <img src="./static/images/bag4.png" id="raff-img" alt="">

                    </div>
                    <div class="d-flex justify-content-between my-4 align-items-center">
                        <h2 class="sup">Do Good. Support Our Cause Today!</h2>
                        <h5><button class="support btn btn-sm ">SUPPORT</button></h5>

                    </div>
                    <div class="d-flex gap-3 justify-content-center" id="ticket-holder">
                    </div>
                    <h5 class="my-3"><button class="support btn btn-sm " id="get_ticket">Get Ticket</button></h5>
                    <hr>

                    <div class="d-flex justify-content-between">
                        <div class="text-icon">
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 30 30" fill="none">
                                    <path d="M21.75 0C19.14 0 16.635 1.32425 15 3.41689C13.365 1.32425 10.86 0 8.25 0C3.63 0 0 3.9564 0 8.99183C0 15.1717 5.1 20.2071 12.825 27.8583L15 30L17.175 27.842C24.9 20.2071 30 15.1717 30 8.99183C30 3.9564 26.37 0 21.75 0ZM15.15 25.4223L15 25.5858L14.85 25.4223C7.71 18.376 3 13.7166 3 8.99183C3 5.72207 5.25 3.26975 8.25 3.26975C10.56 3.26975 12.81 4.88828 13.605 7.12807H16.41C17.19 4.88828 19.44 3.26975 21.75 3.26975C24.75 3.26975 27 5.72207 27 8.99183C27 13.7166 22.29 18.376 15.15 25.4223Z" fill="#55C595" />
                                </svg></span>
                            <span>Follow Org</span>
                        </div>
                        <div class="text-icon">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 30 30" fill="none">
                                    <path d="M13.75 8.75H16.25V11.25H13.75V8.75ZM13.75 13.75H16.25V21.25H13.75V13.75ZM15 2.5C8.1 2.5 2.5 8.1 2.5 15C2.5 21.9 8.1 27.5 15 27.5C21.9 27.5 27.5 21.9 27.5 15C27.5 8.1 21.9 2.5 15 2.5ZM15 25C9.4875 25 5 20.5125 5 15C5 9.4875 9.4875 5 15 5C20.5125 5 25 9.4875 25 15C25 20.5125 20.5125 25 15 25Z" fill="#55C595" />
                                </svg>
                            </span>
                            <span>More Info</span>
                        </div>
                        <div class="text-icon">
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 30 30" fill="none">
                                    <path d="M22.5 20.15C21.55 20.15 20.7 20.525 20.05 21.1125L11.1375 15.925C11.2 15.6375 11.25 15.35 11.25 15.05C11.25 14.75 11.2 14.4625 11.1375 14.175L19.95 9.03749C20.625 9.66249 21.5125 10.05 22.5 10.05C24.575 10.05 26.25 8.37499 26.25 6.29999C26.25 4.22499 24.575 2.54999 22.5 2.54999C20.425 2.54999 18.75 4.22499 18.75 6.29999C18.75 6.59999 18.8 6.88749 18.8625 7.17499L10.05 12.3125C9.375 11.6875 8.4875 11.3 7.5 11.3C5.425 11.3 3.75 12.975 3.75 15.05C3.75 17.125 5.425 18.8 7.5 18.8C8.4875 18.8 9.375 18.4125 10.05 17.7875L18.95 22.9875C18.8875 23.25 18.85 23.525 18.85 23.8C18.85 25.8125 20.4875 27.45 22.5 27.45C24.5125 27.45 26.15 25.8125 26.15 23.8C26.15 21.7875 24.5125 20.15 22.5 20.15ZM22.5 5.04999C23.1875 5.04999 23.75 5.61249 23.75 6.29999C23.75 6.98749 23.1875 7.54999 22.5 7.54999C21.8125 7.54999 21.25 6.98749 21.25 6.29999C21.25 5.61249 21.8125 5.04999 22.5 5.04999ZM7.5 16.3C6.8125 16.3 6.25 15.7375 6.25 15.05C6.25 14.3625 6.8125 13.8 7.5 13.8C8.1875 13.8 8.75 14.3625 8.75 15.05C8.75 15.7375 8.1875 16.3 7.5 16.3ZM22.5 25.075C21.8125 25.075 21.25 24.5125 21.25 23.825C21.25 23.1375 21.8125 22.575 22.5 22.575C23.1875 22.575 23.75 23.1375 23.75 23.825C23.75 24.5125 23.1875 25.075 22.5 25.075Z" fill="#55C595" />
                                </svg></span>
                            <span>Share Raffle</span>
                        </div>
                    </div>

                </div>
            </div>



        </div>
    </div>
</div>
<?php include "footer.php"; ?>

<script>
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
        // $(".tickt-choice").click(() => {

        //     // var data_id = $(this).attr("data-id");
        //     console.log("data_id");
        // })


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
</script>