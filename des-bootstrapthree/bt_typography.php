<!DOCTYPE html>
	<html lang="en">
	<head>
    <meta name="description" content="Learn how to style text contents of your web pages using Bootstrap inbuilt text formatting classes like highlighting, aligning text left, right and center, etc." />
	  <meta name="keywords" content="Bootstrap,Bootstrap3,Typography and Text Formatting">
	  <meta name="author" content="webschooltoday.com">
    <title>Bootstrap 3 Typography and Text Formatting - WebSchool Today</title>
    <?php include "../links.php" ?>
</head>
<body>
<div>
<div class="tital">Bootstrap 3 Typography and Text Formatting</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des_bootstap3.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
              </div>
              <a href="bp_tables.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-left" aria-hidden="true"></i>
</a>
                <a href="bp_responsive-layout.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i>
</a>

                <h1>Bootstrap <span>Typography</span></h1>
                <p class="summary">In this tutorial you will learn about the styling and formatting of text content like headings, paragraphs, blockquotes, etc. with Bootstrap.</p>
                <h2>Working with Headings</h2>
                <p>You can define all <a href="../des-html/ht_headings.php">HTML headings</a>, <code>&lt;h1&gt;</code> through <code>&lt;h6&gt;</code> &mdash; In the same way you define in simple HTML document. You can also utilize the heading classes <code>.h1</code> through <code>.h6</code> on other elements, if you want to apply the style on element's text same as headings.</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab91d7.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
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
                <p>Moreover you can use the <code><a href="../info-html/ht_small-tag.php">&lt;small&gt;</a></code> tag or <code><a href="../info-html/ht_span-tag.php">&lt;span&gt;</a></code> tag with <code>.small</code> class to display the secondary text of any heading in a smaller and lighter variation.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab9b64.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

<h1>h1. Bootstrap heading <small>Secondary text</small></h1>
<h2>h2. Bootstrap heading <small>Secondary text</small></h2>
<h3>h3. Bootstrap heading <small>Secondary text</small></h3>
<h4>h4. Bootstrap heading <small>Secondary text</small></h4>
<h5>h5. Bootstrap heading <small>Secondary text</small></h5>
<h6>h6. Bootstrap heading <small>Secondary text</small></h6>

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
                <h2>Creating Page Headers</h2>
                <p>You can make your <code>&lt;h1&gt;</code> heading appear differently than rest of the headings on a page using the page header component. You can also utilize <code>&lt;small&gt;</code> tag to mark header subtext.</p>
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelabf6a5.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

<div class="page-header">
    <h1>Bootstrap <small>An intuitive front-end framework</small></h1>
</div>

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
                <p>Bootstrap's global default <code><a href="../info-css/style_font-size-property.php">font-size</a></code> is <b>14px</b>, with a <code><a href="../info-css/style_line-height-property.php">line-height</a></code> of <b>1.428</b>. This is applied to the <code><a href="../info-html/ht_body-tag.php">&lt;body&gt;</a></code> and all paragraphs. In addition to that a bottom margin of half their <code>line-height</code> (10px by default) is applied to the all paragraphs i.e. the <code><a href="../info-html/ht_p-tag.php">&lt;p&gt;</a></code> elements.</p>
                <p>You can also make a paragraph stand out by just adding the class <code>.lead</code>.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab7fe3.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
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

				<p>You can easily align text inside a paragraph and other elements using text alignment classes.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab7c34.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

<p>This is how a normal paragraph looks like in Bootstrap.</p>
<p class="lead">This is how a paragraph stands out in Bootstrap.</p>

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
                <hr />
                <h2>Bootstrap Text Formatting</h2>
                <p>You are free to use text formatting tags like <code><a href="../info-html/ht_strong-tag.php">&lt;strong&gt;</a></code>, <code><a href="../info-html/ht_i-tag.php">&lt;i&gt;</a></code>, <code><a href="../info-html/ht_small-tag.php">&lt;small&gt;</a></code> to make your text bold, italic, small and so on, in the same way you do in simple HTML.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab253d.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code6">

<p><b>This is bold text</b></p>
<p><big>This is big text</big></p>
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
				<h2>Text Transformation Classes</h2>
                <p>You can also transform the text to lowercase, uppercase or make them capitalize.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab99e4.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code7">

<p class="text-lowercase">The quick brown fox jumps over the lazy dog.</p>
<p class="text-uppercase">The quick brown fox jumps over the lazy dog.</p>
<p class="text-capitalize">The quick brown fox jumps over the lazy dog.</p>

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
                <h2 id="contextual-color-classes">Text Emphasis Classes</h2>
                <p>Colors are the powerful method of conveying important information in website design.</p>
                <p>Bootstrap has handful of emphasis utility classes that can be used for this purpose such as showing success message in green color, warning or error message in red color, etc.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab37b4.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code8">

<p class="text-muted">Muted: This text is grayed out.</p>
<p class="text-primary">Important: Please read the instructions carefully before proceeding.</p>
<p class="text-success">Success: Your message has been sent successfully.</p>
<p class="text-info">Note: You must agree with the terms and conditions to complete the sign up process.</p>
<p class="text-warning">Warning: There was a problem with your network connection.</p>
<p class="text-danger">Error: An error has been occurred while submitting your data.</p>

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
                <h2>Styling Blockquotes</h2>
                <p>You can also give pretty look to your blockquotes &mdash; Just define the blockquotes using the standard <code><a href="../info-html/ht_blockquote-tag.php">&lt;blockquote&gt;</a></code> element and bootstrap's style sheet will do the rest.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelaba634.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code9">

<blockquote>
     <p>The world is a dangerous place to live; not because of the people who are evil, but because of the people who don't do anything about it.</p>
     <small>by <cite>Albert Einstein</cite></small>
</blockquote>

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
                <p>Alternatively, you can right-align the blockquote through floating it to right by simply applying the class <code>.pull-right</code> on the <code>&lt;blockquote&gt;</code> element.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab76eb.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code10">

<blockquote class="pull-right">
     <p>The world is a dangerous place to live; not because of the people who are evil, but because of the people who don't do anything about it.</p>
     <small>by <cite>Albert Einstein</cite></small>
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
                <div class="bottom-link clearfix">
                    <a href="bp_responsive-layout.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i>
 Previous</a>
                    <a href="bp_tables.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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