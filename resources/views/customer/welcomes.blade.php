@extends('layouts.master')
@section('title', 'Peach Garden')
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
                    <img src="/assets/image/logos@3x.png" alt="Paters">
                </div>
            </section>
            <section class="page-body page-signup-body">
                <div class="page-signup-body-btns">
                    <p class="txt-head">簡単無料登録ではじめよう。</p>
                    <ul>
                        <li>
                            <a href="/sign-up">
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
                        patersが許可なくFacebookに投稿したり、友だちの<br>
                        フィードにpatersを利用していることは表示されません。
                    </p>
                </div>
            </section>
            <section class="page-footer page-signup-footer">
                <div class="page-signup-footer-login">
                    <p class="txt-head">
                        登録すると同時に私はpatersの利用規約と<br>
                        <a href="/webpages/privacy-policy">プライバシーポリシー</a>に同意します。
                    </p>
                    <p class="txt-btn">アカウントをお持ちの場合は、こちらから<a href="/sign-in">ログイン</a></p>
                </div>
            </section>
        </div>
    </section>
    @include('customer/footer')
</div>
@stop 