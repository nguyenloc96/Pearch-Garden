@section('style')
    @parent
    <style>
        .navbar-custom .navbar-nav li a {
            color: #fff !important;
            font-size: 14px;
            background-color: transparent !important;
            margin: 0 5px;
            letter-spacing: 0.03em;
            line-height: 24px;
            transition: all 0.5s;
        }
        .nav-link {
            display: block;
            padding: .5rem 1rem;
        }
        .navbar-custom.nav-sticky {
            background-color: #3C3F41 !important;
            padding: 5px 0px;
        }
        .navbar-custom .navbar-nav li a.active{
            color: #07d79c !important;
        }
        @media all and (max-width: 479px){
            .logo-img{
                margin-left: 10px;
            }
            .navbar-toggler{
                background-color: white;
                margin-right: 10px;
            }
            .nav-item{
                margin-left: 10px;
            }
            .navbar-custom {
                background-color: #3C3F41 !important;
                padding: 5px 0px;
            }
        }
    </style>
@stop

<nav class="navbar navbar-expand-lg fixed-top navbar-custom navbar-light sticky">
    <div class="container">
        <a class="navbar-brand" href="/sweethoneys">
            <img class="logo-img" src="{!! asset('assets/image/logo.png') !!}" alt="Sweet Honeys" />
            <!-- <img class="logo-img logo-black" src="{!! asset('assets/image/paters-logo-black.png') !!}" alt="Sweet Honeys" />
            <img class="logo-img logo-white d-none" src="{!! asset('assets/image/paters-logo-white.png') !!}" alt="Sweet Honeys" /> -->
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link font-weight-bold active" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-weight-bold" href="#brands">Our Brands</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-weight-bold" href="#features">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-weight-bold" href="#safety">Safety</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-weight-bold" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

@section('script')
    @parent
    <script>
        $('.nav-item').click(function () {
            $('.navbar-collapse').toggle();
        });
        $('.navbar-toggler-icon').click(function () {
            $('.navbar-collapse').toggle();
        });
    </script>
@stop