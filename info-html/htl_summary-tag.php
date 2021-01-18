
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="HTML5 summary Tag">
      <meta name="keywords" content="html,html5,HTML5 summary Tag">
	  <meta name="author" content="webschooltoday.com">
    <title>HTML5 summary Tag - WebSchool Today</title>
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">HTML5 summary Tag</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
            	<h1>HTML5 <code>&lt;summary&gt;</code> Tag</h1>
                <p class="topic">Topic: <a href="htl_tags.php">HTML5 Tags Reference</a><span class="topic-nav"><a href="ht_sub-tag.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="ht_sup-tag.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>&lt;summary&gt;</code> element defines a summary for the <code><a href="htl_details-tag.php">&lt;details&gt;</a></code> element.</p>
                <p>The <code>&lt;summary&gt;</code> element is used along with the <code>&lt;details&gt;</code> element to provide a summary visible to the user. When the user clicks the summary, the additional information or content placed inside the <code>&lt;details&gt;</code> element which was previously hidden becomes visible.</p>
                <p>The following table summarizes the usages context and the version history of this tag.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Placement:</th>
                            <td>Block</td>
                        </tr>
                        <tr>
                            <th>Permitted Parent:</th>
                            <td><code><a href="htl_details-tag.php">&lt;details&gt;</a></code></td>
                        </tr>
                        <tr>
                            <th>Content:</th>
                            <td>Inline, and text</td>
                        </tr>
                        <tr>
                            <th>Start/End Tag:</th>
                            <td>Start tag: <strong>required</strong>, End tag: <strong>required</strong></td>
                        </tr>
                        <tr>
                            <th>Version:</th>
                            <td><span class="htl_badge"></span> New in HTML5</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Syntax</h2>
                <p>The basic syntax of the <code>&lt;summary&gt;</code> tag is given with:</p>
                <div class="shadow">
                    <div class="syntax"><i>HTML&thinsp;/&thinsp;XHTML:</i> <span class="tag">&lt;summary&gt;</span> ... <span class="tag">&lt;/summary&gt;</span></div>
                </div>
                <p>The example below shows the <code>&lt;summary&gt;</code> tag in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab05cb.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<details>
    <summary>What is HTML?</summary>
    <p>HTML is a markup language for describing the structure of web pages.</p>
</details>

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
                        <div class="note-box"     style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> The <code>&lt;summary&gt;</code> element should be the first child element of the <code><a href="htl_details-tag.php">&lt;details&gt;</a></code> element. If it is omitted or not specified the heading "Details" will be used.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Tag-Specific Attributes</h2>
                <p>The <code>&lt;summary&gt;</code> tag doesn't have any specific attribute.</p>
                <hr />
                <h2>Global Attributes</h2>
                <p>Like all other HTML tags, the <code>&lt;summary&gt;</code> tag supports the <a href="htl_global-attributes.php">global attributes in HTML5</a>.</p>
                <hr />
                <h2>Event Attributes</h2>
                <p>The <code>&lt;summary&gt;</code> tag also supports the <a href="htl_event-attributes.php">event attributes in HTML5</a>.</p>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>&lt;summary&gt;</code> tag is supported in all major modern browsers.</p>
                <div class="shadow">
                    <div class="support">
                        <table>
                            <tr>
                                <td><img src="../assets/images/browser.jpg" alt="Browsers Icon" /></td>
                                <td>
                                    <h2>Basic Support&mdash;</h2>
                                    <ul>
                                        <li>Firefox <span class="red" title="Not supported">&times;</span></li>
                                        <li>Google Chrome <span>12+</span></li>
                                        <li>Internet Explorer <span class="red" title="Not supported">&times;</span></li>
                                        <li>Apple Safari <span>6+</span></li>
                                        <li>Opera <span>15+</span></li>
                                    </ul>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <hr />
                <h2>Further Reading</h2>
                <p>See tutorial on: <a href="../des-html/ht_headings.php">HTML Headings</a>.</p>
                <p>Related tags: <code><a href="htl_details-tag.php">&lt;details&gt;</a></code></p>
                <div class="bottom-link clearfix">
                    <a href="ht_sub-tag.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="ht_sup-tag.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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