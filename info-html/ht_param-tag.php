
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="HTML param Tag">
      <meta name="keywords" content="html,html5,HTML param Tag">
	  <meta name="author" content="webschooltoday.com">
    <title>HTML param Tag - WebSchool Today</title>
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">HTML param Tag</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>HTML <code>&lt;param&gt;</code> Tag</h1>
                <p class="topic">Topic: <a href="htl_tags.php">HTML5 Tags Reference</a><span class="topic-nav"><a href="ht_p-tag.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="ht_pre-tag.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>&lt;param&gt;</code> (short for parameter) tag defines parameters to be passed to an embedded object at run-time defined by the <code><a href="ht_object-tag.php">&lt;object&gt;</a></code> tag.</p>
                <p>Any number of <code>&lt;param&gt;</code> elements may appear inside an <code>&lt;object&gt;</code> element, in any order, but must be placed at the start of the content.</p>
                <p>The following table summarizes the usages context and the version history of this tag.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Parent:</th>
                            <td><code><a href="ht_object-tag.php">&lt;object&gt;</a></code>, <code><a href="ht_applet-tag.php">&lt;applet&gt;</a></code></td>
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
                            <td>HTML 3.2, 4, 4.01, 5</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Syntax</h2>
                <p>The basic syntax of the <code>&lt;param&gt;</code> tag is given with:</p>
                <div class="shadow">
                    <div class="syntax"><i>HTML:</i><span class="tag">&lt;param <span class="attribute">name</span>="<i><span class="attribute-value">text</span></i>"&gt;</span>; <i>XHTML:</i><span class="tag">&lt;param <span class="attribute">name</span>="<i><span class="attribute-value">text</span></i>" /&gt;</span></div>
                </div>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                        <p><strong>Read Carefully:</strong> In HTML, the end tag for the <code>&lt;param&gt;</code> tag is forbidden. In XHTML, the <code>&lt;param&gt;</code> tag must be closed with a trailing slash, like this: <code>&lt;param /&gt;</code>.</p>
                        </div>
                    </div>
                </div>
                <p>The example below shows the <code>&lt;param&gt;</code> tag in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab9153.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<object type="application/x-shockwave-flash">
    <param name="movie" value="video/blur.swf">
</object>

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
                <p>The following table shows the attributes that are specific to the <code>&lt;param&gt;</code> tag.</p>
                <div class="shadow">
                    <table class="data">
                        <tr>
                            <th>Attribute</th>
                            <th>Value</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td colspan="3" class="section"><strong>Required</strong> &mdash; The following attribute must be specified on this tag for the markup to be valid.</td>
                        </tr>
                        <tr>
                            <td><code>name</code></td>
                            <td><i>text</i></td>
                            <td>Specifies the name of the parameter.</td>
                        </tr>
                        <tr>
                            <td colspan="3" class="section"><strong>Optional</strong> &mdash; The following attributes are optional.</td>
                        </tr>
                        <tr>
                            <td><code>value</code></td>
                            <td><i>text</i></td>
                            <td>Specifies the value of the parameter.</td>
                        </tr>
                        <tr>
                            <td><code>type</code></td>
                            <td><i>content type</i></td>
                            <td><a href="../definitions.php#obsolete" class="obsolete">Obsolete</a> Specifies the type of the value attribute.</td>
                        </tr>
                        <tr>
                            <td><code>valuetype</code></td>
                            <td><code>data<br />ref<br />object</code></td>
                            <td><a href="../definitions.php#obsolete" class="obsolete">Obsolete</a> Specifies the type of the value attribute.</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Global Attributes</h2>
                <p>Like all other HTML tags, the <code>&lt;param&gt;</code> tag supports the <a href="htl_global-attributes.php">global attributes in HTML5</a>.</p>
                <hr />
                <h2>Event Attributes</h2>
                <p>The <code>&lt;param&gt;</code> tag also supports the <a href="htl_event-attributes.php">event attributes in HTML5</a>.</p>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>&lt;param&gt;</code> tag is supported in all major modern browsers.</p>
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
                                        <li>Opera <span>5+</span></li>
                                    </ul>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <hr />
                <h2>Further Reading</h2>
                <p>See tutorial on: <a href="../des-html/htl_audio.php">HTML Audio</a>, <a href="../des-html/htl_video.php">HTML Video</a>.</p>
                <p>Related tag: <code><a href="ht_object-tag.php">&lt;object&gt;</a></code>.</p>
                <div class="bottom-link clearfix">
                    <a href="ht_p-tag.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="ht_pre-tag.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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