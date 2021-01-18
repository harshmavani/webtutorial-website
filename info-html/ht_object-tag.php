
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="HTML object Tag">
      <meta name="keywords" content="html,html5,HTML object Tag">
	  <meta name="author" content="webschooltoday.com">
    <title>HTML object Tag - WebSchool Today</title>
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">HTML object Tag</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>HTML <code>&lt;object&gt;</code> Tag</h1>
                <p class="topic">Topic: <a href="htl_tags.php">HTML5 Tags Reference</a><span class="topic-nav"><a href="ht_noscript-tag.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="ht_ol-tag.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>	
                <p>The <code>&lt;object&gt;</code> tag defines an embedded object within an HTML document. It is used to include a variety of different kinds of media files into a document such as videos, audio, Java applets, ActiveX, PDF document, Flash animations or even images. You can also use the <code>&lt;object&gt;</code> element to embed another webpage into your HTML document.</p>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> The <code><a href="ht_param-tag.php">&lt;param&gt;</a></code> element is used to pass parameters to the plugins that have been embedded with the <code>&lt;object&gt;</code> element.</p>
                        </div>
                    </div>
                </div>
                <p>The following table summarizes the usages context and the version history of this tag.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Placement:</th>
                            <td>Block</td>
                        </tr>
                        <tr>
                            <th>Content:</th>
                            <td>Block, inline, and text; any <code><a href="ht_param-tag.php">&lt;param&gt;</a></code> elements must come first</td>
                        </tr>
                        <tr>
                            <th>Start/End Tag:</th>
                            <td>Start tag: <strong>required</strong>, End tag: <strong>required</strong></td>
                        </tr>
                        <tr>
                            <th>Version:</th>
                            <td>HTML 4, 4.01, 5</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Syntax</h2>
                <p>The basic syntax of the <code>&lt;object&gt;</code> tag is given with:</p>
                <div class="shadow">
                    <div class="syntax"><i>HTML&thinsp;/&thinsp;XHTML:</i> <span class="tag">&lt;object <span class="attribute">data</span>="<i><span class="attribute-value">URL</span></i>" <span class="attribute">type</span>="<i><span class="attribute-value">content-type</span></i>"&gt;</span> ... <span class="tag">&lt;/object&gt;</span></div>
                </div>
                <p>The example below shows the <code>&lt;object&gt;</code> tag in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabe55c.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<object type="application/x-shockwave-flash">
    <param name="movie" value="video/blur.swf">
</object>

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
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"  style="background-color:#fad28c"
>
                            <p><strong>Important:</strong> It is recommended to use the <code>type</code> when <code>data</code> is specified since it allows the browser to avoid loading information for unsupported content types.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Tag-Specific Attributes</h2>
                <p>The following table shows the attributes that are specific to the <code>&lt;object&gt;</code> tag.</p>
                <div class="shadow">
                    <table class="data">
                        <tr>
                            <th>Attribute</th>
                            <th style="width:85px;">Value</th>
                            <th>Description</th>
                        </tr>
						<tr>
                            <td class="section" colspan="3"><strong>Required</strong> &mdash; One of the following attributes must be specified for the markup to be valid.</td>
                        </tr>
						<tr>
                            <td><code>data</code></td>
                            <td><i>URL</i></td>
                            <td>Specifies the location of the data or file that the object requires.</td>
                        </tr>
						<tr>
                            <td><code>type</code></td>
                            <td><i>content-type</i></td>
                            <td>Specifies the <a href="../definitions.php#content-type">content-type</a> of the resource specified by <code>data</code> attribute. At least one of <code>data</code> and <code>type</code> must be defined.</td>
                        </tr>
						<tr>
                            <td class="section" colspan="3"><strong>Optional</strong> &mdash; The following attributes are optional.</td>
                        </tr>
                        <tr>
                            <td><code>align</code></td>
                            <td><code>left<br />right<br />top<br />middle<br />bottom</code></td>
                            <td><a href="../definitions.php#obsolete" class="obsolete" title="Not supported in HTML5">Obsolete</a> Use <a href="../des-css/css-alignment.php">CSS</a> instead. Specifies the alignment of <code>&lt;object&gt;</code> element with respect to the surrounding content.</td>
                        </tr>
                        <tr>
                            <td><code>archive</code></td>
                            <td><i>URLs</i></td>
                            <td><a href="../definitions.php#obsolete" class="obsolete" title="Not supported in HTML5">Obsolete</a> A space separated list of URL's to archives containing resources relevant to the object.</td>
                        </tr>
                        <tr>
                            <td><code>border</code></td>
                            <td><i>pixels</i></td>
                            <td><a href="../definitions.php#obsolete" class="obsolete" title="Not supported in HTML5">Obsolete</a> Specifies the width of the border around the object. Use the CSS <a href="../info-css/css-border-property.php">border</a> property instead.</td>
                        </tr>
                        <tr>
                            <td><code>classid</code></td>
                            <td><i>URI</i></td>
                            <td><a href="../definitions.php#obsolete" class="obsolete" title="Not supported in HTML5">Obsolete</a> Defines the URL or internal reference for the object's implementation.</td>
                        </tr>
                        <tr>
                            <td><code>codebase</code></td>
                            <td><i>URI</i></td>
                            <td><a href="../definitions.php#obsolete" class="obsolete" title="Not supported in HTML5">Obsolete</a> Specifies the base path used to resolve relative URL's specified by the <code>classid</code>, <code>data</code>, and <code>archive</code> attributes.</td>
                        </tr>
                        <tr>
                            <td><code>codetype</code></td>
                            <td><i>content-type</i></td>
                            <td><a href="../definitions.php#obsolete" class="obsolete" title="Not supported in HTML5">Obsolete</a> Specifies the <a href="../definitions.php#content-type">content-type</a> of data expected when downloading the object specified by <code>classid</code> attribute.</td>
                        </tr>
                        <tr>
                            <td><code>declare</code></td>
                            <td><code>declare</code></td>
                            <td>This boolean attribute specifies that the object should only be declared but not instantiated.</td>
                        </tr>
						<tr>
                            <td><code>form</code></td>
                            <td><i>form-id</i></td>
                            <td>Specifies the form that the object element is associated with i.e. its "form owner".</td>
                        </tr>
                        <tr>
                            <td><code>height</code></td>
                            <td><i>length</i></td>
                            <td>Sets the object's height.</td>
                        </tr>
                        <tr>
                            <td><code>hspace</code></td>
                            <td><i>pixels</i></td>
                            <td><a href="../definitions.php#obsolete" class="obsolete" title="Not supported in HTML5">Obsolete</a> Specifies the amount of whitespace on left and right side of an object.</td>
                        </tr>
                        <tr>
                            <td><code>name</code></td>
                            <td><i>text</i></td>
                            <td>Specifies the name of the object.</td>
                        </tr>
                        <tr>
                            <td><code>standby</code></td>
                            <td><i>message</i></td>
                            <td><a href="../definitions.php#obsolete" class="obsolete" title="Not supported in HTML5">Obsolete</a> Specifies a text message to be displayed while the object is loading.</td>
                        </tr>
                        <tr>
                            <td><code>usemap</code></td>
                            <td><i>URL</i></td>
                            <td>Defines a client-side image map associated with an image object element.</td>
                        </tr>
                        <tr>
                            <td><code>vspace</code></td>
                            <td><i>pixels</i></td>
                            <td><a href="../definitions.php#obsolete" class="obsolete" title="Not supported in HTML5">Obsolete</a> Specifies the amount of whitespace on top and bottom side of an object.</td>
                        </tr>
                        <tr>
                            <td><code>width</code></td>
                            <td><i>length</i></td>
                            <td>Sets the object's width.</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Global Attributes</h2>
                <p>Like all other HTML tags, the <code>&lt;object&gt;</code> tag supports the <a href="htl_global-attributes.php">global attributes in HTML5</a>.</p>
                <hr />
                <h2>Event Attributes</h2>
                <p>The <code>&lt;object&gt;</code> tag also supports the <a href="htl_event-attributes.php">event attributes in HTML5</a>.</p>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>&lt;object&gt;</code> tag is supported in all major modern browsers.</p>
                <div class="shadow">
                    <div class="support">
                        <table>
                            <tr>
                                <td><img src="../lib/images/browsers-icon.png" alt="Browsers Icon" /></td>
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
                <hr />
                <h2>Further Reading</h2>
                <p>See tutorial on: <a href="../des-html/htl_audio.php">HTML Audio</a>, <a href="../des-html/htl_video.php">HTML Video</a>.</p>
                <p>Related tag: <code><a href="ht_param-tag.php">&lt;param&gt;</a></code>.</p> 
                <div class="bottom-link clearfix">
                    <a href="ht_noscript-tag.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="ht_ol-tag.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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