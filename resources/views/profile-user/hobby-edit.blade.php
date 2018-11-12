@extends('layouts.master')
@section('title', 'Peach Garden')
@section('content')
<div class="wrap-container">
    <section class="page page-setting page-good-place">
        <main class="profile-background">
            <div class="header-tabs">
                <ul>
                    <li class="header-tabs-item header-tabs-item-with-arrow">
                        <a class="header-tabs-back" href="/users/me/profile/edit-other-profile"></a>
                        <h3> 趣味・好きなこと </h3>
                        <a class="step-arrow step-arrow-right step-arrow-save" href="javascript:$('form').submit();">
                            <span class="step-text">保存</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="profile-edit">
                <label class="profile-edit-label">趣味・好きなこと</label>
                <form class="edit_user_profile" id="edit_user_profile" action="{{ route('users.profile.hobby.edit') }}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <textarea 
                        class="profile-edit-textarea profile-edit-textarea-height" 
                        name="user_profile_hobby" 
                        id="user_profile_hobby"
                        value="old('user_profile_hobby')"
                    >{!! $data[0]->hobby == '' ? old('user_profile_hobby') : $data[0]->hobby !!}</textarea>
                    {!! $errors->first('user_profile_hobby', '<span class="error-text">:message</span>') !!}
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