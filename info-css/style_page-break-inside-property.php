<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS page-break-inside Property">
	  <meta name="keywords" content="css,css3,CSS page-break-inside Property">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS page-break-inside Property - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS page-break-inside Property</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css_inner.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>CSS <code>page-break-inside</code> Property</h1>
                <p class="topic">Topic: <a href="stylel_properties.php">CSS3 Properties Reference</a><span class="topic-nav"><a href="style_page-break-before-property.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="stylel_perspective-property.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>page-break-inside</code> CSS property force or prohibit a printing page break inside an element. This properties applies to <a href="../des-css/style_visual-formatting.php#block-level">block-level</a> elements that generate a box. It won't apply on an empty <code>&lt;p&gt;</code> that won't generate a box.</p>
                <p>The following table summarizes the usages context and the version history of this property.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Default value:</th>
                            <td><code>auto</code></td>
                        </tr>
                        <tr>
                            <th>Applies to:</th>
                            <td>Block-level elements</td>
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
                                <td><span class="property">page-break-inside</span>:&nbsp;</td>
                                <td><span class="keyword">auto</span> | <span class="keyword">avoid</span> | <a href="../definitions.php#initial">initial</a> | <a href="../definitions.php#inherit">inherit</a></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <p>The example below shows the <code>page-break-inside</code> property in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab8192.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

@media print {
    ul {
        page-break-inside: avoid;
    }
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
                <p>The style rule in the above example sets the page-breaking behavior to avoid splitting unordered lists over two pages.</p>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> The <code>page-break-inside</code> property only applicable to the <a href="../des-css/style_visual-formatting.php#block-level">block-level</a> elements in the normal flow of the root element, or <a href="../info-html/html-tr-tag.php">table-row</a> elements.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Property Values</h2>
                <p>The following table describes the values of this property.</p>
                <div class="shadow space">
                    <table class="data">
                        <tr>
                            <th style="width:70px;">Value</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td><code>auto</code></td>
                            <td>Insert a page break inside the element, if necessary. This is default value.</td>
                        </tr>
                        <tr>
                            <td><code>avoid</code></td>
                            <td>Avoid a page break inside the element.</td>
                        </tr>
						<tr>
							<td><code>initial</code></td>
							<td>Sets this property to its default value.</td>
						</tr>
                        <tr>
                            <td><code>inherit</code></td>
                            <td>If specified, the associated element takes the <a href="../definitions.php#computed-value">computed value</a> of its parent element <code>page-break-inside</code> property.</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>page-break-inside</code> property is not supported by the Firefox.</p>
                <div class="shadow">
                    <div class="support">
                        <table>
                            <tr>
                                <td><img src="../assets/images/browser.jpg" alt="Browsers Icon" /></td>
                                <td>
                                    <h2>Basic Support&mdash;</h2>
                                    <ul>
                                        <li>Firefox <span>(none)</span></li>
                                        <li>Google Chrome <span>1+</span></li>
                                        <li>Internet Explorer <span>8+</span></li>
                                        <li>Apple Safari <span>1.3+</span></li>
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
                            <p><strong>Warning:</strong> Avoid using this property as it is poorly suppord. Also use page breaking as few times as possible and avoid page breaking inside table elements, floating elements, and block elements with borders.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Further Reading</h2>
                <p>See tutorial on: <a href="../des-css/style_media-types.php">CSS Media Types</a>.</p>
                <p>Related properties: <code><a href="style_page-break-after-property.php">page-break-after</a></code>, <code><a href="style_page-break-before-property.php">page-break-before</a></code>.</p> 
                <div class="bottom-link clearfix">
                    <a href="style_page-break-before-property.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="stylel_perspective-property.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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