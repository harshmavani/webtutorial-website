<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS border-left-style Property">
	  <meta name="keywords" content="css,css3,CSS border-left-style Property">
	  <meta name="author" content="webschooltoday.com">
      <title>CSS border-left-style Property - WebSchool Today</title>
    <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS border-left-style Property</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css_inner.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>CSS <code>border-left-style</code> Property</h1>
                <p class="topic">Topic: <a href="stylel_properties.php">CSS3 Properties Reference</a><span class="topic-nav"><a href="style_border-left-color-property.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="style_border-left-width-property.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>border-left-style</code> CSS property sets the style of an element's left border individually. However in many cases the shorthand CSS properties like <code><a href="style_border-style-property.php">border-style</a></code> or <code><a href="style_border-left-property.php">border-left</a></code> are more convenient to use and preferable.</p>
                <p>The following table summarizes the usages context and the version history of this property.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Default value:</th>
                            <td><code>none</code></td>
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
                                <td><pre class="property">border-left-style: </pre></td>
                                <td><span class="keyword">none</span> | <span class="keyword">hidden</span> | <span class="keyword">dotted</span> |
                    <span class="keyword">dashed</span> | <span class="keyword">solid</span> | <span class="keyword">double</span> |
                    <span class="keyword">groove</span> | <span class="keyword">ridge</span> | <span class="keyword">inset</span> | <span class="keyword">outset</span> | <a href="../definitions.php#inherit">inherit</a></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <p>The example below shows the <code>border-left-style</code> property in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelaba24f.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

                        p {
    border-left-style: dashed;
    border-left-width: 3px;
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
                            <th style="width:60px;">Value</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td><code>none</code></td>
                            <td>No border will be displayed.</td>
                        </tr>
                        <tr>
                            <td><code>hidden</code></td>
                            <td>Same as <code>none</code>, except the case where table cells have <a href="style_border-collapse-property.php">collapsed borders</a> and the two cells share a border. The <code>hidden</code> value ensures that no border is drawn, since <code>hidden</code> take precedence over all other border styles.</td>
                        </tr>
                        <tr>
                            <td><code>dotted</code></td>
                            <td>Displays the border as a series of dots.</td>
                        </tr>
                        <tr>
                            <td><code>dashed</code></td>
                            <td>Displays the border as a series of short line segments i.e. dashes.</td>
                        </tr>
                        <tr>
                            <td><code>solid</code></td>
                            <td>Displays the border as a single solid line.</td>
                        </tr>
                        <tr>
                            <td><code>double</code></td>
                            <td>Displays the border as a two parallel solid lines with some space between them. The sum of the two lines and the space between them equals the value of <code><a href="style_border-width-property.php">border-width</a></code>.</td>
                        </tr>
                        <tr>
                            <td><code>groove</code></td>
                            <td>Displays the border as it were carved into the canvas. It gives the impression of 3D that is typically achieved by creating a shadow from two colors that are slightly lighter and darker than the <code><a href="style_border-color-property.php">border-color</a></code>.</td>
                        </tr>
                        <tr>
                            <td><code>ridge</code></td>
                            <td>Displays the border that has the opposite effect of <code>groove</code>. It also gives the impression of 3D,&thinsp;the border looks as though it were coming out of the canvas.</td>
                        </tr>
                        <tr>
                            <td><code>inset</code></td>
                            <td>Displays the border that makes the element's box look as though it were embedded in the canvas. It gives the impression of 3D that is typically achieved by creating a shadow from two colors that are slightly lighter and darker than the <code><a href="style_border-color-property.php">border-color</a></code>.</td>
                        </tr>
                        <tr>
                            <td><code>outset</code></td>
                            <td>Displays the border that has the opposite effect of <code>inset</code>. It also gives the impression of 3D, the border makes the box look as though it were coming out of the canvas.</td>
                        </tr>
                        <tr>
                            <td><code>inherit</code></td>
                            <td>If specified, the associated element takes the <a href="../definitions.php#computed-value">computed value</a> of its parent element <code>border-left-style</code> property.</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>border-left-style</code> property is supported in all major modern browsers.</p>
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
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab warning-icon" title="Warning"><i></i></div>
                        <div class="warning-box">
                            <p><strong>Warning:</strong> Internet Explorer 7 and earlier versions don't support the value <code>hidden</code>. IE8 supports, but requires a <code><a href="../des-html/html-doctypes.php">&lt;!DOCTYPE&gt;</a></code>. IE9 and above supports the <code>hidden</code> value.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Further Reading</h2>
                <p>See tutorial on: <a href="../des-css/style_border.php">CSS Border</a>, <a href="../des-css/stylel_border.php">CSS3 Border</a>.</p>
                <p>Related properties: <code><a href="style_border-property.php">border</a></code>, <code><a href="style_border-style-property.php">border-style</a></code>, <code><a href="style_border-left-property.php">border-left</a></code>, <code><a href="style_border-left-color-property.php">border-left-color</a></code>, <br /><code><a href="style_border-left-width-property.php">border-left-width</a></code>.</p>
                <!--Bottom Navigation-->
                <div class="bottom-link clearfix">
                    <a href="style_border-left-color-property.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="style_border-left-width-property.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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