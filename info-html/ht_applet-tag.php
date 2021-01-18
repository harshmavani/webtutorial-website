
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="HTML applet Tag">
      <meta name="keywords" content="html,html5,HTML applet Tag">
	  <meta name="author" content="webschooltoday.com">
    <title>HTML applet Tag - WebSchool Today</title>
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">Bootstrap 4 Warning, Info, Success and Error Alerts</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
            	<h1>HTML <code>&lt;applet&gt;</code> Tag <sup>Not Supported in HTML5</sup></h1>
				<p class="topic">Topic: <a href="htl_tags.php">HTML5 Tags Reference</a><span class="topic-nav"><a href="ht_address-tag.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="ht_area-tag.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
				<h2>Description</h2>
				<p>The <code>&lt;applet&gt;</code> tag embeds a Java applet (mini Java applications) on the page. An applet is a program written in the Java programming language that can be included in an HTML page, much in the same way an image is included in a page.</p>	
				<p>The following table summarizes the usages context and the version history of this tag.</p>
				<div class="shadow">
					<table class="data description">
						<tr>
							<th>Placement:</th>
							<td>Block</td>
						</tr>
						<tr>
							<th>Content:</th>
							<td>Block, inline, and text; any <code><a href="ht_param-tag.php">&lt;param&gt;</a></code> elements must come first</td>
						</tr>
						<tr>
							<th>Start/End Tag:</th>
							<td>Start tag: <strong>required</strong>, End tag: <strong>required</strong></td>
						</tr>
						<tr>
							<th>Version:</th>
							<td>HTML 2, 3.2, 4, 4.01 (<a href="../des-html/ht_doctypes.php#ht_transitional-doctype">transitional</a>)</td>
						</tr>
					</table>
				</div>
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab warning-icon" title="Warning"><i></i></div>
						<div class="warning-box">
							<p><strong>Warning:</strong> Do not use this tag since it is a non-standard tag and has been <a href="../definitions.php#deprecated">deprecated</a> with all its attributes in HTML 4.01 and <a href="../definitions.php#obsolete">obsolete</a> since HTML5. Use the more generic <code><a href="ht_object-tag.php">&lt;object&gt;</a></code> element instead.</p>
						</div>
					</div>
				</div>
				<hr />
				<h2>Syntax</h2>
				<p>The basic syntax of the <code>&lt;applet&gt;</code> tag is given with:</p>
				<div class="shadow">
					<div class="syntax"><i>HTML&thinsp;/&thinsp;XHTML:</i><br /> <span class="tag">&lt;applet <span class="attribute">code</span>="<i><span class="attribute-value">URL</span></i>" <span class="attribute">width</span>="<i><span class="attribute-value">length</span></i>" <span class="attribute">height</span>="<i><span class="attribute-value">length</span></i>"&gt;</span> ... <span class="tag">&lt;/applet&gt;</span></div>
				</div>
				<p>The example below shows the <code>&lt;applet&gt;</code> tag in action.</p>
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="ht_object-tag.php" class="try-btn" title="Alternative of applet tag">Alternative <span>&raquo;</span></a></div>
						<textarea id="code1">

<applet code="Animate.class" width="400" height="300">
    <param name="delay" value="30">
    <param name="time" value="120">
</applet>

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
				<p>The following table shows the attributes that are specific to the <code>&lt;applet&gt;</code> tag.</p>
				<div class="shadow">
					<table class="data">
						<tr>
							<th style="width:70px;">Attribute</th>
							<th style="width:80px;">Value</th>
							<th>Description</th>
						</tr>
						<tr>
							<td colspan="3" class="section"><strong>Required</strong> &mdash; The following attributes must be specified on this tag for the markup to be valid.</td>
						</tr>
						<tr>
							<td><code>code</code></td>
							<td><i>URL</i></td>
							<td>specifies the URL of the applet's class file to be embedded.</td>
						</tr>
						<tr>
							<td><code>width</code></td>
							<td><i>length</i></td>
							<td>Specifies the initial width of the applet's display area.</td>
						</tr>
						<tr>
							<td><code>height</code></td>
							<td><i>length</i></td>
							<td>Specifies the initial height of the applet's display area.</td>
						</tr>
						<tr>
							<td colspan="3" class="section"><strong>Optional</strong> &mdash; The following attributes are optional.</td>
						</tr>
						<tr>
							<td><code>align</code></td>
							<td><code>left<br />right<br />top<br />middle<br />bottom</code></td>
							<td>Specifies the alignment of <code>&lt;applet&gt;</code> element with respect to the surrounding content.</td>
						</tr>
						<tr>
							<td><code>alt</code></td>
							<td><i>text</i></td>
							<td>Provides alternate text if the applet cannot be displayed.</td>
						</tr>
						<tr>
							<td><code>archive</code></td>
							<td><i>URL</i></td>
							<td>Specifies a <em>comma-separated</em> list of URLs for archives containing classes and other resources that will be "preloaded".</td>
						</tr>
						<tr>
							<td><code>codebase</code></td>
							<td><i>URL</i></td>
							<td>Specifies the URL of the directory where applets' .class files referenced by the code attribute are stored.</td>
						</tr>
						<tr>
							<td><code>hspace</code></td>
							<td><i>pixels</i></td>
							<td>Specifies the amount of additional whitespace to be reserved on left and right side of the applet.</td>
						</tr>
						<tr>
							<td><code>name</code></td>
							<td><i>text</i></td>
							<td>Specifies the name of the applet.</td>
						</tr>
						<tr>
							<td><code>vspace</code></td>
							<td><i>pixels</i></td>
							<td>Specifies the amount of additional whitespace to be reserved on top and bottom side of the applet.</td>
						</tr>
					</table>
				</div>
				<hr />
				<h2>Browser Compatibility</h2>
				<p>The <code>&lt;applet&gt;</code> tag is supported in all major modern browsers.</p>
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
				<p>Related tag: <code><a href="ht_object-tag.php">&lt;object&gt;</a></code>.</p>
				<div class="bottom-link clearfix">
					<a href="ht_address-tag.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
					<a href="ht_area-tag.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
 </a>
				</div>
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