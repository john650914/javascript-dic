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
<meta name="keywords" content="Javascript,Global,Funciton,物件,object,字典,方法,屬性,使用說明,文件,範例" />
<meta name="description" content="提供完整的Global Functions物件及其方法、屬性的說明文件與範例" />
<title>Global Functions - Javascript字典</title>
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
<h1>Javascript - Global Functions</h1>
這裡面有更詳細的說明：<a style="word-wrap:break-word; word-break:break-all;" href="http://www.javascriptkit.com/jsref/globalfunctions.shtml">http://www.javascriptkit.com/jsref/globalfunctions.shtml</a>
<table class="doc-table">
	<tr>
		<th>名稱</th>
		<th>類形</th>
		<th>說明</th>
	</tr>
	<tr>
		<td>decodeURI()</td>
		<td>方法</td>
		<td></td>
	</tr>
	<tr>
		<td>decodeURIComponent()</td>
		<td>方法</td>
		<td></td>
	</tr>
	<tr>
		<td>encodeURI()</td>
		<td>方法</td>
		<td>
			將傳入的字串轉換成UTF-8編碼的字元。<br>
			Javascript中編碼的方法有3個(escape、encodeURI、encodeURIComponent)，一般情況下，最好選擇encodeURIComponent()<br><br>
			encodeURI()的特性<br>
			<ul>
				<li>不編碼符號包括：~!@#$&amp;*()=:/,;?+'</li>
				<li>用encodeURI()會比使用escape()轉換URI正確。比較要注意的是這個方法不處理'(單引號)。</li>
			</ul>
		</td>
	</tr>
	<tr>
		<td>encodeURIComponent()</td>
		<td>方法</td>
		<td>
			將傳入的字串轉換成UTF-8編碼的字元。<br>
			Javascript中編碼的方法有3個(escape、encodeURI、encodeURIComponent)，一般情況下，最好選擇encodeURIComponent()<br><br>
			以下是encodeURIComponent()的特性<br>
			<ul>
				<li>不編碼符號包括：~!*()'</li>
				<li>encodeURIComponent()是適合大部分單一 URI的編碼方法。這個方法通常可以正確的編出正確的編碼，例如要編碼一段有flash的html(參數有&amp;符號)，如果用其他的方法，大概解碼後flash也不能看了。比較要注意的是這個方法也不處理'(單引號)。</li>
			</ul><br>
			範例如下：
<pre>
url = url + "?name=" + encodeURIComponent("中文");
</pre>
		</td>
	</tr>
	<tr>
		<td>escape()</td>
		<td>方法</td>
		<td>
			將傳入的字串轉換成UTF-8編碼的字元。<br>
			Javascript中編碼的方法有3個(escape、encodeURI、encodeURIComponent)，一般情況下，最好選擇encodeURIComponent()<br><br>
			escape()的特性<br>
			<ul>
				<li>不編碼的符號包括：@*/+</li>
				<li>escape 不編碼+(加號)，將使表單欄位資料中有空白的處理(用+連結字串)造成問題。且escape在處理非ASCII語系的字元會有問題。所以，除非特例，應盡量避免使用escape()。</li>
			</ul>
		</td>
	</tr>
	<tr>
		<td>eval()</td>
		<td>方法</td>
		<td></td>
	</tr>
	<tr>
		<td>isFinite()</td>
		<td>方法</td>
		<td></td>
	</tr>
	<tr>
		<td>isNaN()</td>
		<td>方法</td>
		<td>返回一個Boolean值，判斷參數是否不是一個數值，包括整數和浮點數，NaN = Not a Number；如果參數是字串，isNaN()會先檢查字串內容是不是數字，不是數字才返回true。<br />
		以下範例將返回false、true、false。<br />
		例：alert(isNaN("1080")); alert(isNaN("john")); alert(isNaN(1080));</td>
	</tr>
	<tr>
		<td>Number()</td>
		<td>方法</td>
		<td>將指定的對象轉換為數值，無論是整數還是浮點數。<br />
		以下範例(1)將傳回把現在時間轉為數值資料的數值。<br />
		例1：var myDate = new Date(); alert(Number(myDate));<br />
		範例(2)將示範字串的轉換將傳回1080及10.8及NaN<br />
		例2：alert(Number("1080")); alert(Number("10.80")); alert(Number("10 80"));</td>
	</tr>
	<tr>
		<td>parseFloat()</td>
		<td>方法</td>
		<td>
			將字串轉換為數值類型，parseFloat()將字串轉為浮點數。只有字元類型才能使用此方法，否則直接返回NaN(not a number)。<br />
			parseFloat()會先分析指定的字串，首先檢查位置0的字元是否為有效數字，如果不是則返回NaN，不再進行任何操作。如果位置0為有效數字，則繼續往下找到字串結束或是遇見非數值字元為止，如下例：
<pre>
alert(parseFloat("34535orange")); //返回34535
alert(parseFloat("435.34")); //返回435.34
alert(parseFloat("435.34.564")); //返回435.34
alert(parseFloat("john650914@gmail.com")); //返回NaN
alert(parseFloat("0xA")); //parseFloat()沒有預設進制，直接輸出第一個字元"0"
</pre>
		</td>
	</tr>
	<tr>
		<td>parseInt()</td>
		<td>方法</td>
		<td>
			將字串轉換為數值類型，parseInt()將字串轉為整數。只有字元是數值才能使用此方法，否則直接返回NaN(not a number)。<br />
			parseInt()會先分析指定的字串，首先檢查位置0的字元是否為有效數字，如果不是則返回NaN，不再進行任何操作。如果位置0為有效數字，則繼續往下找到字串結束或是遇見非數值字元為止，如下例：
<pre>
alert(parseInt("4567red")); //返回4567
alert(parseInt("4567red89")); //返回4567
alert(parseInt("53.5")); //返回53
alert(parseInt("john650914@gmail.com")); //返回NaN
</pre>
		另外parseInt()方法還在轉換為數值的同時執行進制的轉換，如下例：
<pre>
alert(parseInt("0xC"));  //返回12
alert(parseInt("AF",16)); //返回175
alert(parseInt("11",2)); //返回3
alert(parseInt("011")); //返回9
alert(parseInt("011",8)); //返回9
alert(parseInt("011",10)); //返回11
</pre>
		</td>
	</tr>
	<tr>
		<td>String()</td>
		<td>方法</td>
		<td>http://www.cnblogs.com/hangongqiu/archive/2011/03/31/2000704.html</td>
	</tr>
	<tr>
		<td>toString()</td>
		<td>方法</td>
		<td>
			將array、number、boolean等等的Javascript物件轉換為字串物件。範例如下：
<pre>
var number01 = 123;
alert(typeof(number01)); //返回number
alert(typeof(number01.toString())); //返回string

var a=b=c=4;
alert(a+b+c.toString()+8); //返回848

var myArray = ['a','b','c'];
alert(typeof(myArray.toString())); //返回string
</pre>
		另外toString()方法還可加入參數進行進制的轉換，如下例：
<pre>
var a=11;
alert(a.toString(2)); //返回1011
alert(a.toString(3)); //返回102
alert(a.toString(8)); //返回13
alert(a.toString(16)); //返回b
</pre>
			補充：直接為某個數值用+號加上一個長度為零的空字串，可以快速將數值轉為字串，如下例：
<pre>
var number01 = 123;
alert(typeof(number01+'')); //返回string
</pre>
		</td>
	</tr>
	<tr>
		<td>unescape()</td>
		<td>方法</td>
		<td></td>
	</tr>
</table>
 </main>
</body>
</html>