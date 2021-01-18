<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS3 border-image Property">
	  <meta name="keywords" content="css,css3,CSS3 border-image Property">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS3 border-image Property - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS3 border-image Property</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css_inner.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
            	<h1>CSS3 <code>border-image</code> Property</h1>
				<p class="topic">Topic: <a href="stylel_properties.php">CSS3 Properties Reference</a><span class="topic-nav"><a href="style_border-color-property.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="stylel_border-image-outset-property.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
				<h2>Description</h2>
				<p>The <code>border-image</code> CSS property specifies how an image is to be used in place of the border styles. This is a shorthand property for setting <code><a href="stylel_border-image-source-property.php">border-image-source</a></code>, <code><a href="stylel_border-image-slice-property.php">border-image-slice</a></code>, <code><a href="stylel_border-image-width-property.php">border-image-width</a></code>, <code><a href="stylel_border-image-outset-property.php">border-image-outset</a></code> and <code><a href="stylel_border-image-repeat-property.php">border-image-repeat</a></code> properties at once.</p>
				<p>The following table summarizes the usages context and the version history of this property.</p>
				<div class="shadow">
					<table class="data description">
						<tr>
							<th>Default value:</th>
							<td style="width: 500px;"><code>none 100% 1 0 stretch</code>; <i><a href="#property-values">See individual properties</a></i></td>
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
								<td><pre class="property">border-image: </pre></td>
								<td>[ <i>source slice width outset repeat</i> ] | <a href="../definitions.php#initial">initial</a> | <a href="../definitions.php#inherit">inherit</a></td>
							</tr>
						</table>
					</div>
				</div>
				<p>The example below shows the <code>border-image</code> property in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelabbf13.html">Try this code <span>&raquo;</span></a></div>
						<textarea id="code1">

.box {
    width: 300px;
    height: 150px;
    border: 15px solid transparent;
    -webkit-border-image: url("border.png") 30 30 round; /* Safari 3.1-5 */
    -o-border-image: url("border.png") 30 30 round; /* Opera 11-12.1 */
    border-image: url("border.png") 30 30 round;
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
							<th>Value</th>
							<th>Description</th>
						</tr>
						<tr>
							<td><pre><code><i><a href="style_border-width-property.php">border-image-source</a></i></code> </pre></td>
							<td>Specifies the location of the image to be used for the border.</td>
						</tr>
						<tr>
							<td><code><i><a href="style_border-width-property.php">border-image-slice</a></i></code></td>
							<td>Specifies the inward offsets from the top, right, bottom, and left edges of the border image.</td>
						</tr>
						<tr>
							<td><code><i><a href="style_border-width-property.php">border-image-width</a></i></code></td>
							<td>Specifies the width of the border.</td>
						</tr>	
						<tr>
							<td><code><i><a href="style_border-width-property.php">border-image-outset</a></i></code></td>
							<td>Specifies the amount by which the border image area extends beyond the border box.</td>
						</tr>
						<tr>
							<td><code><i><a href="style_border-width-property.php">border-image-repeat</a></i></code></td>
							<td>Specifies how the middle part of the border image are scaled or tiled so that it can match the size of the border.</td>
						</tr>
						<tr>
							<td><code>initial</code></td>
							<td>Sets this property to its default value.</td>
						</tr>
						<tr>
							<td><code>inherit</code></td>
							<td>If specified, the associated element takes the <a href="../definitions.php#computed-value">computed value</a> of its parent element <code>border-image</code> property.</td>
						</tr>
					</table>
				</div>	
				<hr />
				<h2>Browser Compatibility</h2>
				<p>The <code>border-image</code> property is supported in all major modern browsers.</p>
				<div class="shadow">
					<div class="support">
						<table>
							<tr>
								<td><img src="../assets/images/browser.jpg" alt="Browsers Icon" /></td>
								<td>
									<h2>Basic Support&mdash;</h2>
									<ul>
										<li>Firefox <span>3.5+ <sup class="badge">-moz-</sup></span>, <span>15+</span></li>
										<li>Google Chrome <span>4+ <sup class="badge">-webkit-</sup></span>, <span>16+</span></li>
										<li>Internet Explorer <span>11+</span></li>
										<li>Apple Safari <span>3.1+ <sup class="badge">-webkit-</sup></span>, <span>6+</span></li>
										<li>Opera <span>11+ <sup class="badge">-o-</sup></span>, <span>15+ <sup class="badge">-webkit-</sup></span></li>
									</ul>
								</td>
							</tr>
						</table>
					</div>
				</div>
				<hr />
				<h2>Further Reading</h2>
				<p>See tutorial on: <a href="../des-css/stylel_border.php">CSS3 Border</a>, <a href="../des-css/style_border.php">CSS Border</a>.</p>
				<p>Related properties: <code><a href="stylel_border-image-source-property.php">border-image-source</a></code>, <code><a href="stylel_border-image-slice-property.php">border-image-slice</a></code>, <code><a href="stylel_border-image-width-property.php">border-image-width</a></code>, <code><a href="stylel_border-image-outset-property.php">border-image-outset</a></code>, <code><a href="stylel_border-image-repeat-property.php">border-image-repeat</a></code>, <code><a href="style_border-property.php">border</a></code>.</p>
				<div class="bottom-link clearfix">
					<a href="style_border-color-property.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
					<a href="stylel_border-image-outset-property.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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