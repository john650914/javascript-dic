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
<meta name="keywords" content="Javascript,input,checkbox,物件,object,字典,方法,屬性,使用說明,文件,範例" />
<meta name="description" content="提供完整的input(checkbox)物件及其方法、屬性的說明文件與範例" />
<title>input(checkbox)物件 - Javascript字典</title>
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
<h1>Javascript - input(checkbox)物件</h1>
	<?php include("../includes/adsense.php"); ?>
<table class="doc-table">
	<tr>
		<th>名稱</th>
		<th>類形</th>
		<th>說明</th>
	</tr>
	<tr>
		<td>checkbox</td>
		<td>屬性</td>
		<td>在Javascript中check物件即代表&lt;form&gt;標籤裡的&lt;input type="radio" /&gt;，它是一組供使用者以勾選的方式輸入資訊的物件，可以在一組擁有相同name屬性值的checkbox群組裡做選取，和radio不同，checkbox可以複選；每一項都有布林值checked屬性，被選中為true，沒有被選中則為false。</td>
	</tr>
	<tr>
		<td>accessKey</td>
		<td>屬性</td>
		<td>String value that sets/ returns the accessKey for the checkbox.</td>
	</tr>
	<tr>
		<td>checked</td>
		<td>屬性</td>
		<td>偵測或設置checkbox的選取狀態，使用布林值控制，被選中的項目會被設置為true，未選中的則為false。<br>
			範例1，控制checkbox的選取狀態：
<pre>
&lt;form&gt;
	選擇您的興趣：
	&lt;div&gt;&lt;input type="checkbox" name="hobby" id="tv" /&gt;&lt;label for="tv"&gt;看電視&lt;/label&gt;&lt;/div&gt;
	&lt;div&gt;&lt;input type="checkbox" name="hobby" id="ball" /&gt;&lt;label for="ball"&gt;打球&lt;/label&gt;&lt;/div&gt;
	&lt;div&gt;&lt;input type="checkbox" name="hobby" id="web" /&gt;&lt;label for="web"&gt;上網&lt;/label&gt;&lt;/div&gt;
	&lt;div&gt;&lt;input type="checkbox" name="hobby" id="literature" /&gt;&lt;label for="literature"&gt;看書&lt;/label&gt;&lt;/div&gt;
	&lt;div&gt;&lt;input type="checkbox" name="hobby" id="travel" /&gt;&lt;label for="travel"&gt;旅遊&lt;/label&gt;&lt;/div&gt;
	&lt;div&gt;&lt;input type="checkbox" name="hobby" id="music" /&gt;&lt;label for="music"&gt;聽音樂&lt;/label&gt;&lt;/div&gt;
	&lt;div&gt;
		&lt;input type="button" value="全選" /&gt;
		&lt;input type="button" value="全不選" /&gt;
		&lt;input type="button" value="反選" /&gt;
	&lt;/div&gt;
&lt;/form&gt;
&lt;script&gt;
	var hobbies = document.forms[0].hobby;
	var lastDiv = document.getElementsByTagName('div')[6];
	var selectAll = lastDiv.getElementsByTagName('input')[0];
	var selectNone = lastDiv.getElementsByTagName('input')[1];
	var selectReverse = lastDiv.getElementsByTagName('input')[2];
	
	function changeSelection(a){
		for(var i=0;i&lt;hobbies.length;i++){
			if(a&lt;0){
				hobbies[i].checked = !hobbies[i].checked;
			}
			else{
				hobbies[i].checked = a;
			}
		}
	}
	
	selectAll.onclick = function(){changeSelection(1);}
	selectNone.onclick = function(){changeSelection(0);}
	selectReverse.onclick = function(){changeSelection(-1);}
&lt;/script&gt;
</pre>
			Boolean property that reflects the current state of the checkbox, "true" if it's checked, and "false" if not.<br>
			Example(s):
<pre>
&lt;form name="test"&gt;
&lt;input type="checkbox" name="checkgroup" checked /&gt;
&lt;input type="checkbox" name="checkgroup" /&gt;
&lt;input type="checkbox" name="checkgroup" checked /&gt;
&lt;/form&gt;

&lt;script type="text/javascript"&gt;
for (i=0; i&lt;document.test.checkgroup.length; i++){
if (document.test.checkgroup[i].checked==true)
alert("Checkbox at index "+i+" is checked!")
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
		<td>disabled</td>
		<td>屬性</td>
		<td>Boolean value that sets/ returns whether the checkbox is disabled.</td>
	</tr>
	<tr>
		<td>form</td>
		<td>屬性</td>
		<td>指向表單元素所在的&lt;form&gt;<br>
			References the form that contains the checkbox.
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
			A property available on all form elements, "type" returns the type of the calling form element, in this case, "checkbox".
		</td>
	</tr>
	<tr>
		<td>value</td>
		<td>屬性</td>
		<td>存/取表單元素value屬性的值<br>
			A read/write string that specifies the value of the checkbox (the value attribute).
		</td>
	</tr>
	<tr>
		<td>onBlur</td>
		<td>事件屬性</td>
		<td>Code is executed when the focus is removed from the checkbox.</td>
	</tr>
	<tr>
		<td>onClick</td>
		<td>事件屬性</td>
		<td>Code is executed when user clicks on the checkbox.</td>
	</tr>
	<tr>
		<td>onFocus</td>
		<td>事件屬性</td>
		<td>Code is executed when the focus is set on the checkbox.</td>
	</tr>
	<tr>
		<td>blur()</td>
		<td>方法</td>
		<td>使焦點離開某個元素<br>
			Removes focus away from the checkbox.
		</td>
	</tr>
	<tr>
		<td>click()</td>
		<td>方法</td>
		<td>模擬使用者按一下該元素<br>
			Simulates a user clicking on the checkbox.
		</td>
	</tr>
	<tr>
		<td>focus</td>
		<td>方法</td>
		<td>聚焦到某個元素上<br>
			Sets focus on the checkbox.
		</td>
	</tr>
</table>
</main>
</body>
</html>