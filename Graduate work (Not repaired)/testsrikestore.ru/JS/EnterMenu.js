$(function(){ 
$('.cabinet').click(function () { 
$('.modal-shadow').show(); 
$('.modal-window').show(); 
}); 

$('.modal-shadow').click(function () { 
$('.modal-shadow').hide(); 
$('.modal-window').hide(); 
}); 

$('.close').click(function () { 
$('.modal-shadow').hide(); 
$('.modal-window').hide(); 
}); 
}); (edited)