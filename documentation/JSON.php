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
<meta name="keywords" content="Javascript,JSON,JavaScript Object Notation,物件,object,字典,方法,屬性,使用說明,文件,範例" />
<meta name="description" content="提供完整的JSON物件及其方法、屬性的說明文件與範例" />
<title>JSON物件(JavaScript Object Notation) - Javascript字典</title>
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
<h1>Javascript - JSON物件</h1>
<table class="doc-table">
	<tr>
		<th>名稱</th>
		<th>類形</th>
		<th>說明</th>
	</tr>
	<tr>
		<td>JSON</td>
		<td>物件</td>
		<td>
			JSON, or JavaScript Object Notation, has become a popular alternative to XML for defining structured data using JavaScript. A sample JSON definition that stores some information about Bob may look like the following:
<pre>
{
	"name": "Bob Miller",
	"age": 27,
	"occupation": "Programmer",
	"contact":{
		"address": "253 Johnson Road",
		"Home_Phone": "544-6443",
		"Cell_Phone": "563-3566"
	}
}
</pre>
			In strict JSON:
			<ul>
				<li>All string values must be in double quotes (single quotes won't do).</li>
				<li>The name portion of each name/value pair must also be in double quotes.</li>
				<li>The value of a property cannot be a function or method.</li>
			</ul>
			If your JSON data is not valid strict JSON, it will trip up certain JSON parsers, most notably, the JSON object of JavaScript. So make sure your data is valid syntax wise!<br><br>
			JSON data can be stored on the server as a text file for example, then <a href="http://www.javascriptkit.com/dhtmltutors/ajaxgetpost4.shtml">retrieved using Ajax and converted into an actual JavaScript object</a> for easy parsing. In general there are two ways to parse JSON:
			<ul>
				<li>Use JavaScript's eval() function to convert the data into an actual JavaScript object. The advantage of this is that it works in older browsers (FF3 and below, IE7 and below, Opera 10 and below). The disadvantage is that it's slow and potentially unsafe unless you pre-screen the data for malicious code/ methods that could be brought to life using eval().</li>
				<li>Use JavaScript's built in JSON object. It's fast and safe. The only disadvantage is that it's only supported in newer browsers, such as FF3.5+, IE8+, and Opera 10.5+.</li>
			</ul>

		</td>
	</tr>
	<tr>
		<td>stringify()</td>
		<td>JSON方法</td>
		<td>
			語法：
<pre>
stringify(obj, [replacer], [space])
</pre>
			Converts a JavaScript object into a JSON string. For example:
<pre>
var jsonobj={"name":"George", "age":29, "friends":["John", "Sarah", "Albert"]}
var jsonstr=JSON.stringify(jsonobj)
alert(typeof jsonstr) //string
</pre>
			This method supports two optional parameters:
			<ul>
				<li>replacer: A user defined function or array of String or Number objects that lets you screen each member within the JSON object to conditionally include as part of the string output.</li>
				<li>space: A String or Number object that inserts white space into the JSON string for readability purposes. A Number inserts "x" number of spaces (up to 10) before each name/value pair within the string. A String inserts the specified string (up to 10 characters) before each name/value pair within the string.</li>
			</ul>
			The following adds 10 white spaces to the beginning of each member inside the generated the JSON string:
<pre>
var jsonobj={"name":"George", "age":29, "friends":["John", "Sarah", "Albert"]}
var jsonstr=JSON.stringify(jsonobj, null, 10)
</pre>
			More about the replacer parameter<br><br>
			The replacer parameter can either be a function or an array of String/Numbers. It steps through each member within the JSON object to let you decide what value each member should be changed to. As a function it can return:
			<ul>
				<li>A number, string, or Boolean, which replaces the property's original value with the returned one.</li>
				<li>An object, which is serialized then returned. Object methods or functions are not allowed, and are removed instead.</li>
				<li>Null, which causes the property to be removed.</li>
			</ul>
			As an array, the values defined inside it corresponds to the names of the properties inside the JSON object that should be retained when converted into a JSON object.<br><br>
			In the below, I use a replacer function to add 1 to all numeric properties of the resulting JSON string:
<pre>
var jsonobj={"name":"George", "age":29, "friends":["John", "Sarah", "Albert"]}
var jsonstr=JSON.stringify(jsonobj, function(key, value){
	if (typeof value=="number")
		return value+1
})
//OUTPUT: '{"name":"George", "age":30, "friends":["John", "Sarah", "Albert"]}'
</pre>
		</td>
	</tr>
	<tr>
		<td>parse()</td>
		<td>JSON方法</td>
		<td>
			語法：
<pre>
parse(string, [reviver])
</pre>
			Converts a JSON string into a JavaScript object. For example:<br>
<pre>
var jsonstr='{"name":"George", "age":29, "friends":["John", "Sarah", "Albert"]}'
var george=JSON.parse(jsonstr) //convert JSON string into object
alert(george.age) //alerts 29
</pre>
			parse() supports the optional reviver parameter which is a user defined function to make further changes to the resurrected JSON object. When defined, the reviver function is applied recursively to every member of the object and replaces each one with the value returned by the function. If the reviver function returns null, the member is deleted. The reviver function is commonly used to transform ISO date strings within a JSON string into actual Date objects upon the string is converted to a JSON object.<br><br>
			In the following example, I store today's date (in milliseconds) inside an object's property:
<pre>
var jobduty={"thedate":new Date().getTime(), "thetask": "Take out garbage"}
</pre>
			When we convert this object to a JSON string then back into a JSON object, the property "thedate" by default returns a numeric representation of the date in milliseconds, not an actual date object:
<pre>
var jobstr=JSON.stringify(jobduty)
var jobjson=JSON.parse(jobstr)
alert(jobjson.thedate+" "+typeof jobjson.thedate) //12424353534566 //number
</pre>
			Using a reviver function, we can change that so the property returns an actual date representation of the date:
<pre>
var jobstr=JSON.stringify(jobduty)
var jobjson=JSON.parse(jobstr, function(key, value){
if (key=="thedate") //if "thedate" property
 return new Date(value)
else
 return value
})
alert(jobjson.thedate+" "+typeof jobjson.thedate) //alerts Tue Mar 09 2010 00:02:23 GMT-0800 (Pacific Standard Time) //object
</pre>
			In this case I check to see if the property currently being worked on is "thedate", and if so, call new Date() on the property's value to return a date object representation of it.
		</td>
	</tr>
	<tr>
		<td>toJSON()</td>
		<td>JSON方法</td>
		<td>
			toJSON() dictates how a JSON string will be serialized when JSON.stringify() is called. If this method is defined within the JSON object, its return value will be used by JSON.stringify() to form the new JSON string.<br><br>
			The below example defines a toJSON() method inside the JSON object we wish to serialize to sort any arrays within the object when it's converted into a JSON string:
<pre>
var company={}
company.name="Tasties"
company.employees=["George", "Edward", "Sarah"] //unsorted array
company.products=["Twinkies", "Hoo Hoos", "Ding Dongs"] //unsorted array

company.toJSON=function(){
	var companyfinal={} //new object
	for (var prop in this){ //loop through each property within company
		if (this[prop] instanceof Array) //if this property is an array
			companyfinal[prop]=this[prop].sort() //sort it
		else
			companyfinal[prop]=this[prop] //just return original property plus value
	}
	return companyfinal //return modified company object to be serialized
}

var jsontext = JSON.stringify(company)
alert(jsontext)

//ALERTS: {"name":"Tasties","employees":["Edward","George","Sarah"],"products":["Ding Dongs","Hoo Hoos","Twinkies"]}
</pre>
			The toJSON() object also exists natively on the Date, Number, String, and Boolean objects.
		</td>
	</tr>
</table>
</main>
</body>
</html>