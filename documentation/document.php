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
<meta name="keywords" content="Javascript,document,物件,object,字典,方法,屬性,使用說明,文件,範例" />
<meta name="description" content="提供完整的document物件及其方法、屬性的說明文件與範例" />
<title>document物件 - Javascript字典</title>
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
<h1>Javascript - document物件</h1>
<table class="doc-table">
	<tr>
		<th>名稱</th>
		<th>類形</th>
		<th>說明</th>
	</tr>
	<tr>
		<td>document</td>
		<td>物件</td>
		<td>document物件是window的屬性之一，自瀏覽器引入Javascript開始就提供的一種物件，主要用於獲取和修改一些頁面的屬性以及屬性集合；<br />
		由於window物件的任何屬性和方法都可以直接訪問，因此下例程式碼返回的值為true。<br />
		例：alert(window.document == document);</td>
	</tr>
	<tr>
		<td>alinkColor</td>
		<td>屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>body</td>
		<td>屬性</td>
		<td>References the body element of the page. From there, you can then access other nodes contained within the body.</td>
	</tr>
	<tr>
		<td>all</td>
		<td>屬性</td>
		<td>頁面中所元素的集合，例如document.all(0)代表頁面內的第一個素；它是IE專用的屬性，所以常常用來判斷使用者的瀏覽器是否為IE瀏覽器，如下例：
<pre>
if(document.all){alert('是IE瀏覽器');}
</pre></td>
	</tr>
	<tr>
		<td>anchors</td>
		<td>屬性</td>
		<td>頁面中所有錨的集合(&lt;a name="anchorsName"&gt;&lt;/a&gt;)。</td>
	</tr>
	<tr>
		<td>applets</td>
		<td>屬性</td>
		<td>頁面中所有的applet集合。</td>
	</tr>
	<tr>
		<td>bgColor</td>
		<td>屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>compatMode</td>
		<td>屬性</td>
		<td>Returns the compatibility mode of the current document, specifically, whether the page is rendered in Quirks or Stricts mode. The two possible values returned are "BackCompat" for Quirks and "CSS1Compat" for Strict. Useful for determining the doctype setting of the page and executing different code accordingly. Example:
<pre>
if (document.compatMode=="CSS1Compat"); // execute code for page with a valid doctype
</pre></td>
	</tr>
	<tr>
		<td>cookie</td>
		<td>屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>doctype</td>
		<td>屬性</td>
		<td>Read-only property that returns the Document Type Definition (DTD) of the current document, or null if the page doesn't contain a DTD. Not supported in IE as of IE6.</td>
	</tr>
	<tr>
		<td>documentElement</td>
		<td>屬性</td>
		<td>References the root element of the document, in the case of HTML documents, the html element. This read only property is useful for accessing all elements on the page, such as the HEAD. Example:
<pre>
entiredoc = document.documentElement;
var elements=entiredoc.getElementsByTagName("*");
for (i=0; i&lt;elements.length; i++)
alert(elements[i].tagName)
</pre></td>
	</tr>
	<tr>
		<td>domain</td>
		<td>屬性</td>
		<td>Gets/sets the domain of the current document. Useful in cross domain scripting when one domain is to communicate with another. Example:
<pre>
document.domain="javascriptkit.com"
</pre></td>
	</tr>
	<tr>
		<td>embeds</td>
		<td>屬性</td>
		<td>頁面中所有的內置物件集合(&lt;embed&gt;&lt;/embed&gt;)。</td>
	</tr>
	<tr>
		<td>fgColor</td>
		<td>屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>fileSize</td>
		<td>屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>forms[]</td>
		<td>屬性</td>
		<td>指向文件中所有&lt;FORM&gt;元素的清單陣列，它的一系列屬性、事件及方法請見DOM Objects的form物件。<br>
		範例：列出各種拜訪表單及其元素的寫法
<pre>
&lt;form name="form_name" id="form_id"&gt;
	&lt;input type="text" name="text_name" id="text_id" /&gt;
	&lt;input type="submit" name="submit_name" id="submit_id" value="送出" /&gt;
&lt;/form&gt;
&lt;form name="form2" id="form2"&gt;
	&lt;input type="text" /&gt;
&lt;/form&gt;

&lt;script&gt;
	var my_form = document.forms;
	var my_form2 = document.form2; //直接使用name屬性拜訪表單
	document.write(my_form['form_name'].name+'&lt;br&gt;');
	document.write(my_form.form_name.name+'&lt;br&gt;');
	document.write(my_form['form_id'].id+'&lt;br&gt;');
	document.write(my_form.form_id.id+'&lt;br&gt;');
	document.write(my_form.length+'&lt;br&gt;');
	document.write(my_form[0].elements[0].type+'&lt;br&gt;');
	document.write(my_form[0].elements[0].tagName+'&lt;br&gt;');
	document.write(my_form[0].elements['text_id'].id+'&lt;br&gt;');
	document.write(my_form[0].elements['text_name'].name+'&lt;br&gt;');
	document.write(my_form[0].elements.text_id.id+'&lt;br&gt;');
	document.write(my_form[0].getElementsByTagName('input')[1].id+'&lt;br&gt;');
	document.write(my_form[0].getElementsByTagName('input')[1].getAttribute('name')+'&lt;br&gt;');
	document.write(my_form2.name);
&lt;/script&gt;

結果：form_name
　　　form_name
　　　form_id
　　　form_id
　　　2
　　　text
　　　INPUT
　　　text_id
　　　text_id
　　　submit_id
　　　submit_name
　　　form2
</pre>
		由上例看來forms也可以和DOM level 2的各種屬性及方法混用，不過"精通Javascript+jQuery"書中第7-27頁提到：傳統訪問表單元素的方法比較方便向伺服器傳送資料。因為選項案鈕各項之間name的值相同，而id值不同。( 雖然看不懂在寫什麼…但就先記錄下來… )
		</td>
	</tr>
	<tr>
		<td>images</td>
		<td>屬性</td>
		<td>頁面中所有的圖片集合。</td>
	</tr>
	<tr>
		<td>implementation</td>
		<td>屬性</td>
		<td>Returns the DOM implementation of the current document.</td>
	</tr>
	<tr>
		<td>lastModified</td>
		<td>屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>linkColor</td>
		<td>屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>links</td>
		<td>屬性</td>
		<td>頁面中所有的超連結集合(&lt;a href="URL"&gt;&lt;/a&gt;)。</td>
	</tr>
	<tr>
		<td>plugins</td>
		<td>屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>readyState</td>
		<td>屬性</td>
		<td>Returns the loading status of the document. It returns one of the below 4 values:
			<div style="color:dimgray; padding:0 0 0 10px;">
				<span style="display:inline-block; width:100px;">uninitialized :</span>The document hasn't started loading yet.<br />
				<span style="display:inline-block; width:100px;">loading :</span>The document is loading.<br />
				<span style="display:inline-block; width:100px;">interactive :</span>The document has loaded enough whereby user can interact with it.<br />
				<span style="display:inline-block; width:100px;">complete :</span>The document has fully loaded.<br />
			</div>
			Use the onreadystatechange event handler to react whenever the readyState of the document changes. For example:
<pre>
document.onreadystatechange=function(){
	if (document.readyState=="complete"){
		alert("Document loaded fully!");
	}
}
</pre></td>
	</tr>
	<tr>
		<td>referrer</td>
		<td>屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>styleSheets</td>
		<td>屬性</td>
		<td>styleSheets物件是document下的一個屬性，它記載了頁面中的樣式表的陣列，包括使用&lt;style&gt;標籤撰寫的樣式表，以及使用&lt;link&gt;標籤載入的樣式表；使用@import的樣式表或是寫在行內的樣式則不在此列；<br />
			此物件也擁有一系列的屬性、方法及子物件，詳細內容請見"DOM - styleSheets"一節。<br />
			以下的範例將傳回頁面中樣式表的數量及類型：
<pre>
window.onload = function(){
	var s = document.styleSheets;
	alert(s.length +"\n"+ s[0].type);
}
</pre></td>
	</tr>
	<tr>
		<td>title</td>
		<td>屬性</td>
		<td>Specifies the title of the document. Read/write in modern browsers.</td>
	</tr>
	<tr>
		<td>URL</td>
		<td>屬性</td>
		<td>原文：A string that specifies the complete URL of the document.<br>
		獲取目前頁面的URL，或將其設置新的URL，寫法如下。<br />
		例：document.URL="http://www.google.com";<br />
		注意：改變document.URL來實現導航的方法在新式瀏覽器中皆不適用，因此不要使用此屬性，請改用location物件來處理。
		</td>
	</tr>
	<tr>
		<td>vlinkColor</td>
		<td>屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>close()</td>
		<td>方法</td>
		<td></td>
	</tr>
	<tr>
		<td>createAttribute()</td>
		<td>方法</td>
		<td>原文：Creates a new attribute, ready to be inserted somewhere in the document. It returns a reference to the created attribute.<br />
			語法：createAttribute("attributename")<br />
			Example:
<pre>
var styleattr=document.createAttribute("align");
styleattr.nodeValue="center";
document.getElementById("sister").setAttributeNode(styleattr);
</pre></td>
	</tr>
	<tr>
		<td>createComment()</td>
		<td>方法</td>
		<td>原文：Creates an instance of the comment node. Once created, you can then insert it into the document tree using appendChild(), for example.<br />
			語法：createComment(commenttext)<br />
			Example:
<pre>
var commentnode=document.createComment("Copyright JavaScript Kit");
document.getElementById("mydiv").appendChild(commentnode);
</pre></td>
	</tr>
	<tr>
		<td>createDocumentFragment()</td>
		<td>方法</td>
		<td>建立文件檔碎片節點。通常將節點新增到實際頁面中時，頁面就會立即更新並反映這個變化。對於少量的更新是非常實用的，而一旦新增的節點非常多時，頁面執行的效能就會降低。<br />
			通常解決辦法是使用createDocumentFragment()建立一個文件檔碎片，把新的節點先新增到該碎片上，然後再一次性新增到實際的頁面中，如下例：
<pre>
var myArray = ["太空戰士10","太空戰士7","DQ3","DQ8","街","太空戰士4","皇家騎士團2","太空戰士3","DQ7","薩爾達傳說時之笛","DQ5","天外魔境II","櫻花大戰","DQ4","太空戰士5","異域神兵","DQ2","櫻花大戰3","王國之心","快打旋風2","超級瑪莉兄弟","太空戰士8"];
var myBody = document.getElementsByTagName("body")[0];
var myFragment = document.createDocumentFragment();
for(var i=0; i&lt;myArray.length; i++){
	var myDiv = document.createElement("div");
	var myText = document.createTextNode(myArray[i]);
	myDiv.appendChild(myText);
	myFragment.appendChild(myDiv);
}
myBody.appendChild(myFragment);
</pre>
			原文：Creates an empty document fragment. The result is a temporary container for creating and modifying new elements or attributes before introducing the final result to your document tree. This is a very useful method when you're performing multiple operations that add to or modify the document tree. Instead of directly modifying the document tree each time (very inefficient), it's much better to use a temporary "whiteboard" that is created by createDocumentFragment() to perform all your operations on first before finally inserting the result to the document tree. For example:
<pre>
&lt;div id="sister"&gt;&lt;/div&gt;

&lt;script type="text/javascript"&gt;
var docfrag=document.createDocumentFragment();
var mydiv=document.createElement("div");
var divtext=document.createTextNode("This is div text");
mydiv.appendChild(divtext);
docfrag.appendChild(mydiv);
document.getElementById("sister").appendChild(docfrag) //div now reads "this is div text";
&lt;/script&gt;
</pre></td>
	</tr>
	<tr>
		<td>createElement()</td>
		<td>方法</td>
		<td>建立元素節點；document物件，要寫成document.createElement()；可以配合appendChild()等的DOM方法將新建立的節點插入文件內，如下例將在&lt;body&gt;中插入一個&lt;P&gt;：<br />
<pre>
var myBody = document.getElementsByTagName("body");
var newObj = document.createElement("p"); //先將建立好的&lt;P&gt;存到一個變數中
myBody[0].appendChild(newObj);
</pre>
			範例2：
<pre>
var textblock=document.createElement("p");
textblock.setAttribute("id", "george");
textblock.setAttribute("align", "center");
document.body.appendChild(textblock);
</pre></td>
	</tr>
	<tr>
		<td>createTextNode()</td>
		<td>方法</td>
		<td>建立文字節點。<br />
			原文：Creates a new text node, which can then be added to an element in the document tree. For example:
<pre>
var headertext=document.createTextNode("Welcome to JavaScript Kit");
document.getElementById("mytitle").appendChild(headertext);
</pre></td>
	</tr>
	<tr>
		<td>elementFromPoint()</td>
		<td>方法</td>
		<td>傳回指定座標上的一個元素。<br>
		語法：elementFromPoint(x,y)<br>
		上述之座標是由瀏覽器內window元素的左上角算起，超出此範圍皆不成立，例如座標值設為負值或超出視窗可視範圍；另外如果指定的座標上有一個以上的元素，此方法會傳回符合座標中z-index最上層的元素，如下例點擊連結後alert將傳回div2，並且div2底色改為紅色：
<pre>
&lt;a href="javascript:;"&gt;改變座標位於x220,y220之元素的底色&lt;/a&gt;
&lt;div style="position:absolute; left:180px; top:180px; background:green; width:200px; height:200px;"&gt;div1&lt;/div&gt;
&lt;div style="position:absolute; left:190px; top:190px; background:blue; width:200px; height:200px;"&gt;div2&lt;/div&gt;
&lt;script&gt;
	document.getElementsByTagName('a')[0].onclick = function(){
		var po=document.elementFromPoint(220, 220);
		po.style.background='red';
		alert(po.innerText);
	}
&lt;/script&gt;
</pre>
		網路上某些文章表示Google Chrome不支援此方法(包括下列原文的Javascript Kit說明也是)，但實測後是可執行的，可能是新版Chrome把它加入了吧。<br><br>
		原文：Supported in IE, FF3+, and Opera9+<br />
		Returns the element at the designated coordinates relative to the upper left corner of the browser window's viewport. As you scroll the document, the same coordinates (ie: x:20,y:20) may point to a different element as a result.<br />
		The following displays in the browser's title bar the element the mouse is currently over:
<pre>
document.onmousemove=function(e){
	var evt=window.event || e;
	var elfrompoint=document.elementFromPoint(evt.clientX, evt.clientY);
	document.title=elfrompoint.tagName;
}
</pre></td>
	</tr>
	<tr>
		<td>getComputedStyle()</td>
		<td>方法</td>
		<td>取得指定元素的風格表物件實際的CSS屬性值，不論他們是使用行內CSS設定，或是global/external stylesheets設定；IE不支援，IE使用currentStyle。<br />
			語法：window.getComputedStyle(元素物件, 假元素);<br />
			元素物件是 HTML 元素的物件。假元素是字串，一般元素設為 null。此方法傳回風格表物件。此法取得的風格表物件是唯讀的，如要更改元素的風格表，則要用 元素物件.style.特徵。<br />
			範例：document.write(getComputedStyle(mySpan,null).color);<br /><br />
			原文：Firefox/W3C only method that returns a style object containing the actual CSS property values added to an element, whether they are set using inline CSS or global/external stylesheets. To get the value to a specific cascaded CSS property, you'd just look up that property within the returned object. Note that while window.getComputedStyle() is supported in Firefox, Safari only supports document.defaultView.getComputedStyle() (with Firefox supporting both methods). For maximum compatibility then, you should use the later method.<br /><br />
			The following example shows how to retrieve the value of the CSS property "padding", applied to the element via external style sheet:
<pre>
&lt;head&gt;
&lt;style type="text/css"&gt;
#adiv{padding: 10px;}
&lt;/style&gt;
&lt;/head&gt;

&lt;body&gt;
&lt;div id="adiv"&gt;This is some text&lt;/div&gt;

&lt;script type="text/javascript"&gt;
	var mydiv=document.getElementById("adiv");
	var actualstyle=document.defaultView.getComputedStyle(mydiv, "");
	var divpadding=actualstyle.padding //contains "10px";
&lt;/script&gt;
&lt;/body&gt;
</pre></td>
	</tr>
	<tr>
		<td>getElementById()</td>
		<td>方法</td>
		<td>document物件，要寫成document.getElementById()；利用html中id名稱訪問某個指定元素；標準的html文件id都是唯一的，所以訪問的對像也只會有一個。<br />
			例如下例中的li指定了id，則可以直接訪問：
<pre>
var findID = document.getElementById("css");
alert(findID.tagName+" - "+findID.childNodes[0].nodeValue);}

&lt;ul&gt;
	&lt;li&gt;HTML&lt;/li&gt;
	&lt;li&gt;Javascript&lt;/li&gt;
	&lt;li id="css"&gt;CSS&lt;/li&gt;
&lt;/ul&gt;
&lt;ul&gt;
	&lt;li&gt;ASP&lt;/li&gt;
	&lt;li&gt;JSP&lt;/li&gt;
	&lt;li&gt;PHP&lt;/li&gt;
&lt;/ul&gt;
</pre>
			另外我們也可以指定一個document.getElementById()指定一個物件，再以getElementsByTagName()[n]來指定其中的某一個子元素，如下例：
<pre>
var links = document.getElementById("friedslink").getElementsByTagName("a")[0];
</pre></td>
	</tr>
	<tr>
		<td>getElementsByClassName()</td>
		<td>方法</td>
		<td>返回一組含有指定Class名稱的元素陣列，如下例：
<pre>
document.getElementsByClassName("cats"); //取得有"cast" class name的元素集合
</pre>
			如果某些元素有一個以上的class名稱，我們可以用空格將們隔開來選取這些元素，如下例：
<pre>
document.getElementsByClassName("animal cats"); //取得同時有"animal"和"cats" class name的元素集合
</pre>
			我們也可以指定一個根元素，再取得該元素內的子元素，如下例：
<pre>
document.getElementsByTagName('ul')[0].getElementsByClassName('cat')[0];
</pre>
			getElementsByClassName()只有到IE9才正式支援，IE9以下的版本只能用自定的函數來處理，下面列出一個網路上寫的非常好的範例：
<pre>
(function(){
	if (!document.getElementsByClassName) {
		var indexOf = [].indexOf || function(prop) {
			for (var i = 0; i &lt; this.length; i++) {
				if (this[i] === prop) return i;
			}
			return -1;
		};
		getElementsByClassName = function(className,context) {
			var elems = document.querySelectorAll ? context.querySelectorAll("." + className) : (function() {
				var all = context.getElementsByTagName("*"),
					elements = [],
					i = 0;
				for (; i &lt; all.length; i++) {
					if (all[i].className &amp;&amp; (" " + all[i].className + " ").indexOf(" " + className + " ") > -1 &amp;&amp; indexOf.call(elements,all[i]) === -1) elements.push(all[i]);
				}
				return elements;
			})();
			return elems;
		};
		document.getElementsByClassName = function(className) {
			return getElementsByClassName(className,document);
		};
		Element.prototype.getElementsByClassName = function(className) {
			return getElementsByClassName(className,this);
		};
	}
})();
</pre>
<pre style="text-decoration:line-through;">
document.getElementsByClassName = function(eleClassName){
	var getEleClass = [];//定義一個陣列
	var myclass = new RegExp("\\b"+eleClassName+"\\b");//創建一個規則運算式對像
	var elem = this.getElementsByTagName("*");//獲取文檔裡所有的元素
	for(var h=0;h&lt;elem.length;h++){
		var classes = elem[h].className;//獲取class對像
		if(myclass.test(classes)){
			getEleClass.push(elem[h]);//正則比較，取到想要的CLASS對像
		}
	}
	return getEleClass;//返回陣列
}
</pre>
		</td>
	</tr>
	<tr>
		<td>getElementsByName()</td>
		<td>方法</td>
		<td>原文：Returns an array of elements with a name attribute whose value matches that of the parameter's. In IE6, elements with an ID attribute of the matching value will also be included in the array, and getElementsByName() is limited to retrieving form objects such as checkboxes and INPUT. In Firefox, nither of these "pitfalls" apply.
<pre>
&lt;div name="george"&gt;f&lt;/div&gt;
&lt;div name="george"&gt;f&lt;/div&gt;

&lt;script type="text/javascript"&gt;
var georges=document.getElementsByName("george")
for (i=0; i&lt; georges.length; i++)
// do something with each DIV tag with name="george". Firefox only.
&lt;/script&gt;
</pre></td>
	</tr>
	<tr>
		<td>getElementsByTagName()</td>
		<td>方法</td>
		<td>document物件，要寫成document.getElementsByTagName()；利用標籤名取得元素物件的清單。<br />
			用來返回一個包含某個相同標籤名元素的NodeList；例如&lt;img&gt;標記的標籤名為img。<br />
			下列範例(1)返回文件中所有的&lt;li&gt;元素清單：
<pre>
var allLi = document.getElementsByTagName("li");
</pre>
			要注意的是，文件檔的DOM結構必須在整個文件檔載入完成後才能正確分析出來，因此上例必須在頁面完全載入後才能生效，如範例(2)所示。
<pre>
window.onload = function(){
	allLi = document.getElementsByTagName("li");
	alert(allLi.length+" - "+allLi[0].tagName+" - "+allLi[3].childNodes[0].nodeValue);
}

&lt;ul&gt;
	&lt;li&gt;HTML&lt;/li&gt;
	&lt;li&gt;Javascript&lt;/li&gt;
	&lt;li&gt;CSS&lt;/li&gt;
&lt;/ul&gt;
&lt;ul&gt;
	&lt;li&gt;ASP&lt;/li&gt;
	&lt;li&gt;JSP&lt;/li&gt;
	&lt;li&gt;PHP&lt;/li&gt;
&lt;/ul&gt;
</pre>
			原文：Returns an array of elements whose tag name matches the parameter. In Firefox/ IE6+, you may enter an asterisk ("*") as the parameter to retrieve a list of all elements within the document.
<pre>
var ptags=document.getElementsByTagName("p");
var alltags=document.getElementsByTagName("*"); //returns all elements on page
</pre></td>
	</tr>
	<tr>
		<td>open()</td>
		<td>方法</td>
		<td></td>
	</tr>
	<tr>
		<td>querySelector()</td>
		<td>方法</td>
		<td>語法：querySelector(selectors, [NSResolver])<br />
			原文：Currently supported in FF3.1+, IE8+ (only in IE8 standards mode), and Safari 3.1+<br />
			Accepts a CSS selector(s) and returns the first matching element (based on the document tree) within the document, or null. For Example:
<pre>
&lt;ul id="mylist"&gt;
&lt;li&gt;Item 1&lt;/li&gt;
&lt;li&gt;Item 2&lt;/li&gt;
&lt;li&gt;Item 3&lt;/li&gt;
&lt;/ul&gt;

&lt;script type="text/javascript"&gt;
var item2=document.querySelector('#mylist li:nth-of-type(2)')
alert(item2.innerHTML) //alerts "Item 2"
&lt;/script&gt;
</pre>
			You can enter multiple CSS selectors each separated by a comma (,), in which case the first matching element of any of the CSS selectors entered will be returned:
<pre>
//returns either element "#leftcolumn" or "#rightcolumn", depending on which one is found first:
document.querySelector("#leftcolumn, #rightcolumn")
</pre>
			querySelector() supports an optional 2nd "NSResolver" parameter to resolve namespace prefixes in XHTML documents. Not supported in IE8.</td>
	</tr>
	<tr>
		<td>querySelectorAll()</td>
		<td>方法</td>
		<td>語法：querySelectorAll(selectors, [NSResolver])<br />
			原文：Currently supported in FF3.1+, IE8+ (only in IE8 standards mode), and Safari 3.1+<br />
			Accepts a CSS selector(s) and returns all matching elements (based on the document tree) within the document as a staticNodeList, or null. A staticNodeList is a static collection of elements that are not affected by any subsequent changes occuring on the document tree. For example:
<pre>
&lt;ul id="mylist"&gt;
&lt;li&gt;Item 1&lt;/li&gt;
&lt;li&gt;Item 2&lt;/li&gt;
&lt;li&gt;Item 3&lt;/li&gt;
&lt;/ul&gt;

&lt;script type="text/javascript"&gt;
var odditems=document.querySelectorAll('#mylist li:nth-of-type(odd)')
for (var i=0; i&lt;odditems.length; i++)
 alert(odditems[i].innerHTML) //alerts "Item 1", "Item 3" etc.
&lt;/script&gt;
</pre>
			You can enter multiple CSS selectors each separated by a comma (,), in which case all matching elements found using the entered CSS selectors will be returned:
<pre>
//returns both elements "#leftcolumn" or "#rightcolumn", or one of them if only one defined:
document.querySelectorAll("#leftcolumn, #rightcolumn")
</pre>
			querySelectorAll() supports an optional 2nd "NSResolver" parameter to resolve namespace prefixes in XHTML documents. Not supported in IE8.<br />
			See "<a href="http://www.javascriptkit.com/dhtmltutors/structuralcss.shtml" target="_blank">Overview of CSS3 Structural puesdo-classes</a>" for advanced CSS selectors you can use with the query selector methods.</td>
	</tr>
	<tr>
		<td>write()</td>
		<td>方法</td>
		<td>在html中插入內容，&lt;script&gt;&lt;/script&gt;寫在哪就插在哪，參數中可以是字串或是算式等。<br />
			要注意如果document.write()是被放在window.onload = function(){}的函數裡，在文件一載入時document.write()會把原本的的內容全部覆蓋掉。</td>
	</tr>
	<tr>
		<td>writeln()</td>
		<td>方法</td>
		<td></td>
	</tr>
</table>
 </main>
</body>
</html>