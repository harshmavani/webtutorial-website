<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="jQuery Show and Hide Effects">
	  <meta name="keywords" content="jquery,jq,js,jQuery Show and Hide Effects">
	  <meta name="author" content="webschooltoday.com">
    <title>jQuery Show and Hide Effects - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">jQuery Show and Hide Effects</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_jquery.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="jq_fading-effects.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="jq_events.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
				<h1>jQuery <span>Show</span> and <span>Hide</span> Effects</h1>
				<p class="summary">In this tutorial you will learn how to show hide HTML elements using jQuery.</p>
				<h2>jQuery <code>show()</code> and <code>hide()</code> Methods</h2>
				<p>You can show and hide HTML elements using the jQuery <code>show()</code> and <code>hide()</code> methods.</p>
				<p>The <code>hide()</code> method simply sets the <a href="../des-html/html-styles.php#inline-styles">inline style</a> <code>display:&thinsp;none</code> for the selected elements. Conversely, the <code>show()</code> method restores the <a href="../des-css/css-display.php">display properties</a> of the matched set of elements to whatever they initially were&mdash;typically block, inline, or inline-block&mdash;before the inline style <code>display:&thinsp;none</code> was applied to them. Here's is an example.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab4fcc.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<script>
$(document).ready(function(){
    // Hide displayed paragraphs
    $(".hide-btn").click(function(){
        $("p").hide();
    });
    
    // Show hidden paragraphs
    $(".show-btn").click(function(){
        $("p").show();
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
				<p>You can optionally specify the duration (also referred as speed) parameter for making the jQuery show hide effect animated over a specified period of time.</p>
				<p>Durations can be specified either using one of the predefined string <code>'slow'</code> or <code>'fast'</code>, or in a number of milliseconds, for greater precision; higher values indicate slower animations.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab8ac6.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

<script>
$(document).ready(function(){
    // Hide displayed paragraphs with different speeds
    $(".hide-btn").click(function(){
        $("p.normal").hide();
        $("p.fast").hide("fast");
        $("p.slow").hide("slow");
        $("p.very-fast").hide(50);
        $("p.very-slow").hide(2000);
    });
    
    // Show hidden paragraphs with different speeds
    $(".show-btn").click(function(){
        $("p.normal").show();
        $("p.fast").show("fast");
        $("p.slow").show("slow");
        $("p.very-fast").show(50);
        $("p.very-slow").show(2000);
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
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585"
>
							<p><strong>Read Carefully:</strong> The speed or duration string <code>'fast'</code> indicates the durations of 200 milliseconds, while the string <code>'slow'</code> indicates the durations of 600 milliseconds.</p>
						</div>
					</div>
				</div>
				<p>You can also specify a <a href="jq_callback.php">callback function</a> to be executed after the <code>show()</code> or <code>hide()</code> method completes. We'll learn more about the callback function in upcoming chapters.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab38be.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

<script>
$(document).ready(function(){
    // Display alert message after hiding paragraphs
    $(".hide-btn").click(function(){
        $("p").hide("slow", function(){
            // Code to be executed
            alert("The hide effect is completed.");
        });
    });
    
    // Display alert message after showing paragraphs
    $(".show-btn").click(function(){
        $("p").show("slow", function(){
            // Code to be executed
            alert("The show effect is completed.");
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
				<h2>jQuery <code>toggle()</code> Method</h2>
				<p>The jQuery <code>toggle()</code> method show or hide the elements in such a way that if the element is initially displayed, it will be hidden; if hidden, it will be displayed (i.e. toggles the visibility).</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabed7c.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

<script>
$(document).ready(function(){
    // Toggles paragraphs display
    $(".toggle-btn").click(function(){
        $("p").toggle();
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
				<p>Similarly, you can specify the duration parameter for the <code>toggle()</code> method to make it animated like the <code>show()</code> and <code>hide()</code> methods.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab9b9e.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

<script>
$(document).ready(function(){
    // Toggles paragraphs with different speeds
    $(".toggle-btn").click(function(){
        $("p.normal").toggle();
        $("p.fast").toggle("fast");
        $("p.slow").toggle("slow");
        $("p.very-fast").toggle(50);
        $("p.very-slow").toggle(2000);
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
				<p>Similarly, you can also specify a <a href="jq_callback.php">callback function</a> for the <code>toggle()</code> method.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab3a1d.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code6">

<script>
$(document).ready(function(){
    // Display alert message after toggling paragraphs
    $(".toggle-btn").click(function(){
        $("p").toggle(1000, function(){
            // Code to be executed
            alert("The toggle effect is completed.");
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
				<div class="bottom-link clearfix">
					<a href="jq_events.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
					<a href="jq_fading-effects.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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