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
<h1>Javascript - Map物件</h1>
<table class="doc-table">
	<tr>
		<th>名稱</th>
		<th>類形</th>
		<th>說明</th>
	</tr>
	<tr>
		<td>Map</td>
		<td>物件</td>
		<td>
			Map 和原來的 JS 物件很相似，都是 key/value 的集合，不過 Map 有幾項重要的區別：<br><br>
			<ol>
				<li>Map 的 key 的可以用字串以外的值<br>Javascript 的物件（Object），本質上是鍵值對的集合（Hash 結構），但是只能用字符串當作鍵。這給它的使用帶來了很大的限制。為了解決這個問題，ES6 提供了 Map 數據結構。它類似於物件，也是鍵值對的集合，但是 "鍵" 的範圍不限於字符串，各種類型的值（包括物件）都可以當作鍵。也就是說，Object 結構提供了 "字符串/值" 的對應，Map結構提供了 "值/值" 的對應，是一種更完善的 Hash 結構實現。如果你需要 "鍵值對" 的數據結構，Map 比Object 更合適。</li>
				<li>Map 可執行遍歷的操作<br>Javascript 物件天生就沒有遍歷的功能，因為物件並不是設計作為集合使用的，沒有有效的方法來確定一個物件到底有多少屬性（例如，Object.keys 的效率就很低）。Map 預設就有 keys(), values(), entries(), forEach() 等的遍歷方法，也可以用 for...of 循環遍歷(？)。</li>
				<li>新的集合數據類型可解決命名上的衝突(？)(反正先記下來)<br>對象都具有內置的方法，如constructor、toString和valueOf。如果其中之一作為一個屬性添加到對象上，這很可能會導致衝突。當然，您可以使用Object.create(null)來創建一個空的對象(它不繼承自object.prototype);但是，這仍然也只是一種變通的方法而已。最新的ES6提供了新的集合數據類型;因此，再也不需要使用對象來進行集合模擬並不得不忍受其帶來的不足了。</li>
			</ol><br>
			以下範例示範新增 Map 物件：
<pre>
// 新增一個空的Map
var map = new Map();

// 新增Map同時加入資料
var map = new Map([["name", "張三"], ["title", "Author"]]);
</pre>
			JavaScript 的對象（Object），本質上是鍵值對的集合（Hash 結構），但是只能用字符串當作鍵。這給它的使用帶來了很大的限制，如下例所示：
<pre>
var data = {}; 
var element = document.getElementById("myDiv");

data[element] = metadata;
data["[Object HTMLDivElement]"] // metadata
</pre>
			上面代碼原意是將一個 DOM 節點作為對象data的鍵，但是由於對像只接受字符串作為鍵名，所以 element 被自動轉為字符串[Object HTMLDivElement]。<br><br>
			為了解決這個問題，ES6 提供了Map數據結構。它類似於對象，也是鍵值對的集合，但是 "鍵" 的範圍不限於字符串，各種類型的值（包括對象）都可以當作鍵。也就是說，Object結構提供了 "字符串 — 值" 的對應，Map結構提供了 "值 — 值" 的對應，是一種更完善的 Hash 結構實現。如果你需要 "鍵值對" 的數據結構，Map比Object更合適，如下例所示：
<pre>
var m = new Map();
var o = {p: "Hello World"};

m.set(o, "content");
m.get(o); // "content"
</pre>
			利用擴展運算符可以快速將 Map 轉換成陣列，因此可以利用數組的特性為 Map 實例添加一些方法，如 map, filter 等，如下所示：
<pre>
var m = new Map([['name','Janet'], ['age',20]]);
Map.prototype.filter = function(operatefun){
	return new Map([...this].filter(operatefun));
};
console.log(m.filter(([key,value])=>key!='age'));

Map.prototype.map = function(operatefun){
	return new Map([...this].map(operatefun));
};
console.log(m.map(([key,value]) =>[key+'_new',value+'_new']));
Map { name: "Janet" }
Map { name_new: "Janet_new", age_new: "20_new" }
</pre>
		</td>
	</tr>
	<tr>
		<td>size</td>
		<td>屬性</td>
		<td>
			回傳物件的成員個數，如下例：
<pre>
var map = new Map([['name', '張三'], ['title', 'Author']]);
console.log(map.size); // 2
</pre>
		</td>
	</tr>
	<tr>
		<td>clear()</td>
		<td>方法</td>
		<td>
			清除所有元素，沒有回傳值，如下例：
<pre>
var map = new Map([['name', '張三'], ['title', 'Author']]);
map.clear();
console.log(map.size); // 0
</pre>
		</td>
	</tr>
	<tr>
		<td>delete()</td>
		<td>方法</td>
		<td>
			刪除key-value，回傳boolean值，表示刪除是否有成功，如下例：
<pre>
var map = new Map([['name', '張三'], ['title', 'Author']]);
console.log(map.delete('name')); // true
console.log(map.has('name')); // false
</pre>
		</td>
	</tr>
	<tr>
		<td>get()</td>
		<td>方法</td>
		<td>
			取得key的value，如果找不到則回傳undefined，如下例：
<pre>
var m = new Map();
var o = {p: 'Hello World'};
m.set(o, 'content'); //這裡直接把o這個物件當作Map的key
console.log(m.get(o)); // "content"
</pre>
		</td>
	</tr>
	<tr>
		<td>has()</td>
		<td>方法</td>
		<td>
			回傳boolean值，檢查是否key是否存在Map物件中，如下例：
<pre>
var m = new Map();
var o = {p: 'Hello World'};
m.set(o, 'content'); //這裡直接把o這個物件當作Map的key
console.log(m.has(o)); // true
</pre>
		</td>
	</tr>
	<tr>
		<td>set()</td>
		<td>方法</td>
		<td>
			建立key及其對應的value，回傳Map物件本身，如果重覆設置了某個key，該key的值則會被更新，set() 的語法如下：
<pre>
set(key, value)
</pre>
			下例示範新增Map的成員：
<pre>
var m = new Map();
var o = {p: 'Hello World'};
m.set(o, 'content'); //這裡直接把o這個物件當作Map的key
console.log(m.size); // 1

var m = new Map();
m.set('name','Janet'); // 新增第一筆資料
m.set('age',20); // 繼續新增第二筆
for(let key of m.keys()){
	console.log(key);
}
</pre>
		</td>
	</tr>
	<tr>
		<td>entries()</td>
		<td>遍歷方法</td>
		<td>
			entries是Map的默認遍歷器，它返回一個鍵值對的遍歷器，如下例：
<pre>
var m = new Map([['name','Janet'], ['age',20]]);
for(let [key, value] of m.entries()){
    console.log(key+':'+value);
}
// name:Janet
// age:20
</pre>
		</td>
	</tr>
	<tr>
		<td>forEach()</td>
		<td>遍歷方法</td>
		<td>
			使用回調函數遍歷每個成員。<br>
			Map 結構實例的 forEach 方法，用於對每個成員執行某種操作，沒有返回值，如下例：
<pre>
var m = new Map([['name','Janet'], ['age',20]]);
m.forEach( (value,key) => console.log(key+':'+value));
// name:Janet
// age:20
</pre>
		</td>
	</tr>
	<tr>
		<td>keys()</td>
		<td>遍歷方法</td>
		<td>
			返回遍歷所有鍵的遍歷器，如下例：
<pre>
var m = new Map();
m.set('name','Janet');
m.set('age',20);
for(let key of m.keys()){
	console.log(key);
}
// name
// age
</pre>
		</td>
	</tr>
	<tr>
		<td>values()</td>
		<td>遍歷方法</td>
		<td>
			返回遍歷所有值的遍歷器，如下例：
<pre>
var m = new Map([['name','Janet'], ['age',20]]);
for(let value of m.values()){
	console.log(value);
}
// Janet
// 20
</pre>
		</td>
	</tr>
</table>
</main>
</body>
</html>