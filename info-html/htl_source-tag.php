
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="HTML5 source Tag">
      <meta name="keywords" content="html,html5,HTML5 source Tag">
	  <meta name="author" content="webschooltoday.com">
    <title>HTML5 source Tag - WebSchool Today</title>
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">HTML5 source Tag</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
            	<h1>HTML5 <code>&lt;source&gt;</code> Tag</h1>
                <p class="topic">Topic: <a href="htl_tags.php">HTML5 Tags Reference</a><span class="topic-nav"><a href="ht_small-tag.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="ht_span-tag.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>&lt;source&gt;</code> element is used to specify multiple alternative media resources for the media elements like <code><a href="htl_audio-tag.php">&lt;audio&gt;</a></code> and <code><a href="htl_video-tag.php">&lt;video&gt;</a></code>.</p>
                <p>The following table summarizes the usages context and the version history of this tag.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Permitted Parent:</th>
                            <td>A media element, like <code><a href="htl_audio-tag.php">&lt;audio&gt;</a></code> or <code><a href="htl_video-tag.php">&lt;video&gt;</a></code></td>
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
                            <td><span class="htl_badge"></span> New in HTML5</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Syntax</h2>
                <p>The basic syntax of the <code>&lt;source&gt;</code> tag is given with:</p>
                <div class="shadow">
                    <div class="syntax"><i>HTML:</i> <span class="tag">&lt;source&gt;</span>; <i>XHTML:</i> <span class="tag">&lt;source /&gt;</span></div>
                </div>
                <p>The example below shows the <code>&lt;source&gt;</code> tag in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelabbce0.html">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<video controls="controls">
    <source src="shuttle.mp4" type="video/mp4">
    <source src="shuttle.ogv" type="video/ogg">
    Your browser does not support the HTML5 Video element.
</video>

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
                            <p><strong>Read Carefully:</strong> The <code>&lt;source&gt;</code> element is commonly used to provide the same media resource in multiple formats supported by different browsers.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Tag-Specific Attributes</h2>
                <p>The following table shows the attributes that are specific to the <code>&lt;source&gt;</code> tag.</p>
                <div class="shadow">
                    <table class="data">
                        <tr>
                            <th>Attribute</th>
                            <th style="width:73px;">Value</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td class="section" colspan="3"><strong>Required</strong> &mdash; The following attribute must be specified on this tag for the markup to be valid.</td>
                        </tr>
                        <tr>
                            <td><code>src</code></td>
                            <td><i>URL</i></td>
                            <td>Specifies the URL of the media file.</td>
                        </tr>
                        <tr>
                            <td class="section" colspan="3"><strong>Optional</strong> &mdash; The following attributes are optional.</td>
                        </tr>
                        <tr>
                            <td><code>media</code></td>
                            <td><i>media-query</i></td>
                            <td>Specifies the type of the media resource i.e. what media or&thinsp;device the file is intended for. See <a href="../des-css/css-media-types.php">CSS media types</a> for more details.</td>
                        </tr>
                        <tr>
                            <td><code>type</code></td>
                            <td><i>media-type</i></td>
                            <td>Specifies the media type of the media resource.</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Global Attributes</h2>
                <p>Like all other HTML tags, the <code>&lt;source&gt;</code> tag supports the <a href="htl_global-attributes.php">global attributes in HTML5</a>.</p>
                <hr />
                <h2>Event Attributes</h2>
                <p>The <code>&lt;source&gt;</code> tag also supports the <a href="htl_event-attributes.php">event attributes in HTML5</a>.</p>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>&lt;source&gt;</code> tag is supported in all major modern browsers.</p>
                <div class="shadow">
                    <div class="support">
                        <table>
                            <tr>
                                <td><img src="../assets/images/browser.jpg" alt="Browsers Icon" /></td>
                                <td>
                                    <h2>Basic Support&mdash;</h2>
                                    <ul>
                                        <li>Firefox <span>3.5+</span></li>
                                        <li>Google Chrome <span>4+</span></li>
                                        <li>Internet Explorer <span>9+</span></li>
                                        <li>Apple Safari <span>4+</span></li>
                                        <li>Opera <span>10.5+</span></li>
                                    </ul>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <hr />
                <h2>Further Reading</h2>
                <p>See tutorial on: <a href="../des-html/htl_audio.php">HTML5 Audio</a>, <a href="../des-html/htl_video.php" class="selected">HTML5 Video</a>.</p>
                <p>Related tags: <code><a href="htl_audio-tag.php">&lt;audio&gt;</a></code>, <code><a href="htl_video-tag.php">&lt;video&gt;</a></code>.</p>
                <div class="bottom-link clearfix">
                    <a href="ht_small-tag.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="ht_span-tag.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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