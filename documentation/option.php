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
<meta name="keywords" content="Javascript,option,物件,object,字典,方法,屬性,使用說明,文件,範例" />
<meta name="description" content="提供完整的option物件及其方法、屬性的說明文件與範例" />
<title>option物件 - Javascript字典</title>
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
<h1>Javascript - option物件</h1>
<table class="doc-table">
	<tr>
		<th>名稱</th>
		<th>類形</th>
		<th>說明</th>
	</tr>
	<tr>
		<td>option</td>
		<td>物件</td>
		<td>在Javascript中Option物件代表&lt;select&gt;元素中的單一&lt;option&gt;選項，我們可以對它進行新增、刪除、替換等一系列操作，尤其是與資料庫鎖定的下拉式功能表。下列為動態新增選項的語法，這樣的建構函數可以直接新增value、text等資訊：
<pre>
var myOption = new Option([text], [value], [defaultSelected], [selected])
</pre>
			語法中的參數全部都是非必須的，但通常在呼叫new Option()的時候前兩參數是要被定義的；以下為參數說明：
			<ul>
				<li>text: 設定選項的文字的字串</li>
				<li>value: 設定選項value值的字串</li>
				<li>defaultSelected: 設定是否選項的狀態為預設選取的Boolean值，該值預設為0，其效果和設置defaultSelected屬性相同</li>
				<li>selected: 設定是否選項的狀態為選取的Boolean值，該值預設為0，其效果和設置selected屬性相同</li>
			</ul>
			範例1，取代和新增選項：
<pre>
&lt;form&gt;
	&lt;select multiple="multiple" size="5"&gt;
		&lt;option value="ball"&gt;option 01&lt;/option&gt;
		&lt;option value="music"&gt;option 02&lt;/option&gt;
		&lt;option value="climb"&gt;option 03&lt;/option&gt;
	&lt;/select&gt;
&lt;/form&gt;
&lt;script&gt;
	var select01 = document.forms[0].elements[0];
	select01.options[0] = new Option('取代第一個選項','replace first option');
	select01.options[select01.length] = new Option('新增的選項','new option',1,1);
&lt;/script&gt;
</pre>
			範例2，在指定的位置插入選項：
<pre>
&lt;form&gt;
	&lt;select multiple="multiple" size="5"&gt;
		&lt;option value="ball"&gt;option 01&lt;/option&gt;
		&lt;option value="music"&gt;option 02&lt;/option&gt;
		&lt;option value="climb"&gt;option 03&lt;/option&gt;
	&lt;/select&gt;
&lt;/form&gt;
&lt;script&gt;
	var select01 = document.forms[0].elements[0];
	var insertion = new Option('新的Option','new option');
	select01.insertBefore(insertion,select01.options[2]);
&lt;/script&gt;
</pre>
			上範例我們用了DOM的insertBefore()方法將新的選項插入指定的位置，這樣的寫法正常無誤，但在IE8(含)以下的版本卻出現了bug，指定的位置會確實會新增一個選項，value值也正常，但唯獨文字內容無法正確產生，導致該選項變成空白的選項，這個問題可以透過先插入選項，再將其插入指定位置的方法來改寫，一切就會正常，如下範例(3)。<br>
			範例3，修正範例(2)的IE bug：
<pre>
var select01 = document.forms[0].elements[0];
var insertion = new Option('新的Option','new option');
select01.options[select01.length] = insertion; //先將insertion置於最後一個選項
select01.insertBefore(insertion,select01.options[2]);
</pre>
			範例4，刪除某個選項：
<pre>
var select01 = document.forms[0].elements[0];
select01.options[1] = null;
</pre>
			由上例看到，刪除某個選項只要將它指派為空值(null)就可以了，非常簡潔。<br><br>
			範例5，清空所有的選項：
<pre>
document.myform.master.options.length=0;
</pre>
			補充說明：It serves as an alternate method of adding/removing options to select.add() and select.remove(), with the main benefit being it works in all browsers out of the box, including in very old, non DOM2 legacy browsers.
		</td>
	</tr>
	<tr>
		<td>defaultSelected</td>
		<td>屬性</td>
		<td>A Boolean specifying whether this option is initially selected.</td>
	</tr>
	<tr>
		<td>form</td>
		<td>屬性</td>
		<td>指向表單元素所在的&lt;form&gt;</td>
	</tr>
	<tr>
		<td>index</td>
		<td>屬性</td>
		<td>Returns the index of this option within the select.options[] property.</td>
	</tr>
	<tr>
		<td>selected</td>
		<td>屬性</td>
		<td>布林值，表示選項&lt;option&gt;是否被選中。<br>
			在select物件的selectedIndex屬性中有介紹過如何拜訪使用者選中的項目，但該做法只能用在單選的選單上，下範例(1)則利用selected屬性示範在多選的情況下如何拜訪多個選項：
<pre>
&lt;form&gt;
	選擇您的興趣：&lt;br&gt;
	&lt;select multiple="multiple" size="6"&gt;
		&lt;option value="ball"&gt;球類運動&lt;/option&gt;
		&lt;option value="music"&gt;聽音樂&lt;/option&gt;
		&lt;option value="climb"&gt;登山健行&lt;/option&gt;
		&lt;option value="game"&gt;電玩遊戲&lt;/option&gt;
		&lt;option value="movies"&gt;電影欣賞&lt;/option&gt;
		&lt;option value="bike"&gt;自行車運動&lt;/option&gt;
		&lt;option value="literature"&gt;文學閱讀&lt;/option&gt;
		&lt;option value="art"&gt;美術&lt;/option&gt;
		&lt;option value="extrame"&gt;極限運動&lt;/option&gt;
	&lt;/select&gt;&lt;br&gt;
	&lt;button&gt;顯示選擇的項目&lt;/button&gt;
&lt;/form&gt;
&lt;script&gt;
	var select01 = document.forms[0].elements[0];
	var button01 = document.forms[0].elements[1];
	button01.onclick = function(){
		var choices = new Array();
		for(var i=0;i&lt;select01.options.length;i++){
			if(select01.options[i].selected){
				choices.push(select01.options[i].text);
			}
		}
		alert(choices.join(' | '));
		return false;
	}
&lt;/script&gt;
</pre>
			Boolean that specifies whether this option is currently selected. The following looks through all OPTIONs within a SELECT to see which one is selected (assumes only 1 can be selected at any time).<br>
			Example(s):
<pre>
var myselect=document.getElementById("sample")
for (var i=0; i&lt;myselect.options.length; i++){
 if (myselect.options[i].selected==true){
  alert("Selected Option's index: "+i)
  break
 }
}
</pre>
		</td>
	</tr>
	<tr>
		<td>text</td>
		<td>屬性</td>
		<td>選項的文字。<br>
			Specifies the text for the option.</td>
	</tr>
	<tr>
		<td>value</td>
		<td>屬性</td>
		<td>存/取表單元素value屬性的值<br>
			Specifies the value for the option.
		</td>
	</tr>
</table>
</main>
</body>
</html>