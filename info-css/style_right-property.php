<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS right Property">
	  <meta name="keywords" content="css,css3,CSS right Property">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS right Property - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS right Property</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css_inner.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>CSS <code>right</code> Property</h1>
                <p class="topic">Topic: <a href="stylel_properties.php">CSS3 Properties Reference</a><span class="topic-nav"><a href="stylel_resize-property.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="style_table-layout-property.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>right</code> CSS property specify an offset for the right edge of the positioned element, relative to the right edge of the reference element's box or browser window.</p>
                <ul>
                    <li>For <a href="../des-css/style_position.php#absolute-positioning">absolutely positioned</a> elements, the <code>right</code> property specifies how far the right edge of the element's box is offset to the left of the right edge of its containing&thinsp;block.</li>
                    <li>For <a href="../des-css/style_position.php#relative-positioning">relatively positioned</a> elements, the <code>right</code> property specifies the offset with respect to the right edge of the box itself (i.e., the box is given a position in the normal flow, and then offset from that position according to these properties).</li>
                </ul>
                <p>The following table summarizes the usages context and the version history of this property.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Default value:</th>
                            <td><code>auto</code></td>
                        </tr>
                        <tr>
                            <th>Applies to:</th>
                            <td>Positioned elements</td>
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
                                <td><span class="property">right</span>:&nbsp;</td>
                                <td><i>length</i> | <i>percentage</i> | <span class="keyword">auto</span> | <a href="../definitions.php#initial">initial</a> | <a href="../definitions.php#inherit">inherit</a></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <p>The example below shows the <code>right</code> property in action.</p>
                <div class="example">
                    <div class="codebox">
                        <div class="codebox-title"><h4>Example</h4><a href="../codelab4392.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

p {
    position: absolute;
    right: 150px;
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
                            <td>Specifies the offset as a length value in <code>px</code>, <code>pt</code>, <code>cm</code>, <code>em</code>, etc. Negative length values are allowed.</td>
                        </tr>
                        <tr>
                            <td><i>percentage</i></td>
                            <td>Specifies the offset in percentage. The percentage is calculated with respect to the width of the element's containing block. Negative percentage values are allowed.</td>
                        </tr>
                        <tr>
                            <td><code>auto</code></td>
                            <td>The browser calculates the right edge position. This is default value.</td>
                        </tr>
						<tr>
							<td><code>initial</code></td>
							<td>Sets this property to its default value.</td>
						</tr>
                        <tr>
                            <td><code>inherit</code></td>
                            <td>If specified, the associated element takes the <a href="../definitions.php#computed-value">computed value</a> of its parent element <code>right</code> property.</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>right</code> property is supported in all major modern browsers.</p>
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
                                        <li>Opera <span>6+</span></li>
                                    </ul>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <hr />
                <h2>Further Reading</h2>
                <p>See tutorial on: <a href="../des-css/style_position.php">CSS Position</a>, <a href="../des-css/style_layers.php">CSS Layers</a>.</p> 
                <p>Related properties: <code><a href="style_position-property.php">position</a></code>, <code><a href="style_top-property.php">top</a></code>, <code><a href="style_left-property.php">left</a></code>, <code><a href="style_bottom-property.php">bottom</a></code>, <code><a href="style_z-index-property.php">z-index</a></code>.</p> 
                <div class="bottom-link clearfix">
                    <a href="stylel_resize-property.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="style_table-layout-property.php" class="next-page-bottom" style="float: right;" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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