@extends('layouts.master')
@section('title', 'Peach Garden')
@section('content')
<div class="wrap-container">
    <section class="page page-setting page-select-personality">
        <div class="header-tabs">
            <ul>
                <li class="header-tabs-item header-tabs-item-with-arrow">
                    <a class="header-tabs-back" href="/users/me/profile/edit-other-profile"></a>
                    <h3> プロフィール編集 </h3>
                </li>
            </ul>
        </div>
        <form class="edit_user_profile" id="edit_user_profile" action="{{ route('users.profile.select.personality' )}}" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="profile-menu-suboptions">
                <ul class="profile-menu-suboptions-list">
                    <li class="profile-menu-suboptions-item">
                        <a onclick="$(this).closest('form').submit()">保存</a>
                    </li>
                    <li class="profile-menu-suboptions-item profile-menu-suboptions-item-bold">
                        <span>性格・タイプを選択</span>
                    </li>
                    <li class="profile-menu-suboptions-item">
                        <a href="/users/me/profile/edit-other-profile">キャンセル</a>
                    </li>
                </ul>
            </div>

            <input type="hidden" name="personality_list" id="personality-selected" value="" />
            {!! $errors->first('personality_list', '<span class="error-text">:message</span>') !!}
            <div class="profile-menu-list">
                <ul>
                    <li class="profile-menu-item">
                        <a 
                            class="profile-menu-link" 
                            onclick="selectPersonality(this, '選択しない')">
                            選択しない
                        </a>
                    </li>
                    <li class="profile-menu-item">
                        <a 
                            class="profile-menu-link" 
                            onclick="selectPersonality(this, '優しい')">
                            優しい
                        </a>
                    </li>
                    <li class="profile-menu-item">
                        <a 
                            class="profile-menu-link" 
                            onclick="selectPersonality(this, '素直')">
                            素直
                        </a>
                    </li>
                    <li class="profile-menu-item">
                        <a 
                            class="profile-menu-link" 
                            onclick="selectPersonality(this, '決断力がある')">
                            決断力がある
                        </a>
                    </li>
                    <li class="profile-menu-item">
                        <a 
                            class="profile-menu-link" 
                            onclick="selectPersonality(this, '穏やか')">
                            穏やか
                        </a>
                    </li>
                    <li class="profile-menu-item">
                        <a 
                            class="profile-menu-link" 
                            onclick="selectPersonality(this, '親しみやすい')">
                            親しみやすい
                        </a>
                    </li>
                    <li class="profile-menu-item">
                        <a 
                            class="profile-menu-link" 
                            onclick="selectPersonality(this, '明るい')">
                            明るい
                        </a>
                    </li>
                    <li class="profile-menu-item">
                        <a 
                            class="profile-menu-link" 
                            onclick="selectPersonality(this, 'インドア')">
                            インドア
                        </a>
                    </li>
                    <li class="profile-menu-item">
                        <a 
                            class="profile-menu-link" 
                            onclick="selectPersonality(this, 'アウトドア')">
                            アウトドア
                        </a>
                    </li>
                    <li class="profile-menu-item">
                        <a 
                            class="profile-menu-link" 
                            onclick="selectPersonality(this, '真面目')">
                            真面目
                        </a>
                    </li>
                    <li class="profile-menu-item">
                        <a 
                            class="profile-menu-link" 
                            onclick="selectPersonality(this, '知的')">
                            知的
                        </a>
                    </li>
                    <li class="profile-menu-item">
                        <a 
                            class="profile-menu-link" 
                            onclick="selectPersonality(this, '誠実')">
                            誠実
                        </a>
                    </li>
                    <li class="profile-menu-item">
                        <a 
                            class="profile-menu-link" 
                            onclick="selectPersonality(this, '几帳面')">
                            几帳面
                        </a>
                    </li>
                    <li class="profile-menu-item">
                        <a 
                            class="profile-menu-link" 
                            onclick="selectPersonality(this, '楽観的')">
                            楽観的
                        </a>
                    </li>
                    <li class="profile-menu-item">
                        <a 
                            class="profile-menu-link" 
                            onclick="selectPersonality(this, '照れ屋')">
                            照れ屋
                        </a>
                    </li>
                    <li class="profile-menu-item">
                        <a 
                            class="profile-menu-link" 
                            onclick="selectPersonality(this, '落ち着いている')">
                            落ち着いている
                        </a>
                    </li>
                    <li class="profile-menu-item">
                        <a 
                            class="profile-menu-link" 
                            onclick="selectPersonality(this, '思いやりがある')">
                            思いやりがある
                        </a>
                    </li>
                    <li class="profile-menu-item">
                        <a 
                            class="profile-menu-link" 
                            onclick="selectPersonality(this, '社交的')">
                            社交的
                        </a>
                    </li>
                    <li class="profile-menu-item">
                        <a 
                            class="profile-menu-link" 
                            onclick="selectPersonality(this, '冷静沈着')">
                            冷静沈着
                        </a>
                    </li>
                    <li class="profile-menu-item">
                        <a 
                            class="profile-menu-link" 
                            onclick="selectPersonality(this, '好奇心旺盛')">
                            好奇心旺盛
                        </a>
                    </li>
                    <li class="profile-menu-item">
                        <a 
                            class="profile-menu-link" 
                            onclick="selectPersonality(this, '仕事好き')">
                            仕事好き
                        </a>
                    </li>
                    <li class="profile-menu-item">
                        <a 
                            class="profile-menu-link" 
                            onclick="selectPersonality(this, '責任感がある')">
                            責任感がある
                        </a>
                    </li>
                    <li class="profile-menu-item">
                        <a 
                            class="profile-menu-link" 
                            onclick="selectPersonality(this, '面倒見がいい')">
                            面倒見がいい
                        </a>
                    </li>
                    <li class="profile-menu-item">
                        <a 
                            class="profile-menu-link" 
                            onclick="selectPersonality(this, '話し上手')">
                            話し上手
                        </a>
                    </li>
                    <li class="profile-menu-item">
                        <a 
                            class="profile-menu-link" 
                            onclick="selectPersonality(this, 'さわやか')">
                            さわやか
                        </a>
                    </li>
                    <li class="profile-menu-item">
                        <a 
                            class="profile-menu-link" 
                            onclick="selectPersonality(this, '行動的')">
                            行動的
                        </a>
                    </li>
                    <li class="profile-menu-item">
                        <a 
                            class="profile-menu-link" 
                            onclick="selectPersonality(this, '負けず嫌い')">
                            負けず嫌い
                        </a>
                    </li>
                    <li class="profile-menu-item">
                        <a 
                            class="profile-menu-link" 
                            onclick="selectPersonality(this, '面白い')">
                            面白い
                        </a>
                    </li>
                    <li class="profile-menu-item">
                        <a 
                            class="profile-menu-link" 
                            onclick="selectPersonality(this, '気が利く')">
                            気が利く
                        </a>
                    </li>
                    <li class="profile-menu-item">
                        <a 
                            class="profile-menu-link" 
                            onclick="selectPersonality(this, 'マメ')">
                            マメ
                        </a>
                    </li>
                    <li class="profile-menu-item">
                        <a 
                            class="profile-menu-link" 
                            onclick="selectPersonality(this, '寛容')">
                            寛容
                        </a>
                    </li>
                    <li class="profile-menu-item">
                        <a 
                            class="profile-menu-link" 
                            onclick="selectPersonality(this, '天然と言われる')">
                            天然と言われる
                        </a>
                    </li>
                    <li class="profile-menu-item">
                        <a 
                            class="profile-menu-link" 
                            onclick="selectPersonality(this, '裏表がない')">
                            裏表がない
                        </a>
                    </li>
                    <li class="profile-menu-item">
                        <a 
                            class="profile-menu-link" 
                            onclick="selectPersonality(this, 'マイペース')">
                            マイペース
                        </a>
                    </li>
                    <li class="profile-menu-item">
                        <a 
                            class="profile-menu-link" 
                            onclick="selectPersonality(this, '奥手')">
                            奥手
                        </a>
                    </li>
                    <li class="profile-menu-item">
                        <a 
                            class="profile-menu-link" 
                            onclick="selectPersonality(this, '気分屋')">
                            気分屋
                        </a>
                    </li>
                </ul>
                </div>
        </form>
    </section>
    @include('customer/footer')
</div>
@stop
@section('script')
    @parent
    <script type="text/javascript">
        // Edit value personality
        var dataPersonnality = '{{$data[0]->personality}}';
        var data;
        if(dataPersonnality != ''){
            $('#personality-selected').val(dataPersonnality);
            data = dataPersonnality.split(', ');
            console.log(data);
            $listMenu = $('.profile-menu-link');
            data.map(function(el) {
                $listMenu.map(function(item) {
                    if(el == $listMenu[item].innerText ){
                        $itemSelected = $listMenu[item];
                        $itemSelected.setAttribute('class', 'profile-menu-link profile-menu-link-check');
                    }   
                });
            });
        }
        else{
            data = [];
        }
        
        // Nodata
        var arrPersonalitySelected = data;
        var selectPersonality = function(e, value) {
            var selected = arrPersonalitySelected.includes(value);
            if(selected){
                $(e).removeClass('profile-menu-link-check');
                var indexValue = arrPersonalitySelected.indexOf(value);
                arrPersonalitySelected.splice(indexValue, 1);
            }else{
                arrPersonalitySelected.push(value);
                $(e).addClass('profile-menu-link-check');
            }
            $('#personality-selected').val(arrPersonalitySelected.join(', '));
        }
    </script>
@stop