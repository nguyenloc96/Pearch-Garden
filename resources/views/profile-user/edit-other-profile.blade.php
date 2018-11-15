@extends('layouts.master')
@section('title', 'Sweet Honeys')
@section('content')
<div class="wrap-container">
    <section class="page page-setting page-birthday-edit profile-other">
        <div class="header-tabs">
            <ul>
                <li class="header-tabs-item header-tabs-item-with-arrow">
                    <a class="header-tabs-back" href="/users/me/profile/edit"></a>
                    <h3> その他プロフィール </h3>
                </li>
            </ul>
        </div>
        <section class="input-section mt-sub10" data-toggle="modal" data-target="#prof-job">
            <h3>職業</h3>
            <div class="input-area">
                <p class="input-ttl">職種</p>
                <div class="input-box select-box">
                    <p class="status-txt">
                        {!! $data[0]->job == '' ? '...' : $data[0]->job !!}
                    </p>
                </div>
            </div>
        </section>
        <section class="input-section mt-sum10" data-toggle="modal" data-target="#prof-request-until-meet">
            <h3>出会うまでの希望</h3>
            <div class="input-area">
                <p class="input-ttl">出会うまでの希望</p>
                <div class="input-box select-box">
                    <p class="status-txt">
                        {!! $data[0]->request_until_meet == '' ? '...' : $data[0]->request_until_meet !!}
                    </p>
                </div>
            </div>
        </section>
        <section class="input-section mt-sum10">
            <h3>性格・プライベート</h3>
            <a href="/users/me/profile/select-personality">
                <div class="input-area mh-55">
                    <p class="input-ttl">性格・タイプ</p>
                    <div class="input-box select-box">
                        <p class="status-txt">
                            {!! $data[0]->personality == '' ? '...' : $data[0]->personality !!}
                        </p>
                    </div>
                </div>
            </a>  
            <a href="/users/me/profile/hobby/edit">
                <div class="input-area input-tag">
                    <p class="input-ttl">
                        趣味・好きなこと
                        @if ($data[0]->hobby != '')
                            <span class="juding-txt">審査中</span>
                        @endif
                    </p>
                    <div class="input-box select-box">
                        <p class="status-txt">
                            {!! $data[0]->hobby == '' ? '...' : $data[0]->hobby !!}
                        </p>
                    </div>
                </div>
            </a>
            <a href="/users/me/profile/good-place/edit">
                <div class="input-area input-tag">
                    <p class="input-ttl">
                        よく行く場所
                        @if ($data[0]->good_place != '')
                            <span class="juding-txt rejected">否認</span>
                        @endif
                    </p>
                    <div class="input-box select-box">
                        <p class="status-txt">
                            {!! $data[0]->good_place == '' ? '...' : $data[0]->good_place !!}
                        </p>
                    </div>
                </div>
            </a>
            <div class="input-area" data-toggle="modal" data-target="#prof-drinking-habit">
                <p class="input-ttl">お酒</p>
                <div class="input-box select-box">
                    <p class="status-txt">
                        {!! $data[0]->drinking_habit == '' ? '...' : $data[0]->drinking_habit !!}
                    </p>
                </div>
            </div>
            <div class="input-area" data-toggle="modal" data-target="#prof-smoking-habit">
                <p class="input-ttl">タバコ</p>
                <div class="input-box select-box">
                    <p class="status-txt">
                        {!! $data[0]->smoking_habit == '' ? '...' : $data[0]->smoking_habit !!}
                    </p>
                </div>
            </div>
            <div class="input-area"  data-toggle="modal" data-target="#prof-holiday">
                <p class="input-ttl">休日</p>
                <div class="input-box select-box">
                    <p class="status-txt">
                        {!! $data[0]->holiday == '' ? '...' : $data[0]->holiday !!}
                    </p>
                </div>
            </div>
        </section>
    </section>
    @include('customer/footer')

    <div class="modal fade" id="prof-job" tabindex="-1" role="dialog" aria-labelledby="id-modal-title" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="id-modal-title"> 居住地 </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">キャンセル</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="profile-menu-list">
                        <ul>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->job ==='経営者・役員'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-job/経営者・役員"
                                >経営者・役員</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->job ==='会社員'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-job/会社員"
                                >会社員</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->job ==='学生'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-job/学生"
                                >学生</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->job ==='IT関連'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-job/IT関連"
                                >IT関連</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->job ==='医師'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-job/医師"
                                >医師</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->job ==='大手企業'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-job/大手企業"
                                >大手企業</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->job ==='コンサル'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-job/コンサル"
                                >コンサル</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->job ==='美容関係'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-job/美容関係"
                                >美容関係</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->job ==='接客業'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-job/接客業"
                                >接客業</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->job ==='アパレル・ショップ'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-job/アパレル・ショップ"
                                >アパレル・ショップ</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->job ==='クリエイター'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-job/クリエイター"
                                >クリエイター</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->job ==='公務員'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-job/公務員"
                                >公務員</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->job ==='金融'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-job/金融"
                                >金融</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->job ==='事務員'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-job/事務員"
                                >事務員</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->job ==='看護師'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-job/看護師"
                                >看護師</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->job ==='福祉・介護'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-job/福祉・介護"
                                >福祉・介護</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->job ==='受付'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-job/受付"
                                >受付</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->job ==='保育士'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-job/保育士"
                                >保育士</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->job ==='不動産'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-job/不動産"
                                >不動産</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->job ==='広告'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-job/広告"
                                >広告</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->job ==='フリーター'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-job/フリーター"
                                >フリーター</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->job ==='エンターテインメント'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-job/エンターテインメント"
                                >エンターテインメント</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->job ==='WEB業界'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-job/WEB業界"
                                >WEB業界</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->job ==='外資金融'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-job/外資金融"
                                >外資金融</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->job ==='大手外資'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-job/大手外資"
                                >大手外資</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->job ==='上場企業'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-job/上場企業"
                                >上場企業</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->job ==='芸能・モデル'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-job/芸能・モデル"
                                >芸能・モデル</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->job ==='調理師・栄養士'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-job/調理師・栄養士"
                                >調理師・栄養士</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->job ==='教育関連'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-job/教育関連"
                                >教育関連</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->job ==='食品関連'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-job/食品関連"
                                >食品関連</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->job ==='大手商社'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-job/大手商社"
                                >大手商社</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->job ==='マスコミ'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-job/マスコミ"
                                >マスコミ</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->job ==='イベントコンパニオン'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-job/イベントコンパニオン"
                                >イベントコンパニオン</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->job ==='秘書'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-job/秘書"
                                >秘書</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->job ==='旅行関係'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-job/旅行関係"
                                >旅行関係</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->job ==='公認会計士'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-job/公認会計士"
                                >公認会計士</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->job ==='弁護士'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-job/弁護士"
                                >弁護士</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->job ==='製薬'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-job/製薬"
                                >製薬</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->job ==='ブライダル'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-job/ブライダル"
                                >ブライダル</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->job ==='保険'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-job/保険"
                                >保険</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->job ==='客室乗務員'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-job/客室乗務員"
                                >客室乗務員</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->job ==='非公開'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-job/非公開"
                                >非公開</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="prof-request-until-meet" tabindex="-1" role="dialog" aria-labelledby="id-modal-title" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="id-modal-title"> 出会うまでの希望 </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">キャンセル</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="profile-menu-list">
                        <ul>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->request_until_meet ==='マッチング後にまずは会いたい'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-request-until-meet/マッチング後にまずは会いたい"
                                >マッチング後にまずは会いたい</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->request_until_meet ==='気が合えば会いたい'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-request-until-meet/気が合えば会いたい"
                                >気が合えば会いたい</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->request_until_meet ==='条件が合えば会いたい'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-request-until-meet/条件が合えば会いたい"
                                >条件が合えば会いたい</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->request_until_meet ==='メッセージ交換を重ねてから会いたい'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-request-until-meet/メッセージ交換を重ねてから会いたい"
                                >メッセージ交換を重ねてから会いたい</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->request_until_meet ==='その他'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-request-until-meet/その他"
                                >その他</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="prof-drinking-habit" tabindex="-1" role="dialog" aria-labelledby="id-modal-title" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="id-modal-title"> お酒 </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">キャンセル</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="profile-menu-list">
                        <ul>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->drinking_habit ==='選択しない'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-drinking-habit/選択しない"
                                >選択しない</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->drinking_habit ==='飲まない'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-drinking-habit/飲まない"
                                >飲まない</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->drinking_habit ==='飲む'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-drinking-habit/飲む"
                                >飲む</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->drinking_habit ==='ときどき飲む'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-drinking-habit/ときどき飲む"
                                >ときどき飲む</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="prof-smoking-habit" tabindex="-1" role="dialog" aria-labelledby="id-modal-title" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="id-modal-title"> タバコ </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">キャンセル</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="profile-menu-list">
                        <ul>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->smoking_habit ==='選択しない'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-smoking-habit/選択しない"
                                >選択しない</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->smoking_habit ==='吸わない'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-smoking-habit/吸わない"
                                >吸わない</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->smoking_habit ==='吸う'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-smoking-habit/吸う"
                                >吸う</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->smoking_habit ==='ときどき吸う'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-smoking-habit/ときどき吸う"
                                >ときどき吸う</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->smoking_habit ==='非喫煙者の前では吸わない'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-smoking-habit/非喫煙者の前では吸わない"
                                >非喫煙者の前では吸わない</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->smoking_habit ==='相手が嫌ならやめる'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-smoking-habit/相手が嫌ならやめる"
                                >相手が嫌ならやめる</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="prof-holiday" tabindex="-1" role="dialog" aria-labelledby="id-modal-title" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="id-modal-title"> 休日 </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">キャンセル</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="profile-menu-list">
                        <ul>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->holiday ==='非公開'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-holiday/非公開"
                                >非公開</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->holiday ==='土日'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-holiday/土日"
                                >土日</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->holiday ==='平日'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-holiday/平日"
                                >平日</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->holiday ==='不定期'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-holiday/不定期"
                                >不定期</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="profile-finish {{!is_null(Session::get('success')) ? '' : 'd-none'}}" onclick="$(this).fadeOut('slow')">
        <div class="profile-finish-inner">
            <img src="/assets/image/check.png" alt="" class="profile-finish-check">
            <p class="profile-finish-copy">保存しました</p>
        </div>
    </div>
</div>
@stop