<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="keywords" content="css,css3,mBorders">
	  <meta name="author" content="webschooltoday.com">
    <title>How to Create and Style Borders Using CSS - WebSchool Today</title>
    <meta name="description" content="How to Create and Style Borders Using CSS" />
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">How to Create and Style Borders Using CSS</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des-css.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="style_margin.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="style_padding.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>CSS <span>Border</span></h1>
                <p class="summary">In this tutorial you will learn how to define border around an element using CSS.</p>
                <h2>CSS Border Properties</h2>
                <p>The CSS border properties allow you to define the border area of an element's box.</p>
                <p>Borders appear directly between the margin and padding of an element. The border can either be a predefined style like, solid line, dotted line, double line, etc. or <a href="stylel_border.php">an image</a>.</p>
                <p class="space">The following section describes how to set the style, color, and width of the border.</p>
                <h2>Understanding the Different Border Styles</h2>
                <p>The <a href="../info-css/style_border-style-property.php"><code>border-style</code></a> property sets the style of a box's border such as: <code>solid</code>, <code>dotted</code>, etc. It is a shorthand property for setting the line style for all four sides of the elements border.</p>
                <p>The <code>border-style</code> property can have the following values: <code>none</code>, <code>hidden</code>, <code>solid</code>, <code>dashed</code>, <code>dotted</code>, <code>double</code>, <code>inset</code>, <code>outset</code>,  <code>groove</code>, and <code>ridge</code>. Now, let's take a look at the following illustration, it gives you a sense of the differences between the border style types.</p>
                <div style="margin: 40px 0;text-align: center;"><img src="../assets/images/border.png" width="720" alt="CSS Border Styles" /></div>
                <p>The values <code>none</code> and <code>hidden</code> displays no border, however, there is a slight difference between these two values. In the case of table cell and border collapsing, the <code>none</code> value has the <em>lowest</em> priority, whereas the <code>hidden</code> value has the <em>highest</em> priority, if any other conflicting border is set.</p>
                <p>The values <code>inset</code>, <code>outset</code>,  <code>groove</code>, and <code>ridge</code> creates a 3D like effect which essentially depends on the <code>border-color</code> value. This is typically achieved by creating a "shadow" from two colors that are slightly lighter and darker than the border color. Let's check out an example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabc885.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

h1 {
    border-style: dotted;
}
p {
    border-style: ridge;
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
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> You must specify a border style in order to make the border appear around an element, because the default border style is <code>none</code>. Whereas, the default border width or thickness is <code>medium</code>, and the default border color is the same as the text color.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Setting the Border Width</h2>
                <p>The <a href="../info-css/style_border-width-property.php"><code>border-width</code></a> property specifies the width of the border area. It is a shorthand property for setting the thickness of all the four sides of an element's border at the same time.</p>
                <p>Let's try out the following example to understand how it works:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabd1b6.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

p {
    border-style: dashed;
    border-width: 10px;
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
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"  style="background-color:#fad28c"
>
                            <p><strong>Important:</strong> The border width can be specified using any length value, such as px, em, rem, and so on. In addition to length units, the border width may also be specified using one of three keywords: <code>thin</code>, <code>medium</code>, and <code>thick</code>. Percentage values are not allowed.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Specifying the Border Color</h2>
                <p>The <a href="../info-css/style_border-color-property.php"><code>border-color</code></a> property specifies the <a href="../info-css/style_color-property.php"><code>color</code></a> of the border area. This is also a shorthand property for setting the color of all the four sides of an element's border.</p>
                <p>The following style rules adds a solid border of red color around the paragraphs.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabeade.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

p {
    border-style: solid;
    border-color: #ff0000;
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
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> The CSS <code>border-width</code> or <code>border-color</code> property does not work if it is used alone. Use&nbsp;the <code>border-style</code> property to set the style of the border first.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>The Border Shorthand Property</h2>
                <p>The <a href="../info-css/style_border-property.php"><code>border</code></a> CSS property is a shorthand property for setting one or more of the individual border properties <code>border-width</code>, <code>border-style</code> and <code>border-color</code> in a single rule.</p>
                <p>Let's take a look at the following example to understand how it works:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab6162.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

p {
    border: 5px solid #00ff00;
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
                <p>If the value for an individual border property is omitted or not specified while setting the border shorthand property, the default value for that property will be used instead, if any.</p>
                <p>For instance, if the value for the <a href="../info-css/style_border-color-property.php"><code>border-color</code></a> property is missing or not specified when setting the border, the element's <a href="style_color.php"><code>color</code></a> property will be used as the value for the border color.</p>
                <p>In the example below, the border will be a solid red line of 5 pixels width:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab0d99.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

p {
    color: red;
    border: 5px solid;
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
                <p>But, in the case of <code>border-style</code>, omitting the value will cause no border to show at all, because the default value for this property is <code>none</code>. In the following example, there will be no border:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab6ed5.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code6">

p {
    border: 5px #00ff00;
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
                <div class="bottom-link clearfix">
                    <a href="style_padding.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="style_margin.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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