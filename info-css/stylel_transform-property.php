<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS3 transform Property">
	  <meta name="keywords" content="css,css3,CSS3 transform Property">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS3 transform Property - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS3 transform Property</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css_inner.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
            	<h1>CSS3 <code>transform</code> Property</h1>
				<p class="topic">Topic: <a href="stylel_properties.php">CSS3 Properties Reference</a><span class="topic-nav"><a href="style_top-property.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="stylel_transform-origin-property.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
				<h2>Description</h2>
				<p>The <code>transform</code> CSS property applies a transformation to an element such as translate, rotate, scale etc. in 2D or 3D space.</p>
				<p>The following table summarizes the usages context and the version history of this property.</p>
				<div class="shadow">
					<table class="data description">
						<tr>
							<th>Default value:</th>
							<td><code>none</code></td>
						</tr>
						<tr>
							<th>Applies to:</th>
							<td>Transformable elements</td>
						</tr>
						<tr>
							<th>Inherited:</th>
							<td>No</td>
						</tr>
						<tr>
							<th>Animatable:</th>
							<td>Yes. <a href="style_animatable-properties.php"><i>See</i> <em>animatable properties</em></a>.</td>
						</tr>
						<tr>
							<th>Version:</th>
							<td><span class="stylel_badge"></span> New in CSS3</td>
						</tr>
					</table>
				</div>	
				<hr />
				<h2>Syntax</h2>
				<p>The syntax of the property is given with:</p>
				<div class="shadow">
					<div class="syntax">
						<table>
							<tr>
								<td><pre class="property">transform: </pre></td>
								<td>[ <i>transform-function</i> ] <sup>1 or more values</sup> | <span class="keyword">none</span> | <a href="../definitions.php#initial">initial</a> | <a href="../definitions.php#inherit">inherit</a></td>
							</tr>
						</table>
					</div>
				</div>
				<p>The example below shows the <code>transform</code> property in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelab3136.html">Try this code <span>&raquo;</span></a></div>
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
				<hr />	
				<h2>Property Values</h2>
				<p>The following table describes the values of this property.</p>
				<div class="shadow space">
					<table class="data">
						<tr>
							<th style="width: 140px;">Value</th>
							<th>Description</th>
						</tr>
						<tr>
							<td><code>translate(tx,ty)</code></td>
							<td>Moves the element by the given amount along the X and Y-axis.</td>
						</tr>
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
							<td><code>rotate(a)</code></td>
							<td>Rotates the element by the specified angle around the origin of the element, as defined by the <code>transform-origin</code> property.</td>
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
							<td><code>scale(sx,sy)</code></td>
							<td>Scale the width and height of the element up or down by the given amount. The function <code>scale(1,1)</code> has no effect.</td>
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
						<tr>
							<td><code>matrix(n,n,n,n,n,n, n,n,n,n,n,n,n,n,n,n)</code></td>
							<td>Specifies a 3D transformation in the form of a 4&times;4 transformation matrix of 16 values.</td>
						</tr>
						<tr>
							<td><code>perspective(length)</code></td>
							<td>Defines a perspective view for a 3D transformed element. In general, as the value of this function increases, the element will appear further away from the viewer.</td>
						</tr>
						<tr>
							<td><code>none</code></td>
							<td>Specifies that no transform should be applied.</td>
						</tr>
						<tr>
							<td><code>initial</code></td>
							<td>Sets this property to its default value.</td>
						</tr>
						<tr>
							<td><code>inherit</code></td>
							<td>If specified, the associated element takes the <a href="../definitions.php#computed-value">computed value</a> of its parent element <code>transform</code> property.</td>
						</tr>
					</table>
				</div>	
				<hr />
				<h2>Browser Compatibility</h2>
				<p>The <code>transform</code> property is supported in all major modern browsers.</p>
				<div class="shadow">
					<div class="support">
						<table>
							<tr>
								<td><img src="../assets/images/browser.jpg" alt="Browsers Icon" /></td>
								<td>
									<h2>Basic Support&mdash;</h2>
									<ul>
										<li>Firefox <span>(2D) 3.5+, (3D) 10+ <sup class="badge">-moz-</sup></span>, <span>16+</span></li>
										<li>Chrome <span>(2D) 4+, (3D) 12+ <sup class="badge">-webkit-</sup></span>, <span>36+</span></li>
										<li>Internet Explorer <span>(2D) 9 <sup class="badge">-ms-</sup></span>, <span>10+</span></li>
										<li>Apple Safari <span>(2D) 3.2+, (3D) 4+ <sup class="badge">-webkit-</sup></span></li>
										<li>Opera <span>(2D) 10.5+  <sup class="badge">-o-</sup></span>,<br /> <span>(2D) (3D) 15+  <sup class="badge">-webkit-</sup></span>, <span>23+</span></li>
									</ul>
								</td>
							</tr>
						</table>
					</div>
				</div>
				<hr />
				<h2>Further Reading</h2>
				<p>See tutorial on: <a href="../des-css/stylel_2d-transforms.php">CSS3 2D Transforms</a>, <a href="../des-css/stylel_3d-transforms.php" class="selected">CSS3 3D Transforms</a></p>
				<p>Related properties: <code><a href="stylel_backface-visibility-property.php">backface-visibility</a></code>, <code><a href="stylel_perspective-property.php">perspective</a></code>, <code><a href="stylel_perspective-origin-property.php">perspective-origin</a></code>, <code><a href="stylel_transform-origin-property.php">transform-origin</a></code>, <code><a href="stylel_transform-style-property.php">transform-style</a></code>.</p>
				<div class="bottom-link clearfix">
					<a href="style_top-property.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
					<a href="stylel_transform-origin-property.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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