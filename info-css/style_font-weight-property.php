<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS font-weight Property">
	  <meta name="keywords" content="css,css3,CSS font-weight Property">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS font-weight Property - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS font-weight Property</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css_inner.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>CSS <code>font-weight</code> Property</h1>
                <p class="topic">Topic: <a href="stylel_properties.php">CSS3 Properties Reference</a><span class="topic-nav"><a href="style_font-variant-property.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="style_height-property.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>font-weight</code> CSS property sets the weight or boldness of the font.</p>
                <p>The following table summarizes the usages context and the version history of this property.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Default value:</th>
                            <td>normal</td>
                        </tr>
                        <tr>
                            <th>Applies to:</th>
                            <td>All elements</td>
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
                            <td>CSS 1, 2, 3</td>
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
                                <td><pre class="property">font-weight: </pre></td>
                                <td><span class="keyword">normal</span> | <span class="keyword">bold</span> | <span class="keyword">bolder</span> | <span class="keyword">lighter</span> | <span class="keyword">100</span> | <span class="keyword">200</span> | <span class="keyword">300</span> | <span class="keyword">400</span> | <span class="keyword">500</span> | <span class="keyword">600</span> | <span class="keyword">700</span> | <span class="keyword">800</span> | <span class="keyword">900</span> | <a href="../definitions.php#initial">initial</a> | <a href="../definitions.php#inherit">inherit</a></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <p>The example below shows the <code>font-weight</code> property in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab8869.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

                        h1 {
    font-weight: normal;
}
p {
    font-weight: bold;
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
                            <th style="width:75px;">Value</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td><code>normal</code></td>
                            <td>Specifies normal characters.</td>
                        </tr>
                        <tr>
                            <td><code>bold</code></td>
                            <td>Specifies thick characters.</td>
                        </tr>
                        <tr>
                            <td><code>bolder</code></td>
                            <td>Selects a font weight that's bolder than the weight inherited from the parent.</td>
                        </tr>
                        <tr>
                            <td><code>lighter</code></td>
                            <td>Selects a font weight that's lighter than the weight inherited from the parent.</td>
                        </tr>
                        <tr>
                            <td><code>100</code></td>
                            <td rowspan="9">
                                <p style="padding-top:0;">The numeric values <code>100</code> to <code>900</code> form an ordered sequence, where each number indicates a weight that is equal to or darker than its predecessor.</p>
                                <p>The keyword <code>normal</code> is same as <code>400</code>, and <code>bold</code> is same as <code>700</code>.</p>
                            </td>
                        </tr>
                        <tr>
                            <td><code class="plain">200</code></td>
                        </tr>
                        <tr>
                            <td><code class="plain">300</code></td>
                        </tr>
                        <tr>
                            <td><code class="plain">400</code></td>
                        </tr>
                        <tr>
                            <td><code class="plain">500</code></td>
                        </tr>
                        <tr>
                            <td><code class="plain">600</code></td>
                        </tr>
                        <tr>
                            <td><code class="plain">700</code></td>
                        </tr>
                        <tr>
                            <td><code class="plain">800</code></td>
                        </tr>
                        <tr>
                            <td><code class="plain">900</code></td>
                        </tr>
						<tr>
							<td><code>initial</code></td>
							<td>Sets this property to its default value.</td>
						</tr>
						<tr>
                            <td><code>inherit</code></td>
                            <td>If specified, the associated element takes the <a href="../definitions.php#computed-value">computed value</a> of its parent element <code>font-weight</code> property.</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>font-weight</code> property is supported in all major modern browsers.</p>
                <div class="shadow">
                    <div class="support">
                        <table>
                            <tr>
                                <td><img src="../assets/images/browser.jpg" alt="Browsers Icon" /></td>
                                <td>
                                    <h2>Basic Support&mdash;</h2>
                                    <ul>
                                        <li>Firefox <span>1+</span></li>
                                        <li>Google Chrome <span>1+</span></li>
                                        <li>Internet Explorer <span>3+</span></li>
                                        <li>Apple Safari <span>1+</span></li>
                                        <li>Opera <span>3.5+</span></li>
                                    </ul>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <hr />
                <h2>Further Reading</h2>
                <p>See tutorial on: <a href="../des-css/style_fonts.php">CSS Fonts</a>, <a href="../des-css/style_text.php">CSS Text</a>.</p>
                <p>Related properties and at-rules: <code><a href="style_font-property.php">font</a></code>, <code><a href="style_font-style-property.php">font-style</a></code>, <code><a href="style_font-variant-property.php">font-variant</a></code>, <code><a href="style_font-size-property.php">font-size</a></code>, <code><a href="style_line-height-property.php">line-height</a></code>, <code><a href="style_font-family-property.php">font-family</a></code>, <code><a href="style_font-face-rule.php">@font-face</a></code>.</p>
                <!--Bottom Navigation-->
                <div class="bottom-link clearfix">
                    <a href="style_font-variant-property.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="style_height-property.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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