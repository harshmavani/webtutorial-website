<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS3 text-align-last Property">
	  <meta name="keywords" content="css,css3,CSS3 text-align-last Property">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS3 text-align-last Property - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS3 text-align-last Property</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css_inner.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
            	<h1>CSS3 <code>text-align-last</code> Property</h1>
				<p class="topic">Topic: <a href="stylel_properties.php">CSS3 Properties Reference</a><span class="topic-nav"><a href="style_text-align-property.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="style_text-decoration-property.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
				<h2>Description</h2>
				<p>The <code>text-align-last</code> CSS property specifies how the last line of a block or a line right before a forced line break is aligned when <code><a href="style_text-align-property.php">text-align</a></code> is <code>justify</code>.</p>
				<p>The following table summarizes the usages context and the version history of this property.</p>
				<div class="shadow">
					<table class="data description">
						<tr>
							<th>Default value:</th>
							<td><code>auto</code></td>
						</tr>
						<tr>
							<th>Applies to:</th>
							<td>Block containers</td>
						</tr>
						<tr>
							<th>Inherited:</th>
							<td>Yes</td>
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
								<td><pre class="property">text-align-last: </pre></td>
								<td><span class="keyword">auto</span> | <span class="keyword">start</span> | <span class="keyword">end</span> | <span class="keyword">left</span> | <span class="keyword">right</span> | <span class="keyword">center</span> | <span class="keyword">justify</span> | <a href="../definitions.php#initial">initial</a> | <a href="../definitions.php#inherit">inherit</a></td>
							</tr>
						</table>
					</div>
				</div>
				<p>The example below shows the <code>text-align-last</code> property in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelab6e81.html">Try this code <span>&raquo;</span></a></div>
						<textarea id="code1">
		
		p {
			-moz-text-align-last: right; /* Firefox */
			text-align-last: right; /* Standard syntax */
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
							<td><code>auto</code></td>
							<td>The last line is aligned per the value of the <code><a href="style_text-align-property.php">text-align</a></code> property, unless the <code>text-align</code> is set to <code>justify</code>. This is default value.</td>
						</tr>
						<tr>
							<td><code>start</code></td>
							<td>Same as left if direction is <i>left-to-right</i> and right if direction is <i>right-to-left</i>.</td>
						</tr>
						<tr>
							<td><code>end</code></td>
							<td>Same as right if direction is <i>left-to-right</i> and left if direction is <i>right-to-left</i>.</td>
						</tr>
						<tr>
							<td><code>left</code></td>
							<td>The last line is aligned to the left.</td>
						</tr>
						<tr>
							<td><code>right</code></td>
							<td>The last line is aligned to the right.</td>
						</tr>
						<tr>
							<td><code>center</code></td>
							<td>The last line is center-aligned.</td>
						</tr>				
						<tr>
							<td><code>justify</code></td>
							<td>The last line is justified like the other lines in the block.</td>
						</tr>
						<tr>
							<td><code>initial</code></td>
							<td>Sets this property to its default value.</td>
						</tr>
						<tr>
							<td><code>inherit</code></td>
							<td>If specified, the associated element takes the <a href="../definitions.php#computed-value">computed value</a> of its parent element <code>text-align-last</code> property.</td>
						</tr>
					</table>
				</div>				
				<hr />
				<h2>Browser Compatibility</h2>
				<p>The <code>text-align-last</code> property is supported in all major modern browsers.</p>
				<div class="shadow">
					<div class="support">
						<table>
							<tr>
								<td><img src="../assets/images/browser.jpg" alt="Browsers Icon" /></td>
								<td>
									<h2>Basic Support&mdash;</h2>
									<ul>
										<li>Firefox <span>12+ <sup class="badge">-moz-</sup></span></li>
										<li>Google Chrome <span>35+</span></li>
										<li>Internet Explorer <span>5.5+</span></li>
										<li>Apple Safari <span class="red" title="Not Supported">&times;</span></li>
										<li>Opera <span class="red" title="Not Supported">&times;</span></li>
									</ul>
								</td>
							</tr>
						</table>
					</div>
				</div>
				<hr />
				<h2>Further Reading</h2>
				<p>See tutorial on: <a href="../des-css/style_alignment.php">CSS Alignment</a>.</p>
				<p>Related properties: <code><a href="style_text-align-property.php">text-align</a></code>, <code><a href="style_text-indent-property.php">text-indent</a></code>, <code><a href="stylel_text-justify-property.php">text-justify</a></code>.</p>
				<div class="bottom-link clearfix">
					<a href="style_text-align-property.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
					<a href="style_text-decoration-property.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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