<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="keywords" content="css,css3,Linear and Radial Gradients">
	  <meta name="author" content="webschooltoday.com">
    <title>Using the CSS3 Linear and Radial Gradients - WebSchool Today</title>
	<meta name="description" content="Linear and Radial Gradients" />
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">Linear and Radial Gradients</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des-css.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
            	<a href="stylel_background.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                <a href="stylel_text-overflow.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                <h1>CSS3 <span>Gradients</span></h1>
                <p class="summary">The CSS3 gradient feature allows you to create a gradient from one color to another without using any images.</p>
				<h2>Using CSS3 Gradients</h2>
				<p>The CSS3 gradient feature provides a flexible solution to generate smooth transitions between two or more colors. Earlier, to achieve such effect we had to use the images. Using CSS3 gradients you can reduce the download time and saves the bandwidth usages. The elements with gradients can be scaled up or down to any extent without losing the quality, also the output will render much faster because it is generated by the browser.</p>
				<p class="space">Gradients are available in two styles: <em>linear</em> and <em>radial</em>.</p>
				<h2>Creating CSS3 Linear Gradients</h2>
				<p>To create a linear gradient you must define at least two color stops. However to create more complex gradient effects you can define more color stops. Color stops are the colors you want to render smooth transitions among. You can also set a starting point and a direction (or an angle) along which the gradient effect is applied. The basic syntax of creating the linear gradients using the keywords can be given with:</p>
				<div class="shadow">
					<div class="syntax"><span class="keyword">linear-gradient</span>(direction, color-stop1, color-stop2, ...)</div>
				</div>
				<h3>Linear Gradient - Top to Bottom</h3>
				<p>The following example will create a linear gradient from top to bottom. This is default.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabfeed.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">
                        .gradient {
    /* Fallback for browsers that don't support gradients */
    background: red;
    /* For Safari 5.1 to 6.0 */
    background: -webkit-linear-gradient(red, yellow);
    /* For Internet Explorer 10 */
    background: -ms-linear-gradient(red, yellow);
    /* Standard syntax */
    background: linear-gradient(red, yellow);
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
                <!--End:Code box-->
				<h3>Linear Gradient - Left to Right</h3>
				<p>The following example will create a linear gradient from left to right.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabd574.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">
                        .gradient {
    /* Fallback for browsers that don't support gradients */
    background: red;
    /* For Safari 5.1 to 6.0 */
    background: -webkit-linear-gradient(left, red, yellow);
    /* For Internet Explorer 10 */
    background: -ms-linear-gradient(left, red, yellow);
    /* Standard syntax */
    background: linear-gradient(to right, red, yellow);
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
                <!--End:Code box-->
				<h3>Linear Gradient - Diagonal</h3>
				<p>You can also create a gradient along the diagonal direction. The following example will create a linear gradient from the bottom left corner to the top right corner of the element's box.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab75c9.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">
                        .gradient {
    /* Fallback for browsers that don't support gradients */
    background: red;
    /* For Safari 5.1 to 6.0 */
    background: -webkit-linear-gradient(bottom left, red, yellow);
    /* For Internet Explorer 10 */
    background: -ms-linear-gradient(bottom left, red, yellow);
    /* Standard syntax */
    background: linear-gradient(to top right, red, yellow);
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
                <!--End:Code box-->
				<hr />
				<h2>Setting Direction of Linear Gradients Using Angles</h2>
				<p>If you want more control over the direction of the gradient, you can set the angle, instead of the predefined keywords. The angle <code>0deg</code> creates a bottom to top gradient, and positive angles represent clockwise rotation, that means the angle <code>90deg</code> creates a left to right gradient. The basic syntax of creating the linear gradients using angle can be given with:</p>
				<div class="shadow">
					<div class="syntax"><span class="keyword">linear-gradient</span>(angle, color-stop1, color-stop2, ...)</div>
				</div>
				<p>The following example will create a linear gradient from left to right using angle.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab98e7.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">
                        .gradient {
    /* Fallback for browsers that don't support gradients */
    background: red;
    /* For Safari 5.1 to 6.0 */
    background: -webkit-linear-gradient(0deg, red, yellow);
    /* For Internet Explorer 10 */
    background: -ms-linear-gradient(0deg, red, yellow);
    /* Standard syntax */
    background: linear-gradient(90deg, red, yellow);
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
                <!--End:Code box-->
				<hr />
				<h2>Creating Linear Gradients Using Multiple Color Stops</h2>
				<p>You can also create gradients for more than two colors. The following example will show you how to create a linear gradient using multiple color stops. All colors are evenly spaced.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab98a5.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">
                        .gradient {
    /* Fallback for browsers that don't support gradients */
    background: red;
    /* For Safari 5.1 to 6.0 */
    background: -webkit-linear-gradient(red, yellow, lime);
    /* For Internet Explorer 10 */
    background: -ms-linear-gradient(red, yellow, lime);
    /* Standard syntax */
    background: linear-gradient(red, yellow, lime);
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
                <!--End:Code box-->
				<hr />
				<h2>Setting the Location Color Stops</h2>
				<p>Color stops are points along the gradient line that will have a specific color at that location. The location of a color stop can be specified either as a percentage, or as an absolute length. You may specify as many color stops as you like to achieve the desired effect.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab6656.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code6">
                        .gradient {
    /* Fallback for browsers that don't support gradients */
    background: red;
    /* For Safari 5.1 to 6.0 */
    background: -webkit-linear-gradient(red, yellow 30%, lime 60%);
    /* For Internet Explorer 10 */
    background: -ms-linear-gradient(red, yellow 30%, lime 60%);
    /* Standard syntax */
    background: linear-gradient(red, yellow 30%, lime 60%);
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
                <!--End:Code box-->
				<!--Note box-->
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585">
							<p><strong>Read Carefully:</strong> While setting the color-stops location as a percentage, <code>0%</code> represents the starting point, while <code>100%</code> represents the ending point. However, you can use values outside of that range i.e. before <code>0%</code> or after <code>100%</code> to get the effect you want.</p>
						</div>
					</div>
				</div>
				<!--End:Note box-->
				<hr />
				<h2>Repeating the Linear Gradients</h2>
				<p>You can repeat linear gradients using the <code>repeating-linear-gradient()</code> function.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab33a8.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code7">
                        .gradient {
    /* Fallback for browsers that don't support gradients */
    background: red;
    /* For Safari 5.1 to 6.0 */
    background: -webkit-linear-gradient(red, yellow, lime);
    /* For Internet Explorer 10 */
    background: -ms-linear-gradient(red, yellow, lime);
    /* Standard syntax */
    background: linear-gradient(red, yellow, lime);
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
                <!--End:Code box-->
				<hr />
				<h2>Creating CSS3 Radial Gradients</h2>
				<p>In a radial gradient color emerge from a single point and smoothly spread outward in a circular or elliptical shape rather than fading from one color to another in a single direction as with linear gradients. The basic syntax of creating a radial gradient can be given with:</p>
				<div class="shadow">
					<div class="syntax"><span class="keyword">radial-gradient</span>(shape size <span class="keyword">at</span> position, color-stop1, color-stop2, ...);</div>
				</div>
				<p>The arguments of the <code>radial-gradient()</code> function has the following meaning:</p>
				<ul>
					<li><strong>position</strong> &mdash; Specifies the starting point of the gradient, which can be specified in units (px, em, or percentages) or keyword (left, bottom, etc).</li>
					<li><strong>shape</strong> &mdash; Specifies the shape of the gradient's ending shape. It can be circle or ellipse.</li>
					<li><strong>size</strong> &mdash; Specifies the size of the gradient's ending shape. The default is <code>farthest-side</code>.</li>
				</ul>
				<p>The following example will show you create a radial gradient with evenly spaced color stops.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelaba73f.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code8">

                        .gradient {
    /* Fallback for browsers that don't support gradients */
    background: red;
    /* For Safari 5.1 to 6.0 */
    background: -webkit-linear-gradient(red, yellow 30%, lime 60%);
    /* For Internet Explorer 10 */
    background: -ms-linear-gradient(red, yellow 30%, lime 60%);
    /* Standard syntax */
    background: linear-gradient(red, yellow 30%, lime 60%);
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
                <!--End:Code box-->
				<hr />
				<h2>Setting the Shape of Radial Gradients</h2>
				<p>The shape argument of the <code>radial-gradient()</code> function is used to define the ending shape of the radial gradient. It can take the value <code>circle</code> or <code>ellipse</code>. Here's is an example:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelaba956.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code9">
                        .gradient {
    /* Fallback for browsers that don't support gradients */
    background: white;
    /* For Safari 5.1 to 6.0 */
    background: -webkit-repeating-linear-gradient(black, white 10%, lime 20%);
    /* For Internet Explorer 10 */
    background: -ms-repeating-linear-gradient(black, white 10%, lime 20%);
    /* Standard syntax */
    background: repeating-linear-gradient(black, white 10%, lime 20%);
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
                <!--End:Code box-->
				<!--Note box-->
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585">
							<p><strong>Read Carefully:</strong> If the shape argument is omitted or not specified, the ending shape defaults to a circle if the size is a single length, otherwise an ellipse.</p>
						</div>
					</div>
				</div>
				<!--End:Note box-->
				<hr />
				<h2>Setting the Size of Radial Gradients</h2>
				<p>The size argument of the <code>radial-gradient()</code> function is used to define the size of the gradient's ending shape. Size can be set using units or the keywords: <code>closest-side</code>, <code>farthest-side</code>, <code>closest-corner</code>, <code>farthest-corner</code>.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab3acb.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code10">
                        .gradient {
    /* Fallback for browsers that don't support gradients */
    background: red;
    /* For Safari 5.1 to 6.0 */
    background: -webkit-radial-gradient(red, yellow, lime);
    /* For Internet Explorer 10 */
    background: -ms-radial-gradient(red, yellow, lime);
    /* Standard syntax */
    background: radial-gradient(red, yellow, lime);
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
                <!--End:Code box-->
				<hr />
				<h2>Repeating the Radial Gradients</h2>
				<p>You can also repeat radial gradients using the <code>repeating-radial-gradient()</code> function.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab5998.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <<textarea id="code11">
                        .gradient {
    /* Fallback for browsers that don't support gradients */
    background: red;
    /* For Safari 5.1 to 6.0 */
    background: -webkit-radial-gradient(circle, red, yellow, lime);
    /* For Internet Explorer 10 */
    background: -ms-radial-gradient(circle, red, yellow, lime);
    /* Standard syntax */
    background: radial-gradient(circle, red, yellow, lime);
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
                <!--End:Code box-->
				<hr />
				<h2>CSS3 Transparency and Gradients</h2>
				<p>CSS3 gradients also support <a href="style_opacity.php">transparency</a>. You can use this to create fading effects on background images when stacking <a href="stylel_background.php#stylel_multiple-backgrounds">multiple backgrounds</a>.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelaba148.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code12">
                        .gradient {
    /* Fallback for browsers that don't support gradients */
    background: url("images/sky.jpg");
    /* For Safari 5.1 to 6.0 */
    background: -webkit-linear-gradient(left, rgba(255,255,255,0), rgba(255,255,255,1)), url("images/sky.jpg");
    /* For Internet Explorer 10 */
    background: -ms-linear-gradient(left, rgba(255,255,255,0), rgba(255,255,255,1)), url("images/sky.jpg");
    /* Standard syntax */
    background: linear-gradient(to right, rgba(255,255,255,0), rgba(255,255,255,1)), url("images/sky.jpg");
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
                <!--End:Code box-->
				<!--Bottom Navigation-->
                <div class="bottom-link clearfix">
                    <a href="stylel_background.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="stylel_text-overflow.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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