<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <style>
        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        #card-element {
            border: 1px solid #ccc;
            padding: 10px;
        }

        #card-element input.InputElement {
            display: block !important;
            width: 100%;
            border: #ccc 1px solid;
        }

        #card-errors {
            color: red;
        }

        button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }

        .container {
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            width: 500px;
            padding: 12px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <form id="payment-form">
                <div class="form-group">
                    <label for="">Email Address</label>
                    <input type="email" required id="email" class="form-control">
                </div>

                <div class="form-group">
                    <label for="card-element">Credit Card Details</label>
                    <div id="card-element">
                        <!-- A Stripe Element will be inserted here. -->
                    </div>
                    <!-- Used to display form errors. -->
                    <div id="card-errors" role="alert"></div>
                </div>
                <div class="form-group my-3">
                    <label for="">Name on Card</label>
                    <input type="text" required id="card_name" class="form-control">
                </div>

                <button class="mx-auto" type="submit">Submit Payment</button>
            </form>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script>
        const data = JSON.parse(localStorage.getItem('tickets'));
        console.log(data['product_id']);

        var stripe = Stripe('pk_test_51NsCs7DbArZGnKh32NogjkKANm2rtHK1UIjgA0aTlBDdbZSBR4XbJnhSJB9o3iOlR12Qn0Tacyy1HpNcfedkn8cq00HFdQGG98');

        // Create an instance of Elements.
        var elements = stripe.elements();

        // Create an instance of the card Element.
        var card = elements.create('card');

        // const data = JSON.parse("tickets");
        // Add an instance of the card Element into the `card-element` div.
        card.mount('#card-element');
        // Handle form submission.
        $('#payment-form').on('submit', function(event) {
            event.preventDefault();
            var name = $("#card_name").val();
            var email = $("#email").val();
            console.log(name, email);
            stripe.createToken(card).then(function(result) {
                console.log(result.token.id);
                if (result.error) {
                    // Inform the user if there are any errors.
                    $('#card-errors').text(result.error.message);

                } else {
                    // Send the token to your server using AJAX.
                    const param = {
                        token: result.token.id,
                        card_name: name,
                        email: email,
                        product_id: data.product_id,
                        product_host: data.product_host,
                        product_reason: data.product_reason,
                        ticket_no: data.ticket_num,
                        amount: data.amount
                    }
                    $.ajax({
                        url: './charge.php', // Replace with your server-side endpoint
                        method: 'POST',
                        data: param,
                        success: function(response) {
                            console.log(response);
                            const info = JSON.parse(response);

                            if (info.success) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Congratulation',
                                    text: info.message,
                                   
                                });
                                window.location.href = "./index.php";
                            }


                        }
                    });
                }
            });
        });
    </script>
</body>

</html>