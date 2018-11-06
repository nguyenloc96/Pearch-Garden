@extends('layouts.master')
@section('title', 'paters(ペイターズ)')
@section('content')
<div class="wrap-container">
    @include('homepages/header')
    @include('homepages/article')
    @include('customer/footer')
</div>
@stop
