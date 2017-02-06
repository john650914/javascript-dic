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
<meta name="keywords" content="Javascript,DOM,物件,object,字典,方法,屬性,使用說明,文件,範例" />
<meta name="description" content="提供完整的DOM物件及其方法、屬性的說明文件與範例" />
<title>DOM Elements - Javascript字典</title>
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
<h1>Javascript - DOM Elements</h1>
	<?php include("../includes/adsense.php"); ?>
<table class="doc-table">
	<tr>
		<th>名稱</th>
		<th>類形</th>
		<th>說明</th>
	</tr>
	<tr>
		<td>DOM</td>
		<td>物件</td>
		<td>DOM廣義來說指的就是所有html元素的集合，你可以使用JavaScript訪問並處理所有的HTML DOM對象(除了內置的JavaScript對像以外)。HTML DOM是W3C標準(是HTML 文檔對像模型的英文縮寫，Document Object Model for HTML)。HTML DOM定義了用於HTML的一系列標準的對象，以及訪問和處理HTML文檔的標準方法。通過DOM，可以訪問所有的HTML元素，連同它們所包含的文本和屬性。可以對其中的內容進行修改和刪除，同時也可以創建新的元素。HTML DOM獨立於平台和編程語言。它可被任何編程語言諸如Java、JavaScript和VBScript使用。<br><br>
			在DOM模型中，HTML文檔的層次結構被表示為樹形結構，HTML文檔的樹形表示主要包含表示元素或標記的節點和標識文本串的節點構成。在Javascript DOM中，Node常常被翻譯成節點。在前端開發中，經常要通過javascript來獲取頁面中某個DOM元素，然後更新該元素的樣式、內容等。如何獲取要更新的元素，是首先要解決的問題。令人欣慰的是，Javascript提供了許多拜訪DOM節點的方法。在DOM - Element一節中有詳細說明。在DOM中有三種節點，分別是元素節點、文字節點和屬性節點。<br><br>
			元素節點：可以說整個DOM模型都是由元素節點(element node)構成的，包括&lt;html&gt;、&lt;body&gt;、&lt;meta&gt;、&lt;h2&gt;、&lt;p&gt;、&lt;li&gt;等都是元素節點。元素節點可以包含其它的元素，例如&lt;li&gt;都是包含在&lt;ul&gt;中，唯一沒有被包含的就只有根頁目(html)。<br><br>
			文字節點：在HTML中光由標籤搭建框架是不夠的，頁面的最終目的是向使用者展示內容。例如在&lt;h2&gt;中的標題文字，這樣具體的文字在DOM模型中稱之為文字節點(text node)。在XHTML文件裡，文字節點是被包含在元素節點的內部，但並不是所有的元素節點都包含文字節點，例如&lt;ul&gt;裡就沒有直接包含任何文字節點，只是包含了一些&lt;li&gt;元素，&lt;li&gt;中才包含文字節點。<br><br>
			屬性節點：HTML文件中的元素或多或少都會有一些屬性，例如機乎所有的元素都有一個title屬性。開發者可以利用這些屬性來對包含在元素裡的物件做出更準確的描述，例如&lt;a title="CSS" href="http://www.css-dic.com"&gt;My CSS Dictionary&lt;/a&gt;中的 title="CSS" 和 href="http://www.css-dic.com" 就分別是兩個屬性節點(attribute node)。由於屬性總是寫在標籤的行內，因此屬性節點總是被包含在元素節點中。<br><br>
			<span style="background:#e0e0e0;">Javascript的documnet物件提供了一系列獲取DOM的方法，如getElementById、getElementsByTagName等，詳細使用方法見document物件說明。</span><br><br>
			有許多屬性、事件和方法是共用的，本字典中的各元素屬性只大約列出相關聯的屬性和方法，其它要實際try過。
			</td>
	</tr>
	<tr>
		<td>accessKey</td>
		<td>屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>attributes</td>
		<td>屬性</td>
		<td>
			包含一個元素特性的Attr物件，存放元素所有設定的屬性，僅適用於元素節點；該屬性返回NameNodeMap類型。<br>
			原文：Returns an array (NamedNodeMap) containing all the attributes defined for the element in question, including custom attributes. IE6 returns not just attributes explicitly defined by the webmaster, but those of the element's internal DTD as well. In Firefox, attributes work more as expected, returning only user defined attributes, and even reflect changes done by scripting to an attribute.<br>
			Each attribute element returned supports a name and value property to retrieve additional information about the attribute. For example:
<pre>
var imageattributes=document.getElementById("myimage").attributes;
imageattributes[0].name; //name of the first attribute of "myimage"
imageattributes[0].value; //value of the first attribute of "myimage"
imageattributes.getNamedItem("src").value; //value of the "src" property of "myimage"
</pre>
		</td>
	</tr>
	<tr>
		<td>childNodes</td>
		<td>屬性</td>
		<td>
			所有子節點的列表，方法item[i]可以訪問第i+1個節點；該屬性返回NodeList類型。<br>
			原文：Returns an array of all of the child nodes of an element as objects. Use the properties "nodeName" and "nodeType" to retrieve additional information about a node. For example:
<pre>
//access some &lt;ul&gt; element
var mylist=document.getElementById("mylist")
for (i=0; i&lt;mylist.childNodes.length; i++){
if (mylist.childNodes[i].nodeName=="LI")
//do something
}
</pre>
		</td>
	</tr>
	<tr>
		<td>className</td>
		<td>屬性</td>
		<td>修改元素的class名稱，連IE7都可以用；請見下例：
<pre>
window.onload = function(){
	document.getElementsByTagName("p")[0].onclick = function(){
		var myP = document.getElementsByTagName("p")[0];
		myP.className = "style2";
	}
}
&lt;p class="style1"&gt;文字內容&lt;/p&gt;
</pre>
			在瀏覽器中觀察就可以看到&lt;P&gt;的style1換成了style2，但有個問題，我們有時後需要保留原本的class名稱，如此程式必需改寫成：myP.className += " style2";}，記得不要漏了style2前面的空格。<br>
			原文：Returns the CSS class attribute of an element. Read/write. For example:
<pre>
document.getElementById("test").className="class1"; //Assign the class "class1" to element
document.getElementById("test").className+=" class2"; //Assign an additional "class2" class to element
</pre>
			原文：Returns the CSS class attribute of an element. Read/write. For example:
<pre>
document.getElementById("test").className="class1"; //Assign the class "class1" to element
document.getElementById("test").className+=" class2"; //Assign an additional "class2" class to element
</pre>
		</td>
	</tr>
	<tr>
		<td>clientHeight</td>
		<td>屬性</td>
		<td>傳回元素內容區域的實際高度，此高度包含padding，不包含borders、margins或是scrollBars及overflow的內容，單位為像素。<br>
			範例：
<pre>
var pageHeight=document.body.clientHeight;
</pre>
			原文：A cross browser (NS7+, IE4+) property that returns the viewable height of the content on the page, not including borders, margins, or scrollbars (overflowing content).
		</td>
	</tr>
	<tr>
		<td>clientWidth</td>
		<td>屬性</td>
		<td>傳回元素內容區域的實際寬度，此寬度包含padding，不包含borders、margins或是scrollBars及overflow的內容，單位為像素。<br>例如：<br>
<pre>
var pagewidth=document.body.clientWidth;
</pre>
			原文：A cross browser (NS7+, IE4+) property that returns the viewable width of the content on the page, not including borders, margins, or scrollbars (overflowing content).
		</td>
	</tr>
	<tr>
		<td>dir</td>
		<td>屬性</td>
		<td>
			原文：Read/write property that returns the text direction of the element. Valid values are "ltr" (left to right) and "rtl" (right to left). Default is "ltr." For example:
<pre>
document.getElementById("mydiv").dir="rtl"; //change text direction
</pre>
		</td>
	</tr>
	<tr>
		<td>disabled</td>
		<td>屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>firstChild</td>
		<td>屬性</td>
		<td>
			指向childNodes列表中的第一個節點；該屬性返回Node類型。<br>
			原文：Returns a reference to the first child of an element.
		</td>
	</tr>
	<tr>
		<td>height</td>
		<td>屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>id</td>
		<td>屬性</td>
		<td>
			原文：Read/write property that reflects the ID attribute of an element. Use this property to access any element on the page easily.
		</td>
	</tr>
	<tr>
		<td>innerHTML</td>
		<td>屬性</td>
		<td>innerHTML原為非標準的DOM屬性，由於使用方便，目前也得到了主流瀏覽器的支援；它作用為表示某個標記之間的所有內容，包括程式碼本身，連IE7都可以使用。此屬性可以讀取，同時也可以設置，如下例：
<pre>
var myP = document.getElementsByTagName("div")[0];
alert("按下確定將改變&lt;div&gt;的內容");
myP.innerHTML = "&lt;table border=1&gt;&lt;tr&gt;&lt;td&gt;table&lt;/td&gt;&lt;td&gt;table&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;table&lt;/td&gt;&lt;td&gt;table&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;";

&lt;p style="color:red;"&gt;這是原本的內容，有一個&lt;P&gt;，有style屬性，有這些文字。&lt;/p&gt;
</pre>
			這裡需要注意的是innerHTML屬性並不是W3C DOM標準組成部份，雖然在插入大段HTML內容時它可以又快又簡捷地完成倀務，但它不會返回任何對剛插入的內容進行處理事件的物件。如果需要對剛插入的內容進行處理，還是需要標準DOM方法。<br>
			原文：A cross browser (non W3C DOM) property that lets you easily change the HTML contents of an element. Generally this property can only be invoked after the document has fully loaded. For example:
<pre>
&lt;p&gt;&lt;b&gt;Old paragraph text&lt;/b&gt;&lt;/p&gt;
&lt;script type="text/javascript"&gt;
window.onload=function(){
	document.getElementsByTagName("p")[0].innerHTML="&lt;b&gt;new paragraph text&lt;/b&gt;"
}
&lt;/script&gt;
</pre>
		</td>
	</tr>
	<tr>
		<td>innerText</td>
		<td>屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>lang</td>
		<td>屬性</td>
		<td>
			原文：Read/write property that specifies the language of an element's attribute values and text content. Commonly invoked on the body level to determine the base language of the document.
		</td>
	</tr>
	<tr>
		<td>lastChild</td>
		<td>屬性</td>
		<td>
			指向childNodes列表中的最後一個節點；該屬性返回Node類型。
			原文：Returns a reference to the last child of an element.
		</td>
	</tr>
	<tr>
		<td>length</td>
		<td>屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>localName</td>
		<td>屬性</td>
		<td>
			原文：Returns the name of the node of an XML element. Equivilant to the nodeName property for regular HTML elements.
		</td>
	</tr>
	<tr>
		<td>namespaceURI</td>
		<td>屬性</td>
		<td>
			原文：Returns the URI string assigned to the xmlns attribute of an XML element.
		</td>
	</tr>
	<tr>
		<td>nextSibling</td>
		<td>屬性</td>
		<td>指向後一個兄弟節點，如果該節點己經是最後一個節點，則返回null；該屬性返回Node類型。<br>
			在DOM模型中有許多的white space(空白字元)會被當做是沒有內容的文字節點(text node)，但在IE中又乎略這些節點(直到IE9才加入)，這樣會造成nextSibling在不同瀏覽器獲得的節點是不一樣的；<br>
			為了修正這個問題必需用nodeType屬性來做判斷，並撰寫相關的自訂函數，如下例：
<pre>
function nextSib(node){
var tempLast = node.parentNode.lastChild;
if(node == tempLast){return null;}//IE
var tempObj = node.nextSibling;
while(tempObj.nodeType!=1 && tempObj.nextSibling!=null){tempObj = tempObj.nextSibling;}
return (tempObj.nodeType==1)?tempObj:null;}

window.onload = function(){
var myItem = document.getElementById("myLI");
var nextListItem = nextSib(myItem);//獲得html LI元素物件
if(nextListItem!=null){nextListItem = nextListItem.firstChild.nodeValue;}else{nextListItem = null;}
alert("下一個是"+nextListItem);}
</pre>
			原文：Returns the next node following the current one. Returns null if there are none or for text nodes inside an element.
		</td>
	</tr>
	<tr>
		<td>nodeName</td>
		<td>屬性</td>
		<td>
			節點名稱，根據節點的類型而定義；該屬性返回String類型。<br>
			原文：Returns a string indicating the name of the node, in the case of elements, its tag name. Returned value is in uppercase. For example:
<pre>
if (document.getElementById("test").firstChild.nodeName=="DIV"){
	alert("This is a DIV");
}
</pre>
		</td>
	</tr>
	<tr>
		<td>nodeType</td>
		<td>屬性</td>
		<td>節點類型，常數(整數)值之一；該屬性返回Number類型。<br>
			透過節點的nodeType屬性可以檢測出節點的類型。該屬性返回一個代表節點類型的整數值，總共有12個可取的值，例如：alert(document.nodeType);就會傳回9，代表DOCUMENT_NODE節點。<br>
			然而實際上，大多數情況下，真正有用的只有3種節點，即元素節點、文字節點和屬性節點，在"DOM物件"一節中有詳細說明。<br>
			這意味著可以對某種類型的節點做單獨的處理，這在過濾節點的時後候非常的實用。<br>
			例如alert(document.nodeType);就會傳回9<br>
			下面列出所有節點類型的對應值：
			<div style="padding:0 0 0 10px;">
				<span style="display:inline-block; width:220px;">節點類型 :</span>傳回值 :<br>
			</div>
			<div style="color:dimgray; padding:0 0 0 10px;">
				<span style="display:inline-block; width:220px;">ELEMENT_NODE</span>1<br>
				<span style="display:inline-block; width:220px;">ATTRIBUTE_NODE</span>2<br>
				<span style="display:inline-block; width:220px;">TEXT_NODE</span>3<br>
				<span style="display:inline-block; width:220px;">CDATA_SECTION_NODE</span>4<br>
				<span style="display:inline-block; width:220px;">ENTITY_REFERENCE_NODE</span>5<br>
				<span style="display:inline-block; width:220px;">ENTITY_NODE</span>6<br>
				<span style="display:inline-block; width:220px;">PROCESSING_INSTRUCTION_NODE</span>7<br>
				<span style="display:inline-block; width:220px;">COMMENT_NODE</span>8<br>
				<span style="display:inline-block; width:220px;">DOCUMENT_NODE</span>9<br>
				<span style="display:inline-block; width:220px;">DOCUMENT_TYPE_NODE</span>10<br>
				<span style="display:inline-block; width:220px;">DOCUMENT_FRAGMENT_NODE</span>11<br>
				<span style="display:inline-block; width:220px;">NOTATION_NODE</span>12<br>
			</div>
			原文：Returns an integer indicating the type of a node. For example:
<pre>
alert(document.getElementById("adiv").nodeType); //DIV element. Alerts 1
</pre>
			Consider the following HTML code:
<pre>
&lt;div id="adiv"&gt;&lt;b&gt;Some text&lt;/b&gt;&lt;/div&gt;
&lt;script type="text/javascript"&gt;
alert(document.getElementById("adiv").nodeType) //DIV element. Alerts 1
alert(document.getElementById("adiv").firstChild.nodeType) //B element. Alerts 1
&lt;/script&gt;
</pre>
			With the above HTML block, you don't really need the "nodeType" property  to tell you the types of the three nodes you're accessing. But consider this slightly modified example:
<pre>
&lt;div id="adiv"&gt; &lt;b&gt;Some text&lt;/b&gt;&lt;/div&gt;
&lt;script type="text/javascript"&gt;
alert(document.getElementById("adiv").nodeType) //DIV element. Alerts 1
alert(document.getElementById("adiv").firstChild.nodeType) //Alerts 1 or 3, depending on browser.
&lt;/script&gt;
</pre>
			Here I've added a blank space in front of the B element. To some browsers such as Firefox, a blank space is considered a text node (nodeType=3) just like regular text, while in others such as IE, they are not. Due to this, "the next node" after the DIV element varies depending on which browser you ask, with Firefox saying it's a text node, while IE says it's an element node (B element). Without the help of the nodeType property when traversing the document, your script may very well lose its place.
		</td>
	</tr>
	<tr>
		<td>nodeValue</td>
		<td>屬性</td>
		<td>
			節點的值，根據節點的類型而定義；該屬性返回String類型。<br>
			原文：Read/write property that reflects the value of a node. For text nodes, the content of the node is returned, while for attribute nodes, the attribute value. Null is returned for Document and element nodes. Use this property to alter the contents of a text or attribute node. For example:
<pre>
&lt;body&gt;
&lt;div id="test"&gt;Old text&lt;/div&gt;

&lt;script type="text/javascript"&gt;
if(document.getElementById("test").firstChild.nodeName=="#text")
document.getElementById("test").firstChild.nodeValue="New text"
&lt;/script&gt;
</pre>
		</td>
	</tr>
	<tr>
		<td>offsetHeight</td>
		<td>屬性</td>
		<td>
			傳回一個元素的高度，這個高度包含borders、padding，但不包含margin。在IE6如果沒有設置有效的文件類型的話(doctype)，傳回的值將不包含padding。<br>
			以下範例(1)將傳回offsetHeight:40及clientHeight:20。<br>
			範例1：
<pre>
&lt;div style="padding:10px; border:10px solid red; float:left;"&gt;&lt;span&gt;&lt;/span&gt;&lt;/div&gt;
&lt;script&gt;
	var div = document.getElementsByTagName('div')[0];
	alert('offsetHeight : '+div.offsetHeight);
	alert('clientHeight : '+div.clientHeight);
&lt;/script&gt;
</pre>
		</td>
	</tr>
	<tr>
		<td>offsetLeft</td>
		<td>屬性</td>
		<td>Gets the horizontal offset position of the current element relative to its offset container. Read only. Use "offsetParent" to determine what an element's container is. Typically a positioned DIV or TABLE will act as an offset container to any element contained inside them.</td>
	</tr>
	<tr>
		<td>offsetParent</td>
		<td>屬性</td>
		<td>Returns the offset container of the current element. For most elements on the page, the "BODY" is their offset container. However, a positioned DIV for example creates its own offset container space.<br><br>
			範例：&lt;body&gt;<br>
&lt;div id="master" style="position: relative"&gt;<br>
&lt;div id="slave" style="position: relative"&gt;test&lt;/div&gt;<br>
&lt;/div&gt;<br><br>
&lt;script type="text/javascript"&gt;<br>
alert(document.getElementById("slave").offsetParent.id) //alerts "master"<br>
&lt;/script&gt;<br>
		</td>
	</tr>
	<tr>
		<td>offsetTop</td>
		<td>屬性</td>
		<td>Gets the vertical offset position of the current element relative to its offset container. Read only. Use "offsetParent" to determine what an element's container is.</td>
	</tr>
	<tr>
		<td>offsetWidth</td>
		<td>屬性</td>
		<td>A cross browser (non W3C DOM) property that returns the width of the element, including borders and padding if any, but not margins. In IE6, if a valid doctype is not specified, margins/padding are NOT included in the returned value.</td>
	</tr>
	<tr>
		<td>outerHTML</td>
		<td>屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>ownerDocument</td>
		<td>屬性</td>
		<td>Returns a reference to the document object that contains the current element/node.
<pre>
var ownerdoc=document.getElementById("adiv").ownerDocument;
</pre></td>
	</tr>
	<tr>
		<td>parentNode</td>
		<td>屬性</td>
		<td>
			指向節點的父節點，如果己是根節點，則返回null；該屬性返回Node類型。<br>
			原文：References the node that is the parent of the current one in the document tree.
		</td>
	</tr>
	<tr>
		<td>prefix</td>
		<td>屬性</td>
		<td>
			原文：Returns the namespace prefix of the current XML node, or null if not available.
		</td>
	</tr>
	<tr>
		<td>previousSibling</td>
		<td>屬性</td>
		<td>指向前一個兄弟節點，如果該節點己經是第一個節點，則返回null；該屬性返回Node類型。<br>
			在DOM模型中有許多的white space(空白字元)會被當做是沒有內容的文字節點(text node)，但在IE中又乎略這些節點(直到IE9才加入)，這樣會造成previousSibling在不同瀏覽器獲得的節點是不一樣的；<br>
			為了修正這個問題必需用nodeType屬性來做判斷，並撰寫相關的自訂函數，如下例：
<pre>
function preSib(node){
	var tempFirst = node.parentNode.firstChild;
	if(node == tempFirst){return null;}//IE
	var tempObj = node.previousSibling;
	while(tempObj.nodeType!=1 && tempObj.previousSibling!=null){tempObj = tempObj.previousSibling;}<br>
	return (tempObj.nodeType==1)?tempObj:null;
}

window.onload = function(){
	var myItem = document.getElementById("myLI");
	var preListItem = preSib(myItem);//獲得html LI元素物件
	if(preListItem!=null){preListItem = preListItem.firstChild.nodeValue;}else{preListItem = null;}
	alert("前一個是"+preListItem);
}
</pre>
			原文：Returns the previous node relative the current one in the document tree. Returns null if there are none or for text nodes inside an element.
		</td>
	</tr>
	<tr>
		<td>scrollHeight</td>
		<td>屬性</td>
		<td>
			傳回一個元素整個箱形模型的高度，包含borders、margins、paddings及其可見內容區域。
<pre>
範例：var myScrollHeight = document.body.scrollHeight;
</pre>
			原文：A cross browser (NS7+, IE4+) property that returns the entire width of an element, including any area that may be hidden due to scrollbars. When the element does not contain horizontal scrollbars, its scrollWidth is equal to its clientWidth.
		</td>
	</tr>
	<tr>
		<td>scrollLeft</td>
		<td>屬性</td>
		<td>
		scrollLeft屬性傳回或指定網頁裡某個有顯示捲軸的元素(例如div css設定為overflow:auto;、TEXTAREA等)其捲軸往右拉動的的量，也就是說內容物往左跑出去了多少，以數值來表示，如下範例1：
<pre>
待補，請參考scrollTop
</pre>
		範例2，設定元素的scrollLeft值：
<pre>
document.getElementsByTagName('div')[0].onmousemove = function(){
	this.scrollLeft = this.scrollLeft+1;
}
</pre>
		</td>
	</tr>
	<tr>
		<td>scrollTop</td>
		<td>屬性</td>
		<td>scrollTop屬性傳回或指定網頁裡某個有顯示捲軸的元素(例如div css設定為overflow:auto;、TEXTAREA等)其捲軸往下拉動的的量，也就是說內容物往上跑出去了多少，以數值來表示，如下範例1：
<pre>
&lt;div id="static" style="width:150px; height:150px; position: absolute; border:1px solid yellow; left: 5px;"&gt;Some text&lt;/div&gt;

&lt;script type="text/javascript"&gt;
//Keep "static" always in view on the page
setInterval("document.getElementById('static').style.top=document.body.scrollTop+10+'px'", 50)
&lt;/script&gt;
</pre>
		範例2，設定元素的scrollTop值：
<pre>
document.getElementsByTagName('div')[0].onmousemove = function(){
	this.scrollTop = this.scrollTop+1;
}
</pre>
		註：有的瀏覽器body的scrollTop永遠是0，所以無法指定，如果要指定body的scrollTop的話，可能把html也設定效果就會出來，但最好還是去爬一下文看別人怎麼做…
		</td>
	</tr>
	<tr>
		<td>scrollWidth</td>
		<td>屬性</td>
		<td>
			傳回一個元素整個箱形模型的高度，包含borders、margins、paddings及其可見內容區域。
<pre>
範例：var myScrollHeight = document.body.scrollHeight;
</pre>
			原文：A cross browser (NS7+, IE4+) property that returns the entire width of an element, including any area that may be hidden due to scrollbars. When the element does not contain horizontal scrollbars, its scrollWidth is equal to its clientWidth.
		</td>
	</tr>
	</tr>
	<tr>
		<td>tabIndex</td>
		<td>屬性</td>
		<td>
			Gets/sets the tab order of the current element.
		</td>
	</tr>
	<tr>
		<td>tagName</td>
		<td>屬性</td>
		<td>
			以字串以及大寫型式傳回一個指定元素的名稱，如下例：
<pre>
alert(document.getElementsByTagName('li')[0].tagName);
</pre>
		</td>
	</tr>
	<tr>
		<td>textContent</td>
		<td>屬性</td>
		<td>
		</td>
	</tr>
	<tr>
		<td>title</td>
		<td>屬性</td>
		<td>
			Read/write property that returns the title of the document or "title" attribute of an element when invoked on an element.
		</td>
	</tr>
	<tr>
		<td>width</td>
		<td>屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>addEventListener()</td>
		<td>方法</td>
		<td>此方法IE瀏覽器不支援；addEventListener()它是window的一個屬性，寫的時候可以乎略window，也可以直接在DOM元素下使用它；它能為一個元素加上事件監聽，並且能為該元素加入一個以上的監聽函數，語法如下：<br />
			element.attachEvent('e_name', f_handler, bubble_capture);<br />
			其中e_name表示的事件名稱為'click'、'mousemove'...，而不是IE attachEvent()中使用的'onclick'、'onmouseover'...；<br />
			f_handler即為監聽函數的名稱；這裡使用的是函數的名稱，而不是呼叫函數時加上括弧的寫法。<br />
			另外第3個參數bubble_capture為冒泡階段還是擷取階段，設定true為擷取階段，false則為冒泡階段，第3個參數不能省略。<br />
			補充1：除了加上事件監聽，還有移除事件監聽的removeEventListener()方法可撘配使用。<br />
			補充2：在IE瀏覽器中要使用attachEvent()來加入監聽及detachEvent()來移除監聽。<br /><br />
			範例1，加入/移除事件監聽實例：
<pre>
	function fnClick(){
		alert('我被點擊了');
		myP.removeEventListener('click',fnClick,false); //再點第二次就無效了
	}
	var myP; //宣告為全域變數
	window.onload = function(){
		myP = document.getElementsByTagName('p')[0];
		myP.addEventListener('click',fnClick,false);
	}
</pre>
			範例2，同時新增多個事件監聽函數(要注意某些版本的IE瀏覽器執行監聽函數順序和其它瀏覽器不一樣)：
<pre>
	function fnClick1(){alert('我執行了fnClick1');}
	function fnClick2(){alert('我執行了fnClick2');}
	var myP; //宣告為全域變數
	window.onload = function(){
		myP = document.getElementsByTagName('p')[0];
		myP.addEventListener('click',fnClick1);
		myP.addEventListener('click',fnClick2);
	}
</pre>
			範例3，示範在監聽函數中帶入參數：
<pre>
function dothis(what){alert("Mom says to do " + what);}
if (window.addEventListener){
	window.addEventListener("load", function(){dothis('Your homework');}, false);
	//其實就是把程式寫在function(){}中
}
</pre></td>
	</tr>
	<tr>
		<td>appendChild()</td>
		<td>方法</td>
		<td>將某個節點插入指定元素的子節點之後，中譯為「加入孩子」……… grrr，也就是說將一個新的節點插入指定元素內，而當這個指定元素內含有子節點時，這個新節點會被放在該元素內所有子節點的最後面；語法：appendChild(node)。<br>
			下例將在&lt;body&gt;的結尾中插入一個新的段落：
<pre>
var myBody = document.getElementsByTagName("body")[0];
var newP = document.createElement("p");
var newText = document.createTextNode("新的段落");
newP.appendChild(newText);
myBody.appendChild(newP);
</pre>
			appendChild()的參數也可以是function，如下例：
<pre>
document.body.appendChild(document.createTextNode("aaa"));
</pre>
			另外，javascript沒有定義prependChild()，可以利用下列自訂函數簡單的實現：
<pre>
function prependChild(parent, node){parent.insertBefore(node, parent.firstChild);}
</pre>
			使用方法：直接呼叫該函數，在第一個參數中帶入父元素，在第二個參數帶入新的節點。
		</td>
	</tr>
	<tr>
		<td>attachEvent()</td>
		<td>方法</td>
		<td>此方法只有IE瀏覽器支援，attachEvent()它是window的一個屬性，寫的時候可以乎略window，也可以直接在DOM元素下使用它；它能為一個元素加上事件監聽，並且能為該元素加入一個以上的監聽函數，語法如下：<br />
			element.attachEvent('e_handler', f_handler);<br />
			其中e_handler表示事件的名稱，如'onclick'、'onload'、'onmouseover'...等等；<br />
			f_handler即為監聽函數的名稱；這裡使用的是函數的名稱，而不是呼叫函數時加上括弧的寫法。<br />
			補充1：除了加上事件監聽，還有移除事件監聽的detachEvent()方法可撘配使用。<br />
			補充2：在IE以外的瀏覽器要使用addEventListener()來加入監聽及removeEventListener()來移除監聽。<br /><br />
			範例1，加入/移除事件監聽實例：
<pre>
	function fnClick(){
		alert('我被點擊了');
		myP.detachEvent('onclick',fnClick); //再點第二次就無效了
	}
	var myP; //宣告為全域變數
	window.onload = function(){
		myP = document.getElementsByTagName('p')[0];
		myP.attachEvent('onclick',fnClick);
	}
</pre>
			範例2，同時新增多個事件監聽函數(要注意每個版本的IE瀏覽器執行監聽函數順序不一)：
<pre>
	function fnClick1(){alert('我執行了fnClick1');}
	function fnClick2(){alert('我執行了fnClick2');}
	var myP; //宣告為全域變數
	window.onload = function(){
		myP = document.getElementsByTagName('p')[0];
		myP.attachEvent('onclick',fnClick1);
		myP.attachEvent('onclick',fnClick2);
	}
</pre></td>
	</tr>
	<tr>
		<td>blur()</td>
		<td>方法</td>
		<td>
			原文：Removes keyboard focus from the current element. Used for example to fire the onBlur event handler of an element via scripting.
		</td>
	</tr>
	<tr>
		<td>click()</td>
		<td>方法</td>
		<td>
			原文：Executes a click on a element as if the user manually clicked on it. In most browsers, click() only works on form INPUT elements that's non "submit" or "reset". It can't be used to simulate a click on a link or form submit button.
		</td>
	</tr>
	<tr>
		<td>cloneNode(Boolean)</td>
		<td>方法</td>
		<td>複製文件中的一個指定的節點為一個新的節點(只複製"一個")，這個新的節點可以再使appendChild()加入文件中、或以className屬性來增修其class屬性值，以及其它各種的DOM指令加以運用；cloneNode()有一個Boolean的參數可以設定，設置為true時則會複製該指定節點內的所有子節點，包括文字、屬性、value及其它任何內容資料，設置為false時則只針對該指定的節點做複製，對於該節點內的子節點及資料則一律忽略。<br>
			要注意的是，由於cloneNode()參數設置為true時會將指定的節點做一個完整的複製，當該節點有設置ID屬性時要注意先修改新節點的ID，如此在調用它的時候才不會出現文件中有標籤設置重複ID的情形發生。<br>
			範例1：
<pre>
var div = document.getElementsByTagName('div')[0];
var div_clone = div.cloneNode(true);
div_clone.className = 'new_div';
document.body.appendChild(div_clone);
</pre>
			範例2，建立一個新的段落節點，再將它置入文件中所有的&lt;div&gt;標籤中：
<pre>
var divs = document.getElementsByTagName('div');
var newP = document.createElement('p');
newP.innerHTML = 'a';
for(var i=0; i&lt;divs.length; i++){
	divs[i].appendChild(newP.cloneNode(true));
}
</pre>
		</td>
	</tr>
	<tr>
		<td>detachEvent()</td>
		<td>方法</td>
		<td>請參考attachEvent()；此方法只有IE瀏覽器支援，其它瀏覽器請使用removeEventListener()。</td>
	</tr>
	<tr>
		<td>dispatchEvent(eventObject)</td>
		<td>方法</td>
		<td>
			原文：Not supported in IE, which uses fireEvent() instead.<br>
			Dispatches an event to fire on a node artificially. This method returns a Boolean indicating whether any of the listeners which handled the event called preventDefault (false if called, otherwise, true). IE's equivalent of dispatchEvent() is fireEvent(). For example:
<pre>
&lt;div id="test" onclick="alert('hi')"&gt;Sample DIV.&lt;/div&gt;

&lt;script type="text/javascript"&gt;
//Generate an artificial click event on "test". Fires alert("hi")
var clickevent=document.createEvent("MouseEvents")
clickevent.initEvent("click", true, true)
document.getElementById("test").dispatchEvent(myevent)
&lt;/script&gt;
</pre>
		</td>
	</tr>
	<tr>
		<td>fireEvent()</td>
		<td>方法</td>
		<td></td>
	</tr>
	<tr>
		<td>focus()</td>
		<td>方法</td>
		<td>
			Sets focus on the current node.
		</td>
	</tr>
	<tr>
		<td>getAttribute()</td>
		<td>方法</td>
		<td>取得某元素的指定屬性的屬性值，它只有一個參數(註)，即要查詢的屬性名稱，如果該屬性未設定，則傳回null。<br>
			下例則傳回圖片Title屬性的值：
<pre>
var myImg = document.getElementsBytagName("img")[0];
alert(myImg.getAttribute("title"));
</pre>
			(註)：在ie有第二個參數值可選，它是一個數字旗(整數值)，0、1、2或4，默認第二個參數為0，0表示忽略屬性的大小寫；1表示對大小寫敏感；2表示將屬性當做string返回，並且不支持事情屬性；4表示返回完整的URL的值，但是它僅用於URL的屬性中。…<br>
			您在實際的開發過程當中可能想得到一個標籤內的HREF屬性值，但是當你使用getAttribute("href")方法時，在ie6、ie7返回的卻是完整的網址，<br>
			如href="index.html"則會傳回http://localhost/index.html或是D:/index.html，但我們想要得到的值是index.html，這時候我們必需指定第二個參數為2，將屬性的值當做一個字串返回，如此我們就可以得到預期的效果，也不用擔心第二個參數對其它瀏覽器的引響，因為它們會乎略第二個參數，範例如下：
<pre>
var go=document.getElementById("game").getAttribute("href",2);
alert(go);
</pre>
			另外還有一些簡寫能夠快速得到元素的屬性，請參考下例：
<pre>
&lt;script&gt;
window.onload = function(){
	var myLink = document.getElementsByTagName('a')[0];
	alert(myLink.title);
	alert(myLink['title']);
}
&lt;/script&gt;
&lt;a href="javascript:;" title="this is title"&gt;這是抬頭&lt;/a&gt;
</pre>
		</td>
	</tr>
	<tr>
		<td>getAttributeNS()</td>
		<td>方法</td>
		<td>
			語法：getAttributeNS(namespace, localname)<br>
			原文：Returns the value of the attribute with the given local name and namespace. Applicable in XML documents.
		</td>
	</tr>
	<tr>
		<td>getAttributeNode()</td>
		<td>方法</td>
		<td>
			語法：getAttributeNode(attributename)<br>
			原文：Returns/references the attribute of the current element as a stand only node (not part of document tree). For example:
<pre>
var attributeobj=document.getElementById("nav").getAttributeNode("align");
attributeobj.value="center";
</pre>
		</td>
	</tr>
	<tr>
		<td>getAttributeNodeNS()</td>
		<td>方法</td>
		<td>
			語法：getAttributeNodeNS(namespace, localname)<br>
			原文：Returns/references the attribute of the current element with the given local name and namespace. Applicable in XML documents.
		</td>
	</tr>
	<tr>
		<td>getElementsByTagNameNS()</td>
		<td>方法</td>
		<td>
			語法：getElementsByTagNameNS(namespace, localname)<br>
			原文：Returns as an array all the child elements of the current element with the given local name and namespace. Applicable in XML documents.
		</td>
	</tr>
	<tr>
		<td>hasAttribute()</td>
		<td>方法</td>
		<td>
			語法：hasAttribute(attributename)<br>
			原文：Returns a Boolean value indicating whether the current element contains an attribute (ie: "align"). for example:
<pre>
if (document.getElementById("mytable").hasAttribute("style"))
//manipuate the element's style
</pre>
		</td>
	</tr>
	<tr>
		<td>hasAttributeNS()</td>
		<td>方法</td>
		<td>
			語法：hasAttributeNS(namespace, localname)<br>
			原文：Returns a Boolean value indicating whether the current element contains an attribute with the given local name and namespace. Applicable in XML documents.
		</td>
	</tr>
	<tr>
		<td>hasAtrributes()</td>
		<td>方法</td>
		<td>
			原文：Returns a Boolean value indicating whether the current element has any explicit attributes defined.
		</td>
	</tr>
	<tr>
		<td>hasChildNodes()</td>
		<td>方法</td>
		<td>當childNodes包含一個或多個節點時，返回true；此方法返回Boolean類型。以下範例先獲取&lt;ul&gt;標籤，然後利用hasChildNodes()判斷其是否有子節點，如果有則利用childNodes瀏覽它的所有子節點。例如：
<pre>
var myUL = document.getElementsByTagName("ul")[0];
var myMSG = "";
if(myUL.hasChildNodes()){
	var myULChld = myUL.childNodes;
	for(var i=0; i&lt;myULChld.length; i++){
		myMSG += myULChld[i].nodeName+"  ";
	}
}
alert(myMSG);
</pre>
			範例說明：這個範例最後alert出所有&lt;ul&gt;下的子節點，在較新的瀏覽器連空白的文字節點也會傳回：#text LI #text LI #text LI #text，看起來是合理，但在ie9以前的ie瀏覽器則會乎略空白的文字節點傳回：LI LI LI，要將兩種結果做一個統一的處理需要使用額外的自訂函數，相關範例請見nextSibling及previousSibling。
			原文：Returns a Boolean value indicating whether the current element contains any child nodes.
		</td>
	</tr>
	<tr>
		<td>insertAfter()</td>
		<td>方法</td>
		<td>
			由於DOM Level 2沒有訂義insertAfter()這個方法，我們必需自己寫一套函數來使用，詳細內容請見insertBefore()方法。<br>
			範例如下：
<pre>
&lt;div id="employees"&gt;
&lt;div id="george"&gt;George Doe: Human resources department&lt;/div&gt;
&lt;/div&gt;

To insert a new DIV directly below "george", so the outcome becomes:

&lt;div id="employees"&gt;
&lt;div id="george"&gt;George Doe: Human resources department&lt;/div&gt;
&lt;div id='kevin"&gt;Kevin Lin: Main system administrator&lt;/div&gt;
&lt;/div&gt;

You would do the following:

&lt;script type="text/javascript"&gt;
var newemployee=document.createElement("div");
var oldemployee=document.getElementById("george");
newemployee.setAttribute("id", "kevin");
newemployee.innerHTML="Kevin Lin: Main system administrator";
document.getElementById("employees").insertBefore(newemployee, oldemployee.nextSibling);
&lt;/script&gt;

</pre>
		</td>
	</tr>
	<tr>
		<td>insertBefore()</td>
		<td>方法</td>
		<td>在childNodes中的refnode節點之前插入newnode節點；<br>
			語法：insertBefore(newnode, refnode)<br>
			在己知節點之前插入一個新的節點，這個方法接受兩個參數，第一個是新節點，第二個是目標節點，如下例：
<pre>
var newDiv = document.createElement("div");
var newText = document.createTextNode("這是一個新的段落");
newDiv.appendChild(newText);
newDiv.setAttribute("style","color:red;");
var myP = document.getElementById("myP");
myP.parentNode.insertBefore(newDiv,myP);
</pre>
			另外，由於Javascript沒有定義insertAfter()的方法，所以我們必需以現有的知識編寫自定函數，如下例：
<pre>
function insertAfter(parent, node, referenceNode){
	parent.insertBefore(node, referenceNode.nextSibling);
}

window.onload = function(){
	var myP = document.getElementById("myP");
	var myPParent = myP.parentNode;
	var newP = document.createElement("p");
	var newText = document.createTextNode("這是insertAfter的文字");
	newP.appendChild(newText);
	newP.style.color="blue";
	insertAfter(myPParent, newP, myP);
}
</pre>
網路上還有流傳許多聰明的insertAfter()寫法，請參考下例：
<pre>
function insertAfter(newElement,targetElement){
	var parent=targetElement.parentNode;
	if(parent.lastChild==targetElement){
		parent.appendChild(newElement);
	}
	else{
		parent.insertBefore(newElement,targetElement.nextSibling);
	}
}
</pre>
另外一種寫法：
<pre>
function insertAfter(newEl, targetEl){
	var parentEl = targetEl.parentNode,v;
	(v=targetEl.nextSibling)?parentEl.insertBefore(newEl,v):parentEl.appendChild(newEl);
}
</pre>
或是還可以再更簡單些：
<pre>
function insertAfter(newEl, targetEl){
	targetEl.parentNode.insertBefore(newEl,targetEl.nextSibling);
}
</pre>
<hr />
			語法：insertBefore(newElement, targetElement)<br>
			原文：Inserts a new node "newElement" as a child node of the current node. The "targetElement" property dictates where "newElement" is inserted within the list of child nodes. If set to null, the new element is inserted as the last child node; otherwise, it's inserted right before "targetElement". For example:
<pre>
&lt;div id="employees"&gt;
&lt;div id="george"&gt;George Doe: Human resources department&lt;/div&gt;
&lt;/div&gt;

To insert a new DIV directly above "george", so the outcome becomes:

&lt;div id="employees"&gt;
&lt;div id='kevin"&gt;Kevin Lin: Main system administrator&lt;/div&gt;
&lt;div id="george"&gt;George Doe: Human resources department&lt;/div&gt;
&lt;/div&gt;

You would do the following:

&lt;script type="text/javascript"&gt;

var newemployee=document.createElement("div")
var oldemployee=document.getElementById("george")
newemployee.setAttribute("id", "kevin")
newemployee.innerHTML="Kevin Lin: Main system administrator"
document.getElementById("employees").insertBefore(newemployee, oldemployee)
&lt;/script&gt;
</pre>
			Important: Like many DOM methods that change the structure of the document, insertBefore() can only be called after the page has fully loaded. Doing so before will return strange errors in most browsers!
		</td>
	</tr>
	<tr>
		<td>item()</td>
		<td>方法</td>
		<td>
			語法：item(index)<br>
			原文：Retrieves a node based on its index within the document tree. IE4+ and FireFox1+. For example:
<pre>
&lt;div id="div1"&gt;&lt;/div&gt;
&lt;div id="div2"&gt;&lt;/div&gt;

&lt;script type="text/javascript"&gt;
var mydivs=document.getElementsByTagName("div")
alert(mydivs.item(1).id) //alerts "div2"
&lt;/script&gt;
</pre>
		</td>
	</tr>
	<tr>
		<td>normalize()</td>
		<td>方法</td>
		<td>
			原文(Javascript Kit)：Normalizes the current node and its sub tree.<br><br>
			原文(W3C)：Puts all Text nodes in the full depth of the sub-tree underneath this Node, including attribute nodes, into a "normal" form where only structure (e.g., elements, comments, processing instructions, CDATA sections, and entity references) separates Text nodes, i.e., there are neither adjacent Text nodes nor empty Text nodes. This can be used to ensure that the DOM view of a document is the same as if it were saved and re-loaded, and is useful when operations (such as XPointer [XPointer] lookups) that depend on a particular document tree structure are to be used.<br><br>
			Note: In cases where the document contains CDATASections, the normalize operation alone may not be sufficient, since XPointers do not differentiate between Text nodes and CDATASection nodes.
		</td>
	</tr>
	<tr>
		<td>querySelector()</td>
		<td>方法</td>
		<td>
			語法：querySelector(selectors, [NSResolver])<br>
			原文：Currently supported in FF3.1+, IE8+ (only in IE8 standards mode), and Safari 3.1+<br>
			Accepts a CSS selector(s) and returns the first matching element (based on the document tree) within the invoking element, or null. For example:
<pre>
&lt;ul id="mylist"&gt;
&lt;li&gt;Item 1&lt;/li&gt;
&lt;li&gt;Item 2&lt;/li&gt;
&lt;li&gt;Item 3&lt;/li&gt;
&lt;/ul&gt;

&lt;script type="text/javascript"&gt;
var item2=document.getElementById("mylist").querySelector('li:nth-of-type(2)')
alert(item2.innerHTML) //alerts "Item 2"
&lt;/script&gt;
</pre>
			You can enter multiple CSS selectors each separated by a comma (,), in which case the first matching element of any of the CSS selectors entered will be returned:
<pre>
//returns either element "#leftcolumn" or "#rightcolumn", depending on which one is found first:
myelement.querySelector("#leftcolumn, #rightcolumn")
</pre>
			querySelector() supports an optional 2nd "NSResolver" parameter to resolve namespace prefixes in XHTML documents. Not supported in IE8.
		</td>
	</tr>
	<tr>
		<td>querySelectorAll()</td>
		<td>方法</td>
		<td>
			語法：querySelectorAll(selectors, [NSResolver])<br>
			原文：Currently supported in FF3.1+, IE8+ (only in IE8 standards mode), and Safari 3.1+<br>
			Accepts a CSS selector(s) and returns all matching elements (based on the document tree) within the invoking element as a staticNodeList, or null. A staticNodeList is a static collection of elements that are not affected by any subsequent changes occuring on the document tree. For example:
<pre>
&lt;ul id="mylist"&gt;
&lt;li&gt;Item 1&lt;/li&gt;
&lt;li&gt;Item 2&lt;/li&gt;
&lt;li&gt;Item 3&lt;/li&gt;
&lt;/ul&gt;

&lt;script type="text/javascript"&gt;
var odditems=document.getElementById("mylist").querySelectorAll('li:nth-of-type(odd)')
for (var i=0; i&lt;odditems.length; i++)
 alert(odditems[i].innerHTML) //alerts "Item 1", "Item 3" etc.
&lt;/script&gt;
</pre>
			You can enter multiple CSS selectors each separated by a comma (,), in which case all matching elements found using the entered CSS selectors will be returned:
<pre>
//returns both elements "#leftcolumn" or "#rightcolumn", or one of them if only one defined:
myelement.querySelectorAll("#leftcolumn, #rightcolumn")
</pre>
			querySelectorAll() supports an optional 2nd "NSResolver" parameter to resolve namespace prefixes in XHTML documents. Not supported in IE8.<br>
			See CSS3 Structural puesdo-classes for advanced CSS selectors you can use with the query selector methods.
		</td>
	</tr>
	<tr>
		<td>removeAttribute()</td>
		<td>方法</td>
		<td>
			語法：removeAttribute(attributename)<br>
			原文：Removes an attribute by its name. For example:
<pre>
document.getElementById("test").removeAttribute("href")
</pre>
		</td>
	</tr>
	<tr>
		<td>removeAttributeNode()</td>
		<td>方法</td>
		<td>
			語法：removeAttributeNode(attributereference)<br>
			原文：Remove an attribute by passing in as parameter a reference to the attribute object to remove. It offers an alternate way to removeAttribrute()"for removing attributes, when all you have is a reference to the attribute object in your script. For example:
<pre>
var hrefattr=document.getElementById("test").getAttributeNode("href")
document.getElementById("test").removeAttributeNode(hrefattr)
</pre>
		</td>
	</tr>
	<tr>
		<td>removeAttributeNS()</td>
		<td>方法</td>
		<td>
			語法：removeAttributeNS(namespace, localname)<br>
			原文：Removes an attribute with the specified namespace and localname.
		</td>
	</tr>
	<tr>
		<td>removeChild()</td>
		<td>方法</td>
		<td>
			語法：removeChild(childreference)<br>
			從childNodes中刪除node節點；語法：appendChild(node)；刪除節點是透過父節點來執行的，通常是找到要刪除的節點，然後利用parentNode屬性找到父節點，然後將其刪除，如下例：
<pre>
var myP = document.getElementsByTagName("p");
myP[0].parentNode.removeChild(myP[1]);
</pre>
			或是將自己移除：
<pre>
&lt;div id="onlyDiv"&gt;Only Div&lt;/div&gt;
&lt;script&gt;
	var onlyDiv = document.getElementById('onlyDiv');
	onlyDiv.onclick = function(){
		onlyDiv.parentNode.removeChild(onlyDiv);
	}
&lt;/script&gt;
</pre>
			原文：Removes the child node of the current node. The removed node can then be reinserted elsewhere in the document tree. For example:
<pre>
&lt;div id="father"&gt;
	&lt;div id="child"&gt;A child&lt;/div&gt;
&lt;/div&gt;

&lt;script type="text/javascript"&gt;
var childnode=document.getElementById("child")
var removednode=document.getElementById("father").removeChild(childnode)
&lt;/script&gt;
</pre>
		</td>
	</tr>
	<tr>
		<td>removeEventListener()</td>
		<td>方法</td>
		<td>請參考addEventListener()；IE無此項，IE請使用detachEvent()。</td>
	</tr>
	<tr>
		<td>replaceChild()</td>
		<td>方法</td>
		<td>
			語法：replaceChild(newnode, oldnode)
			將childNodes中的oldnode節點替換成newnode節點；此方法是針對要替換節點的父節點來操作，如下例：
<pre>
var oldP = document.getElementsByTagName("p")[0];
var newP = document.createElement("p");
var newText = document.createTextNode("這是新段落的textNode內容");
newP.appendChild(newText);
oldP.parentNode.replaceChild(newP, oldP);
</pre>
			原文：Replaces one child node of the current node with another child node. For example:
<pre>
&lt;div id="adiv"&gt;&lt;span id="innerspan"&gt;&lt;/span&gt;&lt;/div&gt;

&lt;script type="text/javascript"&gt;
var oldel=document.getElementById("innerspan")
var newel=document.createElement("p")
document.getElementById("adiv").replaceChild(newel, oldel)
&lt;/script&gt;
</pre>
		</td>
	</tr>
	<tr>
		<td>scrollIntoView()</td>
		<td>方法</td>
		<td>Firefox/IE4+ proprietary method that scrolls an element into view. It accepts an optional Boolean parameter that when set to true (default), scrolls the element so its top left corner touches the top of the viewable window. If false, the element's bottom left corner touches the bottom of the window.</td>
	</tr>
	<tr>
		<td>setAttribute()</td>
		<td>方法</td>
		<td>
			設定元素的屬性。其語法是：元素物件.setAttribute(屬性名, 屬性值, 數字旗);，請參考下範例。
<pre>
var myImg = document.getElementsByTagName("img")[0];
myImg.setAttribute("src", "02.jpg");
myImg.setAttribute("title", "我家");
</pre>
			數字旗是IE定義的，其它瀏覽器無此項；加上數字旗對Firefox, Safari, Chrome沒影響。數字旗設為0，代表不分大小寫；設為1則區分大小寫。<br>
			如果要在IE7以下的版本設定style屬性是無效的，如o.setAttribute("style","color:red;");就要用直接給Style值的方式代替，如：o.style.color="red";，如此所有的瀏覽器都接受。<br><br>
			原文：Sets an attribute's value for the current element. If the attribute doesn't exit yet, it creates the attribute first. Otherwise, the existing attribute is modified with the new value. In IE, the following two pitfalls exist:<br>
			To set the "class" attribute, use "className" instead.<br>
			The "attributename" parameter is case sensitive by default in IE . This means if you attempt to set the "align" attribute and "Align" already exists on the element, both will be present as a result. To turn off case sensitivity, set the IE-only 2nd parameter of setAttribute() to 0 (instead of default, which is 1).<br><br>
			For example:
<pre>
document.getElementById("test").setAttribute("title", "JavaScript Kit");
</pre>
		</td>
	</tr>
	<tr>
		<td>setAttributeNS()</td>
		<td>方法</td>
		<td>
			語法：setAttributeNS(namespace, qualifiedname, value)<br>
			原文：Sets or creates an attribute for the current node with the given local name and namespace. Applicable in XML documents.
		</td>
	</tr>
	<tr>
		<td>setAttributeNode()</td>
		<td>方法</td>
		<td>
			語法：setAttributeNode(attributereference)<br>
			原文：Sets or creates an attribute for the current node. "attributereference" should be a reference to a attribute you wish to insert. If an attribute of the same name (as referenced) already exists on the node, it is replaced with the newly inserted one. For example:
<pre>
&lt;div id="brother" style="border:1px solid black; padding: 2px"&gt;Brother&lt;/div&gt;
&lt;div id="sister"&gt;Sister&lt;/div&gt;

&lt;script type="text/javascript"&gt;
var bro=document.getElementById("brother")
var sis=document.getElementById("sister")
var brostyle=bro.getAttributeNode("style")
var clonebrostyle=brostyle.cloneNode(false) //clone attribute first. Required.
sis.setAttributeNode(clonebrostyle)
&lt;/script&gt;
</pre>
		</td>
	</tr>
	<tr>
		<td>supports()</td>
		<td>方法</td>
		<td>
			語法：supports(feature, [version])<br>
			原文：Tests to see if this DOM implementation supports a particular feature.
		</td>
	</tr>
	<tr>
		<td>toString()</td>
		<td>方法</td>
		<td></td>
	</tr>
</table>
 </main>
</body>
</html>