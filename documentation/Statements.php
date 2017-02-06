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
<meta name="keywords" content="Javascript,Statements,字典,方法,屬性,使用說明,文件,範例" />
<meta name="description" content="提供完整的Statements物件及其方法、屬性的說明文件與範例" />
<title>宣告 - Javascript字典</title>
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
<h1>Javascript - Statements</h1>
	<?php include("../includes/adsense.php"); ?>
<table class="doc-table">
	<tr>
		<th>名稱</th>
		<th>類形</th>
		<th>說明</th>
	</tr>
	<tr>
		<td>var</td>
		<td>關鍵字</td>
		<td style="text-decoration:line-through;">宣告變數時使用，在Javascript裡變數的宣告是很自由的，它可以是任何資料類形，包括沒有內容的變數，就連變數的形態都不用你去操心，Javascript使用的是弱類型的變數，它能夠自行去判別適合的形態，這一點就和C語言完全不同，以下是幾個變數的宣告：<br />
<pre>
var a;
var b=0;
var c='alex';
var a=0, b='box', c=false; //同時宣告多個變數的寫法
var s=new String(); //預先宣告變數的資料類型為字串，也可寫成：var s="";
</pre>
		以上語法把var刪除也可以執行，但意義上是不同的，沒有使用var關鍵字宣告的變數將視為全域變數，不管是在函式內或函式外。另外，變數的名稱需遵循以下3條規則：
		<ul>
			<li>第一個字元必須是字母、底線(_)或是美元符號($)，不可是數字</li>
			<li>餘下的字母可以是底線、美元符號、任意字母或是數字字元</li>
			<li>變數名不能是關鍵字或者保留字</li>
		</ul>
		當字串過長時，JavaScript允許字串的換行宣告，有兩種方式：<br />
		1.用"+"號來做換行的宣告
<pre>
var showstring="I am Alex! I like JavaScript very much!"
+"And how about you?"
</pre>
2.用不可見字元"\"來做換行的宣告
<pre>
show="I am Alex!I like JavaScript very much!\
And how about you?"
</pre></td>
	</tr>
	<tr>
		<td>with</td>
		<td>關鍵字</td>
		<td>用來宣告常用的預設物件，可以縮短使用物件成員的字串。通常用在使用物件頻繁的區塊。使用時要注意變數名稱與成員名稱不要相同。<br>
			語法：with(object){statements}<br>
			以下範例(1)的"document.form1"就是一個預設物件，而{}內的"field1"指的就是"document.form1.field1"：
<pre>
with (document.form1){
	field1.value="test"
	field2.value="test2"
}
</pre>
			範例(2)指定 Math 物件為預設的物件。with 語法裡面使用了 PI 屬性和 cos、sin 方法的語句，而無需指定物件。JavaScript 會假定他們參照的是 Math 物件：
<pre>
var a, x, y;
var r = 10;
with (Math) {
	a = PI * r * r;
	x = r * cos(PI);
	y = r * sin(PI/2);
}
</pre>
			附註︰雖然使用 with 語句可以使你的程式更加簡潔，但不當使用 with 也會在一定程度上使你的程式速度變慢。</td>
	</tr>
</table>
</main>
</body>
</html>