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
        .body-side .link-to {
            display: block;
            width: 12rem;
            background-color: #fff;
            border-radius: 6px;
            border: .5px solid rgba(200,200,200,1);
            color: #515151;
            cursor: pointer;
            font-size: 1em;
            font-weight: 700;
            transition: .5s;
            margin: 2rem auto;
            padding-top: 18px;
            padding-bottom: 18px;
        }
        .body-side .link-to {
            text-align: center;
            font-family: serif;
            font-style: normal;
        }
        a.link-to:hover{
            background: #000;
            color: #fff;
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
                    <p class="sub-header">送信完了</p>
                    <div class="line"></div>
                    <p class="msg">
                        お問い合わせを送信しました。内容を確認後、担当者より迅速にご連絡いたします。
                    </p>
                    <a class="link-to" href="/sweethoneys">TOPへ戻る</a>
                </div>
            </li>
        </ul>
    </div>
@stop