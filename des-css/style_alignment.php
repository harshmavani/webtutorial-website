<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="keywords" content="css,css3,css center,vertical,horizontal">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS Central, Horizontal and Vertical Alignment - WebSchool Today</title>
    <meta name="description" content="CSS Central, Horizontal and Vertical Alignment" />
     <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS Central, Horizontal and Vertical Alignment</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des-css.php" ?>
    
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="style_pseudo-classes.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="style_float.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>CSS <span>Alignment</span></h1>
                <p class="summary">CSS has several properties that can be used to align elements on web pages.</p>
                <h2>Text Alignment</h2>
                <p>Text inside the <a href="style_visual-formatting.php#block-level">block-level</a> elements can aligned by setting the <a href="../info-css/style_text-align-property.php">text-align</a> properly.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab16c5.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

h1 {
    text-align: center;
}
p {
    text-align: left;
}

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
                <hr />
                <h2>Center Alignment Using the margin Property</h2>
                <p>Center alignment of a <a href="style_visual-formatting.php#block-level">block-level</a> element is one of the most important implications of the CSS <a href="style_margin.php"><code>margin</code></a> property. For example, the <a href="../info-html/html-div-tag.php"><code>&lt;div&gt;</code></a> container can be aligned horizontally center by setting the left and right margins to <code>auto</code>.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab45f4.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

div {
    width: 50%;
    margin: 0 auto;
}

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
                <p>The style rules in the above example center align the <a href="../info-html/html-div-tag.php"><code>&lt;div&gt;</code></a> element horizontally.</p>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> The value <code>auto</code> for the <code>margin</code> property will not work in Internet Explorer 8 and earlier versions, unless a <a href="../des-html/html-doctypes.php"><code>&lt;!DOCTYPE&gt;</code></a> is specified.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Aligning Elements Using the position Property</h2>
                <p>The CSS <a href="../info-css/style_position-property.php"><code>position</code></a> in conjunction with the <code>left</code>, <code>right</code>, <code>top</code> and <code>bottom</code> property can be used to align elements with respect to the document's viewport or containing parent element.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab5d89.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

.up {
    position: absolute;
    top: 0;
}
.down {
    position: absolute;
    bottom: 0;
}

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
                <p>To learn more about positioning elements, see the tutorial on <a href="style_position.php">CSS positioning</a>.</p>
                <hr />
                <h2>Left and Right Alignment Using the float Property</h2>
                <p>The <a href="../info-css/style_float-property.php"><code>float</code></a> CSS property can be used to align an element to the left or right of its containing block in such a way that other content may flow along its side.</p>
                <p>Hence, if an element is floated to the left, content will flow along its right side. Conversely, if the element is floated to the right, content will flow along its left side.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab80bc.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

div {
    width: 200px;
    float: left;
}

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
                <h2 id="clearing-floats">Clearing Floats</h2>
                <p class="space">One of the most confusing things about working with the float-based layouts is the collapsing parent. The parent element doesn't stretch up automatically to accommodate the floated elements. Though, this isn't always obvious if the parent doesn't contain any visually noticeable background or borders, but it is important to be aware of and must dealt with to prevent strange layout and cross-browser problem. See the illustration below:</p>
                <div class="break">
                    <img src="../assets/images/floats.png" width="50%" alt="CSS Collapsed Parent" />
                </div>
                <p class="space">You can see the <a href="../info-html/html-div-tag.php"><code>&lt;div&gt;</code></a> element doesn't stretch up automatically to accommodate the floated images. This problem can be fixed by clearing the float after the floated elements in the container but before the closing tag of the container element.</p>
                <hr />
                <h2 id="collapsing-parent">Fixing the Collapsed Parent</h2>
                <p>There are several ways to fix the CSS collapsing parent issue. The following section will describe you these solutions along with the live examples.</p>
                <h3>Solution 1: Float the Container</h3>
                <p>The easiest way to fix this problem is to float the containing parent element.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab4dc4.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

.container {
    float: left;
    background: #f2f2f2;
}

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
                        <div class="info-tab warning-icon" title="Warning"><i></i></div>
                        <div class="warning-box">
                            <p><strong>Warning:</strong> This fix will only work in a limited number of circumstances, since floating the parent may produce unexpected results.</p>
                        </div>
                    </div>
                </div>
                <h3>Solution 2: Using the Empty Div</h3>
                <p>This is an old fashioned way but is an easy solution and works across every browser.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab2c3a.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code6">

.clearfix {
    clear: both;
}
/* html code snippet */
<div class="clearfix"> </div>

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
                <p class="break">You could also do this by means of a <a href="../info-html/html-br-tag.php"><code>&lt;br&gt;</code></a> tag. But this method is not recommended since it adds nonsemantic code to your markup.</p>
                <h3>Solution 3: Using the :after Pseudo-Element</h3>
                <p>The <code>:after</code> <a href="style_pseudo-elements.php">pseudo-element</a> in conjunction with the <a href="../info-css/style_content-property.php"><code>content</code></a> property has been used quite extensively to resolve float-clearing issues.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabb367.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code7">

.clearfix:after {
    content: ".";
    display: block;
    height: 0;
    clear: both;
    visibility: hidden;
}
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
                <p>The class <code>.clearfix</code> is applied to any container that has floating children.</p>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab warning-icon" title="Warning"><i></i></div>
                        <div class="warning-box">
                            <p><strong>Warning:</strong> Internet Explorer up IE7 does not support the <code>:after</code> <a href="style_pseudo-elements.php">pseudo-element</a>. However IE8 supported, but require a <a href="../des-html/html-doctypes.php"><code>&lt;!DOCTYPE&gt;</code></a> to be declared.</p>
                        </div>
                    </div>
                </div> 
                <div class="bottom-link clearfix">
                    <a href="style_float.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="style_pseudo-classes.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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