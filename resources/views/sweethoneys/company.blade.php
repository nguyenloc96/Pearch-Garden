@extends('layouts.master')
@section('title', 'Sweet Honeys')
@section('style')
    @parent
    <link href="{!! asset('assets/css/webpages.css') !!}" rel="stylesheet">
@stop
@section('content')
<div class="wrap-container">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="title">
                    <h4>会社概要</h4>
                </div>
                <div>
                    <table class="table">
                        <tbody>
                            <tr>
                                <th class="color-g">会社名</th>
                                <td>Sweet Honeys</td>
                            </tr>
                            <tr>
                                <th class="color-g">事業内容</th>
                                <td>
                                    <li>マッチングアプリ「Sweet Honeys」の運営</li>
                                    <li>その他経営コンサルティング業</li>
                                </td>
                            </tr>
                            <tr>
                                <th class="color-g">許認可等</th>
                                <td>
                                    <li>インターネット異性紹介事業届出済み <br />
                                    　受理番号：</li> <br />
                                    <li>商標出願済み：「Sweet Honeys」登録番号：第 号</li><br />
                                    <li>電気通信事業届出済み</li>
                                </td>
                            </tr>
                            <tr>
                                <th class="color-g">連絡先</th>
                                <td>info@sweethoneys.jp</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-xs-12">
                <div class="title">
                    <h4>セキュリティ</h4>
                </div>
                <div>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>
                                    Sweet Honeysでは、会員の皆様にとって安心で安全なサービスを提供するために、24時間365日の監視体制を敷いており、　悪徳業者などの取り締まりを厳重に行っております。
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    すべてのユーザーに年齢確認を行っており、未成年者によるトラブルを未然に防いでおります。
                                    ※年齢確認後に、メッセージのやりとりが可能となります。
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    プロフィール・初回のメッセージから、不適切な内容を排除しています。<br>
                                    ・学校名や勤務先情報など個人の特定につながる内容<br>
                                    ・誹謗・中傷・卑劣な表現・その他公序良俗に反する内容等、相手に不快感を与える内容
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