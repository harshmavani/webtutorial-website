<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS z-index Property">
	  <meta name="keywords" content="css,css3,CSS z-index Property">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS z-index Property - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS z-index Property</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css_inner.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>CSS <code>z-index</code> Property</h1>
                <p class="topic">Topic: <a href="stylel_properties.php">CSS3 Properties Reference</a><span class="topic-nav"><a href="stylel_word-wrap-property.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="style_charset-rule.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>z-index</code> CSS property specifies the layering or stacking order for the <a href="../des-css/style_position.php">positioned elements</a> i.e. elements whose <code><a href="style_position-property.php">position</a></code> value is one of <code>absolute</code>, <code>fixed</code>, or <code>relative</code>. The stacking order refers to the position of elements along the Z-axis which is perpendicular to the screen.</p>
                <p>The following table summarizes the usages context and the version history of this property.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Default value:</th>
                            <td><code>auto</code></td>
                        </tr>
                        <tr>
                            <th>Applies to:</th>
                            <td>Positioned elements</td>
                        </tr>
                        <tr>
                            <th>Inherited:</th>
                            <td>No</td>
                        </tr>
						<tr>
							<th>Animatable:</th>
							<td>Yes. <a href="style_animatable-properties.php"><i>See</i> <em>animatable properties</em></a>.</td>
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
                                <p><strong>Read Carefully:</strong> When elements overlap, <code>z-index</code> determines which one overlaps the other. An element with a higher <code>z-index</code> generally overlaps an element with a lower one.</p>
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
                                <td><pre class="property">z-index: </pre></td>
                                <td><i>integer</i> | <span class="keyword">auto</span> | <a href="../definitions.php#initial">initial</a> | <a href="../definitions.php#inherit">inherit</a></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <p>The example below shows the <code>z-index</code> property in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab9b66.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

div {
    position: absolute;
    lop: 30px;
    left: 30px;
    z-index: 2;
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
                            <td><i>integer</i></td>
                            <td>Sets the stack level of the element's box in the current stacking context. The box also establishes a local stacking context in which its stack level is 0 (zero). Negative integer values are allowed.</td>
                        </tr>
                        <tr>
                            <td><code>auto</code></td>
                            <td>The stack level of the element's box is the same as its parent's box, and doesn't establish a new stacking context. This is default value.</td>
                        </tr>
						<tr>
							<td><code>initial</code></td>
							<td>Sets this property to its default value.</td>
						</tr>
                        <tr>
                            <td><code>inherit</code></td>
                            <td>If specified, the associated element takes the <a href="../definitions.php#computed-value">computed value</a> of its parent element <code>z-index</code> property.</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>z-index</code> property is supported in all major modern browsers.</p>
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
				<p>Related properties: <code><a href="style_position-property.php">position</a></code>, <code><a href="style_top-property.php">top</a></code>, <code><a href="style_right-property.php">right</a></code>, <code><a href="style_left-property.php">left</a></code>, <code><a href="style_bottom-property.php">bottom</a></code>.</p> 
                <div class="bottom-link clearfix">
                    <a href="stylel_word-wrap-property.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="style_charset-rule.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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