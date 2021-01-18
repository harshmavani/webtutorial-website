<!DOCTYPE html>
	<html lang="en">
	<head>
	<meta name="description" content="Bootstrap 4 Typography and Text Formatting">
	  <meta name="keywords" content="Bootstrap,Bootstrap4,Bootstrap 4 Typography and Text Formatting,Typography and Text Formatting">
	  <meta name="author" content="webschooltoday.com">
    <title>Bootstrap-4 Typography and Text Formatting - WebSchool Today</title>
    <?php include "../links.php" ?>
</head>
<body>
<div>
<div class="tital">Bootstrap 4 Typography and Text Formatting</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des_bootstrap.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
             </div>
             <a href="bt_tables.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i>
</a>
                <a href="bt_responsive-layout.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i>
</a>

                <h1>Bootstrap <span>Typography</span></h1>
                <p class="summary">In this tutorial you will learn about the styling and formatting of text content like headings, paragraphs, blockquotes, etc. with Bootstrap.</p>
                <h2>Working with Headings</h2>
                <p>You can define all <a href="../des-html/ht_headings.php">HTML headings</a>, <code>&lt;h1&gt;</code> through <code>&lt;h6&gt;</code> &mdash; In the same way you define in simple HTML document. You can also utilize the heading classes <code>.h1</code> through <code>.h6</code> on other elements, if you want to apply the style on element's text same as headings.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabcae7.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<h1>h1. Bootstrap heading</h1>
<h2>h2. Bootstrap heading</h2>
<h3>h3. Bootstrap heading</h3>
<h4>h4. Bootstrap heading</h4>
<h5>h5. Bootstrap heading</h5>
<h6>h6. Bootstrap heading</h6>

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

                <hr />
                <h2>Customizing Headings</h2>
                <p>Additionally, you can use the <a href="../info-html/ht_small-tag.php"><code>&lt;small&gt;</code></a> tag with <code>.text-muted</code> class to display the secondary text of any heading in a smaller and lighter variation. Here's an example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab4bbb.php" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

<h2>
    Fancy display heading
    <small class="text-muted">With faded secondary text</small>
</h2>

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
                <h2>Display Headings</h2>
                <p>Bootstrap 4 introduces display headings that can be used when you need a heading to stand out. Display headings are displayed in larger <a href="../info-css/style_font-size-property.php"><code>font-size</code></a> but lighter <a href="../info-css/style_font-weight-property.php"><code>font-weight</code></a>.</p>
                <p>Four different display headings are available. Here's is an example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab594e.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">
		
        <h1 class="display-1">Display Heading 1</h1>
        <h1 class="display-2">Display Heading 2</h1>
        <h1 class="display-3">Display Heading 3</h1>
        <h1 class="display-4">Display Heading 4</h1>
        
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
                <h2>Working with Paragraphs</h2>
                <p>Bootstrap's global default <a href="../info-css/style_font-size-property.php"><code>font-size</code></a> is <b>1rem</b> (typically 16px), with a <a href="../info-css/style_line-height-property.php"><code>line-height</code></a> of <b>1.5</b>. This is applied to the <a href="../info-html/ht_body-tag.php"><code>&lt;body&gt;</code></a> and all paragraphs. In addition to that a bottom margin of half their <code>line-height</code> (10px by default) is applied to the all paragraphs i.e. the <a href="../info-html/ht_p-tag.php"><code>&lt;p&gt;</code></a> elements.</p>
                <p>You can also make a paragraph stand out by adding the class <code>.lead</code> on it.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab9618.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

<p>This is how a normal paragraph looks like in Bootstrap.</p>
<p class="lead">This is how a paragraph stands out in Bootstrap.</p>

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
				<div class="color-box break">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box" style="background-color:#fad28c">
                            <p><strong>Important:</strong> In CSS <code>rem</code> stands for "root em". 1rem is equal to the font size of the root element (i.e. the <a href="../info-html/ht_html-tag.php"><code>&lt;html&gt;</code></a> element), which is 16px in most browsers by default.</p>
                        </div>
                    </div>
                </div>
                <p>You can easily align text left, right, and center inside a paragraph using the text alignment classes.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabe61f.php" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

<p class="text-left">Left aligned text.</p>
<p class="text-center">Center aligned text.</p>
<p class="text-right">Right aligned text.</p>
<p class="text-justify">Justified text.</p>

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
                <p>You can also align text based on screen size using the responsive text alignment classes. These classes use the same viewport width breakpoints as the grid system.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabffbe.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code6">

<p class="text-sm-left">Text aligned to left on small or wider viewports.</p>
<p class="text-md-left">Text aligned to left on medium or wider viewports.</p>
<p class="text-lg-left">Text aligned to left on large or wider viewports.</p>
<p class="text-xl-left">Text aligned to left on extra-large or wider viewports.</p>


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
                <hr />
                <h2>Text Formatting</h2>
                <p>You are free to use text formatting tags like <a href="../info-html/ht_strong-tag.php"><code>&lt;strong&gt;</code></a>, <a href="../info-html/ht_i-tag.php"><code>&lt;i&gt;</code></a>, <a href="../info-html/ht_small-tag.php"><code>&lt;small&gt;</code></a> to make your text bold, italic, small and so on, in the same way you do in simple HTML.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabf891.php" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code7">

<p><b>This is bold text</b></p>
<p><code>This is computer code</code></p>
<p><em>This is emphasized text</em></p>
<p><i>This is italic text</i></p>
<p><mark>This is highlighted text</mark></p>
<p><small>This is small text</small></p>
<p><strong>This is strongly emphasized text</strong></p>
<p>This is <sub>subscript</sub> and <sup>superscript</sup></p>
<p><ins>This text is inserted to the document</ins></p>
<p><del>This text is deleted from the document</del></p>


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
                <hr />
				<h2>Text Transformation</h2>
                <p>You can also transform the text to lowercase, uppercase or make them capitalize.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab79f2.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code8">

<p class="text-lowercase">The quick brown fox jumps over the lazy dog.</p>
<p class="text-uppercase">The quick brown fox jumps over the lazy dog.</p>
<p class="text-capitalize">The quick brown fox jumps over the lazy dog.</p>


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
                <hr />
                <h2 id="contextual-color-classes">Text Coloring</h2>
                <p>Colors are the powerful method of conveying important information in website design.</p>
                <p>Bootstrap has handful of emphasis utility classes that can be used for this purpose such as showing success message in green color, warning or error message in red color, etc.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab8230.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code9">

<p class="text-primary">Primary: Please read the instructions carefully before proceeding.</p>
<p class="text-secondary">Secondary: This is featured has been removed from the latest version.</p>
<p class="text-success">Success: Your message has been sent successfully.</p>
<p class="text-info">Info: You must agree with the terms and conditions to complete the sign up process.</p>
<p class="text-warning">Warning: There was a problem with your network connection.</p>
<p class="text-danger">Danger: An error has been occurred while submitting your data.</p>
<p class="text-muted">Muted: This paragraph of text is grayed out.</p>


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
                <p>Please, check out the <a href="bt_helper-classes.php">Bootstrap helper classes</a> chapter to learn about other text coloring and background coloring classes, as well as various other utility classes.</p>
                <hr />
                <h2>Styling Blockquotes</h2>
                <p>You can also give pretty look to your blockquotes &mdash; Just define the blockquotes using the standard <a href="../info-html/ht_blockquote-tag.php"><code>&lt;blockquote&gt;</code></a> element and bootstrap's style sheet will do the rest.</p>
                <p>Moreover, for identifying the source you can add a <a href="../info-html/htl_footer-tag.php"><code>&lt;footer&gt;</code></a> element with class <code>.blockquote-footer</code>, and wrap the name of the source work in <a href="../info-html/ht_cite-tag.php"><code>&lt;cite&gt;</code></a>, like this:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab3310.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code10">

<blockquote class="blockquote">
    <p class="mb-0">The world is a dangerous place to live; not because of the people who are evil, but because of the people who don't do anything about it.</p>
    <footer class="blockquote-footer">by <cite>Albert Einstein</cite></footer>
</blockquote>


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
                <p>You can also align blockquotes to right or center by simply applying the text alignment classes <code>.text-right</code> or <code>.text-center</code> on the <code>&lt;blockquote&gt;</code> element.</p>
                <div class="bottom-link clearfix">
                    <a href="bt_responsive-layout.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i>
Previous</a>
                    <a href="bt_tables.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
</a>
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