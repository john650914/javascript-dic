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
<meta name="keywords" content="Javascript,String,字串,物件,object,字典,方法,屬性,使用說明,文件,範例" />
<meta name="description" content="提供完整的String物件及其方法、屬性的說明文件與範例" />
<title>String物件 - Javascript字典</title>
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
<h1>Javascript - String物件</h1>
<table class="doc-table">
	<tr>
		<th>名稱</th>
		<th>類形</th>
		<th>說明</th>
	</tr>
	<tr>
		<td>String</td>
		<td>物件</td>
		<td>lastIndexOf()
			字串是由零個或多個字元構成，typeof()的傳回值是string。字元可以是字母、數字、標點符號和空格。<br>
			字串必須放在單引號或是雙引號裡，如字串裡有單引號則把整個字串用雙引號包起來，反之亦然；<br>還有當我們輸出的字串中，有含一些指令會用到的特殊字元時，要把該字元當一般字串輸出，就需要在前面用反斜線\讓該字元跳脫特殊字元，變成一般字串值來輸出，上述各種狀況如下例所示：
<pre>
var sentence = "let's go";
var case = 'the number "2001011026"';
var score = "run time 3'15\""; //字串裡的"如果不加\會被視為不正常的結尾導致瀏器錯誤
</pre>
			
		</td>
	</tr>
	<tr>
		<td>constructor</td>
		<td>屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>length</td>
		<td>屬性</td>
		<td>字串具有length屬性，它返回字串中字元的個數。<br />以下範例將返回10。<br />
		例：var myString = "hello! 哈囉!"; alert(myString.length);</td>
	</tr>
	<tr>
		<td>prototype</td>
		<td>屬性</td>
		<td></td>
	</tr>
	<tr>
		<td>charAt()</td>
		<td>方法</td>
		<td>獲取指定位置的字元，第一個字元的位置為0。<br />
		以下範例將返回n。<br />
		例：var myString = "Tsinghua University"; alert(myString.charAt(3));</td>
	</tr>
	<tr>
		<td>charCodeAt()</td>
		<td>方法</td>
		<td></td>
	</tr>
	<tr>
		<td>concat()</td>
		<td>方法</td>
		<td>組合字串，語法：stringObject.concat(字串A,字串B,...,字串X)，範例如下：
<pre>
var strA = "test ";
var strB = "String";
alert(str1.concat(str2));
</pre>
		輸出結果：test String</td>
	</tr>
	<tr>
		<td>fromCharCode() </td>
		<td>方法</td>
		<td>傳回參數中以Unicode值所代表的字元組成的字串，語法：String.fromCharCode(numX,numX,...,numX)<br />
			範例1將輸出ABC：
<pre>
alert(String.fromCharCode(65,66,67));
</pre>
			範例2：
<pre>
document.onkeypress=function(e){
	var e=window.event || e;
	alert("CharCode value: "+e.charCode);
	alert("Character: "+String.fromCharCode(e.charCode));
}
</pre></td>
	</tr>
	<tr>
		<td>indexOf()</td>
		<td>方法</td>
		<td>
			搜索字串的方法，返回指定文字於字串的開始位置(index)，字串中的第一個字元的位置為0，如果找不到則返回-1，並且區分大小寫；可接受兩個參數，第一個為欲搜索的文字，第二個為指定從第幾個字元的位置開始搜索，範例如下：
<pre>
var myString = "Tsinghua University";
alert(myString.indexOf("ing")); //返回2
alert(myString.indexOf("i",5)); //返回11
alert(myString.indexOf("inc")); //返回-1
alert(myString.indexOf("ING")); //返回-1
</pre>
			範例2：判斷字串中是否包含某些字元
<pre>
var myString = 'http://www.yahoo.com.tw';
if(myString.indexOf('http://')==-1){
	alert('myString不是一個完整的網址');
}
else{
	alert('myString是一個完整的網址');
}
</pre>
		</td>
	</tr>
	<tr>
		<td>lastIndexOf()</td>
		<td>方法</td>
		<td>
			和indexOf()功能相同，但lastIndexOf()是由字串的結尾往前搜。<br />
			搜索字串的方法，返回指定文字於字串的開始位置(index)，字串中的第一個字元的位置為0，如果找不到則返回-1，並且區分大小寫；可接受兩個參數，第一個為欲搜索的文字，第二個為指定從第幾個字元的位置開始往回搜索，範例如下：
<pre>
var myString = "Tsinghua University";
alert(myString.lastIndexOf("ing")); //返回2
alert(myString.lastIndexOf("i")); //返回16
alert(myString.lastIndexOf("i",3)); //返回2
alert(myString.lastIndexOf("ING")); //返回-1
</pre>
		</td>
	</tr>
	<tr>
		<td>match()</td>
		<td>方法</td>
		<td>這是在一句中找某個字母或文字，語法如下：<br />
		str.match("目標字")<br />
		str 是有關的字串，目標字是要在這字串內尋找的文字，找到就傳回目標字，找不到就傳回 null 這一個字，請看這例子：
<pre>
x="My favourite colors include red, yellow and blue.";
alert(x.match("red"));
</pre>
		以上的 script 會在 alert 對話盒顯示 red 這個找到的字，假若將上述的 scritp 改為以下內容：
<pre>
x="My favourite colors include white, yellow and blue.";
alert(x.match("red"));
</pre>
		alert 對話盒會顯示 null 這字，表示在 x 內沒有 red 這個字。<br />
		規則運算式(RegExp用法請見"RegExp物件")</td>
	</tr>
	<tr>
		<td>replace()</td>
		<td>方法</td>
		<td>replace()方法用於在字串中用一些字元替換另一些字元，語法如下：<br />
		語法：stringObject.replace(substr,replacement)<br />
		str 是有關的字串，"目標字" 是要在這字串內尋找的文字，找到就用 "代替字" 來取代，並傳回新的字串，原有字串不變，範例如下：
<pre>
x="My favourite colors include red, yellow and blue.";
alert(x.replace("red","violet"));
</pre>
		以上的 script 是在 x 這句內以 violet 取代 red, alert 對話盒顯示這句：My favourite colors include violet, yellow and blue.。若 x 內沒有目標字就不會被改變。<br />
		規則運算式(RegExp用法請見"RegExp物件")</td>
	</tr>
	<tr>
		<td>search()</td>
		<td>方法</td>
		<td>這是在一句中找某個字母或文字，使用以下語法：<br />
		str.search("目標字")<br />
		str 是有關的字串，目標字是要在這字串內尋找的文字，找到就傳回目標字的排序位置，找不到就傳回 -1，請見下例：<br />
<pre>
x="My favourite colors include red, yellow and blue.";
alert(x.match("red"));
</pre>
		以上的 script 會在 alert 對話盒顯示 28，表示 red 字是在 x 這句中的第 28 個位置 (從 0 開始計算)，若找不到就傳回 -1。<br />
		規則運算式(RegExp用法請見"RegExp物件")</td>
	</tr>
	<tr>
		<td>slice()</td>
		<td>方法</td>
		<td>從字串中取出其中的一段文字，可輸入兩個參數，分別為起始位置和終止位置，但<span class="u">不包含終止位置的那個字元</span>，第一個字元的位置為0；如果只設置一個參數則視為取得該參數的位置到字串的結尾，範例如下：
<pre>
var myString = "Tsinghua University";
alert(myString.slice(1,3)); //返回si
alert(myString.slice(4)); //返回ghua University
</pre>
		slice()對於負數的處理方式和substring()不同；如果參數為負值，slice()會從字串的結尾往前計算，如下例：
<pre>
var myString = "Tsinghua University";
alert(myString.slice(2,-3)); //返回inghua Univers
</pre>
		</td>
	</tr>
	<tr>
		<td>split()</td>
		<td>方法</td>
		<td>
			split()是將字串轉換為陣列的方法；我們知道使用toString()或join()可以將陣列轉為字串，相反地也有將字串轉為陣列的方法，語法如下：
<pre>
stringObj.split("分隔標示",[設定字元範圍]);
</pre>
			當指定一個沒有字元的分隔標示則會把每個字母拆成各別的陣列元素，並以逗點作分隔；各種使用範例如下：
<pre>
var countries = 'Taiwan USA China';
alert(countries.split("")); //傳回T,a,i,w,a,n, ,U,S,A, ,C,h,i,n,a
alert(countries.split("",5)); //傳回T,a,i,w,a
alert(countries.split(" ")); //傳回Taiwan,USA,China
var myArray = countries.split(" "); //先將split的結果存入一個陣列變數
alert(myArray[0]); //傳回Taiwan
alert(myArray[0]+'-'+myArray[1]+'-'+myArray[2]); //傳回Taiwan-USA-China
</pre>
		</td>
	</tr>
	<tr>
		<td>substr()</td>
		<td>方法</td>
		<td>
			從字串中取出其中的一段文字，可輸入兩個參數，分別為起始位置和字串長度。<br />
			以下範例將返回ing。
<pre>
var myString = "Tsinghua University"; alert(myString.substr(2,3));
</pre>
		</td>
	</tr>
	<tr>
		<td>substring()</td>
		<td>方法</td>
		<td>從字串中取出其中的一段文字，可輸入兩個參數，分別為起始位置和終止位置，<span class="u">但不包含終止位置的那個字元</span>，第一個字元的位置為0；如果只設置一個參數則視為取得該參數的位置到字串的結尾。<br />
		另外substring()還有一個特性，兩個參數比較小的會自動往前移做為起始位置，例如substring(2,1);就會自動轉成substring(1,2);，範例如下：
<pre>
var myString = "Tsinghua University";
alert(myString.substring(1,3)); //返回si
alert(myString.substring(4)); //返回ghua University
</pre>
		substring()對於負數的處理方式和slice()不同；如果參數為負值，substring()會把負數忽略做為0處理，並將兩個參數中較小的作為起始位置，如下例：
<pre>
var myString = "Tsinghua University";
alert(myString.substring(2,-3)); //返回Ts(-3變成0再變成第一個參數，2變成第二個參數)
</pre>
		</td>
	</tr>
	<tr>
		<td>toLowerCase()</td>
		<td>方法</td>
		<td>將英文字串轉為小寫字。<br />
		以下範例將返回case transfer。<br />
		例：alert("Case Transfer".toLowerCase());</td>
	</tr>
	<tr>
		<td>toUpperCase()</td>
		<td>方法</td>
		<td>將英文字串轉為大寫字。<br />
		以下範例將返回CASE TRANSFER。<br />
		例：alert("Case Transfer".toUpperCase());</td>
	</tr>
	<tr>
		<td>trim()</td>
		<td>方法</td>
		<td></td>
	</tr>
	<tr>
		<td>valueOf()</td>
		<td>方法</td>
		<td></td>
	</tr>
	<tr>
		<td>anchor()</td>
		<td>HTML方法</td>
		<td></td>
	</tr>
	<tr>
		<td>big()</td>
		<td>HTML方法</td>
		<td></td>
	</tr>
	<tr>
		<td>blink()</td>
		<td>HTML方法</td>
		<td></td>
	</tr>
	<tr>
		<td>bold()</td>
		<td>HTML方法</td>
		<td></td>
	</tr>
	<tr>
		<td>fixed()</td>
		<td>HTML方法</td>
		<td></td>
	</tr>
	<tr>
		<td>fontcolor()</td>
		<td>HTML方法</td>
		<td></td>
	</tr>
	<tr>
		<td>fontsize()</td>
		<td>HTML方法</td>
		<td></td>
	</tr>
	<tr>
		<td>italics()</td>
		<td>HTML方法</td>
		<td></td>
	</tr>
	<tr>
		<td>link()</td>
		<td>HTML方法</td>
		<td></td>
	</tr>
	<tr>
		<td>small()</td>
		<td>HTML方法</td>
		<td></td>
	</tr>
	<tr>
		<td>strike()</td>
		<td>HTML方法</td>
		<td></td>
	</tr>
	<tr>
		<td>sub()</td>
		<td>HTML方法</td>
		<td></td>
	</tr>
	<tr>
		<td>sup()</td>
		<td>HTML方法</td>
		<td></td>
	</tr>
</table>
</main>
</body>
</html>