@extends('layouts.master')
@section('title', 'Sweet Honeys')
@section('content')
<div class="wrap-container">
    <section class="page page-setting page-setting-list">
        <div class="header-tabs">
            <ul>
                <li class="header-tabs-item header-tabs-item-with-arrow">
                    <a class="header-tabs-back" href="/users/me"></a>
                    <h3>設定</h3>
                </li>
            </ul>
        </div>
        <div class="page-content">
            <div class="form-inner">
                <div class="page-setting-lists">
                    <h3>アカウント設定</h3>
                    <ul>
                        <li>
                            <a href="/users/configuration/update-email">メールアドレスの変更</a>
                        </li>
                        <li>
                            <a href="/users/configuration/update-tel">電話番号の変更</a>
                        </li>
                        <li>
                            <a href="/users/configuration/update-password">パスワードの変更</a>
                        </li>
                        <li>
                            <a href="/users/configuration/notify-setting">通知設定</a>
                        </li>
                        <li>
                            <a href="/users/outcomming/blocks">ブロックリスト</a>
                        </li>
                        <li>
                            <a href="/users/configuration/undisplay-message-list">メッセージ非表示リスト</a>
                        </li>
                        <li>
                            <a href="/users/configuration/message-template">メッセージテンプレート設定</a>
                        </li>
                    </ul>
                </div>
                <div class="page-setting-lists">
                    <h3>お支払い情報</h3>
                    <ul>
                        <li>
                            <a href="/purchase/input-creditcard">クレジットカード登録情報変更</a>
                        </li>
                        <li>
                            <a href="/users/configuration/creditcard-subscription">定期課金設定</a>
                        </li>
                    </ul>
                </div>
                <div class="page-setting-lists">
                    <h3>プライバシー設定</h3>
                    <ul>
                        <li>
                            <a href="/users/configuration/footprint-setting">足あと設定</a>
                        </li>
                        <li>
                            <a href="/sweethoneys/privatemode">プライベートモード設定</a>
                        </li>
                    </ul>
                </div>
                <div class="page-setting-lists">
                    <h3>招待</h3>
                    <ul>
                        <li>
                            <a href="/users/invitation/new">友達を招待</a>
                        </li>
                        <li>
                            <a href="/users/invitation/new-status">招待コード入力</a>
                        </li>
                    </ul>
                </div>
                <div class="page-setting-lists">
                    <h3>サポート</h3>
                    <ul>
                        <li>
                            <a href="/sweethoneys/point-history">Sweet Honeys ポイントの履歴</a>
                        </li>
                        <li>
                            <a href="/sweethoneys/help">よくある質問</a>
                        </li>
                        <li>
                            <a href="/sweethoneys/support">安心してご利用いただくために</a>
                        </li>
                        <li>
                            <a href="/sweethoneys/contact-auth">お問い合わせ</a>
                        </li>
                    </ul>
                </div>
                <div class="page-setting-lists">
                    <h3> その他 </h3>
                    <ul>
                        <li>
                            <a href="/sweethoneys/company">運営会社</a>
                        </li>
                        <li>
                            <a href="/sweethoneys/terms">利用規約</a>
                        </li>
                        <li>
                            <a href="/sweethoneys/privacy">プライバシーポリシー</a>
                        </li>
                        <li>
                            <a href="/sweethoneys/specific">特定商取引法に基づく表示</a>
                        </li>
                        <li>
                            <a href="/sweethoneys/settlement">資金決済法に基づく表示</a>
                        </li>
                        <li class="current">
                            <a href="/users/sign-out"> Sweet Honeys からログアウトする </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="profile-finish {{!is_null(Session::get('success')) ? '' : 'd-none'}}" onclick="$(this).fadeOut()">
        <div class="profile-finish-inner">
            <img src="/assets/image/check.png" alt="" class="profile-finish-check">
            <p class="profile-finish-copy">保存しました</p>
        </div>
    </div>
</div>
@stop