@extends('layouts.master')
@section('title', 'Sweet Honeys - ブロックリスト')
@section('content')
<div class="wrap-container">
    <section class="page page-block">
        <div class="header-tabs">
            <ul>
                <li class="header-tabs-item header-tabs-item-with-arrow">
                    <a class="header-tabs-back" href="/users/configuration"></a>
                    <h3> ブロックリスト </h3>
                </li>
            </ul>
        </div>
        <section class="page is-no-header">
            <div class="page-empty-inner">
                <img class="page-empty-icon" src="/assets/image/empty_view_icon_11@3x.png" alt="Empty Icon">
                <p class="page-empty-title">
                    ブロックしている<br>
                    お相手はいません。
                </p>
                <p class="page-empty-text">
                    ブロックをしたお相手の一覧が<br>
                    こちらに表示されます。
                </p>
            </div>
        </section>
    </section>
    @include('customer/footer')
</div>
@stop