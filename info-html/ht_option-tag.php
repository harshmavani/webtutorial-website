
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="HTML option Tag">
      <meta name="keywords" content="html,html5,HTML option Tag">
	  <meta name="author" content="webschooltoday.com">
    <title>HTML option Tag - WebSchool Today</title>
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">HTML option Tag</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>HTML <code>&lt;option&gt;</code> Tag</h1>
                <p class="topic">Topic: <a href="htl_tags.php">HTML5 Tags Reference</a><span class="topic-nav"><a href="ht_optgroup-tag.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="htl_output-tag.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>&lt;option&gt;</code> element represents an option in a dropdown list defined by the <code><a href="ht_select-tag.php">&lt;select&gt;</a></code> element. A dropdown list must contain at least one <code>&lt;option&gt;</code> element.</p>
                <p>The following table summarizes the usages context and the version history of this tag.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Parent:</th>
                            <td><code><a href="ht_select-tag.php">&lt;select&gt;</a></code>, <code><a href="ht_optgroup-tag.php">&lt;optgroup&gt;</a></code></td>
                        </tr>
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
                            <td>Start tag: <strong>required</strong>, End tag: <strong>optional</strong></td>
                        </tr>
                        <tr>
                            <th>Version:</th>
                            <td>HTML 2, 3.2. 4, 4.01, 5</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Syntax</h2>
                <p>The basic syntax of the <code>&lt;option&gt;</code> tag is given with:</p>
                <div class="shadow">
                    <div class="syntax"><i>HTML&thinsp;/&thinsp;XHTML:</i> <span class="tag">&lt;option <span class="attribute">value</span>="<span class="attribute-value"><i>option-value</i></span>"&gt;</span> ... <span class="tag">&lt;/option&gt;</span></div>
                </div>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> In HTML, the end tag for the <code>&lt;option&gt;</code> tag is not mandatory. In XHTML, the <code>&lt;option&gt;</code> tag must be properly closed i.e. both start tag and end tag are required.</p>
                        </div>
                    </div>
                </div>
                <p>The example below shows the <code>&lt;option&gt;</code> tag in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab5204.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
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
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"  style="background-color:#fad28c"
>
                            <p><strong>Important:</strong> You can use the <code><a href="ht_optgroup-tag.php">&lt;optgroup&gt;</a></code> tag for grouping related options within a dropdown list. It will make your forms more accessible for the users, particularly when the user have to choose from a long list of options.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Tag-Specific Attributes</h2>
                <p>The following table shows the attributes that are specific to the <code>&lt;option&gt;</code> tag.</p>
                <div class="shadow">
                    <table class="data">
                        <tr>
                            <th>Attribute</th>
                            <th>Value</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td><code>label</code></td>
                            <td><i>	text</i></td>
                            <td>Specifies a short label for an option.</td>
                        </tr>
                        <tr>
                            <td><code>disabled</code></td>
                            <td><code>disabled</code></td>
                            <td>This Boolean attribute indicates that the enclosed option is disabled i.e. the option is not selectable.</td>
                        </tr>
                        <tr>
                            <td><code>selected</code></td>
                            <td><code>selected</code></td>
                            <td>This Boolean attribute indicates that the option is initially selected.</td>
                        </tr>
                        <tr>
                            <td><code>value</code></td>
                            <td><i>option-value</i></td>
                            <td>Defines a value for an option. If it is not defined, the value of an <code>&lt;option&gt;</code> element is the text content of the element.</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Global Attributes</h2>
                <p>Like all other HTML tags, the <code>&lt;option&gt;</code> tag supports the <a href="htl_global-attributes.php">global attributes in HTML5</a>.</p>
                <hr />
                <h2>Event Attributes</h2>
                <p>The <code>&lt;option&gt;</code> tag also supports the <a href="htl_event-attributes.php">event attributes in HTML5</a>.</p>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>&lt;option&gt;</code> tag is supported in all major modern browsers.</p>
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
                <p>Other form-related tags: <code><a href="ht_form-tag.php">&lt;form&gt;</a></code>, <code><a href="ht_fieldset-tag.php">&lt;fieldset&gt;</a></code>, <code><a href="ht_legend-tag.php">&lt;legend&gt;</a></code>, <code><a href="ht_label-tag.php">&lt;label&gt;</a></code>, <code><a href="ht_input-tag.php">&lt;input&gt;</a></code>, <code><a href="ht_textarea-tag.php">&lt;textarea&gt;</a></code>, <code><a href="ht_select-tag.php">&lt;select&gt;</a></code>, <code><a href="ht_optgroup-tag.php">&lt;optgroup&gt;</a></code>, <code><a href="ht_button-tag.php">&lt;button&gt;</a></code>.</p>
                <div class="bottom-link clearfix">
                    <a href="ht_optgroup-tag.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="htl_output-tag.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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