<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS3 animation-name Property">
	  <meta name="keywords" content="css,css3,CSS3 animation-name Property">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS3 animation-name Property - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS3 animation-name Property</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css_inner.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
            	<h1>CSS3 <code>animation-name</code> Property</h1>
				<p class="topic">Topic: <a href="stylel_properties.php">CSS3 Properties Reference</a><span class="topic-nav"><a href="stylel_animation-iteration-count-property.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="stylel_animation-play-state-property.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
				<h2>Description</h2>
				<p>The <code>animation-name</code> CSS property specifies the name of <code>@keyframes</code> defined animations that should be applied to the selected element.</p>
				<p>The following table summarizes the usages context and the version history of this property.</p>
				<div class="shadow">
					<table class="data description">
						<tr>
							<th>Default value:</th>
							<td><code>none</code></td>
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
								<td><span class="property">animation-name</span>:&nbsp;</td>
								<td><i>keyframe-name</i> | <span class="keyword">none</span> | <a href="../definitions.php#initial">initial</a> | <a href="../definitions.php#inherit">inherit</a></td>
							</tr>
						</table>
					</div>
				</div>
				<p>The example below shows the <code>animation-name</code> property in action.</p>
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelabef8d.html">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
						<textarea id="code1">

.box {
    width: 50px;
    height: 50px;
    background: red;
    position: relative;
    /* Chrome, Safari, Opera */
    -webkit-animation-name: moveit;
    -webkit-animation-duration: 2s;
    /* Standard syntax */
    animation-name: moveit;
    animation-duration: 2s;
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
							<th style="width: 115px;">Value</th>
							<th>Description</th>
						</tr>
						<tr>
							<td><i>keyframe-name</i></td>
							<td>Specifies the name of the keyframe you want to bind to the selector.</td>
						</tr>
						<tr>
							<td><code>none</code></td>
							<td>Specifies that there will be no animation. This can be used to override or deactivate any animations coming from the cascade.</td>
						</tr>
						<tr>
							<td><code>initial</code></td>
							<td>Sets this property to its default value.</td>
						</tr>
						<tr>
							<td><code>inherit</code></td>
							<td>If specified, the associated element takes the <a href="../definitions.php#computed-value">computed value</a> of its parent element <code>animation-name</code> property.</td>
						</tr>
					</table>
				</div>
				<hr />
				<h2>Browser Compatibility</h2>
				<p>The <code>animation-name</code> property is supported in all major modern browsers.</p>
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
				<p>Related properties and at-rules: <code><a href="stylel_animation-property.php">animation</a></code>, <code><a href="stylel_animation-duration-property.php">animation-duration</a></code>, <code><a href="stylel_animation-timing-function-property.php">animation-timing-function</a></code>, <code><a href="stylel_animation-delay-property.php">animation-delay</a></code>, <code><a href="stylel_animation-iteration-count-property.php">animation-iteration-count</a></code>, <code><a href="stylel_animation-direction-property.php">animation-direction</a></code>, <code><a href="stylel_animation-fill-mode-property.php">animation-fill-mode</a></code>, <code><a href="stylel_animation-play-state-property.php">animation-play-state</a></code>, <code><a href="style_at-rules.php">@keyframes</a></code>.</p>
				<div class="bottom-link clearfix">
					<a href="stylel_animation-iteration-count-property.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
					<a href="stylel_animation-play-state-property.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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