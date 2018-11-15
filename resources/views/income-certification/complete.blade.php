@extends('layouts.master')
@section('title', 'Sweet Honeys - 所得証明')
@section('content')
<div class="wrap-container">
    <div class="header-tabs header-income-certification mt-2"> 
        <ul>  
            <li class="header-tabs-item header-tabs-item-with-arrow">
                <a class="header-tabs-back" href="/users/me"></a>
                <h3>所得証明</h3>
            </li>
        </ul>
    </div>
    <section class="page page-empty is-no-header">
        <div class="page-empty-inner mt-5">
            <img class="page-empty-icon" src="/assets/image/empty_view_icon_10@3x.png" alt="Empty icon">
            <p class="page-empty-title">
                現在アップロードされた<br>
                書類を確認中です。
            </p>
            <p class="page-empty-text">
                確認が完了するまで<br>
                もうしばらくお待ち下さい。
            </p>
        </div>
    </section>
    @include('customer/footer')
</div>
@stop   