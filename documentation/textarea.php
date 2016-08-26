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
<meta name="keywords" content="Javascript,textarea,物件,object,字典,方法,屬性,使用說明,文件,範例" />
<meta name="description" content="提供完整的textarea物件及其方法、屬性的說明文件與範例" />
<title>textarea物件 - Javascript字典</title>
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
<h1>Javascript - textarea物件</h1>
<table class="doc-table">
	<tr>
		<th>名稱</th>
		<th>類形</th>
		<th>說明</th>
	</tr>
	<tr>
		<td>textarea</td>
		<td>物件</td>
		<td>The Textarea object represents a text-area in an HTML form.<br>
			For each &lt;textarea&gt; tag in an HTML form, a Textarea object is created.<br>
			You can access a Textarea object by indexing the elements array (by number or name) of the form or by using getElementById().<br>
			可輸入文字資料的表單元素有text、password、textarea，如果我們希望限制使用者輸入字元的長度，我們可以使用HTML表單元素中的maxlenght屬性，text和password都可以輕鬆做到這一點，但有許多瀏覽器的&lt;textarea&gt標籤並不支援HTML的maxlength屬性，這時候我們就必須為這些不支援的瀏覽器的maxlength屬性加上自訂的textareaMax()函式；下例(1)為模擬maxlength的行為，如果監聽onkeypress事件時textareaMax()傳回false的時候，使用者將不能再輸入文字(Enter也算一個字元)；<br>
			這個範例雖然有參考價值，但使用時還是要再加以修改強化，因為textareaMax()還是有一些bug，例如有的瀏覽器當達到指定字數時，Backspace會不能按(因為onkeypress)，如此就不能修改資料，另外如果是用貼上的方式來輸入資料，有的瀏覽器就算超過字數也照貼不誤，因此正式撰寫時這些問題都要考慮再加以處理。<br>
			範例1：
<pre>
&lt;form&gt;&lt;textarea maxlength="5"&gt;&lt;/textarea&gt;&lt;/form&gt;
&lt;script&gt;
	function textareaMax(){return this.value.length&lt;=this.getAttribute('maxlength');}
	var myTextarea = document.getElementsByTagName('textarea')[0];
	myTextarea.onkeypress = textareaMax;
&lt;/script&gt;
</pre>
		</td>
	</tr>
	<tr>
		<td>accessKey</td>
		<td>屬性</td>
		<td>String value that sets/ returns the accessKey for the field.</td>
	</tr>
	<tr>
		<td>cols</td>
		<td>屬性</td>
		<td></td>
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
			References the form that contains the textarea.
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
		<td>readOnly</td>
		<td>屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>rows</td>
		<td>屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>type</td>
		<td>屬性</td>
		<td>設定/讀取表單元素type屬性的值；IE8(含)以下的瀏覽器只能讀取，不支援設定屬性的功能。<br>
			A property available on all form elements, "type" returns the type of the calling form element, in this case, "Textarea".
		</td>
	</tr>
	<tr>
		<td>value</td>
		<td>屬性</td>
		<td>存/取表單元素value屬性的值<br>
			Read/write string that specifies the value of the textarea.
		</td>
	</tr>
	<tr>
		<td>onBlur</td>
		<td>事件屬性</td>
		<td>Code is executed when the focus is removed from the textarea.</td>
	</tr>
	<tr>
		<td>onChange</td>
		<td>事件屬性</td>
		<td>Code is executed when the user changes the value within the textarea, and removes focus away from the field.</td>
	</tr>
	<tr>
		<td>onFocus</td>
		<td>事件屬性</td>
		<td>Code is executed when the focus is set on the textarea.</td>
	</tr>
	<tr>
		<td>onKeyDown</td>
		<td>事件屬性</td>
		<td>Code is executed when user presses down the key within the textarea.</td>
	</tr>
	<tr>
		<td>onKeyPress</td>
		<td>事件屬性</td>
		<td>Code is executed when user presses the key within the textarea.</td>
	</tr>
	<tr>
		<td>onKeyUp</td>
		<td>事件屬性</td>
		<td>Code is executed when user releases a key within the textarea.</td>
	</tr>
	<tr>
		<td>onSelect</td>
		<td>事件屬性</td>
		<td>Code is executed when user selects some text within the textarea.</td>
	</tr>
	<tr>
		<td>blur()</td>
		<td>方法</td>
		<td>使焦點離開某個元素<br>
			Removes focus away from the textarea.
		</td>
	</tr>
	<tr>
		<td>focus()</td>
		<td>方法</td>
		<td>聚焦到某個元素上<br>
			Sets focus on the textarea.<br>
			範例：
<pre>
&lt;form&gt;
	&lt;textarea name="textarea01"&gt;&lt;/textarea&gt;
&lt;/form&gt;
&lt;script&gt;
	window.onload = function(){
		document.forms[0].textarea01.focus();
	}
&lt;/script&gt;
</pre>
		</td>
	</tr>
	<tr>
		<td>select()</td>
		<td>方法</td>
		<td>選取元素內的文字<br>
			Highlights the content of the textarea.<br>
			範例：
<pre>
&lt;form&gt;
	&lt;textarea name="textarea01"&gt;select&lt;/textarea&gt;
&lt;/form&gt;
&lt;script&gt;
	document.forms[0].textarea01.onmouseup = function(){
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