$(document).ready(function() {
/* Hovering Effect */
	$(".categoryDiv").mouseenter(function() {
		$(this).children("p").fadeTo("fast","1");
		$(this).find("img").fadeTo("fast",".1");
	}).mouseleave(function() {
		$(this).children("p").fadeTo("fast","0");
		$(this).find("img").fadeTo("fast","1");
	});
});
