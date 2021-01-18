
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="HTML em Tag">
      <meta name="keywords" content="html,html5,HTML em Tag">
	  <meta name="author" content="webschooltoday.com">
    <title>HTML em Tag - WebSchool Today</title>
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">HTML em Tag</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>HTML <code>&lt;em&gt;</code> Tag</h1>
                <p class="topic">Topic: <a href="htl_tags.php">HTML5 Tags Reference</a><span class="topic-nav"><a href="ht_dt-tag.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="htl_embed-tag.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>&lt;em&gt;</code> (short for emphasis) tag is used to emphasize the text content.</p>
                <p>The following table summarizes the usages context and the version history of this tag.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Placement:</th>
                            <td>Inline</td>
                        </tr>
                        <tr>
                            <th>Content:</th>
                            <td>Inline and text</td>
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
                <div class="usage">
                    <h2><em>Difference between <code>&lt;em&gt;</code>, <code>&lt;cite&gt;</code> and <code>&lt;i&gt;</code> tag</em></h2>
                    <ul>
                        <li><p>Typically all these tags are displayed in italic type, but carries different meaning. The <code>&lt;em&gt;</code> and <code>&lt;cite&gt;</code> tag provides semantic meaning about the text it contains, but <code>&lt;i&gt;</code> tag don't add any semantic meaning.</p></li>
                        <li><p>The <code>&lt;em&gt;</code> tag signifies emphasized content, whereas the <code><a href="ht_cite-tag.php">&lt;cite&gt;</a></code> tag indicates a citation or reference to another source. This differentiates <code>&lt;em&gt;</code> and <code>&lt;cite&gt;</code> from the <code><a href="ht_i-tag.php">&lt;i&gt;</a></code> tag, which simply sets the font to italics.</p></li>
                    </ul>
                </div>
                <hr />
                <h2>Syntax</h2>
                <p>The basic syntax of the <code>&lt;em&gt;</code> tag is given with:</p>
                <div class="shadow">
                    <div class="syntax"><i>HTML&thinsp;/&thinsp;XHTML:</i> <span class="tag">&lt;em&gt;</span> ... <span class="tag">&lt;/em&gt;</span></div>
                </div>
                <p>The example below shows the <code>&lt;em&gt;</code> tag in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab1439.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<p>This is an <em>important point</em> to consider.</p>
<p>This is one more <em>important point</em> to consider.</p>

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
                <h2>Tag-Specific Attributes</h2>
                <p>The <code>&lt;em&gt;</code> tag doesn't have any specific attribute.</p>
                <hr />
                <h2>Global Attributes</h2>
                <p>Like all other HTML tags, the <code>&lt;em&gt;</code> tag supports the <a href="htl_global-attributes.php">global attributes in HTML5</a>.</p>
                <hr />
                <h2>Event Attributes</h2>
                <p>The <code>&lt;em&gt;</code> tag also supports the <a href="htl_event-attributes.php">event attributes in HTML5</a>.</p>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>&lt;em&gt;</code> tag is supported in all major modern browsers.</p>
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
                <p>Related tag: <code><a href="ht_cite-tag.php">&lt;cite&gt;</a></code>, <code><a href="ht_i-tag.php">&lt;i&gt;</a></code>.</p>
                <div class="bottom-link clearfix">
                    <a href="ht_dt-tag.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="htl_embed-tag.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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