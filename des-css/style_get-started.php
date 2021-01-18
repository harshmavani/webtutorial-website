<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="keywords" content="css,css3,Include CSS in HTML Pages">
	  <meta name="author" content="webschooltoday.com">
    <title>How to Include CSS in HTML Pages - WebSchool Today</title>
    <meta name="description" content="In this tutorial you will learn various techniques of including CSS into an HTML document like inline and embedded styles, linking external style sheets, etc." />
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">How to Include CSS in HTML Pages</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des-css.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="style_syntax.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

				<a href="index.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>CSS <span>Getting Started</span></h1>
                <p class="summary">A CSS file is simply a plain text file saved with the .css extension.</p>
				<h2>Getting Started with CSS</h2>
				<p>In this tutorial you'll learn how easy it is to add style and formatting information to the web pages using CSS. But, before we begin, make sure that you have some working knowledge of HTML.</p>
				<p>If you're just starting out in the world of web development, <a href="../des-html/index.php">start learning from here &raquo;</a></p>
				<p class="space">Without further ado, let's get started with the Cascading Style Sheets (CSS).</p>
                <h2>Including CSS in HTML Documents</h2>
                <p>CSS can either be attached as a separate document or embedded in the HTML document itself. There are three methods of including CSS in an HTML document:</p>
                <ul>
                    <li><strong>Inline styles</strong> &mdash; Using the <code>style</code> attribute in the HTML start tag.</li>
                    <li><strong>Embedded styles</strong> &mdash; Using the <a href="../info-html/html-style-tag.php"><code>&lt;style&gt;</code></a> element in the head section of a document.</li>
                    <li><strong>External style sheets</strong> &mdash; Using the <a href="../info-html/html-link-tag.php"><code>&lt;link&gt;</code></a> element, pointing to an external CSS file.</li>
                </ul>
                <p>In this tutorial we will cover all these three methods for inserting CSS one by one.</p>
                <div class="color-box space">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> The inline styles have the highest priority, and the external style sheets have the lowest. It means if you specify styles for an element in both <em>embedded</em> and <em>external</em> style sheets, the conflicting style rules in the embedded style sheet would override the external style sheet.</p>
                        </div>
                    </div>
                </div>
                <h2 id="inline-styles">Inline Styles</h2>
                <p>Inline styles are used to apply the unique style rules to an element by putting the CSS rules directly into the start tag. It can be attached to an element using the <code>style</code> attribute.</p>
                <p>The <code>style</code> attribute includes a series of CSS property and value pairs. Each <code>"property: value"</code> pair is separated by a semicolon (<code>;</code>), just as you would write into an embedded or external style sheets. But it needs to be all in one line i.e. no line break after the semicolon, as shown here:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab4660.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<h1 style="color:red; font-size:30px;">This is a heading</h1>
<p style="color:green; font-size:22px;">This is a paragraph.</p>
<div style="color:blue; font-size:14px;">This is some text content.</div>

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
                <p>Using the inline styles are generally considered as a bad practice. As style rules are embedded directly inside the HTML tag, it causes the presentation to become mixed with the content of the document; which makes the code hard to maintain and negates the purpose of using CSS.</p>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> It's become impossible to style <a href="style_pseudo-elements.php">pseudo-elements</a> and <a href="style_pseudo-classes.php">pseudo-classes</a> with inline styles. You should, therefore, avoid the use of style attributes in your code. Using <a href="#external-style-sheet">external style sheets</a> is the preferred way to add styles to the HTML documents.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2 id="embedded-style-sheet">Embedded Style Sheets</h2>
                <p>Embedded or internal style sheets only affect the document they are embedded in.</p>
                <p>Embedded style sheets are defined in the <a href="../des-html/html-head.php"><code>&lt;head&gt;</code></a> section of an HTML document using the <a href="../info-html/html-style-tag.php"><code>&lt;style&gt;</code></a> element. You can define any number of <code>&lt;style&gt;</code> elements in an HTML document but they must appear between the <code>&lt;head&gt;</code> and <code>&lt;/head&gt;</code> tags. Let's take a look at an example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabfa0b.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

<!DOCTYPE html>
<html lang="en">
<head>
    <title>My HTML Document</title>
    <style>
        body { background-color: YellowGreen; }
        p { color: #fff; }
    </style>
</head>
<body>
    <h1>This is a heading</h1>
    <p>This is a paragraph of text.</p>
</body>
</html>

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
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"  style="background-color:#fad28c">
                            <p><strong>Important:</strong> The <code>type</code> attribute of the <code>&lt;style&gt;</code> and <code>&lt;link&gt;</code> tag (i.e. <code>type="text/css"</code>) defines the language of the style sheet. This attribute is purely informative. You can omit this since CSS is the standard and default style sheet language in HTML5.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2 id="external-style-sheet">External Style Sheets</h2>
                <p>An external style sheet is ideal when the style is applied to many pages of the website.</p>
                <p>An external style sheet holds all the style rules in a separate document that you can link from any HTML file on your site. External style sheets are the most flexible because with an external style sheet, you can change the look of an entire website by changing just one file.</p>
                <p>You can attach external style sheets in two ways &mdash; <em>linking</em> and <em>importing</em>.</p>
                <h3>Linking External Style Sheets</h3>
				<p>Before linking, we need to create a style sheet first. Let's open your favorite code editor and create a new file. Now type the following CSS code inside this file and save it as "style.css".</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="javascript:void(0);" class="try-btn disabled" title="Disabled">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

body {
    background: lightyellow;
    font: 18px Arial, sans-serif;
}
h1 {
    color: orange;
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
                <p>An external style sheet can be linked to an HTML document using the <a href="../info-html/html-link-tag.php"><code>&lt;link&gt;</code></a> tag. The <code>&lt;link&gt;</code> tag goes inside the <a href="../info-html/html-head-tag.php"><code>&lt;head&gt;</code></a> section, as you can see in the following example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabfe27.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

<!DOCTYPE html>
<html lang="en">
<head>
    <title>My HTML Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>This is a heading</h1>
    <p>This is a paragraph of text.</p>
</body>
</html>

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
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"  style="background-color:#fad28c">
                            <p><strong>Important:</strong> Among all the three methods, using external style sheet is the best method for defining and applying styles to the HTML documents. As you can clearly see with external style sheets, the affected HTML file require minimal changes in the markup.</p>
                        </div>
                    </div>
                </div>
                <h3>Importing External Style Sheets</h3>
                <p>The <code>@import</code> rule is another way of loading an external style sheet. The <code>@import</code> statement instructs the browser to load an external style sheet and use its styles.</p>
                <p>You can use it in two ways. The simplest is within the header of your document. Note that, other CSS rules may still be included in the <a href="../info-html/html-style-tag.php"><code>&lt;style&gt;</code></a> element. Here's an example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab9cb9.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

<style>
    @import url("css/style.css");
    p {
        color: blue;
        font-size: 16px;
    }
</style>

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
                <p>Similarly, you can use the <code>@import</code> rule to import a style sheet within another style sheet.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab117a.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code6">

@import url("css/layout.css");
@import url("css/color.css");
body {
    color: blue;
    font-size: 14px;
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
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> All <a href="../info-css/style_import-rule.php"><code>@import</code></a> rules must occur at the start of the style sheet. Any style rule defined in the style sheet itself override the conflicting rules in the imported style sheets. However, importing a style sheet within another style sheet is not recommended due to performance issue.</p>
                        </div>
                    </div>
                </div>
                <div class="bottom-link clearfix">
                    <a href="index.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="style_syntax.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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