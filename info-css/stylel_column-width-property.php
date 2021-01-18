<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS3 column-width Property">
	  <meta name="keywords" content="css,css3,CSS3 column-width Property">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS3 column-width Property - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS3 column-width Property</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css_inner.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
            	<h1>CSS3 <code>column-width</code> Property</h1>
				<p class="topic">Topic: <a href="stylel_properties.php">CSS3 Properties Reference</a><span class="topic-nav"><a href="stylel_column-span-property.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="stylel_columns-property.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
				<h2>Description</h2>
				<p>The <code>column-width</code> CSS property specifies the optimal width of the columns in a multi-column element. This is not an absolute value; browser may adjust the width of the column depending on the value of other properties, especially <code><a href="stylel_column-count-property.php">column-count</a></code>.</p>
				<p>The following table summarizes the usages context and the version history of this property.</p>
				<div class="shadow">
					<table class="data description">
						<tr>
							<th>Default value:</th>
							<td><code>auto</code></td>
						</tr>
						<tr>
							<th>Applies to:</th>
							<td>Non-replaced <a href="../des-css/style_visual-formatting.php#block-level">block-level</a> elements (except table elements), table cells, and <a href="../des-css/style_visual-formatting.php#inline-level">inline-block</a> elements</td>
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
								<td><pre class="property">column-width: </pre></td>
								<td><i>length</i> | <span class="keyword">auto</span> | <a href="../definitions.php#initial">initial</a> | <a href="../definitions.php#inherit">inherit</a></td>
							</tr>
						</table>
					</div>
				</div>
				<p>The example below shows the <code>column-width</code> property in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelabe0f2.html">Try this code <span>&raquo;</span></a></div>
						<textarea id="code1">

p {
    -webkit-column-width: 150px; /* Chrome, Safari, Opera */
       -moz-column-width: 150px; /* Firefox */
            column-width: 150px; /* Standard syntax */
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
							<td><i>length</i></td>
							<td>A length in absolute or relative units that specifies the width of the column.</td>
						</tr>
						<tr>
							<td><code>auto</code></td>
							<td>The column width is determined by the other property values of the multi-column element, such as column-Count. This is default value.</td>
						</tr>
						<tr>
							<td><code>initial</code></td>
							<td>Sets this property to its default value.</td>
						</tr>
						<tr>
							<td><code>inherit</code></td>
							<td>If specified, the associated element takes the <a href="../definitions.php#computed-value">computed value</a> of its parent element <code>column-width</code> property.</td>
						</tr>
					</table>
				</div>	
				<hr />
				<h2>Browser Compatibility</h2>
				<p>The <code>column-width</code> property is supported in all major modern browsers.</p>
				<div class="shadow">
					<div class="support">
						<table>
							<tr>
								<td><img src="../assets/images/browser.jpg" alt="Browsers Icon" /></td>
								<td>
									<h2>Basic Support&mdash;</h2>
									<ul>
										<li>Firefox <span>2+ <sup class="badge">-moz-</sup></span></li>
										<li>Google Chrome <span>4+ <sup class="badge">-webkit-</sup></span></li>
										<li>Internet Explorer <span>10+</span></li>
										<li>Apple Safari <span>3.1+ <sup class="badge">-webkit-</sup></span></li>
										<li>Opera <span>11.1+ <sup class="badge">-o-</sup></span>, <span>15+ <sup class="badge">-webkit-</sup></span></li>
									</ul>
								</td>
							</tr>
						</table>
					</div>
				</div>
				<hr />
				<h2>Further Reading</h2>
				<p>See tutorial on: <a href="../des-css/stylel_multi-column-layouts.php" class="selected">CSS3 Multi-column Layouts</a>.</p>
				<p>Related properties: <code><a href="stylel_column-span-property.php">column-span</a></code>, <code><a href="stylel_column-fill-property.php">column-fill</a></code>, <code><a href="stylel_column-gap-property.php">column-gap</a></code>, <code><a href="stylel_column-rule-property.php">column-rule</a></code>, <code><a href="stylel_column-rule-color-property.php">column-rule-color</a></code>, <code><a href="stylel_column-rule-style-property.php">column-rule-style</a></code>, <code><a href="stylel_column-rule-width-property.php">column-rule-width</a></code>, <code><a href="stylel_column-count-property.php">column-count</a></code>, <code><a href="stylel_columns-property.php">columns</a></code>.</p>
				<div class="bottom-link clearfix">
					<a href="stylel_column-span-property.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
					<a href="stylel_columns-property.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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