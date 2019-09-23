<html>
<head>
    <title></title>
    <script src="https://cdn.bootcss.com/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://cdn.bootcss.com/twitter-bootstrap/4.3.1/css/bootstrap-grid.css" rel="stylesheet">
    <script src="https://cdn.bootcss.com/jquery/3.4.0/jquery.min.js"></script>
    <script src="{{ URL::asset('js/detail.js') }}"></script>
    <script src="{{ URL::asset('js/list_index.js') }}"></script>
    <link rel="stylesheet" href="{{ URL::asset('css/layout2.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/detail.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/comments.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/catalog.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/list_index.css') }}">


</head>
<body>
<main>
    <div class="head">
        <div class="head-one">
            <div class="head-left-img" onclick="window.history.go(-1)">
                <img src="{{URL::asset('images/icon/fanhui.png')}}" alt="">
            </div>
        </div>
        <div class="head-one" id="head-one-title"></div>
        <div class="head-one">
            <div class="head-right-img">
                <img src="{{URL::asset('images/icon/genduo.png')}}" alt="">
            </div>
        </div>

        <div class="head-title"></div>
    </div>
</main>
@yield('content')


</body>
</html>