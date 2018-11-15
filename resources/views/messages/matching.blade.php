@extends('layouts.master')
@section('title', 'Sweet Honeys')
@section('content')
<div class="wrap-container">
    @include('homepages/header')
    <section class="page page-like page-message">
        <section class="page-head page-head-like">
            <div class="page-head-sort">
                <ul class="flex">
                    <li class="current"><span>マッチング中</span></li>
                    <li><a href="/users/messages/have-messaged">やりとり中</a></li>
                </ul>
            </div>
            <div class="page-head-message">
                <p>
                    2 人のお相手がメッセージを待っています。<br>
                    早速メッセージを送りましょう。
                </p>
            </div>
        </section>
        <section class="page-body">
            <!-- Empty Inner -->
            <!-- <div class="page-empty-inner">
                <img class="page-empty-icon" src="/assets/image/empty_view_icon_4@3x.png" alt="">
                <p class="page-empty-title">
                    まだマッチングしている<br>
                    お相手はいません。
                </p>
                <p class="page-empty-text">
                    今すぐ検索を試して魅力的な<br>
                    お相手にいいね！してみましょう。
                </p>
                <div class="page-empty-button">
                    <a href="/users/search">
                        <button class="button button-bg-green button-tc-white" type="button">
                            <span class="button-text">お相手を検索してみる</span>
                        </button>
                    </a>  
                </div>
            </div> -->
            <!-- Not Empty Inner -->
            <section class="page-body-sec">
                <p class="page-body-title">
                    11/5(月)
                </p>
                <ul class="page-message-list">
                    <a href="#" onclick="show_age_certified_modal(); return false;">
                        <li class="message-list-item  aitai">
                            <img class="message-list-thumb" src="/assets/image/square_015.jpeg"/>
                            <div class="message-list-body">
                                <p class="message-list-name">Rina 20歳 東京都</p>
                                <p class="message-list-state online">オンライン</p>
                                <p class="message-list-time">19:03</p>
                            </div>
                        </li>
                    </a>
                    <a href="#" onclick="show_age_certified_modal(); return false;">
                        <li class="message-list-item  ">
                            <img class="message-list-thumb" src="/assets/image/square_8b.jpeg" />
                            <div class="message-list-body">
                                <p class="message-list-name">Mm 22歳 東京都</p>
                                <p class="message-list-state interval">24時間以内</p>
                                <p class="message-list-time">14:00</p>
                            </div>
                        </li>
                    </a>
            </section>
        </section>
    </section>
    <div class="alert-message" style="display: none;">
        <div class="alert-message-inner">
            <p class="alert-message-copy alert-message-copy-first">
                年齢確認が<br>
                終わっていません
            </p>
            <p class="alert-message-copy">
                お相手のメッセージを確認するため
                <br>には先に年齢確認が必要です。
            </p>
            <div class="alert-message-btngroup">
                <a 
                    class="alert-message-button alert-message-button-green" 
                    href="/users/age-certification/incomplete"
                >
                    年齢確認をはじめる
                </a>
                <a href="#" class="alert-message-button" onclick="hide_age_certified_modal(); return false;">キャンセル</a>
            </div>
        </div>
    </div>
    @include('customer/footer')
</div>
@stop
@section('script')
    @parent
    <script>
        var show_age_certified_modal = function() {
            $('.alert-message').css('display', 'block');
        };
        var hide_age_certified_modal = function() {
            $('.alert-message').css('display', 'none');
        };
    </script>
@stop