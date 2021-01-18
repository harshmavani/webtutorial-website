
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="HTML frameset Tag">
      <meta name="keywords" content="html,html5">
	  <meta name="author" content="webschooltoday.com">
    <title>HTML frameset Tag - WebSchool Today</title>
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">HTML frameset Tag</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
            	<h1>HTML <code>&lt;frameset&gt;</code> Tag <sup>Not Supported in HTML5</sup></h1>
				<p class="topic">Topic: <a href="htl_tags.php">HTML5 Tags Reference</a><span class="topic-nav"><a href="ht_frame-tag.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="ht_head-tag.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
				<h2>Description</h2>					
				<p>The <code>&lt;frameset&gt;</code> tag defines a collection of frames or other framesets.</p>
				<p>The following table summarizes the usages context and the version history of this tag.</p>
				<div class="shadow">
					<table class="data description">
						<tr>
							<th>Placement:</th>
							<td>Block</td>
						</tr>
						<tr>
							<th>Content:</th>
							<td><code>&lt;frameset&gt;</code>, <code><a href="ht_frame-tag.php">&lt;frame&gt;</a></code>, <code><a href="ht_noframes-tag.php">&lt;noframes&gt;</a></code></td>
						</tr>
						<tr>
							<th>Start/End Tag:</th>
							<td>Start tag: <strong>required</strong>, End tag: <strong>required</strong></td>
						</tr>
						<tr>
							<th>Version:</th>
							<td>HTML 4 and 4.01 (<a href="../des-html/ht_doctypes.php#ht_frameset-doctype">frameset</a>)</td>
						</tr>
					</table>
				</div>
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab warning-icon" title="Warning"><i></i></div>
						<div class="warning-box">
						<p><strong>Warning:</strong> Do not use this tag since it is a non-standard tag. This tag has been removed in HTML5 and shouldn't be used anymore. Use HTML <code><a href="ht_iframe-tag.php">&lt;iframe&gt;</a></code>, instead.</p>
						</div>
					</div>
				</div>
				<hr />
				<h2>Syntax</h2>
				<p>The basic syntax of the <code>&lt;frameset&gt;</code> tag is given with:</p>
				<div class="shadow">
					<div class="syntax"><i>HTML&thinsp;/&thinsp;XHTML:</i> <span class="tag">&lt;frameset <span class="attribute">cols</span>="[ <span class="attribute-value">number</span> | <span class="attribute-value">percentage</span> | <span class="attribute-value">*</span> ] ,..." <span class="attribute">rows</span>="[ <span class="attribute-value">number</span> | <span class="attribute-value">percentage</span> | <span class="attribute-value">*</span> ] ,..."&gt;</span> ... <span class="tag">&lt;/frameset&gt;</span></div>
				</div>
				<p>The example below shows the <code>&lt;frameset&gt;</code> tag in action.</p>
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelabc8ec.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
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
				<p>The following table shows the attributes that are specific to the <code>&lt;frameset&gt;</code> tag.</p>
				<div class="shadow">
					<table class="data">
						<tr>
							<th>Attribute</th>
							<th style="width:70px;">Value</th>
							<th>Description</th>
						</tr>
						<tr>
							<td><code>cols</code></td>
							<td><i>pixels<br />%<br />*</i></td>
							<td>Specifies the layout of horizontal frames. It is a comma-separated list of pixels, percentages, and relative lengths. The default value is 100%, meaning one row.</td>
						</tr>
						<tr>
							<td><code>rows</code></td>
							<td><i>pixels<br />%<br />*</i></td>
							<td>Specifies the layout of vertical frames. It is a comma-separated list of pixels, percentages, and relative lengths. The default value is 100%, meaning one column.</td>
						</tr>
					</table>
				</div>
				<hr />				
				<h2>Browser Compatibility</h2>
				<p>The <code>&lt;frameset&gt;</code> tag is supported in all major modern browsers.</p>
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
										<li>Internet Explorer <span>3+</span></li>
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
				<p>Related tags: <code><a href="ht_frame-tag.php">&lt;frame&gt;</a></code>, <code><a href="ht_iframe-tag.php">&lt;iframe&gt;</a></code>.</p>
				<div class="bottom-link clearfix">
					<a href="ht_frame-tag.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
					<a href="ht_head-tag.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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