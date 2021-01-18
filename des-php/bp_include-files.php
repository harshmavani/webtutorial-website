<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="PHP Include and Require Files">
	  <meta name="keywords" content="php,php basic,PHP Include and Require Files">
	  <meta name="author" content="webschooltoday.com">
    <title>PHP Include and Require Files - WebSchool Today</title>
	<meta name="description" content="In this tutorial you will learn how to use PHP include and require statements to include the PHP files within other PHP files to save the repetitive work." />
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">PHP Include and Require Files</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_php.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="bp_file-system.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="bp_date-and-time.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>PHP <span>Include</span> and <span>Require</span> Files</h1>
                <p class="summary">In this tutorial you will learn how to include and evaluate the files in PHP.</p>
                <h2>Including a PHP File into Another PHP File</h2>				
                <p>The <code>include()</code> and <code>require()</code> statement allow you to include the code contained in a PHP file within another PHP file. Including a file produces the same result as copying the script from the file specified and pasted into the location where it is called.</p>
				<p>You can save a lot of time and work through including files &mdash; Just store a block of code in a separate file and include it wherever you want using the <code>include()</code> and <code>require()</code> statements instead of typing the entire block of code multiple times. A typical example is including the header, footer and menu file within all the pages of a website.</p>
				<p>The basic syntax of the <code>include()</code> and <code>require()</code> statement can be given with:</p>
				<div class="shadow">
					<div class="syntax">
						<code><span class="function">include</span>("<span class="parameter">path/to/filename</span>"); -Or- <span class="function">include</span> "<span class="parameter">path/to/filename</span>";</code><br />
						<code class="alternate"><span class="function">require</span>("<span class="parameter">path/to/filename</span>"); -Or- <span class="function">require</span> "<span class="parameter">path/to/filename</span>";</code>						
					</div>
				</div>
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
						<div class="tip-box"   style="background-color:#fad28c">
							<p><strong>Important:</strong> Like the <code>print</code> and <code>echo</code> statements, you can omit the parentheses while using the <code>include</code> and <code>require</code> statements as demonstrated above.</p>
						</div>
					</div>
				</div>
				<p>The following example will show you how to include the common header, footer and menu codes which are stored in separate 'header.php', 'footer.php' and 'menu.php' files respectively, within all the pages of your website. Using this technique you can update all pages of the website at once by making the changes to just one file, this saves a lot of repetitive work.</p>
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelabeec6.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
						<textarea id="code1">

&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;title&gt;WebSchool Today&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;?php include "header.php"; ?&gt;
&lt;?php include "menu.php"; ?&gt;
    &lt;h1&gt;Welcome to Our Website!&lt;/h1&gt;
    &lt;p&gt;Here you will find lots of useful information.&lt;/p&gt;
&lt;?php include "footer.php"; ?&gt;
&lt;/body&gt;
&lt;/html&gt;

	 </textarea>
		                            <script>
									var editor = CodeMirror.fromTextArea(document.getElementById("code1"), {
										mode: "text/html",
										tabMode: "indent",
										styleActiveLine: true,
										lineNumbers: true,
										lineWrapping: true
									});

								</script>					</div>
				</div>
				<hr />
				<h2>Difference Between include and require Statements</h2>
				<p>You might be thinking if we can include files using the <code>include()</code> statement then why we need <code>require()</code>. Typically the <code>require()</code> statement operates like <code>include()</code>.</p>
				<p>The only difference is &mdash; the <code>include()</code> statement will only generate a PHP warning but allow script execution to continue if the file to be included can't be found, whereas the <code>require()</code> statement will generate a fatal error and stops the script execution.</p>
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab4080.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
						<textarea id="code2">

&lt;?php require "my_variables.php"; ?&gt;
&lt;?php require "my_functions.php"; ?&gt;
&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;title&gt;&lt;?php displayTitle($home_page); ?&gt;&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;?php include "header.php"; ?&gt;
&lt;?php include "menu.php"; ?&gt;
    &lt;h1&gt;Welcome to Our Website!&lt;/h1&gt;
    &lt;p&gt;Here you will find lots of useful information.&lt;/p&gt;
&lt;?php include "footer.php"; ?&gt;
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

								</script>
					</div>
				</div>
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
						<div class="tip-box"   style="background-color:#fad28c">
							<p><strong>Important:</strong> It is recommended to use the <code>require()</code> statement if you're including the library files or files containing the functions and configuration variables that are essential for running your application, such as <a href="bp_mysql-crud-application.php">database configuration file</a>.</p>
						</div>
					</div>
				</div>
				<hr />
				<h2>The include_once and require_once Statements</h2>
				<p>If you accidentally include the same file (typically <a href="bp_functions.php">functions</a> or <a href="bp_classes-and-objects.php">classes</a> files) more than one time within your code using the <code>include</code> or <code>require</code> statements, it may cause conflicts. To prevent this situation, PHP provides <code>include_once</code> and <code>require_once</code> statements. These statements behave in the same way as <code>include</code> and <code>require</code> statements with one exception.</p>
				<p>The <code>include_once</code> and <code>require_once</code> statements will only include the file once even if asked to include it a second time i.e. if the specified file has already been included in a previous statement, the file is not included again. To better understand how it works, let's check out an example. Suppose we've a 'my_functions.php' file with the following code:</p>
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="javascript:void(0);" target="_blank" class="try-btn disabled" title="Disabled">Run this code <span>&raquo;</span></a></div>
						<textarea id="code3">

&lt;?php
function multiplySelf($var){
    $var *= $var; // multiply variable by itself
    echo $var;
}
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

								</script>					</div>
				</div>
				<p>Here's is the PHP script within which we've included the 'my_functions.php' file.</p>
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="javascript:void(0);" target="_blank" class="try-btn disabled" title="Disabled">Run this code <span>&raquo;</span></a></div>
						<textarea id="code4">

&lt;?php
// Including file
require "my_functions.php";
// Calling the function
multiplySelf(2); // Output: 4
echo "&lt;br&gt;";
 
// Including file once again
require "my_functions.php";
// Calling the function
multiplySelf(5); // Doesn't execute
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

								</script>					</div>
				</div>
				<p>When you run the above script, you will see the error message something like this: <strong>"Fatal error: Cannot redeclare multiplySelf()"</strong>. This occurs because the 'my_functions.php' included twice, this means the function <code>multiplySelf()</code> is defined twice, which caused PHP to stop script execution and generate fatal error. Now rewrite the above example with <code>require_once</code>.</p>
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab0932.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
						<textarea id="code5">

&lt;?php
// Including file
require_once "my_functions.php";
// Calling the function
multiplySelf(2); // Output: 4
echo "&lt;br&gt;";

// Including file once again
require_once "my_functions.php";
// Calling the function
multiplySelf(5); // Output: 25
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

								</script>					</div>
				</div>
				<p>As you can see, by using <code>require_once</code> instead of <code>require</code>, the script works as we expected.</p>			
                <div class="bottom-link clearfix">
                    <a href="bp_date-and-time.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="bp_file-system.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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