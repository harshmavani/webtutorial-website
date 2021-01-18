<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS margin-right Property">
	  <meta name="keywords" content="css,css3,CSS margin-right Property">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS margin-right Property - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS margin-right Property</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css_inner.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>CSS <code>margin-right</code> Property</h1>
                <p class="topic">Topic: <a href="stylel_properties.php">CSS3 Properties Reference</a><span class="topic-nav"><a href="style_margin-left-property.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="style_margin-top-property.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>margin-right</code> CSS property sets the right margin of the element. However in many cases the shorthand property <code><a href="style_margin-property.php">margin</a></code> is more convenient to use and preferable.</p>	
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
                                <td><span class="property">margin-right</span>:&nbsp;</td>
                                <td><i>length</i> | <i>percentage</i> | <span class="keyword">auto</span> | <a href="../definitions.php#initial">initial</a> | <a href="../definitions.php#inherit">inherit</a></td>
                            </tr>
                        </tbody></table>
                    </div>
                </div>
                <p>The example below shows the <code>margin-right</code> property in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab9d2f.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

                        h1 {
    margin-right: 25px;
}
p {
    margin-right: 50px;
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
                            <th style="width:85px;">Value</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td><i>length</i></td>
                            <td>A length value in <code>px</code>, <code>pt</code>, <code>cm</code>, <code>em</code>, etc. Negative values are allowed.</td>
                        </tr>
                        <tr>
                            <td><i>percentage</i></td>
                            <td>The margin in percentage. The percentage is calculated with respect to the width of the element's containing block.</td>
                        </tr>
                        <tr>
                            <td><code>auto</code></td>
                            <td>The browser will calculate the margin for the specified element.</td>
                        </tr>
						<tr>
							<td><code>initial</code></td>
							<td>Sets this property to its default value.</td>
						</tr>
                        <tr>
                            <td><code>inherit</code></td>
                            <td>If specified, the associated element takes the <a href="../definitions.php#computed-value">computed value</a> of its parent element <code>margin-right</code> property.</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>margin-right</code> property is supported in all major modern browsers.</p>
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
                <p>Related properties: <code><a href="style_margin-property.php">margin</a></code>, <code><a href="style_margin-top-property.php">margin-top</a></code>, <code><a href="style_margin-bottom-property.php">margin-bottom</a></code>, <code><a href="style_margin-left-property.php">margin-left</a></code>.</p>
                <!--Bottom Navigation-->
                <div class="bottom-link clearfix">
                    <a href="style_margin-left-property.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="style_margin-top-property.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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