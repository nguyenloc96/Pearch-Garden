@extends('layouts.master')
@section('title', 'Sweet Honeys')
@section('style')
    @parent
    <link href="{!! asset('assets/css/sign-up.css') !!}" rel="stylesheet">
@stop
@section('content')
<div class="wrap-container">
    <section class="page page-signup page-signup-flow">
        <div class="page-signup-inner">
            <section class="page-head page-signup-head">
                <div class="page-signup-head-title">
                    <p>ログインパスワードを<br>再設定する。</p>
                </div>
            </section>
            <section class="page-body page-signup-body">
                <div class="page-signup-body-input">
                    <form method="POST" action="{!! route('forgot-password') !!}" class="new-user-create-temp" id="new-user-create-temp" enctype= "multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <input class="form-control" id="mail" placeholder="メールアドレスまたは電話番号を入力" type="email" name="user_email" />
                        
                        @if(Session::has('error'))
                            <span class='error-text' role="alert">
                                {!! Session::get('error') !!}                  
                            </span>
                        @endif

                        <div class="submit">
                            <input type="submit" name="commit" value="再設定" disabled="disabled" data-disable-with="ログイン" />
                        </div>
                    </form> 
                </div>
            </section>
            <section class="page-ftr page-signup-ftr">
                <div class="page-signup-ftr-signup">
                    <p>
                        アカウントをお持ちでない場合<a href="/sign-up"> 登録はこちら </a>
                    </p>
                </div>
            </section>
        </div>
    </section>
    @include('customer/footer')
</div>
@stop
@section('script')
    @parent
    <script>
        $(document).ready(function() {
            var inputSelector = $('.page-signup input[type="password"], .page-signup input[type="email"]');
            inputSelector.keyup(function () {
                var flg = true;
                inputSelector = $('.page-signup input[type="password"], .page-signup input[type="email"]');
                inputSelector.each(function (e) {
                    if($(inputSelector[e]).val().length === 0) {
                        flg = false;
                    }
                });
                if(flg) {
                    $('.page-signup input[type=submit]').addClass('active').removeAttr('disabled');
                } else {
                    $('.page-signup input[type=submit]').removeClass('active').attr('disabled', 'disabled');
                }
            })
        });
    </script>
@endsection