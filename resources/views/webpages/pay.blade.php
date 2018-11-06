@extends('layouts.master')
@section('title', 'paters(ペイターズ)')
@section('content')
<div class="wrap-container">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 pay-head-image">
                <div class="text-center">
                    <img src="https://static.paters.jp/paters_app/images/paying_01.png">
                    <!--<img src="https://static.paters.jp/paters_app/images/paying_02.png" height="auto" width="100%">-->
                </div>
            </div>
            <div class="col-xs-12 p-b-25 pay-content-image">
                <div class="text-center m-t-15">
                    <a href="/purchase/payingmember4">
                        <img class="m-10" src="/assets/image/paying_12_b.png">
                    </a>
                    <a href="/purchase/payingmember3">
                        <img class="m-10" src="/assets/image/paying_03_b.png">
                    </a>
                    <a href="/purchase/payingmember2">
                        <img class="m-10" src="/assets/image/paying_04_b.png">
                    </a>
                    <a href="/purchase/payingmember1">
                        <img class="m-10" src="/assets/image/paying_05_b.png">
                    </a>
                </div>
            </div>
            <div class="col-xs-12">
                <div class="title pay-title">
                    <h4>有料会員契約について</h4>
                </div>
                <div>
                    <p class="section" style="font-size: 12px;">
                        ・有料会員は、男性会員様にご利用いただけるサービスです。<br>
                        ・お申し込み日を１日目とし、181日目（6ヶ月プラン）・91日目（3ヶ月プラン）・31日目（1ヶ月プラン）に自動更新されます。<br>
                        ・更新日前に解約のお手続きをなさった場合、残りの期間についての日割りでのご返金はいたしません。<br>
                        ・自動継続課金は期限が切れる24時間以内に自動的に課金される仕組みです。<br>
                        ・自動継続課金は期限が切れる24時間前に設定からオフにしなければ自動的に更新される仕組みです。<br>
                        ・有料プランご契約の方は、特定期間のみの解約はできません。<br>
                        ・解約の際は、「マイページ＞設定＞定期課金設定」から定期課金中の購入をキャンセルしてください。<br>
                    </p>
                </div>

                <div class="text-center">
                    <nav aria-label="Page navigation">
                        <ul class="pagination pay-navigation">
                            <li><a href="/webpages/privacy-policy">プライバシーポリシー</a></li>
                            <li><a href="/webpages/rule">利用規約</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    @include('customer/footer')
</div>
@stop