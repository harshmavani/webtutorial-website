<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS3 column-rule-style Property">
	  <meta name="keywords" content="css,css3,CSS3 column-rule-style Property">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS3 column-rule-style Property - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS3 column-rule-style Property</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css_inner.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
            	<h1>CSS3 <code>column-rule-style</code> Property</h1>
				<p class="topic">Topic: <a href="stylel_properties.php">CSS3 Properties Reference</a><span class="topic-nav"><a href="stylel_column-rule-color-property.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="stylel_column-rule-width-property.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
				<h2>Description</h2>
				<p>The <code>column-rule-style</code> CSS property sets the style of the rule drawn between the columns in a multi-column layout.</p>
				<p>The following table summarizes the usages context and the version history of this property.</p>
				<div class="shadow">
					<table class="data description">
						<tr>
							<th>Default value:</th>
							<td><code>none</code></td>
						</tr>
						<tr>
							<th>Applies to:</th>
							<td>Multi-column elements</td>
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
								<td><pre class="property">column-rule-style: </pre></td>
								<td><span class="keyword">none</span> | <span class="keyword">hidden</span> | <span class="keyword">dotted</span> |
			    <span class="keyword">dashed</span> | <span class="keyword">solid</span> | <span class="keyword">double</span> |
			    <span class="keyword">groove</span> | <span class="keyword">ridge</span> | <span class="keyword">inset</span> | <span class="keyword">outset</span> | <a href="../definitions.php#initial">initial</a> | <a href="../definitions.php#inherit">inherit</a></td>
							</tr>
						</table>
					</div>
				</div>
				<p>The example below shows the <code>column-rule-style</code> property in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelab675b.html">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
						<textarea id="code1">

p {
    /* Chrome, Safari, Opera */
    -webkit-column-count: 3;
    -webkit-column-gap: 100px;
    -webkit-column-rule-color: red;
    -webkit-column-rule-width: 2px;
    -webkit-column-rule-style: solid;
    /* Firefox */
    -moz-column-count: 3;
    -moz-column-gap: 100px;
    -moz-column-rule-color: red;
    -moz-column-rule-width: 2px;
    -moz-column-rule-style: solid;
    /* Standard syntax */
    column-count: 3;
    column-gap: 100px;
    column-rule-color: red;
    column-rule-width: 2px;
    column-rule-style: solid;
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
				<div class="shadow break">
					<table class="data">
						<tr>
							<th style="width:80px;">Value</th>
							<th>Description</th>
						</tr>
						<tr>
							<td><code>none</code></td>
							<td>No rule will be displayed.</td>
						</tr>
						<tr>
							<td><code>hidden</code></td>
							<td>Displays no rule. Same as <code>none</code>.</td>
						</tr>
						<tr>
							<td><code>dotted</code></td>
							<td>Displays the rule as a series of dots.</td>
						</tr>
						<tr>
							<td><code>dashed</code></td>
							<td>Displays the rule as a series of short line segments i.e. dashes.</td>
						</tr>
						<tr>
							<td><code>solid</code></td>
							<td>Displays the rule as a single solid line.</td>
						</tr>
						<tr>
							<td><code>double</code></td>
							<td>Displays the rule as a two parallel solid lines with some space between them. The sum of the two lines and the space between them equals the value of <code><a href="stylel_column-rule-width-property.php">column-rule-width</a></code> property.</td>
						</tr>
						<tr>
							<td><code>groove</code></td>
							<td>Displays the rule as it were carved into the page. It gives the impression of 3D that is typically achieved by creating a shadow from two colors that are slightly lighter and darker than the <code><a href="stylel_column-rule-color-property.php">column-rule-color</a></code>.</td>
						</tr>
						<tr>
							<td><code>ridge</code></td>
							<td>Displays the rule that has the opposite effect of <code>groove</code>. It also gives the impression of 3D, the rule looks as though it were coming out of the page.</td>
						</tr>
						<tr>
							<td><code>inset</code></td>
							<td>Displays the rule same as <code>ridge</code>.</td>
						</tr>
						<tr>
							<td><code>outset</code></td>
							<td>Displays the rule same as <code>groove</code>.</td>
						</tr>
						<tr>
							<td><code>initial</code></td>
							<td>Sets this property to its default value.</td>
						</tr>
						<tr>
							<td><code>inherit</code></td>
							<td>If specified, the associated element takes the <a href="../definitions.php#computed-value">computed value</a> of its parent element <code>column-rule-style</code> property.</td>
						</tr>
					</table>
				</div>
				<div class="color-box break">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585">
							<p><strong>Read Carefully:</strong> The <code>column-rule-style</code> property basically takes the values defined for the <code><a href="style_border-style-property.php">border-style</a></code>, but the values are interpreted as in the <a href="style_border-collapse-property.php">collapsing border model</a>.</p>
						</div>
					</div>
				</div>
				<hr />
				<h2>Browser Compatibility</h2>
				<p>The <code>column-rule-style</code> property is supported in all major modern browsers.</p>
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
				<p>Related properties: <code><a href="stylel_column-width-property.php">column-width</a></code>, <code><a href="stylel_column-fill-property.php">column-fill</a></code>, <code><a href="stylel_column-gap-property.php">column-gap</a></code>, <code><a href="stylel_column-rule-property.php">column-rule</a></code>, <code><a href="stylel_column-rule-width-property.php">column-rule-width</a></code>, <code><a href="stylel_column-rule-color-property.php">column-rule-color</a></code>, <code><a href="stylel_column-span-property.php">column-span</a></code>, <code><a href="stylel_column-count-property.php">column-count</a></code>, <code><a href="stylel_columns-property.php">columns</a></code>.</p>
				<div class="bottom-link clearfix">
					<a href="stylel_column-rule-color-property.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
					<a href="stylel_column-rule-width-property.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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