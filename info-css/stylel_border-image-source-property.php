<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS3 border-image-source Property">
	  <meta name="keywords" content="css,css3,CSS3 border-image-source Property">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS3 border-image-source Property - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS3 border-image-source Property</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css_inner.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
            	<h1>CSS3 <code>border-image-source</code> Property</h1>
				<p class="topic">Topic: <a href="stylel_properties.php">CSS3 Properties Reference</a><span class="topic-nav"><a href="stylel_border-image-slice-property.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="stylel_border-image-width-property.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
				<h2>Description</h2>
				<p>The <code>border-image-source</code> CSS property specifies the location of the image to be used for the border, instead of the border styles given by the <code><a href="style_border-style-property.php">border-style</a></code> propertiey.</p>
				<p>The following table summarizes the usages context and the version history of this property.</p>
				<div class="shadow">
					<table class="data description">
						<tr>
							<th>Default value:</th>
							<td style="width: 500px;"><code>none</code></td>
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
								<td><pre class="property">border-image-source: </pre></td>
								<td><span class="keyword">none</span> | <i>image</i> | <a href="../definitions.php#initial">initial</a> | <a href="../definitions.php#inherit">inherit</a></td>
							</tr>
						</table>
					</div>
				</div>
				<p>The example below shows the <code>border-image-source</code> property in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelabbf14-2.html">Try this code <span>&raquo;</span></a></div>
						<textarea id="code1">

.box {
    width: 300px;
    height: 150px;
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
							<td><code>none</code></td>
							<td>No border-image, the border-style will be used. This is default value.</td>
						</tr>
						<tr>
							<td><i>image</i></td>
							<td>Specifies the location of the border image.</td>
						</tr>
						<tr>
							<td><code>initial</code></td>
							<td>Sets this property to its default value.</td>
						</tr>
						<tr>
							<td><code>inherit</code></td>
							<td>If specified, the associated element takes the <a href="../definitions.php#computed-value">computed value</a> of its parent element <code>border-image-source</code> property.</td>
						</tr>
					</table>
				</div>	
				<hr />
				<h2>Browser Compatibility</h2>
				<p>The <code>border-image-source</code> property is supported in all major modern browsers.</p>
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
				<p>See tutorial on: <a href="../des-css/stylel_border.php" class="selected">CSS3 Border</a>, <a href="../des-css/style_border.php">CSS Border</a>.</p>
				<p>Related properties: <code><a href="stylel_border-image-property.php">border-image</a></code>, <code><a href="stylel_border-image-width-property.php">border-image-width</a></code>, <code><a href="stylel_border-image-repeat-property.php">border-image-repeat</a></code>, <code><a href="stylel_border-image-slice-property.php">border-image-slice</a></code>, <code><a href="stylel_border-image-outset-property.php">border-image-outset</a></code>, <code><a href="style_border-property.php">border</a></code>.</p>
				<div class="bottom-link clearfix">
					<a href="stylel_border-image-slice-property.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
					<a href="stylel_border-image-width-property.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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