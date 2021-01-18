<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS3 text-shadow Property">
	  <meta name="keywords" content="css,css3,CSS3 text-shadow Property">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS3 text-shadow Property - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS3 text-shadow Property</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css_inner.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>CSS3 <code>text-shadow</code> Property</h1>
                <p class="topic">Topic: <a href="stylel_properties.php">CSS3 Properties Reference</a><span class="topic-nav"><a href="stylel_text-overflow-property.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="style_text-transform-property.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>text-shadow</code> CSS property applies one or more text shadow effects to the text  content of an element. Each text shadow effect must specify a shadow offset and may optionally specify a blur radius and a shadow color.</p>
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
                <div class="usage">
                    <h3><em>Usage Notes</em></h3>
                    <ul>
                        <li>The text shadow effects are applied in the order specified and may thus overlay each other, but they will never overlay the text itself.</li>
                        <li>A blur radius may optionally be specified after the shadow offset value; it's a length value represents the size of the blur effect.</li>
                        <li>A color value for the shadow may optionally be specified before or after the offset length values. If no color is specified for the shadow, the value of the CSS <code><a href="style_color-property.php">color</a></code> property will be used instead.</li>
                    </ul>
                </div>	
                <hr />
                <h2>Syntax</h2>
                <p>The syntax of the property is given with:</p>
                <div class="shadow">
                    <div class="syntax">
                        <table>
                            <tr>
                                <td><span class="property">text-shadow</span>:&nbsp;</td>
                                <td>
                                    <i>shadow1</i> [, <i>shadow2</i>, ... <i>shadowN</i>] | <span class="keyword">none</span> | <a href="../definitions.php#inherit">inherit</a><br />
                                    where <i>shadow</i> is:
                                    [<i>offset-x</i> <i>offset-y</i> <i>blur-radius</i> <i>color</i>]
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <p>The example below shows the <code>text-shadow</code> property in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab5f28.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

h1 {
    text-shadow: 2px 2px 5px #000;
}
p {
    text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
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
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> If both the shadow offset values are set to <code>0</code>, then the shadow is placed behind the text and may generate a blur effect when blur-radius is specified.</p>
                        </div>
                    </div>
                </div>		
                <hr />
                <h2>Property Values</h2>
                <p>The following table describes the values of this property.</p>
                <div class="shadow">
                    <table class="data">
                        <tr>
                            <th style="width: 75px;">Value</th>
                            <th>Description</th>
                        </tr>
                        <tr><td class="section" colspan="2"><strong>Required</strong> &mdash; The following values must be specified for the property.</td></tr>
                        <tr>
                            <td><i>h-shadow</i></td>
                            <td>Specifies the horizontal distance to the right of the text. A negative horizontal length value places the shadow to the left of the text.</td>
                        </tr>
                        <tr>
                            <td><i>v-shadow</i></td>
                            <td>Specifies the vertical distance below the text. A negative vertical length value places the shadow above the text. </td>
                        </tr>
                        <tr><td class="section" colspan="2"><strong>Optional</strong> &mdash; The following values are optional.</td></tr>
                        <tr>
                            <td><i>blur</i></td>
                            <td>Specify the blur size.</td>
                        </tr>
                        <tr>
                            <td><i>color</i></td>
                            <td>Specify the color of the shadow. Look at <a href="style_color-values.php">CSS Color Values</a> for the list of possible color values.</td>
                        </tr>
                        <tr>
                            <td><code>inherit</code></td>
                            <td>If specified, the associated element takes the <a href="../definitions.php#computed-value">computed value</a> of its parent element <code>text-shadow</code> property.</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>text-shadow</code> property is supported in all major modern browsers.</p>
                <div class="shadow">
                    <div class="support">
                        <table>
                            <tr>
                                <td><img src="../assets/images/browser.jpg" alt="Browsers Icon" /></td>
                                <td>
                                    <h2>Basic Support&mdash;</h2>
                                    <ul>
                                        <li>Firefox <span>3.5+</span></li>
                                        <li>Google Chrome <span>2+</span></li>
                                        <li>Internet Explorer <span>10+</span></li>
                                        <li>Apple Safari <span>1.1+</span></li>
                                        <li>Opera <span>9.5+</span></li>
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
                            <p><strong>Warning:</strong> Internet Explorer 7 and earlier versions don't support the value inherit. IE8 supports inherit, but requires a <code><a href="../des-html/html-doctypes.php">&lt;!DOCTYPE&gt;</a></code>. IE9 supports inherit.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Further Reading</h2>
                <p>See tutorial on: <a href="../des-css/style_text.php">CSS Text</a>.</p>
                <p>Text-related properties: <code><a href="style_letter-spacing-property.php">letter-spacing</a></code>, <code><a href="style_text-align-property.php">text-align</a></code>, <code><a href="style_text-decoration-property.php">text-decoration</a></code>, <code><a href="style_text-indent-property.php">text-indent</a></code>, <code><a href="stylel_text-overflow-property.php">text-overflow</a></code>, <code><a href="style_text-transform-property.php">text-transform</a></code>, <code><a href="style_white-space-property.php">white-space</a></code>, <code><a href="style_word-spacing-property.php">word-spacing</a></code>.</p>
                <div class="bottom-link clearfix">
                    <a href="stylel_text-overflow-property.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="style_text-transform-property.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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