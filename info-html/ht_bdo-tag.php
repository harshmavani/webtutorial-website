
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="HTML bdo Tag">
      <meta name="keywords" content="html,html5,HTML bdo Tag">
	  <meta name="author" content="webschooltoday.com">
    <title>HTML bdo Tag - WebSchool Today</title>
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">HTML bdo Tag</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>HTML <code>&lt;bdo&gt;</code> Tag</h1>
                <p class="topic">Topic: <a href="htl_tags.php">HTML5 Tags Reference</a><span class="topic-nav"><a href="htl_bdi-tag.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="ht_big-tag.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>&lt;bdo&gt;</code> (short for bidirectional override) tag is used to override the current text direction.</p>
                <p>You must specify the <code>dir</code> attribute on this element. This mandatory attribute specifies the base direction of the element's text content, which overrides the inherent directionality of characters as defined in <a href="https://www.w3.org/TR/html4/references.php#ref-UNICODE" rel="nofollow" target="_blank">[UNICODE]</a>.</p>
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
                            <td>HTML 4, 4.01, 5</td>
                        </tr>
                    </table>
                </div>
                <h2>Syntax</h2>
                <p>The basic syntax of the <code>&lt;bdo&gt;</code> tag is given with:</p>
                <div class="shadow">
                    <div class="syntax"><i>HTML&thinsp;/&thinsp;XHTML:</i> <span class="tag">&lt;bdo <span class="attribute">dir</span>="<span class="attribute-value">ltr</span>|<span class="attribute-value">rtl</span>"&gt;</span> ... <span class="tag">&lt;/bdo&gt;</span></div>
                </div>
                <p>The example below shows the <code>&lt;bdo&gt;</code> tag in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab7826.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<p>The sequence "1-2-3-4-5" was reversed as: <bdo dir="rtl">1-2-3-4-5</bdo></p>

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
                <p>The following table shows the attributes that are specific to the <code>&lt;bdo&gt;</code> tag.</p>
                <div class="shadow">
                    <table class="data">
                        <tr>
                            <th>Attribute</th>
                            <th style="width:50px;">Value</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td><code>dir</code></td>
                            <td><code>ltr<br />rtl</code></td>
                            <td>Override the current directionality of text inside the <code>&lt;bdo&gt;</code> element, with the value <code>ltr</code> to specify a left-to-right override and <code>rtl</code> to specify a right-to-left override.</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Global Attributes</h2>
                <p>Like all other HTML tags, the <code>&lt;bdo&gt;</code> tag supports the <a href="htl_global-attributes.php">global attributes in HTML5</a>.</p>
                <hr />
                <h2>Event Attributes</h2>
                <p>The <code>&lt;bdo&gt;</code> tag also supports the <a href="htl_event-attributes.php">event attributes in HTML5</a>.</p>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>&lt;bdo&gt;</code> tag is supported in all major modern browsers.</p>
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
                                        <li>Internet Explorer <span>5+</span></li>
                                        <li>Apple Safari <span>1+</span></li>
                                        <li>Opera <span>7+</span></li>
                                    </ul>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <hr />
                <h2>Further Reading</h2>
                <p>See tutorial on: <a href="../des-html/ht_text-formatting.php">HTML Text Formatting</a>.</p>
                <div class="bottom-link clearfix">
                    <a href="htl_bdi-tag.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="ht_big-tag.php" class="next-page-bottom" style="float:right">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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