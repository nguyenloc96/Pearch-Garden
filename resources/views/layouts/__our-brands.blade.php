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
        .rounded {
            border-radius: .25rem!important;
        }
        .img-fluid {
            max-width: 100%;
            height: auto;
        }
        .blog-desc {
            font-size: 13px;
            line-height: 22px;
            letter-spacing: 0.4px;
        }
        .text-muted {
            color: #868e96!important;
        }
        h6 {
            margin-bottom: .5rem;
            font-size: 1rem;
            font-family: inherit;
            font-weight: 500;
            line-height: 1.2;
            color: inherit;
        }
    </style>
@stop
<section class="section bg-light" id="brands">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-12">
                <h2 class="font-300">Peach Gardenとは？</h2>
                <p class="text-muted mt-4 title-subtitle mx-auto">
                    Peach Gardenは、素敵な男女の上質な出会いを創り出せるSNSアプリです。あなたにとっての理想のお相手が見つかることを願っています。
                </p>
            </div>
        </div> 
    </div>
    <div class="features" style="margin: 30px;">
        <div class="row mt-5">
            <div class="col-lg-4">
                <div class="blog-post mt-3">
                    <div>
                        <img src="{{ asset('assets/image/step_1.jpeg') }}" alt="" class="img-fluid mx-auto d-block rounded">
                    </div>
                    <div class="blog-post-detail mt-4">
                        <div>
                            <h6>1. いいね！を送る</h6>
                            <p class="text-muted mt-3 blog-desc">気になるお相手に”いいね！”を送るだけ。お相手からも”いいね！”が返ってきたらマッチング。お互いにメッセージができるようになり、２人だけの関係がスタートします。</p>               
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog-post mt-3">      
                    <div>
                        <img src="{{ asset('assets/image/step_2.jpeg') }}" alt="" class="img-fluid mx-auto d-block rounded">
                    </div> 
                    <div class="blog-post-detail mt-4">
                        <div>
                            <h6>2. メッセージで深める</h6>
                            <p class="text-muted mt-3 blog-desc">メッセージ機能でお相手とお互いについて知ってより関係を深めましょう。お互い盛り上がってきたらまずはデートの約束をしましょう。</p>
                        </div>
                    </div>                      
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog-post mt-3">     
                    <div>
                        <img src="{{ asset('assets/image/step_3.jpeg') }}" alt="" class="img-fluid mx-auto d-block rounded">
                    </div> 
                    <div class="blog-post-detail mt-4">
                        <div>
                            <h6>3. 2人だけの時間を。</h6>
                            <p class="text-muted mt-3 blog-desc">いよいよお相手とのデートの時間です。あとは２人次第。非日常的な体験をして、お互いを高め会える上質な出会いでありますように。</p>
                        </div>
                    </div>                          
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END BRANDS -->
