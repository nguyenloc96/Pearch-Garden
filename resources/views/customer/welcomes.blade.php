@extends('layouts.master')
@section('title', 'Sweet Honeys')
@section('style')
    @parent
    <link href="{!! asset('assets/css/sign-up.css') !!}" rel="stylesheet">
@stop
@section('content')
<div class="wrap-container">
    <section class="page page-welcome">
        <div class="page-signup-inner">
            <section class="page-head page-signup-head">
                <div class="page-signup-head-logo">
                    <img class="logo-img" src="{!! asset('assets/image/logo.png') !!}" alt="Sweet Honeys" />
                </div>
            </section>
            <section class="page-body page-signup-body">
                <div class="page-signup-body-btns">
                    <p class="txt-head">簡単無料登録ではじめよう。</p>
                    <ul>
                        <li>
                            <a href="/sweethoneys/sign-up">
                                <i class="icon icon-tel"></i>電話番号で登録する
                            </a>    
                        </li>
                        <span>または</span>
                        <li>
                            <a href="/redirect/facebook">
                                <i class="icon icon-facebook"></i>facebookで登録する
                            </a>          
                        </li>
                        <span class="error-text d-none">Facebook認証に失敗しました。</span>
                    </ul>
                    <p class="txt-ftr">
                        Sweet Honeys が許可なくFacebookに投稿したり、友だちの<br>
                        フィードに Sweet Honeys を利用していることは表示されません。
                    </p>
                </div>
            </section>
            <section class="page-footer page-signup-footer">
                <div class="page-signup-footer-login">
                    <p class="txt-head">
                        登録すると同時に私は Sweet Honeys の利用規約と<br>
                        <a href="/sweethoneys/privacy">プライバシーポリシー</a>に同意します。
                    </p>
                    <p class="txt-btn">アカウントをお持ちの場合は、こちらから<a href="/sweethoneys/sign-in">ログイン</a></p>
                </div>
            </section>
        </div>
    </section>
    @include('customer/footer')
</div>
@stop 