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
<meta name="keywords" content="Javascript,form,物件,object,字典,方法,屬性,使用說明,文件,範例" />
<meta name="description" content="提供完整的form物件及其方法、屬性的說明文件與範例" />
<title>form物件 - Javascript字典</title>
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
<h1>Javascript - form物件</h1>
	<?php include("../includes/adsense.php"); ?>
<table class="doc-table">
	<tr>
		<th>名稱</th>
		<th>類形</th>
		<th>說明</th>
	</tr>
	<tr>
		<td>form</td>
		<td>物件</td>
		<td>form物件是document的一個屬性，可以用document.forms[]等各種方式拜訪文件中&lt;form&gt;標籤構成的表單。<br>
			範例，列出各種拜訪表單及其元素的寫法：
<pre>
&lt;form name="formName" id="formID"&gt;
	&lt;input type="text" name="textName" id="textID" /&gt;
	&lt;input type="submit" name="submitName" id="submitID" value="送出" /&gt;
&lt;/form&gt;
&lt;form name="form2" id="form2"&gt;
	&lt;input type="text" /&gt;
&lt;/form&gt;

&lt;script&gt;
	var myForm = document.forms; //取得文件中&lt;form&gt;的集合體
	var myForm2 = document.form2; //直接使用name屬性拜訪表單
	document.write(myForm['formName'].name+'&lt;br&gt;');
	document.write(myForm.formName.name+'&lt;br&gt;');
	document.write(myForm['formID'].id+'&lt;br&gt;');
	document.write(myForm.formID.id+'&lt;br&gt;');
	document.write(myForm.length+'&lt;br&gt;');
	document.write(myForm[0].elements[0].type+'&lt;br&gt;');
	document.write(myForm[0].elements[0].tagName+'&lt;br&gt;');
	document.write(myForm[0].elements['textID'].id+'&lt;br&gt;');
	document.write(myForm[0].elements['textName'].name+'&lt;br&gt;');
	document.write(myForm[0].elements.textID.id+'&lt;br&gt;');
	document.write(myForm[0].getElementsByTagName('input')[1].id+'&lt;br&gt;');
	document.write(myForm[0].getElementsByTagName('input')[1].getAttribute('name')+'&lt;br&gt;');
	document.write(myForm2.name);
&lt;/script&gt;

結果：formName
　　　formName
　　　formID
　　　formID
　　　2
　　　text
　　　INPUT
　　　textID
　　　textName
　　　textID
　　　submitID
　　　submitName
　　　form2
</pre>
			由上例看來forms也可以和DOM level 2的各種屬性及方法混用，不過"精通Javascript+jQuery"書中第7-27頁提到：傳統訪問表單元素的方法比較方便向伺服器傳送資料。因為選項案鈕各項之間name的值相同，而id值不同。( 雖然看不懂在寫什麼…但就先記錄下來… )<br><br>
			關於表單提交：<br>
			表單的提交通常透過按鈕錢者具備按鈕功能的圖片來完成，如下例的程式碼：
<pre>
&lt;input type="submit" name="submitBtn" id="submitBtn" value="送出" /&gt;
&lt;input type="image" name="submitPic" id="submitPic" src="submit.jpg" /&gt;
</pre>
			當使用者按一下其中一個按鈕，或者按Enter鍵就可以直接提交表單，無需其他的程式砠。可以透過在&lt;horm&gt;的action屬性加入程式碼來檢測表單是否被提交，例如：
<pre>
&lt;form method="post" name="form1" action="javascript:alert('己送出');"&gt;
</pre>
			很多時候開發者並不希望使用按鈕，但仍然能提交表單，這時可以採用表單的submit()方法，這對於驗證和提交表單都是十分有用的，例如：
<pre>
var form1 = document.forms['form1'];
form1.submit();
</pre>
			或者自訂按鈕分配onclick()事件，例如：
<pre>
&lt;input type="button" value="送出" onclick="document.forms['form1']".submit(); /&gt;
</pre>
			有一點要注意的是，如果使用submit()方法來提交表單則不的觸發&lt;form&gt;的onsubmit事件，這與用提交按鈕是不同的。因此，如果使用submit()方法來提交，所有驗證表單的過程都應廳在其之前完成。<br><br>
			Web用戶在提交表單時往往會由於網速過慢而反覆按一下交按鈕，這對於伺服器而言是很大的負擔，通常可以使用disabled屬性來禁止這種行為，例如：
<pre>
&lt;input type="button" value="送出" onclick="this.disabled=true; this.form.submit();" /&gt;
</pre>
		</td>
	</tr>
	<tr>
		<td>acceptCharset</td>
		<td>屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>action</td>
		<td>屬性</td>
		<td>表單所要提交到的URL地址</td>
	</tr>
	<tr>
		<td>elements[]</td>
		<td>屬性</td>
		<td>傳回表單中所有表單欄位的集合；每個表單中的元素，無論是文字方塊、選項按鈕、下拉式清單方塊等等的元素，都包含在form的elements集合中。可以利用元素在集合中的位置或者元素的name屬性來獲得該元素的引用，範例如下：
<pre>
var form1 = document.forms['form1'];
var inputName = form1.elements[0];  //使用索引值0拜訪form1內的第一個表單元素
var inputPassword = form1.elements['pw'];  //使用name屬性拜訪屬性值為"pw"的表單元素
var inputSubmit = form1.elements.sb;  //使用name屬性拜訪表單元素較直觀的寫法
</pre>
			elements[]算是form的一個屬性物件，下面也列出屬於elements[]專用的屬性：<br><br>
			<span style="display:inline-block; width:130px; vertical-align: top;">elements.length</span><span style="display:inline-block; width:510px;">傳回一個表單中表單元素的數量。</span><br><br>
			<span style="display:inline-block; width:130px; vertical-align: top;">elements[i].type</span><span style="display:inline-block; width:510px;">以字串型式傳回指定表單元素類型值，例如&lt;textarea&gt;傳回textarea，&lt;input type="radio"&gt;則傳回radio，下面列出所有的值：<br>button、checkbox、file、hidden、image、password、radio、reset、select-one、select-multiple、submit、text、textarea</span><br><br>
			<span style="display:inline-block; width:130px; vertical-align: top;">elements[i].property</span><span style="display:inline-block; width:510px;">除了type之外…現在懶的翻：原文：Apart from "type", all properties available to the accessed form element is also available when accessed via the elements object, such as "name", "value" etc.</span>
		</td>
	</tr>
	<tr>
		<td>enctype</td>
		<td>屬性</td>
		<td>表單向伺服器發送資料時，資料應該使用的編碼方法，預設為application/x-www-form-urlencoded，如果你要上傳檔，則應該使用multipart/form-data</td>
	</tr>
	<tr>
		<td>length</td>
		<td>屬性</td>
		<td>1.傳回文件中所有&lt;form&gt;元素的數量，如下例：
<pre>
document.forms.length; //未指定索引值則代表文件中所有的表單
</pre>
			2.傳回指定表單中所有表單元素的數量，如&lt;button&gt;、&lt;input&gt;等，非表單元素則不列入計算，如下例：
<pre>
document.forms[0].length; //傳回文件中的第一個表單內所有表單元素的數量
</pre>
		</td>
	</tr>
	<tr>
		<td>method</td>
		<td>屬性</td>
		<td>瀏覽器發送GET請求或是POST請求</td>
	</tr>
	<tr>
		<td>name</td>
		<td>屬性</td>
		<td>表單的名稱，即&lt;form&gt;標記中的name屬性</td>
	</tr>
	<tr>
		<td>target</td>
		<td>屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>onreset</td>
		<td>事件屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>onsubmit</td>
		<td>事件屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>reset()</td>
		<td>方法</td>
		<td>重置表單中的各項到初始值，相當於按一下reset按鈕</td>
	</tr>
	<tr>
		<td>submit()</td>
		<td>方法</td>
		<td>提交表單到指定頁面，相當於按一下submit按鈕</td>
	</tr>
</table>
 </main>
</body>
</html>