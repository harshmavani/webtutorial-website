<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS3 justify-content Property">
	  <meta name="keywords" content="css,css3,CSS3 justify-content Property">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS3 justify-content Property - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS3 justify-content Property</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css_inner.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
            	<h1>CSS3 <code>justify-content</code> Property</h1>
				<p class="topic">Topic: <a href="stylel_properties.php">CSS3 Properties Reference</a><span class="topic-nav"><a href="style_height-property.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="style_left-property.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
				<h2>Description</h2>
				<p>The <code>justify-content</code> CSS property specifies how flex items are aligned along the main axis of the flex container after any flexible lengths and auto margins have been resolved.</p>
				<p>The following table summarizes the usages context and the version history of this property.</p>
				<div class="shadow">
					<table class="data description">
						<tr>
							<th>Default value:</th>
							<td><code>flex-start</code></td>
						</tr>
						<tr>
							<th>Applies to:</th>
							<td>Flex containers</td>
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
								<td><pre class="property">justify-content: </pre></td>
								<td><span class="keyword">flex-start</span> | <span class="keyword">flex-end</span> | <span class="keyword">center</span> | <span class="keyword">space-between</span> | <span class="keyword">space-around</span> | <a href="../definitions.php#initial">initial</a> | <a href="../definitions.php#inherit">inherit</a></td>
							</tr>
						</table>
					</div>
				</div>
				<p>The example below shows the <code>justify-content</code> property in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelab550e.html">Try this code <span>&raquo;</span></a></div>
						<textarea id="code1">

.flex-container {
    /* Safari */
    display: -webkit-flex;
    -webkit-justify-content: space-around;
    /* Standard syntax */
    display: flex;
    justify-content: space-around;
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
							<th style="width: 100px;">Value</th>
							<th>Description</th>
						</tr>
						<tr>
							<td><code>flex-start</code></td>
							<td>Flex items are packed toward the start of the line. This is default value.</td>
						</tr>
						<tr>
							<td><code>flex-end</code></td>
							<td>Flex items are packed toward the end of the line.</td>
						</tr>
						<tr>
							<td><code>center</code></td>
							<td>Flex items are packed toward the center of the line.</td>
						</tr>
						<tr>
							<td><code>space-between</code></td>
							<td>Flex items are evenly distributed along the line.</td>
						</tr>
						<tr>
							<td><code>space-around</code></td>
							<td>Flex items are evenly distributed so that the space between two adjacent items is the same.</td>
						</tr>
						<tr>
							<td><code>initial</code></td>
							<td>Sets this property to its default value.</td>
						</tr>
						<tr>
							<td><code>inherit</code></td>
							<td>If specified, the associated element takes the <a href="../definitions.php#computed-value">computed value</a> of its parent element <code>justify-content</code> property.</td>
						</tr>
					</table>
				</div>	
				<hr />
				<h2>Browser Compatibility</h2>
				<p>The <code>justify-content</code> property is supported in all major modern browsers.</p>
				<div class="shadow">
					<div class="support">
						<table>
							<tr>
								<td><img src="../assets/images/browser.jpg" alt="Browsers Icon" /></td>
								<td>
									<h2>Basic Support&mdash;</h2>
									<ul>
										<li>Firefox <span>18+ <sup class="badge">-moz-</sup></span>, <span>28+</span></li>
										<li>Google Chrome <span>21+ <sup class="badge">-webkit-</sup></span>, <span>29+</span></li>
										<li>Internet Explorer <span>11+</span></li>
										<li>Apple Safari <span>6.1+</span></li>
										<li>Opera <span>12.1+</span></li>
									</ul>
								</td>
							</tr>
						</table>
					</div>
				</div>
				<hr />
				<h2>Further Reading</h2>
				<p>See tutorial on: <a href="../des-css/style_fonts.php" class="selected">CSS Fonts</a>, <a href="../des-css/style_units.php" class="selected">CSS Units</a>, <a href="../des-css/style_pseudo-elements.php">CSS Pseudo-elements</a>.</p>
				<p>Related properties: <code><a href="stylel_align-content-property.php">align-content</a></code>, <code><a href="stylel_align-items-property.php">align-items</a></code>, <code><a href="stylel_align-self-property.php">align-self</a></code>, <code><a href="style_display-property.php">display</a></code>, <code><a href="stylel_flex-property.php">flex</a></code>, <code><a href="stylel_flex-basis-property.php">flex-basis</a></code>, <code><a href="stylel_flex-direction-property.php">flex-direction</a></code>, <code><a href="stylel_flex-flow-property.php">flex-flow</a></code>, <code><a href="stylel_flex-grow-property.php">flex-grow</a></code>, <code><a href="stylel_flex-shrink-property.php">flex-shrink</a></code>, <code><a href="stylel_flex-wrap-property.php">flex-wrap</a></code>, <code><a href="stylel_justify-content-property.php">justify-content</a></code>, <code><a href="style_min-height-property.php">min-height</a></code>, <code><a href="style_min-width-property.php">min-width</a></code>, <code><a href="stylel_order-property.php">order</a></code>.</p>
				<div class="bottom-link clearfix">
					<a href="style_height-property.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
					<a href="style_left-property.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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