@extends('layouts.master')
@section('title', 'paters - メールアドレス変更')
@section('content')
<div class="wrap-container">
    <section class="page page-setting">
        <div class="header-tabs">
            <ul>
                <li class="header-tabs-item header-tabs-item-with-arrow">
                    <a class="header-tabs-back" href="/users/configuration"></a>
                    <h3> メールアドレス変更 </h3>
                    <a class="step-arrow step-arrow-right step-arrow-save" href="javascript:$('form').submit();">
                        <span class="step-text">保存</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="page-content">
            <form method="POST" action="{!! route('update.email') !!}" class="form form-setting">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-inner">
                    <div class="form-group form-group-with-icon">
                        <div class="form-group-left">
                            <img class="form-group-icon" src="/assets/image/mail_bk.png" alt="Mail" />
                        </div>
                        <input 
                            value="{!! Auth::user()->email !!}" 
                            placeholder="メールアドレス（任意)" 
                            data-parsley-trigger="change" 
                            data-parsley-errors-messages-disabled="true" 
                            data-parsley-class-handler="#email-handler" 
                            class="form-group-tag form-group-tag-pr30 form-group-tag-pb10" 
                            autocomplete="off" 
                            type="email" 
                            name="user_email" 
                            id="user-email" 
                        />
                        {!! $errors->first('user_email', '<span class="error-text">:message</span>') !!}
                        <div class="form-group-right form-group-right-clear">
                            <button type="button" onClick="$('#user-email').val('');">
                                <img class="form-group-icon form-group-icon-clear" src="/assets/image/clear.png" alt="Clear" />
                            </button>
                        </div>
                    </div>
                </div>
            </form>       
        </div>
    </section>
    @include('customer/footer')
</div>
@stop