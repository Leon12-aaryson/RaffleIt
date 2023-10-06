<?php

use Stripe\Terminal\Location;

require "dbconn.php";


if (isset($_POST['run_raffle'])) {
    // Generate a random winner from your participants
    $sql = "SELECT * FROM payments ORDER BY RAND() LIMIT 1";
    $stmt = $conn->query($sql);
    $winner = $stmt->fetch(PDO::FETCH_ASSOC);

    // Insert the winner's information into the winners table
    $sql = "INSERT INTO winners (name, mail) VALUES (:paid_by, :payee_email)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':paid_by', $winner['paid_by']);
    $stmt->bindParam(':payee_email', $winner['payee_email']);
    $stmt->execute();

    // Confirm the success of the insertion
    if ($stmt->rowCount() > 0) {
        echo "Winner saved successfully!";
        header('Location: rafflewinners.php');
    } else {
        echo "Failed to save winner.";
    }
}
