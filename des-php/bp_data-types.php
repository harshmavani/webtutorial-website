<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="Understanding the PHP Data Types">
	  <meta name="keywords" content="php,php basic,Understanding the PHP Data Types">
	  <meta name="author" content="webschooltoday.com">
    <title>Understanding the PHP Data Types - WebSchool Today</title>
    <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">Understanding the PHP Data Types</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_php.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="bp_strings.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="bp_echo-and-print-statements.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-rleftight" aria-hidden="true"></i></a>
                <h1>PHP <span>Data Types</span></h1>
                <p class="summary">In this tutorial you will learn about the data types available in PHP.</p>
                <h2>Data Types in PHP</h2>
                <p>The values assigned to a PHP variable may be of different data types including simple string and numeric types to more complex data types like arrays and objects.</p>
				<p class="space">PHP supports total eight primitive data types: Integer, Floating point number or Float, String, Booleans, Array, Object, resource and NULL. These data types are used to construct variables. Now let's discuss each one of them in detail.</p>
                <h2 id="integer">PHP Integers</h2>
                <p>Integers are whole numbers, without a decimal point  (..., -2, -1, 0, 1, 2, ...). Integers can be specified in decimal (base 10), hexadecimal (base 16 - prefixed with <code>0x</code>) or octal (base 8 - prefixed with <code>0</code>) notation, optionally preceded by a sign (<code>-</code> or <code>+</code>).</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab30e1.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

&lt;?php
$a = 123; // decimal number
var_dump($a);
echo "&lt;br&gt;";
 
$b = -123; // a negative number
var_dump($b);
echo "&lt;br&gt;";
 
$c = 0x1A; // hexadecimal number
var_dump($c);
echo "&lt;br&gt;";
 
$d = 0123; // octal number
var_dump($d);
?&gt;

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
                <div class="color-box">
                    <div class="shadow">
                    <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585"
>
                            <p><strong>Read Carefully:</strong> Since PHP 5.4+ you can also specify integers in binary (base 2) notation. To use binary notation precede the number with 0b (e.g. <code>$var = 0b11111111;</code>).</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2 id="string">PHP Strings</h2>
                <p>Strings are sequences of characters, where every character is the same as a byte.</p>
                <p>A string can hold letters, numbers, and special characters and it can be as large as up to 2GB (2147483647 bytes maximum). The simplest way to specify a string is to enclose it in single quotes (e.g. 'Hello world!'), however you can also use double quotes ("Hello world!").</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab4cbc.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

&lt;?php
$a = 'Hello world!';
echo $a;
echo "&lt;br&gt;";
 
$b = "Hello world!";
echo $b;
echo "&lt;br&gt;";
 
$c = 'Stay here, I\'ll be back.';
echo $c;
?&gt;

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
                <p>You will learn more about strings in <a href="bp_strings.php">PHP Strings</a> tutorial.</p>
                <hr />
                <h2 id="float">PHP Floating Point Numbers or Doubles</h2>
                <p>Floating point numbers (also known as "floats", "doubles", or "real numbers") are decimal or fractional numbers, like demonstrated in the example below.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab3393.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

&lt;?php
$a = 1.234;
var_dump($a);
echo "&lt;br&gt;";
 
$b = 10.2e3;
var_dump($b);
echo "&lt;br&gt;";
 
$c = 4E-10;
var_dump($c);
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

							</script>                    </div>
                </div>
                <hr />
                <h2 id="boolean">PHP Booleans</h2>
                <p>Booleans are like a switch it has only two possible values either <code>1</code> (true) or <code>0</code> (false).</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab26ef.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

&lt;?php
// Assign the value TRUE to a variable
$show_error = true;
var_dump($show_error);
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
                <hr />
                <h2 id="array">PHP Arrays</h2>
                <p>An array is a variable that can hold more than one value at a time. It is useful to aggregate a series of related items together, for example a set of country or city names.</p>
                <p>An array is formally defined as an indexed collection of data values. Each index (also known as the key) of an array is unique and references a corresponding value.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab0b9c.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

&lt;?php
$colors = array("Red", "Green", "Blue");
var_dump($colors);
echo "&lt;br&gt;";
 
$color_codes = array(
    "Red" => "#ff0000",
    "Green" => "#00ff00",
    "Blue" => "#0000ff"
);
var_dump($color_codes);
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
                <p>You will learn more about arrays in <a href="bp_arrays.php">PHP Array</a> tutorial.</p>
                <hr />
                <h2 id="object">PHP Objects</h2>
                <p>An object is a data type that not only allows storing data but also information on, how to process that data. An object is a specific instance of a class which serve as templates for objects. Objects are created based on this template via the new keyword.</p>
                <p>Every object has properties and methods corresponding to those of its parent class. Every object instance is completely independent, with its own properties and methods, and can thus be manipulated independently of other objects of the same class.</p>
                <p>Here's a simple example of a class definition followed by the object creation.</p>
                <div class="example">
                    <div class="my_codeb">
                    <div class="my_codeb-title"><h4>Example</h4><a href="../codelabdfb4.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                    <textarea id="code6">

&lt;?php
// Class definition
class greeting{
    // properties
    public $str = "Hello World!";
    
    // methods
    function show_greeting(){
        return $this->str;
    }
}
 
// Create object from class
$message = new greeting;
var_dump($message);
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
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"   style="background-color:#fad28c">
                            <p><strong>Important:</strong> The data elements stored within an object are referred to as its properties and the information, or code which describing how to process the data is called the methods of the object.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2 id="null">PHP NULL</h2>
                <p>The special NULL value is used to represent empty variables in PHP. A variable of type NULL is a variable without any data. NULL is the only possible value of type null.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabdae0.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code7">

&lt;?php
$a = NULL;
var_dump($a);
echo "&lt;br&gt;";
 
$b = "Hello World!";
$b = NULL;
var_dump($b);
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
				<p>When a variable is created without a value in PHP like <code>$var;</code> it is automatically assigned a value of null. Many novice PHP developers mistakenly considered both <code>$var1 = NULL;</code> and <code>$var2 = "";</code> are same, but this is not true. Both variables are different &mdash; the <code>$var1</code> has null value while <code>$var2</code> indicates no value assigned to it.</p>
                <hr />
                <h2 id="resource">PHP Resources</h2>
                <p>A resource is a special variable, holding a reference to an external resource.</p>
                <p>Resource variables typically hold special handlers to opened files and database connections.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab6609.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code8">

&lt;?php
// Open a file for reading
$handle = fopen("note.txt", "r");
var_dump($handle);
echo "&lt;br&gt;";
 
// Connect to MySQL database server with default setting
$link = mysqli_connect("localhost", "root", "");
var_dump($link);
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
                <div class="bottom-link clearfix">
                    <a href="bp_echo-and-print-statements.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="bp_strings.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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