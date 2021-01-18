<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="jQuery Stop Animations and Effects">
	  <meta name="keywords" content="jquery,jq,js,jQuery Stop Animations and Effects">
	  <meta name="author" content="webschooltoday.com">
    <title>jQuery Stop Animations and Effects - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">jQuery Stop Animations and Effects</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_jquery.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="jq_chaining.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="jq_animation-effects.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
				<h1>jQuery <span>Stop</span> Animations</h1>
				<p class="summary">In this tutorial you will learn how to stop running animations using jQuery.</p>
				<h2>jQuery <code>stop()</code> Method</h2>
				<p>The jQuery <code>stop()</code> method is used to stop the jQuery animations or effects currently running on the selected elements before it completes.</p>
				<p>The basic syntax of the jQuery <code>stop()</code> method can be given with:</p>
				<div class="shadow">
					<div class="syntax">$(selector).stop(stopAll, goToEnd);</div>
				</div>
				<p>The parameters in the above syntax have the following meanings:</p>
				<ul>
					<li>The optional <i>stopAll</i> Boolean parameter specifies whether to remove queued animation or not. Default value is <code>false</code>, that means only the current animation will be stopped, rest of the animations in the queue will run afterwards.</li>
					<li>The optional <i>goToEnd</i> Boolean parameter specifies whether to complete the current animation immediately. Default value is <code>false</code>.</li>
				</ul>
				<p>Here's a simple example that demonstrates the jQuery <code>stop()</code> method in real action in which you can start and stop the animation on click of the button.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab2ed3.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<script>
$(document).ready(function(){
    // Start animation
    $(".start-btn").click(function(){
      $("img").animate({left: "+=150px"}, 2000);
    });
 
    // Stop running animation
    $(".stop-btn").click(function(){
      $("img").stop();
    });
    
    // Start animation in the opposite direction
    $(".back-btn").click(function(){
      $("img").animate({left: "-=150px"}, 2000);
    });
 
    // Reset to default
    $(".reset-btn").click(function(){
      $("img").animate({left: "0"}, "fast");
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
				<div class="color-box berak">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585"
>
							<p><strong>Read Carefully:</strong> The jQuery <code>stop()</code> method works for all jQuery effects such as <a href="jq_fading-effects.php">fading</a>, <a href="jq_sliding-effects.php">sliding</a>, <a href="jq_show-and-hide-effects.php">animated show and hide</a> effects as well as <a href="jq_animation-effects.php">custom animations</a>.</p>
						</div>
					</div>
				</div>
				<p>Here's one more example of this method in which, if you click the "Slide Toggle" button again after starting the animation but before it is completed, the animation will begin in the opposite direction immediately from the saved starting point.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab185b.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

<script>
$(document).ready(function(){
    // Kill and toggle the current sliding animation
    $(".toggle-btn").on("click", function(){
        $(".box").stop().slideToggle(1000);
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
				<hr />
				<h2>Creating Smooth Hover Effect</h2>
				<p>While creating the animated hover effect one of the common problem you may face is multiple queued animations, when you place and remove the mouse cursor rapidly. Because, in this situation <a href="jq_events.php"><code>mouseenter</code></a> or <a href="jq_events.php"><code>mouseleave</code></a> events are triggered quickly before the animation complete. To avoid this problem and create a nice and smooth hover effect you can add the <code>stop(true, true)</code> to the method chain, like this:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab5a50.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

<script>
$(document).ready(function(){
    $(".box").hover(function(){
        $(this).find("img").stop(true, true).fadeOut();
    }, function(){
        $(this).find("img").stop(true, true).fadeIn();
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
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585"
>
							<p><strong>Read Carefully:</strong> The jQuery method <code>stop(true, true)</code> clears all the queued animations and jumps the current animation to the final value.</p>
						</div>
					</div>
				</div>
				<div class="bottom-link clearfix">
					<a href="jq_animation-effects.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
					<a href="jq_chaining.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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