@extends('layouts.master')
@section('title', 'Sweet Honeys')
@section('content')
<div class="wrap-container">
    <div class="header-tabs">
        <ul>
            <li class="header-tabs-item header-tabs-item-with-arrow">
                <a class="header-tabs-back" href="/users/{{$id}}/view-profile"></a>
                <h3> 違反報告 </h3>
            </li>
        </ul>
    </div>
    <section class="page page-breach">
        <p class="page-breach-lead">
            Sweet Honeys の利用規約に違反していると思われるユーザーを発見した場合は、以下のフォームをできるだけご記入の上、ご報告をお願いします。
        </p>
        <div class="page-breach-block">
            <p class="page-breach-ttl">報告対象ユーザー</p>
            <div class="page-breach-user">
                <img src="/assets/image/square_0501.jpeg"/>
                <p>みずきさん</p>
            </div>
        </div>
        <form method="POST" action="{!! route('report.user', $id ) !!}" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>

            <div class="page-breach-block">
                <p class="page-breach-ttl">違反理由</p>
                <select 
                    class="page-breach-input" 
                    id="violation_category_select" 
                    name="violation_category_id"
                >
                    <option value="">タップで選択</option>
                    <option value="159">他サイトやビジネスへの勧誘</option>
                    <option value="160">詐欺行為</option>
                    <option value="161">商売利用目的</option>
                    <option value="162">プロフィール項目の詐称</option>
                    <option value="163">偽アカウント</option>
                    <option value="164">不適切な登録内容</option>
                    <option value="165">無断のドタキャン</option>
                    <option value="166">メッセージが攻撃的</option>
                    <option value="167">ストーカー行為</option>
                    <option value="168">卑猥な言動</option>
                    <option value="169">個人情報交換後に連絡が途絶えた</option>
                    <option value="170">窃盗行為</option>
                    <option value="171">その他</option>
                </select>
                <p class="page-breach-ttl">具体的な理由</p>
                <textarea 
                    id="user_violation_report_reason" 
                    class="page-breach-textarea" 
                    placeholder="タップで記入" 
                    name="violation_reason"
                    value="{{ old('violation_reason') }}"
                ></textarea>
            </div>
            <div class="page-breach-block">
                <p class="page-breach-ttl">注意事項</p>
                <p class="page-breach-attention">
                    運営事務局にて内容を確認し、利用規約に違反する、または違反する可能性があると思われる場合には、<br>
                    しかるべき処理を取らせて頂きます。
                </p>
                <p class="page-breach-attention">
                    頂いた報告内容に対して、お問い合わせ頂いても個別に<br>
                    ご回答はできかねますので、ご了承ください。
                </p>
            </div>
            <div class="page-age-attention-button">
                <button 
                    class="button button-bg-gray button-tc-white button-modal disabled" 
                    type="button" onclick="$(this).closest('form').submit()">
                    <span class="button-text">内容を送信する</span>
                </button>
            </div>
        </form>
    </section>
    @include('customer/footer')
</div>
@stop
@section('script')
    @parent
    <script>
        $(document).ready(function(){
            var updateActiveButton = function () {
                if($('#violation_category_select').val() !== "" && $('#user_violation_report_reason').val().length > 0) {
                    $('.button-modal').removeClass('disabled button-bg-gray').addClass('button-bg-green');
                } else {
                    $('.button-modal').removeClass('button-bg-green').addClass('disabled button-bg-gray');
                }
            };  
            $('#violation_category_select').change(function () {
                updateActiveButton();
            });
            $('#user_violation_report_reason').keyup(function () {
                updateActiveButton();
            });
            updateActiveButton();
        });
    </script>
@stop