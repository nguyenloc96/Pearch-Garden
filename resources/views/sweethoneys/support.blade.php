@extends('layouts.master')
@section('title', 'Sweet Honeys')
@section('style')
    @parent
    <link href="{!! asset('assets/css/webpages.css') !!}" rel="stylesheet">
@stop
@section('content')
<div class="wrap-container"> 
    <div class="container page-support">
        <div class="row">
            <div class="col-xs-12">
                <div class="title">
                    <h4>安心してご利用いただくために</h4>
                </div>
                <div>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>
                                    <p>
                                        Sweet Honeys では、会員の皆様にとって安心で安全なサービスを提供するために以下のような取り組みを行っております。
                                    </p>

                                    <strong class="accordion-strong">24時間365日常時監視体制</strong>
                                    <ul class="list-ul">
                                        <li>プロフィール・写真の厳正なチェック</li>
                                        <li>不審なユーザーの監視・警告・強制退会</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong class="accordion-strong">プロフィール・初回のメッセージから、不適切な内容を排除しています</strong>
                                    <ul class="list-ul">
                                        <li>勤務先情報など個人の特定につながる内容</li>
                                        <li>誹謗・中傷・卑劣な表現・その他公序良俗に反する内容等、相手に不快感を与える内容</li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-xs-12">
                <div class="title">
                    <h4>警察へのインターネット異性紹介事業の提出済</h4>
                </div>
                <div>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>
                                    インターネット異性紹介事業として認定を受けています。（受理番号：30170048000）<br>警察の指導のもとサービスを展開しております。
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-xs-12">
                <div class="title">
                    <h4>違反報告の対応ポリシー</h4>
                </div>
                <div>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>
                                    <p>
                                        Sweet Honeys は24時間365日、常時監視体制を敷いて会員の皆様に安心・安全なサービスをお届けいたします。<br>
                                        発見した問題や、寄せられた違反報告を元に当社規定の事実確認を行った上で、違反者に対し警告や強制退会等の対応を行っております。
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        万が一マッチングしたお相手の中にお客様が不快に感じるユーザーがいた場合には、違反報告機能にてできるだけ詳細をご連絡頂けますと幸いです。<br>
                                        なお、違反された事項が違反に当たらないと判断された場合や、事実確認が十分に行えないなどの場合には、虚偽の報告によって被害を受けるお客様が発生することを防ぐため、対応を行わないことがございます。
                                    </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-xs-12">
                <div class="title">
                    <h4>年齢確認書類の取り扱いについて</h4>
                </div>
                <div>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>
                                    <p>
                                        ・お客様の個人情報は、個人情報保護法に基づき、厳格な管理、適正な取扱いを行います。<br>
                                        ・運営事務局にて確認後、一定の期間保存した後に責任をもって破棄いたします。
                                    </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
    @include('customer/footer')
</div>
@stop