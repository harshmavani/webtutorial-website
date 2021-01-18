
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="HTML ol Tag">
      <meta name="keywords" content="html,html5">
	  <meta name="author" content="webschooltoday.com">
    <title>HTML ol Tag - WebSchool Today</title>
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">HTML ol Tag</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>HTML <code>&lt;ol&gt;</code> Tag</h1>
                <p class="topic">Topic: <a href="htl_tags.php">HTML5 Tags Reference</a><span class="topic-nav"><a href="ht_object-tag.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="ht_optgroup-tag.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>&lt;ol&gt;</code> (short for ordered list) tag defines an ordered list of items. Each list item is defined by a <code><a href="ht_li-tag.php">&lt;li&gt;</a></code> tag. Typically, ordered-list items are displayed with a number in front of it, but the numbering style can be controlled with the CSS <code><a href="../info-css/css-list-style-type-property.php">list-style-type</a></code> property.</p>
                <p>The following table summarizes the usages context and the version history of this tag.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Placement:</th>
                            <td>Block</td>
                        </tr>
                        <tr>
                            <th>Content:</th>
                            <td>One or more <code><a href="ht_li-tag.php">&lt;li&gt;</a></code> elements</td>
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
                <p>The basic syntax of the <code>&lt;ol&gt;</code> tag is given with:</p>
                <div class="shadow">
                    <div class="syntax"><i>HTML&thinsp;/&thinsp;XHTML:</i> <span class="tag">&lt;ol&gt;</span> ... <span class="tag">&lt;/ol&gt;</span></div>
                </div>
                <p>The example below shows the <code>&lt;ol&gt;</code> tag in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab280f.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<ol>
    <li>Item 1</li>
    <li>Item 2</li>
    <li>Item 3</li>
</ol>

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
                <p>The following table shows the attributes that are specific to the <code>&lt;ol&gt;</code> tag.</p>
                <div class="shadow">
                    <table class="data">
                        <tr>
                            <th style="width:80px;">Attribute</th>
                            <th>Value</th>
                            <th>Description</th>
                        </tr>
						<tr>
                            <td><code>reversed</code> <span class="htl_badge"></span></td>
                            <td><code>reversed</code></td>
                            <td>This Boolean attribute specifies that the items of the list are specified in the reverse order.</td>
                        </tr>
                        <tr>
                            <td><code>type</code></td>
                            <td><code>1<br />A<br />a<br />I<br />i</code></td>
                            <td>Specify the bullet or numbering type for the list item.</td>
                        </tr>
                        <tr>
                            <td><code>compact</code></td>
                            <td><code>compact</code></td>
                            <td><a href="../definitions.php#obsolete" class="obsolete" title="Not supported in HTML5">Obsolete</a> This Boolean attribute specifies that the list should be rendered in a compact style.</td>
                        </tr>
                        <tr>
                            <td><code>start</code></td>
                            <td><i>number</i></td>
                            <td>Specifies the starting number of the first item in an ordered list.</td>
                        </tr>
                    </table>
                </div>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> The attributes '<code>start</code>' and '<code>type</code>' of the <code>&lt;ol&gt;</code> element was deprecated in previous version of HTML, but reintroduced in HTML5.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Global Attributes</h2>
                <p>Like all other HTML tags, the <code>&lt;ol&gt;</code> tag supports the <a href="htl_global-attributes.php">global attributes in HTML5</a>.</p>
                <hr />
                <h2>Event Attributes</h2>
                <p>The <code>&lt;ol&gt;</code> tag also supports the <a href="htl_event-attributes.php">event attributes in HTML5</a>.</p>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>&lt;ol&gt;</code> tag is supported in all major modern browsers.</p>
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
                <p>Related tags: <code><a href="ht_ul-tag.php">&lt;ul&gt;</a></code>, <code><a href="ht_li-tag.php">&lt;li&gt;</a></code>.</p>
                <div class="bottom-link clearfix">
                    <a href="ht_object-tag.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="ht_optgroup-tag.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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