<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="keywords" content="css,css3,CSS Pseudo Elements,:before,:after">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS Pseudo Elements - Generated Content With :before and :after</title>
    <meta name="description" content="CSS Pseudo Elements - Generated Content With :before and :after" />
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS Pseudo Elements - Generated Content With :before and :after</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des-css.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="style_media-types.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="style_pseudo-classes.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>CSS <span>Pseudo-elements</span></h1>
                <p class="summary">The CSS pseudo-elements is a ways to style elements of the document that weren't explicitly defined by a position in the document tree.</p>
                <h2>What is Pseudo-element</h2>
                <p>The CSS pseudo-elements allow you to style the elements or parts of the elements without adding any IDs or classes to them. It will be really helpful in the situations when you just want to style the first letter of a paragraph to create the drop cap effect or you want to insert some content before or after an element, etc. only through style sheet.</p>
                <p>CSS3 introduced a new double-colon (<code>::</code>) syntax for pseudo-elements to distinguish between them and pseudo-classes. The new syntax of the pseudo-element can be given with:</p>
                <div class="shadow">
                    <div class="syntax">
                        selector::pseudo-element { <span class="property">property</span>: <span class="property-value">value</span>; }
                    </div>
                </div>
                <p class="space">These are the following most commonly used pseudo-elements:</p>
                <h2 id="first-line">The ::first-line Pseudo-element</h2>
                <p>The <code>::first-line</code> pseudo-element applies special style to the first line of a text.</p>
                <p>The style rules in the following example formats the first line of text in a paragraph. The length of first line depends on the size of the browser window or containing element.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab1612.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

p::first-line {
    color: #ff0000;
    font-variant: small-caps;
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
                <div class="color-box break">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> The CSS properties that can be applied to the <code>::first-line</code> pseudo-element are: <a href="#">font properties</a>,  <a href="#">background properties</a>, <a href="#">color</a>, <a href="#">word-spacing</a>, <a href="#">letter-spacing</a>, <a href="#">text-decoration</a>, <a href="#">vertical-align</a>, <a href="#">text-transform</a>, <a href="#">line-height</a>.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2 id="first-letter">The ::first-letter Pseudo-element</h2>
                <p>The <code>::first-letter</code> pseudo-element is used to add a special style to the first letter of the first line of a text. The style rules in the following example formats the first letter of the paragraph of text and create the effect like drop cap.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabd46d.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

p::first-letter {
    color: #ff0000;
    font-size: xx-large;
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
                <div class="color-box break">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> The CSS properties that can be applied to the <code>::first-letter</code> pseudo-element are: <a href="#">font properties</a>, <a href="#">text-decoration</a>, <a href="#">text-transform</a>, <a href="#">letter-spacing</a>, <a href="#">word-spacing</a>, <a href="#">line-height</a>, <a href="#">float</a>, <a href="#">vertical-align</a> (only if '<a href="#">float</a>' is 'none'), <a href="#">color</a>, <a href="#">margin</a> and <a href="#">padding properties</a>, <a href="#">border properties</a>, <a href="#">background properties</a>.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2 id="pseudo-elements">The ::before and ::after Pseudo-element</h2>
                <p>The <code>::before</code> and <code>::after</code> pseudo-elements can be used to insert generated content either before or after an element's content. The <a href="../info-css/style_content-property.php"><code>content</code></a> CSS property is used in conjunction with these pseudo-elements, to insert the generated content.</p>
                <p>This is very useful for further decorating an element with rich content that should not be part of the page's actual markup. You can insert regular strings of text or an embedded object such as image and other resources using these pseudo-elements.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelaba0fa.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

h1::before {
    content: url("images/marker-left.gif");
}
h1::after {
    content: url("images/marker-right.gif");
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
                <hr />
                <h2>Pseudo-elements and CSS Classes</h2>
                <p>Generally we need to style only a certain paragraph of text or other <a href="style_visual-formatting.php#block-level">block-level</a> elements with these pseudo-elements. That's where declaring a class to the pseudo-element comes into play. The pseudo-elements can be combined with the <a href="style_selectors.php">CSS classes</a> to produce the effect particularly for the elements having that class.</p>
                <p>The style rules in the following example will display the first letter of all paragraphs with the <code>class="article"</code>, in green and size of <code>xx-large</code>.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab9c33.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

p.article::first-letter {
    color: #00ff00;
    font-size: xx-large;
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
                    <a href="style_pseudo-classes.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="style_media-types.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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