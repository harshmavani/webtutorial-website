
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="HTML html Tag">
      <meta name="keywords" content="html,html5,HTML html Tag">
	  <meta name="author" content="webschooltoday.com">
    <title>HTML html Tag - WebSchool Today</title>
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">HTML html Tag</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>HTML <code>&lt;html&gt;</code> Tag</h1>
                <p class="topic">Topic: <a href="htl_tags.php">HTML5 Tags Reference</a><span class="topic-nav"><a href="ht_hr-tag.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="ht_i-tag.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>&lt;html&gt;</code> element defines the root of HTML and XHTML documents. It is the outer container for everything that appears in an HTML (or XHTML) document except <code><a href="../des-html/ht_doctypes.php">&lt;!DOCTYPE&gt;</a></code>. A typical HTML document has this structure: See <a href="#typical-ht_document">Example</a>.</p>
                <p>The following table summarizes the usages context and the version history of this tag.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Parent:</th>
                            <td>None</td>
                        </tr>
                        <tr>
                            <th>Content:</th>
                            <td><code><a href="ht_head-tag.php">&lt;head&gt;</a></code> and <code><a href="ht_body-tag.php">&lt;body&gt;</a></code></td>
                        </tr>
                        <tr>
                            <th>Start/End Tag:</th>
                            <td>Start tag: <strong>optional</strong>, End tag: <strong>optional</strong></td>
                        </tr>
                        <tr>
                            <th>Version:</th>
                            <td>HTML 2, 3.2, 4, 4.01, 5</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Syntax</h2>
                <p>The basic syntax of the <code>&lt;html&gt;</code> tag is given with:</p>
                <div class="shadow">
                    <div class="syntax"><i>HTML&thinsp;/&thinsp;XHTML:</i> <span class="tag">&lt;html&gt;</span> ... <span class="tag">&lt;/html&gt;</span></div>
                </div>
                <p>The example below shows the <code>&lt;html&gt;</code> tag in action.</p>
                <div class="my_codeb-rg3-w" id="typical-ht_document">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabdb03.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<!DOCTYPE html>
<html>
<head>
    <title><!--Document title--></title>
</head>
<body>
    <!--Document body-->
</body>
</html>
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
                <p>The following table shows the attributes that are specific to the <code>&lt;html&gt;</code> tag.</p>
                <div class="shadow">
                    <table class="data">
                        <tr>
                            <th>Attribute</th>
                            <th>Value</th>
                            <th>Description</th>
                        </tr>
						<tr>
                            <td><code>manifest</code></td>
                            <td><i>URL</i></td>
                            <td>Specifies the URL of the document's cache manifest (for <a href="../des-html/htl_application-cache.php">offline application</a>).</td>
                        </tr>
                        <tr>
                            <td><code>xmlns</code></td>
                            <td><code>http://www.w3.org/1999/xhtml</code></td>
                            <td><strong><em>XHTML only</em></strong>. Specifies the URL of the default XML namespace for a document.</td>
                        </tr>
                        <tr>
                            <td><code>version</code></td>
                            <td><i>DTD</i></td>
                            <td><a href="../definitions.php#obsolete" class="obsolete" title="Not supported in HTML5">Obsolete</a> Specifies which HTML DTD version governs the current document.</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Global Attributes</h2>
                <p>Like all other HTML tags, the <code>&lt;html&gt;</code> tag supports the <a href="htl_global-attributes.php">global attributes in HTML5</a>.</p>
                <hr />
                <h2>Event Attributes</h2>
                <p>The <code>&lt;html&gt;</code> tag also supports the <a href="htl_event-attributes.php">event attributes in HTML5</a>.</p>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>&lt;html&gt;</code> tag is supported in all major modern browsers.</p>
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
                <p>See tutorial on: <a href="../des-html/ht_get-started.php">HTML Get Started</a>.</p>
                <p>Related tag: <code><a href="ht_head-tag.php">&lt;head&gt;</a></code>, <code><a href="ht_body-tag.php">&lt;body&gt;</a></code>.</p>
                <div class="bottom-link clearfix">
                    <a href="ht_hr-tag.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="ht_i-tag.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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