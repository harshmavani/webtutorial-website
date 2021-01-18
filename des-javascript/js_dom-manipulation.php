<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="JavaScript Manipulating Elements">
	  <meta name="keywords" content="javascript,JavaScript Manipulating Elements">
	  <meta name="author" content="webschooltoday.com">
    <title>JavaScript Manipulating Elements - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">JavaScript Manipulating Elements</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_javascript.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="js_dom-navigation.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="js_dom-get-set-attributes.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>JavaScript <span>DOM Manipulation</span></h1>
                <p class="summary">In this tutorial you will learn how to manipulate elements in JavaScript.</p>
				<h2>Manipulating DOM Elements in JavaScript</h2>
				<p class="space">Now that you've learnt how to select and style HTML DOM elements. In this chapter we will learn how to add or remove DOM elements dynamically, get their contents, and so on.</p>
                <h2>Adding New Elements to DOM</h2>
				<p>You can explicitly create new element in an HTML document, using the <code>document.createElement()</code> method. This method creates a new element, but it doesn't add it to the DOM; you'll have to do that in a separate step, as shown in the following example:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabd36d.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

                        <div id="main">
    <h1 id="title">Hello World!</h1>
    <p id="hint">This is a simple paragraph.</p>
</div>
 
<script>
// Creating a new div element 
var newDiv = document.createElement("div");
 
// Creating a text node 
var newContent = document.createTextNode("Hi, how are you doing?");
 
// Adding the text node to the newly created div
newDiv.appendChild(newContent);
 
// Adding the newly created element and its content into the DOM 
var currentDiv = document.getElementById("main"); 
document.body.appendChild(newDiv, currentDiv);
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
				<p>The <code>appendChild()</code> method adds the new element at the end of any other children of a specified parent node. However, if you want to add the new element at the beginning of any other children you can use the <code>insertBefore()</code> method, as shown in example below:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabf148.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

                        <div id="main">
    <h1 id="title">Hello World!</h1>
    <p id="hint">This is a simple paragraph.</p>
</div>
 
<script>
// Creating a new div element 
var newDiv = document.createElement("div");
 
// Creating a text node 
var newContent = document.createTextNode("Hi, how are you doing?");
 
// Adding the text node to the newly created div
newDiv.appendChild(newContent);
 
// Adding the newly created element and its content into the DOM 
var currentDiv = document.getElementById("main"); 
document.body.insertBefore(newDiv, currentDiv);
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
				<hr />
				<h2>Getting or Setting HTML Contents to DOM</h2>
				<p>You can also get or set the contents of the HTML elements easily with the <code>innerHTML</code> property. This property sets or gets the HTML markup contained within the element i.e. content between its opening and closing tags. Checkout the following example to see how it works:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab6be5.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

                        <div id="main">
    <h1 id="title">Hello World!</h1>
    <p id="hint">This is a simple paragraph.</p>
</div>
 
<script>
// Getting inner HTML conents
var contents = document.getElementById("main").innerHTML;
alert(contents); // Outputs inner html contents
 
// Setting inner HTML contents
var mainDiv = document.getElementById("main");
mainDiv.innerHTML = "<p>This is <em>newly inserted</em> paragraph.</p>";
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
				<p>As you can see how easily you can insert new elements into DOM using the <code>innerHTML</code> property, but there is one problem, the <code>innerHTML</code> property replaces all existing content of an element. So if you want to insert the HTML into the document without replacing the existing contents of an element, you can use the <code>insertAdjacentHTML()</code> method.</p>
				<p>This method accepts two parameters: the position in which to insert and the HTML text to insert. The position must be one of the following values: <code>"beforebegin"</code>, <code>"afterbegin"</code>, <code>"beforeend"</code>, and <code>"afterend"</code>. This method is supported in all major browsers.</p>
				<p>The following example shows the visualization of position names and how it works.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab95ac.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

<!-- beforebegin -->
<div id="main">
    <!-- afterbegin -->
    <h1 id="title">Hello World!</h1>
    <!-- beforeend -->
</div>
<!-- afterend -->
 
<script>
// Selecting target element
var mainDiv = document.getElementById("main");
 
// Inserting HTML just before the element itself, as a previous sibling
mainDiv.insertAdjacentHTML('beforebegin', '<p>This is paragraph one.</p>');
 
// Inserting HTML just inside the element, before its first child
mainDiv.insertAdjacentHTML('afterbegin', '<p>This is paragraph two.</p>');
 
// Inserting HTML just inside the element, after its last child
mainDiv.insertAdjacentHTML('beforeend', '<p>This is paragraph three.</p>');
 
// Inserting HTML just after the element itself, as a next sibling
mainDiv.insertAdjacentHTML('afterend', '<p>This is paragraph four.</p>');
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
				<!--Note box-->
				<div class="color-box space">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585"
>
							<p><strong>Read Carefully:</strong> The <code>beforebegin</code> and <code>afterend</code> positions work only if the node is in the DOM tree and has a parent element. Also, when inserting HTML into a page, be careful not to use user input that hasn't been escaped, to prevent XSS attacks.</p>
						</div>
					</div>
				</div>
				<!--End:Note box-->
				<hr />
				<h2>Removing Existing Elements from DOM</h2>
				<p>Similarly, you can use the <code>removeChild()</code> method to remove a child node from the DOM. This method also returns the removed node. Here's an example:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab903e.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

                        <div id="main">
    <h1 id="title">Hello World!</h1>
    <p id="hint">This is a simple paragraph.</p>
</div>

<script>
var parentElem = document.getElementById("main");
var childElem = document.getElementById("hint");
parentElem.removeChild(childElem);
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
				<p>It is also possible to remove the child element without exactly knowing the parent element. Simply find the child element and use the <code>parentNode</code> property to find its parent element. This property returns the parent of the specified node in the DOM tree. Here's an example:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabb1c3.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code6">

                        <div id="main">
    <h1 id="title">Hello World!</h1>
    <p id="hint">This is a simple paragraph.</p>
</div>
 
<script>
var childElem = document.getElementById("hint");
childElem.parentNode.removeChild(childElem);
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
                <!--End:Code box-->
				<hr />
				<h2>Replacing Existing Elements in DOM</h2>
				<p>You can also replace an element in HTML DOM with another using the <code>replaceChild()</code> method. This method accepts two parameters: the node to insert and the node to be replaced. It has the syntax like <code>parentNode.replaceChild(newChild, oldChild);</code>. Here's an example:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab3784.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code7">

                        <div id="main">
    <h1 id="title">Hello World!</h1>
    <p id="hint">This is a simple paragraph.</p>
</div>
 
<script>
var parentElem = document.getElementById("main");
var oldPara = document.getElementById("hint");
 
// Creating new elememt
var newPara = document.createElement("p");
var newContent = document.createTextNode("This is a new paragraph.");
newPara.appendChild(newContent);
 
// Replacing old paragraph with newly created paragraph
parentElem.replaceChild(newPara, oldPara);
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
                <!--End:Code box-->
				<!--Bottom Navigation-->				
                <div class="bottom-link clearfix">
                    <a href="js_dom-get-set-attributes.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="js_dom-navigation.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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