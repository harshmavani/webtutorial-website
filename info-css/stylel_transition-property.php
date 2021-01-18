<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS3 transition Property">
	  <meta name="keywords" content="css,css3,CSS3 transition Property">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS3 transition Property - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS3 transition Property</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css_inner.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
            	<h1>CSS3 <code>transition</code> Property</h1>
				<p class="topic">Topic: <a href="stylel_properties.php">CSS3 Properties Reference</a><span class="topic-nav"><a href="stylel_transform-style-property.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="stylel_transition-delay-property.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
				<h2>Description</h2>
				<p>The <code>transition</code> CSS property allows you to define the transition between two states of an element. It is a shorthand property for <code><a href="stylel_transition-property-property.php">transition-property</a></code>, <code><a href="stylel_transition-duration-property.php">transition-duration</a></code>, <code><a href="stylel_transition-timing-function-property.php">transition-timing-function</a></code> and <code><a href="stylel_transition-delay-property.php">transition-delay</a></code>.</p>
				<p>The following table summarizes the usages context and the version history of this property.</p>
				<div class="shadow">
					<table class="data description">
						<tr>
							<th>Default value:</th>
							<td><code>all 0 ease 0</code>; <i><a href="#property-values">See individual properties</a></i></td>
						</tr>
						<tr>
							<th>Applies to:</th>
							<td>All elements, <code>::before</code> and <code>::after</code> <a href="../des-css/style_pseudo-elements.php">pseudo-elements</a></td>
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
								<td><pre class="property">transition: </pre></td>
								<td>
									<i>transition1</i> [, <i>transition2</i>,&thinsp;...&thinsp;<i>transitionN</i>] | <a href="../definitions.php#initial">initial</a> | <a href="../definitions.php#inherit">inherit</a><br />
									where <i>transition</i> is:
									[ <i>transition-property</i> | <i>transition-duration</i> | <i>transition-timing-function</i> | <i>transition-delay</i> ]
								</td>
							</tr>
						</table>
					</div>
				</div>
				<p>The example below shows the <code>transition</code> property in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelab29ca.html">Try this code <span>&raquo;</span></a></div>
						<textarea id="code1">

button {
    background: #fd7c2a;
    -webkit-transition-property: background 2s; /* For Safari 3.0+ */
    transition: background 2s; /* Standard syntax */
}
button:hover {
    background: #3cc16e;
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
				<div class="shadow space" id="property-values">
					<table class="data">
						<tr>
							<th style="width: 200px;">Value</th>
							<th>Description</th>
						</tr>
						<tr>
							<td><code><i><a href="stylel_transition-property-property.php">transition-property</a></i></code></td>
							<td>Specifies the names of the CSS properties to which a transition effect should be applied.</td>
						</tr>
						<tr>
							<td><code><i><a href="stylel_transition-duration-property.php">transition-duration</a></i></code></td>
							<td>Specifies the number of seconds or milliseconds a transition animation should take to complete.</td>
						</tr>
						<tr>
							<td><code><i><a href="stylel_transition-timing-function-property.php">transition-timing-function</a></i></code></td>
							<td>Specifies how the intermediate values of the CSS properties being affected by a transition will be calculated.</td>
						</tr>
						<tr>
							<td><code><i><a href="stylel_transition-delay-property.php">transition-delay</a></i></code></td>
							<td>Specifies when the transition will start.</td>
						</tr>
						<tr>
							<td><code>initial</code></td>
							<td>Sets this property to its default value.</td>
						</tr>
						<tr>
							<td><code>inherit</code></td>
							<td>If specified, the associated element takes the <a href="../definitions.php#computed-value">computed value</a> of its parent element <code>transition</code> property.</td>
						</tr>
					</table>
				</div>				
				<hr />
				<h2>Browser Compatibility</h2>
				<p>The <code>transition</code> property is supported in all major modern browsers.</p>
				<div class="shadow">
					<div class="support">
						<table>
							<tr>
								<td><img src="../assets/images/browser.jpg" alt="Browsers Icon" /></td>
								<td>
									<h2>Basic Support&mdash;</h2>
									<ul>
										<li>Firefox <span>4+ <sup class="badge">-moz-</sup></span>, <span>16+</span></li>
										<li>Google Chrome <span>4+ <sup class="badge">-webkit-</sup></span>, <span>26+</span></li>
										<li>Internet Explorer <span>10+</span></li>
										<li>Apple Safari <span>3.1+ <sup class="badge">-webkit-</sup></span>, <span>6.1+</span></li>
										<li>Opera <span>10.5+ <sup class="badge">-o-</sup></span>, <span>12.1+</span></li>
									</ul>
								</td>
							</tr>
						</table>
					</div>
				</div>
				<hr />
				<h2>Further Reading</h2>
				<p>See tutorial on: <a href="../des-css/stylel_transitions.php" class="selected">CSS3 Transitions</a>.</p>
				<p>Related properties: <code><a href="stylel_transition-delay-property.php">transition-delay</a></code>, <code><a href="stylel_transition-duration-property.php">transition-duration</a></code>, <code><a href="stylel_transition-property-property.php">transition-property</a></code>, <code><a href="stylel_transition-timing-function-property.php">transition-timing-function</a></code>.</p>
				<div class="bottom-link clearfix">
					<a href="stylel_transform-style-property.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
					<a href="stylel_transition-delay-property.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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