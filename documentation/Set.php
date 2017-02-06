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
<meta name="keywords" content="Javascript,Set,物件,object,字典,方法,屬性,使用說明,文件,範例" />
<meta name="description" content="提供完整的Set物件及其方法、屬性的說明文件與範例" />
<title>Set物件 - Javascript字典</title>
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
<h1>Javascript - Set物件</h1>
	<?php include("../includes/adsense.php"); ?>
<table class="doc-table">
	<tr>
		<th>名稱</th>
		<th>類形</th>
		<th>說明</th>
	</tr>
	<tr>
		<td>Set</td>
		<td>物件</td>
		<td>
			ES6 新的資料結構，類似於陣列，但元素中並不會有重複的值，並且它沒辦法直接用索引取特定元素的值，只能用列舉的方法取值；預設是會幫我們確保值都是唯一的，重複的值會被忽略，但有個例外，如果傳入 Set 的是物件，即使物件是空的也會被當作不同的值；要列舉 Set 的值基本上是要用 for...of 語法，這和以前的 for...in 語法不一樣，是直接取值出來的，也是 ES6 新的東西。<br><br>
			下面的範例示範了新增一個 Set，並通過 add 方法向 Set 結構加入成員，顯示 Set 結構不會添加重複的值：
<pre>
var Ary = [2, 1, 3, 2, 3];
var newSet = new Set();
for(let value of Ary){
	newSet.add(value);
}
for(let value of newSet){
	console.log(value);
}
// 3
// 1
// 2

var mySet = new Set();
[2, 1, 3, 2, 3].map(value => mySet.add(value));
for(let v of mySet){
	console.log(v);
}
// 3
// 1
// 2
</pre>
			Set 也可以直接傳入一個陣列（或類陣列的物件）作為它的資料，如下例：
<pre>
var mySet = new Set([3, 1, 2, 2, 3]);
console.log([...mySet]); // 使用展開運算子將mySet中的值顯示為陣列
// [3, 1, 2]
console.log(mySet.size);
// 3

// 類陣列的物件
var mySet = new Set([...document.querySelectorAll('div')]);
console.log(mySet.size);
// 10

// 它類似於：
var mySet = new Set();
[...document.querySelectorAll('div')].forEach(value => {
	mySet.add(value);
});
console.log(mySet.size);
// 10
</pre>
			使用 Set 快速清除重複的陣列值，如下例：
<pre>
let arr = [3, 5, 2, 2, 5, 5];
let uniArr = [...new Set(arr)];
console.log(uniArr); // [3, 5, 2]
</pre>
		</td>
	</tr>
	<tr>
		<td>size</td>
		<td>屬性</td>
		<td>
			返回Set實例的成員總數，如下例：
<pre>
var mySet = new Set([1,2,2]);
console.log(mySet.size); // 2
</pre>
		</td>
	</tr>
	<tr>
		<td>add()</td>
		<td>方法</td>
		<td>
			添加某個值，返回 Set 結構本身，如下例：
<pre>
var mySet = new Set();
mySet.add(1).add(2).add(2); // 注意 2 被加入了两次
console.log(mySet.size); // 2
</pre>
		</td>
	</tr>
	<tr>
		<td>clear()</td>
		<td>方法</td>
		<td>
			清除所有成員，沒有返回值，如下例：
<pre>
var mySet = new Set([1,2]);
mySet.clear();
console.log(mySet.size); // 0
</pre>
		</td>
	</tr>
	<tr>
		<td>delete()</td>
		<td>方法</td>
		<td>
			刪除某個值，返回一個布爾值，表示刪除是否成功，如下例：
<pre>
var mySet = new Set([1,2]);
console.log(mySet.delete(2)); //true
console.log(mySet.has(2)); // false
</pre>
		</td>
	</tr>
	<tr>
		<td>has()</td>
		<td>方法</td>
		<td>
			返回一個布林值，表示該值是否為Set的成員，如下例：
<pre>
var mySet = new Set([1,2]);
console.log(mySet.has(3)); // false
</pre>
		</td>
	</tr>
	<tr>
		<td>entries()</td>
		<td>遍歷方法</td>
		<td>
			返回一個鍵值對的遍歷器
<pre>
var mySet = new Set(['red', 'green', 'blue']);
for(var value of mySet.entries()){
	console.log(value);
}
// ["red", "red"]
// ["green", "green"]
// ["blue", "blue"]
</pre>
		</td>
	</tr>
	<tr>
		<td>forEach()</td>
		<td>遍歷方法</td>
		<td>
			使用回調函數遍歷每個成員。<br>
			Set 結構實例的 forEach 方法，用於對每個成員執行某種操作，沒有返回值，如下例：
<pre>
let mySet = new Set([1, 2, 3]);
mySet.forEach((v) => console.log(v * 2));
// 2
// 4
// 6
console.log([...mySet]);
// [1, 2, 3]
</pre>
			由上例可見，原本的資料並沒有受到更動，如果想在遍歷操作中，同步改變原來的 Set 結構，目前沒有直接的方法，但有兩種變通方法。一種是利用原 Set 結構映射出一個新的結構，然後賦值給原來的 Set 結構；另一種是利用 Array.from 方法。
<pre>
// 方法一
let set = new Set([1, 2, 3]);
set = new Set([...set].map(val => val * 2));
// set的值是2, 4, 6

// 方法二
let set = new Set([1, 2, 3]);
set = new Set(Array.from(set, val => val * 2));
// set的值是2, 4, 6
</pre>
		</td>
	</tr>
	<tr>
		<td>keys()</td>
		<td>遍歷方法</td>
		<td>
			返回一個鍵名的遍歷器，由於Set結構沒有鍵名，只有鍵值（或者說鍵名和鍵值是同一個值），所以key方法和value方法的行為完全一致。
<pre>
var mySet = new Set(['red', 'green', 'blue']);
for(var value of mySet.keys()){
	console.log(value);
}
// red
// green
// blue

// 其實不寫.key()得到的結果是一樣的
</pre>
		</td>
	</tr>
	<tr>
		<td>values()</td>
		<td>遍歷方法</td>
		<td>
			返回一個鍵值的遍歷器，由於Set結構沒有鍵名，只有鍵值（或者說鍵名和鍵值是同一個值），所以key方法和value方法的行為完全一致。
<pre>
var mySet = new Set(['red', 'green', 'blue']);
for(var value of mySet.values()){
	console.log(value);
}
// red
// green
// blue

// 其實不寫.values()得到的結果是一樣的
</pre>
		</td>
	</tr>
</table>
</main>
</body>
</html>