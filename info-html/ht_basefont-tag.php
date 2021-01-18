
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="HTML basefont Tag">
      <meta name="keywords" content="html,html5,HTML basefont Tag">
	  <meta name="author" content="webschooltoday.com">
    <title>HTML basefont Tag - WebSchool Today</title>
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">HTML basefont Tag</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
            	<h1>HTML <code>&lt;basefont&gt;</code> Tag <sup>Not Supported in HTML5</sup></h1>
				<p class="topic">Topic: <a href="htl_tags.php">HTML5 Tags Reference</a><span class="topic-nav"><a href="ht_base-tag.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="htl_bdi-tag.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
				<h2>Description</h2>
				<p>The <code>&lt;basefont&gt;</code> tag specifies the base font i.e. default font-color, font-size, or font-family for all the text in an HTML document.</p>
				<p>The following table summarizes the usages context and the version history of this tag.</p>
				<div class="shadow">
					<table class="data description">
						<tr>
							<th>Parent:</th>
							<td><code><a href="ht_head-tag.php">&lt;head&gt;</a></code></td>
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
							<td>HTML 2, 3.2, 4, 4.01 (<a href="../des-html/ht_doctypes.php#ht_transitional-doctype">transitional</a>)</td>
						</tr>
					</table>
				</div>
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab warning-icon" title="Warning"><i></i></div>
						<div class="warning-box">
							<p><strong>Warning:</strong> Don't use this tag since it is a non-standard tag and has been <a href="../definitions.php#deprecated">deprecated</a> in HTML 4.01 and <a href="../definitions.php#obsolete">obsolete</a> since HTML5. Use CSS <a href="../des-css/css-fonts.php">font's properties</a>, instead.</p>
						</div>
					</div>
				</div>
				<hr />
				<h2>Syntax</h2>
				<p>The basic syntax of the <code>&lt;basefont&gt;</code> tag is given with:</p>
				<div class="shadow">
					<div class="syntax"><i>HTML:</i><span class="tag">&lt;basefont&gt;</span>; <i>XHTML:</i><span class="tag">&lt;basefont /&gt;</span></div>
				</div>
				<p>The example below shows the <code>&lt;basefont&gt;</code> tag in action.</p>
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelabf03e.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code1">

<head>
    <title>The HTML Document</title>
    <basefont color="red" size="5" face="arial, sans-serif">
</head>

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
				<p>The following table shows the attributes that are specific to the <code>&lt;basefont&gt;</code> tag.</p>
				<div class="shadow">
					<table class="data">
						<tr>
							<th>Attribute</th>
							<th>Value</th>
							<th>Description</th>
						</tr>
						<tr>
							<td><code>color</code></td>
							<td><i>color</i></td>
							<td><a href="../definitions.php#obsolete" class="obsolete" title="Not supported in HTML5">Obsolete</a> Sets the default color for text in a document.</td>
						</tr>
						<tr>
							<td><code>face</code></td>
							<td><i>font-family</i></td>
							<td><a href="../definitions.php#obsolete" class="obsolete" title="Not supported in HTML5">Obsolete</a> Sets the default font face for text in a document.</td>
						</tr>
						<tr>
							<td><code>size</code></td>
							<td><i>number</i></td>
							<td><a href="../definitions.php#obsolete" class="obsolete" title="Not supported in HTML5">Obsolete</a> Sets the default size of the font in a document.</td>
						</tr>
					</table>
				</div>
				<hr />
				<h2>Browser Compatibility</h2>
				<p>The <code>&lt;basefont&gt;</code> tag is not supported in Firefox and Opera.</p>
				<div class="shadow">
					<div class="support">
						<table>
							<tr>
								<td><img src="../assets/images/browser.jpg" alt="Browsers Icon" /></td>
								<td>
									<h2>Basic Support&mdash;</h2>
									<ul>
										<li>Firefox <span class="red" title="Not supported">&times;</span></li>
										<li>Google Chrome <span class="red" title="Not supported">&times;</span></li>
										<li>Internet Explorer <span>5.5+</span></li>
										<li>Apple Safari <span class="red" title="Not supported">&times;</span></li>
										<li>Opera <span class="red" title="Not supported">&times;</span></li>
									</ul>
								</td>
							</tr>
						</table>
					</div>
				</div>
				<hr />
				<h2>Further Reading</h2>
				<p>See tutorial on: <a href="../des-css/css-fonts.php">CSS Fonts</a>.</p>
				<p>Related tag: <code><a href="ht_font-tag.php">&lt;font&gt;</a></code>.</p>
				<div class="bottom-link clearfix">
					<a href="ht_base-tag.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
					<a href="htl_bdi-tag.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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