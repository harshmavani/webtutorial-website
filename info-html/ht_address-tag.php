
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="HTML address Tag">
      <meta name="keywords" content="html,html5,HTML address Tag">
	  <meta name="author" content="webschooltoday.com">
    <title>HTML address Tag - WebSchool Today</title>
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">HTML address Tag</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>HTML <code>&lt;address&gt;</code> Tag</h1>
                <p class="topic">Topic: <a href="htl_tags.php">HTML5 Tags Reference</a><span class="topic-nav"><a href="ht_acronym-tag.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="ht_applet-tag.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>&lt;address&gt;</code> tag specifies the author's contact information.</p>
                <p>This element is used to mark up the contact details for the author or owner of the document, so that the reader may use these details to contact the document's owner. The <code>&lt;address&gt;</code> element often appears at the beginning or end of a document.</p>
                <p>The following table summarizes the usages context and the version history of this tag.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Placement:</th>
                            <td>Block</td>
                        </tr>
                        <tr>
                            <th>Content:</th>
                            <td><code><a href="ht_p-tag.php">&lt;p&gt;</a></code>, inline, and text</td>
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
                    <h3><em>Usage Notes</em></h3>
                    <ul>
                        <li>The address tag must not be used to represent arbitrary addresses (i.e. addresses that are not relevant to the contact information).</li>
                        <li>The address tag must not contain information other than contact information, like a publication date (which belongs in a <code><a href="htl_time-tag.php">&lt;time&gt;</a></code> tag). </li>
                        <li>Typically, the address tag should be included inside the <code><a href="htl_footer-tag.php">&lt;footer&gt;</a></code> section.</li>
                    </ul>
                </div>
                <hr />
                <h2>Syntax</h2>
                <p>The basic syntax of the <code>&lt;address&gt;</code> tag is given with:</p>
                <div class="shadow">
                    <div class="syntax"><i>HTML&thinsp;/&thinsp;XHTML:</i> <span class="tag">&lt;address&gt;</span> ... <span class="tag">&lt;/address&gt;</span></div>
                </div>
                <p>The example below shows the <code>&lt;address&gt;</code> tag in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabc564.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<footer>
    <address>
        <p><a href="https://www.w3.org/Consortium/contact-mit">MIT</a></p>
    </address>
</footer>

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
                            <p><strong>Read Carefully:</strong> Although the text content of the <code>&lt;address&gt;</code> element usually renders with the same default styling as the <code><a href="ht_i-tag.php">&lt;i&gt;</a></code> or <code><a href="ht_em-tag.php">&lt;em&gt;</a></code>, but it is more appropriate to use when dealing with contact information, as it conveys additional semantic information.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Tag-Specific Attributes</h2>
                <p>The <code>&lt;address&gt;</code> tag doesn't have any specific attribute.</p>
                <hr />
                <h2>Global Attributes</h2>
                <p>Like all other HTML tags, the <code>&lt;address&gt;</code> tag supports the <a href="htl_global-attributes.php">global attributes in HTML5</a>.</p>
                <hr />
                <h2>Event Attributes</h2>
                <p>The <code>&lt;address&gt;</code> tag also supports the <a href="htl_event-attributes.php">event attributes in HTML5</a>.</p>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>&lt;address&gt;</code> tag is supported in all major modern browsers.</p>
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
                                        <li>Opera <span>4+</span></li>
                                    </ul>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <hr />
                <h2>Further Reading</h2>
                <p>See tutorial on: <a href="../des-html/ht_text-formatting.php">HTML Text Formatting</a>.</p>
                <p>Related tag: <code><a href="ht_p-tag.php">&lt;p&gt;</a></code>, <code><a href="htl_footer-tag.php">&lt;footer&gt;</a></code>.</p>
                <div class="bottom-link clearfix">
                    <a href="ht_acronym-tag.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="ht_applet-tag.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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