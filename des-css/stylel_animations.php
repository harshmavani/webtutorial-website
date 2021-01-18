<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="keywords" content="css,css3,Keyframe Animations">
	  <meta name="author" content="webschooltoday.com">
    <title>How to Create CSS3 Keyframe Animations - WebSchool Today</title>
	<meta name="description" content="How to Create CSS3 Keyframe Animations" />
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">How to Create CSS3 Keyframe Animations</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des-css.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
            	<a href="stylel_transitions.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                <a href="stylel_multi-column-layouts.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                <h1>CSS3 <span>Animations</span></h1>
                <p class="summary">The CSS3 animations feature allows you to create keyframe animations.</p>
				<h2>Creating CSS3 Animations</h2>
				<p>In the previous chapter you've seen how to do simple animations like animating a property from one value to another via CSS3 transitions feature. However, the CSS3 transitions provide little control on how the animation progresses over time.</p>
				<p>The CSS3 animations take it a step further with keyframe-based animations that allow you to specify the changes in CSS properties over time as a set of keyframes, like flash animations. Creating CSS animations is a two step process, as shown in the example below:</p>
				<ul>
					<li>The first step of building a CSS animation is to defining individual keyframes and naming an animation with a keyframes declaration.</li>
					<li>The second step is referencing the keyframes by name using the <code>animation-name</code> property as well as adding <code>animation-duration</code> and other optional <a href="#stylel_animation-properties">animation properties</a> to control the animation's behavior.</li>
				</ul>
				<p>However, it is not necessary to define the keyframes rules before referencing or applying it. The following example will show you how to animate a <a href="../info-html/html-div-tag.php"><code>&lt;div&gt;</code></a> box horizontally from one position to another using the CSS3 animation feature.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab9399.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
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
                <!--End:Code box-->
				<p>You must specify at least two properties <code>animation-name</code> and the <code>animation-duration</code> (greater than 0), to make the animation occur. However, all the other <a href="#stylel_animation-properties">animation properties</a> are optional, as their default values don't prevent an animation from happening.</p>
				<!--Note box-->
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585">
							<p><strong>Read Carefully:</strong> Not all CSS properties are animatable. In general, any CSS property that accepts values that are numbers, lengths, percentages, or colors is animatable.</p>
						</div>
					</div>
				</div>
				<!--End:Note box-->
				<hr />
				<h2>Defining Keyframes</h2>
				<p>Keyframes are used to specify the values for the animating properties at various stages of the animation. Keyframes are specified using a specialized <a href="../info-css/style_at-rules.php">CSS at-rule</a> &mdash; <code>@keyframes</code>. The keyframe selector for a keyframe style rule starts with a percentage (<code>%</code>) or the keywords <code>from</code> (same as 0%) or <code>to</code> (same as 100%). The selector is used to specify where a keyframe is constructed along the duration of the animation.</p>
				<p>Percentages represent a percentage of the animation duration, 0% represents the starting point of the animation, 100% represents the end point, 50% represents the midpoint and so on. That means, a 50% keyframe in a 2s animation would be 1s into an animation.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab7522.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">
						.box {
    width: 50px;
    height: 50px;
    margin: 100px;
    background: red;
    position: relative;
    left: 0;
    /* Chrome, Safari, Opera */
    -webkit-animation-name: shakeit;
    -webkit-animation-duration: 2s;
    /* Standard syntax */
    animation-name: shakeit;
    animation-duration: 2s;
}
 
/* Chrome, Safari, Opera */
@-webkit-keyframes shakeit {
    12.5% {left: -50px;}
    25% {left: 50px;}
    37.5% {left: -25px;}
    50% {left: 25px;}
    62.5% {left: -10px;}
    75% {left: 10px;}
}
 
/* Standard syntax */
@keyframes shakeit {
    12.5% {left: -50px;}
    25% {left: 50px;}
    37.5% {left: -25px;}
    50% {left: 25px;}
    62.5% {left: -10px;}
    75% {left: 10px;}
}
     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code2"), {
									mode: "text/html",
									tabMode: "indent",
									styleActiveLine: true,
									lineNumbers: true,
									lineWrapping: true
								});
							</script>
                    </div>
                </div>
                <!--End:Code box-->
				<hr />
				<h2>Animation Shorthand Property</h2>
				<p>There are many properties to consider when creating the animations. However, it is also possible to specify all the animations properties in one single property to shorten the code.</p>
				<p>The <code>animation</code> property is a shorthand property for setting all the individual <a href="#stylel_animation-properties">animation properties</a> at once in the listed order. For example:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab3719.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code3">
						.box {
    width: 50px;
    height: 50px;
    background: red;
    position: relative;
    /* Chrome, Safari, Opera */
    -webkit-animation: repeatit 2s linear 0s infinite alternate;
    /* Standard syntax */
    animation: repeatit 2s linear 0s infinite alternate;
}
 
/* Chrome, Safari, Opera */
@-webkit-keyframes repeatit {
    from {left: 0;}
    to {left: 50%;}
}
 
/* Standard syntax */
@keyframes repeatit {
    from {left: 0;}
    to {left: 50%;}
}
     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code3"), {
									mode: "text/html",
									tabMode: "indent",
									styleActiveLine: true,
									lineNumbers: true,
									lineWrapping: true
								});
							</script>
                    </div>
                </div>
                <!--End:Code box-->
				<!--Note box-->
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585">
							<p><strong>Read Carefully:</strong> If any value is missing or not specified, the default value for that property will be used instead. That means, if the value for <code>animation-duration</code> property is missing, no transition will occur, because its default value is 0.</p>
						</div>
					</div>
				</div>
				<!--End:Note box-->
				<hr />
				<h2 id="stylel_animation-properties">CSS3 Animation Properties.</h2>
				<p>The following table provides a brief overview of all the animation-related properties.</p>
				<div class="shadow">
					<table class="data no-wrap">
						<thead>
							<tr>
								<th style="width: 200px;">Property</th>
								<th>Description</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><code><a href="../info-css/stylel_animation-property.php">animation</a></code></td>
								<td>A shorthand property for setting all the animation properties in single declaration.</td>
							</tr>
							<tr>
								<td><code><a href="../info-css/stylel_animation-name-property.php">animation-name</a></code></td>
								<td>Specifies the name of <code>@keyframes</code> defined animations that should be applied to the selected element.</td>
							</tr>
							<tr>
								<td><code><a href="../info-css/stylel_animation-duration-property.php">animation-duration</a></code></td>
								<td>Specifies how many seconds or milliseconds that an animation takes to complete one cycle of the animation.</td>
							</tr>
							<tr>
								<td><code><a href="../info-css/stylel_animation-timing-function-property.php">animation-timing-function</a></code></td>
								<td>Specifies how the animation will progress over the duration of each cycle i.e. the easing functions.</td>
							</tr>
							<tr>
								<td><code><a href="../info-css/stylel_animation-delay-property.php">animation-delay</a></code></td>
								<td>Specifies when the animation will start.</td>
							</tr>
							<tr>
								<td><code><a href="../info-css/stylel_animation-iteration-count-property.php">animation-iteration-count</a></code></td>
								<td>Specifies the number of times an animation cycle should be played before stopping.</td>
							</tr>
							<tr>
								<td><code><a href="../info-css/stylel_animation-direction-property.php">animation-direction</a></code></td>
								<td>Specifies whether or not the animation should play in reverse on alternate cycles.</td>
							</tr>
							<tr>
								<td><code><a href="../info-css/stylel_animation-fill-mode-property.php">animation-fill-mode</a></code></td>
								<td>Specifies how a CSS animation should apply styles to its target before and after it is executing.</td>
							</tr>
							<tr>
								<td><code><a href="../info-css/stylel_animation-play-state-property.php">animation-play-state</a></code></td>
								<td>Specifies whether the animation is running or paused.</td>
							</tr>
							<tr>
								<td><code><a href="../info-css/stylel_keyframes-rule.php">@keyframes</a></code></td>
								<td>Specifies the values for the animating properties at various points during the animation.</td>
							</tr>						
						</tbody>
					</table>
				</div>
				<!--Bottom Navigation-->
                <div class="bottom-link clearfix">
                    <a href="stylel_transitions.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="stylel_multi-column-layouts.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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