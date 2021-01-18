<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS direction Property">
	  <meta name="keywords" content="css,css3,CSS direction Property">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS direction Property - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS direction Property</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css_inner.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>CSS <code>direction</code> Property</h1>
                <p class="topic">Topic: <a href="stylel_properties.php">CSS3 Properties Reference</a><span class="topic-nav"><a href="style_cursor-property.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="style_display-property.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>direction</code> property specifies:</p>
                <ul>
                    <li>the base writing direction (right to left, or left to right) of blocks.</li>
                    <li>the direction of embeddings and overrides for the Unicode bidirectional algorithm (see <code><a href="style_unicode-bidi-property.php">unicode-bidi</a></code> property).</li>
                    <li>the direction of <code><a href="../des-html/html-tables.php">table</a></code> column layout.</li>
                    <li>the direction of horizontal <code><a href="style_overflow-property.php">overflow</a></code>.</li>
                    <li>the position of an incomplete last line in a block, when the value of <code><a href="style_text-align-property.php">text-align</a></code> property is set to <code>justify</code>.</li>
                </ul>
                <p>The following table summarizes the usages context and the version history of this property.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Default value:</th>
                            <td><code>ltr</code></td>
                        </tr>
                        <tr>
                            <th>Applies to:</th>
                            <td>All elements</td>
                        </tr>
                        <tr>
                            <th>Inherited:</th>
                            <td>Yes</td>
                        </tr>
						<tr>
							<th>Animatable:</th>
							<td>No. <a href="style_animatable-properties.php"><i>See</i> <em>animatable properties</em></a>.</td>
						</tr>
                        <tr>
                            <th>Version:</th>
                            <td>CSS 2, 3</td>
                        </tr>
                    </table>
                </div>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> Unlike the <code>dir</code> attribute in HTML, the <code>direction</code> CSS property, when specified for table column elements, is not inherited by cells in the column since CSS inheritance follows the document tree, and rows are the ancestors of the cells in the document tree not the columns.</p>
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
                                <td><span class="property">direction</span>:&nbsp;</td>
                                <td><span class="keyword">ltr</span> | <span class="keyword">rtl</span> | <a href="../definitions.php#initial">initial</a> | <a href="../definitions.php#inherit">inherit</a></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <p>The example below shows the <code>direction</code> property in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab6aa4.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

                        p {
    direction: rtl;
    unicode-bidi: bidi-override;
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
                            <p><strong>Read Carefully:</strong> For the <code>direction</code> property to affect reordering in inline elements, the <code><a href="style_unicode-bidi-property.php">unicode-bidi</a></code> property's value must be <code>embed</code> or <code>override</code>.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Property Values</h2>
                <p>The following table describes the values of this property.</p>
                <div class="shadow space">
                    <table class="data">
                        <tr>
                            <th style="width:80px;">Value</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td><code>ltr</code></td>
                            <td>Sets a left-to-right direction. This is default value.</td>
                        </tr>
                        <tr>
                            <td><code>rtl</code></td>
                            <td>Sets a right-to-left direction.</td>
                        </tr>
						<tr>
							<td><code>initial</code></td>
							<td>Sets this property to its default value.</td>
						</tr>

                        <tr>
                            <td><code>inherit</code></td>
                            <td>If specified, the associated element takes the <a href="../definitions.php#computed-value">computed value</a> of its parent element <code>direction</code> property.</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>direction</code> property is supported in all major modern browsers.</p>
                <div class="shadow">
                    <div class="support">
                        <table>
                            <tr>
                                <td><img src="../assets/images/browser.jpg" alt="Browsers Icon" /></td>
                                <td>
                                    <h2>Basic Support&mdash;</h2>
                                    <ul>
                                        <li>Firefox <span>1+</span></li>
                                        <li>Google Chrome <span>2+</span></li>
                                        <li>Internet Explorer <span>5.5+</span></li>
                                        <li>Apple Safari <span>1+</span></li>
                                        <li>Opera <span>9.2+</span></li>
                                    </ul>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <hr />
                <h2>Further Reading</h2>
                <p>See tutorial on: <a href="../des-css/style_text.php">CSS Text</a>.</p>
                <p>Related properties: <code><a href="style_unicode-bidi-property.php">unicode-bidi</a></code></p> 
                <!--Bottom Navigation-->
                <div class="bottom-link clearfix">
                    <a href="style_cursor-property.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="style_display-property.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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