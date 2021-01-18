
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="HTML strike Tag">
      <meta name="keywords" content="html,html5,HTML strike Tag">
	  <meta name="author" content="webschooltoday.com">
    <title>HTML strike Tag - WebSchool Today</title>
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">HTML strike Tag</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
            	<h1>HTML <code>&lt;strike&gt;</code> Tag <sup>Not Supported in HTML5</sup></h1>
				<p class="topic">Topic: <a href="htl_tags.php">HTML5 Tags Reference</a><span class="topic-nav"><a href="ht_span-tag.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="ht_strong-tag.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
				<h2>Description</h2>	
				<p>The <code>&lt;strike&gt;</code> (short for <em>strikethrough</em>) element renders the enclosed text in <span style="text-decoration:line-through">strikethrough</span> style i.e. with a line drawn through it.</p>
				<p>The following table summarizes the usages context and the version history of this tag.</p>
				<div class="shadow">
					<table class="data description">
						<tr>
							<th>Placement:</th>
							<td>Inline</td>
						</tr>
						<tr>
							<th>Content:</th>
							<td>Inline and text</td>
						</tr>
						<tr>
							<th>Start/End Tag:</th>
							<td>Start tag: <strong>required</strong>, End tag: <strong>required</strong></td>
						</tr>
						<tr>
							<th>Version:</th>
							<td>HTML 3.2, 4, 4.01 (<a href="../des-html/ht_doctypes.php#ht_transitional-doctype">transitional</a>)</td>
						</tr>
					</table>
				</div>
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab warning-icon" title="Warning"><i></i></div>
						<div class="warning-box">
						<p><strong>Warning:</strong> Do not use this tag as it has been <a href="../definitions.php#deprecated">deprecated</a> in HTML 4.01 and <a href="../definitions.php#obsolete">obsolete</a> in HTML5. Use the <code><a href="ht_del-tag.php">&lt;del&gt;</a></code> element instead if enclosed text represents deleted text, otherwise use the CSS <code><a href="../info-css/css-text-decoration-property.php">text-decoration</a></code> property, with the <code>line-through</code> value.</p>
						</div>
					</div>
				</div>
				<hr />
				<h2>Syntax</h2>
				<p>The basic syntax of the <code>&lt;strike&gt;</code> tag is given with:</p>
				<div class="shadow">
					<div class="syntax"><i>HTML&thinsp;/&thinsp;XHTML:</i> <span class="tag">&lt;strike&gt;</span> ... <span class="tag">&lt;/strike&gt;</span></div>
				</div>
				<p>The example below shows the <code>&lt;strike&gt;</code> tag in action.</p>
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelabf08b.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code1">

<!--Example of bad usage. Don't use this tag-->
<p>Here is some <strike>strikethrough</strike> text.</p>
<!--Alternative-->
<p>Here is a good example of <span style="text-decoration: line-through;">strikethrough</span> text.</p>

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
						<div class="note-box"     style="background-color:#ff8585">
							<p><strong>Read Carefully:</strong> The <code>&lt;strike&gt;</code> is identical in purpose to the <code><a href="ht_s-tag.php">&lt;s&gt;</a></code> tag, which also specifies that the enclosed text should be rendered a line through it.</p>
						</div>
					</div>
				</div>
				<hr />
				<h2>Tag-Specific Attributes</h2>
                <p>The <code>&lt;strike&gt;</code> tag doesn't have any specific attribute.</p>
                <hr />
				<h2>Browser Compatibility</h2>
				<p>The <code>&lt;strike&gt;</code> tag is supported in all major modern browsers.</p>
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
				<p>See tutorial on: <a href="../des-html/ht_text-formatting.php">HTML Text Formatting</a>, <a href="../des-css/css-fonts.php">CSS Fonts</a>.</p>
				<p>Related tag: <code><a href="ht_s-tag.php">&lt;s&gt;</a></code>, <code><a href="ht_del-tag.php">&lt;del&gt;</a></code>.</p>
				<div class="bottom-link clearfix">
					<a href="ht_span-tag.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
					<a href="ht_strong-tag.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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