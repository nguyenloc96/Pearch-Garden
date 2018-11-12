@extends('layouts.master')
@section('title', 'Peach Garden')
@section('content')
<div class="wrap-container">
    <section class="page page-setting page-setting-fiend-invite">
        <div class="header-tabs">
            <ul>
                <li class="header-tabs-item header-tabs-item-with-arrow">
                    <a class="header-tabs-back" href="/users/configuration"></a>
                    <h3>お問い合わせ送信完了</h3>
                </li>
            </ul>
        </div>
        <div class="col-xs-12">
            <div>
                <p class="section text-center inquiries-complete">
                    <span>お問い合わせの送信が完了しました。</span><br>
                    <span>お問い合わせ内容は運営事務局にて確認させていただきます。運営事務局より自動返信メールが届きます。24時間以内にメールが届かない場合、ご登録のメールアドレスが間違っている、もしくはドメイン拒否を行っている場合がございます。お手数ですが再度ご連絡をお願いいたします。</span><br>
                    <span>返信対応時間 平日 10:00~19:00</span>
                </p>
            </div>
        </div>
    </section>
    @include('customer/footer')
</div>
@stop