<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="How to Create Dropdown Menu with Bootstrap 4">
	  <meta name="keywords" content="css,css3,How to Create Dropdown Menu with Bootstrap 4">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS white-space Property - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">How to Create Dropdown Menu with Bootstrap 4</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css_inner.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>CSS <code>white-space</code> Property</h1>
                <p class="topic">Topic: <a href="stylel_properties.php">CSS3 Properties Reference</a><span class="topic-nav"><a href="style_visibility-property.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="style_width-property.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>white-space</code> CSS property specifies how white-space such as spaces, tabs, and newline characters are handled inside the elements.</p>
                <p>The following table summarizes the usages context and the version history of this property.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Default value:</th>
                            <td><code>normal</code></td>
                        </tr>
                        <tr>
                            <th>Applies to:</th>
                            <td>All elements</td>
                        </tr>
                        <tr>
                            <th>Inherited:</th>
                            <td>yes</td>
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
                                <td><pre class="property">white-space: </pre></td>
                                <td><span class="keyword">normal</span> | <span class="keyword">pre</span> | <span class="keyword">nowrap</span> | <span class="keyword">pre-line</span> | <span class="keyword">pre-wrap</span> | <a href="../definitions.php#initial">initial</a> | <a href="../definitions.php#inherit">inherit</a></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <p>The example below shows the <code>white-space</code> property in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelaba925.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

code {
    white-space: pre;
}
p {
    white-space: nowrap;
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
                            <th style="width:86px;">Value</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td><code>normal</code></td>
                            <td>Sequences of whitespace will collapse into a single whitespace. Line breaks will occur wherever necessary to fill line boxes. This is default value.</td>
                        </tr>
                        <tr>
                            <td><code>nowrap</code></td>
                            <td>Collapses whitespace as for normal, but suppresses line breaks within text.</td>
                        </tr>
                        <tr>
                            <td><code>pre</code></td>
                            <td>Sequences of whitespace are preserved. Lines are only broken at preserved newline characters.  Acts like the <code>&lt;pre&gt;</code> tag in HTML</td>
                        </tr>
                        <tr>
                            <td><code>pre-line</code></td>
                            <td>Sequences of whitespace will collapse into a single space character. Line breaks will occur at preserved newline characters, and wherever necessary to fill line boxes.</td>
                        </tr>
                        <tr>
                            <td><code>pre-wrap</code></td>
                            <td>Sequences of whitespace are preserved. Line breaks will occur at preserved newline characters, and wherever necessary to fill line boxes.</td>
                        </tr>
						<tr>
							<td><code>initial</code></td>
							<td>Sets this property to its default value.</td>
						</tr>
                        <tr>
                            <td><code>inherit</code></td>
                            <td>If specified, the associated element takes the <a href="../definitions.php#computed-value">computed value</a> of its parent element <code>white-space</code> property.</td>
                        </tr>
                    </table>
                </div>	
                <hr />	
                <h2>Browser Compatibility</h2>
                <p>The <code>white-space</code> property is supported in all major modern browsers.</p>
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
                <div class="color-box">
                        <div class="shadow">
                            <div class="info-tab warning-icon" title="Warning"><i></i></div>
                            <div class="warning-box">
                                <p><strong>Warning:</strong> The value <code>pre-line</code> is not supported in versions prior to Firefox 3.5, Safari 3.0 and Opera 9.5. The values <code>pre-line</code>, <code>pre-wrap</code> and <code>inherit</code> are not supported in Internet Explorer 7 and earlier.</p>
                            </div>
                        </div>
                    </div>
                <hr />
                <h2>Further Reading</h2>
                <p>See tutorial on: <a href="../html-tutorial/html-text-formatting.php">HTML Text Formatting</a>.</p>
                <p>Related properties: <code><a href="style_letter-spacing-property.php">letter-spacing</a></code>, <code><a href="style_word-spacing-property.php">word-spacing</a></code>.</p>
                <div class="bottom-link clearfix">
                    <a href="style_visibility-property.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="style_width-property.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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