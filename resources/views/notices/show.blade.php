@extends('layouts.master')
@section('title', 'Peach Garden')
@section('content')
<div class="wrap-container page-notices">
    <div class="header-tabs header-income-certification header-notices mt-2"> 
        <ul>  
            <li class="header-tabs-item header-tabs-item-with-arrow">
                <a class="header-tabs-back" href="/users/me"></a>
                <h3>お知らせ</h3>
            </li>
        </ul>
    </div>
    <div class="news-detail-contents">
        <div class="news-detail-area">
            <p class="news-date">2018/10/30 16:06</p>
            <p class="news-ttl">年齢認証書類の否認のお知らせ</p>
        </div>
    </div>
    <div class="news-detail-txt">
        <p>
            あなたのご提出いただいた年齢認証書類は、運営事務局から下記の理由により否認されました。
            お手数ではございますが、理由をご確認の上再度ご提出をお願い致します。
            理由：年齢確認書類は必ずご本人の「運転免許証」「パスポート」および「健康保険証」等の公的機関が発行した書類をご提出ください。
        </p>
    </div>
    @include('customer/footer')
</div>
@stop 