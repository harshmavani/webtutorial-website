<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="keywords" content="css,css3,Positioning">
	  <meta name="author" content="webschooltoday.com">
    <title>Understanding CSS Positioning Methods - WebSchool Today</title>
    <meta name="description" content="Understanding CSS Positioning Methods" />
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">Understanding CSS Positioning Methods</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des-css.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="style_layers.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="style_visibility.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>CSS <span>Position</span></h1>
                <p class="summary">The position property defines how an element will be positioned on a page.</p>
                <h2>CSS Positioning Methods</h2>
                <p class="space">Positioning elements appropriately on the web pages is a necessity for a good layout design. There are several methods in CSS that you can use for positioning elements. The following section will describe you these positioning methods one by one.</p>
                <h2>Static Positioning</h2>
                <p>A static positioned element is always positioned according to the normal flow of the page. HTML elements are positioned static by default. Static positioned elements are not affected by the <a href="../info-css/style_top-property.php"><code>top</code></a>, <a href="../info-css/style_bottom-property.php"><code>bottom</code></a>, <a href="../info-css/style_left-property.php"><code>left</code></a>, <a href="../info-css/style_right-property.php"><code>right</code></a>, and <a href="../info-css/style_z-index-property.php"><code>z-index</code></a> properties.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab904c.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

.box {
    padding: 20px;
    background: #7dc765;
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
                <h2 id="relative-positioning">Relative Positioning</h2>
                <p>A relative positioned element is positioned relative to its normal position.</p>
                <p>In the relative positioning scheme the element's box position is calculated according to the normal flow. Then the box is shifted from this normal position according to the properties &mdash; <code>top</code> or <code>bottom</code> and/or <code>left</code> or <code>right</code>.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab53a6.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

.box {
    position: relative;
    left: 100px;
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
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> A relatively positioned element can be moved and overlap other elements, but it keeps the space originally reserved for it in the normal flow.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2 id="absolute-positioning">Absolute Positioning</h2>
                <p>An absolutely positioned element is positioned relative to the first parent element that has a position other than static. If no such element is found, it will be positioned on a page relative to the 'top-left' corner of the browser window. The box's offsets further can be specified using one or more of the properties <code>top</code>, <code>right</code>, <code>bottom</code>, and <code>left</code>.</p>
                <p>Absolutely positioned elements are taken out of the normal flow entirely and thus take up no space when placing sibling elements. However, it can overlap other elements depending on the <a href="../info-css/style_z-index-property.php"><code>z-index</code></a> property value. Also, an absolutely positioned element can have <a href="../info-css/style_margin-property.php">margins</a>, and they do not collapse with any other margins.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabc55a.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

.box {
    position: absolute;
    top: 200px;
    left: 100px;
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
                <hr />
                <h2>Fixed Positioning</h2>
                <p>Fixed positioning is a subcategory of absolute positioning.</p>
                <p>The only difference is, a fixed positioned element is fixed with respect to the browser's <a href="../definitions.php#viewport">viewport</a> and does not move when scrolled.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab4612.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

.box {
    position: fixed;
    top: 200px;
    left: 100px;
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
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> In case of the <a href="style_media-types.php">print media</a> type, the fixed positioned element is rendered on every page, and is fixed with respect to the page box (even in print-preview). IE7 and IE8 support the fixed value only if a <a href="../des-html/html-doctypes.php"><code>&lt;!DOCTYPE&gt;</code></a> is specified.</p>
                        </div>
                    </div>
                </div>
                <div class="bottom-link clearfix">
                    <a href="style_visibility.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="style_layers.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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