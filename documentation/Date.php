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
	<?php include("../includes/adsense.php"); ?>
<table class="doc-table">
	<tr>
		<th>名稱</th>
		<th>類形</th>
		<th>說明</th>
	</tr>
	<tr>
		<td>Date</td>
		<td>物件</td>
		<td>
			專門處理時間、日期的物件。ECMAScript把日期儲存為距離UTC時間1970年1月1日0點的毫秒數。<br>
			首先需要注意一點，瀏覽器獲取當前用戶所在的時區等信息只和系統的日期和時間設置裡的時區以及時間有關。<br>
			建立一個新的Date物件時有下列4種方法來決定它的值：
			<ol>
				<li>new Date();</li>
				<li>new Date(value);</li>
				<li>new Date(dateString);</li>
				<li>new Date(year, month[, day[, hour[, minutes[, seconds[, milliseconds]]]]]);</li>
			</ol>
			<br>
			第一種方法會產生當下的本地的國際標準時間：
<pre>
var m1 = new Date();
document.write(m1);
// Chrome	Tue Oct 04 2016 14:33:01 GMT+0800 (台北標準時間)
// Firefox	Tue Oct 04 2016 14:33:01 GMT+0800
// IE7-10	Tue Oct 4 14:33:01 UTC+0800 2016
// IE11		Tue Oct 04 2016 14:33:01 GMT+0800 (台北標準時間)
// EDGE		Tue Oct 04 2016 14:33:01 GMT+0800 (台北標準時間)
// Safari		Tue Oct 04 2016 14:33:01 GMT+0800 (台北標準時間)
</pre>
			第二種方法必需帶入一個整數的值，該值為UTC時間1970年1月1日0點起的毫秒數
<pre>
var m1 = new Date(1475562781000);
document.write(m1);
// Chrome	Tue Oct 04 2016 14:33:01 GMT+0800 (台北標準時間)
// Firefox	Tue Oct 04 2016 14:33:01 GMT+0800
// IE7-10	Tue Oct 4 14:33:01 UTC+0800 2016
// IE11		Tue Oct 04 2016 14:33:01 GMT+0800 (台北標準時間)
// EDGE		Tue Oct 04 2016 14:33:01 GMT+0800 (台北標準時間)
// Safari		Tue Oct 04 2016 08:33:01 GMT+0800 (台北標準時間)
</pre>
			第三種方法是帶入一個代表時間的字串，實做上常常是為了帶入時間資料，例如從Ajax傳來的時間資訊就會是字串的型式，再做為參數被帶入Date()物件；然而，時間的表現法在「ISO 8601」格式(ECMA-262 Edition 5.1中的規範)被訂定之前是非常混亂的，下面的範例也將顯示各種不同狀況產生的結果：
<pre>
document.write(new Date('2016-09-24 00:00:00'));
// Chrome	Sat Sep 24 2016 00:00:00 GMT+0800 (台北標準時間)
// Firefox	Sat Sep 24 2016 00:00:00 GMT+0800 
// IE7		NaN
// IE8		NaN
// IE9		Invalid Date
// IE10		Invalid Date
// IE11		Invalid Date
// EDGE		Sat Sep 24 2016 00:00:00 GMT+0800 (台北標準時間)
// Safari		Invalid Date

document.write(new Date('2016-9-24 00:00:00'));
// Chrome	Sat Sep 24 2016 00:00:00 GMT+0800 (台北標準時間)
// Firefox	Sat Sep 24 2016 00:00:00 GMT+0800 
// IE7		NaN
// IE8		NaN
// IE9		Invalid Date
// IE10		Invalid Date
// IE11		Invalid Date
// EDGE		Sat Sep 24 2016 00:00:00 GMT+0800 (台北標準時間)
// Safari		Invalid Date

document.write(new Date('2016/09/24 00:00:00'));
// Chrome	Sat Sep 24 2016 00:00:00 GMT+0800 (台北標準時間)
// Firefox	Sat Sep 24 2016 00:00:00 GMT+0800
// IE7		Sat Sep 24 00:00:00 UTC+0800 2016
// IE8		Sat Sep 24 00:00:00 UTC+0800 2016
// IE9		Sat Sep 24 00:00:00 UTC+0800 2016
// IE10		Sat Sep 24 00:00:00 UTC+0800 2016
// IE11		Sat Sep 24 2016 00:00:00 GMT+0800 (台北標準時間)
// EDGE		Sat Sep 24 2016 00:00:00 GMT+0800 (台北標準時間)
// Safari		Sat Sep 24 2016 00:00:00 GMT+0800 (台北標準時間)

document.write(new Date('2016/9/24 00:00:00'));
// Chrome	Sat Sep 24 2016 00:00:00 GMT+0800 (台北標準時間)
// Firefox	Sat Sep 24 2016 00:00:00 GMT+0800
// IE7		Sat Sep 24 00:00:00 UTC+0800 2016
// IE8		Sat Sep 24 00:00:00 UTC+0800 2016
// IE9		Sat Sep 24 00:00:00 UTC+0800 2016
// IE10		Sat Sep 24 00:00:00 UTC+0800 2016
// IE11		Sat Sep 24 2016 00:00:00 GMT+0800 (台北標準時間)
// EDGE		Sat Sep 24 2016 00:00:00 GMT+0800 (台北標準時間)
// Safari		Sat Sep 24 2016 00:00:00 GMT+0800 (台北標準時間)

document.write(new Date('24 September, 2016 00:00:00'));
// Chrome	Sat Sep 24 2016 00:00:00 GMT+0800 (台北標準時間)
// Firefox	Sat Sep 24 2016 00:00:00 GMT+0800
// IE7		Sat Sep 24 00:00:00 UTC+0800 2016
// IE8		Sat Sep 24 00:00:00 UTC+0800 2016
// IE9		Sat Sep 24 00:00:00 UTC+0800 2016
// IE10		Sat Sep 24 00:00:00 UTC+0800 2016
// IE11		Sat Sep 24 2016 00:00:00 GMT+0800 (台北標準時間)
// EDGE		Sat Sep 24 2016 00:00:00 GMT+0800 (台北標準時間)
// Safari		Sat Sep 24 2016 00:00:00 GMT+0800 (台北標準時間)
</pre>
			上面程式中的「2016-09-24 00:00:00」這樣很常見的寫法在IE中普遍不支援，各種蘋果裝置的Safari也同樣不支援，使用上要特別注意。<br><br>
			接著我們把日期拿掉「時間」的字串，看看各瀏覽器之間如何解析只有「日期」格式的字串：
<pre>
document.write(new Date('2016-09-24'));
// Chrome	Sat Sep 24 2016 <u>08:00:00</u> GMT+0800 (台北標準時間) // 被加上「本地時間」(GMT+8)的8小時
// Firefox	Sat Sep 24 2016 <u>08:00:00</u> GMT+0800 // 被加上「本地時間」(GMT+8)的8小時
// IE7		NaN
// IE8		NaN
// IE9		Sat Sep 24 <u>08:00:00</u> UTC+0800 2016 // 被加上「本地時間」(GMT+8)的8小時
// IE10		Sat Sep 24 <u>08:00:00</u> UTC+0800 2016 // 被加上「本地時間」(GMT+8)的8小時
// IE11		Sat Sep 24 2016 <u>08:00:00</u> GMT+0800 (台北標準時間) // 被加上「本地時間」(GMT+8)的8小時
// EDGE		Sat Sep 24 2016 <u>08:00:00</u> GMT+0800 (台北標準時間) // 被加上「本地時間」(GMT+8)的8小時
// Safari		Sat Sep 24 2016 <u>08:00:00</u> GMT+0800 (台北標準時間) // 被加上「本地時間」(GMT+8)的8小時

document.write(new Date('2016-9-24'));
// Chrome	Sat Sep 24 2016 00:00:00 GMT+0800 (台北標準時間)
// Firefox	Sat Sep 24 2016 <u>08:00:00</u> GMT+0800 // 被加上「本地時間」(GMT+8)的8小時
// IE7		NaN
// IE8		NaN
// IE9		Invalid Date
// IE10		Invalid Date
// IE11		Invalid Date
// EDGE		Sat Sep 24 2016 00:00:00 GMT+0800 (台北標準時間)
// Safari		Invalid Date

document.write(new Date('2016/09/24'));
// Chrome	Sat Sep 24 2016 00:00:00 GMT+0800 (台北標準時間)
// Firefox	Sat Sep 24 2016 00:00:00 GMT+0800
// IE7		Sat Sep 24 00:00:00 UTC+0800 2016
// IE8		Sat Sep 24 00:00:00 UTC+0800 2016
// IE9		Sat Sep 24 00:00:00 UTC+0800 2016
// IE10		Sat Sep 24 00:00:00 UTC+0800 2016
// IE11		Sat Sep 24 2016 00:00:00 GMT+0800 (台北標準時間)
// EDGE		Sat Sep 24 2016 00:00:00 GMT+0800 (台北標準時間)
// Safari		Sat Sep 24 2016 00:00:00 GMT+0800 (台北標準時間)

document.write(new Date('2016/9/24'));
// Chrome	Sat Sep 24 2016 00:00:00 GMT+0800 (台北標準時間)
// Firefox	Sat Sep 24 2016 00:00:00 GMT+0800
// IE7		Sat Sep 24 00:00:00 UTC+0800 2016
// IE8		Sat Sep 24 00:00:00 UTC+0800 2016
// IE9		Sat Sep 24 00:00:00 UTC+0800 2016
// IE10		Sat Sep 24 00:00:00 UTC+0800 2016
// IE11		Sat Sep 24 2016 00:00:00 GMT+0800 (台北標準時間)
// EDGE		Sat Sep 24 2016 00:00:00 GMT+0800 (台北標準時間)
// Safari		Sat Sep 24 2016 00:00:00 GMT+0800 (台北標準時間)

document.write(new Date('24 September, 2016'));
// Chrome	Sat Sep 24 2016 00:00:00 GMT+0800 (台北標準時間)
// Firefox	Sat Sep 24 2016 00:00:00 GMT+0800
// IE7		Sat Sep 24 00:00:00 UTC+0800 2016
// IE8		Sat Sep 24 00:00:00 UTC+0800 2016
// IE9		Sat Sep 24 00:00:00 UTC+0800 2016
// IE10		Sat Sep 24 00:00:00 UTC+0800 2016
// IE11		Sat Sep 24 2016 00:00:00 GMT+0800 (台北標準時間)
// EDGE		Sat Sep 24 2016 00:00:00 GMT+0800 (台北標準時間)
// Safari		Sat Sep 24 2016 00:00:00 GMT+0800 (台北標準時間)
</pre>
			結果發現，沒有「時間」的字串解析的結果在某些格式中突然被加上8了小時；不知道這是設計上的Bug還是別有用意，目前不得而知。<br><br>
			以下繼續說明文章前面提到的「ISO 8601」標準，語法如下：
<pre>
YYYY-MM-DDTHH:mm:ss.sssZ
</pre>
			字元T後面接時間，字元Z代表時區可省略，以下列出各種可接受的形式：
<pre>
// 下列所有範例傳回值是以Chrome實測
new Date('2016');
	// 傳回：Fri Jan 01 2016 08:00:00 GMT+0800 (台北標準時間)
	// 只指定年份
new Date('2016-09');
	// 傳回：Thu Sep 01 2016 08:00:00 GMT+0800 (台北標準時間)
	// 只指定年份和月份
new Date('2016-09-24');
	// 傳回：Sat Sep 24 2016 08:00:00 GMT+0800 (台北標準時間)
	// 只指定年份和月份和日
new Date('2016-09-24T00:00:00.999Z');
	// Sat Sep 24 2016 08:00:00 GMT+0800 (台北標準時間)
	// 標準寫法
new Date('2016-09-24T00:00:00.999+0200');
	// 傳回：Sat Sep 24 2016 06:00:00 GMT+0800 (台北標準時間)
	// +0800是ISO的標準寫法，但有的瀏覽器居然不吃
	// +0200指的應該是某時區被加了2小時，而且時UTC就落後這個某時區2小時
	// 落後2小時的UTC再加台北時區的8小時，結果就等於06:00
new Date('2016-09-24T00:00:00.999+02:00');
	// Sat Sep 24 2016 06:00:00 GMT+0800 (台北標準時間)
	// +02:00寫法在新型瀏覽器大部份都OK
new Date('2016T00:00');
	// 傳回：Fri Jan 01 2016 08:00:00 GMT+0800 (台北標準時間)
	// 只指定年份、時、分
new Date('2016-09T00:00:00');
	// 傳回：Thu Sep 01 2016 08:00:00 GMT+0800 (台北標準時間)
	// 只指定年份、時、分、秒
new Date('2016-09-24T00:00:00');
	// 傳回：Sat Sep 24 2016 08:00:00 GMT+0800 (台北標準時間)
	// 省略毫秒
new Date('2016-09T00:00:00.999');
	// 傳回：Thu Sep 01 2016 08:00:00 GMT+0800 (台北標準時間)
	// 省略日
</pre>
			上面的範例是在Chrome做測試結果，但經實測，即使說是ISO標準，在各家瀏覽器仍出現許多異像，最保險的做法還是在字串上都加上日期及時間，並且多做測試，或是適當的使用現成的時間套件，可結省許多心力，例如http://momentjs.com。<br><br>
				時間是可以做比較運算的，如下例將alert「true」：
	<pre>
var time1 = new Date("01 21,2016 08:38:38");
var time2 = new Date("11 30,2020 00:00:00");
time1 < time2 ? alert(true): alert(false);
</pre>
			new Date()可以直接獲取現在的系統時間，但顯示的格式在不同的瀏覽器中卻有所區別，這意味著要是直接分析new Date()輸出的字串會相當麻煩，例如new Date()在Chrome中顯示為：Mon Mar 21 2011 11:58:50 GMT+0800(China Standard Time)<br>
			而IE8則顯示為：Mon Mar 21 11:58:50 UTC+0800 2011<br>
			所以我們必需靈活使用Javascript提供的各種獲取時間細節方法。<br><br>下例將在網頁中即時顯示目前的時間：
<pre>
function printCurrentTime(){
	var myDate = new Date();
	var nowYear = myDate.getFullYear()-1911;
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
	var timeString = '民國'+nowYear.toString()+'年'+nowMonth.toString()+'月'+nowDate.toString()+'日 '+nowDay+' '+nowHour+':'+nowMinute+':'+nowSecond;
	document.querySelector('body').firstChild.nodeValue = timeString;
}
window.onload=function(){
	printCurrentTime();
	setInterval(printCurrentTime,1000);
}
</pre>
			第四種方法是帶入代表時間資訊的數值，例如年、月、日、時、分等，用逗點做分隔，如下例：
<pre>
alert(new Date(2016));
alert(new Date(2016, 9));
alert(new Date(2016, 9, 24));
alert(new Date(2016, 9, 24, 08));
alert(new Date(2016, 9, 24, 08, 30));
alert(new Date(2016, 9, 24, 08, 30, 20));
alert(new Date(2016, 9, 24, 08, 30, 20, 500));
</pre>
			這個方法所有的瀏覽器都能夠抓到正確時間，其中要注意的是某些數值是由0開始的，例如月份輸入0會回傳1月，輸入12則會跳到下一年的1月。<br><br>
			<h3>附註1：UTC/GMT時間的區別</h3>
			格林威治標準時間GMT<br>
			GMT即「格林威治標準時間」(Greenwich Mean Time，簡稱GMT)，指位於英國倫敦郊區的皇家格林威治天文台的標準時間，因為本初子午線被定義為通過那裡的經線。然而由於地球的不規則自轉，導致GMT時間有誤差，因此目前已不被當作標準時間使用。<br></br>
			世界協調時間UTC<br>
			UTC是最主要的世界時間標準，是經過平均太陽時(以格林威治時間GMT為準)、地軸運動修正後的新時標以及以「秒」為單位的國際原子時所綜合精算而成的時間。UTC比GMT來得更加精準。其誤差值必須保持在0.9秒以內，若大於0.9秒則由位於巴黎的國際地球自轉事務中央局發布閏秒，使UTC與地球自轉週期一致。不過日常使用中，GMT與UTC的功能與精確度是沒有差別的。<br>
			協調世界時區會使用"Z"來表示。而在航空上，所有使用的時間劃一規定是協調世界時。而且Z在無線電中應讀作"Zulu"（可參見北約音標字母），協調世界時也會被稱為"Zulu time"。<br><br>
			<h3>相關知識文：</h3>
			http://chitanda.me/2015/08/21/the-trivia-of-js-date-function/<br>
			http://jiaolonghuang.github.io/2015/03/12/shiqu/
		</td>
	</tr>
	<tr>
		<td>constructor</td>
		<td>屬性</td>
		<td>Returns the function that created the Date object's prototype</td>
	</tr>
	<tr>
		<td>prototype</td>
		<td>屬性</td>
		<td>Allows you to add properties and methods to an object</td>
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
		<td>返回從GMT時間1970年1月1日0點0分0秒起經過的毫秒數，如下例：
<pre>
var dt = new Date('2016/09/24 13:26:52');
alert(dt.getTime()); // 傳回1474694812000
</pre>
		</td>
	</tr>
	<tr>
		<td>getTimezoneOffset()</td>
		<td>方法</td>
		<td>
			getTimezoneOffset()方法傳回當地時區與UTC時間的時區差，傳回的值是以分鐘為單位。以台灣來說，時區是UTC +8，傳回的值是-480；它的語法如下：
<pre>
DateObj.getTimezoneOffset(); // 不需要參數
</pre>
			範例：
<pre>
var d=new Date();
alert("所在地時區： UTC/GMT " + (d.getTimezoneOffset()>0?"-":"+") +(d.getTimezoneOffset()/-60));
</pre>
		</td>
	</tr>
	<tr>
		<td>getUTCDate()</td>
		<td>方法</td>
		<td>根據國際時間從Date()物件傳回一個月中的某一天(1~31)</td>
	</tr>
	<tr>
		<td>getUTCDay()</td>
		<td>方法</td>
		<td>根據國際時間從Date()物件傳回一週中的某一天(0~6)</td>
	</tr>
	<tr>
		<td>getUTCFullYear()</td>
		<td>方法</td>
		<td>根據國際時間從Date()物件傳回四位數的年份</td>
	</tr>
	<tr>
		<td>getUTCHours()</td>
		<td>方法</td>
		<td>
			根據國際時間傳回Date()物件中的小時(0~23)
<pre>
var dt = new Date(); // 如果現在時間是台北下午3點
alert(dt.getHours()); // 傳回15
alert(dt.getUTCHours()); // 傳回07

var dt = new Date('2016/09/24 09:30:30'); //如果指定了時間字串
alert(dt.getHours()); // 傳回9
alert(dt.getUTCHours()); // 傳回1(反正就是(加)減掉本地的時區)
</pre>
		</td>
	</tr>
	<tr>
		<td>getUTCMilliseconds()</td>
		<td>方法</td>
		<td>根據國際時間傳回Date()物件中的毫秒(0~999)</td>
	</tr>
	<tr>
		<td>getUTCMinutes()</td>
		<td>方法</td>
		<td>根據國際時間傳回Date()物件中的分鐘(0~59)</td>
	</tr>
	<tr>
		<td>getUTCMonth()</td>
		<td>方法</td>
		<td>根據國際時間從Date()物件傳回月份(0~11)</td>
	</tr>
	<tr>
		<td>getUTCSeconds()</td>
		<td>方法</td>
		<td>根據國際時間傳回Date()物件中的秒(0~59)</td>
	</tr>
	<tr>
		<td>getYear()</td>
		<td>方法</td>
		<td>[棄用] 根據瀏覽器的不同返迴兩位或是四位數的年份，因此不推薦使用。</td>
	</tr>
	<tr>
		<td>now()</td>
		<td>方法</td>
		<td>Returns the number of milliseconds since midnight Jan 1, 1970</td>
	</tr>
	<tr>
		<td>parse()</td>
		<td>方法</td>
		<td>
			將日期字串解析成從1970年1月1日算起的毫秒數；parse()是一種靜態方法，因為需要使用構造函數Date()來調用它，而不是通過某個Date對像調用，如下例：
<pre>
var dt = new Date('2016/09/24 13:26:52');
alert(Date.parse(dt)); // 傳回1474694812000
// 或是
alert(Date.parse('2016/09/24 13:26:52'));
</pre>
		</td>
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
		<td>設置日期為某一年。</td>
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
		<td>Sets the day of the month of a date object, according to universal time</td>
	</tr>
	<tr>
		<td>setUTCFullYear()</td>
		<td>方法</td>
		<td>Sets the year of a date object, according to universal time</td>
	</tr>
	<tr>
		<td>setUTCHours()</td>
		<td>方法</td>
		<td>Sets the hour of a date object, according to universal time</td>
	</tr>
	<tr>
		<td>setUTCMilliseconds()</td>
		<td>方法</td>
		<td>Sets the milliseconds of a date object, according to universal time</td>
	</tr>
	<tr>
		<td>setUTCMinutes()</td>
		<td>方法</td>
		<td>Set the minutes of a date object, according to universal time</td>
	</tr>
	<tr>
		<td>setUTCMonth()</td>
		<td>方法</td>
		<td>Sets the month of a date object, according to universal time</td>
	</tr>
	<tr>
		<td>setUTCSeconds()</td>
		<td>方法</td>
		<td>Set the seconds of a date object, according to universal time</td>
	</tr>
	<tr>
		<td>setYear()</td>
		<td>方法</td>
		<td>[棄用] 設置日期為某一年，可以接受四位或者兩位參數，如果為兩位則表示1900~1999年之間的年份，不推薦使用。</td>
	</tr>
	<tr>
		<td>toDateString()</td>
		<td>方法</td>
		<td>Converts the date portion of a Date object into a readable string</td>
	</tr>
	<tr>
		<td>toGMTString()</td>
		<td>方法</td>
		<td>[棄用] Use the toUTCString() method instead</td>
	</tr>
	<tr>
		<td>toISOString()</td>
		<td>方法</td>
		<td>Returns the date as a string, using the ISO standard</td>
	</tr>
	<tr>
		<td>toJSON()</td>
		<td>方法</td>
		<td>Returns the date as a string, formatted as a JSON date</td>
	</tr>
	<tr>
		<td>toLocaleDateString()</td>
		<td>方法</td>
		<td>	Returns the date portion of a Date object as a string, using locale conventions</td>
	</tr>
	<tr>
		<td>toLocaleTimeString()</td>
		<td>方法</td>
		<td>Returns the time portion of a Date object as a string, using locale conventions</td>
	</tr>
	<tr>
		<td>toLocaleString()</td>
		<td>方法</td>
		<td>Converts a Date object to a string, using locale conventions</td>
	</tr>
	<tr>
		<td>toString()</td>
		<td>方法</td>
		<td>Converts a Date object to a string</td>
	</tr>
	<tr>
		<td>toTimeString()</td>
		<td>方法</td>
		<td>Converts the time portion of a Date object to a string</td>
	</tr>
	<tr>
		<td>toUTCString()</td>
		<td>方法</td>
		<td>Converts a Date object to a string, according to universal time</td>
	</tr>
	<tr>
		<td>UTC()</td>
		<td>方法</td>
		<td>
			根據國際時間傳回1970年1月1日到指定日期的毫秒數；Date.UTC()是一種靜態方法，因為需要使用構造函數Date()來調用它，而不是通過某個Date對像調用，如下例：
<pre>
var d = Date.UTC(2005,7,8);
document.write(d);
</pre>
		</td>
	</tr>
	<tr>
		<td>valueOf()</td>
		<td>方法</td>
		<td>Returns the primitive value of a Date object</td>
	</tr>
</table>
 </main>
</body>
</html>