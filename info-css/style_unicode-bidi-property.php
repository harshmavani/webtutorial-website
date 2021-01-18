<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS unicode-bidi Property">
	  <meta name="keywords" content="css,css3.CSS unicode-bidi Property">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS unicode-bidi Property - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS unicode-bidi Property</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css_inner.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>CSS <code>unicode-bidi</code> Property</h1>
                <p class="topic">Topic: <a href="stylel_properties.php">CSS3 Properties Reference</a><span class="topic-nav"><a href="stylel_transition-timing-function-property.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="style_vertical-align-property.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>unicode-bidi</code> CSS property along with the <code><a href="style_direction-property.php">direction</a></code> property relates to the handling of bidirectional text in a document. For example, if a block of text contains both <em>left-to-right</em> and <em>right-to-left</em> text then the user-agent applies a complex algorithm defined by the <a href="http://www.unicode.org/reports/tr9/" rel="nofollow" target="_blank">Unicode standard</a> to determining the proper directionality of text. The <code><a href="style_direction-property.php">direction</a></code> and <code>unicode-bidi</code> properties allow developers to control the embedding levels and overrides for this algorithm.</p>
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
                            <td>No</td>
                        </tr>
						<tr>
							<th>Animatable:</th>
							<td>No. <a href="style_animatable-properties.php"><i>See</i> <em>animatable properties</em></a>.</td>
						</tr>
                        <tr>
                            <th>Version:</th>
                            <td>CSS 2, 3</td>
                        </tr>
                    </table>
                </div>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> This property should in most cases be used only by <a href="../des-html/html-doctypes.php">DTD</a> designers. In particular, authors, web designers, and users shouldn't override it.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Syntax</h2>
                <p>The syntax of the property is given with:</p>
                <div class="shadow">
                    <div class="syntax">
                        <table>
                            <tr>
                                <td><span class="property">direction</span>:&nbsp;</td>
                                <td><span class="keyword">bidi-override</span> | <span class="keyword">embed</span> | <span class="keyword">normal</span> | <a href="../definitions.php#initial">initial</a> | <a href="../definitions.php#inherit">inherit</a></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <p>The example below shows the <code>direction</code> property in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabec58.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

p {
    unicode-bidi: bidi-override;
    direction: rtl;
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
                            <th style="width:100px;">Value</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td><code>bidi-override</code></td>
                            <td>For inline elements this creates an override. For block container elements this creates an override for inline-level descendants not within another block container element. This means that inside the element, reordering is strictly in sequence according to the <code><a href="style_direction-property.php">direction</a></code> property; the implicit part of the bidirectional algorithm is ignored.</td>
                        </tr>
                        <tr>
                            <td><code>embed</code></td>
                            <td>If the element is inline, this value opens an additional level of embedding with respect to the bidirectional algorithm. The direction of this embedding level is given by the <code><a href="style_direction-property.php">direction</a></code> property.</td>
                        </tr>
                        <tr>
                            <td><code>normal</code></td>
                            <td>This value doesn't offer an additional level of embedding with respect to the bidirectional algorithm. For inline elements, implicit reordering works across element boundaries.</td>
                        </tr>
						<tr>
							<td><code>initial</code></td>
							<td>Sets this property to its default value.</td>
						</tr>
                        <tr>
                            <td><code>inherit</code></td>
                            <td>If specified, the associated element takes the <a href="../definitions.php#computed-value">computed value</a> of its parent element <code>unicode-bidi</code> property.</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>unicode-bidi</code> property is supported in all major modern browsers.</p>
                <div class="shadow">
                    <div class="support">
                        <table>
                            <tr>
                                <td><img src="../assets/images/browser.jpg" alt="Browsers Icon" /></td>
                                <td>
                                    <h2>Basic Support&mdash;</h2>
                                    <ul>
                                        <li>Firefox <span>1+</span></li>
                                        <li>Google Chrome <span>2+</span></li>
                                        <li>Internet Explorer <span>5.5+</span></li>
                                        <li>Apple Safari <span>1.3+</span></li>
                                        <li>Opera <span>9.2+</span></li>
                                    </ul>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <hr />
                <h2>Further Reading</h2>
                <p>See tutorial on: <a href="../des-css/style_text.php">CSS Text</a>.</p>
                <p>Related properties: <code><a href="style_direction-property.php">direction</a></code>.</p> 
                <div class="bottom-link clearfix">
                    <a href="stylel_transition-timing-function-property.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="style_vertical-align-property.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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