<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="JavaScript DOM Get Set Attributes">
	  <meta name="keywords" content="javascript,js,JavaScript DOM Get Set Attributes">
	  <meta name="author" content="webschooltoday.com">
    <title>JavaScript DOM Get Set Attributes - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">JavaScript DOM Get Set Attributes</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_javascript.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="js_dom-manipulation.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="js_dom-styling.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>JavaScript DOM <span>Get Set Attributes</span></h1>
                <p class="summary">In this tutorial you will learn how to get, set and remove attributes from HTML elements in JavaScript.</p>
				<h2>Working with Attributes</h2>
				<p>The <a href="../des-html/html-attributes.php">attributes</a> are special words used inside the start tag of an HTML element to control the tag's behavior or provides additional information about the tag.</p>
				<p class="space">JavaScript provides several methods for adding, removing or changing an HTML element's attribute. In the following sections we will learn about these methods in detail.</p>
				<h2>Getting Element's Attribute Value</h2>
				<p>The <code>getAttribute()</code> method is used to get the current value of a attribute on the element.</p>
				<p>If the specified attribute does not exist on the element, it will return <code>null</code>. Here's an example:</p>
				<!--Code box-->
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab27a4.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code1">

						<a href="https://www.google.com/" target="_blank" id="myLink">Google</a>

<script>
    // Selecting the element by ID attribute
    var link = document.getElementById("myLink");
    
    // Getting the attributes values
    var href = link.getAttribute("href");
    alert(href); // Outputs: https://www.google.com/
    
    var target = link.getAttribute("target");
    alert(target); // Outputs: _blank
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
                <!--End:Code box-->
				<p>JavaScript provides several different ways to select elements on a page. Please check out the <a href="js_dom-selectors.php">JavaScript DOM selectors</a> chapter to learn more about them.</p>
				<hr />
				<h2>Setting Attributes on Elements</h2>
				<p>The <code>setAttribute()</code> method is used to set an attribute on the specified element.</p>
				<p>If the attribute already exists on the element, the value is updated; otherwise a new attribute is added with the specified name and value. The JavaScript code in the following example will add a <code>class</code> and a <code>disabled</code> attribute to the <a href="../info-html/html-button-tag.php"><code>&lt;button&gt;</code></a> element.</p>
				<!--Code box-->
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab692c.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code2">

						<button type="button" id="myBtn">Click Me</button>

<script>
    // Selecting the element
    var btn = document.getElementById("myBtn");
	
    // Setting new attributes
    btn.setAttribute("class", "click-btn");
    btn.setAttribute("disabled", "");
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
                <!--End:Code box-->
				<p>Similarly, you can use the <code>setAttribute()</code> method to update or change the value of an existing attribute on an HTML element. The JavaScript code in the following example will update the value of the existing <code>href</code> attribute of an anchor (<a href="../info-html/html-a-tag.php"><code>&lt;a&gt;</code></a>) element.</p>
				<!--Code box-->
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelaba9cc.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code3">

						<a href="#" id="myLink">WebSchool Today</a>

<script>
    // Selecting the element
    var link = document.getElementById("myLink");
	
    // Changing the href attribute value
    link.setAttribute("href", "https://www.webschooltoday.com");
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
                <!--End:Code box-->
				<hr />
				<h2>Removing Attributes from Elements</h2>
				<p>The <code>removeAttribute()</code> method is used to remove an attribute from the specified element.</p>
				<p>The JavaScript code in the following example will remove the <code>href</code> attribute from an anchor element.</p>
				<!--Code box-->
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab5b9f.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code4">

						<a href="https://www.google.com/" id="myLink">Google</a>

<script>
    // Selecting the element
    var link = document.getElementById("myLink");
	
    // Removing the href attribute
    link.removeAttribute("href");
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
                <!--End:Code box-->
				<!--Bottom Navigation-->
				<div class="bottom-link clearfix">
                    <a href="js_dom-styling.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="js_dom-manipulation.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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