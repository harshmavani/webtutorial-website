<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="keywords" content="css,css3,2D Transform Functions">
	  <meta name="author" content="webschooltoday.com">
    <title>Working with CSS3 2D Transform Functions - WebSchool Today</title>
	<meta name="description" content="Working with CSS3 2D Transform Functions" />
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">Working with CSS3 2D Transform Functions</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des-css.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
            	<a href="stylel_drop-shadows.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                <a href="stylel_3d-transforms.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                <h1>CSS3 <span>2D Transforms</span></h1>
                <p class="summary">The CSS3 2D transform feature allows elements to be transformed in 2D space.</p>
				<h2>2D Transformation of Elements</h2>
				<p>With CSS3 2D transform feature you can perform basic transform manipulations such as move, rotate, scale and skew on elements in a two-dimensional space.</p>
				<p class="space">A transformed element doesn't affect the surrounding elements, but can overlap them, just like the absolutely positioned elements. However, the transformed element still takes space in the layout at its default (un-transformed) location.</p>
				<h2>Using CSS Transform and Transform Functions</h2>
				<p>The CSS3 <code>transform</code> property uses the transform functions to manipulate the coordinate system used by an element in order to apply the transformation effect.</p>
				<p class="space">The following section describes these transform functions:</p>
				<h2>The <code>translate()</code> Function</h2>
				<p>Moves the element from its current position to a new position along the X and Y axes. This can be written as <code>translate(tx, ty)</code>. If <code>ty</code> isn't specified, its value is assumed to be zero.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab6f32.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">
						img {
    -webkit-transform: translate(200px, 50px);  /* Chrome, Safari, Opera */
       -moz-transform: translate(200px, 50px);  /* Firefox */
        -ms-transform: translate(200px, 50px);  /* IE 9 */
            transform: translate(200px, 50px);  /* Standard syntax */    
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
				<p>The function <code>translate(200px, 50px)</code> moves the image 200 pixels horizontally along the positive x-axis, and 50 pixels vertically along the positive y-axis.</p>				
				<div class="demo-box">
					<a target="_blank" href="../codelab6f32.html">
						<img src="../lib/images/stylel_translate-illustration.png" alt="CSS3 Translate Demo" />
					</a>
				</div>
				<hr />
				<h2>The <code>rotate()</code> Function</h2>
				<p>The <code>rotate()</code> function rotates the element around its origin (as specified by the <code>transform-origin</code> property) by the specified angle. This can be written as <code>rotate(a)</code>.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab7b8d.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">
						img {
    -webkit-transform: rotate(30deg);  /* Chrome, Safari, Opera */
       -moz-transform: rotate(30deg);  /* Firefox */
        -ms-transform: rotate(30deg);  /* IE 9 */
            transform: rotate(30deg);  /* Standard syntax */    
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
				<p>The function <code>rotate(30deg)</code> rotates the image in clockwise direction about its origin by the angle 30 degrees. You can use negative values to rotate the element counter-clockwise.</p>				
				<div class="demo-box">
					<a target="_blank" href="../codelab7b8d.html">
						<img src="../lib/images/stylel_rotate-illustration.png" alt="CSS3 Rotate Demo" />
					</a>
				</div>
				<hr />
				<h2>The <code>scale()</code> Function</h2>
				<p>The <code>scale()</code> function increases or decreases the size of the element. It can be written as <code>scale(sx, sy)</code>. If <code>sy</code> isn't specified, it is assumed to be equal to <code>sx</code>.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabe995.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code3">
						img {
    -webkit-transform: scale(1.5);  /* Chrome, Safari, Opera */
       -moz-transform: scale(1.5);  /* Firefox */
        -ms-transform: scale(1.5);  /* IE 9 */
            transform: scale(1.5);  /* Modern Browsers */    
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
				<p>The function <code>scale(1.5)</code> proportionally scale the width and height of the image <code>1.5</code> times to its original size. The function <code>scale(1)</code> or <code>scale(1, 1)</code> has no effect on the element.</p>				
				<div class="demo-box">
					<a target="_blank" href="../codelabe995.html">
						<img src="../lib/images/stylel_scale-illustration.png" alt="CSS3 Scale Demo" />
					</a>
				</div>
				<hr />
				<h2>The <code>skew()</code> Function</h2>
				<p>The <code>skew()</code> function skews the element along the X and Y axes by the specified angles. It can be written as <code>skew(ax, ay)</code>.  If <code>ay</code> isn't specified, its value is assumed to be zero.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab6969.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code4">
						img {
    -webkit-transform: skew(-40deg, 15deg);  /* Chrome, Safari, Opera */
       -moz-transform: skew(-40deg, 15deg);  /* Firefox */
        -ms-transform: skew(-40deg, 15deg);  /* IE 9 */
            transform: skew(-40deg, 15deg);  /* Modern Browsers */    
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
				<p>The function <code>skew(-40deg, 15deg)</code> skews the element -40 degree horizontally along the<br /> x-axis, and 15 degree vertically along the y-axis.</p>				
				<div class="demo-box">
					<a target="_blank" href="../codelab6969.html">
						<img src="../lib/images/stylel_skew-illustration.png" alt="CSS3 Skew Demo" />
					</a>
				</div>
				<hr />
				<h2>The <code>matrix()</code> Function</h2>
				<p>The <code>matrix()</code> function can perform all of the 2D transformations such as translate, rotate, scale, and skew at once. It takes six parameters in the form of a <a href="http://www.w3.org/TR/stylel_transforms/#MatrixDefined" target="_blank" rel="nofollow">matrix</a> which can be written as <code>matrix(a, b, c, d, e, f)</code>. The following section will show you how each of the 2D transformation functions can be represented using the <code>matrix()</code>.</p>
				<ul>
					<li><code>translate(tx, ty) = matrix(1, 0, 0, 1, tx, ty);</code> &mdash; where <code>tx</code> and <code>ty</code> are the horizontal and vertical translation values.</li>
					<li><code>rotate(a) = matrix(cos(a), sin(a), -sin(a), cos(a), 0, 0);</code> &mdash; where a is the value in deg. You can swap the <code>sin(a)</code> and <code>-sin(a)</code> values to reverse the rotation. The maximum rotation you could perform is 360 degrees.</li>
					<li><code>scale(sx, sy) = matrix(sx, 0, 0, sy, 0 ,0);</code> &mdash; where <code>sx</code> and <code>sy</code> are the horizontal and vertical scaling values.</li>
					<li><code>skew(ax, ay) = matrix(1, tan(ay), tan(ay), 1, 0 ,0);</code> &mdash; where <code>ax</code> and <code>ay</code> are the horizontal and vertical values in deg.</li>
				</ul>
				<p>Here is an example of performing the 2D transformation using the <code>matrix()</code> function.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab028f.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">
						img {
    -webkit-transform: matrix(0, -1, 1, 0, 200px, 50px);  /* Chrome, Safari, Opera */
       -moz-transform: matrix(0, -1, 1, 0, 200px, 50px);  /* Firefox */
        -ms-transform: matrix(0, -1, 1, 0, 200px, 50px);  /* IE 9 */
            transform: matrix(0, -1, 1, 0, 200px, 50px);  /* Standard syntax */
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
				<p>However, when performing more than one transformation at once, it is more convenient to use the individual transformation function and list them in order, like this:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab4df8.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code6">
						img {
    -webkit-transform: translate(200px, 50px) rotate(180deg) scale(1.5) skew(0, 30deg);  /* Chrome, Safari, Opera */
       -moz-transform: translate(200px, 50px) rotate(180deg) scale(1.5) skew(0, 30deg);  /* Firefox */
        -ms-transform: translate(200px, 50px) rotate(180deg) scale(1.5) skew(0, 30deg);  /* IE 9 */
            transform: translate(200px, 50px) rotate(180deg) scale(1.5) skew(0, 30deg);  /* Standard syntax */    
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
				<hr />
				<h2>2D Transform Functions</h2>
				<p>The following table provides a brief overview of all the 2D transformation functions.</p>
				<div class="shadow">
					<table class="data">
						<thead>
							<tr>
								<th style="width: 140px;">Function</th>
								<th>Description</th>
							</tr>
						</thead>
						<tbody>							
							<tr>
								<td><code>translate(tx,ty)</code></td>
								<td>Moves the element by the given amount along the X and Y-axis.</td>
							</tr>
							<tr>
								<td><code>translateX(tx)</code></td>
								<td>Moves the the element by the given amount along the X-axis.</td>
							</tr>
							<tr>
								<td><code>translateY(ty)</code></td>
								<td>Moves the the element by the given amount along the Y-axis.</td>
							</tr>
							<tr>
								<td><code>rotate(a)</code></td>
								<td>Rotates the element by the specified angle around the origin of the element, as defined by the <code>transform-origin</code> property.</td>
							</tr>
							<tr>
								<td><code>scale(sx,sy)</code></td>
								<td>Scale the width and height of the element up or down by the given amount. The function <code>scale(1,1)</code> has no effect.</td>
							</tr>
							<tr>
								<td><code>scaleX(sx)</code></td>
								<td>Scale the width of the element up or down by the given amount.</td>
							</tr>
							<tr>
								<td><code>scaleY(sy)</code></td>
								<td>Scale the height of the element up or down by the given amount.</td>
							</tr>							
							<tr>
								<td><code>skew(ax,ay)</code></td>
								<td>Skews the element by the given angle along the X and Y-axis.</td>
							</tr>
							<tr>
								<td><code>skewX(ax)</code></td>
								<td>Skews the element by the given angle along the X-axis.</td>
							</tr>
							<tr>
								<td><code>skewY(ay)</code></td>
								<td>Skews the element by the given angle along the Y-axis.</td>
							</tr>
							<tr>
								<td><code>matrix(n,n,n,n,n,n)</code></td>
								<td>Specifies a 2D transformation in the form of a transformation matrix comprised of the six values.</td>
							</tr>
						</tbody>
					</table>
				</div>
				<!--Bottom Navigation-->
                <div class="bottom-link clearfix">
                    <a href="stylel_drop-shadows.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="stylel_3d-transforms.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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