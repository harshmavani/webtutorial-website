<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS3 font-stretch Property">
	  <meta name="keywords" content="css,css3,CSS3 font-stretch Property">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS3 font-stretch Property - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS3 font-stretch Property</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css_inner.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
            	<h1>CSS3 <code>font-stretch</code> Property</h1>
				<p class="topic">Topic: <a href="stylel_properties.php">CSS3 Properties Reference</a><span class="topic-nav"><a href="stylel_font-size-adjust-property.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="style_font-style-property.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
				<h2>Description</h2>
				<p>The <code>font-stretch</code> CSS property selects a normal, condensed, or expanded face from a font.</p>
				<p>The following table summarizes the usages context and the version history of this property.</p>
				<div class="shadow">
					<table class="data description">
						<tr>
							<th>Default value:</th>
							<td><code>normal</code></td>
						</tr>
						<tr>
							<th>Applies to:</th>
							<td><pre>All elements. It also applies to <code><a href="../des-css/style_pseudo-elements.php#first-letter">::first-letter</a></code> and <code><a href="../des-css/style_pseudo-elements.php#first-line">::first-line</a></code></pre></td>
						</tr>
						<tr>
							<th>Inherited:</th>
							<td>Yes</td>
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
								<td><pre class="property">font-stretch: </pre></td>
								<td><span class="keyword">normal</span> | <span class="keyword">ultra-condensed</span> | <span class="keyword">extra-condensed</span> | <span class="keyword">condensed</span> | <span class="keyword">semi-condensed</span> | <span class="keyword">semi-expanded</span> | <span class="keyword">expanded</span> | <span class="keyword">extra-expanded</span> | <span class="keyword">ultra-expanded</span> | <a href="../definitions.php#initial">initial</a> | <a href="../definitions.php#inherit">inherit</a></td>
							</tr>
						</table>
					</div>
				</div>
				<p>The example below shows the <code>font-stretch</code> property in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelab4d64.html">Try this code <span>&raquo;</span></a></div>
						<textarea id="code1">

p {
    font-family: Arial, Helvetica, sans-serif;
    font-stretch: condensed;
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
							<th style="width: 120px;">Value</th>
							<th>Description</th>
						</tr>
						<tr>
							<td><code>normal</code></td>
							<td>Specifies a normal font face. This is default value.</td>
						</tr>
						<tr>
							<td><code>ultra-condensed</code></td>
							<td>Specifies the most condensed font face.</td>
						</tr>
						<tr>
							<td><code>extra-condensed</code></td>
							<td>Specifies the second most condensed font face.</td>
						</tr>
						<tr>
							<td><code>condensed</code></td>
							<td>Specifies a condensed font face</td>
						</tr>
						<tr>
							<td><code>semi-condensed</code></td>
							<td>Specifies a slightly condensed font face.</td>
						</tr>
						<tr>
							<td><code>semi-expanded</code></td>
							<td>Specifies a slightly expanded font face.</td>
						</tr>
						<tr>
							<td><code>expanded</code></td>
							<td>Specifies an expanded font face.</td>
						</tr>
						<tr>
							<td><code>extra-expanded</code></td>
							<td>Specifies the second most expanded font face.</td>
						</tr>
						<tr>
							<td><code>ultra-expanded</code></td>
							<td>Specifies the most expanded font face.</td>
						</tr>
						<tr>
							<td><code>initial</code></td>
							<td>Sets this property to its default value.</td>
						</tr>
						<tr>
							<td><code>inherit</code></td>
							<td>If specified, the associated element takes the <a href="../definitions.php#computed-value">computed value</a> of its parent element <code>font-stretch</code> property.</td>
						</tr>
					</table>
				</div>	
				<hr />
				<h2>Browser Compatibility</h2>
				<p>The <code>font-stretch</code> property is not supported in most of the browsers.</p>
				<div class="shadow">
					<div class="support">
						<table>
							<tr>
								<td><img src="../assets/images/browser.jpg" alt="Browsers Icon" /></td>
								<td>
									<h2>Basic Support&mdash;</h2>
									<ul>
										<li>Firefox <span>9+</span></li>
										<li>Google Chrome <span class="red" title="Not Supported">&times;</span></li>
										<li>Internet Explorer <span>9+</span></li>
										<li>Apple Safari <span class="red" title="Not Supported">&times;</span></li>
										<li>Opera <span class="red" title="Not Supported">&times;</span></li>
									</ul>
								</td>
							</tr>
						</table>
					</div>
				</div>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab warning-icon" title="Warning"><i></i></div>
                        <div class="warning-box">
                            <p><strong>Warning:</strong> The <code>font-stretch</code> property is currently not supported by the Chrome, Safari and Opera browsers. You should better avoid using this property.</p>
                        </div>
                    </div>
                </div>
				<hr />
				<h2>Further Reading</h2>
				<p>See tutorial on: <a href="../des-css/style_fonts.php" class="selected">CSS Fonts</a>, <a href="../des-css/style_units.php" class="selected">CSS Units</a>, <a href="../des-css/style_pseudo-elements.php">CSS Pseudo-elements</a>.</p>
				<p>Related properties and at-rules: <code><a href="style_font-property.php">font</a></code>, <code><a href="style_font-family-property.php">font-family</a></code>, <code><a href="style_font-size-property.php">font-size</a></code>, <code><a href="stylel_font-size-adjust-property.php">font-size-adjust</a></code>, <code><a href="style_font-style-property.php">font-style</a></code>, <code><a href="style_font-variant-property.php">font-variant</a></code>, <code><a href="style_font-weight-property.php">font-weight</a></code>, <code><a href="style_font-face-rule.php">@font-face</a></code>.</p>
				<div class="bottom-link clearfix">
					<a href="stylel_font-size-adjust-property.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
					<a href="style_font-style-property.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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