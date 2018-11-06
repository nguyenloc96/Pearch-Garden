@extends('layouts.master')
@section('title', 'paters(ペイターズ)')
@section('content')
<div class="wrap-container">
    <div class="container">
        <div class="page-buy-points">
            <div class="row h50">
                <div class="section">
                    <table class="table buy-points">
                        <tbody>
                            <tr>
                                <th>ポイント残高</th>
                                <td>
                                    <span>30</span>pt
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-xs-12">
                <div class="title">
                    <h4>ご希望のポイントを選んでください</h4>
                </div>
                <div class="text-center">
                    <a href='/purchase/point100'>
                        <img class="m-t-15" src="/assets/image/point_01.png" height="auto" width="90%">
                    </a>
                    <a href='/purchase/point50'>
                        <img class="m-t-15" src="/assets/image/point_02.png" height="auto" width="90%">
                    </a>
                    <a href='/purchase/point30'>
                        <img class="m-t-15" src="/assets/image/point_03.png" height="auto" width="90%">
                    </a>
                    <a href='/purchase/point10'>
                        <img class="m-t-15" src="/assets/image/point_04.png" height="auto" width="90%">
                    </a>
                  </div>
            </div>
        </div>
        <div class="row mt-5 page-points-content">
            <div class="col-xs-12">
                <div class="p-point">
                    <h3>いいね！に交換できる</h3>
                    <p>1ポイントを「1いいね！」に交換可能！</p>
                </div>
                <div class="p-point-content">
                    <img src="/assets/image/point01.png" width="33%">
                    <img src="/assets/image/right.png" width="10%">
                    <img src="/assets/image/like.png" width="36%" class="mt-1">
                </div>

                <div class="text-center">
                    <a href="/users/points">
                        <button class="btn btn-lg btn-c">ポイントをいいね！に交換する</button>
                    </a>
                </div>

                <div class="text-center">
                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                            <li>
                                <a href="/webpages/privacy-policy">プライバシーポリシー</a>
                            </li>
                            <li>
                                <a href="/webpages/rule">利用規約</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="col-xs-12 m-t-30 m-b-50 page-points-footer">
            <div>
                <h4 class="text-center">注意事項</h4>
                <p class="section">
                    ・ご購入いただいたポイントの有効期限は、購入日を含め180日間です。<br>
                    ・「いいね！」をポイントに交換することはできません。<br>
                    ・ポイントは古いものから順番に使用されます。<br>
                    ・ポイントからいいね！に交換できるのは、お相手に送る「いいね！」になります。
                </p>
            </div>
        </div>
    </div>
    @include('customer/footer')
</div>
@stop