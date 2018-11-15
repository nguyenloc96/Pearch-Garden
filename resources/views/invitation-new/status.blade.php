@extends('layouts.master')
@section('title', 'Sweet Honeys - 招待コード入力')
@section('content')
<div class="wrap-container">
    <section class="page page-setting page-setting-tel-sms">
        <div class="header-tabs">
            <ul>
                <li class="header-tabs-item header-tabs-item-with-arrow">
                    <a class="header-tabs-back" href="/users/configuration"></a>
                    <h3>招待コード入力</h3>
                </li>
            </ul>
        </div>
        <div class="page-content">
            <form method="POST" action="{!! route('users.invitation') !!}" class="form form-setting-code-invision">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-inner">
                    <label class="form-group-label">
                        <strong>招待コードをお持ちの場合</strong>
                        Sweet Honeys のご優待カードまたは招待コードをお持ちの方はこちらからご入力ください。
                    </label>
                    <ul class="form-group-inviosn flex">
                        <li>
                            <figure>
                                <img class="form-group-inviosn-img" src="/assets/image/card@3x.png" alt="Card@3x" />
                                <figcaption>ご優待カード</figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img class="form-group-inviosn-img" src="/assets/image/invitation@3x.png" alt="Invitation@3x" />
                                <figcaption>招待コード</figcaption>
                            </figure>
                        </li>
                    </ul>
                    <div class="form-group form-group-default">
                        <input placeholder="ここに招待コードをご入力ください" id="invitation-input-code" class="form-group-tag form-group-tag-tel-sms" autocomplete="off" type="text" name="invitation_invite_code" />
                        {!! $errors->first('invitation_invite_code', '<span class="error-text">:message</span>') !!}
                    </div>
                    <div class="form-footer form-footer-tel-block">
                        <button name="button" type="submit" id="invitation-submit" class="button button-bg-green button-tc-white button-setting">
                            <span class="button-text">送信</span>
                        </button>            
                        <p>
                            ※ご優待カードは、運営が発行した特別なカードです。招待コードは、既に Sweet Honeys をご利用のご友人があなたを招待した際に入手が可能です。
                        </p>
                    </div>
                </div>
            </form>
        </div>
    </section>
    @include('customer/footer')
</div>
@stop