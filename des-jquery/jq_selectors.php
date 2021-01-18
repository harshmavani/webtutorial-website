<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="Understanding the jQuery Selectors">
	  <meta name="keywords" content="jquery,jq,js,Understanding the jQuery Selectors">
	  <meta name="author" content="webschooltoday.com">
    <title>Understanding the jQuery Selectors - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">Understanding the jQuery Selectors</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_jquery.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="jq_events.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="jq_syntax.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
				<h1>jQuery <span>Selectors</span></h1>
				<p class="summary">In this tutorial you will learn how to select HTML elements using jQuery.</p>
				<h2>Selecting Elements with jQuery</h2>
				<p>JavaScript is most commonly used to get or modify the content or value of the HTML elements on the page, as well as to apply some effects like show, hide, animations etc. But, before you can perform any action you need to find or select the target HTML element.</p>
				<p>Selecting the elements through a typical JavaScript approach could be very painful, but the jQuery works like a magic here. The ability of making the DOM elements selection simple and easy is one of the most powerful feature of the jQuery.</p>
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
						<div class="tip-box"   style="background-color:#fad28c">
							<p><strong>Important:</strong> The jQuery supports almost all the <a href="../des-css/css-selectors.php">selectors</a> defined in the latest CSS3 specifications, as well as it has its own custom selectors. These custom selectors greatly enhance the capabilities selecting the HTML elements on a page.</p>
						</div>
					</div>
				</div>
				<p class="space">In the following sections, you will see some of the common ways of selecting the elements on a page and do something with them using the jQuery.</p>
				<h2>Selecting Elements by ID</h2>
				<p>You can use the ID selector to select a single element with the unique ID on the page.</p>
				<p>For example, the following jQuery code will select and highlight an element having the ID attribute <code>id="mark"</code>, when the document is ready to be manipulated.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabe403.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<script>
$(document).ready(function(){
    $("#mark").css("background", "yellow");
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
				<p>In the example above, the <code>$(document).ready()</code> is an event that is used to manipulate a page safely with the jQuery. Code included inside this event will only run once the page DOM is ready. We'll learn more about the events in next chapter.</p>
				<hr />
				<h2>Selecting Elements by Class Name</h2>
				<p>The class selector can be used to select the elements with a specific class.</p>
				<p>For example, the following jQuery code will select and highlight the elements having the class attribute <code>class="mark"</code>, when the document is ready.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabb6a1.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

<script>
$(document).ready(function(){
    // Highlight elements with class mark
    $(".mark").css("background", "yellow");
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
				<h2>Selecting Elements by Name</h2>
				<p>The element selector can be used to select elements based on the element name.</p>
				<p>For example, the following jQuery code will select and highlight all the paragraph i.e. the <a href="../info-html/html-p-tag.php"><code>&lt;p&gt;</code></a> elements of the document when it is ready.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab78ad.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

<script>
$(document).ready(function(){
    // Highlight paragraph elements
    $("p").css("background", "yellow");
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
				<h2>Selecting Elements by Attribute</h2>
				<p>You can use the attribute selector to select an element by one of its HTML attributes, such as a link's <code>target</code> attribute or an input's <code>type</code> attribute, etc.</p>
				<p>For example, the following jQuery code will select and highlight all the text inputs i.e. <a href="../info-html/html-input-tag.php"><code>&lt;input&gt;</code></a> elements with the <code>type="text"</code>, when the document is ready.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab7492.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

<script>
$(document).ready(function(){
    // Highlight paragraph elements
    $('input[type="text"]').css("background", "yellow");
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
				<h2>Selecting Elements by Compound CSS Selector</h2>
				<p>You can also combine the CSS selectors to make your selection even more precise.</p>
				<p>For instance, you can combine the class selector with an element selector to find the elements in a document that has certain type and class.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabdb1f.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code6">

<script>
$(document).ready(function(){
    // Highlight table rows appearing at odd places
    $("tr:odd").css("background", "yellow");
  
    // Highlight table rows appearing at even places
    $("tr:even").css("background", "orange");
  
    // Highlight first paragraph element
    $("p:first").css("background", "red");
  
    // Highlight last paragraph element
    $("p:last").css("background", "green");
  
    // Highlight all input elements with type text inside a form
    $("form :text").css("background", "purple");
  
    // Highlight all input elements with type password inside a form
    $("form :password").css("background", "blue");
  
    // Highlight all input elements with type submit inside a form
    $("form :submit").css("background", "violet");
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
				<div class="bottom-link clearfix">
					<a href="jq_syntax.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
					<a href="jq_events.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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