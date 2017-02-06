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
<meta name="keywords" content="Javascript,event,事件,物件,object,字典,方法,屬性,使用說明,文件,範例" />
<meta name="description" content="提供完整的Event物件及其方法、屬性的說明文件與範例" />
<title>Events物件 - Javascript字典</title>
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
<h1>Javascript - Events物件</h1>
	<?php include("../includes/adsense.php"); ?>
<table class="doc-table">
	<tr>
		<th>名稱</th>
		<th>類形</th>
		<th>說明</th>
	</tr>
	<tr>
		<td>Event</td>
		<td>物件</td>
		<td>Javascript裡事件被當作物件來處理，標準DOM中規定event物件必需作為唯一的參數指定給事件處理函數，而在IE中必需以新增變數的方式建立一個事件物件，語法如下：
<pre>
function fnName(eventObj){statement...} //標準DOM
function fnName(){var eventObj = window.event;} //IE瀏覽器
</pre>
		爲了能夠同時相容IE及非IE瀏覽器，必需將兩種語法結合如下的寫法：
<pre>
function fnName(eventObj){
	if(window.event){eventObj = window.event;}
	statement...
}
</pre>
以下為簡易範例：
<pre>
function eFunction(eventObj){
	if(document.all){eventObj = window.event;}
	var $display = document.getElementById('display');
	if(eventObj.type=='click'){$display.innerHTML += 'CLICK ; ';}
	if(eventObj.type=='mouseover'){$display.innerHTML += 'MOUSEOVER ; ';}
	if(eventObj.type=='mouseout'){$display.innerHTML += 'MOUSEOUT ; ';}
}
var $testImg = document.getElementsByTagName('img')[0];
$testImg.onclick = eFunction;
$testImg.onmouseover = eFunction;
$testImg.onmouseout = eFunction;
</pre>
		雖然說window.event是IE的標準，但把eFunction()中的eventObj參數拿掉，再把if(document.all){eventObj = window.event;}改寫成var eventObj = window.event;，實測之後，IE、Opera、Chrome、Safari都可以順利執行，只有Firefox無效，感覺反倒是Firefox被孤立了，這倒是滿奇特的…。
		<div class="red">http://www.javascriptkit.com/jsref/event.shtml</div>
		<div class="red">http://www.study-area.org/coobila/tutorial_279.html</div>
		<div class="red">http://mscerts.programming4.us/programming/coding%20javascript%20for%20mobile%20browsers%20(part%2010)%20-%20event%20handling.aspx</div>
		<div class="red">http://momomolice.com/wordpress/archives/580.html</div>
		<div class="red">http://www.javascriptkit.com/jsref/eventkeyboardmouse.shtml這裡還有Unicode character code對照表</div>
		<div class="red">要再多找一些資料</div>
		<div class="red">還有許多手機用的事件要再來補<br><br></div>
		<div class="red">***還有一件事，嗯…我也不太會講…就是許多的事件屬性，如keypress加上on變成onkeypress就可以直接和函數使用，如window.onkeypress=function();，就和許多其它事件屬性一樣，如onblur、onerror、onload、onresize，這件事我也不太知道要怎麼形容…把什麼都加上on看看，因為每個物件支援的情形不同…，總之就多試試囉***</div>
		</td>
	</tr>
	<tr>
		<td>altKey</td>
		<td>屬性</td>
		<td>標準DOM支援度：yes, R/W<br>
			IE瀏覽器支援度：yes, R/W<br>
			類型：Boolean值<br>
			說明：按下Alt鍵則為true，否則為false。<br>
			原文：Boolean properties that indicate whether the Alt, Ctrl, or Shift keys were pressed at time of the event.<br>
			範例：
		</td>
	</tr>
	<tr>
		<td>bubbles</td>
		<td>屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>button</td>
		<td>屬性</td>
		<td>標準DOM支援度：yes, R/W<br>
			IE瀏覽器支援度：yes, R/W<br>
			類型：數值<br>
			說明：滑鼠事件屬性，對應按下的滑鼠鍵值，要再補充說明。<br>
			範例：
<pre>
window.onload = function(){
	function eFunction(eventObj){
		if(document.all){var eventObj = window.event;}
		var $display = document.getElementById('display');
		$display.innerHTML = eventObj.button;
	}
	document.onmousedown = eFunction;
	eFunction(); //測試在IE中什麼鍵都不按
}
</pre>
			上例在實測後，在標準DOM中傳回的值如下：<br>
			　0：左鍵<br>
			　1：中鍵<br>
			　2：右鍵<br><br>
			而在IE瀏覽器(包含IE9)傳回的值如下：<br>
			　0：未按下任何按鍵<br>
			　1：左鍵<br>
			　2：右鍵<br>
			　3：同時按下左、右鍵<br>
			　4：中鍵<br>
			　5：同時按下左、中鍵<br>
			　6：同時按下右、中鍵<br>
			　7：同時按下左、中、右鍵<br>
		</td>
	</tr>
	<tr>
		<td>cancelBubble</td>
		<td>屬性</td>
		<td>標準DOM支援度：yes, R<br>
			IE瀏覽器支援度：yes, R/W<br>
			類型：Boolean值<br>
			說明：IE中設置為true可取消事件向上冒泡，標準DOM中唯讀。<br>
			事件冒泡指的是，事件按照從最特定的事件目標到最不特定的事件目標的順序逐一觸發的一種原理，如下範例1當&lt;div&gt;被按下後會先alert 'div clicked'，然後接著&lt;body&gt;隨著觸發onclick事件alert 'body clicked'。<br>
			範例1：
<pre>
document.body.onclick = function(){alert('body clicked');}
document.getElementsByTagName('div')[0].onclick = function(){alert('div clicked');}
</pre>
			範例2，示範cancelBubble屬性：<br>
			以下範例2如果沒有在div的事件加上cancelBubble屬性及true值，當div被點下時body onclick函數中的程式也會被執行；另外cancelBubble屬性是IE專用的，所以用了一個條件式來判斷是否為IE，如果不是則使用非IE的stopPropagation()方法來實現取消冒泡事件。
<pre>
document.body.onclick = function(){
	alert('body clicked');
}
document.getElementsByTagName('div')[0].onclick = function(e){
	alert('div clicked');
	if(e &amp;&amp; e.stopPropagation){e.stopPropagation();}else{event.cancelBubble=true;}
}
</pre>
		</td>
	</tr>
	<tr>
		<td>cancelable</td>
		<td>屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>charCode</td>
		<td>屬性</td>
		<td>標準DOM支援度：yes, R<br>
			IE瀏覽器支援度：no<br>
			類型：數值<br>
			說明：傳回按下按鍵時(keypress事件)產生的Unicode字符編碼值，和keyCode不同，keyCode傳回的是代表鍵盤的按鍵編碼。charCode在各種鍵盤事件傳回的值都不同，各瀏覽器的定義也不同；標準DOM在keydown和keyup事件觸發時因為沒有產生字元所以會傳回0，而在keypress事件觸發時則會返回正確的字符編碼，不過實做實還是必需測試各瀏覽器的支援度。
			另外它只傳回有字元的字符，例如a、A、b、c等，而Shift或Ctrl等的無字元按鍵則不適用。<br>
			以下為補充說明：
				<ul>
					<li>大小寫不同的字元會傳回不同的值，如a傳回97，A傳回65</li>
					<li>可以使用String.fromCharCode()方法將傳回的值轉換為實際字元</li>
					<li>IE中不支援charCode，IE會傳回undefined，IE中則使用keyCode代替，觸發keypress能得到和標準DOM一樣的值</li>
				</ul>
			範例：
<pre>
document.onkeypress=function(e){
	var e=window.event || e;
	alert("CharCode value: "+e.charCode);
	alert("Character: "+String.fromCharCode(e.charCode));
}
</pre>
		</td>
	</tr>
	<tr>
		<td>ctrlKey</td>
		<td>屬性</td>
		<td>標準DOM支援度：yes, R<br>
			IE瀏覽器支援度：yes, R/W<br>
			類型：Boolean值<br>
			說明：按下Ctrl鍵則為true，否則為false。<br>
			原文：Boolean properties that indicate whether the Alt, Ctrl, or Shift keys were pressed at time of the event.<br>
			範例：
		</td>
	</tr>
	<tr>
		<td>currentTarget</td>
		<td>屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>detail</td>
		<td>屬性</td>
		<td>標準DOM支援度：yes, R<br>
			IE瀏覽器支援度：no<br>
			類型：數值<br>
			說明：滑鼠按鍵被按一下的次數。<br>
			範例：
		</td>
	</tr>
	<tr>
		<td>eventPhase</td>
		<td>屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>fromeElement</td>
		<td>屬性</td>
		<td>標準DOM支援度：no<br>
			IE瀏覽器支援度：yes, R/W<br>
			類型：元素名稱<br>
			說明：滑鼠指標所離開的元素。<br>
			範例：
		</td>
	</tr>
	<tr>
		<td>isChar</td>
		<td>屬性</td>
		<td>標準DOM支援度：<br>
			IE瀏覽器支援度：<br>
			類型：<br>
			說明：。<br>
			原文：Boolean property that indicates if the key pressed has a character associated with it. If the user pressed "F1" for example, the property returns false. Buggy as of Firefox 2.x, not supported in most other browsers (ie: IE, Opera 9 etc).<br>
			範例：
		</td>
	</tr>
	<tr>
		<td>keyCode</td>
		<td>屬性</td>
		<td>標準DOM支援度：yes, R/W<br>
			IE瀏覽器支援度：yes, R/W<br>
			類型：數值<br>
			說明：傳回鍵盤被按下按鍵的鍵盤代號，包括Ctrl、Shift等的非字符按鍵；IE中支援全部的鍵盤事件，keypress事件表示按下按鍵的Unicode字符值，keydown/keyup事件為按鍵的數位代號，而標準DOM中keypress時為0，keydown/keyup為按下按鍵的數位代號；和charCode一樣，各瀏覽器定義不同，實做時必需多加測試。<br><br>
			以下為補充說明：
				<ul>
					<li>可以使用String.fromCharCode()方法將傳回的值轉換為實際字元</li>
					<li>Despite the fact that Firefox doesn't set the keyCode property during the onkeypress event, e.which (see below) is always set, which you can use on all three keyboard event handlers.</li>
				</ul>
				Be careful when accessing the keyCode property during an onkeydown or onkeyup event, as it is set whenever any key is pressed, including non character keys like "Shift". This means if you try to press "Shift+a" to try and get the keyCode for "A", you will always end up getting two keyCodes instead, one for "Shift" and one for "A" in that order. What you won't get regardless is the keyCode for "a", as keyCode always returns the unicode value of the uppercase version of a character. To derive the keyCode for "a" (lowercase), you must probe the keyCode returned during the onkeypress event in IE, and since Firefox doesn't set keyCode during onkeypress, switch to e.charCode or e.which instead for that browser. Sounds confusing? Yes it is. Check out the below two examples for a more hands on explanation:<br><br>
			範例：測試輸入"a"或"Shift a"，取得keyCode
<pre>
&lt;form&gt;
Char: &lt;input type="text" id="char" size="15" /&gt; Keycode: &lt;input type="text" id="keycode" size="15" /&gt;
&lt;/form&gt;

&lt;script type="text/javascript"&gt;
var charfield=document.getElementById("char");
charfield.onkeydown=function(e){
	var e=window.event || e;
	document.getElementById("keycode").value=e.keyCode;
}
&lt;/script&gt;
</pre>
			範例：測試輸入"a"或"Shift a"，取得按鍵的Unicode字符值
<pre>
&lt;form&gt;
Char: &lt;input type="text" id="char" size="15" /&gt; Keycode: &lt;input type="text" id="unicode" size="15" /&gt;
&lt;/form&gt;

&lt;script type="text/javascript"&gt;
var charfield=document.getElementById("char");
charfield.onkeypress=function(e){
	var e=window.event || e;
	var keyunicode=e.charCode || e.keyCode;
	document.getElementById("unicode").value=keyunicode;
}
&lt;/script&gt;
</pre>
			範例：判斷"Enter"是否被按下
<pre>
window.onload = function(){
	window.onkeypress=function(e){
		var e=window.event || e;
		if(e.keyCode == 13){
			alert('Enter is Clicked, keyCode is '+e.keyCode);
		}
	}
}
</pre>
		</td>
	</tr>
	<tr>
		<td>metaKey</td>
		<td>屬性</td>
		<td>標準DOM支援度：<br>
			IE瀏覽器支援度：<br>
			類型：<br>
			說明：。<br>
			原文：Boolean property indicating whether the META key was pressed. NOT supported in IE.<br>
			範例：
		</td>
	</tr>
	<tr>
		<td>relatedTarget</td>
		<td>屬性</td>
		<td>標準DOM支援度：yes, R<br>
			IE瀏覽器支援度：no<br>
			類型：<br>
			說明：滑鼠指標所正在進入/離開的元素。<br>
			範例：
		</td>
	</tr>
	<tr>
		<td>returnValue</td>
		<td>屬性</td>
		<td>標準DOM支援度：no<br>
			IE瀏覽器支援度：yes, R/W<br>
			類型：Boolean值<br>
			說明：設置為false時可取消事件的預設行為。<br>
			原文：Set to false to cancel any default action for the event.<br>
			範例：
		</td>
	</tr>
	<tr>
		<td>shiftKey</td>
		<td>屬性</td>
		<td>標準DOM支援度：yes, R<br>
			IE瀏覽器支援度：yes, R/W<br>
			類型：Boolean值<br>
			說明：按下Shift鍵則為true，否則為false。<br>
			原文：Boolean properties that indicate whether the Alt, Ctrl, or Shift keys were pressed at time of the event.<br>
			範例：
		</td>
	</tr>
	<tr>
		<td>srcElement</td>
		<td>屬性</td>
		<td>標準DOM支援度：no<br>
			IE瀏覽器支援度：yes, R/W<br>
			類型：元素名稱<br>
			說明：引起事件的元性/物件；很多時候，我們會希望知道事件是由哪個物件觸發的，即事件的目標。假設&lt;P&gt;被分配到onclick處理函數，&lt;P&gt;就是觸發click物件的目標。<br>
			範例：
<pre>
window.onload = function(){
	function textTarget(){
		var eventObj = window.event;
		alert(eventObj.srcElement.tagName);
	}
	var obj1 = document.getElementById('obj1');
	var obj2 = document.getElementById('obj2');
	obj1.onclick = textTarget;
	obj2.onclick = textTarget;
}

&lt;img id="obj1" src="test.gif" /&gt;
&lt;div id="obj2"&gt;obj2&lt;/div&gt;
</pre>
		</td>
	</tr>
	<tr>
		<td>target</td>
		<td>屬性</td>
		<td>標準DOM支援度：yes, R<br>
			IE瀏覽器支援度：no<br>
			類型：元素名稱<br>
			說明：引起事件的元性/物件；很多時候，我們會希望知道事件是由哪個物件觸發的，即事件的目標。假設&lt;P&gt;被分配到onclick處理函數，&lt;P&gt;就是觸發click物件的目標。<br>
			範例：
<pre>
window.onload = function(){
	function textTarget(eventObj){
		alert(eventObj.target.tagName);		
	}
	var obj1 = document.getElementById('obj1');
	var obj2 = document.getElementById('obj2');
	obj1.onclick = textTarget;
	obj2.onclick = textTarget;
}

&lt;img id="obj1" src="test.gif" /&gt;
&lt;div id="obj2"&gt;obj2&lt;/div&gt;
</pre>
		</td>
	</tr>
	<tr>
		<td>timestamp</td>
		<td>屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>toElement</td>
		<td>屬性</td>
		<td>標準DOM支援度：no<br>
			IE瀏覽器支援度：yes, R/W<br>
			類型：元素名稱<br>
			說明：滑鼠指標正在進入的元素。<br>
			範例：
		</td>
	</tr>
	<tr>
		<td>type</td>
		<td>屬性</td>
		<td>標準DOM支援度：yes, R<br>
			IE瀏覽器支援度：yes, R/W<br>
			類型：字串<br>
			說明：事件的名稱。<br>
			範例：
<pre>
function eventTypeTest(e){
	if(window.event){var e = window.event;}
	document.body.innerHTML += e.type+'<br>';
}
document.onmousedown = eventTypeTest;
document.onmouseup = eventTypeTest;
document.onclick = eventTypeTest;
document.ondblclick = eventTypeTest;
</pre>
		</td>
	</tr>
	<tr>
		<td>which</td>
		<td>屬性</td>
		<td>標準DOM支援度：<br>
			IE瀏覽器支援度：<br>
			類型：<br>
			說明：。<br>
			原文：Returns the unicode value of the key pressed whether it has a character associated with it or not. Behaves similar to IE's version of the keyCode property and supported in Firefox/ Opera. NOT supported in IE.<br>
			範例：
		</td>
	</tr>
	<tr>
		<td>clientX</td>
		<td>屬性(滑鼠座標)</td>
		<td>事件屬性；當指定的事件發時，以整數傳回滑鼠在瀏覽器視窗內可視範圍的水平座標位置(viewport)，不包括工具列、捲軸等。<br>
			瀏覽器支援度：IE(R/W(是說可寫入嗎？)), Chrome, FF, safari, opera<br>
			範例：
<pre>
&lt;p&gt;點我傳回鼠標在視窗內的x軸座標值&lt;/p&gt;
&lt;script&gt;
	document.getElementsByTagName('p')[0].onclick = function(event){
		alert(event.clientX);
	}
&lt;/script&gt;
</pre>
		</td>
	</tr>
	<tr>
		<td>clientY</td>
		<td>屬性(滑鼠座標)</td>
		<td>事件屬性；當指定的事件發時，以整數傳回滑鼠在瀏覽器視窗內可視範圍的垂直座標位置(viewport)，不包括工具列、捲軸等。<br>
			瀏覽器支援度：IE(R/W(是說可寫入嗎？)), Chrome, FF, safari, opera<br>
			範例：
<pre>
&lt;p&gt;點我傳回鼠標在視窗內的y軸座標值&lt;/p&gt;
&lt;script&gt;
	document.getElementsByTagName('p')[0].onclick = function(event){
		alert(event.clientY);
	}
&lt;/script&gt;
</pre>
		</td>
	</tr>
	<tr>
		<td>layerX</td>
		<td>屬性(滑鼠座標)</td>
		<td>
			Returns the mouse coordinates relative to a positioned (absolute or relative) element at the time of the event. If the event occurred outside a positioned element, than the upper left corner of the document is used instead. IE uses the properties offsetX and offsetY instead.
		</td>
	</tr>
	<tr>
		<td>layerY</td>
		<td>屬性(滑鼠座標)</td>
		<td>
			Returns the mouse coordinates relative to a positioned (absolute or relative) element at the time of the event. If the event occurred outside a positioned element, than the upper left corner of the document is used instead. IE uses the properties offsetX and offsetY instead.
		</td>
	</tr>
	<tr>
		<td>offsetX</td>
		<td>屬性(滑鼠座標)</td>
		<td>
			Returns the mouse coordinates relative to a positioned (absolute or relative) element. If the event occurred outside a positioned element, than the upper left corner of the document is used instead. w3c standard uses layerX, layerY instead.
		</td>
	</tr>
	<tr>
		<td>offsetY</td>
		<td>屬性(滑鼠座標)</td>
		<td>
			Returns the mouse coordinates relative to a positioned (absolute or relative) element. If the event occurred outside a positioned element, than the upper left corner of the document is used instead. w3c standard uses layerX, layerY instead.
		</td>
	</tr>
	<tr>
		<td>pageX</td>
		<td>屬性(滑鼠座標)</td>
		<td>Returns the left and top coordinates of event relative to the top left corner of the visible page. pageY would return the same value as "window.pageYOffset+e.clientY", for example.</td>
	</tr>
	<tr>
		<td>pageY</td>
		<td>屬性(滑鼠座標)</td>
		<td>Returns the left and top coordinates of event relative to the top left corner of the visible page. pageY would return the same value as "window.pageYOffset+e.clientY", for example.</td>
	</tr>
	<tr>
		<td>screenX</td>
		<td>屬性(滑鼠座標)</td>
		<td>當指定的事件發時，以整數傳回滑鼠在整個電腦螢幕的水平座標值。<br>
			瀏覽器支援度：IE(R/W(是說可寫入嗎？)), Chrome, FF, safari, opera<br>
			範例：
<pre>
&lt;p&gt;點我傳回鼠標在電腦螢幕上的x軸座標值&lt;/p&gt;
&lt;script&gt;
	document.getElementsByTagName('p')[0].onclick = function(event){
		alert(event.screenX);
	}
&lt;/script&gt;
</pre>
		</td>
	</tr>
	<tr>
		<td>screenY</td>
		<td>屬性(滑鼠座標)</td>
		<td>當指定的事件發時，以整數傳回滑鼠在整個電腦螢幕的垂直座標值。<br>
			瀏覽器支援度：IE(R/W(是說可寫入嗎？)), Chrome, FF, safari, opera<br>
			範例：
<pre>
&lt;p&gt;點我傳回鼠標在電腦螢幕上的y軸座標值&lt;/p&gt;
&lt;script&gt;
	document.getElementsByTagName('p')[0].onclick = function(event){
		alert(event.screenY);
	}
&lt;/script&gt;
</pre>
		</td>
	</tr>
	<tr>
		<td>x</td>
		<td>屬性(滑鼠座標)</td>
		<td></td>
	</tr>
	<tr>
		<td>x</td>
		<td>屬性(滑鼠座標)</td>
		<td></td>
	</tr>
	<tr>
		<td>click</td>
		<td>屬性(滑鼠)</td>
		<td>按一下滑鼠左鍵時觸發。</td>
	</tr>
	<tr>
		<td>dblclick</td>
		<td>屬性(滑鼠)</td>
		<td>按兩下滑鼠左鍵時觸發。<br>
			如果在同一個物件上監聽包含dblclick等多種滑鼠事件，不同瀏覽器觸發的事件及順序都不盡相同，例如在IE中觸發的順序為mousedown→mouseup→click→mouseup→dblclick，而在Firefox中則為mousedown→mouseup→click→mousedown→mouseup→click→dblclick。<br>
			如果程式設計時需要涉及按兩下事件，應當盡量避免使用它的觸發過程，原因就在於瀏覽器相容性不同。
		</td>
	</tr>
	<tr>
		<td>mousedown</td>
		<td>屬性(滑鼠)</td>
		<td>按一下任意一個滑鼠按鍵時觸發。</td>
	</tr>
	<tr>
		<td>mouseout</td>
		<td>屬性(滑鼠)</td>
		<td>滑鼠指標在某個元素上，移出該元素邊界時觸發。</td>
	</tr>
	<tr>
		<td>mouseover</td>
		<td>屬性(滑鼠)</td>
		<td>滑鼠指標移到另一個素上時觸發。</td>
	</tr>
	<tr>
		<td>mouseup</td>
		<td>屬性(滑鼠)</td>
		<td>鬆開滑鼠任一個按鍵時觸發。</td>
	</tr>
	<tr>
		<td>mousemove</td>
		<td>屬性(滑鼠)</td>
		<td>滑鼠指標在某個元素上移動時持續觸發。</td>
	</tr><tr>
		<td>keydown</td>
		<td>屬性(鍵盤)</td>
		<td>按下鍵盤上某個按鍵時觸發，一值按住某鍵則會持續觸發，如下例：
<pre>
window.onload = function(){
	function eHandler(eventObj){
		if(window.event){var eventObj = window.event;}
		document.getElementsByTagName('div')[0].innerHTML += eventObj.type + '　';
	}
	
	var myTextarea = document.getElementsByTagName('textarea')[0];
	myTextarea.onkeydown = eHandler;
	myTextarea.onkeyup = eHandler;
	myTextarea.onkeypress = eHandler;
}
</pre>
		</td>
	</tr>
	<tr>
		<td>keypress</td>
		<td>屬性(鍵盤)</td>
		<td>按下某個按鍵並產生字元時觸發，即忽略Shift、Alt、Ctrl等功能鍵，如下例：
<pre>
window.onload = function(){
	function eHandler(eventObj){
		if(window.event){var eventObj = window.event;}
		document.getElementsByTagName('div')[0].innerHTML += eventObj.type + '　';
	}
	
	var myTextarea = document.getElementsByTagName('textarea')[0];
	myTextarea.onkeydown = eHandler;
	myTextarea.onkeyup = eHandler;
	myTextarea.onkeypress = eHandler;
}
</pre>
		</td>
	</tr>
	<tr>
		<td>keyup</td>
		<td>屬性(鍵盤)</td>
		<td>釋放某個鍵時觸發，如下例：
<pre>
window.onload = function(){
	function eHandler(eventObj){
		if(window.event){var eventObj = window.event;}
		document.getElementsByTagName('div')[0].innerHTML += eventObj.type + '　';
	}
	
	var myTextarea = document.getElementsByTagName('textarea')[0];
	myTextarea.onkeydown = eHandler;
	myTextarea.onkeyup = eHandler;
	myTextarea.onkeypress = eHandler;
}
</pre>
		</td>
	</tr><tr>
		<td>blur</td>
		<td>屬性(dom元素)</td>
		<td>任何元素或視窗失去焦點時觸發。</td>
	</tr>
	<tr>
		<td>change</td>
		<td>屬性(dom元素)</td>
		<td>文字方塊失焦點時，並且在它擷取焦點後內容發生過改變時觸發。</td>
	</tr>
	<tr>
		<td>error</td>
		<td>屬性(dom元素)</td>
		<td>腳本出錯時在window物件上觸發，圖像無法載入時在其上觸發。</td>
	</tr>
	<tr>
		<td>focus</td>
		<td>屬性(dom元素)</td>
		<td>任何元素或視窗擷取焦點時觸發。</td>
	</tr>
	<tr>
		<td>load</td>
		<td>屬性(dom元素)</td>
		<td>頁面完全載入後在window物件上觸發，圖片載入完成後在其上觸發。載入事件是最常用的html事件之一，因為在頁面載入完成之前，DOM的框架還沒有搭建完畢，因此任何相關操作都不能發生。給window物件分配load、unload事件等同於&lt;body&gt;標籤的onload、onunload方法。<br>
			範例1：
<pre>
window.onload = function(){
	alert('Page Loaded.');
}
</pre>
			範例2：
<pre>
window.onload = function(){
    var img = document.getElementsByTagName('img')[0];
    img.onload = function(){
		alert('loaded');
    }
}
</pre>
			範例2在IE瀏覽器中運作正常，但非IE中完全沒反應，所以可能標準DOM中不是什麼都可以onload的，至於要達成這個範例應該是要用onreadystatechange事件來處理，但目前還不是很清楚做法…。
		</td>
	</tr>
	<tr>
		<td>select</td>
		<td>屬性(dom元素)</td>
		<td>選擇了文字方塊的一個或多個字元時觸發。</td>
	</tr>
	<tr>
		<td>submit</td>
		<td>屬性(dom元素)</td>
		<td>按一下"提交"按鈕時在表單form上觸發。</td>
	</tr>
	<tr>
		<td>unload</td>
		<td>屬性(dom元素)</td>
		<td>頁面完全卸載後在window物件上觸發，圖片卸載完成後在其上觸發。</td>
	</tr><tr>
		<td>preventDefault()</td>
		<td>方法</td>
		<td>標準DOM支援度：yes<br>
			IE瀏覽器支援度：no<br>
			說明：可以使用該方法來阻止事件的預設行為。<br>
			範例：
<pre>
&lt;a href="http://www.yahoo.com.tw"&gt;http://www.yahoo.com.tw&lt;/a&gt;
&lt;script&gt;
var myLink = document.getElementsByTagName('a')[0];
myLink.onclick = function(e){
	var evt=window.event || e;
	if(evt.preventDefault){
		evt.preventDefault();
	}
	else{
		return false;
	}
}
&lt;/script&gt;
</pre>
		</td>
	</tr>
	<tr>
		<td>stopPropagation()</td>
		<td>方法</td>
		<td>標準DOM支援度：yes<br>
			IE瀏覽器支援度：no<br>
			說明：可以使用該方法來阻止事件向上冒泡。<br>
			事件冒泡指的是，事件按照從最特定的事件目標到最不特定的事件目標的順序逐一觸發的一種原理，如下範例1當&lt;div&gt;被按下後會先alert 'div clicked'，然後接著&lt;body&gt;隨著觸發onclick事件alert 'body clicked'。<br>
			範例1：
<pre>
d.body.onclick = function(){alert('body clicked');}
d.getElementsByTagName('div')[0].onclick = function(){alert('div clicked');}
</pre>
			範例2，示範stopPropagation()方法：
			以下範例如果沒有在div加上stopPropagation()，當div被點下時body onclick函數中的程式也會被執行；另外ie中沒有stopPropagation()，所以用了一個條件式來判斷是否為IE，如果是IE則使用IE事件的cancelBubble屬性來實現取消冒泡事件。
<pre>
d.body.onclick = function(){
	alert('body clicked');
}
d.getElementsByTagName('div')[0].onclick = function(e){
	alert('div clicked');
	if(e && e.stopPropagation){e.stopPropagation();}else{event.cancelBubble=true;}
}
</pre>
		</td>
	</tr>
</table>
 </main>
</body>
</html>