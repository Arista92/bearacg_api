@extends('layout.layout1')
@section('content')
    <div id="data" data-footer="1"></div>
    <div class="index-head-all">
        <div class="index-head">
            <a href="/">
                <img src="{{URL::asset('images/icon/manhua_title.png')}}" alt="">
                <div class="index-head-logo">BearACG</div>
            </a>
        </div>

        <div class="index-header">
            <div class="index-header-one"><div class="index-header-one-words-1" id="index-header-manhua">漫画</div></div>
            <div class="index-header-one"><div class="index-header-one-words-1" id="index-header-tupian">图片</div></div>
            <div class="index-header-one"><div class="index-header-one-words-1" id="index-header-shiping">视频</div></div>
        </div>
    </div>

    <div class="index-content" id="index-header-manhua-content" style="display: block">
        @php
            echo view('cartoon.cartoon',['user'=>$bbb]);
        @endphp
    </div>
    <div class="index-content" id="index-header-tupian-content" style="display: none">
        @php
            echo 111;
        @endphp
    </div>
    <div class="index-content" id="index-header-shiping-content" style="display: none">
        @php
            echo 222;
        @endphp
    </div>
    <div id="totop">返回顶部</div>
@endsection