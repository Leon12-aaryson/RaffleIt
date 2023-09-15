<?php
$title = "Update Events";
require "header.php";
require "dbconn.php";
?>

<div class="row whole">
    <?php
    include "sidebar.php";
    ?>
    <div class="col-md-8 ml-4 whole-dash">
        <div class="startcard col-12">
            <h4>Update Raffles</h4>
        </div>
        <div class="row p-2">
            <div class="card regcard col-md-5 p-2">
                <div class="card-body">
                    <!-- <h5 class="card-title">Upcoming Raffles</h5> -->
                    <?php
                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];

                        $querry = "SELECT * FROM raffles WHERE id=:id";
                        $statement = $conn->prepare($querry);
                        $data = [
                            ':id' => $id
                        ];
                        $statement->execute($data);
                        $result = $statement->fetch(PDO::FETCH_OBJ);
                    }
                    ?>

                    <form action="delraffle.php" class="form-group" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $result->id; ?>">
                        <div class="form-group">
                            <label for="hostname">Host Name</label>
                            <input id="hostname" class="form-control" type="text" value="<?= $result->hostname; ?>"
                                name="hostname" placeholder="Enter Host name">
                        </div>
                        <div class="form-group">
                            <label for="reason">Reason</label>
                            <input id="reason" class="form-control" type="text" name="reason" value="<?= $result->reason; ?>"
                                placeholder="Enter Reason for raffle">
                        </div>
                        <div class="form-group">
                            <label for="picture">Picture</label>
                            <input id="picture" class="form-control" type="file" name="picture" value="<?= $result->picture; ?>"
                                placeholder="Upload Raffle picture">
                        </div>
                        <div class="form-group">
                            <label for="startdate">Raffle Start Date</label>
                            <input type="date" name="startdate" id="startdate" class="form-control" value="<?= $result->startdate; ?>"
                                placeholder="Start date">
                        </div>
                        <div class="form-group">
                            <label for="enddate">End Date</label>
                            <input type="date" name="enddate" id="enddate" class="form-control" placeholder="End date" value="<?= $result->enddate; ?>">
                        </div>
                        <button type="submit" class="btn btn-primary" name="update_raffle">SUBMIT</button>
                    </form>
                </div>
            </div>
        </div>
    </div>