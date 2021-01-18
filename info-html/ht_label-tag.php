
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="HTML label Tag">
      <meta name="keywords" content="html,html5,HTML label Tag">
	  <meta name="author" content="webschooltoday.com">
    <title>HTML label Tag - WebSchool Today</title>
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">HTML label Tag</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>HTML <code>&lt;label&gt;</code> Tag</h1>
                <p class="topic">Topic: <a href="htl_tags.php">HTML5 Tags Reference</a><span class="topic-nav"><a href="htl_keygen-tag.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="ht_legend-tag.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>	
                <p>The <code>&lt;label&gt;</code> tag is used to define a caption for a form control in <a href="../des-html/ht_forms.php">HTML form</a>. Each label element is associated with exactly one form control either by using the for attribute, or by placing the control element inside the label element.</p>
                <p>The following table summarizes the usages context and the version history of this tag.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Placement:</th>
                            <td>Inline</td>
                        </tr>
                        <tr>
                            <th>Content:</th>
                            <td>Inline and text</td>
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
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"  style="background-color:#fad28c"
>
                        <p><strong>Important:</strong> The <code>&lt;label&gt;</code> element provides a usability improvement by making the form more accessible for mouse users. It provides a larger clickable area for small items, like checkboxes or radio buttons, so that if the user clicks on the text within the <code>&lt;label&gt;</code> element, it toggles the control.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Syntax</h2>
                <p>The basic syntax of the <code>&lt;dl&gt;</code> tag is given with:</p>
                <div class="shadow">
                    <div class="syntax"><span class="tag">&lt;label <span class="attribute">for</span>="<span class="attribute-value">control id</span>" &gt;</span> ... <span class="tag">&lt;/label&gt;</span></div>
                </div>
                <p>The example below shows the <code>&lt;label&gt;</code> tag in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabed67.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<form>
    <input type="radio" name="gender" value="male" id="male">
    <label for="male">Male</label>
    <input type="radio" name="gender" value="female" id="female">
    <label for="female">Female</label>
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
                <p>The following table shows the attributes that are specific to the <code>&lt;label&gt;</code> tag.</p>
                <div class="shadow">
                    <table class="data">
                        <tr>
                            <th>Attribute</th>
                            <th style="width:100px;">Value</th>
                            <th>Description</th>
                        </tr>
						<tr>
                            <td><code>for</code></td>
                            <td><i>form-control-id</i></td>
                            <td>Specifies which form control a label relates to.</td>
                        </tr>
                        <tr>
                            <td><code>form</code> <span class="htl_badge" title="New in HTML5"></span></td>
                            <td><i>form-id</i></td>
                            <td>Specifies the <code><a href="ht_form-tag.php">&lt;form&gt;</a></code> element that the <code>&lt;label&gt;</code> element is associated with (its form owner).</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Global Attributes</h2>
                <p>Like all other HTML tags, the <code>&lt;label&gt;</code> tag supports the <a href="htl_global-attributes.php">global attributes in HTML5</a>.</p>
                <hr />
                <h2>Event Attributes</h2>
                <p>The <code>&lt;label&gt;</code> tag also supports the <a href="htl_event-attributes.php">event attributes in HTML5</a>.</p>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>&lt;label&gt;</code> tag is supported in all major modern browsers.</p>
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
                <p>Other form-related tags: <code><a href="ht_form-tag.php">&lt;form&gt;</a></code>, <code><a href="ht_fieldset-tag.php">&lt;fieldset&gt;</a></code>, <code><a href="ht_legend-tag.php">&lt;legend&gt;</a></code>, <code><a href="ht_input-tag.php">&lt;input&gt;</a></code>, <code><a href="ht_textarea-tag.php">&lt;textarea&gt;</a></code>, <code><a href="ht_select-tag.php">&lt;select&gt;</a></code>, <code><a href="ht_optgroup-tag.php">&lt;optgroup&gt;</a></code>, <code><a href="ht_option-tag.php">&lt;option&gt;</a></code>, <code><a href="ht_button-tag.php">&lt;button&gt;</a></code>.</p> 
                <div class="bottom-link clearfix">
                    <a href="htl_keygen-tag.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="ht_legend-tag.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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