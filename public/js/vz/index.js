$(document).ready(function() {
/* Hovering Effect */
	$(".pic").hover(function() {
		$(this).fadeTo("fast",".2");
	}, function() {
		$(this).fadeTo("fast","1");
	});	
	
	$(".categoryDiv").hover(function() {	
			$(this).children("p").css("display","block");	
	}, function() {
			$(this).children("p").css("display","none");
	});
});
