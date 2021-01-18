<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="JavaScript JSON Parsing">
	  <meta name="keywords" content="javascript,js,JavaScript JSON Parsing">
	  <meta name="author" content="webschooltoday.com">
    <title>JavaScript JSON Parsing - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">JavaScript JSON Parsing</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_javascript.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="js_error-handling.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="js_strict-mode.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>JavaScript <span>JSON Parsing</span></h1>
                <p class="summary">In this tutorial you will learn how to encode and decode JSON data in JavaScript.</p>
				<h2>What is JSON</h2>
                <p>JSON stands for <b>J</b>ava<b>S</b>cript <b>O</b>bject <b>N</b>otation. JSON is extremely lightweight data-interchange format for data exchange between server and client which is quick and easy to parse and generate.</p>
				<p>Like XML, JSON is also a text-based format that's easy to write and easy to understand for both humans and computers, but unlike XML, JSON data structures occupy less bandwidth than their XML versions. JSON is based on two basic structures:</p>
				<ul>
					<li><strong>Object:</strong> This is defined as an unordered collection of key/value pairs (i.e. <code>key:value</code>). Each object begins with a left curly bracket <code>{</code> and ends with a right curly bracket <code>}</code>. Multiple key/value pairs are separated by a comma <code>,</code>.</li>
					<li><strong>Array:</strong> This is defined as an ordered list of values. An array begins with a left bracket <code>[</code> and ends with a right bracket <code>]</code>. Values are separated by a comma <code>,</code>.</li>
				</ul>
				<p>In JSON, property names or keys are always strings, while the value can be a <code class="plain"><b>string</b></code>,  <code class="plain"><b>number</b></code>, <code class="plain"><b>true</b></code> or <code class="plain"><b>false</b></code>, <code class="plain"><b>null</b></code> or even an <code class="plain"><b>object</b></code> or an <code class="plain"><b>array</b></code>. Strings must be enclosed in double quotes <code>"</code> and can contain escape characters such as <code>\n</code>, <code>\t</code> and <code>\</code>. A JSON object may look like this:</p>
				<!--Code box-->
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab1ec9.php?topic=javascript&amp;file=json-object" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code1">

						{
    "book": {
        "name": "Harry Potter and the Goblet of Fire",
        "author": "J. K. Rowling",
        "year": 2000,
        "genre": "Fantasy Fiction",
        "bestseller": true
    }
}
     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code1"), {
									mode: "text/html",
									tabMode: "indent",
									styleActiveLine: true,
									lineNumbers: true,
									lineWrapping: true
								});
							</script>
					</div>
				</div>
                <!--End:Code box-->
				<p>Whereas an example of JSON array would look something like this:</p>
				<!--Code box-->
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab6f98.php?topic=javascript&amp;file=json-array" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code2">

						{
    "fruits": [
        "Apple",
        "Banana",
        "Strawberry",
        "Mango"
    ]
}
     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code2"), {
									mode: "text/html",
									tabMode: "indent",
									styleActiveLine: true,
									lineNumbers: true,
									lineWrapping: true
								});
							</script>
					</div>
				</div>
                <!--End:Code box-->
				<!--Tip Box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"   style="background-color:#fad28c">
                            <p><strong>Important:</strong> A data-interchange format is a text format which is used to interchange or exchange data between different platforms and operating systems. JSON is the most popular and lightweight data-interchange format for web applications.</p>
                        </div>
                    </div>
                </div>
                <!--End:Tip Box-->
				<hr />
				<h2>Parsing JSON Data in JavaScript</h2>
				<p>In JavaScript, you can easily parse JSON data received from the web server using the <code>JSON.parse()</code> method. This method parses a JSON string and constructs the JavaScript value or object described by the string. If the given string is not valid JSON, you will get a syntax error.</p>
				<p>Let's suppose we've received the following JSON-encoded string from a web server:</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelabe889.php?topic=javascript&amp;file=json-string" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code3">

						{"name": "Peter", "age": 22, "country": "United States"}

     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code3"), {
									mode: "text/html",
									tabMode: "indent",
									styleActiveLine: true,
									lineNumbers: true,
									lineWrapping: true
								});
							</script>					</div>
				</div>
                <!--End:Code box-->				
				<p>Now, we can simply use the JavaScript <code>JSON.parse()</code> method to convert this JSON string into a JavaScript object and access individual values using the dot notation (<code>.</code>), like this:</p>
				<!--Code box-->
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab50bc.php?topic=javascript&amp;file=convert-json-string-to-js-object-and-access-individual-values" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code4">

						// Store JSON data in a JS variable
var json = '{"name": "Peter", "age": 22, "country": "United States"}';

// Converting JSON-encoded string to JS object
var obj = JSON.parse(json);

// Accessing individual value from JS object
alert(obj.name); // Outputs: Peter
alert(obj.age); // Outputs: 22
alert(obj.country); // Outputs: United States
     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code4"), {
									mode: "text/html",
									tabMode: "indent",
									styleActiveLine: true,
									lineNumbers: true,
									lineWrapping: true
								});
							</script>
					</div>
				</div>
                <!--End:Code box-->
				<p>Please check out the tutorial on <a href="../php-tutorial/php-json-parsing.php">PHP JSON parsing</a> to learn, how to return JSON data from a web server in response, as well as, how to encode/decode JSON data on server side using PHP.</p>
				<hr />
				<h2>Parsing Nested JSON Data in JavaScript</h2>
				<p>JSON objects and arrays can also be nested. A JSON object can arbitrarily contains other JSON objects, arrays, nested arrays, arrays of JSON objects, and so on. The following example will show you how to parse a nested JSON object and extract all the values in JavaScript.</p>
				<!--Code box-->
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelabd3fe.php?topic=javascript&amp;file=parse-nested-json-data" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code5">

						/* Storing multi-line JSON string in a JS variable
using the new ES6 template literals */
var json = `{
    "book": {
        "name": "Harry Potter and the Goblet of Fire",
        "author": "J. K. Rowling",
        "year": 2000,
        "characters": ["Harry Potter", "Hermione Granger", "Ron Weasley"],
        "genre": "Fantasy Fiction",
        "price": {
            "paperback": "$10.40", "hardcover": "$20.32", "kindle": "$4.11"
        }
    }
}`;

// Converting JSON object to JS object
var obj = JSON.parse(json);

// Define recursive function to print nested values
function printValues(obj) {
    for(var k in obj) {
        if(obj[k] instanceof Object) {
            printValues(obj[k]);
        } else {
            document.write(obj[k] + "<br>");
        };
    }
};

// Printing all the values from the resulting object
printValues(obj);

document.write("<hr>");

// Printing a single value
document.write(obj["book"]["author"] + "<br>");  // Prints: J. K. Rowling
document.write(obj["book"]["characters"][0] + "<br>");  // Prints: Harry Potter
document.write(obj["book"]["price"]["hardcover"]);  // Prints: $20.32
     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code5"), {
									mode: "text/html",
									tabMode: "indent",
									styleActiveLine: true,
									lineNumbers: true,
									lineWrapping: true
								});
							</script>
					</div>
				</div>
                <!--End:Code box-->
				<hr />
				<h2>Encoding Data as JSON in JavaScript</h2>
				<p>Sometimes JavaScript object or value from your code need to be transferred to the server during an Ajax communication. JavaScript provides <code>JSON.stringify()</code> method for this purpose which converts a JavaScript value to a JSON string, as shown below:</p>
				<h3>Stringify a JavaScript Object</h3>
				<p>The following example will show you how to convert a JavaScript object to JSON string:</p>
				<!--Code box-->
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelabab6c.php?topic=javascript&amp;file=convert-js-object-to-json-string" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code6">

						// Sample JS object
var obj = {"name": "Peter", "age": 22, "country": "United States"};

// Converting JS object to JSON string
var json = JSON.stringify(obj);
alert(json);
     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code6"), {
									mode: "text/html",
									tabMode: "indent",
									styleActiveLine: true,
									lineNumbers: true,
									lineWrapping: true
								});
							</script>
					</div>
				</div>
                <!--End:Code box-->
				<p>The output of the above example will look something like this:</p>
				<div class="output-box">
                    {"name":"Peter","age":22,"country":"United States"}
                </div>
				<!--Note box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585"
>
                            <p><strong>Read Carefully:</strong> Although, JavaScript and JSON objects look quite similar, but they are not exactly the same. For example, in JavaScript, object property names can be enclosed in single quotes (<code>'...'</code>)
or double quotes (<code>"..."</code>), or you can omit the quotes altogether. But, in JSON, all property names must be enclosed in double quotes.</p>
                        </div>
                    </div>
                </div>
                <!--End:Note box-->
				<h3>Stringify a JavaScript Array</h3>
				<p>Similarly, you can convert the JavaScript arrays to JSON strings, like this:</p>
				<!--Code box-->
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelaba582.php?topic=javascript&amp;file=convert-js-array-to-json-string" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code7">

						// Sample JS array
var arr = ["Apple", "Banana", "Mango", "Orange", "Papaya"];

// Converting JS array to JSON string
var json = JSON.stringify(arr);
alert(json);
     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code7"), {
									mode: "text/html",
									tabMode: "indent",
									styleActiveLine: true,
									lineNumbers: true,
									lineWrapping: true
								});
							</script>
					</div>
				</div>
                <!--End:Code box-->
				<p>The output of the above example will look something like this:</p>
				<div class="output-box">
                    ["Apple","Banana","Mango","Orange","Papaya"]
                </div>
				<!--Note box-->
				<!--Warning box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab warning-icon" title="Warning"><i></i></div>
                        <div class="warning-box"  style="background-color:#ff8585"
>
                            <p><strong>Read Carefully:</strong> Do not use <code>eval()</code> function to evaluate JSON data (e.g., including function definitions in JSON string and converting them back into executable functions with <code>eval()</code> method), as it allows attacker to inject malicious JavaScript code into your application.</p>
                        </div>
                    </div>
                </div>
                <!--End:Warning box-->
				<!--Bottom Navigation-->
				<div class="bottom-link clearfix">
                    <a href="js_strict-mode.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="js_error-handling.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
            </div>
        </div>        
        <div class="sidebar">
            
        </div>
    </div> 
</div>
	<?php include "../footer.php" ?>

</body>
</html>