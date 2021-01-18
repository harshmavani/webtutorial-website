<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS3 background-size Property">
	  <meta name="keywords" content="css,css3,mCSS3 background-size Property">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS3 background-size Property - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS3 background-size Property</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css_inner.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
            	<h1>CSS3 <code>background-size</code> Property</h1>
				<p class="topic">Topic: <a href="stylel_properties.php">CSS3 Properties Reference</a><span class="topic-nav"><a href="style_background-repeat-property.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="style_border-property.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
				<h2>Description</h2>
				<p>The <code>background-size</code> CSS property specifies the size of the background images.</p>
				<p>The following table summarizes the usages context and the version history of this property.</p>
				<div class="shadow">
					<table class="data description">
						<tr>
							<th>Default value:</th>
							<td><code>auto auto</code></td>
						</tr>
						<tr>
							<th>Applies to:</th>
							<td>All elements</td>
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
								<td><pre><span class="property">background-size</span>: </pre></td>
								<td><i>length</i> | <i>percentage</i> | <span class="keyword">auto</span> | <span class="keyword">cover</span> | <span class="keyword">contain</span> | <a href="../definitions.php#initial">initial</a> | <a href="../definitions.php#inherit">inherit</a></td>
							</tr>
						</table>
					</div>
				</div>
				<p>The example below shows the <code>background-size</code> property in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelab54c2.html">Try this code <span>&raquo;</span></a></div>
						<textarea id="code1">

.box {
    width: 250px;
    height: 150px;
    padding: 10px;
    border: 6px dashed #333;
    background: url("images/sky.jpg") no-repeat;
    background-size: contain;
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
						<div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
						<div class="tip-box" style="background-color:#fad28c">
							<p><strong>Important:</strong> The <code>background-size</code> property is typically used to create full size background images that scale according to the size of viewport or witdh of the browser.</p>
						</div>
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
							<td><i>length</i></td>
							<td>Sets the width and height of the background image to the specified length. The first value sets the width, and the second value set the height. If only one value is specified the second is assumed to be <code>auto</code>. Negative length values are not allowed.</td>
						</tr>
						<tr>
							<td><i>percentage</i></td>
							<td>Sets the width and height of the background image to the percentage of the background positioning area. The first value sets the width, and the second value sets the height. If only one value is specified the second is assumed to be <code>auto</code>. Negative percentage values are not allowed.</td>
						</tr>
						<tr>
							<td><code>auto</code></td>
							<td>An <code>auto</code> value for one dimension scales the background image in the corresponding direction such that its intrinsic proportion is maintained. If <code>auto</code> value is specified for both the dimensions, then the background image contains its own width and height, which is default behavior.</td>
						</tr>
						<tr>
							<td><code>cover</code></td>
							<td>Scale the image, while preserving its intrinsic aspect ratio (if any), to the smallest size such that both its width and its height can completely cover the background positioning area.</td>
						</tr>
						<tr>
							<td><code>contain</code></td>
							<td>Scale the image, while preserving its intrinsic aspect ratio (if any), to the largest size such that both its width and its height can fit inside the background positioning area.</td>
						</tr>
						<tr>
							<td><code>initial</code></td>
							<td>Sets this property to its default value.</td>
						</tr>
						<tr>
							<td><code>inherit</code></td>
							<td>If specified, the associated element takes the <a href="../definitions.php#computed-value">computed value</a> of its parent element <code>background-size</code> property.</td>
						</tr>
					</table>
				</div>	
				<hr />
				<h2>Browser Compatibility</h2>
				<p>The <code>background-size</code> property is supported in all major modern browsers.</p>
				<div class="shadow">
					<div class="support">
						<table>
							<tr>
								<td><img src="../assets/images/browser.jpg" alt="Browsers Icon" /></td>
								<td>
									<h2>Basic Support&mdash;</h2>
									<ul>
										<li>Firefox <span>4+</span></li>
										<li>Google Chrome <span>4+</span></li>
										<li>Internet Explorer <span>9+</span></li>
										<li>Apple Safari <span>3+</span></li>
										<li>Opera <span>10.5+</span></li>
									</ul>
								</td>
							</tr>
						</table>
					</div>
				</div>
				<hr />
				<h2>Further Reading</h2>
				<p>See tutorial on: <a href="../des-css/style_background.php">CSS Background</a>, <a href="../des-css/stylel_background.php">CSS3 Background</a>.</p>
				<p>Related properties: <code><a href="style_background-property.php">background</a></code>, <code><a href="style_background-attachment-property.php">background-attachment</a></code>, <code><a href="style_background-color-property.php">background-color</a></code>, <code><a href="style_background-image-property.php">background-image</a></code>, <code><a href="stylel_background-clip-property.php">background-clip</a></code>, <code><a href="style_background-position-property.php">background-position</a></code>, <code><a href="style_background-repeat-property.php">background-repeat</a></code>, <code><a href="stylel_background-origin-property.php">background-origin</a></code>.</p>
				<div class="bottom-link clearfix">
					<a href="style_background-repeat-property.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
					<a href="style_border-property.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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