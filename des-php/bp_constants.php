<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="How to Define a Constant in PHP">
	  <meta name="keywords" content="php,php basic,How to Define a Constant in PHP">
	  <meta name="author" content="webschooltoday.com">
    <title>How to Define a Constant in PHP - WebSchool Today</title>
	 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">How to Define a Constant in PHP</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_php.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="bp_echo-and-print-statements.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="bp_variables.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>PHP <span>Constants</span></h1>
                <p class="summary">In this tutorial you will learn how use constants for storing fixed values in PHP.</p>
                <h2>What is Constant in PHP</h2>
                <p>A constant is a name or an identifier for a fixed value. Constant are like variables, except that once they are defined, they cannot be undefined or changed (except <a href="bp_magic-constants.php">magic constants</a>).</p>
                <p>Constants are very useful for storing data that doesn't change while the script is running. Common examples of such data include configuration settings such as database username and password, website's base URL, company name, etc.</p>
				<p> Constants are defined using PHP's <code>define()</code> function, which accepts two arguments: the name of the constant, and its value. Once defined the constant value can be accessed at any time just by referring to its name. Here is a simple example:</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelaba077.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

&lt;?php
// Defining constant
define("SITE_URL", "https://www.webschooltoday.com/");
 
// Using constant
echo 'Thank you for visiting - ' . SITE_URL;
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
                <p>The output of the above code will be:</p>
                <div class="output-box">
                    Thank you for visiting - https://www.webschooltoday.com/
                </div>
				<p>The PHP <code>echo</code> statement is often used to display or output data to the web browser. We will learn more about this statement in the next chapter.</p>
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
						<div class="tip-box"   style="background-color:#fad28c">
							<p><strong>Important:</strong> By storing the value in a constant instead of a variable, you can make sure that the value won't get changed accidentally when your application runs.</p>
						</div>
					</div>
				</div>
				<hr />
                <h2>Naming Conventions for PHP Constants</h2>
                <p>Name of constants must follow the same rules as <a href="bp_variables.php#naming-conventions">variable names</a>, which means a valid constant name must starts with a letter or underscore, followed by any number of letters, numbers or underscores with one exception:&thinsp;the <code>$</code> prefix is not required for constant names.</p>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585"
>
                            <p><strong>Read Carefully:</strong> By convention, constant names are usually written in uppercase letters. This is for their easy identification and differentiation from variables in the source code.</p>
                        </div>
                    </div>
                </div>
                <div class="bottom-link clearfix">
                    <a href="bp_variables.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="bp_echo-and-print-statements.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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