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
<meta name="keywords" content="Javascript,Date,物件,object,字典,方法,屬性,使用說明,文件,範例" />
<meta name="description" content="提供完整的Date物件及其方法、屬性的說明文件與範例" />
<title>Date物件 - Javascript字典</title>
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
<h1>Javascript - Date物件</h1>
<table class="doc-table">
	<tr>
		<th>名稱</th>
		<th>類形</th>
		<th>說明</th>
	</tr>
	<tr>
		<td>Date</td>
		<td>物件</td>
		<td>專門處理時間、日期的物件。ECMAScript把日期儲存為距離UTC時間1970年1月1日0點的毫秒數。<br>
		建立一個新的Date物件語法如下：var myDate = new Date();<br>
		我們可以用參數來初始化一個時間物件(雖然目前不知道為何要這樣)，常用的格式有以下幾種：<br>
		new Date("month dd,yyyy hh:mm:ss");<br>new Date("month dd,yyyy");<br>
		new Date(yyyy,mth,dd,hh,mm,ss);<br>new Date(yyyy,mth,dd);<br>
		new Date(ms); //與GMT時間1970年1月1日0點之間相差的毫秒數。<br>
		各個參數的含義如下：<br>
		yyyy：4位數表示的年份。<br>
		month：用英文表示的月份名稱，從January到December。<br>
		mth：用整數表示的月份從0(1月)到11(12月)。<br>
		dd：表示一個月中的第幾天，從1到31。<br>
		hh：小時數，從0到23的整數(24小時制)。<br>
		mm：分鐘數，從0到59的整數。<br>
		ss：秒數，從0到59的整數。<br>
		ms：毫秒數，為大於等於0的整數。<br>
		new Date()可以直接獲取現在的系統時間，但顯示的格式在不同的瀏覽器中卻有所區別，這意味著要是直接分析new Cate()輸出的字串會相當麻煩，<br>
		例如new Date()在Chrome中顯示為：Mon Mar 21 2011 11:58:50 GMT+0800(China Standard Time)<br>
		而IE8則顯示為：Mon Mar 21 11:58:50 UTC+0800 2011<br>
		所以我們必需靈活使用Javascript提供的各種獲取時間細節方法。<br><br>下例將在網頁中即時顯示目前的時間：
<pre>
function printCurrentTime(){
	var myDate = new Date();
	var nowDateYear = myDate.getFullYear()-1911;
	var nowMonth = myDate.getMonth()+1;
	var nowDate = myDate.getDate();
	var nowDay = myDate.getDay();
	var nowHour = myDate.getHours();
	var nowMinute = myDate.getMinutes();
	var nowSecond = myDate.getSeconds();
	if(nowHour&lt;=9){nowHour = '0'+nowHour;}
	if(nowMinute&lt;=9){nowMinute = '0'+nowMinute;}
	if(nowSecond&lt;=9){nowSecond = '0'+nowSecond;}
	switch (nowDay){
		case 0: nowDay = '星期日'; break;
		case 1: nowDay = '星期一'; break;
		case 2: nowDay = '星期二'; break;
		case 3: nowDay = '星期三'; break;
		case 4: nowDay = '星期四'; break;
		case 5: nowDay = '星期五'; break;
		case 6: nowDay = '星期六'; break;
	}
	var timeString = '民國'+nowDateYear.toString()+'年'+nowMonth.toString()+'月'+nowDate.toString()+'日 '+nowDay+' '+nowHour+':'+nowMinute+':'+nowSecond;
	document.querySelector('body').firstChild.nodeValue = timeString;
}
window.onload=function(){
	printCurrentTime();
	setInterval(printCurrentTime,1000);
}
</pre>
		</td>
	</tr>
	<tr>
		<td>constructor</td>
		<td>屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>prototype</td>
		<td>屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>getDate()</td>
		<td>方法</td>
		<td>返迴日期從1到31。</td>
	</tr>
	<tr>
		<td>getDay()</td>
		<td>方法</td>
		<td>返回星期幾，從0(星期日)到6(星期六)。</td>
	</tr>
	<tr>
		<td>getFullYear()</td>
		<td>方法</td>
		<td>返回四位數的年份(如2011)。</td>
	</tr>
	<tr>
		<td>getHours()</td>
		<td>方法</td>
		<td>返回小時數，從0到23(24小時制)。</td>
	</tr>
	<tr>
		<td>getMilliseconds()</td>
		<td>方法</td>
		<td>返回毫秒，從0到999。</td>
	</tr>
	<tr>
		<td>getMinutes()</td>
		<td>方法</td>
		<td>返回分鐘數，從0到59。</td>
	</tr>
	<tr>
		<td>getMonth()</td>
		<td>方法</td>
		<td>返迴用整數表示的月份，從0(1月)到11(12月)。</td>
	</tr>
	<tr>
		<td>getSeconds()</td>
		<td>方法</td>
		<td>返回秒數，從0到59。</td>
	</tr>
	<tr>
		<td>getTime()</td>
		<td>方法</td>
		<td>返回從GMT時間1970年1月1日0點0分0秒起經過的毫秒數。<br>
		透過上列Date物件的這些方法，我們就可以很輕鬆的獲得一個時間的詳細資訊，並任意的組合使用，<br>
		<div style="text-decoration:line-through">如下例將傳回2011年 3月 21日 星期一。<br>
		var myDate = new Date();<br>
		var nowDateYear = myDate.getFullYear();<br>
		var nowMonth = myDate.getMonth()+1;<br>
		var nowDate = myDate.getDate();<br>
		var nowDay = myDate.getDay();<br>
		switch (nowDay){<br>
		　case 0: nowDay = "星期日"; break;<br>
		　case 1: nowDay = "星期一"; break;<br>
		　case 2: nowDay = "星期二"; break;<br>
		　case 3: nowDay = "星期三"; break;<br>
		　case 4: nowDay = "星期四"; break;<br>
		　case 5: nowDay = "星期五"; break;<br>
		　case 6: nowDay = "星期六"; break;}<br>
		alert(nowDateYear.toString()+"年 "+nowMonth.toString()+"月 "+nowDate.toString()+"日 "+nowDay);</div>
		</td>
	</tr>
	<tr>
		<td>getTimezoneOffset()</td>
		<td>方法</td>
		<td></td>
	</tr>
	<tr>
		<td>getUTCDate()</td>
		<td>方法</td>
		<td></td>
	</tr>
	<tr>
		<td>getUTCDay()</td>
		<td>方法</td>
		<td></td>
	</tr>
	<tr>
		<td>getUTCFullYear()</td>
		<td>方法</td>
		<td></td>
	</tr>
	<tr>
		<td>getUTCHours()</td>
		<td>方法</td>
		<td></td>
	</tr>
	<tr>
		<td>getUTCMilliseconds()</td>
		<td>方法</td>
		<td></td>
	</tr>
	<tr>
		<td>getUTCMinutes()</td>
		<td>方法</td>
		<td></td>
	</tr>
	<tr>
		<td>getUTCMonth()</td>
		<td>方法</td>
		<td></td>
	</tr>
	<tr>
		<td>getUTCSeconds()</td>
		<td>方法</td>
		<td></td>
	</tr>
	<tr>
		<td>getYear()</td>
		<td>方法</td>
		<td>根據瀏覽器的不同返迴兩位或是四位數的年份，因此不推薦使用。</td>
	</tr>
	<tr>
		<td>parse()</td>
		<td>方法</td>
		<td></td>
	</tr>
	<tr>
		<td>setDate()</td>
		<td>方法</td>
		<td>設置日期從1到31。</td>
	</tr>
	<tr>
		<td>setDay()</td>
		<td>方法</td>
		<td>設置星期幾，從0(星期日)到6(星期六)。</td>
	</tr>
	<tr>
		<td>setFullYear(yyyy)</td>
		<td>方法</td>
		<td>Date物件提供了很多方法讓我們對時間進行設置，setFullYear()就是讓我們設置日期為某一年。</td>
	</tr>
	<tr>
		<td>setHours()</td>
		<td>方法</td>
		<td>設置小時數，從0到23(24小時制)。</td>
	</tr>
	<tr>
		<td>setMilliseconds()</td>
		<td>方法</td>
		<td>設置毫秒，從0到999。</td>
	</tr>
	<tr>
		<td>setMinutes()</td>
		<td>方法</td>
		<td>設置分鐘數，從0到59。</td>
	</tr>
	<tr>
		<td>setMonth()</td>
		<td>方法</td>
		<td>設置用整數表示的月份，從0(1月)到11(12月)。</td>
	</tr>
	<tr>
		<td>setSeconds()</td>
		<td>方法</td>
		<td>設置秒數，從0到59。</td>
	</tr>
	<tr>
		<td>setTime()</td>
		<td>方法</td>
		<td>設置從GMT時間1970年1月1日0點0分0秒起經過的毫秒數，可以為負值。</td>
	</tr>
	<tr>
		<td>setUTCDate()</td>
		<td>方法</td>
		<td></td>
	</tr>
	<tr>
		<td>setUTCFullYear()</td>
		<td>方法</td>
		<td></td>
	</tr>
	<tr>
		<td>setUTCHours()</td>
		<td>方法</td>
		<td></td>
	</tr>
	<tr>
		<td>setUTCMilliseconds()</td>
		<td>方法</td>
		<td></td>
	</tr>
	<tr>
		<td>setUTCMinutes()</td>
		<td>方法</td>
		<td></td>
	</tr>
	<tr>
		<td>setUTCMonth()</td>
		<td>方法</td>
		<td></td>
	</tr>
	<tr>
		<td>setUTCSeconds()</td>
		<td>方法</td>
		<td></td>
	</tr>
	<tr>
		<td>setYear()</td>
		<td>方法</td>
		<td>設置日期為某一年，可以接受四位或者兩位參數，如果為兩位則表示1900~1999年之間的年份，不推薦使用。</td>
	</tr>
	<tr>
		<td>toDateString()</td>
		<td>方法</td>
		<td></td>
	</tr>
	<tr>
		<td>toGMTString()</td>
		<td>方法</td>
		<td></td>
	</tr>
	<tr>
		<td>toLocaleDateString()</td>
		<td>方法</td>
		<td></td>
	</tr>
	<tr>
		<td>toLocaleTimeString()</td>
		<td>方法</td>
		<td></td>
	</tr>
	<tr>
		<td>toLocaleString()</td>
		<td>方法</td>
		<td></td>
	</tr>
	<tr>
		<td>toString()</td>
		<td>方法</td>
		<td></td>
	</tr>
	<tr>
		<td>toTimeString()</td>
		<td>方法</td>
		<td></td>
	</tr>
	<tr>
		<td>toUTCString()</td>
		<td>方法</td>
		<td></td>
	</tr>
	<tr>
		<td>UTC()</td>
		<td>方法</td>
		<td></td>
	</tr>
	<tr>
		<td>valueOf()</td>
		<td>方法</td>
		<td></td>
	</tr>
</table>
 </main>
</body>
</html>