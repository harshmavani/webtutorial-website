<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="JavaScript Generating Output">
	  <meta name="keywords" content="javascript,js,JavaScript Generating Output">
	  <meta name="author" content="webschooltoday.com">
    <title>JavaScript Generating Output - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">JavaScript Generating Output</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_javascript.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="js_data-types.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="js_variables.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>JavaScript <span>Generating Output</span></h1>
                <p class="summary">In this tutorial you will learn how to generate outputs in JavaScript.</p>
				<h2>Generating Output in JavaScript</h2>
				<p>There are certain situations in which you may need to generate output from your JavaScript code. For example, you might want to see the value of variable, or write a message to browser console to help you debug an issue in your running JavaScript code, and so on.</p>
				<p class="space">In JavaScript there are several different ways of generating output including writing output to the browser window or browser console, displaying output in dialog boxes, writing output into an HTML element, etc. We'll take a closer look at each of these in the following sections.</p>
				<h2>Writing Output to Browser Console</h2>
				<p>You can easily outputs a message or writes data to the browser console using the <code>console.log()</code> method. This is a simple, but very powerful method for generating detailed output. Here's an example:</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelabe35c.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code1">

						// Printing a simple text message
console.log("Hello World!"); // Prints: Hello World!

// Printing a variable value 
var x = 10;
var y = 20;
var sum = x + y;
console.log(sum); // Prints: 30
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
							<p><strong>Important:</strong> To access your web browser's console, first press <kbd>F12</kbd> key on the keyboard to open the <em>developer tools</em> then click on the console tab. It looks something like the <a href="../lib/images/chrome-browser-console.png" target="_blank">screenshot here</a>.</p>
						</div>
					</div>
				</div>
				<!--End:Tip Box-->
				<hr />
				<h2>Displaying Output in Alert Dialog Boxes</h2>
				<p>You can also use alert dialog boxes to display the message or output data to the user. An alert dialog box is created using the <code>alert()</code> method. Here's is an example:</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab71ee.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code2">

						// Displaying a simple text message
alert("Hello World!"); // Outputs: Hello World!

// Displaying a variable value 
var x = 10;
var y = 20;
var sum = x + y;
alert(sum); // Outputs: 30
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
				<hr />
				<h2>Writing Output to the Browser Window</h2>
				<p>You can use the <code>document.write()</code> method to write the content to the current document only while that document is being parsed. Here's an example:</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab7993.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code3">

						// Printing a simple text message
document.write("Hello World!"); // Prints: Hello World!

// Printing a variable value 
var x = 10;
var y = 20;
var sum = x + y;
document.write(sum); // Prints: 30
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
				<p>If you use the <code>document.write()</code> method method after the page has been loaded, it will overwrite all the existing content in that document. Check out the following example:</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelabcde5.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code4">

						<h1>This is a heading</h1>
<p>This is a paragraph of text.</p>

<button type="button" onclick="document.write('Hello World!')">Click Me</button>
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
				<hr />
				<h2>Inserting Output Inside an HTML Element</h2>
				<p>You can also write or insert output inside an HTML element using the element's <code>innerHTML</code> property. However, before writing the output first we need to <a href="js_dom-selectors.php">select the element</a> using a method such as <code>getElementById()</code>, as demonstrated in the following example:</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelabbd8a.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code5">

						<p id="greet"></p>
<p id="result"></p>

<script>
// Writing text string inside an element
document.getElementById("greet").innerHTML = "Hello World!";

// Writing a variable value inside an element
var x = 10;
var y = 20;
var sum = x + y;
document.getElementById("result").innerHTML = sum;
</script>
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
				<p>You will learn about manipulating HTML element in detail in <a href="js_dom-manipulation.php">JavaScript DOM manipulation</a> chapter.</p>
				<!--Bottom Navigation-->
				<div class="bottom-link clearfix">
                    <a href="js_variables.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="js_data-types.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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