<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="jQuery Get or Set Contents and Values">
	  <meta name="keywords" content="jquery,jq,js,jQuery Get or Set Contents and Values">
	  <meta name="author" content="webschooltoday.com">
    <title>jQuery Get or Set Contents and Values - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">jQuery Get or Set Contents and Values</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_jquery.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="jq_insert-content.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="jq_callback.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
				<h1>jQuery <code>Getters</code> &amp; <code>Setter</code></h1>
				<p class="summary">In this tutorial you will learn how to get or set the element's content and attribute value as well as the from control value using jQuery.</p>
				<h2>jQuery Get or Set Contents and Values</h2>
				<p>Some jQuery methods can be used to either assign or read some value on a selection. A few of these methods are <code>text()</code>, <code>html()</code>, <code>attr()</code>, and <code>val()</code>.</p>
				<p class="space">When these methods are called with no argument, it is referred to as a <em>getters</em>, because it gets (or reads) the value of the element. When these methods are called with a value as an argument, it's referred to as a <em>setter</em> because it sets (or assigns) that value.</p>
				<h2>jQuery <code>text()</code> Method</h2>
				<p>The jQuery <code>text()</code> method is either used to get the combined text contents of the selected elements, including their descendants, or set the text contents of the selected elements.</p>
				<h3>Get Contents with <code>text()</code> Method</h3>
				<p>The following example will show you how to get the text contents of paragraphs:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabecfd.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<script>
$(document).ready(function(){
    // Get combined text contents of all paragraphs
    $(".btn-one").click(function(){
        var str = $("p").text();
        alert(str);
    });
    
    // Get text contents of the first paragraph
    $(".btn-two").click(function(){
       var str = $("p:first").text();
       alert(str);
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
							<p><strong>Read Carefully:</strong> The jQuery <code>text()</code> retrieves the values of all the selected elements (i.e. combined text), whereas the other getters such as <code>html()</code>, <code>attr()</code>, and <code>val()</code> returns the value only from the first element in the selection.</p>
						</div>
					</div>
				</div>
				<h3>Set Contents with <code>text()</code> Method</h3>
				<p>The following example will show you how to set the text contents of a paragraph:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabec4a.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

<script>
$(document).ready(function(){
    // Set text contents of all paragraphs
    $(".btn-one").click(function(){
        $("p").text("This is demo text.");
    });
    
    // Set text contents of the first paragraph
    $(".btn-two").click(function(){
        $("p:first").text("This is another demo text.");
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
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585"
>
							<p><strong>Read Carefully:</strong> When the jQuery <code>text()</code>, <code>html()</code>, <code>attr()</code>, and <code>val()</code> methods are called with a value as an argument it sets that value to every matched element.</p>
						</div>
					</div>
				</div>
				<hr />
				<h2>jQuery <code>html()</code> Method</h2>
				<p>The jQuery <code>html()</code> method is used to get or set the HTML contents of the elements.</p>
				<h3>Get HTML Contents with <code>html()</code> Method</h3>
				<p>The following example will show you how to get the HTML contents of the paragraph elements as well as a <a href="../info-html/html-div-tag.php"><code>&lt;div&gt;</code></a> element container:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelaba9d8.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

<script>
$(document).ready(function(){
    // Get HTML contents of first selected paragraph
    $(".btn-one").click(function(){
        var str = $("p").php();
        alert(str);
    });
    
    // Get HTML contents of an element with ID container
    $(".btn-two").click(function(){
        var str = $("#container").php();
        alert(str);
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
							<p><strong>Read Carefully:</strong> If multiple elements are selected, the <code>html()</code> method only returns the HTML contents of the first element from the set of matched elements.</p>
						</div>
					</div>
				</div>
				<h3>Set HTML Contents with <code>html()</code> Method</h3>
				<p>The following example will show you how to set the HTML contents of the <a href="../info-html/html-body-tag.php"><code>&lt;body&gt;</code></a> element:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab44ca.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

<script>
$(document).ready(function(){
    // Set HTML contents for document's body
    $("button").click(function(){
        $("body").php("<p>Hello World!</p>");
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
				<h2>jQuery <code>attr()</code> Method</h2>
				<p>You can use the jQuery <code>attr()</code> method to either get the value of an element's attribute or set one or more attributes for the selected element.</p>
				<h3>Get Attribute Value with <code>attr()</code> Method</h3>
				<p>The following example will show you how get the <code>href</code> attribute of the hyperlink i.e. the <a href="../info-html/html-a-tag.php"><code>&lt;a&gt;</code></a> element as well as the alt attribute of an <a href="../info-html/html-img-tag.php"><code>&lt;img&gt;</code></a> element:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab183e.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

<script>
$(document).ready(function(){
    // Get href attribute value of first selected hyperlink
    $(".btn-one").click(function(){
        var str = $("a").attr("href");
        alert(str);
    });
    
    // Get alt attribute value of an image with ID sky
    $(".btn-two").click(function(){
        var str = $("img#sky").attr("alt");
        alert(str);
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
				<div class="color-box space">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585"
>
							<p><strong>Read Carefully:</strong> If multiple elements are selected, the <code>attr()</code> method only returns the attribute value of the first element from the set of matched elements.</p>
						</div>
					</div>
				</div>
				<h3>Set Attributes with <code>attr()</code> Method</h3>
				<p>The following example will show you how to set the <code>checked</code> attribute of the checkbox.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabfd4b.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

<script>
$(document).ready(function(){
    // Check all the checkboxes
    $("button").click(function(){
        $('input[type="checkbox"]').attr("checked", "checked");
    });
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
				<p>The <code>attr()</code> method also allows you to set multiple attributes at a time. The following example will show you how to set the <code>class</code> and <code>title</code> attribute for the <code>&lt;img&gt;</code> elements.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab6afa.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code7">

<script>
$(document).ready(function(){
    // Add a class and title attribute to all the images
    $("button").click(function(){
        $("img").attr({
            "class" : "frame",
            "title" : "Hot Air Balloons"
        });
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
				<hr />
				<h2>jQuery <code>val()</code> Method</h2>
				<p>The jQuery <code>val()</code> method is mainly used to get or set the current value of the <a href="../des-html/html-forms.php">HTML form elements</a> such as <a href="../info-html/html-input-tag.php"><code>&lt;input&gt;</code></a>, <a href="../info-html/html-select-tag.php"><code>&lt;select&gt;</code></a> and <a href="../info-html/html-textarea-tag.php"><code>&lt;textarea&gt;</code></a>.</p>
				<h3>Get the Values of Form Fields with <code>val()</code> Method</h3>
				<p>The following example will show you how to get the values of form controls:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab204a.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code8">

<script>
$(document).ready(function(){
    // Get value of a text input with ID name
    $("button.get-name").click(function(){
        var name = $('input[type="text"]#name').val();
        alert(name);
    });
    
    // Get value of a textarea with ID comment
    $("button.get-comment").click(function(){
        var comment = $("textarea#comment").val();
        alert(comment);
    });
    
    // Get value of a select box with ID city
    $("button.get-city").click(function(){
        var city = $("select#city").val();
        alert(city);
    });
});
</script>

  </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code8"), {
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
							<p><strong>Read Carefully:</strong> If multiple form elements are selected, the <code>val()</code> method only returns the value of the first element from the set of matched elements.</p>
						</div>
					</div>
				</div>
				<h3>Set the Values of Form Fields with <code>val()</code> Method</h3>
				<p>The following example will show you how to set the values of the form controls:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab19e3.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code9">

<script>
$(document).ready(function(){
    // Set value of all the text inputs
    $("button").click(function(){
        var text = $(this).text();
        $('input[type="text"]').val(text);
    });
});
</script>

  </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code9"), {
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
					<a href="jq_callback.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
					<a href="jq_insert-content.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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