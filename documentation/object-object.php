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
<meta name="keywords" content="Javascript,物件,object,字典,方法,屬性,使用說明,文件,範例" />
<meta name="description" content="提供完整的object物件及其方法、屬性的說明文件與範例" />
<title>object物件 - Javascript字典</title>
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
<h1>Javascript - object物件</h1>
<table class="doc-table">
	<tr>
		<th>名稱</th>
		<th>類形</th>
		<th>說明</th>
	</tr>
	<tr>
		<td>Object</td>
		<td>物件</td>
		<td>
			在Javascript中任何東西都是物件：變數是物件、函式是物件，常數也是物件，如下例typeof得到結果分別是string, number, object。
<pre>
alert (typeof('abc'));
alert (typeof(123));
var ary = [123, "abc"];
alert (typeof(ary));
</pre>
			既然任何東西都是物件，那建立物件的方法就多了，如下例：
<pre>
var main = new Object;
//建立新物件方法1
var main = {}
//建立新物件方法2（基本上是這兩種建立方法，但如果要把函式、陣列…也算進來，那建立的方法真的非常多）
main.x = 123;
//設定物件成員變數(屬性)之一（看起來"x"這個屬性不用事先宣告就可以直接加入）
main["y"] = "XYZ";
//設定物件成員變數(屬性)之二（中括號也可以直接設定物件的屬性，但好像(除了數值外)要寫成字串才能運作）
main[0] = 1324;
//設定物件成員變數(屬性)之三（JOHN發現用數值指定員也可以，但一定要用main[0]的方式呼叫，不能用main.0…好像是廢話）
alert(main["x"]);
//取得物件屬性並輸出（可以看到，用「.x」宣告的屬性用「["x"]」也可以存取，但用「[x]」又不行，為什麼要設計成一下這樣一下那樣，我也搞不清楚）
alert(main.y);
//取得物件屬性並輸出（同上，反正我覺得有點怪怪的…）
alert(main[0]);
//取得物件屬性並輸出（使用數值做為屬性的範例）
<hr>//看來…上面那個new Object跟{}好像就是建立關聯物件，而關聯物件的操作跟Construct物件有點像但性質又很不同，這些東西真的很複雜，下面再補兩個關聯物件的操作：
var obj1 = {x:123, 'y':'abc', 0:456};
alert(obj1.x +"\n"+ obj1.y +"\n"+ obj1[0]);
//以上的x、'y'、0都是成立的，金架糾變態
</pre>
			上例可以看到在JavaScript中，main.x 與 main["x"] 這兩種語法是通用的（其實在其他語言中，這兩種表示法的語意並不相同）<br>
			<span class="red">// 为obj添加一个属性2a，2a不是合法的标识符（不能以数字开头），不能通过obj.2a来定义<br>obj['2a'] = 'test';</span>
			<hr>
			List All Members in an Object<br>
			這是Javascript的必殺技，使用Javascript的人務必要學會這個技巧。底下函式可以傳回一個物件的所有成員的字串表達式，包括物件中的屬性及方法。在物件導向程式設計中，這種技術叫reflection。
<pre>
function listMember(main){
	var s = "";
	for( key in main ) //使用 in 運算子列舉所有成員
	s += key + ": " + main[key] + "\n";
	return s;
}
</pre>
			範例碼中的key會對應到物件中的屬性名稱，如"x"或"y"，而main[key]則對應到屬性值。<br>
			說這項技巧是必殺技的原因是，你可以透過這項技巧，將物件封裝的黑箱打開來，看看裡面藏有什麼東西。我常用這項技巧來看看IE與Mozilla的Dom物件模型有何不同。試試看下面呼叫範例，就可以知道這項技巧的強大了：
<pre>
var ary = [123, "abc"];
alert(listMember(ary));
alert(listMember(document.location));
</pre>
			<hr>
			Construct Object with Initial Value<br>
			要在建立物件的同時指定物件初始值，必須先透過function建立一個「原型物件」(或稱為constructor)，再透過new運算子建立新物件。例如以下程式碼會建立一個二維陣列的原型，再產生一個新的二維物件。
<pre>
function Array2DVar(x,y){ //定義二維陣列原型
	this.length = x;
	this.x = x; //x維度長度
	this.y = y; //y維度長度
	for(var i=0; i&lt;this.length; i++){ //初始各元素值為 null
		this[i] = new Array(y); //this代表物件本身（JOHN：所以應該是這個物件被指派成陣列了）
	}
}

var a2dv = new Array2DVar(10, 10); //建立新的 10*10 的二維陣列
a2dv[1][3] = "ABC"; //設定二維陣列元素值
a2dv[2][6] = "XYZ";
a2dv[9][9] = 1000;

alert(a2dv[1][3]); //取得二維陣列元素值，並顯示出來
alert(a2dv[2][6]);
alert(a2dv[9][9]);
<hr>根本寫成下面那樣就好了：
function Array2DVar(x,y){
	for(var i=0; i&lt;x; i++){
		this[i] = new Array(y);
	}
}
</pre>
			<hr>
			Initial Array Object<br>
			在 JavaScript 中陣列也是物件 (其實近代多數語言中陣列也都是物件，只有像 C 或 Assembly 這類古老的語言才不把陣列看成物件)，因此也可以用 constructor 的語法來建構。當然 JavaScript 還提供了 [] 語法，以更方便建構陣列，範例如下：
<pre>
a = new Array("abc", "xyz", 1000); //constructor語法，或
a = ["abc", "xyz", 1000]; //陣列標準語法
</pre>
			陣列的元素可以是簡單的資料、其他物件，或是函數。舉個例子來在陣列裡面放函式：
<pre>
b = [ //使用函式作為陣列元素
	function(){alert("這個好玩!")},
	function(){alert("再按一次離開!")},
	function(){alert("再來一次!")},
	function(){alert("最後一次!")}
];

for (var i=0; i&lt;b.length; i++){
	b[i]();
}
</pre>
			最後一個 for 迴圈是個有趣的應用。由於 b 陣列中現在存放的所有元素都是函式，因此我們可以對 b 的每個元素進行呼叫。
			<hr>
			Object as Association Array<br>
			關聯陣列 (Assocation Array) 又稱作 Map 或 Dictionary，是一種物件容器，其中可以放置許多的key-value pair，以存取子物件。在Javascript中，物件本身就可以作為關連陣列。以關聯陣列的方式初始化物件的範例如下：
<pre>
obj1 = {"a": "Athens" , "b": "Belgrade", "c": "Cairo"};
alert(obj1["a"]); //顯示Athens
obj2 = {
	name: "Edward",
	showName: function(){alert(this.name);} //使用函式作為物件屬性
}
obj2.showName(); //顯示Edward
obj2.age = 23; //屬性可以動態加入
</pre>
			其中obj1儲存了三個子元素，其鍵(key)為"a","b"與"c"，而值(value)為"Athens","Belgrade"與"Cairo"。obj2中showName鍵所對應的值為function，因此obj2.showName()即為函式呼叫。
			<hr>
			Object as Return Value<br>
			雖然 Javascript 的函式只能傳回一個變數，但您卻可以將傳回值設定為物件，達到傳回 1個以上變數值的效果
<pre>
function a(){
	return[32, 17];
}
b = a();
alert( b ); //或
alert(a());
function pixel(){
	return {"x": 32, "y":17};
}
point = pixel();
alert(point.x + "\n" + point.y); //或
alert(pixel().x + "\n" + pixel().y);
</pre>

<span class="red">上面這樣也可以!!!!????到底是有幾百種??????</span>
			<hr>
			Delegation Function Object<br>
			函式也是物件，只是其中包含的是程式的邏輯。這項特性可拿來作為委任式的程式設計，亦即使用委任函式當作另一函式的參數：
<pre>
function doloop(begin, end, func){ //這個函式是個iterator
	for (var i=begin; i&lt;end; i++){
		func(i);
	}
}
function func1(i){ //印出 ** n **
	document.writeln("** " + i + " **<br>");
}
doloop(1, 10, func1); //印出 10 行 ** n **
doloop(20, 29,
	function(i){ //印出 10 行 ## n ##
		document.writeln("## " + i + " ##<br>");
	}
);
</pre>
			<hr>
			Object = Properties + Behaviors<br>
			古有明訓：程式 = 資料結構 + 演算法。而物件是建構程式的基本單位，自然的具有相同的性質。物件除了有屬性 (property)，也可具有操作 (behavior)，也就是函式。<br>
			假如我們要使用一維陣列來模擬二維陣列，那麼就無法使用 ary[x][y] 這種表示法來設定或取得陣列成員。不過我可以定義一個 set 方法來設定成員變數，而以 get 方法來取得成員變數值。原型函式定義如下：
<pre>
function Array2D(x,y){ //以一維陣列模擬二維陣列的原型物件
	this.length = x*y; //陣列總長
	this.x = x; //x 維度長度
	this.y = y; //y 維度長度
	for(var i = 0; i &lt; this.length; i++) //初始各元素值為null
		this[i] = null;
	this.get = function(x,y){ //成員函式：取得陣列第[x,y]個元素值
		return this[x*this.x + y];
	}
	this.set = function(x,y,value){ //成員函式：設定陣列第[x,y]個元素值
		this[x*this.x + y] = value;
	}
}
</pre>
			我們接著來使用它：
<pre>
var a2d = new Array2D(10, 10); //建立新的「二維」陣列

a2d.set(1, 3, "ABC"); //設定「二維」陣列元素值
a2d.set(2, 6, "XYZ");
a2d.set(9, 9, 1000);

alert(a2d.get(1,3)); //取得「二維」陣列元素值，並顯示出來
alert(a2d.get(2,6));
alert(a2d.get(9,9));
</pre>
			<hr>
			Member Function Outside of Constructor<br>
			我們也可以將物件成員函式寫於原型物件之外。以下的 Array2D 物件與上一個範例中的 Array2D 物件有相同的作用，只不過這次是寫在原型物件之外。
<pre>
function Array2D(x,y){  // 以一維陣列模擬二維陣列的原型物件
  this.length = x * y;  // 陣列總長
  this.x = x;  // x 維度長度
  this.y = y;  // y 維度長度
  for(var i = 0; i &lt; this.length; i++)  // 初始各元素值為 null
    this[i] = null;
  this.get = Array2DGet;  // 用這種方式把成員函式掛進來
  this.set = Array2DSet;
}

function Array2DGet(x,y){  // 成員函式：取得陣列第 [x,y] 個元素值
  return this[x*this.x + y];
}

function Array2DSet(x,y,value){  // 成員函式：設定陣列第 [x,y] 個元素值
  this[x*this.x + y] = value;
}
</pre>
			<hr>
			Dynamic Object Function<br>
			這裡說明如何為一個已定義物件，動態的加上其他操作的方法。<br>
			如果一物件已定義完成，而您也使用它來建立了新的物件，這時候您想為原型物件增加新的操作 (而不修改原型物件的原始碼)，讓所有該物件的複本都能使用該操作，該如何達成呢？方法是使用物件的 prototype 屬性。以下這個例子，為 Array 這類 Object 在執行期加入一個 max 方法，以取得陣列元素之最大值 (修改自微軟 jscript.chm之範例)：
<pre>
function array_max(){  // 定義求取 Array 最大值之函式
  var i, max = this[0];
  for (i = 1; i &lt; this.length; i++){
  if (max &lt; this[i])
    max = this[i];
  }
  return max;
}
Array.prototype.max = array_max;  // 在 Array 原型中加入 max 函式
</pre>
			上面的程式碼，首先建立一個 array_max 方法，以求取陣列之最大元素。接著將這個方法設定給 Array 原型物件。
<pre>
var x = new Array(1, 2, 3, 4, 5, 6); //透過Array建構子建立一陣列，想求取x中某一元素之最大值
var y = x.max( ); //取得x之最大元素
</pre>
			<hr>
			Dynamic Mix in<br>
			假如物件 dynamic 有 method1, method2 兩個函式；而另一物件 main 有 methodA 及 methodB 兩個函式。現在我想把 dynamic 的所有特性 (feature) 匯入到 main 中，我們可以在 main 中加上一個 imports 函式：
<pre>
function main(){  // main 之建構子
  // ...
  this.imports =
    function (object) {
      if( typeof object == "object")
        for( value in object )
          this[value] = object[value];
    }
  // ...
}
obj = new main();
main.imports(new dynamic());  // 匯入 dynamic 物件之所有功能
</pre>
			這個 imports 函式可以動態的為 main 加上另一物件的所有操作。這種 Mix in 的功能可是 C++/Java 的 static type 語言所望塵莫及的。
			<hr>
			<span class="red">上面那些實在太變態，直接跳到這裡吧</span><br>
			<span class="red">上面那些實在太變態，直接跳到這裡吧</span><br>
			<span class="red">上面那些實在太變態，直接跳到這裡吧</span><br>
			<span class="red">上面那些實在太變態，直接跳到這裡吧</span><br>
			<span class="red">上面那些實在太變態，直接跳到這裡吧</span><br>
			<span class="red">上面那些實在太變態，直接跳到這裡吧</span><br>
			下面的寫法讓你做出一個 oCar 的物件。但可能你需要的產生很多 Car 物件，這種方式只能一個個寫...
<pre>
var oCar = new Object;
oCar.color = 'red';
oCar.doors = 4;
oCar.mpg = 23;
oCar.showColor = function(){
	alert(this.color);
};
oCar.showColor();
</pre>
			那麼我們來做個簡單的包裝吧～
<pre>
function createCar(){
	var oCar = new Object;
	oCar.color = 'red';
	oCar.doors = 4;
	oCar.mpg = 23;
	oCar.showColor = function() {
		alert(this.color);
	};
	return oCar;
};
var oCar1 = createCar();
var oCar2 = createCar();
oCar1.showColor();
oCar2.showColor();
</pre>
			這樣是有一點物件導向的味道了，但是我們如果不用 new 這個關鍵字，感覺缺乏了 Semantic 的意義。
			<hr>
Constructor paradigm<br>
如前述的問題，我們改寫一下，讓 Car 函式成為一個建構式，可以很方便地用一個 new 的關鍵字製造出許多的 Objects
<pre>
function Car(sColor,iDoors,iMpg){
	this.color = sColor;
	this.doors = iDoors;
	this.mpg = iMpg;
	this.showColor = function(){
		alert('這款車的顏色是: ' + this.color);
	};
};
var oCar1 = new Car('red', 4, 23);
var oCar2 = new Car('blue', 3, 25);
oCar1.showColor();
oCar2.showColor();
</pre>
Hybrid Constructor / Prototype Paradigm<br>
上述的寫法是目前最容易看到的寫法之一。但是有些人會考量到效能面，如 showColor() 這個方法，每次 instantiate 時，裡面所有的屬性與方法都會被複製一份。其實我們可以讓這個方法只產生一次、而且被共用。
<pre>
function Car(sColor,iDoors,iMpg){
	this.color = sColor;
	this.doors = iDoors;
	this.mpg = iMpg;
	this.drivers = new Array('Mike','Sue');
}; 
// 我們把 showColor 獨立出來
Car.prototype.showColor = function(){
	alert('這款車的顏色是: ' + this.color);
};
</pre>
			雖然這樣的效能比較好，但我個人是比較喜歡包裝在一個 constructor 內，在撰寫期間比較容易觀看。
			<hr>
			Prototype paradigm<br>
			眼尖的人會看到 Hybrid 這個字，所以我還是介紹一下 Prototype 的寫法
<pre>
//先有一個空的 function
function Car(){
};
//再利用 prototype 的方式幫這個 Car() 新增屬性及方法
Car.prototype.color = 'red';
Car.prototype.doors = 4;
Car.prototype.mpg = 23;
Car.prototype.showColor = function() {
	alert(這款車的顏色是 ' + this.color);
};
//無法用參數...
var oCar1 = new Car();
var oCar2 = new Car();
</pre>
			這種寫法有一個很討厭的缺點，就是沒辦法利用參數設定屬性。必須在 Instantiate 物件後再 Assign。我是從來沒用過這個寫法！
			<hr>
			JSON<br>
			Object Literal<br>
			剛剛我們看到了以 Function 當做是一個 Class 類別，以這個 Class 類別作基底，產生 ( Instantiate ) 出一個個的物件 ( Instances )。其實對於物件，我們可以有著更多好玩的寫法。
<pre>
var oYAHOO = {
	'bu':['Search & Community','MIEF','PC','EC'],
	'employee':[
		{'name':'aaron','role':'product manager'},
		{'name':'midoli','role':'f2e engineer'},
		{'name':'beckie','role':'f2e engineer'},
		{'name':'joseph','role':'f2e engineer'},
		{'name':'alex','role':'f2e engineer'}, 
		{'name':'gina','role':'f2e engineer'}
	],
	'enemy':null,
	'employee_total':350,
	'spirit':['fun','innovative'],
	'web2dot0':function() {
		//do something !!!!!
	}
};
</pre>
這邊的 oYAHOO 經過宣告後就是一個獨立的物件<br>
裡面的任何一個屬性，我們都可以用 dot notation 的方式來做存取，如 oYAHOO.bu 會取得陣列, oYAHOO.employee[0].name 會取得字串 ('aaron'), oYAHOO.enemy 會得到空值 (null), oYAHOO.employee_total 會得到整數, oYAHOO.next_action 會得到一個 function<br>
另外你也可以透過如陣列索引的方式存取 oYAHOO[0] 會與 oYAHOO.bu 相同<br>
這樣的格式，就是我們所稱的 JSON (JavaScript Object Notation)，目前看起來似乎是儲存資料用的比較多，但其實它也可以被拿來當作是一種我們物件導向程式的寫法喔！稍後再提！
			<hr>
			If you somehow run method 'main' (e.g. by having it in your body onload event), you would see:<br>
			"My name is Foo Bar and I am 33" in a dialog that pops up.
<pre>
function Person(name, age) {
	this.name = name;
	this.age = age;
}

Person.prototype.display = function() {
	alert('My name is ' + this.name + ' and I am ' + this.age);
}

function main() {
	var person = new Person('Foo Bar', 33);
	person.display();
}
</pre>
			……………………<br>
			……………………<br>
			<a href="http://izittm.blogspot.com/2008/03/javascript-oo-part-1.html">http://izittm.blogspot.com/2008/03/javascript-oo-part-1.html</a>
			<hr>
			Javascript Object 物件練習：<br>
			Explicit物件-隱性物件 使用時需加上new指令
			<ul>
				<li>User-Define-由使用者自訂的空物件</li>
				<li>Instant物件-物件內已有特定的功能和屬性</li>
			</ul>
			Implicit物件-顯性物件 使用不需加上new指令<br>
			……………………<br>
			……………………<br>
			<a href="http://life-jumping.blogspot.com/2008/09/javascript-object.html">http://life-jumping.blogspot.com/2008/09/javascript-object.html</a>
			<hr>
			……………………<br>
			……………………<br>
			<a href="http://ant4js.blogspot.com/2008/12/object_15.html">http://ant4js.blogspot.com/2008/12/object_15.html</a>
			<hr>
			……………………<br>
			……………………<br>
			<a href="http://www.javascriptkit.com/jsref/object.shtml">http://www.javascriptkit.com/jsref/object.shtml</a>
			<hr>
			……………………<br>
			……………………<br>
			<a href="http://www.javascriptkit.com/jsref/json.shtml">http://www.javascriptkit.com/jsref/json.shtml</a>
			<hr>
			……………………<br>
			……………………<br>
			<a href="http://ckwsteven.pixnet.net/blog/post/27864965-%E5%86%8D%E8%AB%96javascript%E7%89%A9%E4%BB%B6%E5%B0%8E%E5%90%91-%E5%B0%81%E8%A3%9D">http://ckwsteven.pixnet.net/blog/post/27864965-%E5%86%8D%E8%AB%96javascript%E7%89%A9%E4%BB%B6%E5%B0%8E%E5%90%91-%E5%B0%81%E8%A3%9D</a>
			<hr>
			……………………<br>
			……………………<br>
			<a href="http://emn178.pixnet.net/blog/post/94432438-javascript%E6%95%99%E5%AD%B8---%E8%B3%87%E6%96%99%E5%9E%8B%E6%85%8B(data-type)---%E4%B8%8B">http://emn178.pixnet.net/blog/post/94432438-javascript%E6%95%99%E5%AD%B8---%E8%B3%87%E6%96%99%E5%9E%8B%E6%85%8B(data-type)---%E4%B8%8B</a>
			<hr>
			……………………<br>
			……………………<br>
			<a href="http://pydoing.blogspot.tw/2010/12/javascript-prototype.html">http://pydoing.blogspot.tw/2010/12/javascript-prototype.html</a>
			<hr>
			……………………<br>
			……………………<br>
			<a href="https://developer.mozilla.org/zh-TW/docs/Core_JavaScript_1.5_%E6%95%99%E5%AD%B8/%E7%89%A9%E4%BB%B6%E7%9A%84%E6%93%8D%E4%BD%9C%E8%AA%9E%E6%B3%95">https://developer.mozilla.org/zh-TW/docs/Core_JavaScript_1.5_%E6%95%99%E5%AD%B8/%E7%89%A9%E4%BB%B6%E7%9A%84%E6%93%8D%E4%BD%9C%E8%AA%9E%E6%B3%95</a>
			<hr>
			……………………<br>
			……………………<br>
			<a href="http://pydoing.blogspot.tw/2012/12/JavaScript-Object.html">http://pydoing.blogspot.tw/2012/12/JavaScript-Object.html</a>
			<hr>
			……………………<br>
			……………………<br>
			<a href="http://pydoing.blogspot.tw/2013/01/JavaScript-Encrypt-Object.html">http://pydoing.blogspot.tw/2013/01/JavaScript-Encrypt-Object.html</a><br><br>
			<span class="red">怎麼沒完沒了的感覺…</span><br>
			<span class="red">怎麼沒完沒了的感覺…</span><br>
			<span class="red">怎麼沒完沒了的感覺…</span><br>
			<span class="red">怎麼沒完沒了的感覺…</span><br>
			<span class="red">怎麼沒完沒了的感覺…</span><br>
			<span class="red">怎麼沒完沒了的感覺…</span>
		</td>
	</tr>
	<tr>
		<td>constructor</td>
		<td>屬性</td>
		<td>
			存有產生物件實體的函式其位置。繼承自 Function 的特徵。
<pre>
document.write(o.constructor);
</pre>
			Specifies the function that's the constructor for the object.
		</td>
	</tr>
	<tr>
		<td>hasOwnProperty()</td>
		<td>方法</td>
		<td>
			檢查物件是否直接擁有一個特徵，回傳布林值。此方法不會向下檢查繼承鏈。
<pre>
o.myProperty='新的';
document.write( o.hasOwnProperty('myProperty') +'&lt;br&gt;');
document.write( o.hasOwnProperty('constructor')
</pre>
			Returns true if an object has a property with the name as indicated by the parameter prop. Returns false if the property doesn't exist or is inherited from the prototype chain versus a direct property of the object.
<pre>
var dog=new Object()
dog.age=5
dog.hasOwnProperty("age") //returns true
dog.hasOwnProperty("favoritefood") //returns false, property doesn't exist
dog.hasOwnProperty("toString") //returns false, as toString property is inherited
</pre>
		</td>
	</tr>
	<tr>
		<td>isPrototypeOf()</td>
		<td>方法</td>
		<td>
			檢查一個物件是否存在另一個物件的繼承鏈之中，回傳布林值。
<pre>
document.write( String.prototype.isPrototypeOf(o) +'&lt;br&gt;');
document.write( Object.prototype.isPrototypeOf(o) +'&lt;br&gt;&lt;br&gt;');

var n=new Number('33.5');
document.write( Number.prototype.isPrototypeOf(n) +'&lt;br&gt;');
document.write( Object.prototype.isPrototypeOf(n) +'&lt;br&gt;');
document.write( Function.prototype.isPrototypeOf(n) );
</pre>
			執行結果：<br>
			true<br>
			true<br><br>
			true<br>
			true<br>
			false<br><br>
			上例中，由於 isPrototypeOf() 是 Object 的方法，而 Function 是父，Object 是子，所以 Function 沒有 isPrototypeOf() 這個方法。<br>
			Returns true if one object is the prototype of another . Use this method to detect the class of an object (obj).<br>
			Example 1:
<pre>
var fruits=["apple", "grapes"]
Array.prototype.isPrototypeOf(fruits) //returns true, "fruits" in an array
Function.prototype.isPrototypeOf(fruits.slice) //returns true, fruits.slice() is a function
</pre>
			Example 2:
<pre>
function Car(){
//Car class here
}

function Toyota(){
//Toyota object here
}

Toyota.prototype=new Car() //inherit from Car class
var Prius=new Toyota //instance of Toyota object
Car.prototype.isPrototypeOf(Prius) //returns true, Prius is an instance of Toyota which inherits from Class Car
</pre>
		</td>
	</tr>
	<tr>
		<td>Object.keys()</td>
		<td>方法</td>
		<td>
			Supported in FF4+, IE9+, Chrome5+, and Safari 5+<br>
			Returns an array of all the enumerable property names of an object (though not those in its prototype chain). The order of the names is the same as that returned by using a for-in loop to retrieve the property names. For example:
<pre>
var box={width:100, height:35, length:40}, boxvolumn=1
var keys=Object.keys(box) //returns ["width", "length", "height"]

for (var i=0; i&lt;keys.length; i++){
 boxvolumn*=box[keys[i]] //multiple all property values of object
}
alert(boxvolumn) //alerts 140000
</pre>
			The difference between using Object.keys() to return an object's properties and using a for-in loop is that the later also returns any enumerable properties inherited from the object's prototype chain, not just those directly attached to the object.<br>
			To get all enumerable and non enumerable properties of an object, use getOwnPropertyNames(obj) instead. All user defined properties of an object are enumerable, while in general, built in properties/methods are not.<br>
			Note: See Looping through an object's properties as well.
		</td>
	</tr>
	<tr>
		<td>Object.getOwnPropertyNames()</td>
		<td>方法</td>
		<td>
			Similar to keys(obj) above but also returns the non enumerable properties of an object. All user defined properties of an object are enumerable, while in general, built in properties/methods are not.<br>
			You can use getOwnPropertyNames(obj) to get all the properties of built in objects easily:
<pre>
var stringprops=Object.getOwnPropertyNames(String)

//returns ["prototype", "quote", "substring", "toLowerCase", "toUpperCase", "charAt", "charCodeAt", "indexOf", "lastIndexOf", "trim", "trimLeft", "trimRight", "toLocaleLowerCase", "toLocaleUpperCase", "localeCompare", "match", "search", "replace", "split", "substr", "concat", "slice", "fromCharCode", "length", "arity", "name", "arguments", "caller"]
</pre>
<pre>
var stringprops=Object.getOwnPropertyNames(Array)

//returns ["prototype", "join", "reverse", "sort", "push", "pop", "shift", "unshift", "splice", "concat", "slice", "indexOf", "lastIndexOf", "forEach", "map", "reduce", "reduceRight", "filter", "some", "every", "isArray", "name", "length", "arity", "arguments", "caller"]
</pre>
Note: See Looping through an object's properties as well.
		</td>
	</tr>
	<tr>
		<td>propertyIsEnumerable(prop)</td>
		<td>方法</td>
		<td>
			檢查物件的一個特徵，是否可以用在 for( in ) 迴圈（不包括繼承的特徵），回傳布林值。
<pre>
document.write( o.propertyIsEnumerable('myProperty') +'&lt;br&gt;');
document.write( o.propertyIsEnumerable('constructor') );
</pre>
執行結果：true false<br>
			Returns true if the entered property name of this object is enumerable using for-in Returns false if either property doesn't exist, or if the object inherited the property from the prototype object. All user defined properties to an object are enumerable, while in general, built in properties/methods are not.
<pre>
var mycar=new Object()
mycar.size="mid"

mycar.propertyIsEnumerable("size") //returns true for local user defined property
mycar.propertyIsEnumerable("toString") //returns false for prebuilt property
mycar.propertyIsEnumerable("cost") //returns false for non existent local property
</pre>
		</td>
	</tr>
	<tr>
		<td>toLocaleString()</td>
		<td>方法</td>
		<td>
			此方法呼用 toString()，可以改寫成有地區特色的方法。例如物件 Date 就改寫此方法。
<pre>
document.write( o.toLocaleString() ); //22.5
</pre>
		</td>
	</tr>
	<tr>
		<td>toString()</td>
		<td>方法</td>
		<td>
			將物件實體轉成字串。
<pre>
document.write( o.toString() ); //22.5
</pre>
			A method that's typically called implicitly by JavaScript whenever you call an object within the context in which a string value is expected, such as alerting an object: alert(mycar). By default it returns the object in the string representation [object Type].<br>
			A common task for programmers to do is to override this method with something more robust, especially for custom objects. the default returned value is less than descriptive of the object. For example:
<pre>
function records(){
 this.records=[]
 for (var i=0; i&lt;arguments.length; i++)
  this.records.push(arguments[i])
}

records.prototype.toString=function(){
 return "All records: "+this.records.join(" | ")
}

var myrecords=new records("George", "Edward", "Sue")
alert(myrecords.toString()) //alerts "George | Edward | Sue"
</pre>
		</td>
	</tr>
	<tr>
		<td>valueOf()</td>
		<td>方法</td>
		<td>
			傳回物件實體的基本值。可以直接使用物件實體名稱不加 valueOf()，就能傳回物件的基本值。如果物件沒有基本值，會回傳 [object Object]。可以改寫此方法以配合需要，系統內建的物件型態都有改寫此方法。
<pre>
document.write( o.valueOf() +'<br />');
document.write( o +'<br />');
var empty=Object();
document.write( empty );
</pre>
			執行結果：<br>
			22.5<br>
			22.5<br>
			[object Object]<br><br>
			A method that's typically called implicitly by JavaScript whenever you call an object within the context in which a primitive value is expected. Rarely if ever called explicitly.
		</td>
	</tr>
	<tr>
		<td>stringify(obj, [replacer], [space])</td>
		<td>JSON方法</td>
		<td>
			Converts a JavaScript object into a JSON string. For example:<br>
			……………………<br>
			……………………<br>
			<a href="http://www.javascriptkit.com/jsref/json.shtml">http://www.javascriptkit.com/jsref/json.shtml</a>
		</td>
	</tr>
	<tr>
		<td>parse(string, [reviver])</td>
		<td>JSON方法</td>
		<td>
			Converts a JSON string into a JavaScript object. For example:<br>
			……………………<br>
			……………………<br>
			<a href="http://www.javascriptkit.com/jsref/json.shtml">http://www.javascriptkit.com/jsref/json.shtml</a>
		</td>
	</tr>
	<tr>
		<td>toJSON()</td>
		<td>JSON方法</td>
		<td>
			toJSON() dictates how a JSON string will be serialized when JSON.stringify() is called. If this method is defined within the JSON object, its return value will be used by JSON.stringify() to form the new JSON string.<br>
			……………………<br>
			……………………<br>
			<a href="http://www.javascriptkit.com/jsref/json.shtml">http://www.javascriptkit.com/jsref/json.shtml</a>
		</td>
	</tr>
</table>
</main>
</body>
</html>