
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="HTML iframe Tag">
      <meta name="keywords" content="html,html5,HTML iframe Tag">
	  <meta name="author" content="webschooltoday.com">
    <title>HTML iframe Tag - WebSchool Today</title>
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">HTML iframe Tag</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>HTML <code>&lt;iframe&gt;</code> Tag</h1>
                <p class="topic">Topic: <a href="htl_tags.php">HTML5 Tags Reference</a><span class="topic-nav"><a href="ht_i-tag.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="ht_img-tag.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>	
                <p>The <code>&lt;iframe&gt;</code> (short for <em>inline frame</em>) tag defines an inline frame that contains external objects including other web page.</p>
                <p>The following table summarizes the usages context and the version history of this tag.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Placement:</th>
                            <td>Block</td>
                        </tr>
                        <tr>
                            <th>Content:</th>
                            <td>Any block, inline, and text</td>
                        </tr>
                        <tr>
                            <th>Start/End Tag:</th>
                            <td>Start tag: <strong>required</strong>, End tag: <strong>required</strong></td>
                        </tr>
                        <tr>
                            <th>Version:</th>
                            <td>HTML 4, 5</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Syntax</h2>
                <p>The basic syntax of the <code>&lt;iframe&gt;</code> tag is given with:</p>
                <div class="shadow">
                    <div class="syntax"><i>HTML&thinsp;/&thinsp;XHTML:</i> <span class="tag">&lt;iframe <span class="attribute">src</span>="<i><span class="attribute-value">URL</span></i>" <span class="attribute">scrolling</span>="<span class="attribute-value">auto</span>|<span class="attribute-value">no</span>|<span class="attribute-value">yes</span>"&gt;</span> ... <span class="tag">&lt;/iframe&gt;</span></div>
                </div>
                <p>The example below shows the <code>&lt;iframe&gt;</code> tag in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabbd7a.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<iframe src="hello.php" width="400" height="300"
    scrolling="auto">
    <p>[Your browser does not support frames or is currently configured not to display frames. However, you may visit <a href="optional.php">the related document.</a>]</p>
</iframe>

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
                <p>The following table shows the attributes that are specific to the <code>&lt;iframe&gt;</code> tag.</p>
                <div class="shadow">
                    <table class="data">
                        <tr>
                            <th>Attribute</th>
                            <th style="width:155px;">Value</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td><code>align</code></td>
                            <td><code>left<br />right<br />top<br />middle<br />bottom</code></td>
                            <td><a href="../definitions.php#obsolete" class="obsolete" title="Not supported in HTML5">Obsolete</a> Specifies the alignment of an iframe with respect to the surrounding elements.</td>
                        </tr>
                        <tr>
                            <td><code>frameborder</code></td>
                            <td><code>1<br />0</code></td>
                            <td><a href="../definitions.php#obsolete" class="obsolete" title="Not supported in HTML5">Obsolete</a> Instructs the browser whether or not to display a border around the iframe.</td>
                        </tr>
                        <tr>
                            <td><code>height</code></td>
                            <td><i>length</i></td>
                            <td>Specifies the height of the iframe.</td>
                        </tr>
                        <tr>
                            <td><code>longdesc</code></td>
                            <td><i>URL</i></td>
                            <td><a href="../definitions.php#obsolete" class="obsolete" title="Not supported in HTML5">Obsolete</a> Specifies a link to a long description of the iframe.</td>
                        </tr>
                        <tr>
                            <td><code>marginheight</code></td>
                            <td><i>pixels</i></td>
                            <td><a href="../definitions.php#obsolete" class="obsolete" title="Not supported in HTML5">Obsolete</a> Specifies the amount of space (in pixels) between the top and bottom edges of the iframe and its contents.</td>
                        </tr>
                        <tr>
                            <td><code>marginwidth</code></td>
                            <td><i>pixels</i></td>
                            <td><a href="../definitions.php#obsolete" class="obsolete" title="Not supported in HTML5">Obsolete</a> Specifies the amount of space (in pixels) between the left and right edges of the iframe and its contents.</td>
                        </tr>
                        <tr>
                            <td><code>name</code></td>
                            <td><i>text</i></td>
                            <td>Assigns a name to the iframe to be referenced by targeted links.</td>
                        </tr>
						<tr>
                            <td><code>sandbox</code> <span class="htl_badge" title="New in HTML5"></span></td>
                            <td><code>allow-forms<br />allow-pointer-lock<br />allow-popups<br />allow-same-origin<br />allow-scripts<br />allow-top-navigation</code></td>
                            <td>Enables extra restrictions on the content that can appear in the iframe.</td>
                        </tr>
                        <tr>
                            <td><code>scrolling</code></td>
                            <td><code>yes<br />no<br />auto</code></td>
                            <td><a href="../definitions.php#obsolete" class="obsolete" title="Not supported in HTML5">Obsolete</a> Specifies whether or not scroll bars appear in the iframe.</td>
                        </tr>
						<tr>
                            <td><code>seamless</code> <span class="htl_badge" title="New in HTML5"></span></td>
                            <td><code>seamless</code></td>
                            <td>This Boolean attribute specifies that the iframe should appear as a part of the containing&thinsp;document.</td>
                        </tr>
                        <tr>
                            <td><code>src</code></td>
                            <td><i>URL</i></td>
                            <td>Specifies the location of the document to be embedded inside the iframe.</td>
                        </tr>
						<tr>
                            <td><code>srcdoc</code> <span class="htl_badge" title="New in HTML5"></span></td>
                            <td><i>HTML-code</i></td>
                            <td>Specifies the HTML content of the page to embed in the iframe. This attribute will override the content specified in the src attribute, if present.</td>
                        </tr>
                        <tr>
                            <td><code>width</code></td>
                            <td><i>length</i></td>
                            <td>Specifies the width of the iframe.</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Global Attributes</h2>
                <p>Like all other HTML tags, the <code>&lt;iframe&gt;</code> tag supports the <a href="htl_global-attributes.php">global attributes in HTML5</a>.</p>
                <hr />
                <h2>Event Attributes</h2>
                <p>The <code>&lt;iframe&gt;</code> tag also supports the <a href="htl_event-attributes.php">event attributes in HTML5</a>.</p>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>&lt;iframe&gt;</code> tag is supported in all major modern browsers.</p>
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
                                        <li>Opera <span>5+</span></li>
                                    </ul>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <hr />
                <h2>Further Reading</h2>
                <p>See tutorial on: <a href="../des-html/ht_iframes.php">HTML Iframes</a>.</p>
                <div class="bottom-link clearfix">
                    <a href="ht_i-tag.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="ht_img-tag.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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