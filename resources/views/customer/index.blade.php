@extends('layouts.master')
@section('title', ' paters(ペイターズ) 公式 Web サイト ')
@section('content')
    @include('layouts/__navbar')
    @include('layouts/__about')
    @include('layouts/__our-brands')
    @include('layouts/__features')
    @include('layouts/__safety')
    @include('layouts/__contact')
    @include('layouts/__footer')
@stop
@section('script')
    @parent
    <script src="{!! asset('assets/js/costomer-index.js') !!}"></script>
@stop