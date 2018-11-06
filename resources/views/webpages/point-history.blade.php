@extends('layouts.master')
@section('title', 'paters(ペイターズ)')
@section('content')
<div class="wrap-container">
    <section class="page page-point-history">
        <div class="header-tabs">
            <ul>
                <li class="header-tabs-item header-tabs-item-with-arrow">
                    <a class="header-tabs-back" href="/users/me"></a>
                    <h3>ポイント履歴</h3>
                </li>
            </ul>
        </div>
        <div class="prov-content-wrap prov-present history-point-contents">
            <div class="point-remain">
                <span class="point-ttl">ポイント残高</span>
                <span class="point-val">{{ Auth::user()->point }}pt</span>
            </div>
        </div>
        <div class="point-history-table">
            <p class="point-ttl">ポイント履歴</p>
            <table class="table">
                <tr>
                    <th>日付</th>
                    <th>項目</th>
                    <th>購入<br>ポイント</th>
                </tr>
                <tr>
                    <td>{{ Auth::user()->created_at }}</td>
                    <td>
                        登録ボーナス
                    </td>
                    <td>{{ Auth::user()->point }}pt</td>
                </tr>
            </table>
        </div>
        <div class="page-area">
            <p class="page-txt">1件中1〜1件を表示</p>
            <div class="page-number">

            </div>
        </div>
        <div class="caution-txt-area">
            <p>※ご購入いただいたポイントの有効期限は、購入日を含め180日です。</p>
            <p>※ポイントは、古いものから順番に使用されます。</p>
        </div>
    </section>
    @include('customer/footer')
</div>
@stop