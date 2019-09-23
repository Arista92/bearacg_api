$(document).ready(function () {

    //footer菜单默认样式
    var footer = $('#data').attr('data-footer');
    if(footer == 1){
        $('#footer-one-1').css({'color': 'rgb(34, 34, 34)', 'border-bottom': '5px solid rgb(34, 34, 34)'});
        $('#footer-one-2').css({'color': 'rgb(158, 158, 158)', 'border-bottom': ''});
        $('#footer-one-3').css({'color': 'rgb(158, 158, 158)', 'border-bottom': ''});
        $('#footer-one-4').css({'color': 'rgb(158, 158, 158)', 'border-bottom': ''});
    }
    if(footer == 2){
        $('#footer-one-2').css({'color': 'rgb(34, 34, 34)', 'border-bottom': '5px solid rgb(34, 34, 34)'});
        $('#footer-one-1').css({'color': 'rgb(158, 158, 158)', 'border-bottom': ''});
        $('#footer-one-3').css({'color': 'rgb(158, 158, 158)', 'border-bottom': ''});
        $('#footer-one-4').css({'color': 'rgb(158, 158, 158)', 'border-bottom': ''});
    }
    if(footer == 3){
        $('#footer-one-3').css({'color': 'rgb(34, 34, 34)', 'border-bottom': '5px solid rgb(34, 34, 34)'});
        $('#footer-one-1').css({'color': 'rgb(158, 158, 158)', 'border-bottom': ''});
        $('#footer-one-3').css({'color': 'rgb(158, 158, 158)', 'border-bottom': ''});
        $('#footer-one-4').css({'color': 'rgb(158, 158, 158)', 'border-bottom': ''});
    }
    if(footer == 4){
        $('#footer-one-4').css({'color': 'rgb(34, 34, 34)', 'border-bottom': '5px solid rgb(34, 34, 34)'});
        $('#footer-one-2').css({'color': 'rgb(158, 158, 158)', 'border-bottom': ''});
        $('#footer-one-3').css({'color': 'rgb(158, 158, 158)', 'border-bottom': ''});
        $('#footer-one-1').css({'color': 'rgb(158, 158, 158)', 'border-bottom': ''});
    }
    //footer菜单默认样式

});