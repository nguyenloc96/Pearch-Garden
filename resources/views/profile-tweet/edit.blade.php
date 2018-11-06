@extends('layouts.master')
@section('title', 'paters(ペイターズ)')
@section('content')
<div class="wrap-container">
    <section class="page page-setting">
        <main class="profile-background">
            <div class="header-tabs">
                <ul>
                    <li class="header-tabs-item header-tabs-item-with-arrow">
                        <a class="header-tabs-back" href="/users/me/profile/edit"></a>
                        <h3> つぶやきを編集 </h3>
                        <!-- <a class="step-arrow step-arrow-right step-arrow-save" href="javascript:$('form').submit();">
                            <span class="step-text">保存</span>
                        </a> -->
                    </li>
                </ul>
            </div>
            <main>
                <!-- start of profile edit -->
                <div class="profile-edit profile-edit-top">
                    <form class="edit_user_profile" id="edit_user_profile" action="" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        
                        <div class="profile-edit-form-control">
                            <input class="profile-edit-input" 
                                type="text" value="{!! $data[0]->tweet == '' ? '...' : $data[0]->tweet !!}" 
                                name="user_profile_tweet" id="user_profile_tweet" 
                            />
                            <span class="profile-edit-cancel"></span>
                        </div>
                        {!! $errors->first('user_profile_tweet', '<span class="error-text">:message</span>') !!}
                        <span class="profile-edit-char">あと21文字</span>
                        <input type="submit" name="commit" value="保存する" class="profile-edit-button" disabled="disabled" data-disable-with="保存する" />
                    </form>
                    <div class="profile-edit-tabs">
                        <label class="profile-edit-label">書き方でお困りですか？</label>
                        <ul>
                            <li class="profile-edit-tabs-item">
                                <a 
                                    class="profile-edit-tabs-link profile-edit-tabs-link-help" 
                                    href="/users/me/profile/tweet/about"
                                >
                                    つぶやきについてみる
                                </a>
                            </li>
                            <li class="profile-edit-tabs-item">
                                <a 
                                    class="profile-edit-tabs-link profile-edit-tabs-link-user" 
                                    href="/users/me/profile/tweet/templates"
                                >
                                    テンプレートから選択する
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- end of profile edit -->
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
            $('.profile-edit-input').keyup(function (e) {
                var remain = 24 - $(e.target).val().length;
                $('.profile-edit-char').html('あと' + remain + '文字');
                if(remain == 24){
                    $('.profile-edit-button').addClass('invalid-input');
                }
                if(remain < 0) {
                    $('.profile-edit-char').addClass('error-text');
                    $('.profile-edit-button').attr('disabled', 'disabled');
                    $('.profile-edit-button').addClass('invalid-input');
                } else {
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