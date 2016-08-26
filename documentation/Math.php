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
<meta name="keywords" content="Javascript,Math,物件,object,字典,方法,屬性,使用說明,文件,範例" />
<meta name="description" content="提供完整的Math物件及其方法、屬性的說明文件與範例" />
<title>Math物件 - Javascript字典</title>
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
<h1>Javascript - Math物件</h1>
<table class="doc-table">
	<tr>
		<th>名稱</th>
		<th>類形</th>
		<th>說明</th>
	</tr>
	<tr>
		<td>Math</td>
		<td>物件</td>
		<td>除了簡單的加減乘除，在某些場合開發者需要更為複雜的數學運算。Javascript的Math物件提供了一系屬性和方法，能夠滿足大多數場合的需求。<br />
		Math物件是JavaScript的一個全域物件，不需要由函數進行建立，而且只有一個。</td>
	</tr>
	<tr>
		<td>Math.E</td>
		<td>屬性</td>
		<td>值e，自然對數的底。</td>
	</tr>
	<tr>
		<td>Math.PI</td>
		<td>屬性</td>
		<td>圓週率。</td>
	</tr>
	<tr>
		<td>Math.SQRT2</td>
		<td>屬性</td>
		<td>2的平方根。</td>
	</tr>
	<tr>
		<td>Math.SQRT1_2</td>
		<td>屬性</td>
		<td>1/2的平方根。</td>
	</tr>
	<tr>
		<td>Math.LN2</td>
		<td>屬性</td>
		<td>2的自然對數。</td>
	</tr>
	<tr>
		<td>Math.LN10</td>
		<td>屬性</td>
		<td>10的然對數。</td>
	</tr>
	<tr>
		<td>Math.LOG2E</td>
		<td>屬性</td>
		<td>以2為底E的對數。</td>
	</tr>
	<tr>
		<td>Math.LOG10E</td>
		<td>屬性</td>
		<td>以10為底E的對數。</td>
	</tr>
	<tr>
		<td>Math.max()</td>
		<td>方法</td>
		<td>返回一組數中最大的值，可接受任意多個參數。<br />
		下例將返回78。<br />
		例：var mx = Math.max(18,78,65,14,54); alert(mx);</td>
	</tr>
	<tr>
		<td>Math.min()</td>
		<td>方法</td>
		<td>返回一組數中最小的值，可接受任意多個參數。<br />
		下例將返回14。<br />
		例：var mi = Math.min(18,78,65,14,54); alert(mi);</td>
	</tr>
	<tr>
		<td>Math.ceil()</td>
		<td>方法</td>
		<td>小數轉整數，向下捨入。<br />
		下例則傳回7及-6。<br />
		例：alert(Math.ceil(6.3)); alert(Math.ceil(-6.3));</td>
	</tr>
	<tr>
		<td>Math.floor()</td>
		<td>方法</td>
		<td>小數轉整數，向下捨入。<br />
		下例則傳回6及-7。<br />
		例：alert(Math.floor(6.8)); alert(Math.floor(-6.8));</td>
	</tr>
	<tr>
		<td>Math.round()</td>
		<td>方法</td>
		<td>小數轉整數，四捨五入。<br />
		下例則傳回7及-7。<br />
		例：alert(Math.round(6.8)); alert(Math.round(-6.8));</td>
	</tr>
	<tr>
		<td>Math.random()</td>
		<td>方法</td>
		<td>生成亂數的方法，Math.random()返回一個0~1之間的亂數，不包括0和1。<br />
		下例示範返回1~100中的一個隨機亂數。<br />
		例：alert(Math.ceil(Math.random()*100));</td>
	</tr>
	<tr>
		<td>Math.abs(x)</td>
		<td>方法</td>
		<td>返回x的絕對值。</td>
	</tr>
	<tr>
		<td>Math.acos(x)</td>
		<td>方法</td>
		<td>返回x的反餘弦值，其中X∈[-1,1]，返回值∈[0,π]。</td>
	</tr>
	<tr>
		<td>Math.asin(x)</td>
		<td>方法</td>
		<td>返回x的反正弦值，其中X∈[-1,1]，返回值∈[-,π/2,π/2]。</td>
	</tr>
	<tr>
		<td>Math.atan(x)</td>
		<td>方法</td>
		<td>返回x的反正弦值，返回值∈[-,π/2,π/2]。</td>
	</tr>
	<tr>
		<td>Math.atan2(y,x)</td>
		<td>方法</td>
		<td>返回原點和座標(x,y)的連線與x正軸的夾角，範圍∈[-π,π]。</td>
	</tr>
	<tr>
		<td>Math.cos(x)</td>
		<td>方法</td>
		<td>x的餘弦值。</td>
	</tr>
	<tr>
		<td>Math.exp(x)</td>
		<td>方法</td>
		<td>返回E的x次冪。</td>
	</tr>
	<tr>
		<td>Math.log(x)</td>
		<td>方法</td>
		<td>返回x的自然對數。</td>
	</tr>
	<tr>
		<td>Math.pow(x,y)</td>
		<td>方法</td>
		<td>返回x的y次方。</td>
	</tr>
	<tr>
		<td>Math.sin(x)</td>
		<td>方法</td>
		<td>x的正弦值。</td>
	</tr>
	<tr>
		<td>Math.sqrt(x)</td>
		<td>方法</td>
		<td>x的平方根，x必須大於等於0。</td>
	</tr>
	<tr>
		<td>Math.tan(x)</td>
		<td>方法</td>
		<td>返回x的正切值。</td>
	</tr>
</table>
</main>
</body>
</html>