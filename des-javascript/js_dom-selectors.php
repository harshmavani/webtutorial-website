<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="JavaScript Selecting DOM Elements">
	  <meta name="keywords" content="javascript,js,JavaScript Selecting DOM Elements">
	  <meta name="author" content="webschooltoday.com">
    <title>JavaScript Selecting DOM Elements - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">JavaScript Selecting DOM Elements</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_javascript.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="js_dom-styling.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="js_dom-nodes.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>JavaScript <span>DOM Selectors</span></h1>
                <p class="summary">In this tutorial you will learn how to select DOM elements in JavaScript.</p>
				<h2>Selecting DOM Elements in JavaScript</h2>
				<p>JavaScript is most commonly used to get or modify the content or value of the HTML elements on the page, as well as to apply some effects like show, hide, animations etc. But, before you can perform any action you need to find or select the target HTML element.</p>
				<p class="space">In the following sections, you will see some of the common ways of selecting the elements on a page and do something with them using the JavaScript.</p>
				<h1>Selecting the Topmost Elements</h1>
                <p>The topmost elements in an HTML document are available directly as <code>document</code> properties. For example, the <a href="../info-html/html-html-tag.php"><code>&lt;html&gt;</code></a> element can be accessed with <code>document.documentElement</code> property, whereas the <a href="../info-html/html-head-tag.php"><code>&lt;head&gt;</code></a> element can be accessed with <code>document.head</code> property, and the <a href="../info-html/html-body-tag.php"><code>&lt;body&gt;</code></a> element can be accessed with <code>document.body</code> property. Here's an example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab01a4.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

                        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>JS Select Topmost Elements</title>
</head>
<body>
    <script>
    // Display lang attribute value of html element
    alert(document.documentElement.getAttribute("lang")); // Outputs: en
    
    // Set background color of body element
    document.body.style.background = "yellow";
    
    // Display tag name of the head element's first child
    alert(document.head.firstElementChild.nodeName); // Outputs: meta
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
                <p>But, be careful. If <code>document.body</code> is used before the <code>&lt;body&gt;</code> tag (e.g. inside the <code>&lt;head&gt;</code>), it will return <a href="js_data-types.php#null"><code>null</code></a> instead of the body element. Because the point at which the script is executed, the <code>&lt;body&gt;</code> tag was not parsed by the browser, so <code>document.body</code> is truly <code>null</code> at that point.</p>
                <p>Let's take a look at the following example to better understand this:</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab8d81.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

                        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>JS Document.body Demo</title>
    <script>
    alert("From HEAD: " + document.body); // Outputs: null (since <body> is not parsed yet)
    </script>
</head>
<body>
    <script>
    alert("From BODY: " + document.body); // Outputs: HTMLBodyElement
    </script>
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
                <hr />
                <h2>Selecting Elements by ID</h2>
				<p>You can select an element based on its unique ID with the <code>getElementById()</code> method. This is the easiest way to find an HTML element in the DOM tree.</p>
				<p>The following example selects and highlight an element having the ID attribute <code>id="mark"</code>.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabfd91.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

                        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>JS Select Element by ID</title>
</head>
<body>
    <p id="mark">This is a paragraph of text.</p>
    <p>This is another paragraph of text.</p>

    <script>
    // Selecting element with id mark 
    var match = document.getElementById("mark");
     
    // Highlighting element's background
    match.style.background = "yellow";
    </script>
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
				<p>The <code>getElementById()</code> method will return the element as an object if the matching element was found, or <code>null</code> if no matching element was found in the document.</p>
				<!--Note box-->
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585"
>
							<p><strong>Read Carefully:</strong> Any HTML element can have an <code>id</code> attribute. The value of this attribute must be unique within a page i.e. no two elements in the same page can have the same ID.</p>
						</div>
					</div>
				</div>
				<!--End:Note box-->
				<hr />
				<h2>Selecting Elements by Class Name</h2>
				<p>Similarly, you can use the <code>getElementsByClassName()</code> method to select all the elements having specific class names. This method returns an array-like object of all child elements which have all of the given class names. Let's check out the following example:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabb9a8.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

                        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>JS Select Elements by Class Name</title>
</head>
<body>
    <p class="test">This is a paragraph of text.</p>
    <div class="block test">This is another paragraph of text.</div>
    <p>This is one more paragraph of text.</p>    

    <script>
    // Selecting elements with class test
    var matches = document.getElementsByClassName("test");
        
    // Displaying the selected elements count
    document.write("Number of selected elements: " + matches.length);
     
    // Applying bold style to first element in selection
    matches[0].style.fontWeight = "bold";
        
    // Applying italic style to last element in selection
    matches[matches.length - 1].style.fontStyle = "italic";
        
    // Highlighting each element's background through loop
    for(var elem in matches) {  
        matches[elem].style.background = "yellow";
    }
    </script>
</body>
</html>
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
				<h2>Selecting Elements by Tag Name</h2>
				<p>You can also select HTML elements by tag name using the <code>getElementsByTagName()</code> method. This method also returns an array-like object of all child elements with the given tag name.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabfc58.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

                        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>JS Select Elements by Tag Name</title>
</head>
<body>
    <p>This is a paragraph of text.</p>
    <div class="test">This is another paragraph of text.</div>
    <p>This is one more paragraph of text.</p>   
 
    <script>
    // Selecting all paragraph elements
    var matches = document.getElementsByTagName("p");
        
    // Printing the number of selected paragraphs
    document.write("Number of selected elements: " + matches.length);
     
    // Highlighting each paragraph's background through loop
    for(var elem in matches) {  
        matches[elem].style.background = "yellow";
    }
    </script>
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
                <!--End:Code box-->
				<hr />
				<h2>Selecting Elements with CSS Selectors</h2>
				<p>You can use the <code>querySelectorAll()</code> method to select elements that matches the specified <a href="../des-css/css-selectors.php">CSS selector</a>. CSS selectors provide a very powerful and efficient way of selecting HTML elements in a document. Please check out the CSS tutorial section to learn more about them.</p>
				<p>This method returns a list of all the elements that matches the specified selectors. You can examine it just like any array, as shown in the following example:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabaae6.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code6">

                        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>JS Select Elements with CSS Selectors</title>
</head>
<body>
    <ul>
        <li>Bread</li>
        <li class="tick">Coffee</li>
        <li>Pineapple Cake</li>
    </ul>
        
    <script>
    // Selecting all li elements
    var matches = document.querySelectorAll("ul li");
     
    // Printing the number of selected li elements
    document.write("Number of selected elements: " + matches.length + "<hr>")
     
    // Printing the content of selected li elements
    for(var elem of matches) {  
        document.write(elem.innerHTML + "<br>");
    }
     
    // Applying line through style to first li element with class tick
    matches = document.querySelectorAll("ul li.tick");
    matches[0].style.textDecoration = "line-through";
    </script>
</body>
</html>
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
				<!--Note box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box" style="background-color:#ff8585"
 >
                            <p><strong>Read Carefully:</strong> The <code>querySelectorAll()</code> method also supports <a href="../des-css/css-pseudo-classes.php">CSS pseudo-classes</a> like <code>:first-child</code>, <code>:last-child</code>, <code>:hover</code>, etc. But, for <a href="../des-css/css-pseudo-elements.php">CSS pseudo-elements</a> such as <code>::before</code>, <code>::after</code>, <code>::first-line</code>, etc. this method always returns an empty list.</p>
                        </div>
                    </div>
                </div>
                <!--End:Note box-->
				<!--Bottom Navigation-->
				<div class="bottom-link clearfix">
                    <a href="js_dom-nodes.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="js_dom-styling.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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