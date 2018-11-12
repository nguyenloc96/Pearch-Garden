@extends('layouts.master')
@section('title', 'Peach Garden')
@section('style')
    @parent
    <link href="{!! asset('assets/bootstrap-jquery/css/asRange.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('assets/bootstrap-jquery/css/select2.min.css') !!}" rel="stylesheet">
@stop
@section('content')
<div class="wrap-container">
    <div class="header-tabs">
        <ul>
            <li class="header-tabs-item header-tabs-item-with-arrow">
                <a class="header-tabs-back" href="javascript:history.back();"></a>
                <h3>検索条件</h3>
            </li>
        </ul>
    </div>
    <div class="find-wrap">
        <form class="user-search" id="user-search" action="{!! route('user.search') !!}" method="POST" enctype= "multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="find-condition-wrap">
                <div class="today-see-user">
                    <p>今日会えるお相手</p>
                    <div class="switch">
                        <label class="switch-label">
                            <input type="checkbox" name="meet_at_today_present" id="meet_check" value="1" class="switch-input input-checkbox" />
                            <span class="switch-content"></span>
                            <span class="switch-circle"></span>
                        </label>
                    </div>
                </div>
                <section class="input-section">
                    <h3>写真</h3>
                    <div class="input-area">
                        <p class="input-ttl">メイン写真</p>
                        <div class="input-box">
                            <input type="radio" name="profile_images_count_present" id="profile_images_count_present1" value="0" class="input-radio" />
                            <label for="profile_images_count_present1">未登録</label>
                            <input type="radio" name="profile_images_count_present" id="profile_images_count_present2" value="1" class="input-radio" />
                            <label for="profile_images_count_present2">登録済</label>
                        </div>
                    </div>
                    <div class="input-area">
                        <p class="input-ttl">サブ写真</p>
                        <div class="input-box">
                            <input type="radio" name="profile_sub_images_count_present" id="profile_sub_images_count_present1" value="0" class="input-radio" />
                            <label for="profile_sub_images_count_present1">未登録</label>
                            <input type="radio" name="profile_sub_images_count_present" id="profile_sub_images_count_present2" value="1" class="input-radio" />
                            <label for="profile_sub_images_count_present2">登録済</label>
                        </div>
                    </div>
                </section>
                <section class="input-section">
                    <h3>基本プロフィール</h3>
                    <div class="input-area">
                        <p class="input-ttl">年齢</p>
                        <div class="input-box select-box">
                            <div class="example">
                                <input 
                                    type="text" 
                                    name="age_range" 
                                    id="age_range" 
                                    value="18,100" 
                                    class="range-example-input-2" 
                                    min="18" max="100" 
                                    step="1" 
                                    style="display: none;"
                                />
                            </div>
                        </div>
                    </div>
                    <div class="input-area">
                        <p class="input-ttl">居住地</p>
                        <div class="input-area-sub select-box">
                            <select 
                                name="prof_address" 
                                id="prof_address" 
                                multiple="multiple" 
                                class="js-example-basic-multiple" 
                                tabindex="-1" aria-hidden="true"
                            >
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
                    </div>
                    <div class="input-area">
                        <p class="input-ttl">身長</p>
                        <div class="input-box select-box">
                            <div class="example">
                                <input 
                                    type="text" 
                                    name="height_range" 
                                    id="height_range" 
                                    value="130,200" 
                                    class="range-example-input-2" 
                                    min="130" max="200" step="1" 
                                    style="display: none;" 
                                />
                            </div>
                        </div>
                    </div>
                    <div class="input-area">
                        <p class="input-ttl">体型</p>
                        <div class="select-box" style="position: static;" >
                            <select name="prof_figure" id="prof_figure" multiple="multiple" class="js-example-basic-multiple">
                                <option value="非公開">非公開</option>
                                <option value="スリム">スリム</option>
                                <option value="やや細め">やや細め</option>
                                <option value="普通">普通</option>
                                <option value="グラマー">グラマー</option>
                                <option value="筋肉質">筋肉質</option>
                                <option value="ややぽっちゃり">ややぽっちゃり</option>
                                <option value="太め">太め</option>
                            </select>
                        </div>
                    </div>
                    <div class="input-area">
                        <p class="input-ttl">出身地</p>
                        <div class="select-box" style="position: static;" >
                            <select name="prof_birth_place" id="prof_birth_place" multiple="multiple" class="js-example-basic-multiple">
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
                    </div>
                    <div class="input-area">
                        <p class="input-ttl">子供の有無</p>
                        <div class="select-box" style="position: static;" >
                            <select name="prof_have_child" id="prof_have_child" multiple="multiple" class="js-example-basic-multiple">
                                <option value="非公開">非公開</option>
                                <option value="なし">なし</option>
                                <option value="1人">1人</option>
                                <option value="2人">2人</option>
                                <option value="3人以上">3人以上</option>
                            </select>
                        </div>
                    </div>
                </section>
                <section class="input-section">
                    <h3>性格・プライベート</h3>
                    <div class="input-area">
                        <p class="input-ttl">性格・タイプ</p>
                        <div class="select-box" style="position: static;" >
                            <select name="personality_list" id="personality_list" multiple="multiple" class="js-example-basic-multiple">
                                <option value="選択しない">選択しない</option>
                                <option value="優しい">優しい</option>
                                <option value="素直">素直</option>
                                <option value="決断力がある">決断力がある</option>
                                <option value="穏やか">穏やか</option>
                                <option value="親しみやすい">親しみやすい</option>
                                <option value="明るい">明るい</option>
                                <option value="インドア">インドア</option>
                                <option value="アウトドア">アウトドア</option>
                                <option value="真面目">真面目</option>
                                <option value="知的">知的</option>
                                <option value="誠実">誠実</option>
                                <option value="几帳面">几帳面</option>
                                <option value="楽観的">楽観的</option>
                                <option value="照れ屋">照れ屋</option>
                                <option value="いつも笑顔">いつも笑顔</option>
                                <option value="落ち着いている">落ち着いている</option>
                                <option value="思いやりがある">思いやりがある</option>
                                <option value="社交的">社交的</option>
                                <option value="冷静沈着">冷静沈着</option>
                                <option value="好奇心旺盛">好奇心旺盛</option>
                                <option value="仕事好き">仕事好き</option>
                                <option value="責任感がある">責任感がある</option>
                                <option value="面倒見がいい">面倒見がいい</option>
                                <option value="話し上手">話し上手</option>
                                <option value="さわやか">さわやか</option>
                                <option value="行動的">行動的</option>
                                <option value="負けず嫌い">負けず嫌い</option>
                                <option value="面白い">面白い</option>
                                <option value="気が利く">気が利く</option>
                                <option value="マメ">マメ</option>
                                <option value="寛容">寛容</option>
                                <option value="天然と言われる">天然と言われる</option>
                                <option value="裏表がない">裏表がない</option>
                                <option value="マイペース">マイペース</option>
                                <option value="奥手">奥手</option>
                                <option value="気分屋">気分屋</option>
                            </select>
                        </div>
                    </div>
                    <div class="input-area">
                        <p class="input-ttl">お酒</p>
                        <div class="select-box" style="position: static;" >
                            <select name="prof_drinking_habit" id="prof_drinking_habit" multiple="multiple" class="js-example-basic-multiple">
                                <option value="選択しない">選択しない</option>
                                <option value="飲まない">飲まない</option>
                                <option value="飲む">飲む</option>
                                <option value="ときどき飲む">ときどき飲む</option>
                            </select>
                        </div>
                    </div>
                    <div class="input-area">
                        <p class="input-ttl">タバコ</p>
                        <div class="select-box" style="position: static;" >
                            <select name="prof_smoking_habit" id="prof_smoking_habit" multiple="multiple" class="js-example-basic-multiple">
                                <option value="選択しない">選択しない</option>
                                <option value="吸わない">吸わない</option>
                                <option value="吸う">吸う</option>
                                <option value="ときどき吸う">ときどき吸う</option>
                                <option value="非喫煙者の前では吸わない">非喫煙者の前では吸わない</option>
                                <option value="相手が嫌ならやめる">相手が嫌ならやめる</option>
                            </select>
                        </div>
                    </div>
                    <div class="input-area">
                        <p class="input-ttl">休日</p>
                        <div class="select-box" style="position: static;" >
                            <select name="prof_holiday" id="prof_holiday" multiple="multiple" class="js-example-basic-multiple">
                                <option value="非公開">非公開</option>
                                <option value="土日">土日</option>
                                <option value="平日">平日</option>
                                <option value="不定期">不定期</option>
                            </select>
                        </div>
                    </div>
                </section>
                <section class="input-section">
                    <h3>職業</h3>
                    <div class="input-area">
                        <p class="input-ttl">職業</p>
                        <div class="select-box" style="position: static;" >
                            <select name="prof_job" id="prof_job" multiple="multiple" class="js-example-basic-multiple">
                                <option value="経営者・役員">経営者・役員</option>
                                <option value="会社員">会社員</option>
                                <option value="学生">学生</option>
                                <option value="IT関連">IT関連</option>
                                <option value="医師">医師</option>
                                <option value="大手企業">大手企業</option>
                                <option value="コンサル">コンサル</option>
                                <option value="美容関係">美容関係</option>
                                <option value="接客業">接客業</option>
                                <option value="アパレル・ショップ">アパレル・ショップ</option>
                                <option value="クリエイター">クリエイター</option>
                                <option value="公務員">公務員</option>
                                <option value="金融">金融</option>
                                <option value="事務員">事務員</option>
                                <option value="看護師">看護師</option>
                                <option value="福祉・介護">福祉・介護</option>
                                <option value="受付">受付</option>
                                <option value="保育士">保育士</option>
                                <option value="不動産">不動産</option>
                                <option value="広告">広告</option>
                                <option value="フリーター">フリーター</option>
                                <option value="エンターテインメント">エンターテインメント</option>
                                <option value="WEB業界">WEB業界</option>
                                <option value="外資金融">外資金融</option>
                                <option value="大手外資">大手外資</option>
                                <option value="上場企業">上場企業</option>
                                <option value="芸能・モデル">芸能・モデル</option>
                                <option value="調理師・栄養士">調理師・栄養士</option>
                                <option value="教育関連">教育関連</option>
                                <option value="食品関連">食品関連</option>
                                <option value="大手商社">大手商社</option>
                                <option value="マスコミ">マスコミ</option>
                                <option value="イベントコンパニオン">イベントコンパニオン</option>
                                <option value="秘書">秘書</option>
                                <option value="旅行関係">旅行関係</option>
                                <option value="公認会計士">公認会計士</option>
                                <option value="弁護士">弁護士</option>
                                <option value="製薬">製薬</option>
                                <option value="ブライダル">ブライダル</option>
                                <option value="保険">保険</option>
                                <option value="客室乗務員">客室乗務員</option>
                                <option value="非公開">非公開</option>
                            </select>
                        </div>
                    </div>
                </section>
                <section class="input-section">
                    <h3>出会うまでの希望</h3>
                    <div class="input-area">
                        <p class="input-ttl">出会うまでの希望</p>
                        <div class="select-box" style="position: static;" >
                            <select name="prof_request_until_meet" id="uprof_request_until_meet" multiple="multiple" class="js-example-basic-multiple">
                                <option value="マッチング後にまずは会いたい">マッチング後にまずは会いたい</option>
                                <option value="気が合えば会いたい">気が合えば会いたい</option>
                                <option value="条件が合えば会いたい">条件が合えば会いたい</option>
                                <option value="メッセージ交換を重ねてから会いたい">メッセージ交換を重ねてから会いたい</option>
                                <option value="その他">その他</option>
                            </select>
                        </div>
                    </div>
                </section>
                <section class="input-section">
                    <h3>その他プロフィール</h3>
                    <div class="input-area">
                        <p class="input-ttl">好きなこと・趣味</p>
                        <div class="input-box">
                            <input type="radio" name="user_profile_hobby_present" id="user_profile_hobby_present1" value="0" class="input-radio" />
                            <label for="user_profile_hobby_present1">記載なし</label>
                            <input type="radio" name="user_profile_hobby_present" id="user_profile_hobby_present2" value="1" class="input-radio" />
                            <label for="user_profile_hobby_present2">記載あり</label> 
                        </div>
                    </div>
                    <div class="input-area">
                        <p class="input-ttl">将来の夢</p>
                        <div class="input-box">
                            <input type="radio" name="user_profile_dream_present" id="user_profile_dream_present1" value="0" class="input-radio" />
                            <label for="user_profile_dream_present1">記載なし</label>
                            <input type="radio" name="user_profile_dream_present" id="user_profile_dream_present2" value="1" class="input-radio" />
                            <label for="user_profile_dream_present2">記載あり</label> 
                        </div>
                    </div>
                    <div class="input-area">
                        <p class="input-ttl">初デートで行きたい場所</p>
                        <div class="input-box">
                            <input type="radio" name="user_profile_date_place_present" id="user_profile_date_place_present1" value="0" class="input-radio" />
                            <label for="user_profile_date_place_present1">記載なし</label>
                            <input type="radio" name="user_profile_date_place_present" id="user_profile_date_place_present2" value="1" class="input-radio" />
                            <label for="user_profile_date_place_present2">記載あり</label> 
                        </div>
                    </div>
                </section>
                <section class="input-section">
                    <h3>その他項目</h3>
                    <div class="input-area">
                        <p class="input-ttl">人気会員</p>
                        <div class="switch">
                        <label class="switch-label">
                            <input type="checkbox" name="popular_member_true" id="popular_member_true" value="1" class="switch-input" />
                            <span class="switch-content"></span>
                            <span class="switch-circle"></span>
                        </label>
                        </div>
                    </div>
                    <div class="input-area">
                        <p class="input-ttl">プレミアム会員</p>
                        <div class="switch">
                        <label class="switch-label">
                            <input type="checkbox" name="premium_member_true" id="premium_member_true" value="1" class="switch-input" />
                            <span class="switch-content"></span>
                            <span class="switch-circle"></span>
                        </label>
                        </div>
                    </div>
                    <div class="input-area">
                        <p class="input-ttl">現在オンライン</p>
                        <div class="switch">
                        <label class="switch-label">
                            <input type="checkbox" name="online_true" id="online_true" value="1" class="switch-input" />
                            <span class="switch-content"></span>
                            <span class="switch-circle"></span>
                        </label>
                        </div>
                    </div>
                    <div class="input-area">
                        <p class="input-ttl">登録日が3日以内</p>
                        <div class="switch">
                        <label class="switch-label">
                            <input type="checkbox" name="just_started_true" id="just_started_true" value="1" class="switch-input" />
                            <span class="switch-content"></span>
                            <span class="switch-circle"></span>
                        </label>
                        </div>
                    </div>
                    <div class="form-btn">
                        <div class="clear-btn">
                            <input type="button" class="reset" value="条件をリセット">
                        </div>
                        <div class="submit-btn">
                            <input type="submit" value="この条件で検索">
                        </div>
                    </div>
                </section>
            </div>
        </form>
    </div>
    @include('customer/footer')
</div>
@stop
@section('script')
    @parent
    <script src="{!! asset('assets/bootstrap-jquery/js/jquery-asRange.min.js') !!}"></script>
    <script src="{!! asset('assets/bootstrap-jquery/js/select2.min.js') !!}"></script>
    <script>
        $(document).ready(function() {
            $(".range-example-input-2").asRange({
                range: true,
                limit: false
            });
            // var $basicSingle = $(".js-example-basic-single");
            var $basicMultiple = $(".js-example-basic-multiple");
            $.fn.select2.defaults.set("width", "100%");
            $basicMultiple.select2();

            $('input.reset').click(function(){
                $('.range-example-input-2').each(function () {
                    var min = $(this).prop('min');
                    var max = $(this).prop('max');
                    $(this).asRange('set', [min,max]);
                });
                $('input.input-text').val('');
                $('select').val('').trigger('change');
                $('input.input-radio').prop('checked', false);
                $('input.switch-input').prop('checked', false);
                $('html, body').stop().animate({
                    scrollTop: 0
                }, 1000);
            });
        });
    </script>
@stop