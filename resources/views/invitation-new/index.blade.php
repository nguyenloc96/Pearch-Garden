@extends('layouts.master')
@section('title', 'Sweet Honeys - 友人を招待')
@section('content')
<div class="wrap-container">
    <section class="page page-setting page-setting-fiend-invite">
        <div class="header-tabs">
            <ul>
                <li class="header-tabs-item header-tabs-item-with-arrow">
                    <a class="header-tabs-back" href="/users/configuration"></a>
                    <h3>友達を招待</h3>
                </li>
            </ul>
        </div>
        <div class="kv">
            <img src="/assets/image/point.png" alt="Friend Point">
        </div>
        <div class="page-content">
            <div class="form-inner">
                <div class="desc">
                    <p>
                        <strong>友だちを招待で10ptゲット!!</strong>
                        友だちがあなたの招待で Sweet Honeys を利用し、招待コードを入力すると、あなたと友だち両方に10ptをプレゼントします。
                    </p>
                    <p>
                        <strong>ポイントのご利用方法</strong>
                        ポイントは、1pt =1いいね！に交換することができます。交換した「いいね！」で気になるお相手に「いいね！」を送りましょう。
                    </p>
                </div>
                <form class="form form-setting-fiend" action="/" method="post" onsubmit="return false;">
                    <p class="form-setting-fiend-code form-setting-fiend-code-mail">
                    <span>あなたの招待コード</span>
                    <strong id="invitation-code"></strong>
                    <a href="javascript:return false;" id="invitation-code-copy">コピー</a>
                    </p>
                    <button class="button button-bg-green button-tc-white button-setting" onClick="location.href='/users/configuration/update-email';">
                        <span class="button-text">認証メールを再送信する</span>
                    </button>
                    <small>
                        <a href="/users/configuration/update-email">
                            メールアドレスの 再設定 はこちら
                        </a>
                    </small>
                </form>
            </div>
        </div>
    </section>
    @include('customer/footer')
</div>
@stop