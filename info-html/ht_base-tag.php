
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="HTML base Tag">
      <meta name="keywords" content="html,html5,HTML base Tag">
	  <meta name="author" content="webschooltoday.com">
    <title>HTML base Tag - WebSchool Today</title>
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">HTML base Tag</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>HTML <code>&lt;base&gt;</code> Tag</h1>
                <p class="topic">Topic: <a href="htl_tags.php">HTML5 Tags Reference</a><span class="topic-nav"><a href="ht_b-tag.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="ht_basefont-tag.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>&lt;base&gt;</code> tag defines the base URL and a common target to for all relative URLs contained within a document. There must be no more than one <code>&lt;base&gt;</code> tag per document.</p>
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
                <p>The basic syntax of the <code>&lt;base&gt;</code> tag is given with:</p>
                <div class="shadow">
        			<div class="syntax"><i>HTML:</i><span class="tag">&lt;base <span class="attribute">href</span>="<span class="attribute-value"><i>URL</i></span>"&gt;</span>; <i>XHTML:</i><span class="tag">&lt;base <span class="attribute">href</span>="<span class="attribute-value"><i>URL</i></span>" /&gt;</span></div>
                </div>                
				<p>The example below shows the <code>&lt;base&gt;</code> tag in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab0c90.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Example of HTML base tag</title>
    <base href="https://www.tutorialrepublic.com/">
</head>
<body>
    <p>Learn <a href="des-css/">CSS</a>.</p>
</body>
</html>

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
                <p>The relative URL "des-css/" would resolve to:</p>
                <div class="green-box">https://www.webschooltoday.com/des-css/</div>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> If multiple <code>&lt;base&gt;</code> tags are specified, only the first '<code>href</code>' and first '<code>target</code>' attribute's value are used, all others are ignored.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Tag-Specific Attributes</h2>
                <p>The following table shows the attributes that are specific to the <code>&lt;base&gt;</code> tag.</p>
                <div class="shadow">
                    <table class="data">
                        <tr>
                            <th>Attribute</th>
                            <th style="width:70px;">Value</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td colspan="3" class="section"><strong>Required</strong> &mdash; One of the following attributes must be specified for the markup to be valid.</td>
                        </tr>
                        <tr>
                            <td><code>href</code></td>
                            <td><i>URL</i></td>
                            <td>Specifies the base URL for all relative URLs in the document.</td>
                        </tr>
                        <tr>
                            <td><code>target</code></td>
                            <td><code>_blank<br />_parent<br />_self<br />_top</code></td>
                            <td>Specifies the default location to display the result when hyperlinks or forms in the document cause navigation.</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Global Attributes</h2>
                <p>Like all other HTML tags, the <code>&lt;base&gt;</code> tag supports the <a href="htl_global-attributes.php">global attributes in HTML5</a>.</p>
                <hr />
                <h2>Event Attributes</h2>
                <p>The <code>&lt;base&gt;</code> tag also supports the <a href="htl_event-attributes.php">event attributes in HTML5</a>.</p>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>&lt;base&gt;</code> tag is supported in all major modern browsers.</p>
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
                                        <li>Internet Explorer <span>2+</span>/li>
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
                <p>Related tag: <code><a href="ht_a-tag.php">&lt;a&gt;</a></code>.</p>
                <div class="bottom-link clearfix">
                    <a href="ht_b-tag.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="ht_basefont-tag.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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