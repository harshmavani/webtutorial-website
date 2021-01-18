
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="HTML p Tag">
      <meta name="keywords" content="html,html5,HTML p Tag">
	  <meta name="author" content="webschooltoday.com">
    <title>HTML p Tag - WebSchool Today</title>
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">HTML p Tag</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>HTML <code>&lt;p&gt;</code> Tag</h1>
                <p class="topic">Topic: <a href="htl_tags.php">HTML5 Tags Reference</a><span class="topic-nav"><a href="htl_output-tag.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="ht_param-tag.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>&lt;p&gt;</code> tag defines a paragraph. The <code>&lt;p&gt;</code> element is the most commonly used <a href="../des-css/css-visual-formatting.php#block-level">block-level</a> element. However, it cannot contain block-level elements (including <code>&lt;p&gt;</code> itself).</p>
                <p>The following table summarizes the usages context and the version history of this tag.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Placement:</th>
                            <td>Block</td>
                        </tr>
                        <tr>
                            <th>Content:</th>
                            <td>Inline and text</td>
                        </tr>
                        <tr>
                            <th>Start/End Tag:</th>
                            <td>Start tag: <strong>required</strong>, End tag: <strong>optional</strong></td>
                        </tr>
                        <tr>
                            <th>Version:</th>
                            <td>HTML 2, 3.2, 4, 4.01, 5</td>
                        </tr>
                    </table>
                </div>
                <div class="usage">
                    <h3><em>Usage Notes</em></h3>
                    <ul>
                        <li><p>As a logical element, empty paragraphs are ignored by the browsers, so do not use empty <code>&lt;p&gt;</code> elements to add blank lines in your web pages. To create blank lines use the <code><a href="ht_br-tag.php">&lt;br&gt;</a></code> tag, or use the CSS <code><a href="../info-css/css-margin-property.php">margin</a></code> property instead.</p></li>
                        <li><p>When you use the <code>&lt;p&gt;</code> element to begin a paragraph, it automatically creates some space (<a href="../des-css/css-margin.php">margin</a>) above and below the content. This space is applied by the browser's built-in style sheets, but you can override it using CSS <code><a href="../info-css/css-margin-property.php">margin</a></code> property.</p></li>
                    </ul>
                </div>
                <hr />
                <h2>Syntax</h2>
                <p>The basic syntax of the <code>&lt;p&gt;</code> tag is given with:</p>
                <div class="shadow">
                    <div class="syntax"><i>HTML&thinsp;/&thinsp;XHTML:</i> <span class="tag">&lt;p&gt;</span> ... <span class="tag">&lt;/p&gt;</span></div>
                </div>
                <p>The example below shows the <code>&lt;p&gt;</code> tag in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab6467.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<p>This is a paragraph.</p>
<p>This is another paragraph.</p>

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
                            <p><strong>Read Carefully:</strong> In HTML, the end tag for the <code>&lt;p&gt;</code> element may be omitted. In XHTML, the <code>&lt;p&gt;</code> tag must be properly closed i.e. both start tag and end tag are required.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Tag-Specific Attributes</h2>
                <p>The following table shows the attributes that are specific to the <code>&lt;p&gt;</code> tag.</p>
                <div class="shadow">
                    <table class="data">
                        <tr>
                            <th>Attribute</th>
                            <th>Value</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td><code>align</code></td>
                            <td><code>left<br />right<br />center<br />justify</code></td>
                            <td><a href="../definitions.php#obsolete" class="obsolete" title="Not supported in HTML5">Obsolete</a> Specifies the horizontal alignment of the text within a paragraph. Use the CSS <a href="../info-css/css-text-align-property.php">text-align</a> property instead.</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Global Attributes</h2>
                <p>Like all other HTML tags, the <code>&lt;p&gt;</code> tag supports the <a href="htl_global-attributes.php">global attributes in HTML5</a>.</p>
                <hr />
                <h2>Event Attributes</h2>
                <p>The <code>&lt;p&gt;</code> tag also supports the <a href="htl_event-attributes.php">event attributes in HTML5</a>.</p>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>&lt;p&gt;</code> tag is supported in all major modern browsers.</p>
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
                                        <li>Internet Explorer <span>2+</span></li>
                                        <li>Apple Safari <span>1+</span></li>
                                        <li>Opera <span>2.1+</span></li>
                                    </ul>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <hr />
                <h2>Further Reading</h2>
                <p>See tutorial on: <a href="../des-css/css-alignment.php">CSS Alignment</a>.</p>
                <p>Related tags: <code><a href="ht_headings-tag.php">&lt;h1&gt; - &lt;h6&gt;</a></code>, <code><a href="ht_div-tag.php">&lt;div&gt;</a></code>.</p>
                <div class="bottom-link clearfix">
                    <a href="htl_output-tag.php" class="previous-page-bottom"><i class="fa fa-arrow-letf" aria-hidden="true"></i> Previous</a>
                    <a href="ht_param-tag.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
 </a>
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