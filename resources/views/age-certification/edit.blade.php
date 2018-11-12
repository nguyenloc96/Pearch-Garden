@extends('layouts.master')
@section('title', 'Sweet Honeys')
@section('content')
<div class="wrap-container">
    <div class="header-tabs"> 
        <ul>  
            <li class="header-tabs-item header-tabs-item-with-arrow">
                <a class="header-tabs-back" href="/users/me"></a>
                <h3>年齢確認</h3>
            </li>
        </ul>
    </div> 
    @if(Session::has('error'))
        <div class='col-xs-12'>
            <div class='alert alert-waring alert-dismissible message-error'>
                <h4><i class="icon fa fa-check"></i>{!! Session::get('error') !!}.</h4>
            </div>
        </div>
    @endif
    <section class="page page-age">
        <div class="page-age-present-mv">
            <img 
                class="page-age-present-mv-img" 
                id="preview_image_file_tag" src="/assets/image/rectangle.png" 
                alt="Rectangle" 
            />
            <p class="page-age-present-mv-txt">
                以下のボタンより書類を<br>
                添付してください。
            </p>
            <div class="page-age-present-mv-btn">
                <form 
                    class="edit_user_age_certification" 
                    action="{{ route('age.certification') }}" method="POST"
                    enctype="multipart/form-data"
                >
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    
                    <input 
                        class="age-certification-file-upload-field hide-input-tag" 
                        id="age_certification_image_upload" 
                        onChange="setImage(this);" 
                        type="file" 
                        accept="image/*"
                        name="user_age_certification_image" 
                    />
                    {!! $errors->first('user_age_certification_image', '<span class="error-text">:message</span>') !!}
                </form>      
                <button class="button" onclick="$('#age_certification_image_upload').click()">
                    <span class="button-text">書類を選択</span>
                </button>
            </div>
        </div>

        <section class="page-age-present-main">
            <p class="page-age-present-main-title">
                以下の情報がハッキリと<br>
                見えていますか？
            </p>
            <ol class="page-age-section-child-flow">
                <li><span>1</span>生年月日</li>
                <li><span>2</span>書類名称</li>
                <li><span>3</span>発行元名称</li>
            </ol>
            <p class="page-age-section-child-sample-txt">(例)運転免許証をご提出される場合</p>
            <img src="/assets/image/example_driver@3x.png" alt="Example driver@3x" />
            <div class="page-age-present-main-button">
                <button 
                    class="button button-bg-gray button-tc-white button-modal" 
                    type="button" id="submit-btn" onClick="submitForm();
                ">
                    <span class="button-text">以上を確認し、書類を提出する</span>
                </button>
            </div>
        </section>
        <div class="alert-message {{!is_null(Session::get('success')) ? '' : 'd-none'}}">
            <div class="alert-message-inner">
                <p class="alert-message-copy alert-message-copy-first">書類の提出が完了しました。</p>
                <p class="alert-message-copy">審査が完了しましたら、マイページの「お知らせ」にて結果を配信します。</p>
                <a href="#" class="alert-message-button">OK</a>
            </div>
        </div>
    </section>
    @include('customer/footer')
</div>
@stop
@section('script')
    @parent
    <script>
        function setImage(fileImage){
            if (fileImage.files && fileImage.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#preview_image_file_tag')
                        .attr('src', e.target.result);
                };
                reader.readAsDataURL(fileImage.files[0]);
            }

            $('#submit-btn').removeClass('button-bg-gray');
            $('#submit-btn').addClass('button-bg-green');
        }
        function submitForm(){
            if($('#submit-btn').hasClass('button-bg-green')){
                $('form').submit(); 
            }
        }
        $('.alert-message-button').click(function(){
            $('.alert-message').hide();
        });
    </script>
@stop