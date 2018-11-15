@extends('layouts.master')
@section('title', 'Sweet Honeys')
@section('content')
<div class="wrap-container">
    <div class="header-tabs">
        <ul>
            <li class="header-tabs-item header-tabs-item-with-arrow">
                <a class="header-tabs-back" href="/users/me"></a>
                <h3>年齢確認</h3>
            </li>
        </ul>
    </div>
    <section class="page page-age">
        <div class="page-age-mv">
            <p class="page-age-mv-img"></p>
            <p class="page-age-mv-head">
                関連法規に基づき、Sweet Honeys では他の会員様との<br>
                メッセージのやりとりが可能になる前に、<br>
                年齢確認を必須としています。
            </p>
        </div>
        <section class="page-age-section">
            <p class="page-age-section-title">年齢確認が必要な理由</p>
            <p class="page-age-section-head">
                良質なコミュニティ維持のため、年齢確認を<br>
                必須とさせていただいております。
            </p>
            <div class="page-age-section-icons">
                <div class="page-age-section-icons-item01">
                    <img src="/assets/image/age_cer_reason_1@3x.png" alt="Age cer reason 1@3x" />
                    <p>
                        悪質な会員<br>
                        の排除
                    </p>
                </div>
                <div class="page-age-section-icons-item02">
                    <img src="/assets/image/age_cer_reason_2@3x.png" alt="Age cer reason 2@3x" />
                    <p>
                        コミュニティの<br>
                        質の向上化
                    </p>
                </div>
            </div>
        </section>
        <section class="page-age-section">
            <p class="page-age-section-title">年齢確認に必要なもの</p>
            <p class="page-age-section-head is-box">以下のどれか1点のみ</p>
            <div class="page-age-section-icons">
                <div class="page-age-section-icons-item05">
                    <img src="/assets/image/insurancecard@2x.png" alt="Insurancecard@2x" />
                    <p>保険証</p>
                </div>
                <div class="page-age-section-icons-item05">
                    <img src="/assets/image/passport@1x.png" alt="Passport@1x" />
                    <p>パスポート</p>
                </div>
                <div class="page-age-section-icons-item05">
                    <img src="/assets/image/license@3x.png" alt="License@3x" />
                    <p>免許証</p>
                </div>
            </div>
        </section>
        <section class="page-age-section">
            <p class="page-age-section-title">個人情報保護の徹底</p>
            <p class="page-age-section-head">
                お客様の個人情報は、個人情報保護法に基づき、厳正な管理、適正な取り扱いを行います。<br>
                運営事務局にて確認後、一定の期間保存した後責任をもって破棄いたします。
            </p>
            <div class="page-age-section-icons">
                <div class="page-age-section-icons-item03">
                    <img src="/assets/image/privacy_1@3x.png" alt="Privacy 1@3x" />
                    <p>
                        通信を全て<br>
                        暗号化して管理
                    </p>
                </div>
                <div class="page-age-section-icons-item04">
                    <img src="/assets/image/submission@3x.png" alt="Submission@3x" />
                    <p>
                        警察に事業者<br>
                        として届け出済み
                    </p>
                </div>
            </div>
        </section>
        <section class="page-age-section">
            <p class="page-age-section-title">簡単2ステップで年齢確認</p>
            <p class="page-age-section-head">年齢確認はあっという間に終わります。</p>

            <section class="page-age-section-child">
                <img class="page-age-section-child-icon" src="/assets/image/camera_icon@3x.png" alt="Camera icon@3x" />
                <p class="page-age-section-child-title">まずは書類を撮影</p>
                <p class="page-age-section-child-head">
                    書類を用意し、以下の情報がはっきりと<br>
                    見えるように撮影してください。
                </p>
                <ol class="page-age-section-child-flow">
                    <li><span>1</span>生年月日</li>
                    <li><span>2</span>書類名称</li>
                    <li><span>3</span>発行元名称</li>
                </ol>
                <p class="page-age-section-child-sample-txt">(例)運転免許証をご提出される場合</p>
                <img src="/assets/image/example_driver@3x.png" alt="Example driver@3x" />
            </section>

            <section class="page-age-section-child">
                <img class="page-age-section-child-icon" src="/assets/image/paint_icon@3x.png" alt="Paint icon@3x" />
                <p class="page-age-section-child-title">必要な部分だけ提出</p>
                <p class="page-age-section-child-head">
                    顔写真など不要な部分は隠した状態で<br>
                    提出いただけます。
                </p>
                <p class="page-age-section-child-sample-txt">(例)運転免許証をご提出される場合</p>
                <img class="page-age-section-img" src="/assets/image/group10.png" alt="Group10" />
            </section>

            <section class="page-age-section-child">
                <img class="page-age-section-child-icon" src="/assets/image/review_icon@3x.png" alt="Review icon@3x" />
                <p class="page-age-section-child-title">運営側で審査</p>
                <p class="page-age-section-child-head">
                    審査は順次、迅速に対応いたします。<br>
                    審査後、結果のご連絡をいたします。
                </p>
            </section>

            <section class="page-age-attention">
                <img class="page-age-attention-icon" src="/assets/image/alert2@3x.png" alt="Alert2@3x" />
                <p class="page-age-attention-title">年齢確認の前に</p>
                <p class="page-age-attention-txt">
                    ご登録いただいた生年月日と、提出された年齢確認書類の生年月日が一致しない場合は承認されず、Sweet Honeys 上でのメッセージのやりとりが始められませんので、ご注意ください。
                </p>
                <p class="page-age-attention-link">
                    <a href="/users/me/profile/birthday/edit">年齢を変更する(1回のみ)</a>
                </p>
                <div class="page-age-attention-button">
                    <button 
                        class="button button-bg-green button-tc-white button-modal" 
                        type="button" 
                        onClick="location.href='/users/age-certification/edit';"
                    >
                        <span class="button-text">年齢確認はじめる</span>
                    </button>
                </div>
            </section>

        </section>
    </section>
    @include('customer/footer')
</div>
@stop