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
<meta name="keywords" content="Javascript,window,物件,object,字典,方法,屬性,使用說明,文件,範例" />
<meta name="description" content="提供完整的window物件及其方法、屬性的說明文件與範例" />
<title>window物件 - Javascript字典</title>
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
<h1>Javascript - window物件</h1>
	<?php include("../includes/adsense.php"); ?>
<table class="doc-table">
	<tr>
		<th>名稱</th>
		<th>類形</th>
		<th>說明</th>
	</tr>
	<tr>
		<td>window</td>
		<td>物件</td>
		<td>瀏覽器的最上層物件，在撰寫javascript時可省略window描述。<br />
			原文：The Window object is the top level object in JavaScript, and contains in itself several other objects, such as "document", "history" etc.</td>
	</tr>
	<tr>
		<td>onblur</td>
		<td>事件屬性</td>
		<td>原文：Fires when the window loses focus.</td>
	</tr>
	<tr>
		<td>onerror</td>
		<td>事件屬性</td>
		<td>原文：Fires when a JavaScript error occurs. By returning true inside this event, JavaScript errors on the page (if any) are suppressed, with no error messages popping up:
<pre>
window.onerror=function(msg, url, linenumber){
	var logerror='Error message: ' + msg + '. Url: ' + url + 'Line Number: ' + linenumber;
	alert(logerror);
	return true;
}
</pre></td>
	</tr>
	<tr>
		<td>onfocus</td>
		<td>事件屬性</td>
		<td>原文：Fires when the focus is set on the current window.</td>
	</tr>
	<tr>
		<td>onload</td>
		<td>事件屬性</td>
		<td>
			原文：Fires when the page has finished loading, including images. This is a popular event to use to run some JavaScript once everything on the page has loaded/ is available:
<pre>
window.onload=function(){
	runsomefunction();
}
</pre>
			The limitation with the above approach is that multiple calls to window.onload on the same page causes all but the last one to be adopted, with each proceeding call overwritten by the one following it. On a page with multiple JavaScripts, this is more likely than not to happen. To overcome this, you can invoke the onload event handler using the DOM methods element.addEventListener() and its counterpart element.attachEvent() in IE. Event handlers defined in this manner will not get overwritten by their counterparts, but instead queued.
			<br><br>
			上面window.onload=function(){}只接受一個函式，多寫幾次也只會執行最後一個函式的內容，可以利用addEventListener()方法來執行多個函式：
<pre>
//只會alert fn2
window.onload=function(){alert('fn1');}
window.onload=function(){alert('fn2');}

//fn1跟fn2都會alert
function winOnLoad1(){alert('fn1');}
function winOnLoad2(){alert('fn2');}
(document.all)?window.attachEvent('onload',winOnLoad):window.addEventListener('load',winOnLoad1);
(document.all)?window.attachEvent('onload',winOnLoad):window.addEventListener('load',winOnLoad2);
</pre>
			另外下面的links有一些關於window onload及dom onload的討論，有很多觀念要更新，例如圖很大要等很久才觸發onload、如何使用dom load來處理這問題，舊版瀏覽器對於DomContentReady的支援度、使用js library等等等：<br>
			http://stackoverflow.com/questions/191157/window-onload-vs-body-onload<br>
			http://stackoverflow.com/questions/3474037/window-onload-vs-body-onload-vs-document-onready
		</td>
	</tr>
	<tr>
		<td>onresize</td>
		<td>事件屬性</td>
		<td>當視窗(window)改變尺寸的時候被觸發。</td>
	</tr>
	<tr>
		<td>onscroll</td>
		<td>事件屬性</td>
		<td>原文：Fires when the window is scrolled. The following shows the current y coordinate of the upper left corner of the viewable window in the browser's title bar when the page is scrolled:
<pre>
window.onscroll=function(){
	var scrollY=window.pageYOffset || document.body.scrollTop;
	document.title=scrollY;
}
</pre></td>
	</tr>
	<tr>
		<td>onbeforeunload</td>
		<td>事件屬性</td>
		<td>
			webkit不支援啊~~~~~~~~~~~~!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!<br><br>
			（20170118，好像又不是不支援，只是支援的程度很奇怪，要找時間來確認一下）<br><br>
			原文：Fires when the page is about to be unloaded, prior to window.onunload event firing. Supported in all modern browsers. By setting event.returnValue to a string, the browser will prompt the user whether he/she wants to leave the current page when attempting to:
<pre>
window.onbeforeunload=function(e){
	e.returnValue="Any return string here forces a dialog to appear when user leaves this page";
}
window.location="http://www.google.com" //prompt is invoked
</pre></td>
	</tr>
	<tr>
		<td>onunload</td>
		<td>事件屬性</td>
		<td>
			webkit不支援啊~~~~~~~~~~~~!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!<br><br>
			（20170118，好像又不是不支援，只是支援的程度很奇怪，要找時間來確認一下）<br><br>
			原文：Fires when the page is unloaded- process cannot be overruled at this point. Often used to run code cleanup routines.</td>
	</tr>
	<tr>
		<td>closed</td>
		<td>屬性</td>
		<td>
			判斷是否視窗被關閉，傳回一個布林值，這個視窗指的是使用window.open()開啟的視窗。
		</td>
	</tr>
	<tr>
		<td>defaultStatus</td>
		<td>屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>document</td>
		<td>屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>frames</td>
		<td>屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>history</td>
		<td>屬性</td>
		<td>原文：Reference to the History object of JavaScript, which contains information on the URLs the visitor has visited within the window.<br />
			詳細內容見history物件一節。</td>
	</tr>
	<tr>
		<td>innerWidth</td>
		<td>屬性</td>
		<td>Read/write property that specifies the width and height, in pixels, of the window's content area respectively. Does not include the toolbar, scrollbars etc. NS/Firefox exclusive properties.<br />
		Note: IE equivalents are "document.body.clientWidth" and "document.body.clientHeight"</td>
	</tr>
	<tr>
		<td>innerHeight</td>
		<td>屬性</td>
		<td>視窗的高度，不包含外框及瀏覽器列，IE9以下不支援，請改用"document.documentElement.clientHeight"</td>
	</tr>
	<tr>
		<td>length</td>
		<td>屬性</td>
		<td>Returns the number of frames contained in the window.</td>
	</tr>
	<tr>
		<td>location</td>
		<td>屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>name</td>
		<td>屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>opener</td>
		<td>屬性</td>
		<td>
			參照使用了window.open()方法的視窗，這個屬性只能在被開啟的新視窗引用；<br>
			下範例示範了獲取開新視窗的原視窗，並在兩個視窗中傳遞變數：
<pre>
&lt;!-- opener.htm(原視窗) --&gt;
&lt;h2&gt;Opener (parent window)&lt;/h2&gt;
&lt;div&gt;
	&lt;button id="open_window_btn"&gt;開新視窗&lt;/button&gt;
	&lt;div id="data"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;script&gt;
var parentVar = 123;
var popupWindow;

document.getElementById('data').innerHTML = parentVar;

document.getElementById('open_window_btn').onclick = function(){
	popupWindow = window.open("child.htm", "thePopUp", "height=500,width=500");
}

function whenPopUpClosed() {
	window.setTimeout(function() {
		if(popupWindow.closed){
			document.getElementById('data').innerHTML = parentVar;
		}
	}, 10);
}
&lt;/script&gt;

&lt;!-- child.htm(新視窗) --&gt;
&lt;h2&gt;Opened Window (child window)&lt;/h2&gt;
&lt;div&gt;
	&lt;button id="close_window_btn" onclick="window.close()"&gt;關閉視窗&lt;/button&gt;
	&lt;div id="data"&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;script&gt;
document.getElementById('data').innerHTML = window.opener.parentVar;

window.onunload = function() {
	var theOpener = window.opener;
	theOpener.parentVar = 456;
	theOpener.whenPopUpClosed();
}
&lt;/script&gt;
</pre>
			上例的程式看來非常複雜，但其實只是為了增加互動，如果只是純粹傳遞變數，把opener.htm及child.htm中的whenPopUpClosed()拔掉也是可以運作的，我們試著拔掉whenPopUpClosed()後在Console中alert(parentVar)就會看到parentVar變成456了。
		</td>
	</tr>
	<tr>
		<td>outerWidth</td>
		<td>屬性</td>
		<td>Read/write property that specifies the total width and height, in pixels, of the window's content area respectively, including any toolbar, scrollbars etc. NS/Firefox exclusive properties with no IE4+ equivalent.</td>
	</tr>
	<tr>
		<td>outerHeight</td>
		<td>屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>pageXOffset</td>
		<td>屬性</td>
		<td>Returns an integer representing the pixels the current document has been scrolled from the upper left corner of the window, horizontally and vertically, respectively. Typically used to provide the needed calculations to keep an element in view even when the page is scrolled. NS/Firefox exclusive properties.<br />
		Note: IE equivalents are "document.body.scrollLeft" and "document.body.scrollTop"</td>
	</tr>
	<tr>
		<td>pageYOffset</td>
		<td>屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>parent</td>
		<td>屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>screen</td>
		<td>屬性</td>
		<td>References the screen object, which provides information about the user's screen/ monitor.</td>
	</tr>
	<tr>
		<td>screenX</td>
		<td>屬性</td>
		<td>Read/write property that specifies the x and y coordinates of the window relative to the user's monitor screen. NS/Firefox exclusive properties.</td>
	</tr>
	<tr>
		<td>screenY</td>
		<td>屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>screenLeft</td>
		<td>屬性</td>
		<td>Specifies the x and y coordinates of the window relative to the user's monitor screen. IE only.</td>
	</tr>
	<tr>
		<td>screenTop</td>
		<td>屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>scrollX</td>
		<td>屬性</td>
		<td>Returns an integer representing the pixels the current document has been scrolled from the upper left corner of the window, horizontally and vertically, respectively. NS/Firefox exclusive properties. Equivalent to pageXOffset and pageYOffset, and in IE, "document.body.scrollLeft" and "document.body.scrollTop"</td>
	</tr>
	<tr>
		<td>scrollY</td>
		<td>屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>self</td>
		<td>屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>status</td>
		<td>屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>top</td>
		<td>屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>window</td>
		<td>屬性</td>
		<td>References the current window. Same as "self."</td>
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
</pre>
			範例4示範一個監聽事件方法的妙用，我們知道一個文件如果載入一個以上的window.onload事件時，瀏覽器只會執行最後被讀取的window.onload內要執行的程式碼，使用監聽事件方法就可以輕鬆的執行一個以上的監聽函數了，方法如下：
<pre>
(d.all)?window.attachEvent('onload',windowOnload1):window.addEventListener('load',windowOnload1,false);
(d.all)?window.attachEvent('onload',windowOnload2):window.addEventListener('load',windowOnload2,false);
function windowOnload1(){
	alert('windowOnload1');
}
function windowOnload2(){
	alert('windowOnload2');
}
</pre>
		</td>
	</tr>
	<tr>
		<td>alert()</td>
		<td>方法</td>
		<td>跳出警告視窗。
			原文：Displays an Alert dialog box with the desired message and OK button.</td>
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
</pre>
			範例3示範一個監聽事件方法的妙用，我們知道一個文件如果載入一個以上的window.onload事件時，瀏覽器只會執行最後被讀取的window.onload內要執行的程式碼，使用監聽事件方法就可以輕鬆的執行一個以上的監聽函數了，方法如下：
<pre>
(d.all)?window.attachEvent('onload',windowOnload1):window.addEventListener('load',windowOnload1,false);
(d.all)?window.attachEvent('onload',windowOnload2):window.addEventListener('load',windowOnload2,false);
function windowOnload1(){
	alert('windowOnload1');
}
function windowOnload2(){
	alert('windowOnload2');
}
</pre>
		</td>
	</tr>
	<tr>
		<td>blur()</td>
		<td>方法</td>
		<td>原文：Removes focus from the window in question, sending the window to the background on the user's desktop.</td>
	</tr>
	<tr>
		<td>clearInterval()</td>
		<td>方法</td>
		<td>取消由setInterval()執行的函數，取消時必需指定由setInterval傳回的ID值。<br />
		語法：clearInterval(id);<br />
		原文：Clears the timer set using var ID=setInterval().<br />
		範例：倒數到0時停止。
<pre>
window.onload = function(){
	var sec = 4;
	document.getElementsByTagName('body')[0].innerHTML=5;
	function countdown(){
		document.getElementsByTagName('body')[0].innerHTML = sec;
		sec--;
		if(sec&lt;0){
			clearInterval(intervalID);
			alert("time's up");
		}
	}
	var intervalID = setInterval(countdown, 1000);
}
</pre></td>
	</tr>
	<tr>
		<td>clearTimeout()</td>
		<td>方法</td>
		<td>
			清除setTimeout()所設定的時間；將setTimeout()指派給一個變數，就可做為setTimeout()的id。<br>
			語法：setTimeout(settimeout_id);<br>
			範例：觸發clearTimeout()來停止setTimeout()：
<pre>
&lt;script&gt;
window.onload = function(){
	function myFN(){alert('三秒到了');}
	var t = setTimeout(myFN,3000);
	document.getElementById('stopper').onclick = function(){
		clearTimeout(t);
		alert('setTimeout被阻止了！');
	}
}
&lt;/script&gt;
&lt;a href="javascript:;" id="stopper"&gt;按我阻止setTimeout()！&lt;/a&gt;
</pre>
		</td>
	</tr>
	<tr>
		<td>close()</td>
		<td>方法</td>
		<td>
			關閉視窗（或指定的視窗）這個方法在各瀏覽器間的行為都不太相同，只有在使用window.open()方法是比較統一的。<br><br>
			例如直接在網頁中下window.close()，在Chrome中會直接關閉視窗，在IE中會跳alert詢問是否要關閉，在Firefox和Opera則完全沒有動作，另外在Chrome的無痕模式中也不會動作，反正怪事一堆，不要直接使用比較保險。<br><br>
			關於使用window.open()開啟的視窗則幾乎沒有問題，例如將新開的視窗存到變數再關閉，或是在新視窗中直接window.close()都可以正常運作，甚至在新視窗中使用opener屬性還可以關閉母視窗。
		</td>
	</tr>
	<tr>
		<td>confirm()</td>
		<td>方法</td>
		<td>confirm()方法彈出的對話框有確認和取消兩個按鈕，此方法返回一個布林值，按確定時返回true，取消則返回false。<br />
			例：if(confirm("確定要執行程式嗎？")){alert("執行");} else{alert("不執行");}<br />
			原文：Displays a Confirm dialog box with the specified message and OK and Cancel buttons. Returns either true or false, depending on which button the user has clicked on, for example:
<pre>
var yourstate=window.confirm("Are you sure you are ok?");
if (yourstate) //Boolean variable. Sets to true if user pressed "OK" versus "Cancel."
 window.alert("Good!")
</pre></td>
	</tr>
	<tr>
		<td>detachEvent()</td>
		<td>方法</td>
		<td>請參考attachEvent()；此方法只有IE瀏覽器支援，其它瀏覽器請使用removeEventListener()。</td>
	</tr>
	<tr>
		<td>dispatchEvent()</td>
		<td>方法</td>
		<td>Not supported in IE, which uses fireEvent() instead.<br />
			Dispatches an event to fire on a node artificially. Firefox/W3C method. This method returns a Boolean indicating whether any of the listeners which handled the event called preventDefault (false if called, otherwise, true). IE's equivalent of dispatchEvent() is fireEvent(). Example:
<pre>
&lt;div id="test" onclick="alert('hi')"&gt;Sample DIV.&lt;/div&gt;

&lt;script type="text/javascript"&gt;
//Generate an artificial click event on "test". Fires alert("hi")
var clickevent=document.createEvent("MouseEvents");
clickevent.initEvent("click", true, true)
document.getElementById("test").dispatchEvent(myevent)
&lt;/script&gt; 
</pre></td>
	</tr>
	<tr>
		<td>execscript()</td>
		<td>方法</td>
		<td></td>
	</tr>
	<tr>
		<td>find()</td>
		<td>方法</td>
		<td>
			在文件中尋找一個指定的字串，再將符合的字串highlight起來，當找不到的時候則傳回false。<br>
			Searches for a specified text in the document and highlights the matches.<br>
			Searches for the "string" within the page, and returns string or false, accordingly. "casesensitive" is a Boolean denoting whether search is case sensitive. "backwards" is a Boolean when set to true, searches the page backwards. Final two optional parameters must be set together or none at all.
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
		<td>原文：Sets focus to the window, bringing it to the forefront on the desktop.</td>
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
		<td>home()</td>
		<td>方法</td>
		<td></td>
	</tr>
	<tr>
		<td>moveBy()</td>
		<td>方法</td>
		<td>將瀏覽器視窗依偏移量移至目前相對位置，接受兩個參數，第一個是x軸，第二個是y軸。<br />
			下列範例將瀏覽器視窗依20px的偏移量向畫面右下角移動。<br />
			例：&lt;input type="button" value="moveBy()" onclick="window.moveBy(20,20)" /&gt;<br />
			注意！此方法Google Chrome及Oprea不支援。<br />
			原文：Moves a window by the specified amount in pixels.</td>
	</tr>
	<tr>
		<td>moveTo()</td>
		<td>方法</td>
		<td>將瀏覽器視窗移到指定的畫面位置，接受兩個參數，第一個是x軸，第二個是y軸。<br />
			下列範例將瀏覽器視窗(以左上角為準)移至畫面x:20px，y:20px的位置。<br />
			例：&lt;input type="button" value="moveTo()" onclick="window.moveTo(20,20)" /&gt;<br />
			注意！此方法Google Chrome及Oprea不支援不支援直接執行，只有在使用open()方法時有效。<br />
			原文：Moves a window to the specified coordinate values, in pixels. The following opens a window and centers it on the user's screen:
<pre>
&lt;script type="text/javascript"&gt;
function centeropen(url, winwidth, winheight){
	var centerwin=window.open(url, "", "toolbar=1, resize=1, scrollbars=1, status=1");
	centerwin.resizeTo(winwidth, winheight);
	centerwin.moveTo(screen.width/2-winwidth/2, screen.height/2-winheight/2); //center window on user's screen
}
&lt;/script&gt;
&lt;a href="#" onClick="centeropen('about:blank', 800, 650); return false"&gt;Open Window&lt;/a&gt;
</pre></td>
	</tr>
	<tr>
		<td>navigate()</td>
		<td>方法</td>
		<td></td>
	</tr>
	<tr>
		<td>open()</td>
		<td>方法</td>
		<td>open()方法主要是用來打開新視窗。<br />
			語法：open(URL, [name], [features], [replace])<br />
			此方法接受四個參數，分別為新視窗的url、新視窗開啟的位置、特性字串及新視窗是否替換現在載入頁面的布林值，通常不會用到第四個參數。特性字串參數的說明如下：<br />
			<span style="display:inline-block; width:80px;">設置</span><span style="display:inline-block; width:80px;">值</span><span style="display:inline-block;">說明</span><br />
			<span style="display:inline-block; width:80px;">left</span><span style="display:inline-block; width:80px;">Number</span><span style="display:inline-block;">新視窗的左座標</span><br />
			<span style="display:inline-block; width:80px;">top</span><span style="display:inline-block; width:80px;">Number</span><span style="display:inline-block;">新視窗的上座標</span><br />
			<span style="display:inline-block; width:80px;">height</span><span style="display:inline-block; width:80px;">Number</span><span style="display:inline-block;">新視窗的高度</span><br />
			<span style="display:inline-block; width:80px;">width</span><span style="display:inline-block; width:80px;">Number</span><span style="display:inline-block;">新視窗的寬度</span><br />
			<span style="display:inline-block; width:80px;">resizable</span><span style="display:inline-block; width:80px;">yes, no</span><span style="display:inline-block;">是否能透過拖動來調整新窗的大小，預設為no</span><br />
			<span style="display:inline-block; width:80px;">scrollable</span><span style="display:inline-block; width:80px;">yes, no</span><span style="display:inline-block;">新視窗是否允許使用捲軸，預設為no</span><br />
			<span style="display:inline-block; width:80px;">toolbar</span><span style="display:inline-block; width:80px;">yes, no</span><span style="display:inline-block;">新視窗是否顯示工具列，預設為no</span><br />
			<span style="display:inline-block; width:80px;">status</span><span style="display:inline-block; width:80px;">yes, no</span><span style="display:inline-block;">新視窗是否顯示狀態列，預設為no</span><br />
			<span style="display:inline-block; width:80px;">location</span><span style="display:inline-block; width:80px;">yes, no</span><span style="display:inline-block;">新視窗是否顯示Web位址欄，預設為no</span><br />
			這些特性字元是用逗號分隔的，在逗號或者等號前後不能有空格，否則會發生錯誤。<br />
			以下範例示範簡單的使用方法。<br />
			&lt;script type='text/javascript'&gt;<br />
			var wor;<br />
			function openGoogle(){ wor = window.open("http://google.com","_blank","width=1000,height=600,resizable=yes");}<br />
			&lt;/script&gt;<br />
			&lt;a href='javascript:openGoogle()'&gt;點此開啟 GOOGLE&lt;/a&gt;&lt;br /&gt;<br />
			&lt;a href='javascript:wor.close()'&gt;關閉 GOOGLE&lt;/a&gt;<br />
			注意：open()這個方法各瀏覽器支援度不一，而且很多使用者都會選擇關閉快顯視窗，所以還是儘量不要使用好了。<br />
			原文：Opens a new browser window. "Name" argument specifies a name that you can use in the target attribute of your <a> tag. "Features" allows you to show/hide various aspects of the window interface (more info). "Replace" is a Boolean argument that denotes whether the URL loaded into the new window should add to the window's history list.
<pre>
window.open("http://www.dynamicdrive.com", "", "width=800px, height=600px, resizable")
</pre>
			When defining the features (3rd parameter), separate each feature with a comma (,).

Restriction: In IE, an exception is thrown if you try to open a window containing a page from another domain and then try to manipulate that window. For example:
<pre>
var mywin=window.open("http://www.notcurrentdomain.com", "", "width=800px, height=600px, resizable");
mywin.moveTo(0, 0) //Not allowed in IE: an exception is thrown.;
</pre>
This restriction does not apply in other browsers.</td>
	</tr>
	<tr>
		<td>print()</td>
		<td>方法</td>
		<td>原文：Prints the contents of the window or frame.</td>
	</tr>
	<tr>
		<td>prompt()</td>
		<td>方法</td>
		<td>跳出輸入對話框，此方法接受兩個參數，第一個是prompt的訊息，第二個是輸入欄位的預設文字；<br />
			可指定一個變數儲存使用者輸入的資料，以下範例將返回"您的姓名是：…"。<br />
			var myName = window.prompt("請輸入您的姓名"); alert("您的姓名是："+myName);<br />
			原文：Displays a Prompt dialog box with a message. Optional "input" argument allows you to specify the default input (response) that gets entered into the dialog box. This function returns the string the user has entered:
<pre>
var yourname=window.prompt("please enter your name");
alert(yourname);
</pre></td>
	</tr>
	<tr>
		<td>removeEventListener()</td>
		<td>方法</td>
		<td>請參考addEventListener()；IE無此項，IE請使用detachEvent()。</td>
	</tr>
	<tr>
		<td>resizeBy()</td>
		<td>方法</td>
		<td>將瀏覽器視窗依增量值加大尺寸，接受兩個參數，第一個是x軸，第二個是y軸。<br />
			下列範例將瀏覽器視窗依20px的增量放大尺寸(高和寬)。<br />
			例：&lt;input type="button" value="resizeBy()" onclick="window.resizeBy(20,20)" /&gt;<br />
			注意！此方法Google Chrome及Oprea不支援直接執行，只有在使用open()方法時有效。<br />
			原文：Resizes a window by the specified amount in pixels.</td>
	</tr>
	<tr>
		<td>resizeTo()</td>
		<td>方法</td>
		<td>將瀏覽器視窗設定為指定的尺寸，接受兩個參數，第一個是x軸，第二個是y軸。<br />
			下列範例將瀏覽器視窗設定為300px乘以300px。<br />
			例：&lt;input type="button" value="resizeTo()" onclick="window.resizeTo(300,300)" /&gt;<br />
			注意！此方法Google Chrome及Oprea不支援。<br />
			原文：Resizes a window to the specified pixel values. The following will resize the current window to be maximized on the screen in browsers with no security hang ups over such an operation (IE does and will do nothing):
<pre>
window.resizeTo(screen.availWidth, screen.availHeight);
</pre></td>
	</tr>
	<tr>
		<td>scrollBy()</td>
		<td>方法</td>
		<td>原文：Scrolls a window by the specified amount in pixels.</td>
	</tr>
	<tr>
		<td>scrollByLines()</td>
		<td>方法</td>
		<td>原文：Scrolls the document by the number of lines entered as the parameter. NS/Firefox method.</td>
	</tr>
	<tr>
		<td>scrollByPages()</td>
		<td>方法</td>
		<td>原文：Scrolls the document by the number of pages entered as the parameter. NS/Firefox method.</td>
	</tr>
	<tr>
		<td>scrollTo()</td>
		<td>方法</td>
		<td>原文：Scrolls a window to the specified pixel values.</td>
	</tr>
	<tr>
		<td>setInterval()</td>
		<td>方法</td>
		<td>setInterval裡設定的程式會按照指定的間隔時間被重複觸發，直到執行了clearInterval為止。<br />
			語法：setInterval(function, interval);<br />
			範例：從100開始一直倒數，如果要設定停止函數，請參考clearInterval。<br />
<pre>var sec = 100;
function countdown(){
	document.getElementsByTagName('body')[0].innerHTML = sec;
	sec--;
}
window.onload = function(){
	setInterval(countdown, 1000);
}</pre>
			原文：Calls the specified function reference (func) or JavaScript statement(s) repeatedly per the "interval" parameter, in milliseconds (ie: 1000=every 1 second). This method returns a unique ID which can be passed into clearInterval(id) to clear the timer. Use the optional "args" to pass any number of arguments to the function. The following are all valid examples of setInterval():
<pre>
setInterval(myfunction, 5000) //function reference
</pre>
<hr />
<pre>
var timer=setInterval("document.title='Current Second: ' + new Date().getSeconds()", 1000); //statements should be surrounded in quotes)
</pre>
If you need to repeated call a function that accepts parameters, put that function inside an anonymous function:
<pre>
setInterval(function(){myfunction(param)}, 5000)
</pre></td>
	</tr>
	<tr>
		<td>setTimeout()</td>
		<td>方法</td>
		<td>
			當指定的「時間」倒數結束後，呼叫指定的函數或是Javascript描述，時間的單位為毫秒；使用setTimeout()方法時，可將它存在一個變數，將它當作clearTimeout()方法的id，如此便可以設定清除setTimeout()的所設定的時間。<br>
			語法：setTimeout("func", interval, [args])</br>
			語法中的args為非必填，其中可指派使用何種程式語言，JScript、VBScript或JavaScript。(雖然我不知這樣要幹嘛…)<br>
			範例1，在三秒後跳出alert視窗：
<pre>
window.onload = function(){
	setTimeout(function(){alert('三秒到了')},3000);
	/*var t = setTimeout(function(){alert('三秒到了')},3000);*/ /*將 setTimeout()指派給t(同樣會執行)*/
}
</pre>
		範例2，呼叫指定的函數：
<pre>
window.onload = function(){
	function myFN(){alert('三秒到了');}
	setTimeout(myFN,3000);
}
</pre>
		範例3，觸發clearTimeout()來停止setTimeout()：
<pre>
&lt;script&gt;
window.onload = function(){
	function myFN(){alert('三秒到了');}
	var t = setTimeout(myFN,3000);
	document.getElementById('stopper').onclick = function(){
		clearTimeout(t);
		alert('setTimeout被阻止了！');
	}
}
&lt;/script&gt;
&lt;a href="javascript:;" id="stopper"&gt;按我阻止setTimeout()！&lt;/a&gt;
</pre>
		</td>
	</tr>
	<tr>
		<td>showhelp()</td>
		<td>方法</td>
		<td></td>
	</tr>
	<tr>
		<td>showmodaldialog()</td>
		<td>方法</td>
		<td></td>
	</tr>
	<tr>
		<td>sizeToContent()</td>
		<td>方法</td>
		<td>原文：Sizes the window to fit the content contained within. Useful, for example, with popup windows that contain small amounts of content. NS6/Firefox method.</td>
	</tr>
	<tr>
		<td>stop()</td>
		<td>方法</td>
		<td>原文：Stops the window from loading. NS4/NS6+ exclusive method. Use the optional "args" to pass any number of arguments to the function.</td>
	</tr>
</table>
</main>
</body>
</html>