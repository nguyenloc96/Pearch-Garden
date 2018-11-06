@extends('layouts.master')
@section('title', 'paters(ペイターズ)')
@section('content')
<div class="wrap-container">
    <section class="page page-setting page-mutter-template">
        <div class="header-tabs">
            <ul>
                <li class="header-tabs-item header-tabs-item-with-arrow">
                    <a class="header-tabs-back" href="/users/me/profile/edit"></a>
                    <h3> テンプレートから選択  </h3>
                    <!-- <a class="step-arrow step-arrow-right step-arrow-save" href="javascript:$('form').submit();">
                        <span class="step-text">保存</span>
                    </a> -->
                </li>
            </ul>
        </div>
        <div class="profile-mutter-template">
            <h2 class="profile-mutter-template-heading">気に入ったつぶやきはコピーして<br>そのまま使うことができます。</h2>
            <ul>
                <li class="profile-mutter-template-item">
                    <p class="profile-mutter-template-copy">気軽にメッセージください</p>
                    <a class="profile-mutter-template-button">この例文をコピー</a>
                </li>
                <li class="profile-mutter-template-item">
                    <p class="profile-mutter-template-copy">美味しいご飯食べにいきましょう！</p>
                    <a class="profile-mutter-template-button">この例文をコピー</a>
                </li>
                <li class="profile-mutter-template-item">
                    <p class="profile-mutter-template-copy">素敵な方にお会いできたら嬉しいです</p>
                    <a class="profile-mutter-template-button">この例文をコピー</a>
                </li>
                <li class="profile-mutter-template-item">
                    <p class="profile-mutter-template-copy">素敵な時間を過ごしましょう！</p>
                    <a class="profile-mutter-template-button">この例文をコピー</a>
                </li>
                <li class="profile-mutter-template-item">
                    <p class="profile-mutter-template-copy">はじめまして！よろしくお願いします</p>
                    <a class="profile-mutter-template-button">この例文をコピー</a>
                </li>
                <li class="profile-mutter-template-item">
                    <p class="profile-mutter-template-copy">美味しい料理とお酒が好きです</p>
                    <a class="profile-mutter-template-button">この例文をコピー</a>
                </li>
                <li class="profile-mutter-template-item">
                    <p class="profile-mutter-template-copy">楽しい時間を過ごしたいです！</p>
                    <a class="profile-mutter-template-button">この例文をコピー</a>
                </li>
                <li class="profile-mutter-template-item">
                    <p class="profile-mutter-template-copy">始めたばかりです、宜しくおねがいします。</p>
                    <a class="profile-mutter-template-button">この例文をコピー</a>
                </li>
                <li class="profile-mutter-template-item">
                    <p class="profile-mutter-template-copy">お酒を一緒に飲める子が嬉しいです。</p>
                    <a class="profile-mutter-template-button">この例文をコピー</a>
                </li>
                <li class="profile-mutter-template-item">
                    <p class="profile-mutter-template-copy">平日夜にお会いできる方を探しています</p>
                    <a class="profile-mutter-template-button">この例文をコピー</a>
                </li>
                <li class="profile-mutter-template-item">
                    <p class="profile-mutter-template-copy">土日夜にお会いできる方を探しています</p>
                    <a class="profile-mutter-template-button">この例文をコピー</a>
                </li>
            </ul>
        </div>
        <div class="profile-finish" onclick="$(this).fadeOut('slow')">
            <div class="profile-finish-inner">
                <img src="/assets/image/check.png" alt="" class="profile-finish-check">
                <p class="profile-finish-copy">コピー完了</p>
            </div>
        </div>
    </section>
    @include('customer/footer')
</div>
@stop
@section('script')
    @parent
    <script>
        $(document).ready(function () {
            $('.profile-mutter-template-button').click(function () {
                $('.profile-finish').toggle();
            });
        });
    </script>
@stop