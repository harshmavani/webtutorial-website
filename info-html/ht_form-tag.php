
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="HTML form Tag">
      <meta name="keywords" content="html,html5,HTML form Tag">
	  <meta name="author" content="webschooltoday.com">
    <title>HTML form Tag - WebSchool Today</title>
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">HTML form Tag</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>HTML <code>&lt;form&gt;</code> Tag</h1>
                <p class="topic">Topic: <a href="htl_tags.php">HTML5 Tags Reference</a><span class="topic-nav"><a href="htl_footer-tag.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="ht_frame-tag.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>&lt;form&gt;</code> tag defines an HTML form that contains interactive controls which enable a user to submit information to a web server. An HTML form is used to capture user information such as username, password, address details, credit card information, and so on.</p>
                <p>Information can be captured in the form using many different form controls, such as <code><a href="ht_input-tag.php">&lt;input&gt;</a></code>, <code><a href="ht_textarea-tag.php">&lt;textarea&gt;</a></code>, <code><a href="ht_select-tag.php">&lt;select&gt;</a></code>, <code><a href="ht_option-tag.php">&lt;option&gt;</a></code>, <code><a href="ht_button-tag.php">&lt;button&gt;</a></code>. There are also labeling and grouping controls, which include the <code><a href="ht_optgroup-tag.php">&lt;optgroup&gt;</a></code>, <code><a href="ht_fieldset-tag.php">&lt;fieldset&gt;</a></code>, <code><a href="ht_legend-tag.php">&lt;legend&gt;</a></code>, and <code><a href="ht_label-tag.php">&lt;label&gt;</a></code> elements.</p>
                <p>The following table summarizes the usages context and the version history of this tag.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Placement:</th>
                            <td>Block</td>
                        </tr>
                        <tr>
                            <th>Content:</th>
                            <td>Block, inline, and text, but not containing <code>&lt;form&gt;</code> elements</td>
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
                <hr />
                <h2>Syntax</h2>
                <p>The basic syntax of the <code>&lt;form&gt;</code> tag is given with:</p>
                <div class="shadow">
                    <div class="syntax"><i>HTML&thinsp;/&thinsp;XHTML:</i> <span class="tag">&lt;form <span class="attribute">action</span>="<i><span class="attribute-value">URL</span></i>" <span class="attribute">method</span>="<span class="attribute-value">get</span>|<span class="attribute-value">post</span>"&gt;</span> ... <span class="tag">&lt;/form&gt;</span></div>
                </div>
                <p>The example below shows the <code>&lt;form&gt;</code> tag in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab4dc0.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<form action="action.php" method="post">
    <p>
        First name: <input type="text" name="first-name">
        <button type="submit" value="Submit">Submit</button>
        <button type="reset" value="Reset">Reset</button>
    </p>
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
                <p>The following table shows the attributes that are specific to the <code>&lt;form&gt;</code> tag.</p>
                <div class="shadow">
                    <table class="data">
                        <tr>
                            <th style="width:110px;">Attribute</th>
                            <th style="width:150px;">Value</th>
                            <th>Description</th>
                        </tr>
						<tr>
                            <td><code>accept</code></td>
                            <td><i>content-type-list</i></td>
                            <td><a href="../definitions.php#obsolete" class="obsolete" title="Not supported in HTML5">Obsolete</a> A comma-separated list of content types that the server accepts.</td>
                        </tr>
                        <tr>
                            <td><code>accept-charset</code></td>
                            <td><i>charset-list</i></td>
                            <td>Specifies the list of character encodings for input data that is accepted by the server processing this form.</td>
                        </tr>
                        <tr>
                            <td><code>action</code></td>
                            <td><i>URL</i></td>
                            <td>Specifies the URL of a program that processes the information submitted via the form.</td>
                        </tr>
						<tr>
                            <td><pre><code>autocomplete</code> <span class="htl_badge" title="New in HTML5"></span></pre></td>
                            <td><code>on<br />off</code></td>
                            <td>Specifies whether the browser autofill feature for a form is on or off.</td>
                        </tr>
                        <tr>
                            <td><code>enctype</code></td>
                            <td><code style="padding-bottom: 12px;">application/x-www-form-urlencoded</code><br /><code style="padding-bottom: 12px;">multipart/form-data</code><br /><code>text/plain</code></td>
                            <td>Specifies how the form data should be encoded when submitting the form to the server (only for <code>method="post"</code>)</td>
                        </tr>
                        <tr>
                            <td><code>method</code></td>
                            <td><code>get<br />post</code></td>
                            <td>Specifies which HTTP method will be used to submit the form data.</td>
                        </tr>
                        <tr>
                            <td><code>name</code></td>
                            <td><i>text</i></td>
                            <td>Specifies the name of a form.</td>
                        </tr>
						<tr>
                            <td><code>novalidate</code> <span class="htl_badge" title="New in HTML5"></span></td>
                            <td><code>novalidate</code></td>
                            <td>This Boolean attribute specifies that the form is not to be validated when submitted.</td>
                        </tr>
                        <tr>
                            <td><code>target</code></td>
                            <td><code>_blank<br />_parent<br />_self<br />_top</code><br /><i>framename</i></td>
                            <td>Specifies a target to display the response that is received after submitting the form</td>
                        </tr>
                    </table>
                </div>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585"> 
                            <p><strong>Read Carefully:</strong> The default value for the <code>enctype</code> attribute is <code>application/x-www-form-urlencoded</code>. The value <code>multipart/form-data</code> should be used in combination with the INPUT element (when <code>type="file"</code>).</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Global Attributes</h2>
                <p>Like all other HTML tags, the <code>&lt;form&gt;</code> tag supports the <a href="htl_global-attributes.php">global attributes in HTML5</a>.</p>
                <hr />
                <h2>Event Attributes</h2>
                <p>The <code>&lt;form&gt;</code> tag also supports the <a href="htl_event-attributes.php">event attributes in HTML5</a>.</p>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>&lt;form&gt;</code> tag is supported in all major modern browsers.</p>
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
                <p>See tutorial on: <a href="../des-html/ht_forms.php">HTML Forms</a>.</p>
                <p>Other form-related tags: <code><a href="ht_fieldset-tag.php">&lt;fieldset&gt;</a></code>, <code><a href="ht_legend-tag.php">&lt;legend&gt;</a></code>, <code><a href="ht_label-tag.php">&lt;label&gt;</a></code>, <code><a href="ht_input-tag.php">&lt;input&gt;</a></code>, <code><a href="ht_textarea-tag.php">&lt;textarea&gt;</a></code>, <code><a href="ht_select-tag.php">&lt;select&gt;</a></code>, <code><a href="ht_optgroup-tag.php">&lt;optgroup&gt;</a></code>, <code><a href="ht_option-tag.php">&lt;option&gt;</a></code>, <code><a href="ht_button-tag.php">&lt;button&gt;</a></code>.</p>
                <div class="bottom-link clearfix">
                    <a href="htl_footer-tag.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="ht_frame-tag.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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