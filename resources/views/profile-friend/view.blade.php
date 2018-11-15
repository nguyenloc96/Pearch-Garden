@extends('layouts.master')
@section('title', 'Sweet Honeys')
@section('content')
<div class="wrap-container">
    <header id="header" class="hdr">
        <div class="hdr-usr">
            <button class="hdr-usr-btn" type="button" onclick="window.location.href='/users'">
                <span class="sr-only"> back </span>
                <span class="icon-previous"></span>
            </button>
            <h1 class="hdr-usr-name">
                {!! $user[0]->name !!}
            </h1>
            <button class="hdr-usr-btn" type="button" onclick="$('.alert-message-more').css('display', 'block')">
                <span class="sr-only">more</span>
                <span class="icon-ellipsis"></span>
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
                            <figcaption>
                                {!! $user[0]->name !!} {!! $user[0]->address !!}
                            </figcaption>
                        </figure>
                        <div class="user-card-person">
                            <h2 class="user-card-person-name">
                                {!! $user[0]->name !!} {!! $user[0]->address !!}
                                <span class="age-birth"> </span>
                            </h2>
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
        <div id="footer-button">
            <div class="page-user-call wrapper">
                <div class="page-user-call call-group">
                    @if(!Session::has('outcomming'))
                        <a href="/users/outcomming/blocks/{{$data[0]->profile_id}}">
                            <button class="call-btn call-btn-green">
                                <span class="icon-heart-inverted"></span>
                                いいね！
                            </button>
                        </a>        
                        <button class="call-btn call-btn-green" onclick="$('.alert-message-user').css('display', 'block')">
                            <span class="icon-mail-wh"></span>
                        </button>
                    @else
                        <!-- Block user -->
                        <button class="call-btn">
                            <span class="icon-heart-gl"></span>
                                いいね！
                        </button>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <!-- Show modal  -->
    <div class="alert-message alert-message-user relation-message" style="display: none;">
        <div class="alert-message-inner">
            <form method="POST" action="{!! route('convert.point', $data[0]->profile_id ) !!}" enctype= "multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                <div class="alert-message-content">
                    <div class="alert-message-thumb">
                        <div class="alert-message-thumb-source">
                        </div>
                    </div>
                    <p class="alert-message-copy alert-message-copy-first">
                        いいね！にメッセージを
                        <br>添えてマッチング率大幅UP!!
                    </p>
                    <p class="alert-message-copy">
                        趣味や共通点などのメッセージを添えて
                        <br>気になるお相手にアプローチしましょう。
                    </p>
                    <div class="alert-message-form">
                        <textarea 
                            name="message" 
                            id="alert-message" 
                            placeholder="お相手との共通点や気になったことを伝えてみましょう!
メッセージ付きいいね！ではポイントが消費されます。
※メールアドレス・LINE ID・カカオ ID・Facebookのアカウントやその他SNSのID、電話番号などあなたを特定できる個人情報は送信できません。" 
                            maxLength="200" rows="4" required="required"
                            value="{{ old('message') }}"
                        ></textarea>
                        <span class="alert-message-form-sub" for="alert-message">あと200文字</span>
                    </div>
                </div>
                <div class="alert-message-btngroup">
                    <a class="alert-message-button alert-message-button-green send-message disabled" onclick="$(this).closest('form').submit();">3ポイント使って送信する</a>
                    <a class="alert-message-button" onclick="$(this).closest('.alert-message').css('display', 'none')">キャンセル</a>
                </div>
            </form>
        </div>
    </div>

    <div class="alert-message alert-message-more" style="display: none;">
        <div class="alert-message-inner">
            <div class="list list-modal-button no-mt">
                <ul class="list-inner">
                    <li class="list-item">
                        <a href="/users/outcomming/favorites/{{$data[0]->profile_id}}">
                            <button class="button button-bg-transparent button-bc-gray button-tc-black button-modal" type="button">
                                <span class="button-text">お気に入りに追加する</span>
                            </button>
                        </a>          
                    </li>
                    <li class="list-item">
                        <a href="/users/violation-report/{{$data[0]->profile_id}}">
                            <button class="button button-bg-transparent button-bc-gray button-tc-black button-modal" type="button">
                                <span class="button-text">違反報告する</span>
                            </button>
                        </a>          
                    </li>
                    <li class="list-item">
                        <button class="button button-bg-transparent button-bc-gray button-tc-black button-modal " type="button" 
                            onclick="
                                $(this).closest('.alert-message-more').css('display', 'none'); 
                                $('.alert-message-more-item').css('display', '')
                            "
                        >
                            <span class="button-text">ブロックする</span>
                        </button>
                    </li>
                    <li class="list-item">
                        <button class="button button-bg-gray button-bc-gray button-tc-white button-modal" type="button" 
                            onclick="$(this).closest('.alert-message-more').css('display', 'none')"
                        >
                            <span class="button-text">キャンセル</span>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="alert-message alert-message-more-item" style="display: none;">
        <div class="alert-message-inner">
            <div class="list list-modal-button no-mt">
                <ul class="list-inner">
                    <li class="list-item">
                        <a href="/users/outcomming/blocks-user/{{$data[0]->profile_id}}/不適切な写真">
                            <button class="button button-bg-transparent button-bc-gray button-tc-black button-modal" type="button">
                                <span class="button-text">不適切な写真</span>
                            </button>
                        </a>          
                    </li>
                    <li class="list-item">
                        <a href="/users/outcomming/blocks-user/{{$data[0]->profile_id}}/不快な自己紹介文">
                            <button class="button button-bg-transparent button-bc-gray button-tc-black button-modal" type="button">
                                <span class="button-text">不快な自己紹介文</span>
                            </button>
                        </a>          
                    </li>
                    <li class="list-item">
                        <a href="/users/outcomming/blocks-user/{{$data[0]->profile_id}}/不適切な登録内容">
                            <button class="button button-bg-transparent button-bc-gray button-tc-black button-modal" type="button">
                                <span class="button-text">不適切な登録内容</span>
                            </button>
                        </a>          
                    </li>
                    <li class="list-item">
                        <a href="/users/outcomming/blocks-user/{{$data[0]->profile_id}}/理由なし">
                            <button class="button button-bg-transparent button-bc-gray button-tc-black button-modal" type="button">
                                <span class="button-text">理由なし</span>
                            </button>
                        </a>          
                    </li>
                    <li class="list-item">
                        <button class="button button-bg-gray button-bc-gray button-tc-white button-modal" type="button" 
                            onclick="$(this).closest('.alert-message-more-item').css('display', 'none')"
                        >
                            <span class="button-text">キャンセル</span>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End modal -->
    <div class="profile-finish {{!is_null(Session::get('success')) ? '' : 'd-none'}}" onclick="$(this).fadeOut('slow')">
        <div class="profile-finish-inner">
            <img src="/assets/image/check.png" alt="" class="profile-finish-check">
            <p class="profile-finish-copy">{{ Session::get('success') }}</p>
        </div>
    </div>
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

            var yourBirthDay = {
                year: parseInt('{{ $user[0]->year_birth }}'),
                month: parseInt('{{ $user[0]->month_birth }}'),
                date: parseInt('{{ $user[0]->day_birth }}')
            };
            var birthDate = new Date(yourBirthDay.year, yourBirthDay.month - 1, yourBirthDay.date);
            var yearBirth = birthDate.getFullYear().toString().padStart(4, '0');
            var monthBirth = (birthDate.getMonth() + 1).toString().padStart(2, '0');
            var dataBirth = birthDate.getDate().toString().padStart(2, '0');

            var today = new Date();
            var yearToDay = today.getFullYear().toString().padStart(4, '0');
            var monthToDay = (today.getMonth() + 1).toString().padStart(2, '0');
            var dayToDay = today.getDate().toString().padStart(2, '0');

            var age = yearToDay - yearBirth;

            if (monthToDay < monthBirth || (monthBirth == monthToDay && dataBirth > dayToDay)) {
                age--;
            }
            
            if( age < 0){
                $('span.age-birth').html(0 + '歳');
            }else{
                $('span.age-birth').html(age + '歳');
            }


            var updateActiveButton = function () {
                var length = $('#alert-message').val().length;
                if (length > 200) {
                    return false;
                }
                if(length) {
                    $('.send-message').removeClass('disabled')
                } else {
                    $('.send-message').addClass('disabled')
                }
                $('span.alert-message-form-sub').html("あと" + (200 - length) + "文字");
            };
            $('#alert-message').keyup(function (e) {
                updateActiveButton();
            });
            updateActiveButton();
        });
    </script>
@stop