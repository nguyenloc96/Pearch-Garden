@extends('layouts.master')
@section('title', 'Peach Garden')
@section('style')
    @parent
    <link href="{!! asset('assets/css/sign-up.css') !!}" rel="stylesheet">
    <style>
        .page-signup-flow .flow-bar-list:nth-child(1), .page-signup-flow .flow-bar-list:nth-child(2) {
            background: #72c7a1;
        }
        .input-box.input-box-clm {
            position: relative;
        }
        .page-signup-body-input .input-box {
            margin-bottom: 20px;
        }
        .page-signup-body-input .fa {
            display: inline-block;
            vertical-align: middle;
            margin-right: 6px;
        }
        .icon-email {
            width: 24px;
            height: 17px;
            background: url(/assets/image/mail_gl@3x.png) 0 0/cover no-repeat;
            display: inline-block;
            vertical-align: middle;
            margin-right: 7px;
        }
        .icon-password {
            width: 24px;
            height: 30px;
            background: url(/assets/image/key@3x.png) 0 0/contain no-repeat;
            display: inline-block;
            vertical-align: middle;
            margin-right: 7px;
        }
        .fa {
            font-style: normal;
        }
        .page-signup-body-input input[type=password], .page-signup-body-input input[type=email] {
            width: 100%;
            padding: 16px 14px;
            border: 1px solid #e0e0e0;
            background: #f4f4f4;
            display: block;
            margin-bottom: 10px;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            -ms-border-radius: 3px;
            border-radius: 3px;
        }
        .error-text {
            display: block;
            font-size: 11px;
            font-size: .6875rem;
            color: #f36;
        }
        .input-box.input-box-clm input:focus, select:focus{
            border: 1px solid #72c7a1 !important;
        }
        input.has-error{
            border: 1px solid #f36 !important;
        }
    </style>
@stop
@section('content')
<div class="wrap-container">
    <section class="page page-signup page-signup-flow">
        <div class="navbar-top">
            <a class="navbar-brand" href="/">
                <img src="/assets/image/logo.png" alt="Peach Garden">
            </a>
        </div>
        <ol class="flow-bar flex">
            <li class="flow-bar-list"></li>
            <li class="flow-bar-list"></li>
            <li class="flow-bar-list"></li>
            <li class="flow-bar-list"></li>
        </ol>
        <div class="page-signup-inner">
            <section class="page-head page-signup-head">
                <div class="page-signup-head-title">
                    <p>あともうひといき。<br> ログイン情報を入力。</p>
                </div>
            </section>
            <section class="page-body page-signup-body">
                <div class="page-signup-body-input">
                    <form method="POST" action="{!! route('sign-up-step-3', $id) !!}" class="new-user-create-temp" id="new-user-create-temp" enctype= "multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="input-box input-box-clm input-box-focus">
                            <i class="fa icon-email"></i>
                            <input placeholder="メールアドレス(任意)" 
                                autocomplete="off" 
                                type="email" name="user_create_temp_email" 
                                id="user-create-temp-email" 
                                value="{{ old('user_create_temp_email') }}"
                                class="{!! $errors->has('user_create_temp_email') ? 'has-error' : '' !!}"
                            />
                            {!! $errors->first('user_create_temp_email', '<span class="error-text">メールアドレスはすでに存在します</span>') !!}                        
                        </div>
                        <div class="input-box input-box-clm">
                            <i class="fa icon-password"></i>
                            <input placeholder="パスワード(8文字以上)" autocomplete="off" type="password" name="user_create_temp_password" id="user-create-temp-password" value="{{ old('user_create_temp_password') }}"/>
                        </div>
                        <span class="error-text d-none">メールアドレスはすでに存在します</span>
                        <div class="back back-next">
                            <input id="back" type="submit" value="戻る" >
                        </div>
                        <div class="submit submit-next">
                            <input type="submit" name="commit" value="次へ" disabled="disabled" data-disable-with="次へ" />
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </section>
    @include('customer/footer')
</div>
@endsection
@section('script')
    @parent
    <script>
        $('#back').click(function (e) {
            e.preventDefault();
            window.history.back();
        });
        var updateButtonActive = function() {
            if ($('input[name="user_create_temp_password"]').val().length >= 8) {
                $('.page-signup-body-input .submit input[type=submit]').addClass('active').removeAttr('disabled');
            } else {
                $('.page-signup-body-input .submit input[type=submit]').removeClass('active').attr('disabled', 'disabled');
            }
        };

        $('input[name="user_create_temp_password"]').keyup(function() {
            updateButtonActive();
        });

        updateButtonActive();
    </script>
@endsection