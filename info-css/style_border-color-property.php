<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS border-color Property">
	  <meta name="keywords" content="css,css3,CSS border-color Property">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS border-color Property - WebSchool Today</title>
    <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS border-color Property</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css_inner.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>CSS <code>border-color</code> Property</h1>
                <p class="topic">Topic: <a href="stylel_properties.php">CSS3 Properties Reference</a><span class="topic-nav"><a href="style_border-collapse-property.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="stylel_border-image-property.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>border-color</code> CSS property is a shorthand property for setting the individual border color properties i.e. <code><a href="style_border-top-color-property.php">border-top-color</a></code>, <code><a href="style_border-right-color-property.php">border-right-color</a></code>, <code><a href="style_border-bottom-color-property.php">border-bottom-color</a></code>, and <code><a href="style_border-left-color-property.php">border-left-color</a></code> in a single declaration.</p> 
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
                            <td>No</td>
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
                                <td><span class="property">border-color</span>:&nbsp;</td>
                                <td>[ <i>color</i> | <span class="keyword">transparent</span> ] <sup>1 to 4 values</sup> | <a href="../definitions.php#inherit">inherit</a></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <p>This shorthand notation can take one, two, three, or four whitespace separated values.</p>
                <ul>
                    <li>If <em>one value</em> is specified, it applies to all border sides.</li>
                    <li>If <em>two values</em> are specified, the first value is used for the top and bottom border, while the second value is used for the right and left sides border.</li>
                    <li>If <em>three values</em> are specified, the first value is used for the top border, the second value is used for the right and left border, and the third value is used for the bottom border</li>
                    <li>If <em>four values</em> are specified, each value applies to the border individually in the order top, right, bottom, and left.</li>
                </ul>
                <p>The example below shows the <code>border-color</code> property in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabeade.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

                        p {
    border-style: solid;
    border-color: #ff0000;
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
                            <p><strong>Read Carefully:</strong> You must declare the <code><a href="style_border-style-property.php">border-style</a></code> property before the <code>border-color</code> property. An element must have borders before you can set the color of the border, because the default value of <code><a href="style_border-style-property.php">border-style</a></code> property is none.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Property Values</h2>
                <p>The following table describes the values of this property.</p>
                <div class="shadow space">
                    <table class="data">
                        <tr>
                            <th style="width:95px;">Value</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td><i>color</i></td>
                            <td>Specifies the color of the border. Look at <a href="style_color-values.php">CSS Color Values</a> for the list of possible color values.</td>
                        </tr>
                        <tr>
                            <td><code>transparent</code></td>
                            <td>Allows the border to be transparent, though it may occupy the space set by the <code><a href="style_border-width-property.php">border-width</a></code> property.</td>
                        </tr>
						<tr>
							<td><code>initial</code></td>
							<td>Sets this property to its default value.</td>
						</tr>
                        <tr>
                            <td><code>inherit</code></td>
                            <td>If specified, the associated element takes the <a href="../definitions.php#computed-value">computed value</a> of its parent element <code>border-color</code> property.</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>border-color</code> property is supported in all major modern browsers.</p>
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
                <p>See tutorial on: <a href="../des-css/style_border.php">CSS Border</a>, <a href="../des-css/stylel_border.php">CSS3 Border</a>.</p>
                <p>Related properties: <code><a href="style_border-property.php">border</a></code>, <code><a href="style_border-style-property.php">border-style</a></code>, <code><a href="style_border-width-property.php">border-width</a></code>, <code><a href="style_border-top-color-property.php">border-top-color</a></code>, <code><a href="style_border-right-color-property.php">border-right-color</a></code>, <code><a href="style_border-bottom-color-property.php">border-bottom-color</a></code>, <code><a href="style_border-left-color-property.php">border-left-color</a></code>.</p> 
                <!--Bottom Navigation-->
                <div class="bottom-link clearfix">
                    <a href="style_border-collapse-property.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="stylel_border-image-property.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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