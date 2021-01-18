
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="HTML frame Tag">
      <meta name="keywords" content="html,html5,HTML frame Tag">
	  <meta name="author" content="webschooltoday.com">
    <title>HTML frame Tag - webschool Today</title>
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
            	<h1>HTML <code>&lt;frame&gt;</code> Tag <sup>Not Supported in HTML5</sup></h1>
				<p class="topic">Topic: <a href="htl_tags.php">HTML5 Tags Reference</a><span class="topic-nav"><a href="ht_form-tag.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="ht_frameset-tag.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
				<h2>Description</h2>	
				<p>The <code>&lt;frame&gt;</code> tag defines a single frame within a <code><a href="ht_frameset-tag.php">&lt;frameset&gt;</a></code>. Each <code>&lt;frame&gt;</code> in a <code>&lt;frameset&gt;</code> can have different attributes, such as border, scrolling, the ability to resize, etc.</p>
				<p>The following table summarizes the usages context and the version history of this tag.</p>
				<div class="shadow">
					<table class="data description">
						<tr>
							<th>Parent:</th>
							<td><code><a href="ht_frameset-tag.php">&lt;frameset&gt;</a></code></td>
						</tr>
						<tr>
							<th>Placement:</th>
							<td>Block</td>
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
				<p>The basic syntax of the <code>&lt;frame&gt;</code> tag is given with:</p>
				<div class="shadow">
					<div class="syntax"><i>HTML:</i><span class="tag">&lt;frame <span class="attribute">src</span>="<span class="attribute-value"><i>URL</i></span>"&gt;</span>; <i>XHTML:</i><span class="tag">&lt;frame <span class="attribute">src</span>="<span class="attribute-value"><i>URL</i></span>" /&gt;</span>
					</div>
				</div>
				<p>The example below shows the <code>&lt;frame&gt;</code> tag in action.</p>
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelabec91.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code1">

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN"
    "http://www.w3.org/TR/html4/frameset.dtd">
<html>
<head>
    <title>This is a frameset document</title>
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
				<p>The following table shows the attributes that are specific to the <code>&lt;frame&gt;</code> tag.</p>
				<div class="shadow">
					<table class="data">
						<tr>
							<th>Attribute</th>
							<th style="width:65px;">Value</th>
							<th>Description</th>
						</tr>
						<tr>
							<td><code>frameborder</code></td>
							<td><code>0<br />1</code></td>
							<td>Instructs the browser whether or not to display a border around the frame. The default value <code>1</code>.</td>
						</tr>
						<tr>
							<td><code>longdesc</code></td>
							<td><i>URL</i></td>
							<td>Specifies a link to a long description of the frame.</td>
						</tr>
						<tr>
							<td><code>marginheight</code></td>
							<td><i>pixels</i></td>
							<td>Specifies the amount of space to be left between the frame's contents in its top and bottom margins.</td>
						</tr>
						<tr>
							<td><code>marginwidth</code></td>
							<td><i>pixels</i></td>
							<td>Specifies the amount of space to be left between the frame's contents in its left and right margins.</td>
						</tr>
						<tr>
							<td><code>name</code></td>
							<td><i>text</i></td>
							<td>Assigns a name to the current frame.</td>
						</tr>
						<tr>
							<td><code>noresize</code></td>
							<td><code>noresize</code></td>
							<td>This boolean attribute specifies that the frame window is not resizable by the users.</td>
						</tr>
						<tr>
							<td><code>scrolling</code></td>
							<td><code>yes<br />no<br />auto</code></td>
							<td>Specifies whether overflowing content in frame causes scroll bars to appear or not.</td>
						</tr>
						<tr>
							<td><code>src</code></td>
							<td><i>URL</i></td>
							<td>Specifies the location of the document to show inside a frame.</td>
						</tr>
					</table>
				</div>
				<hr />				
				<h2>Browser Compatibility</h2>
				<p>The <code>&lt;frame&gt;</code> tag is supported in all major modern browsers.</p>
				<div class="shadow">
					<div class="support">
						<table>
							<tr>
								<td><img src="../lib/images/browsers-icon.png" alt="Browsers Icon" /></td>
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
				<p>Related tags: <code><a href="ht_frameset-tag.php">&lt;frameset&gt;</a></code>, <code><a href="ht_iframe-tag.php">&lt;iframe&gt;</a></code>.</p>
				<div class="bottom-link clearfix">
					<a href="ht_form-tag.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
					<a href="ht_frameset-tag.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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