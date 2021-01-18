<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS content Property">
	  <meta name="keywords" content="css,css3,CSS content Property">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS content Property - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS content Property</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css_inner.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>CSS <code>content</code> Property</h1>
                <p class="topic">Topic: <a href="stylel_properties.php">CSS3 Properties Reference</a><span class="topic-nav"><a href="stylel_columns-property.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="style_counter-increment-property.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>content</code> CSS property is used in combination with the <code>::before</code> and <code>::after</code> <a href="../des-css/style_pseudo-elements.php#pseudo-elements">pseudo-elements</a> to generate content in an element.</p>
                <p>The following table summarizes the usages context and the version history of this property.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Default value:</th>
                            <td><code>normal</code></td>
                        </tr>
                        <tr>
                            <th>Applies to:</th>
                            <td>The <code>::before</code> and <code>::after</code> <a href="../des-css/style_pseudo-elements.php#pseudo-elements">pseudo-elements</a></td>
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
                                <td><span class="property">content</span>:&nbsp;</td>
                                <td><span class="keyword">normal</span> | <span class="keyword">none</span> | <span class="keyword">counter</span> | <i>string</i> | url(<i>url</i>) | attr(<i>attribute</i>) | <span class="keyword">open-quote</span> | <span class="keyword">close-quote</span> | <span class="keyword">no-open-quote</span> | <span class="keyword">no-close-quote</span> | <a href="../definitions.php#initial">initial</a> | <a href="../definitions.php#inherit">inherit</a></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <p>The example below shows the <code>content</code> property in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabf7b0.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

                        h1::before {
    content: "Chapter: ";
    display: inline;
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
                            <p><strong>Read Carefully:</strong> The <code><a href="style_display-property.php">display</a></code> CSS property controls whether the content generated using the <code>content</code> property is placed in a block-box or inline box.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Property Values</h2>
                <p>The following table describes the values of this property.</p>
                <div class="shadow space">
                    <table class="data">
                        <tr>
                            <th>Value</th>
                            <th>Description</th>
                        </tr>
						<tr>
                            <td><code>normal</code></td>
                            <td>It computes to none for the <code>:before</code> and <code>:after</code> <a href="../des-css/style_pseudo-elements.php">pseudo-elements</a>. This is default value.</td>
                        </tr>
 						<tr>
                            <td><code>none</code></td>
                            <td>The <a href="../des-css/style_pseudo-elements.php">pseudo-element</a> is not generated.</td>
                        </tr>
						<tr>
                            <td><code>counter</code></td>
                            <td>This value sets the <code>content</code> as a counter. See the <code><a href="style_counter-reset-property.php">counter-reset</a></code> and <code><a href="style_counter-increment-property.php">counter-increment</a></code> property for more information.</td>
                        </tr>
                        <tr>
                            <td><i>string</i></td>
                            <td>Inserts the specified string (text content).</td>
                        </tr>
                        <tr>
                            <td><code>url(<i>url</i>)</code></td>
                            <td>The value of <code>url()</code> designates an external resource (such as an image). If the resource or image can't be displayed, it is either ignored or some placeholder shows up.</td>
                        </tr>                        
                        <tr>
                            <td><code>attr(<i>attribute</i>)</code></td>
                            <td>
                                <p class="up">This function inserts the value of specified attribute before or after the selected element(s). If the subject of the selector does not have the specified attribute, an empty string will be inserted.</p>
                                <p><strong>Note:</strong>  The attribute names shouldn't be enclosed in quotes.</p>
                            </td>
                        </tr>
                        <tr>
                            <td><code>open-quote</code></td>
                            <td>Insert the opening quotation mark. These values are replaced by the appropriate string from the quotes property.</td>
                        </tr>
                        <tr>
                            <td><code>close-quote</code></td>
							<td>Insert the closing quotation mark. These values are replaced by the appropriate string from the quotes property.</td>
                        </tr>
                        <tr>
                            <td><code>no-open-quote</code></td>
                            <td>Do not display the opening quotation mark, but increments (decrements) the level of nesting for quotes.</td>
                        </tr>
                        <tr>
                            <td><code>no-close-quote</code></td>
							<td>Do not display the closing quotation mark, but increments (decrements) the level of nesting for quotes.</td>
                        </tr>
						<tr>
							<td><code>initial</code></td>
							<td>Sets this property to its default value.</td>
						</tr>
                        <tr>
                            <td><code>inherit</code></td>
                            <td>If specified, the associated element takes the <a href="../definitions.php#computed-value">computed value</a> of its parent element <code>content</code> property.</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>content</code> property is supported in all major modern browsers.</p>
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
                                        <li>Internet Explorer <span>8+</span></li>
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
                            <p><strong>Warning:</strong> Internet Explorer 7 and earlier versions do not support the <code>content</code> property. IE8 supports only if a valid <code><a href="../des-html/html-doctypes.php">&lt;!DOCTYPE&gt;</a></code> is specified.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Further Reading</h2>
                <p>See tutorial on: <a href="../des-css/style_pseudo-elements.php#pseudo-elements">CSS Pseudo Elements</a>.</p>
                <p>Related properties: <code><a href="style_counter-reset-property.php">counter-reset</a></code>, <code><a href="style_counter-increment-property.php">counter-increment</a></code>.</p>
                <!--Bottom Navigation-->
                <div class="bottom-link clearfix">
                    <a href="stylel_columns-property.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="style_counter-increment-property.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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