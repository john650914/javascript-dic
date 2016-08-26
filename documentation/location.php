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
<meta name="keywords" content="Javascript,location,object,字典,方法,屬性,使用說明,文件,範例" />
<meta name="description" content="提供完整的location物件及其方法、屬性的說明文件與範例" />
<title>location物件 - Javascript字典</title>
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
<h1>Javascript - location物件</h1>
<table class="doc-table">
	<tr>
		<th>名稱</th>
		<th>類形</th>
		<th>說明</th>執行GET請求的URL中問號(?)後的部份。
	</tr>
	<tr>
		<td>location</td>
		<td>物件</td>
		<td>location物件是window和document物件的屬性，主要作用是分析和設置頁面的URL位址。</td>
	</tr>
	<tr>
		<td>hash</td>
		<td>屬性</td>
		<td>如果URL包含書籤#，則返回該符號後的內容。<br />
		例：#section1</td>
	</tr>
	<tr>
		<td>host</td>
		<td>屬性</td>
		<td>Specifies the hostname and port (if available) of a URL. (ie: "www.mysite.com" or "www.mysite.com:563").
		</td>
	</tr>
	<tr>
		<td>hostname</td>
		<td>屬性</td>
		<td>Specifies the hostname portion of the URL (ie: "www.mysite.com").</td>
	</tr>
	<tr>
		<td>href</td>
		<td>屬性</td>
		<td>現在載入完整的URL。<br />
		例：http://picasaWeb.google.com/isaacshun/LightningOverBeijing<br />
		用於獲得或設置視窗的URL，是location最常用的屬性，類似於document的URL屬性。改變此屬性的值就可以直接導航到新的頁面，如下例：<br />
		location.href="http://picasaWeb.google.com/isaacshun";<br />
		經測試後發現location.href對各個瀏覽器的相容性很好，而且新URL會記錄到瀏覽器的瀏覽歷史中，表示可以執行回上一頁的操作。<br />
		另外要注意的是如果location.href="...";還有其它的程式是會繼續執行的。</td>
	</tr>
	<tr>
		<td>pathname</td>
		<td>屬性</td>
		<td>URL中主機名稱後的部份。<br />
		例：/isaacshun/LightningOverBeijing</td>
	</tr>
	<tr>
		<td>port</td>
		<td>屬性</td>
		<td>URL中請求的埠號。<br />
		例：8021</td>
	</tr>
	<tr>
		<td>protocol</td>
		<td>屬性</td>
		<td>URL使用的協定。<br />
		例：http:</td>
	</tr>
	<tr>
		<td>search</td>
		<td>屬性</td>
		<td>返回GET請求的URL中問號(?)後的部份。<br />
		例如http://www.yahoo.com.tw?keyword=isaac&randomNumber=19820624將傳回：?keyword=isaac&randomNumber=19820624</td>
	</tr>
	<tr>
		<td>reload()</td>
		<td>location方法</td>
		<td>用來重新載入頁面，此方法接受一個布林值，如果是false則從瀏覽器的暫存中重載，如果為true則從伺服器上重載，預設值為false。下例則執行從伺服器上重載。<br />
		例：location.reload(true);</td>
	</tr>
	<tr>
		<td>replace()</td>
		<td>location方法</td>
		<td>用於設置目前視窗新的URL位置，類似location.href屬性，不同的是此方法不提供回上一頁的操作，像安全級別較高的銀行系統等就會需要這個方法。<br />
		下例運用了setTimeout()方法清楚的顯示頁面轉跳的效果，換頁後會發現瀏覽器的"回上一頁"按鈕失效了。<br />
		例：setTimeout(function(){location.replace("http://www.google.com");},2000);</td>
	</tr>
</table>
</main>
</body>
</html>