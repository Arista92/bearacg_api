$(document).ready(function () {
    //加载头部标题
    var title = $('#data-title').attr('data-title');
    $('#head-one-title').text(title);
    //加载头部标题

    //统计条显示
    var num5 = $('#num5').attr("data-num");
    var num4 = $('#num4').attr("data-num");
    var num3 = $('#num3').attr("data-num");
    var num2 = $('#num2').attr("data-num");
    var num1 = $('#num1').attr("data-num");
    $('#num5').css('width',num5);
    $('#num4').css('width',num4);
    $('#num3').css('width',num3);
    $('#num2').css('width',num2);
    $('#num1').css('width',num1);
    //统计条显示

    //默认样式显示
    $('#detail-contents-pinglun').css({'color':'#8989ca','border-bottom':'5px solid #8989ca'});
    //默认样式显示

    //目录 评论样式切换
    $('.detail-contents-menu-one').click(function () {
        $(this).css({'color':'#8989ca','border-bottom':'5px solid #8989ca'});
        $('.detail-contents-menu-one').not($(this)).css({'color':'#cdcdcd','border-bottom':''})
    });
    //目录 评论样式切换

    //目录 评论内容切换
    $('#detail-contents-pinglun').click(function () {
        $('#detail-contents-pinglun-contents').show();
        $('#detail-contents-mulu-contents').hide();
    });
    $('#detail-contents-mulu').click(function () {
        $('#detail-contents-pinglun-contents').hide();
        $('#detail-contents-mulu-contents').show();
    });
    //目录 评论内容切换

});