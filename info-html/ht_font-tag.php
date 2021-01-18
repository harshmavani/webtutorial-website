
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="HTML font Tag">
      <meta name="keywords" content="html,html5,HTML font Tag">
	  <meta name="author" content="webschooltoday.com">
    <title>HTML font Tag - WebSchool Today</title>
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">HTML font Tags</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
            	<h1>HTML <code>&lt;font&gt;</code> Tag <sup>Not Supported in HTML5</sup></h1>
				<p class="topic">Topic: <a href="htl_tags.php">HTML5 Tags Reference</a><span class="topic-nav"><a href="htl_figure-tag.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="htl_footer-tag.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
				<h2>Description</h2>
				<p>The <code>&lt;font&gt;</code> tag defines font styles for its content. This tag was typically used to define the font size, color and face for the text in its contents.</p>
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
							<p><strong>Warning:</strong> Do not use this tag since it is a non-standard tag and has been <a href="../definitions.php#deprecated">deprecated</a> in HTML 4.01. It has been removed in HTML5 and shouldn't be used anymore. You should use CSS <code><a href="../info-css/css-font-property.php">font</a></code> property, instead.</p>
						</div>
					</div>
				</div>
				<hr />
				<h2>Syntax</h2>
				<p>The basic syntax of the <code>&lt;font&gt;</code> tag is given with:</p>
				<div class="shadow">
					<div class="syntax"><i>HTML&thinsp;/&thinsp;XHTML:</i><br /> <span class="tag">&lt;font <span class="attribute">size</span>="<span class="attribute-value"><i>number</i></span>" <span class="attribute">color</span>="<span class="attribute-value"><i>color</i></span>" <span class="attribute">face</span>="<span class="attribute-value"><i>font-family, ...</i></span>"&gt;</span> ... <span class="tag">&lt;/font&gt;</span></div>
				</div>
				<p>The example below shows the <code>&lt;font&gt;</code> tag in action.</p>
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab6d14.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code1">

<!--Example of bad usage-->
<p>This is the <font size="3" color="red" face="Verdana,Arial,sans-serif">wrong way</font> to style text.</p>
<!--Alternative-->
<p>This is the <span style="font-size:16px; color:green; font-family:Verdana,Arial,sans-serif;">right way</span> to style text.</p>

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
				<p>The following table shows the attributes that are specific to the <code>&lt;font&gt;</code> tag.</p>
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
							<td><a href="../definitions.php#obsolete" class="obsolete" title="Not supported in HTML5">Obsolete</a> Sets the text color.</td>
						</tr>
						<tr>
							<td><code>face</code></td>
							<td><i>font-family</i></td>
							<td><a href="../definitions.php#obsolete" class="obsolete" title="Not supported in HTML5">Obsolete</a> Sets the font face of text.</td>
						</tr>
						<tr>
							<td><code>size</code></td>
							<td><i>number</i></td>
							<td><a href="../definitions.php#obsolete" class="obsolete" title="Not supported in HTML5">Obsolete</a> Sets the size of the font.</td>
						</tr>
					</table>
				</div>
				<hr />				
				<h2>Browser Compatibility</h2>
				<p>The <code>&lt;font&gt;</code> tag is supported in all major modern browsers.</p>
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
				<p>See tutorial on: <a href="../des-css/css-fonts.php">CSS Fonts</a>.</p>
				<p>Related tag: <code><a href="ht_basefont-tag.php">&lt;basefont&gt;</a></code>.</p>
				<div class="bottom-link clearfix">
					<a href="htl_figure-tag.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
					<a href="htl_footer-tag.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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