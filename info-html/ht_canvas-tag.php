
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="HTML5 canvas Tag">
      <meta name="keywords" content="html,html5,HTML5 canvas Tag">
	  <meta name="author" content="webschooltoday.com">
    <title>HTML5 canvas Tag - WebSchool Today</title>
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">HTML5 canvas Tag</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
            	<h1>HTML5 <code>&lt;canvas&gt;</code> Tag</h1>
                <p class="topic">Topic: <a href="htl_tags.php">HTML5 Tags Reference</a><span class="topic-nav"><a href="ht_button-tag.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="ht_caption-tag.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>&lt;canvas&gt;</code> element defines a region in the document, which can be used to draw graphics on the fly via scripting (usually JavaScript). For example, it can be used to draw path and shapes, graphs or even perform animations.</p>
                <p>The following table summarizes the usages context and the version history of this tag.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Placement:</th>
                            <td>Inline</td>
                        </tr>
                        <tr>
                            <th>Content:</th>
                            <td>Inline, and text</td>
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
                <p>The basic syntax of the <code>&lt;canvas&gt;</code> tag is given with:</p>
                <div class="shadow">
                    <div class="syntax"><i>HTML&thinsp;/&thinsp;XHTML:</i> <span class="tag">&lt;canvas&gt;</span> ... <span class="tag">&lt;/canvas&gt;</span></div>
                </div>
                <p>The example below shows the <code>&lt;canvas&gt;</code> tag in action.</p>
                <div class="my_codeb-rg3-w space">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab8708.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<canvas id="myCanvas" width="300" height="200"></canvas>
<script type="text/javascript">
    window.onload = function(){
        var canvas = document.getElementById("myCanvas");
        var context = canvas.getContext("2d");
        context.moveTo(50, 150);
        context.lineTo(250, 50);
        context.stroke();
    };
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
                            <p><strong>Read Carefully:</strong> You may (and should) provide alternate content inside the canvas element. That content will be rendered both on older browsers that don't support canvas and in browsers with JavaScript disabled.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Tag-Specific Attributes</h2>
                <p>The following table shows the attributes that are specific to the <code>&lt;canvas&gt;</code> tag.</p>
                <div class="shadow">
                    <table class="data">
                        <tr>
                            <th>Attribute</th>
                            <th>Value</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td><code>width</code></td>
                            <td><i>pixels</i></td>
                            <td>Sets the width of the canvas.</td>
                        </tr>
                        <tr>
                            <td><code>height</code></td>
                            <td><i>pixels</i></td>
                            <td>Sets the height of the canvas.</td>
                        </tr>					
                    </table>
                </div>
                <hr />
                <h2>Global Attributes</h2>
                <p>Like all other HTML tags, the <code>&lt;canvas&gt;</code> tag supports the <a href="htl_global-attributes.php">global attributes in HTML5</a>.</p>
                <hr />
                <h2>Event Attributes</h2>
                <p>The <code>&lt;canvas&gt;</code> tag also supports the <a href="htl_event-attributes.php">event attributes in HTML5</a>.</p>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>&lt;canvas&gt;</code> tag is supported in all major modern browsers.</p>
                <div class="shadow">
                    <div class="support">
                        <table>
                            <tr>
                                <td><img src="../assets/images/browser.jpg" alt="Browsers Icon" /></td>
                                <td>
                                    <h2>Basic Support&mdash;</h2>
                                    <ul>
                                        <li>Firefox <span>2+</span></li>
                                        <li>Google Chrome <span>4+</span></li>
                                        <li>Internet Explorer <span>9+</span></li>
                                        <li>Apple Safari <span>3.1+</span></li>
                                        <li>Opera <span>9+</span></li>
                                    </ul>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <hr />
                <h2>Further Reading</h2>
                <p>See tutorial on: <a href="../des-html/htl_canvas.php" class="selected">HTML5 Canvas</a>.</p>
                <p>Related tags: <code><a href="ht_script-tag.php" class="selected">&lt;script&gt;</a></code>.</p>
                <div class="bottom-link clearfix">
                    <a href="ht_button-tag.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="ht_caption-tag.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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