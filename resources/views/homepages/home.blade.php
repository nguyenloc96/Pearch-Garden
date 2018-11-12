@extends('layouts.master')
@section('title', 'Peach Garden')
@section('content')
<div class="wrap-container">
    @include('homepages/header')
    @include('homepages/article')
    @include('customer/footer')
</div>
@stop
