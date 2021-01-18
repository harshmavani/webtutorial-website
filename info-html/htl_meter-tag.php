
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="HTML5 meter Tag">
      <meta name="keywords" content="html,html5,HTML5 meter Tag">
	  <meta name="author" content="webschooltoday.com">
    <title>HTML5 meter Tag - WebSchool Today</title>
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">HTML5 meter Tag</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
            	<h1>HTML5 <code>&lt;meter&gt;</code> Tag</h1>
                <p class="topic">Topic: <a href="htl_tags.php">HTML5 Tags Reference</a><span class="topic-nav"><a href="ht_meta-tag.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="htl_nav-tag.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>&lt;meter&gt;</code> element represents a scalar measurement within a known range, or a fractional value. This is also known as a gauge.</p>
                <p>The following table summarizes the usages context and the version history of this tag.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Placement:</th>
                            <td>Inline</td>
                        </tr>
                        <tr>
                            <th>Content:</th>
                            <td>Inline and text, but no <code>&lt;meter&gt;</code> among its descendants</td>
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
                <p>The basic syntax of the <code>&lt;meter&gt;</code> tag is given with:</p>
                <div class="shadow">
                    <div class="syntax"><i>HTML&thinsp;/&thinsp;XHTML:</i> <span class="tag">&lt;meter <span class="attribute">value</span>="<span class="attribute-value">5</span>"&gt;</span> ... <span class="tag">&lt;/meter&gt;</span></div>
                </div>
                <p>The example below shows the <code>&lt;meter&gt;</code> tag in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab8a86.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<p>Disk Usage: <meter value="0.8">80%</meter></p>
<p>Total Score: <meter value="6" min="0" max="10">6 out of 10</meter></p>
<p>Pollution Level: <meter low="60" high="80" max="100" value="85">Very High</meter></p>

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
                <p>The following table shows the attributes that are specific to the <code>&lt;meter&gt;</code> tag.</p>
                <div class="shadow">
                    <table class="data">
                        <tr>
                            <th>Attribute</th>
                            <th>Value</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td class="section" colspan="3"><strong>Required</strong> &mdash; The following attribute must be specified on this tag for the markup to be valid.</td>
                        </tr>
                        <tr>
                            <td><code>value</code></td>
                            <td><i>number</i></td>
                            <td>Specifies the current value of the meter or gauge. This must be between the minimum and maximum values.</td>
                        </tr>
                        <tr>
                            <td class="section" colspan="3"><strong>Optional</strong> &mdash; The following attributes are optional.</td>
                        </tr>
                        <tr>
                            <td><code>form</code></td>
                            <td><i>form-id</i></td>
                            <td>Associates the <code>&lt;meter&gt;</code> element with a <code>&lt;form&gt;</code> element.</td>
                        </tr>
                        <tr>
                            <td><code>high</code></td>
                            <td><i>number</i></td>
                            <td>Specifies the range that is considered to be a high value.</td>
                        </tr>
                        <tr>
                            <td><code>low</code></td>
                            <td><i>number</i></td>
                            <td>Specifies the range that is considered to be a low value.</td>
                        </tr>
                        <tr>
                            <td><code>max</code></td>
                            <td><i>number</i></td>
                            <td>Specifies the maximum value of the range.</td>
                        </tr>
                        <tr>
                            <td><code>min</code></td>
                            <td><i>number</i></td>
                            <td>Specifies the minimum value of the range.</td>
                        </tr>
                        <tr>
                            <td><code>optimum</code></td>
                            <td><i>number</i></td>
                            <td>Indicates what value is the optimal value for the gauge.</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Global Attributes</h2>
                <p>Like all other HTML tags, the <code>&lt;meter&gt;</code> tag supports the <a href="htl_global-attributes.php">global attributes in HTML5</a>.</p>
                <hr />
                <h2>Event Attributes</h2>
                <p>The <code>&lt;meter&gt;</code> tag also supports the <a href="htl_event-attributes.php">event attributes in HTML5</a>.</p>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>&lt;meter&gt;</code> tag is supported in all major modern browsers.</p>
                <div class="shadow">
                    <div class="support">
                        <table>
                            <tr>
                                <td><img src="../assets/images/browser.jpg" alt="Browsers Icon" /></td>
                                <td>
                                    <h2>Basic Support&mdash;</h2>
                                    <ul>
                                        <li>Firefox <span>6+</span></li>
                                        <li>Google Chrome <span>8+</span></li>
                                        <li>Internet Explorer <span class="red" title="Not supported">&times;</span></li>
                                        <li>Apple Safari <span>6+</span></li>
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
                    <a href="ht_meta-tag.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="htl_nav-tag.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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