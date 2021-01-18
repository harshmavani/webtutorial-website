
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="HTML title Tag">
      <meta name="keywords" content="html,html5">
	  <meta name="author" content="webschooltoday.com">
    <title>HTML title Tag - WebSchool Today</title>
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">HTML title Tag</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>HTML <code>&lt;title&gt;</code> Tag</h1>
                <p class="topic">Topic: <a href="htl_tags.php">HTML5 Tags Reference</a><span class="topic-nav"><a href="htl_time-tag.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="ht_tr-tag.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>&lt;title&gt;</code> tag defines the title of the document. The <code>&lt;title&gt;</code> element should be the first element defined in the <a href="../des-html/ht_head.php">head section</a> of the document. The title should be meaningful because it summarizes the content or purpose of the document.</p>
                <p>The <code>&lt;title&gt;</code> element is very important, because its content is used by the:</p>
                <h3>Web browsers</h3>
                <ul>
                    <li>To display the page title in the web browser's title (top of a browser) and tab(s).</li>
                    <li>To label the web page when it is bookmarked or added as a favorite.</li>
                </ul>
                <h3>Search engines</h3>
                <ul>
                    <li>To display a clickable headline for the web page when it listed on the Search Engine Result Pages (SERPs).</li>
                    <li>To determine the topic of the web page. Search Engine spiders or crawlers analyze the content of the page title and then decide the page topic.</li>
                </ul>
                <p>The following table summarizes the usages context and the version history of this tag.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Parent:</th>
                            <td><code><a href="ht_head-tag.php">&lt;head&gt;</a></code></td>
                        </tr>
                        <tr>
                            <th>Content:</th>
                            <td>Text</td>
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
                <div class="color-box space">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"     style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> Every HTML document must contain one and exactly one <code>&lt;title&gt;</code> element in the <a href="../des-html/ht_head.php">head section</a>. The title should ideally be 65 characters in length.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Syntax</h2>
                <p>The basic syntax of the <code>&lt;title&gt;</code> tag is given with:</p>
                <div class="shadow">
                    <div class="syntax"><i>HTML&thinsp;/&thinsp;XHTML:</i> <span class="tag">&lt;title&gt;</span> ... <span class="tag">&lt;/title&gt;</span></div>
                </div>
                <p>The example below shows the <code>&lt;title&gt;</code> tag in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabb0c4.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<!DOCTYPE html>
<html>
<head>
    <title>A simple HTML document</title>
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
                <p>The <code>&lt;title&gt;</code> tag doesn't have any specific attribute.</p>
                <hr />
                <h2>Global Attributes</h2>
                <p>Like all other HTML tags, the <code>&lt;title&gt;</code> tag supports the <a href="htl_global-attributes.php">global attributes in HTML5</a>.</p>
                <hr />
                <h2>Event Attributes</h2>
                <p>The <code>&lt;title&gt;</code> tag also supports the <a href="htl_event-attributes.php">event attributes in HTML5</a>.</p>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>&lt;title&gt;</code> tag is supported in all major modern browsers.</p>
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
                <p>See tutorial on: <a href="../des-html/ht_head.php">HTML Head</a>.</p>
                <p>Related tags: <code><a href="ht_ht_tag.php">&lt;html&gt;</a></code>, <code><a href="ht_head-tag.php">&lt;head&gt;</a></code>.</p> 
                <div class="bottom-link clearfix">
                    <a href="htl_time-tag.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="ht_tr-tag.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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