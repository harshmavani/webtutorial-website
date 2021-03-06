<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="keywords" content="css,css3,CSS Display Property">
	  <meta name="author" content="webschooltoday.com">
    <title>Working with CSS Display Property - WebSchool Today</title>
    <meta name="description" content="Working with CSS Display Property" />
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">Working with CSS Display Property</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des-css.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="style_visibility.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="style_visual-formatting.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>CSS <span>Display</span></h1>
                <p class="summary">The display property controls the box's type generated by an element.</p>
                <h2>CSS Display Property</h2>
                <p class="space">The CSS specification defines the default display value for all the elements, e.g. the <a href="../info-html/html-div-tag.php"><code>&lt;div&gt;</code></a> element is <em>rendered as block</em>, while the <a href="../info-html/html-span-tag.php"><code>&lt;span&gt;</code></a> element is <em>displayed inline</em>.</p>
                <h2>Changing the Default Display Value</h2>
                <p>Overriding the default display value of an element is an important implication of the <code>display</code> property. For example, changing an inline-level element to be displayed as block-level element or changing the block-level element to be displayed as an inline-level element.</p>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#fad28c"
>
                            <p><strong>Read Carefully:</strong> The CSS <code>display</code> property is one of the most powerful and useful properties in all the CSS. It can be very useful for creating web pages that looks in a different way, but still follow the web standards.</p>
                        </div>
                    </div>
                </div>
                <p class="space">The following section describes you the most commonly used CSS display values.</p>
                <h2>Display Block</h2>
                <p>The <code>block</code> value of the <code>display</code> property forces an element to behave like <a href="style_visual-formatting.php#block-level">block-level</a> element, like a <a href="../info-html/html-div-tag.php"><code>&lt;div&gt;</code></a> or <a href="../info-html/html-p-tag.php"><code>&lt;p&gt;</code></a> element. The style rules in the following example displays the <a href="../info-html/html-span-tag.php"><code>&lt;span&gt;</code></a> and <a href="../info-html/html-a-tag.php"><code>&lt;a&gt;</code></a> elements as block-level elements:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab7923.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

span {
    display: block;
}
a {
    display: block;
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
                        <div class="note-box"  style="background-color:#fad28c"
>
                            <p><strong>Read Carefully:</strong> Changing the display type of an element only changes the display behavior of an element, NOT the type of element it is. For example, an inline element set to <code>display: block;</code> is not allowed to have a block element nested inside of it.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Display Inline</h2>
                <p>The <code>inline</code> value of the <code>display</code> property causes an element to behave as though it were an <a href="style_visual-formatting.php#inline-level">inline-level</a> element, like a <a href="../info-html/html-span-tag.php"><code>&lt;span&gt;</code></a> or an <a href="../info-html/html-a-tag.php"><code>&lt;a&gt;</code></a> element. The style rules in the following example displays the <a href="../info-html/html-p-tag.php"><code>&lt;p&gt;</code></a> and <a href="../info-html/html-li-tag.php"><code>&lt;li&gt;</code></a> elements as inline-level elements:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab1743.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

p {
    display: inline;
}
ul li {
    display: inline;
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
                <hr />
                <h2>Display Inline-Block</h2>
                <p>The <code>inline-block</code> value of the <code>display</code> property causes an element to generate a block box that will be flowed with surrounding content i.e. in the same line as adjacent content. The following style rules displays the <a href="../info-html/html-div-tag.php"><code>&lt;div&gt;</code></a> and <a href="../info-html/html-span-tag.php"><code>&lt;span&gt;</code></a> elements as inline-block:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab8a1b-2.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

div {
    display: inline-block;
}
span {
    display: inline-block;
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
                <h2>Display None</h2>
                <p>The value <code>none</code> simply causes an element to generate no boxes at all. Child elements do not generate any boxes either, even if their display property is set to something other than none. The document is rendered as though the element did not exist in the document tree.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab0db3.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

h1 {
    display: none;
}
p {
    display: none;
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
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#fad28c"
>
                            <p><strong>Read Carefully:</strong> The value <code>none</code> for the <code>display</code> property does not create an invisible box &mdash; it creates no box at all. See the live demo given inside <a href="style_visibility.php#visibility-vs-display">visibility vs display</a> section.</p>
                        </div>
                    </div>
                </div>
                <div class="bottom-link clearfix">
                    <a href="style_visual-formatting.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="style_visibility.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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