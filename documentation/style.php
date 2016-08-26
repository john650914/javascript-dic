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
<meta name="keywords" content="Javascript,style,樣式,cssText,物件,object,字典,方法,屬性,使用說明,文件,範例" />
<meta name="description" content="提供完整的style物件及其方法、屬性的說明文件與範例" />
<title>style物件 - Javascript字典</title>
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
<h1>Javascript - style物件</h1>
<table class="doc-table">
	<tr>
		<th>名稱</th>
		<th>類形</th>
		<th>說明</th>
	</tr>
	<tr>
		<td>style</td>
		<td>物件</td>
		<td>存放元素的CSS屬性的物件。可經由此物件，讀取元素上設定的風格表；也可以動態改變風格表。<br />
		注意在Javascript中style物件指的是html各標籤中的style屬性，所以在實際測試中發現，只有寫在元素行內的style屬性才能被讀取，如果CSS屬性是寫在外部的&lt;style&gt;標籤中，則要使用getComputedStyle()方法。<br>
		style 物件的 CSS 屬性其命名法：例如 CSS 中的屬性名稱是 text-decoration，則 style 物件的屬性名稱是 textDecoration；拿掉”-”，將第二個字的第一個字母改為大寫。在 HTML 或 CSS 中，大小寫字母視為相同；在 javascript 中，大小寫字母不相同。<br />
		記得IE和其它瀏覽器某些屬性名稱不盡相同，使用時要注意。<br /><br />
		範例1，指定元素的背景顏色：
<pre>
document.getElementById("test").style.backgroundColor="yellow";
</pre>
		範例2，讀取元素字體顏色的CSS設定：
<pre>
&lt;div id="myDiv" style="color:red;"&gt;myDiv text&lt;/div&gt;
&lt;script&gt;
	alert(myDiv.style.color);
&lt;/script&gt;
</pre>
		原文：References the style object of an element, in turn accessing and modifying individual style attributes' values. For example:
<pre>
document.getElementById("test").style.backgroundColor="yellow";
</pre></td>
	</tr>
	<tr>
		<td>cssText</td>
		<td>屬性</td>
		<td>
			以字串的方式設定或是傳回指定物件的CSS樣式內容，注意是行內寫法才有作用，如&lt;td style="background="yellow"&gt;table cell&lt;/td&gt;，而寫在&lt;style&gt;td{background:yellow;}&lt;/style&gt;中則不會有作用。<br>
			語法：Object.style.cssText="string"<br><br>
			範例1，傳回div1的CSS設定：
<pre>
&lt;script&gt;
	window.onload = function(){
		var div1 = document.getElementById('div1');
		alert(div1.style.cssText);
	}
&lt;/script&gt;
&lt;div id="div1" style="border:1px solid red;"&gt;div1&lt;/div&gt;
</pre>
			上例傳回的CSS設定內容在每個瀏覽器中都不太一樣，如FF和IE9傳回border: 1px dolid red;，Chrome傳回border-top-width:1px; border-right-width:1px;……(就是把一個樣式用很複雜的說明，有好有壞)，其它瀏覽器則又有不同方式表現，在使用之前都要測試過。<br><br>
			範例2，為指定的標籤設定CSS樣式：
<pre>
&lt;script&gt;
	window.onload = function(){
		var div1 = document.getElementById('div1');
		div1.style.cssText = 'border:1px solid black; background:gray; color:#fff; float:left; padding:30px;';
	}
&lt;/script&gt;
&lt;div id="div1"&gt;div1&lt;/div&gt;
</pre>
			上例只寫了一行程式碼就為div1指定了許多CSS樣式，非常的方便，而且相容性很高，每個瀏覽器(除IE6沒測)都能正常運作。
		</td>
	</tr>
	<tr>
		<td>background</td>
		<td>CSS屬性</td>
		<td>background</td>
	</tr>
	<tr>
		<td>backgroundAttachment</td>
		<td>CSS屬性</td>
		<td>background-attachment</td>
	</tr>
	<tr>
		<td>backgroundColor</td>
		<td>CSS屬性</td>
		<td>background-color</td>
	</tr>
	<tr>
		<td>backgroundImage</td>
		<td>CSS屬性</td>
		<td>background-image</td>
	</tr>
	<tr>
		<td>backgroundPosition</td>
		<td>CSS屬性</td>
		<td>background-position</td>
	</tr>
	<tr>
		<td>backgroundRepeat</td>
		<td>CSS屬性</td>
		<td>background-repeat</td>
	</tr>
	<tr>
		<td>border</td>
		<td>CSS屬性</td>
		<td>border</td>
	</tr>
	<tr>
		<td>borderBottom</td>
		<td>CSS屬性</td>
		<td>border-bottom</td>
	</tr>
	<tr>
		<td>borderBottomColor</td>
		<td>CSS屬性</td>
		<td>border-bottom-color</td>
	</tr>
	<tr>
		<td>borderBottomStyle</td>
		<td>CSS屬性</td>
		<td>border-bottom-style</td>
	</tr>
	<tr>
		<td>borderBottomWidth</td>
		<td>CSS屬性</td>
		<td>border-bottom-width</td>
	</tr>
	<tr>
		<td>borderCollapse</td>
		<td>CSS屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>borderColor</td>
		<td>CSS屬性</td>
		<td>border-color</td>
	</tr>
	<tr>
		<td>borderLeft</td>
		<td>CSS屬性</td>
		<td>border-left</td>
	</tr>
	<tr>
		<td>borderLeftColor</td>
		<td>CSS屬性</td>
		<td>border-left-color</td>
	</tr>
	<tr>
		<td>borderLeftStyle</td>
		<td>CSS屬性</td>
		<td>border-left-style</td>
	</tr>
	<tr>
		<td>borderLeftWidth</td>
		<td>CSS屬性</td>
		<td>border-left-width</td>
	</tr>
	<tr>
		<td>borderRight</td>
		<td>CSS屬性</td>
		<td>border-right</td>
	</tr>
	<tr>
		<td>borderRightColor</td>
		<td>CSS屬性</td>
		<td>border-right-color</td>
	</tr>
	<tr>
		<td>borderRightStyle</td>
		<td>CSS屬性</td>
		<td>border-right-style</td>
	</tr>
	<tr>
		<td>borderRightWidth</td>
		<td>CSS屬性</td>
		<td>border-right-width</td>
	</tr>
	<tr>
		<td>borderSpacing</td>
		<td>CSS屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>borderStyle</td>
		<td>CSS屬性</td>
		<td>border-style</td>
	</tr>
	<tr>
		<td>borderTop</td>
		<td>CSS屬性</td>
		<td>border-top</td>
	</tr>
	<tr>
		<td>borderTopColor</td>
		<td>CSS屬性</td>
		<td>border-top-color</td>
	</tr>
	<tr>
		<td>borderTopStyle</td>
		<td>CSS屬性</td>
		<td>border-top-style</td>
	</tr>
	<tr>
		<td>borderTopWidth</td>
		<td>CSS屬性</td>
		<td>border-top-width</td>
	</tr>
	<tr>
		<td>borderWidth</td>
		<td>CSS屬性</td>
		<td>border-width</td>
	</tr>
	<tr>
		<td>bottom</td>
		<td>CSS屬性</td>
		<td>bottom</td>
	</tr>
	<tr>
		<td>clear</td>
		<td>CSS屬性</td>
		<td>clear</td>
	</tr>
	<tr>
		<td>clip</td>
		<td>CSS屬性</td>
		<td>clip</td>
	</tr>
	<tr>
		<td>color</td>
		<td>CSS屬性</td>
		<td>color</td>
	</tr>
	<tr>
		<td>cssFloat</td>
		<td>CSS屬性</td>
		<td>float</td>
	</tr>
	<tr>
		<td>cursor</td>
		<td>CSS屬性</td>
		<td>cursor</td>
	</tr>
	<tr>
		<td>direction</td>
		<td>CSS屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>display</td>
		<td>CSS屬性</td>
		<td>display</td>
	</tr>
	<tr>
		<td>emptyCells</td>
		<td>CSS屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>filter</td>
		<td>CSS屬性</td>
		<td>filter</td>
	</tr>
	<tr>
		<td>font</td>
		<td>CSS屬性</td>
		<td>font</td>
	</tr>
	<tr>
		<td>fontFamily</td>
		<td>CSS屬性</td>
		<td>font-family</td>
	</tr>
	<tr>
		<td>fontSize</td>
		<td>CSS屬性</td>
		<td>font-size</td>
	</tr>
	<tr>
		<td>fontSizeAdjust</td>
		<td>CSS屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>fontVariant</td>
		<td>CSS屬性</td>
		<td>font-variant</td>
	</tr>
	<tr>
		<td>fontWeight</td>
		<td>CSS屬性</td>
		<td>font-weight</td>
	</tr>
	<tr>
		<td>height</td>
		<td>CSS屬性</td>
		<td>height</td>
	</tr>
	<tr>
		<td>left</td>
		<td>CSS屬性</td>
		<td>left</td>
	</tr>
	<tr>
		<td>letterSpacing</td>
		<td>CSS屬性</td>
		<td>letter-spacing</td>
	</tr>
	<tr>
		<td>lineHeight</td>
		<td>CSS屬性</td>
		<td>line-height</td>
	</tr>
	<tr>
		<td>listStyle</td>
		<td>CSS屬性</td>
		<td>list-style</td>
	</tr>
	<tr>
		<td>listStyleImage</td>
		<td>CSS屬性</td>
		<td>list-style-image</td>
	</tr>
	<tr>
		<td>listStylePosition</td>
		<td>CSS屬性</td>
		<td>list-style-position</td>
	</tr>
	<tr>
		<td>listStyleType</td>
		<td>CSS屬性</td>
		<td>list-style-type</td>
	</tr>
	<tr>
		<td>margin</td>
		<td>CSS屬性</td>
		<td>margin</td>
	</tr>
	<tr>
		<td>marginBottom</td>
		<td>CSS屬性</td>
		<td>margin-bottom</td>
	</tr>
	<tr>
		<td>marginLeft</td>
		<td>CSS屬性</td>
		<td>margin-left</td>
	</tr>
	<tr>
		<td>marginRight</td>
		<td>CSS屬性</td>
		<td>margin-right</td>
	</tr>
	<tr>
		<td>marginTop</td>
		<td>CSS屬性</td>
		<td>margin-top</td>
	</tr>
	<tr>
		<td>orphans</td>
		<td>CSS屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>outline</td>
		<td>CSS屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>outlineColor</td>
		<td>CSS屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>outlineStyle</td>
		<td>CSS屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>outlineWidth</td>
		<td>CSS屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>overflow</td>
		<td>CSS屬性</td>
		<td>overflow</td>
	</tr>
	<tr>
		<td>padding</td>
		<td>CSS屬性</td>
		<td>padding</td>
	</tr>
	<tr>
		<td>paddingBottom</td>
		<td>CSS屬性</td>
		<td>padding-bottom</td>
	</tr>
	<tr>
		<td>paddingLeft</td>
		<td>CSS屬性</td>
		<td>padding-left</td>
	</tr>
	<tr>
		<td>paddingRight</td>
		<td>CSS屬性</td>
		<td>padding-right</td>
	</tr>
	<tr>
		<td>paddingTop</td>
		<td>CSS屬性</td>
		<td>padding-top</td>
	</tr>
	<tr>
		<td>pageBreakAfter</td>
		<td>CSS屬性</td>
		<td>page-break-after</td>
	</tr>
	<tr>
		<td>pageBreakBefore</td>
		<td>CSS屬性</td>
		<td>page-break-before</td>
	</tr>
	<tr>
		<td>position</td>
		<td>CSS屬性</td>
		<td>position</td>
	</tr>
	<tr>
		<td>quotes</td>
		<td>CSS屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>right</td>
		<td>CSS屬性</td>
		<td>right</td>
	</tr>
	<tr>
		<td>styleFloat</td>
		<td>CSS屬性</td>
		<td>float</td>
	</tr>
	<tr>
		<td>tableLayout</td>
		<td>CSS屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>textAlign</td>
		<td>CSS屬性</td>
		<td>text-align</td>
	</tr>
	<tr>
		<td>textDecoration</td>
		<td>CSS屬性</td>
		<td>text-decoration</td>
	</tr>
	<tr>
		<td>textDecorationBlink</td>
		<td>CSS屬性</td>
		<td>text-decoration: blink</td>
	</tr>
	<tr>
		<td>textDecorationLineThrough</td>
		<td>CSS屬性</td>
		<td>text-decoration: line-through</td>
	</tr>
	<tr>
		<td>textDecorationNone</td>
		<td>CSS屬性</td>
		<td>text-decoration: none</td>
	</tr>
	<tr>
		<td>textDecorationOverline</td>
		<td>CSS屬性</td>
		<td>text-decoration: overline</td>
	</tr>
	<tr>
		<td>textDecorationUnderline</td>
		<td>CSS屬性</td>
		<td>text-decoration: underline</td>
	</tr>
	<tr>
		<td>textIndent</td>
		<td>CSS屬性</td>
		<td>text-indent</td>
	</tr>
	<tr>
		<td>textShadow</td>
		<td>CSS屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>textTransform</td>
		<td>CSS屬性</td>
		<td>text-transform</td>
	</tr>
	<tr>
		<td>top</td>
		<td>CSS屬性</td>
		<td>top</td>
	</tr>
	<tr>
		<td>unicodeBidi</td>
		<td>CSS屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>verticalAlign</td>
		<td>CSS屬性</td>
		<td>vertical-align</td>
	</tr>
	<tr>
		<td>visibility</td>
		<td>CSS屬性</td>
		<td>visibility</td>
	</tr>
	<tr>
		<td>whiteSpace</td>
		<td>CSS屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>width</td>
		<td>CSS屬性</td>
		<td>width</td>
	</tr>
	<tr>
		<td>widows</td>
		<td>CSS屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>wordSpacing</td>
		<td>CSS屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>zIndex</td>
		<td>CSS屬性</td>
		<td>z-index</td>
	</tr>
</table>
</main>
</body>
</html>