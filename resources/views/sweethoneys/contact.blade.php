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
                    <p class="sub-header">お問い合わせ</p>
                    <p class="sub-txt"><span class="en-st">Sweet Honeys</span>への各種お問い合わせは<br>こちらより承っています。</p>
                    <p class="sb-note">※の項目は必須項目です。</p>
                    <div class="line"></div>
                    <div class="error-wrp sub-txt">
                    </div>
                    <form class="contact-form" method="POST" action="{!! route('contact') !!}" accept-charset="UTF-8">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <p class="p-ctnr">
                            <input autocomplete="name" class="name" placeholder="*お名前" type="text" name="contact_name" id="contact-name" value="{{ old('contact_name') }}"/>
                            {!! $errors->first('contact_name', '<span class="error-text ">:message</span>') !!}
                        </p>
                        <p class="p-ctnr">
                            <input class="name-char" placeholder="*フリガナ" type="text" name="contact_hurigana" id="contact-hurigana" value="{{ old('contact_hurigana') }}"/>
                            {!! $errors->first('contact_hurigana', '<span class="error-text ">:message</span>') !!}
                        </p>
                        <p class="p-ctnr">
                            <input autocomplete="organization" class="organization" placeholder="会社名" type="text" name="contact_company" id="contact-company" value="{{ old('contact_company') }}"/>
                            {!! $errors->first('contact_company', '<span class="error-text ">:message</span>') !!}
                        </p>
                        <p class="p-ctnr">
                            <input class="email" autocomplete="email" placeholder="*メールアドレス" type="email" name="contact_email" id="contact-email" value="{{ old('contact_email') }}"/>
                            {!! $errors->first('contact_email', '<span class="error-text ">:message</span>') !!}
                        </p>
                        <p class="p-ctnr">
                            <input class="phone-number" placeholder="*電話番号 (半角数字、ハイフン無し)" type="number" name="contact_phone" id="contact-phone" value="{{ old('contact_phone') }}"/>
                            {!! $errors->first('contact_phone', '<span class="error-text ">:message</span>') !!}
                        </p>
                        <p class="p-ctnr">
                            <select class="type" id="type" name="contact_category"><option value="">*お問い合わせの種類を入力してください</option>
                                <option value="Sweet Honeysへの取材依頼">Sweet Honeysへの取材依頼</option>
                                <option value="サービス内容について">サービス内容について</option>
                                <option value="Sweet Honeysでのトラブルについて">Sweet Honeysでのトラブルについて</option>
                                <option value="サービスへのログイン・購入について">サービスへのログイン・購入について</option>
                                <option value="その他ご意見・ご質問など">その他ご意見・ご質問など</option>
                            </select>
                            {!! $errors->first('contact_category', '<span class="error-text ">:message</span>') !!}
                        </p>
                        <p class="p-ctnr">
                            <textarea class="contact-msg" wrap="hard" placeholder="*お問い合わせ内容を入力してください" name="contact_body" id="contact-body" value="{{ old('contact_body') }}"></textarea>
                            {!! $errors->first('contact_body', '<span class="error-text ">:message</span>') !!}
                        </p>
                        <p class="agreement-title">ご記入いただいた個人情報はお問い合わせへの回答およびご連絡の目的においてのみ使用させていただきます。お問い合わせの際は
                            <a target="_blank" class="link" href="/sweethoneys/privacy">「個人情報の取り扱い」</a>をご覧いただきご同意の上で、下記にチェックをお願いいたします。
                        </p>
                        <div class="checkbox-area">
                            <label>
                            <input name="contact[agreement]" type="hidden" value="0" /><input class="checkbox" style="display: inline;" type="checkbox" value="1" name="contact[agreement]" id="contact_agreement" />
                            <span class="agreement">「個人情報の取り扱い」に同意する</span>
                            </label>
                        </div>
                        <p class="button-wrapper">
                            <input type="submit" name="commit" value="内容の確認へ" class="submit-button" data-disable-with="内容の確認へ" />
                        </p>
                    </form>
                </div>
            </li>
        </ul>
    </div>
@stop