<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="jQuery Animation Effects">
	  <meta name="keywords" content="jquery,jq,js,jQuery Animation Effects">
	  <meta name="author" content="webschooltoday.com">
    <title>jQuery Animation Effects - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">jQuery Animation Effects</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_jquery.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="jq_stop-animations.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="jq_sliding-effects.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
				<h1>jQuery <span>Animation</span> Effects</h1>
				<p class="summary">In this tutorial you will learn how to animate CSS properties using jQuery.</p>
				<h2>jQuery <code>animate()</code> Method</h2>
				<p>The jQuery <code>animate()</code> method is used to create custom animations. The <code>animate()</code> method is typically used to animate numeric CSS properties, for example, <a href="../info-css/css-width-property.php"><code>width</code></a>, <a href="../info-css/css-height-property.php"><code>height</code></a>, <a href="../info-css/css-margin-property.php"><code>margin</code></a>, <a href="../info-css/css-padding-property.php"><code>padding</code></a>, <a href="../info-css/css3-opacity-property.php"><code>opacity</code></a>, <a href="../info-css/css-top-property.php"><code>top</code></a>, <a href="../info-css/css-left-property.php"><code>left</code></a>, etc. but the non-numeric properties such as <a href="../info-css/css-color-property.php"><code>color</code></a> or <a href="../info-css/css-background-color-property.php"><code>background-color</code></a> cannot be animated using the basic jQuery functionality.</p>
				<div class="color-box space">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585"
>
							<p><strong>Read Carefully:</strong> Not all CSS properties are animatable. In general, any CSS property that accepts values that are numbers, lengths, percentages, or colors is animatable. However, the color animation is not support by the core jQuery library. To manipulate and animate the color use the <a rel="nofollow" href="https://github.com/jquery/jq_color" target="_blank">jQuery color plugin</a>.</p>
						</div>
					</div>
				</div>
				<h2>Syntax</h2>
				<p>The basic syntax of the jQuery <code>animate()</code> method can be given with:</p>
				<div class="shadow">
					<div class="syntax">$(selector).animate({ properties }, duration, callback);</div>
				</div>
				<p>The parameters of the <code>animate()</code> method have the following meanings:</p>
				<ul>
					<li>The required properties parameter defines the <a href="../info-css/css3-properties.php">CSS properties</a> to be animated.</li>
					<li>The optional duration parameter specifies how long the animation will run. Durations can be specified either using one of the predefined string <code>'slow'</code> or <code>'fast'</code>, or in a number of milliseconds; higher values indicate slower animations.</li>
					<li>The optional <a href="jq_callback.php">callback</a> parameter is a function to call once the animation is complete.</li>
				</ul>
				<p>Here's a simple example of the jQuery <code>animate()</code> method that animates an image from its original position to the right by 300 pixels on click of the button.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabca9d.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code1">

<script>
$(document).ready(function(){
    $("button").click(function(){
        $("img").animate({
            left: 300
        });
    });
});
</script>

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
				<div class="color-box space">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585"
>
							<p><strong>Read Carefully:</strong> All HTML elements have static position by default. Since the static element cannot be moved, so you must set the CSS <a href="../info-css/css-position-property.php"><code>position</code></a> property for the element to <code>relative</code>, <code>fixed</code>, or <code>absolute</code> to manipulate or animate its position.</p>
						</div>
					</div>
				</div>
				<hr />
				<h2>Animate Multiple Properties At Once</h2>
				<p>You can also animate multiple properties of an element together at the same time using the <code>animate()</code> method. All the properties animated simultaneously without any delay.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabbb49.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code2">

<script>
$(document).ready(function(){
    $("button").click(function(){
        $(".box").animate({
            width: "300px",
            height: "300px",
            marginLeft: "150px",
            borderWidth: "10px",
            opacity: 0.5
        });
    });
});
</script>

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
				<div class="color-box space">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585"
>
							<p><strong>Read Carefully:</strong> The <a href="../info-css/css3-properties.php">CSS properties</a> names must be camel-cased when using with the <code>animate()</code> method, e.g. if you want to animate the font size you need to write <code>'fontSize'</code> rather than <code>'<a href="../info-css/css-font-size-property.php">font-size</a>'</code>. Similarly, write <code>'marginLeft'</code> instead of <code>'<a href="../info-css/css-margin-left-property.php">margin-left</a>'</code>, <code>'borderWidth'</code> instead of <code>'<a href="../info-css/css-border-width-property.php">border-width</a>'</code>, and so on.</p>
						</div>
					</div>
				</div>
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
						<div class="tip-box"   style="background-color:#fad28c">
							<p><strong>Important:</strong> You must set the <a href="../info-css/css-border-style-property.php"><code>border-style</code></a> property for the element before animating its <a href="../info-css/css-border-width-property.php"><code>border-width</code></a> property. An element must have borders before you can animate the border width, because the default value of the <code>border-style</code> property is <code>none</code>.</p>
						</div>
					</div>
				</div>
				<hr />
				<h2>Animate Multiple Properties One by One or Queued Animations</h2>
				<p>You can also animate the multiple properties of an element one by one individually in a queue using the jQuery's chaining feature. We'll learn more about chaining in next chapter.</p>
				<p>The following example demonstrates a jQuery queued or chained animation, where each animation will start once the previous animation on the element has completed.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab434c.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code3">

<script>
$(document).ready(function(){
    $("button").click(function(){
        $(".box")
            .animate({width: "300px"})
            .animate({height: "300px"})
            .animate({marginLeft: "150px"})
            .animate({borderWidth: "10px"})
            .animate({opacity: 0.5});
    });
});
</script>

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
				<hr />
				<h2>Animate Properties with Relative Values</h2>
				<p>You can also define the relative values for the animated properties. If a value is specified with a leading <code>+=</code> or <code>-=</code> prefix, then the target value is calculated by adding or subtracting the given number from the current value of the property.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab5f9b.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code4">

<script>
$(document).ready(function(){
    $("button").click(function(){
        $(".box").animate({            
            top: "+=50px",
            left: "+=50px",
            width: "+=50px",
            height: "+=50px"
        });
    });
});
</script>


  </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code4"), {
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
				<h2>Animate Properties with Pre-defined Values</h2>
				<p>In addition to the numeric values, each property can take the strings <code>'show'</code>, <code>'hide'</code>, and <code>'toggle'</code>. It will be very helpful in a situation when you simply want to animate the property from its current value to the initial value and vice versa.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab9bcd.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code5">

<script>
$(document).ready(function(){
    $("button").click(function(){
        $(".box").animate({
            width: 'toggle'
        });
    });
});
</script>


  </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code5"), {
									mode: "text/html",
									tabMode: "indent",
									styleActiveLine: true,
									lineNumbers: true,
									lineWrapping: true
								});

							</script>
                    </div>
                </div>
				<div class="bottom-link clearfix">
					<a href="jq_sliding-effects.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
					<a href="jq_stop-animations.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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