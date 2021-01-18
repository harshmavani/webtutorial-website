
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="HTML textarea Tag">
      <meta name="keywords" content="html,html5,HTML textarea Tag">
	  <meta name="author" content="webschooltoday.com">
    <title>HTML textarea Tag - WebSchool Today</title>
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">HTML textarea Tag</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>HTML <code>&lt;textarea&gt;</code> Tag</h1>
                <p class="topic">Topic: <a href="htl_tags.php">HTML5 Tags Reference</a><span class="topic-nav"><a href="ht_td-tag.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="ht_tfoot-tag.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>&lt;textarea&gt;</code> tag defines a multi-line text input control within a form. The text inside the textarea usually rendered in browser's default monospace (fixed-width) font such as Courier. A text area can hold unlimited number of characters.</p>
                <p>The following table summarizes the usages context and the version history of this tag.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Placement:</th>
                            <td>Inline</td>
                        </tr>
                        <tr>
                            <th>Content:</th>
                            <td>Text</td>
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
                <p>The basic syntax of the <code>&lt;textarea&gt;</code> tag is given with:</p>
                <div class="shadow">
                    <div class="syntax"><i>HTML&thinsp;/&thinsp;XHTML:</i> <span class="tag">&lt;textarea <span class="attribute">cols</span>="<span class="attribute-value"><i>number</i></span>" <span class="attribute">rows</span>="<span class="attribute"><i>number</i></span>" &gt;</span> ... <span class="tag">&lt;/textarea&gt;</span></div>
                </div>
                <p>The example below shows the <code>&lt;textarea&gt;</code> tag in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab4f99.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<form>
    <p>Leave your Comment: 
        <textarea cols="60" rows="5">write here...</textarea>
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
                <p>The following table shows the attributes that are specific to the <code>&lt;textarea&gt;</code> tag.</p>
                <div class="shadow space">
                    <table class="data">
                        <tr>
                            <th style="width:105px;">Attribute</th>
                            <th style="width:90px;">Value</th>
                            <th>Description</th>
                        </tr>
						<tr>
                            <td><code>autofocus</code> <span class="htl_badge" title="New in HTML5"></span></td>
                            <td><code>autofocus</code></td>
                            <td>Specifies that the textarea should automatically get focus when the document is loaded.</td>
                        </tr>
                        <tr>
                            <td><code>cols</code></td>
                            <td><i>number</i></td>
                            <td>Specifies the number of visible text lines.</td>
                        </tr>
                        <tr>
                            <td><code>disabled</code></td>
                            <td><i>disabled</i></td>
                            <td>This boolean attribute disables the textarea for user input or interaction.</td>
                        </tr>
						<tr>
                            <td><code>form</code> <span class="htl_badge" title="New in HTML5"></span></td>
                            <td><code>form-id</code></td>
                            <td>Specifies the form that the textarea is associated with i.e. its "form owner".</td>
                        </tr>
						<tr>
                            <td><code>maxlength</code> <span class="htl_badge" title="New in HTML5"></span></td>
                            <td><i>number</i></td>
                            <td>Specifies the maximum number of characters that the user can enter in the textarea.</td>
                        </tr>
						<tr>
                            <td><code>minlength</code> <span class="htl_badge" title="New in HTML5"></span></td>
                            <td><i>number</i></td>
                            <td>Specifies the minimum number of characters required that the user should enter in the textarea.</td>
                        </tr>
                        <tr>
                            <td><code>name</code></td>
                            <td><i>unique-name</i></td>
                            <td>Assign a name to the textarea control.</td>
                        </tr>
						<tr>
                            <td><code>placeholder</code> <span class="htl_badge" title="New in HTML5"></span></td>
                            <td><i>text</i></td>
                            <td>Provides a hint to the user of what can be entered in the textarea. Placeholder text must not contain line breaks.</td>
                        </tr>
                        <tr>
                            <td><code>readonly</code></td>
                            <td><code>readonly</code></td>
                            <td>This boolean attribute indicates that the user cannot modify the value of the textarea control (i.e. read-only).</td>
                        </tr>
						<tr>
                            <td><code>required</code> <span class="htl_badge" title="New in HTML5"></span></td>
                            <td><code>required</code></td>
                            <td>This Boolean attribute specifies that the user must fill in a value before submitting the form.</td>
                        </tr>
						<tr>
                            <td><code>rows</code></td>
                            <td><i>number</i></td>
                            <td>Specifies the visible width in average character widths.</td>
                        </tr>
						<tr>
                            <td><code>wrap</code> <span class="htl_badge" title="New in HTML5"></span></td>
                            <td><code>hard<br />soft</code></td>
                            <td>Specifies how the value of the textarea is to be wrapped for form submission.</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Global Attributes</h2>
                <p>Like all other HTML tags, the <code>&lt;textarea&gt;</code> tag supports the <a href="htl_global-attributes.php">global attributes in HTML5</a>.</p>
                <hr />
                <h2>Event Attributes</h2>
                <p>The <code>&lt;textarea&gt;</code> tag also supports the <a href="htl_event-attributes.php">event attributes in HTML5</a>.</p>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>&lt;textarea&gt;</code> tag is supported in all major modern browsers.</p>
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
                <p>Other form-related tags: <code><a href="ht_form-tag.php">&lt;form&gt;</a></code>, <code><a href="ht_fieldset-tag.php">&lt;fieldset&gt;</a></code>, <code><a href="ht_legend-tag.php">&lt;legend&gt;</a></code>, <code><a href="ht_label-tag.php">&lt;label&gt;</a></code>, <code><a href="ht_input-tag.php">&lt;input&gt;</a></code>, <code><a href="ht_select-tag.php">&lt;select&gt;</a></code>, <code><a href="ht_optgroup-tag.php">&lt;optgroup&gt;</a></code>, <code><a href="ht_option-tag.php">&lt;option&gt;</a></code>, <code><a href="ht_button-tag.php">&lt;button&gt;</a></code>.</p> 
                <div class="bottom-link clearfix">
                    <a href="ht_td-tag.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="ht_tfoot-tag.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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