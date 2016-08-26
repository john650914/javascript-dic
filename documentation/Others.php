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
<meta name="keywords" content="Javascript,Others,其它,物件,object,字典,方法,屬性,使用說明,文件,範例" />
<meta name="description" content="提供完整的Others物件及其方法、屬性的說明文件與範例" />
<title>其它 - Javascript字典</title>
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
<h1>Javascript - Others</h1>
<table class="doc-table">
	<tr>
		<th>名稱</th>
		<th>類形</th>
		<th>說明</th>
	</tr>
	<tr>
		<td>\</td>
		<td>特殊字元</td>
		<td>宣告變數遇到太長的字串可以在換行的結尾加上"\"繼續撰寫。</td>
	</tr>
	<tr>
		<td>\\</td>
		<td>特殊字元</td>
		<td>在字串中顯示 \</td>
	</tr>
	<tr>
		<td>\'</td>
		<td>特殊字元</td>
		<td>在字串中顯示 '</td>
	</tr>
	<tr>
		<td>\"</td>
		<td>特殊字元</td>
		<td>在字串中顯示 "</td>
	</tr>
	<tr>
		<td>\n</td>
		<td>特殊字元</td>
		<td>換行，目前只知道在alert的時候有用，如下例：
<pre>
var s = document.styleSheets;
alert(s.length +"\n"+"Style Sheets");
</pre></td>
	</tr>
	<tr>
		<td>Boolean</td>
		<td>資料類形</td>
		<td>Boolean有兩種值：true和false，與字串不同，Boolean不能用引號框起來。typeof()的傳回值是boolean。</td>
	</tr>
	<tr>
		<td>NaN</td>
		<td>資料類形</td>
		<td>NaN表非數值（Not a Number），像字串或未定義的值執行數學運算時，例如你嘗試作 1 / 'two'時，就會出現NaN的結果。
		注意，NaN不等於任何值，NaN也不等於NaN，如果你要測試某值結果是否為NaN，則要用isNaN()函式來測試。</td>
	</tr>
	<tr>
		<td>Null</td>
		<td>資料類形</td>
		<td>null是JavaScript中特殊的值，表示沒有任何東西。應用的時機就是在變數不指定至任何物件時，可以指定變數為null，
		或測試變數是否指定至null：var x = null; 對null使用typeof的結果會是'object'，這很怪(只能強記)。另外null乘以任何數皆為0，
		所以null也可視為數值0。</td>
	</tr>
	<tr>
		<td>Number</td>
		<td>資料類形</td>
		<td>正數、負數、整數、浮點數都屬於數值類型。typeof()的傳回值是number。詳細內容請見Number物件。</td>
	</tr>
	<tr>
		<td>Object</td>
		<td>資料類形</td>
		<td>對象(物件)類形，複合資料型態就是指物件，像是array()等。例var myDate=new Date(); alert(typeof(myDate)); 傳回object。</td>
	</tr>
	<tr>
		<td>String</td>
		<td>資料類形</td>
		<td>字串是由零個或多個字元構成。字元可以是字母、數字、標點符號和空格。字串必須放在單引號或是雙引號裡，如字串裡有單引號則把整個字串用雙引號包起來，反之亦然。typeof()的傳回值是string；詳細內容請見String物件。</td>
	</tr>
	<tr>
		<td>Undefined</td>
		<td>資料類形</td>
		<td>在建立變數後未指定變數值之前所提供的值；或是指不存在的物件屬性。例var x; typeOf(x)的傳回值是undefined。另外undefined乘以任何數皆為NaN(Not a Number)，所以undefined可視為一個空的字串。</td>
	</tr>
	<tr class="red">
		<td>()</td>
		<td>括號</td>
		<td>
			http://www.cnitblog.com/kenlistian/archive/2008/04/10/42219.html<br>
			http://www.huanghengxu.com/Html/Article/231.htm<br>
			http://topic.csdn.net/u/20070910/19/4f8ac008-c9f7-45c3-bd7b-5a2c94ae466d.html<br>
			http://hi.baidu.com/%BF%A1%C7%CE%BC%D1%C8%CB%B0%E9%C1%E6%D8%EA/blog/item/71be14250e9cfd398644f982.html<br>
			http://www.cnblogs.com/snandy/archive/2011/03/08/1977070.html<br>
			http://www.nowamagic.net/javascript/js_UsageOfBraces.php<br>
			http://developer.51cto.com/art/201103/248529.htm<br>
			http://news.csdn.net/n/20080114/112705.html<br>
			http://topic.csdn.net/u/20081028/20/2c47cc4b-b3c9-48b0-a5ed-c55bd4ab1a0f.html<br>
			http://www.lizhongda.net/web/NewsView.asp?ID=139&SortID=44<br>
			http://www.uedcss.com/post/javascript-brackets-test.html<br>
			http://www.itzsk.com/sold/97.html<br>
			http://www.360doc.com/content/11/0901/17/7317486_145050161.shtml<br>
			http://club.topsage.com/thread-2463755-1-1.html<br>
		</td>
	</tr>
	<tr class="red">
		<td>[]</td>
		<td>括號</td>
		<td>同上</td>
	</tr>
	<tr class="red">
		<td>{}</td>
		<td>括號</td>
		<td>同上</td>
	</tr>
	<tr class="red">
		<td>綜合知識</td>
		<td>綜合知識</td>
		<td>http://tc.wangchao.net.cn/it/detail_56951.html</td>
	</tr>
</table>
</main>
</body>
</html>