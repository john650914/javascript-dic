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
<meta name="keywords" content="Javascript,Number,數值,物件,object,字典,方法,屬性,使用說明,文件,範例" />
<meta name="description" content="提供完整的Number物件及其方法、屬性的說明文件與範例" />
<title>Number物件 - Javascript字典</title>
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
<h1>Javascript - Number物件</h1>
<table class="doc-table">
	<tr>
		<th>名稱</th>
		<th>類形</th>
		<th>說明</th>
	</tr>
	<tr>
		<td>Number</td>
		<td>物件</td>
		<td>
			在Javascript中如希望某個變數包含一個數值，那麼無需限定其必須是整數或者是浮點數，如下例都是正確的數值表示方法：
<pre>
var num1 = 23.456;
var num2 = 45;
var num3 = -34;
var num4 = 9e5; //科學計數法 =900000
</pre>
		</td>
	</tr>
	<tr>
		<td>constructor</td>
		<td>屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>MAX_VALUE</td>
		<td>屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>MIN_VALUE</td>
		<td>屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>NEGATIVE_INFINITY</td>
		<td>屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>POSITIVE_INFINITY</td>
		<td>屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>prototype</td>
		<td>屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>toExponential()</td>
		<td>方法</td>
		<td>將數值轉換為科學計數法，此方法接受一個參數，表示要輸出的小數位數。<br />
		以下範例將返回9.0e+2及8.95e+2。<br />
		例：var myNumber = 895.4; alert(myNumber.toExponential(1)); alert(myNumber.toExponential(2));</td>
	</tr>
	<tr>
		<td>toFixed()</td>
		<td>方法</td>
		<td></td>
	</tr>
	<tr>
		<td>toPrecision()</td>
		<td>方法</td>
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