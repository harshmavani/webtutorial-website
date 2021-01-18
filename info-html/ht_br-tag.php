
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="HTML br Tag">
      <meta name="keywords" content="html,html5,HTML br Tag">
	  <meta name="author" content="webschooltoday.com">
    <title>HTML br Tag - WebSchool Today</title>
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">HTML br Tag</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>HTML <code>&lt;br&gt;</code> Tag</h1>
                <p class="topic">Topic: <a href="htl_tags.php">HTML5 Tags Reference</a><span class="topic-nav"><a href="ht_body-tag.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="ht_button-tag.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>&lt;br&gt;</code> tag produces a line break in text.</p>
                <p>The following table summarizes the usages context and the version history of this tag.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Placement:</th>
                            <td>Inline</td>
                        </tr>
                        <tr>
                            <th>Content:</th>
                            <td>None. It is an <a href="../des-html/ht_elements.php#empty-elements">empty element</a>.</td>
                        </tr>
                        <tr>
                            <th>Start/End Tag:</th>
                            <td>Start tag: <strong>required</strong>, End tag: <strong>forbidden</strong></td>
                        </tr>
                        <tr>
                            <th>Version:</th>
                            <td>HTML 2, 3.2, 4, 4.01, 5</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Syntax</h2>
                <p>The basic syntax of the <code>&lt;br&gt;</code> tag is given with:</p>
                <div class="shadow">
                    <div class="syntax"><i>HTML:</i><span class="tag">&lt;br&gt;</span>; <i>XHTML:</i><span class="tag">&lt;br /&gt;</span></div>
                </div>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                        <p><strong>Read Carefully:</strong> In HTML, the end tag for the <code>&lt;br&gt;</code> tag is forbidden. In XHTML, the <code>&lt;br&gt;</code> tag must be closed with a trailing slash like this: <code>&lt;br /&gt;</code>. See <a href="../des-html/ht_elements.php#empty-elements">empty elements</a>.</p>
                        </div>
                    </div>
                </div>
                <p>The example below shows the <code>&lt;br&gt;</code> tag in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab5bc3.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<p>This paragraph contains <br>a line break.</p>
<p>This paragraph contains <br>multiple <br>line breaks.</p>

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
                            <p><strong>Important:</strong> The <code>&lt;br&gt;</code> tag should be used only for line breaks that are actually part of the content e.g. line breaks inside poems or addresses.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Tag-Specific Attributes</h2>
                <p>The following table shows the attributes that are specific to the <code>&lt;br&gt;</code> tag.</p>
                <div class="shadow">
                    <table class="data">
                        <tr>
                            <th>Attribute</th>
                            <th style="width:70px;">Value</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td><code>clear</code></td>
                            <td><code>none<br />left<br />right<br />all</code></td>
                            <td><a href="../definitions.php#obsolete" class="obsolete" title="Not supported in HTML5">Obsolete</a> Specifies where the next line should appear after the line break caused by this element.</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Global Attributes</h2>
                <p>Like all other HTML tags, the <code>&lt;br&gt;</code> tag supports the <a href="htl_global-attributes.php">global attributes in HTML5</a>.</p>
                <hr />
                <h2>Event Attributes</h2>
                <p>The <code>&lt;br&gt;</code> tag also supports the <a href="htl_event-attributes.php">event attributes in HTML5</a>.</p>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>&lt;br&gt;</code> tag is supported in all major modern browsers.</p>
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
                <p>See tutorial on: <a href="../des-html/ht_paragraphs.php">HTML Paragraph</a>.</p>
                <p>Related tag: <code><a href="ht_hr-tag.php">&lt;hr&gt;</a></code>.</p>
                <div class="bottom-link clearfix">
                    <a href="ht_body-tag.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="ht_button-tag.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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