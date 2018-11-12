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
        .brands-wrap {
            background: url(assets/image/background_paters.png) no-repeat;
            background-size: cover;
            height: 480px;
            padding: 130px 0 130px;
            margin-top: 40px;
            margin-bottom: 30px;
            border-bottom: 1px solid #d8d8d8;
            color: #fff;
        }
        .brands-wrap-inner {
            width: 90vw;
            max-width: 1244px;
            margin: 0 auto;
        }
        .numbers {
            background: none;
            text-align: center;
            padding: 0;
        }
        .numbers li {
            float: left;
            width: 33.3333%;
            list-style-type: none;
            margin-bottom: 40px;
        }
        .number {
            font-size: 51px;
            letter-spacing: -1px;
            font-weight: lighter;
        }
        .section-heading-border-white {
            text-align: center;
            left: 40%;
            width: 90px;
            border-bottom: 1px solid #ffffff;
            margin: 7px auto;
        }
        .label {
            font-size: 23px;
            font-weight: lighter;
        }
        @media (max-width: 480px){
            .brands-wrap{
                height: 680px;
            }
            .brands-wrap .brands-wrap-inner .numbers li {
                display: block;
                float: none;
                width: 100%;
            }
        }
    </style>
@stop
    <!-- START FEATURES -->
    <section class="section" id="features">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-12">
                    <h2 class="font-300">Peach Gardenの特長</h2>
                    <p class="text-muted mt-4 title-subtitle mx-auto">
                        Peach Gardenは、今までのマッチングアプリとは大きく違う様々な特長があります。普通のアプリではないものを、ここで体験することができます。
                    </p>
                </div>
            </div> 
        </div>
        <div class="brands-wrap">
            <div class="brands-wrap-inner">
                <ul class="numbers clear-fix">
                    <li class="users">
                        <h4 class="number">2,700,000+</h4>
                        <div class="section-heading-border-white"></div>
                        <p class="label">累計マッチング数</p>
                    </li>
                    <li class="matching">
                        <h4 class="number">20,000,000+</h4>
                        <div class="section-heading-border-white"></div>
                        <p class="label">累計メッセージ数</p>
                    </li>
                    <li class="messages">
                        <h4 class="number">80%+</h4>
                        <div class="section-heading-border-white"></div>
                        <p class="label">女性会員における 会員18~24歳の割合</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- END FEATURES -->
