
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="HTML b Tag">
      <meta name="keywords" content="html,html5,HTML b Tag">
	  <meta name="author" content="webschooltoday.com">
    <title>HTML b Tag - WebSchool Today</title>
    <?php include "../links.php" ?>
</head>
<body>
<div>
<div class="tital">HTML b Tag</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

    <?php include "info_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>

                <h1>HTML <code>&lt;b&gt;</code> Tag</h1>
                <p class="topic">Topic: <a href="htl_tags.php">HTML5 Tags Reference</a><span class="topic-nav"><a href="htl_audio-tag.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="ht_base-tag.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>&lt;b&gt;</code> (short for bold) tag displays text in a bold style. This element typically renders the text it encloses in a bold typeface without conveying any extra importance.</p>
                <p>The following table summarizes the usages context and the version history of this tag.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Placement:</th>
                            <td>Inline</td>
                        </tr>
                        <tr>
                            <th>Content:</th>
                            <td>Inline and text</td>
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
                <hr />
                <h2>Syntax</h2>
                <p>The basic syntax of the <code>&lt;b&gt;</code> tag is given with:</p>
                <div class="shadow">
                    <div class="syntax"><i>HTML&thinsp;/&thinsp;XHTML:</i> <span class="tag">&lt;b&gt;</span> ... <span class="tag">&lt;/b&gt;</span></div>
                </div>
                <p>The example below shows the <code>&lt;b&gt;</code> tag in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab.php" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

     <li><code><span class="tag"><p></span>This <span class="tag"><b></span>sentence<span class="tag"></b></span> contains some <span class="tag"><b></span>bold<span class="tag"></b></span> words.<span class="tag"></p></span></code></li>
    <li><code><span class="tag"><p></span>Here are <span class="tag"><b></span>some<span class="tag"></b></span>  more <span class="tag"><b></span>bold<span class="tag"></b></span> words.<span class="tag"></p></span></code></li>

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
                <p>The <code>&lt;b&gt;</code> tag doesn't have any specific attribute.</p>
                <hr />
                <h2>Global Attributes</h2>
                <p>Like all other HTML tags, the <code>&lt;b&gt;</code> tag supports the <a href="htl_global-attributes.php">global attributes in HTML5</a>.</p>
                <hr />
                <h2>Event Attributes</h2>
                <p>The <code>&lt;b&gt;</code> tag also supports the <a href="htl_event-attributes.php">event attributes in HTML5</a>.</p>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>&lt;b&gt;</code> tag is supported in all major modern browsers.</p>
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
                <h2>Difference between <code>&lt;b&gt;</code> and <code><a href="ht_strong-tag.php">&lt;strong&gt;</a></code> element</h2>
                <p>Both elements renders the text it encloses in a bold typeface, but the <code><a href="ht_strong-tag.php">&lt;strong&gt;</a></code> element which represents text of certain importance, the <code>&lt;b&gt;</code> element doesn't convey any semantic information about the contained text.</p>
                <p>It is strongly recommended to avoid the use of <code>&lt;b&gt;</code> element; using CSS property <code><a href="../info-css/css-font-weight-property.php">font-weight</a></code> with '<code>bold</code>' value would be a better choice for making the text bold.</p>
                <hr />
                <h2>Further Reading</h2>
                <p>See tutorial on: <a href="../des-html/ht_text-formatting.php">HTML Text Formatting</a>.</p>
                <p>Related tag: <code><a href="ht_strong-tag.php">&lt;strong&gt;</a></code>.</p>
                <div class="bottom-link clearfix">
                    <a href="htl_audio-tag.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="ht_base-tag.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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