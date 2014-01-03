$(document).ready(function (e) {
    $('.hit-1').on('click',function(){
       $('.one').removeClass('go');
        $(this).addClass('go');
    });

    $('.hit-2').on('click',function(){
       $('.two').removeClass('go');
        $(this).addClass('go');
    });

    $('.hit-3').on('click',function(){
       $('.three').removeClass('go');
        $(this).addClass('go');
    });

    $('.hit-4').on('click',function(){
       $('.four').removeClass('go');
        $(this).addClass('go');
    });
});