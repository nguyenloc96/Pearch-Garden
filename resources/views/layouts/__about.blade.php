@section('style')
    @parent
    <style>
        .ml-auto, .mx-auto {
            margin-left: auto!important;
        }
        .bg-home {
            background-image: url(assets/image/bg-home.jpg);
            background-size: cover;
            background-position: center center;
            position: relative;
            height: 100vh;
            padding-top: 150px !important;
        }
        .section {
            padding-bottom: 80px;
            padding-top: 100px;
            position: relative;
        }
        .bg-overlay {
            background-color: rgba(195, 197, 199, 0.3);
            position: absolute;
            height: 100%;
            width: 100%;
            top: 0;
            right: 0;
        }
        .home-title {
            font-size: 48px;
            line-height: 1.2;
        }
        .font-weight-normal {
            font-weight: 400!important;
        }
        .home-subtitle {
            max-width: 700px;
            line-height: 1.6;
            font-size: 15px;
            font-weight: 300;
            opacity: 0.8;
        }
        .banners {
            text-align: center;
            padding: 0;
        }
        .banner {
            cursor: pointer;
            display: inline-block;
            width: 10rem;
            padding-top: .7em;
            vertical-align: middle;
        }
        .apple img, .android img {
            height: 44px;
        }
        img {
            vertical-align: middle;
            border-style: none;
        }
        .pt-3, .py-3 {
            padding-top: 1rem!important;
        }
        .btn {
            padding: 12px 28px;
            font-size: 15px;
            transition: all 0.5s;
            letter-spacing: 0.6px;
            color: #fff;
            box-shadow: none !important;
            outline: none !important;
        }
        .btn-custom {
            border: 1px solid;
            background-color: #07d79c;
        }
        .btn-custom, .custom-form .form-control:focus, .social .social-icon:hover, .registration-input-box:focus {
            border-color: #07d79c;
        }
        .btn-custom:hover{
            color: #fff;
            background-color: #0cbd8b;
            border-color: #0cbd8b;
        }
        @media all and (max-width: 479px){
            #about h1.home-title{
                font-size: 28px;
            }
        }
    </style>
@stop
<!-- START HOME -->
<section class="section bg-home" id="about">
    <div class="bg-overlay"></div>
    <div class="home-center">
        <div class="home-desc-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center text-white">
                            <h1 class="home-title font-weight-normal mx-auto mt-4">ワンランク上の上質な出会いを</h1>
                            <p class="home-subtitle mx-auto pt-4">理想の出会いが見つかるマッチングアプリ</p>
                            <div class="pt-5">
                                <ul class="banners">
                                    <li class="banner apple">
                                        <a href="#">
                                            <img class="appstore-banner" src="/assets/image/app_store_banner.svg" alt="AppStoreからダウンロード">
                                        </a>
                                    </li>
                                    <li class="banner android">
                                        <a href="#">
                                            <img alt="Google Play で手に入れよう" src="/assets/image/google_play.png">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="pt-3">
                                <a href="/welcomes" target="_blank" class="btn btn-custom">Webで会員登録 <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END HOME -->
