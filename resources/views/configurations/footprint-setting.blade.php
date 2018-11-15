@extends('layouts.master')
@section('title', 'Sweet Honeys - 足あと設定')
@section('content')
<div class="wrap-container">
    <section class="page page-setting page-setting-notice">
        <div class="header-tabs">
            <ul>
                <li class="header-tabs-item header-tabs-item-with-arrow">
                    <a class="header-tabs-back" href="/users/configuration"></a>
                    <h3>足あと設定</h3>
                </li>
            </ul>
        </div>
        <div class="find-wrap setting-notice setting-foot">
            <div class="setting-notice-sec setting-print-foot">
                <ul>
                    <li>
                        <p>足あとを残す</p>
                        <div class="switch">
                            <label class="switch-label">
                                <input type="checkbox" name="visitor_log" id="visitor_log" value="1" class="switch-input" checked="checked" />
                                <span class="switch-content"></span>
                                <span class="switch-circle"></span>
                            </label>
                        </div>
                    </li>
                </ul>
                <p class="setting-notice-sec-small">「足あとを残す」をオフにすることで、お相手のプロフィールを確認した際に、足あとを残さなくなります。</p>
            </div>
        </div>
    </section>
    @include('customer/footer')
</div>
@stop