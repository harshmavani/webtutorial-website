<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS3 box-sizing Property">
	  <meta name="keywords" content="css,css3,CSS3 box-sizing Property">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS3 box-sizing Property - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS3 box-sizing Property</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css_inner.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
            	<h1>CSS3 <code>box-sizing</code> Property</h1>
				<p class="topic">Topic: <a href="stylel_properties.php">CSS3 Properties Reference</a><span class="topic-nav"><a href="stylel_box-shadow-property.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="style_caption-side-property.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
				<h2>Description</h2>
				<p>The <code>box-sizing</code> CSS property is used to alter the default <a href="../des-css/style_box-model.php">CSS box model</a>, which is normally used by the browser to calculate the widths and heights of the elements.</p>
				<p>The following table summarizes the usages context and the version history of this property.</p>
				<div class="shadow">
					<table class="data description">
						<tr>
							<th>Default value:</th>
							<td><code>content-box</code></td>
						</tr>
						<tr>
							<th>Applies to:</th>
							<td>All elements that accept width or height</td>
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
								<td><pre class="property">box-sizing: </pre></td>
								<td><span class="keyword">content-box</span> | <span class="keyword">padding-box</span> | <span class="keyword">border-box</span> | <a href="../definitions.php#initial">initial</a> | <a href="../definitions.php#inherit">inherit</a></td>
							</tr>
						</table>
					</div>
				</div>
				<p>The example below shows the <code>box-sizing</code> property in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelab6fb6.html">Try this code <span>&raquo;</span></a></div>
						<textarea id="code1">

.box {
    width: 50%;
    padding: 15px;
    float: left;
    border: 5px solid #000;
    box-sizing: border-box;
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
							<td><code>content-box</code></td>
							<td>The specified width and height properties include only the content of the element. It does not include the padding, border or margin.</td>
						</tr>
						<tr>
							<td><code>padding-box</code></td>
							<td>The specified width and height properties include the padding size, and do not include the border or margin.</td>
						</tr>
						<tr>
							<td><code>border-box</code></td>
							<td>The specified width and height properties include the padding and border, but not the margin.</td>
						</tr>
						<tr>
							<td><code>initial</code></td>
							<td>Sets this property to its default value.</td>
						</tr>
						<tr>
							<td><code>inherit</code></td>
							<td>If specified, the associated element takes the <a href="../definitions.php#computed-value">computed value</a> of its parent element <code>box-sizing</code> property.</td>
						</tr>
					</table>
				</div>	
				<hr />
				<h2>Browser Compatibility</h2>
				<p>The <code>box-sizing</code> property is supported in all major modern browsers.</p>
				<div class="shadow">
					<div class="support">
						<table>
							<tr>
								<td><img src="../assets/images/browser.jpg" alt="Browsers Icon" /></td>
								<td>
									<h2>Basic Support&mdash;</h2>
									<ul>
										<li>Firefox <span>2+ <sup class="badge">-moz-</sup></span>, <span>29+</span></li>
										<li>Google Chrome <span>4+ <sup class="badge">-webkit-</sup></span>, <span>10+</span></li>
										<li>Internet Explorer <span>8+</span></li>
										<li>Apple Safari <span>3.2+ <sup class="badge">-webkit-</sup></span>, <span>5.1+</span></li>
										<li>Opera <span>9.5+</span></li>
									</ul>
								</td>
							</tr>
						</table>
					</div>
				</div>
				<hr />
				<h2>Further Reading</h2>
				<p>See tutorial on: <a href="../des-css/style_box-model.php">CSS Box Model</a>, <a href="../des-css/style_dimension.php">CSS Dimension</a>.</p>
				<p>Related properties: <code><a href="style_padding-property.php">padding</a></code>, <code><a href="style_border-property.php">border</a></code>, <code><a href="style_margin-property.php">margin</a></code>.</p>
				<div class="bottom-link clearfix">
					<a href="stylel_box-shadow-property.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
					<a href="style_caption-side-property.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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