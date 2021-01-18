<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS counter-reset Property">
	  <meta name="keywords" content="css,css3,CSS counter-reset Property">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS counter-reset Property - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS counter-reset Property</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css_inner.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>CSS <code>counter-reset</code> Property</h1>
                <p class="topic">Topic: <a href="stylel_properties.php">CSS3 Properties Reference</a><span class="topic-nav"><a href="style_counter-increment-property.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="style_cursor-property.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>counter-reset</code> CSS property is used in combination with the <code>counter-increment</code> property for creating auto-incrementing counters, and with the <code>content</code> property to display the generated counter values.</p> 
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
                                <td><pre class="property">counter-reset: </pre></td>
                                <td>[ <i>identifier</i> <i>integer</i> ]<sup>1 or more pairs</sup> | <span class="keyword">none</span> | <a href="../definitions.php#initial">initial</a> | <a href="../definitions.php#inherit">inherit</a></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <p>The example below shows the <code>counter-reset</code> property in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab2ab1.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

                        body {
    counter-reset: section;
}
h1 {
    counter-reset: category;
}
h1:before {
    counter-increment: section;
    content: "Section " counter(section) ". ";
}
h2:before {
    counter-increment: category;
    content: counter(section) "." counter(category) " ";
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
                            <th style="width:80px;">Value</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td><i>identifier</i></td>
                            <td>The name of the counter to reset.</td>
                        </tr>
                        <tr>
                            <td><i>integer</i></td>
                            <td>The value to reset the counter on each occurrence of <a href="../des-css/style_selectors.php">selector</a>. The default reset value is 0.</td>
                        </tr>
                        <tr>
                            <td><code>none</code></td>
                            <td>No counters will be reset. This is default value.</td>
                        </tr>
						<tr>
							<td><code>initial</code></td>
							<td>Sets this property to its default value.</td>
						</tr>
                        <tr>
                            <td><code>inherit</code></td>
                            <td>If specified, the associated element takes the <a href="../definitions.php#computed-value">computed value</a> of its parent element <code>counter-reset</code> property.</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>counter-reset</code> property is supported in all major modern browsers.</p>
                <div class="shadow">
                    <div class="support">
                        <table>
                            <tr>
                                <td><img src="../assets/images/browser.jpg" alt="Browsers Icon" /></td>
                                <td>
                                    <h2>Basic Support&mdash;</h2>
                                    <ul>
                                        <li>Firefox <span>1.5+</span></li>
                                        <li>Google Chrome <span>2+</span></li>
                                        <li>Internet Explorer <span>8+</span></li>
                                        <li>Apple Safari <span>3+</span></li>
                                        <li>Opera <span>9.2+</span></li>
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
                            <p><strong>Warning:</strong> Internet Explorer 7 and earlier versions don't support the <code>counter-increment</code> property. IE8 supports only if a valid <code><a href="../des-html/html-doctypes.php">&lt;!DOCTYPE&gt;</a></code> is specified.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Further Reading</h2>
                <p>See tutorial on: <a href="../des-css/style_pseudo-elements.php#pseudo-elements">CSS Pseudo Elements</a>.</p>
                <p>Related properties: <code><a href="style_content-property.php">content</a></code>, <code><a href="style_counter-increment-property.php">counter-increment</a></code>.</p>
                <!--Bottom Navigation-->
                <div class="bottom-link clearfix">
                    <a href="style_counter-increment-property.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="style_cursor-property.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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