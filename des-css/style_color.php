<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="keywords" content="css,css3,Setting the Element's">
	  <meta name="author" content="webschooltoday.com">
    <title>Setting the Element's Text Color Using CSS - WebSchool Today</title>
    <meta name="description" content="Setting the Element's Text Color Using CSS" />
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">Setting the Element's Text Color Using CSS</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des-css.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <a href="style_selectors.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                <a href="style_background.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                <h1>CSS <span>Color</span></h1>
                <p class="summary">In this tutorial you will learn the different methods of defining color values in CSS.</p>
                <h2>Setting Color Property</h2>
                <p>The <code>color</code> property defines the text color (foreground color in general) of an element.</p>
                <p>For instance, the <code>color</code> property specified in the <code>body</code> selector defines the default text color for the whole page. Let's try out the following example to see how it works:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab8b47.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

body {
    color: #ff5722;
}

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
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> The <code>color</code> property normally inherits the color value from their parent element, except the case of <a href="../info-html/html-a-tag.php">anchor</a> elements. For example, if you specify <code>color</code> for the <code>body</code> element it will automatically be passed down to the headings, paragraphs, etc.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2 class="section-title"><span>Defining Color Values</span></h2>
                <p>Colors in CSS most often specified in the following formats:</p>
                <ul>
                    <li>a color keyword - like "red", "green", "blue", "transparent", etc.</li>
                    <li>a HEX value - like "#ff0000", "#00ff00", etc.</li>
                    <li>an RGB value - like "rgb(255, 0, 0)"</li>                    
                </ul>
                <p>CSS3 has introduced several other color formats such as HSL, HSLA and RGBA that also support alpha transparency. We'll learn about them in greater detail in <a href="stylel_color.php">CSS3 color</a> chapter.</p>      
                <p>For now, let's stick to the basic methods of defining the color values:</p>
                <h2>Color Keywords</h2>
                <p>CSS defines the few color keywords which lets you specify color values in an easy way.</p>
                <p>These basic color keywords are: aqua, black, blue, fuchsia, gray, green, lime, maroon, navy, olive, purple, red, silver, teal, white, and yellow. The color names are case-insensitive.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabddaa.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

h1 {
    color: red;
}
p {
    color: purple;
}

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
                <p>Modern web browsers however practically support many more color names than what are defined in the CSS standard, but to be on the safer side you should use hex color values instead.</p>
                <p>See the reference on <a href="../info-css/style_color-names.php">CSS color names</a>, for a complete list of possible color names.</p>
                <hr />
                <h2>HEX Color Values</h2>
                <p>Hex (short for Hexadecimal) is by far the most commonly used method of defining color on the web.</p>
                <p>Hex represent colors using a six-digit code, preceded by a hash character, like <code>#rrggbb</code>, in which <code>rr</code>, <code>gg</code>, and <code>bb</code> represents the red, green and blue component of the color respectively.</p>
                <p>The value of each component can vary from 00 (no color) and FF (full color) in hexadecimal notation, or 0 and 255 in decimal equivalent notation. Thus <code>#ffffff</code> represents white color and <code>#000000</code> represents black color. Let's take a look the following example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab8756.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

h1 {
    color: rgb(255, 165, 0);
}
p {
    color: rgb(0, 255, 0);
}

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
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> Hexadecimal or Hex refers to a numbering scheme that uses 16 characters as its base. It uses the numbers 0 through 9 and the letters A, B, C, D, E and F which corresponds to the decimal numbers 10, 11, 12, 13, 14 and 15 respectively.</p>
                        </div>
                    </div>
                </div>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"  style="background-color:#fad28c"
>
                            <p><strong>Important:</strong> If hexadecimal code of a color has value pairs, it can also be written in shorthand notation to avoid extra typing, for example, the hex color value #ffffff can be also be written as #fff, #000000 as #000, #00ff00 as #0f0, #ffcc00 as #fc0, and so on.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>RGB Color Values</h2>
                <p>Colors can be defined in the RGB model (Red, Green, and Blue) using the <code>rgb()</code> functional notation.</p>
                <p>The <code>rgb()</code> function accepts three comma-separated values, which specify the amount of red, green, and blue component of the color. These values are commonly specified as integers between 0 to 255, where 0 represent <em>no color</em> and 255 represent <em>full or maximum color</em>.</p>
                <p>The following example specifies the same color as in the previous example but in RGB notation.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabdfba.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

h1 {
    color: rgb(255, 165, 0);
}
p {
    color: rgb(0, 255, 0);
}

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
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> You can also specify RGB values inside the <code>rgb()</code> function in percentage, where 100% represents full color, and 0% (<em>not simply 0</em>) represents no color. For example, you can specify the red color either as <code>rgb(255, 0, 0)</code> or <code>rgb(100%, 0%, 0%)</code>.</p>
                        </div>
                    </div>
                </div>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"  style="background-color:#fad28c">
                            <p><strong>Important:</strong> If R, G, and B are all set to 255, i.e. <code>rgb(255, 255, 255)</code>, the color would be white. Likewise, if all channels are set to 0, i.e. <code>rgb(0, 0, 0)</code>, the color would be black. Play with the RGB values in the following demonstration to understand how it actually works.</p>
                        </div>
                    </div>
                </div>
				<div id="colorpicker" style="min-height: 240px;display: none;">
                    <div id="result"><span id="rgbCode"></span></div>
                    <div class="clearfix">
                        <div class="slider-rg3-w">
                            <div class="sliders" id="red"></div>
                            <div class="color-value">Red: <span id="numRed"></span></div>
                        </div>
                        <div class="slider-rg3-w">
                            <div class="sliders" id="green"></div>
                            <div class="color-value">Green: <span id="numGreen"></span></div>
                        </div>
                        <div class="slider-rg3-w">
                            <div class="sliders" id="blue"></div> 
                            <div class="color-value">Blue: <span id="numBlue"></span></div>
                        </div>
                    </div>                      
                </div>
                <hr />
                <h2>Affect of Color Property on Borders and Outlines</h2>
                <p>The <code>color</code> property is not just for text content, but for anything in the foreground that takes a color value. For instance, if <a href="../info-css/style_border-color-property.php"><code>border-color</code></a> or <a href="../info-css/style_outline-color-property.php"><code>outline-color</code></a> value hasn't been defined explicitly for the element, the color value will be used instead. Let's check out an example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab1222.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

p.one {
    color: #0000ff;
    border: 2px solid;
}
p.two {
    color: #00ff00;
    outline: 2px solid;
}

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
                <div class="bottom-link clearfix">
                    <a href="style_selectors.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="style_background.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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