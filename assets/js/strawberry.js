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
$(document).ready(function (e) {
    $('.log-block').on('touchstart click', function () {
        $('.dropper').stop().slideToggle();
    });
});

var navBtnFired = false;

$(document).ready(function () {
    $(".nav-btn").on('touchstart click', function () {
        if (!navBtnFired) {
            navBtnFired = true;
            setTimeout(function () {
                navBtnFired = false;
            }, 100);

            if ($("nav").css("height") == "60px") { // main nav height
                $("nav").css("height", "100%"); // full height of nav
            } else {
                $("nav").css("height", "60px"); // return to normal state
            }
        }
        return false;
    });
});