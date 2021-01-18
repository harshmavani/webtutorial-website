
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="HTML5 keygen Tag">
      <meta name="keywords" content="html,html5,HTML5 keygen Tag">
	  <meta name="author" content="webschooltoday.com">
    <title>HTML5 keygen Tag - WeBSchool Today</title>
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">HTML5 keygen Tag</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
            	<h1>HTML5 <code>&lt;keygen&gt;</code> Tag</h1>
                <p class="topic">Topic: <a href="htl_tags.php">HTML5 Tags Reference</a><span class="topic-nav"><a href="ht_kbd-tag.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="ht_label-tag.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>&lt;keygen&gt;</code> element generates an encryption key for passing encrypted data to a server. When an HTML form is submitted, the browser will generate a key pair and store the private key in the browser's local key storage and send the public key to the server.</p>
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
                            <td><span class="htl_badge"></span> New in HTML5</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Syntax</h2>
                <p>The basic syntax of the <code>&lt;keygen&gt;</code> tag is given with:</p>
                <div class="shadow">
                    <div class="syntax"><i>HTML:</i> <span class="tag">&lt;keygen&gt;</span>; <i>XHTML:</i> <span class="tag">&lt;keygen /&gt;</span></div>
                </div>
                <p>The example below shows the <code>&lt;keygen&gt;</code> tag in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabcc2a.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<form action="process-key.php" method="post">
    <label>Username: <input type="text" name="username"></label>
    <label>Encryption: <keygen name="key"></label>
    <input type="submit" value="Submit">
</form>

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
                <p>The following table shows the attributes that are specific to the <code>&lt;keygen&gt;</code> tag.</p>
                <div class="shadow">
                    <table class="data">
                        <tr>
                            <th>Attribute</th>
                            <th style="width:85px;">Value</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td><code>autofocus</code></td>
                            <td><code>autofocus</code></td>
                            <td>This Boolean attribute specifies that a keygen element should automatically get focus when the page loads.</td>
                        </tr>
                        <tr>
                            <td><code>challenge</code></td>
                            <td><code>challenge</code></td>
                            <td>Specifies a challenge string that is submitted along with the public key. The default value is an empty string, if not specified.</td>
                        </tr>
                        <tr>
                            <td><code>disabled</code></td>
                            <td><code>disabled</code></td>
                            <td>This Boolean attribute indicates that the keygen form control disabled for interaction.</td>
                        </tr>
                        <tr>
                            <td><code>form</code></td>
                            <td><i>form-id</i></td>
                            <td>Specifies the <code><a href="ht_form-tag.php">&lt;form&gt;</a></code> element that the <code>&lt;keygen&gt;</code> element is associated with (its form owner).</td>
                        </tr>
                        <tr>
                            <td><code>keytype</code></td>
                            <td><code>rsa<br />dsa<br />ec</code></td>
                            <td>Specifies the type of key generated. The default value is <code>rsa</code>.</td>
                        </tr>
                        <tr>
                            <td><code>name</code></td>
                            <td><i>name</i></td>
                            <td>Defines a name for the keygen element, which is submitted with the form data.</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Global Attributes</h2>
                <p>Like all other HTML tags, the <code>&lt;keygen&gt;</code> tag supports the <a href="htl_global-attributes.php">global attributes in HTML5</a>.</p>
                <hr />
                <h2>Event Attributes</h2>
                <p>The <code>&lt;keygen&gt;</code> tag also supports the <a href="htl_event-attributes.php">event attributes in HTML5</a>.</p>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>&lt;keygen&gt;</code> tag is supported in all major modern browsers.</p>
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
                                        <li>Internet Explorer <span title="Not supported">&times;</span></li>
                                        <li>Apple Safari <span>1.2+</span></li>
                                        <li>Opera <span>3+</span></li>
                                    </ul>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <hr />
                <h2>Further Reading</h2>
                <p>See tutorial on: <a href="../des-html/ht_forms.php">HTML Forms</a>.</p>
                <p>Related tags: <code><a href="ht_form-tag.php">&lt;form&gt;</a></code>, <code><a href="ht_label-tag.php">&lt;label&gt;</a></code>.</p>
                <div class="bottom-link clearfix">
                    <a href="ht_kbd-tag.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="ht_label-tag.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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