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
    <div class="prov-content-wrap prov-present news-contents">
        <div class="news-read-area">
            <p class="all-read">
                <a 
                    data-remote="true" data-disable-with="既読にしています..." 
                    id="read_all_users_notices_btn" 
                    rel="nofollow" data-method="put" 
                    href="/users/notices/read-all"
                >全て既読</a>
            </p>
            <p class="set-ttl">受信設定にお困りですか？</p>
            <p class="set-txt">プッシュ通知とメールの受信設定は以下より行うことが可能です。</p>
            <div class="set-btn">
                <a href="/users/configuration/notify-setting">設定画面へ</a>
            </div>
        </div>
    </div>
    <div class="news-lists">
        <ul>
            <li class="bl-news">
                <a href="/users/notices/notice-id">
                    <span class="news-date">2018/11/01 11:37</span><br>
                    <span class="news-txt">所得証明書類の否認のお知らせ</span>
                </a>      
            </li>
            <li class="bl-news">
                <a href="/users/notices/notice-id">
                    <span class="news-date">2018/11/01 11:30</span><br>
                    <span class="news-txt">所得証明書類の否認のお知らせ</span>
                </a>      
            </li>
            <li class="wh-news">
                <a href="/users/notices/notice-id">
                    <span class="news-date">2018/10/30 18:43</span><br>
                    <span class="news-txt">年齢認証書類の否認のお知らせ</span>
                </a>      
            </li>
            <li class="bl-news">
                <a href="/users/notices/notice-id">
                    <span class="news-date">2018/10/30 18:04</span><br>
                    <span class="news-txt">年齢認証書類の否認のお知らせ</span>
                </a>      
            </li>
            <li class="bl-news">
                <a href="/users/notices/notice-id">
                    <span class="news-date">2018/10/30 16:06</span><br>
                    <span class="news-txt">年齢認証書類の否認のお知らせ</span>
                </a>      
            </li>
            <li class="bl-news">
                <a href="/users/notices/notice-id">
                    <span class="news-date">2018/10/29 18:38</span><br>
                    <span class="news-txt">プロフィール項目（よく行く場所）の否認のお知らせ</span>
                </a>      
            </li>
        </ul>
    </div>
    @include('customer/footer')
</div>
@stop   