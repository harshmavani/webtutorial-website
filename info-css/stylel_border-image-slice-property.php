<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS3 border-image-slice Property">
	  <meta name="keywords" content="css,css3,CSS3 border-image-slice Property">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS3 border-image-slice Property - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS3 border-image-slice Property</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css_inner.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
            	<h1>CSS3 <code>border-image-slice</code> Property</h1>
				<p class="topic">Topic: <a href="stylel_properties.php">CSS3 Properties Reference</a><span class="topic-nav"><a href="stylel_border-image-repeat-property.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="stylel_border-image-source-property.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
				<h2>Description</h2>
				<p>The <code>border-image-slice</code> CSS property divides the image specified by <code><a href="stylel_border-image-source-property.php">border-image-source</a></code> in nine regions: four corners, four edges, and a middle. It does this by specifying 4 inwards offsets that typically creates a three by three grid.</p>
				<p>The middle part of the border image is discarded and not used by the border itself but is used as a <code><a href="style_background-image-property.php">background-image</a></code> if the <code>fill</code> keyword is present.</p>
				<p>The following table summarizes the usages context and the version history of this property.</p>
				<div class="shadow">
					<table class="data description">
						<tr>
							<th>Default value:</th>
							<td style="width: 500px;"><code>100%</code></td>
						</tr>
						<tr>
							<th>Applies to:</th>
							<td>All elements, except internal table elements when <br /><code><a href="style_border-collapse-property.php">border-collapse</a></code> is <code>collapse</code>. It also applies to <code><a href="../des-css/style_pseudo-elements.php#first-letter">::first-letter</a></code>.</td>
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
								<td><pre class="property">border-image-slice: </pre></td>
								<td>[ <i>number</i> | <i>percentage</i> ] <sup>1 to 4 values</sup> | <span class="keyword">fill</span> | <a href="../definitions.php#initial">initial</a> | <a href="../definitions.php#inherit">inherit</a></td>
							</tr>
						</table>
					</div>
				</div>
				<p>The example below shows the <code>border-image-slice</code> property in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelabff61.html">Try this code <span>&raquo;</span></a></div>
						<textarea id="code1">

.box {
    width: 300px;
    height: 150px;
    border: 15px solid transparent;
    border-image-source: url("border.png");
    border-image-slice: 30;
    border-image-repeat: round;
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
							<th style="width: 80px;">Value</th>
							<th>Description</th>
						</tr>
						<tr>
							<td><i>number</i></td>
							<td>Represents distance in pixels of the image for raster images, or vector coordinates for vector images.</td>
						</tr>
						<tr>
							<td><i>percentage</i></td>
							<td>Relative to the size of the image: the width of the image for horizontal offsets, the height of the image for vertical offsets.</td>
						</tr>
						<tr>
							<td><code>fill</code></td>
							<td>If present, preserves the middle portion of the image. Otherwise, the middle is treated as transparent.</td>
						</tr>
						<tr>
							<td><code>initial</code></td>
							<td>Sets this property to its default value.</td>
						</tr>
						<tr>
							<td><code>inherit</code></td>
							<td>If specified, the associated element takes the <a href="../definitions.php#computed-value">computed value</a> of its parent element <code>border-image-slice</code> property.</td>
						</tr>
					</table>
				</div>	
				<hr />
				<h2>Browser Compatibility</h2>
				<p>The <code>border-image-slice</code> property is supported in all major modern browsers.</p>
				<div class="shadow">
					<div class="support">
						<table>
							<tr>
								<td><img src="../assets/images/browser.jpg" alt="Browsers Icon" /></td>
								<td>
									<h2>Basic Support&mdash;</h2>
									<ul>
										<li>Firefox <span>15+</span></li>
										<li>Google Chrome <span>15+</span></li>
										<li>Internet Explorer <span>11+</span></li>
										<li>Apple Safari <span>6+</span></li>
										<li>Opera <span>15+</span></li>
									</ul>
								</td>
							</tr>
						</table>
					</div>
				</div>
				<hr />
				<h2>Further Reading</h2>
				<p>See tutorial on: <a href="../des-css/stylel_border.php">CSS3 Border</a>, <a href="../des-css/style_border.php">CSS Border</a>.</p>
				<p>Related properties: <code><a href="stylel_border-image-property.php">border-image</a></code>, <code><a href="stylel_border-image-source-property.php">border-image-source</a></code>, <code><a href="stylel_border-image-repeat-property.php">border-image-repeat</a></code>, <code><a href="stylel_border-image-width-property.php">border-image-width</a></code>, <code><a href="stylel_border-image-outset-property.php">border-image-outset</a></code>, <code><a href="style_border-property.php">border</a></code>.</p>
				<div class="bottom-link clearfix">
					<a href="stylel_border-image-repeat-property.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
					<a href="stylel_border-image-source-property.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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