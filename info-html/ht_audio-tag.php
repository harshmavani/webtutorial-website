
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="HTML5 audio Tag">
      <meta name="keywords" content="html,html5,HTML5 audio Tag">
	  <meta name="author" content="webschooltoday.com">
    <title>HTML5 audio Tag - WebSchool Today</title>
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">HTML5 audio Tag</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
            	<h1>HTML5 <code>&lt;audio&gt;</code> Tag</h1>
                <p class="topic">Topic: <a href="htl_tags.php">HTML5 Tags Reference</a><span class="topic-nav"><a href="htl_aside-tag.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="ht_b-tag.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>&lt;audio&gt;</code> element is used to embed audio content in an HTML document without requiring any additional plug-in like Flash player.</p>
                <p>The following table summarizes the usages context and the version history of this tag.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Placement:</th>
                            <td>Block</td>
                        </tr>
                        <tr>
                            <th>Content:</th>
                            <td><code><a href="htl_source-tag.php">&lt;source&gt;</a></code>, <code><a href="htl_track-tag.php">&lt;track&gt;</a></code>, and text</td>
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
                <p>The basic syntax of the <code>&lt;audio&gt;</code> tag is given with:</p>
                <div class="shadow">
                    <div class="syntax"><i>HTML&thinsp;/&thinsp;XHTML:</i> <span class="tag">&lt;audio&gt;</span> ... <span class="tag">&lt;/audio&gt;</span></div>
                </div>
                <p>The example below shows the <code>&lt;audio&gt;</code> tag in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelab92c7.html">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<audio controls="controls" src="birds.mp3">
    Your browser does not support the HTML5 Audio element.
</audio>

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
                <p>An audio, using the browser default set of controls, with alternative sources.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelab6c90.html">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

<audio controls="controls">
    <source src="birds.mp3" type="audio/mpeg">
    <source src="birds.ogg" type="audio/ogg">
    Your browser does not support the HTML5 Audio element.
</audio>

     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code2"), {
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
                            <p><strong>Important:</strong> You can place content such as text or download link inside an audio element to provide alternate content in case, if the browser does not support the audio content or somehow failed to download the audio source file.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Tag-Specific Attributes</h2>
                <p>The following table shows the attributes that are specific to the <code>&lt;audio&gt;</code> tag.</p>
                <div class="shadow">
                    <table class="data">
                        <tr>
                            <th style="width:70px;">Attribute</th>
                            <th style="width:70px;">Value</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td><code>autoplay</code></td>
                            <td><code>autoplay</code></td>
                            <td>This Boolean attribute specifies that the audio will automatically start playing as soon as it can do so without stopping to finish loading the data.</td>
                        </tr>
                        <tr>
                            <td><code>controls</code></td>
                            <td><code>controls</code></td>
                            <td>If specified, the browsers will display controls to allow the user to control audio playback, such as play/pause, volume, etc.</td>
                        </tr>
                        <tr>
                            <td><code>loop</code></td>
                            <td><code>loop</code></td>
                            <td>This Boolean attribute specifies that the audio will automatically start over again, upon reaching the end.</td>
                        </tr>
                        <tr>
                            <td><code>muted</code></td>
                            <td><code>muted</code></td>
                            <td>This Boolean attribute specifies whether the audio will be initially silenced. The default value is false,&thinsp;meaning that the audio will be played.</td>
                        </tr>
                        <tr>
                            <td><code>preload</code></td>
                            <td><code>auto<br />metadata<br />none</code></td>
                            <td>Provides a hint to the browser about whether to download of the audio itself or its metadata. The autoplay attribute can override this attribute, because if you want to automatically play a audio, the browser will obviously need to download it.</td>
                        </tr>
                        <tr>
                            <td><code>src</code></td>
                            <td><i>URL</i></td>
                            <td>Specifies the location of the audio file. Alternatively, you can use the preferred <code><a href="htl_source-tag.php">&lt;source&gt;</a></code> tag as it allows for multiple options.</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Global Attributes</h2>
                <p>Like all other HTML tags, the <code>&lt;audio&gt;</code>tag supports the <a href="htl_global-attributes.php">global attributes in HTML5</a>.</p>
                <hr />
                <h2>Event Attributes</h2>
                <p>The <code>&lt;audio&gt;</code> tag also supports the <a href="htl_event-attributes.php">event attributes in HTML5</a>.</p>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>&lt;audio&gt;</code> tag is supported in all major modern browsers.</p>
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
                <p>See tutorial on: <a href="../des-html/htl_audio.php" class="selected">HTML5 Audio</a>, <a href="../des-html/htl_video.php">HTML5 Video</a>.</p>
                <p>Related tags: <code><a href="htl_source-tag.php">&lt;source&gt;</a></code>, <code><a href="htl_track-tag.php">&lt;track&gt;</a></code>, <code><a href="htl_video-tag.php">&lt;video&gt;</a></code>.</p>
                <div class="bottom-link clearfix">
                    <a href="htl_aside-tag.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="ht_b-tag.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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