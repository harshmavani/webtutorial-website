<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS3 animation-iteration-count Property">
	  <meta name="keywords" content="css,css3,CSS3 animation-iteration-count Property">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS3 animation-iteration-count Property - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS3 animation-iteration-count Property</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css_inner.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
            	<h1>CSS3 <code>animation-iteration-count</code> Property</h1>
				<p class="topic">Topic: <a href="stylel_properties.php">CSS3 Properties Reference</a><span class="topic-nav"><a href="stylel_animation-fill-mode-property.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="stylel_animation-name-property.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
				<h2>Description</h2>
				<p>The <code>animation-iteration-count</code> CSS property specifies the number of times an animation cycle should be played before stopping.</p>
				<p>The following table summarizes the usages context and the version history of this property.</p>
				<div class="shadow">
					<table class="data description">
						<tr>
							<th>Default value:</th>
							<td><code>1</code></td>
						</tr>
						<tr>
							<th>Applies to:</th>
							<td>All elements, <code>::before</code> and <code>::after</code> <a href="#">pseudo-elements</a></td>
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
								<td><pre class="property">animation-iteration-count: </pre></td>
								<td><i>number</i> | <span class="keyword">infinite</span> | <a href="../definitions.php#initial">initial</a> | <a href="../definitions.php#inherit">inherit</a></td>
							</tr>
						</table>
					</div>
				</div>
				<p>The example below shows the <code>animation-iteration-count</code> property in action.</p>
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelabc178.html">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
						<textarea id="code1">

.box {
    width: 50px;
    height: 50px;
    background: red;
    position: relative;
    /* Chrome, Safari, Opera */
    -webkit-animation-name: moveit;
    -webkit-animation-duration: 4s;
    -webkit-animation-iteration-count: infinite;
    /* Standard syntax */
    animation-name: moveit;
    animation-duration: 4s;
    animation-iteration-count: infinite;
}
 
/* Chrome, Safari, Opera */
@-webkit-keyframes moveit {
    from {left: 0;}
    to {left: 50%;}
}
 
/* Standard syntax */
@keyframes moveit {
    from {left: 0;}
    to {left: 50%;}
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
				<hr />	
				<h2>Property Values</h2>
				<p>The following table describes the values of this property.</p>
				<div class="shadow space">
					<table class="data">
						<tr>
							<th>Value</th>
							<th>Description</th>
						</tr>
						<tr>
							<td><i>number</i></td>
							<td>Specifies the number of times an animation should repeat. Default value is 1. Negative values are not allowed.</td>
						</tr>
						<tr>
							<td><code>infinite</code></td>
							<td>The animation will repeat forever i.e. infinite times.</td>
						</tr>
						<tr>
							<td><code>initial</code></td>
							<td>Sets this property to its default value.</td>
						</tr>
						<tr>
							<td><code>inherit</code></td>
							<td>If specified, the associated element takes the <a href="../definitions.php#computed-value">computed value</a> of its parent element <code>animation-iteration-count</code> property.</td>
						</tr>
					</table>
				</div>
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585">
							<p><strong>Read Carefully:</strong> You may specify non-integer values like <code>0.5</code>, <code>0.75</code> etc. to play just a part of an animation cycle, for example the value <code>0.5</code> will play half of the animation cycle.</p>
						</div>
					</div>
				</div>
				<hr />
				<h2>Browser Compatibility</h2>
				<p>The <code>animation-iteration-count</code> property is supported in all major modern browsers.</p>
				<div class="shadow">
					<div class="support">
						<table>
							<tr>
								<td><img src="../assets/images/browser.jpg" alt="Browsers Icon" /></td>
								<td>
									<h2>Basic Support&mdash;</h2>
									<ul>
										<li>Firefox <span>5+ <sup class="badge">-moz-</sup></span>, <span>15+</span></li>
										<li>Google Chrome <span>4+ <sup class="badge">-webkit-</sup></span></li>
										<li>Internet Explorer <span>10+</span></li>
										<li>Apple Safari <span>4+ <sup class="badge">-webkit-</sup></span></li>
										<li>Opera <span>12+ <sup class="badge">-o-</sup></span>, <span>15+ <sup class="badge">-webkit-</sup></span></li>
									</ul>
								</td>
							</tr>
						</table>
					</div>
				</div>
				<hr />
				<h2>Further Reading</h2>
				<p>See tutorial on: <a href="../des-css/stylel_animations.php" class="selected">CSS3 Animations</a>.</p>
				<p>Related properties and at-rules: <code><a href="stylel_animation-property.php">animation</a></code>, <code><a href="stylel_animation-name-property.php">animation-name</a></code>, <code><a href="stylel_animation-duration-property.php">animation-duration</a></code>, <code><a href="stylel_animation-timing-function-property.php">animation-timing-function</a></code>, <code><a href="stylel_animation-delay-property.php">animation-delay</a></code>, <code><a href="stylel_animation-direction-property.php">animation-direction</a></code>, <code><a href="stylel_animation-fill-mode-property.php">animation-fill-mode</a></code>, <code><a href="stylel_animation-play-state-property.php">animation-play-state</a></code>, <code><a href="style_at-rules.php">@keyframes</a></code>.</p>
				<div class="bottom-link clearfix">
					<a href="stylel_animation-fill-mode-property.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
					<a href="stylel_animation-name-property.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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