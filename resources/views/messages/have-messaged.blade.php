@extends('layouts.master')
@section('title', 'Sweet Honeys')
@section('content')
<div class="wrap-container">
    @include('homepages/header')
    <section class="page page-like page-message">
        <section class="page-head page-head-like">
            <div class="page-head-sort">
                <ul class="flex">
                    <li><a href="/users/messages/matching">マッチング中</a></li>
                    <li class="current"><span>やりとり中</span></li>
                </ul>
            </div>
        </section>
        <section class="page-body">
            <div class="page-empty-inner">
                <img class="page-empty-icon" src="/assets/image/empty_view_icon_5@3x.png" alt="">
                <p class="page-empty-title">
                    まだやり取りしている<br>
                    メッセージはありません。
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
    </section>
    @include('customer/footer')
</div>
@stop