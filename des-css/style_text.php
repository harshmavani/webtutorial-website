<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="keywords" content="css,css3,Formatting Text">
	  <meta name="author" content="webschooltoday.com">
    <title>Formatting Text Using CSS - WebSchool Today</title>
    <meta name="description" content="Formatting Text Using CSS" />
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">Formatting Text Using CSS</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des-css.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <a href="style_fonts.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                <a href="style_links.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                <h1>CSS <span>Text</span></h1>
                <p class="summary">In this tutorial you will learn how to style text on your web pages using CSS.</p>
                <h2>Formatting Text with CSS</h2>
                <p>CSS provides several properties that allows you to define various text styles such as color, alignment, spacing, decoration, transformation, etc. very easily and effectively.</p>
                <p>The commonly used text properties are: <code>text-align</code>, <code>text-decoration</code>, <code>text-transform</code>, <code>text-indent</code>, <code>line-height</code>, <code>letter-spacing</code>, <code>word-spacing</code>, and more. These properties give you precise control over the visual appearance of the <em>characters</em>, <em>words</em>, <em>spaces</em>, and so on.</p>
                <p class="space">Let's see how to set these text properties for an element in more detail.</p>
                <h2>Text Color</h2>
                <p>The color of the text is defined by the CSS <code>color</code> property.</p>
                <p>The style rule in the following example will define the default text color for the page</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab71e9.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

                        body {
    color: #434343;
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
                <p>Although, the color property seems like it would be a part of the CSS text, but it is actually a standalone property in CSS. See the tutorial on <a href="style_color.php">CSS color</a> to learn more about the color property.</p>
                <hr />
                <h2>Text Alignment</h2>
                <p>The <a href="../info-css/style_text-align-property.php"><code>text-align</code></a> property is used to set the horizontal alignment of the text.</p>
                <p>Text can be aligned in four ways: to the left, right, centre or justified (straight left and right margins).</p>   
                <p>Let's take a look at an example to understand how this property basically works.</p>             
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab16c5.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

                        h1 {
    text-align: center;
}
p {
    text-align: justify;
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
                <!--Note box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> When <code>text-align</code> is set to <code>justify</code>, each line is stretched so that every line has equal width (except the last line), and the left and right margins are straight. This alignment is generally used in publications such as magazines and newspapers.</p>
                        </div>
                    </div>
                </div>
                <!--End:Note box-->
                <p class="space">Let's take a look at the following illustration to understand what these values actually mean.</p>
                <div><img src="../assets/images/rtaImage.jpg" width="100%" alt="Text Align Illustration" /></div>                
                <hr />
                <h2>Text Decoration</h2>
                <p>The <a href="../info-css/style_text-decoration-property.php"><code>text-decoration</code></a> property is used to set or remove decorations from text.</p>
                <p>This property typically accepts one of the following values: <code>underline</code>, <code>overline</code>, <code>line-through</code>, and <code>none</code>. You should avoid underline text that is not a link, as it might confuse the visitor.</p>
                <p>Let's try out the following example to understand how it basically works:</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab4144.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">
                        h1 {
    text-decoration: overline;
}
h2 {
    text-decoration: line-through;
}
h3 {
    text-decoration: underline;
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
                <h3>Removing the Default Underline from Links</h3>
                <p>The <code>text-decoration</code> property is extensively used to remove the default underline from the <a href="../des-html/html-links.php">HTML&nbsp;hyperlinks</a>. You can further provide some other visual cues to make it stand out from the normal text, for example, using dotted border instead of solid underline.</p>
                <p>Let's take a look at the following example to understand how it basically works:</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab7bb3.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">
                        a {
    text-decoration: none;
    border-bottom: 1px dotted;
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
                <!--Note box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> When you create an <a href="../des-html/html-links.php">HTML link</a>, browsers built in style sheet automatically underline it and applies a blue color, so that the readers can clearly see which text is clickable.</p>
                        </div>
                    </div>
                </div>
                <!--End:Note box-->
                <hr />
                <h2>Text Transformation</h2>
                <p>The <code>text-transform</code> property is used to set the cases for a text.</p>
                <p>Text are often written in mixed case. However, in certain situations you may want to display your text in entirely different case. Using this property you can change an element's text content into uppercase or lowercase letters, or capitalize the first letter of each word without modifying the original text.</p>
                <p>Let's try out the following example to understand how it basically works:</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab6b80.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">
                        h1 {
    text-transform: uppercase;
}
h2 {
    text-transform: capitalize;
}
h3 {
    text-transform: lowercase;
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
                <!--End:Code box-->
                <hr />
                <h2>Text Indentation</h2>
                <p>The <code>text-indent</code> property is used to set the indentation of the first line of text within a block of text. It is typically done by inserting the empty space before the first line of text.</p>
                <p>The size of the indentation can be specified using percentage (%), length values in pixels, ems, etc.</p>
                <p>The following style rule will indent the first line of the paragraphs by 100 pixels.</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab316a.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code6">

                        p {
    text-indent: 100px;
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
                <!--End:Code box-->
                <!--Note box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> Whether the text is indented <em>from the left</em> or <em>from the right</em> depends on the direction of text inside the element, defined by the CSS <a href="../info-css/style_direction-property.php"><code>direction</code></a> property.</p>
                        </div>
                    </div>
                </div>
                <!--End:Note box-->
                <hr />
                <h2>Letter Spacing</h2>
                <p>The <a href="../info-css/style_letter-spacing-property.php"><code>letter-spacing</code></a> property is used to set extra spacing between the characters of text.</p>
                <p>This property can take a length value in pixels, ems, etc. It may also accept negative values. When setting letter spacing, a length value indicates spacing in addition to the default inter-character space.</p>
                <p>Let's check out the following example to understand how it really works:</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab57c9.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code7">

                        h1 {
    letter-spacing: -3px;
}
p {
    letter-spacing: 10px;
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
                <!--End:Code box-->
                <hr />
                <h2>Word Spacing</h2>
                <p>The <code>word-spacing</code> property is used to specify additional spacing between the words.</p>
                <p>This property can accept a length value in pixels, ems, etc. Negative values are also allowed.</p>
                <p>Let's try out the following example to understand how this property works:</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabbc57.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code8">
                        p.normal {
    word-spacing: 20px;
}
p.justified {
    word-spacing: 20px;
    text-align: justify;
}
p.preformatted {
    word-spacing: 20px;
    white-space: pre;
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
                <!--End:Code box-->
                <!--Note box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> Word spacing can be affected by text justification. Also, even though whitespace is preserved, spaces between words are affected by the <code>word-spacing</code> property.</p>
                        </div>
                    </div>
                </div>
                <!--End:Note box-->
                <hr />                
                <h2>Line Height</h2>
                <p>The <a href="../info-css/style_line-height-property.php"><code>line-height</code></a> property is used to set the height of the text line.</p>
                <p>It is also called <em>leading</em> and commonly used to set the distance between lines of text.</p>
                <p>The value of this property can be a number, a percentage (%), or a length in pixels, ems, etc.</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab7e49.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code9">

                        p {
    line-height: 1.2;
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
                <!--End:Code box-->
                <p>When the value is a number, the line height is calculated by multiplying the element's font size by the number. While, percentage values are relative to the element's font size.</p>
                <!--Note box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> Negative values for the <code>line-height</code> property are not allowed. This property is also a component of the CSS <a href="../info-css/style_font-property.php">font</a> shorthand property.</p>
                        </div>
                    </div>
                </div>
                <!--End:Note box-->
                <p>If the value of the <code>line-height</code> property is greater than the value of the <a href="../info-css/style_font-size-property.php"><code>font-size</code></a> for an element, this difference (called the <em>"leading"</em>) is cut in half (called the <em>"half-leading"</em>) and distributed evenly on the top and bottom of the in-line box. Let's check out an example:</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab2d3f.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code10">

                        p {
    font-size: 14px;
    line-height: 20px;
    background-color: #f0e68c;
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
                <!--End:Code box-->
                <p>See the tutorial on <a href="stylel_text-overflow.php">CSS3 text overflow</a> in the advanced section to learn how to handle overflowed text. Also see the <a href="stylel_drop-shadows.php#text-shadow">CSS3 text shadow</a> section to learn how to apply shadow effect on text.</p>
                <!--Bottom Navigation-->
                <div class="bottom-link clearfix">
                    <a href="style_fonts.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="style_links.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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