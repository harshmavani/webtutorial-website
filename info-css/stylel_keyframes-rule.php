<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS3 @keyframes Rule">
	  <meta name="keywords" content="css,css3,CSS3 @keyframes Rule">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS3 @keyframes Rule</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS3 @keyframes Rule</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css_inner.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
            <h1>CSS3 <code>@keyframes</code> rule</h1>
            <p class="topic">Topic: <a href="stylel_properties.php">CSS3 Properties Reference</a><span class="topic-nav"><a href="style_import-rule.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="style_media-rule.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
	    	<h2>Description</h2>
	    	<p>The <code>@keyframes</code> CSS at-rule is used to specify the intermediate steps during the cycle of an animation sequence by establishing the keyframes along the animation sequence.</p>
	    	<p>A <code>@keyframes</code> rule consists of the keyword "<code>@keyframes</code>", followed by an identifier giving a name for the animation (which will be referenced using <code><a href="stylel_animation-name-property.php">animation-name</a></code> property), followed by a set of style rules (delimited by curly braces).</p>
			<p>The keyframe selector for a keyframe style rule starts with a percentage (%) or the keywords from (same as 0%) or to (same as 100%). The selector is used to specify where a keyframe is constructed along the duration of the animation.</p>
			<hr />
	    	<h2>Syntax</h2>
            <p>The syntax of this at-rule is given with:</p>
            <div class="shadow">
                <div class="syntax">
       				<table>
                        <tr>
                            <td>
                                <span class="at-rule">@keyframes</span> <i>animation-name</i> {<br />
                                &nbsp;&nbsp;&nbsp;&nbsp;<span class="selector"><i>keyframes-selector</i></span> {<br />
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="property">property</span>: <span class="property-value">value</span>;<br />
								&nbsp;&nbsp;&nbsp;&nbsp;}<br />
                                }
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <p>The example below shows the <code>@keyframes</code> at-rule in action.</p>
			<div class="example">
				<div class="my_codeb">
					<div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelaba0c4.html">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
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
			<div class="color-box">
				<div class="shadow">
					<div class="info-tab note-icon" title="Important Notes"><i></i></div>
					<div class="note-box"  style="background-color:#ff8585">
						<p><strong>Read Carefully:</strong> If a keyframe selector specifies negative percentage values or values higher than the <code>100%</code>, then the keyframe will be ignored.</p>
					</div>
				</div>
			</div>
			<hr />
			<h2>Parameters</h2>
			<p>The following table describes the parameters of this at-rule.</p>
			<div class="shadow space">
				<table class="data">
					<tr>
						<th style="width:140px;">Value</th>
						<th>Description</th>
					</tr>
					<tr>
						<td colspan="2" class="section"><strong>Required</strong> &mdash; The following parameters are required for the CSS to be valid.</td>
					</tr>
					<tr>
						<td><code><a href="stylel_animation-name-property.php"><i>animation-name</i></a></code></td>
						<td>The name of the animation.</td>
					</tr>
					<tr>
						<td><i>keyframes-selector</i></td>
						<td>Specifies the percentage along the duration of the animation. The keyframe declaration block for a keyframe rule consists of properties and values.</td>
					</tr>
				</table>
			</div>	
            <hr />
	    	<h2>Browser Compatibility</h2>
            <p>The <code>@keyframes</code> rule is supported in all major modern browsers.</p>
            <div class="shadow">
                <div class="support">
                    <table>
                        <tr>
                            <td><img src="../assets/images/browser.jpg" alt="Browsers Icon" /></td>
                            <td>
                                <h2>Basic Support&mdash;</h2>
                                <ul>
                                    <li>Firefox <span>5+ <sup class="badge">-moz-</sup></span>, <span>16+</span></li>
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
            <p>See tutorial on: <a href="../des-css/style_media-types.php">CSS Media Types</a>.</p>
            <div class="bottom-link clearfix">
                <a href="style_import-rule.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                <a href="style_media-rule.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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