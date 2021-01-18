
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="HTML dt Tag">
      <meta name="keywords" content="html,html5,HTML dt Tag">
	  <meta name="author" content="webschooltoday.com">
    <title>HTML dt Tag - WebSchool Today</title>
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">HTML dt Tag</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>HTML <code>&lt;dt&gt;</code> Tag</h1>
                <p class="topic">Topic: <a href="htl_tags.php">HTML5 Tags Reference</a><span class="topic-nav"><a href="ht_dl-tag.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="ht_em-tag.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>&lt;dt&gt;</code> (short for <em>definition term</em>) tag represent a term or an item in a definition list.</p>
                <p>The following table summarizes the usages context and the version history of this tag.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Parent:</th>
                            <td><code><a href="ht_dl-tag.php">&lt;dl&gt;</a></code></td>
                        </tr>
                        <tr>
                            <th>Content:</th>
                            <td>Inline and text</td>
                        </tr>
                        <tr>
                            <th>Start/End Tag:</th>
                            <td>Start tag: <strong>required</strong>, End tag: <strong>optional</strong></td>
                        </tr>
                        <tr>
                            <th>Version:</th>
                            <td>HTML 2, 3.2, 4, 4.01, 5</td>
                        </tr>
                    </table>
                </div>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                        <p><strong>Read Carefully:</strong> The <code>&lt;dt&gt;</code> element can only occur inside the definition list i.e. <code><a href="ht_dl-tag.php">&lt;dl&gt;</a></code> element and is restricted to <a href="../des-css/css-visual-formatting.php#inline-level">inline-level</a> content i.e. can't contain any <a href="../des-css/css-visual-formatting.php#block-level">block-level</a> elements. It is usually followed by a <code><a href="ht_dd-tag.php">&lt;dd&gt;</a></code> element.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Syntax</h2>
                <p>The basic syntax of the <code>&lt;dt&gt;</code> tag is given with:</p>
                <div class="shadow">
                    <div class="syntax"><i>HTML&thinsp;/&thinsp;XHTML:</i> <span class="tag">&lt;dt&gt;</span> ... <span class="tag">&lt;/dt&gt;</span></div>
                </div>
                <p>The example below shows the <code>&lt;dt&gt;</code> tag in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabbc2a.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                       
	<textarea id="code1">

<dl>
    <dt>term1</dt>
    <dd>– definition1</dd>
    <dt>term2</dt>
    <dd>– definition2</dd>
</dl>

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
                <p>The <code>&lt;dt&gt;</code> tag doesn't have any specific attribute.</p>
                <hr />
                <h2>Global Attributes</h2>
                <p>Like all other HTML tags, the <code>&lt;dt&gt;</code> tag supports the <a href="htl_global-attributes.php">global attributes in HTML5</a>.</p>
                <hr />
                <h2>Event Attributes</h2>
                <p>The <code>&lt;dt&gt;</code> tag also supports the <a href="htl_event-attributes.php">event attributes in HTML5</a>.</p>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>&lt;dt&gt;</code> tag is supported in all major modern browsers.</p>
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
                <p>See tutorial on: <a href="../des-html/ht_lists.php">HTML Lists</a>.</p>
                <p>Related tags: <code><a href="ht_dl-tag.php">&lt;dl&gt;</a></code>, <code><a href="ht_dd-tag.php">&lt;dd&gt;</a></code>.</p>
                <div class="bottom-link clearfix">
                    <a href="ht_dl-tag.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="ht_em-tag.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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