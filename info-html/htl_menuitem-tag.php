
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="HTML5 menuitem Tag">
      <meta name="keywords" content="html,html5,HTML5 menuitem Tag">
	  <meta name="author" content="webschooltoday.com">
    <title>HTML5 menuitem Tag - WebSchool Today</title>
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">HTML5 menuitem Tag</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
            	<h1>HTML5 <code>&lt;menuitem&gt;</code> Tag</h1>
                <p class="topic">Topic: <a href="htl_tags.php">HTML5 Tags Reference</a><span class="topic-nav"><a href="htl_mark-tag.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="ht_menu-tag.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>&lt;menuitem&gt;</code> element defines a list (or menuitem) of commands that a user can perform.</p>
                <p>The following table summarizes the usages context and the version history of this tag.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Permitted Parent:</th>
                            <td><code><a href="ht_menu-tag.php">&lt;menu&gt;</a></code></td>
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
                            <td><span class="htl_badge"></span> New in HTML5</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Syntax</h2>
                <p>The basic syntax of the <code>&lt;menuitem&gt;</code> tag is given with:</p>
                <div class="shadow">
                    <div class="syntax"><i>HTML:</i> <span class="tag">&lt;menuitem&gt;</span>; <i>XHTML:</i> <span class="tag">&lt;menuitem /&gt;</span></div>
                </div>
                <p>The example below shows the <code>&lt;menuitem&gt;</code> tag in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab2d95.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
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
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab warning-icon" title="Warning"><i></i></div>
                        <div class="warning-box">
                            <p><strong>Warning:</strong> Currently the <code>&lt;menuitem&gt;</code> tag is not supported by the most of the web browsers like Chrome, IE, Safari, etc. Better you should avoid using this tag.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Tag-Specific Attributes</h2>
                <p>The following table shows the attributes that are specific to the <code>&lt;menuitem&gt;</code> tag.</p>
                <div class="shadow">
                    <table class="data">
                        <tr>
                            <th style="width:80px;">Attribute</th>
                            <th style="width:90px;">Value</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td class="section" colspan="3"><strong>Required</strong> &mdash; The following attribute must be specified on this tag for the markup to be valid.</td>
                        </tr>
                        <tr>
                            <td><code>label</code></td>
                            <td><i>text</i></td>
                            <td>Specifies the name of the command/menu item, as shown to the user.</td>
                        </tr>
                        <tr>
                            <td class="section" colspan="3"><strong>Optional</strong> &mdash; The following attributes are optional.</td>
                        </tr>
                        <tr>
                            <td><code>checked</code></td>
                            <td><code>checked</code></td>
                            <td>This Boolean attribute specifies that whether the command or menu item is selected when the page loads.</td>
                        </tr>
                        <tr>
                            <td><code>command</code></td>
                            <td><i>ID</i></td>
                            <td>Specifies the ID of a separate element, indicating a command to be invoked indirectly.</td>
                        </tr>
                        <tr>
                            <td><code>default</code></td>
                            <td><code>default</code></td>
                            <td>This Boolean attribute specifies the command/menu item as being a default command.</td>
                        </tr>
                        <tr>
                            <td><code>disabled</code></td>
                            <td><code>disabled</code></td>
                            <td>This Boolean attribute which indicates that the command is disabled and not available in the current state.</td>
                        </tr>
                        <tr>
                            <td><code>icon</code></td>
                            <td><i>URL</i></td>
                            <td>Specifies an icon for the command/menu item.</td>
                        </tr>
                        <tr>
                            <td><code>radiogroup</code></td>
                            <td><i>group-name</i></td>
                            <td>Specifies the name of a group of commands to be toggled as radio buttons when selected. Only be used where the type attribute is radio.</td>
                        </tr>
                        <tr>
                            <td><code>type</code></td>
                            <td><code>checkbox<br />command<br />radio</code></td>
                            <td>Specifies the type of command/menu item. The default value of this attribute is command.</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Global Attributes</h2>
                <p>Like all other HTML tags, the <code>&lt;menuitem&gt;</code> tag supports the <a href="htl_global-attributes.php">global attributes in HTML5</a>.</p>
                <hr />
                <h2>Event Attributes</h2>
                <p>The <code>&lt;menuitem&gt;</code> tag also supports the <a href="htl_event-attributes.php">event attributes in HTML5</a>.</p>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>&lt;menuitem&gt;</code> tag is supported in all major modern browsers.</p>
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
                    <a href="htl_mark-tag.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="ht_menu-tag.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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