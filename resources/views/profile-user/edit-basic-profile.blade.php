@extends('layouts.master')
@section('title', 'paters(ペイターズ)')
@section('content')
<div class="wrap-container">
    <section class="page page-setting page-setting-comment-edit">
        <main class="profile-background">
            <div class="header-tabs">
                <ul>
                    <li class="header-tabs-item header-tabs-item-with-arrow">
                        <a class="header-tabs-back" href="/users/me/profile/edit"></a>
                        <h3> 基本プロフィール </h3>
                        <!-- <a class="step-arrow step-arrow-right step-arrow-save" href="javascript:$('form').submit();">
                            <span class="step-text">保存</span>
                        </a> -->
                    </li>
                </ul>
            </div>
            <main>
                <!-- start of profile basic list  -->
                <div class="profile-basic-list">
                    <ul>
                        <li class="profile-basic-list-item">
                            <span class="profile-basic-list-name">ニックネーム</span> 
                            <span class="profile-basic-list-value">{{ Auth::user()->name }}</span>
                            <a 
                                class="profile-basic-list-button" 
                                href="/users/me/profile/nickname/edit"
                            ></a>
                        </li>
                        <li class="profile-basic-list-item">
                            <span class="profile-basic-list-name">年齢</span> 
                            <span class="profile-basic-list-value age-birth">...</span>
                            <a 
                                class="profile-basic-list-button" 
                                href="/users/me/profile/birthday/edit"
                            ></a>
                        </li>
                        <li class="profile-basic-list-item">
                            <span class="profile-basic-list-name">居住地</span>
                            <span class="profile-basic-list-value">{{ Auth::user()->address }}</span>
                            <a 
                                class="profile-basic-list-button profile-basic-list-button-down" 
                                data-toggle="modal" data-target="#prof-address-id"
                            ></a>
                        </li>
                        <li class="profile-basic-list-item">
                            <span class="profile-basic-list-name">身長</span>
                            <span class="profile-basic-list-value">{!! $data[0]->height == '' ? '...' : $data[0]->height !!}</span>
                            <a 
                                class="profile-basic-list-button profile-basic-list-button-down" 
                                data-toggle="modal" data-target="#prof-height"
                            ></a>
                        </li>
                        <li class="profile-basic-list-item">
                            <span class="profile-basic-list-name">体型</span>
                            <span class="profile-basic-list-value">{!! $data[0]->body_type == '' ? '...' : $data[0]->body_type !!}</span>
                            <a 
                                class="profile-basic-list-button profile-basic-list-button-down" 
                                data-toggle="modal" data-target="#prof-body-type"
                            ></a>
                        </li>
                        <li class="profile-basic-list-item">
                            <span class="profile-basic-list-name">出身地</span>
                            <span class="profile-basic-list-value">{!! $data[0]->birth_origin == '' ? '...' :  $data[0]->birth_origin !!}</span>
                            <a 
                                class="profile-basic-list-button profile-basic-list-button-down" 
                                data-toggle="modal" data-target="#prof-birth-origin"
                            ></a>
                        </li>
                        <li class="profile-basic-list-item">
                            <span class="profile-basic-list-name">学歴</span>
                            <span class="profile-basic-list-value">{!! $data[0]->education == '' ? '...' : $data[0]->education !!}</span>
                            <a 
                                class="profile-basic-list-button profile-basic-list-button-down" 
                                data-toggle="modal" data-target="#prof-education"
                            ></a>
                        </li>
                        <li class="profile-basic-list-item">
                            <span class="profile-basic-list-name">年収</span>
                            <span class="profile-basic-list-value">{!! $data[0]->annual_salary == '' ? '...' : $data[0]->annual_salary !!}</span>
                            <a 
                                class="profile-basic-list-button profile-basic-list-button-down" 
                                data-toggle="modal" data-target="#prof-annual-salary"
                            ></a>
                        </li>
                        <li class="profile-basic-list-item">
                            <span class="profile-basic-list-name">子供の有無</span>
                            <span class="profile-basic-list-value">{!! $data[0]->have_children == '' ? '...' : $data[0]->have_children!!}</span>
                            <a 
                                class="profile-basic-list-button profile-basic-list-button-down" 
                                data-toggle="modal" data-target="#prof-have-children"
                            ></a>
                        </li>
                    </ul>
                </div>
            </main>
        </main>
    </section>
    @include('customer/footer')
    <div class="modal fade" id="prof-address-id" tabindex="-1" role="dialog" aria-labelledby="id-modal-title" aria-hidden="true">
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
                                    class="profile-menu-link {{ Auth::user()->address==='非公開'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-address/非公開"
                                >非公開</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ Auth::user()->address==='東京都'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-address/東京都"
                                >東京都</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ Auth::user()->address==='神奈川県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-address/神奈川県
                                ">神奈川県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ Auth::user()->address==='埼玉県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-address/埼玉県"
                                >埼玉県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ Auth::user()->address==='千葉県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-address/千葉県"
                                >千葉県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ Auth::user()->address==='大阪府'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-address/大阪府"
                                >大阪府</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ Auth::user()->address==='京都府'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-address/京都府"
                                >京都府</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ Auth::user()->address==='兵庫県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-address/兵庫県"
                                >兵庫県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ Auth::user()->address==='奈良県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-address/奈良県"
                                >奈良県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ Auth::user()->address==='愛知県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-address/愛知県"
                                >愛知県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ Auth::user()->address==='岐阜県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-address/岐阜県"
                                >岐阜県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ Auth::user()->address==='三重県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-address/三重県"
                                >三重県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ Auth::user()->address==='福岡県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-address/福岡県"
                                >福岡県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ Auth::user()->address==='北海道'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-address/北海道"
                                >北海道</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ Auth::user()->address==='青森県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-address/青森県"
                                >青森県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ Auth::user()->address==='岩手県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-address/岩手県"
                                >岩手県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ Auth::user()->address==='宮城県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-address/宮城県"
                                >宮城県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ Auth::user()->address==='秋田県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-address/秋田県"
                                >秋田県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ Auth::user()->address==='山形県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-address/山形県"
                                >山形県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ Auth::user()->address==='福島県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-address/福島県"
                                >福島県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ Auth::user()->address==='茨城県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-address/茨城県"
                                >茨城県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ Auth::user()->address==='栃木県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-address/栃木県"
                                >栃木県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ Auth::user()->address==='群馬県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-address/群馬県"
                                >群馬県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ Auth::user()->address==='新潟県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-address/新潟県"
                                >新潟県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ Auth::user()->address==='富山県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-address/富山県"
                                >富山県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ Auth::user()->address==='石川県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-address/石川県"
                                >石川県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ Auth::user()->address==='福井県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-address/福井県"
                                >福井県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ Auth::user()->address==='山梨県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-address/山梨県"
                                >山梨県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ Auth::user()->address==='長野県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-address/長野県"
                                >長野県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ Auth::user()->address==='静岡県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-address/静岡県"
                                >静岡県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ Auth::user()->address==='滋賀県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-address/滋賀県"
                                >滋賀県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ Auth::user()->address==='和歌山県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-address/和歌山県
                                ">和歌山県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ Auth::user()->address==='鳥取県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-address/鳥取県"
                                >鳥取県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ Auth::user()->address==='島根県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-address/島根県"
                                >島根県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ Auth::user()->address==='岡山県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-address/岡山県"
                                >岡山県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ Auth::user()->address==='広島県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-address/広島県"
                                >広島県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ Auth::user()->address==='山口県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-address/山口県"
                                >山口県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ Auth::user()->address==='徳島県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-address/徳島県"
                                >徳島県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ Auth::user()->address==='香川県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-address/香川県"
                                >香川県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ Auth::user()->address==='愛媛県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-address/愛媛県"
                                >愛媛県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ Auth::user()->address==='高知県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-address/高知県"
                                >高知県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ Auth::user()->address==='佐賀県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-address/佐賀県"
                                >佐賀県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ Auth::user()->address==='長崎県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-address/長崎県"
                                >長崎県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ Auth::user()->address==='熊本県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-address/熊本県"
                                >熊本県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ Auth::user()->address==='大分県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-address/大分県"
                                >大分県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ Auth::user()->address==='宮崎県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-address/宮崎県"
                                >宮崎県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ Auth::user()->address==='鹿児島県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-address/鹿児島県
                                ">鹿児島県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ Auth::user()->address==='沖縄県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-address/沖縄県"
                                >沖縄県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ Auth::user()->address==='海外'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-address/海外">
                                海外</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="prof-height" tabindex="-1" role="dialog" aria-labelledby="id-modal-title" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="id-modal-title"> 身長 </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">キャンセル</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="profile-menu-list">
                        <ul>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->height==='130cm'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-height/130cm"
                                >130cm</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->height==='131cm'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-height/131cm"
                                >131cm</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->height==='132cm'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-height/132cm"
                                >132cm</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->height==='133cm'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-height/133cm"
                                >133cm</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->height==='134cm'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-height/134cm"
                                >134cm</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->height==='135cm'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-height/135cm"
                                >135cm</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->height==='136cm'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-height/136cm"
                                >136cm</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->height==='137cm'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-height/137cm"
                                >137cm</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->height==='138cm'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-height/138cm"
                                >138cm</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->height==='139cm'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-height/139cm"
                                >139cm</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->height==='140cm'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-height/140cm"
                                >140cm</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->height==='141cm'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-height/141cm"
                                >141cm</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->height==='142cm'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-height/142cm"
                                >142cm</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->height==='143cm'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-height/143cm"
                                >143cm</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->height==='144cm'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-height/144cm"
                                >144cm</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->height==='145cm'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-height/145cm"
                                >145cm</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->height==='146cm'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-height/146cm"
                                >146cm</a>
                            </li><li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->height==='147cm'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-height/147cm"
                                >147cm</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->height==='148cm'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-height/148cm"
                                >148cm</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->height==='149cm'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-height/149cm"
                                >149cm</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->height==='150cm'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-height/150cm"
                                >150cm</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->height==='151cm'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-height/151cm"
                                >151cm</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->height==='152cm'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-height/152cm"
                                >152cm</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->height==='153cm'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-height/153cm"
                                >153cm</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->height==='154cm'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-height/154cm"
                                >154cm</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->height==='155cm'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-height/155cm"
                                >155cm</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->height==='156cm'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-height/156cm"
                                >156cm</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->height==='157cm'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-height/157cm"
                                >157cm</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->height==='158cm'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-height/158cm"
                                >158cm</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->height==='159cm'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-height/159cm"
                                >159cm</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->height==='160cm'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-height/160cm"
                                >160cm</a>
                            </li><li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->height==='161cm'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-height/161cm"
                                >161cm</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->height==='162cm'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-height/162cm"
                                >162cm</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->height==='163cm'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-height/163cm"
                                >163cm</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->height==='164cm'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-height/164cm"
                                >164cm</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->height==='165cm'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-height/165cm"
                                >165cm</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->height==='166cm'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-height/166cm"
                                >166cm</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->height==='167cm'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-height/167cm"
                                >167cm</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->height==='168cm'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-height/168cm"
                                >168cm</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->height==='169cm'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-height/169cm"
                                >169cm</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->height==='170cm'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-height/170cm"
                                >170cm</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->height==='171cm'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-height/171cm"
                                >171cm</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->height==='172cm'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-height/172cm"
                                >172cm</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->height==='173cm'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-height/173cm"
                                >173cm</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->height==='174cm'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-height/174cm"
                                >174cm</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->height==='175cm'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-height/175cm"
                                >175cm</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->height==='176cm'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-height/176cm"
                                >176cm</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->height==='177cm'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-height/177cm"
                                >177cm</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->height==='178cm'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-height/178cm"
                                >178cm</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->height==='179cm'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-height/179cm"
                                >179cm</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->height==='180cm'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-height/180cm"
                                >180cm</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->height==='181cm'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-height/181cm"
                                >181cm</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->height==='182cm'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-height/182cm"
                                >182cm</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->height==='183cm'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-height/183cm"
                                >183cm</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->height==='184cm'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-height/184cm"
                                >184cm</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->height==='185cm'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-height/185cm"
                                >185cm</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->height==='186cm'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-height/186cm"
                                >186cm</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->height==='187cm'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-height/187cm"
                                >187cm</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->height==='188cm'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-height/188cm"
                                >188cm</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->height==='189cm'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-height/189cm"
                                >189cm</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->height==='190cm'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-height/190cm"
                                >190cm</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->height==='191cm'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-height/191cm"
                                >191cm</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->height==='192cm'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-height/192cm"
                                >192cm</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->height==='193cm'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-height/193cm"
                                >193cm</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->height==='194cm'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-height/194cm"
                                >194cm</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->height==='195cm'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-height/195cm"
                                >195cm</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->height==='196cm'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-height/196cm"
                                >196cm</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->height==='197cm'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-height/197cm"
                                >197cm</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->height==='198cm'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-height/198cm"
                                >198cm</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->height==='199cm'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-height/199cm"
                                >199cm</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->height==='200cm'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-height/200cm"
                                >200cm</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="prof-body-type" tabindex="-1" role="dialog" aria-labelledby="id-modal-title" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="id-modal-title"> 体型 </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">キャンセル</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="profile-menu-list">
                        <ul>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->body_type==='非公開'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-body-type/非公開"
                                >非公開</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->body_type==='スリム'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-body-type/スリム"
                                >スリム</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->body_type==='やや細め'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-body-type/やや細め"
                                >やや細め</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->body_type==='普通'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-body-type/普通"
                                >普通</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->body_type==='グラマー'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-body-type/グラマー"
                                >グラマー</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->body_type==='筋肉質'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-body-type/筋肉質"
                                >筋肉質</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->body_type==='ややぽっちゃり'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-body-type/ややぽっちゃり"
                                >ややぽっちゃり</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->body_type==='太め'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-body-type/太め"
                                >太め</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="prof-birth-origin" tabindex="-1" role="dialog" aria-labelledby="id-modal-title" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="id-modal-title"> 出身地 </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">キャンセル</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="profile-menu-list">
                        <ul>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->birth_origin==='非公開'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-birth-origin/非公開"
                                >非公開</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->birth_origin==='東京都'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-birth-origin/東京都"
                                >東京都</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->birth_origin==='神奈川県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-birth-origin/神奈川県"
                                >神奈川県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->birth_origin==='埼玉県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-birth-origin/埼玉県"
                                >埼玉県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->birth_origin==='千葉県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-birth-origin/千葉県"
                                >千葉県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->birth_origin==='大阪府'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-birth-origin/大阪府"
                                >大阪府</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->birth_origin==='京都府'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-birth-origin/京都府"
                                >京都府</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->birth_origin==='兵庫県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-birth-origin/兵庫県"
                                >兵庫県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->birth_origin==='奈良県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-birth-origin/奈良県"
                                >奈良県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->birth_origin==='愛知県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-birth-origin/愛知県"
                                >愛知県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->birth_origin==='岐阜県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-birth-origin/岐阜県"
                                >岐阜県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->birth_origin==='三重県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-birth-origin/三重県"
                                >三重県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->birth_origin==='福岡県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-birth-origin/福岡県"
                                >福岡県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->birth_origin==='北海道'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-birth-origin/北海道"
                                >北海道</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->birth_origin==='青森県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-birth-origin/青森県"
                                >青森県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->birth_origin==='岩手県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-birth-origin/岩手県"
                                >岩手県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->birth_origin==='宮城県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-birth-origin/宮城県"
                                >宮城県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->birth_origin==='秋田県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-birth-origin/秋田県"
                                >秋田県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->birth_origin==='山形県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-birth-origin/山形県"
                                >山形県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->birth_origin==='福島県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-birth-origin/福島県"
                                >福島県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->birth_origin==='茨城県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-birth-origin/茨城県"
                                >茨城県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->birth_origin==='栃木県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-birth-origin/栃木県"
                                >栃木県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->birth_origin==='群馬県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-birth-origin/群馬県"
                                >群馬県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->birth_origin==='新潟県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-birth-origin/新潟県"
                                >新潟県</a>
                            </li> <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->birth_origin==='富山県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-birth-origin/富山県"
                                >富山県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->birth_origin==='石川県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-birth-origin/石川県"
                                >石川県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->birth_origin==='福井県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-birth-origin/福井県"
                                >福井県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->birth_origin==='山梨県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-birth-origin/山梨県"
                                >山梨県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->birth_origin==='長野県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-birth-origin/長野県"
                                >長野県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->birth_origin==='静岡県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-birth-origin/静岡県"
                                >静岡県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->birth_origin==='滋賀県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-birth-origin/滋賀県"
                                >滋賀県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->birth_origin==='和歌山県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-birth-origin/和歌山県"
                                >和歌山県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->birth_origin==='鳥取県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-birth-origin/鳥取県"
                                >鳥取県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->birth_origin==='島根県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-birth-origin/島根県"
                                >島根県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->birth_origin==='岡山県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-birth-origin/岡山県"
                                >岡山県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->birth_origin==='広島県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-birth-origin/広島県"
                                >広島県</a>
                            </li> <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->birth_origin==='山口県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-birth-origin/山口県"
                                >山口県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->birth_origin==='徳島県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-birth-origin/徳島県"
                                >徳島県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->birth_origin==='香川県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-birth-origin/香川県"
                                >香川県</a>
                            </li> <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->birth_origin==='愛媛県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-birth-origin/愛媛県"
                                >愛媛県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->birth_origin==='高知県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-birth-origin/高知県"
                                >高知県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->birth_origin==='佐賀県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-birth-origin/佐賀県"
                                >佐賀県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->birth_origin==='長崎県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-birth-origin/長崎県"
                                >長崎県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->birth_origin==='熊本県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-birth-origin/熊本県"
                                >熊本県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->birth_origin==='大分県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-birth-origin/大分県"
                                >大分県</a>
                            </li> 
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->birth_origin==='宮崎県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-birth-origin/宮崎県"
                                >宮崎県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->birth_origin==='鹿児島県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-birth-origin/鹿児島県"
                                >鹿児島県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->birth_origin==='沖縄県'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-birth-origin/沖縄県"
                                >沖縄県</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->birth_origin==='海外'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-birth-origin/海外"
                                >海外</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="prof-education" tabindex="-1" role="dialog" aria-labelledby="id-modal-title" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="id-modal-title"> 学歴 </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">キャンセル</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="profile-menu-list">
                        <ul>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->education==='非公開'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-education/非公開"
                                >非公開</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->education==='高校卒'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-education/高校卒"
                                >高校卒</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->education==='短大・専門学校卒'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-education/短大・専門学校卒"
                                >短大・専門学校卒</a>
                            </li>

                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->education==='大学卒'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-education/大学卒"
                                >大学卒</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->education==='大学院卒'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-education/大学院卒"
                                >大学院卒</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->education==='その他'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-education/その他"
                                >その他</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="prof-annual-salary" tabindex="-1" role="dialog" aria-labelledby="id-modal-title" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="id-modal-title"> 年収 </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">キャンセル</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="profile-menu-list">
                        <ul>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->annual_salary==='非公開'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-annual-salary/非公開"
                                >非公開</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->annual_salary==='5000万円以上'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-annual-salary/5000万円以上"
                                >5000万円以上</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->annual_salary==='3000万円〜5000万円'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-annual-salary/3000万円〜5000万円"
                                >3000万円〜5000万円</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->annual_salary==='2000万円〜3000万円'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-annual-salary/2000万円〜3000万円"
                                >2000万円〜3000万円</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->annual_salary==='1500万円〜2000万円'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-annual-salary/1500万円〜2000万円"
                                >1500万円〜2000万円</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->annual_salary==='1000万円〜1500万円'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-annual-salary/1000万円〜1500万円"
                                >1000万円〜1500万円</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->annual_salary==='800万円〜1000万円'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-annual-salary/800万円〜1000万円"
                                >800万円〜1000万円</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->annual_salary==='600万円〜800万円'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-annual-salary/600万円〜800万円"
                                >600万円〜800万円</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->annual_salary==='400万円〜600万円'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-annual-salary/400万円〜600万円"
                                >400万円〜600万円</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->annual_salary==='400万円未満'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-annual-salary/400万円未満"
                                >400万円未満</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="prof-have-children" tabindex="-1" role="dialog" aria-labelledby="id-modal-title" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="id-modal-title"> 学歴 </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">キャンセル</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="profile-menu-list">
                        <ul>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->have_children==='非公開'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-have-children/非公開"
                                >非公開</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->have_children==='なし'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-have-children/なし"
                                >なし</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->have_children==='1人'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-have-children/1人"
                                >1人</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->have_children==='2人'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-have-children/2人"
                                >2人</a>
                            </li>
                            <li class="profile-menu-item">
                                <a 
                                    class="profile-menu-link {{ $data[0]->have_children==='3人以上'?'profile-menu-link-check' : ''}}" 
                                    rel="nofollow" 
                                    data-method="patch" 
                                    href="/users/me/profile/update-have-children/3人以上"
                                >3人以上</a>
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
@section('script')
    @parent
    <script>
        $(document).ready(function () {
            var yourBirthDay = {
                year: parseInt('{{ Auth::user()->year_birth }}'),
                month: parseInt('{{ Auth::user()->month_birth }}'),
                date: parseInt('{{ Auth::user()->day_birth }}')
            };
            var birthDate = new Date(yourBirthDay.year, yourBirthDay.month - 1, yourBirthDay.date);
            var yearBirth = birthDate.getFullYear().toString().padStart(4, '0');
            var monthBirth = (birthDate.getMonth() + 1).toString().padStart(2, '0');
            var dataBirth = birthDate.getDate().toString().padStart(2, '0');

            var today = new Date();
            var yearToDay = today.getFullYear().toString().padStart(4, '0');
            var monthToDay = (today.getMonth() + 1).toString().padStart(2, '0');
            var dayToDay = today.getDate().toString().padStart(2, '0');

            var age = yearToDay - yearBirth;

            if (monthToDay < monthBirth || (monthBirth == monthToDay && dataBirth > dayToDay)) {
                age--;
            }
            
            if( age < 0){
                $('span.age-birth').html(0 + '歳');
            }else{
                $('span.age-birth').html(age + '歳');
            }
        });
    </script>
@stop