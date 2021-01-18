<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS border-bottom-left-radius Property">
	  <meta name="keywords" content="css,css3,CSS border-bottom-left-radius Property">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS border-bottom-left-radius Property - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS border-bottom-left-radius Property</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css_inner.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>CSS3 <code>border-bottom-left-radius</code> Property</h1>
                <p class="topic">Topic: <a href="stylel_properties.php">CSS3 Properties Reference</a><span class="topic-nav"><a href="style_border-bottom-color-property.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="stylel_border-bottom-right-radius-property.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>border-bottom-left-radius</code> CSS property sets the rounded shape for the 'bottom-left' corner of an element border box.</p>
                <p>The following table summarizes the usages context and the version history of this property.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Default value:</th>
                            <td><code>0</code></td>
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
                            <td><span class="stylel_badge"></span> New in CSS3</td>
                        </tr>
                    </table>
                </div>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> The <code>border-bottom-left-radius</code> property causes the element's background to be rounded even if no borders have been defined or its value is set to <code>none</code>.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Syntax</h2>
                <p>The syntax of the property is given with:</p>
                <div class="shadow">
                    <div class="syntax">
                        <table>
                            <tr>
                                <td><pre class="property">border-bottom-left-radius: </pre></td>
                                <td>[ <i>length</i> | <i>percentage</i> ]<sup>1 or 2 values</sup> | <a href="../definitions.php#initial">initial</a> | <a href="../definitions.php#inherit">inherit</a></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <p>This shorthand notation can take one, or two whitespace separated values.</p>
                <ul>
                    <li>The optional second length values define the vertical radii for the bottom-left corner and the corner shape is thus a quarter ellipse.</li>
                    <li>If the second length is omitted, or it is equal to the first &mdash; the corner shape is a quarter circle. If either length is zero, the corner is square, not rounded.</li>
                </ul>
                <p>The example below shows the <code>border-bottom-left-radius</code> property in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab9c8d.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

div {
    border: 2px solid #f08080;
    border-bottom-left-radius: 20px;
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
                            <td>A length value in <code>px</code>, <code>pt</code>, <code>cm</code>, <code>em</code>, etc. Negative values are not allowed.</td>
                        </tr>
                        <tr>
                            <td><i>percentage</i></td>
                            <td>The size of the radius in percentage. In case of two values, percentage for the first value (i.e. horizontal radius) is calculated with respect to the width of the element's box, while percentage for the second value (i.e. vertical radius) is calculated with respect to the height of the element's box. Negative values are not allowed.</td>
                        </tr>
						<tr>
							<td><code>initial</code></td>
							<td>Sets this property to its default value.</td>
						</tr>
                        <tr>
                            <td><code>inherit</code></td>
                            <td>If specified, the associated element takes the <a href="../definitions.php#computed-value">computed value</a> of its parent element <code>border-bottom-left-radius</code> property.</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>border-bottom-left-radius</code> property is supported in all major modern browsers.</p>
                <div class="shadow">
                    <div class="support">
                        <table>
                            <tr>
                                <td><img src="../assets/images/browser.jpg" alt="Browsers Icon" /></td>
                                <td>
                                    <h2>Basic Support&mdash;</h2>
                                    <ul>
                                        <li>Firefox <span>4+</span></li>
                                        <li>Google Chrome <span>4+</span></li>
                                        <li>Internet Explorer <span>9+</span></li>
                                        <li>Apple Safari <span>5+</span></li>
                                        <li>Opera <span>10.5+</span></li>
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
                            <p><strong>Warning:</strong> Internet Explorer 8 and earlier versions do not support the <code>border-bottom-left-radius</code> CSS property. Supported in IE9 and above.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Further Reading</h2>
                <p>See tutorial on: <a href="../des-css/style_border.php">CSS Border</a>, <a href="../des-css/stylel_border.php">CSS3 Border</a>.</p>
                <p>Related properties: <code><a href="stylel_border-radius-property.php">border-radius</a></code>, <code><a href="stylel_border-bottom-right-radius-property.php">border-bottom-right-radius</a></code>, <code><a href="stylel_border-top-left-radius-property.php">border-top-left-radius</a></code>, <code><a href="stylel_border-top-right-radius-property.php">border-top-right-radius</a></code>.</p>
                <div class="bottom-link clearfix">
                    <a href="style_border-bottom-color-property.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="stylel_border-bottom-right-radius-property.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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