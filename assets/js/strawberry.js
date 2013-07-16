$(document).ready(function () {
    $(".up").click(function (event) {
        event.preventDefault();
        $(".pop").stop().fadeIn(300);
        positionPopup();
    });

    $(".pop > span").click(function () {
        $(".pop").stop().fadeOut(300);
    });
});