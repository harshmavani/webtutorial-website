<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS text-transform Property">
	  <meta name="keywords" content="css,css3,CSS text-transform Property">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS text-transform Property - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS text-transform Property</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css_inner.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>CSS <code>text-transform</code> Property</h1>
                <p class="topic">Topic: <a href="stylel_properties.php">CSS3 Properties Reference</a><span class="topic-nav"><a href="stylel_text-shadow-property.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="style_top-property.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>text-transform</code> CSS property transforms the case of an element's text content.</p>
                <p>The following table summarizes the usages context and the version history of this property.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Default value:</th>
                            <td><code>none</code></td>
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
							<td>No. <a href="style_animatable-properties.php"><i>See</i> <em>animatable properties</em></a>.</td>
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
                                <td><pre class="property">text-transform: </pre></td>
                                <td><span class="keyword">capitalize</span> | <span class="keyword">lowercase</span> | <span class="keyword">none</span> | <span class="keyword">uppercase</span> | <a href="../definitions.php#initial">initial</a> | <a href="../definitions.php#inherit">inherit</a></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <p>The example below shows the <code>text-transform</code> property in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelababe1.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

p {
    text-transform: capitalize;
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
                <div class="shadow">
                    <table class="data">
                        <tr>
                            <th style="width:85px;">Value</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td><code>capitalize</code></td>
                            <td>Transforms the first character of each word in uppercase; other characters are unaffected.</td>
                        </tr>
                        <tr>
                            <td><code>lowercase</code></td>
                            <td>Transforms all characters of each word in lowercase.</td>
                        </tr>
                        <tr>
                            <td><code>uppercase</code></td>
                            <td>Transforms all characters of each word in uppercase.</td>
                        </tr>
                        <tr>
                            <td><code>none</code></td>
                            <td>No capitalization effects. The text renders as it is.  This is default.</td>
                        </tr>
						<tr>
							<td><code>initial</code></td>
							<td>Sets this property to its default value.</td>
						</tr>
                        <tr>
                            <td><code>inherit</code></td>
                            <td>If specified, the associated element takes the <a href="../definitions.php#computed-value">computed value</a> of its parent element <code>text-transform</code> property.</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>text-transform</code> property is supported in all major modern browsers.</p>
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
                <p>See tutorial on: <a href="../des-css/style_text.php">CSS Text</a>, <a href="../des-css/style_fonts.php">CSS Fonts</a>.</p>
                <p>Text-related properties: <code><a href="style_letter-spacing-property.php">letter-spacing</a></code>, <code><a href="style_text-align-property.php">text-align</a></code>, <code><a href="style_text-decoration-property.php">text-decoration</a></code>, <code><a href="style_text-indent-property.php">text-indent</a></code>, <code><a href="stylel_text-overflow-property.php">text-overflow</a></code>, <code><a href="stylel_text-shadow-property.php">text-shadow</a></code>, <code><a href="style_white-space-property.php">white-space</a></code>, <code><a href="style_word-spacing-property.php">word-spacing</a></code>.</p>
                <div class="bottom-link clearfix">
                    <a href="stylel_text-shadow-property.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="style_top-property.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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