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

	if(location.hash.match('!')){
		var excmtIndex = location.hash.indexOf('!')+1;
		var theHashName = location.hash.slice(excmtIndex);
		var xhr;

		$.getJSON('/json/document.json', function(d){
			xhr = d;
		});
		
		$('#main').load('documentation/ajax-test.php', function(){
			var title = xhr[theHashName].title;
			var description = xhr[theHashName].description;
			var keywords = xhr[theHashName].keywords;
			var url = xhr[theHashName].url;
			$('head title').html(title);
			$('meta[name="description"]').attr('content', description);
			$('meta[name="keywords"]').attr('content', keywords);
			$('meta[property="og:title"]').attr('content', title);
			$('meta[property="og:description"]').attr('content', description);
			$('meta[property="og:url"]').attr('content', url);
		});
	}
});