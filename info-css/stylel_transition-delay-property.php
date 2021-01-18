<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS3 transition-delay Property">
	  <meta name="keywords" content="css,css3,CSS3 transition-delay Property">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS3 transition-delay Property - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS3 transition-delay Property</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css_inner.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
            	<h1>CSS3 <code>transition-delay</code> Property</h1>
				<p class="topic">Topic: <a href="stylel_properties.php">CSS3 Properties Reference</a><span class="topic-nav"><a href="stylel_transition-property.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="stylel_transition-duration-property.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
				<h2>Description</h2>
				<p>The <code>transition-delay</code> CSS property defines when the transition will start (e.g. a value of 2s, indicates that the transition will begin 2 seconds after it is applied.). The value of this property can be specified in seconds (s) or milliseconds (ms).</p>
				<p>The following table summarizes the usages context and the version history of this property.</p>
				<div class="shadow">
					<table class="data description">
						<tr>
							<th>Default value:</th>
							<td><code>0s</code></td>
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
								<td><pre class="property">transition-delay: </pre></td>
								<td><i>time</i> | <a href="../definitions.php#initial">initial</a> | <a href="../definitions.php#inherit">inherit</a></td>
							</tr>
						</table>
					</div>
				</div>
				<p>The example below shows the <code>transition-delay</code> property in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelab5a28.html">Try this code <span>&raquo;</span></a></div>
						<textarea id="code1">

button {
    background: #fd7c2a;
    /* For Safari 3.0+ */
    -webkit-transition-property: background;
    -webkit-transition-duration: 4s;
    -webkit-transition-delay: 2s;
    /* Standard syntax */
    transition-property: background;
    transition-duration: 4s;
    transition-delay: 2s;
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
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585">
							<p><strong>Read Carefully:</strong> Negative values are allowed for this property. However, it will appear to have begun executing partway through its transition cycle e.g. the transition delay of -2s makes the transition start at once, but starts 2 seconds into the transition.</p>
						</div>
					</div>
				</div>
				<hr />	
				<h2>Property Values</h2>
				<p>The following table describes the values of this property.</p>
				<div class="shadow space" id="property-values">
					<table class="data">
						<tr>
							<th style="width: 80px;">Value</th>
							<th>Description</th>
						</tr>
						<tr>
							<td><i>time</i></td>
							<td>Defines the number of seconds (s) or milliseconds (ms) to wait before the transition will start. The default value is 0s.</td>
						</tr>
						<tr>
							<td><code>initial</code></td>
							<td>Sets this property to its default value.</td>
						</tr>
						<tr>
							<td><code>inherit</code></td>
							<td>If specified, the associated element takes the <a href="../definitions.php#computed-value">computed value</a> of its parent element <code>transition-delay</code> property.</td>
						</tr>
					</table>
				</div>				
				<hr />
				<h2>Browser Compatibility</h2>
				<p>The <code>transition-delay</code> property is supported in all major modern browsers.</p>
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
				<p>Related properties: <code><a href="stylel_transition-property.php">transition</a></code>, <code><a href="stylel_transition-duration-property.php">transition-duration</a></code>, <code><a href="stylel_transition-property-property.php">transition-property</a></code>, <code><a href="stylel_transition-timing-function-property.php">transition-timing-function</a></code>.</p>
				<div class="bottom-link clearfix">
					<a href="stylel_transition-property.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
					<a href="stylel_transition-duration-property.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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