@extends('layouts.master')
@section('title', 'Peach Garden')
@section('content')
<div class="wrap-container">
    <section class="page page-setting page-birthday-edit">
        <div class="header-tabs">
            <ul>
                <li class="header-tabs-item header-tabs-item-with-arrow">
                    <a class="header-tabs-back" href="/users/me/profile/edit-basic-profile"></a>
                    <h3> 年齢を編集 </h3>
                    <!-- <a class="step-arrow step-arrow-right step-arrow-save" href="javascript:$('form').submit();">
                        <span class="step-text">保存</span>
                    </a> -->
                </li>
            </ul>
        </div>
        <form class="edit_user_profile" id="edit_user_profile" action="{{ route('users.profile.birthday.edit') }}" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            
            <section class="input-section age-edit">
                <h3>現在の生年月日</h3>
                <div class="input-area">
                    <p class="input-ttl">{{Auth::user()->year_birth}}/{{Auth::user()->month_birth}}/{{Auth::user()->day_birth}}</p>
                    <div class="input-box select-box">
                        <p class="status-txt age-birth">...</p>
                    </div>
                </div>
            </section>
            <section class="input-section input-age-edit">
                <h3>新しい生年月日</h3>
                <div class="input-area">
                    <p class="input-ttl">
                        <input value="{{ old('new_birthday' )}}" type="date" name="new_birthday" id="new_birthday" />
                        
                    </p>
                    <div class="input-box select-box">
                        <p class="status-txt new-age"> ... </p>
                    </div>
                    {!! $errors->first('new_birthday', '<span class="error-text">:message</span>') !!}
                </div>
            </section>
            <div class="change-age-area">
                <div class="change-btn">
                    <a onclick="$(this).closest('form').submit()"> 変更する </a>
                </div>
                <p>※生年月日の変更は、年齢確認前のみ行うことが可能<br>です。年齢確認後は、行うことができません。</p>
                <p>※生年月日の変更は、1回しかおこなうことができないので、ご注意ください。</p>
            </div>
        </form>
    </section>
    @include('customer/footer')
</div>
@stop
@section('script')
    @parent
    <script>
        $(document).ready(function () {
            var yourBirthDay = {
                year: parseInt('{{ Auth::user()->year_birth }}'),
                month: parseInt('{{ Auth::user()->month_birth }}'),
                date: parseInt('{{ Auth::user()->day_birth }}')
            };
            var birthDate = new Date(yourBirthDay.year, yourBirthDay.month - 1, yourBirthDay.date);
            var yearBirth = birthDate.getFullYear().toString().padStart(4, '0');
            var monthBirth = (birthDate.getMonth() + 1).toString().padStart(2, '0');
            var dataBirth = birthDate.getDate().toString().padStart(2, '0');

            var today = new Date();
            var yearToDay = today.getFullYear().toString().padStart(4, '0');
            var monthToDay = (today.getMonth() + 1).toString().padStart(2, '0');
            var dayToDay = today.getDate().toString().padStart(2, '0');

            var age = yearToDay - yearBirth;

            if (monthToDay < monthBirth || (monthBirth == monthToDay && dataBirth > dayToDay)) {
                age--;
            }
            if( age < 0){
                $('p.age-birth').html(0 + '歳');
            }else{
                $('p.age-birth').html(age + '歳');
            }
            
            $('#new_birthday').change(function (e) {
                var date = $(e.target).val().split('-');
                console.log(date);
                var yourBirthDay = {
                    year: parseInt(date[0]),
                    month: parseInt(date[1]),
                    date: parseInt(date[2])
                };
                var birthDate = new Date(yourBirthDay.year, yourBirthDay.month - 1, yourBirthDay.date);
                var yearBirth = birthDate.getFullYear().toString().padStart(4, '0');
                var monthBirth = (birthDate.getMonth() + 1).toString().padStart(2, '0');
                var dataBirth = birthDate.getDate().toString().padStart(2, '0');

                var today = new Date();
                var yearToDay = today.getFullYear().toString().padStart(4, '0');
                var monthToDay = (today.getMonth() + 1).toString().padStart(2, '0');
                var dayToDay = today.getDate().toString().padStart(2, '0');

                var age = yearToDay - yearBirth;

                if (monthToDay < monthBirth || (monthBirth == monthToDay && dataBirth > dayToDay)) {
                    age--;
                }
                if( age < 0){
                    $('p.new-age').html(0 + '歳');
                }else{
                    $('p.new-age').html(age + '歳');
                }
            });
        });
    </script>
@stop