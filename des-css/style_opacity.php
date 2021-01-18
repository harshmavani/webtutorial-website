<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="keywords" content="css,css3,opacity">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS Opacity that Works in All Browsers - WebSchool Today</title>
    <meta name="description" content="CSS Opacity that Works in All Browsers" />
<style>
table.opacity-demo{margin:20px 0 5px}
table.opacity-demo td{text-align:center;padding:5px 40px 5px 0}
table.opacity-demo td a,table.opacity-demo td a img{display:block}
table.opacity-demo td a img{border:none;outline:none;opacity:.5}
table.opacity-demo td a:hover img{opacity:1}
table.text-opacity{width:100%;margin:20px 0 15px}
table.text-opacity td{padding:0;text-align:center;vertical-align:middle}
table.text-opacity td span{color:#000;font-size:18px;font-weight:700;margin:0 auto;display:block;width:157px;height:75px;line-height:75px;background:#679bb7;font-family:"Trebuchet MS",Arial,sans-serif}
table.rgba-opacity td span{background:none}
</style>
    
<?php include "../links.php" ?>
</head>
<body>
<div>
<div class="tital">CSS Opacity that Works in All Browsers</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des-css.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="style_attribute-selectors.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="style_sprites.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>CSS <span>Opacity</span></h1>
                <p class="summary">The opacity CSS property specifies the transparency of an element.</p>
                <h2>Cross Browser Opacity</h2>
                <p class="space">Opacity is now a part of the CSS3 specifications, but it was present for a long time. However, older browsers have different ways of controlling the opacity or transparency.</p>
                <h2>CSS Opacity in Firefox, Safari, Chrome, Opera and IE9</h2>
                <p>Here is the most up to date syntax for CSS opacity in all current browsers.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabb9ee.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

p {
    opacity: 0.7;
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
                <p>The above style rule will make the paragraph element 70% opaque (or 30% transparent).</p>
                <p>The opacity property takes a value a value from 0.0 to 1.0. A setting of <code>opacity:&thinsp;1;</code> would make the element completely opaque (i.e. 0% transparent), whereas <code>opacity:&thinsp;0;</code> would make the element completely transparent (i.e. 100% transparent).</p>
                <hr />
                <h2>CSS Opacity in Internet Explorer 8 and lower</h2>
                <p>Internet Explorer 8 and earlier version supports a Microsoft-only property "alpha filter" to control the transparency of an element.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab1ecd.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

p {
    filter: alpha(opacity=50);
    zoom: 1;  /* Fix for IE7 */
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
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> Alpha filters in IE accept values from <code>0</code> to <code>100</code>. The value <code>0</code> makes the element completely transparent (i.e. 100% transparent), whereas the value <code>100</code> makes the element completely opaque (i.e. 0% transparent).</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>CSS Opacity for All Browser</h2>
                <p>Combining the both steps above you will get the <em>opacity for all browsers</em>.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab83e8.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

p {
    opacity: 0.5;  /* Opacity for Modern Browsers */
    filter: alpha(opacity=50);  /* Opacity for IE8 and lower */
    zoom: 1;  /* Fix for IE7 */
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
                        <div class="info-tab warning-icon" title="Warning"><i></i></div>
                        <div class="warning-box">
                            <p><strong>Warning:</strong> Including <em>alpha filter</em> to control transparency in Internet Explorer 8 and lower versions creates invalid code in your style sheet since this is a Microsoft-only property, not a standard CSS property.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>CSS Image Opacity</h2>
                <p>You can also make transparent images using CSS Opacity.</p>
                <p>The three images in the illustration below are all from the same source image. The only differences between them are the level of their opacity.</p>
                <table class="opacity-demo">
                    <tr>
                        <td><img style="opacity: 1;" alt="100% Opaque Image" src="../assets/images/opactity1.png"></td>
                        
                    </tr>
                    
                </table>
                <hr />
                <h2>Change Image Opacity on Mouse Over</h2>
                <p>The following example demonstrates a common use of CSS image opacity, where the opacity of images changes when the user moves the mouse pointer over an image.</p>
                <table class="opacity-demo">
                    <tr>
                        <td><a href="javascript:void(0);"><img alt="Snail" src="../assets/images/snail.png"></a></td>
                        <td><a href="javascript:void(0);"><img alt="Tortoise" src="../assets/images/tortoise.png"></a></td>
                        <td><a href="javascript:void(0);"><img alt="Octopus" src="../assets/images/octopus.png"></a></td>
                    </tr>
                </table>
                <p>&mdash; Move your mouse pointer over the images to see the effect.</p>
                <hr />
                <h2>Text in Transparent Box</h2>
                <p>When using opacity on an element not only the background of the element that will have transparency, but all of its child elements become transparent as well. It is making the text inside the transparent element hard to read if the value of opacity becomes higher.</p>
                <table class="text-opacity">
                    <tr>
                        <td><span style="opacity:1;">OPACITY</span></td>
                        <td><span style="opacity:0.50;">OPACITY</span></td>
                        <td><span style="opacity:0.25;">OPACITY</span></td>
                        <td><span style="opacity:0.10;">OPACITY</span></td>
                    </tr>
                </table>
                <p>To prevent this either you can use transparent PNG images, or put the text block outside of the transparent box and push it visually inside using the negative <a href="style_margin.php">margin</a> or <a href="style_position.php">CSS positioning</a>.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab5907.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

div {
    float: left;
    opacity: 0.7;
    border: 1px solid #949781;
}
p {
    float: left;
    position: relative;
    margin-left: -400px;
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
                <hr />
                <h2>CSS Transparency Using RGBA</h2>
                <p>In addition to RGB CSS3 has introduced a new way RGBA to specify a color that includes alpha transparency as part of the color value. RGBA stands for Red Blue Green Alpha.</p>
                <p>The RGBA declaration is a very easy way to set transparency for a color.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab9199.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

div {
    background: rgba(200, 54, 54, 0.5);
}
p {
    color: rgba(200, 54, 54, 0.25);
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
                <p>The first three numbers representing the color in RGB values i.e. red (0-255), green (0-255), blue (0-255) and the fourth representing alpha transparency value between 0 to 1 (0 makes the color fully transparent , whereas the value of 1 makes it fully opaque).</p>
                <p>One important characteristic to note about the RGBA transparency is that &mdash; the ability to control the opacity of individual color. With RGBA, we can make the text color of an element transparent and leave background intact.</p>
                <table class="text-opacity space">
                    <tr>
                        <td><span style="color:rgba(0, 0, 0, 1)">RGBA</span></td>
                        <td><span style="color:rgba(0, 0, 0, 0.5)">RGBA</span></td>
                        <td><span style="color:rgba(0, 0, 0, 0.25)">RGBA</span></td>
                        <td><span style="color:rgba(0, 0, 0, 0.10)">RGBA</span></td>
                    </tr>
                </table>
                <p>&mdash; Or leave the text color alone and change only the transparency of background.</p>
                <table class="text-opacity rgba-opacity">
                    <tr>
                        <td><span style="background:rgba(103, 155, 183, 1)">RGBA</span></td>
                        <td><span style="background:rgba(103, 155, 183, 0.5)">RGBA</span></td>
                        <td><span style="background:rgba(103, 155, 183, 0.25)">RGBA</span></td>
                        <td><span style="background:rgba(103, 155, 183, 0.10)">RGBA</span></td>
                    </tr>
                </table>
                <p>You can see how easily you can control the opacity of individual colors rather than the entire element using RGBA. However it is always recommended to define a fallback color for the browsers that do not support the RGBA colors.</p>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> The RGBA transparency doesn't affect the child elements the way the <code>opacity</code> property does. The alpha value of RGBA affects the transparency of individual color rather than the entire element.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Declaring a Fallback Color</h2>
                <p>All browsers do not support RGBA colors. However, you can provide an alternative such as solid colors or transparent PNG images for the browsers that don't support it.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab8d72.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code6">

p {
    /* Fallback for web browsers that doesn't support RGBA */
    background: rgb(0, 0, 0);
    /* RGBa with 0.5 opacity */
    background: rgba(0, 0, 0, 0.5);
}

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
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab warning-icon" title="Warning"><i></i></div>
                        <div class="warning-box">
                            <p><strong>Warning:</strong> Internet Explorer 8 and earlier versions do not support the RGBA colors. They use the <a href="http://msdn.microsoft.com/en-us/library/ms532997(VS.85).aspx" rel="nofollow" target="_blank">gradient filter</a> to achieve the effect of RGBA, which is deprecated.</p>

                        </div>
                    </div>
                </div>
                <div class="bottom-link clearfix">
                    <a href="style_sprites.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="style_attribute-selectors.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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