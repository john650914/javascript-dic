$(function(){
	$('.menu_toggler').click(function(){
		$('.all-menus').toggle();
		$('main').toggle();
	});
	
	$('#data-loader').load('experiment/ajax01.php');
	
	$(window).scroll(function(){
		if($('#data-loader2').html() == '' && $('body').scrollTop() > 100){
			$('#data-loader2').load('experiment/ajax02.php');
		}
	});
});