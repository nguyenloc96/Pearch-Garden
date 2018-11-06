@extends('layouts.master')
@section('title', 'paters - 通知設定')
@section('content')
<div class="wrap-container">
    <section class="page page-setting page-setting-notice">
        <div class="header-tabs">
            <ul>
                <li class="header-tabs-item header-tabs-item-with-arrow">
                    <a class="header-tabs-back" href="/users/configuration"></a>
                    <h3> 通知設定 </h3>
                </li>
            </ul>
        </div>
        <div class="find-wrap setting-notice">
            <div class="setting-notice-sec">
                <h3> メールの配信設定 </h3>
                <ul>
                    <li>
                        <p>いいね！をもらった時</p>
                        <div class="switch">
                        <label class="switch-label">
                            <input type="checkbox" name="relation_mail_notify" id="swt1" value="1" class="switch-input" checked="checked" />
                            <span class="switch-content"></span>
                            <span class="switch-circle"></span>
                        </label>
                        </div>
                    </li>
                    <li>
                        <p>マッチングした時</p>
                        <div class="switch">
                        <label class="switch-label">
                            <input type="checkbox" name="match_mail_notify" id="swt2" value="1" class="switch-input" checked="checked" />
                            <span class="switch-content"></span>
                            <span class="switch-circle"></span>
                        </label>
                        </div>
                    </li>
                    <li>
                        <p>メッセージをもらった時</p>
                        <div class="switch">
                        <label class="switch-label">
                            <input type="checkbox" name="match_message_mail_notify" id="swt3" value="1" class="switch-input" checked="checked" />
                            <span class="switch-content"></span>
                            <span class="switch-circle"></span>
                        </label>
                        </div>
                    </li>
                    <li>
                        <p>足あとがついた時</p>
                        <div class="switch">
                        <label class="switch-label">
                            <input type="checkbox" name="visitor_mail_notify" id="swt4" value="1" class="switch-input" checked="checked" />
                            <span class="switch-content"></span>
                            <span class="switch-circle"></span>
                        </label>
                        </div>
                    </li>
                    <li>
                        <p>その他のお知らせ</p>
                        <div class="switch">
                        <label class="switch-label">
                            <input type="checkbox" name="notification_mail_notify" id="swt5" value="1" class="switch-input" checked="checked" />
                            <span class="switch-content"></span>
                            <span class="switch-circle"></span>
                        </label>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    @include('customer/footer')
</div>
@stop