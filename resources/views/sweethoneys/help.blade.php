@extends('layouts.master')
@section('title', 'Sweet Honeys - よくある質問')
@section('style')
    @parent
    <link href="{!! asset('assets/css/webpages.css') !!}" rel="stylesheet">
@stop
@section('content')
<div class="wrap-container">
    <div class="container">
        <!-- Search Box -->
        <div class="row">
            <a class="navbar-brand" href="/sweethoneys">
                <img class="logo-img " src="/assets/image/logo.png" alt="Sweet Honeys">
            </a>
            <div class="col-xs-10 col-xs-offset-1">
                <div id="ipt-search-box">
                    <input id="search" type="text" value="" class="form-control" placeholder="ヘルプの検索">
                </div>
            </div>
        </div>
        <!-- Content -->
        <div class="row">
            <div class="col-xs-12">
                <div class="title">
                    <h4>カテゴリ</h4>
                </div>
                <div class="card">
                    <span class="accordion-title">よくある質問</span>
                    <ul class="accordion-ul">
                        <li class="accordion-title-chil">
                            <span class="accordion-title-sub-chil">年齢確認について</span>
                            <ul class="accordion-ul">
                                <li class="accordion-content">
                                    年齢確認は公的証明書のご提出が必要となります。<br>
                                    また、ご登録されている年齢と年齢確認提出書類に相違がある場合、ご利用いただけません。<br>
                                    <strong class="accordion-strong">年齢確認に有効な公的証明書の種類</strong>
                                    <ul class="list-ul">
                                        <li>運転免許証</li>
                                        <li>健康保険証</li>
                                        <li>パスポート etc.</li>
                                    </ul>
                                    <small>（※証明書のコピーは無効となります）</small>

                                    <strong class="accordion-strong">必須な情報</strong>
                                    <p>下記が必ず1枚の写真に写るようにしてください<br>下記以外の情報は撮影、画像選択後に塗りつぶすことができます。</p>
                                    <ul class="list-ul">
                                        <li>生年月日</li>
                                        <li>証明書の名称</li>
                                        <li>証明書の発行者の名称</li>
                                    </ul><br>
                                    <small>※年齢確認書類をご提出後に、ご登録いただいている生年月日を変更したい場合には、<a href="/sweethoneys/sign-in"> お問い合わせ </a> より正しい生年月日をお送りください。</small>
                                </li>
                            </ul>
                        </li>
                        <li class="accordion-title-chil">
                            <span class="accordion-title-sub-chil"> 決済方法 </span>
                            <ul class="accordion-ul">
                                <li  class="accordion-content">
                                    <p>
                                        Web版のSweet Honeysの決済方法は、クレジットカードのみとなります。
                                    </p>
                                </li>
                            </ul>
                        </li>
                        <li class="accordion-title-chil">
                            <span class="accordion-title-sub-chil"> 年齢（生年月日）を間違えて登録してしまった場合 </span>
                            <ul class="accordion-ul">
                                <li  class="accordion-content">
                                    <p>
                                        年齢確認画面の下部に、「生年月日を間違えて登録して変更したい場合」ボタンがございます。生年月日の変更は1回のみとなり、年齢確認書類の提出後は変更できませんので予めご了承くださいませ。<br>
                                        また、ご登録されている年齢と年齢確認提出書類に相違がある場合、ご利用いただけません。
                                    </p>
                                    <small>※年齢確認書類をご提出後に、ご登録いただいている生年月日を変更したい場合には、<a href="/sweethoneys/contact">お問い合わせ</a>より正しい生年月日をお送りください。</small>
                                </li>
                            </ul>
                        </li>
                        <li class="accordion-title-chil">
                            <span class="accordion-title-sub-chil"> ポイントが更新（付与）されない場合 </span>
                            <ul class="accordion-ul">
                                <li  class="accordion-content">
                                    <p>
                                        有料会員登録日から、30日毎にポイントが付与されます。<br>（毎月1日に付与されるわけではございませんのでお気をつけください。）
                                    </p>
                                </li>
                            </ul>
                        </li>
                        <li class="accordion-title-chil">
                            <span class="accordion-title-sub-chil"> 退会について </span>
                            <ul class="accordion-ul">
                                <li class="accordion-content">
                                    <p>
                                        退会をご希望の方は、恐れ入りますが「マイページ」→「設定」→「お問い合わせ」よりお問い合わせカテゴリにて「退会」をお選びいただきお問い合わせください。<br>また、退会後は30日間再登録ができませんのでお気をつけください。<strong><a href="/sweethoneys/privatemode">プライベートモード設定</a></strong>よりプライベートモードにすることでお相手の検索結果に表示されず、足あともつくことがありませんので、プライベートモード設定にされることをお勧めいたします。<br>
                                        Sweet Honeysを退会する際には、下記項目にご注意くださいませ。
                                    </p>
                                    <p>
                                        <strong>※ 有料会員・プレミアム会員の方で退会をご希望の方は、退会前に必ず「マイページ＞設定＞定期課金設定」から定期課金中の購入をキャンセルしてください。</strong>
                                    </p>
                                
                                    <strong class="accordion-strong">注意事項</strong>
                                    <ul class="list-ul">
                                        <li>再登録後、以前のデータは引き継げません</li>
                                        <li>端末上でアプリを削除されても、退会したことにはなりません</li>
                                        <li>退会されると、すべての会員向けサービスがご利用いただけなくなります</li>
                                        <li>有料会員・プレミアム会員の期間途中に退会する場合も月割り・日割りでの返金は致しかねます</li>
                                        <li>退会されますと、一定期間は再登録できません</li>
                                        <li>退会済みのユーザー様のプロフィールは閲覧できなくなります</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="accordion-title-chil">
                            <span class="accordion-title-sub-chil"> 退会後の再登録について </span>
                            <ul class="accordion-ul">
                                <li  class="accordion-content">
                                    <p>
                                        Sweet Honeysを退会されますと、30日間再登録ができませんので予めご了承くださいませ。<br>
                                        また、一度退会されますと、ポイントやいいね、過去のマッチング・やり取り中のメッセージなどの全てのデータが削除され、復元されることはありませんのでお気をつけください。
                                    </p>
                                </li>
                            </ul>
                        </li>
                        <li class="accordion-title-chil">
                            <span class="accordion-title-sub-chil"> 複数のアカウントを持つことができますか？ </span>
                            <ul class="accordion-ul">
                                <li  class="accordion-content">
                                    <p>
                                        Sweet Honeysでは、複数のアカウントを持つことは禁止とされております。<br>
                                        複数のアカウントをお持ちになると、決済内容が別のアカウントに紐付けられるなど不具合が生じますので、お気をつけくださいませ。
                                    </p>
                                </li>
                            </ul>
                        </li>
                        <li class="accordion-title-chil">
                            <span class="accordion-title-sub-chil"> 自分のいいね！の数が減った </span>
                            <ul class="accordion-ul">
                                <li  class="accordion-content">
                                    <p>
                                        いいね数は、「過去30日間に受け取ったいいね数」が表示されている形となります。
                                        30日より前にお届きになった「いいね！」はカウントがされなくなってしまうため、
                                        新たに「いいね！」をいただいても、30日前の「いいね！」がカウントされずに、
                                        「いいね ！」数の変動がない状態や減ってしまう場合がございます。
                                    </p>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <span class="accordion-title">はじめての方へ</span>
                    <ul class="accordion-ul">
                        <li class="accordion-title-chil">
                            <span class="accordion-title-sub-chil"> 写真の審査基準について </span>
                            <ul class="accordion-ul">
                                <li class="accordion-content">
                                    審査での否認の対象は以下項目となります。<br>
                                    <strong class="accordion-strong">個人を特定しうる情報を含んでいるもの</strong>
                                    <ul class="list-ul">
                                        <li>本名が写り込んでいるもの</li>
                                        <li>URL・メールアドレスなどの連絡先が表示されているもの</li>
                                        <li>勤務先の社名・ロゴ・役職などが写り込んでいるもの</li>
                                        <li>車のナンバープレートが写り込んでいるもの</li>
                                        <li>その他、個人の特定が可能だと判断しうるもの</li>
                                    </ul>

                                    <strong class="accordion-strong">権利を損害もの</strong>
                                    <ul class="list-ul">
                                        <li>著名人（芸能人、モデルなど）の写真のような本人以外の人物</li>
                                        <li>他人が著作権を有するもの</li>
                                        <li>18歳未満と判断される写真</li>
                                    </ul>

                                    <strong class="accordion-strong">写真が見づらいもの</strong>
                                    <ul class="list-ul">
                                        <li>不鮮明であるもの</li>
                                        <li>上下が逆さまであるもの</li>
                                        <li>画像加工ツールなどで著しく加工されているもの</li>
                                    </ul>

                                    <strong class="accordion-strong">公序良俗の反するもの</strong>
                                    <ul class="list-ul">
                                        <li>ヌード写真</li>
                                        <li>わいせつ、またはそれを想起させうるもの</li>
                                        <li>宗教・信条を主張するもの</li>
                                        <li>その他閲覧者に不快感を与えると判断しうるもの</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="accordion-title-chil">
                            <span class="accordion-title-sub-chil"> いいね！について </span>
                            <ul class="accordion-ul">
                                <li  class="accordion-content">
                                    <p>
                                        まずは気になるお相手に「いいね！」をしてみましょう。<br>
                                        「いいね！」とは、写真やプロフィールを見て興味をもったお相手に押すものです。<br>
                                        自分に「いいね！」を押してくれたお相手に対し、「いいね！ありがとう」を返すことでマッチングが成立し、初めてメッセージを送ることが可能になります。<br>

                                        「いいね！」を積極的に押すことで、マッチング率は上がりますので是非ご活用ください。
                                    </p>
                                </li>
                            </ul>
                        </li>
                        <li class="accordion-title-chil">
                            <span class="accordion-title-sub-chil"> マッチング成立したあとは何をすればよいですか？ </span>
                            <ul class="accordion-ul">
                                <li  class="accordion-content">
                                    <p>
                                        マッチング成立とは、自分やお相手の送った「いいね！」に対して「いいね！ありがとう」を返した状況を指します。<br>
                                        マッチングが成立すると、お相手とのメッセージが可能になります。さっそくお相手にメッセージを送ってみましょう。<br>

                                        ※男女ともに、自由にメッセージを送受信するには「年齢確認」が必要です。（身分証明書をお送りいただくことで年齢確認が可能です。）<br>
                                        また、男性のお客様が自由にメッセージを送受信されるには有料プランへの登録が必要になります。
                                    </p>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <span class="accordion-title"> 安心してご利用いただくために </span>
                    <ul class="accordion-ul">
                        <li class="accordion-title-chil">
                            <span class="accordion-title-sub-chil"> 安心してご利用頂くために </span>
                            <ul class="accordion-ul">
                                <li  class="accordion-content">
                                    <p>
                                        Sweet Honeysでは、会員の皆様にとって安心で安全なサービスを提供するために以下のような取り組みを行っております。

                                        <strong class="accordion-strong">24時間365日常時監視体制</strong>
                                        <ul class="list-ul">
                                            <li>プロフィール・写真の厳正なチェック</li>
                                            <li>不審なユーザーの監視・警告・強制退会</li>
                                        </ul>

                                        <strong class="accordion-strong">プロフィール・初回のメッセージから、不適切な内容を排除しています</strong>
                                        <ul class="list-ul">
                                            <li>勤務先情報など個人の特定につながる内容</li>
                                            <li>誹謗・中傷・卑劣な表現・その他公序良俗に反する内容等、相手に不快感を与える内容</li>
                                        </ul>
                                    </p>
                                </li>
                            </ul>
                        </li>

                        <li class="accordion-title-chil">
                            <span class="accordion-title-sub-chil"> 警察へのインターネット異性紹介事業の提出済 </span>
                            <ul class="accordion-ul">
                                <li  class="accordion-content">
                                    <p>
                                        インターネット異性紹介事業として認定を受けています。（受理番号：30170022000）<br>
                                        警察の指導のもとサービスを展開しております。
                                    </p>
                                </li>
                            </ul>
                        </li>

                        <li class="accordion-title-chil">
                            <span class="accordion-title-sub-chil"> 違反報告の対応ポリシー </span>
                            <ul class="accordion-ul">
                                <li  class="accordion-content">
                                    <p>
                                        Sweet Honeysは24時間365日、常時監視体制を敷いて会員の皆様に安心・安全なサービスをお届けいたします。<br>
                                        発見した問題や、寄せられた違反報告を元に当社規定の事実確認を行った上で、違反者に対し警告や強制退会等の対応を行っております。
                                    </p>
                                    <p>
                                        万が一マッチングしたお相手の中にお客様が不快に感じるユーザーがいた場合には、違反報告機能にてできるだけ詳細をご連絡頂けますと幸いです。<br>
                                        なお、違反された事項が違反に当たらないと判断された場合や、事実確認が十分に行えないなどの場合には、虚偽の報告によって被害を受けるお客様が発生することを防ぐため、対応を行わないことがございます。
                                    </p>
                                </li>
                            </ul>
                        </li>

                        <li class="accordion-title-chil">
                            <span class="accordion-title-sub-chil"> 年齢確認書類の取り扱いについて </span>
                            <ul class="accordion-ul">
                                <li  class="accordion-content">
                                    <p>
                                        ・お客様の個人情報は、個人情報保護法に基づき、厳格な管理、適正な取扱いを行います。<br>
                                        ・運営事務局にて確認後、一定の期間保存した後に責任をもって破棄いたします。
                                    </p>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <span class="accordion-title">Sweet Honeys サポートガイドライン</span>
                    <ul class="accordion-ul">
                        <li class="accordion-title-chil">
                            <span class="accordion-title-sub-chil"> SNSの移動について (非推奨) </span>
                            <ul class="accordion-ul">
                                <li  class="accordion-content">
                                    <p>
                                        Sweet Honeysではメッセージ1通目でのLINE ID・カカオトークID・その他連絡先の交換を禁止しており、発見次第強制退会処分を行っております。<br />
                                        二通目以降のやりとりで連絡先を交換することは利用規約違反ではありませんが、お会いする前の連絡先交換は非推奨です。お相手が信用できる方だとわかるまで、個人情報のやりとりは行わないでください。
                                    </p>
                                    <p>
                                        ようにSweet Honeys外で起こったトラブルは運営事務局での事実確認が困難なため、Sweet Honeys運営事務局によるサポートとペナルティ付与の対象外になる場合がございます。
                                    </p>
                                    <ul class="list-ul">
                                        <li>個人連絡先交換後連絡が途絶えた</li>
                                        <li>LINE・カカオなどの外部連絡先で攻撃的なメッセージを受け取った</li>
                                        <li>他サービス(SNS、メッセージアプリ、Sweet Honeys以外のマッチングサービスを含む)でのやりとり中、Sweet Honeysの利用規約に違反する行為が見受けられた　等</li>
                                    </ul>
                                    <p>
                                        トラブル発生時の迅速な対応と平等な事実確認のために、Sweet Honeys内部でやりとりをしていただくようお願い申し上げます。
                                    </p>
                                </li>
                            </ul>
                        </li>
                        <li class="accordion-title-chil">
                            <span class="accordion-title-sub-chil"> 運営事務局の事実確認について </span>
                            <ul class="accordion-ul">
                                <li  class="accordion-content">
                                    <p>
                                        Sweet Honeysでは、お客様から寄せられた違反報告などについて公平に事実確認を行なっております。原則として、事実確認完了後に厳重注意・強制退会などのペナルティ付与を行ないます。
                                    </p>
                                    <p>
                                        以下のように、事実確認が難しいケースに関してはSweet Honeys運営事務局でトラブルの解決ができない可能性がございます。
                                    </p>
                                    <ul class="list-ul">
                                        <li>LINE・カカオなどの外部連絡先に移動してしまっている場合</li>
                                        <li>お会いしている際に起こったトラブル</li>
                                        <li>お電話など、記録に残らない連絡で発生したトラブル</li>
                                        <li>その他、公序良俗に反する内容や客観的に事実確認が不能な場合</li>
                                    </ul>
                                    <p>
                                        ただし、事実確認が難しいケースでも、複数の違反報告が寄せられ事実確認にご協力いただいた場合、ペナルティ付与の対象となる場合がございます。お客様からいただいた違反報告と事実確認へのご協力はすべて運営事務局にて保存・共有されております。
                                    </p>
                                    <p>
                                        トラブルに巻き込まれた際は何卒事実確認にご協力ください。
                                    </p>
                                </li>
                            </ul>
                        </li>
                        <li class="accordion-title-chil">
                            <span class="accordion-title-sub-chil"> ペナルティ付与のポリシーについて </span>
                            <ul class="accordion-ul">
                                <li  class="accordion-content">
                                    <p>
                                        Sweet Honeysでは、お客様からのご連絡に基づきユーザーに対して厳重注意、強制退会などのペナルティ付与を行う場合がございます。
                                    </p>
                                    <p>
                                        誠に恐れ入りますが、ペナルティ付与の基準に関しては、違反報告のご連絡をいただいたお客様のプライバシーに配慮し公開しておりません。また、ペナルティ付与に関しては運営事務局に御一任いただいており、必ずしも違反報告者様のご希望に添えない場合がございます。
                                    </p>
                                    <p>
                                        事実確認が難しいケースに関してはペナルティの付与を見送らせていただく場合がございます。ご了承ください。以下の場合は事実確認が成立したとみなし、ペナルティ付与の対象となります。
                                    </p>
                                    <ul class="list-ul">
                                        <li>アプリ内のやりとりでドタキャンや暴言など規約違反の行為が認められた場合</li>
                                        <li>アプリ外でのトラブルに関して度重なる違反報告を受け、一定以上の事実確認が完了した場合</li>
                                        <li>使用されているお写真、年齢確認書類などに詐称が見つかった場合</li>
                                        <li>その他利用規約に違反する行為を確認できた場合、または複数のユーザーから信憑性のある事実確認をいただいた場合</li>
                                    </ul>
                                    <p>
                                        また、いかなる場合でも違反報告の内容や報告者の情報がお相手のユーザーに通知されることはありません。安心して違反報告をご活用ください。
                                    </p>
                                </li>
                            </ul>
                        </li>
                        <li class="accordion-title-chil">
                            <span class="accordion-title-sub-chil"> 刑事事件性のあるトラブルに巻き込まれた場合 </span>
                            <ul class="accordion-ul">
                                <li  class="accordion-content">
                                    <p>
                                        詐欺や窃盗、暴行など事件性のあるトラブルに巻き込まれた場合、Sweet Honeys運営事務局では警察署などの専門機関へのご相談をお薦めしております。違反ユーザーの処遇に関しては、原則としてSweet Honeysでのペナルティ付与のポリシーに基づき、事実確認後に対処させていただきます。
                                    </p>
                                    <p>
                                        Sweet Honeysでは十分にご対応できないトラブルに関しても、警察署、弁護士、その他第三者機関へご相談いただくことでご協力できる場合がございます。
                                    </p>
                                    <p>
                                        Sweet Honeysは、警視庁主導の「インターネット異性紹介事業者登録」を完了しており、トラブルがあった際に警視庁との連携が可能でございます。<br />
                                        警視庁から正式に個人情報開示請求が届き次第、Sweet Honeysでお預かりしているお客様の情報を提供する準備が整っております。ご不安なことなどがある場合は、最寄りの警察署までご相談くださいませ。
                                    </p>
                                    <p>
                                        なお、Sweet Honeys内での会話のやりとりなどは、運営事務局にて全て保管しております。警察の捜査に協力する運びとなった際など、Sweet Honeysでの会話が重要な証拠になる場合もございますので、可能なかぎりSweet Honeysでのメッセージのやりとりをお願いいたします。
                                    </p>
                                </li>
                            </ul>
                        </li>
                        <li class="accordion-title-chil">
                            <span class="accordion-title-sub-chil"> 不審なユーザーを見かけたら </span>
                            <ul class="accordion-ul">
                                <li  class="accordion-content">
                                    <p>
                                        不審なユーザーを見かけた場合はブロック・非表示機能をご利用ください。ブロック機能をご利用いただいた場合、ブロックされたユーザーはブロックしたユーザーのプロフィールなどの閲覧が一切不可になります。
                                    </p>
                                    <p>
                                        また、トラブルに発展する可能性があると感じた場合は「違反報告」をご活用ください。運営事務局で事実確認の上、ペナルティ付与のポリシーに基づき厳重注意/強制退会などの処置を取らせていただきます。
                                    </p>
                                    <p>
                                        以下のようなユーザーを見つけた場合、速やかにやりとりを中止し運営事務局までご報告いただくか、ブロックなどの機能をご利用ください。
                                    </p>
                                    <ul class="list-ul">
                                        <li>LINEやカカオなど外部の連絡先へ誘導してくる</li>
                                        <li>攻撃的なメッセージや差別的なメッセージが送られてくる</li>
                                        <li>Twitterなどの外部SNSへの晒し行為をほのめかす</li>
                                        <li>公開プロフィールで性的関係を希望する旨を記載している
                                            <ul class="list-ul">
                                                <li>(例)「大人の関係を希望しています」</li>
                                            </ul>
                                        </li>
                                        <li>援助交際やそれを疑われる文章が送られてくる
                                            <ul class="list-ul">
                                                <li>(例)「大人の関係で渋谷で会いたいな♪ 最初は3で会えたら嬉しいです！ 2回目以降、最初にもらったお金はお返しします！」</li>
                                            </ul>
                                        </li>
                                        <li>お会いする前に金銭やギフトの要求を行う
                                            <ul class="list-ul">
                                                <li>(例)「実は今お金に困ってて……10万円必要なんです、振り込んでくださる方を探してます＞＜」</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <span class="accordion-title">マッチングのヒント</span>
                    <ul class="accordion-ul">
                        <li class="accordion-title-chil">
                            <span class="accordion-title-sub-chil"> プロフィールについて </span>
                            <ul class="accordion-ul">
                                <li class="accordion-content">
                                    <strong class="accordion-strong"> 自己紹介文を上手に書くには？ </strong>
                                    <p>
                                        自分のことを自由に書ける「自己紹介」項目は、ご自身を最大限にアピールできる場所です。<br>
                                        お目当ての相性の良いお相手と出会うためには、できるだけ充実したプロフィールを作成ください。
                                    </p>

                                    <strong class="accordion-strong">プロフィール画像登録時、画面が真っ黒になる場合や写真が登録できないとき</strong>
                                    <p>
                                        ご使用のブラウザに「カメラ・フォルダのアクセス権限」が無い可能性がございます。
                                        <strong>アクセス権限許可手順（iPhone）</strong>
                                        <ol>
                                            <li>設定アプリを開く</li>
                                            <li>プライバシーを選択</li>
                                            <li>写真を選択</li>
                                            <li>お使いのブラウザのアクセス権限をONに設定してください</li>
                                        </ol><br><br>

                                        <strong>アクセス権限許可手順（Android）</strong>
                                        <ol>
                                            <li>設定アプリを開 く</li>
                                            <li>[端末]-[アプリ]をタップします </li>
                                            <li>アプリ一覧からアクセス権の設定をしたいアプリをタップします </li>
                                            <li>[許可]の項目をタップします（ここでアプリに許可するアクセス権の設定を行います）</li>
                                            <li>許可するアクセス権のON/OFFを設定します </li>
                                            <li>お使いのブラウザのアクセス権限をONに設定してください </li>
                                        </ol>
                                    </p>
                                </li>
                            </ul>
                        </li>
                        <li class="accordion-title-chil">
                            <span class="accordion-title-sub-chil">いいね！が減るタイミングはいつですか？ </span>
                            <ul class="accordion-ul">
                                <li class="accordion-content">
                                    <p>
                                        お相手に「いいね！」を送るごとに、残「いいね！」回数は１回分減ります。<br>
                                        お相手から「いいね！」をもらい、「いいね！ありがとう」を返した場合に「いいね！」は減りません。<br>
                                        「いいね！ありがとう」を返すとマッチングが成立し、メッセージのやりとりが行えるようになります。
                                    </p>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <span class="accordion-title">Sweet Honeysの機能について</span>
                    <ul class="accordion-ul">
                        <li class="accordion-title-chil">
                            <span class="accordion-title-sub-chil"> 足あとについて </span>
                            <ul class="accordion-ul">
                                <li class="accordion-content">
                                    <strong class="accordion-strong">「足あと」とは？</strong>
                                    <p>
                                        足あととは、あなたのプロフィールを訪問した人を記録したものです。<br>
                                        同じ人が1日に何度も訪れた場合、最新の足あとだけが表示されます。
                                    </p>

                                    <strong class="accordion-strong">足あとを残さない方法</strong>
                                    <p>
                                        訪れたお相手のプロフィールに、自分の足あとを残したくない場合は、下記の手順で設定をすることが可能です。
                                    </p>
                                    <ul class="list-ul">
                                        <li>「マイページ」より「設定」を選択</li>
                                        <li>「足あと設定」を選択</li>
                                        <li>「足あとを残す」をオフに変更</li>
                                    </ul>

                                    <strong class="accordion-strong">足あとを確認する方法</strong>
                                    <ul class="list-ul">
                                        <li>「マイページ」より「足あと」を選択</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="accordion-title-chil">
                            <span class="accordion-title-sub-chil"> 検索結果の表示について </span>
                            <ul class="accordion-ul">
                                <li class="accordion-content">
                                    <p>
                                        異性の検索結果に表示される順番は、ご利用状況により変化します。
                                    </p>
                                    <p>
                                        下記の方法でご自身を検索結果の上位に表示させることが可能になります。<br>
                                        いいね！を受け取れる確率や、マッチングする確率が上がりますのでぜひご活用ください。
                                    </p>
                                    <ul class="list-ul">
                                        <li>Sweet Honeysにこまめにログインする</li>
                                        <li>プロフィールを埋める</li>
                                        <li>自己紹介文を登録する</li>
                                        <li>サブ写真を多く登録する</li>
                                        <li>有料（男性のみ）・プレミアム会員を契約する</li>
                                    </ul>

                                    <strong class="accordion-strong">足あとを確認する方法</strong>
                                    <ul class="list-ul">
                                        <li>「マイページ」より「足あと」を選択</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="accordion-title-chil">
                            <span class="accordion-title-sub-chil"> お客様のプロフィールの異性側検索結果の表示について </span>
                            <ul class="accordion-ul">
                                <li class="accordion-content">
                                    <p>
                                        異性の検索結果に表示される順番は、下記のご利用状況により変化します。
                                    </p>
                                    <ul class="list-ul">
                                        <li> 有料（男性のみ）・プレミアム会員を契約する</li>
                                        <li> Sweet Honeysにこまめにログインする</li>
                                        <li> プロフィールをすべて埋める</li>
                                        <li>「いいね！」「いいね！ありがとう」を多くもらう</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="accordion-title-chil">
                            <span class="accordion-title-sub-chil"> メッセージが否認されて送れません </span>
                            <ul class="accordion-ul">
                                <li class="accordion-content">
                                    <p>
                                        お送り頂いたメッセージや画像にSweet Honeys運営事務局が不適切だと判断した内容が含まれている場合、メッセージは審査時に否認され、お相手に届くことはありません。
                                    </p>
                                </li>
                            </ul>
                        </li>
                        <li class="accordion-title-chil">
                            <span class="accordion-title-sub-chil"> メッセージについて </span>
                            <ul class="accordion-ul">
                                <li class="accordion-content">
                                    <strong class="accordion-strong">メッセージが送受信できません</strong>
                                    <p>
                                        下記に当てはまる場合、メッセージの送受信機能をご利用いただくことができません。
                                    </p>
                                    <ul class="list-ul">
                                        <li>1通目のメッセージが審査中</li>
                                        <li>お相手が年齢確認を完了していない</li>
                                        <li>男性のお客様で無料会員に移行された場合（メッセージにぼかしが入ります）</li>
                                    </ul>
                                    <p>
                                        1 通目の審査に関しましてはSweet Honeys利用規約で禁じられている行為について再度ご確認ください。
                                    </p>

                                    <strong class="accordion-strong">メッセージの保持期間</strong>
                                    <p>
                                        メッセージの保持期間に期限はございません。
                                    </p>

                                    <strong class="accordion-strong">メッセージでの絵文字利用</strong>
                                    <p>
                                        Sweet Honeysにて絵文字を使うことは出来ません。文字化けやエラーの原因と成りますのでご利用はお控えください。
                                    </p>

                                    <strong class="accordion-strong">メッセージのやりとりをしていた相手が表示されなくなりました</strong>
                                    <p>
                                        下記に当てはまる場合、メッセージのやりとりをしていた相手が表示されなくなります。
                                    </p>
                                    <ul class="list-ul">
                                        <li>お相手が退会された</li>
                                        <li>お相手にブロックされている</li>
                                        <li>お相手を非表示/ブロックした</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="accordion-title-chil">
                            <span class="accordion-title-sub-chil"> いいね！が付与されるタイミングはいつですか？ </span>
                            <ul class="accordion-ul">
                                <li class="accordion-content">
                                    <p>
                                        「いいね！」の残り回数が0になってしまうと、「いいね！」を送れなくなってしまいます。<br>
                                        その場合でも、下記方法で入手したり、付与されることがあります。
                                    </p>

                                    <strong class="accordion-strong">入手方法</strong>
                                    <p>
                                        Sweet Honeysポイントを使用することで「いいね！」を入手できます。<br>
                                        Sweet Honeysポイント【1pt = 「いいね！」1回】と交換することが可能です。<br>
                                        Sweet Honeysポイントがなくなってしまった場合は購入することができます。<br>
                                        他にも、ログインボーナス等の方法で獲得出ることが可能です。
                                    </p>

                                    <strong class="accordion-strong">「いいね〜」の残り回数の回復について</strong>

                                    <p><strong>女性（無料会員・プレミアム会員）</strong></p>
                                    <p>
                                        女性会員さまの「いいね！」を押せる回数に制限はございません。<br>
                                        より多くのお目当てのお相手に「いいね！」をお送りください。
                                    </p>

                                    <p><strong>男性（無料・有料会員）</strong></p>
                                    <p>
                                        初回、アプリへの登録時に100いいね！を付与させていただきます。<br>
                                        Sweet Honeysポイントを使用することで「いいね！」を入手することができ、
                                        Sweet Honeysポイント【1pt = 「いいね！」1回】と交換することが可能です。<br>
                                        有料会員のみなさまへ、ご登録から30日毎にSweet Honeysポイント「50pt」を付与させていただきます。<br>
                                        また、Sweet Honeysポイントがなくなってしまった場合は購入することができます。
                                    </p>

                                    <p><strong>男性（プレミアム会員）</strong></p>
                                    <p>
                                        初回、アプリへの登録時に100いいね！を付与させていただきます。<br>
                                        また、プレミアム会員のお客様は、毎月Sweet Honeysポイント「200pt」を付与させていただきます。
                                        Sweet Honeysポイントを使用することで「いいね！」を入手することができ、
                                        Sweet Honeysポイント【1pt = 「いいね！」1回】と交換することが可能です。<br>
                                        また、Sweet Honeysポイントがなくなってしまった場合は購入することも可能です。<br>
                                        （※プレミアム会員へは、有料会員へのご登録が必須となります）
                                    </p>
                                </li>
                            </ul>
                        </li>
                        <li class="accordion-title-chil">
                            <span class="accordion-title-sub-chil"> 月が変わったのに残「Sweet Honeysポイント」が増えません（プレミアム会員）</span>
                            <ul class="accordion-ul">
                                <li class="accordion-content">
                                    <p>
                                       残「Sweet Honeysポイント」は、プレミアム会員へのご登録から30日毎に与えられ、毎月1日に付与されるわけではございません。
                                    </p>
                                </li>
                            </ul>
                        </li>
                        <li class="accordion-title-chil">
                            <span class="accordion-title-sub-chil">「お相手から」とは何ですか？ </span>
                            <ul class="accordion-ul">
                                <li class="accordion-content">
                                    <p>
                                        あなたに「いいね！」をしてくれたお相手の一覧です。<br>
                                        自分に「いいね！」を送ってくれた相手に対して「いいね！ありがとう」を返すことで、メッセージのやり取りを始めることができるようになります。
                                    </p>
                                </li>
                            </ul>
                        </li>
                        <li class="accordion-title-chil">
                            <span class="accordion-title-sub-chil">「いいね！」が減るタイミングはいつになりますか？</span>
                            <ul class="accordion-ul">
                                <li class="accordion-content">
                                    <p>
                                        お相手に「いいね！」を送るごとに、残「いいね！」回数は1回分減ります。<br>
                                        お相手からの「いいね！」に対し「いいね！ありがとう」を返した場合には、「いいね！」は減りません。<br>
                                        「いいね！ありがとう」を返すとマッチングが成立し、メッセージにてやり取りが可能になります。<br>
                                        お相手から「いいね！」を受け取った際には、積極的に「いいね！ありがとう」を返してみましょう。
                                    </p>
                                </li>
                            </ul>
                        </li>
                        <li class="accordion-title-chil">
                            <span class="accordion-title-sub-chil">「いいね！」を取り消したいのですが・・ </span>
                            <ul class="accordion-ul">
                                <li class="accordion-content">
                                    <p>
                                        一度お相手に送った「いいね！」を取り消すことはできません。
                                    </p>
                                </li>
                            </ul>
                        </li>
                        <li class="accordion-title-chil">
                            <span class="accordion-title-sub-chil">　絵文字を使いたいのですが </span>
                            <ul class="accordion-ul">
                                <li class="accordion-content">
                                    <p>
                                        Sweet Honeysにて絵文字を使うことは出来ません。文字化けやエラーの原因と成りますのでご利用はお控えください。
                                    </p>
                                </li>
                            </ul>
                        </li>
                        <li class="accordion-title-chil">
                            <span class="accordion-title-sub-chil"> お客様のプロフィールの異性側検索結果での表示について </span>
                            <ul class="accordion-ul">
                                <li class="accordion-content">
                                    <p>
                                        異性の検索結果に表示される順番は、下記のご利用状況により変化します。
                                    </p>
                                    <ul class="list-ul">
                                        <li>プレミアム会員になる</li>
                                        <li>Sweet Honeysにこまめにログインする</li>
                                        <li>プロフィールをすべて埋める</li>
                                        <li>「いいね！」「いいね！ありがとう」を多くもらう</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="accordion-title-chil">
                            <span class="accordion-title-sub-chil">「いいね！」について </span>
                            <ul class="accordion-ul">
                                <li class="accordion-content">
                                    <p>まずは気になるお相手に「いいね！」をしてみましょう。</p>
                                    <p>
                                        「いいね！」とは、お相手のプロフィールや写真をみて興味をもったお相手に押すものです。<br>
                                        自分に「いいね！」を押してくれたお相手に対し、「いいね！ありがとう」を返すことでマッチングが成立し、初めてメッセージを送ることが可能になります。
                                    </p>
                                    <p>
                                        同じお相手に複数回「いいね！」することと、一度押した「いいね！」を取り消すことは出来ませんので予めご了承ください。
                                    </p>
                                </li>
                            </ul>
                        </li>
                        <li class="accordion-title-chil">
                            <span class="accordion-title-sub-chil"> マッチング成立したあとは何をすればよいですか？ </span>
                            <ul class="accordion-ul" style="display: block;">
                                <li class="accordion-content">
                                    <p>
                                        マッチング成立とは、自分やお相手の送った「いいね！」に対して「いいね！ありがとう」を返した状況を指します。<br>
                                        マッチングが成立すると、お相手とのメッセージが可能になります。さっそくお相手にメッセージを送ってみましょう。<br>

                                        ※男女ともに、自由にメッセージを送受信するには「年齢確認」が必要です。（身分証明書をお送りいただくことで年齢確認が可能です。）<br>
                                        また、男性のお客様が自由にメッセージを送受信されるには有料プランへの登録が必要になります。
                                    </p>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <span class="accordion-title">審査について</span>
                    <ul class="accordion-ul">
                        <li class="accordion-title-chil">
                            <span class="accordion-title-sub-chil"> 審査はどのくらいで終わりますか？ </span>
                            <ul class="accordion-ul">
                                <li class="accordion-content">
                                    <p>
                                        自己紹介文・メッセージ・一言コメントなどを目視にて審査を行っております。
                                    </p>
                                    <p>
                                        審査は通常1時間以内に完了しますが、場合によっては24時間程度お時間をいただくこともございます。<br>
                                        また、審査の結果公開できないと判断した場合はお知らせにてその旨をご連絡させていただきます。
                                    </p>
                                    <p>
                                        24時間経過しても審査が完了しない場合には、お手数ですがSweet Honeys運営事務局までお問い合わせください。
                                    </p>
                                </li>
                            </ul>
                        </li>
                        <li class="accordion-title-chil">
                            <span class="accordion-title-sub-chil"> 写真の審査基準について </span>
                            <ul class="accordion-ul" style="display: block;">
                                <li class="accordion-content">
                                    <p>審査での否認の対象は以下項目となります。</p>

                                    <strong class="accordion-strong">個人を特定しうる情報を含んでいるもの</strong>
                                    <ul class="list-ul">
                                        <li>本名が写り込んでいるもの</li>
                                        <li>URL・メールアドレスなどの連絡先が表示されているもの</li>
                                        <li>勤務先の社名・ロゴ・役職などが写り込んでいるもの</li>
                                        <li>車のナンバープレートが写り込んでいるもの</li>
                                        <li>その他、個人の特定が可能だと判断しうるもの</li>
                                    </ul>

                                    <strong class="accordion-strong">権利を損害もの</strong>
                                    <ul class="list-ul">
                                        <li>著名人（芸能人、モデルなど）の写真のような本人以外の人物</li>
                                        <li>他人が著作権を有するもの</li>
                                        <li>18歳未満と判断される写真</li>
                                    </ul>

                                    <strong class="accordion-strong">写真が見づらいもの</strong>
                                    <ul class="list-ul">
                                        <li>不鮮明であるもの</li>
                                        <li>上下が逆さまであるもの</li>
                                        <li>画像加工ツールなどで著しく加工されているもの</li>
                                    </ul>

                                    <strong class="accordion-strong">公序良俗の反するもの</strong>
                                    <ul class="list-ul">
                                        <li>ヌード写真</li>
                                        <li>わいせつ、またはそれを想起させうるもの</li>
                                        <li>宗教・信条を主張するもの</li>
                                        <li>その他閲覧者に不快感を与えると判断しうるもの</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="accordion-title-chil">
                            <span class="accordion-title-sub-chil"> 年齢確認について </span>
                            <ul class="accordion-ul" style="display: block;">
                                <li class="accordion-content">
                                    <p>年齢確認は公的証明書のご提出が必要となります。<br>また、ご登録されている年齢と年齢確認提出書類に相違がある場合、ご利用いただけません。</p>

                                    <strong class="accordion-strong">年齢確認書類の種類</strong>
                                    <ul class="list-ul">
                                        <li>運転免許証</li>
                                        <li>健康保険証</li>
                                        <li>パスポート etc.</li>
                                    </ul>
                                    <small>（※証明書のコピーは無効となります）</small>

                                    <strong class="accordion-strong">必須の情報</strong>
                                    <p>下記が必ず1枚の写真に写るようにしてください</p>
                                    <ul class="list-ul">
                                        <li>生年月日</li>
                                        <li>証明書の名称</li>
                                        <li>証明書の発行者の名称</li>
                                    </ul>
                                    <br>
                                    <p>上記必須の情報以外は、らくがき機能で塗りつぶすことが可能です。</p>
                                    <small>※年齢確認書類をご提出後に、ご登録いただいている生年月日を変更したい場合には、<a href="/sweethoneys/contact">お問い合わせ</a>より正しい生年月日をお送りください。</small>
                                </li>
                            </ul>
                        </li>
                        <li class="accordion-title-chil">
                            <span class="accordion-title-sub-chil"> 年齢確認の審査はどれくらいで終わりますか？ </span>
                            <ul class="accordion-ul" style="display: block;">
                                <li class="accordion-content">
                                    <p>
                                        年齢確認は1件ずつ目視にて審査・チェックを行っております。
                                    </p>
                                    <p>
                                        審査は通常1時間以内に完了しますが、場合によっては24時間程度お時間をいただくこともございます。<br>
                                        また、ご提出いただいた年齢確認書類に不備があった場合は、お知らせ等にてその旨をご連絡させていただきます。
                                    </p>
                                    <p>
                                        24時間経過しても審査が完了しない場合には、お手数ですがSweet Honeys運営事務局までお問い合わせください。
                                    </p>
                                </li>
                            </ul>
                        </li>
                        <li class="accordion-title-chil">
                            <span class="accordion-title-sub-chil"> 年齢（生年月日）を間違えて登録してしまった場合 </span>
                            <ul class="accordion-ul">
                                <li  class="accordion-content">
                                    <p>
                                        年齢確認画面の下部に、「生年月日を間違えて登録して変更したい場合」ボタンがございます。生年月日の変更は1回のみとなり、年齢確認書類の提出後は変更できませんので予めご了承くださいませ。<br>
                                        また、ご登録されている年齢と年齢確認提出書類に相違がある場合、ご利用いただけません。
                                    </p>
                                    <small>※年齢確認書類をご提出後に、ご登録いただいている生年月日を変更したい場合には、<a href="/sweethoneys/contact">お問い合わせ</a>より正しい生年月日をお送りください。</small>
                                </li>
                            </ul>
                        </li>
                        <li class="accordion-title-chil">
                            <span class="accordion-title-sub-chil"> プロフィールが否認されるのはなぜですか？ </span>
                            <ul class="accordion-ul" style="display: block;">
                                <li class="accordion-content">
                                    <p>
                                    以下に該当するものは、自己紹介文等のプロフィール情報への掲載を否認しております。
                                    </p>
                                    <ul class="list-ul">
                                        <li>閲覧者を不快にする可能性がある表現</li>
                                        <li>本名</li>
                                        <li>勤務先企業名など、所属する組織を特定させるもの</li>
                                        <li>電話番号・住所などの連絡先</li>
                                        <li>他サービスのアカウント情報、またはそれを想起させる表現</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="accordion-title-chil">
                            <span class="accordion-title-sub-chil"> プロフィールの審査について </span>
                            <ul class="accordion-ul" style="display: block;">
                                <li class="accordion-content">
                                    <p>
                                        プロフィールの審査は通常1時間以内に完了しますが、場合によっては24時間程度お時間をいただくこともございます。
                                    </p>
                                    <p>
                                        万が一、24時間経過しても審査が完了しない場合には、お手数ですがSweet Honeys運営事務局までお問い合わせください。
                                    </p>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <span class="accordion-title">お支払いについて</span>
                    <ul class="accordion-ul">
                        <li class="accordion-title-chil">
                            <span class="accordion-title-sub-chil"> 決済方法 </span>
                            <ul class="accordion-ul">
                                <li class="accordion-content">
                                    <ul class="list-ul">
                                        <li>クレジットカード決済</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="accordion-title-chil">
                            <span class="accordion-title-sub-chil"> 退会と料金の請求について </span>
                            <ul class="accordion-ul">
                                <li class="accordion-content">
                                    <p>決済方法によって必要なお手続きが異なります。</p>
                                    <p>
                                        また、決済方法に問わず月額料金の月割り・日割りでのご返金は行っておりません。ご了承くださいませ。
                                    </p>
                                    <p>有料会員・プレミアム会員の方で退会をご希望の方は、退会前に必ず定期課金の解除を行ってください。解約の際は、「マイページ＞設定＞定期課金設定」から定期課金中の購入をキャンセルしてください。</p>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <span class="accordion-title">プランについて</span>
                    <ul class="accordion-ul">
                        <li class="accordion-title-chil">
                            <span class="accordion-title-sub-chil"> 女性会員はお金がかかるの？ </span>
                            <ul class="accordion-ul">
                                <li  class="accordion-content">
                                    <p>
                                        女性会員様はSweet Honeysの基本的な機能を全て無料でご利用いいただけます。<br>
                                    </p>
                                </li>
                            </ul>
                        </li>
                        <li class="accordion-title-chil">
                            <span class="accordion-title-sub-chil"> 有料会員を解約して無料会員に変更するには？（男性のみ）</span>
                            <ul class="accordion-ul">
                                <li class="accordion-content">
                                    <p>
                                        無料会員に戻ると、メッセージの送受信はできなくなり、有料会員時のメッセージ等のやりとりも閲覧できなくなってしまいます。<br>
                                        （※無料会員であっても、アカウント自体は維持することができます）
                                    </p>
                                </li>
                            </ul>
                        </li>
                        <li class="accordion-title-chil">
                            <span class="accordion-title-sub-chil">有料会員について（男性のみ）</span>
                            <ul class="accordion-ul">
                                <li class="accordion-content">
                                    <p>主な特典としては下記のようなものがございます。</p>
                                    <ul class="list-ul">
                                        <li>メッセージの閲覧</li>
                                        <li>女性会員様とのメッセージのやりとり</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="accordion-title-chil">
                            <span class="accordion-title-sub-chil">プレミアム会員について（男性）</span>
                            <ul class="accordion-ul">
                                <li class="accordion-content">
                                    <p>男性のお客様がプレミアム会員にご登録いただくには、有料会員にご契約いただく必要がございます。</p>
                                    <p>プレミアム会員の主な特典としては下記のようなものがございます。</p>
                                    <ul class="list-ul">
                                        <li>メッセージの閲覧</li>
                                        <li>女性会員様とのメッセージのやりとり</li>
                                        <li>検索機能の詳細検索</li>
                                        <li>検索結果の上位表示</li>
                                        <li>メッセージの既読・未読の表示</li>
                                        <li>毎月200ptの付与（登録日から30日毎）</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="accordion-title-chil">
                            <span class="accordion-title-sub-chil">プレミアム会員について（女性）</span>
                            <ul class="accordion-ul">
                                <li class="accordion-content">
                                    <p>プレミアム会員の主な特典としては下記のようなものがございます。</p>
                                    <ul class="list-ul">
                                        <li>検索機能の詳細検索</li>
                                        <li>検索結果の上位表示</li>
                                        <li>メッセージの既読・未読の表示</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <span class="accordion-title">設定について</span>
                    <ul class="accordion-ul">
                        <li class="accordion-title-chil">
                            <span class="accordion-title-sub-chil"> もしも知り合いを見つけた時は </span>
                            <ul class="accordion-ul">
                                <li class="accordion-content">
                                    <strong class="accordion-strong">１、知り合いを見つけたら</strong>
                                    <p>
                                        Sweet Honeysを利用していることを知られたくないお相手を見つけた場合、プロフィール画面右上にあるボタンをタップします。
                                    </p>

                                    <strong class="accordion-strong">２、「ブロックする」を選択</strong>
                                    <p>
                                        「ブロックする」をタップします。
                                    </p>
                                    <strong class="accordion-strong">３、設定完了</strong>
                                    <p>
                                        これでブロックの完了です。
                                        ブロックの解除は「マイページ」>「設定」>「ブロックリスト」より行うことが可能です。
                                    </p>
                                    <p>また、「マイページ」>「設定」>「電話番号をブロック」より、ご登録いただいた電話番号のお相手を自動でブロックすることが可能です。</p>
                                </li>
                            </ul>
                        </li>
                        <li class="accordion-title-chil">
                            <span class="accordion-title-sub-chil">「ブロック」について </span>
                            <ul class="accordion-ul">
                                <li class="accordion-content">
                                    <strong class="accordion-strong">ブロックとは</strong>
                                    <p>
                                    不快な出来事が発生した際に、相互にメッセージ等の連絡をできなくするための機能です。<br>
                                    マッチング前のお相手、マッチング後のお相手、どちらもブロックにすることが可能です。<br>ブロックの解除は「マイページ」>「設定」>「ブロックリスト」より行うことが可能です。
                                    </p>
                                    <ul class="list-ul">
                                        <li>メッセージの送受信をはじめとするすべてのコンタクトがお互いに行えなくなります</li>
                                        <li>それまでにやり取りしたメッセージはすべて消去されます。</li>
                                        <li>足あと履歴からお互いが消去されます。</li>
                                    </ul>
                                    <p>
                                        ブロックしたお相手の検索結果や足あと履歴にお客様が表示されることはありませんのでご安心ください。
                                    </p>
                                </li>
                            </ul>
                        </li>
                        <li class="accordion-title-chil">
                            <span class="accordion-title-sub-chil">「メール通知」について </span>
                            <ul class="accordion-ul">
                                <li class="accordion-content">
                                    <p>
                                        「いいね！の受信時」や「マッチングした時」、「新着メッセージを受信した時」に、ご登録いただいたメールアドレスにお知らせメールをお送りしております。<br>
                                        各通知のON/OFFは、下記手順にて設定することができます。
                                    </p>
                                    <ul class="list-ul">
                                        <li>「マイページ」より「設定」を選択</li>
                                        <li>「通知設定」を選択</li>
                                        <li>「メール通知」の設定をご変更ください</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="accordion-title-chil">
                            <span class="accordion-title-sub-chil">「通知メール」の配信先のメールアドレスのご変更 </span>
                            <ul class="accordion-ul">
                                <li class="accordion-content">
                                    <p>
                                    通知メールの配信先のメールアドレスを変更するには、以下の手順にて行ってください。
                                    </p>
                                    <ul class="list-ul">
                                        <li>「マイページ」より「設定」を選択</li>
                                        <li>「登録情報変更」を選択</li>
                                        <li>各登録内容をご変更ください</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <span class="accordion-title">解約・退会について</span>
                    <ul class="accordion-ul">
                        <li class="accordion-title-chil">
                            <span class="accordion-title-sub-chil"> 退会について </span>
                            <ul class="accordion-ul">
                                <li class="accordion-content">
                                    <p>
                                        退会をご希望の方は、恐れ入りますが「マイページ」→「設定」→「お問い合わせ」よりお問い合わせカテゴリにて「退会」をお選びいただきお問い合わせください。<br>
                                        また、退会後は30日間再登録ができません。<strong><a href="/sweethoneys/privatemode">プライベートモード設定</a></strong>よりプライベートモードにすることでお相手の検索結果に表示されず、足あともつくことがありませんので、プライベートモード設定にされることをお勧めいたします。<br>
                                        Sweet Honeysを退会する際には、下記項目にご注意くださいませ。
                                    </p>
                                    <p><strong>※ 有料会員・プレミアム会員の方で退会をご希望の方は、退会前に必ず「マイページ＞設定＞定期課金設定」から定期課金中の購入をキャンセルしてください。</strong></p>
                                    <ul class="list-ul">
                                        <li>これまでのデータがすべて削除されます</li>
                                        <li>退会すると、しばらく再登録できません</li>
                                        <li>再登録後、以前のデータは引き継げません</li>
                                    </ul>
                                    <p>
                                        また、決済方法に関わらず、月額料金の月割り・日割りでのご返金は行っておりませんので予めご了承くださいませ。
                                    </p>

                                    <strong class="accordion-strong">注意事項</strong>
                                    <ul class="list-ul">
                                        <li>端末上でアプリを削除されても、退会したことにはなりません</li>
                                        <li>退会されると、すべての会員向けサービスがご利用いただけなくなります</li>
                                        <li>有料会員・プレミアム会員の期間途中に退会する場合も月割り・日割りでの返金は致しかねます</li>
                                        <li>退会されますと、一定期間は再登録できません</li>
                                        <li>退会済みのユーザー様のプロフィールは閲覧できなくなります</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="accordion-title-chil">
                            <span class="accordion-title-sub-chil"> 退会後の再登録に関しまして </span>
                            <ul class="accordion-ul">
                                <li class="accordion-content">
                                    <p>
                                        Sweet Honeysをご退会されますと、一定期間は再登録頂けません。<br>
                                        恐れ入りますが、お時間を置いてお試しください。
                                    </p>
                                </li>
                            </ul>
                        </li>
                        <li class="accordion-title-chil">
                            <span class="accordion-title-sub-chil"> お相手が見つかったので、しばらくお休みしたい </span>
                            <ul class="accordion-ul">
                                <li class="accordion-content">
                                    <p>
                                        退会後は 30 日間再登録ができません。<strong><a href="/sweethoneys/privatemode">プライベートモード設定</a></strong>よりプライベートモードにすることでお相手の検索結果に表示されず、足あともつくことがありませんので、プライベートモード設定にされることをお勧めいたします。
                                    </p>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <span class="accordion-title">トラブルが起こったときには</span>
                    <ul class="accordion-ul">
                        <li class="accordion-title-chil">
                            <span class="accordion-title-sub-chil">もしも知り合いを見つけた時は</span>
                            <ul class="accordion-ul">
                                <li class="accordion-content">
                                    <strong class="accordion-strong">１、知り合いを見つけたら</strong>
                                    <p>
                                        Sweet Honeysを利用していることを知られたくないお相手を見つけた場合、プロフィール画面右上にあるボタンをタップします。
                                    </p>

                                    <strong class="accordion-strong">２、「ブロックする」を選択</strong>
                                    <p>
                                        「ブロックする」をタップします。
                                    </p>
                                    <strong class="accordion-strong">４、設定完了</strong>
                                    <p>
                                        これで、ブロックの完了です。<br>
                                        ブロックの解除は「マイページ」>「設定」>「ブロックリスト」より行うことが可能です。
                                    </p>
                                </li>
                            </ul>
                        </li>
                        <li class="accordion-title-chil">
                            <span class="accordion-title-sub-chil">実際に会ったら違う人だった</span>
                            <ul class="accordion-ul">
                                <li class="accordion-content">
                                    <p>
                                        実際に会ってみたら、プロフィールの写真と全く違う人物だった場合にはSweet Honeys運営事務局へのご通報のご協力をお願いいたします。<br>
                                        ご通報をいただいた内容に関しましては、弊社にて確認の上、迅速に対応いたします。
                                    </p>
                                    <p>
                                        お相手の顔を事前に確認したい場合には、メッセージのやりとりにて、プロフィールとは異なる写真を交換されることをお薦めいたします。
                                    </p>
                                </li>
                            </ul>
                        </li>
                        <li class="accordion-title-chil">
                            <span class="accordion-title-sub-chil">18歳未満、高校生がいる</span>
                            <ul class="accordion-ul">
                                <li class="accordion-content">
                                    <p>
                                       18歳未満、または高校生でご登録されているユーザーを見つけた際には、違反報告よりSweet Honeys運営事務局へのご通報のご協力をお願いいたします。<br>
                                        ご通報をいただいた内容に関しましては、弊社にて確認の上、迅速に対応いたします。
                                    </p>
                                </li>
                            </ul>
                        </li>
                        <li class="accordion-title-chil">
                            <span class="accordion-title-sub-chil">ビジネス勧誘と対策について</span>
                            <ul class="accordion-ul">
                                <li class="accordion-content">
                                    <p>
                                        下記のようなビジネス勧誘業者を見つけた際には、Sweet Honeys運営事務局へのご通報のご協力をお願いいたします。<br>
                                        ご通報をいただいた内容に関しましては、弊社にて確認の上、迅速に対応いたします。
                                    </p>
                                    <ul class="list-ul">
                                        <li>アフィリエイト･投資･FX等の商材の販促･販売</li>
                                        <li>化粧品･サプリメント･美容品の販促･販売</li>
                                        <li>旅行商材や家電等の販促･販売</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="accordion-title-chil">
                            <span class="accordion-title-sub-chil"> メッセージの1通目で他サービスのIDを送られてくる </span>
                            <ul class="accordion-ul">
                                <li class="accordion-content">
                                    <p>
                                        メッセージの1通目で他サービスのIDを送受信するユーザーを見つけた際には、違反報告よりSweet Honeys運営事務局へのご通報のご協力をお願いいたします。<br>
                                        ご通報をいただいた内容に関しましては、弊社にて確認の上、迅速に対応いたします。
                                    </p>
                                </li>
                            </ul>
                        </li>
                        <li class="accordion-title-chil">
                            <span class="accordion-title-sub-chil"> 不審な人物への対策について </span>
                            <ul class="accordion-ul">
                                <li class="accordion-content">
                                    <p>
                                        Sweet Honeys内でやり取りをしているお相手が｢不審だ｣と感じた場合、ご通報のご協力をお願いいたします。Sweet Honeysでは365日24時間体制を敷いて監視対応しており業者･違反者対策には万全を期しておりますが、会員の皆様の通報等のご協力が必要と考えております。<br>
                                        業者･違反者疑いの会員を発見されましたら、お相手のプロフィールの右上のボタンから速やかにご通報をお願いいたします。
                                    </p>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <span class="accordion-title">不具合について</span>
                    <ul class="accordion-ul">
                        <li class="accordion-title-chil">
                            <span class="accordion-title-sub-chil"> マッチング済みのお相手が突然メッセージ一覧から消えた </span>
                            <ul class="accordion-ul">
                                <li class="accordion-content">
                                    <p>
                                        マッチング済みのお相手が突然メッセージ一覧から消える原因としましては、お相手様よりブロックをされているか、誤ってお相手を非表示にされている可能性がございます。<br>誤ってお相手を非表示にされてしまった場合には、「マイページ」>「設定」>「メッセージ非表示リスト」より該当するお相手のユーザー様の非表示解除をお試しくださいませ。
                                    </p>
                                </li>
                            </ul>
                        </li>
                        <li class="accordion-title-chil">
                            <span class="accordion-title-sub-chil"> お問い合わせ方法 </span>
                            <ul class="accordion-ul">
                                <li class="accordion-content">
                                    <p>
                                        Sweet Honeysでは、24時間お客様からのお問い合わせ・ご相談を受け付けております。ヘルプ（よくある質問）をご覧いただき、解決に至らない場合には以下の手順にてお気軽にお問い合わせください。
                                    </p>
                                    <ol>
                                        <li>「マイページ」より「設定」を選択</li>
                                        <li>サポート内の「<a href="/sweethoneys/contact">お問い合わせ</a>」からお問い合わせフォームにご記入・送信ください</li>
                                    </ol>
                                </li>
                            </ul>
                        </li>
                        <li class="accordion-title-chil">
                            <span class="accordion-title-sub-chil"> 審査はどのくらいで終わりますか？ </span>
                            <ul class="accordion-ul">
                                <li class="accordion-content">
                                    <p>
                                        年齢確認・プロフィール写真・自己紹介文・メッセージ・一言コメントなどを目視にて審査を行っております。
                                    </p>
                                    <p>
                                        審査は通常1時間以内に完了しますが、場合によっては24時間程度お時間をいただくこともございます。<br>
                                        また、審査の結果公開できないと判断した場合はメールにてその旨をご連絡させていただきます。
                                    </p>
                                    <p>
                                        24時間経過しても審査が完了しない場合には、お手数ですがSweet Honeys運営事務局までお問い合わせください。
                                    </p>
                                </li>
                            </ul>
                        </li>
                        <li class="accordion-title-chil">
                            <span class="accordion-title-sub-chil">メッセージにぼかしが入り、見られなくなってしまいました</span>
                            <ul class="accordion-ul">
                                <li class="accordion-content">
                                    <p>
                                        お客様の会員ステータスがが無料会員に移行したためと考えらます。会員ステータスをご確認ください。
                                    </p>
                                    <p>
                                        有料会員・プレミアム会員に再びご登録頂きますと過去のやり取りを含め全メッセージが閲覧できるようになります。
                                    </p>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <span class="accordion-title">その他</span>
                    <ul class="accordion-ul">
                        <li class="accordion-title-chil">
                            <span class="accordion-title-sub-chil"> お問い合わせ方法 </span>
                            <ul class="accordion-ul" style="display: block;">
                                <li class="accordion-content">
                                    <p>
                                        Sweet Honeysでは、24時間お客様からのお問い合わせ・ご相談を受け付けております。ヘルプ（よくある質問）をご覧いただき、解決に至らない場合には以下の手順にてお気軽にお問い合わせください。<br>場合によりご回答までに少々お時間をいただく場合もございます。予めご了承くださいませ。<br>また、お問い合わせの際にはメールアドレスのお間違いにお気をつけください。
                                    </p>
                                    <ol>
                                        <li>「マイページ」より「設定」を選択</li>
                                        <li>サポート内の「<a href="/sweethoneys/contact">お問い合わせ</a>」からお問い合わせフォームにご記入・送信ください</li>
                                    </ol>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    @include('customer.footer')
</div>
@stop
@section('script')
    @parent
    <script>
        $(document).ready(function() {
            $('.accordion-title').click(function() {
                $(this).next('.accordion-ul').slideToggle('slow');
            });

            $('.accordion-title-sub-chil').click(function(e) {

                $(this).siblings('.accordion-ul').slideToggle('slow');
                e.stopPropagation();
            });

            var filter = function () {
                var searchVal = $('#search').val();
                console.log(searchVal);
                $('.card, .accordion-title-chil').show();
                $('.accordion-ul').hide();
                if (searchVal.length === 0) {
                    return;
                }
                $('.accordion-title').each(function () {
                    var title = $(this);
                    var found = false;
                    
                    title.next('.accordion-ul').find('.accordion-title-chil').each(function () {
                        var li = $(this);
                        if (li.text().indexOf(searchVal) === -1) {
                            li.hide();
                        } else {
                            found = true;
                        }
                    });

                    if (!found) {
                        title.closest('.card').hide();
                    }
                });
            };
            $('#search').change(function (e) {
                e.preventDefault();
                filter();
            });

        });
    </script>
@stop

