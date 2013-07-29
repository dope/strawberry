$(document).ready(function () {
	$(".nav-btn").click(function () {
	    if($("nav").css("height")=="60px") // main nav height
	        $("nav").css("height", "100%"); // full height of nav
	    else
	        $("nav").css("height", "60px"); // return to normal state
	});
});