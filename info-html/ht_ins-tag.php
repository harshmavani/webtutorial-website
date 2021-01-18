
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="HTML ins Tag">
      <meta name="keywords" content="html,html5,HTML ins Tag">
	  <meta name="author" content="webschooltoday.com">
    <title>HTML ins Tag - WebSchool Today</title>
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">HTML ins Tag</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>HTML <code>&lt;ins&gt;</code> Tag</h1>
                <p class="topic">Topic: <a href="htl_tags.php">HTML5 Tags Reference</a><span class="topic-nav"><a href="ht_input-tag.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="ht_kbd-tag.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>&lt;ins&gt;</code> (short for <em>inserted</em>) tag specifies a block of inserted text. This tag is typically used to markup a range of text that has been added to the document. Browsers will normally render the inserted text as underlined text, however you can overwrite this using the CSS <code><a href="../info-css/css-text-decoration-property.php">text-decoration</a></code> property.</p>
                <p>The following table summarizes the usages context and the version history of this tag.</p>
                <div class="shadow space">
                    <table class="data description">
                        <tr>
                            <th>Placement:</th>
                            <td>Block or inline, depending on the content</td>
                        </tr>
                        <tr>
                            <th>Content:</th>
                            <td>Any block, inline, and text (but cannot contain block content when used as an inline element)</td>
                        </tr>
                        <tr>
                            <th>Start/End Tag:</th>
                            <td>Start tag: <strong>required</strong>, End tag: <strong>required</strong></td>
                        </tr>
                        <tr>
                            <th>Version:</th>
                            <td>HTML 4, 4.01, 5</td>
                        </tr>
                    </table>
                </div>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"  style="background-color:#fad28c"
>
                        <p><strong>Important:</strong> Also look at the counterpart of <code>&lt;ins&gt;</code> tag; the <code><a href="ht_del-tag.php">&lt;del&gt;</a></code> tag, which is used to markup the deleted text in a document. Use these elements to markup updates and modifications in your document.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Syntax</h2>
                <p>The basic syntax of the <code>&lt;ins&gt;</code> tag is given with:</p>
                <div class="shadow">
                    <div class="syntax"><i>HTML&thinsp;/&thinsp;XHTML:</i> <span class="tag">&lt;ins <span class="attribute">datetime</span>="<span class="attribute-value"><i>datetime</i></span>"&gt;</span> ... <span class="tag">&lt;/ins&gt;</span></div>
                </div>
                <p>The example below shows the <code>&lt;ins&gt;</code> tag in action.</p>
                <div class="example">
                        <div class="my_codeb">
                            <div class="my_codeb-title"><h4>Example</h4><a href="../codelab35e7.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                            <textarea id="code1">

<h1>To Do</h1>
<ul>
    <li>Buy some cookies</li>
    <li><ins>Do some cleaning</ins></li>
    <li><del>Relaxation time</del></li>
    <li><ins>Visit a doctor</ins></li>
</ul>

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
                <p>The following table shows the attributes that are specific to the <code>&lt;ins&gt;</code> tag.</p>
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
                            <td>Specifies the URL of the document or message which explains the reason for the change in content.</td>
                        </tr>
                        <tr>
                            <td><code>datetime</code></td>
                            <td><i>YYYY-MM-DDThh:mm:ssTZD</i></td>
                            <td>Specifies the date and time when the change was made.</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Global Attributes</h2>
                <p>Like all other HTML tags, the <code>&lt;ins&gt;</code> tag supports the <a href="htl_global-attributes.php">global attributes in HTML5</a>.</p>
                <hr />
                <h2>Event Attributes</h2>
                <p>The <code>&lt;ins&gt;</code> tag also supports the <a href="htl_event-attributes.php">event attributes in HTML5</a>.</p>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>&lt;ins&gt;</code> tag is supported in all major modern browsers.</p>
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
                <p>Related tag: <code><a href="ht_del-tag.php">&lt;del&gt;</a></code>.</p>
                <div class="bottom-link clearfix">
                    <a href="ht_input-tag.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="ht_kbd-tag.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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