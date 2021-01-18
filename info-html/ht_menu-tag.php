
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="HTML5 menu Tag">
      <meta name="keywords" content="html,html5,HTML5 menu Tag">
	  <meta name="author" content="webschooltoday.com">
    <title>HTML5 menu Tag - WebSchool Today</title>
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">HTML5 menu Tag</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
            	<h1>HTML <code>&lt;menu&gt;</code> Tag</h1>
                <p class="topic">Topic: <a href="htl_tags.php">HTML5 Tags Reference</a><span class="topic-nav"><a href="htl_menuitem-tag.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="ht_meta-tag.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>&lt;menu&gt;</code> element defines a list (or menu) of commands that a user can perform.</p>
                <p>The following table summarizes the usages context and the version history of this tag.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Placement:</th>
                            <td>Block</td>
                        </tr>
                        <tr>
                            <th>Content:</th>
                            <td><code>&lt;menu&gt;</code>, <code><a href="htl_menuitem-tag.php">&lt;menuitem&gt;</a></code>, <code><a href="ht_li-tag.php">&lt;li&gt;</a></code>, <code><a href="ht_hr-tag.php">&lt;hr&gt;</a></code> and <code><a href="ht_script-tag.php">&lt;script&gt;</a></code></td>
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
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> The <code>&lt;menu&gt;</code> tag was deprecated in HTML 4.01, but reintroduced in HTML5. However, it is better to avoid using this tag, because it is not supported by the major web browsers like Chrome, IE, Safari and Opera.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Syntax</h2>
                <p>The basic syntax of the <code>&lt;menu&gt;</code> tag is given with:</p>
                <div class="shadow">
                    <div class="syntax"><i>HTML&thinsp;/&thinsp;XHTML:</i> <span class="tag">&lt;menu&gt;</span> ... <span class="tag">&lt;/menu&gt;</span></div>
                </div>
                <p>The example below shows the <code>&lt;menu&gt;</code> tag in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab2a3b.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<img src="sky.jpg" id="sky" width="250" alt="Cloudy Sky" contextmenu="skymenu">
<menu type="context" id="skymenu">
    <menuitem label="Zoom In" icon="zoom-in.png" onclick="zoomin()">
    <menuitem label="Zoom Out" icon="zoom-out.png" onclick="zoomout()">
    <menuitem label="Reload Image" icon="reload.png" onclick="window.location.reload();">
</menu>

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
                <p>The following table shows the attributes that are specific to the <code>&lt;menu&gt;</code> tag.</p>
                <div class="shadow">
                    <table class="data">
                        <tr>
                            <th>Attribute</th>
                            <th>Value</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td><code>label</code></td>
                            <td><i>text</i></td>
                            <td>Specifies a visible label of the menu.</td>
                        </tr>
                        <tr>
                            <td><code>type</code></td>
                            <td><code>popup<br />toolbar<br />context</code></td>
                            <td>Specifies which type of menu to display.</td>
                        </tr>					
                    </table>
                </div>
                <hr />
                <h2>Global Attributes</h2>
                <p>Like all other HTML tags, the <code>&lt;menu&gt;</code> tag supports the <a href="htl_global-attributes.php">global attributes in HTML5</a>.</p>
                <hr />
                <h2>Event Attributes</h2>
                <p>The <code>&lt;menu&gt;</code> tag also supports the <a href="htl_event-attributes.php">event attributes in HTML5</a>.</p>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>&lt;menu&gt;</code> tag is supported in all major modern browsers.</p>
                <div class="shadow">
                    <div class="support">
                        <table>
                            <tr>
                                <td><img src="../assets/images/browser.jpg" alt="Browsers Icon" /></td>
                                <td>
                                    <h2>Basic Support&mdash;</h2>
                                    <ul>
                                        <li>Firefox <span>8+</span> (only context menu)</li>
                                        <li>Google Chrome <span class="red" title="Not supported">&times;</span></li>
                                        <li>Internet Explorer <span class="red" title="Not supported">&times;</span></li>
                                        <li>Apple Safari <span class="red" title="Not supported">&times;</span></li>
                                        <li>Opera <span class="red" title="Not supported">&times;</span></li>
                                    </ul>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <hr />
                <h2>Further Reading</h2>
                <p>See tutorial on: <a href="../des-html/ht_lists.php">HTML Lists</a>.</p>
                <p>Related tags: <code><a href="ht_ol-tag.php">&lt;ol&gt;</a></code>, <code><a href="ht_ul-tag.php">&lt;ul&gt;</a></code>, <code><a href="ht_li-tag.php">&lt;li&gt;</a></code>.</p>
                <div class="bottom-link clearfix">
                    <a href="htl_menuitem-tag.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="ht_meta-tag.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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