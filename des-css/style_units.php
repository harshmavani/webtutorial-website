<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="keywords" content="css,css3,Absolute and Relative Units">
	  <meta name="author" content="webschooltoday.com">
    <title>Understanding CSS Absolute and Relative Units - WebSchool Today</title>
    <meta name="description" content="Understanding CSS Absolute and Relative Units" />
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">Understanding CSS Absolute and Relative Units</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des-css.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <a href="style_overflow.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                <a href="style_visual-formatting.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                <h1>CSS <span>Units</span></h1>
                <p class="summary">Units are used to specify non-zero length value in CSS properties.</p>
                <h2>Understanding CSS Units</h2>
                <p>The units in which length is measured can be either absolute such as pixels, points and so on, or relative such as percentages (<code>%</code>) and <code>em</code> units.</p>
                <p>Specifying CSS units is obligatory for non-zero values, because there is no default unit. Missing or ignoring a unit would be treated as an error. However, if the value is 0, the unit can be omitted (after all, zero pixels is the same measurement as zero inches).</p>
                <!--Note box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> Lengths refer to distance measurements. A length is a measurement comprising a numeric value and a unit only such as <code>10px</code>, <code>2em</code>, <code>50%</code> etc. The whitespace can't appear between the number and the unit.</p>
                        </div>
                    </div>
                </div>
                <!--End:Note box-->
                <hr />
                <h2>Relative Length Units</h2>
                <p class="break">Relative length units specify a length relative to another length property. Relative units are:</p>
                <div class="shadow">
                    <table class="data">
                        <tr>
                            <th>Unit</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td>em</td>
                            <td>the current font-size</td>
                        </tr>
                        <tr>
                            <td>ex</td>
                            <td>the x-height of the current font</td>
                        </tr>
                    </table>
                </div>
                <p class="space">The <code>em</code> and <code>ex</code> units depend on the font size that's applied to the element.</p>
                <h2>Using the Em Unit</h2>
                <p>A measurement of <code>1em</code> is equal to the computed value of the <a href="../info-css/style_font-size-property.php"><code>font-size</code></a> property of the element on which it is used. It may be used for vertical or horizontal measurement.</p>
                <p>For example, if <code>font-size</code> of the element set to 16px and <a href="../info-css/style_line-height-property.php"><code>line-height</code></a> set to 2.5em then the calculated value of <code>line-height</code> in pixel is <code>2.5&thinsp;x&thinsp;16px&thinsp;=&thinsp;40px</code>.</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab3bc1.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">
                        p {
    font-size: 16px;
    line-height: 2.5em;
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
                <p>The exception occurs when em is specified in the value of <code>font-size</code> property itself, in that case it refers to the font size of the parent element.</p>
                <p>So, when we specify a font size in <code>em</code>, 1em is equal to the inherited <code>font-size</code>. As such, <code>font-size: 1.2em;</code> makes the text 1.2 times larger than the parent element's text.</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab58d4.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">
                        body {
    font-size: 62.5%;
    font-family: Arial, Helvetica, sans-serif;
}
p {
    font-size: 1.6em;
}
p:firt-letter {
    font-size: 3em;
    font-weight: bold;
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
                <p>Let's understand what this code was all about. The default size for the fonts in all modern browsers is 16px. Our first step is to reduce this size for the entire document by setting the body <code>font-size</code> to 62.5%, which resets the font-size to 10px (62.5% of 16px).</p>
                <p>This is to round off the default <a href="../info-css/style_font-size-property.php"><code>font-size</code></a> for easy <code>px</code> to <code>em</code> conversion.</p>
                <hr />
                <h2>Using the Ex Unit</h2>
                <p>The <code>ex</code> unit is equal to the x-height of the current font.</p>
                <p class="space">The x-height is so called because it is often equal to the height of the lowercase 'x', as illustrated below. However, an <code>ex</code> is defined even for fonts that do not contain an 'x'.</p>
                <div><img alt="X Height" src="../assets/images/height1.png" width="100%" ></div>
                <hr />
                <h2>Absolute Length Units</h2>
                <p class="break">Absolute length units are fixed in relation to each other. They are highly dependent on the output medium, so are mainly useful when the output environment is known. The absolute units consist of the physical units (<code>in</code>, <code>cm</code>, <code>mm</code>, <code>pt</code>, <code>pc</code>) and the <code>px</code> unit.</p>
                <div class="shadow">
                    <table class="data">
                        <tr>
                            <th>Unit</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td><code>in</code></td>
                            <td>inches &ndash; 1in is equal to 2.54cm.</td>
                        </tr>
                        <tr>
                            <td><code>cm</code></td>
                            <td>centimeters.</td>
                        </tr>
                        <tr>
                            <td><code>mm</code></td>
                            <td>millimeters.</td>
                        </tr>
                        <tr>
                            <td><code>pt</code></td>
                            <td>points &ndash; In CSS, one point is defined as 1/72 inch (0.353mm).</td>
                        </tr>
                        <tr>
                            <td><code>pc</code></td>
                            <td>picas &ndash; 1pc is equal to 12pt.</td>
                        </tr>
                        <tr>
                            <td><code>px</code></td>
                            <td>pixel units &ndash; 1px is equal to 0.75pt.</td>
                        </tr>
                    </table>
                </div>
                <p>Absolute physical units such as <code>in</code>, <code>cm</code>, <code>mm</code>, etc. should be used for print media and similar high-resolution devices. Whereas, for on-screen display such as desktop and lower-resolution devices, it is recommended to use the pixel or em units.</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab05fd.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">
                        h1 { margin: 0.5in; }       /* inches  */
h2 { line-height: 3cm; }    /* centimeters */
h3 { word-spacing: 4mm; }   /* millimeters */
h4 { font-size: 12pt; }     /* points */
h5 { font-size: 1pc; }      /* picas */
h6 { font-size: 12px; }     /* picas */
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
                <!--Tip box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"  style="background-color:#fad28c"
>
                            <p><strong>Important:</strong> Style sheets that use the relative units such as <i>em</i> or <i>percentage (%)</i> can more easily scale from one output environment to another.</p>
                        </div>
                    </div>
                </div>
                <!--End:Tip box-->            
                <!--Bottom Navigation-->
                <div class="bottom-link clearfix">
                    <a href="style_overflow.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="style_visual-formatting.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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