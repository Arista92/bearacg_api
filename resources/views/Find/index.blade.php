@extends('layout.layout1')
@section('content')
    <div id="data" data-footer="2" data-menu1="#1-2" data-menu2="#2-1" data-menu3="#3-2"></div>
    <div class="main">
        <div class="index-head">
            <a href="/">
                <img src="{{URL::asset('images/icon/manhua_title.png')}}" alt="">
                <div class="index-head-logo">BearACG</div>
            </a>
        </div>

        <div class="find-screen">
            <div class="find-screen-one">
                <div class="find-screen-one-left">形式</div>
                <div class="find-screen-one-right">
                        <div class="find-screen-list" id="1-1">漫画</div>
                        <div class="find-screen-list" id="1-2">图片</div>
                        <div class="find-screen-list" id="1-3">视频</div>
                </div>
            </div>
            <div class="find-screen-one">
                <div class="find-screen-one-left">分类</div>
                <div class="find-screen-one-right">
                    <div class="find-screen-one-right-wrap">
                        <div class="find-screen-list" id="2-1">全部</div>
                        <div class="find-screen-list" id="2-2">福利</div>
                        <div class="find-screen-list" id="2-3">恋爱</div>
                        <div class="find-screen-list" id="2-4">热血</div>
                        <div class="find-screen-list" id="2-5">都市</div>
                        <div class="find-screen-list" id="2-6">伦理</div>
                        <div class="find-screen-list" id="2-7">异能</div>
                        <div class="find-screen-list" id="2-8">恐怖</div>
                        <div class="find-screen-list" id="2-9">悬疑</div>
                    </div>
                </div>
            </div>
            <div class="find-screen-one">
                <div class="find-screen-one-left">类型</div>
                <div class="find-screen-one-right">
                        <div class="find-screen-list" id="3-1">最热</div>
                        <div class="find-screen-list" id="3-2">评分</div>
                        <div class="find-screen-list" id="3-3">最新</div>
                </div>
            </div>
        </div>
    </div>
    <div class="line"></div>
    <div class="main">
        <div class="find-content">
            <div class="find-content-img"><img src="{{URL::asset('images/icon/detail_fengmian.jpg')}}" alt=""></div>
            <div class="find-content-list">
                <div class="find-content-list-title">火影忍者:疾风传</div>
                <div class="find-content-list-pingfen">
                    <div class="find-content-list-pingfen-img">
                        <div class="find-content-list-pingfen-img-one"><img src="{{URL::asset('images/icon/star_on.png')}}" alt=""></div>
                        <div class="find-content-list-pingfen-img-one"><img src="{{URL::asset('images/icon/star_on.png')}}" alt=""></div>
                        <div class="find-content-list-pingfen-img-one"><img src="{{URL::asset('images/icon/star_on.png')}}" alt=""></div>
                        <div class="find-content-list-pingfen-img-one"><img src="{{URL::asset('images/icon/star_on.png')}}" alt=""></div>
                        <div class="find-content-list-pingfen-img-one"><img src="{{URL::asset('images/icon/star.png')}}" alt=""></div>
                    </div>
                    <div class="find-content-list-pingfen-num">8.6</div>
                </div>
                <div class="find-content-list-desc">2012 / 日本 / 热血 / 720章节  </div>
                <div class="find-content-list-click">
                    <div class="find-content-list-click-img"><img src="{{URL::asset('images/icon/click.png')}}" alt=""></div>
                    <div class="find-content-list-click-num">10.6万</div>
                </div>
            </div>
        </div>

        <div class="find-content">
            <div class="find-content-img"><img src="{{URL::asset('images/icon/detail_fengmian.jpg')}}" alt=""></div>
            <div class="find-content-list">
                <div class="find-content-list-title">火影忍者:疾风传</div>
                <div class="find-content-list-pingfen">
                    <div class="find-content-list-pingfen-img">
                        <div class="find-content-list-pingfen-img-one"><img src="{{URL::asset('images/icon/star_on.png')}}" alt=""></div>
                        <div class="find-content-list-pingfen-img-one"><img src="{{URL::asset('images/icon/star_on.png')}}" alt=""></div>
                        <div class="find-content-list-pingfen-img-one"><img src="{{URL::asset('images/icon/star_on.png')}}" alt=""></div>
                        <div class="find-content-list-pingfen-img-one"><img src="{{URL::asset('images/icon/star_on.png')}}" alt=""></div>
                        <div class="find-content-list-pingfen-img-one"><img src="{{URL::asset('images/icon/star.png')}}" alt=""></div>
                    </div>
                    <div class="find-content-list-pingfen-num">8.6</div>
                </div>
                <div class="find-content-list-desc">2012 / 日本 / 热血 / 720章节  </div>
                <div class="find-content-list-click">
                    <div class="find-content-list-click-img"><img src="{{URL::asset('images/icon/click.png')}}" alt=""></div>
                    <div class="find-content-list-click-num">10.6万</div>
                </div>
            </div>
        </div>

        <div class="find-content">
            <div class="find-content-img"><img src="{{URL::asset('images/icon/detail_fengmian.jpg')}}" alt=""></div>
            <div class="find-content-list">
                <div class="find-content-list-title">火影忍者:疾风传</div>
                <div class="find-content-list-pingfen">
                    <div class="find-content-list-pingfen-img">
                        <div class="find-content-list-pingfen-img-one"><img src="{{URL::asset('images/icon/star_on.png')}}" alt=""></div>
                        <div class="find-content-list-pingfen-img-one"><img src="{{URL::asset('images/icon/star_on.png')}}" alt=""></div>
                        <div class="find-content-list-pingfen-img-one"><img src="{{URL::asset('images/icon/star_on.png')}}" alt=""></div>
                        <div class="find-content-list-pingfen-img-one"><img src="{{URL::asset('images/icon/star_on.png')}}" alt=""></div>
                        <div class="find-content-list-pingfen-img-one"><img src="{{URL::asset('images/icon/star.png')}}" alt=""></div>
                    </div>
                    <div class="find-content-list-pingfen-num">8.6</div>
                </div>
                <div class="find-content-list-desc">2012 / 日本 / 热血 / 720章节  </div>
                <div class="find-content-list-click">
                    <div class="find-content-list-click-img"><img src="{{URL::asset('images/icon/click.png')}}" alt=""></div>
                    <div class="find-content-list-click-num">10.6万</div>
                </div>
            </div>
        </div>

        <div class="find-content">
            <div class="find-content-img"><img src="{{URL::asset('images/icon/detail_fengmian.jpg')}}" alt=""></div>
            <div class="find-content-list">
                <div class="find-content-list-title">火影忍者:疾风传</div>
                <div class="find-content-list-pingfen">
                    <div class="find-content-list-pingfen-img">
                        <div class="find-content-list-pingfen-img-one"><img src="{{URL::asset('images/icon/star_on.png')}}" alt=""></div>
                        <div class="find-content-list-pingfen-img-one"><img src="{{URL::asset('images/icon/star_on.png')}}" alt=""></div>
                        <div class="find-content-list-pingfen-img-one"><img src="{{URL::asset('images/icon/star_on.png')}}" alt=""></div>
                        <div class="find-content-list-pingfen-img-one"><img src="{{URL::asset('images/icon/star_on.png')}}" alt=""></div>
                        <div class="find-content-list-pingfen-img-one"><img src="{{URL::asset('images/icon/star.png')}}" alt=""></div>
                    </div>
                    <div class="find-content-list-pingfen-num">8.6</div>
                </div>
                <div class="find-content-list-desc">2012 / 日本 / 热血 / 720章节  </div>
                <div class="find-content-list-click">
                    <div class="find-content-list-click-img"><img src="{{URL::asset('images/icon/click.png')}}" alt=""></div>
                    <div class="find-content-list-click-num">10.6万</div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-line"></div>













@endsection