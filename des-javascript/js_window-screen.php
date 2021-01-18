<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="JavaScript Window Screen">
	  <meta name="keywords" content="javascript,js,JavaScript Window Screen">
	  <meta name="author" content="webschooltoday.com">
    <title>JavaScript Window Screen - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">JavaScript Window Screen</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_javascript.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="js_window-location.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="js_window.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>JavaScript Window <span>Screen</span></h1>
                <p class="summary">In this tutorial you will learn about the JavaScript window screen object.</p>
				<h2>The Screen Object</h2>
				<p>The <code>window.screen</code> object contains information about the user's screen such as resolution (i.e. width and height of the screen), color depth, pixel depth, etc.</p>
				<p class="space">Since window object is at the top of the scope chain, so properties of the <code>window.screen</code> object can be accessed without specifying the <code>window.</code> prefix, for example <code>window.screen.width</code> can be written as <code>screen.width</code>. The following section will show you how to get information of the user's display using the screen object property of the window object.</p>
				<h2>Getting Width and Height of the Screen</h2>
				<p>You can use the <code>screen.width</code> and <code>screen.height</code> property obtains the width and height of the user's screen in pixels. The following example will display your screen resolution on button click:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabe08a.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

                        <script>
function getResolution() {
    alert("Your screen is: " + screen.width + "x" + screen.height);
}
</script>
 
<button type="button" onclick="getResolution();">Get Resolution</button>
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
				<h2>Getting Available Width and Height of the Screen</h2>
				<p>The <code>screen.availWidth</code> and <code>screen.availHeight</code> property can be used to get the width and height available to the browser for its use on user's screen, in pixels.</p>
				<p>The screen's available width and height is equal to screen's actual width and height minus width and height of interface features like the taskbar in Windows. Here's an example:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabe968.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">
                        <script>
function getAvailSize() {
    alert("Available Screen Width: " + screen.availWidth + ", Height: " + screen.availHeight);
}
</script>
 
<button type="button" onclick="getAvailSize();">Get Available Size</button>
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
				<h2>Getting Screen Color Depth</h2>
				<p>You can use the <code>screen.colorDepth</code> property to get the color depth of the user's screen. Color depth is the number of bits used to represent the color of a single pixel.</p>
				<p>Color depth indicates how many colors a device screen is capable to produce. For example, screen with color depth of 8 can produce 256 colors (2<sup>8</sup>).</p>
				<p>Currently, most devices has screen with color depth of 24 or 32. In simple words more bits produce more color variations, like 24 bits can produce 2<sup>24</sup> = 16,777,216 color variations (<em>true colors</em>), whereas 32 bits can produce 2<sup>32</sup> = 4,294,967,296 color variations (<em>deep colors</em>).</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelaba6df.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

                        <script>
function getColorDepth() {
    alert("Your screen color depth is: " + screen.colorDepth);
}
</script>
 
<button type="button" onclick="getColorDepth();">Get Color Depth</button>
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
				<!--Tip Box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"   style="background-color:#fad28c">
                            <p><strong>Important:</strong> As of now virtually every computer and phone display uses 24-bit color depth. 24 bits almost always uses 8 bits of each of R, G, B.  Whereas in case of 32-bit color depth, 24 bits are used for the color, and the remaining 8 bits are used for transparency.</p>
                        </div>
                    </div>
                </div>
                <!--End:Tip Box-->
				<hr />
				<h2>Getting Screen Pixel Depth</h2>
				<p>You can get the pixel depth of the screen using the <code>screen.pixelDepth</code> property. Pixel depth is the number of bits used per pixel by the system display hardware.</p>
				<p>For modern devices, color depth and pixel depth are equal. Here's an example:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab13eb.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

                        <script>
function getPixelDepth() {
    alert("Your screen pixel depth is: " + screen.pixelDepth);
}
</script>
 
<button type="button" onclick="getPixelDepth();">Get Pixel Depth</button>
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
				<!--Bottom Navigation-->
				<div class="bottom-link clearfix">
                    <a href="js_window.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="js_window-location.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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