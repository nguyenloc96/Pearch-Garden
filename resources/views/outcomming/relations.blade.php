@extends('layouts.master')
@section('title', 'Peach Garden')
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
            <div class="page-empty-inner">
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
            </div>
        </section>
    </section>
    @include('customer/footer')
</div>
@stop