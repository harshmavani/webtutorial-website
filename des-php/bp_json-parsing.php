<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="How to Encode and Decode JSON Data in PHP ">
	  <meta name="keywords" content="php,php basic,How to Encode and Decode JSON Data in PHP ">
	  <meta name="author" content="webschooltoday.com">
    <title>How to Encode and Decode JSON Data in PHP - WebSchool Today</title>
    
	<style>
		.output-box {
			font-family: monospace;
			font-size: 94%;
		}
	</style>
   <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">How to Encode and Decode JSON Data in PHP </div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_php.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="bp_regular-expressions.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="bp_magic-constants.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>PHP <span>JSON Parsing</span></h1>
                <p class="summary">In this tutorial you will learn how to encode and decode JSON data in PHP.</p>
                <h2>What is JSON</h2>
                <p>JSON stands for <b>J</b>ava<b>S</b>cript <b>O</b>bject <b>N</b>otation. JSON is a standard lightweight data-interchange format which is quick and easy to parse and generate.</p>
				<p>JSON, like XML, is a text-based format that's easy to write and easy to understand for both humans and computers, but unlike XML, JSON data structures occupy less bandwidth than their XML versions. JSON is based on two basic structures:</p>
				<ul>
					<li><strong>Object:</strong> This is defined as a collection of key/value pairs (i.e. <code>key:value</code>). Each object begins with a left curly bracket <code>{</code> and ends with a right curly bracket <code>}</code>. Multiple key/value pairs are separated by a comma <code>,</code>.</li>
					<li><strong>Array:</strong> This is defined as an ordered list of values. An array begins with a left bracket <code>[</code> and ends with a right bracket <code>]</code>. Values are separated by a comma <code>,</code>.</li>
				</ul>
				<p>In JSON, keys are always strings, while the value can be a <code class="plain"><b>string</b></code>,  <code class="plain"><b>number</b></code>, <code class="plain"><b>true</b></code> or <code class="plain"><b>false</b></code>, <code class="plain"><b>null</b></code> or even an <code class="plain"><b>object</b></code> or an <code class="plain"><b>array</b></code>. Strings must be enclosed in double quotes <code>"</code> and can contain escape characters such as <code>\n</code>, <code>\t</code> and <code>\</code>. A JSON object may look like this:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="javascript:void(0);" target="_blank" class="try-btn disabled" title="Disabled">Run this code <span>&raquo;</span></a></div>
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

								</script>                    </div>
                </div>				 
				<p>Whereas an example of JSON array would look something like this:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="javascript:void(0);" target="_blank" class="try-btn disabled" title="Disabled">Run this code <span>&raquo;</span></a></div>
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

								</script>                    </div>
                </div>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"   style="background-color:#fad28c">
                            <p><strong>Important:</strong> A data-interchange format is a text format which is used to interchange or exchange data between different platforms and operating systems. JSON is the most popular and lightweight data-interchange format for web applications.</p>
                        </div>
                    </div>
                </div>
				<hr />
				<h2 class="section-title"><span>Parsing JSON with PHP</span></h2>
				<p class="space">JSON data structures are very similar to PHP arrays. PHP has built-in functions to encode and decode JSON data. These functions are <code>json_encode()</code> and <code>json_decode()</code>, respectively. Both functions only works with UTF-8 encoded string data.</p>
				<h2>Encoding JSON Data in PHP</h2>
				<p>In PHP the <code>json_encode()</code> function is used to encode a value to JSON format. The value being encoded can be any <a href="bp_data-types.php">PHP data type</a> except a resource, like a database or file handle. The below example demonstrates how to encode a <a href="bp_arrays.php">PHP associative array</a> into a JSON object:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabc183.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

&lt;?php
// An associative array
$marks = array("Peter"=>65, "Harry"=>80, "John"=>78, "Clark"=>90);
 
echo json_encode($marks);
?&gt;

	 </textarea>
		                            <script>
									var editor = CodeMirror.fromTextArea(document.getElementById("code3"), {
										mode: "text/html",
										tabMode: "indent",
										styleActiveLine: true,
										lineNumbers: true,
										lineWrapping: true
									});

								</script>
                    </div>
                </div>
				<p>The output of the above example will look like this:</p>
				<div class="output-box">
                    {"Peter":65,"Harry":80,"John":78,"Clark":90}
                </div>
				<p>Similarly, you can encode the <a href="bp_arrays.php">PHP indexed array</a> into a JSON array, like this:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab752d.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

&lt;?php
// An indexed array
$colors = array("Red", "Green", "Blue", "Orange", "Yellow");
 
echo json_encode($colors);
?&gt;

	 </textarea>
		                            <script>
									var editor = CodeMirror.fromTextArea(document.getElementById("code4"), {
										mode: "text/html",
										tabMode: "indent",
										styleActiveLine: true,
										lineNumbers: true,
										lineWrapping: true
									});

								</script>                    </div>
                </div>
				<p>The output of the above example will look like this:</p>
				<div class="output-box">
                    ["Red","Green","Blue","Orange","Yellow"]
                </div>
				<p>You can also force <code>json_encode()</code> function to return an PHP indexed array as JSON object by using the <code>JSON_FORCE_OBJECT</code> option, as shown in the example below:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab03c4.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

&lt;?php
// An indexed array
$colors = array("Red", "Green", "Blue", "Orange");
 
echo json_encode($colors, JSON_FORCE_OBJECT);
?&gt;

	 </textarea>
		                            <script>
									var editor = CodeMirror.fromTextArea(document.getElementById("code5"), {
										mode: "text/html",
										tabMode: "indent",
										styleActiveLine: true,
										lineNumbers: true,
										lineWrapping: true
									});

								</script>                    </div>
                </div>
				<p>The output of the above example will look like this:</p>
				<div class="output-box">
                    {"0":"Red","1":"Green","2":"Blue","3":"Orange"}
                </div>
				<p>As you can see in the above examples a non-associative array can be encoded as array or object. However, an associative array always encoded as object.</p>
				<hr />
				<h2>Decoding JSON Data in PHP</h2>
				<p>Decoding JSON data is as simple as encoding it. You can use the PHP <code>json_decode()</code> function to convert the JSON encoded string into appropriate PHP data type. The following example demonstrates how to decode or convert a JSON object to <a href="bp_classes-and-objects.php">PHP object</a>.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabfa96.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code6">

&lt;?php
// Store JSON data in a PHP variable
$json = '{"Peter":65,"Harry":80,"John":78,"Clark":90}';
 
var_dump(json_decode($json));
?&gt;

	 </textarea>
		                            <script>
									var editor = CodeMirror.fromTextArea(document.getElementById("code6"), {
										mode: "text/html",
										tabMode: "indent",
										styleActiveLine: true,
										lineNumbers: true,
										lineWrapping: true
									});

								</script>                    </div>
                </div>
				<p>The output of the above example will look something like this:</p>
				<div class="output-box">object(stdClass)#1 (4) { ["Peter"]=> int(65) ["Harry"]=> int(80) ["John"]=> int(78) ["Clark"]=> int(90) }</div>				
				<p>By default the <code>json_decode()</code> function returns an object. However, you can optionally specify a second parameter <code class="plain"><b>$assoc</b></code> which accepts a boolean value that when set as <code>true</code> JSON objects are decoded into associative arrays. It is <code>false</code> by default. Here's an example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab9d2c.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code7">

&lt;?php
// Store JSON data in a PHP variable
$json = '{"Peter":65,"Harry":80,"John":78,"Clark":90}';
 
var_dump(json_decode($json, true));
?&gt;

	 </textarea>
		                            <script>
									var editor = CodeMirror.fromTextArea(document.getElementById("code7"), {
										mode: "text/html",
										tabMode: "indent",
										styleActiveLine: true,
										lineNumbers: true,
										lineWrapping: true
									});

								</script>                    </div>
                </div>
				<p>The output of the above example will look something like this:</p>
				<div class="output-box">array(4) { ["Peter"]=> int(65) ["Harry"]=> int(80) ["John"]=> int(78) ["Clark"]=> int(90) }</div>
				<p>Now let's check out an example that will show you how to decode the JSON data and access individual elements of the JSON object or array in PHP.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab2d57.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code8">

&lt;?php
// Assign JSON encoded string to a PHP variable
$json = '{"Peter":65,"Harry":80,"John":78,"Clark":90}';
 
// Decode JSON data to PHP associative array
$arr = json_decode($json, true);
// Access values from the associative array
echo $arr["Peter"];  // Output: 65
echo $arr["Harry"];  // Output: 80
echo $arr["John"];   // Output: 78
echo $arr["Clark"];  // Output: 90
 
// Decode JSON data to PHP object
$obj = json_decode($json);
// Access values from the returned object
echo $obj->Peter;   // Output: 65
echo $obj->Harry;   // Output: 80
echo $obj->John;    // Output: 78
echo $obj->Clark;   // Output: 90
?&gt;

	 </textarea>
		                            <script>
									var editor = CodeMirror.fromTextArea(document.getElementById("code8"), {
										mode: "text/html",
										tabMode: "indent",
										styleActiveLine: true,
										lineNumbers: true,
										lineWrapping: true
									});

								</script>                    </div>
                </div>
				<p>You can also loop through the decoded data using <a href="bp_loops.php"><code>foreach()</code></a> loop, like this:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab14ff.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code9">

&lt;?php
// Assign JSON encoded string to a PHP variable
$json = '{"Peter":65,"Harry":80,"John":78,"Clark":90}';
 
// Decode JSON data to PHP associative array
$arr = json_decode($json, true);
 
// Loop through the associative array
foreach($arr as $key=>$value){
    echo $key . "=>" . $value . "&lt;br&gt;";
}
echo "&lt;hr&gt;";
// Decode JSON data to PHP object
$obj = json_decode($json);
 
// Loop through the object
foreach($obj as $key=>$value){
    echo $key . "=>" . $value . "&lt;br&gt;";
}
?&gt;

	 </textarea>
		                            <script>
									var editor = CodeMirror.fromTextArea(document.getElementById("code9"), {
										mode: "text/html",
										tabMode: "indent",
										styleActiveLine: true,
										lineNumbers: true,
										lineWrapping: true
									});

								</script>                    </div>
                </div>
				<hr />
				<h2>Extracting Values from Nested JSON Data in PHP</h2>
				<p>JSON objects and arrays can also be nested. A JSON object can arbitrarily contains other JSON objects, arrays, nested arrays, arrays of JSON objects, and so on. The following example will show you how to decode a nested JSON object and print all its values in PHP.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab3dc9.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        <textarea id="code10">

&lt;?php
// Define recursive function to extract nested values
function printValues($arr) {
    global $count;
    global $values;
    
    // Check input is an array
    if(!is_array($arr)){
        die("ERROR: Input is not an array");
    }
    
    /*
    Loop through array, if value is itself an array recursively call the
    function else add the value found to the output items array,
    and increment counter by 1 for each value found
    */
    foreach($arr as $key=&gt;$value){
        if(is_array($value)){
            printValues($value);
        } else{
            $values[] = $value;
            $count++;
        }
    }
    
    // Return total count and values found in array
    return array('total' =&gt; $count, 'values' =&gt; $values);
}
 
// Assign JSON encoded string to a PHP variable
$json = '{
    "book": {
        "name": "Harry Potter and the Goblet of Fire",
        "author": "J. K. Rowling",
        "year": 2000,
        "characters": ["Harry Potter", "Hermione Granger", "Ron Weasley"],
        "genre": "Fantasy Fiction",
        "price": {
            "paperback": "$10.40", "hardcover": "$20.32", "kindle": "4.11"
        }
    }
}';
// Decode JSON data into PHP associative array format
$arr = json_decode($json, true);
 
// Call the function and print all the values
$result = printValues($arr);
echo "&lt;h3&gt;" . $result["total"] . " value(s) found: &lt;/h3&gt;";
echo implode("&lt;br&gt;", $result["values"]);
 
echo "&lt;hr&gt;";
 
// Print a single value
echo $arr["book"]["author"] . "&lt;br&gt;";  // Output: J. K. Rowling
echo $arr["book"]["characters"][0] . "&lt;br&gt;";  // Output: Harry Potter
echo $arr["book"]["price"]["hardcover"];  // Output: $20.32
?&gt;

	 </textarea>
		                            <script>
									var editor = CodeMirror.fromTextArea(document.getElementById("code10"), {
										mode: "text/html",
										tabMode: "indent",
										styleActiveLine: true,
										lineNumbers: true,
										lineWrapping: true
									});

								</script>                    </div>
                </div>
                <div class="bottom-link clearfix">
                    <a href="bp_magic-constants.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="bp_regular-expressions.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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