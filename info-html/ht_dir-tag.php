
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="HTML dir Tag">
      <meta name="keywords" content="html,html5,HTML dir Tag">
	  <meta name="author" content="webschooltoday.com">
    <title>HTML dir Tag - WebSchool Today</title>
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">HTML dir Tag</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
            	<h1>HTML <code>&lt;dir&gt;</code> Tag <sup>Not Supported in HTML5</sup></h1>
				<p class="topic">Topic: <a href="htl_tags.php">HTML5 Tags Reference</a><span class="topic-nav"><a href="ht_dfn-tag.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="ht_div-tag.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
				<h2>Description</h2>	
				<p>The <code>&lt;dir&gt;</code> (short for <em>directory</em>) tag specifies a directory list. It was designed to be used for creating multicolumn directory lists.</p>
				<p>The following table summarizes the usages context and the version history of this tag.</p>
				<div class="shadow">
					<table class="data description">
						<tr>
							<th>Placement:</th>
							<td>Block</td>
						</tr>
						<tr>
							<th>Content:</th>
							<td><code><a href="ht_li-tag.php">&lt;li&gt;</a></code> elements that are constrained to contain inline content only</td>
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
							<p><strong>Warning:</strong> Do not use this tag as it has been <a href="../definitions.php#deprecated">deprecated</a> in HTML 4.01 and <a href="../definitions.php#obsolete">obsolete</a> since HTML5. Use the <code><a href="ht_ul-tag.php">&lt;ul&gt;</a></code> tag instead.</p>
						</div>
					</div>
				</div>
				<hr />
				<h2>Syntax</h2>
				<p>The basic syntax of the <code>&lt;dir&gt;</code> tag is given with:</p>
				<div class="shadow">
					<div class="syntax"><i>HTML&thinsp;/&thinsp;XHTML:</i> <span class="tag">&lt;dir&gt;</span> ... <span class="tag">&lt;/dir&gt;</span></div>
				</div>
				<p>The example below shows the <code>&lt;dir&gt;</code> tag in action.</p>
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelabb8b6.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code1">

<!--Example of bad usage. Don't use this tag-->
<dir>
    <li>examples</li>
    <li>tutorials</li>
</dir>
<!--Alternative-->
<ul>
    <li>examples</li>
    <li>tutorials</li>
</ul>

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
				<p>The following table shows the attributes that are specific to the <code>&lt;dir&gt;</code> tag.</p>
				<div class="shadow">
					<table class="data">
						<tr>
							<th>Attribute</th>
							<th>Value</th>
							<th>Description</th>
						</tr>
						<tr>
							<td><code>compact</code></td>
							<td><code>compact</code></td>
							<td><a href="../definitions.php#obsolete" class="obsolete" title="Not supported in HTML5">Obsolete</a> This Boolean attribute specifies that the list should be rendered in a compact style.</td>
						</tr>
					</table>
				</div>
				<hr />				
				<h2>Browser Compatibility</h2>
				<p>The <code>&lt;dir&gt;</code> tag is supported in all major modern browsers.</p>
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
				<p>See tutorial on: <a href="../des-html/ht_lists.php">HTML Lists</a>.</p>
				<p>Related tags: <code><a href="ht_ul-tag.php">&lt;ul&gt;</a></code>, <code><a href="ht_ol-tag.php">&lt;ol&gt;</a></code>, <code><a href="ht_li-tag.php">&lt;li&gt;</a></code>, <code><a href="ht_menu-tag.php">&lt;menu&gt;</a></code>.</p>
				<div class="bottom-link clearfix">
					<a href="ht_dfn-tag.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
					<a href="ht_div-tag.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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