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
<meta name="keywords" content="Javascript,select,物件,object,字典,方法,屬性,使用說明,文件,範例" />
<meta name="description" content="提供完整的select物件及其方法、屬性的說明文件與範例" />
<title>select物件 - Javascript字典</title>
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
<h1>Javascript - select物件</h1>
	<?php include("../includes/adsense.php"); ?>
<table class="doc-table">
	<tr>
		<th>名稱</th>
		<th>類形</th>
		<th>說明</th>
	</tr>
	<tr>
		<td>select</td>
		<td>物件</td>
		<td>Javascript中的select物件代表HTML中的&lt;select&gt;標籤，以下拉選單的方式呈現，它是表單元素中比較特殊的一個類別，透過&lt;option&gt;來設置所有列表項。當它是單選時功能相當於&lt;radio&gt;元素，而當它是多選時(&lt;select multiple="multiple"&gt;)功能相當於&lt;checkbox&gt;元素，但是所佔用的頁面面積卻小很多。<br>
			option物件詳細說明請見option目錄。
		</td>
	</tr>
	<tr>
		<td>disabled</td>
		<td>屬性</td>
		<td>Boolean value that sets/ returns whether this SELECT element is disabled.</td>
	</tr>
	<tr>
		<td>form</td>
		<td>屬性</td>
		<td>指向表單元素所在的&lt;form&gt;<br>
			References the form that contains the selection list in question.
		</td>
	</tr>
	<tr>
		<td>length</td>
		<td>屬性</td>
		<td>表示&lt;option&gt;選項的個數。<br>
			Returns the number of options in the SELECT element:
<pre>
document.getElementById("mymenu").length //returns number of options
</pre>
		</td>
	</tr>
	<tr>
		<td>multiple</td>
		<td>屬性</td>
		<td>Boolean that indicates whether this SELECT allows more than one option to be selected simultaneously.</td>
	</tr>
	<tr>
		<td>name</td>
		<td>屬性</td>
		<td>讀取/設定表單元素name屬性的值<br>
			Sets or returns the value of the name attribute of a form element.
		</td>
	</tr>
	<tr>
		<td>options[]</td>
		<td>屬性</td>
		<td>擷取選項的陣列，例如select01.options[2]表示該下拉式功能表中的第3個option項目。
			An HTMLCollection of Options objects containing each option within this SELECT element.
		</td>
	</tr>
	<tr>
		<td>selectedIndex</td>
		<td>屬性</td>
		<td>被選中的選項序號，如果沒有選項被選中則為-1。對於多選下拉式功能表而言，返回被選中的第一個選項序號。從0開始計數。<br>
			下拉選單中最重要的就是取得被使用者所選中的項目，我們可以透過selectedIndex屬性輕鬆地訪問到被中的項目，如下範例(1)：
<pre>
&lt;form&gt;
	選擇您的血型：
	&lt;select&gt;
		&lt;option value="type O"&gt;O型&lt;/option&gt;
		&lt;option value="type A"&gt;A型&lt;/option&gt;
		&lt;option value="type B"&gt;B型&lt;/option&gt;
		&lt;option value="type AB"&gt;AB型&lt;/option&gt;
	&lt;/select&gt;
	&lt;button&gt;顯示選中的項目&lt;/button&gt;
&lt;/form&gt;
&lt;script&gt;
	var select01 = document.forms[0].elements[0];
	var button01 = document.forms[0].elements[1];
	button01.onclick = function(){
		var selIndex = select01.options.selectedIndex;
		alert(select01.options[selIndex].text);
		return false;
	}
&lt;/script&gt;
</pre>
			以上範例只針對單選的下拉選單，覆選的做法請參考option物件selected的範例。<br>
			An integer that gets or sets the index of the selected option. If non is selected, -1 is returned. If multiple options are selected, it returns the index of the first selected option. When setting this property, the OPTION at the given position will be selected (while any previously selected option deselected).<br>
			The following example alerts the index number of the selected option within a SELECT element when the user makes a selection:<br>
			Example(s):
<pre>
&lt;script type="text/javascript"&gt;
function alertselected(selectobj){
 alert(selectobj.selectedIndex)
}
&lt;/script&gt;

&lt;form id="someform"&gt;
&lt;select id="sample" onChange="alertselected(this)"&gt;
&lt;option&gt;Option 1&lt;/option&gt;
&lt;option&gt;Option 2&lt;/option&gt;
&lt;option&gt;Option 3&lt;/option&gt;
&lt;/select&gt; 
&lt;input type="button" onClick="alertselected(document.getElementById('sample'))" value="alert" /&gt;
&lt;/form&gt;
</pre>
		</td>
	</tr>
	<tr>
		<td>size</td>
		<td>屬性</td>
		<td>An integer reflecting the number of OPTIONs being displayed at once within this SELECT element.</td>
	</tr>
	<tr>
		<td>type</td>
		<td>屬性</td>
		<td>設定/讀取表單元素type屬性的值；IE8(含)以下的瀏覽器只能讀取，不支援設定屬性的功能。<br>
			在select物件裡返回的是下拉功能表的類型。單選返回字串"select-one"，多選返回字串"select-multiple"。<br><br>
			範例1，傳回select物件單選或是複選的值：
<pre>
&lt;form&gt;
	&lt;select&gt;
		&lt;option value="ball"&gt;option 01&lt;/option&gt;
		&lt;option value="music"&gt;option 02&lt;/option&gt;
		&lt;option value="climb"&gt;option 03&lt;/option&gt;
	&lt;/select&gt;
	&lt;select multiple="multiple" size="3"&gt;
		&lt;option value="ball"&gt;option 01&lt;/option&gt;
		&lt;option value="music"&gt;option 02&lt;/option&gt;
		&lt;option value="climb"&gt;option 03&lt;/option&gt;
	&lt;/select&gt;
&lt;/form&gt;
&lt;script&gt;
	var select01 = document.forms[0].elements[0];
	var select02 = document.forms[0].elements[1];
	alert('選單1的類型是：'+select01.type+'\n選單2的類型是：'+select02.type);
&lt;/script&gt;
</pre>
			範例2，為表單中所有的&lt;select&gt;元素加上"selectclass"的class name：
<pre>
var myform=document.getElementById("someform");
for(var i=0; i&lt;myform.elements.length; i++){
	if(myform.elements[i].type=="select-one" || myform.elements[i].type=="select-multiple"){
		myform.elements[i].className="selectclass";
	}
}
</pre>
		</td>
	</tr>
	<tr>
		<td>onBlur</td>
		<td>事件屬性</td>
		<td>Code is fired whenever the focus is removed from the SELECT element.</td>
	</tr>
	<tr>
		<td>onChange</td>
		<td>事件屬性</td>
		<td>Code is fired whenever an OPTION within SELECT changes, through the user selecting another option. This event handler is commonly used to create a SELECT element that reacts as soon as the user has selected an option manually. Here's a SELECT menu that navigates to a particular site upon user selection:<br>
			Example(s):
<pre>
&lt;form id="aform"&gt;
&lt;select id="mymenu" size="1"&gt;
&lt;option value="nothing" selected="selected"&gt;Select a site&lt;/option&gt;
&lt;option value="http://www.dynamicdrive.com"&gt;Dynamic Drive&lt;/option&gt;
&lt;option value="http://www.codingforums.com"&gt;Coding Forums&lt;/option&gt;
&lt;option value="http://www.cssdrive.com"&gt;CSS Drive&lt;/option&gt;
&lt;/select&gt;
&lt;/form&gt;

&lt;script type="text/javascript"&gt;

var selectmenu=document.getElementById("mymenu")
selectmenu.onchange=function(){ //run some code when "onchange" event fires
 var chosenoption=this.options[this.selectedIndex] //this refers to "selectmenu"
 if (chosenoption.value!="nothing"){
  window.open(chosenoption.value, "", "") //open target site (based on option's value attr) in new window
 }
}
&lt;/script&gt;
</pre>
		</td>
	</tr>
	<tr>
		<td>onFocus</td>
		<td>事件屬性</td>
		<td>Code is fired whenever the focus is set on the SELECT element.</td>
	</tr>
	<tr>
		<td>add()(newoption, beforeoption*)</td>
		<td>方法</td>
		<td>Dynamically adds a new OPTION to the SELECT element, where:
			<ul style="padding:0 0 0 20px;">
				<li>newoption: The new option to add, created using new Option().</li>
				<li>beforeoption*: This parameter differs depending on the browser used:
					<ul style="padding:0 0 0 20px;">
						<li>In non IE browsers, an existing option (reference) within SELECT in which to add the new option following it. If null is entered, the new option is added at the very end.</li>
						<li>In IE browsers (including IE8 beta2), an integer representing the position of the existing option to add the new option to (ie: 0=add following 1st element, 1=add following 2nd element etc). Leave this parameter out entirely to add the new option to the very end.</li>
					</ul>
				</li>
			</ul>
			Due to the differences in the implementation of the 2nd parameter of add(), to make it cross browser, you can use try/catch to see which version the browser accepts. The 1st parameter newoption should simply be a new option created using new Option() (see Option object below for more info).<br>
			Example(s):
<pre>
&lt;form id="someform"&gt;
&lt;select id="sample"&gt;
&lt;option value="1"&gt;Option 1&lt;/option&gt;
&lt;option value="2"&gt;Option 2&lt;/option&gt;
&lt;option value="3"&gt;Option 3&lt;/option&gt;
&lt;/select&gt;
&lt;/form&gt;

&lt;script type="text/javascript"&gt;
var myselect=document.getElementById("sample")
try{
 myselect.add(new Option("New Last Option", "4"), null) //add new option to end of "sample"
 myselect.add(new Option("New First Option", "0"), myselect.options[0]) //add new option to beginning of "sample"
}
catch(e){ //in IE, try the below version instead of add()
 myselect.add(new Option("New Last Option", "4")) //add new option to end of "sample"
 myselect.add(new Option("New First Option", "0"), 0) //add new option to beginning of "sample"
}
&lt;/script&gt;
</pre>
			results in the SELECT element becoming:
<pre>
&lt;select id="sample"&gt;
&lt;option value="0"&gt;New First Option&lt;/option&gt;
&lt;option value="1"&gt;Option 1&lt;/option&gt;
&lt;option value="2"&gt;Option 2&lt;/option&gt;
&lt;option value="3"&gt;Option 3&lt;/option&gt;
&lt;option value="4"&gt;New Last Option&lt;/option&gt;
&lt;/select&gt;
</pre>
Note1: beforeoption should be an object reference to an option except in IE, where it must be an integer representing the index of the option instead.
Note2: An alternate, arguably simpler way of adding a new option to the SELECT element is simply to assign new Option() to one of the options within select.options[]. See Option object below for more info.<br>
		</td>
	</tr>
	<tr>
		<td>remove(optionindex)</td>
		<td>方法</td>
		<td>Removes an existing option within SELECT at the specified position, where 0=1st option, 1=2nd option etc, for example:
			Example(s):
<pre>
var myselect=document.getElementById("sample")
myselect.remove(myselect.length-1) //removes last option within SELECT
</pre>
		</td>
	</tr>
	<tr>
		<td>blur()</td>
		<td>方法</td>
		<td>使焦點離開某個元素<br>
			Removes focus away from the selection list.
		</td>
	</tr>
	<tr>
		<td>focus()</td>
		<td>方法</td>
		<td>聚焦到某個元素上<br>
			Sets focus on the selection list.
		</td>
	</tr>
</table>
</main>
</body>
</html>