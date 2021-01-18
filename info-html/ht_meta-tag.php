
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="HTML meta Tag">
      <meta name="keywords" content="html,html5,HTML meta Tag">
	  <meta name="author" content="webschooltoday.com">
    <title>HTML meta Tag - WebSchool Today</title>
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">HTML meta Tag</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>HTML <code>&lt;meta&gt;</code> Tag</h1>
                <p class="topic">Topic: <a href="htl_tags.php">HTML5 Tags Reference</a><span class="topic-nav"><a href="ht_menu-tag.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="htl_meter-tag.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>	
                <p>The <code>&lt;meta&gt;</code> tag provides structured metadata about the document. The <code>&lt;meta&gt;</code> element may only appear in the <a href="../des-html/ht_head.php">head section</a> of a document,&thinsp;although it may appear any number of times.</p>
                <p>The following table summarizes the usages context and the version history of this tag.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Parent:</th>
                            <td><code><a href="ht_head-tag.php">&lt;head&gt;</a></code></td>
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
                            <td>HTML 2, 3.2, 4, 4.01, 5</td>
                        </tr>
                    </table>
                </div>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> Metadata is data (information) about data &ndash; for example, keywords and description that relate to the document.</p>
                        </div>
                    </div>
                </div>
                <p>The <code>&lt;meta&gt;</code> tag commonly used to provide keywords, descriptions, author information, and other metadata that may be used by the browser to render the document correctly, or it may be used by the search engines for indexing purposes. Here's some real world examples to help you understand <code>&lt;meta&gt;</code> tag.</p>
                <p><strong>Example 1: Define the character encoding for the document</strong></p>
                <div class="sky-box break">&lt;meta charset="UTF-8"&gt;</div>
                <p><strong>Example 2: Defines the author name of the document</strong></p>
                <div class="sky-box break">&lt;meta name="author" content="John Smith"&gt;</div>
                <p><strong>Example 3: Defines a list of keywords for search engines</strong></p>
                <div class="sky-box break">&lt;meta name="keywords" content="HTML,CSS,Tutorials,References,Examples"&gt;</div>
                <p><strong>Example 4: Define a brief summery/description of the web page</strong></p>
                <div class="sky-box">&lt;meta name="description" content="HTML/CSS Tutorials and References"&gt;</div>
                <p><strong>Example 5: Enable zooming in mobile devices</strong></p>
                <div class="sky-box">&lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;</div>
                <hr />
                <h2>Syntax</h2>
                <p>The basic syntax of the <code>&lt;meta&gt;</code> tag is given with:</p>
                <div class="shadow">
                    <div class="syntax"><i>HTML:</i><span class="tag">&lt;meta <span class="attribute">name</span>="<i><span class="attribute-value">text</span></i>" <span class="attribute">content</span>="<i><span class="attribute-value">text</span></i>"&gt;</span><br /> <i>XHTML:</i><span class="tag">&lt;meta <span class="attribute">name</span>="<i><span class="attribute-value">text</span></i>" <span class="attribute">content</span>="<i><span class="attribute-value">text</span></i>" /&gt;</span></div>
                </div>
                <p>The example below shows the <code>&lt;meta&gt;</code> tag in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab7054.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<head>
    <title>Example of HTML meta tag</title>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML,CSS,References,Examples">
</head>

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
                <p>The following table shows the attributes that are specific to the <code>&lt;meta&gt;</code> tag.</p>
                <div class="shadow space">
                    <table class="data">
                        <tr>
                            <th style="width:80px;">Attribute</th>
                            <th style="width:150px;">Value</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td colspan="3" class="section"><strong>Required</strong> &mdash; One of the following attributes must be specified for the markup to be valid.</td>
                        </tr>
						<tr>
                            <td><code>name</code></td>
                            <td><code>application-name<br />author<br />description<br />generator<br />keywords</code></td>
                            <td>Defines a name for the meta-information contained in the content attribute.</td>
                        </tr>
                        <tr>
                            <td><code>content</code></td>
                            <td><i>text</i></td>
                            <td>Gives the value associated with the <code>http-equiv</code> or <code>name</code> attribute. This attribute must be specified if either <code>http-equiv</code> or <code>name</code> attribute is present.</td>
                        </tr>
						<tr>
                            <td><code>charset</code> <span class="htl_badge" title="New in HTML5"></span></td>
                            <td><i>character-set</i></td>
                            <td>Specifies the character encoding for the HTML document.</td>
                        </tr>
                        <tr>
                            <td><code>http-equiv</code></td>
                            <td><code>content-type<br />default-style<br />refresh</code></td>
                            <td>Binds the meta-information in the <code>content</code> attribute to an HTTP response header.</td>
                        </tr>
                        <tr>
                            <td colspan="3" class="section"><strong>Optional</strong> &mdash; The following attribute is optional.</td>
                        </tr>
                        <tr>
                            <td><code>scheme</code></td>
                            <td><i>format/URI</i></td>
                            <td><a href="../definitions.php#obsolete" class="obsolete" title="Not supported in HTML5">Obsolete</a> Specifies a scheme to be used to interpret the value of the <code>content</code> attribute.</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Global Attributes</h2>
                <p>Like all other HTML tags, the <code>&lt;meta&gt;</code> tag supports the <a href="htl_global-attributes.php">global attributes in HTML5</a>.</p>
                <hr />
                <h2>Event Attributes</h2>
                <p>The <code>&lt;meta&gt;</code> tag also supports the <a href="htl_event-attributes.php">event attributes in HTML5</a>.</p>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>&lt;meta&gt;</code> tag is supported in all major modern browsers.</p>
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
                <p>See tutorial on: <a href="../des-html/ht_meta.php">HTML Meta</a>.</p>
                <p>Related tag: <code><a href="ht_head-tag.php">&lt;head&gt;</a></code>.</p> 
                <div class="bottom-link clearfix">
                    <a href="ht_menu-tag.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="htl_meter-tag.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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