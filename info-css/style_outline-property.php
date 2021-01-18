<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS outline Property">
	  <meta name="keywords" content="css,css3,CSS outline Property">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS outline Property - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS outline Property</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css_inner.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>CSS <code>outline</code> Property</h1>
                <p class="topic">Topic: <a href="stylel_properties.php">CSS3 Properties Reference</a><span class="topic-nav"><a href="stylel_order-property.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="style_outline-color-property.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>outline</code> property sets the width, style, and color for all four sides of an element's outline. It is a shorthand property for setting the individual outline properties i.e. <code><a href="style_outline-width-property.php">outline-width</a></code>, <code><a href="style_outline-style-property.php">outline-style</a></code>, and <code><a href="style_outline-color-property.php">outline-color</a></code> in a single declaration.</p>	
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
                            <td>CSS 2, 3</td>
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
                                <td><span class="property">outline</span>:&nbsp;</td>
                                <td>[ <i>outline-width outline-style outline-color</i> ] | <a href="../definitions.php#initial">initial</a> | <a href="../definitions.php#inherit">inherit</a></td>
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
                <p>The example below shows the <code>outline</code> property in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabadf2.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

p.one {
    outline: 2px solid #ff0000;
}
p.two {
    color: #00ff00;
    outline-top: 5px solid;
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
                            <p><strong>Read Carefully:</strong> If <code><a href="style_outline-color-property.php">outline-color</a></code> is missing or not specified (e.g. <code>outline: 5px solid;</code>) the value of the element's <code><a href="style_color-property.php">color</a></code> property will be used instead. But, in the case of <code><a href="style_outline-style-property.php">outline-style</a></code>, omitting the value will cause no outline to show at all, because the default value for <code>outline-style</code> property is <code>none</code>.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Property Values</h2>
                <p>The following table describes the values of this property.</p>
                <div class="shadow" id="property-values">
                    <table class="data">
                        <tr>
                            <th style="width:110px;">Value</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td><code><i><a href="style_outline-width-property.php">outline-width</a></i></code></td>
                            <td>Sets the width of the outline of an element.</td>
                        </tr>
                        <tr>
                            <td><code><i><a href="style_outline-style-property.php">outline-style</a></i></code></td>
                            <td>Sets the line style of the outline of an element.</td>
                        </tr>
                        <tr>
                            <td><code><i><a href="style_outline-color-property.php">outline-color</a></i></code></td>
                            <td>Sets the color of the outline of an element.</td>
                        </tr>
						<tr>
							<td><code>initial</code></td>
							<td>Sets this property to its default value.</td>
						</tr>
                        <tr>
                            <td><code>inherit</code></td>
                            <td>If specified, the associated element takes the <a href="../definitions.php#computed-value">computed value</a> of its parent element <code>outline</code> property.</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>outline</code> property is supported in all major modern browsers.</p>
                <div class="shadow">
                    <div class="support">
                        <table>
                            <tr>
                                <td><img src="../assets/images/browser.jpg" alt="Browsers Icon" /></td>
                                <td>
                                    <h2>Basic Support&mdash;</h2>
                                    <ul>
                                        <li>Firefox <span>1.5+</span></li>
                                        <li>Google Chrome <span>1+</span></li>
                                        <li>Internet Explorer <span>8+</span></li>
                                        <li>Apple Safari <span>1.2+</span></li>
                                        <li>Opera <span>7+</span></li>
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
                            <p><strong>Warning:</strong> Internet Explorer 7 and earlier versions don't support the <code>outline</code> property. IE8 however supports this property, but requires a valid <code><a href="../des-html/html-doctypes.php">&lt;!DOCTYPE&gt;</a></code>.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Further Reading</h2>
                <p>See tutorial on: <a href="../des-css/style_outline.php">CSS Outline</a>, <a href="../des-css/style_border.php">CSS Border</a>.</p>
                <p>Related properties: <code><a href="style_outline-width-property.php">outline-width</a></code>, <code><a href="style_outline-style-property.php">outline-style</a></code>, <code><a href="style_outline-color-property.php">outline-color</a></code></p>
                <div class="bottom-link clearfix">
                    <a href="stylel_order-property.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="style_outline-color-property.php" class="next-page-bottom">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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