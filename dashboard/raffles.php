<?php
include "footer.php";
?>

<style>
    /* raffle cards */
    .restsec2 {
        padding: 2rem;
        display: grid;
        grid-template-columns: repeat(4, 1.2fr);
        gap: 1rem;
    }

    /* .rafcard {
        display: grid;
        grid-template-columns: repeat(2, 50%);
        gap: 1rem;
        grid-template: 0.3rem;
        border-radius: .2rem;
        height: 10rem;
        background: #fff;
        padding: 0.8rem;
        align-items: center;
        box-shadow: 1px 1px 3px grey;
        align-items: center;
    } */

    .refcard {}

    .rafcard h4 {
        font-weight: 400;
    }

    .rafcard img {
        width: 95%;
        height: 7rem;
        border-radius: .2rem;
    }

    .rafcard .detail {
        padding: 0.5rem;
        height: 80%;
    }

    .rafcard p a {
        background: blue;
        color: white;
        border-radius: .2rem;
        padding: .3rem;
    }

    @media (max-width: 756px) {
        .restsec2 {
            padding: 1rem;
            /* display: grid; */
            grid-template-columns: auto;
            /* gap: 1rem; */
        }

        .rafcard {
            height: auto;
        }
    }
</style>

<?php

$title = "Raffles";

include "header.php";
require "dbconn.php";

$sql = "SELECT * FROM raffles";
$querry = $conn->prepare($sql);

$retdata = $querry->execute();

$raffles = $querry->fetchAll(PDO::FETCH_OBJ);

?>

<style>

</style>
</head>
<!-- <center>
    <p></p>
</center> -->

<div class="restsec2">
    <?php foreach ($raffles as $samp) : ?>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="<?php echo $samp->picture; ?>" alt="Card image cap">
            <div class="card-body">
                <!-- <h5 class="card-title"><?php echo $samp->hostname; ?></h5> -->
                <h6 class="card-subtitle mb-2 text-muted">Host: <?php echo $samp->hostname; ?></h6>
                <p class="card-text">
                    <?php echo $samp->reason; ?></p>
                <h6 class="card-subtitle mb-2 text-muted">Start Date: <?php echo $samp->startdate; ?></h6>
                <h6 class="card-subtitle mb-2 text-muted">End Date: <?php echo $samp->enddate; ?></h6>
                <a href="#" class="btn btn-primary">Buy ticket</a>
            </div>
        </div>
    <?php endforeach ?>
</div>