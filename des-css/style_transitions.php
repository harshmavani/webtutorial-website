<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="keywords" content="csss,css3,Transition">
	  <meta name="author" content="webschooltoday.com">
    <title>How to Create CSS3 Transition Effects - WebSchool Today</title>
	<meta name="description" content="How to Create CSS3 Transition Effects" />
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">How to Create CSS3 Transition Effects</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des-css.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="stylel_animations.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

            	<a href="stylel_3d-transforms.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>CSS3 <span>Transitions</span></h1>
                <p class="summary">The CSS3 transition feature allows the changes in CSS property values to occur smoothly over a specified duration.</p>
				<h2>Understanding CSS3 Transitions</h2>
				<p>Normally when the value of a CSS property changes, the rendered result is instantly updated. A common example is changing the background color of a button on mouse hover. In a normal scenario the background color of the button is changes immediately from the old property value to the new property value when you place the cursor over the button.</p>
				<p>CSS3 introduces a new transition feature that allows you to animate a property from the old value to the new value smoothly over time. The following example will show you how to animate the <a href="../info-css/style_background-color-property.php"><code>background-color</code></a> of an HTML button on mouse hover.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab2dd9.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code1">
						button {
    background: #fd7c2a;
    /* For Safari 3.0+ */
    -webkit-transition-property: background;
    -webkit-transition-duration: 2s;
    /* Standard syntax */
    transition-property: background;
    transition-duration: 2s;
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
                <!--End:Code box-->
				<p style="display: none;">You must specify at least two properties <code>transition-property</code> and the <code>transition-duration</code> (greater than 0), to make the transition occur. However, all the other <a href="#stylel_transition-properties">transition properties</a> are optional, as their default values don't prevent an transition from happening.</p>
				<p>To make the transition occur, you must specify at least two things &mdash; the name of the CSS property to which you want to apply the transition effect using the <code>transition-property</code> CSS property, and the duration of the transition effect (greater than 0) using the <code>transition-duration</code> CSS property. However, all the other <a href="#transition-properties">transition properties</a> are optional, as their default values don't prevent a transition from happening.</p>
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
				<h2>Performing Multiple Transitions</h2>
				<p>Each of the transition properties can take more than one value, separated by commas, which provides an easy way to define multiple transitions at once with different settings.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab9895.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code2">
						button {
    background: #fd7c2a;
    border: 3px solid #dc5801;
    /* For Safari 3.0+ */
    -webkit-transition-property: background, border;
    -webkit-transition-duration: 1s, 2s;
    /* Standard syntax */
    transition-property: background, border;
    transition-duration: 1s, 2s;
}
button:hover {
    background: #3cc16e;
    border-color: #288049;
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
				<h2>Transition Shorthand Property</h2>
				<p>There are many properties to consider when applying the transitions. However, it is also possible to specify all the transition properties in one single property to shorten the code.</p>
				<p>The <code>transition</code> property is a shorthand property for setting all the individual transition properties (i.e., <code>transition-property</code>, <code>transition-duration</code>, <code>transition-timing-function</code>, and <code>transition-delay</code>) at once in the listed order.</p>
				<p>It's important to stick to this order for the values, when using this property.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabf77e.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">
						button {
    background: #fd7c2a;
    -webkit-transition: background 2s ease-in 0s; /* For Safari 3.0+ */
    transition: background 2s ease-in 0s; /* Standard syntax */
}
button:hover {
    background: #3cc16e;
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
							<p><strong>Read Carefully:</strong> If any value is missing or not specified, the default value for that property will be used instead. That means, if the value for <code>transition-duration</code> property is missing, no transition will occur, because its default value is 0.</p>
						</div>
					</div>
				</div>
				<!--End:Note box-->
				<hr />
				<h2 id="stylel_transition-properties">CSS3 Transition Properties</h2>
				<p>The following table provides a brief overview of all the transition properties:</p>
				<div class="shadow">
					<table class="data no-wrap">
						<thead>
							<tr>
								<th style="width: 205px;">Property</th>
								<th>Description</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><code><a href="../info-css/stylel_transition-property.php">transition</a></code></td>
								<td>A shorthand property for setting all the four individual transition properties in a single declaration.</td>
							</tr>
							<tr>
								<td><code><a href="../info-css/stylel_transition-delay-property.php">transition-delay</a></code></td>
								<td>Specifies when the transition will start.</td>
							</tr>
							<tr>
								<td><code><a href="../info-css/stylel_transition-duration-property.php">transition-duration</a></code></td>
								<td>Specifies the number of seconds or milliseconds a transition animation should take to complete.</td>
							</tr>
							<tr>
								<td><code><a href="../info-css/stylel_transition-property-property.php">transition-property</a></code></td>
								<td>Specifies the names of the CSS properties to which a transition effect should be applied.</td>
							</tr>
							
							<tr>
								<td><code><a href="../info-css/stylel_transition-timing-function-property.php">transition-timing-function</a></code></td>
								<td>Specifies how the intermediate values of the CSS properties being affected by a transition will&thinsp;be&thinsp;calculated.</td>
							</tr>
						</tbody>
					</table>
				</div>
				<!--Bottom Navigation-->
                <div class="bottom-link clearfix">
                    <a href="stylel_3d-transforms.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="stylel_animations.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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