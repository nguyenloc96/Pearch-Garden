@extends('layouts.master')
@section('title', 'paters(ペイターズ)')
@section('content')
<div class="wrap-container">
    <section class="page page-setting page-setting-comment-edit">
        <main class="profile-background">
            <div class="header-tabs">
                <ul>
                    <li class="header-tabs-item header-tabs-item-with-arrow">
                        <a class="header-tabs-back" href="/users/me/profile/edit"></a>
                        <h3> 自己紹介を編集 </h3>
                        <!-- <a class="step-arrow step-arrow-right step-arrow-save" href="javascript:$('form').submit();">
                            <span class="step-text">保存</span>
                        </a> -->
                    </li>
                </ul>
            </div>
            <main>
                <div class="profile-edit profile-edit-top">
                    <form class="edit_user_profile" id="edit_user_profile" action="{{ route('profile.comment.edit') }}" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        
                        <label class="profile-edit-label">自己紹介</label>
                        <textarea class="profile-edit-textarea" rows="8" name="user_profile_comment" id="user_profile_comment">{!! $data[0]->self_introduce == '' ? '...' : $data[0]->self_introduce !!}</textarea>
                        {!! $errors->first('user_profile_comment', '<span class="error-text">:message</span>') !!}
                        <span class="profile-edit-char">あと467文字</span>
                        <input type="submit" name="commit" value="保存する" class="profile-edit-button" data-disable-with="保存する" />
                    </form>
                    <div class="profile-edit-tabs">
                        <label class="profile-edit-label">書き方でお困りですか？</label>
                        <ul>
                            <li class="profile-edit-tabs-item">
                                <a href="/webpages/about-profile-text" class="profile-edit-tabs-link profile-edit-tabs-link-help">魅力的な自己紹介の書き方をみる</a>
                            </li>
                            <li class="profile-edit-tabs-item">
                                <a class="profile-edit-tabs-link profile-edit-tabs-link-user" href="/users/me/profile">他の会員の自己紹介をみてみる</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </main>
        </main>
    </section>
    @include('customer/footer')
</div>
@stop
@section('script')
    @parent
    <script>
        $(document).ready(function () {
            $('.profile-edit-textarea').keyup(function (e) {
                var remain = 500 - $(e.target).val().length;
                $('.profile-edit-char').html('あと' + remain + '文字');
                
                if(remain < 0) {
                    $('.profile-edit-char').addClass('error-text');
                    $('.profile-edit-button').attr('disabled', 'disabled');
                    $('.profile-edit-button').addClass('invalid-input');
                } else if( remain == 500){
                    $('.profile-edit-button').addClass('invalid-input');
                }else {
                    $('.profile-edit-char').removeClass('error-text');
                    $('.profile-edit-button').removeAttr('disabled');
                    $('.profile-edit-button').removeClass('invalid-input');
                }
            }).trigger('keyup');
        });
    </script>
@stop