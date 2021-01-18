<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS min-height Property">
	  <meta name="keywords" content="css,css3,CSS min-height Property">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS min-height Property - WebSChool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS min-height Property</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css_inner.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>CSS <code>min-height</code> Property</h1>
                <p class="topic">Topic: <a href="stylel_properties.php">CSS3 Properties Reference</a><span class="topic-nav"><a href="style_max-width-property.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="style_min-width-property.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>min-height</code> CSS property specifies the minimum height of the content area of an element. This minimum height does not include padding, borders, or margins &mdash; see the <a href="../des-css/style_box-model.php">CSS box model</a>.</p>
                <p>The following table summarizes the usages context and the version history of this property.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Default value:</th>
                            <td><code>0</code></td>
                        </tr>
                        <tr>
                            <th>Applies to:</th>
                            <td>All elements except non-replaced inline elements, <br />table rows, and row groups</td>
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
                                <td><span class="property">min-height</span>:&nbsp;</td>
                                <td><i>length</i> | <i>percentage</i> | <a href="../definitions.php#initial">initial</a> | <a href="../definitions.php#inherit">inherit</a></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <p>The example below shows the <code>min-height</code> property in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab624a.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

                        p {
    min-height: 100px;
}
div {
    height: 200px;
    min-height: 300px;
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
                            <th style="width:90px;">Value</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td><i>length</i></td>
                            <td>Specifies the minimum height as a length value in <code>px</code>, <code>pt</code>, <code>cm</code>, <code>em</code>, etc. Negative length values are not allowed.</td>
                        </tr>
                        <tr>
                            <td><i>percentage</i></td>
                            <td>Specifies the minimum height in percentage. The percentage is calculated with respect to the height of the element's containing block. Negative percentage values are not allowed.</td>
                        </tr>
						<tr>
							<td><code>initial</code></td>
							<td>Sets this property to its default value.</td>
						</tr>
                        <tr>
                            <td><code>inherit</code></td>
                            <td>If specified, the associated element takes the <a href="../definitions.php#computed-value">computed value</a> of its parent element <code>min-height</code> property.</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>min-height</code> property is supported in all major modern browsers.</p>
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
                                        <li>Internet Explorer <span>7+</span></li>
                                        <li>Apple Safari <span>1+</span></li>
                                        <li>Opera <span>7+</span></li>
                                    </ul>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <hr />
                <h2>Further Reading</h2>
                <p>See tutorial on: <a href="../des-css/style_box-model.php">CSS Box Model</a>, <a href="../des-css/style_dimension.php">CSS Dimension</a>.</p>
                <p>Related properties: <code><a href="style_height-property.php">height</a></code>, <code><a href="style_max-height-property.php">max-height</a></code>.</p>
                <!--Bottom Navigation-->
                <div class="bottom-link clearfix">
                    <a href="style_max-width-property.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="style_min-width-property.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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