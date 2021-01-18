<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS margin Property">
	  <meta name="keywords" content="css,css3,CSS margin Property">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS margin Property - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS margin Property</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css_inner.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>CSS <code>margin</code> Property</h1>
                <p class="topic">Topic: <a href="stylel_properties.php">CSS3 Properties Reference</a><span class="topic-nav"><a href="style_list-style-type-property.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="style_margin-bottom-property.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>margin</code> CSS property sets the margin on all four sides of the element. It is a shorthand property for <code><a href="style_margin-top-property.php">margin-top</a></code>, <code><a href="style_margin-right-property.php">margin-right</a></code>, <code><a href="style_margin-bottom-property.php">margin-bottom</a></code>, and <code><a href="style_margin-left-property.php">margin-left</a></code> property.</p>	
                <p>The following table summarizes the usages context and the version history of this property.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Default value:</th>
                            <td><code>0</code></td>
                        </tr>
                        <tr>
                            <th>Applies to:</th>
                            <td><pre>All elements except those with table <code><a href="style_display-property.php">display</a></code> types other than <code>table-
caption</code>, <code>table</code>, and <code>inline-table</code>. It also applies to <code><a href="../des-css/style_pseudo-elements.php#first-letter">::first-letter</a></code>.</pre></td>
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
                                <td><span class="property">margin</span>:&nbsp;</td>
                                <td>[ <i>length</i> | <i>percentage</i> | <span class="keyword">auto</span> ] <sup>1 to 4 values</sup> | <a href="../definitions.php#initial">initial</a> | <a href="../definitions.php#inherit">inherit</a></td>
                            </tr>
                        </tbody></table>
                    </div>
                </div>
                <p>The example below shows the <code>margin</code> property in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab6f8b.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

                        h1 {
    margin: 25px;
}
p {
    margin: 50px 100px;
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
                    <li>If <em>one value</em> is set, this margin applies to all 4 sides.</li>
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
                            <td><code><i><a href="style_margin-top-property.php">margin-top</a></i></code></td>
                            <td>Sets the top margin of the element.</td>
                        </tr>
                        <tr>
                            <td><code><i><a href="style_margin-right-property.php">margin-right</a></i></code></td>
                            <td>Sets the right margin of the element.</td>
                        </tr>
                        <tr>
                            <td><code><i><a href="style_margin-bottom-property.php">margin-bottom</a></i></code></td>
                            <td>Sets the bottom margin of the element.</td>
                        </tr>
                        <tr>
                            <td><code><i><a href="style_margin-left-property.php">margin-left</a></i></code></td>
                            <td>Sets the left margin of the element.</td>
                        </tr>
						<tr>
							<td><code>initial</code></td>
							<td>Sets this property to its default value.</td>
						</tr>
                        <tr>
                            <td><code>inherit</code></td>
                            <td>If specified, the associated element takes the <a href="../definitions.php#computed-value">computed value</a> of its parent element <code>margin</code> property.</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>margin</code> property is supported in all major modern browsers.</p>
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
                                        <li>Internet Explorer <span>3+</span></li>
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
                <p>See tutorial on: <a href="../des-css/style_margin.php">CSS Margin</a>, <a href="../des-css/style_box-model.php">CSS Box Model</a>.</p>
                <p>Related properties: <code><a href="style_margin-top-property.php">margin-top</a></code>, <code><a href="style_margin-right-property.php">margin-right</a></code>, <code><a href="style_margin-bottom-property.php">margin-bottom</a></code>, <code><a href="style_margin-left-property.php">margin-left</a></code>.</p>
                <!--Bottom Navigation-->
                <div class="bottom-link clearfix">
                    <a href="style_list-style-type-property.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="style_margin-bottom-property.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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