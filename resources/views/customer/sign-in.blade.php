@extends('layouts.master')
@section('title', 'Peach Garden')
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
                    <p>ログイン情報<br>入力してください。</p>
                </div>
            </section>
            <section class="page-body page-signup-body">
                @if(Session::has('error'))
                    <div class='alert alert-danger' role="alert">
                        {!! Session::get('error') !!}                  
                    </div>
                @endif
                @if(Session::has('success'))
                    <div class='alert alert-success' role="alert">
                        {!! Session::get('success') !!}                  
                    </div>
                @endif
                <div class="page-signup-body-input">
                    <form method="POST" action="{!! route('sign-in') !!}" class="new-user-create-temp" id="new-user-create-temp" enctype= "multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        
                        <input class="form-control" id="mail" placeholder="メールアドレスまたは電話番号を入力" type="email" name="user_email" value="{{ old('user_email') }}"/>
                        <input class="form-control" id="password" placeholder="パスワードを入力" type="password" name="user_password" value="{{ old('user_password') }}"/>
                        <div class="submit">
                            <input type="submit" name="commit" value="ログイン" disabled="disabled" data-disable-with="ログイン" />
                            <span>
                                パスワードをお忘れの場合は<a href="/forgot-password"> こちら </a>
                            </span>
                        </div>
                    </form> 
                </div>
            </section>
            <section class="page-ftr page-signup-ftr">
                <div class="page-signup-ftr-signup">
                    <p>
                        アカウントをお持ちでない場合<a href="/sign-up"> 新規登録 </a>
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