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
<meta name="keywords" content="Javascript,table,物件,object,字典,方法,屬性,使用說明,文件,範例" />
<meta name="description" content="提供完整的table物件及其方法、屬性的說明文件與範例" />
<title>table物件 - Javascript字典</title>
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
<h1>Javascript - table物件</h1>
	<?php include("../includes/adsense.php"); ?>
<table class="doc-table">
	<tr>
		<th>名稱</th>
		<th>類形</th>
		<th>說明</th>
	</tr>
	<tr>
		<td>table</td>
		<td>物件</td>
		<td>DOM table物件即代表html中的&lt;table&gt;表格，它擁有一系列實用的屬性及方法，讓我們可以輕易的調整表格的內容，例如動態新增/刪除&lt;tr&gt;或&lt;td&gt;等等。<br>
			table物件有一些舊的table屬性被w3c列為不建議使用的，僅列於下方在此就不做說明：<br>
			align、background、bgColor、border、height、width<br>
		</td>
	</tr>
	<tr>
		<td>caption</td>
		<td>屬性</td>
		<td>指向&lt;caption&gt;元素(如果存在)</td>
	</tr>
	<tr>
		<td>cellPadding</td>
		<td>屬性</td>
		<td>Gets or sets the cellPadding attribute of the table. Value should be numeric string (ie: "5") or percentage (ie: "10%").</td>
	</tr>
	<tr>
		<td>cellSpacing</td>
		<td>屬性</td>
		<td>Gets or sets the cellSpacing attribute of the table. Value should be numeric string (ie: "5") or percentage (ie: "10%").</td>
	</tr>
	<tr>
		<td>cells[]</td>
		<td>屬性</td>
		<td>指向一個表格中所有&lt;td&gt;元素的陣列，但實測後發現，有的瀏覽器(尤其是非IE瀏覽器)不能直接訪問表格的&lt;td&gt;元素，一定要指定rows[]屬性才行，這一點真的滿怪的…<br>
			範例1，傳回儲存格的數量：
<pre>
alert(document.getElementById("myTable").rows[0].cells.length);
</pre>
			範例2，修改儲存格的內容：
<pre>
var myTable = document.getElementById('myTable');
myTable.rows[3].cell[4].innerHTML = 'modified';
</pre>
		</td>
	</tr>
	<tr>
		<td>frame</td>
		<td>屬性</td>
		<td>Specifies which sides of a table outer border to show. Details check: http://www.javascriptkit.com/domref/tableproperties.shtml</td>
	</tr>
	<tr>
		<td>rows[]</td>
		<td>屬性</td>
		<td>指向&lt;table&gt;元素中&lt;tr&gt;的元素集合，下範例(1)傳回myTable中rows的數量。<br>
			範例1：
<pre>
alert(document.getElementById("myTable").rows.length);
</pre>
			範例2，為偶數的&lt;tr&gt;標籤加上class名稱：
<pre>
window.onload = function(){
	var oTable = document.getElementById("oTable");
	for(var i=0;i&lt;oTable.rows.length;i++){
		if(i%2==0){
			oTable.rows[i].className = "altrow";
		}
	}
}
</pre>
		</td>
	</tr>
	<tr>
		<td>rules</td>
		<td>屬性</td>
		<td>Specifies which sides of cells' interior border to show. Details check: http://www.javascriptkit.com/domref/tableproperties.shtml</td>
	</tr>
	<tr>
		<td>summary</td>
		<td>屬性</td>
		<td>Gets or sets the "summary" attribute of the table, a description of the table that can be accessed via scripting.</td>
	</tr>
	<tr>
		<td>tBodies</td>
		<td>屬性</td>
		<td>指向&lt;tbody&gt;元素的集合</td>
	</tr>
	<tr>
		<td>tFoot</td>
		<td>屬性</td>
		<td>指向&lt;tfoot&gt;元素(如果存在)</td>
	</tr>
	<tr>
		<td>tHead</td>
		<td>屬性</td>
		<td>指向&lt;thead&gt;元素(如果存在)</td>
	</tr>
	<tr>
		<td>createCaption()</td>
		<td>方法</td>
		<td>建立&lt;caption&gt;元素並將其放入表格中</td>
	</tr>
	<tr>
		<td>createTFoot()</td>
		<td>方法</td>
		<td>Creates an empty table tfoot (until you populate it with rows via tfoot.insertRow()), or if a tfoot already exists for this table, references that tfoot.<br>
			Example(s):
<pre>
var mytable=document.getElementById("atable")
var newtfoot=mytable.createTFoot() //Create new tfoot
var newtfootrow=newtfoot.insertRow(0) //Define a new row for the tfoot
var newtfootcell=newtfootrow.insertCell(0) //Define a new cell for the tfoot's row
newtfootcell.innerHTML="My tFoot text here!" //Add some content to the tfoot's cell
</pre>
		</td>
	</tr>
	<tr>
		<td>createTHead()</td>
		<td>方法</td>
		<td>Creates an empty table thead (until you populate it with rows via thead.insertRow()), or if a thead already exists for this table, references that thead.
		</td>
	</tr>
	<tr>
		<td>deleteCaption()</td>
		<td>方法</td>
		<td>刪除&lt;caption&gt;元素</td>
	</tr>
	<tr>
		<td>deleteCell(index)</td>
		<td>方法</td>
		<td>使用索引值刪除指定位置的儲存格。<br>
			範例1：
<pre>
var myTable = document.getElementById('myTable');
myTable.rows[2].deleteCell(1);
</pre>
			如果我們要刪除某一行，我們可以用deleteRow()方法，但如果要刪除某一列，在DOM中是沒有直接可以使用的方法的，因此我們必需利用deleteCell()，自己手動編寫deleteColumn()方法。<br>
			此deleteColumn()方法接受兩個參數，第一個參數為表格物件，另一個參數為希望刪除的列號。編寫方法十分簡單，即利用deleteCell()方法，每一行都刪除相應的儲存格即可，語法及範例如下，此範例將Birthday列全部刪除：
<pre>
&lt;table id="member"&gt;
	&lt;tr&gt;
		&lt;th scope="col"&gt;Name&lt;/th&gt;
		&lt;th scope="col"&gt;Class&lt;/th&gt;
		&lt;th scope="col"&gt;Birthday&lt;/th&gt;
		&lt;th scope="col"&gt;Constellation&lt;/th&gt;
	&lt;/tr&gt;
	&lt;tr&gt;
		&lt;td&gt;isaac&lt;/td&gt;
		&lt;td&gt;W13&lt;/td&gt;
		&lt;td&gt;Jun 24th&lt;/td&gt;
		&lt;td&gt;Cancer&lt;/td&gt;
	&lt;/tr&gt;
	&lt;tr&gt;
		&lt;td&gt;girlwing&lt;/td&gt;
		&lt;td&gt;W210&lt;/td&gt;
		&lt;td&gt;Sep 16th&lt;/td&gt;
		&lt;td&gt;Virgo&lt;/td&gt;
	&lt;/tr&gt;
&lt;/table&gt;
&lt;script&gt;
function deleteColumn(tableName,iNum){
	for(var i=0;i&lt;tableName.rows.length;i++){tableName.rows[i].deleteCell(iNum);}
}
var myTable = document.getElementById("member");
deleteColumn(myTable,2);
&lt;/script&gt;
</pre>
		</td>
	</tr>
	<tr>
		<td>deleteRow(index)</td>
		<td>方法</td>
		<td>使用索引值刪除表格內指定位置的行。<br>
			範例1：
<pre>
var myTable = document.getElementById('myTable');
myTable.deleteRow(2);
</pre>
			範例2，動態刪除指定的行：
<pre>
&lt;table&gt;
	&lt;tr&gt;
		&lt;td&gt;td01&lt;/td&gt;
		&lt;td&gt;&lt;a href="javascript:;"&gt;delete&lt;/a&gt;&lt;/td&gt;
	&lt;/tr&gt;
	&lt;tr&gt;
		&lt;td&gt;td02&lt;/td&gt;
		&lt;td&gt;&lt;a href="javascript:;"&gt;delete&lt;/a&gt;&lt;/td&gt;
	&lt;/tr&gt;
	&lt;tr&gt;
		&lt;td&gt;td03&lt;/td&gt;
		&lt;td&gt;&lt;a href="javascript:;"&gt;delete&lt;/a&gt;&lt;/td&gt;
	&lt;/tr&gt;
&lt;/table&gt;

&lt;script&gt;
	var myTable = document.getElementsByTagName('table')[0];
	var del = myTable.getElementsByTagName('a');
	for(var i=0; i&lt;=myTable.rows.length; i++){
		del[i].onclick = function(){
			var currentTRIndex = this.parentNode.parentNode.rowIndex;
			myTable.deleteRow(currentTRIndex);
		}
	}
&lt;/script&gt;
</pre>
		</td>
	</tr>
	<tr>
		<td>deleteTFoot()</td>
		<td>方法</td>
		<td>Deletes the tfoot of the table.</td>
	</tr>
	<tr>
		<td>deleteTHead()</td>
		<td>方法</td>
		<td>Deletes the thead of the table.</td>
	</tr>
	<tr>
		<td>insertCell(index)</td>
		<td>方法</td>
		<td>使用索引值在cells集合的指定位置上插入一個空的儲存格，如果將index設為-1，則新的儲存格會置於該行的結尾。<br>
			下範例會在新加入的行中插入兩個儲存格：
<pre>
&lt;table&gt;
	&lt;tr&gt;
		&lt;th&gt;th&lt;/th&gt;
		&lt;th&gt;th&lt;/th&gt;
	&lt;/tr&gt;
	&lt;tr&gt;
		&lt;td&gt;old&lt;/td&gt;
		&lt;td&gt;old&lt;/td&gt;
	&lt;/tr&gt;
	&lt;tr&gt;
		&lt;td&gt;old&lt;/td&gt;
		&lt;td&gt;old&lt;/td&gt;
	&lt;/tr&gt;
&lt;/table&gt;

&lt;script&gt;
	var myTable = document.getElementsByTagName('table')[0];
	var newTR = myTable.insertRow(2);
	var td_text = ['new01','new02'];
	for(var i=0;i&lt;myTable.rows[0].cells.length;i++){
		var newTD = newTR.insertCell(i);
		newTD.appendChild(document.createTextNode(td_text[i]));
	}
&lt;/script&gt;
</pre>
		</td>
	</tr>
	<tr>
		<td>insertRow(index)</td>
		<td>方法</td>
		<td>
			語法：tableObject.insertRow(index);<br><br>
			insertRow()方法會在指定的表格中建立一個空的TableRow物件(註1)，並返回一個代表這個新插入列的reference(&lt;tr&gt; element)。<br>
			語法中的index值是新列在表格rows[]集合中的位置，如設定為1，則新的列會被插在2的位置，若該參數設定為-1、等於列的總數(rows.length)，或是省略該值，這個新列將被附加到表格的末端(註2)。該值大於列的總數或該值小於-1，insertRow()會傳回IndexSizeError的錯誤。<br>
			新的列在被插入表格後我們可以用tr.insertCell()在該列置入新的cell。另外，如果我們要刪除某列可以使用deleteRow()方法。<br>
			如果表格中有多個TBODY元素，新插入的列會位於列後一個TBODY。也可以在特定TBODY上加上ID，將新列加在其中。如果表格是空的，則新列將被插入到一个新的TBODY中。(這個TBODY的部份沒有測過，因為很少在用TBODY所以懶的測)<br><br>
			範例1：改變下例中的indexing值即可看到新列插入的位置。
<pre>
&lt;table id="my_table" border="1"&gt;
	&lt;tr&gt;
		&lt;td&gt;cell A&lt;/td&gt;
		&lt;td&gt;cell B&lt;/td&gt;
	&lt;/tr&gt;
&lt;/table&gt;
&lt;script&gt;
	var my_table = document.getElementById("my_table");
	var counter = 1;
	function displayResult(){
		var indexing = -1; //在表格的結尾插入
		//var indexing = my_table.rows.length; //在表格的結尾插入
		//var indexing = 0; //在表格的最前插入
		//var indexing = 1; //在第一個列之後插入
		//var indexing = -2; //參數錯誤
		//var indexing = 2; //參數錯誤
		var row = my_table.insertRow(indexing);
		var cell1 = row.insertCell(0);
		var cell2 = row.insertCell(1);
		cell1.innerHTML = "New"+counter++;
		cell2.innerHTML = "New"+counter++;
	}
&lt;/script&gt;
</pre>
		範例2：使用迴圈加入多個列
<pre>
&lt;table id="table1" border="1"&gt;
	&lt;tr&gt;
		&lt;td&gt;原本的第1列&lt;/td&gt;
	&lt;/tr&gt;
&lt;/table&gt;
&lt;script&gt;
	var table1=document.getElementById("table1");
	for (var i=0; i&lt;3; i++){ //在表格結尾加入3個新的列
		var newrow=table1.insertRow(-1);
		var newcell=newrow.insertCell(0); //在列中加入新的cell
		newcell.appendChild(document.createTextNode('這是第'+table1.rows.length+'列'));
	}
&lt;/script&gt;
</pre>
			註1：查資料的時候看到TableRow Object這個東東…這到底是什麼…是一個真的可以使用的object還是只是Javascript的某種東西？？？是tr物件？還是row[]？還是只是一個虛幻的東西？<br><br>
			註2：據說省略index時，IE會在最後的位置插入新列，而其它瀏覽器則插在最前，但我測試的結果好像不是這樣，有可能是不同的瀏覽器版本有不同的結果，這樣的話還是乖乖的設定參數比較保險
		</td>
	</tr>
</table>
</main>
</body>
</html>