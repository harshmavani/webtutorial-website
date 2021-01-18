
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="HTML blockquote Tag">
      <meta name="keywords" content="html,html5,HTML blockquote Tag">
	  <meta name="author" content="webschooltoday.com">
    <title>HTML blockquote Tag - WebSchool Today</title>
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">HTML blockquote Tag</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>HTML <code>&lt;blockquote&gt;</code> Tag</h1>
                <p class="topic">Topic: <a href="htl_tags.php">HTML5 Tags Reference</a><span class="topic-nav"><a href="ht_big-tag.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="ht_body-tag.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>&lt;blockquote&gt;</code> tag indicates that the enclosed text is an extended quotation.</p>
                <p>Usually, blockquotes are rendered visually by indentation. A URL for the source of the quotation may be given using the <code>cite</code> attribute, while a text representation of the source can be given using the <code><a href="ht_cite-tag.php">&lt;cite&gt;</a></code> element.</p>
                <p>The following table summarizes the usages context and the version history of this tag.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Placement:</th>
                            <td>Block</td>
                        </tr>
                        <tr>
                            <th>Content:</th>
                            <td>Block, inline, and text</td>
                        </tr>
                        <tr>
                            <th>Start/End Tag:</th>
                            <td>Start tag: <strong>required</strong>, End tag: <strong>required</strong></td>
                        </tr>
                        <tr>
                            <th>Version:</th>
                            <td>HTML 2, 3.2, 4, 4.01, 5</td>
                        </tr>
                    </table>
                </div>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                        <p><strong>Read Carefully:</strong> XHTML allows the <code>&lt;blockquote&gt;</code> element to contain only other <a href="../des-css/css-visual-formatting.php#block-level">block-level</a> elements (i.e. not an <a href="../des-css/css-visual-formatting.php#inline-level">inline-level</a> element).</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Syntax</h2>
                <p>The basic syntax of the <code>&lt;blockquote&gt;</code> tag is given with:</p>
                <div class="shadow">
                    <div class="syntax"><i>HTML&thinsp;/&thinsp;XHTML:</i> <span class="tag">&lt;blockquote <span class="attribute">cite</span>="<span class="attribute-value"><i>URL</i></span>"&gt;</span> ... <span class="tag">&lt;/blockquote&gt;</span></div>
                </div>
                <p>The example below shows the <code>&lt;blockquote&gt;</code> tag in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab42ec.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<blockquote>
    <p>This is an example of a long quotation.</p>
</blockquote>

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
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"  style="background-color:#fad28c"
>
                        <p><strong>Important:</strong> The <code>&lt;blockquote&gt;</code> tag is for long quotations (<a href="../des-css/css-visual-formatting.php#block-level">block-level</a> content). For short quotations (<a href="../des-css/css-visual-formatting.php#inline-level">inline-level</a> content), use <code><a href="ht_q-tag.php">&lt;q&gt;</a></code> tag that don't require paragraph breaks.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Tag-Specific Attributes</h2>
                <p>The following table shows the attributes that are specific to the <code>&lt;blockquote&gt;</code> tag.</p>
                <div class="shadow">
                    <table class="data">
                        <tr>
                            <th>Attribute</th>
                            <th>Value</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td><code>cite</code></td>
                            <td><i>URL</i></td>
                            <td>Specifies the source of a quotation.</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Global Attributes</h2>
                <p>Like all other HTML tags, the <code>&lt;blockquote&gt;</code> tag supports the <a href="htl_global-attributes.php">global attributes in HTML5</a>.</p>
                <hr />
                <h2>Event Attributes</h2>
                <p>The <code>&lt;blockquote&gt;</code> tag also supports the <a href="htl_event-attributes.php">event attributes in HTML5</a>.</p>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>&lt;blockquote&gt;</code> tag is supported in all major modern browsers.</p>
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
                <p>See tutorial on: <a href="../des-html/ht_text-formatting.php">HTML Text Formatting</a>.</p>
                <p>Related tags: <code><a href="ht_cite-tag.php">&lt;cite&gt;</a></code>, <code><a href="ht_q-tag.php">&lt;q&gt;</a></code>.</p>
                <div class="bottom-link clearfix">
                    <a href="ht_big-tag.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="ht_body-tag.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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