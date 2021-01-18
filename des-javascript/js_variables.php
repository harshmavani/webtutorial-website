<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="JavaScript Variables">
	  <meta name="keywords" content="javascript,js,JavaScript Variables">
	  <meta name="author" content="webschooltoday.com">
    <title>JavaScript Variables - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">JavaScript Variables</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_javascript.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="js_generating-output.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="js_syntax.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
				<h1>JavaScript <span>Variables</span></h1>
                <p class="summary">In this tutorial you will learn how to create variables to store data in JavaScript.</p>
				<h2>What is Variable?</h2>
				<p>Variables are fundamental to all programming languages. Variables are used to store data, like string of text, numbers, etc. The data or value stored in the variables can be set, updated, and retrieved whenever needed. In general, variables are symbolic names for values.</p>
				<p>You can create a variable with the <code>var</code> keyword, whereas the assignment operator (<code>=</code>) is used to assign value to a variable, like this: <code>var varName = value;</code></p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabc225.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

                        var name = "Peter Parker";
var age = 21;
var isMarried = false;
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
				<!--Tip Box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"   style="background-color:#fad28c">
                            <p><strong>Important:</strong> Always give meaningful names to your variables. Additionally, for naming the variables that contain multiple words, camelCase is commonly used. In this convention all world after the first should have uppercase first letters, e.g. <code>myLongVariableName</code>.</p>
                        </div>
                    </div>
                </div>
                <!--End:Tip Box-->
				<p>In the above example we have created three variables, first one has assigned with a string value, the second one has assigned with a number, whereas the last one assigned with a boolean value. Variables can hold different types of data, we'll learn about them in later chapter.</p>
				<p>In JavaScript, variables can also be declared without having any initial values assigned to them. This is useful for variables which are supposed to hold values like user inputs.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab7ae4.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

                        // Declaring Variable
var userName;
 
// Assigning value
userName = "Clark Kent";
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
				<!--Note box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585"
>
                            <p><strong>Read Carefully:</strong> In JavaScript, if a variable has been declared, but has not been assigned a value explicitly, is automatically assigned the value <code>undefined</code>.</p>
                        </div>
                    </div>
                </div>
                <!--End:Note box-->
				<hr />
				<h2>Declaring Multiple Variables at Once</h2>
				<p>In addition, you can also declare multiple variables and set their initial values in a single statement. Each variable are separated by commas, as demonstrated in the following example:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabd5fb.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

                        // Declaring multiple Variables
var name = "Peter Parker", age = 21, isMarried = false;
 
/* Longer declarations can be written to span
multiple lines to improve the readability */
var name = "Peter Parker",
age = 21,
isMarried = false;
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
                <!--End:Code box-->
                <hr />
				<h2>The let and const Keywords <span class="badge js" title="New in ES6">ES6</span></h2>
				<p>ES6 introduces two new keywords <code>let</code> and <code>const</code> for declaring variables.</p>
				<p>The <code>const</code> keyword works exactly the same as <code>let</code>, except that variables declared using <code>const</code> keyword cannot be reassigned later in the code. Here's an example:</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelabe3b0.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code4">

                        // Declaring variables
let name = "Harry Potter";
let age = 11;
let isStudent = true;

// Declaring constant
const PI = 3.14;
console.log(PI); // 3.14

// Trying to reassign
PI = 10; // error
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
				<p>Unlike <code>var</code>, which declare <a href="js_functions.php#variable-scope">function-scoped variables</a>, both <code>let</code> and <code>const</code> keywords declare variables, scoped at block-level (<code>{}</code>). Block scoping means that a new scope is created between a pair of curly brackets <code>{}</code>. We'll discuss this in detail later, in <a href="js_es6-features.php">JavaScript ES6 features</a> chapter.</p>
				<!--Note box-->
                <div class="color-box">
                    <div class="shadow">
                        <div title="Important Notes" class="info-tab note-icon">&nbsp;</div>
                        <div class="note-box"  style="background-color:#ff8585"
>
                            <p><strong>Read Carefully:</strong> The <code>let</code> and <code>const</code> keywords are not supported in older browsers like IE10. IE11 support them partially. See the <a href="js_es6-features.php">JS ES6 features</a> chapter to know how to start using ES6 today.</p>
                        </div>
                    </div>
                </div>
                <!--End:Note box-->
				<hr />
				<h2>Naming Conventions for JavaScript Variables</h2>
				<p>These are the following rules for naming a JavaScript variable:</p>
				<ul>
                    <li>A variable name must start with a letter, underscore (<code>_</code>), or dollar sign (<code>$</code>).</li>
                    <li>A variable name cannot start with a number.</li>
                    <li>A variable name can only contain alpha-numeric characters (<code>A-z</code>, <code>0-9</code>) and underscores.</li>
                    <li>A variable name cannot contain spaces.</li>
					<li>A variable name cannot be a JavaScript keyword or a <a href="../info-javascript/js_reserved-keywords.php">JavaScript reserved word</a>.</li>
                </ul>
				<!--Note box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585"
>
                            <p><strong>Read Carefully:</strong> Variable names in JavaScript are case sensitive, it means <code>$myvar</code> and <code>$myVar</code> are two different variables. So be careful while defining variable names.</p>
                        </div>
                    </div>
                </div>
                <!--End:Note box-->
                <!--Bottom Navigation-->
                <div class="bottom-link clearfix">
                    <a href="js_syntax.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="js_generating-output.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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