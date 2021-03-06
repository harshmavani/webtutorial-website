<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS3 transition-timing-function Property">
	  <meta name="keywords" content="css,css3,CSS3 transition-timing-function Property">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS3 transition-timing-function Property - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS3 transition-timing-function Property</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "info_css_inner.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
            	<h1>CSS3 <code>transition-timing-function</code> Property</h1>
				<p class="topic">Topic: <a href="stylel_properties.php">CSS3 Properties Reference</a><span class="topic-nav"><a href="stylel_transition-property-property.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="style_unicode-bidi-property.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
				<h2>Description</h2>
				<p>The <code>transition-timing-function</code> CSS property specifies how the intermediate values of the CSS properties being affected by a transition effect are calculated.</p>
				<p>The following table summarizes the usages context and the version history of this property.</p>
				<div class="shadow">
					<table class="data description">
						<tr>
							<th>Default value:</th>
							<td><code>ease</code></td>
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
								<td><pre class="property">transition-timing-function:&thinsp;</pre></td>
								<td><span class="keyword">linear</span> | <span class="keyword">ease</span> | <span class="keyword">ease-in</span> | <span class="keyword">ease-out</span> | <span class="keyword">ease-in-out</span> | <span class="keyword">cubic-bezier(n,n,n,n)</span> | <a href="../definitions.php#initial">initial</a> | <a href="../definitions.php#inherit">inherit</a></td>
							</tr>
						</table>
					</div>
				</div>
				<p>The example below shows the <code>transition-timing-function</code> property in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelabd0f5.html">Try this code <span>&raquo;</span></a></div>
						<textarea id="code1">

button {
    background: #fd7c2a;
    /* For Safari 3.0+ */
    -webkit-transition-property: background;
    -webkit-transition-duration: 2s;
    -webkit-transition-timing-function: linear;
    /* Standard syntax */
    transition-property: background;
    transition-duration: 2s;
    transition-timing-function: linear;
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
				<div class="shadow space">
					<table class="data">
						<tr>
							<th>Value</th>
							<th>Description</th>
						</tr>
						<tr>
							<td><code>linear</code></td>
							<td>Specifies that the transition goes from its initial state to its final state, with a constant speed.</td>
						</tr>
						<tr>
							<td><code>ease</code></td>
							<td>Similar to ease-in-out, though it accelerates more sharply at the beginning and the acceleration already starts to slow down near the middle of it.</td>
						</tr>
						<tr>
							<td><code>ease-in</code></td>
							<td>Specifies that the transition begins slowly, then progressively accelerates until the final state is reached and the transition stops abruptly.</td>
						</tr>
						<tr>
							<td><code>ease-out</code></td>
							<td>Specifies that the transition starts quickly then slow progressively down when approaching to its final state.</td>
						</tr>
						<tr>
							<td><code>ease-in-out</code></td>
							<td>Specifies that the transition starts slowly, accelerates then slows down when approaching its final state.</td>
						</tr>
						<tr>
							<td><pre><code>cubic-bezier(<i>n</i>,<i>n</i>,<i>n</i>,<i>n</i>)</code></pre></td>
							<td>Defines a cubic Bezier curve. It is also known as speed curve. Possible values are numeric values from 0 to 1.</td>
						</tr>
						<tr>
							<td><code>initial</code></td>
							<td>Sets this property to its default value.</td>
						</tr>
						<tr>
							<td><code>inherit</code></td>
							<td>If specified, the associated element takes the <a href="../definitions.php#computed-value">computed value</a> of its parent element <code>transition-timing-function</code> property.</td>
						</tr>
					</table>
				</div>
				<hr />
				<h2>Browser Compatibility</h2>
				<p>The <code>transition-timing-function</code> property is supported in all major modern browsers.</p>
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
				<p>Related properties: <code><a href="stylel_transition-property.php">transition</a></code>, <code><a href="stylel_transition-delay-property.php">transition-delay</a></code>, <code><a href="stylel_transition-property-property.php">transition-property</a></code>, <code><a href="stylel_transition-duration-property.php">transition-duration</a></code>.</p>
				<div class="bottom-link clearfix">
					<a href="stylel_transition-property-property.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
					<a href="style_unicode-bidi-property.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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