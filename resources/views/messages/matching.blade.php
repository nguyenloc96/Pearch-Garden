@extends('layouts.master')
@section('title', 'Peach Garden')
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
                    0人のお相手がメッセージを待っています。<br>
                    早速メッセージを送りましょう。
                </p>
            </div>
        </section>

        <div class="page-empty-inner">
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
        </div>
    </section>
    @include('customer/footer')
</div>
@stop