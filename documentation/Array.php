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
<meta name="keywords" content="Javascript,Array,陣列,物件,object,字典,方法,屬性,使用說明,文件,範例" />
<meta name="description" content="提供完整的Array物件及其方法、屬性的說明文件與範例" />
<title>Array物件 - Javascript字典</title>
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
<h1>Javascript - Array物件</h1>
<table class="doc-table">
	<tr>
		<th>名稱</th>
		<th>類形</th>
		<th>說明</th>
	</tr>
	<tr>
		<td>Array</td>
		<td>物件</td>
		<td>
			陣列物件(Array object)是在一個單一變數裏儲存一組的值(可以是字串、數值，或是另一個物件)。<br>
			字串、數值和布林值都屬於離散值，如果某個變數的值是離散的，那它就只可以擁有一個值。如果想用一個變數來儲存好幾個值，就需要使用陣列(array)。<br>
			陣列是由多個值構成的一個集合，集合中的每個值都是這個陣列的個別元素；例如我們可以使用一個名為team的變數來儲存一個團隊中所有隊員的名字。<br>
			在Javascript中，陣列使用new關鍵字來宣告，同時還可以指定這個陣列元素的個數，也就是陣列的長度(length)，以下列出各種宣告陣列的方式：
			<ul style="color:gray; margin-bottom:4px; line-height:18px;">
				<li style="padding-bottom:6px;">var choices = new Array(); //使用new關鍵字宣告一個新的陣列</li>
				<li style="padding-bottom:6px;">var choices = Array(); //不使用new直接用Array物件宣告，效果怎樣沒測過…</li>
				<li style="padding-bottom:6px;">var choices = new Array(3); //帶入指定陣列元素數量的參數</li>
				<li style="padding-bottom:6px;">var choices = new Array('red','green','blue'); //直接用參數建立陣列</li>
				<li style="padding-bottom:6px;">var colors = ['red','green','blue']; //使用中括弧直接宣告，用逗點做分隔</li>
				<li style="padding-bottom:6px;">var colors = []; //宣告一個空的陣列</li>
				<li style="padding-bottom:6px;">var ary = new Array(); ary[0]='01'; ary[1]='02'; ary[2]='03'; ...; //動態新增陣列內的元素</li>
				<li style="padding-bottom:6px;">var myFuncs = [ function(){...}, function(){...}, function(){...}, ...]; //將函數存入陣列中</li>
			</ul>
			下例將示範將函數存入陣列中，再使用該陣列函數的索引值呼叫指定的函數：
<pre>
var cellFuncs = [
	function(data){return data*1;},
	function(data){return data*2;},
	function(data){return data*3;},
	function(data){return data*4;}
];
alert(cellFuncs[2](5)); //返回15
</pre>
			關聯陣列(Assocation Array)又稱作 Map 或 Dictionary，是一種物件容器，以「{}」包起來，其中可以放置許多的key-value pair，以存取子物件。在Javascript中，物件本身就可以作為關連陣列。下例將前一個範例以關聯陣列來改寫：<br>
<pre>
var myFuncs = {
	a:function(data){return data*1;},
	b:function(data){return data*2;},
	c:function(data){return data*3;},
	d:function(data){return data*4;}
};
alert(myFuncs.b(5)); //返回10
</pre>
			另外，在Javascript中任何東西都是物件，下例在關聯陣列加入了「this」的物件操作：
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
			我們常常會使用for迴圈一次訪問所有的陣列元素並加以處理，範例如下：
<pre>
var myCars = ["Saab","Volvo","BMW"];
for(i=0;i&lt;myCars.length;i++){
	alert(myCars[i]) //依序傳回每個陣列元素
}
</pre>
			用for/in語法也可以達到同樣效果，如下例：
<pre>
var myCars = ["Saab","Volvo","BMW"];
for(x in myCars){alert(myCars[x]);} //依序傳回每個陣列元素
</pre>
			<hr>
			有別於其他的語言，JavaScript 並沒有明確的陣列資料類型。取而代之，提供了 Array 物件，可以直接實體化或使用陣列的字面表達記法。<br>Array 物件有以各種方式操作陣列的方法，如合併、反轉、排序，以及length等的各種屬性。而這些方法中又分為賦值函數方法(mutator methods)以及訪問器方法(accessor methods)；賦值函數方法一旦被呼叫後就會立刻作用在陣列物件上，而訪問器方法則會建立一個陣列的淺層副本(shallow copy)，再傳回該副本作後的資料，以下列出陣列中的賦值函數方法及訪問器方法：<br><br>
			Array物件的賦值函數方法(mutator methods)
<pre style="margin-top:0;">
pop(), push(), reverse(), shift(), sort(), splice(), unshift()
</pre>

			Array物件的訪問器方法(accessor methods)
<pre style="margin-top:0;">
concat(), join(), slice(), toSource(), toString(), indexOf(), lastIndexOf()
</pre>
			下例將說明賦值函數方法的特性：
<pre>
var myArray = ['001','002','003'];
var mySort = myArray.reverse()
alert(mySort); //返回003,002,001
alert(myArray); //返回003,002,001，原本的myArray也被反轉了
</pre>
			下例將說明訪問器方法的特性：
<pre>
var myArray1 = ['001','002','003'];
var myArray2 = ['004','005','006'];
var myConcat = myArray1.concat(myArray2);
alert(myConcat); //返回001,002,003,004,005,006
alert(myArray1); //返回001,002,003，原本的myArray1並沒有被改變
</pre>
			那麼要怎樣做才可以不影響到原來的陣列呢？請見下面兩個例子：
<pre>
var myArray = ['001','002','003'];
var mySort = myArray.concat([]); //在這裡用concat做副本合併一個空陣列 等於做了副本內容跟原陣列一樣
mySort.reverse();
alert(mySort); //返回003,002,001
alert(myArray); //返回001,002,003，原本的myArray就被保留了
------------------------ 分隔線 ------------------------
var myArray = ['001','002','003'];
var mySort = myArray.slice().reverse(); //同上例使用訪問器方法先製作副本
alert(mySort); //返回003,002,001
alert(myArray); //返回001,002,003
</pre>
			<hr>
			多維陣列：如果一個陣列的每個元素又是陣列的話，就變成陣列內有陣列，即是二維陣列了。宣告一個二維陣列不須要特別的寫法，須運用 for 迴圈便可……不會寫啦!!!!!!!!!!!!!!!!!
<pre>
多維陣列範例1：
function Array2DVar(x,y){//定義二維陣列原型
	this.length = x;
	this.x = x; //x維度長度
	this.y = y; //y維度長度
	for(var i=0; i&lt;this.length; i++){ //初始各元素值為null
		this[i] = new Array(y); //this代表物件本身
	}
}

var a2dv = new Array2DVar(10, 10); //建立新的10*10的二維陣列
a2dv[1][3] = "ABC"; //設定二維陣列元素值
a2dv[2][6] = "XYZ";
a2dv[9][9] = 1000;

alert(a2dv[1][3]); //取得二維陣列元素值，並顯示出來
alert(a2dv[2][6]);
alert(a2dv[9][9]);
</pre>
<span class="red">多維陣列不是寫成myAry[1,2] = 134;就好了嗎？上面那些說明到底是哪裡來的？</span><br><br><br>
		</td>
	</tr>
	<tr class="red">
		<td>constructor</td>
		<td>屬性</td>
		<td>
			說明1：包含建立物件模樣的功能<br>
			說明2：返回對創建此對象的陣列函數的引用<br>
			…兩個說明都看不懂…<br>
			範例1：
<pre>
var test=new Array();
if (test.constructor==Array){alert("This is an Array");} //返回This is an Array
if (test.constructor==Boolean){alert("This is a Boolean");}
if (test.constructor==Date){alert("This is a Date");}
if (test.constructor==String){alert("This is a String");}
</pre>
		</td>
	</tr>
	<tr>
		<td>length</td>
		<td>屬性</td>
		<td>
			獲取陣列的長度，如下例：
<pre>
var mapArea = new Array("China","USA","UK");
alert(mapArea.length) //返回3;
</pre>
			小提醒：mapArea.length返回的3是mapArea裡元素的數量，如果要獲得陣列內第3個元素是要寫成mapArea[2]喔，寫成mapArea[3]會傳回undefind喔，因為索引值是從0開始的，下例可以幫助理解：
<pre>
var maps = new Array('China','USA','Britain');
maps[20] = 'Japan';
alert(maps.length); //返回21
alert(maps[10]); //返回undefined
alert(maps[20]); //返回Japan
alert(maps[21]); //返回undefined
</pre>
			你也可以把值代入給 length 屬性。寫下小於陣列中已存放的項目的數目，就會截掉其餘的項目；寫下 0 就完全清空陣列︰
<pre>
var cats = ['Dusty','Misty','Twiggy'];
print(cats.length); // 3

cats.length = 2;
print(cats); // 輸出 "Dusty,Misty" - Twiggy 被移除了

cats.length = 0;
print(cats); // 什麼也沒輸出；cats 陣列是空的
</pre>
		</td>
	</tr>
	<tr class="red">
		<td>prototype</td>
		<td>屬性</td>
		<td>
			說明1：允許你增加增列的性質<br>
			說明2：使您有能力向對象添加屬性和方法<br>
			…這兩個說明都有看沒有懂…
			範例1：
<pre>
function employee(name,job,born){
	this.name=name;
	this.job=job;
	this.born=born;
}
var bill=new employee("Bill Gates","Engineer",1985);
employee.prototype.salary=null;
bill.salary=20000;
alert(bill.salary);
</pre>
			…範例也是有看沒有懂…
		</td>
	</tr>
	<tr>
		<td>concat()</td>
		<td>方法</td>
		<td>
			合併兩個陣列，並把新的陣列返回，如下例：
<pre>
var a1 = [1,2,3];
var a2 = a1.concat(['a','b','c']);
alert(a2); //返回1,2,3,a,b,c

var a1 = [1,2,3];
var a2 = ['a','b','c'];
a2 = a1.concat(a2);
alert(a2); //返回1,2,3,a,b,c
</pre>
		</td>
	</tr>
	<tr>
		<td>every()</td>
		<td>方法</td>
		<td>
			如果陣列中的每一個元素執行回調函數(callback)過後，返回的值每一項階為true，every()方法則傳回true，如果其中某一個元素為fasle，every()方法則傳回false，範例如下：
<pre>
function isNumber(value){return typeof value == 'number';}
var a1 = [1,2,3];
alert(a1.every(isNumber)); //傳回true
var a2 = [1,'2',3];
alert(a2.every(isNumber)); //傳回false
</pre>
		</td>
	</tr>
	<tr>
		<td>filter()</td>
		<td>方法</td>
		<td>
			傳回每一個陣列元素執行回調函數(callback)後所返回的值為true的新陣列，範例如下：
<pre>
var a1 = ['a',10,'b',20,'c',30];
var a2 = a1.filter(function(item){
	return typeof item == 'number';
});
alert(a2); //傳回10,20,30
</pre>
		</td>
	</tr>
	<tr>
		<td>foreach()</td>
		<td>方法</td>
		<td>
			重覆拜訪每個陣列元素，範例如下：
<pre>
var a = ['a','b','c'];
a.forEach(alert); //依序傳回每一個項目

var colors = ['red','green','blue'];
colors.forEach(function(i){
	alert(i); //依序傳回每一個項目
})
</pre>
		</td>
	</tr>
	<tr>
		<td>indexOf()</td>
		<td>方法</td>
		<td>
			在陣列內搜尋指定的值，搜尋到符合的項目時，傳回該項目的索引值，語法如下：
<pre>
indexOf(陣列元素的值,[開始位置的索引]);
</pre>
			範例：
<pre>
var myArray = ['j','a','v','a','s','c','r','i','p','t'];
alert(myArray.indexOf('a')); //返回1
alert(myArray.indexOf('a',2)); //返回3
alert(myArray.indexOf('z')); //返回-1，因爲找不到
</pre>
		</td>
	</tr>
	<tr>
		<td>join()</td>
		<td>方法</td>
		<td>以指定的分隔字元將陣列連結成字串；不輸入參數的話就與toString()相同以逗號隔開，如下例：
<pre>
var colors = new Array('red','green','blue');
alert(colors.join()); //無參數時效果同toString()，傳回red,green,blue
alert(colors.join('')); //不同連接字，傳回redgreenblue
alert('['+colors.join('][')+']'); //傳回[red][green][blue]
alert(colors.join('-NEXT-')); //red-NEXT-green-NEXT-blue
</pre>
		</td>
	</tr>
	<tr>
		<td>lastIndexOf()</td>
		<td>方法</td>
		<td>
			類似indexOf()，但是最後面開始往回搜尋，範例如下：
<pre>
var a = ['a','b','c','d','a','b'];
alert(a.lastIndexOf('b')); //返回5
alert(a.lastIndexOf('b',4)); //返回1
alert(a.lastIndexOf('z')); //返回-1
</pre>
		</td>
	</tr>
	<tr>
		<td>map()</td>
		<td>方法</td>
		<td>
			傳回每一個陣列元素執行回調函數(callback)後所返回的值的新陣列，範例如下：
<pre>
var a1 = ['a','b','c'];
var a2 = a1.map(function(item){
	return item.toUpperCase();
});
alert(a2); //傳回A,B,C
</pre>
		</td>
	</tr>
	<tr>
		<td>pop()</td>
		<td>方法</td>
		<td>
			返回指定陣列中的最後一個元素，並將該元素從原本的陣列中移除，陣列長度減1，範例如下：
<pre>
var color = ["red","green","blue"];
alert(color.pop()); //返回blue
alert(color.join(" / ")); //返回red / green
alert(color.length); //返回2

var names = ['JOHN','Stanley','Mary'];
var lastElement = names.pop();
alert(names.length); //返回2
alert(lastElement); //返回Mary
</pre>
		</td>
	</tr>
	<tr>
		<td>push()</td>
		<td>方法</td>
		<td>
			在陣列中的結尾插入新的陣列元素，陣列長度隨之增加，範例如下：
<pre>
var color = ["red","green","blue"];
color.push("brown");
alert(color.join(" / ")); //返回red / green / blue / brown
</pre>
			也有另一種利用陣列length屬性加入新陣列元素的方法，個人感覺有點取巧…但執行結果和push()完全一樣，如下例：
<pre>
var colors = ["red","green","blue"];
colors[colors.length] = 'brown'; //colors.length剛好等於最後一個陣列元素的索引值
alert(colors.toString()); //返回red,green,blue,brown
</pre>
		</td>
	</tr>
	<tr>
		<td>reverse()</td>
		<td>方法</td>
		<td>
			將依照陣列元素裡的值將它們做相反排序，範例如下：
<pre>
var fruits = ["apple","banana","orange"];
alert(fruits.toString()); //返回apple,banana,orange
alert(fruits.reverse().toString()); //返回orange,banana,apple

var myString = ABCDEFG;
alert(myString.split("").reverse().join(",")); //返回GFEDCBA
</pre>
		</td>
	</tr>
	<tr>
		<td>shift()</td>
		<td>方法</td>
		<td>
			移除並返回陣列的第一個元素，如下例：
<pre>
var a = [1,2,3];
var first = a.shift();
alert(a); //返回2,3
alert(first); //返回1
</pre>
		</td>
	</tr>
	<tr>
		<td>slice()</td>
		<td>方法</td>
		<td>
			返回陣列的片斷，語法如下：
<pre>
slice(start_index, upto_index);
</pre>
			範例：
<pre>
var a1 = ['a','b','c','d','e'];
var slicer = a1.slice(1,4);
alert(slicer); //返回b,c,d
</pre>
		</td>
	</tr>
	<tr>
		<td>some()</td>
		<td>方法</td>
		<td>
			如果陣列中的每一個元素執行回調函數(callback)過後，返回的值其中有一項元素為true，some()方法則傳回true，如果每一個元素為階fasle，some()方法則傳回false，範例如下：
<pre>
function isNumber(value) { return typeof value == 'number'; }
var a1 = [1,2,3];
alert(a1.some(isNumber)); //傳回true
var a2 = [1,'2',3];
alert(a2.some(isNumber)); //傳回true
var a3 = ['1','2','3'];
alert(a3.some(isNumber)); //傳回false
</pre>
		</td>
	</tr>
	<tr>
		<td>sort()</td>
		<td>方法</td>
		<td>
			將陣列元素按照字元進行排序，如下例：
<pre>
var fruit = ["starfruit","tomato","apple","banana","orange"];
alert(fruit.sort().join(" - ")); //返回apple - banana - orange - starfruit - tomato
</pre>
		</td>
	</tr>
	<tr>
		<td>splice()</td>
		<td>方法</td>
		<td>
			移除並在被移除的位置加入陣列元素，語法如下：
<pre>
splice(index, count_to_remove, addelement1, addelement2, ...);
</pre>
範例：
<pre>
var a = ['a','b','c','d','e'];
var removed = a.splice(1,3,'f','g','h','i');
alert(removed); //返回b,c,d
alert(a); //返回a,f,g,h,i,e
</pre>
		</td>
	</tr>
	<tr class="red">
		<td>toSource()</td>
		<td>方法</td>
		<td>
			說明1：傳回一個表示陣列原始檔的字串<br>
			說明2：返回該對象的源始碼。<br>
			…不懂啊～…
<pre>

</pre>
		</td>
	</tr>
	<tr>
		<td>toString()</td>
		<td>方法</td>
		<td>
			將陣列轉換為字串，以逗點做為分隔如下例所示：
<pre>
var areas = new Array("China","USA","UK");
alert(areas.toString()); 返回China,USA,UK
</pre>
			如果不希望用逗號來進行轉換的連接，請改用join()方法。</td>
	</tr>
	<tr>
		<td>unshift()</td>
		<td>方法</td>
		<td>
			在陣列的開頭處加入一個以上的元素，並返回新的陣列長度
<pre>
var a = [1, 2, 3];
a.unshift(4);
alert(a); //返回4,1,2,3

var a = [1,2,3];
alert(a.unshift(4)); //返回4
alert(a); //返回4,1,2,3
</pre>
		</td>
	</tr>
	<tr class="red">
		<td>valueOf()</td>
		<td>方法</td>
		<td>
			說明1：傳回陣列的初始值<br>
			說明2：返回陣列對象的原始值<br>
			…不懂啊～…
		</td>
	</tr>
</table>
 </main>
</body>
</html>