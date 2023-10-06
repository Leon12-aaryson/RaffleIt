<?php
require "dbconn.php";

if (isset($_POST['transdata'])) {
    // Retrieve form data
    $productId = $_POST['productId'];
    $productHost = $_POST['productHost'];
    $productReason = $_POST['productReason'];
    $productPicture = $_POST['productPicture'];
    $productStartDate = $_POST['productStartDate'];
    $productEndDate = $_POST['productEndDate'];


    $payee_email = $_POST['payee_email'];
    $payment_id = $_POST['payment_id'];
    $payment_amount = $_POST['payment_amount'];
    $ticket_number = $_POST['numTickets'];
    $payment_method = $_POST['payment_method'];
    $currency = $_POST['currency'];
    $productReason = $_POST['payment_reason'];
    $payment_status = $_POST['payment_status'];
    $payment_date = $_POST['payment_date'];

    // Establish database connection

    // Prepare the INSERT statement
    $sql = "INSERT INTO payments (payee_email, payment_id, payment_amount, reason, ticket_number, payment_method, currency, payment_status, payment_date) VALUES
 (:payee_email, :payment_id, :payment_amount, :reason, :ticket_number, :payment_method, :currency, :payment_status, :payment_date)";
    $query = $conn->prepare($sql);

    // Bind the values to the placeholders
    $data = [
        ':payee_email' => $_SESSION['email'],
        ':payment_id' => $_POST['payment_id'],
        ':payment_amount' => $_POST['payment_amount'],
        ':reason' => $_POST['payment_reason'],
        ':ticket_number' => $_POST['numTickets'],
        ':payment_method' => $_POST['payment_method'],
        ':currency' => $_POST['currency'],
        ':payment_status' => $_POST['payment_status'],
        ':payment_date' => $_POST['payment_date']
    ];

    // Execute the INSERT statement
    $insertData = $query->execute($data);

    // Handle the result
    if ($insertData) {
        $_SESSION['message'] = "Data Inserted";
        header('Location: index.php');
    } else {
        $_SESSION['message'] = "Data insertion failed";
    }
}
