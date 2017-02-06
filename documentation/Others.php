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
<meta name="keywords" content="Javascript,Others,其它,物件,object,字典,方法,屬性,使用說明,文件,範例" />
<meta name="description" content="提供完整的Others物件及其方法、屬性的說明文件與範例" />
<title>其它 - Javascript字典</title>
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
<h1>Javascript - Others</h1>
	<?php include("../includes/adsense.php"); ?>
<table class="doc-table">
	<tr>
		<th>名稱</th>
		<th>類形</th>
		<th>說明</th>
	</tr>
	<tr>
		<td>\</td>
		<td>特殊字元</td>
		<td>宣告變數遇到太長的字串可以在換行的結尾加上"\"繼續撰寫。</td>
	</tr>
	<tr>
		<td>\\</td>
		<td>特殊字元</td>
		<td>在字串中顯示 \</td>
	</tr>
	<tr>
		<td>\'</td>
		<td>特殊字元</td>
		<td>在字串中顯示 '</td>
	</tr>
	<tr>
		<td>\"</td>
		<td>特殊字元</td>
		<td>在字串中顯示 "</td>
	</tr>
	<tr>
		<td>\n</td>
		<td>特殊字元</td>
		<td>換行，目前只知道在alert的時候有用，如下例：
<pre>
var s = document.styleSheets;
alert(s.length +"\n"+"Style Sheets");
</pre></td>
	</tr>
	<tr>
		<td>Boolean</td>
		<td>資料類形</td>
		<td>
			Boolean 有兩種值：true 和 false，與字串不同，Boolean 不能用引號框起來。typeof() 的傳回值是 boolean。<br>
			在 JavaScript 中，「undefined, null, false, 0, "", NaN」這些值會等於 false，其它的值都會是 true，特別是是物件類永遠為 true，下面列出所有的狀況：
<pre>
var q1 = undefined; // => false
var q2 = null; // => false
var q3 = []; // => true
var q4 = {}; // => true
var q5 = 0; // => false
var q6 = 1; // => true
var q7 = 999; // => true
var q8 = ""; // => false
var q9 = NaN; // => false
var q10 = "hello"; // => true
var q11 = false; // => false
var q12 = true; // => true
var q13 = new Boolean("true"); // => true
var q14 = new Boolean("false"); // => true
var q15 = new Number(0); // => true
var q16 = new Number(1); // => true
</pre>
		</td>
	</tr>
	<tr>
		<td>NaN</td>
		<td>資料類形</td>
		<td>NaN表非數值（Not a Number），像字串或未定義的值執行數學運算時，例如你嘗試作 1 / 'two'時，就會出現NaN的結果。
		注意，NaN不等於任何值，NaN也不等於NaN，如果你要測試某值結果是否為NaN，則要用isNaN()函式來測試。</td>
	</tr>
	<tr>
		<td>Null</td>
		<td>資料類形</td>
		<td>null是JavaScript中特殊的值，表示沒有任何東西。應用的時機就是在變數不指定至任何物件時，可以指定變數為null，
		或測試變數是否指定至null：var x = null; 對null使用typeof的結果會是'object'，這很怪(只能強記)。另外null乘以任何數皆為0，
		所以null也可視為數值0。</td>
	</tr>
	<tr>
		<td>Number</td>
		<td>資料類形</td>
		<td>正數、負數、整數、浮點數都屬於數值類型。typeof()的傳回值是number。詳細內容請見Number物件。</td>
	</tr>
	<tr>
		<td>Object</td>
		<td>資料類形</td>
		<td>對象(物件)類形，複合資料型態就是指物件，像是array()等。例var myDate=new Date(); alert(typeof(myDate)); 傳回object。</td>
	</tr>
	<tr>
		<td>String</td>
		<td>資料類形</td>
		<td>字串是由零個或多個字元構成。字元可以是字母、數字、標點符號和空格。字串必須放在單引號或是雙引號裡，如字串裡有單引號則把整個字串用雙引號包起來，反之亦然。typeof()的傳回值是string；詳細內容請見String物件。</td>
	</tr>
	<tr>
		<td>Undefined</td>
		<td>資料類形</td>
		<td>在建立變數後未指定變數值之前所提供的值；或是指不存在的物件屬性。例var x; typeOf(x)的傳回值是undefined。另外undefined乘以任何數皆為NaN(Not a Number)，所以undefined可視為一個空的字串。</td>
	</tr>
	<tr>
		<td>()</td>
		<td>小括號</td>
		<td>
			小括號(parentheses、round brackets，又稱圓括號)<br><br>
			● 宣告函式時的參數表
<pre>
function myFN(arg1,arg2){ ... }
</pre>
			● 條件式中放置條件運算式的位置
<pre>
for(var a in obj){ ... }
if(boo){ ... }
while(boo){ ... }
do{ ... }while(boo)
</pre>
			● 和new一起使用用來傳值
<pre>
// 假設已經定義了類Person，它有兩個欄位姓名(name)，年齡(age)  
var p1 = new Person('Jack', 26); 
</pre>
			● 函式或物件方法的調用運算符(如果有定義參數代入傳值)
<pre>
// 假設已經定義了函數func
func();

// 假設已經定義了物件obj，且擁有func方法
obj.func();
</pre>
			● 強制運算式運算
<pre>
function strToJson(str){  
	// eval 中字串兩旁加了強制運算符()
	var json = eval('(' + str + ')');
	return json;
}
</pre>
			● 匿名函式自動執行（這一點據說和強制運算式運算是同樣原理，但我有點不懂，見這裡：http://developer.51cto.com/art/201103/248529.htm）
<pre>
(function(){ ... })();

// 好像也可以寫成：
(function(){ ... }());

//然後最後一個()裡面可以帶參數
</pre>
			補充說明，下面的範例有加()跟沒加會出現不同的結果，原因目前不是很清楚：
<pre>
var myFN = function(){ // 這裡會執行
	alert(123);
}();
myFN(); // 而這裡會說myFN is not a function


function myFN(){
	alert(123);
};
var newFN = myFN(); // 這裡會執行
newFN(); // 而這裡會說myFN is not a function


function myFN(){
	alert(123);
};
var newFN = myFN;
newFN(); // 這裡會執行


var myFN = function(){
	return function(){
		alert(123);
	}
}();
myFN(); // 這裡會執行
</pre>
			<a href="http://sweeteason.pixnet.net/blog/post/40371736-javascript-%E9%96%8B%E7%99%BC%E5%AD%B8%E7%BF%92%E5%BF%83%E5%BE%97---%E5%87%BD%E6%95%B8%E7%9A%84%E5%A4%9A%E7%A8%AE%E5%AF%AB%E6%B3%95%E8%88%87%E6%87%89">http://sweeteason.pixnet.net/blog/post/40371736-javascript-%E9%96%8B%E7%99%BC%E5%AD%B8%E7%BF%92%E5%BF%83%E5%BE%97---%E5%87%BD%E6%95%B8%E7%9A%84%E5%A4%9A%E7%A8%AE%E5%AF%AB%E6%B3%95%E8%88%87%E6%87%89</a><br>
			<a href="http://kenneth-chan.logdown.com/posts/194525-immediate-function-anonymous-function">http://kenneth-chan.logdown.com/posts/194525-immediate-function-anonymous-function</a><br>
			<a href="http://bbs.csdn.net/topics/280026617">http://bbs.csdn.net/topics/280026617</a><br>
			<a href="http://www.cnitblog.com/kenlistian/archive/2008/04/10/42219.html">http://www.cnitblog.com/kenlistian/archive/2008/04/10/42219.html</a><br>
			<a href="http://topic.csdn.net/u/20070910/19/4f8ac008-c9f7-45c3-bd7b-5a2c94ae466d.html">http://topic.csdn.net/u/20070910/19/4f8ac008-c9f7-45c3-bd7b-5a2c94ae466d.html</a><br>
			<a href="http://www.cnblogs.com/snandy/archive/2011/03/08/1977070.html">http://www.cnblogs.com/snandy/archive/2011/03/08/1977070.html</a><br>
			<a href="http://www.nowamagic.net/javascript/js_UsageOfBraces.php">http://www.nowamagic.net/javascript/js_UsageOfBraces.php</a><br>
			<a href="http://developer.51cto.com/art/201103/248529.htm">http://developer.51cto.com/art/201103/248529.htm</a><br>
			<a href="http://news.csdn.net/n/20080114/112705.html">http://news.csdn.net/n/20080114/112705.html</a><br>
			<a href="http://topic.csdn.net/u/20081028/20/2c47cc4b-b3c9-48b0-a5ed-c55bd4ab1a0f.html">http://topic.csdn.net/u/20081028/20/2c47cc4b-b3c9-48b0-a5ed-c55bd4ab1a0f.html</a><br>
			<a href="http://www.lizhongda.net/web/NewsView.asp?ID=139&SortID=44">http://www.lizhongda.net/web/NewsView.asp?ID=139&SortID=44</a><br>
			<a href="http://www.uedcss.com/post/javascript-brackets-test.html">http://www.uedcss.com/post/javascript-brackets-test.html</a><br>
			<a href="http://www.itzsk.com/sold/97.html">http://www.itzsk.com/sold/97.html</a><br>
			<a href="http://www.360doc.com/content/11/0901/17/7317486_145050161.shtml">http://www.360doc.com/content/11/0901/17/7317486_145050161.shtml</a><br>
			<a href="http://club.topsage.com/thread-2463755-1-1.html">http://club.topsage.com/thread-2463755-1-1.html</a><br>
		</td>
	</tr>
	<tr>
		<td>[]</td>
		<td>中括號</td>
		<td>
			中括號(square brackets，又稱方括號)<br><br>
			● 定義陣列：
<pre>
var ary = []; // 定義一個空陣列
var ary = [1, 3]; // 定義一個陣列，同時賦予初值
</pre>
			● 選則陣列成員：
<pre>
var ary = [1, 2, 3];
var item = ary[0];
</pre>
			● 定義物件成員：
<pre>
var obj = {};
obj["name"] = "Jack";
</pre>
			● 選則物件成員：
<pre>
var obj = {name:"Jack"};
alert(obj["name"]);
</pre>
		</td>
	</tr>
	<tr>
		<td>{}</td>
		<td>大括號</td>
		<td>
			大括號(curly brackets，又稱花括號)<br><br>
			● 組織複合語句
<pre>
if(condition){ ... }else{ ... }
for(){ ... }
</pre>
			● 結構化異常處理的語法符號，這一點和組織複合語句是不同的，在if/else/for等的應用大括弧是可以省略的，但try/catch/finally則不能省略。
<pre>
try{ ... }catch(ex){ ...}finally{ ... }
</pre>
			● 用來放置函式的內容：
<pre>
function myFN(){
	return 1+1;
}
alert(myFN());
</pre>
			● 用來定義Javascript物件：
<pre>
var s = {
	name: "John",
	age: 40,
	hobby: ["sport","hiking","music"],
	greeting: function(){
		alert("Hello！My name is " + this.name +"！");
	}
}
</pre>
			● 用來定義JSON物件：
<pre>
{
	"John":{
		"age":20,
		"gender":"male"
	},
	"Mary":{
		"age":18,
		"gender":"female"
	}
}
</pre>
			<a href="http://www.nowamagic.net/javascript/js_UsageOfBraces.php">http://www.nowamagic.net/javascript/js_UsageOfBraces.php</a>，裡面有一些高深的東西，有空來看一下。
		</td>
	</tr>
	<tr class="red">
		<td>綜合知識</td>
		<td>綜合知識</td>
		<td>http://tc.wangchao.net.cn/it/detail_56951.html</td>
	</tr>
</table>
</main>
</body>
</html>