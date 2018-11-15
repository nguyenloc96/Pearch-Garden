@extends('layouts.master')
@section('title', 'Sweet Honeys')
@section('content')
<div class="wrap-container">
    @include('homepages/header')
    <section class="page page-mypage page-mypage-under-review">
        <section class="page-head page-head-mypage">
            <div class="page-head-mypage-cover mypage-cover">
                <div class="mypage-cover-thumb mypage-cover-thumb-rejected">
                    <img src="/assets/image/me.JPG" alt="Me" />
                    <div class="rejected-mask"></div>
                    <div class="rejected-mask-bottom"></div>
                </div>
                <div class="mypage-cover-porfile">
                    <p class="mypage-cover-porfile-name"> {!! Auth::user()->name !!}</p>
                    <p class="mypage-cover-porfile-edit">
                        <a class="btn profile-edit-btn" href="/users/me/profile/edit">
                            プロフィールを編集
                        </a>
                    </p>
                    <p class="mypage-cover-porfile-config">
                        <a href="/users/configuration">
                            <i class="icon icon-config"></i>設定
                        </a>        
                    </p>
                </div>
            </div>

            <div class="page-head-mypage-info">
                <ul class="flex">
                    <li><strong>{!! Auth::user()->nice !!}</strong> 残りいいね </li>
                    <li><strong>{!! Auth::user()->point !!}</strong> 残りポイント </li>
                    <li>
                        <strong>
                            <a class="link-color" href="/users/age-certification/incomplete">年齢未確認</a>
                            <br>
                            <a class="link-color" href="/sweethoneys/pay">無料会員</a>
                        </strong>
                        会員ステータス
                    </li>
                </ul>
            </div>
        </section>
        <section class="page-body page-body-mypage">
            <nav class="page-body-mypage-nav">
                <ul class="flex">
                    <li>
                        <a href="/users/notices">
                            <i class="icon icon-news"><i class="has-mention"></i></i>お知らせ
                        </a>        
                    </li>
                    <li>
                        <a href="/users/points">
                            <i class="icon icon-exchenge-like"></i>いいね交換
                        </a>        
                    </li>
                    <li>
                        <a href="/sweethoneys/buy-points">
                            <i class="icon icon-buy-point"></i>ポイント購入
                        </a>        
                    </li>
                    <li>
                        <a href="/users/outcomming/favorites">
                            <i class="icon icon-favolite"></i>お気に入り
                        </a>        
                    </li>
                    <li>
                        <a href="/users/incomming/foot-prints">
                            <i class="icon icon-foot"><i class="has-mention"></i></i>足あと
                        </a>        
                    </li>
                    <li>
                        <a href="/sweethoneys/help">
                            <i class="icon icon-help"></i>ヘルプ
                        </a>        
                    </li>
                </ul>
            </nav>

            <div class="page-body-mypage-banner">
                <ul class="flex">
                    <li>
                        <a class="mypage-banners-link" href="#">
                            <img class="xs-ml-5 m-t-5" src="/assets/image/1-banner.png" alt="Banner" />
                        </a>        
                    </li>
                    <li>
                        <a class="mypage-banners-link" href="/sweethoneys/pay">
                            <img class="xs-ml-5 m-t-5" src="/assets/image/2-banner.png" alt="Pay" />
                        </a>          
                    </li>
                    <li>
                        <a class="mypage-banners-link" href="/users/income-certification">
                            <img class="xs-ml-5 m-t-5" src="/assets/image/3-banner.png" alt="Certification banner" />
                        </a>          
                    </li>
                </ul>
            </div>
        </section>
    </section>
    @include('customer/footer')
</div>
@stop