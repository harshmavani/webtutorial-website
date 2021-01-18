<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="keywords" content="css,css3,RGBA, HSL and HSLA Color Values">
      <meta name="author" content="webschooltoday.com">
      <meta name="description" content="CSS3 RGBA, HSL and HSLA Color Values" />

    <title>CSS3 RGBA, HSL and HSLA Color Values - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS3 RGBA, HSL and HSLA Color Values</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des-css.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
            	<a href="stylel_border.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                <a href="stylel_background.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                <h1>CSS3 <span>Color</span></h1>
                <p class="summary">CSS3 provides several new ways to define a color values.</p>
                <h2>Defining Colors in CSS3</h2>            
                <p>In the previous section you've learnt how to define colors using the <a href="style_color.php">color keywords and RGB notations</a>. In addition to that CSS3 adds some new functional notations for setting color values for the elements which are <code>rgba()</code>, <code>hsl()</code> and <code>hsla()</code>.</p>
				<p class="space">In the following section we'll discuss about these color model one by one.</p>
                <h2 id="rgba">RGBA Color Values</h2>
                <p>Colors can be defined in the RGBA model (red-green-blue-alpha) using the <code>rgba()</code> functional notation. RGBA color model are an extension of RGB color model with an alpha channel &mdash; which specifies the opacity of a color.</p>
                <p>The alpha parameter accepts a value from <code>0.0</code> (fully transparent) to <code>1.0</code> (fully opaque).</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelaba77a.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">
                        h1 {
    color: rgba(0,0,255,0.5);
}
p {
    background-color: rgba(0%,0%,100%,0.3);
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
                <hr />
                <h2 id="hsl">HSL Color Values</h2>
                <p>Colors also can be defined the HSL model (hue-saturation-lightness) using the <code>hsl()</code> functional notation. Hue is represented as an angle (from <code>0</code> to <code>360</code>) of the color wheel or circle (i.e. the rainbow represented in a circle). This angle is given as a unit less number because the angle is so typically measured in degrees that the unit is implicit in CSS.</p>
                <p>Saturation and lightness are represented as percentages. <code>100%</code> saturation means full color, and <code>0%</code> is a shade of gray. Whereas, <code>100%</code> lightness is white, <code>0%</code> lightness is black, and <code>50%</code> lightness is normal. Check out the example below:</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabf5fc.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">
                        h1 {
    color: hsl(360,70%,60%);
}
p {
    background-color: hsl(480,50%,80%);
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
                <div class="color-box space">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"  style="background-color:#fad28c"
>
                            <p><strong>Important:</strong> By the definition <code>red=0=360</code>, and the other colors are spread around the circle, so <code>green=120</code>, <code>blue=240</code>, etc. As an angle, it implicitly wraps around such that <code>-120=240</code>, <code>480=120</code>, and so on.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2 id="hsla">HSLA Color Values</h2>
                <p>Colors can be defined in the HSLA model (hue-saturation-lightness-alpha) using the <code>hsla()</code> functional notation. HSLA color model are an extension of HSL color model with an alpha channel &mdash; which specifies the opacity of a color.</p>
                <p>The alpha parameter accepts a value from <code>0.0</code> (fully transparent) to <code>1.0</code> (fully opaque).</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab17a1." target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">
                        h1 {
    color: hsla(360,80%,50%,0.5);
}
p {
    background-color: hsla(480,60%,30%,0.3);
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
				<!--Bottom Navigation-->
                <div class="bottom-link clearfix">
                    <a href="stylel_border.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="stylel_background.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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