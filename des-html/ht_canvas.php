
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="How to Draw Graphics on HTML5 Canvas">
	  <meta name="keywords" content="css,css3,How to Draw Graphics on HTML5 Canvas">
	  <meta name="author" content="webschooltoday.com">
    <title>How to Draw Graphics on HTML5 Canvas - WebSchool Today</title>
	<meta name="description" content="HTML5 canvas provides an easy way of drawing graphics on the web pages using JavaScript. This tutorial will give you an overview of how to use the HTML5 canvas element." />
    <?php include "../links.php" ?>
</head>
<body>
<div>
<div class="tital">How to Draw Graphics on HTML5 Canvas</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                   <script type="text/javascript">
	atOptions = {
		'key' : '9049f2d3c3d0cdd985d2d490bad266d3',
		'format' : 'iframe',
		'height' : 50,
		'width' : 320,
		'params' : {}
	};
	document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.displaycontentnetwork.com/9049f2d3c3d0cdd985d2d490bad266d3/invoke.js"></scr' + 'ipt>');
</script> 
</div>
<a href="htl_svg.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

            	<a href="htl_new-input-types.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>HTML5 <span>Canvas</span></h1>
                <p class="summary">In this tutorial you will learn how to draw graphics on a web page using the HTML5 canvas element.</p>
				<h2>What is Canvas?</h2>
				<p>The HTML5 canvas element can be used to draw graphics on the webpage via JavaScript. The canvas was originally introduced by Apple for the Mac OS dashboard widgets and to power graphics in the Safari web browser. Later it was adopted by the Firefox, Google Chrome and Opera. Now the canvas is a part of the new HTML5 specification for next generation web technologies.</p>
                <p class="space">By default the <code>&lt;canvas&gt;</code> element has 300px of width and 150px of height without any border and content. However, custom width and height can be defined using the CSS <a href="../info-css/css-height-property.php"><code>height</code></a> and <a href="../info-css/css-width-property.php"><code>width</code></a> property whereas the border can be applied using the CSS <a href="../info-css/css-border-property.php"><code>border</code></a> property.</p>
				<h2>Understanding Canvas Coordinates</h2>
				<p>The canvas is a two-dimensional rectangular area. The coordinates of the top-left corner of the canvas are (0, 0) which is known as origin, and the coordinates of the bottom-right corner are (<em>canvas width</em>, <em>canvas height</em>). Here's a simple demonstration of canvas default coordinate system.</p>
				<div class="canvas-coordinates-demo">
					<canvas id="myCanvas"></canvas>
                    <br />
                    <strong class="canvas-coordinates">(0,0)</strong>
				</div>
                <!--Tip Box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"  style="background-color:#fad28c"
>
                            <p><strong>Important:</strong> Place your mouse pointer within the canvas area demonstrated above and you will get its current coordinates relative to the canvas. The <code>&lt;canvas&gt;</code> element is supported in all major web browsers such as Chrome, Firefox, Safari, Opera, IE 9 and above.</p>
                        </div>
                    </div>
                </div>
                <!--End:Tip Box-->
				<hr />
				<!--ads-->
				<div>
				    <script async="async" data-cfasync="false" src="//pl15836387.cpmprofitablenetwork.com/a10153215a0b1494db9fb84541764f6b/invoke.js"></script>
<div id="container-a10153215a0b1494db9fb84541764f6b"></div>
				</div>
				<!--ads close-->
				<h2>Drawing Path and Shapes on Canvas</h2>
                <p>In this section we're going to take a closer look at how to draw basic paths and shapes using the newly introduced HTML5 canvas element and JavaScript.</p>
                <p>Here is the base template for drawing paths and shapes onto the 2D HTML5 canvas.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab61ce.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">
                        <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Drawing on Canvas</title>
<script>
    window.onload = function() {
        var canvas = document.getElementById("myCanvas");
        var context = canvas.getContext("2d");
        // draw stuff here
    };
</script>
</head>
<body>
    <canvas id="myCanvas" width="300" height="200"></canvas>
</body>
</html>
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
				<p class="space">All the lines except those from 7 to 11 are pretty straight forward. The anonymous function attached to the <code>window.onload</code> event will execute when the page load. Once the page is loaded, we can access the canvas element with <code>document.getElementById()</code> method. Later we have defined a 2D canvas context by passing 2d into the <code>getContext()</code> method of the canvas object.</p>
				<h2>Drawing a Line</h2>
				<p>The most basic path you can draw on canvas is a straight line. The most essential methods used for this purpose are <code>moveTo()</code>, <code>lineTo()</code> and the <code>stroke()</code>.</p>
				<p>The <code>moveTo()</code> method defines the position of drawing cursor onto the canvas, whereas the <code>lineTo()</code> method used to define the coordinates of the line's end point, and finally the <code>stroke()</code> method is used to make the line visible. Let's try out an example:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab946a.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">
                        <script>
    window.onload = function() {
        var canvas = document.getElementById("myCanvas");
        var context = canvas.getContext("2d");
        context.moveTo(50, 150);
        context.lineTo(250, 50);
        context.stroke();
    };
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
                <!--End:Code box-->
				<hr />
				<h2>Drawing a Arc</h2>
                <p>You can create arcs using the <code>arc()</code> method. The syntax of this method is as follow:</p>
				<div class="shadow break">
					<div class="syntax"><span class="keyword">context.arc</span>(centerX, centerY, radius, startingAngle, endingAngle, counterclockwise);</div>
				</div>
				<p>The JavaScript code in the following example will draw an arc on the canvas.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab317f.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">
                        <script>
    window.onload = function() {
        var canvas = document.getElementById("myCanvas");
        var context = canvas.getContext("2d");
        context.arc(150, 150, 80, 1.2 * Math.PI, 1.8 * Math.PI, false);
        context.stroke();
    };
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
                <!--End:Code box-->
				<hr />
				<h2>Drawing a Rectangle</h2>
                <p>You can create rectangle and square shapes using the <code>rect()</code> method. This method requires four parameters x, y position of the rectangle and its width and height.</p>
                <p>The basic syntax of the <code>rect()</code> method can be given with:</p>
				<div class="shadow break">
					<div class="syntax"><span class="keyword">context.rect</span>(x, y, width, height);</div>
				</div>
				<p>The following JavaScript code will draw a rectangle shape centered on the canvas.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab111f.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">
                        <script>
	window.onload = function() {
        var canvas = document.getElementById("myCanvas");
        var context = canvas.getContext("2d");
        context.rect(50, 50, 200, 100); 
        context.stroke();
    };
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
                <!--End:Code box-->
				<hr />
				<!--ads-->
				<div>
				    <script type="text/javascript">
	atOptions = {
		'key' : '25484e9e29be3f9c30cd9a00ccde11ec',
		'format' : 'iframe',
		'height' : 250,
		'width' : 300,
		'params' : {}
	};
	document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.displaycontentnetwork.com/25484e9e29be3f9c30cd9a00ccde11ec/invoke.js"></scr' + 'ipt>');
</script>
				</div>
				<!--ads close-->
				<h2>Drawing a Circle</h2>
                <p>There is no specific method for creating circle like rectangle's <code>rect()</code> method. However, you can create a fully enclosed arc such as circle using the <code>arc()</code> method.</p>
                <p>The syntax for drawing a complete circle using the <code>arc()</code> method can be given with:</p>
				<div class="shadow break">
					<div class="syntax"><span class="keyword">context.arc</span>(centerX, centerY, radius, 0, 2 * Math.PI, false);</div>
				</div>
				<p>The following example will draw a complete circle centered on the canvas.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab39ed.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">
                        <script>
	window.onload = function() {
        var canvas = document.getElementById("myCanvas");
        var context = canvas.getContext("2d");
        context.arc(150, 100, 70, 0, 2 * Math.PI, false);
        context.stroke();
    };
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
                <!--End:Code box-->
				<hr />
				<h2>Applying Styles and Colors on Stroke</h2>
				<p>The default color of the stroke is black and its thickness is one pixel. But, you can set the color and width of the stoke using the <code>strokeStyle</code> and <code>lineWidth</code> property respectivley.</p>
                <p>The following example will draw an orange color line having 5 pixels width.</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab78fb.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code6">
                        <script>
	window.onload = function() {
        var canvas = document.getElementById("myCanvas");
        var context = canvas.getContext("2d");
        context.lineWidth = 5;
        context.strokeStyle = "orange";
        context.moveTo(50, 150);
        context.lineTo(250, 50);
        context.stroke();
    };
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
                <!--End:Code box-->				
				<p>You can also set the cap style for the lines using the <code>lineCap</code> property. There are three styles available for the line caps &mdash; butt, round, and square. Here's an example:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab5217.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code7">
                        <script>
	window.onload = function() {
        var canvas = document.getElementById("myCanvas");
        var context = canvas.getContext("2d");
        context.lineWidth = 10;
        context.strokeStyle = "orange";
        context.lineCap = "round";
        context.arc(150, 150, 80, 1.2 * Math.PI, 1.8 * Math.PI, false);
        context.stroke();
    };
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
                <!--End:Code box-->	
				<hr />
				<h2>Filling Colors inside Canvas Shapes</h2>
                <p>You can also fill color inside the canvas shapes using the <code>fillStyle()</code> method.</p>
                <p>The following example will show you how to fill a solid color inside a rectangle shape.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabb90a.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code8">
                        <script>
	window.onload = function() {
        var canvas = document.getElementById("myCanvas");
        var context = canvas.getContext("2d");
        context.rect(50, 50, 200, 100); 
        context.fillStyle = "#FB8B89";
        context.fill();
        context.lineWidth = 5;
        context.strokeStyle = "black";
        context.stroke();
    };
</script>
     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code8"), {
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
				<!--Tip Box-->
				<div class="color-box break">
					<div class="shadow">
						<div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
						<div class="tip-box"  style="background-color:#fad28c"
>
							<p><strong>Important:</strong> While styling the shapes on canvas, it is recommended to use the <code>fill()</code> method before the <code>stroke()</code> method in order to render the stroke correctly.</p>
						</div>
					</div>
				</div>
				<!--End:Tip Box-->
				<p>Similarly, you can use the <code>fillStyle()</code> method to fill solid color inside a circle too.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab5d68.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code9">
                        <script>
	window.onload = function() {
        var canvas = document.getElementById("myCanvas");
        var context = canvas.getContext("2d");
        context.arc(150, 100, 70, 0, 2 * Math.PI, false);
        context.fillStyle = "#FB8B89";
        context.fill();
        context.lineWidth = 5;
        context.strokeStyle = "black";
        context.stroke();
    };
</script>
     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code9"), {
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
				<h2>Filling Gradient Colors inside Canvas Shapes</h2>
                <p>You can also fill gradient color inside the canvas shapes. A gradient is just a smooth visual transition from one color to another. There are two types of gradient available &mdash; <em>linear</em> and <em>radial</em>.</p>
				<p>The basic syntax for creating a linear gradient can be given with:</p>
				<div class="shadow break">
					<div class="syntax">var <span class="keyword">grd</span> = <span class="keyword">context.createLinearGradient</span>(startX, startY, endX, endY);</div>
				</div>
                <p>The following example uses the <code>createLinearGradient()</code> method to fill a linear gradient color inside a rectangle. Let's try it out to understand how it basically works:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabf8be.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code10">
                        <script>
	window.onload = function() {
        var canvas = document.getElementById("myCanvas");
        var context = canvas.getContext("2d");
        context.rect(50, 50, 200, 100); 
        var grd = context.createLinearGradient(0, 0, canvas.width, canvas.height);
        grd.addColorStop(0, '#8ED6FF');   
        grd.addColorStop(1, '#004CB3');
        context.fillStyle = grd;
        context.fill();
        context.stroke();
    };
</script>
     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code10"), {
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
				<p>Similarly, you can fill canvas shapes with radial gradient using the <code>createRadialGradient()</code> method. The basic syntax for creating a radial gradient can be given with:</p>
				<div class="shadow">
					<div class="syntax">var <span class="keyword">grd</span> = <span class="keyword">context.createRadialGradient</span>(startX, startY, startRadius, endX, endY, endRadius);</div>
				</div>
				<p>The following example uses the <code>createRadialGradient()</code> method to fill a radial gradient color inside a circle. Let's try it out to understand how it actually works:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab42bb.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code11">
                        <script>
	window.onload = function() {
        var canvas = document.getElementById("myCanvas");
        var context = canvas.getContext("2d");
        context.arc(150, 100, 70, 0, 2 * Math.PI, false);
        var grd = context.createRadialGradient(150, 100, 10, 160, 110, 100);
        grd.addColorStop(0, '#8ED6FF');   
        grd.addColorStop(1, '#004CB3');
        context.fillStyle = grd;
        context.fill();
        context.stroke();
    };
</script>
     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code11"), {
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
				<h2>Drawing Text on Canvas</h2>
				<p>You can also draw text onto canvas. These texts can contain any Unicode characters. The following example will draw a simple greeting message "Hello World!" onto a canvas.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab1869.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code12">
                        <script>
	window.onload = function() {
        var canvas = document.getElementById("myCanvas");
        var context = canvas.getContext("2d");
        context.font = "bold 32px Arial";
        context.fillText("Hello World!", 50, 100);
    };
</script>
     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code12"), {
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
				<p>You can additionally set the color and alignment of the text on the canvas, like this:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabb582.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code13">
                        <script>
	window.onload = function() {
        var canvas = document.getElementById("myCanvas");
        var context = canvas.getContext("2d");
        context.font = "bold 32px Arial";
        context.textAlign = "center";
        context.textBaseline = "middle";
        context.fillStyle = "orange";
        context.fillText("Hello World!", 150, 100);
    };
</script>
     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code13"), {
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
				<p>You can also apply stroke on text using the <code>strokeText()</code> method. This method will color the perimeter of the text instead of filling it. However if you want to set both the fill and stroke on canvas text you can use both the <code>fillText()</code> and the <code>strokeText()</code> methods together.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab9512.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code14">
                        <script>
	window.onload = function() {
        var canvas = document.getElementById("myCanvas");
        var context = canvas.getContext("2d");
        context.font = "bold 32px Arial";
        context.textAlign = "center";
        context.textBaseline = "middle";
        context.strokeStyle = "orange";
        context.strokeText("Hello World!", 150, 100);
    };
</script>
     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code14"), {
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
				<!--Tip Box-->
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
						<div class="tip-box"  style="background-color:#fad28c"
>
							<p><strong>Important:</strong> While styling the text on canvas, it is recommended to use the <code>fillText()</code> method before the <code>strokeText()</code> method in order to render the stroke correctly.</p>
						</div>
					</div>
				</div>
				<!--End:Tip Box-->
				<!--Bottom Navigation-->
                <div class="bottom-link clearfix">
                    <a href="htl_new-input-types.php" class="previous-page-bottom"><i class="fa fa-arrow-right" aria-hidden="true"></i> Previous</a>
                    <a href="htl_svg.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
 Page</a>
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