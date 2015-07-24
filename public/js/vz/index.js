$(document).ready(function() {
/* Hovering Effect */
	$(".categoryDiv").mouseenter(function() {
		$(this).find("p,ul").fadeTo("fast","1");
		$(this).find("img").fadeTo("fast",".1");
	}).mouseleave(function() {
		$(this).find("p,ul").fadeTo("fast","0");
		$(this).find("img").fadeTo("fast","1");
	});
});
