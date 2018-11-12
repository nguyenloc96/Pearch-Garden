@extends('layouts.master')
@section('title', 'Sweet Honeys')
@section('style')
    @parent
    <link href="{!! asset('assets/css/webpages.css') !!}" rel="stylesheet">
@stop
@section('content')
<div class="wrap-container">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div>
                    <img 
                        style="max-width: 100%;" 
                        src="/assets/image/privatemode.jpg"
                    >
                </div>
                <div class="m-15">
                    <a href="/sweethoneys/sign-in">
                        <img 
                            style="max-width: 100%;" 
                            src="/assets/image/privatemode_02.png"
                        >
                    </a>
                </div>
            </div>
        </div>
    </div>
    @include('customer.footer')
</div>
@stop