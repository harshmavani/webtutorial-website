<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="How to Define a Variable in PHP">
	  <meta name="keywords" content="php,php basic,How to Define a Variable in PHP">
	  <meta name="author" content="webschooltoday.com">
    <title>How to Define a Variable in PHP - WebSchool Today</title>
	<meta name="description" content="In this tutorial you will learn how to create and use variables in PHP with the live example." />
	 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">How to Define a Variable in PHP</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_php.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="bp_constants.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="bp_syntax.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>PHP <span>Variables</span></h1>
                <p class="summary">In this tutorial you will learn how store information in a variable in PHP.</p>
                <h2>What is Variable in PHP</h2>
                <p>Variables are used to store data, like string of text, numbers, etc. Variable values can change over the course of a script. Here're some important things to know about variables:</p>
                <ul>
                    <li>In PHP, a variable does not need to be declared before adding a value to it. PHP automatically converts the variable to the correct data type, depending on its value.</li>
                    <li>After declaring a variable it can be reused throughout the code.</li>
                    <li>The assignment operator (<code>=</code>) used to assign value to a variable.</li>
                </ul>
                <p>In PHP variable can be declared as: <code>$var_name = value;</code></p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab78ee.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

&lt;?php
// Declaring variables
$txt = "Hello World!";
$number = 10;
 
// Displaying variables value
echo $txt;  // Output: Hello World!
echo $number; // Output: 10
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

							</script>
                    </div>
                </div>
                <p class="space">In the above example we have created two variables where first one has assigned with a string value and the second has assigned with a number. Later we've displayed the variables values in the browser using the <code>echo</code> statement. The PHP <a href="bp_echo-and-print-statements.php"><code>echo</code> statement</a> is often used to output data to the browser. We will learn more about this in upcoming chapter.</p>
                <h2 id="naming-conventions">Naming Conventions for PHP Variables</h2>
                <p>These are the following rules for naming a PHP variable:</p>
                <ul>
                	<li>All variables in PHP start with a <code>$</code> sign, followed by the name of the variable.</li>
                    <li>A variable name must start with a letter or the underscore character <code>_</code>.</li>
                    <li>A variable name cannot start with a number.</li>
                    <li>A variable name in PHP can only contain alpha-numeric characters and &nbsp;&nbsp; underscores (<code>A-z</code>, <code>0-9</code>, and <code>_</code>).</li>
                    <li>A variable name cannot contain spaces.</li>
                </ul>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585"
>
                            <p><strong>Read Carefully:</strong> Variable names in PHP are case sensitive, it means <code>$x</code> and <code>$X</code> are two different variables. So be careful while defining variable names.</p>
                        </div>
                    </div>
                </div>
                <div class="bottom-link clearfix">
                    <a href="bp_syntax.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="bp_constants.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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