
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="HTML5 output Tag">
      <meta name="keywords" content="html,html5,HTML5 output Tag">
	  <meta name="author" content="webschooltoday.com">
    <title>HTML5 output Tag - WebSchool Today</title>
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">HTML5 output Tag</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
            	<h1>HTML5 <code>&lt;output&gt;</code> Tag</h1>
                <p class="topic">Topic: <a href="htl_tags.php">HTML5 Tags Reference</a><span class="topic-nav"><a href="ht_option-tag.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="ht_p-tag.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>&lt;output&gt;</code> element represents the result of a calculation. Typically this element defines a region that will be used to display text output from some calculation that is usually performed by a client-side script (usually JavaScript).</p>
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
                            <td><span class="htl_badge"></span> New in HTML5</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Syntax</h2>
                <p>The basic syntax of the <code>&lt;output&gt;</code> tag is given with:</p>
                <div class="shadow">
                    <div class="syntax"><i>HTML&thinsp;/&thinsp;XHTML:</i> <span class="tag">&lt;output&gt;</span> ... <span class="tag">&lt;/output&gt;</span></div>
                </div>
                <p>The example below shows the <code>&lt;output&gt;</code> tag in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab47b2.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<form oninput="result.value=parseInt(a.value)+parseInt(b.value)">
    <input type="range" id="a" value="50"> +
    <input type="number" id="b" value="100"> =
    <output name="result" for="a b"></output>
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
                <p>The following table shows the attributes that are specific to the <code>&lt;output&gt;</code> tag.</p>
                <div class="shadow">
                    <table class="data">
                        <tr>
                            <th>Attribute</th>
                            <th style="width:75px;">Value</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td><code>for</code></td>
                            <td><i>element-id</i></td>
                            <td>Indicating the relationship between the result of the calculation and the elements contributed input values to this calculation. The value of this attribute can be a list of IDs of other elements.</td>
                        </tr>
                        <tr>
                            <td><code>form</code></td>
                            <td><i>form-id</i></td>
                            <td>Specifies the form element that this element is associated with.</td>
                        </tr>
                        <tr>
                            <td><code>name</code></td>
                            <td><i>name</i></td>
                            <td>Specifies name of the element.</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Global Attributes</h2>
                <p>Like all other HTML tags, the <code>&lt;output&gt;</code> tag supports the <a href="htl_global-attributes.php">global attributes in HTML5</a>.</p>
                <hr />
                <h2>Event Attributes</h2>
                <p>The <code>&lt;output&gt;</code> tag also supports the <a href="htl_event-attributes.php">event attributes in HTML5</a>.</p>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>&lt;output&gt;</code> tag is supported in all major modern browsers.</p>
                <div class="shadow">
                    <div class="support">
                        <table>
                            <tr>
                                <td><img src="../assets/images/browser.jpg" alt="Browsers Icon" /></td>
                                <td>
                                    <h2>Basic Support&mdash;</h2>
                                    <ul>
                                        <li>Firefox <span>4+</span></li>
                                        <li>Google Chrome <span>10+</span></li>
                                        <li>Internet Explorer <span title="Not supported">&times;</span></li>
                                        <li>Apple Safari <span>5.1+</span></li>
                                        <li>Opera <span>11+</span></li>
                                    </ul>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <hr />
                <h2>Further Reading</h2>
                <p>See tutorial on: <a href="../des-html/ht_forms.php">HTML Forms</a>.</p>
                <p>Related tags: <code><a href="htl_progress-tag.php">&lt;progress&gt;</a></code>.</p>
                <div class="bottom-link clearfix">
                    <a href="ht_option-tag.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="ht_p-tag.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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