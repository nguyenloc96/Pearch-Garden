@extends('layouts.master')
@section('title', 'paters - 足あと')
@section('content')
<div class="wrap-container page-notices">
    <div class="header-tabs header-income-certification header-notices mt-2"> 
        <ul>  
            <li class="header-tabs-item header-tabs-item-with-arrow">
                <a class="header-tabs-back" href="/users/me"></a>
                <h3>足あと</h3>
            </li>
        </ul>
    </div>
    <div class="foot-prints mypage-favorite page-profile-nice">
        <p class="day-ttl">11/1(水)</p>
        <div class="over-border"></div>
        <ul>
            <li>
                <div class="nice-img">
                    <img src="/assets/image/female.png" alt="Female2" />
                </div>
                <div class="partner-info nice-info">
                    <p class="age-prefecture-txt">
                        <span class="nice-name">ふう</span>
                            22歳 非公開
                        <span class="nice-time">14:47</span>
                    </p>
                    <p class="height-profession-txt">
                        154cm 非公開
                    </p>
                    <div id="good-btn-wrapper-user_id">
                        <div class="nice-from-to-btn">
                            <a 
                                format="json" 
                                data-remote="true" 
                                rel="nofollow" 
                                data-method="post" href="/users/outcomming/async-relation/user_id"
                            >
                                <i class="icon-heart-inverted"></i>
                                <span>いいね！</span>
                            </a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="foot-prints mypage-favorite page-profile-nice">
        <p class="day-ttl">10/31(水)</p>
        <div class="over-border"></div>
        <ul>
            <li>
                <div class="nice-img">
                    <img src="/assets/image/base64.jpeg" alt="base64" />
                </div>
                <div class="partner-info nice-info">
                    <p class="age-prefecture-txt">
                        <span class="nice-name">もも</span>
                            19歳 東京都
                        <span class="nice-time">07:14</span>
                    </p>
                    <p class="height-profession-txt">
                        154cm 非公開
                    </p>
                    <div id="good-btn-wrapper-user_id">
                        <div class="nice-from-to-btn">
                            <a 
                                rel="nofollow" 
                                data-method="post" 
                                href="/users/outcomming/return-relation/user_id"
                            >
                                <i class="icon-heart-wh"></i>
                                <span>いいね！ありがとう</span>
                            </a>
                        </div>
                    </div>
                </div>
            </li>   
        </ul>
    </div>
    <div class="foot-prints mypage-favorite page-profile-nice">
        <p class="day-ttl"> 10/18(木) </p>
        <div class="over-border"></div>
        <ul>
            <li>
                <div class="nice-img">
                    <img src="/assets/image/1-base64.jpeg" alt="1 base64" />
                </div>
                <div class="partner-info nice-info">
                    <p class="age-prefecture-txt">
                        <span class="nice-name">🐑💟</span>
                            21歳 東京都
                        <span class="nice-time">14:58</span>
                    </p>
                    <p class="height-profession-txt">
                        164cm 非公開
                    </p>
                    <div id="good-btn-wrapper-user_id">
                        <div class="nice-from-to-btn already-nice">
                            <a>
                                <i class="icon-heart-gl"></i>
                                <span>いいね！済み</span>
                            </a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="foot-prints mypage-favorite page-profile-nice">
        <p class="day-ttl"> 10/29(月) </p>
        <div class="over-border"></div>
        <ul>
            <li>
                <div class="nice-img">
                    <img src="/assets/image/2-base64.jpeg" alt="1 base64" />
                </div>
                <div class="partner-info nice-info">
                    <p class="age-prefecture-txt">
                        <span class="nice-name">もも</span>
                            19歳 東京都
                        <span class="nice-time">13:33</span>
                    </p>
                    <p class="height-profession-txt">
                        154cm 非公開
                    </p>
                    <div id="good-btn-wrapper-user_id">
                        <div class="nice-from-to-btn">
                            <a href="/users/messages/matching">
                                <i class="icon-mail-wh"></i>
                                <span>いいね！済み</span>
                            </a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    @include('customer/footer')
</div>
@stop 