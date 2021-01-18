<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS3 perspective-origin Property">
	  <meta name="keywords" content="css,css3,CSS3 perspective-origin Property">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS3 perspective-origin Property - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS3 perspective-origin Property</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css_inner.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
            	<h1>CSS3 <code>perspective-origin</code> Property</h1>
				<p class="topic">Topic: <a href="stylel_properties.php">CSS3 Properties Reference</a><span class="topic-nav"><a href="stylel_perspective-property.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="style_position-property.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
				<h2>Description</h2>
				<p>The <code>perspective-origin</code> CSS property defines the origin (the vanishing point for the 3D space) for the <code><a href="stylel_perspective-property.php">perspective</a></code> property. It effectively sets the X and Y position at which the viewer appears to be looking at the children of the element.</p>
				<p>The following table summarizes the usages context and the version history of this property.</p>
				<div class="shadow">
					<table class="data description">
						<tr>
							<th>Default value:</th>
							<td><code>50% 50%</code></td>
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
								<td><pre class="property">perspective-origin: </pre></td>
								<td>[ <i>x-position y-position</i> ] | <a href="../definitions.php#initial">initial</a> | <a href="../definitions.php#inherit">inherit</a></td>
							</tr>
						</table>
					</div>
				</div>
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585">
							<p><strong>Read Carefully:</strong> If only one value is specified for the <code>perspective-origin</code> property, the second value is assumed to be <code>center</code>, which is equal to <code>50%</code> value.</p>
						</div>
					</div>
				</div>
				<p>The example below shows the <code>perspective-origin</code> property in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelab14e3.html">Try this code <span>&raquo;</span></a></div>
						<textarea id="code1">

.container{
    width: 125px;
    height: 125px;
    perspective: 300px;
    perspective-origin: 20% top;
    border: 4px solid #a2b058;
    background: #f0f5d8;
}
.transformed {
    -webkit-transform: rotate3d(0, 1, 0, 60deg); /* Chrome, Safari, Opera */
    transform: rotate3d(0, 1, 0, 60deg); /* Standard syntax */
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
							<p><strong>Read Carefully:</strong> If at least one of the two values is not a keyword, then the first value represents the horizontal position (or offset) and the second value represents the vertical position (or offset) of the perspective origin.</p>
						</div>
					</div>
				</div>
				<hr />	
				<h2>Property Values</h2>
				<p>The following table describes the values of this property.</p>
				<div class="shadow space" id="property-values">
					<table class="data">
						<tr>
							<th style="width: 80px;">Value</th>
							<th>Description</th>
						</tr>
						<tr>
							<td><i>x-position</i></td>
							<td>
								<p>Represents the horizontal position (or offset) of the perspective origin. It can have one of the following values:</p>
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
							<td><i>y-position</i></td>
							<td>
								<p>Represents the vertical position (or offset) of the perspective origin. It can have one of the following values:</p>
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
							<td><code>initial</code></td>
							<td>Sets this property to its default value.</td>
						</tr>
						<tr>
							<td><code>inherit</code></td>
							<td>If specified, the associated element takes the <a href="../definitions.php#computed-value">computed value</a> of its parent element <code>perspective-origin</code> property.</td>
						</tr>
					</table>
				</div>				
				<hr />
				<h2>Browser Compatibility</h2>
				<p>The <code>perspective-origin</code> property is supported in all major modern browsers.</p>
				<div class="shadow">
					<div class="support">
						<table>
							<tr>
								<td><img src="../assets/images/browser.jpg" alt="Browsers Icon" /></td>
								<td>
									<h2>Basic Support&mdash;</h2>
									<ul>
										<li>Firefox <span>10+ <sup class="badge">-moz-</sup></span>, <span>16+</span></li>
										<li>Google Chrome <span>12+ <sup class="badge">-webkit-</sup></span>, <span>36+</span></li>
										<li>Internet Explorer <span>10+</span></li>
										<li>Apple Safari <span>4.0.3+ <sup class="badge">-webkit-</sup></span></li>
										<li>Opera <span>15+ <sup class="badge">-webkit-</sup></span>, <span>23+</span></li>
									</ul>
								</td>
							</tr>
						</table>
					</div>
				</div>
				<hr />
				<h2>Further Reading</h2>
				<p>See tutorial on: <a href="../des-css/stylel_3d-transforms.php" class="selected">CSS3 3D Transforms</a>.</p>
				<p>Related properties: <code><a href="stylel_perspective-property.php">perspective</a></code>, <code><a href="stylel_backface-visibility-property.php">backface-visibility</a></code>, <code><a href="stylel_transform-property.php">transform</a></code>, <code><a href="stylel_transform-origin-property.php">transform-origin</a></code>, <code><a href="stylel_transform-style-property.php">transform-style</a></code>.</p>
				<div class="bottom-link clearfix">
					<a href="stylel_perspective-property.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
					<a href="style_position-property.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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