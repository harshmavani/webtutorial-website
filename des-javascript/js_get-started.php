<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="Adding JavaScript to HTML Document">
	  <meta name="keywords" content="javascript,js,Adding JavaScript to HTML Document">
	  <meta name="author" content="webschooltoday.com">
    <title>Adding JavaScript to HTML Document - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">Adding JavaScript to HTML Document</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_javascript.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="js_syntax.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="index.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>JavaScript <span>Getting Started</span></h1>
                <p class="summary">In this tutorial you will learn how to make a JavaScript powered web page.</p>
				<h2>Getting Started with JavaScript</h2>
				<p>Here, you will learn how easy it is to add interactivity to a web page using JavaScript. But, before we begin, make sure that you have some working knowledge of HTML and CSS.</p>
				<p>If you're just starting out in the world of web development, <a href="../des-html/index.php">start learning from here &raquo;</a></p>
				<p class="space">Well, let's get started with the most popular client-side scripting language.</p>
				<h2>Adding JavaScript to Your Web Pages</h2>
				<p>There are typically three ways to add JavaScript to a web page:</p>
				<ul>
					<li>Embedding the JavaScript code between a pair of <code>&lt;script&gt;</code> and <code>&lt;/script&gt;</code> tag.</li>
					<li>Creating an external JavaScript file with the <code>.js</code> extension and then load it within the page through the <code>src</code> attribute of the <code>&lt;script&gt;</code> tag.</li>
					<li>Placing the JavaScript code directly inside an HTML tag using the special tag attributes such as <code>onclick</code>, <code>onmouseover</code>, <code>onkeypress</code>, <code>onload</code>, etc.</li>
				</ul>
				<p class="space">The following sections will describe each of these procedures in detail:</p>
				<h2>Embedding the JavaScript Code</h2>
				<p>You can embed the JavaScript code directly within your web pages by placing it between the <code>&lt;script&gt;</code> and <code>&lt;/script&gt;</code> tags. The <code>&lt;script&gt;</code> tag indicates the browser that the contained statements are to be interpreted as executable script and not HTML. Here's an example:</p>
				<!--Code box-->
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelabc65c.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code1">

						<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Embedding JavaScript</title>
</head>
<body>
    <script>
    var greet = "Hello World!";
    document.write(greet); // Prints: Hello World!
    </script>
</body>
</html>
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
				<p>The JavaScript code in the above example will simply prints a text message on the web page. You will learn what each of these JavaScript statements means in upcoming chapters.</p>
				<!--Note box-->
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585"
>
							<p><strong>Read Carefully:</strong> The <code>type</code> attribute for <code>&lt;script&gt;</code> tag (i.e. <code>&lt;script type="text/javascript"&gt;</code>) is no longer required since HTML5. JavaScript is the default scripting language for HTML5.</p>
						</div>
					</div>
				</div>
				<!--End:Note box-->
				<hr />
				<h2>Calling an External JavaScript File</h2>
				<p>You can also place your JavaScript code into a separate file with a <code>.js</code> extension, and then call that file in your document through the <code>src</code> attribute of the <code>&lt;script&gt;</code> tag, like this:</p>
				<div class="shadow">
					<div class="syntax"><span class="tag">&lt;script <span class="attribute">src</span>="<span class="attribute-value">js/hello.js</span>"&gt;</span><span class="tag">&lt;/script&gt;</span></div>
				</div>
				<p>This is useful if you want the same scripts available to multiple documents. It saves you from repeating the same task over and over again, and makes your website much easier to maintain.</p>
				<p>Well, let's create a JavaScript file named "hello.js" and place the following code in it:</p>
				<!--Code box-->
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="javascript:void(0);" target="_blank" class="try-btn disabled" title="Disabled">Try this code <span>&raquo;</span></a></div>
						<textarea id="code2">

						// A function to display a message
function sayHello() {
    alert("Hello World!");
}

// Call function on click of the button
document.getElementById("myBtn").onclick = sayHello;
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
				<p>Now, you can call this external JavaScript file within a web page using the <code>&lt;script&gt;</code> tag, like this:</p>
				<!--Code box-->
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab1413.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code3">

						<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Including External JavaScript File</title>        
</head>
<body>    
    <button type="button" id="myBtn">Click Me</button>
    <script src="js/hello.js"></script>
</body>
</html>
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
				<!--Note box-->
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585"
>
							<p><strong>Read Carefully:</strong> Usually when an external JavaScript file is downloaded for first time, it is stored in the browser's cache (just like images and style sheets), so it won't need to be downloaded multiple times from the web server that makes the web pages load more quickly.</p>
						</div>
					</div>
				</div>
				<!--End:Note box-->
				<hr />
				<h2>Placing the JavaScript Code Inline</h2>
				<p>You can also place JavaScript code inline by inserting it directly inside the HTML tag using the special tag attributes such as <code>onclick</code>, <code>onmouseover</code>, <code>onkeypress</code>, <code>onload</code>, etc.</p>
				<p>However, you should avoid placing large amount of JavaScript code inline as it clutters up your HTML with JavaScript and makes your JavaScript code difficult to maintain. Here's an example:</p>
				<!--Code box-->
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab9ae9.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code4">

						<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inlining JavaScript</title>        
</head>
<body>    
    <button onclick="alert('Hello World!')">Click Me</button>
</body>
</html>
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
				<p>The above example will show you an alert message on click of the button element.</p>
				<!--Tip Box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"   style="background-color:#fad28c">
                            <p><strong>Important:</strong> You should always keep the content and structure of your web page (i.e. HTML) separate out from presentation (CSS), and behavior (JavaScript).</p>
                        </div>
                    </div>
                </div>
                <!--End:Tip Box-->
				<hr />
				<h2>Positioning of Script inside HTML Document</h2>
				<p>The <code>&lt;script&gt;</code> element can be placed in the <code>&lt;head&gt;</code>, or <code>&lt;body&gt;</code> section of an HTML document. But ideally, scripts should be placed at the end of the body section, just before the closing <code>&lt;/body&gt;</code> tag, it will make your web pages load faster, since it prevents obstruction of initial page rendering.</p>
				<p>Each <code>&lt;script&gt;</code> tag blocks the page rendering process until it has fully downloaded and executed the JavaScript code, so placing them in the head section (i.e. <code>&lt;head&gt;</code> element) of the document without any valid reason will significantly impact your website performance.</p>
				<!--Tip Box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"   style="background-color:#fad28c">
                            <p><strong>Important:</strong> You can place any number of <code>&lt;script&gt;</code> element in a single document. However, they are processed in the order in which they appear in the document, from top to bottom.</p>
                        </div>
                    </div>
                </div>
                <!--End:Tip Box-->
				<hr />
				<h2>Difference Between Client-side and Server-side Scripting</h2>
				<p>Client-side scripting languages such as JavaScript, VBScript, etc. are interpreted and executed by the web browser, while server-side scripting languages such as PHP, ASP, Java, Python, Ruby, etc. runs on the web server and the output sent back to the web browser in HTML format.</p>
				<p>Client-side scripting has many advantages over traditional server-side scripting approach. For example, you can use JavaScript to check if the user has entered invalid data in form fields and show notifications for input errors accordingly in real-time before submitting the form to the web-server for final data validation and further processing in order to prevent unnecessary network bandwidth usages and the exploitation of server system resources.</p>
				<p>Also, response from a server-side script is slower as compared to a client-side script, because server-side scripts are processed on the remote computer not on the user's local computer.</p>
				<p>You can learn more about server-side scripting in <a href="../php-tutorial/index.php">PHP tutorial</a> section.</p>
				<!--Bottom Navigation-->
				<div class="bottom-link clearfix">
                    <a href="index.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="js_syntax.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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