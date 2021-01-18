
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="HTML area Tag">
      <meta name="keywords" content="html,html5,HTML area Tag">
	  <meta name="author" content="webschooltoday.com">
    <title>HTML area Tag - WebSchool Today</title>
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">HTML area Tag</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>HTML <code>&lt;area&gt;</code> Tag</h1>
                <p class="topic">Topic: <a href="htl_tags.php">HTML5 Tags Reference</a><span class="topic-nav"><a href="ht_applet-tag.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="htl_article-tag.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>&lt;area&gt;</code> tag defines a hot-spot region on an image, and associates it with a hypertext link. This element is used only within a <code><a href="ht_map-tag.php">&lt;map&gt;</a></code> element.</p>
                <p>The following table summarizes the usages context and the version history of this tag.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Parent:</th>
                            <td><code><a href="ht_map-tag.php">&lt;map&gt;</a></code></td>
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
                <p>The basic syntax of the <code>&lt;area&gt;</code> tag is given with:</p>
                <div class="shadow">
                    <div class="syntax"><i>HTML:</i><span class="tag">&lt;area <span class="attribute">alt</span>="<span class="attribute-value"><i>text</i></span>"&gt;</span>; <i>XHTML:</i><span class="tag">&lt;area <span class="attribute">alt</span>="<span class="attribute-value"><i>text</i></span>" /&gt;</span></div>
                </div>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> In HTML, the end tag for the <code>&lt;area&gt;</code> tag is forbidden. In XHTML, the <code>&lt;area&gt;</code> tag must be closed with a trailing slash, like this: <code>&lt;area /&gt;</code>. See <a href="../des-html/ht_elements.php#empty-elements">empty elements</a>.</p>
                        </div>
                    </div>
                </div>
                <p>The example below shows the <code>&lt;area&gt;</code> tag in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabe89c.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<img src="shapes.png" usemap="#shapes" alt="Geometrical Shapes">
<map name="shapes">
    <area shape="circle" coords="40,40,40" href="circle.php" alt="Circle">
    <area shape="poly" coords="148,2,104,80,193,80" href="triangle.php" alt="Triangle">
    <area shape="rect" coords="226,2,323,80" href="rectangle.php" alt="Rectangle">
    <area shape="poly" coords="392,2,352,32,366,80,418,80,432,32" href="pentagon.php" alt="Pentagon">
</map>

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
                <p>The following table shows the attributes that are specific to the <code>&lt;area&gt;</code> tag.</p>
                <div class="shadow">
                    <table class="data">
                        <tr>
                            <th style="width:79px;">Attribute</th>
                            <th style="width:81px;">Value</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td colspan="3" class="section"><strong>Required</strong> &mdash; The following attribute must be specified on this tag for the markup to be valid.</td>
                        </tr>
                        <tr>
                            <td><code>alt</code></td>
                            <td><i>text</i></td>
                            <td>Specifies replacement text to use when the images defined by the area elements are not available.</td>
                        </tr>
                        <tr>
                            <td colspan="3" class="section"><strong>Optional</strong> &mdash; The following attributes are optional.</td>
                        </tr>
                        <tr>
                            <td><code>coords</code></td>
                            <td><i>coordinates</i></td>
                            <td>Specifying the coordinates of the hot-spot region.</td>
                        </tr>
						<tr>
                            <td><code>download</code> <span class="htl_badge" title="New in HTML5"></span></td>
                            <td><i>filename</i></td>
                            <td>Specifies whether to download the linked resource instead of navigating to it, when the user clicks on the link.</td>
                        </tr>
                        <tr>
                            <td><code>href</code></td>
                            <td><i>URL</i></td>
                            <td>Specifies the hyperlink target for the area.</td>
                        </tr>
						<tr>
                            <td><code>hreflang</code> <span class="htl_badge" title="New in HTML5"></span></td>
                            <td><i>langcode</i></td>
                            <td>Specifies the language of the linked resource. This attribute may only be used when <code>href</code> is specified.</td>
                        </tr>
						<tr>
                            <td><code>media</code> <span class="htl_badge" title="New in HTML5"></span></td>
                            <td><i>media-query</i></td>
                            <td>Specifies the media for which the linked resource is designed.</td>
                        </tr>
                        <tr>
                            <td><code>nohref</code></td>
                            <td><code>nohref</code></td>
                            <td><a href="../definitions.php#obsolete" class="obsolete" title="Not supported in HTML5">Obsolete</a> Specifies that no hyperlink exists for the associated area.</td>
                        </tr>
						<tr>
                            <td><code>rel</code> <span class="htl_badge" title="New in HTML5"></span></td>
                            <td><code>alternate<br />author<br />bookmark<br />help<br />license<br />next<br />nofollow<br />noreferrer<br />prefetch<br />prev<br />search<br />tag</code></td>
                            <td>Specifies the relationship of the linked resource to the current document. This attribute should be used only if the <code>href</code> attribute is present.</td>
                        </tr>
                        <tr>
                            <td><code>shape</code></td>
                            <td><code>default<br />rect<br />circle<br />poly</code></td>
                            <td>Specifies the shape of the associated hot spot.</td>
                        </tr>
                        <tr>
                            <td><code>target</code></td>
                            <td><code>_blank<br />_parent<br />_self<br />_top</code></td>
                            <td>Specifies where to display the linked resource specified in the <code>href</code> attribute.</td>
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
                <p>Like all other HTML tags, the <code>&lt;area&gt;</code> tag supports the <a href="htl_global-attributes.php">global attributes in HTML5</a>.</p>
                <hr />
                <h2>Event Attributes</h2>
                <p>The <code>&lt;area&gt;</code> tag also supports the <a href="htl_event-attributes.php">event attributes in HTML5</a>.</p>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>&lt;area&gt;</code> tag is supported in all major modern browsers.</p>
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
                <p>See tutorial on: <a href="../des-html/ht_links.php">HTML Links</a>.</p>
                <p>Related tag: <code><a href="ht_img-tag.php">&lt;img&gt;</a></code>, <code><a href="ht_map-tag.php">&lt;map&gt;</a></code>.</p>
                <div class="bottom-link clearfix">
                    <a href="ht_applet-tag.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="htl_article-tag.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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