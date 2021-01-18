<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS Color Values - Learn How to Define Color Values in CSS">
	  <meta name="keywords" content="css,css3,CSS Color Values - Learn How to Define Color Values in CSS">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS Color Values - Learn How to Define Color Values in CSS</title>
    <meta name="description" content="There are various ways to define color values in CSS ranging from basic color keyword, hex and RGB colors to advance technique like RGBA, HSL and HSLA colors." />
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS Color Values - Learn How to Define Color Values in CSS</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="style_color-names.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

            	<a href="stylel_properties.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>CSS <span>Color</span> Values</h1>
                <p class="summary">There are several ways to define a color values in CSS.</p>            
                <h2>Color keywords</h2>
                <p>Color keywords are case-insensitive identifiers which represent a specific color, e.g. <code>red</code>, <code>green</code>, <code>blue</code>, <code>yellow</code>, <code>black</code>, etc. </p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabc5c0.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

                        h1 {
    color: red;
}
p {
    background-color: yellow;
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
                <!--End:Code box-->
                <div class="color-box break">
                    <div class="shadow">
                        <div class="info-tab warning-icon" title="Warning"><i></i></div>
                        <div class="warning-box">
                            <p><strong>Warning:</strong> Support for color keywords varies across browsers so, to be on the safe side, it's better to use the hexadecimal or functional notation.</p>
                        </div>
                    </div>
                </div>
                <p>Check out the complete list of <a href="style_color-names.php">color keywords &raquo;</a></p>
                <hr />
                <h2>Transparent Color Keyword</h2>
                <p>The transparent keyword represents a fully transparent color.</p>
                <p>This keyword can be considered a shorthand for transparent black, <code>rgba(0,0,0,0)</code>, which is also its computed value.</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab95ac-2.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

                        h1 {
    color: transparent;
}
p {
    background-color: transparent;
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
                <!--End:Code box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> CSS 2.1 allowed only two property <code><a href="style_background-color-property.php">background-color</a></code> and <code><a href="style_border-color-property.php">border-color</a></code> to accept the transparent keyword. But, CSS3 extends the color value to include the <code>transparent</code> keyword to allow its use with all properties that accept a color value.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>RGB Color Values</h2>
                <p>RGB (red-green-blue) color model is the most common way to define color values in CSS. Colors can be defined using the RGB model in two ways:</p>
                <h3>Hexadecimal Notation</h3>            
                <p>The RGB value in hexadecimal notation is specified with a <code>#</code> character immediately followed by either three or six hexadecimal characters (0-9, a-f).</p>
                <p>When six-digit notation (<code>#rrggbb</code>) is used, the first pair (<code>rr</code>) represents the red value, the second pair (<code>gg</code>) represents the green value and the last pair (<code>bb</code>) represents the blue value.</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab62be.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

                        h1 {
    color: #f80;
}
p {
    background-color: #ff8800;
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
                <!--End:Code box-->
                <div class="color-box space">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"   style="background-color:#fad28c">
                            <p><strong>Important:</strong> The three-digit hexadecimal notation (<code>#rgb</code>) can be converted into six-digit form (<code>#rrggbb</code>) by replicating digits, but not by adding zeros. For example, <code>#03f</code> can be expanded to <code>#0033ff</code>, but both values represent the same color. </p>
                        </div>
                    </div>
                </div>
                <h3>Functional Notation</h3>
                <p>The RGB value in functional notation is specified with: <code>rgb(red, green, blue)</code>. Where, each parameter (<code>red</code>, <code>green</code>, and <code>blue</code>) defines the intensity of the color and can be an integer value (from 0 to 255) or a percentage value (from 0% to 100%).</p>
                <p>The integer value <code>255</code> corresponds to <code>100%</code>, and to <code>f</code> or <code>ff</code> in the hexadecimal notation: For example, <code>rgb(0,255,255) = rgb(0%,100%,100%) = #0ff</code>, and all values represents the same color which is aqua. White spaces are allowed around the numerical values.</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab828a.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

                        h1 {
    color: rgb(0,255,255);
}
p {
    background-color: rgb(0%,100%,100%);
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
                <!--End:Code box-->
                <p>A value of <code>0</code> or <code>0%</code> represents the absence of a particular color component, while a value of <code>255</code>, <code>100%</code> and <code>f</code> or <code>ff</code> represents the full presence of that color component.</p>
                <div class="color-box break">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585"
>
                            <p><strong>Read carefully:</strong> Values outside the valid range (<code>0-255</code> or <code>0%-100%</code>) are automatically clipped or changed to fall within the range supported by the device.</p>
                        </div>
                    </div>
                </div>
                <p>Check out the tutorial on <a href="../des-css/stylel_color.php">CSS3 color</a> to learn about the new functional notations, like <code>rgba()</code>, <code>hsl()</code> and <code>hsla()</code> for defining the color values.</p>
                <!--Bottom Navigation-->
                <div class="bottom-link clearfix">
                    <a href="stylel_properties.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="style_color-names.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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