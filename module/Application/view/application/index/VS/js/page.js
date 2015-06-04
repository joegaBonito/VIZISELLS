$(document).ready(function(){
var $cars = $("#cars");

function ajaxPerformer(carz) {

	$.ajax({
			"type":"POST",
			"dataType":"json",
			"url":cars,
			success: function(cars) {
				$("p").remove();
				$cars.append(cars.name + cars.description);
			}
	});
}

$("#cars").on("click",function(){
	ajaxPerformer(cars);
});


});