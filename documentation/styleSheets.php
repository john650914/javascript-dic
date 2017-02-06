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
<meta name="keywords" content="Javascript,styleSheets,樣式,物件,getComputedStyle,object,字典,方法,屬性,使用說明,文件,範例" />
<meta name="description" content="提供完整的styleSheets物件及其方法、屬性的說明文件與範例" />
<title>styleSheets物件 - Javascript字典</title>
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
<h1>Javascript - styleSheets物件</h1>
	<?php include("../includes/adsense.php"); ?>
<table class="doc-table">
	<tr>
		<th>名稱</th>
		<th>類形</th>
		<th>說明</th>
	</tr>
	<tr>
		<td>styleSheets</td>
		<td>物件</td>
		<td>styleSheets物件是document的一個屬性，它包含了頁面中所有的外部樣式表的陣列，如&lt;style&gt;或是&lt;link rel="stylesheet"&gt;中的樣式表，使用length屬性將傳回載入的樣式表數量；透過styleSheets物件物件我們可以新增或是刪除樣式表中的某個樣式，它的cssRule物件讓我們可以修改己經存在的樣式設定。<br />
			一般來說，編輯inline style會比外部樣式方便及有效率的多，然而有時候我們還是會需要改變外部樣式。<br />
			此物件在不同瀏覽器的定義有很多差異，例如以下各種情況：&lt;link&gt;、&lt;style&gt;、@import或是行內的樣式，styleSheets在不同瀏覽器的訪問能力各不相同，使用時要多測試。<br />
			下例將傳回頁面中樣式表的數量和第一個樣式表的類形：
<pre>
document.write(document.styleSheets.length +'&lt;br /&gt;'+ document.styleSheets[0].type);
</pre>
		</td>
	</tr>
	<tr>
		<td>cssRules</td>
		<td>屬性</td>
		<td>以陣列的方式傳回風格表中所有的規則，我們可以在樣式表中用它來新增、刪除或編輯己存在的樣式規則；cssRules是DOM2的標準物件，IE中請使用rules；此物件有以下兩個特徵：<br />
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
		<td>這個屬性是用來傳回指styleSheets的所有文字描述，對於styleSheets物件目前知道只有IE支援，Chrome則是完全不支援這個屬性，詳細內容請參考"DOM - cssRules"一節。</td>
	</tr>
	<tr>
		<td>disabled</td>
		<td>屬性</td>
		<td>讀取或設定風格表使用狀態：false為使用中；true為不使用，預設值為false。<br />
			範例：
<pre>
var $on = document.getElementsByTagName('a')[0];
var $off = document.getElementsByTagName('a')[1];
$on.onclick = function(){document.styleSheets[0].disabled = false;}
$off.onclick = function(){document.styleSheets[0].disabled = true;}
</pre></td>
	</tr>
	<tr>
		<td>href</td>
		<td>屬性</td>
		<td>讀取或設定存放風格表檔案的網址。<br />
			範例：
<pre>
document.write(document.styleSheets[0].href);
</pre></td>
	</tr>
	<tr>
		<td>length</td>
		<td>屬性</td>
		<td>傳回頁面中樣式表的數量，例如：
<pre>
alert(document.styleSheets.length);
</pre></td>
	</tr>
	<tr>
		<td>media</td>
		<td>屬性</td>
		<td>原文：Specifies the medium of the stylesheet. Default value is "screen."<br />
			MediaList物件，指定風格表施用的媒體。
		</td>
	</tr>
	<tr>
		<td>ownerNode</td>
		<td>屬性</td>
		<td>傳回指定樣式表所屬的元素節點，在一般的HTML文件中，它通常會傳回LINK以及STYLE；IE無此項，IE使用owningElement。<br />
		範例如下：
<pre>
alert(document.styleSheets[1].ownerNode.tagName);
</pre></td>
	</tr>
	<tr>
		<td>ownerRule</td>
		<td>屬性</td>
		<td>For stylesheets that are defined using an @import rule, returns its CSSImportRule object. You can use the cssRules[] object to add or remove rules within the stylesheet. NS6+/Firefox only property.<br />
			如果風格表使用@import讀入，則此物件存放 @import 的規則。IE6無此項；其它瀏覽器支援不良。</td>
	</tr>
	<tr>
		<td>owningElement</td>
		<td>屬性</td>
		<td>傳回指定樣式表所屬的元素節點，在一般的HTML文件中，它通常會傳回LINK以及STYLE；IE專用屬性，其它瀏覽器請使用ownerNode。<br />
		範例如下：
<pre>
alert(document.styleSheets[1].owningElement.tagName);
</pre></td>
	</tr>
	<tr>
		<td>parentStyleSheet</td>
		<td>屬性</td>
		<td>原文：For stylesheets that are included on the page via the @page rule, parentStyleSheet references the top level stylesheet. For standard LINK or STYLE stylehseets, this property returns null. For example:
<pre>
if(document.styleSheets[0].parentStyleSheet); //this style sheet is included using the @page rule
</pre></td>
	</tr>
	<tr>
		<td>rules</td>
		<td>屬性</td>
		<td>以陣列的方式傳回風格表中所有的規則，我們可以在樣式表中用它來新增、刪除或編輯己存在的樣式規則；些屬性為IE特有，在Firefox、Chrome、Opera、Safari等瀏覽器請使用cssRules；此物件有以下兩個特徵：<br />
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
</pre></td>
	</tr>
	<tr>
		<td>title</td>
		<td>屬性</td>
		<td>傳回存放指定樣式表HTML標籤的TITLE屬性值，未指定則傳回null，如下例：
<pre>
&lt;link rel="stylesheet" type="text/css" media="all" href="default.css" title="myCSS" /&gt;
&lt;style type="text/css" title="myCSS2"&gt;div{line-height:30px;}&lt;/style&gt;
&lt;script type="text/javascript"&gt;
window.onload = function(){
	alert(document.styleSheets[0].title);
	alert(document.styleSheets[1].title);
}
</pre></td>
	</tr>
	<tr>
		<td>type</td>
		<td>屬性</td>
		<td>傳回指定樣式表HTML標籤的TYPE屬性值，如下例：
<pre>
alert(document.styleSheets[1].type);
</pre></td>
	</tr>
	<tr>
		<td>addRule()</td>
		<td>方法</td>
		<td>在指定的樣式表中加新入的規則，IE專用方法，其它瀏覽器請用insertRule()。<br />
			selector參數代表規則的選則器名稱如："p"或"div b"等；declaration參數是指該規則的屬性和值如："background-color: yellow; color: brown"；index參數則是一個非必需的整數選項，該參數讓我們在指定樣式表中指派新加入規則的位置，例如輸入0就代表在樣式表的最前面加入新規則，預設值為-1，設定-1時會自動將新規則加到樣式表的結尾。<br />
			範例：
<pre>
document.styleSheets[0].addRule("p .myclass", "font-size: 120%");
document.styleSheets[1].addRule("div", "border: 1px solid black", 0); //add rule to start of stylesheet
</pre></td>
	</tr>
	<tr>
		<td>removeRule()</td>
		<td>方法</td>
		<td>從指定的樣式表中移除一個css規則，IE專用方法，其它瀏覽器請用deleteRule()。<br />
			在index參數中輸入一個非必需的整數來刪除指定的規則，此參數代表從rules取得的位置。<br />
			範例：
<pre>
//Remove any rules with "P SPAN" as its selector text from the stylesheet
var mysheet=document.styleSheets[0];
for (i=0; i&lt;mysheet.rules.length; i++){
	if(mysheet.rules[i].selectorText=="P SPAN"){
		mysheet.removeRule(i);
	}
}
</pre></td>
	</tr>
	<tr>
		<td>deleteRule()</td>
		<td>方法</td>
		<td>從指定的樣式表中移除一個css規則，IE無此項，IE請用removeRule()。<br />
			index參數是一個整數，它指定我們要移除規則的位置，規則的位置可以使用cssRules[]屬性觀查。<br />
			以下範例將移除在第2個位置的css規則，本來藍色的字就會變成紅色：
<pre>
&lt;style type="text/css" title="myCSS2"&gt;
	p{color:red;}
	p{color:blue;}
&lt;/style&gt;

&lt;script type="text/javascript"&gt;
window.onload = function(){
	document.styleSheets[0].deleteRule(1);
}
&lt;/script&gt;
</pre></td>
	</tr>
	<tr>
		<td>insertRule()</td>
		<td>方法</td>
		<td>在指定的樣式表中加新入的規則，IE無此項，IE請用addRule()。<br />
			rule參數是一組字串，存放我們要加入的css規則，如：p{color:black;}，index參數是一個整數，它決定新的css規則加入的位置，規則的位置可以使用cssRules[]屬性觀查。<br />
			以下範例將在第7個規則後(也就是在第8個位置)加入新的規則，&lt;P&gt;的文字就會變成黑色的：
<pre>
&lt;style type="text/css" title="myCSS2"&gt;
	p{color:red;}
	p{color:orange;}
	p{color:yellow;}
	p{color:green;}
	p{color:blue;}
	p{color:indigo;}
	p{color:purple;}
&lt;/style&gt;

&lt;script type="text/javascript"&gt;
window.onload = function(){
	document.styleSheets[0].insertRule('p{font-size:30px;}',0);
}
&lt;/script&gt;
</pre></td>
	</tr>
</table>
</main>
</body>
</html>