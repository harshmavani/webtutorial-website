<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS3 font-size-adjust Property">
	  <meta name="keywords" content="css,css3,CSS3 font-size-adjust Property">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS3 font-size-adjust Property - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS3 font-size-adjust Property</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css_inner.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
            	<h1>CSS3 <code>font-size-adjust</code> Property</h1>
				<p class="topic">Topic: <a href="stylel_properties.php">CSS3 Properties Reference</a><span class="topic-nav"><a href="style_font-size-property.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="stylel_font-stretch-property.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
				<h2>Description</h2>
				<p>The <code>font-size-adjust</code> CSS property specifies that font size should be chosen based on the height of lowercase letters rather than the height of capital letters.</p>
				<p>When the first-choice of a <code><a href="style_font-family-property.php">font-family</a></code> specified by the author is unavailable font fallback occurs, that may results in bigger or smaller font size. The <code>font-size-adjust</code> property is a way to preserve the readability of text in such situation. It does this by adjusting the font-size so that the <a href="../des-css/style_units.php">x-height</a> is the same regardless of the font used.</p>
				<p>The following table summarizes the usages context and the version history of this property.</p>
				<div class="shadow">
					<table class="data description">
						<tr>
							<th>Default value:</th>
							<td><code>none</code></td>
						</tr>
						<tr>
							<th>Applies to:</th>
							<td><pre>All elements. It also applies to <code><a href="../des-css/style_pseudo-elements.php#first-letter">::first-letter</a></code> and <code><a href="../des-css/style_pseudo-elements.php#first-line">::first-line</a></code>.</pre></td>
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
								<td><pre class="property">font-size-adjust: </pre></td>
								<td><i>number</i> | <span class="keyword">none</span> | <a href="../definitions.php#initial">initial</a> | <a href="../definitions.php#inherit">inherit</a></td>
							</tr>
						</table>
					</div>
				</div>
				<p>The example below shows the <code>font-size-adjust</code> property in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelabe53c.html">Try this code <span>&raquo;</span></a></div>
						<textarea id="code1">

p {
    font-family: "DejaVu Sans", Arial, sans-serif;
    font-size-adjust: 0.6;
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
							<td><i>number</i></td>
							<td>Specifies the aspect value used to calculate the adjusted font size.</td>
						</tr>
						<tr>
							<td><code>none</code></td>
							<td>No font size adjustment. Choose the size of the font based only on the <code><a href="style_font-size-property.php">font-size</a></code> property. This is default value.</td>
						</tr>
						<tr>
							<td><code>initial</code></td>
							<td>Sets this property to its default value.</td>
						</tr>
						<tr>
							<td><code>inherit</code></td>
							<td>If specified, the associated element takes the <a href="../definitions.php#computed-value">computed value</a> of its parent element <code>font-size-adjust</code> property.</td>
						</tr>
					</table>
				</div>	
				<hr />
				<h2>Browser Compatibility</h2>
				<p>The <code>font-size-adjust</code> property is not supported in most of the browsers.</p>
				<div class="shadow">
					<div class="support">
						<table>
							<tr>
								<td><img src="../assets/images/browser.jpg" alt="Browsers Icon" /></td>
								<td>
									<h2>Basic Support&mdash;</h2>
									<ul>
										<li>Firefox <span>3+</span></li>
										<li>Google Chrome <span class="red" title="Not Supported">&times;</span></li>
										<li>Internet Explorer <span class="red" title="Not Supported">&times;</span></li>
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
                            <p><strong>Warning:</strong> The <code>font-size-adjust</code> property is currently not supported by the most of the browsers. You should better avoid using this property.</p>
                        </div>
                    </div>
                </div>
				<hr />
				<h2>Further Reading</h2>
				<p>See tutorial on: <a href="../des-css/style_fonts.php" class="selected">CSS Fonts</a>, <a href="../des-css/style_units.php" class="selected">CSS Units</a>, <a href="../des-css/style_pseudo-elements.php">CSS Pseudo-elements</a>.</p>
				<p>Related properties and at-rules: <code><a href="style_font-property.php">font</a></code>, <code><a href="style_font-family-property.php">font-family</a></code>, <code><a href="style_font-size-property.php">font-size</a></code>, <code><a href="stylel_font-stretch-property.php">font-stretch</a></code>, <code><a href="style_font-style-property.php">font-style</a></code>, <code><a href="style_font-variant-property.php">font-variant</a></code>, <code><a href="style_font-weight-property.php">font-weight</a></code>, <code><a href="style_font-face-rule.php">@font-face</a></code>.</p>
				<div class="bottom-link clearfix">
					<a href="style_font-size-property.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
					<a href="stylel_font-stretch-property.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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