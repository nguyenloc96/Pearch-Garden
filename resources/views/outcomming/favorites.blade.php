@extends('layouts.master')
@section('title', 'Sweet Honeys - お気に入り')
@section('content')
<div class="wrap-container page-notices">
    <div class="header-tabs header-income-certification header-notices mt-2"> 
        <ul>  
            <li class="header-tabs-item header-tabs-item-with-arrow">
                <a class="header-tabs-back" href="/users/me"></a>
                <h3>お気に入り</h3>
            </li>
        </ul>
    </div>
    <div class="mypage-favorite">
        <section class="page is-no-header">
            <div class="page-empty-inner">
                <img class="page-empty-icon" src="/assets/image/empty_view_icon_10@3x.png" alt="">
                <p class="page-empty-title">
                    お気に入りに登録して<br>
                    いるお相手がいません。
                </p>
                <p class="page-empty-text">
                    お相手のプロフィールよりお気に入りに<br>
                    登録するとこちらに表示されます。
                </p>
            </div>
        </section>
    </div>
    @include('customer/footer')
</div>
@stop 