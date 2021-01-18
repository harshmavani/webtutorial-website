
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="HTML body Tag">
      <meta name="keywords" content="html,html5,HTML body Tag">
	  <meta name="author" content="webschooltoday.com">
    <title>HTML body Tag - WebSchool Today</title>
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">HTML body Tag</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>HTML <code>&lt;body&gt;</code> Tag</h1>
                <p class="topic">Topic: <a href="../faq.php#php-mysql">HTML Tag Reference</a><span class="topic-nav"><a href="ht_blockquote-tag.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="ht_br-tag.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>&lt;body&gt;</code> element represents the main content of the document. It typically wraps around all of the content that will be displayed on screen, such as headings, paragraphs, hyperlinks, images, forms, tables, lists, videos and so on.</p>
                <p>The following table summarizes the usages context and the version history of this tag.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Parent:</th>
                            <td><code><a href="ht_ht_tag.php">&lt;html&gt;</a></code></td>
                        </tr>
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
                <p>The basic syntax of the <code>&lt;body&gt;</code> tag is given with:</p>
                <div class="shadow">
                    <div class="syntax"><i>HTML&thinsp;/&thinsp;XHTML:</i> <span class="tag">&lt;body&gt;</span> ... <span class="tag">&lt;/body&gt;</span></div>
                </div>
                <p>The example below shows the <code>&lt;body&gt;</code> tag in action.</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabdcd9.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<!DOCTYPE html>
<html>
<head>
    <title>HTML Document</title>
</head>
<body>
    <p>Hello World!</p>
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
                <p>The following table shows the attributes that are specific to the <code>&lt;body&gt;</code> tag.</p>
                <div class="shadow">
                    <table class="data">
                        <tr>
                        <th>Attribute</th>
                            <th style="width:65px;">Value</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td><code>alink</code></td>
                            <td><i>color</i></td>
                            <td><a href="../definitions.php#obsolete" class="obsolete" title="Not supported in HTML5">Obsolete</a> Specifies the color of active link (while the mouse button is held down during a click) in a document.</td>
                        </tr>
                        <tr>
                            <td><code>background</code></td>
                            <td><i>URL</i></td>
                            <td><a href="../definitions.php#obsolete" class="obsolete" title="Not supported in HTML5">Obsolete</a> Specifies a background image for the document.</td>
                        </tr>
                        <tr>
                            <td><code>bgcolor</code></td>
                            <td><i>color</i></td>
                            <td><a href="../definitions.php#obsolete" class="obsolete" title="Not supported in HTML5">Obsolete</a> Specifies the background color of the document.</td>
                        </tr>
                        <tr>
                            <td><code>link</code></td>
                            <td><i>color</i></td>
                            <td><a href="../definitions.php#obsolete" class="obsolete" title="Not supported in HTML5">Obsolete</a> Specifies the color of unvisited links in a document.</td>
                        </tr>
                        <tr>
                            <td><code>text</code></td>
                            <td><i>color</i></td>
                            <td><a href="../definitions.php#obsolete" class="obsolete" title="Not supported in HTML5">Obsolete</a> Specifies the foreground color for text in a document.</td>
                        </tr>
                        <tr>
                            <td><code>vlink</code></td>
                            <td><i>color</i></td>
                            <td><a href="../definitions.php#obsolete" class="obsolete" title="Not supported in HTML5">Obsolete</a> Specifies the color of visited links (links that have already been followed) in a document.</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Global Attributes</h2>
                <p>Like all other HTML tags, the <code>&lt;body&gt;</code> tag supports the <a href="htl_global-attributes.php">global attributes in HTML5</a>.</p>
                <hr />
                <h2>Event Attributes</h2>
                <p>The <code>&lt;body&gt;</code> tag also supports the <a href="htl_event-attributes.php">event attributes in HTML5</a>.</p>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>&lt;body&gt;</code> tag is supported in all major modern browsers.</p>
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
                <p>See tutorial on: <a href="../des-html/index.php">HTML Introduction</a>.</p>
                <p>Related tags: <code><a href="ht_ht_tag.php">&lt;html&gt;</a></code>, <code><a href="ht_head-tag.php">&lt;head&gt;</a></code>.</p>
                <div class="bottom-link clearfix">
                    <a href="ht_blockquote-tag.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="ht_br-tag.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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