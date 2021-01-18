<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="keywords" content="css,css3,3D Transform Functions">
	  <meta name="author" content="webschooltoday.com">
    <title>Working with CSS3 3D Transform Functions - WebSchool Today</title>
	<meta name="description" content="Working with CSS3 3D Transform Functions" />
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">Working with CSS3 3D Transform Functions</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des-css.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
            	<a href="stylel_2d-transforms.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                <a href="stylel_transitions.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                <h1>CSS3 <span>3D Transforms</span></h1>
                <p class="summary">The CSS3 3D transform feature allows elements to be transformed in 3D space.</p>
				<h2>3D Transformation of Elements</h2>
				<p>With CSS3 3D transform feature you can perform basic transform manipulations such as move, rotate, scale and skew on elements in a three-dimensional space.</p>
				<p class="space">A transformed element doesn't affect the surrounding elements, but can overlap them, just like the absolutely positioned elements. However, the transformed element still takes space in the layout at its default (un-transformed) location.</p>
				<h2>Using CSS Transform and Transform Functions</h2>
				<p>The CSS3 <code>transform</code> property uses the transform functions to manipulate the coordinate system used by an element in order to apply the transformation effect.</p>
				<p class="space">The following section describes the 3D transform functions:</p>
				<h2>The <code>translate3d()</code> Function</h2>
				<p>Moves the element from its current position to a new position along the X, Y and Z-axis. This can be written as <code>translate(tx, ty, tz)</code>. Percentage values are not allowed for third translation-value parameter (i.e. <code>tz</code>).</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab1727.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">
						.container {
    width: 125px;
    height: 125px;
    perspective: 500px;
    border: 4px solid #e5a043;
    background: #fff2dd;
}
.transformed {
    -webkit-transform: translate3d(25px, 25px, 50px); /* Chrome, Safari, Opera */
    transform: translate3d(25px, 25px, 50px); /* Standard syntax */
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
				<p>The function <code>translate3d(25px, 25px, 50px)</code> moves the image 25 pixels along the positive X&nbsp;and Y-axis, and the 50 pixels along the positive Z-axis.</p>				
				<div class="demo-box">
					<a target="_blank" href="../codelab1727.html">
						<img src="../lib/images/stylel_3d-translation-illustration.png" alt="CSS3 3D Translation Demo" />
					</a>
				</div>
				<!--Note box-->
				<p>The 3D transform however uses the three-dimensional coordinate system, but movement along the Z-direction is not always noticeable because the elements exist on a two-dimensional plane (a flat surface) and have no depth.</p>
				<p>The <code>perspective</code> and <code>perspective-origin</code> CSS properties can be used to add a feeling of depth to a scene by making the elements higher on the Z-axis i.e. closer to the viewer appear larger, and those further away to the viewer appear smaller.</p>
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585">
							<p><strong>Read Carefully:</strong> If you apply 3D transformation to an element without setting the perspective the resulting effect will not appear as three-dimensional.</p>
						</div>
					</div>
				</div>
				<!--End:Note box-->
				<hr />
				<h2>The <code>rotate3d()</code> Function</h2>
				<p>The <code>rotate3d()</code> function rotates the element in 3D space by the specified angle around the [x,y,z] direction vector. This can be written as <code>rotate(vx, vy, vz, angle)</code>.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabd9cf.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">
						.container{
    width: 125px;
    height: 125px;
    perspective: 300px;
    border: 4px solid #a2b058;
    background: #f0f5d8;
}
.transformed {
    -webkit-transform: rotate3d(0, 1, 0, 60deg); /* Chrome, Safari, Opera */
    transform: rotate3d(0, 1, 0, 60deg); /* Standard syntax */
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
				<p>The function <code>rotate3d(0, 1, 0, 60deg)</code> rotates the image along the Y-axis by the angle 60 degrees. You can use negative values to rotate the element in opposite direction.</p>				
				<div class="demo-box">
					<a target="_blank" href="../codelabd9cf.html">
						<img src="../lib/images/stylel_3d-rotation-illustration.png" alt="CSS3 3D Rotation Demo" />
					</a>
				</div>
				<hr />
				<h2>The <code>scale3d()</code> Function</h2>
				<p>The <code>scale3d()</code> function changes the size of an element. It can be written as <code>scale(sx, sy, sz)</code>. The effect of this function is not evident unless you use it in combination with other transform functions such as rotate and the perspective, as shown in the example below.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab27ca.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">
						.container{
    width: 125px;
    height: 125px;
    perspective: 300px;
    border: 4px solid #6486ab;
    background: #e9eef3;
}
.transformed {
    -webkit-transform: scale3d(1, 1, 2) rotate3d(1, 0, 0, 60deg); /* Chrome, Safari, Opera */
    transform: scale3d(1, 1, 2) rotate3d(1, 0, 0, 60deg); /* Standard syntax */
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
				<p>The function <code>scale3d(1, 1, 2)</code> scales the elements along the Z-axis and the function <code>rotate3d(1, 0, 0, 60deg)</code> rotates the image along the X-axis by the angle 60 degrees.</p>				
				<div class="demo-box">
					<a target="_blank" href="../codelab27ca.html">
						<img src="../lib/images/stylel_3d-scale-illustration.png" alt="CSS3 3D Scale Demo" />
					</a>
				</div>
				<hr />
				<h2>The <code>matrix3d()</code> Function</h2>
				<p>The <code>matrix3d()</code> function can perform all of the 3D transformations such as translate, rotate, and scale at once. It takes 16 parameters in the form of a 4&times;4 transformation <a href="http://www.w3.org/TR/stylel_transforms/#MatrixDefined" target="_blank" rel="nofollow">matrix</a>.</p>
				<p>Here is an example of performing the 3D transformation using the <code>matrix3d()</code> function.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab37e7.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">
						.container{
    width: 125px;
    height: 125px;
    perspective: 300px;
    border: 4px solid #d14e46;
    background: #fddddb;
}
.transformed {
    -webkit-transform: matrix3d(0.359127, -0.469472, 0.806613, 0, 0.190951, 0.882948, 0.428884, 0, -0.913545, 0, 0.406737, 0, 0, 0, 0, 1); /* Chrome, Safari, Opera */
    transform: matrix3d(0.359127, -0.469472, 0.806613, 0, 0.190951, 0.882948, 0.428884, 0, -0.913545, 0, 0.406737, 0, 0, 0, 0, 1); /* Standard syntax */
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
				<p>However, when performing more than one transformation at once, it is more convenient to use the individual transformation function and list them in order, like this:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab48b4.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">
						.container{
    width: 125px;
    height: 125px;
    perspective: 300px;
    border: 4px solid #a2b058;
    background: #f0f5d8;
}
.transformed {
    -webkit-transform: translate3d(0, 0, 60px) rotate3d(0, 1, 0, -60deg) scale3d(1, 1, 2); /* Chrome, Safari, Opera */
    transform: translate3d(0, 0, 60px) rotate3d(0, 1, 0, -60deg) scale3d(1, 1, 2); /* Standard syntax */
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
				<h2>3D Transform Functions</h2>
				<p>The following table provides a brief overview of all the 3D transformation functions.</p>
				<div class="shadow">
					<table class="data">
						<thead>
							<tr>
								<th style="width:150px;">Function</th>
								<th>Description</th>
							</tr>
						</thead>
						<tbody>							
							<tr>
								<td><code>translate3d(tx,ty,tz)</code></td>
								<td>Moves the element by the given amount along the X, Y&thinsp;&amp;&thinsp;Z-axis.</td>
							</tr>
							<tr>
								<td><code>translateX(tx)</code></td>
								<td>Moves the element by the given amount along the X-axis.</td>
							</tr>
							<tr>
								<td><code>translateY(ty)</code></td>
								<td>Moves the element by the given amount along the Y-axis.</td>
							</tr>
							<tr>
								<td><code>translateZ(tz)</code></td>
								<td>Moves the element by the given amount along the Z-axis.</td>
							</tr>
							<tr>
								<td><code>rotate3d(x,y,z,&thinsp;a)</code></td>
								<td>Rotates the element in 3D space by the angle specified in the last parameter, around the [x,y,z] direction vector.</td>
							</tr>
							<tr>
								<td><code>rotateX(a)</code></td>
								<td>Rotates the element by the given angle around the X-axis.</td>
							</tr>
							<tr>
								<td><code>rotateY(a)</code></td>
								<td>Rotates the element by the given angle around the Y-axis.</td>
							</tr>
							<tr>
								<td><code>rotateZ(a)</code></td>
								<td>Rotates the element by the given angle around the Z-axis.</td>
							</tr>
							<tr>
								<td><code>scale3d(sx,sy,sz)</code></td>
								<td>Scales the element by the given amount along the X, Y and Z-axis. The function <code>scale3d(1,1,1)</code> has no effect.</td>
							</tr>
							<tr>
								<td><code>scaleX(sx)</code></td>
								<td>Scales the element along the X-axis.</td>
							</tr>
							<tr>
								<td><code>scaleY(sy)</code></td>
								<td>Scales the element along the Y-axis.</td>
							</tr>
							<tr>
								<td><code>scaleZ(sz)</code></td>
								<td>Scales the element along the Z-axis.</td>
							</tr>
							<tr>
								<td><code>matrix(n,n,n,n,n,n, n,n,n,n,n,n,n,n,n,n)</code></td>
								<td>Specifies a 3D transformation in the form of a 4&times;4 transformation matrix of 16 values.</td>
							</tr>
							<tr>
								<td><code>perspective(length)</code></td>
								<td>Defines a perspective view for a 3D transformed element. In general, as the value of this function increases, the element will appear further away from the viewer.</td>
							</tr>
						</tbody>
					</table>
				</div>
				<!--Bottom Navigation-->
                <div class="bottom-link clearfix">
                    <a href="stylel_2d-transforms.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="stylel_transitions.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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