
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="HTML optgroup Tag">
      <meta name="keywords" content="html,html5,HTML optgroup Tag">
	  <meta name="author" content="webschooltoday.com">
    <title>HTML optgroup Tag - WebSchool Today</title>
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">HTML optgroup Tag</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>HTML <code>&lt;optgroup&gt;</code> Tag</h1>
                <p class="topic">Topic: <a href="htl_tags.php">HTML5 Tags Reference</a><span class="topic-nav"><a href="ht_ol-tag.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="ht_option-tag.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>&lt;optgroup&gt;</code> tag defines a group of options within a dropdown list defined by the <code><a href="ht_select-tag.php">&lt;select&gt;</a></code> element. Each option offered by the dropdown list is defined by an <code><a href="ht_option-tag.php">&lt;option&gt;</a></code> tag. A <code>&lt;select&gt;</code> element must contain at least one <code>&lt;option&gt;</code> element.</p>
                <p>The following table summarizes the usages context and the version history of this tag.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Parent:</th>
                            <td><code><a href="ht_select-tag.php">&lt;select&gt;</a></code></td>
                        </tr>
                        <tr>
                            <th>Content:</th>
                            <td>One or more <code><a href="ht_option-tag.php">&lt;option&gt;</a></code> elements</td>
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
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> The <code>&lt;optgroup&gt;</code> elements may not be nested. This element should occur only within the context of a <code><a href="ht_select-tag.php">&lt;select&gt;</a></code> element.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Syntax</h2>
                <p>The basic syntax of the <code>&lt;optgroup&gt;</code> tag is given with:</p>
                <div class="shadow">
                    <div class="syntax"><i>HTML&thinsp;/&thinsp;XHTML:</i> <span class="tag">&lt;optgroup <span class="attribute">label</span>="<span class="attribute-value"><i>text</i></span>"&gt;</span> ... <span class="tag">&lt;/optgroup&gt;</span></div>
                </div>
                <p>The example below shows the <code>&lt;optgroup&gt;</code> tag in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab72ca.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<select>
    <optgroup label="Sports cars">
        <option value="ferrari">Ferrari</option>
        <option value="lamborghini">Lamborghini</option>
    </optgroup>
    <optgroup label="Luxury cars">
        <option value="mercedes">Mercedes</option>
        <option value="bentley">Bentley</option>
    </optgroup>
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
                            <p><strong>Important:</strong> Grouping of related options is particularly helpful when the user have to choose from a long list of options; groups of related options are easier to grasp and access, than a single long list of options.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Tag-Specific Attributes</h2>
                <p>The following table shows the attributes that are specific to the <code>&lt;optgroup&gt;</code> tag.</p>
                <div class="shadow space">
                    <table class="data">
                        <tr>
                            <th>Attribute</th>
                            <th>Value</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td colspan="3" class="section"><strong>Required</strong> &mdash; The following attribute must be specified on this tag for the markup to be valid.</td>
                        </tr>
                        <tr>
                            <td><code>label</code></td>
                            <td><i>	text</i></td>
                            <td>Specifies the label for a group of options.</td>
                        </tr>
                        <tr>
                            <td colspan="3" class="section"><strong>Optional</strong> &mdash; The following attributes are optional.</td>
                        </tr>
                        <tr>
                            <td><code>disabled</code></td>
                            <td><code>disabled</code></td>
                            <td>This Boolean attribute indicates that the enclosed set of options is disabled i.e. none of the items in the option group is selectable.</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Global Attributes</h2>
                <p>Like all other HTML tags, the <code>&lt;optgroup&gt;</code> tag supports the <a href="htl_global-attributes.php">global attributes in HTML5</a>.</p>
                <hr />
                <h2>Event Attributes</h2>
                <p>The <code>&lt;optgroup&gt;</code> tag also supports the <a href="htl_event-attributes.php">event attributes in HTML5</a>.</p>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>&lt;optgroup&gt;</code> tag is supported in all major modern browsers.</p>
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
                                        <li>Internet Explorer <span>6+</span></li>
                                        <li>Apple Safari <span>1+</span></li>
                                        <li>Opera <span>7+</span></li>
                                    </ul>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <hr />
                <h2>Further Reading</h2>
                <p>See tutorial on: <a href="../des-html/ht_forms.php">HTML Forms</a>.</p>
                <p>Other form-related tags: <code><a href="ht_form-tag.php">&lt;form&gt;</a></code>, <code><a href="ht_fieldset-tag.php">&lt;fieldset&gt;</a></code>, <code><a href="ht_legend-tag.php">&lt;legend&gt;</a></code>, <code><a href="ht_label-tag.php">&lt;label&gt;</a></code>, <code><a href="ht_input-tag.php">&lt;input&gt;</a></code>, <code><a href="ht_textarea-tag.php">&lt;textarea&gt;</a></code>, <code><a href="ht_select-tag.php">&lt;select&gt;</a></code>, <code><a href="ht_option-tag.php">&lt;option&gt;</a></code>, <code><a href="ht_button-tag.php">&lt;button&gt;</a></code>.</p>
                <div class="bottom-link clearfix">
                    <a href="ht_ol-tag.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="ht_option-tag.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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