@extends('layout.layout2')
@section('content')
    <div id="data-title" data-title="漫画"></div>
    <div class="detail-main">
        <div class="detail-info">
            <div class="detail-info-left"><img src="{{URL::asset('images/icon/detail_fengmian.jpg')}}" alt=""></div>
            <div class="detail-info-right">
                <div class="detail-info-right-title">火影忍者:疾风传</div>
                <div class="detail-info-right-hanwen">화영인자:질풍(2002)</div>
                <div class="detail-info-right-weektop">
                    <div class="detail-info-right-weektop-1">NO.2</div>
                    <div class="detail-info-right-weektop-2">一周热门漫画榜</div>
                </div>
                <div class="detail-info-right-other">日本 / 动作 冒险 热血 / 720章节</div>
                <div class="detail-info-right-description">这是一个忍者的世界。从小身上封印着邪恶的九尾妖狐，鸣人受尽了村人的冷落，只是拼命用各种恶作剧试图吸引大家的注意力。好在还是有依鲁卡老师关心他。</div>
                <div class="detail-info-right-button">
                    <div class="detail-info-right-button-one">收藏</div>
                    <div class="detail-info-right-button-one">评论</div>
                    <div class="detail-info-right-button-one">去打分</div>
                </div>
            </div>
        </div>
        <div class="detail-score">
            <div class="detail-score-title">Bear评分</div>
            <div class="detail-score-info-main">
                <div class="detail-score-info">
                    <div class="detail-score-info-1">
                        <div class="detail-score-info-1-1">8.6</div>
                        <div class="detail-score-info-1-2">
                            <div class="detail-score-info-1-2-img"><img src="{{URL::asset('images/icon/star_on.png')}}" alt=""></div>
                            <div class="detail-score-info-1-2-img"><img src="{{URL::asset('images/icon/star_on.png')}}" alt=""></div>
                            <div class="detail-score-info-1-2-img"><img src="{{URL::asset('images/icon/star_on.png')}}" alt=""></div>
                            <div class="detail-score-info-1-2-img"><img src="{{URL::asset('images/icon/star_on.png')}}" alt=""></div>
                            <div class="detail-score-info-1-2-img"><img src="{{URL::asset('images/icon/star.png')}}" alt=""></div>
                        </div>
                    </div>
                    <div class="detail-score-info-2">
                        <div class="detail-score-info-2-list1">
                            <div class="detail-score-info-2-list1-star">
                                <div class="detail-score-info-2-list1-star-img"><img src="{{URL::asset('images/icon/star.png')}}" alt=""></div>
                                <div class="detail-score-info-2-list1-star-img"><img src="{{URL::asset('images/icon/star.png')}}" alt=""></div>
                                <div class="detail-score-info-2-list1-star-img"><img src="{{URL::asset('images/icon/star.png')}}" alt=""></div>
                                <div class="detail-score-info-2-list1-star-img"><img src="{{URL::asset('images/icon/star.png')}}" alt=""></div>
                                <div class="detail-score-info-2-list1-star-img"><img src="{{URL::asset('images/icon/star.png')}}" alt=""></div>
                            </div>
                            <div class="detail-score-info-2-list1-line">
                                <div class="detail-score-info-2-list1-line-left" id="num5" data-num="85%"></div>
                            </div>
                        </div>
                        <div class="detail-score-info-2-list1">
                            <div class="detail-score-info-2-list1-star">
                                <div class="detail-score-info-2-list1-star-img"><img src="{{URL::asset('images/icon/star.png')}}" alt=""></div>
                                <div class="detail-score-info-2-list1-star-img"><img src="{{URL::asset('images/icon/star.png')}}" alt=""></div>
                                <div class="detail-score-info-2-list1-star-img"><img src="{{URL::asset('images/icon/star.png')}}" alt=""></div>
                                <div class="detail-score-info-2-list1-star-img"><img src="{{URL::asset('images/icon/star.png')}}" alt=""></div>
                            </div>
                            <div class="detail-score-info-2-list1-line">
                                <div class="detail-score-info-2-list1-line-left" id="num4" data-num="50%"></div>
                            </div>
                        </div>
                        <div class="detail-score-info-2-list1">
                            <div class="detail-score-info-2-list1-star">
                                <div class="detail-score-info-2-list1-star-img"><img src="{{URL::asset('images/icon/star.png')}}" alt=""></div>
                                <div class="detail-score-info-2-list1-star-img"><img src="{{URL::asset('images/icon/star.png')}}" alt=""></div>
                                <div class="detail-score-info-2-list1-star-img"><img src="{{URL::asset('images/icon/star.png')}}" alt=""></div>
                            </div>
                            <div class="detail-score-info-2-list1-line">
                                <div class="detail-score-info-2-list1-line-left" id="num3" data-num="40%"></div>
                            </div>
                        </div>
                        <div class="detail-score-info-2-list1">
                            <div class="detail-score-info-2-list1-star">
                                <div class="detail-score-info-2-list1-star-img"><img src="{{URL::asset('images/icon/star.png')}}" alt=""></div>
                                <div class="detail-score-info-2-list1-star-img"><img src="{{URL::asset('images/icon/star.png')}}" alt=""></div>
                            </div>
                            <div class="detail-score-info-2-list1-line">
                                <div class="detail-score-info-2-list1-line-left" id="num2" data-num="30%"></div>
                            </div>
                        </div>
                        <div class="detail-score-info-2-list1">
                            <div class="detail-score-info-2-list1-star">
                                <div class="detail-score-info-2-list1-star-img"><img src="{{URL::asset('images/icon/star.png')}}" alt=""></div>
                            </div>
                            <div class="detail-score-info-2-list1-line">
                                <div class="detail-score-info-2-list1-line-left" id="num1" data-num="10%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="detail-score-data-main">
                <div class="detail-score-data-words">117.7W人看过&nbsp;&nbsp;&nbsp;1.5K人收藏&nbsp;&nbsp;&nbsp;566人评论&nbsp;&nbsp;&nbsp;229人打分 </div>
            </div>
        </div>
    </div>
    <div class="detail-contents">
        <div class="detail-contents-menu-main">
            <div class="detail-contents-menu">
                <div class="detail-contents-menu-one" id="detail-contents-pinglun">评论</div>
                <div class="detail-contents-menu-one" id="detail-contents-mulu">目录</div>
            </div>
        </div>
    </div>



    <div class="detail-contents-list" id="detail-contents-pinglun-contents" style="display: block">
        @php
            echo view('cartoon.comments');
        @endphp
    </div>
    <div class="detail-contents-list" id="detail-contents-mulu-contents" style="display: none">
        @php
            echo view('cartoon.catalog');
        @endphp
    </div>
















@endsection