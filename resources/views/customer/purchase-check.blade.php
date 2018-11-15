@extends('layouts.master')
@section('title', 'Sweet Honeys')
@section('content')
<div class="wrap-container-2">
    <div class="text-center mt-3">
        <img src="/assets/image/header_logo_pc.jpg">
    </div>
    <div class="text-center border" id="table-purchase">
        <form method="POST" action=""  enctype= "multipart/form-data" id="payment-form">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <table cellspacing="0" class="border">
                <tbody>
                    <tr>
                        <td class="cell-left"> 
                            <div class="cell-td">
                                <ul class="cell-item">
                                    ご利用サイト名
                                    <span> (Site Name)</span>
                                </ul>
                                <ul class="lead-only">
                                    <b>Sweet Honeys</b>
                                </ul>
                            </div>
                            <div class="cell-td">
                                <label for="select-card">
                                    <ul class="cell-item">
                                        <input 
                                            type="radio" 
                                            name="select_card" 
                                            id="select-card"     
                                            value="0"
                                            checked="checked"
                                        >
                                            クレジットカード番号
                                        <span> (Credit Card Number)</span>
                                    </ul>
                                    <ul class="lead-only">
                                        <b>9874xxxxxxxx7894</b>
                                    </ul>
                                </label>　
                            </div>
                            <div class="cell-td">
                                <label for="select-card">
                                    <ul class="cell-item">
                                        <input 
                                            type="radio" 
                                            name="select_card" 
                                            id="select-card"     
                                            value="1"
                                        >
                                            新しいカードで支払う
                                        <span> (New Card Number)</span>
                                    </ul>
                                </label>

                                <div id="card-element"></div>
                                <div id="card-errors" role="alert"></div>

                                <ul class="cell-item">
                                    <span class="cell-item-2">*ご利用いただけるカード</span><br>
                                    <img src="/assets/image/visa.gif" alt="VISA">
                                    <img src="/assets/image/master.gif" alt="MasterCard">
                                    <img src="/assets/image/jcb.gif" alt="JCB">
                                </ul>　
                            </div>
                            <div class="cell-td">
                                <ul class="cell-item">
                                    申し込み金額 
                                    <span> (Amount of Charge) </span>
                                </ul>
                                <ul class="lead-only-2">
                                    <b>10400円</b>
                                </ul>
                            </div>
                        </td>
                        <td class="cell-right"> 
                            <ul class="notes">※お申し込みする上での注意事項</ul>
                            <ul class="notes-txt">
                                ・お申し込みの決済の明細書表示名は以下のいずれかで記載されます。
                                <span class="credit-txt">
                                    <b>CREDIT</b>
                                </span>
                                <span class="small-txt">　
                                    <b>※ご利用サイト名は記載されません。</b>
                                </span>
                                <br>(The descriptor on your invoice will be one of the following:TELECOM)
                            </ul>
                            <ul class="notes-txt">
                                ・エムアイカード
                                <span class="small-txt">(旧 伊勢丹アイカード、旧 三越Ｍカード)</span>
                                またはビューカードをご利用の方は
                                <a 
                                    target="_blank" 
                                    href="https://secure.telecomcredit.co.jp/notes/tc_issuer_memo.html"
                                >
                                    こちらの重要なお知らせをご確認ください。
                                </a>
                            </ul>
					        <ul class="notes-txt">
                                ・個人情報の取り扱いについては必ず
                                <a 
                                    target="_blank"
                                    href="https://secure.telecomcredit.co.jp/notes/credituser_tc.html"
                                >
                                    こちらをお読みください。
                                </a>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
    <div class="order">
		<div class="text-center mt-5">
            【個人情報の取り扱いについて】ご同意いただける場合は、「決済開始」を押してください。
        </div>
        <div class="text-center mt-4">
			<input type="image" src="/assets/image/order_button5_pc.jpg" value="submit">
        </div>
    </div>
</div>
<div class="wrap-container-2 mt-5">
    <div id="company-2">
        <div id="company-logo">
            <img name="テレコムロゴ" src="/assets/image/logo.png" alt="クレジット株式会社">
        </div>
        <p class="notes-txt">
            〒108-0073 東京都港区三田ル<br>
            クレジットカード決済ご利用に関するお問い合わせ先<br>
            【TEL】0570-055-000（9:00 ～ 22:00）※土日祝日 1000 ～ 1900<br>
            【E-mail】<a href="mailto:info@telecomcredit.co.jp">info@credit.co.jp</a><br>
            ※お問い合わせの際はご利用店舗/サイト名を明記してください。<br>
            個人情報に関するお問い合わせ先<br>
            【E-mail】<a href="mailto:privacy@telecomcredit.co.jp">privacy@credit.co.jp</a>（10:00 ～ 19:00）<br>
	    </p>
    </div>
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