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
<meta name="keywords" content="Javascript,Conditionals,條件判斷,判斷式,物件,object,字典,方法,屬性,使用說明,文件,範例" />
<meta name="description" content="提供完整的Conditional物件及其方法、屬性的說明文件與範例" />
<title>條件式/判斷式 - Javascript字典</title>
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
<h1>Javascript - Conditionals</h1>
<table class="doc-table">
	<tr>
		<th>名稱</th>
		<th>類形</th>
		<th>說明</th>
	</tr>
	<tr>
		<td>if</td>
		<td>關鍵字</td>
		<td>if條件式，以下是簡易語法示範。<br />
<pre>
if(條件判斷){如果條件成立就執行這裡的程式;}
</pre>
		實測發現，在Javascript if條件式中，小括弧內的判斷式為true，或是無程式錯誤產生都算成立，請參考以下各範例：
<pre>
if(1+1==2){alert('true');} //成立

if(document.getElementsByTagName){alert('true');} //成立

if(1+1==3){alert('true');} //不成立

if(document.getElementByTag){alert('true');} alert('continues'); //不成立：列舉不存在的方法，大括弧內的程式不執行，但不列為程式錯誤，只認定為條件式不成立，接來下的程式會繼續執行；如果條件改成"!document.getElementByTag"則條件式成立。

補充：如果我們alert(document.getElementsByTagName);會傳回完整的函數，而不是true；而alert(1+1==2);會傳回true。
</pre>
		</td>
	</tr>
	<tr>
		<td>if/else</td>
		<td>關鍵字</td>
		<td>配合if條件式，以下為簡易語法示範。<br />
		語法1：if(ans_txt.text == 'apple'){result_txt.text='真棒';} else{result_txt.text='再試一次';}<br />
		語法2：if(x==y){平手;} else if(x&gt;y){x勝;} else if(x&lt;y){y勝;}</td>
	</tr>
	<tr>
		<td>switch-case-break-default</td>
		<td>關鍵字</td>
		<td>當條件式需要判斷的情況比較多的時候，通常採用switch語句來實現，語法如下：<br />
		switch(expression){<br />
		　case value1: statement1<br />
		　　break;<br />
		　case value1: statement1<br />
		　　break;<br />
		　　...<br />
		　case valuen: statementN<br />
		　　break;<br />
		　default: statement;<br />
		}<br />
		如果expression的值等於某個case的值則執行相對應的statement；break關鍵字當條件符合且執行完statemant後用來跳出switch條件式，如果沒有關鍵字break，程式碼就會繼續進入下一個情況；當switch條件式找不到符合的case，就執行default內的程式。<br />
		下例示範判斷性別的switch條件式。
<pre>
var myGender = prompt("請輸入'男'or'女'");
switch(myGender){
　case "男": alert("您是男生");
　　break;
　case "女": alert("您是女生");
　　break;<br />
　default: alert("輸入錯誤");
}
</pre></td>
	</tr>
</table>
 </main>
</body>
</html>