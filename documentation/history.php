<?php header('Content-type: text/html; charset=utf-8'); ?>
<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta property="og:title" content="Javascript字典" />
<meta property="og:description" content="" />
<meta property="og:type" content="website" />
<meta property="og:url" content="http://javascript.john650914.com" />
<meta property="og:image" content="http://javascript.john650914.com/images/fb.jpg" />
<meta name="keywords" content="Javascript,history,物件,object,字典,方法,屬性,使用說明,文件,範例" />
<meta name="description" content="提供完整的history物件及其方法、屬性的說明文件與範例" />
<title>history物件 - Javascript字典</title>
<link type="text/css" rel="stylesheet" href="../css/default.css"/>
<?php
	include("../includes/analyticstracking.php");
?>
<script src="/js/jquery-1.11.3.min.js"></script>
<script src="/js/default.js"></script>
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<![endif]-->
</head>
<body>
<?php
	include("../includes/header&sidemenu.php");
?>
<main class="main">
<h1>Javascript - history物件</h1>
	<?php include("../includes/adsense.php"); ?>
<table class="doc-table">
	<tr>
		<th>名稱</th>
		<th>類形</th>
		<th>說明</th>
	</tr>
	<tr>
		<td>history</td>
		<td>物件</td>
		<td>
			history物件是window的屬性之一，可讓瀏覽頁面在歷史頁面中往前一頁或往後一頁，範例如下。<br />
			&lt;a href="javascript:window.history.go(-1)"&gt;往上一頁&lt;/a&gt;<br />
			&lt;a href="javascript:window.history.go(1)"&gt;往下一頁&lt;/a&gt;<br />
			上列寫法也可寫成：window.history.back();和window.history.forward();
		</td>
	</tr>
	<tr>
		<td>length</td>
		<td>屬性</td>
		<td>
			原文：Returns the number of URLs in the browser's history list.
		</td>
	</tr>
	<tr>
		<td>back()</td>
		<td>方法</td>
		<td>
			原文：Loads the previous URL in the history list.
		</td>
	</tr>
	<tr>
		<td>forward()</td>
		<td>方法</td>
		<td>
			原文：Loads the next URL in the history list.
		</td>
	</tr>
	<tr>
		<td>go(whereTo)</td>
		<td>方法</td>
		<td>
			原文：Goes to a specific URL within the history list. "whereTo" can be an integer to go to a URL within a specific position relative to the current (ie: -1 goes back one page, 1 goes forward one), or a string. For the string, enter a partial or full URL, and the function to match and go to the first URL that matches the string. Example(s):
<pre>
&lt;a href="javascript:history.go(-3)"&gt;Go back 3 pages&lt;/a&gt;
</pre>
<hr />
<pre>
&lt;a href="javascript:history.go('javascriptkit.com')"&gt;Go to nearest URL in history list with "javascriptkit.com" in the URL.&lt;/a&gt;
</pre>
		</td>
	</tr>
</table>
 </main>
</body>
</html>