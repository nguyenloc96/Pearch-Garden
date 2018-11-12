@extends('layouts.master')
@section('title', 'Sweet Honeys')
@section('style')
    @parent
    <link href="{!! asset('assets/css/sign-up.css') !!}" rel="stylesheet">
    <style>
        .page-signup-flow .flow-bar-list {
            background: #72c7a1;
        }
        .page-signup-body-input .input-box:last-child {
            margin-bottom: 0;
            margin-top: 10px;
        }
        .input-box.input-box-clm {
            position: relative;
        }
        .page-signup-body-input .input-box {
            margin-bottom: 20px;
        }
        .page-signup-body-input .input-box-tel select {
            /* width: 20%; */
            display: inline-block;
            vertical-align: middle;
            margin-right: 7px;
            padding: 16px 6px;
        }
        .page-signup-body-input .input-box select {
            width: 100%;
            border: 1px solid #e0e0e0;
            padding: 16px 14px;
            background: 0;
        }
        .page-signup-body-input .input-box-tel input[type=tel] {
            margin-top: 10px;
            width: 100%;
            display: inline-block;
            vertical-align: middle;
            margin-bottom: 0;
            border: 1px solid #e0e0e0;
            background: #fff;
            padding: 16px 14px;
            border-radius: 3px;
        }
        .input-box.input-box-clm input:focus, select:focus{
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
                    <p> 最後に、電話番号を入力。</p>
                </div>
            </section>
            <section class="page-body page-signup-body">
                <div class="page-signup-body-input">
                    <form method="POST" action="{!! route('sign-up-step-4', $id) !!}" class="new-user-create-temp" id="new-user-create-temp" enctype= "multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="input-box input-box-clm input-box-focus input-box-tel">
                            <select name="user_create_temp_itu_code" id="user-create-temp-itu-code">
                                <option value="Iceland 354">アイスランド Iceland (+354)</option>
                                <option value="Ireland 353">アイルランド Ireland (+353)</option>
                                <option value="Azerbaidjan 994">アゼルバイジャン Azerbaidjan (+994)</option>
                                <option value="Ascension 247">アセンション島 Ascension (+247)</option>
                                <option value="Islands 351">アゾレス諸島 Azores Islands (+351)</option>
                                <option value="Afghanistan 93">アフガニスタン Afghanistan (+93)</option>
                                <option value="U.S.A. 1">アメリカ (本土) U.S.A. (+1)</option>
                                <option value="American Samoa 1">米領サモア American Samoa (+1)</option>
                                <option value="American Virgin 1">米領バージン諸島 American Virgin Is. (+1)</option>
                                <option value="Alaska 1">アラスカ Alaska (+1)</option>
                                <option value="U.A.E. 971">アラブ首長国連邦 U.A.E. (+971)</option>
                                <option value="Algeria 213">アルジェリア Algeria (+213)</option>
                                <option value="Argentina 54">アルゼンチン Argentina (+54)</option>
                                <option value="Aruba 297">アルバ Aruba (+297)</option>
                                <option value="Albania 355">アルバニア Albania (+355)</option>
                                <option value="Armenia 374">アルメニア Armenia (+374)</option>
                                <option value="Anguilla 1">アンギラ Anguilla (+1)</option>
                                <option value="Angola 244">アンゴラ Angola (+244)</option>
                                <option value="Antigua 1">アンティグア・バーブーダ Antigua  (+1)</option>
                                <option value="Andorra 376">アンドラ Andorra (+376)</option>
                                <option value="Yemen 967">イエメン Yemen (+967)</option>
                                <option value="U.K. 44">イギリス U.K. (+44)</option>
                                <option value="British Virgin1">英領バージン諸島 British Virgin Is. (+1)</option>
                                <option value="Israel 972">イスラエル Israel (+972)</option>
                                <option value="Italy 39">バチカン Italy (+39)</option>
                                <option value="Iraq 964">イラク Iraq (+964)</option>
                                <option value="Iran 98">イラン Iran (+98)</option>
                                <option value="India 91">インド India (+91)</option>
                                <option value="Indonesia 62">インドネシア Indonesia (+62)</option>
                                <option value="Uganda 256">ウガンダ Uganda (+256)</option>
                                <option value="Ukraine 380">ウクライナ Ukraine (+380)</option>
                                <option value="Uzbekistan 998">ウズベキスタン Uzbekistan (+998)</option>
                                <option value="Uruguay 598">ウルグアイ Uruguay (+598)</option>
                                <option value="Ecuador 593">エクアドル Ecuador (+593)</option>
                                <option value="Egypt 20">エジプト Egypt (+20)</option>
                                <option value="Estonia 372">エストニア Estonia (+372)</option>
                                <option value="Ethiopia 251">エチオピア Ethiopia (+251)</option>
                                <option value="Eritrea 291">エリトリア Eritrea (+291)</option>
                                <option value="Salvador 503">エルサルバドル El Salvador (+503)</option>
                                <option value="Australia 61">オーストラリア Australia (+61)</option>
                                <option value="Austria 43">オーストリア Austria (+43)</option>
                                <option value="Oman 968">オマーン Oman (+968)</option>
                                <option value="Netherlands 31">オランダ Netherlands (+31)</option>
                                <option value="Netherlands 599">オランダ領アンティール Netherlands Antilles (+599)</option>
                                <option value="Ghana 233">ガーナ Ghana (+233)</option>
                                <option value="Cape Verde 238">カーボベルデ Cape Verde (+238)</option>
                                <option value="Guyana 592">ガイアナ Guyana (+592)</option>
                                <option value="Kazakhstan 7">カザフスタン Kazakhstan (+7)</option>
                                <option value="Qatar 974">カタール Qatar (+974)</option>
                                <option value="Canada 1">カナダ Canada (+1)</option>
                                <option value="Canary 34">カナリア諸島 Canary Islands (+34)</option>
                                <option value="Gabon 241">ガボン Gabon (+241)</option>
                                <option value="Cameroon 237">カメルーン Cameroon (+237)</option>
                                <option value="NorthKorea 850">北朝鮮 (朝鮮民主主義人民共和国) NorthKorea (+850)</option>
                                <option value="SouthKorea 82">韓国 SouthKorea (+82)</option>
                                <option value="Gambia 220">ガンビア Gambia (+220)</option>
                                <option value="Cambodia 855">カンボジア Cambodia (+855)</option>
                                <option value="Guinea 224">ギニア Guinea (+224)</option>
                                <option value="GuineaBissau 245">ギニアビサウ GuineaBissau (+245)</option>
                                <option value="Cyprus 357">キプロス Cyprus (+357)</option>
                                <option value="Cuba 53">キューバ Cuba (+53)</option>
                                <option value="Greece 30">ギリシア Greece (+30)</option>
                                <option value="Kiribati 686">キリバス Kiribati (+686)</option>
                                <option value="Kyrgyz 996">キルギスタン Kyrgyz Rep. (+996)</option>
                                <option value="Guatemala 502">グアテマラ Guatemala (+502)</option>
                                <option value="Guadeloupe 590">グアドループ島 Guadeloupe (+590)</option>
                                <option value="Guam 1">グアム Guam (+1)</option>
                                <option value="Kuwait 965">クウェート Kuwait (+965)</option>
                                <option value="Islands 682">クック諸島 Cook Islands (+682)</option>
                                <option value="Greenland 299">グリーンランド Greenland (+299)</option>
                                <option value="Christmas 61">クリスマス島 Christmas Is. (+61)</option>
                                <option value="Grenada 1">グレナダ Grenada (+1)</option>
                                <option value="Grenada 385">クロアチア Grenada (+385)</option>
                                <option value="Cayman Islands 1">ケイマン諸島 Cayman Islands (+1)</option>
                                <option value="Kenya 254">ケニア Kenya (+254)</option>
                                <option value="Cote 225">コートジボワール Cote d (+225)</option>
                                <option value="Cocos Keeling 61">ココス諸島 Cocos Keeling Is. (+61)</option>
                                <option value="Costa Rica 506">コスタリカ Costa Rica (+506)</option>
                                <option value="Comoros 269">コモロ Comoros (+269)</option>
                                <option value="Colombia57">コロンビア Colombia (+57)</option>
                                <option value="Congo 242">コンゴ Congo (+242)</option>
                                <option value="Congo 243">コンゴ民主共和国 Congo  (+243)</option>
                                <option value="Saipan 1">サイパン Saipan (+1)</option>
                                <option value="Saudi 966">サウジアラビア Saudi Arabia (+966)</option>
                                <option value="Samoa 685">サモア Samoa (+685)</option>
                                <option value="Sao Tome 239">サントメ・プリンシペ Sao Tome  (+239)</option>
                                <option value="Zambia 260">ザンビア Zambia (+260)</option>
                                <option value="Pierre 508">サンピエール島・ミクロン島 St. Pierre  (+508)</option>
                                <option value="San Marino 378">サンマリノ San Marino (+378)</option>
                                <option value="Sierra Leone 232">シエラレオネ Sierra Leone (+232)</option>
                                <option value="Djibouti 253">ジブチ Djibouti (+253)</option>
                                <option value="Gibraltar 350">ジブラルタル Gibraltar (+350)</option>
                                <option value="Jamaica 1">ジャマイカ Jamaica (+1)</option>
                                <option value="Georgia 995">ジョージア Georgia (+995)</option>
                                <option value="Syria 963">シリア Syria (+963)</option>
                                <option value="Singapore 65">シンガポール Singapore (+65)</option>
                                <option value="Zimbabwe 263">ジンバブエ Zimbabwe (+263)</option>
                                <option value="Switzerland 41">スイス Switzerland (+41)</option>
                                <option value="Sweden 46">スウェーデン Sweden (+46)</option>
                                <option value="Sudan 249">スーダン Sudan (+249)</option>
                                <option value="Spain 34">スペイン Spain (+34)</option>
                                <option value="Africa 34">スペイン領北アフリカ Spanish North Africa (+34)</option>
                                <option value="Satellite 88216">スラーヤーテレコム Thuraya Satellite (+88216)</option>
                                <option value="Suriname 597">スリナム Suriname (+597)</option>
                                <option value="Lanka 94">スリランカ Sri Lanka (+94)</option>
                                <option value="Slovak 421">スロバキア Slovak (+421)</option>
                                <option value="Slovenia 386">スロベニア Slovenia (+386)</option>
                                <option value="Swaziland 268">スワジランド Swaziland (+268)</option>
                                <option value="Guinea 240">赤道ギニア Equatorial Guinea (+240)</option>
                                <option value="Senegal 221">セネガル Senegal (+221)</option>
                                <option value="Serbia 381">セルビア Serbia (+381)</option>
                                <option value="Christopher 1">セントクリストファー・ネイビス St. Christopher  (+1)</option>
                                <option value="Vincent 1">セントビンセントおよびグレナディーン諸島 St. Vincent  (+1)</option>
                                <option value="Helena 290">セントヘレナ島 St. Helena (+290)</option>
                                <option value="Lucia 1">セントルシア St. Lucia (+1)</option>
                                <option value="Somalia 252">ソマリア Somalia (+252)</option>
                                <option value="Solomon 677">ソロモン諸島 Solomon Is. (+677)</option>
                                <option value="Turks 1">タークス諸島・カイコス諸島 Turks  (+1)</option>
                                <option value="Thailand 66">タイ Thailand (+66)</option>
                                <option value="Taiwan 886">台湾 Taiwan (+886)</option>
                                <option value="Tadzhikistan 992">タジキスタン Tadzhikistan (+992)</option>
                                <option value="Tanzania 255">タンザニア Tanzania (+255)</option>
                                <option value="Czech 420">チェコ Czech (+420)</option>
                                <option value="Chad 235">チャド Chad (+235)</option>
                                <option value="Africa 236">中央アフリカ Central Africa (+236)</option>
                                <option value="China 86">中国 China (+86)</option>
                                <option value="Tunisia 216">チュニジア Tunisia (+216)</option>
                                <option value="Chile 56">チリ Chile (+56)</option>
                                <option value="Tuvalu 688">ツバル Tuvalu (+688)</option>
                                <option value="Denmark 45">デンマーク Denmark (+45)</option>
                                <option value="Germany 49">ドイツ Germany (+49)</option>
                                <option value="Togo 228">トーゴ Togo (+228)</option>
                                <option value="Tokelau 690">トケラウ諸島 Tokelau Islands (+690)</option>
                                <option value="Dominica 1">ドミニカ Dominica (+1)</option>
                                <option value="Dominican Rep. 1">ドミニカ共和国 Dominican Rep. (+1)</option>
                                <option value="Trinidad 1">トリニダード・トバゴ Trinidad  (+1)</option>
                                <option value="Turkmenistan 993">トルクメニスタン Turkmenistan (+993)</option>
                                <option value="Turkey 90">トルコ Turkey (+90)</option>
                                <option value="Tonga 676">トンガ Tonga (+676)</option>
                                <option value="Nigeria 234">ナイジェリア Nigeria (+234)</option>
                                <option value="Nauru 674">ナウル Nauru (+674)</option>
                                <option value="Namibia 264">ナミビア Namibia (+264)</option>
                                <option value="Niue 683">ニウエ Niue (+683)</option>
                                <option value="Nicaragua 505">ニカラグア Nicaragua (+505)</option>
                                <option value="Niger 227">ニジェール Niger (+227)</option>
                                <option selected="selected" value="Japan 81">日本 Japan (+81)</option>
                                <option value="Caledonia 687">ニューカレドニア New Caledonia (+687)</option>
                                <option value="Zealand 64">ニュージーランド New Zealand (+64)</option>
                                <option value="Nepal 977">ネパール Nepal (+977)</option>
                                <option value="Island 672">ノーフォーク島 Norfolk Island (+672)</option>
                                <option value="Norway 47">ノルウェー Norway (+47)</option>
                                <option value="Bahrain 973">バーレーン Bahrain (+973)</option>
                                <option value="Haiti 509">ハイチ Haiti (+509)</option>
                                <option value="Pakistan 92">パキスタン Pakistan (+92)</option>
                                <option value="Panama 507">パナマ Panama (+507)</option>
                                <option value="Vanuatu 678">バヌアツ Vanuatu (+678)</option>
                                <option value="Bahamas 1">バハマ Bahamas (+1)</option>
                                <option value="Guinea 675">パプアニューギニア Papua New Guinea (+675)</option>
                                <option value="Bermuda 1">バミューダ諸島 Bermuda (+1)</option>
                                <option value="Palau 680">パラオ Palau (+680)</option>
                                <option value="Paraguay 595">パラグアイ Paraguay (+595)</option>
                                <option value="Barbados 1">バルバドス Barbados (+1)</option>
                                <option value="Hawaii 1">ハワイ Hawaii (+1)</option>
                                <option value="Hungary 36">ハンガリー Hungary (+36)</option>
                                <option value="Bangladesh 880">バングラデシュ Bangladesh (+880)</option>
                                <option value="East Timor 670">東ティモール East Timor (+670)</option>
                                <option value="Fiji 679">フィジー Fiji (+679)</option>
                                <option value="Philippines 63">フィリピン Philippines (+63)</option>
                                <option value="Finland 358">フィンランド Finland (+358)</option>
                                <option value="Bhutan 975">ブータン Bhutan (+975)</option>
                                <option value="Rico 1">プエルトリコ Puerto Rico (+1)</option>
                                <option value="Faroe Islands 298">フェロー諸島 Faroe Islands (+298)</option>
                                <option value="Falkland 500">フォークランド諸島 Falkland Is. (+500)</option>
                                <option value="Brazil 55">ブラジル Brazil (+55)</option>
                                <option value="France 33">フランス France (+33)</option>
                                <option value="French Guiana 594">フランス領ギアナ French Guiana (+594)</option>
                                <option value="French Polynesia 689">フランス領ポリネシア French Polynesia (+689)</option>
                                <option value="Bulgaria 359">ブルガリア Bulgaria (+359)</option>
                                <option value="Burkina 226">ブルキナファソ Burkina Faso (+226)</option>
                                <option value="Brunei 673">ブルネイ Brunei (+673)</option>
                                <option value="Burundi 257">ブルンジ Burundi (+257)</option>
                                <option value="Viet Nam 84">ベトナム Viet Nam (+84)</option>
                                <option value="Benin 229">ベナン Benin (+229)</option>
                                <option value="Venezuela 58">ベネズエラ Venezuela (+58)</option>
                                <option value="Belarus 375">ベラルーシ Belarus (+375)</option>
                                <option value="Belize 501">ベリーズ Belize (+501)</option>
                                <option value="Peru 51">ペルー Peru (+51)</option>
                                <option value="Belgium 32">ベルギー Belgium (+32)</option>
                                <option value="Poland 48">ポーランド Poland (+48)</option>
                                <option value="Bosnia 387">ボスニア・ヘルツェゴビナ Bosnia  (+387)</option>
                                <option value="Botswana 267">ボツワナ Botswana (+267)</option>
                                <option value="Bolivia 591">ボリビア Bolivia (+591)</option>
                                <option value="Portugal 351">ポルトガル Portugal (+351)</option>
                                <option value="Hong Kong 852">香港 Hong Kong (+852)</option>
                                <option value="Honduras 504">ホンジュラス Honduras (+504)</option>
                                <option value="Marshall 692">マーシャル諸島 Marshall Is. (+692)</option>
                                <option value="Macao 853">マカオ Macao (+853)</option>
                                <option value="Macedonia 389">マケドニア Macedonia (+389)</option>
                                <option value="Madagascar 261">マダガスカル Madagascar (+261)</option>
                                <option value="Madeira 351">マディラ諸島 Madeira (+351)</option>
                                <option value="Malawi 265">マラウイ Malawi (+265)</option>
                                <option value="Mali 223">マリ Mali (+223)</option>
                                <option value="Malta 356">マルタ Malta (+356)</option>
                                <option value="Martinique 596">マルチニーク島 Martinique (+596)</option>
                                <option value="Malaysia 60">マレーシア Malaysia (+60)</option>
                                <option value="Micronesia 691">ミクロネシア連邦 Micronesia (+691)</option>
                                <option value="Africa 27">南アフリカ South Africa (+27)</option>
                                <option value="Myanmar 95">ミャンマー Myanmar (+95)</option>
                                <option value="Mexico 52">メキシコ Mexico (+52)</option>
                                <option value="Mauritius 230">モーリシャス Mauritius (+230)</option>
                                <option value="Mauritania 222">モーリタニア Mauritania (+222)</option>
                                <option value="Mozambique 258">モザンビーク Mozambique (+258)</option>
                                <option value="Monaco 377">モナコ Monaco (+377)</option>
                                <option value="Maldives 960">モルディブ Maldives (+960)</option>
                                <option value="Moldova 373">モルドバ Moldova (+373)</option>
                                <option value="Morocco 212">モロッコ Morocco (+212)</option>
                                <option value="Mongolia 976">モンゴル Mongolia (+976)</option>
                                <option value="Montserrat 1">モンセラット Montserrat (+1)</option>
                                <option value="Montenegro 382">モンテネグロ Montenegro (+382)</option>
                                <option value="Jordan 962">ヨルダン Jordan (+962)</option>
                                <option value="Laos 856">ラオス Laos (+856)</option>
                                <option value="Latvia 371">ラトビア Latvia (+371)</option>
                                <option value="Lithuania 370">リトアニア Lithuania (+370)</option>
                                <option value="Libya 218">リビア Libya (+218)</option>
                                <option value="Liechtenstein 423">リヒテンシュタイン Liechtenstein (+423)</option>
                                <option value="Liberia 231">リベリア Liberia (+231)</option>
                                <option value="Romania 40">ルーマニア Romania (+40)</option>
                                <option value="Luxembourg 352">ルクセンブルグ Luxembourg (+352)</option>
                                <option value="Rwanda 250">ルワンダ Rwanda (+250)</option>
                                <option value="Lesotho 266">レソト Lesotho (+266)</option>
                                <option value="Lebanon 961">レバノン Lebanon (+961)</option>
                                <option value="Reunion 262">レユニオン Reunion (+262)</option>
                                <option value="Russian 7">ロシア連邦 Russian Fed. (+7)</option>
                            </select>
                            <input placeholder="携帯電話番号を入力" autocomplete="off" type="tel" name="user_create_temp_phone" id="user-create-temp-phone" />
                            {!! $errors->first('user_create_temp_phone', '<span class="error-text">電話番号は既に存在します</span>') !!}                        
                        </div>
                        <div class="back back-next">
                            <input id="back" type="submit" value="戻る" >
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
        $('#back').click(function (e) {
            e.preventDefault();
            window.history.back();
        });
        var updateButtonActive = function() {
            if ($('select[name="user_create_temp_itu_code"]').val() !== "" && $('input[name="user_create_temp_phone"]').val().length > 0) {
                $('.page-signup-body-input .submit input[type=submit]').addClass('active').removeAttr('disabled');
            } else {
                $('.page-signup-body-input .submit input[type=submit]').removeClass('active').attr('disabled', 'disabled');
            }
        };

        $('select[name="user_create_temp_itu_code"]').change(function() {
            updateButtonActive();
        });

        $('input[name="user_create_temp_phone"]').keyup(function() {
            updateButtonActive();
        });

        updateButtonActive();
    </script>
@endsection