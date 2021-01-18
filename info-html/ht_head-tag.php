
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="HTML head Tag">
      <meta name="keywords" content="html,html5">
	  <meta name="author" content="webschooltoday.com">
    <title>HTML head Tag - WebSchool Today</title>
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">HTML head Tag</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>HTML <code>&lt;head&gt;</code> Tag</h1>
                <p class="topic">Topic: <a href="htl_tags.php">HTML5 Tags Reference</a><span class="topic-nav"><a href="ht_frameset-tag.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="htl_header-tag.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>&lt;head&gt;</code> tag defines the head portion of the document that contains information about the document. The <code>&lt;head&gt;</code> element acts as a container for all other head elements such as <code>&lt;title&gt;</code>, <code>&lt;meta&gt;</code>, <code>&lt;link&gt;</code>, <code>&lt;style&gt;</code> etc.</p>
                <p>The following table summarizes the usages context and the version history of this tag.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Parent:</th>
                            <td><code><a href="ht_ht_tag.php">&lt;html&gt;</a></code></td>
                        </tr>
                        <tr>
                            <th>Content:</th>
                            <td><code><a href="ht_title-tag.php">&lt;title&gt;</a></code> (required), <code><a href="ht_link-tag.php">&lt;link&gt;</a></code>, <code><a href="ht_meta-tag.php">&lt;meta&gt;</a></code>, <code><a href="ht_style-tag.php">&lt;style&gt;</a></code>, <code><a href="ht_script-tag.php">&lt;script&gt;</a></code>, <code><a href="ht_base-tag.php">&lt;base&gt;</a></code>, <code><a href="ht_object-tag.php">&lt;object&gt;</a></code></td>
                        </tr>
                        <tr>
                            <th>Start/End Tag:</th>
                            <td>Start tag: <strong>optional</strong>, End tag: <strong>optional</strong></td>
                        </tr>
                        <tr>
                            <th>Version:</th>
                            <td>HTML 2, 3.2, 4, 4.01, 5</td>
                        </tr>
                    </table>
                </div>
             	<!--Tip Box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"  style="background-color:#fad28c"
>
                            <p><strong>Important:</strong> In an HTML document, the <code>&lt;head&gt;</code> element should be the very first element that appears after the opening <code><a href="ht_ht_tag.php">&lt;html&gt;</a></code> tag.</p>
                        </div>
                    </div>
                </div>
                <!--End:Tip Box-->
                <hr />
                <h2>Syntax</h2>
                <p>The basic syntax of the <code>&lt;head&gt;</code> tag is given with:</p>
                <div class="shadow">
                    <div class="syntax"><i>HTML&thinsp;/&thinsp;XHTML:</i> <br /><span class="tag">&lt;head&gt;</span><br />&nbsp;&nbsp;&nbsp;&nbsp;<span class="tag">&lt;title&gt;</span>&lt;!--Document title--&gt;<span class="tag">&lt;/title&gt;</span><br />
                <span class="tag">&lt;/head&gt;</span>
                </div>
                </div>
                <p>The example below shows the <code>&lt;head&gt;</code> tag in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab2666.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<!DOCTYPE html>
<html>
<head>
    <title><!--Document title--></title>
</head>
<body>
    <!--Document body-->
</body>
</html>

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
                <p>The following table shows the attributes that are specific to the <code>&lt;head&gt;</code> tag.</p>
                <div class="shadow space">
                    <table class="data">
                        <tr>
                            <th>Attribute</th>
                            <th>Value</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td><code>profile</code></td>
                            <td><i>URL</i></td>
                            <td><a href="../definitions.php#obsolete" class="obsolete">Obsolete</a> Specifies the location of one or more meta data profiles, separated by white space.</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Global Attributes</h2>
                <p>Like all other HTML tags, the <code>&lt;head&gt;</code> tag supports the <a href="htl_global-attributes.php">global attributes in HTML5</a>.</p>
                <hr />
                <h2>Event Attributes</h2>
                <p>The <code>&lt;head&gt;</code> tag also supports the <a href="htl_event-attributes.php">event attributes in HTML5</a>.</p>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>&lt;head&gt;</code> tag is supported in all major modern browsers.</p>
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
                <p>See tutorial on: <a href="../des-html/ht_head.php">HTML Head</a>.</p>
                <p>Related tags: <code><a href="ht_ht_tag.php">&lt;html&gt;</a></code>, <code><a href="ht_body-tag.php">&lt;body&gt;</a></code>.</p>
                <div class="bottom-link clearfix">
                    <a href="ht_frameset-tag.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="htl_header-tag.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
 Page</a>
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