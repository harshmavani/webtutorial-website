<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS3 transform-style Property">
	  <meta name="keywords" content="css,css3,CSS3 transform-style Property">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS3 transform-style Property - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS3 transform-style Property</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css_inner.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
            	<h1>CSS3 <code>transform-style</code> Property</h1>
				<p class="topic">Topic: <a href="stylel_properties.php">CSS3 Properties Reference</a><span class="topic-nav"><a href="stylel_transform-origin-property.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="stylel_transition-property.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
				<h2>Description</h2>
				<p>The <code>transform-style</code> CSS property specifies whether the children of the element are positioned in the 3D-space or are flattened in the plane of the element. If flattened, the child elements will not exist on their own in the 3D-space.</p>
				<p>This property is only applied to child elements that have a <code><a href="stylel_transform-property.php">transform</a></code> property specified.</p>
				<p>The following table summarizes the usages context and the version history of this property.</p>
				<div class="shadow">
					<table class="data description">
						<tr>
							<th>Default value:</th>
							<td><code>flat</code></td>
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
							<td>No. <a href="style_animatable-properties.php"><i>See</i> <em>animatable properties</em></a>.</td>
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
								<td><pre class="property">transform-style: </pre></td>
								<td><span class="keyword">flat</span> | <span class="keyword">preserve-3d</span> | <a href="../definitions.php#initial">initial</a> | <a href="../definitions.php#inherit">inherit</a></td>
							</tr>
						</table>
					</div>
				</div>
				<p>The example below shows the <code>transform-style</code> property in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelab50b7.html">Try this code <span>&raquo;</span></a></div>
						<textarea id="code1">

img {
    /* Chrome, Safari, Opera */
    -webkit-transform: rotate(30deg);
    -webkit-transform-style: preserve-3d;
    /* Firefox */
    -moz-transform: rotate(30deg);
    -moz-transform-style: preserve-3d;
    /* IE 9 */
    -ms-transform: rotate(30deg);
    -ms-transform-style: preserve-3d;
    /* Standard syntax */
    transform: rotate(30deg);
    transform-style: preserve-3d;
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
							<th style="width: 100px;">Value</th>
							<th>Description</th>
						</tr>
						<tr>
							<td><code>flat</code></td>
							<td>The children of the element are flattened i.e. lying in the plane of the element itself. This is default value.</td>
						</tr>
						<tr>
							<td><code>preserve-3d</code></td>
							<td>The children of the element should be positioned in the 3D-space.</td>
						</tr>
						<tr>
							<td><code>initial</code></td>
							<td>Sets this property to its default value.</td>
						</tr>
						<tr>
							<td><code>inherit</code></td>
							<td>If specified, the associated element takes the <a href="../definitions.php#computed-value">computed value</a> of its parent element <code>transform-style</code> property.</td>
						</tr>
					</table>
				</div>	
				<hr />
				<h2>Browser Compatibility</h2>
				<p>The <code>transform-style</code> property is supported in all major modern browsers.</p>
				<div class="shadow">
					<div class="support">
						<table>
							<tr>
								<td><img src="../assets/images/browser.jpg" alt="Browsers Icon" /></td>
								<td>
									<h2>Basic Support&mdash;</h2>
									<ul>
										<li>Firefox <span>10+ <sup class="badge">-moz-</sup></span>, <span>16+</span></li>
										<li>Chrome <span>12+ <sup class="badge">-webkit-</sup></span>, <span>36+</span></li>
										<li>Internet Explorer <span>11+</span></li>
										<li>Apple Safari <span>4+ <sup class="badge">-webkit-</sup></span></li>
										<li>Opera <span>15+  <sup class="badge">-webkit-</sup></span>, <span>23+</span></li>
									</ul>
								</td>
							</tr>
						</table>
					</div>
				</div>
				<hr />
				<h2>Further Reading</h2>
				<p>See tutorial on: <a href="../des-css/stylel_2d-transforms.php">CSS3 2D Transforms</a>, <a href="../des-css/stylel_3d-transforms.php">CSS3 3D Transforms</a></p>
				<p>Related properties: <code><a href="stylel_backface-visibility-property.php">backface-visibility</a></code>, <code><a href="stylel_perspective-property.php">perspective</a></code>, <code><a href="stylel_perspective-origin-property.php">perspective-origin</a></code>, <code><a href="stylel_transform-property.php">transform</a></code>, <code><a href="stylel_transform-origin-property.php">transform-origin</a></code>.</p>
				<div class="bottom-link clearfix">
					<a href="stylel_transform-origin-property.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
					<a href="stylel_transition-property.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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