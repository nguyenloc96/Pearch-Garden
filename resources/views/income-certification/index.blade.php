@extends('layouts.master')
@section('title', 'Sweet Honeys - 所得証明')
@section('content')
<div class="wrap-container">
    <div class="header-tabs header-income-certification mt-2"> 
        <ul>  
            <li class="header-tabs-item header-tabs-item-with-arrow">
                <a class="header-tabs-back" href="/users/me"></a>
                <h3>所得証明</h3>
            </li>
        </ul>
    </div> 
    <div class="prov-content-wrap">
        <div class="kv-img">
            <img src="/assets/image/cert_income_cover.png" alt="Cert income cover" />
        </div>
        <div class="prov-contents-list">
            <section class="prov-content">
                <div class="prov-ttl">
                    <div class="prov-border ib">
                        <img src="/assets/image/prov-border-right.png" alt="Prov border right" />
                    </div>
                    <h3 class="ib">所得証明のメリット</h3>
                    <div class="prov-border ib">
                        <img src="/assets/image/prov-border-left.png" alt="Prov border left" />
                    </div>
                </div>
                <div class="prov-txt">
                    <div class="daiya-img ib">
                        <img src="/assets/image/diamond.png" alt="Diamond" />
                    </div>
                    <div class="ib">
                        <p class="daiya-ttl">プロフィールに専用バッヂ</p>
                        <p class="daiya-txt">
                            所得証明を行った方だけの特別な<br>バッヂがつきます。
                        </p>
                    </div>
                </div>
                <div class="prov-txt">
                    <div class="daiya-img ib">
                        <img src="/assets/image/diamond.png" alt="Diamond" />
                    </div>
                    <div class="ib">
                        <p class="daiya-ttl">信頼・格別の証</p>
                        <p class="daiya-txt">
                            お相手の目にとまりやすくなり、<br>いいね！をもらいやすくなります。
                        </p>
                    </div>
                </div>
            </section>
            <section class="prov-content">
                <div class="prov-ttl">
                    <div class="prov-border ib">
                        <img src="/assets/image/prov-border-right.png" alt="Prov border right" />
                    </div>
                    <h3 class="ib">お使いいただける書類</h3>
                    <div class="prov-border ib">
                        <img src="/assets/image/prov-border-left.png" alt="Prov border left" />
                    </div>
                </div>
                <div class="prov-txt">
                    <div class="ib">
                        <p class="prov-txt-long">
                            所得証明にお使い頂ける書類は以下の通り<br>
                            です。いずれか１点を選択してご提出を<br>
                            お願いします。
                        </p>
                    </div>
                </div>
                <div class="prov-txt">
                    <ul class="doc-list">
                        <li>前年度の源泉徴収票</li>
                        <li>前年度の確定申告書</li>
                        <li>前年度の納税証明書</li>
                    </ul>
                </div>
            </section>
            <section class="prov-content">
                <div class="prov-ttl">
                    <div class="prov-border ib">
                        <img src="/assets/image/prov-border-right.png" alt="Prov border right" />
                    </div>
                    <h3 class="ib">書類提出時の注意点</h3>
                    <div class="prov-border ib">
                        <img src="/assets/image/prov-border-left.png" alt="Prov border left" />
                    </div>
                </div>
                <div class="prov-txt">
                    <div class="ib">
                        <p class="prov-txt-long">以下の4つの情報をはっきりと確認できるように<br>撮影してください。それ以外の情報は<br>隠した状態でご提出いただけます。</p>
                    </div>
                </div>
                <div class="prov-txt">
                    <ul class="caution-list">
                        <li>書類発行元</li>
                        <li>発行年月日</li>
                        <li>お名前</li>
                        <li>年収</li>
                    </ul>
                </div>
            </section>
            <section class="prov-content">
                <div class="prov-ttl">
                    <div class="prov-border ib">
                        <img src="/assets/image/prov-border-right.png" alt="Prov border right" />
                    </div>
                    <h3 class="ib">書類のお取り扱いについて</h3>
                    <div class="prov-border ib">
                        <img src="/assets/image/prov-border-left.png" alt="Prov border left" />
                    </div>
                </div>
                <div class="prov-txt">
                    <div class="ib">
                        <p class="prov-txt-long">お客様の個人情報は、個人情報保護法に<br>基づき、厳正な管理、適正な取り扱いを<br>行います。運営事務局にて確認後、一定の期間<br>保存した後に責任をもって破棄いたします。</p>
                    </div>
                </div>
            </section>
            <section class="prov-content">
                <div class="caution-img">
                    <img src="/assets/image/caution.png" alt="Caution" />
                </div>
                <div class="prov-ttl">
                    <h3 class="ib">所得証明の前に</h3>
                </div>
                <div class="prov-txt">
                    <div class="ib">
                        <p class="prov-txt-long">
                            所得証明が完了した後は、年収の変更を<br>
                            行うことができません。所得証明を<br>
                            行われる際は、こちらご了承の上、<br>
                            行ってください。
                        </p>
                    </div>
                </div>
                <div class="prov-txt">
                    <div class="edit-link">
                        <a href="/users/me/profile/edit-basic-profile">年収を変更する</a>
                    </div>
                </div>
                <div class="prov-link text-center">
                    <a href="/users/income-certification/new">所得証明をはじめる</a>
                </div>
            </section>
        </div>
    </div>
    @include('customer/footer')
</div>
@stop   