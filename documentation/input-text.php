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
<meta name="keywords" content="Javascript,input,text,物件,object,字典,方法,屬性,使用說明,文件,範例" />
<meta name="description" content="提供完整的input(text)物件及其方法、屬性的說明文件與範例" />
<title>input(text)物件 - Javascript字典</title>
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
<h1>Javascript - input(text)物件</h1>
<table class="doc-table">
	<tr>
		<th>名稱</th>
		<th>類形</th>
		<th>說明</th>
	</tr>
	<tr>
		<td>accessKey</td>
		<td>屬性</td>
		<td>String value that sets/ returns the accessKey for the field.</td>
	</tr>
	<tr>
		<td>defaultValue</td>
		<td>屬性</td>
		<td>元性初始設定的value值</td>
	</tr>
	<tr>
		<td>disabled</td>
		<td>屬性</td>
		<td>Boolean value that sets/ returns whether the field is disabled.</td>
	</tr>
	<tr>
		<td>form</td>
		<td>屬性</td>
		<td>指向表單元素所在的&lt;form&gt;<br>
			References the form that contains the text field.
		</td>
	</tr>
	<tr>
		<td>maxLength</td>
		<td>屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>name</td>
		<td>屬性</td>
		<td>讀取/設定表單元素name屬性的值<br>
			Sets or returns the value of the name attribute of a form element.
		</td>
	</tr>
	<tr>
		<td>readOnly</td>
		<td>屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>size</td>
		<td>屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>type</td>
		<td>屬性</td>
		<td>設定/讀取表單元素type屬性的值；IE8(含)以下的瀏覽器只能讀取，不支援設定屬性的功能。<br>
			A property available on all form elements, "type" returns the type of the calling form element, in this case, "text".
		</td>
	</tr>
	<tr>
		<td>value</td>
		<td>屬性</td>
		<td>存/取表單元素value屬性的值<br>
			Read/write string that specifies the value of the text field.
		</td>
	</tr>
	<tr>
		<td>onBlur</td>
		<td>事件屬性</td>
		<td>Code is executed when the focus is removed from the text field.</td>
	</tr>
	<tr>
		<td>onChange</td>
		<td>事件屬性</td>
		<td>Code is executed when the user changes the value within the text field, and removes focus away from the field.</td>
	</tr>
	<tr>
		<td>onFocus</td>
		<td>事件屬性</td>
		<td>Code is executed when the focus is set on the text field.</td>
	</tr>
	<tr>
		<td>onKeyDown</td>
		<td>事件屬性</td>
		<td>Code is executed when user presses down the key within the text field.</td>
	</tr>
	<tr>
		<td>onKeyPress</td>
		<td>事件屬性</td>
		<td>Code is executed when user presses the key within the text field.</td>
	</tr>
	<tr>
		<td>onKeyUp</td>
		<td>事件屬性</td>
		<td>Code is executed when user releases a key within the text field.</td>
	</tr>
	<tr>
		<td>onSelect</td>
		<td>事件屬性</td>
		<td>Code is executed when user selects some text within the text field.</td>
	</tr>
	<tr>
		<td>blur()</td>
		<td>方法</td>
		<td>使焦點離開某個元素<br>
			Removes focus away from the text field.
		</td>
	</tr>
	<tr>
		<td>focus()</td>
		<td>方法</td>
		<td>聚焦到某個元素上<br>
			Sets focus on the text field.<br>
			範例：
<pre>
&lt;form&gt;
	&lt;input type="text" name="text01"&gt;
&lt;/form&gt;
&lt;script&gt;
	window.onload = function(){
		document.forms[0].text01.focus();
	}
&lt;/script&gt;
</pre>
		</td>
	</tr>
	<tr>
		<td>select()</td>
		<td>方法</td>
		<td>選取元素內的文字<br>
			Highlights the content of the text field.<br>
			範例：
<pre>
&lt;form&gt;
	&lt;input type="text" name="input01" value="select" /&gt;
&lt;/form&gt;
&lt;script&gt;
	document.forms[0].input01.onmouseup = function(){
		this.select();
	}
&lt;/script&gt;
</pre>
		</td>
	</tr>
</table>
</main>
</body>
</html>