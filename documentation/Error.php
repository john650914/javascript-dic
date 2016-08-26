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
<meta name="keywords" content="Javascript,Error,物件,object,字典,方法,屬性,使用說明,文件,範例" />
<meta name="description" content="提供完整的Error物件及其方法、屬性的說明文件與範例" />
<title>Error物件 - Javascript字典</title>
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
<h1>Javascript - Error物件</h1>
<table class="doc-table">
	<tr>
		<th>名稱</th>
		<th>類形</th>
		<th>說明</th>
	</tr>
	<tr>
		<td>Error</td>
		<td>物件</td>
		<td>
<pre>
window.onerror = ignoreError;
function ignoreError() {
	return true;
}
</pre>
		</td>
	</tr>
	<tr>
		<td>constructor</td>
		<td>屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>description</td>
		<td>屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>message</td>
		<td>屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>name</td>
		<td>屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>toSource</td>
		<td>屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>toString</td>
		<td>屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>valueOf</td>
		<td>屬性</td>
		<td></td>
	</tr>
</table>
 </main>
</body>
</html>