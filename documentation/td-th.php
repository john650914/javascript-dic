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
<meta name="keywords" content="Javascript,td,th,物件,object,字典,方法,屬性,使用說明,文件,範例" />
<meta name="description" content="提供完整的td/th物件及其方法、屬性的說明文件與範例" />
<title>td/th物件 - Javascript字典</title>
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
<h1>Javascript - td/th物件</h1>
<table class="doc-table">
	<tr>
		<th>名稱</th>
		<th>類形</th>
		<th>說明</th>
	</tr>
	<tr>
		<td>abbr</td>
		<td>屬性</td>
		<td>Sets or returns an abbreviated version of the content in a data cell</td>
	</tr>
	<tr>
		<td>axis</td>
		<td>屬性</td>
		<td>Sets or returns a comma-separated list of related data cells</td>
	</tr>
	<tr>
		<td>cellIndex</td>
		<td>屬性</td>
		<td>Returns the position of a cell in the cells collection of a table row</td>
	</tr>
	<tr>
		<td>ch</td>
		<td>屬性</td>
		<td>Sets or returns an alignment character for a data cell</td>
	</tr>
	<tr>
		<td>chOff</td>
		<td>屬性</td>
		<td>Sets or returns the horizontal offset of the ch property</td>
	</tr>
	<tr>
		<td>colSpan</td>
		<td>屬性</td>
		<td>Sets or returns the number of columns a cell should span</td>
	</tr>
	<tr>
		<td>headers</td>
		<td>屬性</td>
		<td>Sets or returns a list of header cell ids for the current data cell</td>
	</tr>
	<tr>
		<td>rowSpan</td>
		<td>屬性</td>
		<td>Sets or returns the number of rows a cell should span</td>
	</tr>
	<tr>
		<td>vAlign</td>
		<td>屬性</td>
		<td>Sets or returns the vertical alignment of the content within a cell</td>
	</tr>
</table>
</main>
</body>
</html>