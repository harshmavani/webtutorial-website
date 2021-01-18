<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="jQuery Callback Function">
	  <meta name="keywords" content="jquery,jq,js,jQuery Callback Function">
	  <meta name="author" content="webschooltoday.com">
    <title>jQuery Callback Function - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">jQuery Callback Function</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_jquery.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="jq_getter-and-setter.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="jq_chaining.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
				<h1>jQuery <span>Callback</span></h1>
				<p class="summary">In this tutorial you will learn how define a callback function for the jQuery effect.</p>
				<h2>jQuery Callback Functions</h2>
				<p>JavaScript statements are executed line by line. But, since jQuery effect takes some time to finish the next line code may execute while the previous effect is still running. To prevent this from happening jQuery provides a callback function for each effect method.</p>
				<p>A callback function is a function that is executed once the effect is complete. The callback function is passed as an argument to the effect methods and they typically appear as the last argument of the method. For example, the basic syntax of the jQuery <code>slideToggle()</code> effect method with a callback function can be given with:</p>
				<div class="shadow">
					<div class="syntax">$(selector).slideToggle(duration, callback);</div>
				</div>
				<p>Consider the following example in which we've placed the <code>slideToggle()</code> and <code>alert()</code> statements next to each other. If you try this code the alert will be displayed immediately once you click the trigger button without waiting for slide toggle effect to complete.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabb578.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<script>
$(document).ready(function(){
    $("button").click(function(){
        $("p").slideToggle("slow");
        alert("The slide toggle effect has completed.");
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
				<p>And, here's the modified version of the pevious example in which we've placed the <code>alert()</code> statement inside a callback function for the <code>slideToggle()</code> method. If you try this code the alert message will be displayed once the slide toggle effect has completed.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabd2aa.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

<script>
$(document).ready(function(){
    $("button").click(function(){
        $("p").slideToggle("slow", function(){
            // Code to be executed once effect is complete
            alert("The slide toggle effect has completed.");
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
				<p>Similarly, you can define the callback functions for the other jQuery effect methods, like <code>show()</code>, <code>hide()</code>, <code>fadeIn()</code>, <code>fadeOut()</code>, <code>animate()</code>, etc.</p>
				<div class="color-box space">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585"
>
							<p><strong>Read Carefully:</strong> If the effect method is applied to multiple elements, then the callback function is executed once for each selected element, not once for all.</p>
						</div>
					</div>
				</div>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab3d7d.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

<script>
$(document).ready(function(){
    $("button").click(function(){
        $("h1, p").slideToggle("slow", function(){
            // Code to be executed once effect is complete
            alert("The slide toggle effect has completed.");
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
				<p>If you try the above example code, it will display the same alert message two times once per <a href="../info-html/html-headings-tag.php"><code>&lt;h1&gt;</code></a> and <a href="../info-html/html-p-tag.php"><code>&lt;p&gt;</code></a> element, upon clicking the trigger button.</p>
				<div class="bottom-link clearfix">
					<a href="jq_chaining.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
					<a href="jq_getter-and-setter.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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