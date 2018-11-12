<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <link rel="icon" href="{!! asset('assets/image/favicon.ico') !!}" type="image/x-icon">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Sweet Honeys">
        @section('style')
        <!-- Theme style -->
        <link href="{!! asset('assets/bootstrap-jquery/css/bootstrap.min.css') !!}" rel="stylesheet">
        <link href="{!! asset('assets/font-awesome/css/font-awesome.min.css') !!}" rel="stylesheet">
        <link href="{!! asset('assets/css/main.css') !!}" rel="stylesheet">
        @show
    </head>

    <body class="hold-transition skin-blue sidebar-mini">  
        <div class="wrapper">
            <div class="content-wrapper" id="page-content">
                @yield('content')   
            </div>
        </div>

        @section('script')
            <script>
                var _token = '{!! csrf_token() !!}';
            </script>
            <script src="{!! asset('assets/bootstrap-jquery/js/jquery-3.3.1.min.js') !!}"></script>
            <script src="{!! asset('assets/bootstrap-jquery/js/bootstrap.min.js') !!}"></script>
            <script src="{!! asset('assets/js/main.js') !!}"></script>
        @show
    </body>
</html>