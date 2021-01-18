<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="keywords" content="css,css3,Styling Using CSS">
	  <meta name="author" content="webschooltoday.com">
    <title>A Practical Guide to Font Styling Using CSS - WebSchool Today</title>
    <meta name="description" content="While designing a web page you might want to display some font different than others. CSS font related properties gives you full control over the font-family, color, sizes, and other aspects of the font." />
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">A Practical Guide to Font Styling Using CSS</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des-css.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="style_text.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="style_background.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>CSS <span>Fonts</span></h1>
                <p class="summary">In this tutorial you will learn how to style fonts on a web page using CSS.</p>
                <h2>Styling Fonts with CSS</h2>
                <p>Choosing the right font and style is very crucial for the readability of text on a page.</p>
                <p>CSS provide several properties for styling the font of the text, including changing their face, controlling their size and boldness, managing variant, and so on.</p>
                <p>The font properties are: <code>font-family</code>, <code>font-style</code>, <code>font-weight</code>, <code>font-size</code>, and <code>font-variant</code>.</p>
                <p class="space">Let's discuss each of these font properties one by one in more detail.</p>
                <h2>Font Family</h2>
                <p>The <code>font-family</code> property is used to specify the font to be used to render the text.</p>
                <p>This property can hold several comma-separated font names as a <em>fallback</em> system, so that if the first font is not available on the user's system, browser tries to use the second one, and so on.</p>
                <p>Hence, list the font that you want first, then any fonts that might fill in for the first if it is not available. You should end the list with a generic font family which are five &mdash; <code>serif</code>, <code>sans-serif</code>, <code>monospace</code>, <code>cursive</code> and <code>fantasy</code>. A typical font family declaration might look like this:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab6291.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

body {
    font-family: Arial, Helvetica, sans-serif;
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
                            <p><strong>Read Carefully:</strong> If the name of a font family contains more than one word, it must be placed inside quotation marks, like <code>"Times New Roman"</code>, <code>"Courier New"</code>, <code>"Segoe UI"</code>, etc.</p>
                        </div>
                    </div>
                </div>
                <p>The most common font families used in web design are <em>serif</em> and <em>sans-serif</em>, because they are more suitable for reading. While <em>monospace</em> fonts are commonly used to display code, because in this typeface each letter takes up the same space which looks like typewritten text.</p>
                <p>The <em>cursive</em> fonts look like cursive writing or handwriting. The <em>fantasy</em> font represents artistic font, but they're not used widely because of poor availability across the operating systems.</p>
                <h3>Difference Between Serif and Sans-serif Fonts</h3>
                <p>Serif fonts have small line or stroke at the extremities of characters, whereas sans-serif fonts are straighter and do not have these small strokes. See the following illustration.</p>
                <div class="break">
                    <img src="../assets/images/font.png" alt="Serif vs Sans-serif Font" />
                </div>
                <p>To learn about commonly used font combinations, please check out the reference on <a href="../info-css/style_web-safe-fonts.php">web safe fonts</a>.</p>            
                <hr />
                <h2>Font Style</h2>
                <p>The <code>font-style</code> property is used to set the font face style for the text content of an element.</p>
                <p>The font style can be <code>normal</code>, <code>italic</code> or <code>oblique</code>. The default value is <code>normal</code>.</p>
                <p>Let's try out the following example to understand how it basically works:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab58d3.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

p.normal {
  font-style: normal;
}
p.italic {
  font-style: italic;
}
p.oblique {
  font-style: oblique;
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
                            <p><strong>Read Carefully:</strong> At first glance both oblique and italic font styles appear the same thing, but there is a difference. The <code>italic</code> style uses an <em>italic version</em> of the font while <code>oblique</code> style on the other hand is simply a slanted or sloped version of the normal font.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Font Size</h2>
                <p>The <code>font-size</code> property is used to set the size of font for the text content of an element.</p>
                <p class="space">There are several ways to specify the font size values e.g. with keywords, percentage, pixels, ems, etc.</p>                
                <h3>Setting Font Size with Pixels</h3>
                <p>Setting the font size in pixel values (e.g. 14px, 16px, etc.) is a good choice when you need the pixel accuracy. Pixel is an absolute unit of measurement which specifies a fixed length.</p>
                <p>Let's try out the following example to understand how it basically works:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab7208.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

h1 {
    font-size: 24px;
}
p {
    font-size: 14px;
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
                <p>Defining the font sizes in pixel is not considered very accessible, because the user cannot change the font size from the browser settings. For instance, users with limited or low vision may wish to set the font size much larger than the size specified by you.</p>
                <p>Therefore, you should avoid using the pixels values and use the values that are relative to the user's default font size instead if you want to create an inclusive design.</p>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"  style="background-color:#fad28c">
                            <p><strong>Important:</strong> The text can also be resized in all browsers using the <em>zoom feature</em>. However, this feature resizes the entire page, not just the text. The <a target="_blank" rel="nofollow" href="http://www.w3.org/Style/CSS/Overview.en.php" title="World Wide Web consortium">W3C</a> recommends using the em or percentage (%) values in order to create more robust and scalable layouts.</p>
                        </div>
                    </div>
                </div>
                <h3>Setting Font Size with EM</h3>
                <p>The <code>em</code> unit refers to the font size of the parent element. When defining the <code>font-size</code> property, <code>1em</code> is equal to the size of the font that applies to the <em>parent of the element</em>.</p>
                <p>So, if you set a <code>font-size</code> of 20px on the body element, then <code>1em&thinsp;=&thinsp;20px</code> and <code>2em&thinsp;=&thinsp;40px</code>.</p>
                <p>However, if you haven't set the font size anywhere on the page, then it is the browser default, which is normally 16px. Therefore, by default <code>1em&thinsp;=&thinsp;16px</code>, and <code>2em&thinsp;=&thinsp;32px</code>.</p>
                <p>Let's take a look at the following example to understand how it basically works:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabd33d.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

h1 {
    font-size: 2em;    /* 32px/16px=2em */
}
p {
    font-size: 0.875em;    /* 14px/16px=0.875em */
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
                <h3>Using the Combination of Percentage and EM</h3>
                <p>As you've observed in the above example the calculation of em values doesn't look straightforward. To simplify this, a popular technique is to set the <code>font-size</code> for the body element to <code>62.5%</code> (that is 62.5% of the default 16px), which equates to 10px, or 0.625em.</p>
                <p>Now you can set the <code>font-size</code> for any elements using em units, with an easy-to-remember conversion, by dividing the <code>px</code> value by 10. This way <code>10px&thinsp;=&thinsp;1em</code>, <code>12px&thinsp;=&thinsp;1.2em</code>, <code>14px&thinsp;=&thinsp;1.4em</code>, <code>16px&thinsp;=&thinsp;1.6em</code>, and so on. Let's take a look at the following example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab3c07.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

body {
    font-size: 62.5%;    /* font-size 1em = 10px */
}
p {
    font-size: 1.4em;    /* 1.4em = 14px */
}
p span {
    font-size: 2em;    /* 2em = 28px */
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
                <h3>Setting Font Size with Root EM</h3>
                <p>To make things even more simpler CSS3 has introduced <code>rem</code> unit (short for "root em") which is always relative to the font-size of the root element (<code>html</code>), regardless of where the element lies in the document (unlike <code>em</code> which is relative to parent element's font size).</p>
                <p>This means that <code>1rem</code> is equivalent to the font size of the <code>html</code> element, which is <code>16px</code> by default in most browsers. Let's try out an example to understand how it actually works:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab62d3.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code6">

html {
    font-size: 62.5%;    /* font-size 1em = 10px */
}
p {
    font-size: 1.4rem;    /* 1.4rem = 14px */
}
p span {
    font-size: 2rem;    /* 2rem = 20px (not 28px) */
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
                <h3>Setting Font Size with Keywords</h3>
                <p>CSS provide several keywords that you can use to define font sizes.</p>                
                <p>An absolute font size can be specified using one of the following keywords: <code>xx-small</code>, <code>x-small</code>, <code>small</code>, <code>medium</code>, <code>large</code>, <code>x-large</code>, <code>xx-large</code>. Whereas, a relative font size can be specified using the keywords: <code>smaller</code> or <code>larger</code>. Let's try out an example and see how it works:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab222a-2.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code7">

body {
    font-size: large;
}
h1 {
    font-size: larger;
}
p {
    font-size: smaller;
}

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
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> The keyword <code>medium</code> is equivalent to the browsers default font-size, which is normally 16px. Likewise, xx-small is the equivalent of 9 pixels, x-small is 10 pixels, small is 13 pixels, large is 18 pixels, x-large is 24 pixels, and xx-large is 32 pixels.</p>
                        </div>
                    </div>
                </div>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"  style="background-color:#fad28c">
                            <p><strong>Important:</strong> By setting a font size on the body element, you can set the relative font sizing everywhere else on the page, giving you the ability to easily scale the font size up or down accordingly.</p>
                        </div>
                    </div>
                </div>
                <h3>Setting Font Size with Viewport Units</h3>
                <p>The font sizes can be specified using viewport units such as <code>vw</code> or <code>vh</code>.</p>
                <p>Viewport units refer to a percentage of the browser's viewport dimensions, where 1vw = 1% of viewport width, and 1vh = 1% of viewport height. Hence, if the viewport is 1600px wide, 1vw is 16px.</p>
                <p>Try out the following example by resizing the browser window and see how it works:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab3e36.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code8">

body {
    font-size: 1vw;
}
h1 {
    font-size: 3vw;
}

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
                <p>However, there is a problem with the viewport units. On small screens fonts become so small that they are hardly readable. To prevent this you can utilize CSS <code>calc()</code> function, like this:</p>          
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab9237.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code9">
		
        html { 
            font-size: calc(1em + 1vw); 
        }
        h1 {
            font-size: 3rem;
        }
        
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
                <p>In this example, even if the viewport width becomes 0, the font-size would be at least 1em or 16px.</p>
                <p>You further utilize <a href="stylel_media-queries.php">CSS media queries</a> to create better responsive and fluid typography.</p>
                <hr />
                <h2>Font Weight</h2>
                <p>The <code>font-weight</code> property specifies the weight or boldness of the font.</p>
                <p>This property can take one of the following values: <code>normal</code>, <code>bold</code>, <code>bolder</code>, <code>lighter</code>, <code>100</code>, <code>200</code>, <code>300</code>, <code>400</code>, <code>500</code>, <code>600</code>, <code>700</code>, <code>800</code>, <code>900</code> and <a href="../definitions.php#inherit"><code>inherit</code></a>.</p>
                <ul>
                    <li>The numeric values <code>100</code>-<code>900</code> specify the font weights, where each number represents a weight greater than its predecessor. <code>400</code> is same as <code>normal</code> &amp; <code>700</code> is same as <code>bold</code>.</li>
                    <li>The <code>bolder</code> and <code>lighter</code> values are relative to the inherited font weight, while the other values such as <code>normal</code> and <code>bold</code> are absolute font weights.</li>
                </ul>
                <p>Let's try out an example to understand how this property basically works:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab6916.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code10">

p {
    font-weight: bold;
}

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
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> Most of the fonts are only available in a limited number of weights; often they are available only in <em>normal</em> and <em>bold</em>. In case, if a font is not available in the specified weight, an alternate will be chosen that is the closest available weight.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Font Variant</h2>
                <p>The <code>font-variant</code> property allows the text to be displayed in a special small-caps variation.</p>
                <p>Small-caps or <em>small capital letters</em> are slightly different to normal capital letters, in which lowercase letters appear as smaller versions of the corresponding uppercase letters.</p>
                <p>Try out the following example to understand how this property actually works:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabdaf5.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code11">

p {
    font-variant: small-caps;
}

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
                <p>The value <code>normal</code> removes small caps from the text which is already formatted that way.</p>
                <div class="bottom-link clearfix">
                    <a href="style_background.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="style_text.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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