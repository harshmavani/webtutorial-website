
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="HTML li Tag">
      <meta name="keywords" content="html,html5,HTML li Tag">
	  <meta name="author" content="webschooltoday.com">
    <title>HTML li Tag - WebSchool Today</title>
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">HTML li Tag</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>HTML <code>&lt;li&gt;</code> Tag</h1>
                <p class="topic">Topic: <a href="htl_tags.php">HTML5 Tags Reference</a><span class="topic-nav"><a href="ht_legend-tag.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="ht_link-tag.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>&lt;li&gt;</code> (short for <em>list item</em>) defines an individual list item within a list. Each list item usually rendered with a bullet (in unordered lists, defined by the <code><a href="ht_ul-tag.php">&lt;ul&gt;</a></code> tag) or a number or letter (in the case of ordered lists, defined by the <code><a href="ht_ol-tag.php">&lt;ol&gt;</a></code> tag). The appearance of bullet or the number can be controlled with the <code>type</code> attribute.</p>
                <p>The following table summarizes the usages context and the version history of this tag.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Parent:</th>
                            <td><code><a href="ht_ul-tag.php">&lt;ul&gt;</a></code>, <code><a href="ht_ol-tag.php">&lt;ol&gt;</a></code>, <code><a href="ht_dir-tag.php">&lt;dir&gt;</a></code>, <code><a href="ht_menu-tag.php">&lt;menu&gt;</a></code></td>
                        </tr>
                        <tr>
                            <th>Placement:</th>
                            <td>Block</td>
                        </tr>
                        <tr>
                            <th>Content:</th>
                            <td>Block, inline, and text</td>
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
                <p>The basic syntax of the <code>&lt;li&gt;</code> tag is given with:</p>
                <div class="shadow">
                    <div class="syntax"><i>HTML&thinsp;/&thinsp;XHTML:</i> <span class="tag">&lt;li&gt;</span> ... <span class="tag">&lt;/li&gt;</span></div>
                </div>
                <p>The example below shows the <code>&lt;li&gt;</code> tag in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab3dae.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<ul>
    <li>Item 1</li>
    <li>Item 2</li>
    <li>Item 3</li>
</ul>

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
                <p>The following table shows the attributes that are specific to the <code>&lt;li&gt;</code> tag.</p>
                <div class="shadow">
                    <table class="data">
                        <tr>
                            <th>Attribute</th>
                            <th>Value</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td><code>type</code></td>
                            <td><code>circle<br />disc<br />square<br />a<br />A<br />i<br />I<br />1</code></td>
                            <td><a href="../definitions.php#obsolete" class="obsolete" title="Not supported in HTML5">Obsolete</a> Specify the bullet or numbering type for the list item.</td>
                        </tr>
                        <tr>
                            <td><code>value</code></td>
                            <td><i>number</i></td>
                            <td>Sets the number of the current list item (only for ordered lists).</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Global Attributes</h2>
                <p>Like all other HTML tags, the <code>&lt;li&gt;</code> tag supports the <a href="htl_global-attributes.php">global attributes in HTML5</a>.</p>
                <hr />
                <h2>Event Attributes</h2>
                <p>The <code>&lt;li&gt;</code> tag also supports the <a href="htl_event-attributes.php">event attributes in HTML5</a>.</p>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>&lt;li&gt;</code> tag is supported in all major modern browsers.</p>
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
                <p>See tutorial on: <a href="../des-html/ht_lists.php">HTML Lists</a>.</p>
                <p>Related tags: <code><a href="ht_ul-tag.php">&lt;ul&gt;</a></code>, <code><a href="ht_ol-tag.php">&lt;ol&gt;</a></code>.</p>
                <div class="bottom-link clearfix">
                    <a href="ht_legend-tag.php" class="previous-page-bottom"><i class="fa fa-arrow-letf" aria-hidden="true"></i> Previous</a>
                    <a href="ht_link-tag.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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