@extends('layouts.master')
@section('title', 'Sweet Honeys')
@section('content')
<div class="wrap-container page-notices">
    <div class="header-tabs header-income-certification header-notices mt-2"> 
        <ul>  
            <li class="header-tabs-item header-tabs-item-with-arrow">
                <a class="header-tabs-back" href="/users/me"></a>
                <h3>お知らせ</h3>
            </li>
        </ul>
    </div>
    @include('customer/footer')
</div>
@stop 