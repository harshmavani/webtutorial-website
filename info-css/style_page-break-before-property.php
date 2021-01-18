<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS page-break-before Property">
	  <meta name="keywords" content="css,css3,CSS page-break-before Property">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS page-break-before Property - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS page-break-before Property</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css_inner.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>CSS <code>page-break-before</code> Property</h1>
                <p class="topic">Topic: <a href="stylel_properties.php">CSS3 Properties Reference</a><span class="topic-nav"><a href="style_page-break-after-property.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="style_page-break-inside-property.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>page-break-before</code> CSS property insert page breaks before an element when printing a document. This properties applies to <a href="../des-css/style_visual-formatting.php#block-level">block-level</a> elements that generate a box. It won't apply on an empty <code>&lt;p&gt;</code> that won't generate a box.</p>
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
                                <td><pre class="property">page-break-before: </pre></td>
                                <td><span class="keyword">auto</span> | <span class="keyword">always</span> | <span class="keyword">avoid</span> | <span class="keyword">left</span> | <span class="keyword">right</span> | <a href="../definitions.php#initial">initial</a> | <a href="../definitions.php#inherit">inherit</a></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <p>The example below shows the <code>page-break-before</code> property in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab999a.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

@media print {
    h1 {
        page-break-before: always;
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
                <p>The style rule in the above example sets the page-breaking behavior to always break the page before an <code><a href="../info-html/html-headings-tag.php">&lt;h1&gt;</a></code> element so that <code>&lt;h1&gt;</code> element always appears at the top of a new page.</p>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> The <code>page-break-before</code> property only applicable to the <a href="../des-css/style_visual-formatting.php#block-level">block-level</a> elements in the normal flow of the root element, or <a href="../info-html/html-tr-tag.php">table-row</a> elements. </p>
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
                            <td>Insert a page break before the element, if necessary. This is default value.</td>
                        </tr>
                        <tr>
                            <td><code>always</code></td>
                            <td>Always force a page break before the element.</td>
                        </tr>
                        <tr>
                            <td><code>avoid</code></td>
                            <td>Avoid a page break before the element.</td>
                        </tr>
                        <tr>
                            <td><code>left</code></td>
                            <td>Forces either one or two page breaks before the element, so that the next page will be a left-hand page.</td>
                        </tr>
                        <tr>
                            <td><code>right</code></td>
                            <td>Forces either one or two page breaks before the element, so that the next page will be a right-hand page.</td>
                        </tr>
						<tr>
							<td><code>initial</code></td>
							<td>Sets this property to its default value.</td>
						</tr>
                        <tr>
                            <td><code>inherit</code></td>
                            <td>If specified, the associated element takes the <a href="../definitions.php#computed-value">computed value</a> of its parent element <code>page-break-before</code> property.</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>page-break-before</code> property is partially supported in all major modern browsers.</p>
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
                                        <li>Apple Safari <span>1.2+</span></li>
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
                            <p><strong>Warning:</strong> Internet Explorer 8 and earlier versions don't support the values <code>left</code> and <code>right</code>; either value is interpreted as the value <code>always</code>. Firefox, Chrome, and Safari don't support the values <code>avoid</code>, <code>left</code>, or <code>right</code>.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Further Reading</h2>
                <p>See tutorial on: <a href="../des-css/style_media-types.php">CSS Media Types</a>.</p>
                <p>Related properties: <code><a href="style_page-break-after-property.php">page-break-after</a></code>, <code><a href="style_page-break-inside-property.php">page-break-inside</a></code>.</p> 
                <div class="bottom-link clearfix">
                    <a href="style_page-break-after-property.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="style_page-break-inside-property.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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