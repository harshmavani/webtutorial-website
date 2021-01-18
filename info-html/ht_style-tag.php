
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="HTML style Tag">
      <meta name="keywords" content="html,html5,HTML style Tag">
	  <meta name="author" content="webschooltoday.com">
    <title>HTML style Tag - WebSchool Today</title>
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">HTML style Tag</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>HTML <code>&lt;style&gt;</code> Tag</h1>
                <p class="topic">Topic: <a href="htl_tags.php">HTML5 Tags Reference</a><span class="topic-nav"><a href="ht_strong-tag.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="ht_sub-tag.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>	
                <p>The <code>&lt;style&gt;</code> tag is used to define style rules at a page-level (i.e. within the document). The style rules inside the <code>&lt;style&gt;</code> element tell a browser how to present the document. You can place any number of style elements in a document, but it must appear inside the head section (i.e. <code><a href="ht_head-tag.php">&lt;head&gt;</a></code> element). Learn more about <a href="../des-css/index.php">style rules</a>.</p>
                <p>The following table summarizes the usages context and the version history of this tag.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Parent:</th>
                            <td><code><a href="ht_head-tag.php">&lt;head&gt;</a></code></td>
                        </tr>
                        <tr>
                            <th>Content:</th>
                            <td><a href="../des-css/index.php">Style information</a></td>
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
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"     style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> However the <code>&lt;style&gt;</code> element is a good method of experimenting with style sheets, but it has disadvantages. The best way to attach style sheets to your documents is with <a href="../des-html/ht_styles.php#external-style-sheet">external style sheets</a>.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Syntax</h2>
                <p>The basic syntax of the <code>&lt;style&gt;</code> tag is given with:</p>
                <div class="shadow">
                    <div class="syntax"><i>HTML&thinsp;/&thinsp;XHTML:</i> <span class="tag">&lt;style <span class="attribute">type</span>="<span class="attribute-value">text/css</span>"&gt;</span> ... <span class="tag">&lt;/style&gt;</span></div>
                </div>
                <p>The example below shows the <code>&lt;style&gt;</code> tag in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab574a.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<head>
    <title>Presentation Demo<title>
    <style type="text/css">
        h1 {color: #666;}
    </style>
</head>

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
                <p>The following table shows the attributes that are specific to the <code>&lt;style&gt;</code> tag.</p>
                <div class="shadow space">
                    <table class="data">
                        <tr>
                            <th>Attribute</th>
                            <th style="width:100px;">Value</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td><code>type</code></td>
                            <td><i>content-type</i></td>
                            <td>Specify the styling language which is generally <code>text/css</code>.</td>
                        </tr>
                        <tr>
                            <td><code>media</code></td>
                            <td><i><a href="../des-css/css-media-types.php">media-types</a></i></td>
                            <td>Specifies which media the styles apply to. The value can be a single media (e.g. <code>media="screen"</code>) or a comma-separated list (e.g. <code>media="screen, print"</code>).</td>
                        </tr>
						<tr>
                            <td><code>scoped</code></td>
                            <td><code>scoped</code></td>
                            <td>Specifies that the style applies only to its parent element, and that element's child nodes. If absent, the style applies to the whole document.</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Global Attributes</h2>
                <p>Like all other HTML tags, the <code>&lt;style&gt;</code> tag supports the <a href="htl_global-attributes.php">global attributes in HTML5</a>.</p>
                <hr />
                <h2>Event Attributes</h2>
                <p>The <code>&lt;style&gt;</code> tag also supports the <a href="htl_event-attributes.php">event attributes in HTML5</a>.</p>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>&lt;style&gt;</code> tag is supported in all major modern browsers.</p>
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
                                        <li>Internet Explorer <span>3+</span></li>
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
                <p>See tutorial on: <a href="../des-html/ht_styles.php">HTML Styles</a>, <a href="../des-css/index.php">CSS</a>.</p>
                <p>Related tag: <code><a href="ht_link-tag.php">&lt;link&gt;</a></code>.</p>
                <div class="bottom-link clearfix">
                    <a href="ht_strong-tag.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="ht_sub-tag.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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