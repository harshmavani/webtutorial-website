<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS3 align-content Property">
	  <meta name="keywords" content="css,css3,CSS3 align-content Property">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS3 align-content Property - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS3 align-content Property</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css_inner.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
            	<h1>CSS3 <code>align-content</code> Property</h1>
				<p class="topic">Topic: <a href="stylel_properties.php">CSS3 Properties Reference</a><span class="topic-nav"><a href="javascript:void(0);" class="disabled" title="Disabled"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="stylel_align-items-property.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
				<h2>Description</h2>
				<p>The <code>align-content</code> CSS property aligns the flexible container's items within the flex container when there is extra space on the cross-axis (vertically). This property has no effect on single line <a href="#">flexible boxes</a>. Moreover you can use the CSS <code><a href="stylel_justify-content-property.php">justify-content</a></code> property to align the items on the main-axis (horizontally).</p>
				<p>The following table summarizes the usages context and the version history of this property.</p>
				<div class="shadow">
					<table class="data description">
						<tr>
							<th>Default value:</th>
							<td><code>stretch</code></td>
						</tr>
						<tr>
							<th>Applies to:</th>
							<td>Multi-line flex containers</td>
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
								<td><pre><span class="property">align-content</span>: </pre></td>
								<td><span class="keyword">center</span> | <span class="keyword">flex-start</span> | <span class="keyword">flex-end</span> | <span class="keyword">space-between</span> | <span class="keyword">space-around</span> | <span class="keyword">stretch</span> | <a href="../definitions.php#initial">initial</a> | <a href="../definitions.php#inherit">inherit</a></td>
							</tr>
						</table>
					</div>
				</div>
				<p>The example below shows the <code>align-content</code> property in action.</p>
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelabcbd5.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code1">

.flex-container {
    /* Safari */
    display: -webkit-flex; 
    -webkit-flex-flow: row wrap;
    -webkit-align-content: space-around;
    /* Standard syntax */
    display: flex;
    flex-flow: row wrap;
    align-content: space-around;
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
							<th style="width: 115px;">Value</th>
							<th>Description</th>
						</tr>
						<tr>
							<td><code>center</code></td>
							<td>Items are positioned at the center of the flex container.</td>
						</tr>
						<tr>
							<td><code>flex-start</code></td>
							<td>Items are positioned at the beginning of the flex container.</td>
						</tr>
						<tr>
							<td><code>flex-end</code></td>
							<td>Items are positioned at the end of the flex container.</td>
						</tr>
						<tr>
							<td><code>space-between</code></td>
							<td>Items are evenly distributed in the flex container in such a way that the space between two adjacent items is same.</td>
						</tr>
						<tr>
							<td><code>space-around</code></td>
							<td>Items are evenly distributed in the flex container so that the spaces around (i.e. before, between, and after) every item  are same.</td>
						</tr>
						<tr>
							<td><code>stretch</code></td>
							<td>Items are stretched to fit the flex container. The free-space is divided equally between all the items. This is default value.</td>
						</tr>
						<tr>
							<td><code>initial</code></td>
							<td>Sets this property to its default value.</td>
						</tr>
						<tr>
							<td><code>inherit</code></td>
							<td>If specified, the associated element takes the <a href="../definitions.php#computed-value">computed value</a> of its parent element <code>align-content</code> property.</td>
						</tr>
					</table>
				</div>	
				<hr />
				<h2>Browser Compatibility</h2>
				<p>The <code>align-content</code> property is supported in all major modern browsers.</p>
				<div class="shadow">
					<div class="support">
						<table>
							<tr>
								<td><img src="../assets/images/browser.jpg"  alt="Browsers Icon" /></td>
								<td>
									<h2>Basic Support&mdash;</h2>
									<ul>
										<li>Firefox <span>28+</span></li>
										<li>Google Chrome <span>21+</span></li>
										<li>Internet Explorer <span>11+</span></li>
										<li>Apple Safari <span>7+ <sup class="badge">-webkit-</sup></span></li>
										<li>Opera <span>12.1+</span></li>
									</ul>
								</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585">
							<p><strong>Read Carefully:</strong> Apple Safari version 7 and above supports the <code>align-content</code> property but require <code>-webkit-</code> prefix, like this <code>-webkit-align-content:&thinsp;center;</code></p>
						</div>
					</div>
				</div>
				<hr />
				<h2>Further Reading</h2>
				<p>See tutorial on: <a href="../des-css/style_alignment.php" class="selected">CSS Alignment</a>.</p>
				<p>Related properties: <code><a href="stylel_align-items-property.php">align-items</a></code>, <code><a href="stylel_align-self-property.php">align-self</a></code>, <code><a href="style_display-property.php">display</a></code>, <code><a href="stylel_flex-property.php">flex</a></code>, <code><a href="stylel_flex-basis-property.php">flex-basis</a></code>, <code><a href="stylel_flex-direction-property.php">flex-direction</a></code>, <code><a href="stylel_flex-flow-property.php">flex-flow</a></code>, <code><a href="stylel_flex-grow-property.php">flex-grow</a></code>, <code><a href="stylel_flex-shrink-property.php">flex-shrink</a></code>, <code><a href="stylel_flex-wrap-property.php">flex-wrap</a></code>, <code><a href="stylel_justify-content-property.php">justify-content</a></code>, <code><a href="style_min-height-property.php">min-height</a></code>, <code><a href="style_min-width-property.php">min-width</a></code>, <code><a href="stylel_order-property.php">order</a></code>.</p>
				<div class="bottom-link clearfix">
					<a href="javascript:void(0);" class="previous-page-bottom disabled" title="Disabled"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
					<a href="stylel_align-items-property.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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