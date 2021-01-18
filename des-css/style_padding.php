<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="keywords" content="css,css3,Padding inside the Elements Using CSS">
	  <meta name="author" content="webschooltoday.com">
    <title>How to Set Padding inside the Elements Using CSS - WebSchool Today</title>
    <meta name="description" content="How to Set Padding inside the Elements Using CSS" />
	 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">How to Set Padding inside the Elements Using CSS</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des-css.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="style_border.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="style_dimension.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>CSS <span>Padding</span></h1>
                <p class="summary">In this tutorial you will learn how to adjust the padding area of an element using CSS.</p>
                <h2>CSS Padding Properties</h2>
                <p>The CSS padding properties allow you to set the spacing between the content of an element and its border (or the edge of the element's box, if it has no defined border).</p>
                <p class="space">The padding is affected by the element's <a href="../info-css/style_background-color-property.php"><code>background-color</code></a>. For instance, if you set the background color for an element it will be visible through the padding area.</p>
                <h2>Define Paddings for Individual Sides</h2>
                <p>You can specify the paddings for the individual sides of an element such as top, right, bottom, and left sides using the CSS <code>padding-top</code>, <code>padding-right</code>, <code>padding-bottom</code>, and the <code>padding-left</code> properties, respectively. Let's try out an example to understand how it works:</p>
                <div class="example break">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab4509.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

h1 {
    padding-top: 50px;
    padding-bottom: 100px;
}
p {
    padding-left: 75px;
    padding-right: 75px;
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
                <p>The padding properties can be specified using the following values:</p>
                <ul>
                    <li><em>length</em> - specifies a padding in px, em, rem, pt, cm, etc.</li>
                    <li><em>%</em> - specifies a padding in percentage (%) of the width of the containing element.</li>
                    <li>inherit - specifies that the padding should be inherited from the parent element.</li>
                </ul>
                <p>Unlike <a href="style_margin.php">CSS margin</a>, values for the padding properties cannot be negative.</p>
                <hr />
                <h2>The Padding Shorthand Property</h2>
                <p>The <code>padding</code> property is a shorthand property to avoid setting padding of each side separately, i.e., <code>padding-top</code>, <code>padding-right</code>, <code>padding-bottom</code> and <code>padding-left</code>.</p>
                <p>Let's take a look at the following example to understand how it basically works:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabc117.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

h1 {
    padding: 50px; /* apply to all four sides */
}
p {
    padding: 25px 75px; /* vertical | horizontal */
}
div {
    padding: 25px 50px 75px; /* top | horizontal | bottom */
}
pre {
    padding: 25px 50px 75px 100px; /* top | right | bottom | left */
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
                <p>This shorthand notation can take one, two, three, or four whitespace separated values.</p>
                <ul>
                    <li>If <em>one value</em> is specified, it is applied to <strong>all four sides</strong>.</li>
                    <li>If <em>two values</em> are specified, the first value is applied to the <strong>top and bottom</strong> side, and the second value is applied to the <strong>right and left</strong> side of the element's box.</li>
                    <li>If <em>three values</em> are specified, the first value is applied to the <strong>top</strong>, second value is applied to <strong>right and left</strong> side, and the last value is applied to the <strong>bottom</strong>.</li>
                    <li>If <em>four values</em> are specified, they are applied to the <strong>top</strong>, <strong>right</strong>, <strong>bottom</strong> and the <strong>left</strong> side of the element's box respectively in the specified order.</li>
                </ul>   
                <p>It is recommended to use the shorthand properties, it will help you to save some time by avoiding the extra typing and make your CSS code easier to follow and maintain.</p>
                <hr />
                <h2>Effect of Padding and Border on Layout</h2>
                <p>When creating web page layouts, adding a padding or border to the elements sometimes produce unexpected result, because padding and border is added to the width and height of the box generated by the element, as you have learnt in the <a href="style_box-model.php">CSS box model chapter</a>.</p>
                <p>For instance, if you set the width of a <code>&lt;div&gt;</code> element to 100% and also apply left right padding or border on it, the horizontal scrollbar will appear. Let's see an example:</p>
                <div class="example break">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab27c5.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

div {
    width: 100%;
    padding: 25px;
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
                <p>To prevent padding and border from changing element's box width and height, you can use the CSS <code>box-sizing</code> property. In the following example the width and height of the <code>&lt;div&gt;</code> box will remain unchanged, however, its content area will decrease with increasing padding or border.</p>
                <div class="example break">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabf58c.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

div {
    width: 100%;
    padding: 25px;
    box-sizing: border-box;
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
                <p>You will learn about the <a href="stylel_box-sizing.php">CSS box sizing</a> feature in detail in the upcoming chapters.</p>
                <div class="bottom-link clearfix">
                    <a href="style_dimension.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="style_border.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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