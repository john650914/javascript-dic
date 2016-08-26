<?php header('Content-type: text/html; charset=utf-8'); ?>
<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta property="og:title" content="Javascript字典" />
<meta property="og:description" content="收錄了完整Javascript的語法及API說明文件，前端工程師的好幫手" />
<meta property="og:type" content="website" />
<meta property="og:url" content="http://javascript.john650914.com" />
<meta property="og:image" content="http://javascript.john650914.com/images/fb.jpg" />
<meta name="keywords" content="javascript,字典,dic,語法,教學,DOM,API,物件,範例,example,前端工程,前端工程師" />
<meta name="description" content="收錄了完整Javascript的語法、API說明文件及範例，是前端工程師的好幫手" />
<title>Javascript字典．API文件．教學</title>
<link type="text/css" rel="stylesheet" href="css/default.css"/>
<?php
	include("includes/analyticstracking.php");
?>
<script src="/js/jquery-1.11.3.min.js"></script>
<script src="/js/default.js"></script>
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<![endif]-->
</head>
<body>
<div class="header">
	<div class="logo"><a href="http://javascript.john650914.com"><span>&#128218;</span> Javascript字典</a></div>
</div>
<div class="all-menus">
	<div class="top-div">
		<nav class="top-menu">
			<ul>
				<li><a href="/syntax.php">語法及API總覽</a></li>
				<li><a href="/js-library.php">JS函式庫</a></li>
				<li><a href="/author.php" style="color:red;">關於作者</a></li>
				<li><a href="http://www.john650914.com">作品網站</a></li>
			</ul>
		</nav>
	</div>
	<div class="left-side">
		<nav class="side-menu">
			<dl>
				<dt>Basic Syntax</dt>
				<dd><a href="/documentation/Operators.php">Operators</a></dd>
				<dd><a href="/documentation/Statements.php">Statements</a></dd>
				<dd><a href="/documentation/Conditionals.php">Conditionals</a></dd>
				<dd><a href="/documentation/Looping.php">Looping</a></dd>
				<dd><a href="/documentation/Global-Functions.php">Global Functions</a></dd>
				<dd><a href="/documentation/Others.php">Others</a></dd>
				<dt>JS Objects</dt>
				<dd><a href="/documentation/Array.php">Array</a></dd>
				<dd><a href="/documentation/Boolean.php">Boolean</a></dd>
				<dd><a href="/documentation/Date.php">Date</a></dd>
				<dd><a href="/documentation/Function.php">Function</a></dd>
				<dd><a href="/documentation/Error.php">Error</a></dd>
				<dd><a href="/documentation/Math.php">Math</a></dd>
				<dd><a href="/documentation/Number.php">Number</a></dd>
				<dd><a href="/documentation/object-object.php">Object</a></dd>
				<dd><a href="/documentation/String.php">String</a></dd>
				<dd><a href="/documentation/RegExp.php">RegExp</a></dd>
				<dt>BOM Objects</dt>
				<dd><a href="/documentation/window.php">window</a></dd>
				<dd><a href="/documentation/navigator.php">navigator</a></dd>
				<dd><a href="/documentation/screen.php">screen</a></dd>
				<dd><a href="/documentation/history.php">history</a></dd>
				<dd><a href="/documentation/location.php">location</a></dd>
				<dt>DOM Objects</dt>
				<dd><a href="/documentation/document.php">document</a></dd>
				<dd><a href="/documentation/Events.php">Events</a></dd>
				<dd><a href="/documentation/DOM-Elements.php">DOM Elements</a></dd>
				<dd><a href="/documentation/body.php">Body</a></dd>
				<dd><a href="/documentation/form.php">Form</a></dd>
				<dd><a href="/documentation/button.php">Button</a></dd>
				<dd><a href="/documentation/input-button.php">Input button</a></dd>
				<dd><a href="/documentation/input-checkbox.php">Input checkbox</a></dd>
				<dd><a href="/documentation/input-file.php">Input file</a></dd>
				<dd><a href="/documentation/input-hidden.php">Input hidden</a></dd>
				<dd><a href="/documentation/input-password.php">Input password</a></dd>
				<dd><a href="/documentation/input-radio.php">Input radio</a></dd>
				<dd><a href="/documentation/input-reset.php">Input reset</a></dd>
				<dd><a href="/documentation/select.php">Select</a></dd>
				<dd><a href="/documentation/option.php">Option</a></dd>
				<dd><a href="/documentation/input-submit.php">Input submit</a></dd>
				<dd><a href="/documentation/input-text.php">Input text</a></dd>
				<dd><a href="/documentation/textarea.php">Textarea</a></dd>
				<dd><a href="/documentation/table.php">Table</a></dd>
				<dd><a href="/documentation/td-th.php">td/th</a></dd>
				<dd><a href="/documentation/tr.php">tr</a></dd>
				<dd><a href="/documentation/anchor.php">Anchor</a></dd>
				<dd><a href="/documentation/area.php">Area</a></dd>
				<dd><a href="/documentation/base.php">Base</a></dd>
				<dd><a href="/documentation/frame-iFrame.php">Frame/iFrame</a></dd>
				<dd><a href="/documentation/frameset.php">Frameset</a></dd>
				<dd><a href="/documentation/image.php">Image</a></dd>
				<dd><a href="/documentation/link.php">Link</a></dd>
				<dd><a href="/documentation/meta.php">Meta</a></dd>
				<dd><a href="/documentation/object.php">Object</a></dd>
				<dd><a href="/documentation/style.php">Style</a></dd>
				<dd><a href="/documentation/styleSheets.php">styleSheets</a></dd>
				<dd><a href="/documentation/cssRules.php">cssRules</a></dd>
				<dd><a href="/documentation/video.php">Video</a></dd>
				<dd><a href="/documentation/ajax.php">Ajax</a></dd>
			</dl>
		</nav>
	</div>
</div>
<div class="menu_toggler"></div>
<main class="main">
	<h1 class="index-h1" style="text-indent:-13px;">「Javascript字典」是一本好書嗎？</h1>
	<p>(還有什麼好寫的？)基於網頁瀏覽器的撰寫方向，不包涵node.js的非瀏覽器應用 | 來源：網路上的資料、書本、自己實驗的結果 | 目的：自己學習的記錄 | 期望它變成：大家學習、找資料的地方 | 現況：需要改善專業度、修正錯誤及補齊資料</p>
	<p style="height:0px; overflow:hidden;">Javascript是一種物件導向的語言，語法裡的一切機乎都是以物件的方式操作，有人預言Javascript會是未來唯一的語言。</p>
	<style>
		.test_search{position:relative;}
		.test_search img{position:absolute; left:0; top:0; width:100%;}
	</style>
	<p class="test_search">它是以ECMA做標準，目前已有更新的版本，有一種永遠都學不完的感覺，誰叫他有可能是一統天下的程式語言。(這一段和上一段是在2016/020/24加上的)<img src="images/test.gif" /></p>
</main>
</body>
</html>