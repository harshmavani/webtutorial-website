
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="HTML select Tag">
      <meta name="keywords" content="html,html5,HTML select Tag">
	  <meta name="author" content="webschooltoday.com">
    <title>HTML select Tag - WebSchool Today</title>
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">HTML select Tag</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>HTML <code>&lt;select&gt;</code> Tag</h1>
                <p class="topic">Topic: <a href="htl_tags.php">HTML5 Tags Reference</a><span class="topic-nav"><a href="htl_section-tag.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="ht_small-tag.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>&lt;select&gt;</code> element defines a selection list within a <code><a href="ht_form-tag.php">&lt;form&gt;</a></code>. The selection list typically displayed in the browser as a pull-down menu (i.e. a drop-down list) from which a user can select one or more options depending on its attributes. Each option offered by the selection list is defined by an <code><a href="ht_option-tag.php">&lt;option&gt;</a></code> element.</p>
                <p>The following table summarizes the usages context and the version history of this tag.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Placement:</th>
                            <td>Inline</td>
                        </tr>
                        <tr>
                            <th>Content:</th>
                            <td>One or more of <code><a href="ht_optgroup-tag.php">&lt;optgroup&gt;</a></code> and/or <code><a href="ht_option-tag.php">&lt;option&gt;</a></code></td>
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
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> A <code>&lt;select&gt;</code> element must contain at least one <code>&lt;option&gt;</code> element. Options can be pre-selected for the user if attribute <code>selected="selected"</code> is specified to the start tag of the <code>&lt;option&gt;</code> element.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Syntax</h2>
                <p>The basic syntax of the <code>&lt;select&gt;</code> tag is given with:</p>
                <div class="shadow">
                    <div class="syntax"><i>HTML&thinsp;/&thinsp;XHTML:</i> <span class="tag">&lt;select&gt;</span> ... <span class="tag">&lt;/select&gt;</span></div>
                </div>
                <p>The example below shows the <code>&lt;select&gt;</code> tag in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab0c97.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<select>
    <option value="ferrari">Ferrari</option>
    <option value="mercedes">Mercedes</option>
   <option value="porsche">Porsche</option>
</select>

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
                <p>The following table shows the attributes that are specific to the <code>&lt;select&gt;</code> tag.</p>
                <div class="shadow">
                    <table class="data">
                        <tr>
                            <th style="width:87px;">Attribute</th>
                            <th style="width:85px;">Value</th>
                            <th>Description</th>
                        </tr>
						<tr>
                            <td><code>autofocus</code> <span class="htl_badge" title="New in HTML5"></span></td>
                            <td><code>autofocus</code></td>
                            <td>Specifies that the drop-down list should automatically get focus when the document is loaded.</td>
                        </tr>
                        <tr>
                            <td><code>disabled</code></td>
                            <td><code>disabled</code></td>
                            <td>This Boolean attribute indicates that drop-down list is disabled i.e. the drop-down list is not selectable.</td>
                        </tr>
						<tr>
                            <td><code>form</code> <span class="htl_badge" title="New in HTML5"></span></td>
                            <td><code>form-id</code></td>
                            <td>Specifies the form that the select element is associated with i.e. its "form owner".</td>
                        </tr>
                        <tr>
                            <td><code>multiple</code></td>
                            <td><code>multiple</code></td>
                            <td>This Boolean attribute indicates that multiple options can be selected in the list.</td>
                        </tr>
                        <tr>
                            <td><code>name</code></td>
                            <td><i>unique-name</i></td>
                            <td>Defines the name for the select element.</td>
                        </tr>
						<tr>
                            <td><code>required</code> <span class="htl_badge" title="New in HTML5"></span></td>
                            <td><code>required</code></td>
                            <td>This Boolean attribute indicates that an option with a non-empty value must be selected before form submission.</td>
                        </tr>
                        <tr>
                            <td><code>size</code></td>
                            <td><i>number</i></td>
                            <td>Specifies the number of options to show to the user.</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Global Attributes</h2>
                <p>Like all other HTML tags, the <code>&lt;select&gt;</code> tag supports the <a href="htl_global-attributes.php">global attributes in HTML5</a>.</p>
                <hr />
                <h2>Event Attributes</h2>
                <p>The <code>&lt;select&gt;</code> tag also supports the <a href="htl_event-attributes.php">event attributes in HTML5</a>.</p>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>&lt;select&gt;</code> tag is supported in all major modern browsers.</p>
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
                <p>Other form-related tags: <code><a href="ht_form-tag.php">&lt;form&gt;</a></code>, <code><a href="ht_fieldset-tag.php">&lt;fieldset&gt;</a></code>, <code><a href="ht_legend-tag.php">&lt;legend&gt;</a></code>, <code><a href="ht_label-tag.php">&lt;label&gt;</a></code>, <code><a href="ht_input-tag.php">&lt;input&gt;</a></code>, <code><a href="ht_textarea-tag.php">&lt;textarea&gt;</a></code>, <code><a href="ht_optgroup-tag.php">&lt;optgroup&gt;</a></code>, <code><a href="ht_option-tag.php">&lt;option&gt;</a></code>, <code><a href="ht_button-tag.php">&lt;button&gt;</a></code>.</p>
                <div class="bottom-link clearfix">
                    <a href="htl_section-tag.php" class="previous-page-bottom"><i class="fa fa-arrow-letf" aria-hidden="true"></i> Previous</a>
                    <a href="ht_small-tag.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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