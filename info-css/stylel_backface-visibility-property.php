<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS3 backface-visibility Property">
	  <meta name="keywords" content="css,css3,CSS3 backface-visibility Property">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS3 backface-visibility Property - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS3 backface-visibility Property</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css_inner.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
            	<h1>CSS3 <code>backface-visibility</code> Property</h1>
				<p class="topic">Topic: <a href="stylel_properties.php">CSS3 Properties Reference</a><span class="topic-nav"><a href="stylel_animation-timing-function-property.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="style_background-property.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
				<h2>Description</h2>
				<p>The <code>backface-visibility</code> CSS property determines whether or not the "back" side of a transformed element is visible when facing the user.</p>
				<p>The following table summarizes the usages context and the version history of this property.</p>
				<div class="shadow">
					<table class="data description">
						<tr>
							<th>Default value:</th>
							<td><code>visible</code></td>
						</tr>
						<tr>
							<th>Applies to:</th>
							<td>Transformable elements</td>
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
								<td><span class="property">backface-visibility</span>:&nbsp;</td>
								<td><span class="keyword">visible</span> | <span class="keyword">hidden</span> | <a href="../definitions.php#initial">initial</a> | <a href="../definitions.php#inherit">inherit</a></td>
							</tr>
						</table>
					</div>
				</div>
				<p>The example below shows the <code>backface-visibility</code> property in action.</p>
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelab89ea.html">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
						<textarea id="code1">

.flip-container {
    margin: 50px;
    perspective: 1000px;
    display: inline-block;
}
.flip-container:hover .card {
    transform: rotateY(180deg);
}
.card, .front, .back {
    width: 130px;
    height: 195px;
}
.card {
    position: relative;
    transition: 0.5s all;
    transform-style: preserve-3d;
}
.front, .back {
    position: absolute;
    backface-visibility: hidden;
}
.front {
    z-index: 1;
    transform: rotateY(180deg);
}
.back {
    z-index: 2;
    transform: rotateY(0deg);
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
							<p><strong>Read Carefully:</strong> The <code>backface-visibility</code> property is very useful for creating animations like revolving coin or card flipping, where two different images (i.e. front and back side) are blend together to create better 3D rotation effect.</p>
						</div>
					</div>
				</div>
				<hr />	
				<h2>Property Values</h2>
				<p>The following table describes the values of this property.</p>
				<div class="shadow space">
					<table class="data">
						<tr>
							<th style="width: 80px;">Value</th>
							<th>Description</th>
						</tr>
						<tr>
							<td><code>visible</code></td>
							<td>Specifies that the back face is visible, allowing the front face to be displayed mirrored. This is default value.</td>
						</tr>
						<tr>
							<td><code>hidden</code></td>
							<td>Specifies that the back face is not visible, hiding the front face.</td>
						</tr>
						<tr>
							<td><code>initial</code></td>
							<td>Sets this property to its default value.</td>
						</tr>
						<tr>
							<td><code>inherit</code></td>
							<td>If specified, the associated element takes the <a href="../definitions.php#computed-value">computed value</a> of its parent element <code>backface-visibility</code> property.</td>
						</tr>
					</table>
				</div>	
				<hr />
				<h2>Browser Compatibility</h2>
				<p>The <code>backface-visibility</code> property is supported in all major modern browsers.</p>
				<div class="shadow">
					<div class="support">
						<table>
							<tr>
								<td><img src="../assets/images/browser.jpg" alt="Browsers Icon" /></td>
								<td>
									<h2>Basic Support&mdash;</h2>
									<ul>
										<li>Firefox <span>10+ <sup class="badge">-moz-</sup></span>, <span>16+</span></li>
										<li>Google Chrome <span>12+ <sup class="badge">-webkit-</sup></span>, <span>36+</span></li>
										<li>Internet Explorer <span>10+</span></li>
										<li>Apple Safari <span>4+ <sup class="badge">-webkit-</sup></span></li>
										<li>Opera <span>15+ <sup class="badge">-o-</sup></span>, <span>23+ <sup class="badge">-webkit-</sup></span></li>
									</ul>
								</td>
							</tr>
						</table>
					</div>
				</div>
				<hr />
				<h2>Further Reading</h2>
				<p>See tutorial on: <a href="../des-css/stylel_transitions.php">CSS3 Transitions</a>, <a href="../des-css/stylel_3d-transforms.php">CSS3 3D Transforms</a>, <a href="../des-css/stylel_animations.php" class="selected">CSS3 Animations</a>.</p>
				<p>Related properties: <code><a href="stylel_perspective-property.php">perspective</a></code>, <code><a href="stylel_perspective-origin-property.php">perspective-origin</a></code>, <code><a href="stylel_transform-property.php">transform</a></code>, <code><a href="stylel_transform-origin-property.php">transform-origin</a></code>, <code><a href="stylel_transform-style-property.php">transform-style</a></code>, <code><a href="stylel_transition-property.php">transition</a></code>.</p>
				<div class="bottom-link clearfix">
					<a href="stylel_animation-timing-function-property.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
					<a href="style_background-property.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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