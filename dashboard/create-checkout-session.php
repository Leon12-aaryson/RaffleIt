<?php
require_once "dbconn.php";
require 'vendor/autoload.php';
$stripe = new \Stripe\StripeClient('sk_test_51NsCs7DbArZGnKh33hoGr9l0jwDXylUvr6SWsjGPOGWgxBf4mCAw5s8V9uvYTohsvhlHsNuDgLE2i1dCJtMhSVQe00SXfwWqyf');

$sql = "SELECT * FROM raffles";
$querry = $conn->prepare($sql);
$retdata = $querry->execute();
$raffles1 = $querry->fetchAll(PDO::FETCH_OBJ);


foreach ($raffles1 as $raft) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numTickets = $_POST["numTickets"];

        if ($numTickets == 7) {
            $amount = $raft->ticket3 * 100;
        } elseif ($numTickets == 3) {
            $amount = $raft->ticket2 * 100;
        } elseif ($numTickets == 1) {
            $amount = $raft->ticket1 * 100;
        } else {
            // Handle any other number of tickets
            $amount = 0;
        }

        // echo "Amount: $" . $amount;
    }
}

if (isset($_POST['productId'])) {
    $productId = $_POST['productId'];
    $productHost = $_POST['productHost'];
    $productReason = $_POST['productReason'];
    // Use the product ID as needed
    // ...

    // new addition for amount
    // $payment_amount = $_POST['payment_amount'];

    $checkout_session = $stripe->checkout->sessions->create([
        'line_items' => [[
            'price_data' => [
                'currency' => 'usd',
                'product_data' => [
                    'name' => $productReason,
                    'description' =>  "Hosted by: " . $productHost,,
                ],
                'unit_amount' => $amount,
            ],
            'quantity' => 1,
            // 'description' => $productReason,
        ]],
        'mode' => 'payment',
        'metadata' => [
            'description' => $productReason, // Set your custom description
        ],
        'success_url' => 'https://metest.raffleitapp.com/',
        'cancel_url' => 'https://metest.raffleitapp.com/',
    ]);

    // var_dump(json_encode($checkout_session));
    // exit(20);
    header("HTTP/1.1 303 See Other");
    header("Location: " . $checkout_session->url);

    $productReason = $_POST['productReason'];


    // include "dbpaid.php";
    $productId = $_POST['productId'];
    $productHost = $_POST['productHost'];
    $productReason = $_POST['productReason'];



    $payee_email = $_POST['payee_email'];
    $payment_id = $_POST['payment_id'];
    $payment_amount = $_POST['payment_amount'];
    $ticket_number = $_POST['numTickets'];
    $payment_method = $_POST['payment_method'];
    $currency = $_POST['currency'];
    $payment_reason = $_POST['payment_reason'];
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
        // header('Location: index.php');
    } else {
        $_SESSION['message'] = "Data insertion failed";
    }
}
