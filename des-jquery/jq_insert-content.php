<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="jQuery Insert Content Inside, Before or After an Element">
	  <meta name="keywords" content="jquery,jq,js,jQuery Insert Content Inside, Before or After an Element">
	  <meta name="author" content="webschooltoday.com">
    <title>jQuery Insert Content Inside, Before or After an Element - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">jQuery Insert Content Inside, Before or After an Element</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_jquery.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="jq_remove-elements-and-attribute.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="jq_getter-and-setter.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
				<h1>jQuery <code>Insert</code> Content</h1>
				<p class="summary">In this tutorial you will learn how to insert new elements or contents to the document using jQuery.</p>
				<h2>jQuery Insert New Content</h2>
				<p>jQuery provides several methods, like <code>append()</code>, <code>prepend()</code>, <code>html()</code>, <code>text()</code>, <code>before()</code>, <code>after()</code>, <code>wrap()</code> etc. that allows us to insert new content inside an existing element.</p>
				<p class="space">The jQuery <code>html()</code> and <code>text()</code> methods have already covered in the previous chapter, so in this chapter, we will discuss about the rest of them.</p>
				<h2>jQuery <code>append()</code> Method</h2>
				<p>The jQuery <code>append()</code> method is used to insert content to the end of the selected elements.</p>
				<p>The following example will append some HTML to all the paragraphs on document ready, whereas append some text to the container element on button click.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab70d6.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<script>
$(document).ready(function(){
    // Append all paragraphs
    $("p").append(' <a href="#">read more...</a>');
    
    // Append an element with ID container
    $("button").click(function(){
       $("#container").append("This is demo text.");
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
							<p><strong>Read Carefully:</strong> The contents or elements inserted using the jQuery <code>append()</code> and <code>prepend()</code> methods is added inside of the selected elements.</p>
						</div>
					</div>
				</div>
				<hr />
				<h2>jQuery <code>prepend()</code> Method</h2>
				<p>The <code>prepend()</code> method is used to insert content to the beginning of the selected elements.</p>
				<p>The following example will prepend some HTML to all the paragraphs on document ready, whereas prepend some text to the container element on button click.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabca1f.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

<script>
$(document).ready(function(){
    // Prepend all paragraphs
    $("p").prepend("<strong>Note:</strong> ");
    
    // Prepend an element with ID container
    $("button").click(function(){
       $("#container").prepend("This is demo text.");
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
				<hr />
				<h2>Insert Multiple Elements with <code>append()</code> &amp; <code>prepend()</code> Method</h2>
				<p>The jQuery <code>append()</code> and <code>prepend()</code> also supports passing in multiple arguments as input.</p>
				<p>The jQuery code in the following example will insert a <a href="../info-html/html-headings-tag.php"><code>&lt;h1&gt;</code></a>, <a href="../info-html/html-p-tag.php"><code>&lt;p&gt;</code></a> and an <a href="../info-html/html-img-tag.php"><code>&lt;img&gt;</code></a> element inside the <a href="../info-html/html-body-tag.php"><code>&lt;body&gt;</code></a> element as a last three child nodes.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab3f98.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

<script>
$(document).ready(function(){
    var newHeading = "<h1>Important Note:</h1>";
    var newParagraph = document.createElement("p");
    newParagraph.innerHTML = "<em>Lorem Ipsum is dummy text...</em>";
    var newImage = $('<img src="images/smiley.png" alt="Symbol">');
    $("body").append(newHeading, newParagraph, newImage);
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
				<hr />				
				<h2>jQuery <code>before()</code> Method</h2>
				<p>The jQuery <code>before()</code> method is used to insert content before the selected elements.</p>
				<p>The following example will insert a paragraph before the container element on document ready, whereas insert an image before the <code>&lt;h1&gt;</code> element on button click.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabc5fa.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

<script>
$(document).ready(function(){
    // Add content before an element with ID container
    $("#container").before("<p>&mdash; The Beginning &mdash;</p>");
    
    // Add content before headings
    $("button").click(function(){
        $("h1").before('<img src="images/marker-left.gif" alt="Symbol">');
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
				<div class="color-box space">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585"
>
							<p><strong>Read Carefully:</strong> The contents or elements inserted using the jQuery <code>before()</code> and <code>after()</code> methods is added outside of the selected elements.</p>
						</div>
					</div>
				</div>
				<hr />
				<h2>jQuery <code>after()</code> Method</h2>
				<p>The jQuery <code>after()</code> method is used to insert content after the selected elements.</p>
				<p>The following example will insert a paragraph after the container element on document ready, whereas insert an image after the <code>&lt;h1&gt;</code> element on button click.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabc5fa.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

<script>
$(document).ready(function(){
    // Add content after an element with ID container
    $("#container").after("<p>&mdash; The End &mdash;</p>");
    
    // Add content after headings
    $("button").click(function(){
        $("h1").after('<img src="images/marker-right.gif" alt="Symbol">');
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
				<hr />
				<h2>Insert Multiple Elements with <code>before()</code> &amp; <code>after()</code> Method</h2>
				<p>The jQuery <code>before()</code> and <code>after()</code> also supports passing in multiple arguments as input. The following example will insert a <code>&lt;h1&gt;</code>, <code>&lt;p&gt;</code> and an <code>&lt;img&gt;</code> element before the <code>&lt;p&gt;</code> elements.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab9aa9.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code6">

<script>
$(document).ready(function(){
    var newHeading = "<h2>Important Note:</h2>";
    var newParagraph = document.createElement("p");
    newParagraph.innerHTML = "<em>Lorem Ipsum is dummy text...</em>";
    var newImage = $('<img src="images/smiley.png" alt="Symbol">');
    $("p").before(newHeading, newParagraph, newImage);
});
</script>


  </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code6"), {
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
				<h2>jQuery <code>wrap()</code> Method</h2>
				<p>The jQuery <code>wrap()</code> method is used to wrap an HTML structure around the selected elements.</p>
				<p>The jQuery code in the following example will wrap the container elements with a <a href="../info-html/html-div-tag.php"><code>&lt;div&gt;</code></a> element with the class <code>.rg3-w</code> on document ready, whereas wrap all the inner content of the paragraph elements first with the <a href="../info-html/html-b-tag.php"><code>&lt;b&gt;</code></a> and again with <a href="../info-html/html-em-tag.php"><code>&lt;em&gt;</code></a> element.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab477e.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code7">

<script>
$(document).ready(function(){
    // Wrap elements with class container with HTML
    $(".container").wrap('<div class="rg3-w"></div>');
    
    // Wrap paragraph's content with HTML
    $("button").click(function(){
        $("p").contents().wrap("<em><b></b></em>");
    });
});
</script>


  </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code7"), {
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
					<a href="jq_getter-and-setter.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
					<a href="jq_remove-elements-and-attribute.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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