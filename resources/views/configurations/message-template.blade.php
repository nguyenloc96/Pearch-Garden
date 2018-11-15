@extends('layouts.master')
@section('title', 'Sweet Honeys - メッセージテンプレート')
@section('content')
<div class="wrap-container">
    <section class="page page-setting page-setting-fiend-invite">
        <div class="header-tabs">
            <ul>
                <li class="header-tabs-item header-tabs-item-with-arrow">
                    <a class="header-tabs-back" href="/users/configuration"></a>
                    <h3> メッセージテンプレート </h3>
                    <a class="step-arrow step-arrow-right step-arrow-save" href="javascript:$('form').submit();">
                        <span class="step-text">保存</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="page-content">
            <div class="form-inner template-area">
                <div class="desc find-wrap">
                    <p class="txt-ttl">自動挿入設定</p>
                    <p class="txt-contet">
                        1通目のメッセージ送信時に保存したメッセージが自動で挿入されます。
                    </p>
                    <div class="switch-area">
                        <p class="txt-ttl">テンプレート自動挿入</p>
                        <div class="switch">
                            <label class="switch-label">
                            <input type="checkbox" name="" id="" value="" class="switch-input" checked="checked" />
                            <span class="switch-content"></span>
                            <span class="switch-circle"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="template-input-area mt20">
                    <form class="section" method="POST" action="{!! route('message.template') !!}" accept-charset="UTF-8">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <p class="txt-ttl">メッセージテンプレート</p>
                        <textarea class="default-message-textarea" placeholder="自動挿入したい内容を入力してください。" name="user_default_message" id="user-default-message"></textarea>
                        {!! $errors->first('user_default_message', '<span class="error-text">:message</span>') !!}
                        <p class="txt-count">あと250文字</p>
                    </form>      
                </div>
            </div>
        </div>
    </section>
    @include('customer/footer')
</div>
@stop