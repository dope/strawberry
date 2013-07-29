var tmpHeight;

$(document).ready(function () {
    $(".up").click(function (event) {
        event.preventDefault();
        $(".pop").stop().fadeIn(300);
        positionPopup();
    });

    $(".pop > span").click(function () {
        $(".pop").stop().fadeOut(300);
    });

    $("#welcomesUser").click(function (event) {
        event.preventDefault();
        tmpHeight = $("#externalProfileBox").css("height");
        $("#externalProfileBox").stop().css({
            height: "0%",
            display: "block"
        }).animate({
            height: tmpHeight,
            opacity: "1"
        }, {
            queue: false
        });
    });
});


// Dropdown 
$(document).ready(function(e){
   $('.log-block').on('click',function(){
      $('.dropper').stop().slideToggle();
   });
})