<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS3 background-origin Property">
	  <meta name="keywords" content="css,css3,CSS3 background-origin Property">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS3 background-origin Property - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS3 background-origin Property</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css_inner.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
            	<h1>CSS3 <code>background-origin</code> Property</h1>
				<p class="topic">Topic: <a href="stylel_properties.php">CSS3 Properties Reference</a><span class="topic-nav"><a href="style_background-image-property.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="style_background-position-property.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
				<h2>Description</h2>
				<p>The <code>background-origin</code> CSS property specifies the positioning area of the background, that is the position of the origin of an image specified using the <code><a href="style_background-image-property.php">background-image</a></code> property.</p>
				<p>The following table summarizes the usages context and the version history of this property.</p>
				<div class="shadow">
					<table class="data description">
						<tr>
							<th>Default value:</th>
							<td><code>padding-box</code></td>
						</tr>
						<tr>
							<th>Applies to:</th>
							<td><pre>All elements. It also applies to <code><a href="../des-css/style_pseudo-elements.php#first-letter">::first-letter</a></code> and <code><a href="../des-css/style_pseudo-elements.php#first-line">::first-line</a></code>.</pre></td>
						</tr>
						<tr>
							<th>Inherited:</th>
							<td>No</td>
						</tr>
						<tr>
							<th>Animatable:</th>
							<td>No. <a href="style_animatable-properties.php"><i>See</i> <em>animatable properties</em></a>.</td>
						</tr>
						<tr>
							<th>Version:</th>
							<td><span class="stylel_badge"></span> New in CSS3</td>
						</tr>
					</table>
				</div>	
				<hr />
				<h2>Syntax</h2>
				<p>The syntax of the property is given with:</p>
				<div class="shadow">
					<div class="syntax">
						<table>
							<tr>
								<td><pre class="property">background-origin: </pre></td>
								<td><span class="keyword">border-box</span> | <span class="keyword">padding-box</span> | <span class="keyword">content-box</span> | <a href="../definitions.php#initial">initial</a> | <a href="../definitions.php#inherit">inherit</a></td>
							</tr>
						</table>
					</div>
				</div>
				<p>The example below shows the <code>background-origin</code> property in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelab9f1a.html">Try this code <span>&raquo;</span></a></div>
						<textarea id="code1">

.box {
    width: 250px;
    height: 150px;
    padding: 10px;
    border: 6px dashed #333;
    background: url("images/sky.jpg") no-repeat;
    background-size: contain;
    background-origin: content-box;
} 

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
						<div class="note-box"  style="background-color:#ff8585">
							<p><strong>Read Carefully:</strong> The <code>background-origin</code> property is ignored if the value of <code><a href="style_background-attachment-property.php">background-attachment</a></code> property is specified as <code>fixed</code>.</p>
						</div>
					</div>
				</div>
				<hr />	
				<h2>Property Values</h2>
				<p>The following table describes the values of this property.</p>
				<div class="shadow space">
					<table class="data">
						<tr>
							<th style="width: 100px;">Value</th>
							<th>Description</th>
						</tr>
						<tr>
							<td><code>border-box</code></td>
							<td>Specifies that the background extends to the outside edge of the border. Background is drawn below the border.</td>
						</tr>
						<tr>
							<td><code>padding-box</code></td>
							<td>Specifies that the background extends to the outside edge of the padding. No background is drawn below the border. This is default value.</td>
						</tr>
						<tr>
							<td><code>content-box</code></td>
							<td>Specifies that the background is painted within (clipped to) the content box only. No background is drawn below the border and padding area.</td>
						</tr>
						<tr>
							<td><code>initial</code></td>
							<td>Sets this property to its default value.</td>
						</tr>
						<tr>
							<td><code>inherit</code></td>
							<td>If specified, the associated element takes the <a href="../definitions.php#computed-value">computed value</a> of its parent element <code>background-origin</code> property.</td>
						</tr>
					</table>
				</div>	
				<hr />
				<h2>Browser Compatibility</h2>
				<p>The <code>background-origin</code> property is supported in all major modern browsers.</p>
				<div class="shadow">
					<div class="support">
						<table>
							<tr>
								<td><img src="../assets/images/browser.jpg" alt="Browsers Icon" /></td>
								<td>
									<h2>Basic Support&mdash;</h2>
									<ul>
										<li>Firefox <span>4+</span></li>
										<li>Google Chrome <span>4+</span></li>
										<li>Internet Explorer <span>9+</span></li>
										<li>Apple Safari <span>3+</span></li>
										<li>Opera <span>10.5+</span></li>
									</ul>
								</td>
							</tr>
						</table>
					</div>
				</div>
				<hr />
				<h2>Further Reading</h2>
				<p>See tutorial on: <a href="../des-css/stylel_background.php" class="selected">CSS3 Background</a>, <a href="../des-css/stylel_background.php">CSS3 Background</a>.</p>
				<p>Related properties: <code><a href="style_background-property.php">background</a></code>, <code><a href="style_background-attachment-property.php">background-attachment</a></code>, <code><a href="style_background-color-property.php">background-color</a></code>, <code><a href="style_background-image-property.php">background-image</a></code>, <code><a href="stylel_background-clip-property.php">background-clip</a></code>, <code><a href="style_background-position-property.php">background-position</a></code>, <code><a href="style_background-repeat-property.php">background-repeat</a></code>, <code><a href="stylel_background-size-property.php">background-size</a></code>.</p>
				<div class="bottom-link clearfix">
					<a href="style_background-image-property.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
					<a href="style_background-position-property.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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