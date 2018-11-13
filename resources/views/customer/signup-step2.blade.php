@extends('layouts.master')
@section('title', 'Sweet Honeys')
@section('style')
    @parent
    <link href="{!! asset('assets/css/sign-up.css') !!}" rel="stylesheet">
    <style>
        /* Sign Up Step 2*/
        .page-signup-flow .flow-bar-list:first-child,  .page-signup-flow .flow-bar-list:nth-child(2) {
            background: #72c7a1;
        }
        .input-box.input-box-clm {
            position: relative;
        }
        .page-signup-body-input .input-box {
            margin-bottom: 20px;
        }
        .page-signup-body-input .input-box-clm input[type=text], .page-signup-body-input .input-box-clm input[type=tel] {
            width: 88%;
            height: 55px;
            display: inline-block;
            vertical-align: middle;
            margin-bottom: 0;
        }
        .page-signup-body-input .input-box-clm input[type=text], .page-signup-body-input .input-box-clm input[type=tel] {
            border: 1px solid #e0e0e0;
            background: #fff;
        }
        .page-signup-body-input input[type=text], .page-signup-body-input input[type=tel] {
            width: 100%;
            padding: 16px 14px;
            border: 1px solid #e0e0e0;
            background: #f4f4f4;
            display: block;
            margin-bottom: 10px;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            -ms-border-radius: 3px;
            border-radius: 3px;
        }
        .page-signup-body-input .input-box select {
            width: 88%;
            height: 55px;
            border: 1px solid #e0e0e0;
            padding: 16px 14px;
            background: 0;
        }
        .input-box.input-box-clm input[type=text]:focus, select:focus{
            border: 1px solid #72c7a1 !important;
        }
    </style>
@stop
@section('content')
<div class="wrap-container">
    <section class="page page-signup page-signup-flow">
        <ol class="flow-bar flex">
            <li class="flow-bar-list"></li>
            <li class="flow-bar-list"></li>
            <li class="flow-bar-list"></li>
            <li class="flow-bar-list"></li>
        </ol>
        <div class="page-signup-inner">
            <section class="page-head page-signup-head">
                <div class="page-signup-head-title">
                    <p>次に、ニックネームと居住地を入力。</p>
                </div>
            </section>
            <section class="page-body page-signup-body">
                <div class="page-signup-body-input">
                    <form method="POST" action="{!! route('sign-up-step-2', $id) !!}" class="new-user-create-temp" id="new-user-create-temp" enctype= "multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        
                        <div class="input-box input-box-clm input-box-focus">
                            <i class="fa fa-tag"></i>
                            <input placeholder="ニックネーム" autocomplete="off" type="text" name="user_create_temp_name" id="user-create-temp-name" value="{{ old('user_create_temp_name') }}"/>
                        </div>
                        <div class="input-box input-box-clm">
                            <i class="fa fa-map-marker"></i>
                            <select name="user_create_temp_address" id="user-create-temp-prof-address-id" value="{{ old('user_create_temp_address') }}">
                                <option value="居住を選択">居住を選択</option>
                                <option value="非公開">非公開</option>
                                <option value="東京都">東京都</option>
                                <option value="神奈川県">神奈川県</option>
                                <option value="埼玉県">埼玉県</option>
                                <option value="千葉県">千葉県</option>
                                <option value="大阪府">大阪府</option>
                                <option value="京都府">京都府</option>
                                <option value="兵庫県">兵庫県</option>
                                <option value="奈良県">奈良県</option>
                                <option value="愛知県">愛知県</option>
                                <option value="岐阜県">岐阜県</option>
                                <option value="三重県">三重県</option>
                                <option value="福岡県">福岡県</option>
                                <option value="北海道">北海道</option>
                                <option value="青森県">青森県</option>
                                <option value="岩手県">岩手県</option>
                                <option value="宮城県">宮城県</option>
                                <option value="秋田県">秋田県</option>
                                <option value="山形県">山形県</option>
                                <option value="福島県">福島県</option>
                                <option value="茨城県">茨城県</option>
                                <option value="栃木県">栃木県</option>
                                <option value="群馬県">群馬県</option>
                                <option value="新潟県">新潟県</option>
                                <option value="富山県">富山県</option>
                                <option value="石川県">石川県</option>
                                <option value="福井県">福井県</option>
                                <option value="山梨県">山梨県</option>
                                <option value="長野県">長野県</option>
                                <option value="静岡県">静岡県</option>
                                <option value="滋賀県">滋賀県</option>
                                <option value="和歌山県">和歌山県</option>
                                <option value="鳥取県">鳥取県</option>
                                <option value="島根県">島根県</option>
                                <option value="岡山県">岡山県</option>
                                <option value="広島県">広島県</option>
                                <option value="山口県">山口県</option>
                                <option value="徳島県">徳島県</option>
                                <option value="香川県">香川県</option>
                                <option value="愛媛県">愛媛県</option>
                                <option value="高知県">高知県</option>
                                <option value="佐賀県">佐賀県</option>
                                <option value="長崎県">長崎県</option>
                                <option value="熊本県">熊本県</option>
                                <option value="大分県">大分県</option>
                                <option value="宮崎県">宮崎県</option>
                                <option value="鹿児島県">鹿児島県</option>
                                <option value="沖縄県">沖縄県</option>
                                <option value="海外">海外</option>
                            </select>
                        </div>
                        <div class="back back-next">
                            <input id="back" type="submit" value="戻る">
                        </div>
                        <div class="submit submit-next">
                            <input type="submit" name="commit" value="次へ" disabled="disabled" data-disable-with="次へ" />
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </section>
    @include('customer/footer')
</div>
@endsection
@section('script')
    @parent
    <script>
        $(document).ready(function() {
            $('#back').click(function (e) {
                e.preventDefault();
                location.href = '/sign-up';
            });
            
            var updateButtonActive = function() {
                var lengthName = $('input[name="user_create_temp_name"]').val().length;
                var valueSelected = $('select[name="user_create_temp_address"]').val();
                if ((lengthName >= 2  && lengthName <= 15) && valueSelected !== "") {
                    $('.page-signup-body-input .submit input[type=submit]').addClass('active').removeAttr('disabled');
                } else {
                    $('.page-signup-body-input .submit input[type=submit]').removeClass('active').attr('disabled', 'disabled');
                }
            };
        
            $('input[name="user_create_temp_name"]').keyup(function() {
                updateButtonActive();
            });
        
            $('select[name="user_create_temp_address"]').change(function() {
                updateButtonActive();
            });
        
            updateButtonActive();
        });
    </script>
@endsection