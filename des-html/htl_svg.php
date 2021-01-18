
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="Difference Between HTML5 Canvas and SVG Element">
	  <meta name="keywords" content="css,css3,Difference Between HTML5 Canvas and SVG Element">
	  <meta name="author" content="webschooltoday.com">
    <title>Difference Between HTML5 Canvas and SVG Element - WebSchool Today</title>
	<meta name="description" content="In this tutorial you will learn how to use HTML5 SVG element to draw vector based graphics on the web pages as well as how SVG is different from Canvas." />
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">Difference Between HTML5 Canvas and SVG Element</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="htl_audio.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

            	<a href="htl_canvas.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>HTML5 <span>SVG</span></h1>
                <p class="summary">In this tutorial you will learn how to use HTML5 svg element to draw vector graphics on a web page.</p>
				<h2>What is SVG?</h2>
				<p>The Scalable Vector Graphics (SVG) is an XML-based image format that is used to define two-dimensional vector based graphics for the web. Unlike raster image (e.g. <code>.jpg</code>, <code>.gif</code>, <code>.png</code>, etc.), a vector image can be scaled up or down to any extent without losing the image quality.</p>
				<p>An SVG image is drawn out using a series of statements that follow the XML schema &mdash; that means SVG images can be created and edited with any text editor, such as Notepad. There are several other advantages of using SVG over other image formats like JPEG, GIF, PNG, etc.</p>
				<ul>
					<li>SVG images can be searched, indexed, scripted, and compressed.</li>
					<li>SVG images can be created and modified using JavaScript in real time.</li>
					<li>SVG images can be printed with high quality at any resolution.</li>
					<li>SVG content can be animated using the built-in animation elements.</li>
					<li>SVG images can contain <a href="ht_links.php">hyperlinks</a> to other documents.</li>
				</ul>
				<!--Tip Box-->
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
						<div class="tip-box"  style="background-color:#fad28c"
>
							<p><strong>Important:</strong> The vector images are composed of a fixed set of shapes defined by math, while the bitmap or raster images are composed of a fixed set of dots called pixels.</p>
						</div>
					</div>
				</div>
				<!--End:Tip Box-->
				<hr />
				<h2>Embedding SVG into HTML Pages</h2>
                <p>You can embed SVG graphics directly into your document using the HTML5 <code>&lt;svg&gt;</code> element.</p>
                <p>Let's take a look at the following example to understand how it basically works:</p>
                <p></p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab7694.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

						<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Embedding SVG in HTML</title>
</head>
<body>
    <svg width="300" height="200">
        <text x="10" y="20" style="font-size:14px;">
            Your browser support SVG.
        </text>
        Sorry, your browser does not support SVG.
    </svg>
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
				<!--Note box-->
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585">
							<p><strong>Read Carefully:</strong> All the major modern web browsers like Chrome, Firefox, Safari, and Opera, as well as Internet Explorer 9 and above support inline SVG rendering.</p>
						</div>
					</div>
				</div>
				<!--End:Note box-->
				<hr />
				<h2>Drawing Path and Shapes with SVG</h2>
				<p class="space">The following section will explain you how to draw basic vector-based paths and shapes on the web pages using the newly introduced HTML5 <code>&lt;svg&gt;</code> element.</p>
				<h2>Drawing a Line</h2>
				<p>The most basic path you can draw with SVG is a straight line. The following example will show you how to create a straight line using the SVG <code>&lt;line&gt;</code> element:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabbd5c.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

						<svg width="300" height="200">
    <line x1="50" y1="50" x2="250" y2="150" style="stroke:red; stroke-width:3;" />
</svg>
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
				<p>The attributes <code>x1</code>, <code>x2</code>, <code>y1</code> and <code>y2</code> of the <code>&lt;line&gt;</code> element draw a line from <code>(x1,y1)</code>&thinsp;to&thinsp;<code>(x2,y2)</code>.</p>
				<hr />
				<h2>Drawing a Rectangle</h2>
				<p>You can create simple rectangle and square shapes using the SVG <code>&lt;rect&gt;</code> element. The following example will show you how to create and style a rectangular shape with SVG:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabcb51.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

						<svg width="300" height="200">
    <rect x="50" y="50" width="200" height="100" style="fill:orange; stroke:black; stroke-width:3;" />
</svg>
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
				<p>The attributes <code>x</code> and <code>y</code> of <code>&lt;rect&gt;</code> element defines the co-ordinates of the top-left corner of the rectangle. The attributes <code>width</code> and <code>height</code> specifies the width and height of the shape.</p>
				<hr />
				<h2>Drawing a Circle</h2>
				<p>You can also create the circle shapes using the SVG <code>&lt;circle&gt;</code> element. The following example will show you how to create and style a circular shape with SVG:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab2dfd.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code4">

						<svg width="300" height="200">
    <circle cx="150" cy="100" r="70" style="fill:lime; stroke:black; stroke-width:3;" />
</svg>
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
				<p>The attributes <code>cx</code> and <code>cy</code> of the <code>&lt;circle&gt;</code> element defines the co-ordinates of the center of the circle and the attribute <code>r</code> specifies the radius of the circle. However, if the attributes <code>cx</code> and <code>cy</code> are omitted or not specified, the center of the circle is set to <code>(0,0)</code>.</p>
				<hr />
				<h2>Drawing Text with SVG</h2>
				<p>You can also draw text on the web pages with SVG. The text in SVG is rendered as a graphic so you can apply all the graphic transformation to it but it is still acts like text &mdash; that means it can be selected and copied as text by the user. Let's try an example to see how this works:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabde4d.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code5">

						<svg width="300" height="200">
    <text x="20" y="30" style="fill:purple; font-size:22px;">
        Welcome to Our Website!
    </text>
    <text x="20" y="30" dx="0" dy="20" style="fill:navy; font-size:14px;">
        Here you will find lots of useful information.
    </text>
</svg>
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
				<p>The attributes <code>x</code> and <code>y</code> of the <code>&lt;text&gt;</code> element defines the location of the top-left corner in absolute terms whereas the attributes <code>dx</code> and <code>dy</code> specifies the relative location.</p>
				<p>You can even use the <code>&lt;tspan&gt;</code> element to reformat or reposition the span of text contained within a <code>&lt;text&gt;</code> element. Text contained in separate tspans, but inside the same text element can all be selected at once &mdash; when you click and drag to select the text. However, the text in separate text elements cannot be selected at the same time. Let's check out an example:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabbb4a.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code6">

						<svg width="300" height="200">
    <text x="30" y="15" style="fill:purple; font-size:22px; transform:rotate(30deg);">
        <tspan style="fill:purple; font-size:22px;">
            Welcome to Our Website!
        </tspan>
        <tspan dx="-230" dy="20" style="fill:navy; font-size:14px;">
            Here you will find lots of useful information.
        </tspan>
    </text>
</svg>
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
				<hr />
				<h2>Differences between SVG and Canvas</h2>
                <p>The HTML5 introduced the two new graphical elements <code>&lt;canvas&gt;</code> and <code>&lt;svg&gt;</code> for creating rich graphics on the web, but they are fundamentally different.</p>
                <p>The following table summarizes some of the basic differences between these two elements, which will help you to understand how to use these elements effectively and appropriately.</p>
				<div class="shadow">
					<table class="data">
						<thead>
							<tr>
								<th>SVG</th>
								<th>Canvas</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Vector based (composed of shapes)</td>
								<td>Raster based (composed of pixel)</td>
							</tr>
							<tr>
								<td>Multiple graphical elements, which become the part of the page's DOM tree</td>
								<td>Single element similar to <a href="../info-html/ht_img-tag.php"><code>&lt;img&gt;</code></a> in behavior. Canvas diagram can be saved to PNG or JPG format</td>
							</tr>
							<tr>
								<td>Modified through script and CSS</td>
								<td>Modified through script only</td>
							</tr>
							<tr>
								<td>Good text rendering capabilities</td>
								<td>Poor text rendering capabilities</td>
							</tr>
							<tr>
								<td>Give better performance with smaller number of objects or larger surface, or both</td>
								<td>Give better performance with larger number of objects or smaller surface, or both</td>
							</tr>
							<tr>
								<td>Better scalability. Can be printed with high quality at any resolution. Pixelation does not occur</td>
								<td>Poor scalability. Not suitable for printing on higher resolution. Pixelation may occur</td>
							</tr>
						</tbody>
					</table>
				</div>
				<!--Bottom Navigation-->
                <div class="bottom-link clearfix">
                    <a href="htl_canvas.php" class="previous-page-bottom"><i class="fa fa-arrow-right" aria-hidden="true"></i> Previous</a>
                    <a href="htl_audio.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
 <i class="fa fa-arrow-right" aria-hidden="true"></i>
 Page</a>                </div>
            </div>
        </div>        
        <div class="sidebar">
            
        </div>
    </div> 
</div>
	<?php include "../footer.php" ?>

</body>
</html>