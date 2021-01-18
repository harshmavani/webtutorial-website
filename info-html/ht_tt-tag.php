
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="HTML tt Tag">
      <meta name="keywords" content="html,html5,HTML tt Tag">
	  <meta name="author" content="webschooltoday.com">
    <title>HTML tt Tag - WebSchool Today</title>
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">HTML tt Tag</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
            	<h1>HTML <code>&lt;tt&gt;</code> Tag <sup>Not Supported in HTML5</sup></h1>
				<p class="topic">Topic: <a href="htl_tags.php">HTML5 Tags Reference</a><span class="topic-nav"><a href="htl_track-tag.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="ht_u-tag.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
				<h2>Description</h2>	
				<p>The <code>&lt;tt&gt;</code> (short for <em>teletype text</em>) tag renders the text it encloses in a teletype or monospaced typeface without conveying any extra importance. The <code>&lt;tt&gt;</code> tag is much like the <code><a href="ht_b-tag.php">&lt;b&gt;</a></code> and <code><a href="ht_i-tag.php">&lt;i&gt;</a></code> tags, it doesn't convey any semantic information about the text it encloses &ndash; it is purely used for text formatting purposes.</p>
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
							<td>HTML 2, 3.2, 4, 4.01</td>
						</tr>
					</table>
				</div>
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab warning-icon" title="Warning"><i></i></div>
						<div class="warning-box">
							<p><strong>Warning:</strong> Do not use this tag, as it has been obsolete since HTML5. Use a more appropriate tag, such as <code><a href="ht_code-tag.php">&lt;code&gt;</a></code> or <code><a href="ht_span-tag.php">&lt;span&gt;</a></code> with CSS <a href="../info-css/css-font-property.php">font's properties</a>, instead.</p>
						</div>
					</div>
				</div>
				<hr />
				<h2>Syntax</h2>
				<p>The basic syntax of the <code>&lt;tt&gt;</code> tag is given with:</p>
				<div class="shadow">
					<div class="syntax"><i>HTML&thinsp;/&thinsp;XHTML:</i> <span class="tag">&lt;tt&gt;</span> ... <span class="tag">&lt;/tt&gt;</span></div>
				</div>
				<p>The example below shows the <code>&lt;tt&gt;</code> tag in action.</p>
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelabbdf9.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code1">

<!--Example of bad usage. Don't use this tag-->
<p>This is a <tt>sample code</tt>.</p>
<!--Alternative-->
<p>This is a <code>sample code</code>.</p>

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
                <p>The <code>&lt;tt&gt;</code> tag doesn't have any specific attribute.</p>
                <hr />
				<h2>Browser Compatibility</h2>
				<p>The <code>&lt;tt&gt;</code> tag is supported in all major modern browsers.</p>
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
										<li>Opera <span>2.1+</span></li>
									</ul>
								</td>
							</tr>
						</table>
					</div>
				</div>
				<hr />
				<h2>Further Reading</h2>
				<p>See tutorial on: <a href="../des-html/ht_text-formatting.php">HTML Text Formatting</a>, <a href="../des-css/css-fonts.php">CSS Fonts</a>.</p>
				<p>Related tags: <code><a href="ht_code-tag.php">&lt;code&gt;</a></code>, <code><a href="ht_kbd-tag.php">&lt;kbd&gt;</a></code>.</p>  
				<div class="bottom-link clearfix">
					<a href="htl_track-tag.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
					<a href="ht_u-tag.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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