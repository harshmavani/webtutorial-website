<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS background-color Property">
	  <meta name="keywords" content="css,css3,CSS background-color Property">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS background-color Property - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS background-color Property</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css_inner.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>CSS <code>background-color</code> Property</h1>
                <p class="topic">Topic: <a href="stylel_properties.php">CSS3 Properties Reference</a><span class="topic-nav"><a href="stylel_background-clip-property.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="style_background-image-property.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>background-color</code> CSS property sets the background color of an element. You can set color of the background either through a color value or the keyword transparent.</p>
                <p>The background of an element is the total size of the element, including padding and border (but not the margin). See the <a href="../des-css/style_box-model.php">box model</a>.</p>
                <p>The following table summarizes the usages context and the version history of this property.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Default value:</th>
                            <td><code>transparent</code></td>
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
                                <td><span class="property">background-color</span>:&nbsp;</td>
                                <td><i>color</i> | <span class="keyword">transparent</span> | <a href="../definitions.php#initial">initial</a> | <a href="../definitions.php#inherit">inherit</a></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <p>The example below shows the <code>background-color</code> property in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab2be4.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

                        body {
    background-color: yellow;
}
h1 {
    background-color: rgb(255,0,0);
}
p {
    background-color: #00ff00;
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
                            <th>Value</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td><i>color</i></td>
                            <td>Specifies the background color. Look at <a href="style_color-values.php">CSS Color Values</a> for the list of possible color values.</td>
                        </tr>
                        <tr>
                            <td><code>transparent</code></td>
                            <td>Sets the <code>background-color</code> to transparent i.e. content and background of the element behind the element with transparent background will be visible through. This is default.</td>
                        </tr>
						<tr>
							<td><code>initial</code></td>
							<td>Sets this property to its default value.</td>
						</tr>
                        <tr>
                            <td><code>inherit</code></td>
                            <td>If specified, the associated element takes the <a href="../definitions.php#computed-value">computed value</a> of its parent element <code>background-color</code> property.</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>background-color</code> property is supported in all major modern browsers.</p>
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
                <p>Related properties: <code><a href="style_background-property.php">background</a></code>, <code><a href="style_background-attachment-property.php">background-attachment</a></code>, <code><a href="stylel_background-clip-property.php">background-clip</a></code>, <code><a href="style_background-image-property.php">background-image</a></code>, <code><a href="stylel_background-origin-property.php">background-origin</a></code>, <code><a href="style_background-position-property.php">background-position</a></code>, <code><a href="style_background-repeat-property.php">background-repeat</a></code>, <code><a href="stylel_background-size-property.php">background-size</a></code>.</p>
                <!--Bottom Navigation-->
                <div class="bottom-link clearfix">
                    <a href="stylel_background-clip-property.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="style_background-image-property.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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