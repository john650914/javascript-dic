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
<meta name="keywords" content="Javascript,input,radio,物件,object,字典,方法,屬性,使用說明,文件,範例" />
<meta name="description" content="提供完整的input(radio)物件及其方法、屬性的說明文件與範例" />
<title>input(radio)物件 - Javascript字典</title>
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
<h1>Javascript - input(radio)物件</h1>
<table class="doc-table">
	<tr>
		<th>名稱</th>
		<th>類形</th>
		<th>說明</th>
	</tr>
	<tr>
		<td>radio</td>
		<td>物件</td>
		<td>在Javascript中radio物件即代表&lt;form&gt;標籤裡的&lt;input type="radio" /&gt;，它是一組供使用者選擇的物件，一組擁有相同name屬性值的radio群組裡，只能有一個被選中；每一項都有布林值checked屬性，當任何一項被設置為true時，其它項都會自動變為false。
		</td>
	</tr>
	<tr>
		<td>checked</td>
		<td>屬性</td>
		<td>偵測或設置radio的選取狀態，使用布林值控制，被選中的項目會被設置為true，其它相同name屬性的項目則自動設為false。<br>
			範例1，偵測被選中的項目：
<pre>
&lt;form&gt;
	&lt;input type="radio" name="camera" value="Canon" /&gt;Canon&lt;br&gt;
	&lt;input type="radio" name="camera" value="Nikon" /&gt;Nikon&lt;br&gt;
	&lt;input type="radio" name="camera" value="Sony" /&gt;Sony&lt;br&gt;
	&lt;input type="radio" name="camera" value="Olympus" /&gt;Olympus&lt;br&gt;
	&lt;input type="radio" name="camera" value="Pentax" /&gt;Pentax&lt;br&gt;
	&lt;input type="radio" name="camera" value="others" /&gt;others&lt;br&gt;
	&lt;input type="button" name="detector" value="顯示被選中項目" /&gt;
&lt;/form&gt;
&lt;script&gt;
	var form01 = document.forms[0];
	var choiceSet = form01.camera;
	var detector = form01.detector;
	
	detector.onclick = function(){
		for(var i=0;i&lt;choiceSet.length;i++){
			if(choiceSet[i].checked){break;}
		}
		alert('被選中的項目是 '+choiceSet[i].value+' ['+i+']');
	}
&lt;/script&gt;
</pre>
			範例2，將某一個項目設為選取狀態：
<pre>
&lt;form&gt;
	&lt;input type="radio" name="camera" value="Canon" /&gt;Canon&lt;br&gt;
	&lt;input type="radio" name="camera" value="Nikon" /&gt;Nikon&lt;br&gt;
	&lt;input type="radio" name="camera" value="Sony" /&gt;Sony&lt;br&gt;
	&lt;input type="radio" name="camera" value="Olympus" /&gt;Olympus&lt;br&gt;
	&lt;input type="radio" name="camera" value="Pentax" /&gt;Pentax&lt;br&gt;
	&lt;input type="radio" name="camera" value="others" /&gt;others&lt;br&gt;
	&lt;input type="button" name="manipulator" value="將Sony設為選取" /&gt;
&lt;/form&gt;
&lt;script&gt;
	var form01 = document.forms[0];
	var choiceSet = form01.camera;
	var manipulator = form01.manipulator;
	
	function setChoice(num){choiceSet[num].checked = true;}
	
	manipulator.onclick = function(){
		setChoice(2);
	}
&lt;/script&gt;
</pre>
			原文：Boolean property that reflects the current state of the radio button, "true" if it's checked, and "false" if not.<br>
			Example(s).
<pre>
&lt;form name="test"&gt;
&lt;input type="radio" name="myradio" /&gt;
&lt;input type="radio" name="myradio" checked /&gt;
&lt;input type="radio" name="myradio" /&gt;
&lt;/form&gt;

&lt;script type="text/javascript"&gt;
//a variable that will hold the index number of the selected radio button
for (i=0;i&lt;document.test.myradio.length;i++){
if (document.test.myradio[i].checked==true)
theone=i
}
&lt;/script&gt;
</pre>
		</td>
	</tr>
	<tr>
		<td>defaultChecked</td>
		<td>屬性</td>
		<td>如果初始時是選中的則傳回true<br>
			Boolean property that reflects the value of the CHECKED attribute.
		</td>
	</tr>
	<tr>
		<td>form</td>
		<td>屬性</td>
		<td>指向表單元素所在的&lt;form&gt;<br>
			References the form that contains the radio button.
		</td>
	</tr>
	<tr>
		<td>name</td>
		<td>屬性</td>
		<td>讀取/設定表單元素name屬性的值<br>
			Sets or returns the value of the name attribute of a form element.
		</td>
	</tr>
	<tr>
		<td>type</td>
		<td>屬性</td>
		<td>設定/讀取表單元素type屬性的值；IE8(含)以下的瀏覽器只能讀取，不支援設定屬性的功能。<br>
			A property available on all form elements, "type" returns the type of the calling form element, in this case, "radio".
		</td>
	</tr>
	<tr>
		<td>value</td>
		<td>屬性</td>
		<td>存/取表單元素value屬性的值<br>
			A read/write string that specifies the value of the radio button (the value attribute).
		</td>
	</tr>
	<tr>
		<td>onBlur</td>
		<td>事件屬性</td>
		<td>Code is executed when the focus is removed from the radio button.</td>
	</tr>
	<tr>
		<td>onClick</td>
		<td>事件屬性</td>
		<td>Code is executed when user clicks on the radio button.</td>
	</tr>
	<tr>
		<td>onFocus</td>
		<td>事件屬性</td>
		<td>Code is executed when the focus is set on the radio button.</td>
	</tr>
	<tr>
		<td>blur()</td>
		<td>方法</td>
		<td>使焦點離開某個元素<br>
			Removes focus away from the radio button.
		</td>
	</tr>
	<tr>
		<td>click()</td>
		<td>方法</td>
		<td>模擬使用者按一下該元素<br>
			Simulates a user clicking on the radio button.
		</td>
	</tr>
	<tr>
		<td>focus()</td>
		<td>方法</td>
		<td>聚焦到某個元素上<br>
			Sets focus on the radio button.
		</td>
	</tr>
</table>
</main>
</body>
</html>