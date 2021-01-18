<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS3 perspective Property">
	  <meta name="keywords" content="css,css3,CSS3 perspective Property">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS3 perspective Property - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS3 perspective Property</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css_inner.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
            	<h1>CSS3 <code>perspective</code> Property</h1>
				<p class="topic">Topic: <a href="stylel_properties.php">CSS3 Properties Reference</a><span class="topic-nav"><a href="style_page-break-inside-property.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="stylel_perspective-origin-property.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
				<h2>Description</h2>
				<p>The <code>perspective</code> CSS property defines the perspective from which all child elements of the object are viewed. It is typically determines the distance between the <code>Z&thinsp;=&thinsp;0</code> plane and the viewer in order to give the feel of depth to the 3D-positioned element. Each 3D element with <code>Z&thinsp;&gt;&thinsp;0</code> becomes larger, while each 3D-element with <code>Z&thinsp;&lt;&thinsp;0</code> becomes smaller.</p>
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
								<td><pre class="property">perspective: </pre></td>
								<td><i>length</i> | <span class="keyword">none</span> | <a href="../definitions.php#initial">initial</a> | <a href="../definitions.php#inherit">inherit</a></td>
							</tr>
						</table>
					</div>
				</div>
				<p>The example below shows the <code>perspective</code> property in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelab7037.html">Try this code <span>&raquo;</span></a></div>
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
							<td><i>length</i></td>
							<td>A length value indicating the depth of the perspective. If it is 0 or negative, no perspective transform is applied.</td>
						</tr>
						<tr>
							<td><code>none</code></td>
							<td>No perspective transform has to be applied. This is default value.</td>
						</tr>	
						<tr>
							<td><code>initial</code></td>
							<td>Sets this property to its default value.</td>
						</tr>
						<tr>
							<td><code>inherit</code></td>
							<td>If specified, the associated element takes the <a href="../definitions.php#computed-value">computed value</a> of its parent element <code>perspective</code> property.</td>
						</tr>
					</table>
				</div>	
				<hr />
				<h2>Browser Compatibility</h2>
				<p>The <code>perspective</code> property is supported in all major modern browsers.</p>
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
				<p>Related properties: <code><a href="stylel_perspective-origin-property.php">perspective-origin</a></code>, <code><a href="stylel_backface-visibility-property.php">backface-visibility</a></code>, <code><a href="stylel_transform-property.php">transform</a></code>, <code><a href="stylel_transform-origin-property.php">transform-origin</a></code>, <code><a href="stylel_transform-style-property.php">transform-style</a></code>.</p>
				<div class="bottom-link clearfix">
					<a href="style_page-break-inside-property.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
					<a href="stylel_perspective-origin-property.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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