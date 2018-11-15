@extends('layouts.master')
@section('title', 'Sweet Honeys')
@section('content')
<div class="wrap-container">
    @include('homepages/header')
    <section class="page page-like">
        <section class="page-head page-head-like">
            <div class="page-head-sort">
                <ul class="flex">
                    <li><a href="/users/incomming/relations">お相手から</a></li>
                    <li class="current"><span>あなたから</span></li>
                </ul>
            </div>
        </section>
        <section class="page-body">
            <!-- Empty Inner -->
            <!-- <div class="page-empty-inner">
                <img class="page-empty-icon" src="/assets/image/empty_view_icon_3@3x.png" alt="">
                <p class="page-empty-title">
                    まだ誰にもいいね！を<br>
                    していません。
                </p>
                <p class="page-empty-text">
                    たくさんの魅力的なお相手が<br>
                    あなたからのいいね！を待っています。
                </p>
                <div class="page-empty-button">
                    <button class="button button-bg-green button-tc-white" type="button" onClick="javascript:location.href='/users';">
                        <span class="button-text">お相手を検索してみる</span>
                    </button>
                </div>
            </div> -->
            <!-- Not Empty Inner -->
            <section class="page-body-sec">
                <p class="page-body-title">
                    11/5(月)
                </p>
                <article class="article-user-like">
                    <div class="wrapper">
                        <ul class="like-lists">
                            <li class="like-list">
                                <div class="like-list-thumb">
                                    <a href="">
                                        <img src="/assets/image/square_e2.jpeg"/>
                                    </a>  
                                </div>
                                <div class="like-list-content">
                                    <i class="content-time">13:26</i>
                                    <div class="like-content-head">
                                        <p class="content-name">♡♡</p>
                                        <p class="content-age">24歳</p>
                                        <p class="content-place">東京都</p>
                                    </div>
                                    <div class="like-content-mid">
                                        <p class="content-height col-glay">157cm</p>
                                        <p class="content-relationship">非公開</p>
                                    </div>
                                    <div class="like-content-btn">
                                        <p class="like-already">
                                            <i class="icon icon-heart-to"></i>
                                            いいね！済み
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </article>
            </section>
            <section class="page-body-sec">
                <p class="page-body-title">
                    10/17(水)
                </p>
                <article class="article-user-like">
                    <div class="wrapper">
                        <ul class="like-lists">
                            <li class="like-list">
                                <div class="like-list-thumb">
                                    <a href="">
                                        <img src="/assets/image/square_92.jpeg" />
                                    </a>  
                                </div>
                                <div class="like-list-content">
                                    <i class="content-time">15:52</i>
                                    <div class="like-content-head">
                                        <p class="content-name">🐑💟</p>
                                        <p class="content-age">21歳</p>
                                        <p class="content-place">東京都</p>
                                    </div>
                                    <div class="like-content-mid">
                                        <p class="content-height col-glay">164cm</p>
                                        <p class="content-relationship">非公開</p>
                                    </div>
                                    <div class="like-content-btn">
                                        <p class="like-already">
                                            <i class="icon icon-heart-to"></i>
                                            いいね！済み
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </article>
            </section>
        </section>
    </section>
    @include('customer/footer')
</div>
@stop