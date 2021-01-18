<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS outline-width Property">
	  <meta name="keywords" content="css,css3,CSS outline-width Property">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS outline-width Property - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS outline-width Property</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css_inner.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>CSS <code>outline-width</code> Property</h1>
                <p class="topic">Topic: <a href="stylel_properties.php">CSS3 Properties Reference</a><span class="topic-nav"><a href="style_outline-style-property.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="style_overflow-property.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>outline-width</code> CSS property sets the width of the outline of an element. However in many cases the shorthand CSS propertiey <code><a href="style_outline-property.php">outline</a></code> is more convenient to use and preferable.</p>
                <p>The following table summarizes the usages context and the version history of this property.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Default value:</th>
                            <td><code>medium</code></td>
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
                                <td><span class="property">outline-width</span>:&nbsp;</td>
                                <td><span class="keyword">thin</span> | <span class="keyword">medium</span> | <span class="keyword">thick</span> | <i>length</i> | <a href="../definitions.php#initial">initial</a> | <a href="../definitions.php#inherit">inherit</a></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <p>The example below shows the <code>outline-width</code> property in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab7ccb.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

p {
    outline-style: solid;
    outline-width: thick;
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
                            <p><strong>Read Carefully:</strong> You must declare the <code><a href="style_outline-style-property.php">outline-style</a></code> property before the <code>outline-width</code> property. An element must have outlines before you can set the width of the outline, because the default value of the <code>outline-style</code> property is <code>none</code>.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Property Values</h2>
                <p>The following table describes the values of this property.</p>
                <div class="shadow">
                    <table class="data">
                        <tr>
                            <th style="width:80px;">Value</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td><code>thin</code></td>
                            <td>A thin outline.</td>
                        </tr>
                        <tr>
                            <td><code>medium</code></td>
                            <td>A medium outline.</td>
                        </tr>
                        <tr>
                            <td><code>thick</code></td>
                            <td>A thick outline.</td>
                        </tr>
                        <tr>
                            <td><i>length</i></td>
                            <td>A length value in <code>px</code>, <code>em</code>, etc. Negative values are not allowed.</td>
                        </tr>
                        <tr>
                            <td><code>inherit</code></td>
                            <td>If specified, the associated element takes the <a href="../definitions.php#computed-value">computed value</a> of its parent element <code>outline-width</code> property.</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>outline-width</code> property is supported in all major modern browsers.</p>
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
                            <p><strong>Warning:</strong> Internet Explorer 7 and earlier versions don't support the <code>outline-width</code> property. IE8 however supports this property, but requires a valid <code><a href="../des-html/html-doctypes.php">&lt;!DOCTYPE&gt;</a></code>.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Further Reading</h2>
                <p>See tutorial on: <a href="../des-css/style_outline.php">CSS outline</a>, <a href="../des-css/style_border.php">CSS Border</a>.</p>
                <p>Related properties: <code><a href="style_outline-property.php">outline</a></code>, <code><a href="style_outline-style-property.php">outline-style</a></code>, <code><a href="style_outline-color-property.php">outline-color</a></code>.</p>
                <div class="bottom-link clearfix">
                    <a href="style_outline-style-property.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="style_overflow-property.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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