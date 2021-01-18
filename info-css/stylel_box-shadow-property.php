<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS3 box-shadow Property">
	  <meta name="keywords" content="css,css3,CSS3 box-shadow Property">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS3 box-shadow Property - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS3 box-shadow Property</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css_inner.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
            	<h1>CSS3 <code>box-shadow</code> Property</h1>
				<p class="topic">Topic: <a href="stylel_properties.php">CSS3 Properties Reference</a><span class="topic-nav"><a href="style_bottom-property.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="stylel_box-sizing-property.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
				<h2>Description</h2>
				<p>The <code>box-shadow</code> CSS property applies one or more shadow effects to an element's box.</p>
				<p>The following table summarizes the usages context and the version history of this property.</p>
				<div class="shadow">
					<table class="data description">
						<tr>
							<th>Default value:</th>
							<td><code>none</code></td>
						</tr>
						<tr>
							<th>Applies to:</th>
							<td>All elements. It also applies to <code><a href="../des-css/style_pseudo-elements.php#first-letter">::first-letter</a></code>.</td>
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
								<td><pre class="property">box-shadow: </pre></td>
								<td>
									<i>shadow1</i> [, <i>shadow2</i>, ... <i>shadowN</i>] | <span class="keyword">none</span> | <a href="../definitions.php#initial">initial</a> | <a href="../definitions.php#inherit">inherit</a><br />
									where <i>shadow</i> is:
									[ <span class="keyword">inset</span> [ <i>offset-x</i> <i>offset-y</i> <i>blur-radius</i> <i>spread-radius</i> <i>color</i> ] ]
								</td>
							</tr>
						</table>
					</div>
				</div>
				<p>The example below shows the <code>box-shadow</code> property in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelabb03d.html">Try this code <span>&raquo;</span></a></div>
						<textarea id="code1">

.shadow{
    width: 150px;
    height: 150px;
    background: #ccc;
    border: 1px solid #999;
    box-shadow: 2px 2px 4px 2px #999;
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
				<p>You can use the <code>inset</code> keyword to apply the shadow inside of the element's box. Inset shadows are drawn inside the border, above the background, but below content.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelabb03d.html">Try this code <span>&raquo;</span></a></div>
						<textarea id="code2">

.shadow-inside{
    width: 150px;
    height: 150px;
    background: #ccc;
    border: 1px solid #999;
    box-shadow: inset 0 0 6px 2px #999;
}
     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code2"), {
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
							<td class="section" colspan="2"><strong>Required</strong> &mdash; The following values must be specified for the property to be valid.</td>
						</tr>
						<tr>
							<td><i>offset-x</i></td>
							<td>The first length value specifies the horizontal distance of the shadow. A positive value draws a shadow that is offset to the right of the box, whereas a negative value offsets the shadow to the left.</td>
						</tr>
						<tr>
							<td><i>offset-y</i></td>
							<td>The second length value specifies the vertical distance of the shadow. A positive value offsets the shadow down, whereas a negative value offsets the shadow above the element.</td>
						</tr>
						<tr>
							<td class="section" colspan="2"><strong>Optional</strong> &mdash; The following values are optional.</td>
						</tr>
						<tr>
							<td><i>blur-radius</i></td>
							<td>The third length value is a blur distance. The larger this value, the bigger the blur, so the shadow becomes bigger and lighter. Default value is 0, the shadow is sharp. Negative values are not allowed.</td>
						</tr>
						<tr>
							<td><i>spread-radius</i></td>
							<td>The fourth length is a spread distance. Positive values cause the shadow shape to expand in all directions by the specified radius. Negative values cause the shadow shape to contract.</td>
						</tr>
						<tr>
							<td><i>color</i></td>
							<td>The color is the color of the shadow. This value can be any supported <a href="style_color-values.php">color value</a>. If not specified, it is usually the value of the <code><a href="style_color-property.php">color</a></code> property.</td>
						</tr>						
						<tr>
							<td><code>inset</code></td>
							<td>If present, changes the drop shadow from an outer shadow to an inner shadow. Inset shadows are drawn inside the border, above the background, but below the content the element.</td>
						</tr>
						<tr>
							<td><code>none</code></td>
							<td>No shadow will be displayed. This is default value.</td>
						</tr>
						<tr>
							<td><code>initial</code></td>
							<td>Sets this property to its default value.</td>
						</tr>
						<tr>
							<td><code>inherit</code></td>
							<td>If specified, the associated element takes the <a href="../definitions.php#computed-value">computed value</a> of its parent element <code>box-shadow</code> property.</td>
						</tr>
					</table>
				</div>	
				<hr />
				<h2>Browser Compatibility</h2>
				<p>The <code>box-shadow</code> property is supported in all major modern browsers.</p>
				<div class="shadow">
					<div class="support">
						<table>
							<tr>
								<td><img src="../assets/images/browser.jpg" alt="Browsers Icon" /></td>
								<td>
									<h2>Basic Support&mdash;</h2>
									<ul>
										<li>Firefox <span>3.5+ <sup class="badge">-moz-</sup></span>, <span>4+</span></li>
										<li>Google Chrome <span>4+ <sup class="badge">-webkit-</sup></span>, <span>10+</span></li>
										<li>Internet Explorer <span>9+</span></li>
										<li>Apple Safari <span>3.1+ <sup class="badge">-webkit-</sup></span>, <span>5.1+</span></li>
										<li>Opera <span>10.5+</span></li>
									</ul>
								</td>
							</tr>
						</table>
					</div>
				</div>
				<hr />
				<h2>Further Reading</h2>
				<p>See tutorial on: <a href="../des-css/stylel_drop-shadows.php" class="selected">CSS3 Drop Shadows</a>, <a href="../des-css/style_pseudo-elements.php" class="selected">CSS Pseudo-elements</a>.</p>
				<p>Related properties: <code><a href="stylel_text-shadow-property.php">text-shadow</a></code>.</p>
				<div class="bottom-link clearfix">
					<a href="style_bottom-property.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
					<a href="stylel_box-sizing-property.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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