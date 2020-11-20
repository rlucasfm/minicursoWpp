$(document).ready(function(){
	resolucao();	
	
});

$(window).resize(function(){ resolucao(); });

function resolucao(){
	if($(this).width() <= 1060){ $('html').addClass('_320'); }else{ $('html').removeClass('_320'); }
	if($(this).width() > 1060){    $('html').addClass('_1000');  }else{ $('html').removeClass('_1000'); }	
}