<?php header('Content-type: text/html; charset=utf-8'); ?>
<!DOCTYPE HTML>
<html>
<head>
<!-- Google Analytics Content Experiment code -->
<script>function utmx_section(){}function utmx(){}(function(){var
k='114137935-0',d=document,l=d.location,c=d.cookie;
if(l.search.indexOf('utm_expid='+k)>0)return;
function f(n){if(c){var i=c.indexOf(n+'=');if(i>-1){var j=c.
indexOf(';',i);return escape(c.substring(i+n.length+1,j<0?c.
length:j))}}}var x=f('__utmx'),xx=f('__utmxx'),h=l.hash;d.write(
'<sc'+'ript src="'+'http'+(l.protocol=='https:'?'s://ssl':
'://www')+'.google-analytics.com/ga_exp.js?'+'utmxkey='+k+
'&utmx='+(x?x:'')+'&utmxx='+(xx?xx:'')+'&utmxtime='+new Date().
valueOf()+(h?'&utmxhash='+escape(h.substr(1)):'')+
'" type="text/javascript" charset="utf-8"><\/sc'+'ript>')})();
</script><script>utmx('url','A/B');</script>
<!-- End of Google Analytics Content Experiment code -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta property="og:title" content="Javascript字典" />
<meta property="og:description" content="收錄了完整Javascript的語法及API說明文件，前端工程師的好幫手" />
<meta property="og:type" content="website" />
<meta property="og:url" content="http://javascript.john650914.com" />
<meta property="og:image" content="http://javascript.john650914.com/images/fb.jpg" />
<meta name="keywords" content="javascript,字典,dic,語法,教學,DOM,API,物件,範例,example,前端工程,前端工程師" />
<meta name="description" content="收錄了完整Javascript的語法、API說明文件及範例，是前端工程師的好幫手" />
<title>Javascript字典．API文件．教學</title>
<link type="text/css" rel="stylesheet" href="css/default.css"/>
<?php
	include("includes/analyticstracking.php");
?>
<script src="/js/jquery-1.11.3.min.js"></script>
<script src="/js/default.js"></script>
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<![endif]-->
</head>
<body>
<?php
	include("includes/header&sidemenu.php");
?>
<main class="main">
	<h1 class="index-h1" style="text-indent:-13px;">「Javascript字典」是一本好書嗎？</h1>
	<p>(還有什麼好寫的？)基於網頁瀏覽器的撰寫方向，不包涵node.js的非瀏覽器應用 | 來源：網路上的資料、書本、自己實驗的結果 | 目的：自己學習的記錄 | 期望它變成：大家學習、找資料的地方 | 現況：需要改善專業度、修正錯誤及補齊資料</p>
	<p style="height:0px; overflow:hidden;">Javascript是一種物件導向的語言，語法裡的一切機乎都是以物件的方式操作，有人預言Javascript會是未來唯一的語言。</p>
	<style>
		.test_search{position:relative;}
		.test_search img{position:absolute; left:0; top:0; width:100%;}
	</style>
	<p class="test_search">它是以ECMA做標準，目前已有更新的版本，有一種永遠都學不完的感覺，誰叫他有可能是一統天下的程式語言。(這一段和上一段是在2016/020/24加上的)<img src="images/test.gif" /></p>
</main>
</body>
</html>