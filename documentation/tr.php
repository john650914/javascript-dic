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
<meta name="keywords" content="Javascript,tr,物件,object,字典,方法,屬性,使用說明,文件,範例" />
<meta name="description" content="提供完整的tr物件及其方法、屬性的說明文件與範例" />
<title>tr物件 - Javascript字典</title>
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
<h1>Javascript - tr物件</h1>
	<?php include("../includes/adsense.php"); ?>
<table class="doc-table">
	<tr>
		<th>名稱</th>
		<th>類形</th>
		<th>說明</th>
	</tr>
	<tr>
		<td>cells</td>
		<td>屬性</td>
		<td>Returns a collection of all &lt;td&gt; or &lt;th&gt; elements in a table row</td>
	</tr>
	<tr>
		<td>ch</td>
		<td>屬性</td>
		<td>Sets or returns an alignment character for cells in a table row</td>
	</tr>
	<tr>
		<td>chOff</td>
		<td>屬性</td>
		<td>Sets or returns the horizontal offset of the ch property</td>
	</tr>
	<tr>
		<td>rowIndex</td>
		<td>屬性</td>
		<td>Returns the position of a row in the rows collection of a table</td>
	</tr>
	<tr>
		<td>sectionRowIndex</td>
		<td>屬性</td>
		<td>Returns the position of a row in the rows collection of a tbody, thead, or tfoot</td>
	</tr>
	<tr>
		<td>vAlign</td>
		<td>屬性</td>
		<td>Sets or returns the vertical alignment of the content within a table row</td>
	</tr>
	<tr>
		<td>deleteCell()</td>
		<td>方法</td>
		<td>Deletes a cell from the current table row</td>
	</tr>
	<tr>
		<td>insertCell()</td>
		<td>方法</td>
		<td>Inserts a cell into the current table row</td>
	</tr>
</table>
</main>
</body>
</html>