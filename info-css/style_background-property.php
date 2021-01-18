<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS background Property">
	  <meta name="keywords" content="css,css3,CSS background Property">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS background Property - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS background Property</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css_inner.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>CSS <code>background</code> Property</h1>
                <p class="topic">Topic: <a href="stylel_properties.php">CSS3 Properties Reference</a><span class="topic-nav"><a href="stylel_backface-visibility-property.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="style_background-attachment-property.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>background</code> CSS property is a shorthand property for setting the individual background properties i.e. <code><a href="style_background-image-property.php">background-image</a></code>, <code><a href="style_background-position-property.php">background-position</a></code>, <code><a href="stylel_background-size-property.php">background-size</a></code>, <code><a href="style_background-repeat-property.php">background-repeat</a></code>, <code><a href="style_background-attachment-property.php">background-attachment</a></code>, <code><a href="stylel_background-origin-property.php">background-origin</a></code>, <code><a href="stylel_background-clip-property.php">background-clip</a></code> and <code><a href="style_background-color-property.php">background-color</a></code> in a single declaration.</p>
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
							<td>Yes, as some of the properties of the shorthand are animatable. <a href="style_animatable-properties.php"><i>See</i> <em>animatable properties</em></a>.</td>
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
                                <td><span class="property">background</span>:&nbsp;</td>
                                <td>[ <i>image position/size repeat attachment origin clip color</i> ] | <a href="../definitions.php#initial">initial</a> | <a href="../definitions.php#inherit">inherit</a></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> If any property listed above is missing or omitted, the default value for that property will be inserted, if any. See individual properties for details.</p>
                        </div>
                    </div>
                </div>
                <p>The example below shows the <code>background</code> property in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab1804.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

                        body {
    background: #ffff00 url("smiley.png") no-repeat fixed center;
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
				<p>In CSS3 you can also add multiple backgrounds to a single element. The backgrounds are layered on the top of one another along the z-axis.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelabdf50.html">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

                        .box {
    width: 100%;
    height: 500px;
    background: url("images/birds.png") no-repeat center,  url("images/clouds.png")  no-repeat center, lightblue;
}
     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code2"), {
									mode: "text/html",
									tabMode: "indent",
									styleActiveLine: true,
									lineNumbers: true,
									lineWrapping: true
								});
							</script>
                    </div>
                </div>
                <!--End:Code box-->	
                <hr />
                <h2>Property Values</h2>
                <p>The following table describes the values of this property.</p>
                <div class="shadow" id="property-values">
                    <table class="data">
                        <tr>
                            <th style="width:165px;">Value</th>
                            <th>Description</th>
                        </tr>
						<tr>
                            <td><pre><code><i><a href="style_background-attachment-property.php">background-attachment</a></i></code> </pre></td>
                            <td>Specifies whether the background scrolls with the document, or remains fixed to the viewing area.</td>
                        </tr>
                        <tr>
                            <td><code><i><a href="style_background-color-property.php">background-color</a></i></code></td>
                            <td>Sets the background color of an element.</td>
                        </tr>
						<tr>
                            <td><code><i><a href="stylel_background-clip-property.php">background-clip</a></i></code></td>
                            <td>Specifies the area within which the background is painted.</td>
                        </tr>
                        <tr>
                            <td><code><i><a href="style_background-image-property.php">background-image</a></i></code></td>
                            <td>Sets one or several background images for an element.</td>
                        </tr>
						<tr>
                            <td><code><i><a href="stylel_background-origin-property.php">background-origin</a></i></code></td>
                            <td>Specifies the positioning area of the background images.</td>
                        </tr>
                        <tr>
                            <td><code><i><a href="style_background-position-property.php">background-position</a></i></code></td>
                            <td>Sets the initial position of the background image.</td>
                        </tr>
						<tr>
                            <td><code><i><a href="style_background-repeat-property.php">background-repeat</a></i></code></td>
                            <td>Specifies how background images are tiled after they have been sized and positioned.</td>
                        </tr>
						<tr>
                            <td><code><i><a href="stylel_background-size-property.php">background-size</a></i></code></td>
                            <td>Specifies the size of the background images.</td>
                        </tr>
						<tr>
							<td><code>initial</code></td>
							<td>Sets this property to its default value.</td>
						</tr>
                        <tr>
                            <td><code>inherit</code></td>
                            <td>If specified, the associated element takes the <a href="../definitions.php#computed-value">computed value</a> of its parent element <code>background</code> property.</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>background</code> property is supported in all major modern browsers.</p>
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
                <p>Related properties: <code><a href="style_background-attachment-property.php">background-attachment</a></code>, <code><a href="style_background-color-property.php">background-color</a></code>, <code><a href="stylel_background-clip-property.php">background-clip</a></code>, <code><a href="style_background-image-property.php">background-image</a></code>, <code><a href="stylel_background-origin-property.php">background-origin</a></code>, <code><a href="style_background-position-property.php">background-position</a></code>, <code><a href="style_background-repeat-property.php">background-repeat</a></code>, <code><a href="stylel_background-size-property.php">background-size</a></code>.</p>
                <!--Bottom Navigation-->
                <div class="bottom-link clearfix">
                    <a href="stylel_backface-visibility-property.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="style_background-attachment-property.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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