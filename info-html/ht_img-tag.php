
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="How to Create Dropdown Menu with Bootstrap 4">
      <meta name="keywords" content="html,html5,HTML img Tag">
	  <meta name="author" content="webschooltoday.com">
    <title>HTML img Tag - WebSchool Today</title>
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">Bootstrap 4 Warning, Info, Success and Error Alerts</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>HTML <code>&lt;img&gt;</code> Tag</h1>
                <p class="topic">Topic: <a href="htl_tags.php">HTML5 Tags Reference</a><span class="topic-nav"><a href="ht_iframe-tag.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="ht_input-tag.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>	
                <p>The <code>&lt;img&gt;</code> (short for <em>image</em>) tag defines an image in an HTML document. Images are not directly inserted into the document; they are linked to the HTML pages. The <code>&lt;img&gt;</code> element creates a holding space to embed the referenced image designated by the <code>src</code> attribute.</p>
                <p>The following table summarizes the usages context and the version history of this tag.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Placement:</th>
                            <td>Inline</td>
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
                <div class="color-box break">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> The browser may replace the image with the alternative text defined in this element's <code>alt</code> attribute in the case of non-graphical browsers, or if the browser is unable to display the image because it is invalid or an unsupported type.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Syntax</h2>
                <p>The basic syntax of the <code>&lt;img&gt;</code> tag is given with:</p>
                <div class="shadow">
                    <div class="syntax"><i>HTML:</i><span class="tag">&lt;img <span class="attribute">src</span>="<i><span class="attribute-value">URL</span></i>" <span class="attribute">alt</span>="<i><span class="attribute-value">text</span></i>"&gt;</span>; <i>XHTML:</i><span class="tag">&lt;img <span class="attribute">src</span>="<i><span class="attribute-value">URL</span></i>" <span class="attribute">alt</span>="<i><span class="attribute-value">text</span></i>" /&gt;</span></div>
                </div>
                <p>The example below shows the <code>&lt;img&gt;</code> tag in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabb49a.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<img src="kites.jpg" alt="Flying Kites">
<img src="sky.jpg" alt="Cloudy Sky">
<img src="ballons.jpg" alt="Hot Air Ballons">

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
                <p>The following table shows the attributes that are specific to the <code>&lt;img&gt;</code> tag.</p>
                <div class="shadow">
                    <table class="data">
                        <tr>
                            <th style="width:105px;">Attribute</th>
                            <th style="width:115px;">Value</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td colspan="3" class="section"><strong>Required</strong> &mdash; The following attributes must be specified on this tag for the markup to be valid.</td>
                        </tr>
                        <tr>
                            <td><code>alt</code></td>
                            <td><i>text</i></td>
                            <td>Provides an alternate text for an image.</td>
                        </tr>
                        <tr>
                            <td><code>src</code></td>
                            <td><i>URL</i></td>
                            <td>Specifies the URL of the image file to be displayed.</td>
                        </tr>
                        <tr>
                            <td colspan="3" class="section"><strong>Optional</strong> &mdash; The following attributes are optional.</td>
                        </tr>
                        <tr>
                            <td><code>align</code></td>
                            <td><code>left<br />right<br />top<br />middle<br />bottom</code></td>
                            <td><a href="../definitions.php#obsolete" class="obsolete" title="Not supported in HTML5">Obsolete</a> Specifies the alignment of an image with respect to the surrounding elements.</td>
                        </tr>
                        <tr>
                            <td><code>border</code></td>
                            <td><i>pixels</i></td>
                            <td><a href="../definitions.php#obsolete" class="obsolete" title="Not supported in HTML5">Obsolete</a> Specifies the width of the border around the image.</td>
                        </tr>
						<tr>
                            <td><code>crossorigin</code> <span class="htl_badge" title="New in HTML5"></span></td>
                            <td><code>anonymous</code><pre><code>use-credentials</code></pre></td>
                            <td>Specifies how the element handles cross-origin requests.</td>
                        </tr>
                        <tr>
                            <td><code>height</code></td>
                            <td><i>length</i></td>
                            <td>Specifies the height of the image.</td>
                        </tr>
                        <tr>
                            <td><code>hspace</code></td>
                            <td><i>pixels</i></td>
                            <td><a href="../definitions.php#obsolete" class="obsolete" title="Not supported in HTML5">Obsolete</a> Specifies the amount of whitespace on left and right side of an image.</td>
                        </tr>
                        <tr>
                            <td><code>ismap</code></td>
                            <td><code>ismap</code></td>
                            <td>This Boolean attribute defines that the image is part of a server-side map.</td>
                        </tr>
                        <tr>
                            <td><code>longdesc</code></td>
                            <td><i>URL</i></td>
                            <td><a href="../definitions.php#obsolete" class="obsolete" title="Not supported in HTML5">Obsolete</a> Specifies a link to a long description of the image.</td>
                        </tr>
                        <tr>
                            <td><code>usemap</code></td>
                            <td><i>URL</i></td>
                            <td><a href="../definitions.php#obsolete" class="obsolete" title="Not supported in HTML5">Obsolete</a> Defines a client-side image map associated with the img element.</td>
                        </tr>
                        <tr>
                            <td><code>vspace</code></td>
                            <td><i>pixels</i></td>
                            <td><a href="../definitions.php#obsolete" class="obsolete" title="Not supported in HTML5">Obsolete</a> Specifies the amount of whitespace on top and bottom side of the image.</td>
                        </tr>
                        <tr>
                            <td><code>width</code></td>
                            <td><i>length</i></td>
                            <td>Specifies the width of the image.</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Global Attributes</h2>
                <p>Like all other HTML tags, the <code>&lt;img&gt;</code> tag supports the <a href="htl_global-attributes.php">global attributes in HTML5</a>.</p>
                <hr />
                <h2>Event Attributes</h2>
                <p>The <code>&lt;img&gt;</code> tag also supports the <a href="htl_event-attributes.php">event attributes in HTML5</a>.</p>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>&lt;img&gt;</code> tag is supported in all major modern browsers.</p>
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
                                        <li>Opera <span>2.1+</span></li>
                                    </ul>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <hr />
                <h2>Further Reading</h2>
                <p>See tutorial on: <a href="../des-html/ht_images.php">HTML Images</a>.</p>
                <p>Related tag: <code><a href="htl_figure-tag.php">&lt;figure&gt;</a></code>, <code><a href="htl_figcaption-tag.php">&lt;figcaption&gt;</a></code>.</p>
                <div class="bottom-link clearfix">
                    <a href="ht_iframe-tag.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="ht_input-tag.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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