<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS3 flex-wrap Property">
	  <meta name="keywords" content="css,css3,CSS3 flex-wrap Property">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS3 flex-wrap Property - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS3 flex-wrap Property</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css_inner.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
            	<h1>CSS3 <code>flex-wrap</code> Property</h1>
				<p class="topic">Topic: <a href="stylel_properties.php">CSS3 Properties Reference</a><span class="topic-nav"><a href="stylel_flex-shrink-property.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="style_float-property.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
				<h2>Description</h2>
				<p>The <code>flex-wrap</code> CSS property specifies whether the flex items are forced into a single line or they wrap onto multiple lines or columns based on the space available in the flex container.</p>
				<p>The following table summarizes the usages context and the version history of this property.</p>
				<div class="shadow">
					<table class="data description">
						<tr>
							<th>Default value:</th>
							<td><code>nowrap</code></td>
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
								<td><pre class="property">flex-wrap: </pre></td>
								<td><span class="keyword">nowrap</span> | <span class="keyword">wrap</span> | <span class="keyword">wrap-reverse</span> | <a href="../definitions.php#initial">initial</a> | <a href="../definitions.php#inherit">inherit</a></td>
							</tr>
						</table>
					</div>
				</div>
				<p>The example below shows the <code>flex-wrap</code> property in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelab5906.html">Try this code <span>&raquo;</span></a></div>
						<textarea id="code1">

.flex-container {
    /* Safari */
    display: -webkit-flex;
    -webkit-flex-wrap: nowrap;
    /* Standard syntax */
    display: flex;
    flex-wrap: nowrap;
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
							<td><code>nowrap</code></td>
							<td>Specifies that all flex items are displayed in a single row or column which may cause the flex container to overflow. The <code><a href="style_overflow-property.php">overflow</a></code> CSS property of the flex container determines whether the flex items are hidden, clipped, or scrollable.</td>
						</tr>
						<tr>
							<td><code>wrap</code></td>
							<td>Specifies that the flexible items will into multiple lines if necessary.</td>
						</tr>
						<tr>
							<td><code>wrap-reverse</code></td>
							<td>Behaves same as the <code>wrap</code>, but items will wrap in the reverse order.</td>
						</tr>
						<tr>
							<td><code>initial</code></td>
							<td>Sets this property to its default value.</td>
						</tr>
						<tr>
							<td><code>inherit</code></td>
							<td>If specified, the associated element takes the <a href="../definitions.php#computed-value">computed value</a> of its parent element <code>flex-wrap</code> property.</td>
						</tr>
					</table>
				</div>	
				<hr />
				<h2>Browser Compatibility</h2>
				<p>The <code>flex-wrap</code> property is supported in all major modern browsers.</p>
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
										<li>Apple Safari <span>6.1+ <sup class="badge">-webkit-</sup></span></li>
										<li>Opera <span>12.1+</span></li>
									</ul>
								</td>
							</tr>
						</table>
					</div>
				</div>
				<hr />
				<h2>Further Reading</h2>
				<p>See tutorial on: <a href="../des-css/stylel_multi-column-layouts.php" class="selected">CSS3 Multi-column Layouts</a>.</p>
				<p>Related properties: <code><a href="stylel_align-content-property.php">align-content</a></code>, <code><a href="stylel_align-items-property.php">align-items</a></code>, <code><a href="stylel_align-self-property.php">align-self</a></code>, <code><a href="style_display-property.php">display</a></code>, <code><a href="stylel_flex-property.php">flex</a></code>, <code><a href="stylel_flex-basis-property.php">flex-basis</a></code>, <code><a href="stylel_flex-direction-property.php">flex-direction</a></code>, <code><a href="stylel_flex-flow-property.php">flex-flow</a></code>, <code><a href="stylel_flex-grow-property.php">flex-grow</a></code>, <code><a href="stylel_flex-shrink-property.php">flex-shrink</a></code>, <code><a href="stylel_justify-content-property.php">justify-content</a></code>, <code><a href="style_min-height-property.php">min-height</a></code>, <code><a href="style_min-width-property.php">min-width</a></code>, <code><a href="stylel_order-property.php">order</a></code>.</p>
				<div class="bottom-link clearfix">
					<a href="stylel_flex-shrink-property.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
					<a href="style_float-property.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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