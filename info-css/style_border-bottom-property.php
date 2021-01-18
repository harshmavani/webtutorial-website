<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS border-bottom Property">
	  <meta name="keywords" content="css,css3,CSS border-bottom Property">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS border-bottom Property - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS border-bottom Property</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css_inner.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>CSS <code>border-bottom</code> Property</h1>
                <p class="topic">Topic: <a href="stylel_properties.php">CSS3 Properties Reference</a><span class="topic-nav"><a href="style_border-property.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="style_border-bottom-color-property.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>border-bottom</code> CSS property sets the width, style, and color of the bottom border of an element. It is a shorthand property for setting the individual bottom border properties i.e. <code><a href="style_border-bottom-width-property.php">border-bottom-width</a></code>, <code><a href="style_border-bottom-style-property.php">border-bottom-style</a></code>, and <code><a href="style_border-bottom-color-property.php">border-bottom-color</a></code> at once.</p>
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
							<td>Yes, <i><a href="#property-values">See individual properties</a></i>. <a href="style_animatable-properties.php"><i>See</i> <em>animatable properties</em></a>.</td>
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
                                <td><pre class="property">border-bottom: </pre></td>
                                <td>[ <i>border-bottom-width border-bottom-style border-bottom-color</i> ] | <a href="../definitions.php#initial">initial</a> | <a href="../definitions.php#inherit">inherit</a></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <p>The example below shows the <code>border-bottom</code> property in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a  href="../codelab9883.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

                        h1 {
    border-bottom: 5px dashed #ff0000;
}
p {
    border-bottom: 3px dotted #00ff00;
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
                <div class="shadow" id="property-values">
                    <table class="data">
                        <tr>
                            <th style="width:150px;">Value</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td><pre><code><i><a href="style_border-bottom-width-property.php">border-bottom-width</a></i></code> </pre></td>
                            <td>Sets the width of the bottom border of an element.</td>
                        </tr>
                        <tr>
                            <td><code><i><a href="style_border-bottom-style-property.php">border-bottom-style</a></i></code></td>
                            <td>Sets the line style of the bottom border of an element.</td>
                        </tr>
                        <tr>
                            <td><code><i><a href="style_border-bottom-color-property.php">border-bottom-color</a></i></code></td>
                            <td>Sets the color of the bottom border of an element.</td>
                        </tr>
						<tr>
							<td><code>initial</code></td>
							<td>Sets this property to its default value.</td>
						</tr>
                        <tr>
                            <td><code>inherit</code></td>
                            <td>If specified, the associated element takes the <a href="../definitions.php#computed-value">computed value</a> of its parent element <code>border-bottom</code> property.</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>border-bottom</code> property is supported in all major modern browsers.</p>
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
                <p>Related properties: <code><a href="style_border-property.php">border</a></code>, <code><a href="style_border-bottom-color-property.php">border-bottom-color</a></code>, <code><a href="style_border-bottom-style-property.php">border-bottom-style</a></code>, <br /><code><a href="style_border-bottom-width-property.php">border-bottom-width</a></code>.</p>
                <!--Bottom Navigation-->
                <div class="bottom-link clearfix">
                    <a href="style_border-property.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="style_border-bottom-color-property.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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