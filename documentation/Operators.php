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
<meta name="keywords" content="Javascript,Operators,運算子,物件,object,字典,方法,屬性,使用說明,文件,範例" />
<meta name="description" content="提供完整的Operators物件及其方法、屬性的說明文件與範例" />
<title>運算子 - Javascript字典</title>
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
	<h1>Javascript - Operators</h1>
	<table class="doc-table">
		<tr>
			<th>名稱</th>
			<th>類形</th>
			<th>說明</th>
		</tr>
		<tr>
			<td>+</td>
			<td>算術運算子</td>
			<td>
				<ol>
					<li>對數值進行加法計算。</li>
					<li>字串相加。</li>
					<li>數值和字串相加的結果為字串，即使字串是數字實際還是被示為字串</li>
					<li>將數值加上一個長度為零的空字串可將數值轉換為字串，也可透過toString()方法進行數值轉換</li>
				</ol>
<pre>
var outcome = 1+1; //結果為2
var outcome = 'a'+'b'; //結果為ab
var outcome = 1+'1'; //結果為11
var a = 1+'';
var outcome = 1+a;  //結果為11
var a = 1;
var outcome = 1+a.toString(); //結果為11
</pre>
			</td>
		</tr>
		<tr>
			<td>-</td>
			<td>算術運算子</td>
			<td>
				Subtracts numeric operands. If one of the operands is a string, JavaScript will try to convert it to a number first (ie: "5" becomes 5), or if unsuccessful, NaN is returned for the expression.
<pre>
x-7
20-10 //returns 10
20-'10' //returns 10
20-'what' //returns NaN
</pre>
			</td>
		</tr>
		<tr>
			<td>*</td>
			<td>算術運算子</td>
			<td>
				Multiplies numeric operands. If one of the operands is a string, JavaScript will try to convert it to a number first (ie: "5" becomes 5), or if unsuccessful, NaN is returned for the expression.
<pre>
5*2
</pre>
			</td>
		</tr>
		<tr>
			<td>/</td>
			<td>算術運算子</td>
			<td>
				Divides numeric operands. If one of the operands is a string, JavaScript will try to convert it to a number first (ie: "5" becomes 5), or if unsuccessful, NaN is returned for the expression.<br>Dividing by 0 yields the value NaN (Not a Number)
<pre>
y/x
</pre>
			</td>
		</tr>
		<tr>
			<td>%</td>
			<td>算術運算子</td>
			<td>
				Returns the remainder when the first operand is divided by the second operand. If one of the operands is a string, JavaScript will try to convert it to a number first (ie: "5" becomes 5), or if unsuccessful, NaN is returned for the expression.<br>The modulo operator is useful to determine whether a number is odd or even, for example:
<pre>
7%2 //returns 1
</pre>
<pre>
var scores=[3,34,12,53,23,82]
document.write(scores.join(", ")+"<br />")

for (var i=0; i&lt;scores.length; i++){
 if (scores[i]%2==1) //odd number?
  document.write("<b>odd, </b>")
 else
  document.write("<b>even, </b>")
}

Output:
3, 34, 12, 53, 23, 82
odd, even, even, odd, odd, even,
</pre>
			</td>
		</tr>
		<tr>
			<td>++</td>
			<td>算術運算子</td>
			<td>
				Increments the operand by 1. Note the following two possible behaviours:<br>1) Pre increment: If operator is used before operand (ie: ++x), it increments the operand and evaluates to the incremented value.<br>2) Post increment: If operator is used following operand (ie: x++), it increments the operand but evaluates to the unincremented value.
<pre>
Using x=2 for each example below:
1) x++
Result: x=3

2) y= ++x
Result: 3

3) y= x++
Result: y=2
</pre>
			</td>
		</tr>
		<tr>
			<td>--</td>
			<td>算術運算子</td>
			<td>
				Decrements the operand by 1. Note the following two possible behaviours:<br>1) Pre decrement: If operator is used before operand (ie: --x), it increments the operand and evaluates to the incremented value.<br>2) Post decrement: If operator is used following operand (ie: x--), it increments the operand but evaluates to the unincremented value.
<pre>
x--
</pre>
			</td>
		</tr>
		<tr>
			<td>(-)</td>
			<td>算術運算子</td>
			<td>
				Used in front of a lone operand to make it negative. If operand isn't a number, JavaScript will try to convert it first (NaN is returned if unsuccessful). The operand itself is not altered.
<pre>
y=-x
Result: y equals -x
x remains x
</pre>
			</td>
		</tr>
		<tr>
			<td>(+)</td>
			<td>算術運算子</td>
			<td>
				Does nothing other than explicitly specifies an operand's implied positive sign. However, if operand isn't a number, JavaScript will try to convert it first (NaN is returned if unsuccessful).
<pre>
y=+x
Result: y equals x
x remains x
</pre>
			</td>
		</tr>
		<tr>
			<td>...</td>
			<td>展開運算子</td>
			<td>
				展開運算子(Spread Operator)是ES6中的其中一種新特性。也是懶人必學的Javascript新語法之一，它的語法是「...」(就是點點點沒錯)，但在不同的情境會分成兩種用法，展開函式的其餘參數，或是展開陣列的值，以下分別做說明：<br><br>
				<strong>其餘參數運算(Rest Operator)：</strong><br></br>
				用在函式中的參數，當我們不確定傳入參數的數量時就可以使用其餘參數運算子，<u>它會將帶入的參數轉換成一個陣列</u>，如下例：
<pre>
var result = 0;
function sum(...numbers){
	numbers.forEach(function(value, index){
		result += value
	});
	return result;
}
alert(sum(1,2,3,4,5)); //15

result = 0
alert(sum(1,2)); //3
</pre>
				注意，其餘參數運算子有一個限制，就是這個參數一定是函式的"最後一個"。你如果放在其它參數前，就會產生錯誤。<br><br>
				在ES5中可以使用arguments物件來達到這樣的功能，它是一個類似陣列(Array-like)的物件，如下例：
<pre>
function sum() {
	var numbers = Array.prototype.slice.call(arguments),
		result = 0;
	numbers.forEach(function (number) {
		result += number;
	});
	return result;
}
alert(sum(1,2)); //3
alert(sum(1, 2, 3, 4, 5)); //15
</pre>
				使用其餘參數運算子和arguments物件結果還是有部份差異，這裡不做討論，但使用其餘參數好處就是語法簡單易讀，不像arguments物件容易造成混亂。<br><br><br>
				<strong>展開陣列運算(Spread Operator)：</strong><br></br>
				用於陣列的操作，展開運算子會把一個陣列展開(expand)成個別的值，常用來組合(連接)陣列，範例如下：
<pre>
var params = [ "hello", true, 7 ];
console.log([ 1, 2, ...params ]); //[1, 2, "hello", true, 7]

var str = "foo";
console.log([...str]); //["f", "o", "o"]

console.log(1, ...[2, 3, 4], 5); //1 2 3 4 5
</pre>
				我們也可以把陣列展開後直接做為函式的參數，如下例：
<pre>
var ary = [1, 2, 3];
function sum(a, b, c){
	return a+b+c;
}
console.log(sum(...ary)); //6

// 補充另一個範例：
function f(...[a, b, c]) {
	return a + b + c;
}
f(1)          // NaN (b and c are undefined)
f(1, 2, 3)    // 6
f(1, 2, 3, 4) // 6 (the fourth parameter is not destructured)
</pre>
				在ES5中如需要將陣列做為函式的參數則必需使用apply()方法來達到這樣的功能，如下例：
<pre>
function sum(a, b, c) {
  return a + b + c;
}
var args = [1, 2, 3];
console.log(sum.apply(undefined, args)); // 6
</pre>
				和其餘運算子相同，使用新的展開運算子語法語法簡單易讀，下表把各種常見的使用情況分別以ES5、ES6列出來：<br><br>
				<table style="width:100%; white-space:nowrap;">
					<caption>這表要想一下RWD要怎麼表現</caption>
					<tr>
						<th>情況</th>
						<th>ES5</th>
						<th>ES6</th>
					</tr>
					<tr>
						<td>Concatenation</td>
						<td>[1, 2].concat(more)</td>
						<td>[1, 2, ...more]</td>
					</tr>
					<tr>
						<td>String Split</td>
						<td>chars = str.split("")</td>
						<td>chars = [ ...str ]</td>
					</tr>
					<tr>
						<td>Push onto list</td>
						<td>list.push.apply(list, [3, 4])</td>
						<td>list.push(...[3, 4])</td>
					</tr>
					<tr>
						<td>Destructuring</td>
						<td>a = list[0], rest = list.slice(1)</td>
						<td>[a, ...rest] = list</td>
					</tr>
					<tr>
						<td>new + apply</td>
						<td>new (Date.bind.apply(Date, [null,2015,31,8]))</td>
						<td>new Date(...[2015,31,8])</td>
					</tr>
				</table>
				<br>展開運算子可以將一個類陣列物件中索引範圍在[ 0, length)之間的所有屬性的值添加到一個陣列中，這樣就可以得到一個真正的陣列：
<pre>
var nodeList = document.querySelectorAll('div');
var ary = [...nodeList];
console.log(ary); //[div, div, div]
</pre>
				解構賦值(destructuring)時，解構賦值在另一獨立章節會講得更詳細，這裡只是要說明展開運算子的另一個使用情況。解構賦值也是一個ES6中的新特性。
解構賦值是用在「陣列指定陣列」或是「物件指定物件」的情況下，這個時候會根據陣列原本的結構，以類似「鏡子」對映樣式(pattern)來進行賦值。聽起來很玄但用起來很簡單，這是一種為了讓陣列與物件指定值時更方便所設計的一種語法。例如以下的範例：
<pre>
const [x, y, z] = [1, 2, 3]
console.log(x) //1
</pre>
				當使用其餘運算符之後，就可以用像其餘參數的類似概念來進行解構賦值，例如以下的範例：
<pre>
const [x, ...y] = [1, 2, 3];
console.log("x："+x); //1
console.log("y："+y); //[2,3]
</pre>
				當右邊的值與左邊數量不相等時，「鏡子對映的樣式」就會有些沒對到，用了其餘運算符的那個識別名稱，就會變成空陣列。就會像下面這個例子一樣
<pre>
const [x, y, ...z] = [1]
console.log(x) //1
console.log(y) //undefined
console.log(z) //[]
</pre>
				<strong>有可能遇見其它的狀況：</strong><br><br>
				展開運算子僅能在陣列上操作，但我們有可能在一些新的JS框架中會看到用在物件上的類似語法，例如Redux、React-Native，但它們是還在制定中的ES7語法，現今瀏覽器是不支援需要作預先編譯的，例如babel轉換工具，它們稱為其餘屬性(Rest Properties)與展開屬性(Spread Properties)，像下面這樣的程式碼：
<pre>
// Rest Properties
let { x, y, ...z } = { x: 1, y: 2, a: 3, b: 4 }
console.log(x) // 1
console.log(y) // 2
console.log(z) // { a: 3, b: 4 }

// Spread Properties
let n = { x, y, ...z }
console.log(n) // { x: 1, y: 2, a: 3, b: 4 }
</pre>
				參考資料：<br>
				https://developer.mozilla.org/zh-CN/docs/Web/JavaScript/Reference/Operators/Spread_operator<br>
				http://eddychang.me/blog/16-javascript/45-spread-operator-rest-parameters.html<br>
				https://eyesofkids.gitbooks.io/javascript-start-from-es6/content/part4/rest_spread.html
			</td>
		</tr>
		<tr>
			<td>=</td>
			<td>指派運算子</td>
			<td></td>
		</tr>
		<tr>
			<td>+=</td>
			<td>指派運算子</td>
			<td></td>
		</tr>
		<tr>
			<td>-=</td>
			<td>指派運算子</td>
			<td></td>
		</tr>
		<tr>
			<td>*=</td>
			<td>指派運算子</td>
			<td></td>
		</tr>
		<tr>
			<td>/=</td>
			<td>指派運算子</td>
			<td></td>
		</tr>
		<tr>
			<td>%=</td>
			<td>指派運算子</td>
			<td></td>
		</tr>
		<tr>
			<td>&lt;&lt;=</td>
			<td>指派運算子</td>
			<td></td>
		</tr>
		<tr>
			<td>>>=</td>
			<td>指派運算子</td>
			<td></td>
		</tr>
		<tr>
			<td>>>>=</td>
			<td>指派運算子</td>
			<td></td>
		</tr>
		<tr>
			<td>&amp;=</td>
			<td>指派運算子</td>
			<td></td>
		</tr>
		<tr>
			<td>|=</td>
			<td>指派運算子</td>
			<td></td>
		</tr>
		<tr>
			<td>^=</td>
			<td>指派運算子</td>
			<td></td>
		</tr>
		<tr>
			<td>&amp;&amp;</td>
			<td>邏輯運算子</td>
			<td>
				數筆條件皆為真時則傳回true，反之傳回false。例：
<pre>
alert(2&lt;7 &amp;&amp; 8&lt;12 &amp;&amp; 1&lt;2); 傳回true。
</pre>
				&amp;&amp;另外有一種很另類的用法，<span style="text-decoration:line-through;">讓我覺的Javascript好像發瘋了，</span>在&amp;&amp;之前加上判斷式，如果判斷為true，&amp;&amp;之後的語法就會執行，如下例：
<pre>
true &amp;&amp; alert(123);
</pre>
			</td>
		</tr>
		<tr>
			<td>||</td>
			<td>邏輯運算子</td>
			<td>數筆條件中只要有一個為真時傳回true。例：alert(2&lt;7 || 12&lt;8 || 2&lt;1); 傳回true。</td>
		</tr>
		<tr>
			<td>!</td>
			<td>邏輯運算子</td>
			<td>將true轉變為false，或將false轉變為true。例：alert(!false); 傳回true。</td>
		</tr>
		<tr>
			<td>==</td>
			<td>比較運算子</td>
			<td>等於，傳回true或false，例：alert("apple"=="apple"); 傳回true。(註：字串也是可以比較的)</td>
		</tr>
		<tr>
			<td>===</td>
			<td>比較運算子</td>
			<td></td>
		</tr>
		<tr>
			<td>!=</td>
			<td>比較運算子</td>
			<td>不等於，傳回true或false，例：alert("apple"!="orange"); 傳回true。(註：字串也是可以比較的)</td>
		</tr>
		<tr>
			<td>!==</td>
			<td>比較運算子</td>
			<td></td>
		</tr>
		<tr>
			<td>></td>
			<td>比較運算子</td>
			<td>大於，傳回true或false，例：alert(100&gt;5); 傳回true。(註：字串也是可以比較的)</td>
		</tr>
		<tr>
			<td>>=</td>
			<td>比較運算子</td>
			<td>大於等於，不可寫成=&gt;，傳回true或false，例：alert(7&gt;=2); 傳回true。(註：字串也是可以比較的)</td>
		</tr>
		<tr>
			<td>&lt;</td>
			<td>比較運算子</td>
			<td>小於，傳回true或false，例：alert(100&lt;5); 傳回true。(註：字串也是可以比較的)</td>
		</tr>
		<tr>
			<td>&lt;=</td>
			<td>比較運算子</td>
			<td>小於等於，不可寫成=&lt;，傳回true或false，例：alert(2&gt;=7); 傳回true。(註：字串也是可以比較的)</td>
		</tr>
		<tr>
			<td>&amp;</td>
			<td>位元運算子</td>
			<td></td>
		</tr>
		<tr>
			<td>|</td>
			<td>位元運算子</td>
			<td></td>
		</tr>
		<tr>
			<td>^</td>
			<td>位元運算子</td>
			<td></td>
		</tr>
		<tr>
			<td>~</td>
			<td>位元運算子</td>
			<td></td>
		</tr>
		<tr>
			<td>&lt;&lt;</td>
			<td>位元運算子</td>
			<td></td>
		</tr>
		<tr>
			<td>>></td>
			<td>位元運算子</td>
			<td></td>
		</tr>
		<tr>
			<td>>>></td>
			<td>位元運算子</td>
			<td></td>
		</tr>
		<tr>
			<td>,</td>
			<td>特殊運算子</td>
			<td>逗號運算子 (,) 簡單的對他的兩個運算元求值，並返回第二個運算元的值。這個運算子主要用在 for 迴圈內部，使多個變數可在每一次的循環中更新。
<pre>
for (var i=0, y=0; i&lt;5; i++, y+=2){
	document.write(i+" / "+y+"&lt;br /&gt;")
}
</pre>
			</td>
		</tr>
		<tr>
			<td>()?:</td>
			<td>特殊運算子</td>
			<td>
				三目運算子，或稱條件運算子Ｔ，(true)執行?後面的程式；(false)執行 : 面後的程式。如下例會alert答錯了：<br />
<pre>
(1+1==5)?alert("答對了"):alert("答錯了");
</pre>
				註：小括號是可以省略的<br><br>
				範例2，將判斷結果存入變數：
<pre>
var isIE = window.ActiveXObject ? '這是IE瀏覽器' : '這不是IE瀏覽器';
alert(isIE);
</pre>
			</td>
		</tr>
		<tr>
			<td>delete</td>
			<td>特殊運算子</td>
			<td>delete 運算子可刪除物件、沒有使用var語法的變數、物件的屬性、陣列中指定索引的元素，如果操作成功的話delete運算子返回true；如果操作失敗，就返回false；見下範例：
<pre>
var myarray=['joe', 'mary', 'jane']
var boss={name: 'george'}
worker={name: 'peter'}
var x=3
y=4

delete myarray[1] //returns true, myarray[1] now undefined
delete boss //returns false, since boss is a declared variable
delete worker //returns true, since worker is an undeclared variable
delete x //returns false, since x is a declared variable
delete y //returns true, since y is an undeclared variable
</pre>
				註：並非所有特性都可被delete刪除，有些內建特性可能無法被刪除，例如在瀏覽器中的一些特性。</td>
		</tr>
		<tr>
			<td>in</td>
			<td>特殊運算子</td>
			<td>如果指定的屬性存在於指定的物件中，或指定的索引值存在於指定的陣列中，in運算子返回true。語法為︰<br>
				propNameOrNumber in objectName;<br>
				此處propNameOrNumber是指表示為屬性名的字串、或表示為陣列索引的數值的表達式，objectName是指物件的名稱。<br>
				以下範例示範in運算子的使用方法：
<pre>
// 陣列
trees=new Array("redwood","bay","cedar","oak","maple")
0 in trees        // 返回 true
3 in trees        // 返回 true
5 in trees        // 返回 false
"bay" in trees    // 返回 false（你必須指定索引編號，而不是索引上的值）
"length" in trees // 返回 true（length 是 Array 的屬性）

// 預先定義的物件
"PI" in Math          // 返回 true
myString=new String("coral")
"length" in myString  // 返回 true

// 自訂的物件
mycar = {make:"Honda",model:"Accord",year:1998}
"make" in mycar  // 返回 true
"model" in mycar // 返回 true
"Honda" in mycar // 返回 false
</pre>
			</td>
		</tr>
		<tr>
			<td>instanceof</td>
			<td>特殊運算子</td>
			<td>如果指定的物件屬於指定的物件類型，instanceof運算子返回true。語法為︰
<pre>
objectName instanceof objectType
</pre>
				此處 objectName 是指用來和 objectType 作比較的物件的名稱，objectType 是指物件的類型，如 Date 或 Array。<br>
				當你需要確認執行中物件的類型時，就使用 instanceof。舉個例子，當接受到例外時，你可以根據被拋出的例外來決定要執行哪一條例外處理。<br>
				例如，以下代碼使用 instanceof 確認 theDay 是否屬於 Date 物件。由於 theDay 屬於 Date 物件，所以會執行 if 語法裡的語句。
<pre>
theDay=new Date(1995, 12, 17);
if(theDay instanceof Date){
   被執行的語句;
}
</pre>
			</td>
		</tr>
		<tr>
			<td>new</td>
			<td>特殊運算子</td>
			<td>我們可以使用new運算子來建立使用者定義的物件類型的實體，或建立預先定義的物件類型，如Array、Boolean、Date、Function、Image、Number、Object、Option、RegExp、String 其中之一；它的語法如下︰
<pre>
objectName = new objectType(param1 [,param2] ...[,paramN]);
</pre>
				下例將建立一個Date物件實體：
<pre>
var today=new Date(); //create new instance of Date object
</pre>
			下例將建立一個三角形面積物件的實體：
<pre>
function triangle(base, height){
	this.area=base*height/2
}
var bigtriangle=new triangle(200, 150); //create new instance of triangle object
</pre>
			</td>
		</tr>
		<tr>
			<td>new</td>
			<td>特殊運算子</td>
			<td></td>
		</tr>
		<tr>
			<td>this</td>
			<td>特殊運算子</td>
			<td>this其實可以當作是一個物件，它是指當時正在使用中的物件。</td>
		</tr>
		<tr>
			<td>try-catch-finally</td>
			<td>特殊運算子</td>
			<td>try catch finally是javascript語言提供的異常處理機制，我們可以使用try關鍵字來偵測程式中是否有發生錯誤，也可以說它捕捉一個需要測試的程式區塊是否有例外拋出，例如呼叫未定義的變數，不存在的Javascript方法等，但要注意的是，這些錯誤不包含語法錯誤，像是字串結尾忘記加引號等；如果有發生錯誤可以再使用catch來撰寫處理方式，一個try區塊可以包含零個或以上的catch關鍵字，其實，catch語句和finally語句都可以省略的，但是二者至少要保留其中之一和try語句結合使用。
				另外還有一個finally關鍵字，它會在try/catch區塊中的程式後執行，不管有沒有拋出例外都會執行，甚至是try代碼區塊中有return、continue、break等的轉移流程語句。<br><br>
				語法：try{statements} catch(catchID){statements} finally{statements}<br>
				語法中的catchID表示攔截到的異常對像的實體，目前所知他是有屬性的，像catchID.message、catchID.description、name等…，如果有需要要再去查明。<br><br>
				以下範例(1)將會返回：An error has occurred: c is not defined.
<pre>
window.onload = function(){
	try{
		a = 1+c;
		//呼叫不存在的變數"c"
		//或是呼叫不存在的方法(有時候是寫錯字)，例：allert('something');
		//或是調用date的未定義的test方法例：date.test();
		alert('I guess you do exist');
	}catch(e){
		alert('An error has occurred: '+e.message);
	}
}
</pre>
				補充：catchID.name的六種值對應的訊息：<br>
				&nbsp;&nbsp;1.EvalError：eval()的使用與定義不一致<br>
				&nbsp;&nbsp;2.RangeError：數值越界<br>
				&nbsp;&nbsp;3.ReferenceError：非法或不能識別的引用數值<br>
				&nbsp;&nbsp;4.SyntaxError：發生語法解析錯誤<br>
				&nbsp;&nbsp;5.TypeError：操作數類型錯誤<br>
				&nbsp;&nbsp;6.URIError：URI處理函數使用不當
			</td>
		</tr>
		<tr>
			<td>throw</td>
			<td>特殊運算子</td>
			<td>JavaScript中的異常可以用try..catch..finally語句來處理，也可以手動的來拋出異常；手動異常拋出的語句是throw，其基本語法格式為：
<pre>
throw expression;
</pre>
				其中的expression可以是任何一種類型，而不只是特定類型的表達式，也就是說throw “There is a error”;或是throw 1001;都是正確的。以下代碼拋出各式各樣的例外︰
<pre>
throw "Error2";
throw 42;
throw true;
throw {toString: function(){return "I'm an object!";}};
</pre>
			</td>
		</tr>
		<tr>
			<td>typeof</td>
			<td>特殊運算子</td>
			<td>返回一個字串，指出資料、變數或運算式的資料類型。語法如下：
<pre>
typeof operand 或是 typeof(operand)
</pre>
			operand是指字串、變數、關鍵字、物件，其類型可被typeof返回。括弧並非必要的。<br>
			typeof()可能傳回的六個值分別是：number、string、boolean、object、function、和 undefined。<br>
			以下範例將返回boolean、string及true。<br />
<pre>
var marriage = true; alert(typeof(marriage));
var marriage = "true"; alert(typeof(marriage));
if(typeof(myBoolean) == "boolean"){alert('true');}
</pre>
			以下範例將傳回string：
<pre>
a='9';
document.write(typeof a); //執行結果：string
</pre>
				下面再列出各種類型的範例：
<pre>
//假設你定義了以下變數︰
var myFun = new Function("5+2")
var shape="round"
var size=1
var today=new Date()

//typeof 運算子對以下變數返回以下結果︰
typeof myFun 返回的是 function
typeof shape 返回的是 string
typeof size 返回的是 number
typeof today 返回的是 object
typeof dontExist 返回的是 undefined

//對於 true 和 null 關鍵字而言，typeof 運算子返回以下結果︰
typeof true 返回的是 boolean
typeof null 返回的是 object

//對於數字或字串而言，typeof 運算子返回以下結果︰
typeof 62 返回的是 number
typeof 'Hello world' 返回的是 string

//對於屬性值而言，typeof 運算子返回屬性裡的值的類型︰
typeof document.lastModified 返回的是 string
typeof window.length 返回的是 number
typeof Math.LN2 返回的是 number

//對於方法和函數而言，typeof 運算子返回以下結果︰
typeof blur 返回的是 function
typeof eval 返回的是 function
typeof parseInt 返回的是 function
typeof shape.split 返回的是 function

//對於預先定義的物件而言，typeof 運算子返回以下結果︰
typeof Date 返回的是 function
typeof Function 返回的是 function
typeof Math 返回的是 function
typeof Option 返回的是 function
typeof String 返回的是 function
</pre>
			</td>
		</tr>
		<tr>
			<td>void</td>
			<td>特殊運算子</td>
			<td>語法：void(expression);
				此函式會執行計算式，但會回傳undefined。void 運算子表示表達式求值之後不必把值返回。expression是指可供求值的JavaScript表達式。<br>
				你可以把 void 運算子使用於當作超連結的表達式。表達式會被求值，但不會被載入而取代目前的文件。<br><br>
				以下代碼建立了超連結，當使用者點擊時，就傳送表單：
<pre>
&lt;A HREF="javascript:void(document.form.submit())"&gt;Click here to submit&lt;/A&gt;
</pre>
				以下代碼建立了什麼也不做的超連結。當使用者點擊連結時，void(0) 的求值為 undefined，這在 JavaScript 中並沒有作用：
<pre>
&lt;A HREF="javascript:void(0)"&gt;Click here to do nothing&lt;/A&gt;
</pre>
				下例示範void傳回的值：
<pre>
a = void(b=1+1);
alert(a);
alert(b);
</pre>
				void()常用來將網頁的輸出取消。下面的方法可以取消預設的跳頁功能：
<pre>
javascript:void(0)
javascript:;
javascript://

&lt;p&gt;&lt;a href="javascript:void(0)" onclick="alert('void(0)')"&gt;請點此&lt;/a&gt;
&lt;p&gt;&lt;a href="javascript:;" onclick="alert(';')"&gt;請點此&lt;/a&gt;
&lt;p&gt;&lt;a href="javascript://" onclick="alert('//')"&gt;請點此&lt;/a&gt;
&lt;p&gt;&lt;a href="" onclick="alert('您好')"&gt;請點此&lt;/a&gt;
</pre>
			</td>
		</tr>
	</table>
</main>
</body>
</html>