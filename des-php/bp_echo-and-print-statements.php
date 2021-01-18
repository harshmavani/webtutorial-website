<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="PHP Echo Vs Print Statement ">
	  <meta name="keywords" content="php,php basic,PHP Echo Vs Print Statement ">
	  <meta name="author" content="webschooltoday.com">
    <title>PHP Echo Vs Print Statement - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">PHP Echo Vs Print Statement </div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_php.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <a href="bp_data-types.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="bp_constants.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>PHP <span>Echo</span> and <span>Print</span> Statements</h1>
                <p class="summary">In this tutorial you will learn how to use the PHP <code>echo</code> and <code>print</code> statements to display the output in a web browser.</p>
                <h2>The PHP echo Statement</h2>
                <p>The echo statement can output one or more strings. In general terms, the echo statement can display anything that can be displayed to the browser, such as string, numbers, variables values, the results of expressions etc.</p>
                <p>Since echo is a language construct not actually a function (like <a href="bp_if-else-statements.php"><code>if</code></a> statement), you can use it without parentheses e.g. <code>echo</code> or <code>echo()</code>. However, if you want to pass more than one parameter to echo, the parameters must not be enclosed within parentheses.</p>
                <h3>Display Strings of Text</h3>
                <p>The following example will show you how to display a string of text with the echo statement:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab8906.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

&lt;?php
// Displaying string of text
echo "Hello World!";
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
                    <p>The output of the above PHP code will look something like this:</p>
                <div class="output-box">
                    Hello World!
                </div>
                <h3>Display HTML Code</h3>
                <p>The following example will show you how to display HTML code using the echo statement:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab0681.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

&lt;?php
// Displaying HTML code
echo "&lt;h4&gt;This is a simple heading.&lt;/h4&gt;";
echo "&lt;h4 style='color: red;'&gt;This is heading with style.&lt;/h4&gt;";
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
                <p>The output of the above PHP code will look something like this:</p>
                <div class="output-box">
                    <h4 style="margin-top: 10px;">This is a simple heading.</h4>
                    <h4 style="color: red;margin-top: 10px;">This is heading with style.</h4>
                </div>
                <h3>Display Variables</h3>
                <p>The following example will show you how to display variable using the echo statement:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab38ff.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

&lt;?php
// Defining variables
$txt = "Hello World!";
$num = 123456789;
$colors = array("Red", "Green", "Blue");
 
// Displaying variables
echo $txt;
echo "&lt;br&gt;";
echo $num;
echo "&lt;br&gt;";
echo $colors[0];
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
                <p>The output of the above PHP code will look something like this:</p>
                <div class="output-box">
                    Hello World!
                    <br />
                    123456789
                    <br />
                    Red
                </div>
                <hr />
                <h2>The PHP print Statement</h2>
                <p>You can also use the print statement (an alternative to <code>echo</code>) to display output to the browser. Like echo the print is also a language construct not a real function. So you can also use it without parentheses like: <code>print</code> or <code>print()</code>.</p>
                <p>Both <code>echo</code> and <code>print</code> statement works exactly the same way except that the <code>print</code> statement can only output one string, and always returns 1. That's why the <code>echo</code> statement considered marginally faster than the <code>print</code> statement since it doesn't return any value.</p>
                <h3>Display Strings of Text</h3>
                <p>The following example will show you how to display a string of text with the print statement:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab62d2.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

&lt;?php
// Displaying string of text
print "Hello World!";
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
                <p>The output of the above PHP code will look something like this:</p>
                <div class="output-box">
                    Hello World!
                </div>
                <h3>Display HTML Code</h3>
                <p>The following example will show you how to display HTML code using the print statement:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab5a7f.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

&lt;?php
// Displaying HTML code
print "&lt;h4&gt;This is a simple heading.&lt;/h4&gt;";
print "&lt;h4 style='color: red;'&gt;This is heading with style.&lt;/h4&gt;";
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
                <p>The output of the above PHP code will look something like this:</p>
                <div class="output-box">
                    <h4 style="margin-top: 10px;">This is a simple heading.</h4>
                    <h4 style="color: red;margin-top: 10px;">This is heading with style.</h4>
                </div>
                <h3>Display Variables</h3>
                <p>The following example will show you how to display variable using the print statement:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab2d65.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code6">

&lt;?php
// Defining variables
$txt = "Hello World!";
$num = 123456789;
$colors = array("Red", "Green", "Blue");
 
// Displaying variables
print $txt;
print "&lt;br&gt;";
print $num;
print "&lt;br&gt;";
print $colors[0];
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
                <p>The output of the above PHP code will look something like this:</p>
                <div class="output-box">
                    Hello World!
                    <br />
                    123456789
                    <br />
                    Red
                </div>
                <div class="bottom-link clearfix">
                    <a href="bp_constants.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="bp_data-types.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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