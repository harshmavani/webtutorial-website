<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="PHP Syntax and Comments Overview">
	  <meta name="keywords" content="php,php basic,PHP Syntax and Comments Overview">
	  <meta name="author" content="webschooltoday.com">
    <title>PHP Syntax and Comments Overview - WebSchool Today</title>
	<meta name="description" content="In this tutorial you will learn the syntax of writing the correct PHP code and comments as well as how to embed PHP script within HTML along with live example." />
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">PHP Syntax and Comments Overview</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_php.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="bp_variables.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="bp_get-started.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>PHP <span>Syntax</span></h1>
                <p class="summary">The PHP script can be embedded within HTML web pages.</p>
                <h2>Standard PHP Syntax</h2>
                <p>A PHP script starts with the <code>&lt;?php</code> and ends with the <code>?&gt;</code> tag.</p>
                <p>The PHP delimiter <code>&lt;?php</code> and <code>?&gt;</code> in the following example simply tells the PHP engine to treat the enclosed code block as PHP code, rather than simple HTML.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab19e5.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

&lt;?php
// Some code to be executed
echo "Hello, world!";
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
				<p>Every PHP statement end with a semicolon (<code>;</code>) &mdash; this tells the PHP engine that the end of the current statement has been reached.</p>
                <hr />
                <h2>Embedding PHP within HTML</h2>
                <p>PHP files are plain text files with <code>.php</code> extension. Inside a PHP file you can write HTML like you do in regular HTML pages as well as embed PHP codes for server side execution.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab26b0.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;title&gt;A Simple PHP File&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h1&gt;&lt;?php echo "Hello, world!"; ?&gt;&lt;/h1&gt;
&lt;/body&gt;
&lt;/html&gt;

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
                <p>The above example shows how you can embed PHP codes within HTML to create well-formed dynamic web pages. If you view the source code of the resulting web page in your browser, the only difference you will see is the PHP code <code>&lt;?php echo "Hello, world!"; ?&gt;</code> has been replaced with the output "Hello, world!".</p>
                <p>What happend here is? when you run this code the PHP engine exacuted the instructions between the <code>&lt;?php &hellip; ?&gt;</code> tags and leave rest of the thing as it is. At the end the web server send the final output back to your browser which is completely in HTML.</p>
                <hr />
                <h2>PHP Comments</h2>
                <p>A comment is simply text that is ignored by the PHP engine. The purpose of comments is to make the code more readable.
        It may help other developer (or you in the future when you edit the source code) to understand what you were trying to do with the PHP.</p>
                <p>PHP support single-line as well as multi-line comments. To write a single-line comment either start the line with either two slashes (<code>//</code>) or a hash symbol (<code>#</code>). For example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab46ae.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

&lt;?php
// This is a single line comment
# This is also a single line comment
echo "Hello, world!";
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
                <p>However to write multi-line comments, start the comment with a slash followed by an asterisk (<code>/*</code>) and end the comment with an asterisk followed by a slash (<code>*/</code>), like this:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabca9b.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

&lt;?php
/*
This is a multiple line comment block
that spans across more than
one line
*/
echo "Hello, world!";
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
                <h2>Case Sensitivity in PHP</h2>
                <p>Variable names in PHP are case-sensitive. As a result the variables <code>$color</code>, <code>$Color</code> and <code>$COLOR</code> are treated as three different variables.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab252e.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

&lt;?php
// Assign value to variable
$color = "blue";
 
// Try to print variable value
echo "The color of the sky is " . $color . "&lt;br&gt;";
echo "The color of the sky is " . $Color . "&lt;br&gt;";
echo "The color of the sky is " . $COLOR . "&lt;br&gt;";
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
                <p>If you try to run the above example code it will only display the value of the variable <code>$color</code> and produce the "Undefined variable" warning for the variable <code>$Color</code> and <code>$COLOR</code>.</p>
                <p>However the keywords, function and classes names are case-insensitive. As a result calling the <code>gettype()</code> or <code>GETTYPE()</code> produce the same result.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab6d70.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code6">

&lt;?php
// Assign value to variable
$color = "blue";
 
// Get the type of a variable
echo gettype($color) . "&lt;br&gt;";
echo GETTYPE($color) . "&lt;br&gt;";
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
                <p>If you try to run the above example code both the functions <code>gettype()</code> and <code>GETTYPE()</code> gives the same output, which is: string.</p>
                <div class="bottom-link clearfix">
                    <a href="bp_get-started.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="bp_variables.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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