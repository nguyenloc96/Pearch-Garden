@extends('layouts.master')
@section('title', 'Sweet Honeys')
@section('content')
<div class="wrap-container">
    @include('homepages/header')
    <section class="page page-like">
        <section class="page-head page-head-like">
            <div class="page-head-sort">
                <ul class="flex">
                    <li class="current"><span>お相手から</span></li>
                    <li><a href="/users/outcomming/relations">あなたから</a></li>
                </ul>
            </div>
            <!-- Not Empty Inner -->
            <div class="page-head-message">
                <p>
                    <span>1ヶ月の合計いいね数</span>
                    14いいね！
                </p>
            </div>
            <!-- end -->
        </section>
        <section class="page-body">
            <!-- Empty Inner -->
            <!-- <div class="page-empty-inner">
                <img class="page-empty-icon" src="/assets/image/empty_view_icon_3@3x.png" alt="">
                <p class="page-empty-title">
                    まだお相手からの<br>
                    いいね！はありません。
                </p>
                <p class="page-empty-text">
                    プロフィールをより充実させると<br>
                    いいね！がつきやすくなります。
                </p>
                <div class="page-empty-button">
                    <button class="button button-bg-green button-tc-white" type="button" onClick="javascript:location.href='/users/me/profile/edit';">
                        <span class="button-text">プロフィールを編集</span>
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
                                        <p class="like-thanks">
                                            <i class="icon icon-heart-from"></i>
                                            <a rel="nofollow" data-method="post" href="">
                                                <input type="button" value="いいね！ありがとう">
                                            </a>      
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
                    11/7(水)
                </p>
                <article class="article-user-like">
                    <div class="wrapper">
                        <ul class="like-lists">
                            <li class="like-list">
                                <div class="like-list-thumb">
                                    <a href="">
                                        <img src="/assets/image/square_32.jpeg" />
                                    </a>  
                                </div>
                                <div class="like-list-content">
                                    <i class="content-time">12:39</i>
                                    <div class="like-content-head">
                                        <p class="content-name">ななせ</p>
                                        <p class="content-age">21歳</p>
                                        <p class="content-place">大阪府</p>
                                    </div>
                                    <div class="like-content-mid">
                                        <p class="content-height col-glay">157cm</p>
                                        <p class="content-relationship">学生</p>
                                    </div>
                                    <div class="like-content-btn">
                                        <p class="like-thanks">
                                            <i class="icon icon-heart-from"></i>
                                            <a rel="nofollow" data-method="post" href="/users/outcomming/return-relation?target-unique-key=vdzrvmWbNifycKi1f1iElfcJd">
                                                <input type="button" value="いいね！ありがとう" onclick="">
                                            </a>      
                                        </p>
                                    </div>
                                </div>
                            </li>

                            <li class="like-list">
                                <div class="like-list-thumb">
                                    <a href="">
                                        <img src="/assets/image/square_c6.jpeg" />
                                    </a>  
                                </div>
                                <div class="like-list-content">
                                    <i class="content-time">11:39</i>
                                    <div class="like-content-head">
                                        <p class="content-name">さき</p>
                                        <p class="content-age">20歳</p>
                                        <p class="content-place">東京都</p>
                                    </div>
                                    <div class="like-content-mid">
                                    <p class="content-height col-glay">163cm</p>
                                    <p class="content-relationship">学生</p>
                                    </div>
                                    <div class="like-content-btn">
                                        <p class="like-thanks">
                                            <i class="icon icon-heart-from"></i>
                                            <a rel="nofollow" data-method="post" href="/users/outcomming/return-relation?target-unique-key=cK3oYc4tnC3FPyfgYsPVbjzL8">
                                                <input type="button" value="いいね！ありがとう" onclick="">
                                            </a>      
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