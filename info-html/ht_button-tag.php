
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="HTML button Tag">
      <meta name="keywords" content="html,html5,HTML button Tag">
	  <meta name="author" content="webschooltoday.com">
    <title>HTML button Tag - WebSchool Today</title>
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">HTML button Tag</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>HTML <code>&lt;button&gt;</code> Tag</h1>
                <p class="topic">Topic: <a href="htl_tags.php">HTML5 Tags Reference</a><span class="topic-nav"><a href="ht_br-tag.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="htl_canvas-tag.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>&lt;button&gt;</code> tag creates a clickable button in an <a href="../des-html/ht_forms.php">HTML form</a>.</p>
                <p>Buttons created with the <code>&lt;button&gt;</code> element function just like buttons created with the input element, but they offer richer rendering possibilities; as you can put content, like text or images inside the button element. For example, a <code>button</code> element that contains an image functions like and may resemble an <code><a href="ht_input-tag.php">&lt;input&gt;</a></code> element whose type is set to <code>image</code>.</p>
                <p>The following table summarizes the usages context and the version history of this tag.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Placement:</th>
                            <td>Inline</td>
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
                            <td>HTML 4, 4.01, 5</td>
                        </tr>
                    </table>
                </div>
                <div class="usage">
                <h3 id="usage-notes"><em>Usage Notes</em></h3>
                <ul>
                    <li>If you use the <code>&lt;button&gt;</code> tag in an HTML form, different browsers may submit different values. Internet Explorer, prior version 9, will submit the text contained between the opening and closing tag of the button element, while other browsers will submit the content of the value attribute.</li>
                    <li>In IE7 when submitting a form with <code><span class="tag">&lt;button <span class="attribute">type</span>="<span class="attribute-value">submit</span>" <span class="attribute">name</span>="<span class="attribute-value">myButton</span>" <span class="attribute">value</span>="<span class="attribute-value">foo</span>"&gt;</span>Click me<span class="tag">&lt;/button&gt;</span></code>, the POST data sent will result in <code>myButton=Click me</code> instead of <code>myButton=foo</code>.</li>
                </ul>
                </div>
                <hr />
                <h2>Syntax</h2>
                <p>The basic syntax of the <code>&lt;button&gt;</code> tag is given with:</p>
                <div class="shadow">
                    <div class="syntax"><i>HTML&thinsp;/&thinsp;XHTML:</i> <span class="tag">&lt;button <span class="attribute">type</span>="<span class="attribute-value">button</span>|<span class="attribute-value">reset</span>|<span class="attribute-value">submit</span>"&gt;</span> ... <span class="tag">&lt;/button&gt;</span></div>
                </div>
                <p>The example below shows the <code>&lt;button&gt;</code> tag in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab5f20.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<form action="action.php" method="post">
    <p>
        First name:<input type="text" name="firstname">
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
                <p>The following table shows the attributes that are specific to the <code>&lt;button&gt;</code> tag.</p>
                <div class="shadow">
                    <table class="data">
                        <tr>
                            <th style="width:125px;">Attribute</th>
                            <th style="width:145px;">Value</th>
                            <th>Description</th>
                        </tr>
						<tr>
                            <td><code>autofocus</code> <span class="htl_badge" title="New in HTML5"></span></td>
                            <td><code>autofocus</code></td>
                            <td>This Boolean attribute specifies that the button should automatically get focus when the document is loaded.</td>
                        </tr>
                        <tr>
                            <td><code>disabled</code></td>
                            <td><code>disabled</code></td>
                            <td>This Boolean attribute disables the button for user interaction.</td>
                        </tr>
						<tr>
                            <td><code>form</code> <span class="htl_badge" title="New in HTML5"></span></td>
                            <td><i>form-id</i></td>
                            <td>Specifies the <code><a href="ht_form-tag.php">&lt;form&gt;</a></code> element that the button element is associated with (its <em>form owner</em>).</td>
                        </tr>
						<tr>
                            <td><code>formaction</code> <span class="htl_badge" title="New in HTML5"></span></td>
                            <td><i>URL</i></td>
                            <td>Specifies the URL of a program that processes the information submitted by the button (only for <code>type="submit"</code>).</td>
                        </tr>
						<tr>
                            <td><code>formenctype</code> <span class="htl_badge" title="New in HTML5"></span></td>
                            <td><code>application/x-www-form-urlencoded<br />multipart/form-data<br />text/plain</code></td>
                            <td>Specifies how the form data should be encoded when submitting the form data to the server (only for <code>method="post"</code>)</td>
                        </tr>
						<tr>
                            <td><code>formmethod</code> <span class="htl_badge" title="New in HTML5"></span></td>
                            <td><code>get<br />post</code></td>
                            <td>Specifies the HTTP method that the browser will use to submit the form (only for <code>type="submit"</code>).</td>
                        </tr>
						<tr>
                            <td><code>formnovalidate</code> <span class="htl_badge" title="New in HTML5"></span></td>
                            <td><code>formnovalidate</code></td>
                            <td>This Boolean attribute specifies that the form data should not be validated when it is submitted (only for <code>type="submit"</code>).</td>
                        </tr>
						<tr>
                            <td><code>formtarget</code> <span class="htl_badge" title="New in HTML5"></span></td>
                            <td><code>_blank<br />_self<br />_parent<br />_top</code><br /><i>framename</i></td>
                            <td>Specifies a target to display the response that is received after submitting the form.</td>
                        </tr>
                        <tr>
                            <td><code>name</code></td>
                            <td><i>unique-name</i></td>
                            <td>Represents the name of the button.</td>
                        </tr>
                        <tr>
                            <td><code>type</code></td>
                            <td><code>button<br />submit<br />reset</code></td>
                            <td>Specifies the type of button.</td>
                        </tr>
                        <tr>
                            <td><code>value</code></td>
                            <td><i>text</i></td>
                            <td>Specifies the initial value of the button.</td>
                        </tr>
                
                    </table>
                </div>
                <hr />
                <h2>Global Attributes</h2>
                <p>Like all other HTML tags, the <code>&lt;button&gt;</code> tag supports the <a href="htl_global-attributes.php">global attributes in HTML5</a>.</p>
                <hr />
                <h2>Event Attributes</h2>
                <p>The <code>&lt;button&gt;</code> tag also supports the <a href="htl_event-attributes.php">event attributes in HTML5</a>.</p>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>&lt;button&gt;</code> tag is supported in all major modern browsers.</p>
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
                                        <li>Internet Explorer <span>4+</span></li>
                                        <li>Apple Safari <span>1+</span></li>
                                        <li>Opera <span>5+</span></li>
                                    </ul>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab warning-icon" title="Warning"><i></i></div>
                        <div class="warning-box">
                        <p><strong>Warning:</strong> The <code>&lt;button&gt;</code> tag should be used with caution (see <a href="#usage-notes">Usage Notes</a>) &mdash; or avoided entirely to be on the safe side. Use the <code><a href="ht_input-tag.php">&lt;input&gt;</a></code> tag instead, to create the <em>submit buttons</em> in your HTML forms.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Further Reading</h2>
                <p>See tutorial on: <a href="../des-html/ht_forms.php">HTML Form</a>.</p>
                <p>Related tags: <code><a href="ht_form-tag.php">&lt;form&gt;</a></code>, <code><a href="ht_input-tag.php">&lt;input&gt;</a></code>.</p>
                <div class="bottom-link clearfix">
                    <a href="ht_br-tag.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="htl_canvas-tag.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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