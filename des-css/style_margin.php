<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="keywords" content="css,css3,Margin">
	  <meta name="author" content="webschooltoday.com">
    <title>Setting Margin Space around Elements Using CSS - WebSchool Today</title>
    <meta name="description" content="Setting Margin Space around Elements Using CSS" />
	 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">Setting Margin Space around Elements Using CSS</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des-css.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="style_outline.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="style_border.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>CSS <span>Margin</span></h1>
                <p class="summary">In this tutorial you will learn how to adjust space around an element using CSS.</p>
                <h2>CSS Margin Properties</h2>
                <p>The CSS margin properties allow you to set the spacing around the border of an element's box (or the edge of the element's box, if it has no defined border).</p>
                <p class="space">An element's margin is not affected by its <a href="../info-css/style_background-color-property.php"><code>background-color</code></a>, it is always transparent. However, if the parent element has the background color it will be visible through its margin area.</p>
                <h2>Setting Margins for Individual Sides</h2>
                <p>You can specify the margins for the individual sides of an element such as top, right, bottom, and left sides using the CSS <code>margin-top</code>, <code>margin-right</code>, <code>margin-bottom</code>, and the <code>margin-left</code> properties, respectively. Let's try out the following example to understand how it works:</p>
                <div class="example break">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab8d68.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

h1 {
    margin-top: 50px;
    margin-bottom: 100px;
}
p {
    margin-left: 75px;
    margin-right: 75px;
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
                <p>The margin properties can be specified using the following values:</p>
                <ul>
                    <li><em>length</em> - specifies a margin in px, em, rem, pt, cm, etc.</li>
                    <li><em>%</em> - specifies a margin in percentage (%) of the width of the containing element.</li>
                    <li>auto - the browser calculates a suitable margin to use.</li>
                    <li>inherit - specifies that the margin should be inherited from the parent element.</li>
                </ul>
                <p>You can also specify negative margins on an element, e.g., <code>margin: -10px;</code>, <code>margin: -5%;</code>, etc.</p>
                <hr />
                <h2>The Margin Shorthand Property</h2>
                <p>The <code>margin</code> property is a shorthand property to avoid setting margin of each side separately, i.e., <code>margin-top</code>, <code>margin-right</code>, <code>margin-bottom</code> and <code>margin-left</code>.</p>
                <p>Let's take a look at the following example to understand how it basically works:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabd9ac.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

h1 {
    margin: 50px; /* apply to all four sides */
}
p {
    margin: 25px 75px; /* vertical | horizontal */
}
div {
    margin: 25px 50px 75px; /* top | horizontal | bottom */
}
hr {
    margin: 25px 50px 75px 100px; /* top | right | bottom | left */
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
                <h2>Horizontal Centering with Auto Margins</h2>
                <p>The <code>auto</code> value for the margin property tells the web browser to automatically calculate the margin. This is commonly used to center an element horizontally within a larger container.</p> 
                <p>Let's try out the following example to understand how it works:</p>
                <div class="example break">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab8e4b.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

div {
    width: 300px;
    background: gray;
    margin: 0 auto;
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
                <p>The above style rules lets the <code>&lt;div&gt;</code> element take up 300 pixels of all the horizontal space available, and the remaining space will be equally divided between left and right margins.</p>
                <div class="bottom-link clearfix">
                    <a href="style_border.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="style_outline.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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