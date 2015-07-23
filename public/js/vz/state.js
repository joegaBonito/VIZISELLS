$(document).ready(function() {	
	$(".hover-state").mouseenter(function() {
		$(this).addClass("hovering");
	}).mouseleave(function(){
		$(this).removeClass("hovering");
	});
});
