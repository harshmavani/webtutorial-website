<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS3 text-decoration-style Property">
	  <meta name="keywords" content="css,css3,CSS3 text-decoration-style Property">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS3 text-decoration-style Property - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS3 text-decoration-style Property</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css_inner.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
            	<h1>CSS3 <code>text-decoration-style</code> Property</h1>
				<p class="topic">Topic: <a href="stylel_properties.php">CSS3 Properties Reference</a><span class="topic-nav"><a href="stylel_text-decoration-line-property.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="style_text-indent-property.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
				<h2>Description</h2>
				<p>The <code>text-decoration-style</code> CSS property  defines the style of the lines specified by the <code><a href="stylel_text-decoration-line-property.php">text-decoration-line</a></code> property.</p>
				<p>The following table summarizes the usages context and the version history of this property.</p>
				<div class="shadow">
					<table class="data description">
						<tr>
							<th>Default value:</th>
							<td><code>solid</code></td>
						</tr>
						<tr>
							<th>Applies to:</th>
							<td><pre>All elements. It also applies to <code><a href="../des-css/style_pseudo-elements.php">::first-letter</a></code> and <code><a href="../des-css/style_pseudo-elements.php">::first-line</a></code>.</pre></td>
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
								<td><pre class="property">text-decoration-style: </pre></td>
								<td>[ <span class="keyword">solid</span> | <span class="keyword">double</span> | <span class="keyword">dotted</span> | <span class="keyword">dashed</span> | <span class="keyword">wavy</span> ] <sup>one or more values</sup> | <a href="../definitions.php#initial">initial</a> | <a href="../definitions.php#inherit">inherit</a></td>
							</tr>
						</table>
					</div>
				</div>
				<p>The example below shows the <code>text-decoration-style</code> property in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelabc071.html">Try this code <span>&raquo;</span></a></div>
						<textarea id="code1">
		
		p {
			text-decoration: underline;
			-moz-text-decoration-style: dotted; /* Firefox */
			text-decoration-style: dotted; /* Standard syntax */
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
							<th style="width: 70px;">Value</th>
							<th>Description</th>
						</tr>
						<tr>
							<td><code>solid</code></td>
							<td>The line is displayed as a single line. This is default value.</td>
						</tr>
						<tr>
							<td><code>double</code></td>
							<td>The line is displayed as a double line.</td>
						</tr>
						<tr>
							<td><code>dotted</code></td>
							<td>The line is displayed as a dotted line.</td>
						</tr>
						<tr>
							<td><code>dashed</code></td>
							<td>The line is displayed as a dashed line.</td>
						</tr>
						<tr>
							<td><code>wavy</code></td>
							<td>The line is displayed as a wavy line.</td>
						</tr>
						<tr>
							<td><code>initial</code></td>
							<td>Sets this property to its default value.</td>
						</tr>
						<tr>
							<td><code>inherit</code></td>
							<td>If specified, the associated element takes the <a href="../definitions.php#computed-value">computed value</a> of its parent element <code>text-decoration-style</code> property.</td>
						</tr>
					</table>
				</div>				
				<hr />
				<h2>Browser Compatibility</h2>
				<p>The <code>text-decoration-style</code> property is not supported in most of the browsers.</p>
				<div class="shadow">
					<div class="support">
						<table>
							<tr>
								<td><img src="../assets/images/browser.jpg" alt="Browsers Icon" /></td>
								<td>
									<h2>Basic Support&mdash;</h2>
									<ul>
										<li>Firefox <span>6+ <sup class="badge">-moz-</sup></span>, <span>36+</span></li>
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
                            <p><strong>Warning:</strong> The <code>text-decoration-style</code> property is currently not supported by the most of the browsers. You should better avoid using this property.</p>
                        </div>
                    </div>
                </div>
				<hr />
				<h2>Further Reading</h2>
				<p>See tutorial on: <a href="../des-css/style_text.php" class="selected">CSS Text</a>, <a href="../des-css/style_border.php">CSS Border</a>.</p>
				<p>Related properties: <code><a href="style_text-decoration-property.php">text-decoration</a></code>, <code><a href="stylel_text-decoration-line-property.php">text-decoration-line</a></code>, <code><a href="stylel_text-decoration-color-property.php">text-decoration-color</a></code>.</p>
				<div class="bottom-link clearfix">
					<a href="stylel_text-decoration-line-property.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
					<a href="style_text-indent-property.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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