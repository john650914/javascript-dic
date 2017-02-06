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
<meta name="keywords" content="Javascript,cssRules,rule,cssText,style,物件,object,字典,方法,屬性,使用說明,文件,範例" />
<meta name="description" content="提供完整的cssRule物件及其方法、屬性的說明文件與範例" />
<title>cssRules物件 - Javascript字典</title>
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
<h1>Javascript - cssRules物件</h1>
	<?php include("../includes/adsense.php"); ?>
<table class="doc-table">
	<tr>
		<th>名稱</th>
		<th>類形</th>
		<th>說明</th>
	</tr>
	<tr>
		<td>cssRules</td>
		<td>物件</td>
		<td>cssRules物件是styleSheets的屬性之一，是DOM2的標準物件，IE中請使用rules；<br />
			它以陣列的方式傳回風格表中所有的規則，我們可以在樣式表中用它來新增、刪除或編輯己存在的樣式規則；此物件有以下兩個特徵：<br />
			　1.selectorText：讀取或設定選擇器。<br />
			　2.style：風格區塊物件。<br />
			以下範例先判斷使用者的瀏覽器，再傳回第2個樣式表的length，最後傳回第2個選擇器的名字及其風格設定：
<pre>
var cr=document.styleSheets[1].cssRules;
if(cr == undefined){
	cr=document.styleSheets[1].rules; //IE
}
alert(cr.length);
document.write('&lt;b&gt;'+ cr[1].selectorText+'&lt;/b&gt;：'+ cr[1].style.cssText);
</pre>
			補充範例2：
<pre>
if(document.styleSheets[0].cssRules){
	crossrule=document.styleSheets[0].cssRules[0];
}
else if(document.styleSheets[0].rules){
	crossrule=document.styleSheets[0].rules[0];
}
</pre>
		</td>
	</tr>
	<tr>
		<td>rules</td>
		<td>物件</td>
		<td>rules物件是styleSheets的屬性之一，在Firefox、Chrome、Opera、Safari等非IE瀏覽器請使用cssRules；<br />
			它以陣列的方式傳回風格表中所有的規則，我們可以在樣式表中用它來新增、刪除或編輯己存在的樣式規則；此物件有以下兩個特徵：<br />
			　1.selectorText：讀取或設定選擇器。<br />
			　2.style：風格區塊物件。<br />
			以下範例先判斷使用者的瀏覽器，再傳回第2個樣式表的length，最後傳回第2個選擇器的名字及其風格設定：
<pre>
var cr=document.styleSheets[1].cssRules;
if(cr == undefined){
	cr=document.styleSheets[1].rules; //IE
}
alert(cr.length);
document.write('&lt;b&gt;'+ cr[1].selectorText+'&lt;/b&gt;：'+ cr[1].style.cssText);
</pre>
			補充範例2：
<pre>
if(document.styleSheets[0].cssRules){
	crossrule=document.styleSheets[0].cssRules[0];
}
else if(document.styleSheets[0].rules){
	crossrule=document.styleSheets[0].rules[0];
}
</pre>
		</td>
	</tr>
	<tr>
		<td>cssText</td>
		<td>屬性</td>
		<td>傳回指定css規則的內容，包括選擇器名稱、屬性及其屬性值。<br />
			各瀏覽器支援度差異很大，請參考下表：
			<style>
				#cssTextTable{width:638px; margin:0; padding:10px 0; overflow:auto;}
				#cssTextTable li{float:left; list-style:none; margin:0; padding:0; height:190px; border-bottom:1px solid #505050; padding-left:3px;}
				#cssTextTable .th{background:#505050; color:#fff; height:23px;}
				#cssTextTable .td{}
				
				#cssTextTable .th1{width:90px;}
				#cssTextTable .th2{width:70px;}
				#cssTextTable .th3{width:328px;}
				#cssTextTable .th4{width:138px;}
				
				#cssTextTable .td1{width:90px;}
				#cssTextTable .td2{width:70px;}
				#cssTextTable .td3{width:328px;}
				#cssTextTable .td4{width:138px;}
			</style>
			<div style="margin-right:-16px; overflow:auto;">
				<ul id="cssTextTable">
					<li class="th th1">瀏覽器</li>
					<li class="th th2">父標籤</li>
					<li class="th th3">語法</li>
					<li class="th th4">支援度</li>
					
					<li class="td td1">Firefox 4.x</li>
					<li class="td td2">&lt;link&gt;<br /><br /><br /><br />&lt;style&gt;</li>
					<li class="td td3">
						document.styleSheets[0].cssText<br />
						document.styleSheets[0].cssRules[0].cssText<br />
						document.styleSheets[0].cssRules[0].selectorText<br />
						document.styleSheets[0].cssRules[0].style.cssText<br />
						document.styleSheets[1].cssText<br />
						document.styleSheets[1].cssRules[0].cssText<br />
						document.styleSheets[1].cssRules[0].selectorText<br />
						document.styleSheets[1].cssRules[0].style.cssText
					</li>
					<li class="td td4">
						傳回undefined<br />
						傳回該規則所有資料<br />
						傳回該規則的選擇器<br />
						傳回屬性及屬性值<br />
						傳回undefined<br />
						傳回該規則所有資料<br />
						傳回該規則的選擇器<br />
						傳回屬性及屬性值
					</li>
					
					<li class="td td1">Chrome 13.x</li>
					<li class="td td2">&lt;link&gt;<br /><br /><br /><br />&lt;style&gt;</li>
					<li class="td td3">
						document.styleSheets[0].cssText<br />
						document.styleSheets[0].cssRules[0].cssText<br />
						document.styleSheets[0].cssRules[0].selectorText<br />
						document.styleSheets[0].cssRules[0].style.cssText<br />
						document.styleSheets[1].cssText<br />
						document.styleSheets[1].cssRules[0].cssText<br />
						document.styleSheets[1].cssRules[0].selectorText<br />
						document.styleSheets[1].cssRules[0].style.cssText
					</li>
					<li class="td td4">
						傳回undefined<br />
						error<br />
						error<br />
						error<br />
						error<br />
						error<br />
						error<br />
						error
					</li>
					
					<li class="td td1">IE9</li>
					<li class="td td2">&lt;link&gt;<br /><br /><br /><br />&lt;style&gt;</li>
					<li class="td td3">
						document.styleSheets[0].cssText<br />
						document.styleSheets[0].cssRules[0].cssText<br />
						document.styleSheets[0].cssRules[0].selectorText<br />
						document.styleSheets[0].cssRules[0].style.cssText<br />
						document.styleSheets[1].cssText<br />
						document.styleSheets[1].cssRules[0].cssText<br />
						document.styleSheets[1].cssRules[0].selectorText<br />
						document.styleSheets[1].cssRules[0].style.cssText
					</li>
					<li class="td td4">
						傳回整個樣式表內容*1<br />
						傳回該規則所有資料<br />
						傳回該規則的選擇器<br />
						傳回屬性及屬性值<br />
						傳回整個樣式表內容*1<br />
						傳回該規則所有資料<br />
						傳回該規則的選擇器<br />
						傳回屬性及屬性值
					</li>
					
					<li class="td td1">IE8以下</li>
					<li class="td td2">&lt;link&gt;<br /><br /><br /><br />&lt;style&gt;</li>
					<li class="td td3">
						document.styleSheets[0].cssText<br />
						document.styleSheets[0].rules[0].cssText<br />
						document.styleSheets[0].rules[0].selectorText<br />
						document.styleSheets[0].rules[0].style.cssText<br />
						document.styleSheets[1].cssText<br />
						document.styleSheets[1].rules[0].cssText<br />
						document.styleSheets[1].rules[0].selectorText<br />
						document.styleSheets[1].rules[0].style.cssText
					</li>
					<li class="td td4">
						傳回整個樣式表內容*1<br />
						傳回undefined<br />
						傳回該規則的選擇器*2<br />
						傳回屬性及屬性值<br />
						傳回整個樣式表內容*1<br />
						傳回該規則所有資料<br />
						傳回該規則的選擇器*2<br />
						傳回屬性及屬性值
					</li>
					
					<li class="td td1">Opera</li>
					<li class="td td2">&lt;link&gt;<br /><br /><br /><br />&lt;style&gt;</li>
					<li class="td td3">
						document.styleSheets[0].cssText<br />
						document.styleSheets[0].cssRules[0].cssText<br />
						document.styleSheets[0].cssRules[0].selectorText<br />
						document.styleSheets[0].cssRules[0].style.cssText<br />
						document.styleSheets[1].cssText<br />
						document.styleSheets[1].cssRules[0].cssText<br />
						document.styleSheets[1].cssRules[0].selectorText<br />
						document.styleSheets[1].cssRules[0].style.cssText
					</li>
					<li class="td td4">
						傳回undefined<br />
						傳回該規則所有資料<br />
						傳回該規則的選擇器<br />
						傳回屬性及屬性值<br />
						傳回undefined<br />
						傳回該規則所有資料<br />
						傳回該規則的選擇器<br />
						傳回屬性及屬性值
					</li>
				</ul>
			</div>
			註1：寫成p,a{color:red;}的規則會傳回p{color:red;} a{color:red;}。<br />
			註2：寫成p,a{color:red;}的規則會傳回p。
		</td>
	</tr>
	<tr>
		<td>length</td>
		<td>屬性</td>
		<td>傳回一個樣式表中規則的數量，各瀏覽器支援度差異相當大，下面兩個範例做說明：<br /><br />
			下例在Chrome、Opera會出現error，Firefox、Safari、IE9會顯示正確的數量，如 p, div{color:red;}會傳回1。<br />
			在IE7及IE8，p, div{color:red;}會傳回2。
<pre>
alert(document.styleSheets[0].cssRules.length); //none IE browsers
alert(document.styleSheets[0].rules.length); //IE browsers
</pre>
			另外要注意的是，使用&lt;style&gt;和&lt;link&gt;載入的cssRules在各瀏覽狀況又不同，非常麻煩。
		</td>
	</tr>
	<tr>
		<td>parentStyleSheet</td>
		<td>屬性</td>
		<td>傳回包含指定規則的樣式表物件，如下例：
<pre>
alert(document.styleSheets[1].cssRules[0].parentStyleSheet); //none IE browsers
alert(document.styleSheets[1].rules[0].parentStyleSheet); //IE browsers
</pre>
			Firefox、Opera、IE9傳回[object CSSstyleSheet]<br />
			Chrome及Sarari發生Error<br />
			IE8及IE7傳回undefined
		</td>
	</tr>
	<tr>
		<td>selectorText</td>
		<td>屬性</td>
		<td>讀/寫指定規則的選擇器名稱；這又是一個每個瀏覽器都有不同結果的屬性…有點懶的寫了…有需要的時候再看範例去測吧。<br />
			原文：Read/write property that returns the selector part of a rule. Setting this property yields unpredictable results in both Firefox and IE.
			範例：
<pre>
alert(document.styleSheets[1].cssRules[0].selectorText); //none IE browsers
alert(document.styleSheets[1].rules[0].selectorText); //IE browsers
</pre>
		</td>
	</tr>
	<tr>
		<td>style</td>
		<td>屬性</td>
		<td>讀/寫指定規則的屬性值，使用方法和DOM物件中的Style類似；只有IE7、8不支援。<br />
			原文：The "style" object of the css rule object provides read/write access to individual attributes defined in the rule, similar in fashion to the "style" object of inline styles.<br />
			範例：
<pre>
var mysheet=document.styleSheets[0]
if(mysheet.cssRules[0].style.background!="yellow"){
	mysheet.cssRules[0].style.background="yellow";
}
</pre>
		</td>
	</tr>
</table>
</main>
</body>
</html>