<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="jQuery Fading Effects">
	  <meta name="keywords" content="jquery,jq,js,jQuery Fading Effects">
	  <meta name="author" content="webschooltoday.com">
    <title>jQuery Fading Effects - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">jQuery Fading Effects</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_jquery.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="jq_sliding-effects.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="jq_show-and-hide-effects.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
				<h1>jQuery <span>Fading</span> Effects</h1>
				<p class="summary">In this tutorial you will learn how to fade in and out elements using jQuery.</p>
				<h2>jQuery <code>fadeIn()</code> and <code>fadeOut()</code> Methods</h2>
				<p>You can use the jQuery <code>fadeIn()</code> and <code>fadeOut()</code> methods to display or hide the HTML elements by gradually increasing or decreasing their opacity.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab6262.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<script>
$(document).ready(function(){
    // Fading out displayed paragraphs
    $(".out-btn").click(function(){
        $("p").fadeOut();
    });
    
    // Fading in hidden paragraphs
    $(".in-btn").click(function(){
        $("p").fadeIn();
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
				<p>Like other jQuery effects methods, you can optionally specify the duration or speed parameter for the <code>fadeIn()</code> and <code>fadeOut()</code> methods to control how long the fading animation will run. Durations can be specified either using one of the predefined string <code>'slow'</code> or <code>'fast'</code>, or in a number of milliseconds; higher values indicate slower animations.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabb70e.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

<script>
$(document).ready(function(){
    // Fading out displayed paragraphs with different speeds
    $(".out-btn").click(function(){
        $("p.normal").fadeOut();
        $("p.fast").fadeOut("fast");
        $("p.slow").fadeOut("slow");
        $("p.very-fast").fadeOut(50);
        $("p.very-slow").fadeOut(2000);
    });
    
    // Fading in hidden paragraphs with different speeds
    $(".in-btn").click(function(){
        $("p.normal").fadeIn();
        $("p.fast").fadeIn("fast");
        $("p.slow").fadeIn("slow");
        $("p.very-fast").fadeIn(50);
        $("p.very-slow").fadeIn(2000);
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
				<div class="color-box break">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585"
>
							<p><strong>Read Carefully:</strong> The effect of <code>fadeIn()</code>/<code>fadeOut()</code> method looks similar to <code>show()</code>/<code>hide()</code>, but unlike <code>show()</code>/<code>hide()</code> method the <code>fadeIn()</code>/<code>fadeOut()</code> method only animates the opacity of the target elements and does not animates their dimensions.</p>
						</div>
					</div>
				</div>
				<p>You can also specify a <a href="jq_callback.php">callback function</a> to be executed after the <code>fadeIn()</code> or <code>fadeOut()</code> method completes. We'll learn more about the callback function in upcoming chapters.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab4b3a-2.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

<script>
$(document).ready(function(){
    // Display alert message after fading out paragraphs
    $(".out-btn").click(function(){
        $("p").fadeOut("slow", function(){
            // Code to be executed
            alert("The fade-out effect is completed.");
        });
    });
    
    // Display alert message after fading in paragraphs
    $(".in-btn").click(function(){
        $("p").fadeIn("slow", function(){
            // Code to be executed
            alert("The fade-in effect is completed.");
        });
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
				<h2>jQuery <code>fadeToggle()</code> Method</h2>
				<p>The jQuery <code>fadeToggle()</code> method display or hide the selected elements by animating their opacity in such a way that if the element is initially displayed, it will be fade out; if hidden, it will be fade in (i.e. toggles the fading effect).</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabf379.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

<script>
$(document).ready(function(){
    // Toggles paragraphs display with fading
    $(".toggle-btn").click(function(){
        $("p").fadeToggle();
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
				<p>Similarly, you can specify the duration parameter for the <code>fadeToggle()</code> method like <code>fadeIn()</code>/<code>fadeOut()</code> method to control the duration or speed of the fade toggle animation.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabf596.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

<script>
$(document).ready(function(){
    // Fade Toggles paragraphs with different speeds
    $(".toggle-btn").click(function(){
        $("p.normal").fadeToggle();
        $("p.fast").fadeToggle("fast");
        $("p.slow").fadeToggle("slow");
        $("p.very-fast").fadeToggle(50);
        $("p.very-slow").fadeToggle(2000);
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
				<p>Similarly, you can also specify a <a href="jq_callback.php">callback function</a> for the <code>fadeToggle()</code> method.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab7e09.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code6">

<script>
$(document).ready(function(){
    // Display alert message after fade toggling paragraphs
    $(".toggle-btn").click(function(){
        $("p").fadeToggle(1000, function(){
            // Code to be executed
            alert("The fade-toggle effect is completed.");
        });
    });
});
</script>

  </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code6"), {
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
				<h2>jQuery <code>fadeTo()</code> Method</h2>
				<p>The jQuery <code>fadeTo()</code> method is similar to the <code>.fadeIn()</code> method, but unlike <code>.fadeIn()</code> the <code>fadeTo()</code> method lets you fade in the elements to a certain opacity level.</p>
				<div class="shadow">
                    <div class="syntax">$(selector).fadeTo(speed, opacity, callback);</div>
                </div>
				<p>The required opacity parameter specifies the final opacity of the target elements that can be a number between 0 and 1. The duration or speed parameter is also required for this method that specifies the duration of the fade to animation.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabe4a1.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code7">

<script>
$(document).ready(function(){
    // Fade to paragraphs with different opacity
    $(".to-btn").click(function(){
        $("p.none").fadeTo("fast", 0);
        $("p.partial").fadeTo("slow", 0.5);
        $("p.complete").fadeTo(2000, 1);
    });
});
</script>

  </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code7"), {
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
					<a href="jq_show-and-hide-effects.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
					<a href="jq_sliding-effects.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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