
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="HTML5 track Tag">
      <meta name="keywords" content="html,html5,HTML5 track Tag">
	  <meta name="author" content="webschooltoday.com">
    <title>HTML5 track Tag - WebSchool Today</title>
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">HTML5 track Tag</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
            	<h1>HTML5 <code>&lt;track&gt;</code> Tag</h1>
                <p class="topic">Topic: <a href="htl_tags.php">HTML5 Tags Reference</a><span class="topic-nav"><a href="ht_tr-tag.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="ht_tt-tag.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>&lt;track&gt;</code> element is used to specify supplementary text tracks such as subtitle tracks and caption tracks for <code><a href="htl_audio-tag.php">&lt;audio&gt;</a></code> and <code><a href="htl_video-tag.php">&lt;video&gt;</a></code> elements.</p>
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
                <p>The basic syntax of the <code>&lt;track&gt;</code> tag is given with:</p>
                <div class="shadow">
                    <div class="syntax"><i>HTML:</i> <span class="tag">&lt;track&gt;</span>; <i>XHTML:</i> <span class="tag">&lt;track /&gt;</span></div>
                </div>
                <p>The example below shows the <code>&lt;track&gt;</code> tag in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabd077.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<video controls="controls">
    <source src="shuttle.mp4" type="video/mp4">
    <source src="shuttle.ogv" type="video/ogg">
    <track src="subtitles_en.vtt" kind="subtitles" srclang="en" label="English">
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
                <hr />
                <h2>Tag-Specific Attributes</h2>
                <p>The following table shows the attributes that are specific to the <code>&lt;track&gt;</code> tag.</p>
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
                            <td><code>src</code></td>
                            <td><i>URL</i></td>
                            <td>Specifies the URL of the track file.</td>
                        </tr>
                        <tr>
                            <td class="section" colspan="3"><strong>Optional</strong> &mdash; The following attributes are optional.</td>
                        </tr>
                        <tr>
                            <td><code>default</code></td>
                            <td><code>default</code></td>
                            <td>Specifies that the track should be enabled unless the user's preferences indicate that another track is more appropriate.</td>
                        </tr>
                        <tr>
                            <td><code>kind</code></td>
                            <td><code>captions<br />chapters<br />descriptions<br />metadata<br />subtitles</code></td>
                            <td>Specifies the kind of text track.</td>
                        </tr>
                        <tr>
                            <td><code>label</code></td>
                            <td><i>text</i></td>
                            <td>Specifies the title of the text track.</td>
                        </tr>
                        <tr>
                            <td><code>srclang</code></td>
                            <td><i>language-code</i></td>
                            <td>Specifies the language of the track text data. The <code>srclang</code> must be defined, if the <code>kind</code> attribute is set to <code>subtitles</code>.</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Global Attributes</h2>
                <p>Like all other HTML tags, the <code>&lt;track&gt;</code> tag supports the <a href="htl_global-attributes.php">global attributes in HTML5</a>.</p>
                <hr />
                <h2>Event Attributes</h2>
                <p>The <code>&lt;track&gt;</code> tag also supports the <a href="htl_event-attributes.php">event attributes in HTML5</a>.</p>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>&lt;track&gt;</code> tag is supported in all major modern browsers.</p>
                <div class="shadow">
                    <div class="support">
                        <table>
                            <tr>
                                <td><img src="../assets/images/browser.jpg" alt="Browsers Icon" /></td>
                                <td>
                                    <h2>Basic Support&mdash;</h2>
                                    <ul>
                                        <li>Firefox <span>31+</span></li>
                                        <li>Google Chrome <span>18+</span></li>
                                        <li>Internet Explorer <span>10+</span></li>
                                        <li>Apple Safari <span>6+</span></li>
                                        <li>Opera <span>15+</span></li>
                                    </ul>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <hr />
                <h2>Further Reading</h2>
                <p>See tutorial on: <a href="../des-html/htl_audio.php">HTML5 Audio</a>, <a href="../des-html/htl_video.php" class="selected">HTML5 Video</a>.</p>
                <p>Related tags: <code><a href="htl_audio-tag.php">&lt;audio&gt;</a></code>, <code><a href="htl_video-tag.php">&lt;video&gt;</a></code>, <code><a href="htl_source-tag.php">&lt;source&gt;</a></code>.</p>
                <div class="bottom-link clearfix">
                    <a href="ht_tr-tag.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="ht_tt-tag.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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