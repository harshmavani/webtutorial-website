<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="Understanding the jQuery Syntax">
	  <meta name="keywords" content="jquery,jq,js,Understanding the jQuery Syntax">
	  <meta name="author" content="webschooltoday.com">
    <title>Understanding the jQuery Syntax - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">Understanding the jQuery Syntax</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_jquery.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="jq_selectors.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="jq_get-started.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
				<h1>jQuery <span>Syntax</span></h1>
				<p class="summary">In this tutorial you will learn how to write the jQuery code.</p>
				<h2>Standard jQuery Syntax</h2>
				<p>A jQuery statement typically starts with the dollar sign (<code>$</code>) and ends with a semicolon (<code>;</code>).</p>
				<p>In jQuery, the dollar sign (<code>$</code>) is just an alias for jQuery. Let's consider the following example code which demonstrates the most basic statement of the jQuery.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabc0f4.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<script>
    $(document).ready(function(){
        // Some code to be executed...
        alert("Hello World!");
    });
</script>

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
				<p class="space">The above example simply displays an alert message "Hello World!" to the user.</p>
				<h2>Explanation of code</h2>
				<p>If you are completely new to the jQuery, you might think what that code was all about. OK, let's go through each of the parts of this script one by one.</p>
				<ul>
					<li>The <code>&lt;script&gt;</code> element &mdash; Since jQuery is just a JavaScript library, so the jQuery code can be placed inside the <a href="../info-html/html-script-tag.php"><code>&lt;script&gt;</code></a> element. However, if you want to place it in an <a href="../des-html/html-scripts.php">external JavaScript file</a>, which is preferred, you just remove this part.</li>
					<li>The <code>$(document).ready(<i>handler</i>);</code> &mdash; This statement is typically known as ready event. Where the <em>handler</em> is basically a function that is  passed to the <code>ready()</code> method to be executed safely as soon as the document is ready to be manipulated i.e. when the DOM hierarchy has been fully constructed.</li>
				</ul>
				<p>The jQuery <code>ready()</code> method is typically used with an anonymous function. So, the above example can also be written in a shorthand notation like this:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab9066.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

<script>
    $(function(){
        // Some code to be executed...
        alert("Hello World!");
    });
</script>

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
				<div class="color-box break">
					<div class="shadow">
						<div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
						<div class="tip-box"   style="background-color:#fad28c">
							<p><strong>Important:</strong> You can use any syntax you like as both the syntax are equivalent. However, the document ready event is easier to understand when reading the code.</p>
						</div>
					</div>
				</div>
				<p>Further, inside an event handler function you can write the jQuery statements to perform any action following the basic syntax, like: <code>$(selector).action();</code></p>
				<p>Where, the <code>$(selector)</code> basically selects the HTML elements from the DOM tree so that it can be manipulated and the <code>action()</code> applies some action on the selected elements such as changes the CSS property value, or sets the element's contents, etc. Let's consider another example that sets the paragraph text after the DOM is ready:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab0cf3.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>jQuery Document Ready Demo</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jq_1.11.3.min.js"></script>
    <script>
        $(document).ready(function(){
            $("p").text("Hello World!");
        });
    </script>
</head>
<body>
    <p>Not loaded yet.</p>
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
				<p>In the jQuery statement of the example above (<i>line no-10</i>) the <code>p</code> is a jQuery selector which select all the paragraphs i.e. the <a href="../info-html/html-p-tag.php"><code>&lt;p&gt;</code></a> elements in the document, later the <code>text()</code> method set the paragraph's text content to "Hello World!" text.</p>
				<p>The paragraph text in the example above is replaced automatically when the document is ready. But what if we want the user to perform some action before executing the jQuery code to replace the paragraph text. Let's consider one last example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabf3fe.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>jQuery Click Handler Demo</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jq_1.11.3.min.js"></script>
    <script>
        $(document).ready(function(){
            $("button").click(function(){
                $("p").text("Hello World!");
            });            
        });
    </script>
</head>
<body>
    <p>Not loaded yet.</p>
    <button type="button">Replace Text</button>
</body>
</html>

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
				<p>In the above example the paragraph text is replaced only when a click event is occur on the "Replace Text" <a href="../info-html/html-button-tag.php"><code>&lt;button&gt;</code></a> that simply means when a user click this button.</p>
				<p>Now that you have a basic understanding of how the jQuery works, in the upcoming chapters you will learn about the terms we've discussed here in detail.</p>
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585"
>
							<p><strong>Read Carefully:</strong> You should place the jQuery code inside the document ready event so that your code executes when the document is ready to be worked on.</p>
						</div>
					</div>
				</div>
				<div class="bottom-link clearfix">
					<a href="jq_get-started.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
					<a href="jq_selectors.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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