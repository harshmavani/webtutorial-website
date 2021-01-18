<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS quotes Property">
	  <meta name="keywords" content="css,css3,CSS quotes Property">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS quotes Property - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS quotes Property</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css_inner.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>CSS <code>quotes</code> Property</h1>
                <p class="topic">Topic: <a href="stylel_properties.php">CSS3 Properties Reference</a><span class="topic-nav"><a href="style_position-property.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="stylel_resize-property.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>quotes</code> CSS property specifies the quotation marks for the embedded quotations. The quotes characters specified for this property are used for the <code>open-quote</code> and <code>close-quote</code> values of the <code><a href="style_content-property.php">content</a></code> property. </p>
                <p>The following table summarizes the usages context and the version history of this property.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Default value:</th>
                            <td><code>none</code></td>
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
                <hr />
                <h2>Syntax</h2>
                <p>The syntax of the property is given with:</p>
                <div class="shadow">
                    <div class="syntax">
                        <table>
                            <tr>
                                <td><span class="property">quotes</span>:&nbsp;</td>
                                <td>[<i>string</i> <i>string</i>]<sup>one or more pairs</sup> | <span class="keyword">none</span> | <a href="../definitions.php#initial">initial</a> | <a href="../definitions.php#inherit">inherit</a></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <p>The example below shows the <code>quotes</code> property in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab7c0b.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

q {
    quotes: '[' ']' '"' '"';
}
q:before {
    content: open-quote;
}
q:after {
    content: close-quote;
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
                            <td><code>none</code></td>
                            <td>The <code>open-quote</code> and <code>close-quote</code> values of the <code><a href="style_content-property.php">content</a></code> property produce no quotation marks. This is default value.</td>
                        </tr>
                        <tr>
                            <td>[<i>string</i> <i>string</i>]</td>
                            <td>One or more pairs of string values for the <code>open-quote</code> and <code>close-quote</code>. The first pair represents the outer level of quotation; the second pair is for the first nested level, next pair for third level and so on.</td>
                        </tr>
						<tr>
							<td><code>initial</code></td>
							<td>Sets this property to its default value.</td>
						</tr>
                        <tr>
                            <td><code>inherit</code></td>
                            <td>If specified, the associated element takes the <a href="../definitions.php#computed-value">computed value</a> of its parent element <code>quotes</code> property.</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>quotes</code> property is supported in all major modern browsers.</p>
                <div class="shadow">
                    <div class="support">
                        <table>
                            <tr>
                                <td><img src="../assets/images/browser.jpg" alt="Browsers Icon" /></td>
                                <td>
                                    <h2>Basic Support&mdash;</h2>
                                    <ul>
                                        <li>Firefox <span>1.5+</span></li>
                                        <li>Google Chrome <span>11+</span></li>
                                        <li>Internet Explorer <span>8+</span></li>
                                        <li>Apple Safari (None)</li>
                                        <li>Opera <span>7+</span></li>
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
                            <p><strong>Warning:</strong> Internet Explorer 7 and earlier versions don't support the <code>quotes</code> property. IE8 supports this property, but requires a valid <code><a href="../des-html/html-doctypes.php">&lt;!DOCTYPE&gt;</a></code>.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Further Reading</h2>
                <p>See tutorial on: <a href="../des-css/style_pseudo-elements.php">CSS Pseudo-elements</a>.</p>
                <p>Related properties: <code><a href="style_content-property.php">content</a></code>.</p> 
                <div class="bottom-link clearfix">
                    <a href="style_position-property.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="stylel_resize-property.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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