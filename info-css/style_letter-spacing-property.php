<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS letter-spacing Property">
	  <meta name="keywords" content="css,css3,CSS letter-spacing Property">
	  <meta name="author" content="webschooltoday.com">
      <title>CSS letter-spacing Property</title>

 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS letter-spacing Property</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css_inner.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>CSS <code>letter-spacing</code> Property</h1>
                <p class="topic">Topic: <a href="stylel_properties.php">CSS3 Properties Reference</a><span class="topic-nav"><a href="style_left-property.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="style_line-height-property.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>letter-spacing</code> property sets the extra spacing between the letters of an element's text.</p>
				<p>The following table summarizes the usages context and the version history of this property.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Default value:</th>
                            <td><code>normal</code></td>
                        </tr>
                        <tr>
                            <th>Applies to:</th>
                            <td>All elements. It also applies to <a href="../des-css/style_pseudo-elements.php#first-letter">::first-letter</a> and <a href="../des-css/style_pseudo-elements.php#first-line">::first-line</a>.</td>
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
                                <td><span class="property">letter-spacing</span>:&nbsp;</td>
                                <td><i>length</i> | <span class="keyword">normal</span> | <a href="../definitions.php#initial">initial</a> | <a href="../definitions.php#inherit">inherit</a></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <p>The example below shows the <code>letter-spacing</code> property in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabe40f.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

                        h1 {
    letter-spacing: -3px;
}
p {
    letter-spacing: 15px;
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
                            <p><strong>Read Carefully:</strong> The <code>normal</code> value is not equivalent to the length value <code>0</code> for <code>letter-spacing</code> property. If the value is <code>normal</code>, the space may be adjusted by the browser in order to justify text; if the value is <code>0</code>, it cannot.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Property Values</h2>
                <p>The following table describes the values of this property.</p>
                <div class="shadow space">
                    <table class="data">
                        <tr>
                            <th>Value</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td><pre><code>normal</code>      </pre></td>
                            <td>The spacing is the normal spacing for the current font. The space may be adjusted by the browser in order to justify text. This is default.</td>
                        </tr>
                        <tr>
                            <td><i>length</i></td>
                            <td>A length value specifies extra space to be inserted between characters in addition to the default inter-character space. This space may not be adjusted by the browser in order to justify text. </td>
                        </tr>
						<tr>
							<td><code>initial</code></td>
							<td>Sets this property to its default value.</td>
						</tr>
                        <tr>
                            <td><code>inherit</code></td>
                            <td>If specified, the associated element takes the <a href="../definitions.php#computed-value">computed value</a> of its parent element <code>letter-spacing</code> property.</td>
                        </tr>
                    </table>
                </div>
                <hr />	
                <h2>Browser Compatibility</h2>
                <p>The <code>etter-spacing</code> property is supported in all major modern browsers.</p>
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
                                        <li>Opera <span>3.5+</span></li>
                                    </ul>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <hr />
                <h2>Further Reading</h2>
                <p>See tutorial on: <a href="../des-css/style_text.php">CSS Text</a>.</p>
                <p>Related properties: <code><a href="style_white-space-property.php">white-space</a></code>, <code><a href="style_word-spacing-property.php">word-spacing</a></code>.</p>
                <!--Bottom Navigation-->
                <div class="bottom-link clearfix">
                    <a href="style_left-property.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="style_line-height-property.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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