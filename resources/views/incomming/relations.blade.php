@extends('layouts.master')
@section('title', 'Peach Garden')
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
        </section>
        <section class="page-body">
            <div class="page-empty-inner">
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
            </div>
        </section>
    </section>
    @include('customer/footer')
</div>
@stop