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
<meta name="keywords" content="Javascript,Function,函式,函數,物件,object,字典,方法,屬性,使用說明,文件,範例" />
<meta name="description" content="提供完整的Function物件及其方法、屬性的說明文件與範例" />
<title>Function物件 - Javascript字典</title>
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
<h1>Javascript - Function物件</h1>
<table class="doc-table">
	<tr>
		<th>名稱</th>
		<th>類形</th>
		<th>說明</th>
	</tr>
	<tr>
		<td>Function</td>
		<td>物件</td>
		<td>
			宣告函數，語法如下：
<pre>
function fnName(argument1,argument2,...,argumentn){statement}
</pre>
			也可寫成下範例中預定義對象的寫法：
<pre>
var myFn = function(a,b){alert(a+b);}
myFn(123,123); //返回246
</pre>
		</td>
	</tr>
	<tr>
		<td>arguments</td>
		<td>物件</td>
		<td>Javascript函式程式碼中的特殊對象，主要用來訪問函式的參數。透過arguments物件，開發者無需明確指出參數的名稱就能夠直接訪問它們。例如arguments[0]便可訪問第一個參數的值，如下例(1)。<br />
			例1：function sum(num1,num2){return arguments[0]+arguments[1];} alert(sum(2,3));<br />
			另外還可以透過arguments.length來檢測傳遞給函數的參數個數，如下例(2)、例(3)。<br />
			例2：function sum(num1,num2){return arguments.length;} alert(sum(1,2,3,4));<br />
			傳回sum()被呼叫時欲導入的參數個數，傳回值為4。<br />
			例3：function sum(num1,num2){return sum.length;} alert(sum(1,2,3,4));<br />
			傳回函式預先設定的參數個數，傳回值是2。<br />
			注意：任何自訂函數都可以接受任意個參數，根據Netscape文件檔，最多能接受25個(自己沒有測過)。<br />
			範例如下：
<pre>
function fnSum(){
	if(arguments.length == 0){
		return;
	}
	else if(arguments.length == 1){
		return arguments[0]+5;
	}
	else{
		var sum = 0;
		for(var i=0; i&lt;arguments.length; i++){
			sum+=arguments[i];
		}
		return sum;
	}
}
window.onload = function(){
	document.write(fnSum(45)+"&lt;br /&gt;");
	document.write(fnSum(45,50)+"&lt;br /&gt;");
	document.write(fnSum(45,50,55,60)+"&lt;br /&gt;");
}
</pre></td>
	</tr>
	<tr>
		<td>caller</td>
		<td>屬性</td>
		<td>
			References the function in which the current function is called inside of. If the current function is called at the top level, caller returns null. You can use this property to check the context in which a function is being called. For example:
<pre>
function calltest(){
	alert(calltest.caller);
}

calltest();
//alerts null, as calltest() is being called at the top level

function myresidence(){
	calltest();
}

myresidence();
//alerts function myresidence(), the function in which calltest() was called inside
</pre>
		</td>
	</tr>
	<tr>
		<td>length</td>
		<td>屬性</td>
		<td>
			Returns the number of expected parameters for a function. Contrast that with arguments.length, which returns the actual number of parameters entered. The following function contains a generic check to ensure the user has entered the expected number of parameters into it:
<pre>
function trianglearea(b,h){
	if(arguments.length!=trianglearea.length)
		alert("Incorrect number of parameters entered. Correct should be " + trianglearea.length);
	else
		alert(0.5*b*h);
}

trianglearea(3,8);
//alerts 12
trianglearea(3,8,4);
//alerts "Incorrect number of parameters entered. Correct should be 2"
</pre>
		</td>
	</tr>
	<tr>
		<td>prototype</td>
		<td>屬性</td>
		<td>
			在JavaScript中，我們可以增添客制化的屬性於 pre-built物件或是我們自己創建的物件上。例如：
<pre>
//adding a custom property to a prebuilt object
var myimage=new Image();
myimage.size="26k";
 
/*adding a custom property to the custom object "circle"*/
//First, create the custom object "circle"
function circle(){};
var smallcircle=new circle();
smallcircle.pi=3.14159;
</pre>
			不過，用這種方式所創建的屬性只屬於那個物件的實體。也就是說，此例子中， pi 只屬於 smallcircle這個物件(它是 circle的實體)。<br><br>
			也就是說，如果我們現在var bigcircle = new circle();<br><br>
			那麼bigcircle.pi是undefined。<br><br>
			有時候，我們會想要新增一個屬性，並且希望該屬性只屬於某個物件；有些時候，我們希望所新增的屬性可以讓所有的物件實體存取，而不是只屬於某一個特定的物件實體。例如上面的例子，pi 不是只有 smallcircle 才有，bigcircle 也有 pi。因此，對於pi這個屬性，我們可以合理的假設對於圓，它是預設的屬性。那麼，程式該如何設計呢？這是為什麼在Javascript中會有prototype這個物件。<br><br>
			在增添客制化的屬性時，使用 prototype 關鍵字在那個物件上。這樣一來，每一個該物件的實體均會有這個屬性。例如：
<pre>
//First, create the custom object "circle"
function circle(){};
circle.prototype.pi=3.14159;
</pre>
			同理，當我們要將所定義的函數關連成為物件的方法時，在之前使用 prototype 關鍵字。
<pre>
//First, create the custom object "circle"
function circle(){}
circle.prototype.pi=3.14159;
 
// create the object method
circle.prototype.alertpi = function(){
	alert(this.pi);
}

var newCircle = new circle();
newCircle.alertpi();
</pre>
			範例，為String增添一個方法：
<pre>
/*code for extending String object with method that writes text backwards*/
//core custom method for writing text backwards
function outputbackwards(){
	for (i=this.length-1;i&gt;=0;i--){
		document.write(this.charAt(i))
	}
}
//Attach custom method to string object
String.prototype.writeback=outputbackwards;
</pre>
			
			※補一個網路上的prototype說明：<br>
			<a href="http://www.codedata.com.tw/javascript/essential-javascript-15-prototype/">http://www.codedata.com.tw/javascript/essential-javascript-15-prototype/</a>
			<hr>
			Lets you add custom properties and methods to a function's prototype object, which instantly adds them to all instances of the function initialized using the new operator (also called a constructor function). In the below, I'm adding a getprice() method to the constructor function Car() that is reflected on all instances of new Car():
<pre>
function Car(baseprice, years_old){
	this.baseprice=baseprice;
	this.history=years_old;
}

Car.prototype.getprice=function(){ //add method getprice() to all instances of Car (called using new Car())
	this.price=this.baseprice - (this.history * 1000);
	alert(this.price);
}

var mytoyota=new Car(20000, 10)
mytoyota.getprice() //alerts 10,000

var myford=new Car(18000, 5)
myford.getprice() //alerts 13,000
</pre>
			You can also use the prototype object to extend prebuilt JavaScript objects that are initialized using the new operator with custom methods, such as with Date(), Array(), or String(). Lets extend the default String object with a backwards() method that takes a string and returns it backwards (ie: "george" becomes "egroeg"):
<pre>
String.prototype.backwards=function(){
	var strlen=this.length, reversestr=''
	for (var i=strlen-1; i>-1; i--){ //loop through each char within string backwards
		reversestr+=this.charAt(i);
	}
	return reversestr;
}

document.write('george'.backwards()) //writes out "egroeg";
</pre>
		</td>
	</tr>
	<tr>
		<td>apply()</td>
		<td>方法</td>
		<td>
		    <a href="http://www.codedata.com.tw/javascript/essential-javascript-11-what-is-this">http://www.codedata.com.tw/javascript/essential-javascript-11-what-is-this</a><br>
			https://www.youtube.com/watch?v=8yMzWrGlKxU<br>
			http://www.dotblogs.com.tw/lastsecret/archive/2010/11/30/19826.aspx<br>
			http://fireqqtw.logdown.com/posts/258035-javascriptcall-and-apply<br>
			http://dreamerslab.com/blog/tw/javascript-call-and-apply/<br>
			http://www.javascriptkit.com/jsref/function.shtml
		</td>
	</tr>
	<tr>
		<td>call()</td>
		<td>方法</td>
		<td>
			吃什麼吐什麼；用於調用函數以及傳遞參數，功能和apply()相同，唯一不同的是call()的參數必需用列舉的，而apply()可以接受一個陣列。<br>
			語法：funcA.call([funcB, TargetObj], arg1, arg2, argN...);<br>
			以下為範例： 
<pre>
function sum(x,y){
	return x+y;
}
function call_1(num1, num2){
	return sum.call(this, num1, num2); //這裡的this代表call_1()
}
alert(call_1(5, 5));
</pre>
            以下是codedata上對「this」的詳解，跟call()方法有很大的關聯：<br><br>
            在 JavaScript 中，函式是物件，是 Function 的實例，可以在變數間任意指定，可以傳給函式的參數參考，當然，要新增為物件的特性也是可以的。例如：
<pre>
function toString(){
    return '[' + this.name + ',' + this.age + ']';
}
 
var p1 = {
    name: 'Justin', 
    age: 35,
    toString: toString
};
 
var p2 = {
    name: 'momor', 
    age: 32,
    toString: toString
};
 
console.log(p1.toString()); // 輸出：[Justin,35] 
console.log(p2.toString()); // 輸出：[momor,32]
</pre>
            在上例中定義了一個 toString 函式，並分別設定為 p1 與 p2 的 toString 來參考，透過 p1 呼叫時，toString 就像是 p1 的方法（Method），透過 p2 呼叫時，toString 就像是 p2 的方法。<br><br>
            在上例中，toString 函式中使用了 this，在呼叫函式時，每個函式都會有個 this，然而 this 參考至哪個物件，其實依呼叫方式而有所不同。以上例而言，透過 p1 呼叫時，toString 中的 this 會參考至 p1 所參考的物件，也因此顯示 p1 物件的 name 與 age 值，透過 p2 呼叫時，toString 中的 this 則會參考至 p2 所參考的物件。<br><br>
            如果呼叫函式時是透過物件與點運算子的方式呼叫，則 this 會參考至點運算子左邊的物件。<br><br>
            在 JavaScript 中，函式是 Function 的實例，Function 都會有個 call 方法，可以讓你決定 this 的參考對象。舉例來說，你可以如下呼叫：
<pre>
function toString(){
    return '[' + this.name + ',' + this.age + ']';
}
 
var p1 = {
    name: 'Justin', 
    age: 35,
};
 
var p2 = {
    name: 'momor', 
    age: 32,
};
 
console.log(toString.call(p1)); // 輸出：[Justin,35]
console.log(toString.call(p2)); // 輸出：[momor,32]
</pre>
            這次並沒有將 toString 指定為物件的特性，而是直接使用 call 方法來呼叫函式， call 方法的第一個參數就是用來指定函式中的 this 所參考的物件。如果函式原本具有參數，則可接續在第一個參數之後。例如：
<pre>
function add(num1, num2){
    return this.num + num1 + num2;
}

var o = {num: 10};

console.log(add.call(o, 20, 30)); // 輸出：60
</pre>
            <a href="http://www.javascriptkit.com/jsref/function.shtml">http://www.javascriptkit.com/jsref/function.shtml</a><br>
		</td>
	</tr>
	<tr>
		<td>toString()</td>
		<td>方法</td>
		<td></td>
	</tr>
	<tr>
		<td>return</td>
		<td>關鍵字</td>
		<td>
			返回函式中的值。以下範例(1)將傳回兩數的合。<br />
			例1：function sum(num1,num2){return num1+num2; alert("text");} alert(sum(2,3));<br />
			注意：在return以後的程式區段將不會被執行。例如，此例中sum()被呼叫後text並沒有被alert出來。<br />
			另一種情況，如果函數中本身沒有返回值，但又希望在某些時候退出函數，則可以使用沒有參數的return語句來隨時退出函數，如下例(2)。<br />
			例2：function sum(theName){if(theName == "bye"){return;} alert(theName);} sum("bye");<br><br>
			return false：<br>
			防止瀏覽器預設的行為，例如點擊連結標籤時取消連結、取消表單的送出等，如下例：
<pre>
&lt;a href="http://www.google.com" onclick="console.log('The link was clicked.'); return false"&gt;
	點我！
&lt;/a&gt;
</pre>
		</td>
	</tr>
</table>
 </main>
</body>
</html>