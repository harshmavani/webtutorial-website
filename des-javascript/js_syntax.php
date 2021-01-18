<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="JavaScript Syntax">
	  <meta name="keywords" content="javascript,js,JavaScript Syntax">
	  <meta name="author" content="webschooltoday.com">
    <title>JavaScript Syntax - WebSchool Today</title>
	 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">JavaScript Syntax</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_javascript.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="js_variables.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="js_get-started.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>JavaScript <span>Syntax</span></h1>
                <p class="summary">In this tutorial you will learn how to write the JavaScript code.</p>
				<h2>Understanding the JavaScript Syntax</h2>
				<p>The syntax of JavaScript is the set of rules that define a correctly structured JavaScript program.</p>
				<p>A JavaScript consists of JavaScript statements that are placed within the <code>&lt;script&gt;&lt;/script&gt;</code> HTML tags in a web page, or within the external JavaScript file having <code>.js</code> extension.</p>
				<p>The following example shows how JavaScript statements look like:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab46f0.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

                        var x = 5;
var y = 10;
var sum = x + y;
document.write(sum); // Prints variable value
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
				<p>You will learn what each of these statements means in upcoming chapters.</p>
				<hr />
				<h2>Case Sensitivity in JavaScript</h2>
				<p>JavaScript is case-sensitive. This means that variables, language keywords, function names, and other identifiers must always be typed with a consistent capitalization of letters.</p>
				<p>For example, the variable <code>myVar</code> must be typed <code>myVar</code> not <code>MyVar</code> or <code>myvar</code>. Similarly, the method name <code>getElementById()</code> must be typed with the exact case not as <code>getElementByID()</code>.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab9718.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

                        var myVar = "Hello World!";
console.log(myVar);
console.log(MyVar);
console.log(myvar);
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
				<p>If you checkout the browser console by pressing the <code>f12</code> key on the keyboard, you'll see a line something like this:  "Uncaught ReferenceError: MyVar is not defined".</p>
				<hr />
				<h2 id="comments">JavaScript Comments</h2>
				<p>A comment is simply a line of text that is completely ignored by the JavaScript interpreter. Comments are usually added with the purpose of providing extra information pertaining to source code. It will not only help you understand your code when you look after a period of time but also others who are working with you on the same project.</p>
				<p>JavaScript support single-line as well as multi-line comments. Single-line comments begin with a double forward slash (<code>//</code>), followed by the comment text. Here's an example:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab30d2.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

                        // This is my first JavaScript program
document.write("Hello World!");
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
				<p>Whereas, a multi-line comment begins with a slash and an asterisk (<code>/*</code>) and ends with an asterisk and slash (<code>*/</code>). Here's an example of a multi-line comment.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabee4a.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

                        /* This is my first program 
in JavaScript */
document.write("Hello World!");
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
				<!--Bottom Navigation-->
                <div class="bottom-link clearfix">
                    <a href="js_get-started.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="js_variables.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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