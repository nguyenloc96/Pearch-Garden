@extends('layouts.master')
@section('title', 'Sweet Honeys - 所得証明')
@section('content')
<div class="wrap-container">
    <div class="header-tabs header-income-certification mt-2"> 
        <ul>  
            <li class="header-tabs-item header-tabs-item-with-arrow">
                <a class="header-tabs-back" href="/users/me"></a>
                <h3>所得証明</h3>
            </li>
        </ul>
    </div>
    <div class="prov-content-wrap prov-present">
        <div class="kv-img">
            <img id="preview_image_file_tag" style="width: 100%" src="/assets/image/attach_doc.png" alt="Attach doc" />
        </div>
        <div class="doc-upload-btn">
            <input type="button" value="書類を選択">
        </div>
        <form 
            class="new_user_income_certification" 
            id="new_user_income_certification"
            action="" method="POST"
            enctype="multipart/form-data"
        >
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            
            <input 
                class="income-certification-file-upload-field hide-input-tag" 
                id="income_certification_image_upload" 
                onChange="setImage(this);" 
                type="file" 
                accept="image/*"
                name="user_income_certification_image" 
            />
            {!! $errors->first('user_income_certification_image', '<span class="error-text">:message</span>') !!}
        </form> 
        <div class="prov-contents-list">
            <section class="prov-content">
                <div class="prov-ttl text-center">
                    <h3 class="ib"> 以下の情報がハッキリと<br>見えていますか？ </h3>
                </div>
                <div class="prov-txt text-center mt-2">
                    <ul class="prov-info-txt">
                        <li>
                            <span class="txt">書類発行元</span>
                            <span class="number">1</span>
                        </li>
                        <li>
                            <span class="txt">発行年月日</span>
                            <span class="number">2</span>
                        </li>
                        <li>
                            <span class="txt">お名前</span>
                            <span class="number">3</span>
                        </li>
                        <li>
                            <span class="txt">年収</span>
                            <span class="number">4</span>
                        </li>
                    </ul>
                </div>
            </section>
        </div> 
        <div class="prov-link prov-begin-link text-center" id="submit-btn">
            <a onclick="submitForm();">所得証明をはじめる</a>
        </div>
    </div>
    @include('customer/footer')
</div>
@stop
@section('script')
    @parent
    <script>
        $('.doc-upload-btn').on('click', function(){
            $('#income_certification_image_upload').trigger('click');
            if(/iP(hone|(o|a)d)/.test(navigator.userAgent)) {
                $('#income_certification_image_upload').trigger('click');
            }
        });
        function setImage(fileImage){
            if (fileImage.files && fileImage.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#preview_image_file_tag')
                        .attr('src', e.target.result);
                };
                reader.readAsDataURL(fileImage.files[0]);
            }
            $('#submit-btn').removeClass('prov-begin-link');
            $('#submit-btn').addClass('prov-confirm');
        }
        function submitForm(){
            if($('#submit-btn').hasClass('prov-confirm')){
                $('form').submit(); 
            }
        }
    </script>
@stop