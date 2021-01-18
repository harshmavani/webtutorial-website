<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS font-family Property">
	  <meta name="keywords" content="css,css3,CSS font-family Property">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS font-family Property - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS font-family Property</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css_inner.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>CSS <code>font-family</code> Property</h1>
                <p class="topic">Topic: <a href="stylel_properties.html">CSS3 Properties Reference</a><span class="topic-nav"><a href="style_font-property.html"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="style_font-size-property.html"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>font-family</code> CSS property sets the font face to be used for element's text content. The <code>font-family</code> property should hold several font names as a "fallback" system. Start with the font that you want first, then any fonts that might fill in for the first if it is unavailable.</p>
                <p>You should end the list with a Generic font family, which are five: <code>serif</code>, <code>sans-serif</code>, <code>monospace</code>, <code>cursive</code> and fantasy. The following table summarizes the usages context and the version history of this property.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Default value:</th>
                            <td>Depends on the browser</td>
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
							<td>No. <a href="style_animatable-properties.html"><i>See</i> <em>animatable properties</em></a>.</td>
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
                                <td><pre class="property">font-family: </pre></td>
                                <td>[ <i>family-name</i> | <i>generic-family</i> ] [, <i>family-name</i> | <i>generic-family</i> ]<sup>one or more pairs</sup> | <a href="../definitions.html#initial">initial</a> | <a href="../definitions.html#inherit">inherit</a></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <p>The example below shows the <code>font-family</code> property in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab52de.html?topic=css&amp;file=font-family-property" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

                        body {
    font-family: Arial, Helvetica, sans-serif;
}
h1 {
    font-family: "Times New Roman", Times, serif;
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
                            <p><strong>Read Carefully:</strong> If the name of a font family is more than one word, it must be in quotation marks, like <code>font-family: "Times New Roman", Serif;</code> etc.</p>
                        </div>
                    </div>
                </div>
                <p>For more commonly used font combinations, please check out <a href="style_web-safe-fonts.html">CSS web safe fonts</a>.</p>
                <hr />
                <h2>Property Values</h2>
                <p>The following table describes the values of this property.</p>
                <div class="shadow space">
                    <table class="data">
                        <tr>
                            <th style="width:100px;">Value</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td><i>family-name</i></td>
                            <td>The name of a font family. For example, "Times" and "Helvetica" are font families. Font family names containing whitespace should be quoted.</td>
                        </tr>
                        <tr>
                            <td><i>generic-family</i></td>
                            <td>
                                <p>Generic font families can be used as a general fallback mechanism when the desired font choices are not available. As generic family names are keywords, they must not be quoted.</p>
                                <p>A generic font family should be the last alternative in the list of font family names. The following generic families are defined:</p>
                                <ul>
                                    <li>serif (e.g. Times)</li>
                                    <li>sans-serif (e.g. Arial)</li>
                                    <li>cursive (e.g. Zapf-Chancery)</li>
                                    <li>fantasy (e.g. Western)</li>
                                    <li>monospace (e.g. Courier)</li>
                                </ul>
                                <p>Learn more about <a href="style_web-safe-fonts.html">font combinations</a>.</p>
                            </td>
                        </tr>
						<tr>
							<td><code>initial</code></td>
							<td>Sets this property to its default value.</td>
						</tr>
                        <tr>
                            <td><code>inherit</code></td>
                            <td>If specified, the associated element takes the <a href="../definitions.html#computed-value">computed value</a> of its parent element <code>font-family</code> property.</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>font-family</code> property is supported in all major modern browsers.</p>
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
                <p>See tutorial on: <a href="../des-css/style_fonts.html">CSS Fonts</a>, <a href="../des-css/style_text.html">CSS Text</a>.</p>
                <p>Related properties and at-rules: <code><a href="style_font-property.html">font</a></code>, <code><a href="style_font-style-property.html">font-style</a></code>, <code><a href="style_font-variant-property.html">font-variant</a></code>, <code><a href="style_font-weight-property.html">font-weight</a></code>, <code><a href="style_font-size-property.html">font-size</a></code>, <br /><code><a href="style_line-height-property.html">line-height</a></code>, <code><a href="style_font-face-rule.html">@font-face</a></code>.</p> 
                <!--Bottom Navigation-->
                <div class="bottom-link clearfix">
                    <a href="style_font-property.html" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="style_font-size-property.html" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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