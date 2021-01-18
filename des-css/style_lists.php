<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="keywords" content="css,css3,Lists">
	  <meta name="author" content="webschooltoday.com">
    <title>Formatting Unordered and Ordered Lists Using CSS - WebSchool Today</title>
    <meta name="description" content="Formatting Unordered and Ordered Lists Using CSS" />
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">Formatting Unordered and Ordered Lists Using CSS</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des-css.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="style_tables.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="style_links.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>CSS <span>Lists</span></h1>
                <p class="summary">In this tutorial you will learn how to format HTML lists using CSS.</p>
                <h2>Types of HTML Lists</h2>
                <p>There are three different types of list in HTML:</p>
                <ul class="break">
                    <li><strong>Unordered lists</strong> &mdash; A list of items, where every list items are marked with bullets.</li>
                    <li><strong>Ordered lists</strong> &mdash; A list of items, where each list items are marked with numbers.</li>
                    <li><strong>Definition list</strong> &mdash; A list of items, with a description of each item.</li>
                </ul>            
                <p class="space">See the tutorial on <a href="../des-html/html-lists.php">HTML lists</a> to learn more about the lists and how to create them.</p>
                <h2>Styling Lists with CSS</h2>
                <p>CSS provides the several properties for styling and formatting the most commonly used unordered and ordered lists. These CSS list properties typically allow you to:</p>
                <ul class="break">
                    <li>Control the shape or appearance of the marker.</li>
                    <li>Specify an image for the marker rather than a bullet point or number.</li>
                    <li>Set the distance between a marker and the text in the list.</li>
                    <li>Specify whether the marker would appear inside or outside of the box containing the list items.</li>
                </ul>
                <p class="space">In the following section we will discuss the properties that can be used to style HTML lists.</p>
                <h2>Changing the Marker Type of Lists</h2>
                <p>By default, items in an <a href="../des-html/html-lists.php#ordered-lists">ordered list</a> are numbered with Arabic numerals (1, 2, 3, 5, and so on), whereas in an <a href="../des-html/html-lists.php#unordered-lists">unordered list</a>, items are marked with round bullets (&bullet;).</p>
                <p>But, you can change this default list marker type to any other type such as roman numerals, latin letters, circle, square, and so on using the <code>list-style-type</code> property.</p>
                <p>Let's try out the following example to understand how this property actually works:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab49b0.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

ul {
    list-style-type: square;
}
ol {
    list-style-type: upper-roman;
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
                <h2>Changing the Position of List Markers</h2>
                <p>By default, markers of each list items are positioned <code>outside</code> of their display boxes.</p>
                <p>However, you can also position these markers or bullet points inside of the list item's display boxes using the <code>list-style-position</code> property along with the value <code>inside</code>. In this case the lines will wrap under the marker instead of being indented. Here's an example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab53e4.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

ol.in li {
    list-style-position: inside;
}
ol.out li {
    list-style-position: outside;
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
                <p>Let's take a look at the following illustration to understand how markers or bullets are positioned.</p>
                <div><img src="../assets/images/order.png" alt="List Style Position Illustration" /></div>
                <hr />
                <h2>Using Images as List Markers</h2>
                <p>You can also set an image as a list marker using the <code>list-style-image</code> property.</p>
                <p>The style rule in the following example assigns a transparent PNG image "arrow.png" as the list marker for all the items in the unordered list. Let's try it out and see how it works:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab62ad.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

ul li {
    list-style-image: url("images/bullet.png");
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
                <p>Sometimes, the <code>list-style-image</code> property may not produce the expected output. Alternatively, you can use the following solution for better control over the positioning of image markers.</p>
                <p>As a work-around, you can also set image bullets via the <a href="../info-css/style_background-image-property.php"><code>background-image</code></a> CSS property. First, set the list to have no bullets. Then, define a non-repeating background image for the list element.</p>
                <p>The following example displays the image markers equally in all browsers:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab0c8b.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

ul {
    list-style-type: none;
}
ul li {
    background-image: url("images/bullet.png");
    background-position: 0px 5px;    /* X-pos Y-pos (from top-left) */
    background-repeat: no-repeat;
    padding-left: 20px;
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
                <h2>Setting All List Properties At Once</h2>
                <p>The <code>list-style</code> property is a shorthand property for defining all the three properties <code>list-style-type</code>, <code>list-style-image</code>, and <code>list-style-position</code> of a list in one place.</p>
                <p>The following style rule sets all the list properties in a single declaration.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab74a4.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                    	<textarea id="code5">

ul {
    list-style: square inside url("images/bullet.png");
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
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> When using the <code>list-style</code> shorthand property, the orders of the values are: <code>list-style-type</code> | <code>list-style-position</code> | <code>list-style-image</code>. It does not matter if one of the values above is missing as long as the rest are in the specified order.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Creating Navigation Menus Using Lists</h2>
                <p>HTML lists are frequently used to create horizontal navigation bar or menu that typically appear at the top of a website. But since the list items are block elements, so to display them inline we need to use the CSS <code>display</code> property. Let's try out an example to see how it really works:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabb85a.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                     
	<textarea id="code6">

ul {
    padding: 0;
    list-style: none;
    background: #f2f2f2;
}
ul li {
    display: inline-block;
}
ul li a {
    display: block;
    padding: 10px 25px;
    color: #333;
    text-decoration: none;
}
ul li a:hover {
    color: #fff;
    background: #939393;
}

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
                <p>You will learn about the CSS <a href="style_display.php">display</a> and <a href="style_padding.php">padding</a> properties in detail in upcoming chapters.</p>                
                <div class="bottom-link clearfix">
                    <a href="style_links.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="style_tables.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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