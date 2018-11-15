@extends('layouts.master')
@section('title', 'Sweet Honeys')
@section('style')
    @parent
    <link href="{!! asset('assets/css/contact.css') !!}" rel="stylesheet">
    <style>
        #all-wh .b-img {
            position: fixed;
            background-position-x: 60%;
            background-position-y: 100%;
            background-size: cover;
            background-image: url({{ url('assets/image/man.jpg') }} );
        }
    </style>
@stop
@section('content')
    <div id="all-wh">
        <ul class="colms">
            <div class="b-img">
                
            </div>
            <li class="colm img-side">
            </li>
            <li class="colm body-side">
                <div class="form-ctnr">
                    <h1 class="header">
                        <img class="logo-img" src="{!! asset('assets/image/logo.png') !!}" alt="Sweet Honeys" />
                    </h1>
                    <p class="sub-header">内容の確認</p>
                    <p class="sub-txt">以下の内容で送信します。よろしいですか？</p>
                    <div class="line"></div>
                    <form class="contact-form" method="POST" action="{!! route('contact-confirm') !!}" accept-charset="UTF-8">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        
                        <p class="p-ctnr">
                            <p class="ov-title">お名前</p>
                            <p class="output-val">123456</p>
                        </p>
                        <p class="p-ctnr">
                            <p class="ov-title">フリガナ</p>
                            <p class="output-val">123456</p>
                        </p>
                        <p class="p-ctnr">
                            <p class="ov-title">会社名</p>
                            <p class="output-val">123456</p>
                        </p>
                        <p class="p-ctnr">
                            <p class="ov-title">メールアドレス</p>
                            <p class="output-val">123456@gmail.com</p>
                        </p>
                        <p class="p-ctnr">
                            <p class="ov-title">電話番号</p>
                            <p class="output-val">123456</p>
                        </p>
                        <p class="p-ctnr">
                            <p class="ov-title">お問合わせの種類</p>
                            <p class="output-val">Sweet Honeys でのトラブルについて</p>
                        </p>
                        <p class="p-ctnr">
                            <p class="ov-title">お問合わせの内容</p>
                            <p class="output-val">123456</p>
                        </p>
                        <p class="button-wrapper">
                            <input id="btn-back" name="back_to_new" value="内容を修正する" class="button back" data-disable-with="内容を修正する" />
                            <input type="submit" name="commit" value="内容の確認へ" class="submit-button" data-disable-with="内容の確認へ" />
                        </p>
                    </form>
                </div>
            </li>
        </ul>
    </div>
@stop
@section('script')
    @parent
    <script>
        $(document).ready(function() {
            $('#btn-back').click(function (e) {
                e.preventDefault();
                window.history.back();
            });
        });
    </script>
@stop