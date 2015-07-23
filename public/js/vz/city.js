$(document).ready(function() {
     $(".hover-city").mouseenter(function() {
         $(this).addClass("hovering");
     }).mouseleave(function(){
         $(this).removeClass("hovering");
     });
});
