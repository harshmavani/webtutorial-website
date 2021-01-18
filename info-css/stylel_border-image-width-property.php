<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS3 border-image-width Property">
	  <meta name="keywords" content="css,css3,CSS3 border-image-width Property">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS3 border-image-width Property - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS3 border-image-width Property</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css_inner.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
            	<h1>CSS3 <code>border-image-width</code> Property</h1>
				<p class="topic">Topic: <a href="stylel_properties.php">CSS3 Properties Reference</a><span class="topic-nav"><a href="stylel_border-image-source-property.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="style_border-left-property.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
				<h2>Description</h2>
				<p>The <code>border-image-width</code> CSS property specifies the width of the border.</p>
				<p>The following table summarizes the usages context and the version history of this property.</p>
				<div class="shadow">
					<table class="data description">
						<tr>
							<th>Default value:</th>
							<td style="width: 500px;"><code>1</code></td>
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
								<td><pre><span class="property">border-image-width</span>: </pre></td>
								<td>[ <i>length</i> | <i>percentage</i> | <i>number</i> | <span class="keyword">auto</span> ] <sup>1 to 4 values</sup> | <a href="../definitions.php#initial">initial</a> | <a href="../definitions.php#inherit">inherit</a></td>
							</tr>
						</table>
					</div>
				</div>
				<p>The example below shows the <code>border-image-width</code> property in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelab00b9.html">Try this code <span>&raquo;</span></a></div>
						<textarea id="code1">

.box {
    width: 300px;
    height: 150px;
    border-image-source: url("border.png");
    border-image-width: 10px;
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
							<td><i>length</i></td>
							<td>Specifies the width of the border in absolute or relative units.</td>
						</tr>
						<tr>
							<td><i>percentage</i></td>
							<td>Specifies the width of the border as a percentage of the element.</td>
						</tr>
						<tr>
							<td><i>number</i></td>
							<td>Represents a multiple of the computed value of the element's <code><a href="style_border-width-property.php">border-width</a></code> property, or the width of the border box.</td>
						</tr>						
						<tr>
							<td><code>auto</code></td>
							<td>Specifies that the border image width is the intrinsic width, or height, of the corresponding image slice.</td>
						</tr>
						<tr>
							<td><code>initial</code></td>
							<td>Sets this property to its default value.</td>
						</tr>
						<tr>
							<td><code>inherit</code></td>
							<td>If specified, the associated element takes the <a href="../definitions.php#computed-value">computed value</a> of its parent element <code>border-image-width</code> property.</td>
						</tr>
					</table>
				</div>	
				<hr />
				<h2>Browser Compatibility</h2>
				<p>The <code>border-image-width</code> property is supported in all major modern browsers.</p>
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
				<p>Related properties: <code><a href="stylel_border-image-property.php">border-image</a></code>, <code><a href="stylel_border-image-source-property.php">border-image-source</a></code>, <code><a href="stylel_border-image-repeat-property.php">border-image-repeat</a></code>, <code><a href="stylel_border-image-slice-property.php">border-image-slice</a></code>, <code><a href="stylel_border-image-outset-property.php">border-image-outset</a></code>, <code><a href="style_border-property.php">border</a></code>.</p>
				<div class="bottom-link clearfix">
					<a href="stylel_border-image-source-property.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
					<a href="style_border-left-property.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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