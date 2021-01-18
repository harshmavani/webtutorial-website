
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="HTML5 progress Tag">
      <meta name="keywords" content="html,html5,HTML5 progress Tag">
	  <meta name="author" content="webschooltoday.com">
    <title>HTML5 progress Tag - WebSchool Today</title>
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">HTML5 progress Tag</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
            	<h1>HTML5 <code>&lt;progress&gt;</code> Tag</h1>
                <p class="topic">Topic: <a href="htl_tags.php">HTML5 Tags Reference</a><span class="topic-nav"><a href="ht_pre-tag.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="ht_q-tag.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>&lt;progress&gt;</code> element represents the completion progress of a task.</p>
                <p>This element normally used to indicate how much of a task has been completed, such as loading something on a page or registration process. It is typically displayed as a progress bar and often marked as a percentage from 0 to 100%.</p>
                <p>The following table summarizes the usages context and the version history of this tag.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Placement:</th>
                            <td>Inline</td>
                        </tr>
                        <tr>
                            <th>Content:</th>
                            <td>Inline and text, but no <code>&lt;progress&gt;</code> among its descendants</td>
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
                <p>The basic syntax of the <code>&lt;progress&gt;</code> tag is given with:</p>
                <div class="shadow">
                    <div class="syntax"><i>HTML&thinsp;/&thinsp;XHTML:</i> <span class="tag">&lt;progress&gt;</span> ... <span class="tag">&lt;/progress&gt;</span></div>
                </div>
                <p>The example below shows the <code>&lt;progress&gt;</code> tag in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab9741.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<h2>Task Progress</h2>
<p>Progress: <progress id="bar" value="0" max="100"><span>0</span>%</progress></p>
<script type="text/javascript">
    var i = 0;
    var progressBar = document.getElementById("bar");
    function countNumbers(){
        if(i < 100){
            i = i + 1;
            progressBar.value = i;
            // For browsers that don't support progress tag
            progressBar.getElementsByTagName("span")[0].textContent = i;
        }
        // Wait for sometime before running this script again
        setTimeout("countNumbers()", 500);
    }
    countNumbers();
</script>

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
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> The <code>&lt;progress&gt;</code> element normally used in conjunction with the JavaScript to display the progress of a task. This element should not be used for representing a gauge. To represent a gauge, use the <code><a href="htl_meter-tag.php">&lt;meter&gt;</a></code> tag instead.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Tag-Specific Attributes</h2>
                <p>The following table shows the attributes that are specific to the <code>&lt;progress&gt;</code> tag.</p>
                <div class="shadow">
                    <table class="data">
                        <tr>
                            <th>Attribute</th>
                            <th>Value</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td><code>max</code></td>
                            <td><i>number</i></td>
                            <td>Specifies how much work the task requires in total.</td>
                        </tr>
                        <tr>
                            <td><code>value</code></td>
                            <td><i>number</i></td>
                            <td>Specifies how much of the task has been completed. It must be a valid floating point number between 0 and max, or between 0 and 1 if the max attribute is not present.</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Global Attributes</h2>
                <p>Like all other HTML tags, the <code>&lt;progress&gt;</code> tag supports the <a href="htl_global-attributes.php">global attributes in HTML5</a>.</p>
                <hr />
                <h2>Event Attributes</h2>
                <p>The <code>&lt;progress&gt;</code> tag also supports the <a href="htl_event-attributes.php">event attributes in HTML5</a>.</p>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>&lt;progress&gt;</code> tag is supported in all major modern browsers.</p>
                <div class="shadow">
                    <div class="support">
                        <table>
                            <tr>
                                <td><img src="../assets/images/browser.jpg" alt="Browsers Icon" /></td>
                                <td>
                                    <h2>Basic Support&mdash;</h2>
                                    <ul>
                                        <li>Firefox <span>16+</span></li>
                                        <li>Google Chrome <span>8+</span></li>
                                        <li>Internet Explorer <span>10+</span></li>
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
                <p>Related tags: <code><a href="htl_meter-tag.php">&lt;meter&gt;</a></code>.</p>
                <div class="bottom-link clearfix">
                    <a href="ht_pre-tag.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="ht_q-tag.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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