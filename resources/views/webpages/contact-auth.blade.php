@extends('layouts.master')
@section('title', 'Paters')
@section('content')
<div class="wrap-container"> 
    <section class="page page-setting page-setting-use page-setting-contact">
        <div class="header-tabs">
            <ul>
                <li class="header-tabs-item header-tabs-item-with-arrow">
                    <a class="header-tabs-back" href="/users/configurations"></a>
                    <h3>お問い合わせ</h3>
                </li>
            </ul>
        </div>
        <div class="page-content">
            <div class="form-inner">
                <ul class="page-setting-use-lists">
                    <li class="page-setting-use-list">
                        <div class="page-setting-use-list-sec">
                            <h3> お問い合わせに関して </h3>
                            <p>
                                patersをご利用いただき、誠にありがとうございます。<br>
                                ご利用中に分からないことがあった場合は、よくある質問をお読みください。
                            </p>
                        </div>
                        <div class="page-setting-use-list-sec">
                            <h3> よくあるご質問 </h3>
                            <ul class="ac-lists">
                                <li class="ac-list">
                                    <dl class="acMenu">
                                        <dt>決済が完了したのに反映されない場合</dt>
                                        <dd>
                                            各種有料プランへのご登録・ポイントのご購入など、決済を伴うお申込みをされたにも関わらず、内容がアプリ内に反映されない場合は、下記手順に沿ってご確認ください。<br>
                                            リストア】<br>
                                            決済処理の途中で接続状況が不安定になるなどの原因により、ご決済内容がアプリ内に反映されない場合は、マイページ（プロフィール編集）の一番下にある「リストア」ボタンを押して購入処理の復元をお試しください。<br>
                                                ※リストアは「既に存在する決済情報を再送する」操作です。重複しての決済とはなりませんのでご安心ください。
                                                また、決済が正常に行われない場合には、ご登録されているクレジットカードの与信枠が上限に達している場合もございます。一度クレジットカード情報をご確認ください。<br>
                                                Apple Store：「<a href="https://support.apple.com/ja-jp/HT201266">Apple ID のお支払い情報を変更・削除する</a>」<br>
                                                Google Play：「<a href="https://support.google.com/googleplay/answer/1050566?hl=ja&ref-topic=7049688">アプリ内購入に関する問題</a>」<br>
                                            【問題が解決されない場合】<br>
                                        　  <a href="/webpages/contact">patersカスタマーサポート</a>までお問い合わせください。
                                        </dd>
                                    </dl>
                                </li>
                                <li class="ac-list">
                                    <dl class="acMenu">
                                        <dt>年齢（生年月日）を間違えて登録してしまった</dt>
                                        <dd>年齢確認画面の下部に、「生年月日を間違えて登録して変更したい場合」ボタンがございます。生年月日の変更は1回のみとなり、年齢確認書類の提出後は変更できませんので予めご了承くださいませ。<br>また、ご登録されている年齢と年齢確認提出書類に相違がある場合、ご利用いただけません。</dd>
                                    </dl>
                                </li>
                                <li class="ac-list">
                                    <dl class="acMenu">
                                        <dt>退会後の再登録について</dt>
                                        <dd>patersを退会されますと、30日間再登録ができませんので予めご了承くださいませ。また、一度退会されますと、ポイントやいいね、過去のマッチング・やり取り中のメッセージなど全てのデータが削除され、復元されることはございませんのでお気をつけください。</dd>
                                    </dl>
                                </li>
                                <li class="ac-list">
                                    <dl class="acMenu">
                                        <dt>自分のいいね！の数が減った</dt>
                                        <dd>いいね数は、「過去30日間に受け取ったいいね数」が表示されている形となります。30日より前にお届きになった「いいね！」はカウントがされなくなってしまうため、新たに「いいね！」をいただいても、30日前の「いいね！」がカウントされずに、「いいね ！」数の変動がない状態や減ってしまう場合がございます。</dd>
                                    </dl>
                                </li>
                            </ul>
                            <p class="submit submit-success submit-next help-btn">
                                <a href="/webpages/question">ヘルプを見る</a>
                            </p>
                        </div>
                        <div class="page-setting-use-list-sec page-setting-use-list-sec-contact">
                            <h3> お問い合わせフォーム </h3>
                            <p>
                                「ヘルプ」を読んでも解決しない場合は、以下よりお問い合わせください。<br>
                                お問い合わせ受付：24時間 365日受付<br>
                                返信対応時間：10:00 ~ 19:00<br>
                                場合によりご回答までに2営業日程度いただく場合もございます。場合によりご回答までに少々お時間をいただく場合もございます。予めご了承くださいませ。<br>
                                下記から必須項目を「選択」「入力」し、「送信」ボタンを押してください。<br>
                                「info@paters.jp」からのメールを受信できる設定になっていないと、こちらから返信できませんのでご注意ください。
                            </p>
                            <div class="page-setting-use-list-sec-contact-form">
                                <div class="page-modal-bk-inner-input page-registration-inner-input">

                                    <form method="POST" action="{!! route('contact-auth') !!}" class="form form-setting-tel-block" id="new_inquiry">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                        <div class="form-inner">
                                            <div class="form-inner-sec" id="inquiry-form-group-inquiry-category">
                                                <label class="form-inner-sec-ttl" for="inquiry-inquiry-category-id">お問い合わせカテゴリ</label>
                                                <div class="input-box input-box-clm input-box-focus">
                                                    <div class="input-box-in">
                                                        <select name="inquiry_category_id" id="inquiry-inquiry-category-id">
                                                            <option value="221"> お支払について </option>
                                                            <option value="222"> 不快なユーザがいる </option>
                                                            <option value="223"> サイトの技術的な問題について </option>
                                                            <option value="224"> 利用規約・プライバシーポリシーについて </option>
                                                            <option value="225"> 取材依頼等 </option>
                                                            <option value="226"> その他 </option>
                                                            <option value="227"> 退会 </option>
                                                        </select>
                                                        {!! $errors->first('inquiry_category_id', '<span class="error-text">:message</span>') !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-inner-sec">
                                                <div class="input-box input-box-clm input-box-focus">
                                                    <div class="input-box-in">
                                                        <label class="form-inner-sec-ttl" for="inquiry-detail">お問い合わせ内容</label>
                                                        <textarea rows="3" name="inquiry_detail" id="inquiry-detail"></textarea>
                                                        {!! $errors->first('inquiry_detail', '<span class="error-text">:message</span>') !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-inner-sec">
                                                <label class="form-inner-sec-ttl" for="inquiry-email">連絡先メールアドレス</label>
                                                <div class="input-box input-box-clm input-box-focus">
                                                    <div class="input-box-in">
                                                        <input placeholder="メールアドレスのお間違いにご注意ください。" class="form-group-tag form-group-tag-tel-sms" type="email" name="inquiry_email" id="inquiry-email" />
                                                        {!! $errors->first('inquiry_email', '<span class="error-text">:message</span>') !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <small>「info@paters.jp」からご登録のメールアドレス宛てに返信いたします。このメールアドレスからのメールが受信できる設定がされていることをご確認ください。</small>
                            
                                            <div class="submit current">
                                                <input type="submit" name="commit" value="送信" class="btn btn-lg btn-c" id="send" disabled="disabled" data-disable-with="送信"/>
                                            </div>
                                        </div>
                                    </form>
                                </div>  
                            </div>
                        </div>
                    </li>
                </li>
            </div>
        </div>
    </section>
</div>
@stop
@section('script')
    @parent
    <script>
        $(".acMenu dt").on("click", function() {
            $(this).next().slideToggle();
            $(this).toggleClass("active");
        });
        $('#inquiry-detail, #inquiry-email').keyup(function() {
            validationCheck();
        });
        setInterval(function(){
            validationCheck();
        }, 1000);
        function validationCheck() {
            var isValid = true;
            if($('#inquiry-detail').val() == '') {
                isValid = false;
            }
            if(!/(.+)@(.+){2,}\.(.+){2,}/.test($('#inquiry-email').val())){
                isValid = false;
            } 
            if(isValid){
                $('#send').removeAttr('disabled');
            }
            else {
                $('#send').attr('disabled', 'disabled');
            }
        }
    </script>
@stop