@extends('layouts.master')
@section('title', 'Sweet Honeys')
@section('content')
<div class="wrap-container">
    @include('homepages/header')
    @include('homepages/article')
    @include('customer/footer')
</div>
@stop
