<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="keywords" content="css,css3,border,outline">
	  <meta name="author" content="webschooltoday.com">
    <title>Understanding Difference Between CSS Border and Outline - WebSchool Today</title>
    <meta name="description" content="Understanding Difference Between CSS Border and Outline" />
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">Understanding Difference Between CSS Border and Outline</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des-css.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="style_cursors.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

				<a href="style_margin.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>CSS <span>Outline</span></h1>
                <p class="summary">In this tutorial you will learn how to define outline for an element using CSS.</p>
                <h2>CSS Outline Properties</h2>
                <p>The CSS outline properties allow you to define an outline area around an element's box.</p>
                <p>An outline is a line that is drawn just outside the border edge of the elements. Outlines are generally used to indicate focus or active states of the elements such as buttons, links, form fields, etc.</p>
                <p class="space">The following section describes how to set the style, color, and width of the outline.</p>
                <h2>Outlines Vs Borders</h2>
                <p>An outline looks very similar to the border, but it differs from border in the following ways:</p>
                <ul>
                    <li>Outlines do not take up space, because they always placed on top of the box of the element which may cause them to overlap other elements on the page.</li>
                    <li>Unlike borders, outlines won't allow us to set each edge to a different width, or set different colors and styles for each edge. An outline is the same on all sides.</li>
                    <li>Outlines do not have any impact on surrounding elements apart from overlapping.</li>
                    <li>Unlike borders, outlines do not change the size or position of the element.</li>
                    <li>Outlines may be non-rectangular, but you cannot create circular outlines.</li>
                </ul>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> If you put an outline on an element, it will take up the same amount of space on the web pages as if you didn't have an outline on that element. Because it overlap <a href="style_margin.php">margins</a> (transparent area outside of the border) and surrounding elements.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Understanding the Different Outline Styles</h2>
                <p>The <a href="../info-css/style_outline-style-property.php"><code>outline-style</code></a> property sets the style of an element's outline such as: <code>solid</code>, <code>dotted</code>, etc.</p>
                <p>The <code>outline-style</code> property can have one of the following values: <code>none</code>, <code>solid</code>, <code>dashed</code>, <code>dotted</code>, <code>double</code>, <code>inset</code>, <code>outset</code>,  <code>groove</code>, and <code>ridge</code>. Now, let's take a look at the following illustration, it gives you a sense of the differences between the outline style types.</p>
                <div style="margin: 40px 0;text-align: center;"><img src="../assets/images/border2.jpg" alt="CSS outline Styles" width="720" /></div>
                <p>The value <code>none</code> displays no outline. The values <code>inset</code>, <code>outset</code>, <code>groove</code>, and <code>ridge</code> creates a 3D like effect which essentially depends on the <code>outline-color</code> value. This is typically achieved by creating a "shadow" from two colors that are slightly lighter and darker than the outline color.</p>
                <p>Let's try out the following example and see how it basically works:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab1bf0.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code7">

h1 {
    outline-style: dotted;
}
p {
    outline-style: ridge;
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
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> You must specify a outline style in order to make the outline appear around an element, because the default outline style is <code>none</code>. Whereas, the default outline width or thickness is <code>medium</code>, and the default outline color is the same as the text color.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Setting the Outline Width</h2>
                <p>The <code>outline-width</code> property specifies the width of the outline to be added on an element.</p>
                <p>Let's try out the following example to understand how it actually works:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab7ccb.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code8">

p {
    outline-style: dashed;
    outline-width: 10px;
}

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
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"  style="background-color:#fad28c"
>
                            <p><strong>Important:</strong> The outline width can be specified using any length value, such as px, em, rem, and so on. It can also be specified using one of the three keywords: <code>thin</code>, <code>medium</code>, and <code>thick</code>. Percentage or negative values are not allowed  &mdash; just like the <a href="../info-css/style_border-width-property.php"><code>border-width</code></a> property.</p>
                        </div>
                    </div>
                </div>
                <hr />                
                <h2>Specifying the Outline Color</h2>
                <p>The <code>outline-color</code> property sets the color of the outline.</p>
                <p>This property accepts the same values as those used for the <a href="style_color.php"><code>color</code></a> property.</p>
                <p>The following style rules adds a solid outline of blue color around the paragraphs.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab7f38.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code9">

p {
    outline-style: solid;
    outline-color: #0000ff;
}

     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code9"), {
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
                            <p><strong>Read Carefully:</strong> The CSS <code>outline-width</code> or <code>outline-color</code> property does not work if it is used alone. Use the <code>outline-style</code> property to set the style of the outline first.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>The Outline Shorthand Property</h2>
                <p>The <code>outline</code> CSS property is a shorthand property for setting one or more of the individual outline properties <code>outline-style</code>, <code>outline-width</code> and <code>outline-color</code> in a single rule.</p>
                <p>Let's take a look at the following example to understand how it works:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab9425.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code10">

p {
    outline: 5px solid 	#ff00ff;
}

     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code10"), {
									mode: "text/html",
									tabMode: "indent",
									styleActiveLine: true,
									lineNumbers: true,
									lineWrapping: true
								});
							</script>
                    </div>
                </div>
                <p>If the value for an individual outline property is omitted or not specified while setting the outline shorthand property, the default value for that property will be used instead, if any.</p>
                <p>For instance, if the value for the <a href="../info-css/style_outline-color-property.php"><code>outline-color</code></a> property is missing or not specified when setting the outlines, the element's <a href="style_color.php"><code>color</code></a> property will be used as the value for the outline color.</p>
                <p>In the following example, the outline will be a solid green line of 5px width:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabcde4.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code11">

p {
    color: green;
    outline: 5px solid;
}

     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code11"), {
									mode: "text/html",
									tabMode: "indent",
									styleActiveLine: true,
									lineNumbers: true,
									lineWrapping: true
								});
							</script>
                    </div>
                </div>
                <p>But, in the case of <a href="../info-css/style_outline-style-property.php"><code>outline-style</code></a>, omitting the value will cause no outline to show at all, because the default value for this property is <code>none</code>. In the example below, there will be no outline:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab20e2.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code12">

p {
    outline: 5px #00ff00;
}

     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code12"), {
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
                <h2>Removing Outline Around Active Links</h2>
                <p>The <code>outline</code> property is widely used to remove the outline around active links.</p>
                <p>However, it is recommended to apply some alternative style to indicate that the link has focus.</p>
                <p>Let's try out the following example and see how it basically works:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabd8ce.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code13">

a, a:acive, a:focus {
    outline: none;
}

     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code13"), {
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
                    <a href="style_margin.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="style_cursors.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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