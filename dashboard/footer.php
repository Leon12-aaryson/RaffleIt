<script src="static/bootstrap/js/jquery.js"></script>
<script src="static/bootstrap/js/bootstrap.min.js"></script>
<script src="static/bootstrap/js/bootstrap.min.js.map"></script>
<script src="static/styles/js/index.js"></script>
<script src="static/styles/js/aos.js"></script>
<!-- Stripe payments -->

<!-- bootstrap5 js CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://js.stripe.com/v3/"></script>
<script>
    AOS.init();

    AOS.init({
        duration: 800,
        easing: 'ease-in-sine',
        delay: 400,
    });
</script>

<script>
    $(function() {
        let stripe = Stripe('pk_test_51NsCs7DbArZGnKh32NogjkKANm2rtHK1UIjgA0aTlBDdbZSBR4XbJnhSJB9o3iOlR12Qn0Tacyy1HpNcfedkn8cq00HFdQGG98');
        $(document).on('click', '.buy_now_btn', function(e) {
            let id = $(this).attr('id');
            // $(this).text('Please Wait...');
            $.ajax({
                url: 'raffles.php',
                method: 'POST',
                data: {
                    id: id,
                    stripe_payment_process: 1
                },
                dataType: 'json',
                success: function(response) {
                    return stripe.redirectToCheckout({
                        sessionId: response.id
                    })
                }
            });
        });
    });
</script>

</body>

</html>