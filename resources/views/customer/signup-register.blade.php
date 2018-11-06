@extends('layouts.master')
@section('title', 'paters(ペイターズ)')
@section('style')
    @parent
    <link href="{!! asset('assets/css/sign-up.css') !!}" rel="stylesheet">
    @stop
@section('content')
<div class="wrap-container">
    <section class="page page-setting page-setting-tel-sms">
        <div class="step step-left">
            <div class="step-inner">
                <h1 class="step-heading">
                    <span class="step-heading-text"> 電話番号認証 </span>
                </h1>
            </div>
        </div>
        <div class="page-content">
            <form class="form form-setting-tel-sms" method="POST" action="{{ route('register') }}" accept-charset="UTF-8">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-inner">
                    <label class="form-group-label">
                        電話番号宛に届いた<br>
                        認証コードを入力
                    </label>
                    <div class="page-signup-body-input">
                        <div class="form-group form-group-default">
                            <input 
                                placeholder="認証コード(6桁の数字)" 
                                required="required" class="form-group-tag form-group-tag-tel-sms" 
                                autocomplete="off" type="text" name="user_verification_code" 
                                id="user-sms-verification-code" 
                            />
                        </div>
                        {!! $errors->first('user_verification_code', '<span class="error-text">:message</span>') !!}
                        <div class="submit form-footer form-footer-tel-sms" id="btn-submit-verification">
                            <input type="submit" name="commit" value="認証する" disabled="disabled" class="button-text button button-bg-green button-tc-white button-setting" data-disable-with="認証する" />
                        </div>
                    </div>
                    <h2> お困りですか？ </h2>
                    <a data-toggle="modal" data-target="#send_code" class="text text-block text-fz13 text-tc-silver" href="">認証コードを再送信する</a>
                    <a class="text text-block text-fz13 text-tc-silver" href="#">電話番号が異なる場合</a>
                    <a class="text text-block text-fz13 text-tc-silver" data-toggle="modal" data-target="#call_code" href="">電話で認証コードを受け取る場合はこちら</a>
                </div>
                <!-- 再送信確認モーダル -->
                <div id="send_code" tabindex="-1" role="dialog" class="modal" display="none" onclick="$(this).modal('hide');">
                    <div class="alert-message">
                        <div class="alert-message-inner">
                            <p class="alert-message-copy alert-message-copy-first">認証コード再送信</p>
                            <p class="alert-message-copy">認証コードを再送信しますか？</p>
                            <form class="alert-message-btngroup" action="" method="post">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <input type="hidden" name="unconfirmed_mobile_phone" id="unconfirmed-mobile-phone" value="958325178" />
                                <button type="submit" class="alert-message-button-green"> 再送信 </button>
                                <button class="alert-message-button" data-dismiss="modal"> キャンセル </button>
                            </form>      
                        </div>
                    </div>
                </div>
                <div class="modal" tabindex="-1" id="call_code" role="dialog" display="none" onclick="$(this).modal('hide');">
                    <div class="alert-message-inner text-center " style="padding: 22px 20px 22px;">
                        <p class="alert-message-copy alert-message-copy-first">コール確認</p>
                        <p class="alert-message-copy">登録された電話番号 「{!! Session::get('tel') !!}」<br>に発信いたします。<br>よろしいですか？</p>
                        <div class="list list-modal-button">
                            <ul class="list-inner">
                                <li class="list-item">
                                    <button class="button button-bg-transparent button-bc-gray button-tc-black button-modal" type="button">
                                        <span class="button-text" data-dismiss="modal">キャンセル</span>
                                    </button>
                                </li>
                                <li class="list-item">
                                    <form autocomplete="off" action="" accept-charset="UTF-8" method="post">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        
                                        <button class="button button-bg-green button-tc-white button-modal" type="submit">
                                            <span class="button-text">発信する</span>
                                        </button>
                                    </form>          
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    @include('customer/footer')
</div>
@stop
@section('script')
    @parent
    <script>
        $(document).ready(function() {
            var updateButtonActive = function () {
            if ($('input[name="user_verification_code"]').val().length > 0) {
                $('#btn-submit-verification input[type=submit]').addClass('active').removeAttr('disabled');
            } else {
                $('#btn-submit-verification input[type=submit]').removeClass('active').attr('disabled', 'disabled');
            }
            };

            $('input[name="user_verification_code"]').keyup(function () {
                updateButtonActive();
            });

            updateButtonActive();
        });
    </script>
@stop