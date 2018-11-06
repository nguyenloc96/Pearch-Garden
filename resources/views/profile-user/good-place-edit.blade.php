@extends('layouts.master')
@section('title', 'paters(ペイターズ)')
@section('content')
<div class="wrap-container">
    <section class="page page-setting page-good-place">
        <main class="profile-background">
            <div class="header-tabs">
                <ul>
                    <li class="header-tabs-item header-tabs-item-with-arrow">
                        <a class="header-tabs-back" href="/users/me/profile/edit-other-profile"></a>
                        <h3> 基本プロフィール </h3>
                        <a class="step-arrow step-arrow-right step-arrow-save" href="javascript:$('form').submit();">
                            <span class="step-text">保存</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="profile-edit">
                <label class="profile-edit-label">よく行く場所</label>
                <form class="edit_user_profile" id="edit_user_profile" action="{{ route('users.profile.good-place.edit') }}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <textarea 
                        class="profile-edit-textarea profile-edit-textarea-height" 
                        name="user_profile_good_place" 
                        id="user_profile_good_place"
                        value="old('user_profile_good_place')"
                    >{!! $data[0]->good_place == '' ? old('user_profile_good_place') : $data[0]->good_place !!}</textarea>
                    {!! $errors->first('user_profile_good_place', '<span class="error-text">:message</span>') !!}
                    <span class="profile-edit-char">あと30文字</span>
                </form>
            </div>
        </main>
    </section>
    @include('customer/footer')
</div>
@stop
@section('script')
    @parent
    <script type="text/javascript">
    $(function () {
        $('.page-good-place .profile-edit-textarea').keyup(function (e) {
            var remain = 30 - $(e.target).val().length;
            $('.page-good-place .profile-edit-char').html('あと' + remain + '文字');
            if(remain < 0) {
                $('.page-good-place .profile-edit-char').addClass('error-text');
                $('.page-good-place .step-arrow-save').addClass('invalid-input')
                $('page-good-place .step-arrow-save').attr('disabled', 'disabled');
            }else if(remain == 30){
                $('.page-good-place .step-arrow-save').addClass('invalid-input')
                $('page-good-place .step-arrow-save').attr('disabled', 'disabled');
            }else {
                $('.page-good-place .profile-edit-char').removeClass('error-text');
                $('.page-good-place .step-arrow-save').removeClass('invalid-input')
                $('.page-good-place .step-arrow-save').removeAttr('disabled');
            }
        }).trigger('keyup');
    })
    </script>
@stop