<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS3 text-overflow Property">
	  <meta name="keywords" content="css,css3,CSS3 text-overflow Property">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS3 text-overflow Property - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS3 text-overflow Property</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "info_css_inner.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>CSS3 <code>text-overflow</code> Property</h1>
                <p class="topic">Topic: <a href="stylel_properties.php">CSS3 Properties Reference</a><span class="topic-nav"><a href="stylel_text-justify-property.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="stylel_text-shadow-property.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>	
                <h2>Description</h2>
                <p>The <code>text-overflow</code> CSS property determines how the text content will be displayed, when it overflows the block container element that has <code><a href="style_overflow-property.php">overflow</a></code> other than <code>visible</code>.</p>
                <p>The following table summarizes the usages context and the version history of this property.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Default value:</th>
                            <td><code>clip</code></td>
                        </tr>
                        <tr>
                            <th>Applies to:</th>
                            <td>Block containers</td>
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
                            <td><span class="stylel_badge"></span> New in CSS3</td>
                        </tr>
                    </table>
                </div>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> Text can overflow, when it is prevented from wrapping e.g. due to white space set to nowrap for the containing element or a single word is too long to fit.</p>
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
                                <td><span class="property">text-overflow</span>:&nbsp;</td>
                                <td><span class="keyword">clip</span> | <span class="keyword">ellipsis</span> | <i>string</i> | <a href="../definitions.php#initial">initial</a> | <a href="../definitions.php#inherit">inherit</a></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <p>The example below shows the <code>text-overflow</code> property in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab135c.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

p {
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
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
                <div class="shadow">
                    <table class="data">
                        <tr>
                            <th style="width:85px;">Value</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td><code>clip</code></td>
                            <td>Clip text as appropriate for the text content. Characters may be only partially rendered.</td>
                        </tr>
                        <tr>
                            <td><code>ellipsis</code></td>
                            <td>Render an ellipsis character ('...', U+2026) to represent clipped text.</td>
                        </tr>
                        <tr>
                            <td><i>string</i></td>
                            <td>Render the given string to represent clipped text. The string is displayed inside the content area, shortening more the size of the displayed text. If there are not enough places to display string, they are clipped.</td>
                        </tr>
						<tr>
							<td><code>initial</code></td>
							<td>Sets this property to its default value.</td>
						</tr>
                        <tr>
                            <td><code>inherit</code></td>
                            <td>If specified, the associated element takes the <a href="../definitions.php#computed-value">computed value</a> of its parent element <code>text-overflow</code> property.</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>text-overflow</code> property is supported in all major modern browsers.</p>
                <div class="shadow">
                    <div class="support">
                        <table>
                            <tr>
                                <td><img src="../assets/images/browser.jpg" alt="Browsers Icon" /></td>
                                <td>
                                    <h2>Basic Support&mdash;</h2>
                                    <ul>
                                        <li>Firefox <span>7+</span></li>
                                        <li>Google Chrome <span>1+</span></li>
                                        <li>Internet Explorer <span>6+</span></li>
                                        <li>Apple Safari <span>1+</span></li>
                                        <li>Opera <span>9+</span></li>
                                    </ul>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> Internet Explorer supports the prefixed version <code>-ms-text-overflow</code> that can be used as a synonym for <code>text-overflow</code>. Opera 9 and 10 supports the prefixed version, <code>-o-text-overflow</code>.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Further Reading</h2>
                <p>See tutorial on: <a href="../des-css/style_overflow.php">CSS Overflow</a>, <a href="../des-css/style_text.php">CSS Text</a>.</p>
                <p>Text-related properties: <code><a href="style_letter-spacing-property.php">letter-spacing</a></code>, <code><a href="style_text-align-property.php">text-align</a></code>, <code><a href="style_text-decoration-property.php">text-decoration</a></code>, <code><a href="style_text-indent-property.php">text-indent</a></code>, <code><a href="stylel_text-shadow-property.php">text-shadow</a></code>, <code><a href="style_text-transform-property.php">text-transform</a></code>, <code><a href="style_white-space-property.php">white-space</a></code>, <code><a href="style_word-spacing-property.php">word-spacing</a></code>.</p>
                <div class="bottom-link clearfix">
                    <a href="stylel_text-justify-property.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="stylel_text-shadow-property.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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