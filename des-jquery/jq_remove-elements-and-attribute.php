<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="jQuery Remove Elements and Attribute from Page">
	  <meta name="keywords" content="jquery,jq,js,jQuery Remove Elements and Attribute from Page">
	  <meta name="author" content="webschooltoday.com">
    <title>jQuery Remove Elements and Attribute from Page - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">jQuery Remove Elements and Attribute from Page</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_jquery.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="jq_add-and-remove-css-classes.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="jq_insert-content.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
				<h1>jQuery <span>Remove</span> Elements &amp; Attribute</h1>
				<p class="summary">In this tutorial you will learn how to remove the HTML elements or its contents as well as its attribute from the document using jQuery.</p>
				<h2>jQuery Remove Elements or Contents</h2>
				<p class="space">jQuery provides handful of methods, such as <code>empty()</code>, <code>remove()</code>, <code>unwrap()</code> etc. to remove existing HTML elements or contents from the document.</p>
				<h2>jQuery <code>empty()</code> Method</h2>
				<p>The jQuery <code>empty()</code> method removes all child elements as well as other descendant elements and the text content within the selected elements from the DOM.</p>
				<p>The following example will remove all the content inside of the elements with the class <code>.container</code> on click of the button.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabab01.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<script>
$(document).ready(function(){
    // Empty container element
    $("button").click(function(){
       $(".container").empty();
    });
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
				<div class="color-box space">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585"
>
							<p><strong>Read Carefully:</strong> According to the W3C (World Wide Web Consortium) DOM specification, any string of text within an element is considered a child node of that element.</p>
						</div>
					</div>
				</div>
				<hr />
				<h2>jQuery <code>remove()</code> Method</h2>
				<p>The jQuery <code>remove()</code> method removes the selected elements from the DOM as well as everything inside it. In addition to the elements themselves, all bound events and jQuery data associated with the elements are removed.</p>
				<p>The following example will remove all the <a href="../info-html/html-p-tag.php"><code>&lt;p&gt;</code></a> elements with the class <code>.hint</code> from the DOM on button click. Nested elements inside these paragraphs will be removed, too.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabbb72.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

<script>
$(document).ready(function(){
    // Removes paragraphs with class "hint" from DOM
    $("button").click(function(){
       $("p.hint").remove();
    });
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
				<p>The jQuery <code>remove()</code> method can also include a selector as an optional parameter, that allows you to filter the elements to be removed. For instance, the previous example's jQuery DOM removal code could be rewritten as follows:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab0671.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

<script>
$(document).ready(function(){
    // Removes paragraphs with class "hint" from DOM
    $("button").click(function(){
       $("p").remove(".hint");
    });
});
</script>

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
				<div class="color-box space">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585"
>
							<p><strong>Raed Carefully:</strong> You can also include selector expression as a parameter within the jQuery <code>remove()</code> method, like <code>remove(".hint, .demo")</code> to filter multiple elements.</p>
						</div>
					</div>
				</div>
				<hr />
				<h2>jQuery <code>unwrap()</code> Method</h2>
				<p>The jQuery <code>unwrap()</code> method removes the parent elements of the selected elements from the DOM. This is typically the inverse of the <a href="jq_insert-content.php"><code>wrap()</code></a> method.</p>
				<p>The following example will remove the parent element of <code>&lt;p&gt;</code> elements on button click.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab0c26.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

<script>
$(document).ready(function(){
    // Removes the paragraph's parent element
    $("button").click(function(){
       $("p").unwrap();
    });
});
</script>

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
				<hr />
				<h2>jQuery <code>removeAttr()</code> Method</h2>
				<p>The jQuery <code>removeAttr()</code> method removes an <a href="../des-html/html-attributes.php">attribute</a> from the selected elements.</p>
				<p>The example below will remove the <code>href</code> attribute form the <a href="../info-html/html-a-tag.php"><code>&lt;a&gt;</code></a> elements on button click.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab53b5.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

<script>
$(document).ready(function(){
    // Removes the hyperlink's href attribute
    $("button").click(function(){
       $("a").removeAttr("href");
    });
});
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
				<div class="bottom-link clearfix">
					<a href="jq_insert-content.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
					<a href="jq_add-and-remove-css-classes.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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