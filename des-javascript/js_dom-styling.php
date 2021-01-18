<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="JavaScript Styling DOM Elements">
	  <meta name="keywords" content="javascript,js,JavaScript Styling DOM Elements">
	  <meta name="author" content="webschooltoday.com">
    <title>JavaScript Styling DOM Elements - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">JavaScript Styling DOM Elements</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_javascript.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="js_dom-get-set-attributes.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="js_dom-selectors.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>JavaScript <span>DOM Styling</span></h1>
                <p class="summary">In this tutorial you will learn how to style elements in JavaScript.</p>
				<h2>Styling DOM Elements in JavaScript</h2>
				<p>You can also apply style on HTML elements to change the visual presentation of HTML documents dynamically using JavaScript. You can set almost all the styles for the elements like, fonts, colors, margins, borders, background images, text alignment, width and height, position, and so on.</p>
				<p class="space">In the following section we'll discuss the various methods of setting styles in JavaScript.</p>
				<h2>Setting Inline Styles on Elements</h2>
				<p>Inline styles are applied directly to the specific HTML element using the style attribute. In JavaScript the <code>style</code> property is used to get or set the inline style of an element.</p>
				<p>The following example will set the color and font properties of an element with <code>id="intro"</code>.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabdebb.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">
                        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>JS Set Inline Styles Demo</title>
</head>
<body>
    <p id="intro">This is a paragraph.</p>
    <p>This is another paragraph.</p>
        
    <script>
    // Selecting element
    var elem = document.getElementById("intro");
    
    // Appling styles on element
    elem.style.color = "blue";
    elem.style.fontSize = "18px";
    elem.style.fontWeight = "bold";
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
				<h3>Naming Conventions of CSS Properties in JavaScript</h3>
				<p>Many CSS properties, such as <a href="../info-css/css-font-size-property.php"><code>font-size</code></a>, <a href="../info-css/css-background-image-property.php"><code>background-image</code></a>, <a href="../info-css/css-text-decoration-property.php"><code>text-decoration</code></a>, etc. contain hyphens (<code>-</code>) in their names. Since, in JavaScript hyphen is a reserved operator and it is interpreted as a minus sign, so it is not possible to write an expression, like: <code>elem.style.font-size</code></p>
				<p>Therefore, in JavaScript, the CSS property names that contain one or more hyphens are converted to intercapitalized style word. It is done by removing the hyphens and capitalizing the letter immediately following each hyphen, thus the CSS property <code>font-size</code> becomes the DOM property <code>fontSize</code>, <code>border-left-style</code> becomes <code>borderLeftStyle</code>, and so on.</p>
				<hr />
				<h2>Getting Style Information from Elements</h2>
				<p>Similarly, you get the styles applied on the HTML elements using the <code>style</code> property.</p>
				<p>The following example will get the style information from the element having <code>id="intro"</code>.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelaba8d2.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

                        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>JS Get Element's Style Demo</title>
</head>
<body>
    <p id="intro" style="color:red; font-size:20px;">This is a paragraph.</p>
    <p>This is another paragraph.</p>
        
    <script>
    // Selecting element
    var elem = document.getElementById("intro");
     
    // Getting style information from element
    alert(elem.style.color);  // Outputs: red
    alert(elem.style.fontSize);  // Outputs: 20px
    alert(elem.style.fontStyle);  // Outputs nothing
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
				<p>The <code>style</code> property isn't very useful when it comes to getting style information from the elements, because it only returns the style rules set in the element's style attribute not those that come from elsewhere, such as style rules in the <a href="../des-html/html-styles.php#embedded-style-sheet">embedded style sheets</a>, or <a href="../des-html/html-styles.php#external-style-sheet">external style sheets</a>.</p>
				<p>To get the values of all CSS properties that are actually used to render an element you can use the <code>window.getComputedStyle()</code> method, as shown in the following example:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabb9ef.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

                        <!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>JS Get Computed Style Demo</title>
<style type="text/css">
    #intro {        
        font-weight: bold;
        font-style: italic;
    }
</style>
</head>
<body>
    <p id="intro" style="color:red; font-size:20px;">This is a paragraph.</p>
    <p>This is another paragraph.</p>
        
    <script>
    // Selecting element
    var elem = document.getElementById("intro");
     
    // Getting computed style information
    var styles = window.getComputedStyle(elem);
     
    alert(styles.getPropertyValue("color"));  // Outputs: rgb(255, 0, 0)    
    alert(styles.getPropertyValue("font-size"));  // Outputs: 20px
    alert(styles.getPropertyValue("font-weight"));  // Outputs: 700
    alert(styles.getPropertyValue("font-style"));  // Outputs: italic
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
				<!--Tip Box-->
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
						<div class="tip-box"   style="background-color:#fad28c">
							<p><strong>important:</strong> The value <code>700</code> for the CSS property <a href="../info-css/css-font-weight-property.php"><code>font-weight</code></a> is same as the keyword <code>bold</code>. The color keyword <code>red</code> is same as <code>rgb(255,0,0)</code>, which is the <a href="../info-css/css-color-values.php">rgb notation</a> of a color.</p>
						</div>
					</div>
				</div>
				<!--End:Tip Box-->
				<hr />
				<h2>Adding CSS Classes to Elements</h2>
				<p>You can also get or set <a href="../des-css/css-selectors.php">CSS classes</a> to the HTML elements using the <code>className</code> property.</p>
				<p>Since, <code>class</code> is a <a href="../info-javascript/js_reserved-keywords.php">reserved word in JavaScript</a>, so JavaScript uses the <code>className</code> property to refer the value of the HTML class attribute. The following example will show to how to add a new class, or replace all existing classes to a <a href="../info-html/html-div-tag.php"><code>&lt;div&gt;</code></a> element having <code>id="info"</code>.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab2a97.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

                        <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>JS Add or Replace CSS Classes Demo</title>
<style>
    .highlight {
        background: yellow;
    }
</style>
</head>
<body>
    <div id="info" class="disabled">Something very important!</div>
        
    <script>
    // Selecting element
    var elem = document.getElementById("info");
    
    elem.className = "note";  // Add or replace all classes with note class
    elem.className += " highlight";  // Add a new class highlight
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
				<p>There is even better way to work with CSS classes. You can use the <code>classList</code> property to get, set or remove CSS classes easily from an element. This property is supported in all major browsers except Internet Explorer prior to version 10. Here's an example:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab1976.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

                        <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>JS classList Demo</title>
<style>
    .highlight {
        background: yellow;
    }
</style>
</head>
<body>
    <div id="info" class="disabled">Something very important!</div>
    
    <script>
    // Selecting element
    var elem = document.getElementById("info");
     
    elem.classList.add("hide");  // Add a new class
    elem.classList.add("note", "highlight");  // Add multiple classes
    elem.classList.remove("hide"); // Remove a class
    elem.classList.remove("disabled", "note"); // Remove multiple classes
    elem.classList.toggle("visible"); // If class exists remove it, if not add it
     
    // Determine if class exist
    if(elem.classList.contains("highlight")) {
        alert("The specified class exists on the element.");
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
				<!--Bottom Navigation-->
				<div class="bottom-link clearfix">
                    <a href="js_dom-selectors.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="js_dom-get-set-attributes.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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