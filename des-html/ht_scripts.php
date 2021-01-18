
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="How to Add JavaScript to HTML Pages">
	  <meta name="keywords" content="css,css3,How to Add JavaScript to HTML Pages">
	  <meta name="author" content="webschooltoday.com">
    <title>How to Add JavaScript to HTML Pages - WebSchool Today</title>
    <meta name="description" content="The client side script generally a JavaScript is used to add interactivity such as popup, or display form validation alerts on the web pages." />
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">How to Add JavaScript to HTML Pages</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="ht_entities.html" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="ht_meta.html" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>HTML <span>Script</span></h1>
                <p class="summary">In this tutorial you will learn how to include JavaScript in an HTML document.</p>
                <h2>Working with Client-side Script</h2>                
                <p>Client-side scripting refers to the type of computer programs that are executed by the user's web browser. JavaScript (JS) is the most popular client-side scripting language on the web.</p>
                <p>The <code>&lt;script&gt;</code> element is used to embed or reference JavaScript within an HTML document to add interactivity to web pages and provide a significantly better user experience.</p>
                <p class="space">Some of the most common uses of JavaScript are form validation, generating alert messages, creating image gallery, show hide content, DOM manipulation, and many more.</p>
                <h2>Adding JavaScript to HTML Pages</h2>
                <p>JavaScript can either be embedded directly inside the HTML page or placed in an external script file and referenced inside the HTML page. Both methods use the <code>&lt;script&gt;</code> element. </p>
                <h2>Embedding JavaScript</h2>
                <p>To embed JavaScript in an HTML file, just add the code as the content of a <code>&lt;script&gt;</code> element.</p>
                <p>The JavaScript in the following example write a string of text to a web page.</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabeac0.html?topic=html&amp;file=embedded-javascript" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

                        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Embedding JavaScript</title>
</head>
<body>
    <div id="greet"></div>
    <script>
        document.getElementById("greet").innerHTML = "Hello World!";
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
                <!--Tip Box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"  style="background-color:#fad28c"
>
                            <p><strong>Important:</strong> Ideally, script elements should be placed at the bottom of the page, before the closing body tag i.e. <code>&lt;/body&gt;</code>, because when browser encounters a script it pauses rendering the rest of the page until it parses the script that may significantly impact your site performance.</p>
                        </div>
                    </div>
                </div>
                <!--End:Tip Box-->
                <hr />
                <h2>Calling External JavaScript File</h2>
                <p>You can also place your JavaScript code into a separate file (with a <code>.js</code> extension), and call that file in your HTML document through the <code>src</code> attribute of the <code>&lt;script&gt;</code> tag.</p>
                <p>This is useful if you want the same script available to multiple documents. It saves you from repeating the same task over and over again and makes your website much easier to maintain.</p>
                <p>The following example demonstrates how to link external JS file in HTML.</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabed5d.html?topic=html&amp;file=call-external-javascript-file" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

                        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Linking External JavaScript</title>
</head>
<body>
    <div id="greet"></div>
    <script src="hello.js"></script>
</body>
</html>
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
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> When the <code>src</code> attribute is specified, the <code>&lt;script&gt;</code> element must be empty. This simply means that you cannot use the same <code>&lt;script&gt;</code> element to both embed the JavaScript and to link to an external JavaScript file in an HTML document.</p>
                        </div>
                    </div>
                </div>
                <!--End:Note box-->
                <!--Tip Box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"  style="background-color:#fad28c"
>
                            <p><strong>Important:</strong> JavaScript files are normal text files with <code>.js</code> extension, such as "hello.js". Also, the external JavaScript file contains only JavaScript statements; it does not contain the <code>&lt;script&gt;...&lt;/script&gt;</code> element like embedded JavaScript.</p>
                        </div>
                    </div>
                </div>
                <!--End:Tip Box-->
                <hr />
                <h2>The HTML noscript Element</h2>
                <p>The <code>&lt;noscript&gt;</code> element is used to provide an alternate content for users that have either disabled JavaScript in their browser or have a browser that doesn't support client-side scripting.</p>
                <p>This element can contain any HTML elements, aside from <code>&lt;script&gt;</code>, that can be included in the <a href="../info-html/ht_body-tag.html"><code>&lt;body&gt;</code></a> element of a normal HTML page. Let's check out an example:</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabf29e.html?topic=html&amp;file=define-alternate-content-for-js-disabled-browser" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

                        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Noscript Demo</title>        
</head>
<body>
    <div id="greet"></div>
    <script>
        document.getElementById("greet").innerHTML = "Hello World!";
    </script>
    <noscript>
        <p>Oops! This website requires a JavaScript-enabled browser.</p>
    </noscript>
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
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> The content inside the <code>noscript</code> element will only be displayed if the user's browser doesn't support scripting, or scripting is disabled in the browser.</p>
                        </div>
                    </div>
                </div>
                <!--End:Note box-->
                <!--Bottom Navigation-->
                <div class="bottom-link clearfix">
                    <a href="ht_meta.html" class="previous-page-bottom"><i class="fa fa-arrow-right" aria-hidden="true"></i> Previous</a>
                    <a href="ht_entities.html" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
 Page</a>
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