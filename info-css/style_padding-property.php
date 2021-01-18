<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS padding Property">
	  <meta name="keywords" content="css,css3,CSS padding Property">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS padding Property - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS padding Property</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css_inner.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>CSS <code>padding</code> Property</h1>
                <p class="topic">Topic: <a href="stylel_properties.php">CSS3 Properties Reference</a><span class="topic-nav"><a href="stylel_overflow-y-property.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="style_padding-bottom-property.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>padding</code> CSS property sets the padding on all four sides of the element.&thinsp;It is a shorthand property for <code><a href="style_padding-top-property.php">padding-top</a></code>, <code><a href="style_padding-right-property.php">padding-right</a></code>, <code><a href="style_padding-bottom-property.php">padding-bottom</a></code>, and <code><a href="style_padding-left-property.php">padding-left</a></code> property.</p>	
                <p>The following table summarizes the usages context and the version history of this property.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Default value:</th>
                            <td><code>0</code></td>
                        </tr>
                        <tr>
                            <th>Applies to:</th>
                            <td>All elements except <code><a href="../info-html/html-tbody-tag.php">&lt;tbody&gt;</a></code>, <code><a href="../info-html/html-thead-tag.php">&lt;thead&gt;</a></code>, <code><a href="../info-html/html-tfoot-tag.php">&lt;tfoot&gt;</a></code>, <code><a href="../info-html/html-tr-tag.php">&lt;tr&gt;</a></code>, <code><a href="../info-html/html-colgroup-tag.php">&lt;colgroup&gt;</a></code> and <code><a href="../info-html/html-col-tag.php">&lt;col&gt;</a></code>. It also applies to <code><a href="../des-css/style_pseudo-elements.php#first-letter">::first-letter</a></code>.</td>
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
                            <tbody><tr>
                                <td><span class="property">padding</span>:&nbsp;</td>
                                <td>[ <i>length</i> | <i>percentage</i>] <sup>1 to 4 values</sup> | <a href="../definitions.php#initial">initial</a> | <a href="../definitions.php#inherit">inherit</a></td>
                            </tr>
                        </tbody></table>
                    </div>
                </div>
                <p>The example below shows the <code>padding</code> property in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab6eff.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

p.one {
    padding: 20px;
}
p.two {
    padding: 35px 15px;
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
                <p>This shorthand notation can take one, two, three, or four whitespace separated values.</p>
                <ul>
                    <li>If <em>one value</em> is set, this padding applies to all 4 sides.</li>
                    <li>If <em>two values</em> are set, the first value applies to top and bottom, the second value applies to the right and left side.</li>
                    <li><em>Three values</em> apply to the top, horizontal (i.e. right and left) and bottom side.</li>
                    <li><em>Four values</em> apply to the top, right, bottom, left side in that order.</li>
                </ul>
                <hr />
                <h2>Property Values</h2>
                <p>The following table describes the values of this property.</p>
                <div class="shadow space">
                    <table class="data">
                        <tr>
                            <th style="width:110px;">Value</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td><code><i><a href="style_padding-top-property.php">padding-top</a></i></code></td>
                            <td>Sets the padding to the top side of an element.</td>
                        </tr>
                        <tr>
                            <td><code><i><a href="style_padding-right-property.php">padding-right</a></i></code></td>
                            <td>Sets the padding to the right side of an element.</td>
                        </tr>
                        <tr>
                            <td><code><i><a href="style_padding-bottom-property.php">padding-bottom</a></i></code></td>
                            <td>Sets the padding to the bottom side of an element.</td>
                        </tr>
                        <tr>
                            <td><code><i><a href="style_padding-left-property.php">padding-left</a></i></code></td>
                            <td>Sets the padding to the left side of an element.</td>
                        </tr>
						<tr>
							<td><code>initial</code></td>
							<td>Sets this property to its default value.</td>
						</tr>
                        <tr>
                            <td><code>inherit</code></td>
                            <td>If specified, the associated element takes the <a href="../definitions.php#computed-value">computed value</a> of its parent element <code>padding</code> property.</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>padding</code> property is supported in all major modern browsers.</p>
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
                <p>See tutorial on: <a href="../des-css/style_padding.php">CSS Padding</a>, <a href="../des-css/style_box-model.php">CSS Box Model</a>.</p>
                <p>Related properties: <code><a href="style_padding-top-property.php">padding-top</a></code>, <code><a href="style_padding-right-property.php">padding-right</a></code>, <code><a href="style_padding-bottom-property.php">padding-bottom</a></code>, <code><a href="style_padding-left-property.php">padding-left</a></code>.</p>
                <div class="bottom-link clearfix">
                    <a href="stylel_overflow-y-property.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="style_padding-bottom-property.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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