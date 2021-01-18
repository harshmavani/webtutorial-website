<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS3 transform-origin Property">
	  <meta name="keywords" content="css,css3,CSS3 transform-origin Property">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS3 transform-origin Property - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS3 transform-origin Property</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css_inner.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
            	<h1>CSS3 <code>transform-origin</code> Property</h1>
				<p class="topic">Topic: <a href="stylel_properties.php">CSS3 Properties Reference</a><span class="topic-nav"><a href="stylel_transform-property.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="stylel_transform-style-property.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
				<h2>Description</h2>
				<p>The <code>transform-origin</code> CSS property establish the origin of transformation for an element.</p>
				<p>The following table summarizes the usages context and the version history of this property.</p>
				<div class="shadow">
					<table class="data description">
						<tr>
							<th>Default value:</th>
							<td><code>50% 50% 0</code></td>
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
								<td><pre class="property">transform-origin: </pre></td>
								<td><i>x-position</i> | <i>y-position</i> | <i>z-position</i> | <a href="../definitions.php#initial">initial</a> | <a href="../definitions.php#inherit">inherit</a></td>
							</tr>
						</table>
					</div>
				</div>
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585">
							<p><strong>Read Carefully:</strong> If only one value is specified for the <code>transform-origin</code> property, the second value is assumed to be <code>center</code>, which is equal to <code>50%</code> value.</p>
						</div>
					</div>
				</div>
				<p>The example below shows the <code>transform-origin</code> property in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelab686b.html">Try this code <span>&raquo;</span></a></div>
						<textarea id="code1">

img {
    /* Chrome, Safari, Opera */
    -webkit-transform: rotate(30deg);
    -webkit-transform-origin: 25% bottom;
    /* Firefox */
    -moz-transform: rotate(30deg);
    -moz-transform-origin: 25% bottom;
    /* IE 9 */
    -ms-transform: rotate(30deg);
    -ms-transform-origin: 25% bottom;
    /* Standard syntax */
    transform: rotate(30deg);
    transform-origin: 25% bottom;
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
							<p><strong>Read Carefully:</strong> If at least one of the two values is not a keyword, then the first value represents the horizontal position (or offset) and the second value represents the vertical position (or offset) of the transform origin.</p>
						</div>
					</div>
				</div>
				<hr />	
				<h2>Property Values</h2>
				<p>The following table describes the values of this property.</p>
				<div class="shadow space">
					<table class="data">
						<tr>
							<th style="width: 80px;">Value</th>
							<th>Description</th>
						</tr>
						<tr>
							<td><code><i>x-position</i></code></td>
							<td>
								<p>Represents the horizontal position (or offset) of the transform origin. It can have one of the following values:</p>
								<ul>
									<li><i>percentage</i> - Defines the offset relative to the width of the element.</li>
									<li><i>length</i> - Defines the offset using a length value.</li>
									<li><code>left</code> - Equal to 0% or a zero width.</li>
									<li><code>center</code> - Equal to 50% or half the width of the box.</li>
									<li><code>right</code> - Equal to 100% or the full box width.</li>
								</ul>
							</td>
						</tr>
						<tr>
							<td><code><i>y-position</i></code></td>
							<td>
								<p>Represents the vertical position (or offset) of the transform origin. It can have one of the following values:</p>
								<ul>
									<li><i>percentage</i> - Defines the offset relative to the height of the element.</li>
									<li><i>length</i> - Defines the offset using a length value.</li>
									<li><code>top</code> - Equal to 0% or a zero height.</li>
									<li><code>center</code> - Equal to 50% or a half the height of the box.</li>
									<li><code>bottom</code> - Equal to 100% or the full box height.</li>
								</ul>								
							</td>
						</tr>
						<tr>
							<td><code><i>z-position</i></code></td>
							<td>A <i>length</i> value describing how far from the user eye the <code>Z&thinsp;=&thinsp;0</code> origin is set (for <a href="../des-css/stylel_3d-transforms.php">3D transforms</a>). Percentage values are invalid.</td>
						</tr>
						<tr>
							<td><code>initial</code></td>
							<td>Sets this property to its default value.</td>
						</tr>
						<tr>
							<td><code>inherit</code></td>
							<td>If specified, the associated element takes the <a href="../definitions.php#computed-value">computed value</a> of its parent element <code>transform-origin</code> property.</td>
						</tr>
					</table>
				</div>	
				<hr />
				<h2>Browser Compatibility</h2>
				<p>The <code>transform-origin</code> property is supported in all major modern browsers.</p>
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
				<p>See tutorial on: <a href="../des-css/stylel_2d-transforms.php">CSS3 2D Transforms</a>, <a href="../des-css/stylel_3d-transforms.php">CSS3 3D Transforms</a></p>
				<p>Related properties: <code><a href="stylel_backface-visibility-property.php">backface-visibility</a></code>, <code><a href="stylel_perspective-property.php">perspective</a></code>, <code><a href="stylel_perspective-origin-property.php">perspective-origin</a></code>, <code><a href="stylel_transform-property.php">transform</a></code>, <code><a href="stylel_transform-style-property.php">transform-style</a></code>.</p>
				<div class="bottom-link clearfix">
					<a href="stylel_transform-property.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
					<a href="stylel_transform-style-property.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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