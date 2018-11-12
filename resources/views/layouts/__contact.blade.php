@section('style')
    @parent
    <style>
        .ml-auto, .mx-auto {
            margin-left: auto!important;
        }
        .font-300 {
            font-weight: 300;
        }
        .title-subtitle {
            max-width: 600px;
            font-size: 15px;
        }
        .text-muted {
            color: #868e96!important;
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
    </style>
@stop
<section class="section" id="contact">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-12">
                <h2 class="font-weight-light">Peach Gardenに関する お問い合わせ</h2>
                <p class="text-muted mt-4 title-subtitle mx-auto">Peach Gardenに関するお問い合わせは、下記のお問い合わせフォームのページより行っていただくことが可能です。</p>
            </div>
        </div> 
        <div class="row justify-content-center mt-5">
            <div class="col-lg-12">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <a class="btn btn-custom w-100" href="/webpages/contact" target="_blank">お問い合わせはこちら</a>              
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
