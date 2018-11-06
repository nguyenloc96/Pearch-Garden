@extends('layouts.master')
@section('title', 'paters(ペイターズ)')
@section('content')
<div class="wrap-container">
    <section class="page page-setting page-setting-notice">
        <main class="profile-background">
            <div class="header-tabs">
                <ul>
                    <li class="header-tabs-item header-tabs-item-with-arrow">
                        <a class="header-tabs-back" href="/users/me"></a>
                        <h3>プロフィール編集</h3>
                    </li>
                    <li class="header-tabs-item header-tabs-item-last">
                        <a href="/users/me/profile" class="header-tabs-back" id="preview-from-opp-user"></a>
                        <span class="header-tabs-copy"> 異性からみたプロフィールを確認する </span>
                    </li>
                </ul>
            </div>

            <div class="l-padding">
                <div class="hero">
                    <h2 class="hero-heading">
                        メイン写真 
                        <span class="hero-subheading">あなたの魅力が一番伝わる写真を選びましょう。</span>
                    </h2>
                    <div class="hero-image">
                        <img 
                            id="main_profile_image_upload" 
                            src="/assets/image/me.JPG" alt="Me" 
                        />
                        <div class="subphoto-copy subphoto-copy-block">
                            <p>否認</p>
                            <div class="rejected-mask"></div>
                            <div class="rejected-mask rejected-mask-bottom"></div>
                        </div>
                        <div class="hero-image-review">
                            <form class="main-image-upload-form" id="edit_user_profile" action="" method="post">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                
                                <input class="main-image-upload-file-field" id="main_profile_image_upload_file" type="file" name="user_profile_image" />
                                <input value="0" type="hidden" name="user_profile_sort_order" id="user_profile_profile_image[sort_order]" />
                            </form>          
                            <img src="/assets/image/edit_prof_icon@3x.png" alt="編集する" id="main_edit_button">
                        </div>
                    </div>
                    <div class="help">
                        <a>
                            <span>メイン写真の選び方について詳しくみる</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="l-padding sub-images" id="sub-images">
                <section class="subphoto">
                    <h2 class="subphoto-heading">
                        サブ写真 
                        <span class="subphoto-subheading">
                            プライベート、趣味、料理、全身、ペット、旅行
                        </span>
                    </h2>
                    <ul class="subphoto-list">
                        <li class="subphoto-item subphoto-item-last">
                            <div class="space-square sub-edit-button"></div>
                            <form class="image-upload-form" id="image_upload_form_for_empty" action="" method="post">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <div class="subphoto-add sub-edit-button">
                                    <p>追加</p>
                                </div>
                                <input class="image-upload-file-field image-nothing" id="profile_image_upload_file_add" type="file" name="user_profile_image_2" />
                                <input value="1" id="profile_image_upload_file_sort_order" type="hidden" name="user_profile_image_sort_order_2" />
                            </form>      
                        </li>
                    </ul>
                    <div class="help">
                        <a>
                            <span>サブ写真の選び方について詳しくみる</span>
                        </a>
                    </div>
                </section>
            </div>
            <div class="l-padding">
                <div class="profile-tweet">
                    <a href="/users/me/profile/tweet/edit" class="profile-tweet-link">
                        つぶやき
                        <span class="profile-tweet-copy">
                            {!! $data[0]->tweet == '' ? '...' : $data[0]->tweet !!}
                        </span>
                    </a>
                </div>
            </div>
            <div class="l-padding">
                <div class="profile-setting">
                    <h2 class="profile-setting-heading">プロフィール設定</h2>
                    <ul class="profile-setting-list">
                        <li class="profile-setting-item">
                            <a class="profile-setting-link profile-setting-link-success" href="/users/me/profile/comment/edit">
                                自己紹介を編集
                            </a>        
                        </li>
                        <li class="profile-setting-item">
                            <a class="profile-setting-link profile-setting-link-success" href="/users/me/profile/edit-basic-profile">
                                基本プロフを編集 <span> 100%完了</span>
                            </a>        
                        </li>
                        <li class="profile-setting-item">
                            <a class="profile-setting-link profile-setting-link-last " href="/users/me/profile/edit-other-profile">
                                その他プロフを編集 <span> 62%完了</span>
                            </a>        
                        </li>
                    </ul>
                </div>
            </div>
            <div class="partner">
            </div>
        </main>
    </section>
    <div class="profile-finish {{!is_null(Session::get('success')) ? '' : 'd-none'}}" onclick="$(this).fadeOut()">
        <div class="profile-finish-inner">
            <img src="/assets/image/check.png" alt="" class="profile-finish-check">
            <p class="profile-finish-copy">保存しました</p>
        </div>
    </div>
    @include('customer/footer')
</div>
@stop
@section('script')
    @parent
    <script>
        $(document).ready(function(){
            $('#main_edit_button').on('click', function(){
                $('#main_profile_image_upload_file').trigger('click');
                if(/iP(hone|(o|a)d)/.test(navigator.userAgent)) {
                    $('#main_profile_image_upload_file').trigger('click');
                }
            });
            $('.sub-edit-button').on('click', function(){
                $('#profile_image_upload_file_add').trigger('click');
                if(/iP(hone|(o|a)d)/.test(navigator.userAgent)) {
                    $('profile_image_upload_file_add').trigger('click');
                }
            });
        });
    </script>
@stop