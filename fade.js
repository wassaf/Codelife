$(document).ready(function(){
$('.fadeto').css('opacity','0.4');
$('.fadeto').mouseover(function() {
$(this).fadeTo(100,1,function() {
$('.fadeto').not(this).fadeTo(100, 0.4);
)};
)};
)};