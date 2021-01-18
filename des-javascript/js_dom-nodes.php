<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="JavaScript DOM Nodes">
	  <meta name="keywords" content="javascript,js,JavaScript DOM Nodes">
	  <meta name="author" content="webschooltoday.com">
    <title>JavaScript DOM Nodes - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">JavaScript DOM Nodes</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_javascript.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="js_dom-selectors.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="js_objects.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>JavaScript <span>DOM Nodes</span></h1>
                <p class="summary">In this tutorial you will learn the concept of Document Object Model, or DOM.</p>
				<h2>Understanding the Document Object Model</h2>
				<p>The Document Object Model, or DOM for short, is a platform and language independent model to represent the HTML or XML documents. It defines the logical structure of the documents and the way in which they can be accessed and manipulated by an application program.</p>
				<p>In the DOM, all parts of the document, such as elements, attributes, text, etc. are organized in a hierarchical tree-like structure; similar to a family tree in real life that consists of parents and children. In DOM terminology these individual parts of the document are known as <em>nodes</em>.</p>
				<p>The Document Object Model that represents HTML document is referred to as HTML DOM. Similarly, the DOM that represents the XML document is referred to as XML DOM.</p>
                <p>In this chapter we'll cover the HTML DOM which provides a standard interface for accessing and manipulating HTML documents through JavaScript. With the HTML DOM, you can use JavaScript to build HTML documents, navigate their hierarchical structure, and add, modify, or delete elements and attributes or their content, and so on. Almost anything found in an HTML document can be accessed, changed, deleted, or added using the JavaScript with the help of HTML DOM.<p>
				<p>To understand this more clearly, let's consider the following simple HTML document:</p>
				<!--Code box-->
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab12d7.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code1">

						<!DOCTYPE html>
<html>
<head>
    <title>My Page</title>
</head>
<body>
    <h1>Mobile OS</h1>
    <ul>
        <li>Android</li>
        <li>iOS</li>
    </ul>
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
				<p>The above HTML document can be represented by the following DOM tree:</p>
				<div class="illustration">
					<img src="../assets/images/tree1.png" alt="HTML DOM Tree" />
				</div>				
				<p>The above diagram demonstrates the parent/child relationships between the nodes. The topmost node i.e. the Document node is the root node of the DOM tree, which has one child, the <code>&lt;html&gt;</code> element. Whereas, the <code>&lt;head&gt;</code> and <code>&lt;body&gt;</code> elements are the child nodes of the <code>&lt;html&gt;</code> parent node.</p>
				<p>The <code>&lt;head&gt;</code> and <code>&lt;body&gt;</code> elements are also siblings since they are at the same level. Further, the text content inside an element is a child node of the parent element. So, for example, "Mobile OS" is considered as a child node of the <code>&lt;h1&gt;</code> that contains it, and so on.</p>
				<p><a href="js_syntax.php#comments">Comments</a> inside the HTML document are nodes in the DOM tree as well, even though it doesn't affect the visual representation of the document in any way. Comments are useful for documenting the code, however, you will rarely need to retrieve and manipulate them.</p>
				<p>HTML attributes such as <code>id</code>, <code>class</code>, <code>title</code>, <code>style</code>, etc. are also considered as nodes in DOM hierarchy but they don't participate in parent/child relationships like the other nodes do. They are accessed as properties of the element node that contains them.</p>
				<p>Each element in an HTML document such as image, hyperlink, form, button, heading, paragraph, etc. is represented using a JavaScript object in the DOM hierarchy, and each object contains properties and methods to describe and manipulate these objects. For example, the <code>style</code> property of the DOM elements can be used to <a href="js_dom-styling.php">get or set the inline style of an element</a>.</p>
				<p>In the next few chapters we'll learn how to access individual elements on a web page and manipulate them, for example, changing their style, content, etc. using the JavaScript program.</p>
				<!--Tip Box-->
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
						<div class="tip-box"   style="background-color:#fad28c">
							<p><strong>Important:</strong> The Document Object Model or DOM is, in fact, basically a representation of the various components of the browser and the current Web document (HTML or XML) that can be accessed or manipulated using a scripting language such as JavaScript.</p>
						</div>
					</div>
				</div>
				<!--End:Tip Box-->
				<!--Bottom Navigation-->
				<div class="bottom-link clearfix">
                    <a href="js_objects.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="js_dom-selectors.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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