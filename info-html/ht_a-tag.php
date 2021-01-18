
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="HTML a Tag">
	  <meta name="keywords" content="html,html5,HTML a Tag">
	  <meta name="author" content="webschooltoday.com">
    <title>HTML a Tag - WebSchool Today</title>
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">HTML a Tag</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>HTML <code>&lt;a&gt;</code> Tag</h1>
                <p class="topic">Topic: <a href="htl_tags.php">HTML5 Tags Reference</a><span class="topic-nav"><a href="javascript:void(0);" class="disabled" title="Disabled"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="ht_abbr-tag.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>                
                <h2>Description</h2>	
                <p>The <code>&lt;a&gt;</code> (short for <em>anchor</em>) tag defines a hyperlink.</p>
                <p>An anchor i.e. the <code>&lt;a&gt;</code> element can be used in two ways:</p>
                <ul>
                    <li>To create a link to another document, by using the <code>href</code> attribute.</li>
                    <li>To create a bookmark inside a document, by using the <code>id</code> attribute.</li>
                </ul>
                <p>The following table summarizes the usages context and the version history of this tag.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Placement:</th>
                            <td>Inline</td>
                        </tr>
                        <tr>
                            <th>Content:</th>
                            <td>Inline, and text</td>
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
                <p>In the example that follows, the <code>&lt;a&gt;</code> tag defines a link. The source anchor is the text "W3C Website" and the destination anchor is "https://www.w3.org/":</p>
                <div class="sky-box">&lt;a href="https://www.w3.org/"&gt;W3C Website&lt;/a&gt;</div>
                <p>This link designates the home page of the 'World Wide Web Consortium' website. When a user click on it, the web browser will retrieve the resource, in this case, an HTML document.</p>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> The most important attribute of the <code>&lt;a&gt;</code> tag is the <code>href</code> attribute, which indicates the destination of an hyperlink.</p>
                        </div>
                    </div>
                </div>
                <p>By default, links will appear as follows in most of the browsers:</p>
                <ul>
                    <li>An <span style="color: blue;text-decoration: underline;">unvisited link</span> is underlined and blue.</li>
                    <li>A <span style="color: purple;text-decoration: underline;">visited link</span> is underlined and purple.</li>
                    <li>An <span style="color: red;text-decoration: underline;">active link</span> is underlined and red.</li>
                </ul>
                <p>However you can overwrite this using CSS. Learn more about <a href="../des-css/css-links.php">styling links</a>.</p>
                <hr />
                <h2>Syntax</h2>
                <p>The basic syntax of the <code>&lt;a&gt;</code> tag is given with:</p>
                <div class="shadow">
                    <div class="syntax"><i>HTML&thinsp;/&thinsp;XHTML:</i> <span class="tag">&lt;a <span class="attribute">href</span>="<span class="attribute"><i>URL</i></span>"&gt;</span> ... <span class="tag">&lt;/a&gt;</span></div>
                </div>
                <p>The example below shows the <code>&lt;a&gt;</code> tag in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab5adb.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<a href="https://www.webschooltoday.com/">webschool today</a>
<a href="kites.jpg"><img src="kites-thumb.jpg" alt="kites"></a>
<a href="https://www.google.com/">Google Search</a>


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
                <p>The following table shows the attributes that are specific to the <code>&lt;a&gt;</code> tag.</p>
                <div class="shadow">
                    <table class="data">
                        <tr>
                            <th style="width:80px;">Attribute</th>
                            <th style="width:102px;">Value</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td><code>charset</code></td>
                            <td><i>charset</i></td>
                            <td><a href="../definitions.php#obsolete" class="obsolete" title="Not supported in HTML5">Obsolete</a> Specifies the character encoding of the linked resource.</td>
                        </tr>
                        <tr>
                            <td><code>coords</code></td>
                            <td><i>x,y coordinates</i></td>
                            <td><a href="../definitions.php#obsolete" class="obsolete" title="Not supported in HTML5">Obsolete</a> Specifies the position of the link on the screen.</td>
                        </tr>
                        <tr>
                            <td><code>download</code> <span class="htl_badge" title="New in HTML5"></span></td>
                            <td><i>filename</i></td>
                            <td>Specifies whether to download the linked resource instead of navigating to it, when the user clicks on the link.</td>
                        </tr>
                        <tr>
                            <td><code>href</code></td>
                            <td><i>URL</i></td>
                            <td>Specifies the location of the destination document or web resource (such as an image, PDF, or other media file).</td>
                        </tr>
                        <tr>
                            <td><code>hreflang</code></td>
                            <td><i>language-code</i></td>
                            <td>Specifies the language of the linked document. This attribute may only be used when <code>href</code> is specified.</td>
                        </tr>
                        <tr>
                            <td><code>media</code> <span class="htl_badge" title="New in HTML5"></span></td>
                            <td><i>media-query</i></td>
                            <td>Specifies the media for which the linked resource is designed.</td>
                        </tr>
                        <tr>
                            <td><code>name</code></td>
                            <td><i>text</i></td>
                            <td><a href="../definitions.php#obsolete" class="obsolete" title="Not supported in HTML5">Obsolete</a> Specifies the name of an anchor. Use the <a href="htl_global-attributes.php">global attribute</a> <code>id</code> instead.</td>
                        </tr>
						<tr>
                            <td><code>rel</code></td>
                            <td><code>alternate<br />author<br />bookmark<br />help<br />license<br />next<br />nofollow<br />noreferrer<br />prefetch<br />prev<br />search<br />tag</code></td>
                            <td>Describes the relationship between the document containing the hyperlink and the linked resource. This attribute should be used only if the <code>href</code> attribute is present.</td>
                        </tr>
                        <tr>
                            <td><code>rev</code></td>
                            <td><i>link-type</i></td>
                            <td><a href="../definitions.php#obsolete" class="obsolete" title="Not supported in HTML5">Obsolete</a> Describes the relationship of the linked document back to the source document (the opposite of the <code>rel</code> attribute).</td>
                        </tr>
                        <tr>
                            <td><code>shape</code></td>
                            <td><code>rect<br />circle<br />poly<br />default</code></td>
                            <td><a href="../definitions.php#obsolete" class="obsolete" title="Not supported in HTML5">Obsolete</a> Specifies the shape of the hotspot region i.e. selectable region for hyperlinks.</td>
                        </tr>
                        <tr>
                            <td><code>target</code></td>
                            <td><code>_blank</code><br /><code>_parent</code><br /><code>_self</code><br /><code>_top</code><br /><i>framename</i></td>
                            <td>Defines a target to open the linked resource specified in the <code>href</code> attribute.</td>
                        </tr>
                        <tr>
                            <td><code>type</code></td>
                            <td><i>content-type</i></td>
                            <td>Specifies the <a href="../definitions.php#content-type">content type</a> (MIME type) of the linked content&ndash;for example, "image/jpeg", "text/html" etc.</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Global Attributes</h2>
                <p>Like all other HTML tags, the <code>&lt;a&gt;</code> tag supports the <a href="htl_global-attributes.php">global attributes in HTML5</a>.</p>
                <hr />
                <h2>Event Attributes</h2>
                <p>The <code>&lt;a&gt;</code> tag also supports the <a href="htl_event-attributes.php">event attributes in HTML5</a>.</p>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>&lt;a&gt;</code> tag is supported in all major modern browsers.</p>
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
                <p>See tutorial on: <a href="../des-html/ht_links.php">HTML Links</a>, <a href="../des-css/css-links.php">CSS Links</a>.</p>
				<p>Related tag: <code><a href="ht_base-tag.php">&lt;base&gt;</a></code>.</p>
                <div class="bottom-link clearfix">
                    <a href="javascript:void(0);" class="previous-page-bottom disabled" title="Disabled"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="ht_abbr-tag.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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