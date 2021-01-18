
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="HTML noframes Tag">
      <meta name="keywords" content="html,html5,HTML noframes Tag">
	  <meta name="author" content="webschooltoday.com">
    <title>HTML noframes Tag - WebSchool Today</title>
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">HTML noframes Tag</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
            	<h1>HTML <code>&lt;noframes&gt;</code> Tag <sup>Not Supported in HTML5</sup></h1>
				<p class="topic">Topic: <a href="htl_tags.php">HTML5 Tags Reference</a><span class="topic-nav"><a href="htl_nav-tag.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="ht_noscript-tag.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
				<h2>Description</h2>	
				<p>The <code>&lt;noframes&gt;</code> tag specifies fallback content that should be displayed only by the browsers that do not support frames or are configured not to display frames. It can contain all the HTML elements that can be placed inside the <code><a href="ht_body-tag.php">&lt;body&gt;</a></code> element of a normal HTML page.</p>
				<p>The following table summarizes the usages context and the version history of this tag.</p>
				<div class="shadow">
					<table class="data description">
						<tr>
							<th>Placement:</th>
							<td>Block</td>
						</tr>
						<tr>
							<th>Content:</th>
							<td><code><a href="ht_body-tag.php">&lt;body&gt;</a></code> (when used inside <code><a href="ht_frameset-tag.php">&lt;frameset&gt;</a></code>), block, inline, and text</td>
						</tr>
						<tr>
							<th>Start/End Tag:</th>
							<td>Start tag: <strong>required</strong>, End tag: <strong>required</strong></td>
						</tr>
						<tr>
							<th>Version:</th>
							<td>HTML 4, 4.01 (<a href="../des-html/ht_doctypes.php#ht_frameset-doctype">frameset</a>)</td>
						</tr>
					</table>
				</div>
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab warning-icon" title="Warning"><i></i></div>
						<div class="warning-box">
						<p><strong>Warning:</strong> The <code><a href="ht_frameset-tag.php">&lt;frameset&gt;</a></code>, <code><a href="ht_frame-tag.php">&lt;frame&gt;</a></code>, and <code>&lt;noframes&gt;</code> elements has been removed in HTML5 and should no longer be used. You should use HTML <code><a href="ht_iframe-tag.php">&lt;iframe&gt;</a></code> instead.</p>
						</div>
					</div>
				</div>
				<hr />
				<h2>Syntax</h2>
				<p>The basic syntax of the <code>&lt;noframes&gt;</code> tag is given with:</p>
				<div class="shadow">
					<div class="syntax"><i>HTML&thinsp;/&thinsp;XHTML:</i> <span class="tag">&lt;noframes&gt;</span> ... <span class="tag">&lt;/noframes&gt;</span></div>
				</div>
				<p>The example below shows the <code>&lt;noframes&gt;</code> tag in action.</p>
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab467a.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code1">

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN"
    "http://www.w3.org/TR/html4/frameset.dtd">
<html>
<head>
    <title>This is a frameset document.</title>
</head>
<frameset>
    <frame src="sample-a.php" name="frame-a">
    <frame src="sample-b.php" name="frame-b">
<noframes>
    <p>Here is the <a href="noframes.php">non-frame based version of the document.</a></p>
</noframes>
</frameset>
</html>
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
                <p>The <code>&lt;noframes&gt;</code> tag doesn't have any specific attribute.</p>
				<hr />
				<h2>Browser Compatibility</h2>
				<p>The <code>&lt;noframes&gt;</code> tag is supported in all major modern browsers.</p>
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
										<li>Internet Explorer <span>2+</span></li>
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
				<p>See tutorial on: <a href="../des-html/ht_iframes.php">HTML Iframes</a>.</p>
				<p>Related tag: <code><a href="ht_frameset-tag.php">&lt;frameset&gt;</a></code>, <code><a href="ht_frame-tag.php">&lt;frame&gt;</a></code>, <code><a href="ht_iframe-tag.php">&lt;iframe&gt;</a></code>.</p>
				<div class="bottom-link clearfix">
					<a href="htl_nav-tag.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
					<a href="ht_noscript-tag.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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