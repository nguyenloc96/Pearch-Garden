@extends('layouts.master')
@section('title', 'Sweet Honeys')
@section('content')
<div class="wrap-container">
    <section class="page page-setting-card">
        <div class="header-tabs">
            <ul>
                <li class="header-tabs-item header-tabs-item-with-arrow">
                    <a class="header-tabs-back" href="/sweethoneys/buy-points"></a>
                    <h3>クレジットカード決済</h3>
                </li>
            </ul>
        </div>
        <div class="am-content">
            <div class="main-content">
                <div class="card-wrapper"></div>
                <div class="col-xs-12 form-container active" id="payment-form" >
                    <div style="margin: 15px 0;">
                        <h1> クレジットカード決済完了しました。</h1>
                    </div>
                    <div class="form-footer">
                        <button class="button button-bg-green button-setting" onclick="window.location.href='/users'">
                            <span class="button-text">TOP</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('customer/footer')
</div>
@stop