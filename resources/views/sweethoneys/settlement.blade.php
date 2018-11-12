@extends('layouts.master')
@section('title', 'Sweet Honeys')
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
                    <h4>資金決済法に基づく表示</h4>
                </div>
                <div class="section">
                    <div class="service-title">サービス提供事業者</div>
                    <p class="m-b-30">
                        Sweet Honeys<br>
                        〒160-0023<br>東京都新宿区西新宿六丁目2番3号　新宿アイランドアネックス
                    </p>
                    <div class="service-title">支払い可能金額</div>
                    <p class="m-b-30">
                        10,000ポイントを超えて購入することはできません。
                    </p>
                    <div class="service-title">有効期限</div>
                    <p class="m-b-30">購入したポイントの有効期限は購入日を含め180日です。当社は、最終のアクセスから１年間以上経過しているアカウントを、あらかじめお客様に通知することなく削除することができます。この場合、未使用のポイントは失効します。</p>

                    <div class="service-title">ご利用いただけるサービス</div>
                    <p class="m-b-30">Sweet Honeys内でのサービスにお使い頂けます。</p>

                    <div class="service-title">ご利用上の注意事項</div>
                    <ul class="block">
                        <li>原則として、ポイントの払い戻しはいたしません</li>
                        <li>サービスを退会されますと、ポイントも失効となりますのでご注意ください</li>
                        <li>ポイントに関して詳しくは <a href="/sweethoneys/help"> ヘルプ </a> をご覧ください</li>
                    </ul>

                    <div class="service-title">未使用残高の確認方法</div>
                    <p class="m-b-30">サイト上の「ポイントについて」ページ、アプリの「マイページ」よりご確認頂けます。</p>

                    <div class="service-title">お問い合わせ先</div>
                    <p class="m-b-30">
                        Sweet Honeys カスタマーサポート<br>
                        info@sweethoneys.jp<br>
                        〒160-0023  東京都新宿区西新宿六丁目2番3号　新宿アイランドアネックス
                    </p>

                    <div class="service-title">利用規約</div>
                    <p class="m-b-30"> <a href="/sweethoneys/terms" style="color: #337ab7;">こちら</a> をご覧ください</p>
                </div>
            </div>
        </div>
    </div>
    @include('customer/footer')
</div>
@stop