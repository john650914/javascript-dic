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
<meta name="keywords" content="Javascript,Looping,迴圈,物件,object,字典,方法,屬性,使用說明,文件,範例" />
<meta name="description" content="提供完整的Looping物件及其方法、屬性的說明文件與範例" />
<title>迴圈 - Javascript字典</title>
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
<h1>Javascript - Looping</h1>
<table class="doc-table">
	<tr>
		<th>名稱</th>
		<th>類形</th>
		<th>說明</th>
	</tr>
	<tr>
		<td>for</td>
		<td>關鍵字</td>
		<td>for迴圈是前測試迴圈(代表是否終止迴圈的條件判斷是在執行內部程式碼之前，因此迴圈的主體可能根本不被執行)，在進入迴圈之前能夠初始化變數，並且定義迴圈後要執行的程式碼，其語法如下：<br />
		for(initial var; expression; post-loop-expression){statement}<br />
		執行過程如下：<br />
		第一個項目(initial var)是用來設定控制迴圈執行次數的變數初值，這個項目只會被執行一次。<br />
		第二個項目(expression)是是否執行迴圈的條件判斷式，只有成立，它就會執行大刮號{ ... }裡的程式，直到條件判斷為否為止。<br />
		第三個項目(post-loop-expression)是每次執行完{ ... }裡的程式就會執行的敘述，通常是增加或減少控制迴圈執行次數的變數。<br />
		for迴圈最常用的型式是for(i=0;i&lt;n;i++){statement;}，它表示迴圈一共執行n次，非常適用於己知迴圈次數的運算。<br />
		以下範例將使用for迴圈計算1+2+3+4+5的和。<br />
		例：var sum=0; for(var i=1; i<=5; i++){sum+=i;} alert(sum);<br />
		補充範例請見：javascript物件筆記範例/do, while, for。</td>
	</tr>
	<tr>
		<td>while</td>
		<td>關鍵字</td>
		<td>while迴圈是前測試迴圈，這代表是否終止迴圈的條件判斷是在執行內部程式碼之前，因此迴圈的主體可能根本不被執行，其語法如下：<br />
		while(expression){statement;}<br />
		當expression為true時，程式會不斷的被執行，直到expression變為false。<br />
		如下例會利用i來重覆計算sum的加總：<br />
		var i=1; var sum=0; while(i&lt;=100){sum+=i;i++;} alert(sum);<br />
		補充範例請見：javascript物件筆記範例/do, while, for</td>
	</tr>
	<tr>
		<td>do/while</td>
		<td>關鍵字</td>
		<td>do ... while 迴圈它是一種先斬後奏型的迴圈結構，無論如何 do {...} 之間的程式至少會被執行一次，如果while裡面的條件式結果為true，它會繼續執行do{}裡面的程式，直到 while 條件式為false。語法：do{statement1; statement2; ...}while(expression);<br />
		以下範例利用do{}while()來計算1+2+3+4+5。<br />
		var i=1; var sum=0; do{sum+=i; i+=1;}while(i&lt;=100); alert(sum);<br />
		補充範例如下：
<pre>
window.onload = function(){
	var inputArray = new Array();
	var arrayIndex = 0;
	var inputData;
	var inputTotal = 0;
	var returnMsg = "您輸入了：";
	
	do{
		inputData = prompt("請輸入一個數值，或輸入0退出",0);
		inputArray[arrayIndex]=inputData;
		arrayIndex+=1;
	}while(inputData!=0);
	
	for(var i=0; i &lt; inputArray.length;i++){
		returnMsg+=inputArray[i]+"，";
		inputTotal+=Number(inputArray[i]);
	}
	
	returnMsg+="總和："+inputTotal;
	document.write(returnMsg);
}
</pre></td>
	</tr>
	<tr>
		<td>for/in</td>
		<td>關鍵字</td>
		<td>for...in通常用來列舉物件的屬性。語法如下：
<pre>
for(property in object){statement;}
</pre>
			它用來瀏覽object中的所有屬性，並且每一個屬性都執行一次statement循環體；例如我們需要列出window物件的所有屬性，儘管並不知道window物件到底有多少屬性，以及每個屬性相對應的名稱，但透過for...in語句便可以很輕地獲得各種參數如下例將列出window的所有物件：
<pre>
for(var key in window){
	document.write(key+": "+window[key]+"&lt;br /&gt;");
}
</pre>
			由於Javascript所有東西都可以視為物件，for...in語句也適用於自訂的物件，如下例依序傳回每個陣列元素的值：
<pre>
var mycars = ["Saab","Volvo","BMW"];
for(x in mycars){alert(mycars[x]);} //依序傳回每個陣列元素的值
</pre>
			我們也可以將for...in寫成一個自訂函數方便調用，如下例：
<pre>
function listMember(targetObj){
	var s = "";
	for(key in targetObj){s += key + ": " + targetObj[key] + "&lt;br&gt;";}
	return s;
}
var main = {a:123, b:456, c:789}
document.write(listMember(main));
/*傳回：
a: 123
b: 456
c: 789*/
</pre>
		</td>
	</tr>
	<tr>
		<td>break</td>
		<td>關鍵字</td>
		<td>使用break可以立即跳出迴圈，阻止再次執行循環體中的任何程式碼，或是像switch條件式中斷程式區塊。<br />
		範例如下：
<pre>
window.onload = function(){
	var inputArray = new Array();
	var arrayIndex = 0;
	var inputData;
	var inputTotal = 0;
	var returnMsg = "您輸入了：";
	
	do{
		inputData = prompt("請輸入一個數值，或輸入0退出",0);
		if(isNaN(inputData)){
			document.write("您最後輸入的資料不是數字&lt;br /&gt;");
			break;
		}
		inputArray[arrayIndex]=inputData;
		arrayIndex+=1;
	}while(inputData!=0);
	
	for(var i=0; i &lt; inputArray.length;i++){
		returnMsg+=inputArray[i]+"，";
		inputTotal+=Number(inputArray[i]);
	}
	
	returnMsg+="總和："+inputTotal;
	document.write(returnMsg);
}
</pre>
		</td>
	</tr>
	<tr>
		<td>continue</td>
		<td>關鍵字</td>
		<td>退出一次的迴圈，根據控制運算式還允許進行下一次迴圈。<br />
		範例如下：
<pre>
window.onload = function(){
	var inputArray = new Array();
	var arrayIndex = 0;
	var inputData;
	var inputTotal = 0;
	var returnMsg = "您輸入了：";
	
	do{
		inputData = prompt("請輸入一個數值，或輸入0退出",0);
		if(isNaN(inputData)){
			document.write("您最後輸入的資料不是數字&lt;br /&gt;");
			continue;
		}
		inputArray[arrayIndex]=inputData;
		arrayIndex+=1;
	}while(inputData!=0);
	
	for(var i=0; i &lt; inputArray.length;i++){
		returnMsg+=inputArray[i]+"，";
		inputTotal+=Number(inputArray[i]);
	}
	
	returnMsg+="總和："+inputTotal;
	document.write(returnMsg);
}
</pre></td>
	</tr>
</table>
</main>
</body>
</html>