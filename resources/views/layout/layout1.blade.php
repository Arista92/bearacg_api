<html>
<head>
    <title></title>
    <script src="https://cdn.bootcss.com/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://cdn.bootcss.com/twitter-bootstrap/4.3.1/css/bootstrap-grid.css" rel="stylesheet">
    <script src="https://cdn.bootcss.com/jquery/3.4.0/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ URL::asset('css/layout1.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/find_index.css') }}">
    <script type="text/javascript" src="{{ URL::asset('js/index.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/layout.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/find_index.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/common.js') }}"></script>


</head>
<body>

@yield('content')

<div class="footer">
    <a href="/"><div class="footer-one" id="footer-one-1">首页</div></a>
    <a href="find/1"><div class="footer-one" id="footer-one-2">发现</div></a>
    <div class="footer-one" id="footer-one-3">记录</div>
    <div class="footer-one" id="footer-one-4">我的</div>
    {{--<a href="">--}}
        {{--<div class="footer-one">--}}
            {{--<div class="footer-one-icon"><img src="{{URL::asset('images/icon/footer_shouye.png')}}" alt=""></div>--}}
            {{--<div class="footer-one-title">首页</div>--}}
        {{--</div>--}}
    {{--</a>--}}
    {{--<a href="">--}}
        {{--<div class="footer-one">--}}
            {{--<div class="footer-one-icon"><img src="{{URL::asset('images/icon/footer_faxian.png')}}" alt=""></div>--}}
            {{--<div class="footer-one-title">发现</div>--}}
        {{--</div>--}}
    {{--</a>--}}
    {{--<a href="">--}}
        {{--<div class="footer-one">--}}
            {{--<div class="footer-one-icon"><img src="{{URL::asset('images/icon/footer_jilu.png')}}" alt=""></div>--}}
            {{--<div class="footer-one-title">记录</div>--}}
        {{--</div>--}}
    {{--</a>--}}
    {{--<a href="">--}}
        {{--<div class="footer-one">--}}
            {{--<div class="footer-one-icon"><img src="{{URL::asset('images/icon/footer_wode.png')}}" alt=""></div>--}}
            {{--<div class="footer-one-title">我的</div>--}}
        {{--</div>--}}
    {{--</a>--}}

</div>
</body>
</html>