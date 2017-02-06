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
<meta name="keywords" content="Javascript,navigator,物件,object,字典,方法,屬性,使用說明,文件,範例" />
<meta name="description" content="提供完整的navigator物件及其方法、屬性的說明文件與範例" />
<title>navigator物件 - Javascript字典</title>
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
<h1>Javascript - navigator物件</h1>
	<?php include("../includes/adsense.php"); ?>
<table class="doc-table">
	<tr>
		<th>名稱</th>
		<th>類形</th>
		<th>說明</th>
	</tr>
	<tr>
		<td>navigator</td>
		<td>物件</td>
		<td>navigator物件是window的屬性之一，利用navigator物件可以取得瀏覽器的資訊，包括名稱、版本和平台等。要注意的是navigator物件的屬性都是唯讀性質，只能使用不能修改。<br>
			使用語法為：window.navigator.屬性或方法; (window可省略)<br>
			下範例(1)示範了一個取得瀏覽器版本的方法：
<pre>
var browserVer = navigator.appVersion;
if(browserVer.indexOf('MSIE 6.0') != -1){
	alert("You're using Internet Explorer 6");
}
</pre>
			範例(2)，判斷作業系統是否為WinXP：
<pre>
var myUserAngent = navigator.userAgent;
var isWinXP = myUserAngent.indexOf("Windows NT 5.1") &gt -1;
if(isWinXP){document.write("這是WinXP");} else{document.write("這不是WinXP");}
</pre>
		</td>
	</tr>
	<tr>
		<td>appCodeName</td>
		<td>屬性</td>
		<td>瀏覽器程式碼名，也就是瀏覽器的別名(例如"Mozilla")。<br>
		例：document.write(navigator.appCodeName);<br>
		上例將返回：<br>
		IE6：Mozilla<br>
		IE7：Mozilla<br>
		IE8：Mozilla<br>
		IE9：Mozilla<br>
		FireFox3.x：Mozilla<br>
		FireFox4.x：Mozilla<br>
		Opera：Mozilla<br>
		Chrome：Mozilla</td>
	</tr>
	<tr>
		<td>appMinorVersion</td>
		<td>屬性</td>
		<td>瀏覽器的次要版本值。<br>
		例：document.write(navigator.appMinorVersion);<br>
		上例將返回：<br>
		IE6：;SP2;<br>
		IE7：;SP2;<br>
		IE8：0<br>
		IE9：0<br>
		FireFox3.x：undefined<br>
		FireFox4.x：undefined<br>
		Opera：<br>
		Chrome：undefined</td>
	</tr>
	<tr>
		<td>appName</td>
		<td>屬性</td>
		<td>官方瀏覽器名，也就是瀏覽器名稱。<br>
		例：document.write(navigator.appName);<br>
		上例將返回：<br>
		IE6：Microsoft Internet Explorer<br>
		IE7：Microsoft Internet Explorer<br>
		IE8：Microsoft Internet Explorer<br>
		IE9：Microsoft Internet Explorer<br>
		FireFox3.x：Netscape<br>
		FireFox4.x：Netscape<br>
		Opera：Opera<br>
		Chrome：Netscape</td>
	</tr>
	<tr>
		<td>appVersion</td>
		<td>屬性</td>
		<td>例：document.write(navigator.appVersion);<br>
		上例將返回：<br>
		IE6：4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)<br>
		IE7：4.0 (compatible; MSIE 7.0; Windows NT 5.1; SV1)<br>
		IE8：4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; GTB6.6; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; eSobiSubscriber 2.0.4.16; InfoPath.3; .NET4.0C; AskTbCDS2/5.11.3.15590)<br>
		IE9：5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0)<br>
		IE10：5.0 (compatible; MSIE 10.0; Windows NT 6.1; WOW64; Trident/6.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; .NET4.0C)<br>
		IE11：5.0 (Windows NT 6.3; WOW64; Trident/7.0; Touch; .NET4.0E; .NET4.0C; .NET CLR 3.5.30729; .NET CLR 2.0.50727; .NET CLR 3.0.30729; Tablet PC 2.0; MASPJS; rv:11.0) like Gecko<br>
		FireFox3.x：5.0 (Windows; zh-TW)<br>
		FireFox4.x：5.0 (Windows)<br>
		FireFox25.x：5.0 (Windows)<br>
		Opera：9.80 (Windows NT 6.1; U; zh-tw)<br>
		Chrome30.x：5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36</td>
	</tr>
	<tr>
		<td>browserLanguage</td>
		<td>屬性</td>
		<td>瀏覽器所使用的語言。<br>
		例：document.write(+navigator.browserLanguage);<br>
		上例將返回：<br>
		IE6：zh-tw<br>
		IE7：zh-tw<br>
		IE8：zh-tw<br>
		IE9：zh-tw<br>
		FireFox3.x：undefined<br>
		FireFox4.x：undefined<br>
		Opera：zh-tw<br>
		Chrome：undefined</td>
	</tr>
	<tr>
		<td>cookieEnabled</td>
		<td>屬性</td>
		<td>瀏覽器是否接受cookie。<br>
		例：document.write(navigator.cookieEnabled);<br>
		上例將返回：<br>
		IE6：true<br>
		IE7：true<br>
		IE8：true<br>
		IE9：true<br>
		FireFox3.x：true<br>
		FireFox4.x：true<br>
		Opera：true<br>
		Chrome：true</td>
	</tr>
	<tr>
		<td>cpuClass</td>
		<td>屬性</td>
		<td>所使用的CPU種類。<br>
		例：document.write(navigator.cpuClass);<br>
		上例將返回：<br>
		IE6：x86<br>
		IE7：x86<br>
		IE8：x86<br>
		IE9：x86<br>
		FireFox3.x：undefined<br>
		FireFox4.x：undefined<br>
		Opera：undefined<br>
		Chrome：undefined</td>
	</tr>
	<tr>
		<td>language</td>
		<td>屬性</td>
		<td>要來補</td>
	</tr>
	<tr>
		<td>onLine</td>
		<td>屬性</td>
		<td>是否與網際網路連線中。<br>
		例：document.write(navigator.onLine);<br>
		上例將返回：<br>
		IE6：true<br>
		IE7：true<br>
		IE8：true<br>
		IE9：true<br>
		FireFox3.x：true<br>
		FireFox4.x：true<br>
		Opera：true<br>
		Chrome：true</td>
	</tr>
	<tr>
		<td>platform</td>
		<td>屬性</td>
		<td>執行瀏覽器的電腦平台。<br>
		例：document.write(navigator.platform);<br>
		上例將返回：<br>
		IE6：Win32<br>
		IE7：Win32<br>
		IE8：Win32<br>
		IE9：Win32<br>
		FireFox3.x：Win32<br>
		FireFox4.x：Win32<br>
		Opera：Win32<br>
		Chrome：Win32</td>
	</tr>
	<tr>
		<td>plugins</td>
		<td>屬性</td>
		<td>安裝在瀏覽器中的外掛程式的組數。<br>
		例：document.write(navigator.plugins);<br>
		上例將返回：<br>
		IE6：<br>
		IE7：<br>
		IE8：[object HTMLPluginsCollection]<br>
		IE9：[object MSPluginsCollection]<br>
		FireFox3.x：[object PluginArray]<br>
		FireFox4.x：[object PluginArray]<br>
		Opera：[object PluginArray]<br>
		Chrome：[object DOMPluginArray]</td>
	</tr>
	<tr>
		<td>systemLanguage</td>
		<td>屬性</td>
		<td>系統所使用的語言。<br>
		例：document.write(navigator.systemLanguage);<br>
		上例將返回：<br>
		IE6：zh-tw<br>
		IE7：zh-tw<br>
		IE8：zh-tw<br>
		IE9：zh-tw<br>
		FireFox3.x：undefined<br>
		FireFox4.x：undefined<br>
		Opera：undefined<br>
		Chrome：undefined</td>
	</tr>
	<tr>
		<td>userAgent</td>
		<td>屬性</td>
		<td>使用者代理頭，也就是目前所使用的介面。<br>
			userAgent為navigator最常用的屬性，通常瀏覽器判斷都是透過該屬性來完成的。<br>
			範例(1)：
<pre>
document.write(navigator.userAgent);
</pre>
		上例將返回：<br>
		IE6：Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)<br>
		IE7：Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; SV1)<br>
		IE8：Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; GTB6.6; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; eSobiSubscriber 2.0.4.16; InfoPath.3; .NET4.0C; AskTbCDS2/5.11.3.15590)<br>
		IE9：Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0)<br>
		FireFox3.x：Mozilla/5.0 (Windows; U; Windows NT 6.1; zh-TW; rv:1.9.2.15) Gecko/20110303 Firefox/3.6.15<br>
		FireFox4.x：Mozilla/5.0 (Windows; Windows NT 6.1; WOW64; rv:2.0b2) Gecko/20100720 Firefox/4.0b2<br>
		Opera：Opera/9.80 (Windows NT 6.1; U; zh-tw) Presto/2.7.62 Version/11.01<br>
		Chrome：Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.648.151 Safari/534.16<br><br>
		範例(2)判斷作業系統是否為WinXP的範例：
<pre>
var myUserAngent = navigator.userAgent;
var isWinXP = myUserAngent.indexOf("Windows NT 5.1") &gt -1;
if(isWinXP){document.write("這是WinXP");} else{document.write("這不是WinXP");}
</pre>
		●Windows的版本對照表：<br>
		　Microsoft Windows NT 3.1 (1993)<br>
		　Microsoft Windows NT 3.5 (1994)<br>
		　Microsoft Windows NT 3.51 (1995)<br>
		　Microsoft Windows NT 4.0 (1996)<br>
		　從5.0版開始，Windows NT只是簡單地稱為Windows了，下面的版本是後來的版本：<br>
		　Microsoft Windows 2000 (Windows NT 5.0) (1999)<br>
		　Microsoft Windows XP (Windows NT 5.1) (2001)<br>
		　Microsoft Windows Server 2003 (Windows NT 5.2) (2003)<br>
		　Microsoft Windows Vista (Windows NT 6.0) (2006)<br>
		　Microsoft Windows Server 2008 (Windows NT 6.0) (2008)<br>
		　Microsoft Windows 7 (Windows NT 6.1) (2009)<br>
		　Microsoft Windows Server 2008 R2 (Windows NT 6.1)</td>
	</tr>
	<tr>
		<td>userLanguage</td>
		<td>屬性</td>
		<td>目前所使用的語言種類。<br>
		例：document.write(navigator.userLanguage);<br>
		上例將返回：<br>
		IE6：zh-tw<br>
		IE7：zh-tw<br>
		IE8：zh-tw<br>
		IE9：zh-tw<br>
		FireFox3.x：undefined<br>
		FireFox4.x：undefined<br>
		Opera：zh-tw<br>
		Chrome：undefined</td>
	</tr>
	<tr>
		<td>javaEnabled()</td>
		<td>方法</td>
		<td></td>
	</tr>
	<tr>
		<td>taintEnabled()</td>
		<td>方法</td>
		<td></td>
	</tr>
	<tr>
		<td>plugins.refresh()</td>
		<td>方法</td>
		<td></td>
	</tr>
</table>
</main>
</body>
</html>