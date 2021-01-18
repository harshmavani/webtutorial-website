
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="HTML noscript Tag">
      <meta name="keywords" content="html,html5,HTML noscript Tag">
	  <meta name="author" content="webschooltoday.com">
    <title>HTML noscript Tag - WebSchool Today</title>
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">HTML noscript Tag</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>HTML <code>&lt;noscript&gt;</code> Tag</h1>
                <p class="topic">Topic: <a href="htl_tags.php">HTML5 Tags Reference</a><span class="topic-nav"><a href="ht_noframes-tag.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="ht_object-tag.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>&lt;noscript&gt;</code> tag is used to provide an alternate content for users that have disabled scripts in their browser or the browser doesn't recognize the scripting language, or have a browser that doesn't support <a href="../definitions.php#client-side">client-side</a> scripting.</p>
                <p>The following table summarizes the usages context and the version history of this tag.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Placement:</th>
                            <td>Block</td>
                        </tr>
                        <tr>
                            <th>Content:</th>
                            <td>Block, inline, and text when it isn't a descendant of the <code><a href="ht_head-tag.php">&lt;head&gt;</a></code> element; Otherwise <code><a href="ht_link-tag.php">&lt;link&gt;</a></code>, <code><a href="ht_style-tag.php">&lt;style&gt;</a></code>, and <code><a href="ht_meta-tag.php">&lt;meta&gt;</a></code> elements.</td>
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
                <div class="usage">
                    <h3><em>Usage Notes</em></h3>
                    <p>The content inside the <code>&lt;noscript&gt;</code> element will only be displayed by a browser if:</p>
                    <ul>
                        <li>The browser is configured not to evaluate scripts.</li>
                        <li>The browser doesn't support the scripting language invoked by a <code>&lt;script&gt;</code> element earlier in the document.</li>
                        <li>Or, the browser doesn't support <a href="../definitions.php#client-side">client-side</a> scripts.</li>
                    </ul>
                </div>
                <hr />
                <h2>Syntax</h2>
                <p>The basic syntax of the <code>&lt;noscript&gt;</code> tag is given with:</p>
                <div class="shadow">
                    <div class="syntax"><i>HTML&thinsp;/&thinsp;XHTML:</i> <span class="tag">&lt;noscript&gt;</span> ... <span class="tag">&lt;/noscript&gt;</span></div>
                </div>
                <p>The example below shows the <code>&lt;noscript&gt;</code> tag in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabdf57.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<script type="text/javascript">
    document.write("Hello World!")
</script>
<noscript>Your browser does not support JavaScript!</noscript>

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
                <p>The <code>&lt;noscript&gt;</code> tag doesn't have any specific attribute.</p>
                <hr />
                <h2>Global Attributes</h2>
                <p>Like all other HTML tags, the <code>&lt;noscript&gt;</code> tag supports the <a href="htl_global-attributes.php">global attributes in HTML5</a>.</p>
                <hr />
                <h2>Event Attributes</h2>
                <p>The <code>&lt;noscript&gt;</code> tag also supports the <a href="htl_event-attributes.php">event attributes in HTML5</a>.</p>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>&lt;noscript&gt;</code> tag is supported in all major modern browsers.</p>
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
                <p>See tutorial on: <a href="../des-html/ht_scripts.php">HTML Scripts</a>.</p>
                <p>Related tag: <code><a href="ht_script-tag.php">&lt;script&gt;</a></code>.</p>
                <div class="bottom-link clearfix">
                    <a href="ht_noframes-tag.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="ht_object-tag.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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