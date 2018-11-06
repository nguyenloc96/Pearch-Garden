@extends('layouts.master')
@section('title', 'paters(ペイターズ)')
@section('content')
<div class="wrap-container">
    <section class="page page-setting">
        <div class="header-tabs">
            <ul>
                <li class="header-tabs-item header-tabs-item-with-arrow">
                    <a class="header-tabs-back" href="/users/me/profile/edit"></a>
                    <h3> つぶやきについて </h3>
                    <!-- <a class="step-arrow step-arrow-right step-arrow-save" href="javascript:$('form').submit();">
                        <span class="step-text">保存</span>
                    </a> -->
                </li>
            </ul>
        </div>
        <div class="profile-mutter-about">
            <ul>
                <li class="profile-mutter-about-item">
                    <h2>つぶやきとは？</h2>
                    <p>つぶやきとは、あなた自身についてより詳しく<br>表現することができる機能です。</p>
                </li>
                <li class="profile-mutter-about-item profile-mutter-about-item-last">
                    <h2>つぶやきを設定するメリット</h2>
                    <p>つぶやきを記入することでお相手が興味を<br>もってもらいやすくなり、結果的にマッチング率が上<br>がる可能性があります。</p>
                </li>
            </ul>
        </div>
    </section>
    @include('customer/footer')
</div>
@stop