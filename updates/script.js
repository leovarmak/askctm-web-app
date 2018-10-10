$(document).ready(function(){

$(".title").click(function(){
$(this).parent().find(".content").slideToggle("fast");
});
});