
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="HTML5 header Tag">
      <meta name="keywords" content="html,html5,HTML5 header Tag">
	  <meta name="author" content="webschooltoday.com">
    <title>HTML5 header Tag - WebSchool Today</title>
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">HTML5 header Tag</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
            	<h1>HTML5 <code>&lt;header&gt;</code> Tag</h1>
                <p class="topic">Topic: <a href="htl_tags.php">HTML5 Tags Reference</a><span class="topic-nav"><a href="ht_head-tag.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="htl_hgroup-tag.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>&lt;header&gt;</code> element represents the header of a document or a section. A header should contain title and heading information about the related content.</p>
                <p>The following table summarizes the usages context and the version history of this tag.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Placement:</th>
                            <td>Block</td>
                        </tr>
                        <tr>
                            <th>Content:</th>
                            <td>Block, Inline and text elements, but no <code><a href="htl_header-tag.php">&lt;header&gt;</a></code> or <code><a href="htl_footer-tag.php">&lt;footer&gt;</a></code> descendants.</td>
                        </tr>
                        <tr>
                            <th>Start/End Tag:</th>
                            <td>Start tag: <strong>required</strong>, End tag: <strong>required</strong></td>
                        </tr>
                        <tr>
                            <th>Version:</th>
                            <td><span class="htl_badge"></span> New in HTML5</td>
                        </tr>
                    </table>
                </div>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"  style="background-color:#fad28c"
>
                            <p><strong>Important:</strong> Do not confuse the <code>&lt;header&gt;</code> element (which is a visible section of the page) with the <code><a href="ht_head-tag.php">&lt;head&gt;</a></code> element (which contains metadata not shown to the user).</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Syntax</h2>
                <p>The basic syntax of the <code>&lt;header&gt;</code> tag is given with:</p>
                <div class="shadow">
                    <div class="syntax"><i>HTML&thinsp;/&thinsp;XHTML:</i> <span class="tag">&lt;header&gt;</span> ... <span class="tag">&lt;/header&gt;</span></div>
                </div>
                <p>The example below shows the <code>&lt;header&gt;</code> tag in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab1b6b.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<header>
    <h1>Tutorial Republic</h1>
    <nav>
        <p><a href="#">Home</a> | <a href="#">About</a> | <a href="#">Contact</a></p>
    </nav>
</header>

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
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> The <code>&lt;header&gt;</code> element can be placed anywhere inside the <code><a href="ht_body-tag.php">&lt;body&gt;</a></code>, but it must not be placed within an <code><a href="ht_address-tag.php">&lt;address&gt;</a></code>, <code><a href="htl_footer-tag.php">&lt;footer&gt;</a></code> or another <code>&lt;header&gt;</code> element.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Tag-Specific Attributes</h2>
                <p>The <code>&lt;header&gt;</code> tag doesn't have any specific attribute.</p>
                <hr />
                <h2>Global Attributes</h2>
                <p>Like all other HTML tags, the <code>&lt;header&gt;</code> tag supports the <a href="htl_global-attributes.php">global attributes in HTML5</a>.</p>
                <hr />
                <h2>Event Attributes</h2>
                <p>The <code>&lt;header&gt;</code> tag also supports the <a href="htl_event-attributes.php">event attributes in HTML5</a>.</p>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>&lt;header&gt;</code> tag is supported in all major modern browsers.</p>
                <div class="shadow">
                    <div class="support">
                        <table>
                            <tr>
                                <td><img src="../assets/images/browser.jpg" alt="Browsers Icon" /></td>
                                <td>
                                    <h2>Basic Support&mdash;</h2>
                                    <ul>
                                        <li>Firefox <span>4+</span></li>
                                        <li>Google Chrome <span>6+</span></li>
                                        <li>Internet Explorer <span>9+</span></li>
                                        <li>Apple Safari <span>5.1+</span></li>
                                        <li>Opera <span>11.1+</span></li>
                                    </ul>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <hr />
                <h2>Further Reading</h2>
                <p>See tutorial on: <a href="../des-html/ht_layout.php">HTML Layout</a>.</p>
                <p>Related tags: <code><a href="ht_body-tag.php">&lt;body&gt;</a></code>, <code><a href="htl_nav-tag.php">&lt;nav&gt;</a></code>, <code><a href="htl_section-tag.php">&lt;section&gt;</a></code>, <code><a href="htl_footer-tag.php">&lt;footer&gt;</a></code>.</p>
                <div class="bottom-link clearfix">
                    <a href="ht_head-tag.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="htl_hgroup-tag.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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