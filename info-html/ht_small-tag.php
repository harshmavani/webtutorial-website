
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="HTML small Tag">
      <meta name="keywords" content="html,html5,HTML small Tag">
	  <meta name="author" content="webschooltoday.com">
    <title>HTML small Tag - WebSchool Today</title>
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">HTML small Tag</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>HTML <code>&lt;small&gt;</code> Tag</h1>
                <p class="topic">Topic: <a href="htl_tags.php">HTML5 Tags Reference</a><span class="topic-nav"><a href="ht_select-tag.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="htl_source-tag.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>&lt;small&gt;</code> tag decreases the text font size by one size smaller than a document's base font size; for example, from medium to small, or from x-large to large. Each nested <code>&lt;small&gt;</code> element will further decrease the size by one size smaller.</p>
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
                            <td>HTML 3.2, 4, 4.01, 5</td>
                        </tr>
                    </table>
                </div>
                <div class="usage">
                    <h3><em>Usage Notes</em></h3>
                    <ul>
                        <li><p>The <code>&lt;small&gt;</code> tag is only intended for short runs of text. It should not be used for extended spans of text, such as multiple paragraphs, or sections of text.</p></li>
                        <li><p>It doesn't convey any semantic information about the enclosed text &mdash; it simply renders the text in a "small" font.</p></li>
                        <li><p>However, this element is not deprecated and also valid in HTML5, but is used less frequently now, as there are better methods for controlling text size such as CSS <code><a href="../info-css/css-font-size-property.php">font-size</a></code> property.</p></li>
                    </ul>
                </div>
                <hr />
                <h2>Syntax</h2>
                <p>The basic syntax of the <code>&lt;small&gt;</code> tag is given with:</p>
                <div class="shadow">
                    <div class="syntax"><i>HTML&thinsp;/&thinsp;XHTML:</i> <span class="tag">&lt;small&gt;</span> ... <span class="tag">&lt;/small&gt;</span></div>
                </div>
                <p>The example below shows the <code>&lt;small&gt;</code> tag in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab0b1c.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<p>It's <small>small <small>smaller <small>smallest</small></small></small></p>
<!--Alternative-->
<p style="font-size:small;">This is a sample text.</p>

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
                <p>The <code>&lt;small&gt;</code> tag doesn't have any specific attribute.</p>
                <hr />
                <h2>Global Attributes</h2>
                <p>Like all other HTML tags, the <code>&lt;small&gt;</code> tag supports the <a href="htl_global-attributes.php">global attributes in HTML5</a>.</p>
                <hr />
                <h2>Event Attributes</h2>
                <p>The <code>&lt;small&gt;</code> tag also supports the <a href="htl_event-attributes.php">event attributes in HTML5</a>.</p>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>&lt;small&gt;</code> tag is supported in all major modern browsers.</p>
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
                <p>See tutorial on: <a href="../des-html/ht_text-formatting.php">HTML Text Formatting</a>, <a href="../des-css/css-fonts.php">CSS Fonts</a>.</p>
                <p>Related tag: <code><a href="ht_big-tag.php">&lt;big&gt;</a></code>.</p>
                <div class="bottom-link clearfix">
                    <a href="ht_select-tag.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="htl_source-tag.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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