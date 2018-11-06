@extends('layouts.master')
@section('title', 'paters - 電話番号変更')
@section('content')
<div class="wrap-container">
    <section class="page page-setting">
        <div class="header-tabs">
            <ul>
                <li class="header-tabs-item header-tabs-item-with-arrow">
                    <a class="header-tabs-back" href="/users/configuration"></a>
                    <h3> 電話番号変更 </h3>
                    <!-- <a class="step-arrow step-arrow-right step-arrow-save" href="javascript:$('form').submit();">
                        <span class="step-text">保存</span>
                    </a> -->
                </li>
            </ul>
        </div>
        <div class="page-content">
            <form method="POST" action="{!! route('update.tel') !!}" class="form form-setting">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                
                <div class="form-inner">
                    <label class="form-group-label">新しい電話番号</label>
                    <div class="form-group form-group-with-icon form-group-edit">
                        <div class="form-group-left">
                            <img class="form-group-icon" src="/assets/image/phone.png" alt="Phone">
                        </div>
                        <input 
                            value="{!! Auth::user()->tel !!}" 
                            placeholder="携帯電話番号（ハイフンなし）" 
                            data-parsley-trigger="change" 
                            data-parsley-errors-messages-disabled="true" 
                            data-parsley-class-handler="#number-handler" 
                            class="form-group-tag form-group-tag-pr30 form-group-tag-pb10" 
                            autocomplete="off" 
                            type="number" 
                            name="user_tel" 
                            id="user-tel" 
                        />
                        {!! $errors->first('user_tel', '<span class="error-text">:message</span>') !!}
                        <div class="form-group-right form-group-right-clear">
                            <button type="button" onClick="$('#user-tel').val('');">
                                <img class="form-group-icon form-group-icon-clear" src="/assets/image/clear.png" alt="Clear" />
                            </button>
                        </div>
                    </div>
                    <div class="form-footer form-footer-setting">
                        <input type="submit" name="commit" value="送信" class="btn-lg m-t-50 button button-bg-green button-tc-white button-setting button-text" data-disable-with="送信" />
                        <p class="text text-tc-silver">
                            ※電話番号はあなたがロボットや業者ではないことを確認するために入力してください。
                        </p>
                        <p class="text text-tc-silver">
                            ※ご入力いただいた電話番号に認証コードをお送りするので、認証コードを受け取れる電話番号を入力して下さい。
                        </p>
                    </div>
                </div>
            </form>       
        </div>
    </section>
    @include('customer/footer')
</div>
@stop