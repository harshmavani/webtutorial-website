
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="HTML input Tag">
      <meta name="keywords" content="html,html5,HTML input Tag">
	  <meta name="author" content="webschooltoday.com">
    <title>HTML input Tag - WebSchool Today</title>
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">HTML input Tag</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>HTML <code>&lt;input&gt;</code> Tag</h1>
  				<p class="topic">Topic: <a href="htl_tags.php">HTML5 Tags Reference</a><span class="topic-nav"><a href="ht_img-tag.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="ht_ins-tag.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>&lt;input&gt;</code> tag is used to create interactive controls within a form.</p>	
                <p>An <code>&lt;input&gt;</code> element can vary in the way it appears&nbsp;and the attributes it uses or requires&nbsp;depending on the <code><a href="#type">type</a></code> attribute specified.</p>
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
                <hr />
                <h2>Syntax</h2>
                <p>The basic syntax of the <code>&lt;input&gt;</code> tag is given with:</p>
                <div class="shadow">
                    <div class="syntax"><i>HTML:</i><span class="tag">&lt;input&gt;</span>; <i>XHTML:</i><span class="tag">&lt;input /&gt;</span></div>
                </div>
                <p>The example below shows the <code>&lt;input&gt;</code> tag in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab89f4.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<form action="action.php" method="post">
    <label for="first-name">First name:</label>
    <input type="text" name="first-name" id="first-name">
    <input type="submit" value="Submit">
    <input type="reset" name="Reset">
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
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"  style="background-color:#fad28c"
>
                            <p><strong>Important:</strong> Use the HTML <code><a href="ht_label-tag.php">&lt;label&gt;</a></code> element to define the labels for input controls. It will make the form more accessible for user.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Tag-Specific Attributes</h2>
                <p>The following table shows the attributes that are specific to the <code>&lt;input&gt;</code> tag.</p>
                <div class="shadow">
                    <table class="data">
                        <tr>
                            <th style="width:125px;">Attribute</th>
                            <th style="width:145px;">Value</th>
                            <th>Description</th>
                        </tr>
                        <tr id="type">
                            <td><code>type</code></td>
                            <td><code>button<br />checkbox<br />color<br />date <br />datetime <br />datetime-local <br />email <br />file<br />hidden<br />image<br />month <br />number <br />password<br />radio<br />range <br />reset<br />search<br />submit<br />tel<br />text<br />time <br />url<br />week</code></td>
                            <td>Specifies the type of control to create. See the tutorial on <a href="../des-html/ht_forms.php">HTML Forms</a>, <a href="../des-html/htl_new-input-types.php">HTML5 New Input Types</a> to learn more about the input controls.</td>
                        </tr>
						<tr>
                            <td><code>accept</code></td>
                            <td><i>file-extension<br />content-type</i><br /><code>audio/*<br />video/*<br />image/*</code></td>
                            <td>Specifies the types of files that the server accepts (only for <code>type="file"</code>).</td>
                        </tr>
						<tr>
                            <td><code>align</code></td>
                            <td><code>left<br />right<br />top<br />middle<br />bottom</code></td>
                            <td><a href="../definitions.php#obsolete" class="obsolete" title="Not supported in HTML5">Obsolete</a> Specifies the alignment of an image input (for <code>type="image"</code>).</td>
                        </tr>
						<tr>
                            <td><code>alt</code></td>
                            <td><i>text</i></td>
                            <td>Specifies an alternative text to use when image is not available (for <code>type="image"</code>).</td>
                        </tr>
						<tr>
                            <td><code>autocomplete</code> <span class="htl_badge" title="New in HTML5"></span></td>
                            <td><code>on<br />off</code></td>
                            <td>Specifies whether the browser autofill feature for an input element is on or off.</td>
                        </tr>
						<tr>
                            <td><code>autofocus</code> <span class="htl_badge" title="New in HTML5"></span></td>
                            <td><code>autofocus</code></td>
                            <td>This Boolean attribute specifies that the input element should automatically get focus when the document is loaded.</td>
                        </tr>
						<tr>
                            <td><code>checked</code></td>
                            <td><code>checked</code></td>
                            <td>This boolean attribute specifies that the control is selected by default (for <code>type="radio"</code> or <code>type="checkbox"</code>).</td>
                        </tr>
						<tr>
                            <td><code>disabled</code></td>
                            <td><code>disabled</code></td>
                            <td>This Boolean attribute disables the control for user input or interaction.</td>
                        </tr>
						<tr>
                            <td><code>form</code> <span class="htl_badge" title="New in HTML5"></span></td>
                            <td><i>form-id</i></td>
                            <td>Specifies the <code><a href="ht_form-tag.php">&lt;form&gt;</a></code> element that the input element is associated with (its <em>form owner</em>).</td>
                        </tr>
						<tr>
                            <td><code>formaction</code> <span class="htl_badge" title="New in HTML5"></span></td>
                            <td><i>URL</i></td>
                            <td>Specifies the URL of a program that processes the information submitted by the input (for <code>type="submit"</code> and <code>type="image"</code>).</td>
                        </tr>
						<tr>
                            <td><code>formenctype</code> <span class="htl_badge" title="New in HTML5"></span></td>
                            <td><code>application/x-www-form-urlencoded<br />multipart/form-data<br />text/plain</code></td>
                            <td>Specifies how the form data should be encoded when submitting the form data to the server (for <code>type="submit"</code> and <code>type="image"</code>).</td>
                        </tr>
						<tr>
                            <td><code>formmethod</code> <span class="htl_badge" title="New in HTML5"></span></td>
                            <td><code>get<br />post</code></td>
                            <td>Specifies the HTTP method that the browser will use to submit the form data (for <code>type="submit"</code> and <code>type="image"</code>).</td>
                        </tr>
						<tr>
                            <td><code>formnovalidate</code> <span class="htl_badge" title="New in HTML5"></span></td>
                            <td><code>formnovalidate</code></td>
                            <td>This Boolean attribute specifies that the form control should not be validated when it is submitted (for <code>type="submit"</code> and <code>type="image"</code>).</td>
                        </tr>
						<tr>
                            <td><code>formtarget</code> <span class="htl_badge" title="New in HTML5"></span></td>
                            <td><code>_blank<br />_self<br />_parent<br />_top</code><br /><i>framename</i></td>
                            <td>Specifies a target to display the response that is received after submitting the form (for <code>type="submit"</code> and <code>type="image"</code>)</td>
                        </tr>
						<tr>
                            <td><code>height</code> <span class="htl_badge" title="New in HTML5"></span></td>
                            <td><i>pixels</i></td>
                            <td>Specifies the height of the image displayed as button (only for <code>type="image"</code>).</td>
                        </tr>
						<tr>
                            <td><code>list</code> <span class="htl_badge" title="New in HTML5"></span></td>
                            <td><i>datalist-id</i></td>
                            <td>Refers to a list of pre-defined options to suggest to the user. The value must be an <code>id</code> of a <code><a href="htl_datalist-tag.php">&lt;datalist&gt;</a></code> element in the same page.</td>
                        </tr>
						<tr>
                            <td><code>max</code> <span class="htl_badge" title="New in HTML5"></span></td>
                            <td><i>number<br />date-time</i></td>
                            <td>Specifies the maximum value for an input control, which must not be less than its minimum (<code>min</code> attribute) value.</td>
                        </tr>
						<tr>
                            <td><code>maxlength</code></td>
                            <td><i>number</i></td>
                            <td>Specifies the maximum number of characters that the user can enter in the input box.</td>
                        </tr>
						<tr>
                            <td><code>min</code> <span class="htl_badge" title="New in HTML5"></span></td>
                            <td><i>number<br />date-time</i></td>
                            <td>Specifies the minimum value for an input control, which must not be greater than its maximum (<code>max</code> attribute) value.</td>
                        </tr>
						<tr>
                            <td><code>minlength</code> <span class="htl_badge" title="New in HTML5"></span></td>
                            <td><i>number</i></td>
                            <td>Specifies the minimum number of characters required that the user should enter in the input box.</td>
                        </tr>
						<tr>
                            <td><code>multiple</code> <span class="htl_badge" title="New in HTML5"></span></td>
                            <td><code>multiple</code></td>
                            <td>This Boolean attribute indicates whether the user can enter more than one value.</td>
                        </tr>
                        <tr>
                            <td><code>name</code></td>
                            <td><i>text</i></td>
                            <td>Assign a name to an input control.</td>
                        </tr>
						<tr>
                            <td><code>pattern</code> <span class="htl_badge" title="New in HTML5"></span></td>
                            <td><i>regexp</i></td>
                            <td>Specifies a regular expression that an input element's value is checked against.</td>
                        </tr>
						<tr>
                            <td><code>placeholder</code> <span class="htl_badge" title="New in HTML5"></span></td>
                            <td><i>text</i></td>
                            <td>Provides a hint to the user of what can be entered in the input control. Placeholder text must not contain line breaks.</td>
                        </tr>
						<tr>
                            <td><code>readonly</code></td>
                            <td><code>readonly</code></td>
                            <td>This Boolean attribute indicates that the user cannot modify the value of the control.</td>
                        </tr>
						<tr>
                            <td><code>required</code> <span class="htl_badge" title="New in HTML5"></span></td>
                            <td><code>required</code></td>
                            <td>This Boolean attribute specifies that the user must fill in a value before submitting the form.</td>
                        </tr>
						<tr>
                            <td><code>size</code></td>
                            <td><i>number</i></td>
                            <td>Sets the initial width, in characters, of the input control. If not specified, the default value of <code>20</code> is used.</td>
                        </tr>
						<tr>
                            <td><code>src</code></td>
                            <td><i>URL</i></td>
                            <td>Specifies the location of the image to use as a submit button (for <code>type="image"</code>).</td>
                        </tr>
						<tr>
                            <td><code>step</code> <span class="htl_badge" title="New in HTML5"></span></td>
                            <td><i>number<br />date-time</i></td>
                            <td>Works with the <code>min</code> and <code>max</code> attributes to limit the increments at which a numeric or date-time value can be set.</td>
                        </tr>
                        <tr>
                            <td><code>value</code></td>
                            <td><i>text</i></td>
                            <td>Specifies the initial value of the input control.</td>
                        </tr>
						<tr>
                            <td><code>width</code> <span class="htl_badge" title="New in HTML5"></span></td>
                            <td><i>pixels</i></td>
                            <td>Specifies the width of the image displayed as button (only for <code>type="image"</code>).</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Global Attributes</h2>
                <p>Like all other HTML tags, the <code>&lt;input&gt;</code> tag supports the <a href="htl_global-attributes.php">global attributes in HTML5</a>.</p>
                <hr />
                <h2>Event Attributes</h2>
                <p>The <code>&lt;input&gt;</code> tag also supports the <a href="htl_event-attributes.php">event attributes in HTML5</a>.</p>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>&lt;input&gt;</code> tag is supported in all major modern browsers.</p>
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
                <p>See tutorial on: <a href="../des-html/ht_forms.php">HTML Forms</a>.</p>
                <p>Other form-related tags: <code><a href="ht_fieldset-tag.php">&lt;fieldset&gt;</a></code>, <code><a href="ht_legend-tag.php">&lt;legend&gt;</a></code>, <code><a href="ht_label-tag.php">&lt;label&gt;</a></code>, <code><a href="ht_form-tag.php">&lt;form&gt;</a></code>, <code><a href="ht_textarea-tag.php">&lt;textarea&gt;</a></code>, <code><a href="ht_select-tag.php">&lt;select&gt;</a></code>, <code><a href="ht_optgroup-tag.php">&lt;optgroup&gt;</a></code>, <code><a href="ht_option-tag.php">&lt;option&gt;</a></code>, <code><a href="ht_button-tag.php">&lt;button&gt;</a></code>.</p>
                <div class="bottom-link clearfix">
                    <a href="ht_img-tag.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="ht_ins-tag.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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