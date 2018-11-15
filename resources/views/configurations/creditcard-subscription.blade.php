@extends('layouts.master')
@section('title', 'Sweet Honeys - 定期課金設定')
@section('content')
<div class="wrap-container">
    <section class="page page-setting-card">
        <div class="header-tabs">
            <ul>
                <li class="header-tabs-item header-tabs-item-with-arrow">
                    <a class="header-tabs-back" href="/users/configuration"></a>
                    <h3>定期課金設定</h3>
                    <!-- <a class="step-arrow step-arrow-right step-arrow-save" href="javascript:$('form').submit();">
                        <span class="step-text">保存</span>
                    </a> -->
                </li>
            </ul>
        </div>
        <div class="page-creditcard-sub">
            <h1>定期課金中の購入</h1>
            <span>定期課金中の購入情報はありません</span>
        </div>
            
    </section>
    @include('customer/footer')
</div>
@stop