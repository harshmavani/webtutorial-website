<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS position Property">
	  <meta name="keywords" content="css,css3,CSS position Property">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS position Property - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS position Property</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css_inner.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>CSS <code>position</code> Property</h1>
                <p class="topic">Topic: <a href="stylel_properties.php">CSS3 Properties Reference</a><span class="topic-nav"><a href="stylel_perspective-origin-property.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="style_quotes-property.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>	
                <h2>Description</h2>
                <p>The <code>position</code> CSS property specifies how an element is positioned.</p>
                <p>The following table summarizes the usages context and the version history of this property.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Default value:</th>
                            <td><code>static</code></td>
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
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"  style="background-color:#fad28c"
>
                            <p><strong>Important:</strong> Elements with a <code>position</code> other than <code>static</code> are said to be positioned. Their vertical placement in the stacking context is determined by the <code><a href="style_z-index-property.php">z-index</a></code> property.</p>
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
                                <td><span class="property">position</span>:&nbsp;</td>
                                <td><span class="keyword">static</span> | <span class="keyword">relative</span> | <span class="keyword">absolute</span> | <span class="keyword">fixed</span> | <span class="keyword">sticky</span> | <a href="../definitions.php#initial">initial</a> | <a href="../definitions.php#inherit">inherit</a></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <p>The example below shows the <code>position</code> property in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab8e4b-2.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

h1 {
    position: absolute;
    top: 100px;
    left: 150px;
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
                            <p><strong>Read Carefully:</strong> In the case of print media type, the box is rendered on every page, and is fixed with respect to the page box, even if the page is seen through a viewport (in the case of a 'print-preview' &mdash; for example).</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Property Values</h2>
                <p>The following table describes the values of this property.</p>
                <div class="shadow space">
                    <table class="data">
                        <tr>
                            <th style="width:80px;">Value</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td><code>static</code></td>
                            <td>The element's box is a normal box, laid out according to the normal flow. The <code><a href="style_top-property.php">top</a></code>, <code><a href="style_right-property.php">right</a></code>, <code><a href="style_bottom-property.php">bottom</a></code>, <code><a href="style_left-property.php">left</a></code>, and <code><a href="style_z-index-property.php">z-index</a></code> properties are ignored for static boxes. This is default value.</td>
                        </tr>
                        <tr>
                            <td><code>relative</code></td>
                            <td>The element is positioned relative to its normal position (this is called the position in normal flow).</td>
                        </tr>
                        <tr>
                            <td><code>absolute</code></td>
                            <td>The element is positioned relative to its first ancestor element whose position value is other than static.</td>
                        </tr>
                        <tr>
                            <td><code>fixed</code></td>
                            <td>The element is fixed with respect to the screen's viewport and doesn't move when scrolled. When printing, the element is printed on every page.</td>
                        </tr>
						<tr>
                            <td><code>sticky</code></td>
                            <td>The element is positioned similarly to a relatively positioned box and it "sticks" to its nearest ancestor that has a "scrolling mechanism".</td>
                        </tr>
						<tr>
							<td><code>initial</code></td>
							<td>Sets this property to its default value.</td>
						</tr>
                        <tr>
                            <td><code>inherit</code></td>
                            <td>If specified, the associated element takes the <a href="../definitions.php#computed-value">computed value</a> of its parent element <code>position</code> property.</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>position</code> property is supported in all major modern browsers.</p>
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
                <p>See tutorial on: <a href="../des-css/style_position.php">CSS Position</a>, <a href="../des-css/style_layers.php">CSS Layers</a>.</p>
                <p>Related properties: <code><a href="style_top-property.php">top</a></code>, <code><a href="style_right-property.php">right</a></code>, <code><a href="style_bottom-property.php">bottom</a></code>, <code><a href="style_left-property.php">left</a></code>, <code><a href="style_z-index-property.php">z-index</a></code>.</p> 
                <div class="bottom-link clearfix">
                    <a href="stylel_perspective-origin-property.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="style_quotes-property.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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