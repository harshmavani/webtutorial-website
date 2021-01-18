<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS font-size Property">
	  <meta name="keywords" content="css,css3,CSS font-size Property">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS font-size Property - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS font-size Property</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css_inner.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>CSS <code>font-size</code> Property</h1>
                <p class="topic">Topic: <a href="stylel_properties.php">CSS3 Properties Reference</a><span class="topic-nav"><a href="style_font-family-property.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="stylel_font-size-adjust-property.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>font-size</code> CSS property sets the font size for the element's text content.</p>
                <p>The following table summarizes the usages context and the version history of this property.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Default value:</th>
                            <td><code>medium</code></td>
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
                                <td><pre class="property">font-size: </pre></td>
                                <td><span class="keyword">xx-small</span> | <span class="keyword">x-small</span> | <span class="keyword">small</span> | <span class="keyword">medium</span> | <span class="keyword">large</span> | <span class="keyword">x-large</span> | <span class="keyword">xx-large</span> | <span class="keyword">smaller</span> | <span class="keyword">larger</span> | <i>length</i> | <i>percentage</i>  | <a href="../definitions.php#initial">initial</a> | <a href="../definitions.php#inherit">inherit</a></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <p>The example below shows the <code>font-size</code> property in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab7d9a.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

                        body {
    font-size: 14px;
}
h1 {
    font-size: 2em;  
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
                            <th style="width:85px;">Value</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td><code>xx-small</code></td>
                            <td rowspan="7">
                                <p>A set of absolute size keywords. These keywords scale the font size of text according to the user's browser font setting preferences, and the browser's internal font scaling algorithms.</p>
                                <p>The medium value (16px) of the <code>font-size</code> property matches the user's browser default font size.</p>
                            </td>
                        </tr>
                        <tr>
                            <td><code class="plain">x-small</code></td>
                        </tr>
                        <tr>
                            <td><code class="plain">small</code></td>
                        </tr>
                        <tr>
                            <td><code class="plain">medium</code></td>
                        </tr>
                        <tr>
                            <td><code class="plain">large</code></td>
                        </tr>
                        <tr>
                            <td><code class="plain">x-large</code></td>
                        </tr>
                        <tr>
                            <td><code class="plain">xx-large</code></td>
                        </tr>
                        <tr>
                            <td><code>smaller</code></td>
                            <td rowspan="2">
                                <p>Smaller or larger or than the parent element's font size, by roughly the ratio used to separate the absolute size keywords above.</p>
                                <p>For example, if the parent element has a font size of <code>medium</code>, a value of <code>larger</code> will make the font size of the current element is <code>large</code>.</p>
                            </td>
                        </tr>
                        <tr>
                            <td><code class="plain">larger</code></td>
                        </tr>
                        <tr>
                            <td><i>length</i></td>
                            <td>A length value in <code>px</code>, <code>pt</code>, <code>cm</code>, <code>em</code>, etc. Negative values are not allowed.</td>
                        </tr>
                        <tr>
                            <td><i>percentage</i></td>
                            <td>Sets the font size to a percent of the parent element's font size. Negative values are not allowed.</td>
                        </tr>
						<tr>
							<td><code>initial</code></td>
							<td>Sets this property to its default value.</td>
						</tr>
                        <tr>
                            <td><code>inherit</code></td>
                            <td>If specified, the associated element takes the <a href="../definitions.php#computed-value">computed value</a> of its parent element <code>font-size</code> property.</td>
                        </tr>
                    </table>
                </div>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> The default value for the <code>font-size</code> property is medium (16px) in all modern browsers like Firefox, Chrome, IE, Safari, Opera etc.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>font-size</code> property is supported in all major modern browsers.</p>
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
                                        <li>Internet Explorer <span>4+</span></li>
                                        <li>Apple Safari <span>1+</span></li>
                                        <li>Opera <span>4+</span></li>
                                    </ul>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <hr />
                <h2>Further Reading</h2>
                <p>See tutorial on: <a href="../des-css/style_fonts.php">CSS Fonts</a>, <a href="../des-css/style_text.php">CSS Text</a>.</p>
                <p>Related properties and at-rules: <code><a href="style_line-height-property.php">line-height</a></code>, <code><a href="style_font-property.php">font</a></code>, <code><a href="style_font-family-property.php">font-family</a></code>, <code><a href="style_font-style-property.php">font-style</a></code>, <code><a href="style_font-variant-property.php">font-variant</a></code>, <code><a href="style_font-weight-property.php">font-weight</a></code>, <code><a href="style_font-face-rule.php">@font-face</a></code>.</p>
                <!--Bottom Navigation-->
                <div class="bottom-link clearfix">
                    <a href="style_font-family-property.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="stylel_font-size-adjust-property.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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