<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="jQuery Get and Set Element's Width and Height">
	  <meta name="keywords" content="jquery,jq,js,jQuery Get and Set Element's Width and Height">
	  <meta name="author" content="webschooltoday.com">
    <title>jQuery Get and Set Element's Width and Height - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">jQuery Get and Set Element's Width and Height</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_jquery.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="jq_traversing.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="jq_get-and-set-css-properties.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
				<h1>jQuery <span>Dimensions</span></h1>
				<p class="summary">In this tutorial you will learn how to get or set dimensions of an element's box such as width and height using jQuery.</p>
				<h2>Understanding the jQuery Dimensions</h2>
				<p>jQuery provides several methods, such as <code>height()</code>, <code>innerHeight()</code>, <code>outerHeight()</code>, <code>width()</code>, <code>innerWidth()</code> and <code>outerWidth()</code> to get and set the CSS dimensions for the elements. Check out the following illustration to understand how these methods are calculating the dimensions of an element's box.</p>
				<div class="box-model">
					<img src="../assets/images/jquerydim.jpg" alt="jQuery Dimensions">
				</div>
				<hr />
				<h2>jQuery <code>width()</code> and <code>height()</code> Methods</h2>
				<p>The jQuery <code>width()</code> and <code>height()</code> methods get or set the <a href="../info-css/css-width-property.php"><code>width</code></a> and the <a href="../info-css/css-height-property.php"><code>height</code></a> of the element respectively. This width and height doesn't include <a href="../info-css/css-padding-property.php"><code>padding</code></a>, <a href="../info-css/css-border-property.php"><code>border</code></a> and <a href="../info-css/css-margin-property.php"><code>margin</code></a> on the element. The following example will return the width and height of a <a href="../info-html/html-div-tag.php"><code>&lt;div&gt;</code></a> element.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab008b.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<script>
$(document).ready(function(){
    $("button").click(function(){
        var divWidth = $("#box").width();
        var divHeight = $("#box").height();
        $("#result").php("Width: " + divWidth + ", " + "Height: " + divHeight);
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
				<p>Similarly, you can set the width and height of the element by including the value as a parameter within the <code>width()</code> and <code>height()</code> method. The value can be either a string (number and unit e.g. 100px, 20em, etc.) or a number. The following example will set the width of a <code>&lt;div&gt;</code> element to 400 pixels and height to 300 pixels respectively.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabef84.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

<script>
$(document).ready(function(){
    $("button").click(function(){
        $("#box").width(400).height(300);
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
							<p><strong>Read Carefully:</strong> Use the jQuery <code>width()</code> or <code>height()</code> method if you want to use an element's width or height in a mathematical calculation, since it returns the <a href="../info-css/css-width-property.php"><code>width</code></a> and <a href="../info-css/css-height-property.php"><code>height</code></a> property value as a unit-less pixel value (e.g. 400). Whereas, the <code>css("width")</code> or <code>css("height")</code> methods returns value with units (e.g. 400px).</p>
						</div>
					</div>
				</div>
				<hr />
				<h2>jQuery <code>innerWidth()</code> and <code>innerHeight()</code> Methods</h2>
				<p>The jQuery <code>innerWidth()</code> and <code>innerHeight()</code> methods get or set the <em>inner width</em> and the <em>inner height</em> of the element respectively. This inner width and height includes the <code>padding</code> but excludes <code>border</code> and <code>margin</code> on the element. The following example will return the inner width and height of a <code>&lt;div&gt;</code> element on the click of a button.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab61b6.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

<script>
$(document).ready(function(){
    $("button").click(function(){
        var divWidth = $("#box").innerWidth();
        var divHeight = $("#box").innerHeight();
        $("#result").php("Inner Width: " + divWidth + ", " + "Inner Height: " + divHeight);
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
				<p>Similarly, you can set the element's inner width and height by passing the value as a parameter to the <code>innerWidth()</code> and <code>innerHeight()</code> method. These methods only alter the width or height of the element's content area to match the specified value.</p>
				<p>For example, if the current width of the element is 300 pixels and the sum of the left and right padding is equal to 50 pixels than the new width of the element after setting the inner width to 400 pixels is 350 pixels i.e. <code>New Width = Inner Width - Horizontal Padding</code>. Similarly, you can estimate the change in height while setting the inner height.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab727d.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

<script>
$(document).ready(function(){
    $("button").click(function(){
        $("#box").innerWidth(400).innerHeight(300);
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
				<h2>jQuery <code>outerWidth()</code> and <code>outerHeight()</code> Methods</h2>
				<p>The jQuery <code>outerWidth()</code> and <code>outerHeight()</code> methods get or set the <em>outer width</em> and the <em>outer height</em> of the element respectively. This outer width and height includes <code>padding</code> and <code>border</code> but excludes the <code>margin</code> on the element. The following example will return the outer width and height of a <code>&lt;div&gt;</code> element on the click of a button.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab9746.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

<script>
$(document).ready(function(){
    $("button").click(function(){
        var divWidth = $("#box").outerWidth();
        var divHeight = $("#box").outerHeight();
        $("#result").php("Outer Width: " + divWidth + ", " + "Outer Height: " + divHeight);
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
				<p>You can also get the outer width and height that includes <code>padding</code> and <code>border</code> as well as the <code>margin</code> of the element. For that just specify the <code>true</code> parameter for the outer width methods, like <code>outerWidth(true)</code> and <code>outerHeight(true)</code>.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabd8fe.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code6">

<script>
$(document).ready(function(){
    $("button").click(function(){
        var divWidth = $("#box").outerWidth(true);
        var divHeight = $("#box").outerHeight(true);
        $("#result").php("Outer Width: " + divWidth + ", " + "Outer Height: " + divHeight);
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
				<p>Similarly, you can set the element's outer width and height by passing the value as a parameter to the <code>outerWidth()</code> and <code>outerHeight()</code> methods. These methods only alter the width or height of the element's content area to match the specified value, like the <code>innerWidth()</code> and <code>innerHeight()</code> methods.</p>
				<p>For example, if the current width of the element is 300 pixels, and the sum of the left and right padding is equal to 50 pixels, and the sum of the width of the left and right border is 20 pixels than the new width of the element after setting the outer width to 400 pixels is 330 pixels i.e. <code>New Width = Outer Width - (Horizontal Padding + Horizontal Border)</code>. Similarly, you can estimate the change in height while setting the outer height.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabccf3.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code7">

<script>
$(document).ready(function(){
    $("button").click(function(){
        $("#box").outerWidth(400).outerHeight(300);
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
					<a href="jq_get-and-set-css-properties.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
					<a href="jq_traversing.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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