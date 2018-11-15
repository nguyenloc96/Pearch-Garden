@extends('layouts.master')
@section('title', 'Sweet Honeys - パスワード変更')
@section('content')
<div class="wrap-container">
    <section class="page page-setting page-setting-tel-sms">
        <div class="header-tabs">
            <ul>
                <li class="header-tabs-item header-tabs-item-with-arrow">
                    <a class="header-tabs-back" href="/users/configuration"></a>
                    <h3> パスワード変更 </h3>
                    <a class="step-arrow step-arrow-right step-arrow-save" href="javascript:$('form').submit();">
                        <span class="step-text">保存</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="page-content">
            <form method="POST" action="{!! route('update.password') !!}" class="form form-setting-password">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-inner">
                    <div class="form-group form-group-default row">
                        <i class="icon icon-password"></i>
                        <input type="password" name="current_password" id="current_password" value="{{old('current_password')}}" placeholder="古いパスワードを入力" data-parsley-errors-messages-disabled="true" data-parsley-class-handler="#password-handler" data-parsley-id="10" class="form-group-tag form-group-tag-tel-sms" autocomplete="off" />
                        {!! $errors->first('current_password', '<span class="error-text">:message</span>') !!}
                        @if(!is_null(Session::get('error-current-password')))
                            <span class="error-text">{!! Session::get('error-current-password') !!}.</span>    
                        @endif
                    </div>
                    <div class="form-group form-group-default row">
                        <i class="icon icon-password"></i>
                        <input type="password" name="user_password" id="user_password" value="{{ old('user_password') }}" placeholder="新しいパスワードを入力" data-parsley-errors-messages-disabled="true" data-parsley-class-handler="#password-handler" data-parsley-id="10" class="form-group-tag form-group-tag-tel-sms" autocomplete="off" />
                        {!! $errors->first('user_password', '<span class="error-text">:message</span>') !!}
                        @if(!is_null(Session::get('error-user-password')))
                            <span class="error-text">{!! Session::get('error-user-password') !!}.</span>    
                        @endif
                    </div>
                    <div class="form-group form-group-default row">
                        <i class="icon icon-password"></i>
                        <input type="password" name="user_password_confirm" id="user_password_confirmation" value="{{old('user_password_confirm')}}" placeholder="新しいパスワードを再入力" data-parsley-errors-messages-disabled="true" data-parsley-class-handler="#password-handler" data-parsley-id="10" class="form-group-tag form-group-tag-tel-sms" autocomplete="off" />
                        {!! $errors->first('user_password_confirm', '<span class="error-text">:message</span>') !!}
                    </div>
                </div>
            </form>
        </div>
    </section>
    @include('customer/footer')
</div>
@stop