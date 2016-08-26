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
<meta name="keywords" content="Javascript,RegExp,規則運算式,正規式,regular,expression,物件,object,字典,方法,屬性,使用說明,文件,範例" />
<meta name="description" content="提供完整的RegExp物件及其方法、屬性的說明文件與範例" />
<title>RegExp物件 - Javascript字典</title>
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
<h1>Javascript - RegExp物件</h1>
<table class="doc-table">
	<tr>
		<th>名稱</th>
		<th>類形</th>
		<th>說明</th>
	</tr>
	<tr>
		<td>RegExp</td>
		<td>物件</td>
		<td>A regular expression is an object that describes a pattern of characters.<br />
		Regular expressions are used to perform pattern-matching and "search-and-replace" functions on text.<br />
		語法：var patt=new RegExp(pattern,modifiers);<br />
		或是更簡單的：var patt=/pattern/modifiers;<br />
		說明：pattern specifies the pattern of an expression<br />
		modifiers specify if a search should be global, case-sensitive, etc.
		<hr />
		「正規表示法」或「正規式」或「規則運算式」…（Regular expressions）是在 UNIX 世界中發展出來的字串比對技巧，其基本概念是用一套<span class="u">簡單（但功能強大）的符號來比對字串</span>，<span class="u">並可對符合比對條件的字串進行修改或其他運算</span>。<br />
		Netscape 及 IE 在第四版後都支援 JavaScript 的正規表示法，特別適用於表單資料的驗證與修改。事實上，JavaScript 的正規表示法和 Perl 幾乎一模一樣，因此，學會JavaScript的正規表示法，也可以完全適用於 Perl。<br />
		JavaScript 的正規式（Regular expressions）是一個內建的物件，其建構函式（Constructor function）為 RegExp，典型用法如下：<br />
		re = new RegExp("pattern", "flag");<br />
		上述用法也可以寫成：re = /pattern/flag;<br />
		其中，pattern 代表以正規表示法來顯示的字串，flag 則是比對的方式。flag 的值可能有三種，分別解釋如下：<br />
		　g：全域比對（Global match）<br />
		　i：忽略大小寫（Ignore case）<br />
		　gi：全域比對並忽略大小寫<br />
		舉例來說，我們的身份證字號的格式是由一個英文字母加上九個數字組合而成，如果我們要求使用者輸入身份證字號，就可以使用 JavaScript 的正規表示法來驗證其格式的正確性。例如，我們可用一個&lt;input&gt;來要求使用者輸入身份證字號，並在onblur的時候進行驗證，範例如下：<br />
<pre>
&lt;script&gt;
function checkID(formElement){
	re = /^[A-Z]\d{9}$/;
	if (!re.test(formElement.value))
		alert("你的身份證號碼格式不對！");
}
&lt;/script&gt;
&lt;form&gt;
身份證字號：&lt;input type="text" value="A000000000" onblur="checkID(this)"&gt;（第一個英文字母需大寫）
&lt;/form&gt;
</pre>
		在上述原始碼中，/^[A-Z]\d{9}$/ 就是一個正規式，[A-Z] 代表由 A 至 Z 的所有可能英文字母，\d 代表由 0 至 9 的數目字（事實上也可以寫成 [0-9]），{9} 則代表需要有九個數目字，^ 代表字串開始位置，$ 代表字串結束位置，因此 /^[A-Z]\d{9}$/ 就代表可以比對身份證字號的正規式。formElement.value 代表使用者輸入的字串，re.test() 則會傳回 true 或 false，代表比對是否成功。若要不限定是大寫英文字母，只需將正規式改成 /^[a-zA-Z]\d{9}$/g 就可以了！（注意：若不加入 ^ 和 $，那麼 /[A-Z]\d{9}/ 就會比對到其他不合法的身份證字號，例如 AGF123456789 或是 F1234567890 等。因此，加入 ^ 和 $ 可保證比對正確的字串一定是由由一個大寫英文字母加上九個數字所構成。）<br />
		另一個簡單的例子，是要求使用者輸入信用卡號碼，這是一組16個數字的號碼，例如：<br />
<pre>
&lt;script&gt;
function checkCreditCard(control){
	re = /^\d{4}-\d{4}-\d{4}-\d{4}$/;
	if (!re.test(control.value))
		alert("你的信用卡號碼不符合「xxxx-xxxx-xxxx-xxxx」的格式！");
}
&lt;/script&gt;
&lt;form&gt;
信用卡號碼：&lt;input type="text" value="xxxx-xxxx-xxxx-xxxx" onblur="checkCreditCard(this)"&gt;（格式：xxxx-xxxx-xxxx-xxxx）
&lt;/form&gt;
</pre>
		在上例中，很顯然地，/^\d{4}-\d{4}-\d{4}-\d{4}$/ 就代表正確的信用卡格式。<br />
		下一個例子，則是用正規表示法來驗證使用者的英文名字，例如：
<pre>
&lt;script&gt;
function checkEnglishName(control) {
	re1 = /^[A-Za-z\-]+\s+[A-Za-z\-]+$/;
	re2 = /^[A-Za-z\-]+\s+[A-Za-z\-]+\s+[A-Za-z\-]+$/;
	if (!re1.test(control.value) && !re2.test(control.value))
		alert("你的英文名字格式不對！");
}
&lt;/script&gt;
&lt;form&gt;
你的英文全名：&lt;input type="text" value="" onblur="checkEnglishName(this)"&gt;（格式：First Last 或 First Middle Last）
&lt;/form&gt;
</pre>
		Note: 如果比對的資料是應用在表單驗證，在進行表單資料驗證之前，我們應先進行表單資料修改，例如拿掉不必要的空格、英文字母大小寫轉換等，這些工作也可以由字串的 replace() 方法或正規式的 exec() 方法來達成。<br /><br />
		Note2: The backslash (\) is also used when you wish to match a special character literally. For example, if you wish to match the symbol "$" literally instead of have it signal the end of the string, backslash it: /\$/<br /><br />
		資料來源：http://neural.cs.nthu.edu.tw/jang/books/webprog/03jscript/reg1.asp?SessionCount=13<br />
		http://www.javascriptkit.com/jsref/regexp.shtml<br />
		<hr />
		Regular Expression (以下簡稱 REGEX) 是以一組特定字元符號描述字串樣式規則的記述語法。簡單地說， REGEX 用於表達字元符號在字串中出現的規則。舉個例子說明，在 REGEX 中，字元 '^' 放在第一個位置表示字串開頭位置，當我寫下 ^A 的記述時，便表示必須是一個開頭為 A 的字串，如 Adam，才符合此一規則。這個表達規則通常稱為 pattern 。 ECMAScript/JavaScript 以內建的 RegExp Object 提供 REGEX 功能。See also: ECMA-262 15.10 - RegExp Objects。<br /><br />
		要產生一個 RegExp 個體有兩種方式。第一種是直接以斜線 (/) 包住 pattern ，例如 /^A/ 。注意不要再用單引號或雙引號包在斜線外圍，一但用了引號圍住，就只是一個 String 而非 RegExp 個體。 "/^A/" 就是錯誤寫法，這只是一個普通字串。第二種是向系統要求建立一個 RegExp 個體，即 new RegExp(pattern) ，引數 pattern 可以是一個字串也可以是另一個 RegExp 個體。第一種方法只能使用常值的 pattern ，我們不能用斜線包住一個變數或一個字串運算結果。如果 pattern 保存在變數之中，則必須使用第二種方式。<br /><br />
		RegExp 個體提供兩個主要行為，即 exec() 和 test() 。 exec() 會對引數字串進行比對運算，並將匹配的字串內容記錄在陣列中回傳。而 test() 則僅僅測試引數字串是否符合規則，只回傳 true 或 false 。此外，RegExp 個體也可以作為 String 個體的 match(), search(), replace(), split() 之引數。 String 的 match() 其實就是調用 RegExp 的 exec() ，兩者的結果相同。<br /><br />
		ECMAScript/JavaScript 的 REGEX 規則是以 Perl 的規則為範本 (PHP 中稱為 PCRE 的內容) ，本文僅簡短說明幾個常見的字元意義。想了解更多用法者，請參看 Perl/PHP 的相關書籍，以及 ECMA-262 15.10 的內容。<br /><br />
		資料來源：http://azraelwren.blogspot.com/2009/08/regular-expression-regexp-in-javascript.html
		<hr />
		/a/匹配含字母"a"的字串，例如"ab", "bac", "cba"，而"xyz"則比對不成立。
		<hr />
		RegExr是一款在線編輯測試正則表達式的工具，它擁有一個簡潔的界面，提供了一個可以實時查看查找與替換正則表達式的文本框。還提供了一些正則表達式的實例以供參考，讓學習和使用正則表達式變地輕鬆點。<br />
		網址：<a href="http://gskinner.com/RegExr" target="_blank">http://gskinner.com/RegExr</a>。</td>
	</tr>
	<tr>
		<td>i</td>
		<td>Pattern flag 屬性</td>
		<td>忽略大小寫。<br />
			原文：Ignore the case of characters.<br />
			範例：/The/i matches "the" and "The" and "tHe"</td>
	</tr>
	<tr>
		<td>g</td>
		<td>Pattern flag 屬性</td>
		<td>查找找到所有的匹配，而不是在找到第一個之後就停止。<br />
			原文：Global search for all occurrences of a pattern<br />
			範例1：/ain/g matches both "ain"s in "No pain no gain", instead of just the first.<br />
			範例2：var reCat = new RegExp("cat"); //這個RegExp只會匹配字串中出現的第一個"cat"。<br />
			var reCat = new RegExp("cat","g"); //這個RegExp則會匹配所有出現的"cat"。</td>
	</tr>
	<tr>
		<td>gi</td>
		<td>Pattern flag 屬性</td>
		<td>全文查找、忽略大小寫。<br />
			原文：Global search, ignore case.<br />
			範例：/it/gi matches all "it"s in "It is our IT department"</td>
	</tr>
	<tr>
		<td>m</td>
		<td>Pattern flag 屬性</td>
		<td>執行多行匹配，^匹配開頭，$匹配結尾。<br />
			原文：Multiline mode. Causes ^ to match beginning of line or beginning of string. Causes $ to match end of line or end of string. JavaScript1.5+ only.<br />
			範例：/hip$/m matches "hip" as well as "hip\nhop"</td>
	</tr>
	<tr>
		<td>^</td>
		<td>Position Matching 符號</td>
		<td>寫在pattern第一個位置時，表示其後一符號必須出現在字串開頭的位置。<br />
			注意：<span class="u">寫在pattern中間位置時則為否定之意</span>，表示字串中不可有 ^ 之後一符號的內容。<br />
			原文：Only matches the beginning of a string.<br />
			範例：/^The/ matches "The" in "The night" by not "In The Night"</td>
	</tr>
	<tr>
		<td>$</td>
		<td>Position Matching 符號</td>
		<td>寫在 pattern 最後一個位置時，表示其前一符號必須出現在字串尾端的位置。寫在 pattern 中時無特別意義。<br />
			原文：Only matches the end of a string.<br />
			範例：/and$/ matches "and" in "Land" but not "landing"</td>
	</tr>
	<tr>
		<td>\</td>
		<td>Position Matching 符號</td>
		<td>表示轉義(escaping)，將其後的字元視為一般字元。例如要表示字串中含有'/'字元時，就必須寫作 /\//。<br />
			原文：The backslash (\) is also used when you wish to match a special character literally.<br />
			範例：if you wish to match the symbol "$" literally instead of have it signal the end of the string, backslash it: /\$/</td>
	</tr>
	<tr>
		<td>\b</td>
		<td>Position Matching 符號</td>
		<td>匹配一個單詞的分界線，比如一個空格(不要與[\b]混淆)；也就是字的邊界，也就是頭尾兩字母，接著空白字元或標點符號者。<br />
			原文：Matches any word boundary (test characters must exist at the beginning or end of a word within the string)<br />
			範例1：/ly\b/ matches "ly" in "This is really cool."<br />
			範例2：/\bn\w/匹配"noonday"中的'no'，/\wy\b/匹配"possibly yesterday."中的'ly'。<br />
			範例3：var s='Hello, Joe Obama';<br />
			document.write( s.replace(/\bo/gi,'x') +'&lt;br /&gt;');<br />
			document.write( s.replace(/o\b/gi,'x') +'&lt;br /&gt;');<br />
			document.write( s.replace(/(\bo|o\b)/gi,'x'));<br />
			上例將傳回：<br />
			Hello, Joe xbama<br />
			Hellx, Joe Obama<br />
			Hellx, Joe xbama</td>
	</tr>
	<tr>
		<td>\B</td>
		<td>Position Matching 符號</td>
		<td>匹配一個單詞的非分界線；不是字的邊界，也就是不接著空白字元或標點符號者。<br />
			原文：Matches any non-word boundary.<br />
			範例1：/\Bor/ matches “or” in "normal" but not "origami."<br />
			範例2：/\w\Bn/匹配"noonday"中的'on'，/y\B\w/匹配"possibly yesterday."中的'ye'。<br />
			範例3：var s='Hello, Joe Obama';<br />
			document.write( s.replace(/\Bo/gi,'x') +'&lt;br /&gt;');<br />
			document.write( s.replace(/\Bo\B/gi,'x'));<br />
			上例將傳回：<br />
			Hellx, Jxe Obama<br />
			Hello, Jxe Obama</td>
	</tr>
	<tr>
		<td>(?=pattern)</td>
		<td>Position Matching 符號</td>
		<td>原文：A positive look ahead. Requires that the following pattern in within the input. Pattern is not included as part of the actual match.<br />
			範例：/(?=Chapter)\d+/ matches any digits when it's proceeded by the words "Chapter", such as 2 in "Chapter 2", though not "I have 2 kids."</td>
	</tr>
	<tr>
		<td>(?!pattern)</td>
		<td>Position Matching 符號</td>
		<td>原文：A negative look ahead. Requires that the following pattern is not within the input. Pattern is not included as part of the actual match.<br />
			範例：/JavaScript(?! Kit)/ matches any occurrence of the word "JavaScript" except when it's inside the phrase "JavaScript Kit"</td>
	</tr>
	<tr>
		<td>Alphanumeric</td>
		<td>Literals 符號</td>
		<td>原文：All alphabetical and numerical characters match themselves literally.
			範例：/2 days/ will match "2 days" inside a string.</td>
	</tr>
	<tr>
		<td>\0</td>
		<td>Literals 符號</td>
		<td>原文：Matches NUL character.</td>
	</tr>
	<tr>
		<td>\n</td>
		<td>Literals 符號</td>
		<td>比對換行符號；若是在文字中有發生"換行"的行為則可以比對成功。
			原文：Matches a new line character</td>
	</tr>
	<tr>
		<td>\f</td>
		<td>Literals 符號</td>
		<td>比對form-feed若是在文字中有發生"換頁"的行為則可以比對成功。
			原文：Matches a form feed character</td>
	</tr>
	<tr>
		<td>\r</td>
		<td>Literals 符號</td>
		<td>原文：Matches carriage return character</td>
	</tr>
	<tr>
		<td>\t</td>
		<td>Literals 符號</td>
		<td>比對定位字元(Tab)。
			原文：Matches a tab character</td>
	</tr>
	<tr>
		<td>\v</td>
		<td>Literals 符號</td>
		<td>比對垂直定位字元(Vertical tab)。
			原文：Matches a vertical tab character</td>
	</tr>
	<tr>
		<td>\xxx</td>
		<td>Literals 符號</td>
		<td>比對以八進制數xxx規定的字符。
			原文：Matches the ASCII character expressed by the octal number xxx.<br />
			範例："\50" matches left parentheses character "("</td>
	</tr>
	<tr>
		<td>\xdd</td>
		<td>Literals 符號</td>
		<td>比對以十六進制數dd規定的字符。
			原文：Matches the ASCII character expressed by the hex number dd.<br />
			範例："\x28" matches left parentheses character "("</td>
	</tr>
	<tr>
		<td>\uxxx</td>
		<td>Literals 符號</td>
		<td>比對以十六進制數xxxx 規定的Unicode 字符。
			原文：Matches the ASCII character expressed by the UNICODE xxxx.<br />
			範例："\u00A3" matches "£".</td>
	</tr>
	<tr>
		<td>[\b]</td>
		<td>Literals 符號</td>
		<td>可以比對一個 backspace ，也請注意 [\b] 與 \b 之間的差別<br />
			原文：Matches a backspace.</td>
	</tr>
	<tr>
		<td>[xyz]</td>
		<td>Character Classes 符號</td>
		<td>表示字串含有括號中任一字元的內容。可以用'-'表示一組連續字元，例如/[a-z]/,/[0-9]/。注意，[]僅代表一個字元，例如/[abc]/表示'a'或'b'或'c'，而不是'abc'。<br />
			原文：Match any one character enclosed in the character set. You may use a hyphen to denote range. For example. /[a-z]/ matches any letter in the alphabet, /[0-9]/ any single digit.<br />
			範例：/[AN]BC/ matches "ABC" and "NBC" but not "BBC" since the leading “B” is not in the set.</td>
	</tr>
	<tr>
		<td>[^xyz]</td>
		<td>Character Classes 符號</td>
		<td>不屬於字母集合中的字母。你可以使用連字符-指出一字符範圍，例如[^abc]和[^ac]等價，它們最早匹配"brisket"中的'r'和"chop."中的'h'。<br />
			原文：Match any one character not enclosed in the character set. The caret indicates that none of the characters<br />
			NOTE: the caret used within a character class is not to be confused with the caret that denotes the beginning of a string. Negation is only performed within the square brackets.<br />
			範例1：/[^AN]BC/ matches "BBC" but not "ABC" or "NBC".
			範例2：var s='Hello Wendy'; document.write(s.replace(/e[^a-l]/gi,'x')); 此例將印出：Hello Wxdy。</td>
	</tr>
	<tr>
		<td>.</td>
		<td>Character Classes 符號</td>
		<td>表示一個任意字元。<br />
			原文：Match any character except newline or another Unicode line terminator.<br />
			範例：/b.t/ matches "bat", "bit", "bet" and so on.</td>
	</tr>
	<tr>
		<td>\w</td>
		<td>Character Classes 符號</td>
		<td>表示任何一個字母與數字以及'_'(下劃線)，意同[a-zA-Z0-9_]。<br />
			原文：Match any alphanumeric character including the underscore. Equivalent to [a-zA-Z0-9_].<br />
			範例：/\w/ matches "200" in "200%"</td>
	</tr>
	<tr>
		<td>\W</td>
		<td>Character Classes 符號</td>
		<td>表示任何一個\w以外的字元。<br />
			原文：Match any single non-word character. Equivalent to [^a-zA-Z0-9_].<br />
			範例：/\W/ matches "%" in "200%"</td>
	</tr>
	<tr>
		<td>\d</td>
		<td>Character Classes 符號</td>
		<td>代表符合由0至9的數字，也可寫成[0-9]。<br />
			原文：Match any single digit. Equivalent to [0-9].</td>
	</tr>
	<tr>
		<td>\D</td>
		<td>Character Classes 符號</td>
		<td>表示任何一個非數字，意同 [^0-9] 。<br />
			原文：Match any non-digit. Equivalent to [^0-9].<br />
			範例：/\D/ matches "No" in "No 342222"</td>
	</tr>
	<tr>
		<td>\s</td>
		<td>Character Classes 符號</td>
		<td>匹配任何一個空白符號，包括tab, form feed，換行符...，即\t, \v...等，等價於[ \f\n\r\t\v]<br />
			原文：Match any single space character. Equivalent to [ \t\r\n\v\f].</td>
	</tr>
	<tr>
		<td>\S</td>
		<td>Character Classes 符號</td>
		<td>表示任何一個非空白符號，參考\s。<br />
			原文：Match any single non-space character. Equivalent to [^ \t\r\n\v\f].</td>
	</tr>
	<tr>
		<td>{n}</td>
		<td>Repetition 符號</td>
		<td>表示前一符號在字串中的重覆次數。<br />
			原文：Match exactly n occurrences of a regular expression.<br />
			範例：/\d{5}/ matches 5 digits.；/A{2}/ 表示'A'重覆兩次(即'AA')</td>
	</tr>
	<tr>
		<td>{n,}</td>
		<td>Repetition 符號</td>
		<td>表示前一符號在字串中有n個到無數多個的重覆次數。<br />
			原文：Match n or more occurrences of a regular expression.<br />
			範例：/\s{2,}/ matches at least 2 whitespace characters.；/A{2,}/ 表示字串含有2到無數多個'A'</td>
	</tr>
	<tr>
		<td>{n,x}</td>
		<td>Repetition 符號</td>
		<td>表示前一符號在字串中有n到x個的數量。<br />
			原文：Matches n to x number of occurrences of a regular expression.<br />
			範例：/\d{2,4}/ matches at least 2 but no more than 4 digits.；/A{2,5}/ 表示含有2到5個'A'</td>
	</tr>
	<tr>
		<td>?</td>
		<td>Repetition 符號</td>
		<td>表示字串中有 0 到 1個其前一符號的內容。<br />
			原文：Match zero or one occurrences. Equivalent to {0,1}.<br />
			範例1：/a\s?b/ matches "ab" or "a b".<br />
			範例2：例如：/e?le?/匹配"angel"中的'el'和"angle."中的'le'。</td>
	</tr>
	<tr>
		<td>*</td>
		<td>Repetition 符號</td>
		<td>表示字串中有0到無數個其前一符號的內容。<br />
			原文：Match zero or more occurrences. Equivalent to {0,}.<br />
			範例1：/we*/ matches "w" in "why" and "wee" in "between", but nothing in "bad"
			範例2：var s='Hello Wendy'; document.write(s.replace(/el*/ig,'x')); 此例將印出：Hxo Wxndy。</td>
	</tr>
	<tr>
		<td>+</td>
		<td>Repetition 符號</td>
		<td>表示字串中有 1 到無數個其前一符號的內容。<br />
			原文：Match one or more occurrences. Equivalent to {1,}.<br />
			範例：/fe+d/ matches both "fed" and "feed"</td>
	</tr>
	<tr>
		<td>()</td>
		<td>Alternation & Grouping 符號</td>
		<td>表示一個 sub pattern ，符合 sub pattern 的字串內容會被存放在匹配陣列中，並依序指派數字代表此 sub pattern 。可以此數字在 pattern 的其他地方引用內容，例如 /The h([0-9]) means Title (\1)/ 表示第 1 個 sub pattern 是 0 到 9 的任一字元，而 \1 表示匹配的內容。故 'The h1 means Title 1', 'The h2 means Title 2' 到 'The h9 means Title 9' 符合規則。<br />
			原文：Grouping characters together to create a clause. May be nested.<br />
			範例：/(abc)+(def)/ matches one or more occurrences of "abc" followed by one occurrence of "def".</td>
	</tr>
	<tr>
		<td>()</td>
		<td>Alternation & Grouping 符號</td>
		<td>原文：Apart from grouping characters (see above), parenthesis also serve to capture the desired subpattern within a pattern. The values of the subpatterns can then be retrieved using RegExp.$1, RegExp.$2 etc after the pattern itself is matched or compared. For example, the following matches "2 chapters" in "We read 2 chapters in 3 days", and furthermore isolates the value "2":
<pre>
var mystring="We read 2 chapters in 3 days"
var needle=/(\d+) chapters/

mystring.match(needle) //matches "2 chapters"
alert(RegExp.$1) //alerts captured subpattern, or "2"
</pre>
			The subpattern can also be back referenced later within the main pattern. See "Back References" below.<br />
			範例：The following finds the text "John Doe" and swaps their positions, so it becomes "Doe John":<br /><br />
			"John Doe".replace(/(John) (Doe)/, "$2 $1")</td>
	</tr>
	<tr>
		<td>(?:x)</td>
		<td>Alternation & Grouping 符號</td>
		<td>原文：Matches x but does not capture it. In other words, no numbered references are created for the items within the parenthesis.<br />
			範例：/(?:.d){2}/ matches but doesn't capture "cdad".</td>
	</tr>
	<tr>
		<td>x(?=y)</td>
		<td>Alternation & Grouping 符號</td>
		<td>原文：Positive lookahead: Matches x only if it's followed by y. Note that y is not included as part of the match, acting only as a required conditon.<br />
			範例：/George(?= Bush)/ matches "George" in "George Bush" but not "George Michael" or "George Orwell".<br /><br />
			/Java(?=Script|Hut)/ matches "Java" in "JavaScript" or "JavaHut" but not "JavaLand".</td>
	</tr>
	<tr>
		<td>x(?!y)</td>
		<td>Alternation & Grouping 符號</td>
		<td>原文：Negative lookahead: Matches x only if it's NOT followed by y. Note that y is not included as part of the match, acting only as a required condiiton.<br />
			範例：/^\d+(?! years)/ matches "5" in "5 days" or "5 oranges", but not "5 years".</td>
	</tr>
	<tr>
		<td>|</td>
		<td>Alternation & Grouping 符號</td>
		<td>「或」的意思，字串中含有'|'之前一符號或後一符號的內容。例如/image\.(jpg|png)/表示'image.jpg'或'image.png'。通常會用()括住'|'的前後符號。<br />
			原文：Alternation combines clauses into one regular expression and then matches any of the individual clauses. Similar to "OR" statement.<br />
			範例：/(ab)|(cd)|(ef)/ matches "ab" or "cd" or "ef".</td>
	</tr>
	<tr>
		<td>()\n</td>
		<td>Back references 符號</td>
		<td>原文："\n" (where n is a number from 1 to 9) when added to the end of a regular expression pattern allows you to back reference a subpattern within the pattern, so the value of the subpattern is remembered and used as part of the matching . A subpattern is created by surrounding it with parenthesis within the pattern. Think of "\n" as a dynamic variable that is replaced with the value of the subpattern it references. For example:
<pre>
/(hubba)\1/
</pre>
			is equivalent to the pattern /hubbahubba/, as "\1" is replaced with the value of the first subpattern within the pattern, or (hubba), to form the final pattern.<br />
			Lets say you want to match any word that occurs twice in a row, such as "hubba hubba." The expression to use would be:
<pre>
/(\w+)\s+\1/
</pre>
			"\1" is replaced with the value of the first subpattern's match to essentially mean "match any word, followed by a space, followed by the same word again".<br />
			If there were more than one set of parentheses in the pattern string you would use \2 or \3 to match the desired subpattern based on the order of the left parenthesis for that subpattern. In the example:
<pre>
/(a (b (c)))/
</pre>
			"\1" references (a (b (c))), "\2" references (b (c)), and "\3" references (c).</td>
	</tr>
	<tr>
		<td>global</td>
		<td>屬性</td>
		<td>如果建立RegExp物件時設置了g旗標，此屬性返回true，否則返回false，預設值為false。
			原文：Specifies if the "g" modifier is set.</td>
	</tr>
	<tr>
		<td>ignoreCase</td>
		<td>屬性</td>
		<td>如果建立RegExp物件時設置了i旗標，此屬性返回true，否則返回false，預設值為false。
			原文：Specifies if the "i" modifier is set.</td>
	</tr>
	<tr>
		<td>lastIndex</td>
		<td>屬性</td>
		<td>原文：The index at which to start the next match.</td>
	</tr>
	<tr>
		<td>multiline</td>
		<td>屬性</td>
		<td>如果建立RegExp物件時設置了m旗標，此屬性返回true，否則返回false，預設值為false。
			原文：Specifies if the "m" modifier is set.</td>
	</tr>
	<tr>
		<td>source</td>
		<td>屬性</td>
		<td>此屬性返回建立RegExp物件時指定的本文字符串。(？？？)
			原文：The text of the RegExp pattern.</td>
	</tr>
	<tr>
		<td>compile()</td>
		<td>方法</td>
		<td>語法：RegExpObject.compile(regexp,modifier)
			說明：Compiles a regular expression<br />
			The compile() method is used to compile a regular expression during execution of a script.<br />
			The compile() method can also be used to change and recompile a regular expression.<br />
			範例：Do a global search for "man" in a string, and replace it with "person". Then change the regular expression and replace either "man" or "woman" with "person", with the compile() method:
<pre>
&lt;script type="text/javascript"&gt;
var str="Every man in the world! Every woman on earth!";
var patt=/man/g;
var str2=str.replace(patt,"person");
document.write(str2+"&lt;br /&gt;");
patt=/(wo)?man/g;
patt.compile(patt); 
str2=str.replace(patt,"person");
document.write(str2);
&lt;/script&gt;
</pre>
		The output of the code above will be:<br />
<pre>
Every person in the world! Every woperson on earth!
Every person in the world! Every person on earth!
</pre></td>
	</tr>
	<tr>
		<td>exec()</td>
		<td>方法</td>
		<td>尋找匹配規則運算式的字串，結果存入陣列中。<br />
		語法：RegExp.exec(string)<br />
		原文：Similar to String.match() above in that it returns an array of information or null if no match is found. Unlike String.match() however, the parameter entered should be a string, not a regular expression pattern.<br />
		範例：var match = /s(amp)le/i.exec("Sample text") //returns ["Sample","amp"]</td>
	</tr>
	<tr>
		<td>match()</td>
		<td>方法</td>
		<td>返回一個包含在字串中的所有匹配的陣列。
		語法：String.match(regular expression)
		原文：Executes a search for a match within a string based on a regular expression. It returns an array of information or null if no match is found.<br />
		Note: Also updates the $1…$9 properties in the RegExp object.<br />
		範例1：var oldstring = "Peter has 8 dollars and Jane has 15"<br />
		newstring = oldstring.match(/\d+/g) //returns the array ["8","15"]<br />
		範例2：var toMatch = "a bat, a cat, a fAt baT, a faT cat";<br />
		var reAt = /at/gi;<br />
		var arrMatchs = toMatch.match(reAt); //返回一个数组["at","at","At","aT","aT","at"]</td>
	</tr>
	<tr>
		<td>replace()</td>
		<td>方法</td>
		<td>用第二個參數替換某個子串(第一個參數)的所有匹配。第一個參數 既可以是匹配的字串，也可以是用於匹配的一個規則運算式，返回是替換後的整個字串。<br />
			語法：String.replace(regular expression, replacement text)<br>
			說明：Searches and replaces the regular expression portion (match) with the replaced text instead. For the "replacement text" parameter, you can use the keywords $1 to $2 to replace the original text with values from subpatterns defined within the main pattern.<br />
			The following finds the text "John Doe" and swaps their positions, so it becomes "Doe John":
<pre>
var newname="John Doe".replace(/(John) (Doe)/, "$2 $1")
</pre>
			Furthermore, the parameter "replacement text" can in fact be substituted with a callback function instead. See example below.<br />
			範例1：var oldstring="(304)434-5454"<br />
			newstring=oldstring.replace(/[\(\)-]/g, "") //returns "3044345454"(removes "(", ")", and "-")<br />
			範例2：var sToChange = "The sky is red";<br />
			var reRed = /red/;<br />
			sToChange.replace(reRed,"blue"); //输出The sky is blue</td>
	</tr>
	<tr>
		<td>search()</td>
		<td>方法</td>
		<td>與indexOf類似，返回在字串中出現的第一個匹配的位置，全域匹配運算式g在這裡不起作用。<br />
			語法：String.search(regular expression)<br />
			原文：Tests for a match in a string. It returns the index of the match, or -1 if not found. Does NOT support global searches (ie: "g" flag not supported).<br />
			範例1："Amy and George".search(/george/i); //returns 8<br />
			範例2：var toMatch = "a bat, a cat, a fAt baT, a faT cat";<br />
			var reAt = /at/gi;<br />
			toMatch.search(reAt); //输出3</td>
	</tr>
	<tr>
		<td>split()</td>
		<td>方法</td>
		<td>將字串分割成子字串，作為陣列返回。<br />
			語法：String.split (string literal or regular expression)<br />
			原文：Breaks up a string into an array of substrings based on a regular expression or fixed string.<br />
			範例1：var oldstring="1,2, 3,  4,   5"<br />
			newstring=oldstring.split(/\s*,\s*/) //returns the array ["1","2","3","4","5"]<br />
			範例2：var sColor = "red, blue, yellow"; <br />
			var reExp = /\,/; <br />
			var arrs = sColor.split(reExp); //得到一個陣列["red","blue","yellow"]注意逗號在規則運算式有特殊含義，這邊需要轉義</td>
	</tr>
	<tr>
		<td>test()</td>
		<td>方法</td>
		<td>如果指定的字串能夠匹配這個規則運算式則返回true，否則返回false。<br />
			語法：RegExp.test(string)<br />
			原文：Tests if the given string matches the Regexp, and returns true if matching, false if not.<br />
			範例：var pattern=/george/i<br />
			pattern.test("Amy and George"); //retuns true</td>
	</tr>
</table>
</main>
</body>
</html>