<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="jQuery Method Chaining">
	  <meta name="keywords" content="jquery,jq,js,jQuery Method Chaining">
	  <meta name="author" content="webschooltoday.com">
    <title>jQuery Method Chaining - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">jQuery Method Chaining</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_jquery.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="jq_callback.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="jq_stop-animations.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
				<h1>jQuery <span>Chaining</span></h1>
				<p class="summary">In this tutorial you will learn how chain multiple methods in jQuery.</p>
				<h2>jQuery Method Chaining</h2>
				<p>The jQuery provides another robust feature called method chaining that allows us to perform multiple action on the same set of elements, all within a single line of code.</p>
				<p>This is possible because most of the jQuery methods return a jQuery object that can be further used to call another method. Here's an example.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelaba9cf.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

<script>
$(document).ready(function(){
    $("button").click(function(){
        $("p").animate({width: "100%"}).animate({fontSize: "46px"}).animate({borderWidth: 30});
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
				<p>The above example demonstrate the chaining of three <code>animate()</code> method. When a user click the trigger button, it expands the <a href="../info-html/html-p-tag.php"><code>&lt;p&gt;</code></a> to 100% width. Once the <a href="../info-css/css-width-property.php"><code>width</code></a> change is complete the <a href="../info-css/css-font-size-property.php"><code>font-size</code></a> is start animating and after its completion, the <a href="../info-css/css-border-property.php"><code>border</code></a> animation will begin.</p>
				<div class="color-box break">
					<div class="shadow">
						<div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
						<div class="tip-box"   style="background-color:#fad28c">
							<p><strong>Important:</strong> The method chaining not only helps you to keep your jQuery code concise, but it also can improve your script's performance since browser doesn't have to find the same elements multiple times to do something with them.</p>
						</div>
					</div>
				</div>
				<p>You can also break a single line of code into multiple lines for greater readability. For example, the sequence of methods in the above example could also be written as:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab04ac.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

<script>
$(document).ready(function(){
    $("button").click(function(){
        $("p")
            .animate({width: "100%"})
            .animate({fontSize: "46px"})
            .animate({borderWidth: 30});
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
				<p>Some jQuery methods doesn't return the jQuery object. In general, <a href="jq_getter-and-setter.php">setters</a> i.e. methods that assign some value on a selection return a jQuery object, that allows you to continue calling jQuery methods on your selection. Whereas, <a href="jq_getter-and-setter.php">getters</a> return the requested value, so you can't continue to call jQuery methods on the value returned by the getter.</p>
				<p>A typical example of this scenario is the <code>html()</code> method. If no parameters are passed to it, the HTML contents of the selected element is returned instead of a jQuery object.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab1c51.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

<script>
$(document).ready(function(){
    $("button").click(function(){
        // This will work
        $("h1").php("Hello World!").addClass("test");
        
        // This will NOT work
        $("p").php().addClass("test");
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
				<div class="bottom-link clearfix">
					<a href="jq_stop-animations.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
					<a href="jq_callback.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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