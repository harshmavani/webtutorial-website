<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS font Property">
	  <meta name="keywords" content="css,css3,CSS font Property">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS font Property - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS font Property</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css_inner.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>CSS <code>font</code> Property</h1>
                <p class="topic">Topic: <a href="stylel_properties.php">CSS3 Properties Reference</a><span class="topic-nav"><a href="style_float-property.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="style_font-family-property.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>font</code> CSS property sets the style, variant, boldness, size/line-height, and the font family for an element's text content. It is a shorthand property for setting the individual font properties i.e. <code><a href="style_font-style-property.php">font-style</a></code>, <code><a href="style_font-variant-property.php">font-variant</a></code>, <code><a href="style_font-weight-property.php">font-weight</a></code>, <code><a href="style_font-size-property.php">font-size</a></code>, <code><a href="style_line-height-property.php">line-height</a></code> and <code><a href="style_font-family-property.php">font-family</a></code> in a single declaration.</p>
                <p>The following table summarizes the usages context and the version history of this property.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Default value:</th>
                            <td><i><a href="#property-values">See individual properties</a></i></td>
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
							<td>Yes, as some of the properties of the shorthand are animatable. <a href="style_animatable-properties.php"><i>See</i> <em>animatable properties</em></a>.</td>
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
                                <td><span class="property">font</span>:&nbsp;</td>
                                <td>[ <i>font-style font-variant font-weight font-size/line-height font-family</i> ] | <span class="keyword">caption</span> | <span class="keyword">icon</span> | <span class="keyword">menu</span> | <span class="keyword">message-box</span> | <span class="keyword">small-caption</span> | <span class="keyword">status-bar</span> | <a href="../definitions.php#initial">initial</a> | <a href="../definitions.php#inherit">inherit</a></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <p> There are some conditions which must be fulfilled when using the font shorthand property. If these conditions are not met, the property is invalid and is entirely ignored.</p>
                <ul>
                    <li>It is mandatory to define the values for <code><a href="style_font-size-property.php">font-size</a></code> and the <code><a href="style_font-family-property.php">font-family</a></code> properties.</li>
                    <li>The values for <code><a href="style_font-style-property.php">font-style</a></code>, <code><a href="style_font-variant-property.php">font-variant</a></code> and <code><a href="style_font-weight-property.php">font-weight</a></code> properties must be defined, before the <code><a href="style_font-size-property.php">font-size</a></code> value, if any.</li>
                    <li>The value for <code><a href="style_line-height-property.php">line-height</a></code> property must be defined immediately after the <code><a href="style_font-size-property.php">font-size</a></code> property, preceded by a mandatory "/" (forward slash).</li>
                    <li>The <code><a href="style_font-family-property.php">font-family</a></code> must be the last value defined.</li>
                </ul>
                <p>The example below shows the <code>font</code> property in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab90bf.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

                        h1 {
    font: bold 2.5em "Times New Roman", Times, serif;
}
p {
    font: normal 1.2em Arial, Helvetica, sans-serif;
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
                <div class="shadow" id="property-values">
                    <table class="data">
                        <tr>
                            <th style="width:110px;">Value</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td><code><i><a href="style_font-style-property.php">font-style</a></i></code></td>
                            <td>Sets the font style.</td>
                        </tr>
                        <tr>
                            <td><code><i><a href="style_font-variant-property.php">font-variant</a></i></code></td>
                            <td>Sets the font variant.</td>
                        </tr>
                        <tr>
                            <td><code><i><a href="style_font-weight-property.php">font-weight</a></i></code></td>
                            <td>Sets the font weight.</td>
                        </tr>
                        <tr>
                            <td><code><i><a href="style_font-size-property.php">font-size</a></i></code></td>
                            <td>Sets the font size.</td>
                        </tr>
                        <tr>
                            <td><code><i><a href="style_line-height-property.php">line-height</a></i></code></td>
                            <td>Sets the line height.</td>
                        </tr>
						<tr>
                            <td><code><i><a href="style_font-family-property.php">font-family</a></i></code></td>
                            <td>Specifies the font family.</td>
                        </tr>
						<tr>
							<td><code>initial</code></td>
							<td>Sets this property to its default value.</td>
						</tr>
                        <tr>
                            <td><code>inherit</code></td>
                            <td>If specified, the associated element takes the <a href="../definitions.php#computed-value">computed value</a> of its parent element <code>font</code> property.</td>
                        </tr>
                        <tr>
                            <td colspan="2" class="section"><h6>And the following values refer to system fonts:</h6></td>
                        </tr>
                        <tr>
                            <td><code>caption</code></td>
                            <td>The font used for captioned controls (e.g., buttons, drop-downs, etc.).</td>
                        </tr>
                        <tr>
                            <td><code>icon</code></td>
                            <td>The font used to label icons.</td>
                        </tr>
                        <tr>
                            <td><code>menu</code></td>
                            <td>The font used in menus (e.g., dropdown menus and menu lists).</td>
                        </tr>
                        <tr>
                            <td><code>message-box</code></td>
                            <td>The font used in dialog boxes.</td>
                        </tr>
                        <tr>
                            <td><code>small-caption</code></td>
                            <td>The font used for labeling small controls.</td>
                        </tr>
                        <tr>
                            <td><code>status-bar</code></td>
                            <td>The font used in window status bars.</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>font</code> property is supported in all major modern browsers.</p>
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
                <p>Related properties and at-rules: <code><a href="style_font-style-property.php">font-style</a></code>, <code><a href="style_font-variant-property.php">font-variant</a></code>, <code><a href="style_font-weight-property.php">font-weight</a></code>, <code><a href="style_font-size-property.php">font-size</a></code>, <code><a href="style_line-height-property.php">line-height</a></code>, <code><a href="style_font-family-property.php">font-family</a></code>, <code><a href="style_font-face-rule.php">@font-face</a></code>.</p> 
                <!--Bottom Navigation-->
                <div class="bottom-link clearfix">
                    <a href="style_float-property.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="style_font-family-property.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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