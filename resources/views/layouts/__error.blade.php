@extends('layouts.master')
@section('title', '404 File Not Found')
@section('style')
    @parent
    <style>
        body{
            background: #3b79b7;
            line-height: 1.4;
            font-size: 75%;
            text-align: center;
            color: white;
        }
        #base h1 {
            font-weight: bold;
            line-height: 1;
            padding-bottom: 20px;
            font-family: Helvetica, sans-serif;
        }
        #base h2 {
            text-align: center;
            font-weight: bold;
            font-size: 27px;
        }
        #base h3 {
            letter-spacing: 1px;
            font-weight: bold;
            padding: 0;
        }
        .explain {
            border-top: 1px solid #fff;
            border-bottom: 1px solid #fff;
            line-height: 1.5;
            margin: 30px auto;
            padding: 17px;
        }
        #white-box {
            margin: 15px auto 0;
            background-color: white;
        }
        #cause ul {
            padding-left: 2em;
            margin-bottom: 0px;
        }
        #cause ul li{
            list-style-type: disc;
        }
        #cause li {
            color: #666;
        }
        #cause {
            text-align: left;
        }
        @media only screen and (min-width: 768px){
            #base {
                margin-top: 80px;
            }
            #base h1 {
                font-size: 50px;
            }
            #base h1 span {
                font-size: 110px;
            }
            h3 {
                font-size: 20px;
                margin-top: 80px;
            }
            .explain {
                font-size: 16px;
                width: 660px;
            }
            #white-box {
                width: 680px;
                margin-bottom: 50px;
            }
            #cause {
                padding: 30px;
                font-size: 14px;
            }
        }
    </style>
@stop
@section('content')
<div id="base">
    <h1>
        <span>404</span><br />
        File Not Found
    </h1>
    <h2>アクセスしようとしたページは見つかりませんでした。</h2>
    <p class="explain">このエラーは、指定したページが見つからなかったことを意味します。</p>
    <h3>以下のような原因が考えられます。</h3>
    <div id="white-box">
        <div id="cause">
            <ul>
                <li>アクセスしようとしたファイルが存在しない（ファイルの設置箇所を誤っている）。</li>
                <li>URLアドレスが間違っている。</li>
            </ul>
        </div>
    </div>
</div>
@stop