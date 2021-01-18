<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS list-style-type Property">
	  <meta name="keywords" content="css,css3,CSS list-style-type Property">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS list-style-type Property - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS list-style-type Property</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css_inner.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>CSS <code>list-style-type</code> Property</h1>
                <p class="topic">Topic: <a href="stylel_properties.php">CSS3 Properties Reference</a><span class="topic-nav"><a href="style_list-style-position-property.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="style_margin-property.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>list-style-type</code> CSS property specifies the type of marker for the list-items.</p>
                <p>The following table summarizes the usages context and the version history of this property.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Default value:</th>
                            <td><code>disc</code></td>
                        </tr>
                        <tr>
                            <th>Applies to:</th>
                            <td>List items</td>
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
                                <td><pre class="property">list-style-type: </pre></td>
                                <td><span class="keyword">disc</span> | <span class="keyword">circle</span> | <span class="keyword">square</span> | <span class="keyword">decimal</span> | <span class="keyword">decimal-leading-zero</span> | <span class="keyword">lower-roman</span> | <span class="keyword">upper-roman</span> | <span class="keyword">lower-greek</span> | <span class="keyword">lower-latin</span> | <span class="keyword">upper-latin</span> | <span class="keyword">armenian</span> | <span class="keyword">georgian</span> | <span class="keyword">lower-alpha</span> | <span class="keyword">upper-alpha</span> | <span class="keyword">none</span> | <a href="../definitions.php#initial">initial</a> | <a href="../definitions.php#inherit">inherit</a></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <p>The example below shows the <code>list-style-type</code> property in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab9e6b.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

                        ol {
    list-style-type: decimal-leading-zero;
}
ul {
    list-style-type: square;
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
                    <table class="data list-demo">
                        <tr>
                            <th style="width:190px;">Value</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td><code>disc</code></td>
                            <td>The marker is a filled circle.</td>
                        </tr>
                        <tr>
                            <td><code>circle</code></td>
                            <td>The marker is a hollow circle.</td>
                        </tr>
                        <tr>
                            <td><code>square</code></td>
                            <td>The marker is a filled square.</td>
                        </tr>
                        <tr>
                            <td><code>decimal</code></td>
                            <td>
                                <p style="padding-top:0;">The marker is a &ndash;</p>
                                <ul style="list-style-type:decimal;">
                                    <li>Decimal number</li>
                                    <li>Beginning with 1.</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td><code>decimal-leading-zero</code></td>
                            <td>
                                <p style="padding-top:0;">The marker is a &ndash;</p>
                                <ul style="list-style-type:decimal-leading-zero;">
                                    <li>Decimal number</li>
                                    <li>Padded by initial zero</li>
                                    <li>E.g. 01, 02, 03, ... 10, 11</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td><code>lower-roman</code></td>
                            <td>
                                <p style="padding-top:0;">The marker is &ndash;</p>
                                <ul style="list-style-type:lower-roman;">
                                    <li>Lowercase roman numerals</li>
                                    <li>E.g. i, ii, iii, iv, v, ...</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td><code>upper-roman</code></td>
                            <td>
                                <p style="padding-top:0;">The marker is &ndash;</p>
                                <ul style="list-style-type:upper-roman;">
                                    <li>Uppercase roman numerals</li>
                                    <li>E.g. I, II, III, IV, V, ...</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td><code>lower-greek</code></td>
                            <td>
                                <p style="padding-top:0;">The marker is &ndash;</p>
                                <ul style="list-style-type:lower-greek;">
                                    <li>Lowercase Greek letters</li>
                                    <li>alpha, beta, gamma, ...</li>
                                    <li>E.g. &alpha;, &beta;, &gamma;, ...</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td><code>lower-latin</code></td>
                            <td>
                                <p style="padding-top:0;">The marker is &ndash;</p>
                                <ul style="list-style-type:lower-latin;">
                                    <li>Lowercase Latin letters</li>
                                    <li>E.g. a, b, c, ... z</li>
                                </ul>
                            </td>
                        </tr> 
                        <tr>
                            <td><code>upper-latin</code></td>
                            <td>
                                <p style="padding-top:0;">The marker is &ndash;</p>
                                <ul style="list-style-type:upper-latin;">
                                    <li>Uppercase Latin letters</li>
                                    <li>E.g. A, B, C, ... Z</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td><code>armenian</code></td>
                            <td>
                                <p style="padding-top:0;">The marker is &ndash;</p>
                                <ul style="list-style-type:armenian;">
                                    <li>Traditional Armenian numbering</li>
                                    <li>E.g. ayb/ayp, ben/pen, gim/keem, ...</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td><code>georgian</code></td>
                            <td>
                                <p style="padding-top:0;">The marker is &ndash;</p>
                                <ul style="list-style-type:georgian;">
                                    <li>Traditional Georgian numbering</li>
                                    <li>E.g. an, ban, gan, ... he, tan, in ...</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td><code>lower-alpha</code></td>
                            <td>
                                <p style="padding-top:0;">The marker is &ndash;</p>
                                <ul style="list-style-type:lower-alpha;">
                                    <li>Uppercase Latin letters</li>
                                    <li>E.g. a, b, c, ... z</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td><code>upper-alpha</code></td>
                            <td>
                                <p style="padding-top:0;">The marker is &ndash;</p>
                                <ul style="list-style-type:upper-alpha;">
                                    <li>Uppercase Latin letters</li>
                                    <li>E.g. A, B, C, ... Z</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td><code>none</code></td>
                            <td>Specifies no marker.</td>
                        </tr>
						<tr>
							<td><code>initial</code></td>
							<td>Sets this property to its default value.</td>
						</tr>
                        <tr>
                            <td><code>inherit</code></td>
                            <td>If specified, the associated element takes the <a href="../definitions.php#computed-value">computed value</a> of its parent element <code>list-style-type</code> property.</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>list-style-type</code> property is supported in all major modern browsers.</p>
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
                <p>See tutorial on: <a href="../des-html/html-lists.php">HTML List</a>, <a href="../des-css/style_lists.php">CSS Lists</a>.</p>
                <p>Related properties: <code><a href="style_list-style-property.php">list-style</a></code>, <code><a href="style_list-style-image-property.php">list-style-image</a></code>, <code><a href="style_list-style-position-property.php">list-style-position</a></code>.</p>
                <!--Bottom Navigation-->
                <div class="bottom-link clearfix">
                    <a href="style_list-style-position-property.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="style_margin-property.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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