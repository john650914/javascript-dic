<h1>Javascript - Ajax物件</h1>
<div class="intro_">
	這邊來說明一下Ajax大概的原理及使用方式，以下是Ajax的基本運作流程：
	<ol>
		<li>建立一個新的Ajax物件</li>
		<li>設定該Ajax物件的請求內容(open())</li>
		<li>發送請求(send())，同時決定是否要向伺服器發送資料，並觸發onreadystatechange事件</li>
		<li>觸發onreadystatechange事件後，我們可以(預先)設定readyState及status改變時要做什麼，例如請求成功、資料接收成功或是請求失敗等…後要做的事</li>
	</ol>
	<br>
</div>
<table class="doc-table">
	<tr>
		<th>名稱</th>
		<th>類形</th>
		<th>說明</th>
	</tr>
	<tr>
		<td>XMLHTTP</td>
		<td>物件</td>
		<td>Ajax物件，在Web中非同步請求就是靠此物件來實現，XMLHTTP為IE特有(版本待補)，非IE瀏覽器則使用XMLHttpRequest物件進行非同步請求。<br><br>
			要使用XMLHTTP，必須先建立物件，程式碼如下：
<pre>var ajaxRequest = new ActiveXObject('Microsoft.XMLHTTP');</pre>
			上例中的ajaxRequest變數若要考慮瀏覽器的相容性，則必須以下例的方式改寫：
<pre>var ajaxRequest;
if(window.ActiveXObject){
	ajaxRequest = new ActiveXObject('Microsoft.XMLHTTP');
}else if(window.XMLHttpRequest){
	ajaxRequest = new XMLHttpRequest();
}
</pre>
		</td>
	</tr>
	<tr>
		<td>XMLHttpRequest</td>
		<td>物件</td>
		<td>Ajax物件，在Web中非同步請求就是靠此物件來實現，IE不支援XMLHttpRequest(版本待補)，IE瀏覽器則使用XMLHTTP物件進行非同步請求。<br><br>
			要使XMLHttpRequest，必須先建立物件，程式碼如下：
<pre>var ajaxRequest = new XMLHttpRequest();</pre>
		上例中的ajaxRequest變數若要考慮瀏覽器的相容性，則必須以下例的方式改寫：
<pre>var ajaxRequest;
if(window.ActiveXObject){
	ajaxRequest = new ActiveXObject('Microsoft.XMLHTTP');
}else if(window.XMLHttpRequest){
	ajaxRequest = new XMLHttpRequest();
}
</pre>
		</td>
	</tr>
	<tr class="gray">
		<td>contentType</td>
		<td>屬性</td>
		<td>IE8 only. Supports this property if using the new XDomainRequest() object to create the Ajax request.</td>
	</tr>
	<tr>
		<td>readyState</td>
		<td>屬性</td>
		<td>非同步請求的狀態，返回的值為整數，<br>
			在不同的readyState階段"onreadystatechange"都會被觸發(readyState的值不会遞減)，我們可以針對不同的狀態做出反應，以下為各狀態的說明：<br><br>
			0：請求尚未初始化 - 此階段代表Ajax物件己被建立，但尚未調用open()初使化；值為0代表物件己存在，否則瀏覽器會報錯：對象不存在<br>
			　 (request not initialized)<br>
			1：請求己設置 - 己經成功調用open()方法，但尚未發送請求<br>
			　 (server connection established)<br>
			2：請求成功送出 - 請求己被送出(send())並己接收到HTTP response headers<br>
			　 (request received )<br>
			3：資料載入中 - 正在接收及解析資料(MIME type)<br>
			　 (processing request )<br>
			4：請求完成 - 成功接收到所有資料並完成解析，己經可以在戶端進行操作<br>
			　 (request finished and response is ready)<br><br>
			上面的說明是從網路上找出來翻譯的，不同的網站做的解釋都有點出入，如果需要更準確的資訊只有自己實測了<br><br>
			當readyState是3的時候，onreadystatechange會被觸發好幾次(到底是幾次?)，讓我們當資料在下載時可以做出反應，例如製作進度條，但IE(版本待補)在readyState為3時只會觸發一次。
		</td>
	</tr>
	<tr>
		<td>responseText</td>
		<td>屬性</td>
		<td>伺服器返回的文字(字串)</td>
	</tr>
	<tr>
		<td>responseXML</td>
		<td>屬性</td>
		<td>伺服器返回的XML，可以當作DOM處理<br>
			以XML物件傳回資料，這個XML物件可以當作DOM物件來處理，以下列出必須注意的事項：
			<ol>
				<li>確認我們的XML文件結構是正確無誤的，否則responseXML將會傳回null</li>
				<li>在Firefox(原文指的可能是現代瀏覽器，要再確認)，使用overrideMimeType()方法可以強迫回傳的資料解析成text/xml，即使伺服器回傳型態不是如此。必須在呼叫send()前呼叫，下方的範例可以看到使用方法。</li>
				<li>IE不支援用戶端的overrideMimeType()方法，所以我們必須確認Server端傳回的XML檔有正確的"text/xml" header，如果我們的XML檔有「.xml」的副檔名，通常Server預設會傳回正確的"text/xml" header，如果沒有，我們可能要調整伺服器的設定；有關IE Content-type的疑難雜症可以參考<a href="http://www.javascriptkit.com/dhtmltutors/ajaxgetpost3.shtml">這篇文章</a></li>
			</ol>
			如果上列的條件有任何一項不符，回傳的資料就會轉為純文字而不是預期中的XML物件。<br>
			以下範例將alert text.xml中XML的第一個結點的值：
<pre>var mygetrequest = new ajaxRequest();
if(mygetrequest.overrideMimeType){
	mygetrequest.overrideMimeType('text/xml');
}
mygetrequest.onreadystatechange = function(){
	if(mygetrequest.readyState == 4){
		if (mygetrequest.status == 200){
			var xmldata = mygetrequest.responseXML; //retrieve result as an XML object
			var animals = xmldata.getElementsByTagName("theanimal");
			alert(animals[0].firstChild.nodeValue); //alerts "The dog is a domesticated subspecies..."
		}
		else{
			alert("An error has occured making the request");
		}
	}
}

mygetrequest.open("GET", "test.xml", true);
mygetrequest.send(null);
<hr>//上例的連結檔"test.xml"內容如下(http://www.javascriptkit.com/jsref/test.xml)：
&lt;?xml version="1.0" encoding="ISO-8859-1"?&gt;
&lt;animals&gt;
	&lt;theanimal&gt;
		The dog is a domesticated subspecies of the wolf, a mammal of the Canidae family of the order Carnivora.
	&lt;/theanimal&gt;
	&lt;theanimal&gt;
		The cat, also known as the domestic cat or house cat to distinguish it from other felines, is a small carnivorous species of crepuscular mammal that is valued by humans for its companionship and its ability to hunt vermin, snakes and scorpions.
	&lt;/theanimal&gt;
	&lt;theanimal&gt;
		The lion is a member of the family Felidae and one of four big cats in the genus Panthera. With exceptionally large males exceeding 250 kg (550 lb) in weight,[2] it is the second-largest living cat after the tiger.
	&lt;/theanimal&gt;
&lt;/animals&gt;
</pre>
		</td>
	</tr>
	<tr>
		<td>status</td>
		<td>屬性</td>
		<td>伺服器返回的HTTP請求狀態，返回值為整數(<a href="https://en.wikipedia.org/wiki/List_of_HTTP_status_codes">HTTP status codes</a>)，常用的有：<br>
			200：請求成功<br>
			202：請求被接收，但處理未完成<br>
			400：錯誤的請求(需要更進一步的說明…)<br>
			404：找不到資源<br>
			500：內部伺服器錯誤，如php程式碼錯誤等<br></br>
			When running your Ajax script online, to test for a fully complete and successful Ajax request, look for a readyState value of 4 plus a status code of 200:
<pre>var myrequest=new ajaxRequest();
myrequest.onreadystatechange=function(){
	if(myrequest.readyState == 4){ //if request has completed
		if(myrequest.status == 200){ //if request was successful (versus "page not found" etc)
			//do something with returned data
		}
	}
}
</pre>
			If you're running an Ajax request offline locally on your PC, a value of 0 is returned by status in most browsers regardless of the actual request status, even if it was successful. To run and test Ajax requests locally, it should overlook the status code being 200, and merely rely on a readyState value of 4. The following example takes into account the request possibly being run offline and to enable it:
<pre>var myrequest=new ajaxRequest();
myrequest.onreadystatechange=function(){
	if (myrequest.readyState == 4){ //if request has completed
		if (myrequest.status == 200 || window.location.href.indexOf("http") == -1){ //if request was successful (versus "page not found" etc) or if run offline (rely on readyState of 4 alone then)
			//do something with returned data
		}
	}
}
</pre>
		</td>
	</tr>
	<tr>
		<td>statusText</td>
		<td>屬性</td>
		<td>相對於status，statusText以字串傳回當前的請求狀態而非數值，以下列出常見的回傳值及對應的「status碼」：<br>
			200："Ok"<br>
			301："Moved Permanently"<br>
			304："Not Modified" (page hasn't been modified)<br>
			404："Not Found"<br>
			403："Forbidden"<br>
			401："Unauthorized" (wrong password)<br></br>
			範例：
<pre>myReq.open("GET", "http://localhost/test.xml", false);
myReq.send()
if(myReq.statusText == "OK"){
	console.log(myReq.responseText);
}else{
	console.log(myReq.statusText);
}
</pre>
		</td>
	</tr>
	<tr class="gray">
		<td>timeout</td>
		<td>屬性</td>
		<td>IE8 only. Supports this property if using the new XDomainRequest() object to create the Ajax request.</td>
	</tr>
	<tr>
		<td>onreadystatechange</td>
		<td>事件屬性</td>
		<td>當readyState發生任何狀態變化時被觸發，讓我們可以針對非同步請求不同的階段做反應。</td>
	</tr>
	<tr class="gray">
		<td>onerror</td>
		<td>事件屬性</td>
		<td>Mozilla only. IE8 supports this via the new XDomainRequest() object.</td>
	</tr>
	<tr class="gray">
		<td>onload</td>
		<td>事件屬性</td>
		<td>Mozilla only. IE8 supports this via the new XDomainRequest() object.</td>
	</tr>
	<tr class="gray">
		<td>onprogress</td>
		<td>事件屬性</td>
		<td>Mozilla only. IE8 supports this via the new XDomainRequest() object.</td>
	</tr>
	<tr class="gray">
		<td>ontimeout</td>
		<td>事件屬性</td>
		<td>IE8 only. Supports this property if using the new XDomainRequest() object to create the Ajax request.</td>
	</tr>
	<tr>
		<td>abort()</td>
		<td>方法</td>
		<td>取消現階段的Ajax請求，關閉連接並結束倀何未決的網路活動，同時該請求的readyState會重設為0。<br>
		如果我們的請求用了太長時間，並且不再需要的時候，就可以使用此方法。
		</td>
	</tr>
	<tr>
		<td>getAllResponseHeaders()</td>
		<td>方法</td>
		<td>擷取回應的所有http頭；我們必須在請求完成後才能呼叫此方法(依據readyState)，否則會它傳回一個空的字串。</td>
	</tr>
	<tr>
		<td>getResponseHeader()</td>
		<td>方法</td>
		<td>擷取指定的http頭，例如"Content-Type"的值；這些參數值是不分大小寫的，要看server端設定它們是大寫還是小寫。我們必須在請求完成後才能呼叫此方法(依據readyState)，否則會它傳回一個空的字串。<br>
			以下範例判斷請求的"Content-Type"值，再依照傳的值做相對應的處理：
<pre>var myrequest = new ajaxRequest();
myrequest.onreadystatechange = function(){
	if (myrequest.readyState == 4){ //如果請求完成了
		if(myrequest.status == 200){ //如果請求的狀態為成功(相對於"page not found"等…)
			var contentType = myrequest.getResponseHeader("Content-Type")
			if(contentType == "text/xml"){ //是否為XML資料(確認server傳回正確的header)
				return myrequest.responseXML;
			}
			else if(contentType == "text/json"){ //是否為JSON資料(確認server傳回正確的header)
				return eval(myrequest.responseText); //(要注意跨瀏覽器的安全問題)
			}
			else{ //純文字資料
				return myrequest.responseText;
			}
		}
	}
}
</pre>
		</td>
	</tr>
	<tr>
		<td>open()</td>
		<td>方法</td>
		<td>在Ajax請求被發送前，設定好該請求的內容，包含資料傳送方式、請求檔案的URL等，語法及參數說明如下：
<pre>open(method, url, asynchronous, user, password);</pre>
		<ol>
			<li>mothod：指定請求類型，如GET、POST等，其它有可能的值還有HEAD或PUT</li>
			<li>url：為請求的位置，可以是絕對位置或是相對位置。當我們的網頁在做Ajax請求時，所有的現代瀏覽器會限制這個URL必須在同一個domain才能運作，如果我們要執行跨網域的請求，必須使用一種「網頁代理」的方式來實現，通常都在同樣的domain下面寫一隻proxy.php，用file_get_contents()來抓取跨網域的資料，也就是取得一份網域的資料的拷貝，再由提出請求的網頁open()這一支proxy.php；但網路上有一種JSONP的做法，配合jQuery使用起來滿方便的，有需要可以去Google。</li>
			<li>asynchronous：是一個布林值，表示是否為非同步請求，預設值為true。In the later, the request stalls the loading of the rest of the page until the request is completed.</li>
			<li>user：此參數為可選，用來驗証請求</li>
			<li>password：此參數為可選，用來驗証請求</li>
		</ol>
		建立了非同步物件後(參考XMLHTTP)，要設定此物件請求內容的實際範例如下：
<pre>ajaxRequest1.open('GET', 'result.php?id=george&amp;age=30', true);
ajaxRequest2.open('POST', 'json.php', true);
//GET請求需要向server傳遞資料時，直接帶在URL的問號後即可，呼叫send()方法時參數記得帶入null
//POST請求則必需在呼叫send()方法時帶入參數
</pre>

			Be sure to use <a href="http://www.javascriptkit.com/jsref/globalfunctions.shtml">encodeURIComponent()</a> on any parameter values that may contain special characters such as spaces or "=" etc. For "POST" requests, parameters are entered inside request.send() instead.<br><br>
			前面參數說明的部份有提到，open()中帶入的URL必須跟主程式所在的網頁(calling page)在同一個網域，如果我們需要使用絕對位置，指定的URL中的網域名稱一定要主程式的網頁完全一模一樣，例如http://www.sample.com和http://sample.com就會被視為不同的hostname，如果要確保程式運作順利，可以參考下面的範例：
<pre>var myrequest=new ajaxRequest();
var myhostname="http://"+window.location.hostname;
myrequest.open("GET", myhostname+"/mydir/response.php", true);
</pre>
		</td>
	</tr>
	<tr>
		<td>send()</td>
		<td>方法</td>
		<td>向伺服器發送請求，send()方法只有一個參數，它表示要向伺服器發送的資料，其格式為字串型式；如果以GET方式發送請求，這個參數必須為「null」，如果是POST方式則代入請求的參數。<br>
			注意send()方法通常放在整段請求程式的最後被呼叫。<br><br>以下為GET方法的範例：
<pre>var myrequest=new ajaxRequest();
myrequest.open("GET", "result.php?id=george&amp;age=30", true)
myrequest.send(null); //send GET request
</pre>
			POST方法在發送前必需先以setRequestHeader()方法設置http header，以下為範例：
<pre>var myrequest=new ajaxRequest();
var parameters="id=george&amp;age=30";
myrequest.open("POST", "result.php", true);
myrequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
myrequest.send(parameters); //send POST request
</pre>
		</td>
	</tr>
	<tr>
		<td>setRequestHeader()</td>
		<td>方法</td>
		<td>設定請求的http header，這個header會隨著請求一起被送到伺服器，不要把它跟伺服器傳回的header搞混了；setRequestHeader()方法一定要在open()和send()之中被呼叫。<br>
			如果是POST請求，記得送出(設置)一個內容為"application/x-www-form-urlencoded"的"Content-type" header，GET請求好像不用設定(?)，範例如下：
<pre>var myrequest=new ajaxRequest();
"
"
myrequest.open("POST", "submit.php", true);
myrequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
myrequest.send("id=" + encodeURI(somevalue));
</pre>
		</td>
	</tr>
</table>