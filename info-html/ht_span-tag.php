
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="How to Create Dropdown Menu with Bootstrap 4">
      <meta name="keywords" content="html,html5,HTML span Tag">
	  <meta name="author" content="webschooltoday.com">
    <title>HTML span Tag - WebSchool Today</title>
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">HTML span Tag</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>HTML <code>&lt;span&gt;</code> Tag</h1>
                <p class="topic">Topic: <a href="htl_tags.php">HTML5 Tags Reference</a><span class="topic-nav"><a href="htl_source-tag.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="ht_strike-tag.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>	
                <p>The <code>&lt;span&gt;</code> tag is generic inline container for phrasing content, which has no default rendering or meaning. The <code>&lt;span&gt;</code> tag is extensively used to define the structural sections of a document and to layout a web page using CSS.</p>
                <p>The following table summarizes the usages context and the version history of this tag.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Placement:</th>
                            <td>Inline</td>
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
                            <td>HTML 4, 4.01, 5</td>
                        </tr>
                    </table>
                </div>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>    
                        <div class="note-box"     style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> The <code>&lt;span&gt;</code> is very much like a <code><a href="ht_div-tag.php">&lt;div&gt;</a></code> element; both elements don't convey any meaning about its contents and also doesn't provide styling, or any other visual change. But <code>&lt;div&gt;</code> is a <a href="../des-css/css-visual-formatting.php#block-level">block-level</a> element while <code>&lt;span&gt;</code> is an <a href="../des-css/css-visual-formatting.php#inline-level">inline-level</a> element.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Syntax</h2>
                <p>The basic syntax of the <code>&lt;span&gt;</code> tag is given with:</p>
                <div class="shadow">
                    <div class="syntax"><i>HTML&thinsp;/&thinsp;XHTML:</i> <span class="tag">&lt;span&gt;</span> ... <span class="tag">&lt;/span&gt;</span></div>
                </div>
                <p>The example below shows the <code>&lt;span&gt;</code> tag in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab8973.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<p>Here is some <span style="color:red;">different</span> text.</p>
<p>Read the <span class="important">Notes</span> carefully.</p>

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
                        <p><strong>Important:</strong> The <code>&lt;span&gt;</code> element is the most useful inline element for associating the styles and scripts with the content (using the <code>class</code> or <code>id</code> attributes), since this element has no default rendering or meaning.</p>
                        </div>
                    </div>
                </div>
                <hr />	
                <h2>Tag-Specific Attributes</h2>
                <p>The <code>&lt;span&gt;</code> tag doesn't have any specific attribute.</p>
                <hr />
                <h2>Global Attributes</h2>
                <p>Like all other HTML tags, the <code>&lt;span&gt;</code> tag supports the <a href="htl_global-attributes.php">global attributes in HTML5</a>.</p>
                <hr />
                <h2>Event Attributes</h2>
                <p>The <code>&lt;span&gt;</code> tag also supports the <a href="htl_event-attributes.php">event attributes in HTML5</a>.</p>
                <hr />	
                <h2>Browser Compatibility</h2>
                <p>The <code>&lt;span&gt;</code> tag is supported in all major modern browsers.</p>
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
                <p>See tutorial on: <a href="../des-html/ht_layout.php">HTML Layout</a>.</p>
                <p>Related tag: <code><a href="ht_div-tag.php">&lt;div&gt;</a></code>.</p>
                <div class="bottom-link clearfix">
                    <a href="htl_source-tag.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="ht_strike-tag.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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