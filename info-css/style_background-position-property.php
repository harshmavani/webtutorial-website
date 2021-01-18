<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS backgroud-position Property">
	  <meta name="keywords" content="css,css3,CSS backgroud-position Property">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS backgroud-position Property - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS backgroud-position Property</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css_inner.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>CSS <code>background-position</code> Property</h1>
                <p class="topic">Topic: <a href="stylel_properties.php">CSS3 Properties Reference</a><span class="topic-nav"><a href="stylel_background-origin-property.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="style_background-repeat-property.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>background-position</code> CSS property sets the initial position (i.e. origin) of the element's <code><a href="style_background-image-property.php">background-image</a></code>. It is often more convenient to use the shorthand <a href="style_background-property.php">background</a> property.</p>
                <p>The following table summarizes the usages context and the version history of this property.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Default value:</th>
                            <td><code>0%  0%</code></td>
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
                                <td><pre><span class="property">background-position</span>: </pre></td>
                                <td>[ <i>percentage</i> | <i>length</i> | <span class="keyword">left</span> | <span class="keyword">center</span> | <span class="keyword">right</span> ]<sup>1 or 2 values</sup> | <a href="../definitions.php#initial">initial</a> | <a href="../definitions.php#inherit">inherit</a></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <p>The example below shows the <code>background-position</code> property in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelaba74b.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

                        p {
    background-image: url("images/smiley.png");
    background-position: 50% center;
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
				<!--Note box-->
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585">
							<p><strong>Read Carefully:</strong> If only one value is specified, the second value is assumed to be center. If two values are used, and at least one is not a keyword, the first value represents the horizontal position, and the second represents the vertical position.</p>
						</div>
					</div>
				</div>
				<!--End:Note box-->
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
                            <td><code>bottom</code></td>
                            <td>Equivalent to 100% for the vertical position.</td>
                        </tr>
						<tr>
                            <td><code>center</code></td>
                            <td>Equivalent to 50% for the horizontal position if it is not otherwise given, or 50% for the vertical position if it is.</td>
                        </tr>
						<tr>
                            <td><code>left</code></td>
                            <td>Equivalent to 0% for the horizontal position.</td>
                        </tr>
						<tr>
                            <td><code>right</code></td>
                            <td>Equivalent to 100% for the horizontal position.</td>
                        </tr>
						<tr>
                            <td><code>top</code></td>
                            <td>Equivalent to 0% for the vertical position.</td>
                        </tr>
						<tr>
                            <td><i>length</i></td>
                            <td>Actual pixel lengths. For example, with a value pair of '10px 20px', the upper left corner of the image is placed 10px to the right and 20px below the upper left corner of the element's box.</td>
                        </tr>
                        <tr>
                            <td><i>percentage</i></td>
                            <td>A percent of the element size. For example, with a value pair of '0% 0%', the upper left corner of the image is aligned with the upper left corner of the element's box.</td>
                        </tr>
                        <tr>
							<td><code>initial</code></td>
							<td>Sets this property to its default value.</td>
						</tr>
                        <tr>
                            <td><code>inherit</code></td>
                            <td>If specified, the associated element takes the <a href="../definitions.php#computed-value">computed value</a> of its parent element <code>background-position</code> property.</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>background-position</code> property is supported in all major modern browsers.</p>
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
                <p>See tutorial on: <a href="../des-css/style_background.php">CSS Background</a>, <a href="../des-css/stylel_background.php">CSS3 Background</a>.</p>
                <p>Related properties: <code><a href="style_background-property.php">background</a></code>, <code><a href="style_background-attachment-property.php">background-attachment</a></code>, <code><a href="style_background-color-property.php">background-color</a></code>, <code><a href="stylel_background-clip-property.php">background-clip</a></code>, <code><a href="style_background-image-property.php">background-image</a></code>, <code><a href="stylel_background-origin-property.php">background-origin</a></code>, <code><a href="style_background-repeat-property.php">background-repeat</a></code>, <code><a href="stylel_background-size-property.php">background-size</a></code>.</p>
                <!--Bottom Navigation-->
                <div class="bottom-link clearfix">
                    <a href="stylel_background-origin-property.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="style_background-repeat-property.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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