$(document).ready(function () {
    //加载头部标题
    var title = $('#data-title').attr('data-title');
    $('#head-one-title').text(title);
    //加载头部标题

    //首页默认样式
    $('#list-index-menu-manhua').css({'color':'#222','border-bottom':'5px solid #222'});
    //首页默认样式


    //图片，视频，漫画样式切换
    $('.list-index-menu-one').click(function () {
        $(this).css({'color':'#222','border-bottom':'5px solid #222'});
        $('.list-index-menu-one').not($(this)).css({'color':'#cdcdcd','border-bottom':''})
    });
    //图片，视频，漫画样式切换

    //图片,视频,漫画内容切换
    $('#list-index-menu-manhua').click(function () {
        $('#list-index-menu-manhua-content').show();
        $('#list-index-menu-tupian-content').hide();
        $('#list-index-menu-shipin-content').hide();

    });
    $('#list-index-menu-tupian').click(function () {
        $('#list-index-menu-manhua-content').hide();
        $('#list-index-menu-tupian-content').show();
        $('#list-index-menu-shipin-content').hide();
    });
    $('#list-index-menu-shipin').click(function () {
        $('#list-index-menu-manhua-content').hide();
        $('#list-index-menu-tupian-content').hide();
        $('#list-index-menu-shipin-content').show();
    });
    //图片,视频,漫画内容切换
});