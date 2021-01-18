<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="JavaScript DOM Navigation">
	  <meta name="keywords" content="javascript,JavaScript DOM Navigation">
	  <meta name="author" content="webschooltoday.com">
    <title>JavaScript DOM Navigation - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">JavaScript DOM Navigation</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_javascript.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="js_window.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="js_dom-manipulation.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>JavaScript <span>DOM Navigation</span></h1>
                <p class="summary">In this tutorial you will learn how to navigate between DOM nodes in JavaScript.</p>
				<h2>Navigating Between DOM Nodes</h2>
				<p>In the previous chapters you've learnt how to select individual elements on a web page. But there are many occasions where you need to access a child, parent or ancestor element. See the <a href="js_dom-nodes.php">JavaScript DOM nodes</a> chapter to understand the logical relationships between the nodes in a DOM tree.</p>
				<p class="space">DOM node provides several properties and methods that allow you to navigate or traverse through the tree structure of the DOM and make changes very easily. In the following section we will learn how to navigate up, down, and sideways in the DOM tree using JavaScript.</p>
				<h2>Accessing the Child Nodes</h2>
				<p>You can use the <code>firstChild</code> and <code>lastChild</code> properties of the DOM node to access the first and last direct <em>child node</em> of a node, respectively. If the node doesn't have any child element, it returns <code>null</code>.</p>
				<!--Code box-->
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab5077.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code1">

						<div id="main">
    <h1 id="title">My Heading</h1>
    <p id="hint"><span>This is some text.</span></p>
</div>

<script>
var main = document.getElementById("main");
console.log(main.firstChild.nodeName); // Prints: #text

var hint = document.getElementById("hint");
console.log(hint.firstChild.nodeName); // Prints: SPAN
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
				<!--Note box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585"
>
                            <p><strong>Read Carefully:</strong> The <code>nodeName</code> is a read-only property that returns the name of the current node as a string. For example, it returns the tag name for element node, <code>#text</code> for text node, <code>#comment</code> for comment node, <code>#document</code> for document node, and so on.</p>
                        </div>
                    </div>
                </div>
                <!--End:Note box-->
				<p>If you notice the above example, the <code>nodeName</code> of the first-child node of the main DIV element returns #text instead of H1. Because, whitespace such as spaces, tabs, newlines, etc. are valid characters and they form #text nodes and become a part of the DOM tree. Therefore, since the <code>&lt;div&gt;</code> tag contains a newline before the <code>&lt;h1&gt;</code> tag, so it will create a #text node.</p>
				<p>To avoid the issue with <code>firstChild</code> and <code><code>lastChild</code></code> returning #text or #comment nodes, you could alternatively use the <code>firstElementChild</code> and <code>lastElementChild</code> properties to return only the first and last <em>element node</em>, respectively. But, it will not work in IE 9 and earlier.</p>
				<!--Code box-->
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelabec4d.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code2">

						<div id="main">
    <h1 id="title">My Heading</h1>
    <p id="hint"><span>This is some text.</span></p>
</div>

<script>
var main = document.getElementById("main");
alert(main.firstElementChild.nodeName); // Outputs: H1
main.firstElementChild.style.color = "red";

var hint = document.getElementById("hint");
alert(hint.firstElementChild.nodeName); // Outputs: SPAN
hint.firstElementChild.style.color = "blue";
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
				<p>Similarly, you can use the <code>childNodes</code> property to access all child nodes of a given element, where the first child node is assigned index 0. Here's an example:</p>
				<!--Code box-->
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab197a.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code3">

						<div id="main">
    <h1 id="title">My Heading</h1>
    <p id="hint"><span>This is some text.</span></p>
</div>

<script>
var main = document.getElementById("main");

// First check that the element has child nodes 
if(main.hasChildNodes()) {
    var nodes = main.childNodes;
    
    // Loop through node list and display node name
    for(var i = 0; i < nodes.length; i++) {
        alert(nodes[i].nodeName);
    }
}
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
				<p>The <code>childNodes</code> returns all child nodes, including non-element nodes like text and comment nodes. To get a collection of only elements, use <code>children</code> property instead.</p>
				<!--Code box-->
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab6db9.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code4">

						<div id="main">
    <h1 id="title">My Heading</h1>
    <p id="hint"><span>This is some text.</span></p>
</div>

<script>
var main = document.getElementById("main");

// First check that the element has child nodes 
if(main.hasChildNodes()) {
    var nodes = main.children;
    
    // Loop through node list and display node name
    for(var i = 0; i < nodes.length; i++) {
        alert(nodes[i].nodeName);
    }
}
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
				<hr />
				<h2>Accessing the Parent Nodes</h2>
				<p>You can use the <code>parentNode</code> property to access the parent of the specified node in the DOM tree.</p>
				<p>The <code>parentNode</code> will always return <code>null</code> for document node, since it doesn't have a parent.</p>
				<!--Code box-->
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelabd406.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code5">

						<div id="main">
    <h1 id="title">My Heading</h1>
    <p id="hint"><span>This is some text.</span></p>
</div>

<script>
var hint = document.getElementById("hint");
alert(hint.parentNode.nodeName); // Outputs: DIV
alert(document.documentElement.parentNode.nodeName); // Outputs: #document
alert(document.parentNode); // Outputs: null
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
				<!--Tip Box-->
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
						<div class="tip-box"   style="background-color:#fad28c">
							<p><strong>Important:</strong> The topmost DOM tree nodes can be accessed directly as <code>document</code> properties. For example, the <a href="../info-html/html-html-tag.php"><code>&lt;html&gt;</code></a> element can be accessed with <code>document.documentElement</code> property, whereas the <a href="../info-html/html-head-tag.php"><code>&lt;head&gt;</code></a> element can be accessed with <code>document.head</code> property, and the <a href="../info-html/html-body-tag.php"><code>&lt;body&gt;</code></a> element can be accessed with <code>document.body</code> property.</p>
						</div>
					</div>
				</div>
				<!--End:Tip Box-->
				<p>However, if you want to get only element nodes you can use the <code>parentElement</code>, like this:</p>
				<!--Code box-->
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab9d77.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code6">

						<div id="main">
    <h1 id="title">My Heading</h1>
    <p id="hint"><span>This is some text.</span></p>
</div>

<script>
var hint = document.getElementById("hint");
alert(hint.parentNode.nodeName); // Outputs: DIV
hint.parentNode.style.backgroundColor = "yellow";
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
				<h2>Accessing the Sibling Nodes</h2>
				<p>You can use the <code>previousSibling</code> and <code>nextSibling</code> properties to access the previous and next node in the DOM tree, respectively. Here's an example:</p>
				<!--Code box-->
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab6c21.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code7">

						<div id="main">
    <h1 id="title">My Heading</h1>
    <p id="hint"><span>This is some text.</span></p><hr>
</div>

<script>
var title = document.getElementById("title");
alert(title.previousSibling.nodeName); // Outputs: #text

var hint = document.getElementById("hint");
alert(hint.nextSibling.nodeName); // Outputs: HR
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
				<p>Alternatively, you can use the <code>previousElementSibling</code> and <code>nextElementSibling</code> to get the previous and next sibling element skipping any whitespace text nodes. All these properties returns <code>null</code> if there is no such sibling. Here's an example:</p>
				<!--Code box-->
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab4bfa.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code8">

						<div id="main">
    <h1 id="title">My Heading</h1>
    <p id="hint"><span>This is some text.</span></p>
</div>

<script>
var hint = document.getElementById("hint");
alert(hint.previousElementSibling.nodeName); // Outputs: H1
alert(hint.previousElementSibling.textContent); // Outputs: My Heading

var title = document.getElementById("title");
alert(title.nextElementSibling.nodeName); // Outputs: P
alert(title.nextElementSibling.textContent); // Outputs: This is some text.
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
                <!--End:Code box-->
				<p>The <code>textContent</code> property represents the text content of a node and all of its descendants. See the <a href="js_dom-manipulation.php">JavaScript DOM manipulation</a> chapter to learn more about it.</p>
				<hr />
				<h2>Types of DOM Nodes</h2>
				<p>The DOM tree is consists of different types of nodes, such as elements, text, comments, etc.</p>
				<p>Every node has a <code>nodeType</code> property that you can use to find out what type of node you are dealing with. The following table lists the most important node types:</p>
				<div class="shadow">
					<table class="data">
						<tr>
							<th>Constant</th>
							<th>Value</th>
							<th>Description</th>
						</tr>
						<tr>
							<td><code>ELEMENT_NODE</code></td>
							<td>1</td>
							<td>An element node such as <code>&lt;p&gt;</code> or <code>&lt;img&gt;</code>.</td>
						</tr>
						<tr>
							<td><code>TEXT_NODE</code></td>
							<td>3</td>
							<td>The actual text of element.</td>
						</tr>						
						<tr>
							<td><code>COMMENT_NODE</code></td>
							<td>8</td>
							<td>A comment node i.e. <code>&lt;!-- some comment --&gt;</code></td>
						</tr>
						<tr>
							<td><code>DOCUMENT_NODE</code></td>
							<td>9</td>
							<td>A document node i.e. the parent of <code>&lt;html&gt;</code> element.</td>
						</tr>
						<tr>
							<td><code>DOCUMENT_TYPE_NODE</code></td>
							<td>10</td>
							<td>A document type node e.g. <code>&lt;!DOCTYPE html&gt;</code> for HTML5 documents.</td>
						</tr>
					</table>
				</div>
				<!--Bottom Navigation-->
				<div class="bottom-link clearfix">
                    <a href="js_dom-manipulation.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="js_window.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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