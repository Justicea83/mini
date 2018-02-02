$(document).ready(function(){
	$('#LoadAccount').on('click',function(e){
	e.preventDefault();
	$('.loadJ').load("/tweety/user/settings/load");
	
});
	$('#LoadAccountP').on('click',function(e){
	e.preventDefault();
	$('.loadJ').load("/tweety/user/settings/load/pass");
	
});
});