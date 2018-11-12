@extends('layouts.master')
@section('title', 'Sweet Honeys')
@section('content')
<div class="wrap-container">
    <div class="header-tabs mt-2 header-me-points"> 
        <ul>  
            <li class="header-tabs-item header-tabs-item-with-arrow">
                <a class="header-tabs-back" href="/users/me"></a>
                <h3>いいね交換</h3>
            </li>
        </ul>
    </div> 
    <div class="prov-content-wrap prov-present change-point-contents">
        <p class="point-ttl">
            ポイントを「いいね」に交換して<br>お相手に「いいね！」しよう。
        </p>
        <p class="point-txt">
            お持ちのポイントは「いいね」に交換が可能です。<br>お相手に積極的に「いいね！」を送りましょう。
        </p>
        <div class="point-count-area">
            <div class="point-remain">
                <p class="point-value" id="remain_pater_point"> {{ Auth::user()->point }} </p>
                <p class="point-remain-txt">残ポイント</p>
            </div>
            <div class="nice-remain">
                <p class="nice-value" id="remain_relation_point"> {{ Auth::user()->nice }} </p>
                <p class="nice-remain-txt">残いいね</p>
            </div>
            <div class="point-confirm">
                <a href="/sweethoneys/point-history">ポイント履歴を確認する</a>
            </div>
        </div>
        <div class="nice-contents">
            <ul>
                <li>
                    <i class="icon-heart"></i>
                    <span class="nice-ttl">5いいね</span>
                    <input type="button" value="5ポイントで交換" class="green-btn" data-toggle="modal" data-target="#point-exchange-modal" data-point="5">
                </li>
                <li>
                    <i class="icon-heart"></i>
                    <span class="nice-ttl">10いいね</span>
                    <input type="button" value="10ポイントで交換" class="green-btn" data-toggle="modal" data-target="#point-exchange-modal" data-point="10">
                </li>
                <li>
                    <i class="icon-heart"></i>
                    <span class="nice-ttl">20いいね</span>
                    <input type="button" value="20ポイントで交換" class="green-btn" data-toggle="modal" data-target="#point-exchange-modal" data-point="20">
                </li>
                <li>
                    <i class="icon-heart"></i>
                    <span class="nice-ttl">30いいね</span>
                    <input type="button" value="30ポイントで交換" class="green-btn" data-toggle="modal" data-target="#point-exchange-modal" data-point="30">
                </li>
                <li>
                    <i class="icon-heart"></i>
                    <span class="nice-ttl">50いいね</span>
                    <input type="button" value="50ポイントで交換" class="green-btn" data-toggle="modal" data-target="#point-exchange-modal" data-point="50">
                </li>
                <li>
                    <i class="icon-heart"></i>
                    <span class="nice-ttl">100いいね</span>
                    <input type="button" value="100ポイントで交換" class="green-btn" data-toggle="modal" data-target="#point-exchange-modal" data-point="100">
                </li>
            </ul>
        </div>
        <div class="caution-txt">
            <p>※patersポイントは、購入ポイントであるか付与ポイントであ<br>るかに関わらず古いものから順に使用されます。</p>
            <p>※patersポイント履歴に最新の情報が反映されるまで<br>数分かかる場合がございます。</p>
        </div>
        <div class="privacy-link">
            <a href="/sweethoneys/terms">利用規約</a>
            <a href="/sweethoneys/privacy">プライバシーポリシー</a>
        </div>
    </div>
    @include('customer/footer')
    <div class="modal fade" id="point-exchange-modal" tabindex="-1" role="dialog" aria-labelledby="id-modal-title" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content page-modal">
                <!-- <div class="modal-header">
                    <h5 class="modal-title" id="id-modal-title"> 居住地 </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">キャンセル</span>
                    </button>
                </div> -->
                <div class="modal-body">
                    <h2 class="page-modal-bk-inner-title page-registration-inner-title point-ttl">
                        <span id="point-exchange-modal-point"></span> ポイントを消費して<br>
                        <span id="point-exchange-modal-nice"></span> いいね！に交換します。
                    </h2>
                    <p class="page-modal-bk-inner-lead page-registration-inner-lead point-txt">
                        よろしければ、交換を<br>確定してください。
                    </p>
                    <p class="page-modal-bk-inner-btn page-registration-inner-btn current point-change-btn">
                        <a href="#" id="point-exchange-modal-yes-btn">交換する</a>
                    </p>
                    <p class="page-modal-bk-inner-btn page-registration-inner-btn current point-cancel-btn">
                        <a data-dismiss="modal">キャンセル</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="profile-finish {{!is_null(Session::get('success')) ? '' : 'd-none'}}" onclick="$(this).fadeOut('slow')">
        <div class="profile-finish-inner">
            <img src="/assets/image/check.png" alt="" class="profile-finish-check">
            <p class="profile-finish-copy">{{ Session::get('success') }}</p>
        </div>
    </div>
</div>
@stop
@section('script')
    @parent
    <script>
        $('.point-cancel-btn').click(function(){
            $('#point-exchange-modal').modal('hide');
            $('.point-change-btn a').attr('href', '#');
            $('html, body').stop().animate({
                    scrollTop: 0
            }, 1000);
        });
        $('.green-btn').click(function(){
            var point = Number($(this).attr('data-point'));
            $('#point-exchange-modal-point').text(point);
            $('#point-exchange-modal-nice').text(point);
            $('.point-change-btn a').attr('href', '/users/convert-point-to-like-nice/'+point+'');
        });
    </script>
@stop