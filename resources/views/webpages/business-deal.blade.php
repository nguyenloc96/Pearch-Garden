@extends('layouts.master')
@section('title', 'paters(ペイターズ)')
@section('style')
    @parent
    <link href="{!! asset('assets/css/webpages.css') !!}" rel="stylesheet">
@stop
@section('content')
<div class="wrap-container">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="title">
                    <h4> 特定商取引法に基づく表示 </h4>

                </div>
                <div class="section">
                    <div class="service-title">販売元業者</div>
                    <p class="m-b-30">株式会社paters</p>

                    <div class="service-title">運営責任者</div>
                    <p class="m-b-30">日高 亜由美</p>

                    <div class="service-title">所在地</div>
                    <p class="m-b-30">〒160-0023<br>東京都新宿区西新宿六丁目2番3号　新宿アイランドアネックス</p>

                    <div class="service-title">電話番号</div>
                    <p class="m-b-30">050 5814 5177<br>
                    ※サービスに関するお問い合わせはメールにて承ります。
                    </p>

                    <div class="service-title">メールアドレス</div>
                    <p class="m-b-30">info@paters.jp</p>

                    <div class="service-title">商品のお届け</div>
                    <p class="m-b-30">代金決済時</p>

                    <div class="service-title">お支払い方法</div>
                    <ul class="block">
                        <li>クレジットカード決済</li>
                        <li>Android アプリ内課金 (GooglePlay決済)</li>
                        <li>iPhone アプリ内課金 (AppleID決済)</li>
                    </ul>
                    <p>いずれの決済方法もpatersポイントは即時反映されます。</p>
                    <div class="service-title">途中退会の場合</div>
                    <p class="m-b-30">途中退会を行った場合、商品の性質上、返金は受け付けないものとします。</p>

                    <div class="service-title">返品交換</div>
                    <p class="m-b-30">返品/交換はお受けできません。</p>
                </div>
            </div>
        </div>
    </div>
    @include('customer/footer')
</div>
@stop