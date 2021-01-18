
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="HTML link Tag">
      <meta name="keywords" content="html,html5,HTML link Tag">
	  <meta name="author" content="webschooltoday.com">
    <title>HTML link Tag - WebSchool Today</title>
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">HTML link Tag</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>HTML <code>&lt;link&gt;</code> Tag</h1>
                <p class="topic">Topic: <a href="htl_tags.php">HTML5 Tags Reference</a><span class="topic-nav"><a href="ht_li-tag.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="ht_map-tag.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>	
                <p>The <code>&lt;link&gt;</code> tag defines a link between the current document and an external resource.</p>
                <p>The <code>&lt;link&gt;</code> element may only appear in the <a href="../des-html/ht_head.php">head section</a> of a document, although it may appear any number of times. It is mostly used in linking style sheets to the HTML document.</p>
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
                <hr />
                <h2>Syntax</h2>
                <p>The basic syntax of the <code>&lt;link&gt;</code> tag is given with:</p>
                <div class="shadow">
                    <div class="syntax"><i>HTML:</i><span class="tag">&lt;link <span class="attribute">rel</span>="<i><span class="attribute-value">link-type</span></i>" <span class="attribute">href</span>="<i><span class="attribute-value">URL</span></i>"&gt;</span><br /> <i>XHTML:</i><span class="tag">&lt;link <span class="attribute">rel</span>="<i><span class="attribute-value">link-type</span></i>" <span class="attribute">href</span>="<i><span class="attribute-value">URL</span></i>" /&gt;</span></div>
                </div>
                <p>The example below shows the <code>&lt;link&gt;</code> tag in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab2e97.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<head>
    <title>HTML Document</title>
    <link rel="stylesheet" href="default.css">
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
                <p>The following table shows the attributes that are specific to the <code>&lt;link&gt;</code> tag.</p>
                <div class="shadow">
                    <table class="data">
                        <tr>
                            <th style="width:105px;">Attribute</th>
                            <th style="width:115px;">Value</th>
                            <th>Description</th>
                        </tr>
						<tr>
                            <td><code>charset</code></td>
                            <td><i>charset</i></td>
                            <td><a href="../definitions.php#obsolete" class="obsolete" title="Not supported in HTML5">Obsolete</a> Specifies the character encoding of the linked resource.</td>
                        </tr>
						<tr>
                            <td><code>crossorigin</code> <span class="htl_badge" title="New in HTML5"></span></td>
                            <td><code>anonymous<br />use-credentials</code></td>
                            <td>Specifies how the element handles cross-origin requests.</td>
                        </tr>
						<tr>
                            <td><code>href</code></td>
                            <td><i>URL</i></td>
                            <td>Specifies the location of a linked document.</td>
                        </tr>
						<tr>
                            <td><code>hreflang</code></td>
                            <td><i>language-code</i></td>
                            <td>Specifies the language of the linked document. This attribute may only be used when <code>href</code> is specified.</td>
                        </tr>
						<tr>
                            <td><code>media</code></td>
                            <td><i><a href="../des-css/css-media-types.php">media-types</a></i></td>
                            <td>Specifies the media which the linked resource applies to. The default value is <code>screen</code>.</td>
                        </tr>
						<tr>
                            <td><code>rel</code></td>
                            <td><code>alternate<br />author<br />help<br />icon<br />license<br />next<br />prefetch<br />prev<br />search<br />stylesheet<br />tag</code></td>
                            <td>Specifies the relationship of the linked resource to the current document. This attribute should be used only if the <code>href</code> attribute is present.</td>
                        </tr>
						<tr>
                            <td><code>rev</code></td>
                            <td><i>link-type</i></td>
                            <td><a href="../definitions.php#obsolete" class="obsolete" title="Not supported in HTML5">Obsolete</a> Describes the relationship of the linked document back to the source document (the opposite of the <code>rel</code> attribute).</td>
                        </tr>
						<tr>
                            <td><code>sizes</code> <span class="htl_badge" title="New in HTML5"></span></td>
                            <td><i>HeightxWidth</i><br /><code>any</code></td>
                            <td>Specifies the size of the icons (for <code>rel="icon"</code>).</td>
                        </tr>
						<tr>
                            <td><code>target</code></td>
                            <td><code>_blank<br />_parent<br />_self<br />_top</code><br /><i>framename</i></td>
                            <td><a href="../definitions.php#obsolete" class="obsolete" title="Not supported in HTML5">Obsolete</a> Defines where to open the linked document specified in the <code>href</code> attribute.</td>
                        </tr>
						<tr>
                            <td><code>type</code></td>
                            <td><i>content-type</i></td>
                            <td>Specifies the content type of the linked document. The most common value is <code>text/css</code>, which indicates a Cascading Style Sheet format.</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Global Attributes</h2>
                <p>Like all other HTML tags, the <code>&lt;link&gt;</code> tag supports the <a href="htl_global-attributes.php">global attributes in HTML5</a>.</p>
                <hr />
                <h2>Event Attributes</h2>
                <p>The <code>&lt;link&gt;</code> tag also supports the <a href="htl_event-attributes.php">event attributes in HTML5</a>.</p>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>&lt;link&gt;</code> tag is supported in all major modern browsers.</p>
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
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> When used for referencing <a href="../des-html/ht_styles.php#external-style-sheet">external style sheets</a>, the <code>&lt;link&gt;</code> element is supported in all major browsers, but there's no real support for anything else.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Further Reading</h2>
                <p>See tutorial on: <a href="../des-html/ht_styles.php">HTML Style Sheets</a>.</p>
                <p>Related tags: <code><a href="ht_style-tag.php">&lt;style&gt;</a></code>.</p> 
                <div class="bottom-link clearfix">
                    <a href="ht_li-tag.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="ht_map-tag.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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