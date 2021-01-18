
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="HTML center Tag">
      <meta name="keywords" content="html,html5,HTML center Tag">
	  <meta name="author" content="webschooltoday.com">
    <title>HTML center Tag - WebSchool Today</title>
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">HTML center Tag</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
            	<h1>HTML <code>&lt;center&gt;</code> Tag <sup>Not Supported in HTML5</sup></h1>
				<p class="topic">Topic: <a href="htl_tags.php">HTML5 Tags Reference</a><span class="topic-nav"><a href="ht_caption-tag.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="ht_cite-tag.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
				<h2>Description</h2>
				<p>The <code>&lt;center&gt;</code> element aligns contents in the center of the enclosing block.</p>
				<p>The following table summarizes the usages context and the version history of this tag.</p>
				<div class="shadow">
						<table class="data description">
						<tr>
							<th>Placement:</th>
							<td>Block</td>
						</tr>
						<tr>
							<th>Content:</th>
							<td>Block, inline, and text</td>
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
							<p><strong>Warning:</strong> Don't use this tag since it is a non-standard tag and has been <a href="../definitions.php#deprecated">deprecated</a> in HTML 4.01 and <a href="../definitions.php#obsolete">obsolete</a> since HTML5. Use <a href="../des-css/css-alignment.php">CSS</a> instead, to center content.</p>
						</div>
					</div>
				</div>
				<hr />
				<h2>Syntax</h2>
				<p>The basic syntax of the <code>&lt;center&gt;</code> tag is given with:</p>
				<div class="shadow">
					<div class="syntax"><i>HTML&thinsp;/&thinsp;XHTML:</i> <span class="tag">&lt;center&gt;</span> ... <span class="tag">&lt;/center&gt;</span></div>
				</div>
				<p>The example below shows the <code>&lt;center&gt;</code> tag in action.</p>
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelabbfd9.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code1">

<!--Example of bad usage. Don't use this tag-->
<center>This paragraph will be centered.</center>
<!--Alternative-->
<p style="text-align: center;">This paragraph will be centered using CSS.</p>

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
						<div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
						<div class="tip-box"  style="background-color:#fad28c"
>
							<p><strong>Important:</strong> To give a similar effect to the <code>center</code> tag, use the CSS <code><a href="../info-css/css-text-align-property.php">text-align</a></code> property, which can be applied to the <code><a href="ht_div-tag.php">&lt;div&gt;</a></code> element or to an individual <code><a href="ht_p-tag.php">&lt;p&gt;</a></code>.</p>
						</div>
					</div>
				</div>
				<hr />
				<h2>Tag-Specific Attributes</h2>
				<p>The <code>&lt;center&gt;</code> tag doesn't have any specific attribute.</p>
				<hr />
				<h2>Browser Compatibility</h2>
				<p>The <code>&lt;center&gt;</code> tag is supported in all major modern browsers.</p>
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
				<p>See tutorial on: <a href="../des-html/ht_text-formatting.php">HTML Text Formatting</a>, <a href="../des-css/css-alignment.php">CSS Alignment</a>.</p>
				<div class="bottom-link clearfix">
					<a href="ht_caption-tag.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
					<a href="ht_cite-tag.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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