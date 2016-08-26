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
<meta name="keywords" content="Javascript,boolean,物件,object,字典,方法,屬性,使用說明,文件,範例" />
<meta name="description" content="提供完整的Boolean物件及其方法、屬性的說明文件與範例" />
<title>Boolean物件 - Javascript字典</title>
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
<h1>Javascript - Boolean物件</h1>
<table class="doc-table">
	<tr>
		<th>名稱</th>
		<th>類形</th>
		<th>說明</th>
	</tr>
	<tr>
		<td>Boolean</td>
		<td>物件</td>
		<td>
			Javascript中的布林物件只有true和false兩種值；從某種意義上來說，電腦程式設計就是跟布林值打交道，電腦就是0和1的世界。<br>
			下例用typeof做一個簡單的觀察它的用法：
<pre>
var myBoolean = true;
alert(typeof(myBoolean)); //返回boolean物件
var myBoolean = 'true';
alert(typeof(myBoolean)); //返回string物件
</pre>
		</td>
	</tr>
	<tr>
		<td>constructor</td>
		<td>屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>prototype</td>
		<td>屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>toString()</td>
		<td>方法</td>
		<td></td>
	</tr>
	<tr>
		<td>valueOf()</td>
		<td>方法</td>
		<td></td>
	</tr>
</table>
 </main>
</body>
</html>