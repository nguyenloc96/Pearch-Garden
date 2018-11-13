@extends('layouts.master')
@section('title', 'Sweet Honeys')
@section('style')
    @parent
    <link href="{!! asset('assets/css/sign-up.css') !!}" rel="stylesheet">
    <style>
        .page-signup-flow .flow-bar-list:first-child {
            background: #72c7a1;
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
                    <p>はじめに、性別と生年月日を選択。</p>
                </div>
            </section>
            <!- End SignUp Head ->
            <section class="page-body page-signup-body">
                <div class="page-signup-body-input">
                    <form method="POST" action="{!! route('sign-up-step-1') !!}" class="new-user-create-temp" id="new-user-create-temp" enctype= "multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="input-box input-box-sex" id="input-box-sex">
                            <i class="fa fa-apple"></i>
                            <input id="user-profile-sex-male" type="radio" value="1" name="user_create_temp_sex" />
                            <label for="user-profile-sex-male">男性</label>
                            <input id="user-profile-sex-female" type="radio" value="0" name="user_create_temp_sex" />
                            <label for="user-profile-sex-female">女性</label>
                        </div>
                        <div class="input-box input-box-birth">
                            <i class="fa fa-calendar"></i>
                            <select name="user_create_temp_year" id="user-create-temp-year">
                                <option value="1930">1930年</option>
                                <option value="1931">1931年</option>
                                <option value="1932">1932年</option>
                                <option value="1933">1933年</option>
                                <option value="1934">1934年</option>
                                <option value="1935">1935年</option>
                                <option value="1936">1936年</option>
                                <option value="1937">1937年</option>
                                <option value="1938">1938年</option>
                                <option value="1939">1939年</option>
                                <option value="1940">1940年</option>
                                <option value="1941">1941年</option>
                                <option value="1942">1942年</option>
                                <option value="1943">1943年</option>
                                <option value="1944">1944年</option>
                                <option value="1945">1945年</option>
                                <option value="1946">1946年</option>
                                <option value="1947">1947年</option>
                                <option value="1948">1948年</option>
                                <option value="1949">1949年</option>
                                <option value="1950">1950年</option>
                                <option value="1951">1951年</option>
                                <option value="1952">1952年</option>
                                <option value="1953">1953年</option>
                                <option value="1954">1954年</option>
                                <option value="1955">1955年</option>
                                <option value="1956">1956年</option>
                                <option value="1957">1957年</option>
                                <option value="1958">1958年</option>
                                <option value="1959">1959年</option>
                                <option value="1960">1960年</option>
                                <option value="1961">1961年</option>
                                <option value="1962">1962年</option>
                                <option value="1963">1963年</option>
                                <option value="1964">1964年</option>
                                <option value="1965">1965年</option>
                                <option value="1966">1966年</option>
                                <option value="1967">1967年</option>
                                <option value="1968">1968年</option>
                                <option value="1969">1969年</option>
                                <option value="1970">1970年</option>
                                <option value="1971">1971年</option>
                                <option value="1972">1972年</option>
                                <option value="1973">1973年</option>
                                <option value="1974">1974年</option>
                                <option value="1975">1975年</option>
                                <option value="1976">1976年</option>
                                <option value="1977">1977年</option>
                                <option value="1978">1978年</option>
                                <option value="1979">1979年</option>
                                <option value="1980">1980年</option>
                                <option value="1981">1981年</option>
                                <option value="1982">1982年</option>
                                <option value="1983">1983年</option>
                                <option value="1984">1984年</option>
                                <option value="1985">1985年</option>
                                <option value="1986">1986年</option>
                                <option value="1987">1987年</option>
                                <option value="1988">1988年</option>
                                <option value="1989">1989年</option>
                                <option value="1990">1990年</option>
                                <option value="1991">1991年</option>
                                <option value="1992">1992年</option>
                                <option value="1993">1993年</option>
                                <option value="1994">1994年</option>
                                <option selected="selected" value="1995">1995年</option>
                                <option value="1996">1996年</option>
                                <option value="1997">1997年</option>
                                <option value="1998">1998年</option>
                                <option value="1999">1999年</option>
                                <option value="2000">2000年</option>
                                <option value="2001">2001年</option>
                            </select>
                            <select name="user_create_temp_month" id="user-create-temp-month"><option value="1">1月</option>
                                <option value="2">2月</option>
                                <option value="3">3月</option>
                                <option value="4">4月</option>
                                <option value="5">5月</option>
                                <option value="6">6月</option>
                                <option value="7">7月</option>
                                <option value="8">8月</option>
                                <option value="9">9月</option>
                                <option value="10">10月</option>
                                <option value="11">11月</option>
                                <option value="12">12月</option>
                            </select>
                            <select name="user_create_temp_day" id="user-create-temp-day"><option value="1">1日</option>
                                <option value="2">2日</option>
                                <option value="3">3日</option>
                                <option value="4">4日</option>
                                <option value="5">5日</option>
                                <option value="6">6日</option>
                                <option value="7">7日</option>
                                <option value="8">8日</option>
                                <option value="9">9日</option>
                                <option value="10">10日</option>
                                <option value="11">11日</option>
                                <option value="12">12日</option>
                                <option value="13">13日</option>
                                <option value="14">14日</option>
                                <option value="15">15日</option>
                                <option value="16">16日</option>
                                <option value="17">17日</option>
                                <option value="18">18日</option>
                                <option value="19">19日</option>
                                <option value="20">20日</option>
                                <option value="21">21日</option>
                                <option value="22">22日</option>
                                <option value="23">23日</option>
                                <option value="24">24日</option>
                                <option value="25">25日</option>
                                <option value="26">26日</option>
                                <option value="27">27日</option>
                                <option value="28">28日</option>
                                <option value="29">29日</option>
                                <option value="30">30日</option>
                                <option value="31">31日</option>
                            </select>
                            <p class="error-text">生年月日は非公開です。正しくない場合ご利用いただけません。</p>

                            <div class="input-box input-box-highschool">
                                <label>
                                    <input name="user_create_temp_student" type="hidden" value="0" />
                                    <input class="checkbox" type="checkbox" value="1" name="user_create_temp_student" id="user-create-temp-not-high-school-student" />
                                    <span class="checkbox-icon"></span>
                                        私は高校生ではありません。
                                </label>
                                <p>
                                    ※Sweet Honeysでは、18歳以上の場合でも<br>
                                    高校生の方のご利用はお断りしております。
                                </p>
                            </div>
                        </div>
                        <div class="submit">
                            <input type="submit" name="commit" value="次へ" disabled="disabled" data-disable-with="次へ" />
                        </div>
                    </form>      
                </div>
            </section>
            <!- End SignUp Body ->
            <section class="page-ftr page-signup-ftr">
                <div class="page-signup-ftr-signup">
                    <p> アカウントをお持ちのかたは <a href="/sweethoneys/sign-in"> ログイン </a> </p>
                </div>
            </section>
        </div>
    </section>
    @include('customer/footer')
</div>
@endsection
@section('script')
    @parent
    <script src="{!! asset('assets/js/sign-up.js') !!}"></script>
@endsection
