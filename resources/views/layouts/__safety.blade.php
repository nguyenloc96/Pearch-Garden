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
        .timeline-page {
            padding: 10px 0;
            position: relative;
            margin-top: 35px;
        }
        .timeline-item {
            margin-bottom: 80px;
        }
        .timeline-page .timeline-item .works-description-right {
            text-align: left;
            margin-left: 15px;
            float: left;
            border-radius: 0;
            padding: 20px 0;
        }
        .timeline-page .timeline-item .works-description-left {
            text-align: right;
            margin-right: 15px;
            float: right;
            border-radius: 0;
            padding: 20px 0;
        }
        .timeline-page .timeline-item .date-label-left {
            text-align: center;
            margin-right: 20px;
            position: relative;
        }

        .timeline-page .timeline-item .duration-right {
            text-align: center;
            margin-left: 20px;
            position: relative;
        }
        .how-it {
            display: block;
            margin: 0 auto;
            max-width: 70%;
            width: 400px;
            height: 300px;
        }
        .img-fluid {
            max-width: 100%;
            height: auto;
        }
        img {
            vertical-align: middle;
            border-style: none;
        }
        *, ::after, ::before {
            box-sizing: border-box;
        }
        .bg-custom, .btn-custom, .timeline-page .timeline-item .date-label-left::after, .timeline-page .timeline-item .duration-right::after, .back-to-top:hover {
            background-color: #07d79c;
        }
        .bg-custom, .btn-custom, .timeline-page .timeline-item .date-label-left::after, .timeline-page .timeline-item .duration-right::after, .back-to-top:hover {
            background-color: #07d79c;
        }
        .timeline-page .timeline-item .date-label-left::after {
            right: -45px;
        }
        .timeline-page .timeline-item .duration-right::after {
            left: -45px;
        }
        .timeline-page .timeline-item .date-label-left::after, .timeline-page .timeline-item .duration-right::after {
            border: 3px solid rgba(255, 255, 255, 0.8);
            border-radius: 50%;
            content: "";
            height: 20px;
            position: absolute;
            top: 20px;
            width: 20px;
            z-index: 1;
        }
        .timeline-page::after {
            content: "";
            height: 95%;
            left: 0;
            margin: auto;
            position: absolute;
            right: 0;
            top: 0;
            width: 1px;
            background-color: #e8e8e8;
        }
        ::after, ::before {
            box-sizing: border-box;
        }
        .offset-2 {
            margin-left: 16.666667%;
        }
        .client-images img {
            max-height: 90px;
            width: auto !important;
            margin: 10px auto;
            opacity: 0.9;
            transition: all 0.5s;
        }
        .timeline-item-big {
            display: block;
        }
        .timeline-item-small {
            display: none;
        }
        @media all and (max-width: 479px){
            .timeline-item-small {
                display: block !important;
            }
            .timeline-item-big {
                display: none !important;
            }
            .timeline-page::after {
                margin: 0px 0px;
            }
            .timeline-page .timeline-item .date-label-left,.timeline-page .timeline-item .duration-right {
                margin-right: 10px;
                margin-left: 10px;
            }
            .timeline-page .timeline-item .date-label-left::after, .timeline-page .timeline-item .duration-right::after{
                display: none;
            }
            .offset-2 {
                margin-left: 0;
            }
            .col-lg-4{
                width: 50%;
                float: left;
            }
        }
    </style>
@stop
<section class="section" id="safety">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-12">
                <h2 class="font-300">安心・安全の取り組み</h2>
                <p class="text-muted mt-4 title-subtitle mx-auto">Peach Garden(ペイターズ)では、すべての会員の皆様が心から安心してアプリを利用いただくために、様々な取り組みを行っております。これらの取り組みは日々アップデートされており、ここに紹介されているのはその一部にしか過ぎません。</p>
            </div>
        </div>
        <div class="timeline-page mt-5">
            <div class="timeline-item">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="duration date-label-left">
                            <img src="/assets/image/how-it-1.jpeg" alt="" class="img-fluid how-it">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="works works-description-right">
                            <h4>24時間 365 日の監視体制</h4>
                            <p class="timeline-subtitle">Peach Gardenでは、ユーザー様のすべての投稿（プロフィール画像、自己紹介文等）について、投稿時に事前審査を行い、不適切な書き込みがないことを24時間365日の監視体制で確認し、トラブルになることを未然に防ぎます。</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="timeline-item timeline-item-big">
                <div class="row">
                    <div class="col-lg-6 col-lg-pull-6">
                        <div class="works works-description-left">
                            <h4>インターネット異性紹介事業届出及び受理済み</h4>
                            <p class="timeline-subtitle">Peach Gardenでは、法令遵守を第一とした上で法令に基づき「インターネット異性紹介事業」の届出を東京都公安委員会に行っており、受理されております（受理番号：3017-0048-000）。各都道府県の警察および行政機関とも連携を図っており、トラブルが起きたときでも迅速に対応できる体制を整えております。</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-lg-push-6">
                        <div class="duration duration-right ">
                            <img src="/assets/image/how-it-2.jpeg" alt="" class="img-fluid how-it">
                        </div>
                    </div>
                </div>
            </div>
            <div class="timeline-item timeline-item-small">
                <div class="row">
                    <div class="col-lg-6 col-lg-pull-6">
                        <div class="duration date-label-left">
                            <img src="/assets/image/how-it-2.jpeg" alt="" class="img-fluid how-it">
                        </div>
                    </div>
                    <div class="col-lg-6 col-lg-push-6">
                        <div class="works works-description-right">
                            <h4>インターネット異性紹介事業届出及び受理済み</h4>
                            <p class="timeline-subtitle">Peach Gardenでは、法令遵守を第一とした上で法令に基づき「インターネット異性紹介事業」の届出を東京都公安委員会に行っており、受理されております（受理番号：3017-0048-000）。各都道府県の警察および行政機関とも連携を図っており、トラブルが起きたときでも迅速に対応できる体制を整えております。</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="timeline-item">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="duration date-label-left">
                            <img src="/assets/image/how-it-3.jpeg" alt="" class="img-fluid how-it">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="works works-description-right">
                            <h4>最高レベルの厳重なセキュリティ</h4>
                            <p class="timeline-subtitle">Peach Gardenでは、個人情報保護方針の策定をはじめ、アプリ内におけるすべてのデータ通信において最高峰レベルのセキュリティ「EV SSL」を採用する等、セキュリティの強化を日々努め、安全性の向上を行っております。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END HOW IT WORKS -->
<!-- START CLIENTS -->
<section class="section bg-light" id="media">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-12">
                <h2 class="font-300">メディア取材実績</h2>
                <p class="text-muted mt-4 title-subtitle mx-auto">Peach Gardenでは、そのアプリの特長から様々なメディアからの取材実績が豊富です。</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-4 col-sm-6 offset-2">
                <div class="client-images">
                    <img src="/assets/image/media.png" alt="logo-img" class="mx-auto img-fluid d-block">
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="client-images">
                    <img src="/assets/image/media_3.jpg" alt="logo-img" class="mx-auto img-fluid d-block">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END CLIENTS -->

