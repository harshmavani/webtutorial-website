<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="jQuery Sliding Effects">
	  <meta name="keywords" content="jquery,jq,js,jQuery Sliding Effects">
	  <meta name="author" content="webschooltoday.com">
    <title>jQuery Sliding Effects - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">jQuery Sliding Effects</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_jquery.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="jq_animation-effects.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="jq_fading-effects.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
				<h1>jQuery <span>Sliding</span> Effects</h1>
				<p class="summary">In this tutorial you will learn how to create slide motion effect using jQuery.</p>
				<h2>jQuery <code>slideUp()</code> and <code>slideDown()</code> Methods</h2>
				<p>The jQuery <code>slideUp()</code> and <code>slideDown()</code> methods is used to hide or show the HTML elements by gradually decreasing or increasing their height (i.e. by sliding them up or down).</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab256e.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<script>
$(document).ready(function(){
    // Slide up displayed paragraphs
    $(".up-btn").click(function(){
        $("p").slideUp();
    });
    
    // Slide down hidden paragraphs
    $(".down-btn").click(function(){
        $("p").slideDown();
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
				<p>Like other jQuery effects methods, you can optionally specify the duration or speed parameter for the <code>slideUp()</code> and <code>slideDown()</code> methods to control how long the slide animation will run. Durations can be specified either using one of the predefined string <code>'slow'</code> or <code>'fast'</code>, or in a number of milliseconds; higher values indicate slower animations.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab4ed8.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

<script>
$(document).ready(function(){
    // Sliding up displayed paragraphs with different speeds
    $(".up-btn").click(function(){
        $("p.normal").slideUp();
        $("p.fast").slideUp("fast");
        $("p.slow").slideUp("slow");
        $("p.very-fast").slideUp(50);
        $("p.very-slow").slideUp(2000);
    });
    
    // Sliding down hidden paragraphs with different speeds
    $(".down-btn").click(function(){
        $("p.normal").slideDown();
        $("p.fast").slideDown("fast");
        $("p.slow").slideDown("slow");
        $("p.very-fast").slideDown(50);
        $("p.very-slow").slideDown(2000);
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
				<p>You can also specify a <a href="jq_callback.php">callback function</a> to be executed after the <code>slideUp()</code> or <code>slideDown()</code> method completes. We'll learn more about the callback function in upcoming chapters.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabe180.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

<script>
$(document).ready(function(){
    // Display alert message after sliding up paragraphs
    $(".up-btn").click(function(){
        $("p").slideUp("slow", function(){
            // Code to be executed
            alert("The slide-up effect is completed.");
        });
    });
    
    // Display alert message after sliding down paragraphs
    $(".down-btn").click(function(){
        $("p").slideDown("slow", function(){
            // Code to be executed
            alert("The slide-down effect is completed.");
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
				<h2>jQuery <code>slideToggle()</code> Method</h2>
				<p>The jQuery <code>slideToggle()</code> method show or hide the selected elements by animating their height in such a way that if the element is initially displayed, it will be slide up; if hidden, it will be slide down i.e. toggles between the <code>slideUp()</code> and <code>slideDown()</code>  methods.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabdf19.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

<script>
$(document).ready(function(){
    // Toggles paragraphs display with sliding
    $(".toggle-btn").click(function(){
        $("p").slideToggle();
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
				<p>Similarly, you can specify the duration parameter for the <code>slideToggle()</code> method like <code>slideUp()</code> and <code>slideDown()</code> methods to control the speed of the slide toggle animation.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab24af.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

<script>
$(document).ready(function(){
    // Slide Toggles paragraphs with different speeds
    $(".toggle-btn").click(function(){
        $("p.normal").slideToggle();
        $("p.fast").slideToggle("fast");
        $("p.slow").slideToggle("slow");
        $("p.very-fast").slideToggle(50);
        $("p.very-slow").slideToggle(2000);
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
				<p>Similarly, you can also specify a <a href="jq_callback.php">callback function</a> for the <code>slideToggle()</code> method.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab4cc7.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code6">

<script>
$(document).ready(function(){
    // Display alert message after slide toggling paragraphs
    $(".toggle-btn").click(function(){
        $("p").slideToggle(1000, function(){
            // Code to be executed
            alert("The slide-toggle effect is completed.");
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
					<a href="jq_fading-effects.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
					<a href="jq_animation-effects.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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