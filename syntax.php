<?php header('Content-type: text/html; charset=utf-8'); ?>
<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta property="og:title" content="Javascript字典，語法及API總覽" />
<meta property="og:description" content="Javascript字典中所有的語法及API列表" />
<meta property="og:type" content="website" />
<meta property="og:url" content="http://javascript.john650914.com" />
<meta property="og:image" content="http://javascript.john650914.com/images/fb.jpg" />
<meta name="keywords" content="javascript,物件,object,運算子,Operator,條件式,condition,迴圈,looping,宣告,statement,陣列,array,布林,boolean,函式,function,字串,string,規則運算式,regexp,BOM,DOM" />
<meta name="description" content="Javascript字典中所有的語法及API列表" />
<title>Javascript語法與API文件．Javascript字典</title>
<link type="text/css" rel="stylesheet" href="css/default.css"/>
<?php
	include("includes/analyticstracking.php");
?>
<script src="/js/jquery-1.11.3.min.js"></script>
<script src="js/default.js"></script>
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<![endif]-->
<script>
	$(function(){
		if(location.href.match('yellow')){
			$('.top-menu li a').css({'color':'yellow'});
		}
	});
</script>
</head>
<body>
<?php
	include("includes/header&sidemenu.php");
?>
<main class="main" style="padding-left:0; padding-right:0;">
	<h1>Javascript語法及API總覽</h1>
	<table class="api-table">
		<CAPTION>Basic Syntax</CAPTION>
		<tr>
			<td rowspan="7">Operators</td>
			<td>算術運算子</td>
			<td>
				<a href="/documentation/Operators.php">+</a>
				<a href="/documentation/Operators.php">-</a>
				<a href="/documentation/Operators.php">*</a>
				<a href="/documentation/Operators.php">/</a>
				<a href="/documentation/Operators.php">%</a>
				<a href="/documentation/Operators.php">++</a>
				<a href="/documentation/Operators.php">--</a>
				<a href="/documentation/Operators.php">(-)</a>
				<a href="/documentation/Operators.php">(+)</a>
			</td>
		</tr>
		<tr>
			<td>展開運算子</td>
			<td>
				<a href="/documentation/Operators.php">...</a>
			</td>
		</tr>
		<tr>
			<td>指派運算子</td>
			<td>
				<a href="/documentation/Operators.php">=</a>
				<a href="/documentation/Operators.php">+=</a>
				<a href="/documentation/Operators.php">-=</a>
				<a href="/documentation/Operators.php">*=</a>
				<a href="/documentation/Operators.php">/=</a>
				<a href="/documentation/Operators.php">%=</a>
				<a href="/documentation/Operators.php">&lt;&lt;=</a>
				<a href="/documentation/Operators.php">&gt;&gt;=</a>
				<a href="/documentation/Operators.php">&gt;&gt;&gt;=</a>
				<a href="/documentation/Operators.php">&amp;=</a>
				<a href="/documentation/Operators.php">|=</a>
				<a href="/documentation/Operators.php">^=</a>
			</td>
		</tr>
		<tr>
			<td>邏輯運算子</td>
			<td>
				<a href="/documentation/Operators.php">&amp;&amp;</a>
				<a href="/documentation/Operators.php">||</a>
				<a href="/documentation/Operators.php">!</a>
			</td>
		</tr>
		<tr>
			<td>比較運算子</td>
			<td>
				<a href="/documentation/Operators.php">==</a>
				<a href="/documentation/Operators.php">===</a>
				<a href="/documentation/Operators.php">!=</a>
				<a href="/documentation/Operators.php">!==</a>
				<a href="/documentation/Operators.php">&gt;</a>
				<a href="/documentation/Operators.php">&gt;=</a>
				<a href="/documentation/Operators.php">&lt;</a>
				<a href="/documentation/Operators.php">&lt;=</a>
			</td>
		</tr>
		<tr>
			<td>位元運算子</td>
			<td>
				<a href="/documentation/Operators.php">&amp;</a>
				<a href="/documentation/Operators.php">|</a>
				<a href="/documentation/Operators.php">^</a>
				<a href="/documentation/Operators.php">~</a>
				<a href="/documentation/Operators.php">&lt;&lt;</a>
				<a href="/documentation/Operators.php">&gt;&gt;</a>
				<a href="/documentation/Operators.php">&gt;&gt;&gt;</a>
			</td>
		</tr>
		<tr>
			<td>特殊運算子</td>
			<td>
				<a href="/documentation/Operators.php">,</a>
				<a href="/documentation/Operators.php">()?:</a>
				<a href="/documentation/Operators.php">delete</a>
				<a href="/documentation/Operators.php">in</a>
				<a href="/documentation/Operators.php">instanceof</a>
				<a href="/documentation/Operators.php">new</a>
				<a href="/documentation/Operators.php">this</a>
				<a href="/documentation/Operators.php">try-catch-finally</a>
				<a href="/documentation/Operators.php">throw</a>
				<a href="/documentation/Operators.php">typeof</a>
				<a href="/documentation/Operators.php">void</a>
			</td>
		</tr>
		<tr>
			<td>Statements</td>
			<td>關鍵字</td>
			<td>
				<a href="/documentation/Statements.php">var</a>
				<a href="/documentation/Statements.php">with</a>
			</td>
		</tr>
		<tr>
			<td>Conditionals</td>
			<td>關鍵字</td>
			<td>
				<a href="/documentation/Conditionals.php">if</a>
				<a href="/documentation/Conditionals.php">if/else</a>
				<a href="/documentation/Conditionals.php">switch-case-break-default</a>
			</td>
		</tr>
		<tr>
			<td>Looping</td>
			<td>關鍵字</td>
			<td>
				<a href="/documentation/Looping.php">for</a>
				<a href="/documentation/Looping.php">while</a>
				<a href="/documentation/Looping.php">do/while</a>
				<a href="/documentation/Looping.php">for / in</a>
				<a href="/documentation/Looping.php">break</a>
				<a href="/documentation/Looping.php">continue</a>
			</td>
		</tr>
		<tr>
			<td>Global Functions</td>
			<td>方法</td>
			<td>
				<a href="/documentation/Global-Functions.php">decodeURI()</a>
				<a href="/documentation/Global-Functions.php">decodeURIComponent()</a>
				<a href="/documentation/Global-Functions.php">encodeURI()</a>
				<a href="/documentation/Global-Functions.php">encodeURIComponent()</a>
				<a href="/documentation/Global-Functions.php">escape()</a>
				<a href="/documentation/Global-Functions.php">eval()</a>
				<a href="/documentation/Global-Functions.php">isFinite()</a>
				<a href="/documentation/Global-Functions.php">isNaN()</a>
				<a href="/documentation/Global-Functions.php">Number()</a>
				<a href="/documentation/Global-Functions.php">parseFloat()</a>
				<a href="/documentation/Global-Functions.php">parseInt()</a>
				<a href="/documentation/Global-Functions.php">String()</a>
				<a href="/documentation/Global-Functions.php">toString()</a>
				<a href="/documentation/Global-Functions.php">unescape()</a>
			</td>
		</tr>
		<tr>
			<td rowspan="4">Others</td>
			<td>特殊字元</td>
			<td>
				<a href="/documentation/Others.php">\</a>
				<a href="/documentation/Others.php">\\</a>
				<a href="/documentation/Others.php">\&apos;</a>
				<a href="/documentation/Others.php">\&quot;</a>
				<a href="/documentation/Others.php">\n</a>
			</td>
		</tr>
		<tr>
			<td>資料類形</td>
			<td>
				<a href="/documentation/Others.php">Boolean</a>
				<a href="/documentation/Others.php">NaN</a>
				<a href="/documentation/Others.php">Null</a>
				<a href="/documentation/Others.php">Number</a>
				<a href="/documentation/Others.php">Object</a>
				<a href="/documentation/Others.php">String</a>
				<a href="/documentation/Others.php">Undefined</a>
			</td>
		</tr>
		<tr>
			<td>括號</td>
			<td>
				<a href="/documentation/Others.php">()</a>
				<a href="/documentation/Others.php">[]</a>
				<a href="/documentation/Others.php">{}</a>
			</td>
		</tr>
		<tr>
			<td>綜合知識</td>
			<td>
				<a href="/documentation/Others.php">綜合知識</a>
			</td>
		</tr>
	</table>
	<table class="api-table">
		<CAPTION>JS Objects</CAPTION>
		<tr>
			<td rowspan="3">Array</td>
			<td>物件</td>
			<td>
				<a href="/documentation/Array.php">Array</a>
			</td>
		</tr>
		<tr>
			<td>屬性</td>
			<td>
				<a href="/documentation/Array.php">constructor</a>
				<a href="/documentation/Array.php">length</a>
				<a href="/documentation/Array.php">prototype</a>
			</td>
		</tr>
		<tr>
			<td>方法</td>
			<td>
				<a href="/documentation/Array.php">concat()</a>
				<a href="/documentation/Array.php">every()</a>
				<a href="/documentation/Array.php">filter()</a>
				<a href="/documentation/Array.php">foreach()</a>
				<a href="/documentation/Array.php">indexOf()</a>
				<a href="/documentation/Array.php">join()</a>
				<a href="/documentation/Array.php">lastIndexOf()</a>
				<a href="/documentation/Array.php">map()</a>
				<a href="/documentation/Array.php">pop()</a>
				<a href="/documentation/Array.php">push()</a>
				<a href="/documentation/Array.php">reverse()</a>
				<a href="/documentation/Array.php">shift()</a>
				<a href="/documentation/Array.php">slice()</a>
				<a href="/documentation/Array.php">some()</a>
				<a href="/documentation/Array.php">sort()</a>
				<a href="/documentation/Array.php">splice()</a>
				<a href="/documentation/Array.php">toSource()</a>
				<a href="/documentation/Array.php">toString()</a>
				<a href="/documentation/Array.php">unshift()</a>
				<a href="/documentation/Array.php">valueOf()</a>
			</td>
		</tr>
		<tr>
			<td rowspan="3">Boolean</td>
			<td>物件</td>
			<td>
				<a href="/documentation/Boolean.php">Boolean</a>
			</td>
		</tr>
		<tr>
			<td>屬性</td>
			<td>
				<a href="/documentation/Boolean.php">constructor</a>
				<a href="/documentation/Boolean.php">prototype</a>
			</td>
		</tr>
		<tr>
			<td>方法</td>
			<td>
				<a href="/documentation/Boolean.php">toString()</a>
				<a href="/documentation/Boolean.php">valueOf()</a>
			</td>
		</tr>
		<tr>
			<td rowspan="3">Date</td>
			<td>物件</td>
			<td>
				<a href="/documentation/Date.php">Date</a>
			</td>
		</tr>
		<tr>
			<td>屬性</td>
			<td>
				<a href="/documentation/Date.php">constructor</a>
				<a href="/documentation/Date.php">prototype</a>
			</td>
		</tr>
		<tr>
			<td>方法</td>
			<td>
				<a href="/documentation/Date.php">getDate()</a>
				<a href="/documentation/Date.php">getDay()</a>
				<a href="/documentation/Date.php">getFullYear()</a>
				<a href="/documentation/Date.php">getHours()</a>
				<a href="/documentation/Date.php">getMilliseconds()</a>
				<a href="/documentation/Date.php">getMinutes()</a>
				<a href="/documentation/Date.php">getMonth()</a>
				<a href="/documentation/Date.php">getSeconds()</a>
				<a href="/documentation/Date.php">getTime()</a>
				<a href="/documentation/Date.php">getTimezoneOffset()</a>
				<a href="/documentation/Date.php">getUTCDate()</a>
				<a href="/documentation/Date.php">getUTCDay()</a>
				<a href="/documentation/Date.php">getUTCFullYear()</a>
				<a href="/documentation/Date.php">getUTCHours()</a>
				<a href="/documentation/Date.php">getUTCMilliseconds()</a>
				<a href="/documentation/Date.php">getUTCMinutes()</a>
				<a href="/documentation/Date.php">getUTCMonth()</a>
				<a href="/documentation/Date.php">getUTCSeconds()</a>
				<a href="/documentation/Date.php">getYear()</a>
				<a href="/documentation/Date.php">parse()</a>
				<a href="/documentation/Date.php">setDate()</a>
				<a href="/documentation/Date.php">setFullYear()</a>
				<a href="/documentation/Date.php">setHours()</a>
				<a href="/documentation/Date.php">setMilliseconds()</a>
				<a href="/documentation/Date.php">setMinutes()</a>
				<a href="/documentation/Date.php">setMonth()</a>
				<a href="/documentation/Date.php">setSeconds()</a>
				<a href="/documentation/Date.php">setTime()</a>
				<a href="/documentation/Date.php">setUTCDate()</a>
				<a href="/documentation/Date.php">setUTCFullYear()</a>
				<a href="/documentation/Date.php">setUTCHours()</a>
				<a href="/documentation/Date.php">setUTCMilliseconds()</a>
				<a href="/documentation/Date.php">setUTCMinutes()</a>
				<a href="/documentation/Date.php">setUTCMonth()</a>
				<a href="/documentation/Date.php">setUTCSeconds()</a>
				<a href="/documentation/Date.php">setYear()</a>
				<a href="/documentation/Date.php">toDateString()</a>
				<a href="/documentation/Date.php">toGMTString()</a>
				<a href="/documentation/Date.php">toLocaleDateString()</a>
				<a href="/documentation/Date.php">toLocaleTimeString()</a>
				<a href="/documentation/Date.php">toLocaleString()</a>
				<a href="/documentation/Date.php">toString()</a>
				<a href="/documentation/Date.php">toTimeString()</a>
				<a href="/documentation/Date.php">toUTCString()</a>
				<a href="/documentation/Date.php">UTC()</a>
				<a href="/documentation/Date.php">valueOf()</a>
			</td>
		</tr>
		<tr>
			<td rowspan="2">Error</td>
			<td>物件</td>
			<td>
				<a href="/documentation/Error.php">Error</a>
			</td>
		</tr>
		<tr>
			<td>屬性</td>
			<td>
				<a href="/documentation/Error.php">constructor</a>
				<a href="/documentation/Error.php">description</a>
				<a href="/documentation/Error.php">message</a>
				<a href="/documentation/Error.php">name</a>
				<a href="/documentation/Error.php">toSource</a>
				<a href="/documentation/Error.php">toString</a>
				<a href="/documentation/Error.php">valueOf</a>
			</td>
		</tr>
		<tr>
			<td rowspan="5">Function</td>
			<td>物件</td>
			<td>
				<a href="/documentation/Function.php">Function</a>
			</td>
		</tr>
		<tr>
			<td>物件</td>
			<td>
				<a href="/documentation/Function.php">arguments</a>
			</td>
		</tr>
		<tr>
			<td>屬性</td>
			<td>
				<a href="/documentation/Function.php">caller</a>
				<a href="/documentation/Function.php">length</a>
				<a href="/documentation/Function.php">prototype</a>
			</td>
		</tr>
		<tr>
			<td>方法</td>
			<td>
				<a href="/documentation/Function.php">apply()</a>
				<a href="/documentation/Function.php">call()</a>
				<a href="/documentation/Function.php">toString()</a>
			</td>
		</tr>
		<tr>
			<td>關鍵字</td>
			<td>
				<a href="/documentation/Function.php">return</a>
			</td>
		</tr>
		<tr>
			<td rowspan="2">JSON</td>
			<td>物件</td>
			<td>
				<a href="/documentation/JSON.php">JSON</a>
			</td>
		</tr>
		<tr>
			<td>JSON方法</td>
			<td>
				<a href="/documentation/JSON.php">stringify(obj, [replacer], [space])</a>
				<a href="/documentation/JSON.php">parse(string, [reviver])</a>
				<a href="/documentation/JSON.php">toJSON()</a>
			</td>
		</tr>
		<tr>
			<td rowspan="4">Map</td>
			<td>物件</td>
			<td>
				<a href="/documentation/Map.php">Map</a>
			</td>
		</tr>
		<tr>
			<td>屬性</td>
			<td>
				<a href="/documentation/Map.php">size</a>
			</td>
		</tr>
		<tr>
			<td>方法</td>
			<td>
				<a href="/documentation/Map.php">clear()</a>
				<a href="/documentation/Map.php">delete()</a>
				<a href="/documentation/Map.php">get()</a>
				<a href="/documentation/Map.php">has()</a>
				<a href="/documentation/Map.php">set()</a>
			</td>
		</tr>
		<tr>
			<td>遍歷方法</td>
			<td>
				<a href="/documentation/Map.php">entries()</a>
				<a href="/documentation/Map.php">forEach()</a>
				<a href="/documentation/Map.php">keys()</a>
				<a href="/documentation/Map.php">values()</a>
			</td>
		</tr>
		<tr>
			<td rowspan="3">Math</td>
			<td>物件</td>
			<td>
				<a href="/documentation/Math.php">Math</a>
			</td>
		</tr>
		<tr>
			<td>屬性</td>
			<td>
				<a href="/documentation/Math.php">Math.E</a>
				<a href="/documentation/Math.php">Math.PI</a>
				<a href="/documentation/Math.php">Math.SQRT2</a>
				<a href="/documentation/Math.php">Math.SQRT1-2</a>
				<a href="/documentation/Math.php">Math.LN2</a>
				<a href="/documentation/Math.php">Math.LN10</a>
				<a href="/documentation/Math.php">Math.LOG2E</a>
				<a href="/documentation/Math.php">Math.LOG10E</a>
			</td>
		</tr>
		<tr>
			<td>方法</td>
			<td>
				<a href="/documentation/Math.php">Math.max()</a>
				<a href="/documentation/Math.php">Math.min()</a>
				<a href="/documentation/Math.php">Math.ceil()</a>
				<a href="/documentation/Math.php">Math.floor()</a>
				<a href="/documentation/Math.php">Math.round()</a>
				<a href="/documentation/Math.php">Math.random()</a>
				<a href="/documentation/Math.php">Math.abs()</a>
				<a href="/documentation/Math.php">Math.acos()</a>
				<a href="/documentation/Math.php">Math.asin()</a>
				<a href="/documentation/Math.php">Math.atan()</a>
				<a href="/documentation/Math.php">Math.atan2()</a>
				<a href="/documentation/Math.php">Math.cos()</a>
				<a href="/documentation/Math.php">Math.exp()</a>
				<a href="/documentation/Math.php">Math.log()</a>
				<a href="/documentation/Math.php">Math.pow()</a>
				<a href="/documentation/Math.php">Math.sin()</a>
				<a href="/documentation/Math.php">Math.sqrt()</a>
				<a href="/documentation/Math.php">Math.tan()</a>
			</td>
		</tr>
		<tr>
			<td rowspan="3">Number</td>
			<td>物件</td>
			<td>
				<a href="/documentation/Number.php">Number</a>
			</td>
		</tr>
		<tr>
			<td>屬性</td>
			<td>
				<a href="/documentation/Number.php">constructor</a>
				<a href="/documentation/Number.php">MAX-VALUE</a>
				<a href="/documentation/Number.php">MIN-VALUE</a>
				<a href="/documentation/Number.php">NEGATIVE-INFINITY</a>
				<a href="/documentation/Number.php">POSITIVE-INFINITY</a>
				<a href="/documentation/Number.php">prototype</a>
			</td>
		</tr>
		<tr>
			<td>方法</td>
			<td>
				<a href="/documentation/Number.php">toExponential()</a>
				<a href="/documentation/Number.php">toFixed()</a>
				<a href="/documentation/Number.php">toPrecision()</a>
				<a href="/documentation/Number.php">toString()</a>
				<a href="/documentation/Number.php">valueOf()</a>
			</td>
		</tr>
		
		<tr>
			<td rowspan="3">Object</td>
			<td>物件</td>
			<td>
				<a href="/documentation/object-object.php">Object</a>
			</td>
		</tr>
		<tr>
			<td>屬性</td>
			<td>
				<a href="/documentation/object-object.php">constructor</a>
			</td>
		</tr>
		<tr>
			<td>方法</td>
			<td>
				<a href="/documentation/object-object.php">hasOwnProperty()</a>
				<a href="/documentation/object-object.php">isPrototypeOf()</a>
				<a href="/documentation/object-object.php">Object.keys()</a>
				<a href="/documentation/object-object.php">Object.getOwnPropertyNames()</a>
				<a href="/documentation/object-object.php">propertyIsEnumerable(prop)</a>
				<a href="/documentation/object-object.php">toLocaleString()</a>
				<a href="/documentation/object-object.php">toString()</a>
				<a href="/documentation/object-object.php">valueOf()</a>
			</td>
		</tr>
		<tr>
			<td rowspan="4">Set</td>
			<td>物件</td>
			<td>
				<a href="/documentation/Set.php">Set</a>
			</td>
		</tr>
		<tr>
			<td>屬性</td>
			<td>
				<a href="/documentation/Set.php">size</a>
			</td>
		</tr>
		<tr>
			<td>方法</td>
			<td>
				<a href="/documentation/Set.php">add()</a>
				<a href="/documentation/Set.php">clear()</a>
				<a href="/documentation/Set.php">delete()</a>
				<a href="/documentation/Set.php">has()</a>
			</td>
		</tr>
		<tr>
			<td>遍歷方法</td>
			<td>
				<a href="/documentation/Set.php">entries()</a>
				<a href="/documentation/Set.php">forEach()</a>
				<a href="/documentation/Set.php">keys()</a>
				<a href="/documentation/Set.php">values()</a>
			</td>
		</tr>
		<tr>
			<td rowspan="4">String</td>
			<td>物件</td>
			<td>
				<a href="/documentation/String.php">String</a>
			</td>
		</tr>
		<tr>
			<td>屬性</td>
			<td>
				<a href="/documentation/String.php">constructor</a>
				<a href="/documentation/String.php">length</a>
				<a href="/documentation/String.php">prototype</a>
			</td>
		</tr>
		<tr>
			<td>方法</td>
			<td>
				<a href="/documentation/String.php">charAt()</a>
				<a href="/documentation/String.php">charCodeAt()</a>
				<a href="/documentation/String.php">concat()</a>
				<a href="/documentation/String.php">fromCharCode()</a>
				<a href="/documentation/String.php">indexOf()</a>
				<a href="/documentation/String.php">lastIndexOf()</a>
				<a href="/documentation/String.php">match()</a>
				<a href="/documentation/String.php">replace()</a>
				<a href="/documentation/String.php">search()</a>
				<a href="/documentation/String.php">slice()</a>
				<a href="/documentation/String.php">split()</a>
				<a href="/documentation/String.php">substr()</a>
				<a href="/documentation/String.php">substring()</a>
				<a href="/documentation/String.php">toLowerCase()</a>
				<a href="/documentation/String.php">toUpperCase()</a>
				<a href="/documentation/String.php">trim()</a>
				<a href="/documentation/String.php">valueOf()</a>
			</td>
		</tr>
		<tr>
			<td>html方法</td>
			<td>
				<a href="/documentation/String.php">anchor()</a>
				<a href="/documentation/String.php">big()</a>
				<a href="/documentation/String.php">blink()</a>
				<a href="/documentation/String.php">bold()</a>
				<a href="/documentation/String.php">fixed()</a>
				<a href="/documentation/String.php">fontcolor()</a>
				<a href="/documentation/String.php">fontsize()</a>
				<a href="/documentation/String.php">italics()</a>
				<a href="/documentation/String.php">link()</a>
				<a href="/documentation/String.php">small()</a>
				<a href="/documentation/String.php">strike()</a>
				<a href="/documentation/String.php">sub()</a>
				<a href="/documentation/String.php">sup()</a>
			</td>
		</tr>
		<tr>
			<td rowspan="10">RegExp</td>
			<td>物件</td>
			<td>
				<a href="/documentation/RegExp.php">RegExp</a>
			</td>
		</tr>
		<tr>
			<td>Pattern flag 屬性</td>
			<td>
				<a href="/documentation/RegExp.php">i</a>
				<a href="/documentation/RegExp.php">g</a>
				<a href="/documentation/RegExp.php">gi</a>
				<a href="/documentation/RegExp.php">m</a>
			</td>
		</tr>
		<tr>
			<td>Position Matching 符號</td>
			<td>
				<a href="/documentation/RegExp.php">^</a>
				<a href="/documentation/RegExp.php">$</a>
				<a href="/documentation/RegExp.php">\</a>
				<a href="/documentation/RegExp.php">\b</a>
				<a href="/documentation/RegExp.php">\B</a>
				<a href="/documentation/RegExp.php">(?=pattern)</a>
				<a href="/documentation/RegExp.php">(?!pattern)</a>
			</td>
		</tr>
		<tr>
			<td>Literals 符號</td>
			<td>
				<a href="/documentation/RegExp.php">Alphanumeric</a>
				<a href="/documentation/RegExp.php">\0</a>
				<a href="/documentation/RegExp.php">\n</a>
				<a href="/documentation/RegExp.php">\f</a>
				<a href="/documentation/RegExp.php">\r</a>
				<a href="/documentation/RegExp.php">\t</a>
				<a href="/documentation/RegExp.php">\v</a>
				<a href="/documentation/RegExp.php">\xxx</a>
				<a href="/documentation/RegExp.php">\xdd</a>
				<a href="/documentation/RegExp.php">\uxxx</a>
				<a href="/documentation/RegExp.php">[\b]</a>
			</td>
		</tr>
		<tr>
			<td>Character Classes 符號</td>
			<td>
				<a href="/documentation/RegExp.php">[xyz]</a>
				<a href="/documentation/RegExp.php">[^xyz]</a>
				<a href="/documentation/RegExp.php">.</a>
				<a href="/documentation/RegExp.php">\w</a>
				<a href="/documentation/RegExp.php">\W</a>
				<a href="/documentation/RegExp.php">\d</a>
				<a href="/documentation/RegExp.php">\D</a>
				<a href="/documentation/RegExp.php">\s</a>
				<a href="/documentation/RegExp.php">\S</a>
			</td>
		</tr>
		<tr>
			<td>Repetition 符號</td>
			<td>
				<a href="/documentation/RegExp.php">{n}</a>
				<a href="/documentation/RegExp.php">{n,}</a>
				<a href="/documentation/RegExp.php">{n,x}</a>
				<a href="/documentation/RegExp.php">?</a>
				<a href="/documentation/RegExp.php">*</a>
				<a href="/documentation/RegExp.php">+</a>
			</td>
		</tr>
		<tr>
			<td>Alternation &amp; Grouping 符號</td>
			<td>
				<a href="/documentation/RegExp.php">()</a>
				<a href="/documentation/RegExp.php">()</a>
				<a href="/documentation/RegExp.php">(?:x)</a>
				<a href="/documentation/RegExp.php">x(?=y)</a>
				<a href="/documentation/RegExp.php">x(?!y)</a>
				<a href="/documentation/RegExp.php">|</a>
			</td>
		</tr>
		<tr>
			<td>Back references 符號</td>
			<td>
				<a href="/documentation/RegExp.php">( )\n</a>
			</td>
		</tr>
		<tr>
			<td>屬性</td>
			<td>
				<a href="/documentation/RegExp.php">global</a>
				<a href="/documentation/RegExp.php">ignoreCase</a>
				<a href="/documentation/RegExp.php">lastIndex</a>
				<a href="/documentation/RegExp.php">multiline</a>
				<a href="/documentation/RegExp.php">source</a>
			</td>
		</tr>
		<tr>
			<td>方法</td>
			<td>
				<a href="/documentation/RegExp.php">compile()</a>
				<a href="/documentation/RegExp.php">exec()</a>
				<a href="/documentation/RegExp.php">match()</a>
				<a href="/documentation/RegExp.php">replace()</a>
				<a href="/documentation/RegExp.php">search()</a>
				<a href="/documentation/RegExp.php">split()</a>
				<a href="/documentation/RegExp.php">test()</a>
			</td>
		</tr>
	</table>
	<table class="api-table">
		<CAPTION>BOM Objects</CAPTION>
		<tr>
			<td rowspan="4">window</td>
			<td>物件</td>
			<td>
				<a href="/documentation/window.php">window</a>
			</td>
		</tr>
		<tr>
			<td>事件屬性</td>
			<td>
				<a href="/documentation/window.php">onblur</a>
				<a href="/documentation/window.php">onerror</a>
				<a href="/documentation/window.php">onfocus</a>
				<a href="/documentation/window.php">onload</a>
				<a href="/documentation/window.php">onresize</a>
				<a href="/documentation/window.php">onscroll</a>
				<a href="/documentation/window.php">onbeforeunload</a>
				<a href="/documentation/window.php">onunload</a>
			</td>
		</tr>
		<tr>
			<td>屬性</td>
			<td>
				<a href="/documentation/window.php">closed</a>
				<a href="/documentation/window.php">defaultStatus</a>
				<a href="/documentation/window.php">document</a>
				<a href="/documentation/window.php">frames</a>
				<a href="/documentation/window.php">history</a>
				<a href="/documentation/window.php">innerWidth</a>
				<a href="/documentation/window.php">innerHeight</a>
				<a href="/documentation/window.php">length</a>
				<a href="/documentation/window.php">location</a>
				<a href="/documentation/window.php">name</a>
				<a href="/documentation/window.php">opener</a>
				<a href="/documentation/window.php">outerWidth</a>
				<a href="/documentation/window.php">outerHeight</a>
				<a href="/documentation/window.php">pageXOffset</a>
				<a href="/documentation/window.php">pageYOffset</a>
				<a href="/documentation/window.php">parent</a>
				<a href="/documentation/window.php">screen</a>
				<a href="/documentation/window.php">screenX</a>
				<a href="/documentation/window.php">screenY</a>
				<a href="/documentation/window.php">screenLeft</a>
				<a href="/documentation/window.php">screenTop</a>
				<a href="/documentation/window.php">scrollX</a>
				<a href="/documentation/window.php">scrollY</a>
				<a href="/documentation/window.php">self</a>
				<a href="/documentation/window.php">status</a>
				<a href="/documentation/window.php">top</a>
				<a href="/documentation/window.php">window</a>
			</td>
		</tr>
		<tr>
			<td>方法</td>
			<td>
				<a href="/documentation/window.php">addEventListener()</a>
				<a href="/documentation/window.php">alert()</a>
				<a href="/documentation/window.php">attachEvent()</a>
				<a href="/documentation/window.php">blur()</a>
				<a href="/documentation/window.php">clearInterval()</a>
				<a href="/documentation/window.php">clearTimeout()</a>
				<a href="/documentation/window.php">close()</a>
				<a href="/documentation/window.php">confirm()</a>
				<a href="/documentation/window.php">detachEvent()</a>
				<a href="/documentation/window.php">dispatchEvent()</a>
				<a href="/documentation/window.php">execscript()</a>
				<a href="/documentation/window.php">find()</a>
				<a href="/documentation/window.php">fireEvent()</a>
				<a href="/documentation/window.php">focus()</a>
				<a href="/documentation/window.php">getComputedStyle()</a>
				<a href="/documentation/window.php">home()</a>
				<a href="/documentation/window.php">moveBy()</a>
				<a href="/documentation/window.php">moveTo()</a>
				<a href="/documentation/window.php">navigate()</a>
				<a href="/documentation/window.php">open()</a>
				<a href="/documentation/window.php">opener()</a>
				<a href="/documentation/window.php">print()</a>
				<a href="/documentation/window.php">prompt()</a>
				<a href="/documentation/window.php">removeEventListener()</a>
				<a href="/documentation/window.php">resizeBy()</a>
				<a href="/documentation/window.php">resizeTo()</a>
				<a href="/documentation/window.php">scrollBy()</a>
				<a href="/documentation/window.php">scrollByLines()</a>
				<a href="/documentation/window.php">scrollByPages()</a>
				<a href="/documentation/window.php">scrollTo()</a>
				<a href="/documentation/window.php">setInterval()</a>
				<a href="/documentation/window.php">setTimeout()</a>
				<a href="/documentation/window.php">showhelp()</a>
				<a href="/documentation/window.php">showmodaldialog()</a>
				<a href="/documentation/window.php">sizeToContent()</a>
				<a href="/documentation/window.php">stop()</a>
			</td>
		</tr>
		<tr>
			<td rowspan="3">navigator</td>
			<td>屬性</td>
			<td>
				<a href="/documentation/navigator.php">navigator</a>
			</td>
		</tr>
		<tr>
			<td>屬性</td>
			<td>
				<a href="/documentation/navigator.php">appCodeName</a>
				<a href="/documentation/navigator.php">appMinorVersion</a>
				<a href="/documentation/navigator.php">appName</a>
				<a href="/documentation/navigator.php">appVersion</a>
				<a href="/documentation/navigator.php">browserLanguage</a>
				<a href="/documentation/navigator.php">cookieEnabled</a>
				<a href="/documentation/navigator.php">cpuClass</a>
				<a href="/documentation/navigator.php">onLine</a>
				<a href="/documentation/navigator.php">platform</a>
				<a href="/documentation/navigator.php">plugins</a>
				<a href="/documentation/navigator.php">systemLanguage</a>
				<a href="/documentation/navigator.php">userAgent</a>
				<a href="/documentation/navigator.php">userLanguage</a>
			</td>
		</tr>
		<tr>
			<td>方法</td>
			<td>
				<a href="/documentation/navigator.php">javaEnabled()</a>
				<a href="/documentation/navigator.php">taintEnabled()</a>
				<a href="/documentation/navigator.php">plugins.refresh()</a>
			</td>
		</tr>
		<tr>
			<td rowspan="2">screen</td>
			<td>物件</td>
			<td>
				<a href="/documentation/screen.php">screen</a>
			</td>
		</tr>
		<tr>
			<td>屬性</td>
			<td>
				<a href="/documentation/screen.php">availHeight</a>
				<a href="/documentation/screen.php">availWidth</a>
				<a href="/documentation/screen.php">colorDepth</a>
				<a href="/documentation/screen.php">height</a>
				<a href="/documentation/screen.php">pixelDepth</a>
				<a href="/documentation/screen.php">width</a>
			</td>
		</tr>
		<tr>
			<td rowspan="3">history</td>
			<td>物件</td>
			<td>
				<a href="/documentation/history.php">history</a>
			</td>
		</tr>
		<tr>
			<td>屬性</td>
			<td>
				<a href="/documentation/history.php">length</a>
			</td>
		</tr>
		<tr>
			<td>方法</td>
			<td>
				<a href="/documentation/history.php">back()</a>
				<a href="/documentation/history.php">forward()</a>
				<a href="/documentation/history.php">go(whereTo)</a>
			</td>
		</tr>
		<tr>
			<td rowspan="3">location</td>
			<td>物件</td>
			<td>
				<a href="/documentation/location.php">location</a>
			</td>
		</tr>
		<tr>
			<td>屬性</td>
			<td>
				<a href="/documentation/location.php">hash</a>
				<a href="/documentation/location.php">host</a>
				<a href="/documentation/location.php">hostname</a>
				<a href="/documentation/location.php">href</a>
				<a href="/documentation/location.php">pathname</a>
				<a href="/documentation/location.php">port</a>
				<a href="/documentation/location.php">protocol</a>
				<a href="/documentation/location.php">search</a>
			</td>
		</tr>
		<tr>
			<td>方法</td>
			<td>
				<a href="/documentation/location.php">reload()</a>
				<a href="/documentation/location.php">replace()</a>
			</td>
		</tr>
	</table>
	<table class="api-table">
		<CAPTION>DOM Objects</CAPTION>
		<tr>
			<td rowspan="3">document</td>
			<td>物件</td>
			<td>
				<a href="/documentation/document.php">document</a>
			</td>
		</tr>
		<tr>
			<td>屬性</td>
			<td>
				<a href="/documentation/document.php">alinkColor</a>
				<a href="/documentation/document.php">body</a>
				<a href="/documentation/document.php">all</a>
				<a href="/documentation/document.php">anchors</a>
				<a href="/documentation/document.php">applets</a>
				<a href="/documentation/document.php">bgColor</a>
				<a href="/documentation/document.php">compatMode</a>
				<a href="/documentation/document.php">cookie</a>
				<a href="/documentation/document.php">doctype</a>
				<a href="/documentation/document.php">documentElement</a>
				<a href="/documentation/document.php">domain</a>
				<a href="/documentation/document.php">embeds</a>
				<a href="/documentation/document.php">fgColor</a>
				<a href="/documentation/document.php">fileSize</a>
				<a href="/documentation/document.php">forms</a>
				<a href="/documentation/document.php">images</a>
				<a href="/documentation/document.php">implementation</a>
				<a href="/documentation/document.php">lastModified</a>
				<a href="/documentation/document.php">linkColor</a>
				<a href="/documentation/document.php">links</a>
				<a href="/documentation/document.php">plugins</a>
				<a href="/documentation/document.php">readyState</a>
				<a href="/documentation/document.php">referrer</a>
				<a href="/documentation/document.php">styleSheets</a>
				<a href="/documentation/document.php">title</a>
				<a href="/documentation/document.php">URL</a>
				<a href="/documentation/document.php">vlinkColor</a>
			</td>
		</tr>
		<tr>
			<td>方法</td>
			<td>
				<a href="/documentation/document.php">close()</a>
				<a href="/documentation/document.php">createAttribute()</a>
				<a href="/documentation/document.php">createComment()</a>
				<a href="/documentation/document.php">createDocumentFragment()</a>
				<a href="/documentation/document.php">createElement()</a>
				<a href="/documentation/document.php">createTextNode()</a>
				<a href="/documentation/document.php">elementFromPoint()</a>
				<a href="/documentation/document.php">getComputedStyle()</a>
				<a href="/documentation/document.php">getElementById()</a>
				<a href="/documentation/document.php">getElementsByClassName()</a>
				<a href="/documentation/document.php">getElementsByName()</a>
				<a href="/documentation/document.php">getElementsByTagName()</a>
				<a href="/documentation/document.php">open()</a>
				<a href="/documentation/document.php">querySelector()</a>
				<a href="/documentation/document.php">querySelectorAll()</a>
				<a href="/documentation/document.php">write()</a>
				<a href="/documentation/document.php">writeln()</a>
			</td>
		</tr>
		<tr>
			<td rowspan="6">Events</td>
			<td>物件</td>
			<td>
				<a href="/documentation/Events.php">Event</a>
			</td>
		</tr>
		<tr>
			<td>屬性</td>
			<td>
				<a href="/documentation/Events.php">altKey</a>
				<a href="/documentation/Events.php">bubbles</a>
				<a href="/documentation/Events.php">button</a>
				<a href="/documentation/Events.php">cancelBubble</a>
				<a href="/documentation/Events.php">cancelable</a>
				<a href="/documentation/Events.php">charCode</a>
				<a href="/documentation/Events.php">clientX</a>
				<a href="/documentation/Events.php">clientY</a>
				<a href="/documentation/Events.php">ctrlKey</a>
				<a href="/documentation/Events.php">currentTarget</a>
				<a href="/documentation/Events.php">detail</a>
				<a href="/documentation/Events.php">eventPhase</a>
				<a href="/documentation/Events.php">fromeElement</a>
				<a href="/documentation/Events.php">isChar</a>
				<a href="/documentation/Events.php">keyCode</a>
				<a href="/documentation/Events.php">layerX</a>
				<a href="/documentation/Events.php">layerY</a>
				<a href="/documentation/Events.php">metaKey</a>
				<a href="/documentation/Events.php">offsetX</a>
				<a href="/documentation/Events.php">offsetY</a>
				<a href="/documentation/Events.php">pageX</a>
				<a href="/documentation/Events.php">pageY</a>
				<a href="/documentation/Events.php">relatedTarget</a>
				<a href="/documentation/Events.php">returnValue</a>
				<a href="/documentation/Events.php">screenX</a>
				<a href="/documentation/Events.php">screenY</a>
				<a href="/documentation/Events.php">shiftKey</a>
				<a href="/documentation/Events.php">srcElement</a>
				<a href="/documentation/Events.php">target</a>
				<a href="/documentation/Events.php">timestamp</a>
				<a href="/documentation/Events.php">toElement</a>
				<a href="/documentation/Events.php">type</a>
				<a href="/documentation/Events.php">which</a>
			</td>
		</tr>
		<tr>
			<td>事件屬性(滑鼠)</td>
			<td>
				<a href="/documentation/Events.php">click</a>
				<a href="/documentation/Events.php">dblclick</a>
				<a href="/documentation/Events.php">mousedown</a>
				<a href="/documentation/Events.php">mouseout</a>
				<a href="/documentation/Events.php">mouseover</a>
				<a href="/documentation/Events.php">mouseup</a>
				<a href="/documentation/Events.php">mousemove</a>
			</td>
		</tr>
		<tr>
			<td>事件屬性(鍵盤)</td>
			<td>
				<a href="/documentation/Events.php">keydown</a>
				<a href="/documentation/Events.php">keypress</a>
				<a href="/documentation/Events.php">keyup</a>
			</td>
		</tr>
		<tr>
			<td>事件屬性(html)</td>
			<td>
				<a href="/documentation/Events.php">blur</a>
				<a href="/documentation/Events.php">change</a>
				<a href="/documentation/Events.php">error</a>
				<a href="/documentation/Events.php">focus</a>
				<a href="/documentation/Events.php">load</a>
				<a href="/documentation/Events.php">select</a>
				<a href="/documentation/Events.php">submit</a>
				<a href="/documentation/Events.php">unload</a>
			</td>
		</tr>
		<tr>
			<td>方法</td>
			<td>
				<a href="/documentation/Events.php">preventDefault()</a>
				<a href="/documentation/Events.php">stopPropagation()</a>
			</td>
		</tr>
		<tr>
			<td rowspan="3">DOM Elements</td>
			<td>物件</td>
			<td>
				<a href="/documentation/DOM-Elements.php">DOM</a>
			</td>
		</tr>
		<tr>
			<td>屬性</td>
			<td>
				<a href="/documentation/DOM-Elements.php">accessKey</a>
				<a href="/documentation/DOM-Elements.php">attributes</a>
				<a href="/documentation/DOM-Elements.php">childNodes</a>
				<a href="/documentation/DOM-Elements.php">className</a>
				<a href="/documentation/DOM-Elements.php">clientHeight</a>
				<a href="/documentation/DOM-Elements.php">clientWidth</a>
				<a href="/documentation/DOM-Elements.php">dir</a>
				<a href="/documentation/DOM-Elements.php">disabled</a>
				<a href="/documentation/DOM-Elements.php">firstChild</a>
				<a href="/documentation/DOM-Elements.php">height</a>
				<a href="/documentation/DOM-Elements.php">id</a>
				<a href="/documentation/DOM-Elements.php">innerHTML</a>
				<a href="/documentation/DOM-Elements.php">innerText</a>
				<a href="/documentation/DOM-Elements.php">lang</a>
				<a href="/documentation/DOM-Elements.php">lastChild</a>
				<a href="/documentation/DOM-Elements.php">length</a>
				<a href="/documentation/DOM-Elements.php">localName</a>
				<a href="/documentation/DOM-Elements.php">namespaceURI</a>
				<a href="/documentation/DOM-Elements.php">nextSibling</a>
				<a href="/documentation/DOM-Elements.php">nodeName</a>
				<a href="/documentation/DOM-Elements.php">nodeType</a>
				<a href="/documentation/DOM-Elements.php">nodeValue</a>
				<a href="/documentation/DOM-Elements.php">offsetHeight</a>
				<a href="/documentation/DOM-Elements.php">offsetLeft</a>
				<a href="/documentation/DOM-Elements.php">offsetParent</a>
				<a href="/documentation/DOM-Elements.php">offsetTop</a>
				<a href="/documentation/DOM-Elements.php">offsetWidth</a>
				<a href="/documentation/DOM-Elements.php">outerHTML</a>
				<a href="/documentation/DOM-Elements.php">ownerDocument</a>
				<a href="/documentation/DOM-Elements.php">parentNode</a>
				<a href="/documentation/DOM-Elements.php">prefix</a>
				<a href="/documentation/DOM-Elements.php">previousSibling</a>
				<a href="/documentation/DOM-Elements.php">scrollHeight</a>
				<a href="/documentation/DOM-Elements.php">scrollLeft</a>
				<a href="/documentation/DOM-Elements.php">scrollTop</a>
				<a href="/documentation/DOM-Elements.php">scrollWidth</a>
				<a href="/documentation/DOM-Elements.php">tabIndex</a>
				<a href="/documentation/DOM-Elements.php">tagName</a>
				<a href="/documentation/DOM-Elements.php">textContent</a>
				<a href="/documentation/DOM-Elements.php">title</a>
				<a href="/documentation/DOM-Elements.php">width</a>
			</td>
		</tr>
		<tr>
			<td>方法</td>
			<td>
				<a href="/documentation/DOM-Elements.php">appendChild()</a>
				<a href="/documentation/DOM-Elements.php">blur()</a>
				<a href="/documentation/DOM-Elements.php">click()</a>
				<a href="/documentation/DOM-Elements.php">cloneNode()</a>
				<a href="/documentation/DOM-Elements.php">dispatchEvent()</a>
				<a href="/documentation/DOM-Elements.php">fireEvent()</a>
				<a href="/documentation/DOM-Elements.php">focus()</a>
				<a href="/documentation/DOM-Elements.php">getAttribute()</a>
				<a href="/documentation/DOM-Elements.php">getAttributeNS()</a>
				<a href="/documentation/DOM-Elements.php">getAttributeNode()</a>
				<a href="/documentation/DOM-Elements.php">getAttributeNodeNS()</a>
				<a href="/documentation/DOM-Elements.php">getElementsByTagNameNS()</a>
				<a href="/documentation/DOM-Elements.php">hasAttribute()</a>
				<a href="/documentation/DOM-Elements.php">hasAttributeNS()</a>
				<a href="/documentation/DOM-Elements.php">hasAtrributes()</a>
				<a href="/documentation/DOM-Elements.php">hasChildNodes()</a>
				<a href="/documentation/DOM-Elements.php">insertAfter()</a>
				<a href="/documentation/DOM-Elements.php">insertBefore()</a>
				<a href="/documentation/DOM-Elements.php">item()</a>
				<a href="/documentation/DOM-Elements.php">normalize()</a>
				<a href="/documentation/DOM-Elements.php">querySelector()</a>
				<a href="/documentation/DOM-Elements.php">querySelectorAll()</a>
				<a href="/documentation/DOM-Elements.php">removeAttribute()</a>
				<a href="/documentation/DOM-Elements.php">removeAttributeNode()</a>
				<a href="/documentation/DOM-Elements.php">removeAttributeNS()</a>
				<a href="/documentation/DOM-Elements.php">removeChild()</a>
				<a href="/documentation/DOM-Elements.php">replaceChild()</a>
				<a href="/documentation/DOM-Elements.php">scrollIntoView()</a>
				<a href="/documentation/DOM-Elements.php">setAttribute()</a>
				<a href="/documentation/DOM-Elements.php">setAttributeNS()</a>
				<a href="/documentation/DOM-Elements.php">setAttributeNode()</a>
				<a href="/documentation/DOM-Elements.php">supports()</a>
				<a href="/documentation/DOM-Elements.php">toString()</a>
			</td>
		</tr>
		<tr>
			<td rowspan="2">body</td>
			<td>屬性</td>
			<td>
			<a href="/documentation/body.php">aLink</a>
			<a href="/documentation/body.php">background</a>
			<a href="/documentation/body.php">bgColor</a>
			<a href="/documentation/body.php">link</a>
			<a href="/documentation/body.php">offsetHeight</a>
			<a href="/documentation/body.php">offsetWidth</a>
			<a href="/documentation/body.php">text</a>
			<a href="/documentation/body.php">vLink</a>
		</td>
		</tr>
		<tr>
			<td>事件屬性</td>
			<td>
				<a href="/documentation/body.php">onload</a>
			</td>
		</tr>
		<tr>
			<td rowspan="4">form</td>
			<td>物件</td>
			<td>
				<a href="/documentation/form.php">form</a>
			</td>
		</tr>
		<tr>
			<td>屬性</td>
			<td>
				<a href="/documentation/form.php">acceptCharset</a>
				<a href="/documentation/form.php">action</a>
				<a href="/documentation/form.php">elements</a>
				<a href="/documentation/form.php">enctype</a>
				<a href="/documentation/form.php">length</a>
				<a href="/documentation/form.php">method</a>
				<a href="/documentation/form.php">name</a>
				<a href="/documentation/form.php">target</a>
			</td>
		</tr>
		<tr>
			<td>事件屬性</td>
			<td>
				<a href="/documentation/form.php">onreset</a>
				<a href="/documentation/form.php">onsubmit</a>
			</td>
		</tr>
		<tr>
			<td>方法</td>
			<td>
				<a href="/documentation/form.php">reset()</a>
				<a href="/documentation/form.php">submit()</a>
			</td>
		</tr>
		<tr>
			<td rowspan="3">button</td>
			<td>屬性</td>
			<td>
				<a href="/documentation/button.php">accessKey</a>
				<a href="/documentation/button.php">disabled</a>
				<a href="/documentation/button.php">form</a>
				<a href="/documentation/button.php">name</a>
				<a href="/documentation/button.php">type</a>
				<a href="/documentation/button.php">value</a>
			</td>
		</tr>
		<tr>
			<td>事件屬性</td>
			<td>
				<a href="/documentation/button.php">onClick</a>
			</td>
		</tr>
		<tr>
			<td>方法</td>
			<td>
				<a href="/documentation/button.php">blur()</a>
				<a href="/documentation/button.php">click()</a>
				<a href="/documentation/button.php">focus()</a>
			</td>
		</tr>
		<tr>
			<td rowspan="3">Input(button)</td>
			<td>屬性</td>
			<td>
				<a href="/documentation/input-button.php">accessKey</a>
				<a href="/documentation/input-button.php">disabled</a>
				<a href="/documentation/input-button.php">form</a>
				<a href="/documentation/input-button.php">name</a>
				<a href="/documentation/input-button.php">type</a>
				<a href="/documentation/input-button.php">value</a>
			</td>
		</tr>
		<tr>
			<td>事件屬性</td>
			<td>
				<a href="/documentation/input-button.php">onClick</a>
			</td>
		</tr>
		<tr>
			<td>方法</td>
			<td>
				<a href="/documentation/input-button.php">blur()</a>
				<a href="/documentation/input-button.php">click()</a>
				<a href="/documentation/input-button.php">focus()</a>
			</td>
		</tr>
		<tr>
			<td rowspan="4">input(checkbox)</td>
			<td>物件</td>
			<td>
				<a href="/documentation/input-checkbox.php">checkbox</a>
			</td>
		</tr>
		<tr>
			<td>屬性</td>
			<td>
				<a href="/documentation/input-checkbox.php">accessKey</a>
				<a href="/documentation/input-checkbox.php">checked</a>
				<a href="/documentation/input-checkbox.php">defaultChecked</a>
				<a href="/documentation/input-checkbox.php">disabled</a>
				<a href="/documentation/input-checkbox.php">form</a>
				<a href="/documentation/input-checkbox.php">name</a>
				<a href="/documentation/input-checkbox.php">type</a>
				<a href="/documentation/input-checkbox.php">value</a>
			</td>
		</tr>
		<tr>
			<td>事件屬性</td>
			<td>
				<a href="/documentation/input-checkbox.php">onBlur</a>
				<a href="/documentation/input-checkbox.php">onClick</a>
				<a href="/documentation/input-checkbox.php">onFocus</a>
			</td>
		</tr>
		<tr>
			<td>方法</td>
			<td>
				<a href="/documentation/input-checkbox.php">blur()</a>
				<a href="/documentation/input-checkbox.php">click()</a>
				<a href="/documentation/input-checkbox.php">focus()</a>
			</td>
		</tr>
		<tr>
			<td rowspan="3">input(file)</td>
			<td>屬性</td>
			<td>
				<a href="/documentation/input-file.php">accept</a>
				<a href="/documentation/input-file.php">accessKey</a>
				<a href="/documentation/input-file.php">disabled</a>
				<a href="/documentation/input-file.php">form</a>
				<a href="/documentation/input-file.php">name</a>
				<a href="/documentation/input-file.php">type</a>
				<a href="/documentation/input-file.php">value</a>
			</td>
		</tr>
		<tr>
			<td>事件屬性</td>
			<td>
				<a href="/documentation/input-file.php">onBlur</a>
				<a href="/documentation/input-file.php">onChange</a>
				<a href="/documentation/input-file.php">onFocus</a>
			</td>
		</tr>
		<tr>
			<td>方法</td>
			<td>
				<a href="/documentation/input-file.php">blur()</a>
				<a href="/documentation/input-file.php">focus()</a>
				<a href="/documentation/input-file.php">select()</a>
			</td>
		</tr>
		<tr>
			<td>input(hidden)</td>
			<td>屬性</td>
			<td>
				<a href="/documentation/input-hidden.php">form</a>
				<a href="/documentation/input-hidden.php">name</a>
				<a href="/documentation/input-hidden.php">type</a>
				<a href="/documentation/input-hidden.php">value</a>
			</td>
		</tr>
		<tr>
			<td rowspan="3">input(password)</td>
			<td>屬性</td>
			<td>
				<a href="/documentation/input-password.php">defaultValue</a>
				<a href="/documentation/input-password.php">disabled</a>
				<a href="/documentation/input-password.php">form</a>
				<a href="/documentation/input-password.php">maxLength</a>
				<a href="/documentation/input-password.php">name</a>
				<a href="/documentation/input-password.php">readOnly</a>
				<a href="/documentation/input-password.php">size</a>
				<a href="/documentation/input-password.php">type</a>
				<a href="/documentation/input-password.php">value</a>
			</td>
		</tr>
		<tr>
			<td>事件屬性</td>
			<td>
				<a href="/documentation/input-password.php">onBlur</a>
				<a href="/documentation/input-password.php">onFocus</a>
			</td>
		</tr>
		<tr>
			<td>方法</td>
			<td>
				<a href="/documentation/input-password.php">blur()</a>
				<a href="/documentation/input-password.php">focus()</a>
				<a href="/documentation/input-password.php">select()</a>
			</td>
		</tr>
		<tr>
			<td rowspan="4">input(radio)</td>
			<td>物件</td>
			<td>
				<a href="/documentation/input-radio.php">radio</a>
			</td>
		</tr>
		<tr>
			<td>屬性</td>
			<td>
				<a href="/documentation/input-radio.php">checked</a>
				<a href="/documentation/input-radio.php">defaultChecked</a>
				<a href="/documentation/input-radio.php">form</a>
				<a href="/documentation/input-radio.php">name</a>
				<a href="/documentation/input-radio.php">type</a>
				<a href="/documentation/input-radio.php">value</a>
			</td>
		</tr>
		<tr>
			<td>事件屬性</td>
			<td>
				<a href="/documentation/input-radio.php">onBlur</a>
				<a href="/documentation/input-radio.php">onClick</a>
				<a href="/documentation/input-radio.php">onFocus</a>
			</td>
		</tr>
		<tr>
			<td>方法</td>
			<td>
				<a href="/documentation/input-radio.php">blur()</a>
				<a href="/documentation/input-radio.php">click()</a>
				<a href="/documentation/input-radio.php">focus()</a>
			</td>
		</tr>
		<tr>
			<td rowspan="2">input(reset)</td>
			<td>屬性</td>
			<td>
				<a href="/documentation/input-reset.php">disabled</a>
				<a href="/documentation/input-reset.php">form</a>
				<a href="/documentation/input-reset.php">name</a>
				<a href="/documentation/input-reset.php">type</a>
				<a href="/documentation/input-reset.php">value</a>
			</td>
		</tr>
		<tr>
			<td>事件屬性</td>
			<td>
				<a href="/documentation/input-reset.php">onClick</a>
			</td>
		</tr>
		<tr>
			<td rowspan="4">select</td>
			<td>物件</td>
			<td>
				<a href="/documentation/select.php">select</a>
			</td>
		</tr>
		<tr>
			<td>屬性</td>
			<td>
				<a href="/documentation/select.php">disabled</a>
				<a href="/documentation/select.php">form</a>
				<a href="/documentation/select.php">length</a>
				<a href="/documentation/select.php">multiple</a>
				<a href="/documentation/select.php">name</a>
				<a href="/documentation/select.php">options</a>
				<a href="/documentation/select.php">selectedIndex</a>
				<a href="/documentation/select.php">size</a>
				<a href="/documentation/select.php">type</a>
			</td>
		</tr>
		<tr>
			<td>事件屬性</td>
			<td>
				<a href="/documentation/select.php">onBlur</a>
				<a href="/documentation/select.php">onChange</a>
				<a href="/documentation/select.php">onFocus</a>
			</td>
		</tr>
		<tr>
			<td>方法</td>
			<td>
				<a href="/documentation/select.php">add()</a>
				<a href="/documentation/select.php">remove()</a>
				<a href="/documentation/select.php">blur()</a>
				<a href="/documentation/select.php">focus()</a>
			</td>
		</tr>
		<tr>
			<td rowspan="2">option</td>
			<td>物件</td>
			<td>
				<a href="/documentation/option.php">option</a>
			</td>
		</tr>
		<tr>
			<td>屬性</td>
			<td>
				<a href="/documentation/option.php">defaultSelected</a>
				<a href="/documentation/option.php">form</a>
				<a href="/documentation/option.php">index</a>
				<a href="/documentation/option.php">selected</a>
				<a href="/documentation/option.php">text</a>
				<a href="/documentation/option.php">value</a>
			</td>
		</tr>
		<tr>
			<td rowspan="2">input(submit)</td>
			<td>屬性</td>
			<td>
				<a href="/documentation/input-submit.php">disabled</a>
				<a href="/documentation/input-submit.php">form</a>
				<a href="/documentation/input-submit.php">name</a>
				<a href="/documentation/input-submit.php">type</a>
				<a href="/documentation/input-submit.php">value</a>
			</td>
		</tr>
		<tr>
			<td>事件屬性</td>
			<td>
				<a href="/documentation/input-submit.php">onClick</a>
			</td>
		</tr>
		<tr>
			<td rowspan="3">input(text)</td>
			<td>屬性</td>
			<td>
				<a href="/documentation/input-text.php">accessKey</a>
				<a href="/documentation/input-text.php">defaultValue</a>
				<a href="/documentation/input-text.php">disabled</a>
				<a href="/documentation/input-text.php">form</a>
				<a href="/documentation/input-text.php">maxLength</a>
				<a href="/documentation/input-text.php">name</a>
				<a href="/documentation/input-text.php">readOnly</a>
				<a href="/documentation/input-text.php">size</a>
				<a href="/documentation/input-text.php">type</a>
				<a href="/documentation/input-text.php">value</a>
			</td>
		</tr>
		<tr>
			<td>事件屬性</td>
			<td>
				<a href="/documentation/input-text.php">onBlur</a>
				<a href="/documentation/input-text.php">onChange</a>
				<a href="/documentation/input-text.php">onFocus</a>
				<a href="/documentation/input-text.php">onKeyDown</a>
				<a href="/documentation/input-text.php">onKeyPress</a>
				<a href="/documentation/input-text.php">onKeyUp</a>
				<a href="/documentation/input-text.php">onSelect</a>
			</td>
		</tr>
		<tr>
			<td>方法</td>
			<td>
				<a href="/documentation/input-text.php">blur()</a>
				<a href="/documentation/input-text.php">focus()</a>
				<a href="/documentation/input-text.php">select()</a>
			</td>
		</tr>
		<tr>
			<td rowspan="4">Textarea</td>
			<td>物件</td>
			<td>
				<a href="/documentation/textarea.php">textarea</a>
			</td>
		</tr>
		<tr>
			<td>屬性</td>
			<td>
				<a href="/documentation/textarea.php">accessKey</a>
				<a href="/documentation/textarea.php">cols</a>
				<a href="/documentation/textarea.php">defaultValue</a>
				<a href="/documentation/textarea.php">disabled</a>
				<a href="/documentation/textarea.php">form</a>
				<a href="/documentation/textarea.php">name</a>
				<a href="/documentation/textarea.php">readOnly</a>
				<a href="/documentation/textarea.php">rows</a>
				<a href="/documentation/textarea.php">type</a>
				<a href="/documentation/textarea.php">value</a>
			</td>
		</tr>
		<tr>
			<td>事件屬性</td>
			<td>
				<a href="/documentation/textarea.php">onBlur</a>
				<a href="/documentation/textarea.php">onChange</a>
				<a href="/documentation/textarea.php">onFocus</a>
				<a href="/documentation/textarea.php">onKeyDown</a>
				<a href="/documentation/textarea.php">onKeyPress</a>
				<a href="/documentation/textarea.php">onKeyUp</a>
				<a href="/documentation/textarea.php">onSelect</a>
			</td>
		</tr>
		<tr>
			<td>方法</td>
			<td>
				<a href="/documentation/textarea.php">blur()</a>
				<a href="/documentation/textarea.php">focus()</a>
				<a href="/documentation/textarea.php">select()</a>
			</td>
		</tr>
		<tr>
			<td rowspan="3">Table</td>
			<td>物件</td>
			<td>
				<a href="/documentation/table.php">table</a>
			</td>
		</tr>
		<tr>
			<td>屬性</td>
			<td>
				<a href="/documentation/table.php">caption</a>
				<a href="/documentation/table.php">cellPadding</a>
				<a href="/documentation/table.php">cells</a>
				<a href="/documentation/table.php">cellSpacing</a>
				<a href="/documentation/table.php">frame</a>
				<a href="/documentation/table.php">rows</a>
				<a href="/documentation/table.php">rules</a>
				<a href="/documentation/table.php">summary</a>
				<a href="/documentation/table.php">tBodies</a>
				<a href="/documentation/table.php">tFoot</a>
				<a href="/documentation/table.php">tHead</a>
			</td>
		</tr>
		<tr>
			<td>方法</td>
			<td>
			<a href="/documentation/table.php">createCaption()</a>
				<a href="/documentation/table.php">createTFoot()</a>
				<a href="/documentation/table.php">createTHead()</a>
				<a href="/documentation/table.php">deleteCaption()</a>
				<a href="/documentation/table.php">deleteRow()</a>
				<a href="/documentation/table.php">deleteTFoot()</a>
				<a href="/documentation/table.php">deleteTHead()</a>
				<a href="/documentation/table.php">insertRow()</a>
			</td>
		</tr>
		<tr>
			<td>td / th</td>
			<td>屬性</td>
			<td>
				<a href="/documentation/td-th.php">abbr</a>
				<a href="/documentation/td-th.php">axis</a>
				<a href="/documentation/td-th.php">cellIndex</a>
				<a href="/documentation/td-th.php">ch</a>
				<a href="/documentation/td-th.php">chOff</a>
				<a href="/documentation/td-th.php">colSpan</a>
				<a href="/documentation/td-th.php">headers</a>
				<a href="/documentation/td-th.php">rowSpan</a>
				<a href="/documentation/td-th.php">vAlign</a>
			</td>
		</tr>
		<tr>
			<td rowspan="2">tr</td>
			<td>屬性</td>
			<td>
				<a href="/documentation/tr.php">cells</a>
				<a href="/documentation/tr.php">ch</a>
				<a href="/documentation/tr.php">chOff</a>
				<a href="/documentation/tr.php">rowIndex</a>
				<a href="/documentation/tr.php">sectionRowIndex</a>
				<a href="/documentation/tr.php">vAlign</a>
			</td>
		</tr>
		<tr>
			<td>方法</td>
			<td>
				<a href="/documentation/tr.php">deleteCell()</a>
				<a href="/documentation/tr.php">insertCell()</a>
			</td>
		</tr>
		<tr>
			<td>Anchor</td>
			<td>屬性</td>
			<td>
				<a href="/documentation/anchor.php">charset</a>
				<a href="/documentation/anchor.php">href</a>
				<a href="/documentation/anchor.php">hreflang</a>
				<a href="/documentation/anchor.php">name</a>
				<a href="/documentation/anchor.php">rel</a>
				<a href="/documentation/anchor.php">rev</a>
				<a href="/documentation/anchor.php">target</a>
				<a href="/documentation/anchor.php">type</a>
			</td>
		</tr>
		<tr>
			<td>Area</td>
			<td>屬性</td>
			<td>
				<a href="/documentation/area.php">alt</a>
				<a href="/documentation/area.php">coords</a>
				<a href="/documentation/area.php">hash</a>
				<a href="/documentation/area.php">host</a>
				<a href="/documentation/area.php">hostname</a>
				<a href="/documentation/area.php">href</a>
				<a href="/documentation/area.php">noHref</a>
				<a href="/documentation/area.php">pathname</a>
				<a href="/documentation/area.php">port</a>
				<a href="/documentation/area.php">protocol</a>
				<a href="/documentation/area.php">search</a>
				<a href="/documentation/area.php">shape</a>
				<a href="/documentation/area.php">target</a>
			</td>
		</tr>
		<tr>
			<td>Base</td>
			<td>屬性</td>
			<td>
				<a href="/documentation/base.php">href</a>
				<a href="/documentation/base.php">target</a>
			</td>
		</tr>
		<tr>
			<td rowspan="2">frame/iFrame</td>
			<td>屬性</td>
			<td>
				<a href="/documentation/frame-iFrame.php">align</a>
				<a href="/documentation/frame-iFrame.php">contentDocument</a>
				<a href="/documentation/frame-iFrame.php">contentWindow</a>
				<a href="/documentation/frame-iFrame.php">frameBorder</a>
				<a href="/documentation/frame-iFrame.php">height</a>
				<a href="/documentation/frame-iFrame.php">longDesc</a>
				<a href="/documentation/frame-iFrame.php">marginHeight</a>
				<a href="/documentation/frame-iFrame.php">marginWidth</a>
				<a href="/documentation/frame-iFrame.php">name</a>
				<a href="/documentation/frame-iFrame.php">noResize</a>
				<a href="/documentation/frame-iFrame.php">scrolling</a>
				<a href="/documentation/frame-iFrame.php">src</a>
				<a href="/documentation/frame-iFrame.php">width</a>
			</td>
		</tr>
		<tr>
			<td>事件屬性</td>
			<td>
				<a href="/documentation/frame-iFrame.php">onload</a>
			</td>
		</tr>
		<tr>
			<td rowspan="2">frameset</td>
			<td>屬性</td>
			<td>
				<a href="/documentation/frameset.php">cols</a>
				<a href="/documentation/frameset.php">rows</a>
			</td>
		</tr>
		<tr>
			<td>事件屬性</td>
			<td>
				<a href="/documentation/frameset.php">onload</a>
			</td>
		</tr>
		<tr>
			<td rowspan="2">image</td>
			<td>屬性</td>
			<td>
				<a href="/documentation/image.php">align</a>
				<a href="/documentation/image.php">alt</a>
				<a href="/documentation/image.php">border</a>
				<a href="/documentation/image.php">complete</a>
				<a href="/documentation/image.php">height</a>
				<a href="/documentation/image.php">hspace</a>
				<a href="/documentation/image.php">longDesc</a>
				<a href="/documentation/image.php">lowsrc</a>
				<a href="/documentation/image.php">name</a>
				<a href="/documentation/image.php">src</a>
				<a href="/documentation/image.php">useMap</a>
				<a href="/documentation/image.php">vspace</a>
				<a href="/documentation/image.php">width</a>
			</td>
		</tr>
		<tr>
			<td>事件屬性</td>
			<td>
				<a href="/documentation/image.php">onabort</a>
				<a href="/documentation/image.php">onerror</a>
				<a href="/documentation/image.php">onload</a>
			</td>
		</tr>
		<tr>
			<td>link</td>
			<td>屬性</td>
			<td>
				<a href="/documentation/link.php">charset</a>
				<a href="/documentation/link.php">href</a>
				<a href="/documentation/link.php">hreflang</a>
				<a href="/documentation/link.php">media</a>
				<a href="/documentation/link.php">rel</a>
				<a href="/documentation/link.php">rev</a>
				<a href="/documentation/link.php">type</a>
			</td>
		</tr>
		<tr>
			<td>meta</td>
			<td>屬性</td>
			<td>
				<a href="/documentation/meta.php">content</a>
				<a href="/documentation/meta.php">httpEquiv</a>
				<a href="/documentation/meta.php">name</a>
				<a href="/documentation/meta.php">scheme</a>
			</td>
		</tr>
		<tr>
			<td>object</td>
			<td>屬性</td>
			<td>
				<a href="/documentation/object.php">align</a>
				<a href="/documentation/object.php">archive</a>
				<a href="/documentation/object.php">border</a>
				<a href="/documentation/object.php">code</a>
				<a href="/documentation/object.php">codeBase</a>
				<a href="/documentation/object.php">codeType</a>
				<a href="/documentation/object.php">data</a>
				<a href="/documentation/object.php">declare</a>
				<a href="/documentation/object.php">form</a>
				<a href="/documentation/object.php">height</a>
				<a href="/documentation/object.php">hspace</a>
				<a href="/documentation/object.php">name</a>
				<a href="/documentation/object.php">standby</a>
				<a href="/documentation/object.php">type</a>
				<a href="/documentation/object.php">useMap</a>
				<a href="/documentation/object.php">vspace</a>
				<a href="/documentation/object.php">width</a>
			</td>
		</tr>
		<tr>
			<td rowspan="3">style</td>
			<td>物件</td>
			<td>
				<a href="/documentation/style.php">style</a>
			</td>
		</tr>
		<tr>
			<td>屬性</td>
			<td>
				<a href="/documentation/style.php">cssText</a>
			</td>
		</tr>
		<tr>
			<td>CSS屬性</td>
			<td>
				<a href="/documentation/style.php">background</a>
				<a href="/documentation/style.php">backgroundAttachment</a>
				<a href="/documentation/style.php">backgroundColor</a>
				<a href="/documentation/style.php">backgroundImage</a>
				<a href="/documentation/style.php">backgroundPosition</a>
				<a href="/documentation/style.php">backgroundRepeat</a>
				<a href="/documentation/style.php">border</a>
				<a href="/documentation/style.php">borderBottom</a>
				<a href="/documentation/style.php">borderBottomColor</a>
				<a href="/documentation/style.php">borderBottomStyle</a>
				<a href="/documentation/style.php">borderBottomWidth</a>
				<a href="/documentation/style.php">borderCollapse</a>
				<a href="/documentation/style.php">borderColor</a>
				<a href="/documentation/style.php">borderLeft</a>
				<a href="/documentation/style.php">borderLeftColor</a>
				<a href="/documentation/style.php">borderLeftStyle</a>
				<a href="/documentation/style.php">borderLeftWidth</a>
				<a href="/documentation/style.php">borderRight</a>
				<a href="/documentation/style.php">borderRightColor</a>
				<a href="/documentation/style.php">borderRightStyle</a>
				<a href="/documentation/style.php">borderRightWidth</a>
				<a href="/documentation/style.php">borderSpacing</a>
				<a href="/documentation/style.php">borderStyle</a>
				<a href="/documentation/style.php">borderTop</a>
				<a href="/documentation/style.php">borderTopColor</a>
				<a href="/documentation/style.php">borderTopStyle</a>
				<a href="/documentation/style.php">borderTopWidth</a>
				<a href="/documentation/style.php">borderWidth</a>
				<a href="/documentation/style.php">bottom</a>
				<a href="/documentation/style.php">clear</a>
				<a href="/documentation/style.php">clip</a>
				<a href="/documentation/style.php">color</a>
				<a href="/documentation/style.php">cssFloat</a>
				<a href="/documentation/style.php">cursor</a>
				<a href="/documentation/style.php">direction</a>
				<a href="/documentation/style.php">display</a>
				<a href="/documentation/style.php">emptyCells</a>
				<a href="/documentation/style.php">filter</a>
				<a href="/documentation/style.php">font</a>
				<a href="/documentation/style.php">fontFamily</a>
				<a href="/documentation/style.php">fontSize</a>
				<a href="/documentation/style.php">fontSizeAdjust</a>
				<a href="/documentation/style.php">fontVariant</a>
				<a href="/documentation/style.php">fontWeight</a>
				<a href="/documentation/style.php">height</a>
				<a href="/documentation/style.php">left</a>
				<a href="/documentation/style.php">letterSpacing</a>
				<a href="/documentation/style.php">lineHeight</a>
				<a href="/documentation/style.php">listStyle</a>
				<a href="/documentation/style.php">listStyleImage</a>
				<a href="/documentation/style.php">listStylePosition</a>
				<a href="/documentation/style.php">listStyleType</a>
				<a href="/documentation/style.php">margin</a>
				<a href="/documentation/style.php">marginBottom</a>
				<a href="/documentation/style.php">marginLeft</a>
				<a href="/documentation/style.php">marginRight</a>
				<a href="/documentation/style.php">marginTop</a>
				<a href="/documentation/style.php">orphans</a>
				<a href="/documentation/style.php">outline</a>
				<a href="/documentation/style.php">outlineColor</a>
				<a href="/documentation/style.php">outlineStyle</a>
				<a href="/documentation/style.php">outlineWidth</a>
				<a href="/documentation/style.php">overflow</a>
				<a href="/documentation/style.php">padding</a>
				<a href="/documentation/style.php">paddingBottom</a>
				<a href="/documentation/style.php">paddingLeft</a>
				<a href="/documentation/style.php">paddingRight</a>
				<a href="/documentation/style.php">paddingTop</a>
				<a href="/documentation/style.php">pageBreakAfter</a>
				<a href="/documentation/style.php">pageBreakBefore</a>
				<a href="/documentation/style.php">position</a>
				<a href="/documentation/style.php">quotes</a>
				<a href="/documentation/style.php">right</a>
				<a href="/documentation/style.php">styleFloat</a>
				<a href="/documentation/style.php">tableLayout</a>
				<a href="/documentation/style.php">textAlign</a>
				<a href="/documentation/style.php">textDecoration</a>
				<a href="/documentation/style.php">textDecorationBlink</a>
				<a href="/documentation/style.php">textDecorationLineThrough</a>
				<a href="/documentation/style.php">textDecorationNone</a>
				<a href="/documentation/style.php">textDecorationOverline</a>
				<a href="/documentation/style.php">textDecorationUnderline</a>
				<a href="/documentation/style.php">textIndent</a>
				<a href="/documentation/style.php">textShadow</a>
				<a href="/documentation/style.php">textTransform</a>
				<a href="/documentation/style.php">top</a>
				<a href="/documentation/style.php">unicodeBidi</a>
				<a href="/documentation/style.php">verticalAlign</a>
				<a href="/documentation/style.php">visibility</a>
				<a href="/documentation/style.php">whiteSpace</a>
				<a href="/documentation/style.php">width</a>
				<a href="/documentation/style.php">widows</a>
				<a href="/documentation/style.php">wordSpacing</a>
				<a href="/documentation/style.php">zIndex</a>
			</td>
		</tr>
		<tr>
			<td rowspan="3">styleSheets</td>
			<td>物件</td>
			<td>
				<a href="/documentation/styleSheets.php">styleSheets</a>
			</td>
		</tr>
		<tr>
			<td>屬性</td>
			<td>
				<a href="/documentation/styleSheets.php">cssRules</a>
				<a href="/documentation/styleSheets.php">cssText</a>
				<a href="/documentation/styleSheets.php">disabled</a>
				<a href="/documentation/styleSheets.php">href</a>
				<a href="/documentation/styleSheets.php">length</a>
				<a href="/documentation/styleSheets.php">media</a>
				<a href="/documentation/styleSheets.php">ownerNode</a>
				<a href="/documentation/styleSheets.php">ownerRule</a>
				<a href="/documentation/styleSheets.php">owningElement</a>
				<a href="/documentation/styleSheets.php">parentStyleSheet</a>
				<a href="/documentation/styleSheets.php">rules</a>
				<a href="/documentation/styleSheets.php">title</a>
				<a href="/documentation/styleSheets.php">type</a>
			</td>
		</tr>
		<tr>
			<td>方法</td>
			<td>
				<a href="/documentation/styleSheets.php">addRule()</a>
				<a href="/documentation/styleSheets.php">removeRule()</a>
				<a href="/documentation/styleSheets.php">deleteRule()</a>
				<a href="/documentation/styleSheets.php">insertRule()</a>
			</td>
		</tr>
		<tr>
			<td rowspan="2">cssRules</td>
			<td>物件</td>
			<td>
				<a href="/documentation/cssRules.php">cssRules</a>
				<a href="/documentation/cssRules.php">rules</a>
			</td>
		</tr>
		<tr>
			<td>屬性</td>
			<td>
				<a href="/documentation/cssRules.php">cssText</a>
				<a href="/documentation/cssRules.php">length</a>
				<a href="/documentation/cssRules.php">parentStyleSheet</a>
				<a href="/documentation/cssRules.php">selectorText</a>
				<a href="/documentation/cssRules.php">style</a>
			</td>
		</tr>
		<tr>
			<td rowspan="3">Video</td>
			<td>屬性</td>
			<td>
				<a href="/documentation/video.php">error</a>
				<a href="/documentation/video.php">src</a>
				<a href="/documentation/video.php">currentSrc</a>
				<a href="/documentation/video.php">networkState</a>
				<a href="/documentation/video.php">preload</a>
				<a href="/documentation/video.php">buffered</a>
				<a href="/documentation/video.php">readyState</a>
				<a href="/documentation/video.php">seeking</a>
				<a href="/documentation/video.php">controls</a>
				<a href="/documentation/video.php">volume</a>
				<a href="/documentation/video.php">muted</a>
				<a href="/documentation/video.php">tracks</a>
				<a href="/documentation/video.php">currentTime</a>
				<a href="/documentation/video.php">startTime</a>
				<a href="/documentation/video.php">duration</a>
				<a href="/documentation/video.php">paused</a>
				<a href="/documentation/video.php">defaultPlaybackRate</a>
				<a href="/documentation/video.php">playbackRate</a>
				<a href="/documentation/video.php">played</a>
				<a href="/documentation/video.php">seedable</a>
				<a href="/documentation/video.php">ended</a>
				<a href="/documentation/video.php">autoplay</a>
				<a href="/documentation/video.php">loop</a>
				<a href="/documentation/video.php">width</a>
				<a href="/documentation/video.php">height</a>
				<a href="/documentation/video.php">videoWidth</a>
				<a href="/documentation/video.php">videoHeight</a>
				<a href="/documentation/video.php">poster</a>
			</td>
		</tr>
		<tr>
			<td>事件屬性</td>
			<td>
				<a href="/documentation/video.php">loadstart</a>
				<a href="/documentation/video.php">progress</a>
				<a href="/documentation/video.php">suspend</a>
				<a href="/documentation/video.php">abort</a>
				<a href="/documentation/video.php">error</a>
				<a href="/documentation/video.php">emptied</a>
				<a href="/documentation/video.php">stalled</a>
				<a href="/documentation/video.php">play</a>
				<a href="/documentation/video.php">pause</a>
				<a href="/documentation/video.php">loadedmetadata</a>
				<a href="/documentation/video.php">loadeddata</a>
				<a href="/documentation/video.php">waiting</a>
				<a href="/documentation/video.php">playing</a>
				<a href="/documentation/video.php">canplay</a>
				<a href="/documentation/video.php">canplaythrough</a>
				<a href="/documentation/video.php">seeking</a>
				<a href="/documentation/video.php">seeked</a>
				<a href="/documentation/video.php">timeupdate</a>
				<a href="/documentation/video.php">ended</a>
				<a href="/documentation/video.php">ratechange</a>
			</td>
		</tr>
		<tr>
			<td>方法</td>
			<td>
				<a href="/documentation/video.php">load()</a>
				<a href="/documentation/video.php">canPlayType()</a>
				<a href="/documentation/video.php">play()</a>
				<a href="/documentation/video.php">pause()</a>
				<a href="/documentation/video.php">addTrack()</a>
			</td>
		</tr>
		<tr>
			<td rowspan="4">Ajax</td>
			<td>物件</td>
			<td>
				<a href="/documentation/ajax.php">XMLHTTP</a>
				<a href="/documentation/ajax.php">XMLHttpRequest</a>
			</td>
		</tr>
		<tr>
			<td>屬性</td>
			<td>
				<a href="/documentation/ajax.php">contentType</a>
				<a href="/documentation/ajax.php">readyState</a>
				<a href="/documentation/ajax.php">responseText</a>
				<a href="/documentation/ajax.php">responseXML</a>
				<a href="/documentation/ajax.php">status</a>
				<a href="/documentation/ajax.php">statusText</a>
				<a href="/documentation/ajax.php">timeout</a>
			</td>
		</tr>
		<tr>
			<td>事件屬性</td>
			<td>
				<a href="/documentation/ajax.php">onreadystatechange</a>
				<a href="/documentation/ajax.php">onerror</a>
				<a href="/documentation/ajax.php">onload</a>
				<a href="/documentation/ajax.php">onprogress</a>
				<a href="/documentation/ajax.php">ontimeout</a>
			</td>
		</tr>
		<tr>
			<td>方法</td>
			<td>
				<a href="/documentation/ajax.php">abort()</a>
				<a href="/documentation/ajax.php">getResponseHeader()</a>
				<a href="/documentation/ajax.php">getAllResponseHeaders()</a>
				<a href="/documentation/ajax.php">open()</a>
				<a href="/documentation/ajax.php">send()</a>
				<a href="/documentation/ajax.php">setRequestHeader()</a>
			</td>
		</tr>
	</table>
</main>
</body>
</html>