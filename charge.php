
<?php
require_once('./dashboard/vendor/autoload.php');
include("./dbconn.php");
\Stripe\Stripe::setApiKey('sk_test_51NsCs7DbArZGnKh33hoGr9l0jwDXylUvr6SWsjGPOGWgxBf4mCAw5s8V9uvYTohsvhlHsNuDgLE2i1dCJtMhSVQe00SXfwWqyf'); // Set your Stripe secret key
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $token = $_POST['token'];
    $amount = $_POST['amount'];
    $ticket_no = $_POST['ticket_no'];
    $ticket_id = $_POST['product_id'];
    $ticket_host = $_POST['product_host'];
    $product_reason = $_POST['product_reason'];
    $name = $_POST['card_name'];
    $email = $_POST['email'];
    $new_amount = ((double)$amount * 100);
    $uid = 1;
    $paid ="paid";

 
    try {
        // Create a charge using the token
        $charge = \Stripe\Charge::create([
            'amount' => $new_amount, // Amount in cents (adjust as needed)
            'currency' => 'usd',
            'description' => $product_reason,
            'source' => $token,
          
            'metadata' =>[
                'amount' => $amount,
                'name' => $name,
                'description' => $product_reason,
                'ticket_no' => $ticket_no,
                'ticket_host' => $ticket_host,
                'ticket_id' => $ticket_id,
            ]
        ]);

        // Payment was successful, use dd() to view the response
        $query = "INSERT INTO payments (`user_id`, `payee_email`, `payment_id`, `payment_amount`, `reason`, `ticket_id`, `ticket_number`, `payment_method`, `currency`, `payment_status`) 
                VALUES(:user_id, :payee_email, :payment_id, :payment_amount, :reason,:ticket_id,:ticket_number,:payment_method,:currency,:payment_status)";
        $stmt = $conn->prepare($query);

        if($stmt){
            
            $stmt->bindParam(':user_id', $uid, PDO::PARAM_STR);
            $stmt->bindParam(':payee_email', $email, PDO::PARAM_STR);
            $stmt->bindParam(':payment_id', $charge->id, PDO::PARAM_STR);
            $stmt->bindParam(':payment_amount', $amount, PDO::PARAM_STR);
            $stmt->bindParam(':reason', $product_reason, PDO::PARAM_STR);
            $stmt->bindParam(':ticket_id', $ticket_id, PDO::PARAM_STR);
            $stmt->bindParam(':ticket_number', $ticket_no, PDO::PARAM_STR);
            $stmt->bindParam(':currency', $charge->currency, PDO::PARAM_STR);
            $stmt->bindParam(':payment_method', $charge->payment_method, PDO::PARAM_STR);
            $stmt->bindParam(':payment_status', $paid, PDO::PARAM_STR);

            if( $stmt->execute()){
                echo json_encode(['success' => true, 'message'=>'Payment successfully']);

            }

        }
      
    
       
    } catch (\Stripe\Exception\CardException $e) {
        // Card was declined, use dd() to view the error response
        print_r($e->getJsonBody());
    } catch (\Exception $e) {
        // Handle other exceptions, use dd() to view the error response
        print_r($e->getMessage());
    }
}
