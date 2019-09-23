
$(document).ready(function () {
    //首页默认样式
    $('#index-header-manhua').css({'color':'#fcd1c0','border-bottom':'5px solid #fcd1c0'});
    $('#footer-one-shouye').css({'color':'#222','border-bottom':'5px solid #222'});
    //首页默认样式


    //图片，视频，漫画样式切换
    $('.index-header-one-words-1').click(function () {
        $(this).css({'color':'#fcd1c0','border-bottom':'5px solid #fcd1c0'});
        $('.index-header-one-words-1').not($(this)).css({'color':'#9E9E9E','border-bottom':''})
    });
    //图片，视频，漫画样式切换


    //图片,视频,漫画内容切换
    $('#index-header-manhua').click(function () {
        $('#index-header-manhua-content').show();
        $('#index-header-tupian-content').hide();
        $('#index-header-shiping-content').hide();
    });
    $('#index-header-tupian').click(function () {
        $('#index-header-manhua-content').hide();
        $('#index-header-tupian-content').show();
        $('#index-header-shiping-content').hide();
    });
    $('#index-header-shiping').click(function () {
        $('#index-header-manhua-content').hide();
        $('#index-header-tupian-content').hide();
        $('#index-header-shiping-content').show();
    });
    //图片,视频,漫画内容切换

    // 滑到顶部
    $("#totop").click(function () {
        var speed=700;
        $('body,html').animate({ scrollTop: 0 }, speed);
    });
    // 滑到顶部
})