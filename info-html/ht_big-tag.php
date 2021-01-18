
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="HTML big Tag">
      <meta name="keywords" content="html,html5,HTML big Tag">
	  <meta name="author" content="webschooltoday.com">
    <title>HTML big Tag - WebSchool Today</title>
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">HTML big Tag</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
            	<h1>HTML <code>&lt;big&gt;</code> Tag <sup>Not Supported in HTML5</sup></h1>
				<p class="topic">Topic: <a href="htl_tags.php">HTML5 Tags Reference</a><span class="topic-nav"><a href="ht_bdo-tag.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="ht_blockquote-tag.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
				<h2>Description</h2>
				<p>The <code>&lt;big&gt;</code> tag increases the text font size by one size bigger than a document's base font size; for example, from <code>small</code> to <code>medium</code>, or from <code>large</code> to <code>x-large</code>. Each nested big element will further increase the size by one size bigger.</p>
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
							<td>HTML 3, 3.2, 4, 4.01</td>
						</tr>
					</table>
				</div>
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab warning-icon" title="Warning"><i></i></div>
						<div class="warning-box">
						<p><strong>Warning:</strong> As it was purely presentational, this tag has been removed in HTML5 and shouldn't be used anymore. You should use CSS <a href="../des-css/css-fonts.php">font properties</a>, instead.</p>
						</div>
					</div>
				</div>
				<hr />
				<h2>Syntax</h2>
				<p>The basic syntax of the <code>&lt;big&gt;</code> tag is given with:</p>
				<div class="shadow">
					<div class="syntax"><i>HTML&thinsp;/&thinsp;XHTML:</i> <span class="tag">&lt;big&gt;</span> ... <span class="tag">&lt;/big&gt;</span></div>
				</div>
				<p>The example below shows the <code>&lt;big&gt;</code> tag in action.</p>
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab91f4.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code1">

<!--Example of bad usage. Don't use this tag-->
<p>It's<big>big<big>bigger<big>biggest</big></big></big></p>
<!--Alternative-->
<p style="font-size:large;">This is a sample text.</p>

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
							<p><strong>Important:</strong> Use CSS <code><a href="../info-css/css-font-size-property.php">font-size</a></code> property to specify the font size for the text in a document. See the tutorial on <a href="../des-css/css-fonts.php">CSS Fonts</a> to learn more about font styling.</p>
						</div>
					</div>
				</div>
				<hr />
				<h2>Tag-Specific Attributes</h2>
				<p>The <code>&lt;big&gt;</code> tag doesn't have any specific attribute.</p>
				<hr />
				<h2>Browser Compatibility</h2>
				<p>The <code>&lt;big&gt;</code> tag is supported in all major modern browsers.</p>
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
										<li>Opera <span>2+</span></li>
									</ul>
								</td>
							</tr>
						</table>
					</div>
				</div>
				<hr />
				<h2>Further Reading</h2>
				<p>See tutorial on: <a href="../des-html/ht_text-formatting.php">HTML Text Formatting</a>, <a href="../des-css/css-fonts.php">CSS Fonts</a>.</p>
				<p>Related tag: <code><a href="ht_small-tag.php">&lt;small&gt;</a></code>.</p>
				<div class="bottom-link clearfix">
					<a href="ht_bdo-tag.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
					<a href="ht_blockquote-tag.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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