<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="How to Create and Manipulate Strings in PHP">
	  <meta name="keywords" content="php,php basic,How to Create and Manipulate Strings in PHP">
	  <meta name="author" content="webschooltoday.com">
    <title>How to Create and Manipulate Strings in PHP - WebSchool Today</title>
	<meta name="description" content="In this tutorial you will learn how to create strings in PHP as well as how to use the PHP string functions to manipulate and perform operations on strings." />
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">How to Create and Manipulate Strings in PHP</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_php.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="bp_operators.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="bp_data-types.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>PHP <span>Strings</span></h1>
                <p class="summary">In this tutorial you will learn how to store and manipulate strings in PHP.</p>
                <h2>What is String in PHP</h2>
                <p>A string is a sequence of letters, numbers, special characters and arithmetic values or combination of all. The simplest way to create a string is to enclose the string literal (i.e. string characters) in single quotation marks ('), like this:</p>
				<div class="shadow break">
                    <div class="syntax">
						<span class="keyword">$my_string</span> = 'Hello World';
                    </div>
                </div>
                <p>You can also use double quotation marks ("). However, single and double quotation marks work in different ways. Strings enclosed in single-quotes are treated almost literally, whereas the strings delimited by the double quotes replaces variables with the string representations of their values as well as specially interpreting certain escape sequences.</p>
                <p>The escape-sequence replacements are:</p>
                <ul>
                    <li><code>\n</code> is replaced by the newline character</li>
                    <li><code>\r</code> is replaced by the carriage-return character</li>
                    <li><code>\t</code> is replaced by the tab character</li>
                    <li><code>\$</code> is replaced by the dollar sign itself (<code>$</code>)</li>
                    <li><code>\"</code> is replaced by a single double-quote (<code>"</code>)</li>
                    <li><code>\\</code> is replaced by a single backslash (<code>\</code>)</li>
                </ul>
				<p>Here's an example to clarify the differences between single and double quoted strings:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabb92f.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

&lt;?php
$my_str = 'World';
echo "Hello, $my_str!&lt;br&gt;";      // Displays: Hello World!
echo 'Hello, $my_str!&lt;br&gt;';      // Displays: Hello, $my_str!
 
echo '&lt;pre&gt;Hello\tWorld!&lt;/pre&gt;'; // Displays: Hello\tWorld!
echo "&lt;pre&gt;Hello\tWorld!&lt;/pre&gt;"; // Displays: Hello   World!
echo 'I\'ll be back';            // Displays: I'll be back
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
                <hr />
                <h2>Manipulating PHP Strings</h2>
                <p class="space">PHP provides many built-in functions for manipulating strings like calculating the length of a string, find substrings or characters, replacing part of a string with different characters, take a string apart, and many others. Here are the examples of some of these functions.</p>
                <h2>Calculating the Length of a String</h2>
                <p>The <code>strlen()</code> function is used to calculate the number of characters inside a string. It also includes the blank spaces inside the string.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab9d89.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

&lt;?php
$my_str = 'Welcome to WebSchool Today';
 
// Outputs: 28
echo strlen($my_str);
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
                <hr />
                <h2>Counting Number of Words in a String</h2>
                <p>The <code>str_word_count()</code> function counts the number of words in a string.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab69fc.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

&lt;?php
$my_str = 'The quick brown fox jumps over the lazy dog.';
 
// Outputs: 9
echo str_word_count($my_str);
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
				<h2>Replacing Text within Strings</h2>
				<p>The <code>str_replace()</code> replaces all occurrences of the search text within the target string.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabb988.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

&lt;?php
$my_str = 'If the facts do not fit the theory, change the facts.';
 
// Display replaced string
echo str_replace("facts", "truth", $my_str);
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
				<p>The output of the above code will be:</p>
                <div class="output-box">
                    If the truth do not fit the theory, change the truth.
                </div>
				<p>You can optionally pass the fourth argument to the <code>str_replace()</code> function to know how many times the string replacements was performed, like this.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabac47.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

&lt;?php
$my_str = 'If the facts do not fit the theory, change the facts.';
 
// Perform string replacement
str_replace("facts", "truth", $my_str, $count);
 
// Display number of replacements performed
echo "The text was replaced $count times.";
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
				<p>The output of the above code will be:</p>
                <div class="output-box">
                    The text was replaced 2 times.
                </div>
				<hr />
                <h2>Reversing a String</h2>
                <p>The <code>strrev()</code> function reverses a string.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab1f8a.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code6">

&lt;?php
$my_str = 'You can do anything, but not everything.';
 
// Display reversed string
echo strrev($my_str);
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
                <p>The output of the above code will be:</p>
                <div class="output-box">
                    .gnihtyreve ton tub ,gnihtyna od nac uoY
                </div>
                <hr />
                <h2>PHP String Reference</h2>
                <p>For a complete list of useful string functions, please check out <a href="../bp_reference/bp_string-functions.php">PHP String Reference</a>.</p>                
                <div class="bottom-link clearfix">
                    <a href="bp_data-types.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="bp_operators.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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