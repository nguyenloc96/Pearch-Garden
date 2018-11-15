@extends('layouts.master')
@section('title', 'Sweet Honeys')
@section('content')
<div class="wrap-container">
    <section class="page page-setting-card">
        <div class="header-tabs">
            <ul>
                <li class="header-tabs-item header-tabs-item-with-arrow">
                    <a class="header-tabs-back" href="/sweethoneys/buy-points"></a>
                    <h3>クレジットカード登録</h3>
                </li>
            </ul>
        </div>
        <div class="am-content">
            <div class="main-content">
                <div class="card-wrapper"></div>
                <div class="col-xs-12 form-container active">
                    <form id="payment-form" >
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div style="margin: 15px 0;">
                            <h1>クレジットカード追加</h1>
                        </div>

                        <div id="card-element"></div>
                        <div id="card-errors" role="alert"></div>

                        <div class="form-footer">
                            <button class="button button-bg-green button-setting" type="submit">
                                <span class="button-text">保存</span>
                            </button>
                        </div>
                    </form>        
                    <div class="text-left mt-2">
                        <a href="/sweethoneys/contact">お問い合せはこちらから</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('customer/footer')
</div>
@stop
@section('script')
    @parent
    <script src="https://js.stripe.com/v3/"></script>
    <script>
        var stripe = Stripe('my_api_code');
        var elements = stripe.elements();
        var style = {
            base: {
                // Add your base input styles here. For example:
                fontSize: '16px',
                color: "#32325d",
            }
        };

        // Create an instance of the card Element.
        var card = elements.create('card', {style: style});

        // Add an instance of the card Element into the `card-element` <div>.
        card.mount('#card-element');

        card.addEventListener('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });
        // Create a token or display an error when the form is submitted.
        var form = document.getElementById('payment-form');
        form.addEventListener('submit', function(event) {
            event.preventDefault();

            stripe.createToken(card).then(function(result) {
                if (result.error) {
                    // Inform the customer that there was an error.
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;
                } else {
                    // Send the token to your server.
                    stripeTokenHandler(result.token);
                }
            });
        });
        function stripeTokenHandler(token) {
            // Insert the token ID into the form so it gets submitted to the server
            var form = document.getElementById('payment-form');
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'stripeToken');
            hiddenInput.setAttribute('value', token.id);
            form.appendChild(hiddenInput);

            // Submit the form
            form.submit();
        }
    </script>
@endsection