@extends('layouts.master')
@section('title', 'Sweet Honeys')
@section('content')
<div class="wrap-container">
    <section class="page page-setting page-setting-comment-edit">
        <main class="profile-background">
            <div class="header-tabs">
                <ul>
                    <li class="header-tabs-item header-tabs-item-with-arrow">
                        <a class="header-tabs-back" href="/users/me/profile/edit-basic-profile"></a>
                        <h3> ニックネームを編集 </h3>
                        <!-- <a class="step-arrow step-arrow-right step-arrow-save" href="javascript:$('form').submit();">
                            <span class="step-text">保存</span>
                        </a> -->
                    </li>
                </ul>
            </div>
            <div class="profile-edit profile-edit-top">
                <form 
                    class="edit-user-profile" 
                    id="edit-user-profile" 
                    action="{{ route('users.profile.nickname.edit') }}" 
                    method="POST"
                >
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="profile-edit-form-control">
                        <input class="profile-edit-input" type="text" value="{{ Auth::user()->name }}" name="user_profile_nickname" id="user_profile_nickname" />
                        <span class="profile-edit-cancel"></span>
                    </div>
                    {!! $errors->first('user_profile_nickname', '<span class="error-text">:message</span>') !!}
                    <span class="profile-edit-char">あと18文字</span>
                    <input type="submit" name="commit" value="保存する" class="profile-edit-button" disabled="disabled" data-disable-with="保存する" />
                </form>    
            </div>
        </main>
    </section>
    @include('customer/footer')
</div>
@stop
@section('script')
    @parent
    <script>
        $(document).ready(function () {
            $('.profile-edit-input').keyup(function (e) {
                var remain = 20 - $(e.target).val().length;
                $('.profile-edit-char').html('あと' + remain + '文字');

                if(remain < 0) {
                    $('.profile-edit-char').addClass('error-text');
                    $('.profile-edit-button').attr('disabled', 'disabled');
                    $('.profile-edit-button').addClass('invalid-input');
                }else if( remain == 20){
                    $('.profile-edit-button').addClass('invalid-input');
                }else {
                    $('.profile-edit-char').removeClass('error-text');
                    $('.profile-edit-button').removeAttr('disabled');
                    $('.profile-edit-button').removeClass('invalid-input');
                }
            }).trigger('keyup');

            $('.profile-edit-cancel').click(function () {
                $('.profile-edit-input').val('');
                $('.profile-edit-input').trigger('keyup');
            })
        });
    </script>
@stop