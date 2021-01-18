<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="keywords" content="css,css3,Background">
	  <meta name="author" content="webschooltoday.com">
    <title>Styling Background of Elements Using CSS - WebSchool Today</title>
    <meta name="description" content="Styling Background of Elements Using CSS" />
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">Styling Background of Elements Using CSS</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des-css.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="style_fonts.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="style_color.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>CSS <span>Background</span></h1>
                <p class="summary">In this tutorial you will learn how to define background styles for an element using CSS.</p>
                <h2>Setting Background Properties</h2>
                <p>Background plays an important role in the visual presentation of a web page.</p>
                <p>CSS provide several properties for styling the background of an element, including coloring the background, placing images in the background and managing their positioning, etc.</p>
                <p>The background properties are <code>background-color</code>, <code>background-image</code>, <code>background-repeat</code>, <code>background-attachment</code> and <code>background-position</code>.</p>
                <p class="space">In the following section we will discuss each of these properties in more detail.</p>
                <h2>Background Color</h2>
                <p>The <code>background-color</code> property is used to set the background color of an element.</p>
                <p>The following example demonstrates how to set the background color of the whole page.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab91fa.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

body {
    background-color: #f0e68c;
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
                <p>Color values in CSS are most often specified in the following formats:</p>
                <ul>
                    <li>a color name - like "red"</li>
                    <li>a HEX value - like "#ff0000"</li>
                    <li>an RGB value - like "rgb(255, 0, 0)"</li>             
                </ul>
                <p>Please check out the tutorial on <a href="style_color.php">CSS color</a> to learn more about specifying color values.</p>
                <hr />
                <h2>Background Image</h2>
                <p>The <code>background-image</code> property set an image as a background of an HTML element.</p>
                <p>Let's check out the following example which sets the background image for the whole page.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabb148.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

body {
    background-image: url("images/tile.png");
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
                            <p><strong>Read Carefully:</strong> When applying the background image to an element, make sure that the image you choose does not affect the readability of the element's text content.</p>
                        </div>
                    </div>
                </div>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"  style="background-color:#fad28c">
                            <p><strong>Important:</strong> By default browser repeats or tiles the background image both horizontally and vertically to fill the entire area of an element. You can control this with <code>background-repeat</code> property.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Background Repeat</h2>                
                <p>The <code>background-repeat</code> property allows you to control how a background image is repeated or tiled in the background of an element. You can set a background image to repeat vertically (y-axis), horizontally (x-axis), in both directions, or in neither direction.</p>
                <p>Let's try out the following example which demonstrates how to set the gradient background for a web page by repeating the sliced image  horizontally along the x-axis.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab647a.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

body {
    background-image: url("images/gradient.png");
    background-repeat: repeat-x;
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
                <p>Similarly, you can use the value <code>repeat-y</code> to repeat the background image vertically along the y-axis, or the value <code>no-repeat</code> to prevent the repetition altogether.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab041b.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

body {
    background-image: url("images/robot.png");
    background-repeat: no-repeat;
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
                <p class="break">Let's take a look at the following illustration to understand how this property actually works.</p>
                <hr />
                <h2>Background Position</h2>
                <p>The <code>background-position</code> property is used to control the position of the background image.</p>
                <p>If no background position has been specified, the background image is placed at the default top-left position of the element i.e. at <code>(0,0)</code>, let's try out the following example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab09ae.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

body {
    background-image: url("images/robot.png");
    background-repeat: no-repeat;
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
                <p>In the following example, the background image is positioned at top-right corner.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab0474.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code6">

body {
    background-image: url("images/robot.png");
    background-repeat: no-repeat;
    background-position: right top;
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
				<div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> If two values are specified for the <code>background-position</code> property, the first value represents the horizontal position, and the second represents the vertical position. If only one value is specified, the second value is assumed to be center.</p>
                        </div>
                    </div>
                </div>
				<p>Besides keywords, you can also use percentage or <a href="style_units.php">length values</a>, such as <code>px</code> or <code>em</code> for this property.</p>
                <p class="break">Let's take a look at the following illustration to understand how this property actually works.</p>
                <hr />
                <h2>Background Attachment</h2>
                <p>The <code>background-attachment</code> property determines whether the background image is fixed with regard to the viewport or scrolls along with the containing block.</p>
                <p>Let's try out the following example to understand how it basically works:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab07e9.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code7">

body {
    background-image: url("images/bell.png");
    background-repeat: no-repeat;
    background-attachment: fixed;
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
                <hr />                
                <h2>The Background Shorthand Property</h2>
                <p>As you can see in the examples above, there are many properties to consider when dealing with the backgrounds. However, it is also possible to specify all these properties in one single property to shorten the code or avoid extra typing. This is called a shorthand property.</p>
                <p>The <code>background</code> property is a shorthand property for setting all the individual background properties, i.e., <a href="../info-css/style_background-color-property.php"><code>background-color</code></a>, <a href="../info-css/style_background-image-property.php"><code>background-image</code></a>, <a href="../info-css/style_background-repeat-property.php"><code>background-repeat</code></a>, <a href="../info-css/style_background-attachment-property.php"><code>background-attachment</code></a> and the <a href="../info-css/style_background-position-property.php"><code>background-position</code></a> property at once. Let's see how this works:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabec22.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code8">

body {
    background-color: #f0e68c;
    background-image: url("images/smiley.png");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: 250px 25px;
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
                <p>Using the shorthand notation the above example can be written as:</p>
                <div class="example break">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabeb06.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code9">

body {
    background: #f0e68c url("images/smiley.png") no-repeat fixed 250px 25px;
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
                <p class="break">When using the <code>background</code> shorthand property the order of the property values should be.</p>
                <div class="shadow break">
                    <div class="syntax"><span class="property">background</span>: <i>color</i> <i>image</i> <i>repeat</i> <i>attachment</i> <i>position</i>;</div>
                </div>
                <p>If the value for an individual background property is missing or not specified while using the shorthand notation, the default value for that property will be used instead, if any.</p>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585" >
                            <p><strong>Read Carefully:</strong> The background properties do not inherit like the <a href="style_color.php">color</a> property, but the parent element's background will be visible through by default, because of the initial or default <code>transparent</code> value of the <code>background-color</code> CSS property.</p>
                        </div>
                    </div>
                </div>
                <div class="bottom-link clearfix">
                    <a href="style_color.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="style_fonts.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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