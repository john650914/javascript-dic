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
<meta name="keywords" content="Javascript,screen,物件,object,字典,方法,屬性,使用說明,文件,範例" />
<meta name="description" content="提供完整的screen物件及其方法、屬性的說明文件與範例" />
<title>screen物件 - Javascript字典</title>
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
<h1>Javascript - screen物件</h1>
<table class="doc-table">
	<tr>
		<th>名稱</th>
		<th>類形</th>
		<th>說明</th>
	</tr>
	<tr>
		<td>screen</td>
		<td>物件</td>
		<td>screen物件是window物件的屬性之一，主要用來獲取使用者的螢幕資訊，因為有時需要根據使用者燭幕的解析度來調節新開視窗的大小。如下例所示：
<pre>
var wor;
var myWidth = screen.availWidth;
var myHeight = screen.availHeight;
function openGoogle(){wor = window.open("http://google.com","_blank","width="+myWidth+",height="+myHeight+",resizable=yes");}
&lt;a href='javascript:openGoogle()'&gt;點此開啟 GOOGLE&lt;/a&gt;
&lt;a href='javascript:wor.close()'&gt;關閉 GOOGLE&lt;/a&gt;
</pre>
	</tr>
	<tr>
		<td>availHeight</td>
		<td>屬性</td>
		<td>原文：Returns the width of the screen, in pixels, minus interface features such as the taskbar in Windows. In other words, the usable width available to your browser window.<br>
		螢幕可用範圍的高度，即當前螢幕解析度的高度設定，再扣掉作業系統元素(如windows工具列)所得到的值。
		</td>
	</tr>
	<tr>
		<td>availWidth</td>
		<td>屬性</td>
		<td>原文：Returns the height of the screen, in pixels, minus interface features such as the taskbar in Windows. In other words, the usable height available to your browser window.<br>
		螢幕可用範圍的寬度，即當前螢幕解析度的寬度設定，再扣掉作業系統元素(如windows工具列)所得到的值。
		</td>
	</tr>
	<tr>
		<td>colorDepth</td>
		<td>屬性</td>
		<td>原文：The bit depth of the color palette available for displaying images in bits per pixel.<br>
		用戶顯示顏色的位數，每個瀏覽器傳回的值好像都不太一樣…。
		</td>
	</tr>
	<tr>
		<td>height</td>
		<td>屬性</td>
		<td>原文：The total height of the screen, in pixels.<br>
		當前螢幕解析度所設定的高度。
		</td>
	</tr>
	<tr>
		<td>pixelDepth</td>
		<td>屬性</td>
		<td>原文：Display screen color resolution (bits per pixel). NS/Firefox exclusive property.
		</td>
	</tr>
	<tr>
		<td>width</td>
		<td>屬性</td>
		<td>原文：The total width of the screen, in pixels.<br>
		當前螢幕解析度所設定的寬度。
		</td>
	</tr>
</table>
</main>
</body>
</html>