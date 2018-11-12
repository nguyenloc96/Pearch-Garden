@section('style')
    @parent
    <style>
        .footer {
            background-color: #242a35;
        }
        .section {
            padding-bottom: 80px;
            padding-top: 100px;
            position: relative;
        }
        .list-inline {
            padding-left: 0;
            list-style: none;
        }
        .list-inline-item:not(:last-child) {
            margin-right: 5px;
        }
        .list-inline-item {
            display: inline-block;
        }
        .text-muted {
            color: #868e96!important;
        }
        .footer-terms li:nth-child(1)::after {
            content: "|";
            margin: 0 20px;
            color: #757575;
        }
        .footer-terms li.list-inline-item a:hover{
            color: #fff;
        }
        .back-to-top {
            width: 30px;
            height: 30px;
            line-height: 30px;
            color: #07d79c;
            position: fixed;
            bottom: 10px;
            right: 20px;
            text-align: center;
            z-index: 10000;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            background-color: #3c3c3c;
            transition: all 0.5s;
        }
    </style>
@stop
<!-- START FOOTER -->
<footer class="footer section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="footer-terms">
                    <ul class="mb-0 list-inline text-center mt-4 pt-2">
                        <li class="list-inline-item"><a href="#" class="text-muted" >利用規約</a></li>
                        <li class="list-inline-item"><a href="#" class="text-muted" >プライバシーポリシー</a></li>
                    </ul>
                </div>
                <div class="mt-4 pt-2 text-center">
                    <p class="copy-rights text-muted mb-0">2018 © Peach Garden, Inc. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- END FOOTER -->
<a href="#" class="back-to-top" id="back-to-top"> <i class="fa fa-arrow-up"></i> </a>

