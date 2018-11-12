@extends('layouts.master')
@section('title', 'Sweet Honeys')
@section('content')
<div class="wrap-container">
    <header id="header" class="hdr">
        <div class="hdr-usr">
            <button class="hdr-usr-btn" type="button" onclick="window.location.href='/users/me/profile/edit'">
                <span class="sr-only"> back </span>
                <span class="icon-previous"></span>
            </button>
            <h1 class="hdr-usr-name">{{ Auth::user()->name }}</h1>
            <button class="hdr-usr-btn" type="button">
                <span class="sr-only">more</span>
            </button>
        </div>
    </header>
    <section class="page page-user">
        <div class="page-user-card">
            <div class="user-card user-card-page">
                <a href="#" class="user-card-link">
                    <div class="user-card-thumb">
                        <figure>
                            <img id="main-photo" src="/assets/image/male-a.png" alt="Male" />
                            <figcaption>Lộc Nguyễn 22歳 海外</figcaption>
                        </figure>
                        <div class="user-card-person">
                            <h2 class="user-card-person-name">Lộc Nguyễn 22 歳 海外</h2>
                            <div class="user-card-person-social"></div>
                            <p class="user-card-person-desc"> {!! $data[0]->tweet == '' ? '...' : $data[0]->tweet !!}</p>
                        </div>
                    </div>
                    <div class="user-card-content">
                        <div class="user-card-content-likes">
                            <i class="content-likes icon-heart"></i>
                            <p id="incomming-relations-count" class="content-desc">？いいね！</p>
                        </div>
                        <div class="user-card-content-status">
                            <i class="content-status status status-interval"></i>
                            <p class="content-desc">24時間以内</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="page-user-photos">
            <ul class="page-user-photos-list">
                <li>
                    <div class="page-user-photos-locked" onclick="$(this).nextAll('.alert-message').css('display', '')">
                        <span class="icon-key-hole"></span>
                    </div>

                    <div class="alert-message" style="display: none">
                        <div class="alert-message-inner">
                            <p class="alert-message-copy alert-message-copy-first">
                                公開が制限されています
                            </p>
                            <p><span class="translation-missing" title="translation missing: ja.views/users/me/profiles.common.image_role_hide_description.show_public">Show Public</span></p>
                            <div class="alert-message-btngroup">
                                <a href="#" id="btn-alert-message-ok" class="alert-message-button">
                                    OK
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="page-user-information">
            <dl class="page-user-information-list">
                
                <dt>自己紹介</dt>
                <dd>
                    <p> {!! $data[0]->self_introduce == '' ? '...' : $data[0]->self_introduce !!} </p>
                </dd>

                <dt>基本プロフィール</dt>
                <dd>
                    <ul class="page-user-information-inner-list">
                        <li class="page-user-information-item">
                            <span class="page-user-information-item-name">身長</span>
                            <span class="page-user-information-item-desc">
                                {!! $data[0]->height == '' ? '...' : $data[0]->height !!}
                            </span>
                        </li>
                        <li class="page-user-information-item">
                            <span class="page-user-information-item-name">体型</span>
                            <span class="page-user-information-item-desc">
                                {!! $data[0]->body_type == '' ? '...' : $data[0]->body_type !!}
                            </span>
                        </li>
                        <li class="page-user-information-item">
                            <span class="page-user-information-item-me">年収</span>
                            <span class="page-user-information-item-desc">
                                {!! $data[0]->annual_salary == '' ? '...' : $data[0]->annual_salary !!}
                            </span>
                        </li>
                    </ul>
                </dd>

                <dt>職業</dt>
                <dd>
                    <ul class="page-user-information-inner-list">
                    <li class="page-user-information-item">
                        <span class="page-user-information-item-name">職業</span>
                        <span class="page-user-information-item-desc">
                            {!! $data[0]->job == '' ? '...' : $data[0]->job !!}
                        </span>
                    </li>
                    </ul>
                </dd>

                <dt>出会うまでの希望・初回デート</dt>
                <dd>
                    <ul class="page-user-information-inner-list">
                        <li class="page-user-information-item">
                            <span class="page-user-information-item-name">出会うまでの希望</span>
                            <span class="page-user-information-item-desc">
                                {!! $data[0]->request_until_meet == '' ? '...' : $data[0]->request_until_meet !!}
                            </span>
                        </li>
                    </ul>
                </dd>

                <dt>性格・プライベート</dt>
                <dd>
                    <ul class="page-user-information-inner-list">
                        <li class="page-user-information-item">
                            <span class="page-user-information-item-name">お酒</span>
                            <span class="page-user-information-item-desc">
                                {!! $data[0]->drinking_habit == '' ? '...' : $data[0]->drinking_habit !!}
                            </span>
                        </li>

                        <li class="page-user-information-item">
                            <span class="page-user-information-item-name">タバコ</span>
                            <span class="page-user-information-item-desc">
                                {!! $data[0]->smoking_habit == '' ? '...' : $data[0]->smoking_habit !!}
                            </span>
                        </li>

                        <li class="page-user-information-item">
                            <span class="page-user-information-item-name">休日</span>
                            <span class="page-user-information-item-desc">
                                {!! $data[0]->holiday == '' ? '...' : $data[0]->holiday !!}
                            </span>
                        </li>
                    </ul>
                </dd>
            </dl>
        </div>
    </section>
    @include('customer/footer')
</div>
@stop
@section('script')
    @parent
    <script>
        $(document).ready(function(){
            $('#btn-alert-message-ok').click(function(){
                $(this).closest('.alert-message').css('display', 'none');
                $('html, body').stop().animate({
                    scrollTop: 0
                }, 1500);
            });
        });
    </script>
@stop