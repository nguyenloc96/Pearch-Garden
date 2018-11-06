@extends('layouts.master')
@section('title', 'paters - メッセージ非表示リスト')
@section('content')
<div class="wrap-container">
    <section class="page page-block">
        <div class="header-tabs">
            <ul>
                <li class="header-tabs-item header-tabs-item-with-arrow">
                    <a class="header-tabs-back" href="/users/configuration"></a>
                    <h3> メッセージ非表示リスト </h3>
                </li>
            </ul>
        </div>
        <section class="page is-no-header">
            <div class="page-empty-inner">
                <img class="page-empty-icon" src="/assets/image/empty_view_icon_12@3x.png" alt="Empty Icon">
                <p class="page-empty-title">
                    非表示にしている<br>
                    メッセージはありません。
                </p>
                <p class="page-empty-text">
                    非表示にしたメッセージの<br>
                    お相手の一覧がこちらに表示されます。
                </p>
            </div>
        </section>
    </section>
    @include('customer/footer')
</div>
@stop