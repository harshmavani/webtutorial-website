
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="How to Add Style Sheets to HTML Pages">
	  <meta name="keywords" content="css,css3,How to Add Style Sheets to HTML Pages">
	  <meta name="author" content="webschooltoday.com">
    <title>How to Add Style Sheets to HTML Pages - WebSchool Today</title>
    <meta name="description" content="There are various methods for adding style information to an HTML element such as inline styles using style attribute, embedded styles using style tag and external style sheet using link tag." />
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">How to Add Style Sheets to HTML Pages</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    <script type="text/javascript">
	atOptions = {
		'key' : '9049f2d3c3d0cdd985d2d490bad266d3',
		'format' : 'iframe',
		'height' : 50,
		'width' : 320,
		'params' : {}
	};
	document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.displaycontentnetwork.com/9049f2d3c3d0cdd985d2d490bad266d3/invoke.js"></scr' + 'ipt>');
</script>
</div>
<a href="ht_images.html" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="ht_text-formatting.html" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <!--ads-->
                <div>
                    <script type="text/javascript">
	atOptions = {
		'key' : '25484e9e29be3f9c30cd9a00ccde11ec',
		'format' : 'iframe',
		'height' : 250,
		'width' : 300,
		'params' : {}
	};
	document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.displaycontentnetwork.com/25484e9e29be3f9c30cd9a00ccde11ec/invoke.js"></scr' + 'ipt>');
</script>
                </div>
                <!--ads close-->
                
                <h1>HTML <span>Styles</span></h1>
                <p class="summary">In this tutorial you will learn how to apply style rules to HTML elements.</p>
                <h2>Styling HTML Elements</h2>
                <p>HTML is quite limited when it comes to the presentation of a web page. It was originally designed as a simple way of presenting information. <a href="../des-css/index.html">CSS (Cascading Style Sheets)</a> was introduced in December 1996 by the <a href="https://en.wikipedia.org/wiki/World_Wide_Web_Consortium" rel="nofollow" target="_blank">World Wide Web Consortium (W3C)</a> to provide a better way to style HTML elements.</p>
                <p class="space">With CSS, it becomes very easy to specify the things like, size and typeface for the fonts, colors for the text and backgrounds, alignment of the text and images, amount of space between the elements, border and outlines for the elements, and lots of other styling properties.</p>
                <h2>Adding Styles to HTML Elements</h2>
                <p>Style information can either be attached as a separate document or embedded in the HTML document itself. These are the three methods of implementing styling information to an HTML document.</p>
                <ul>
                    <li><strong>Inline styles</strong> &mdash; Using the <code>style</code> attribute in the HTML start tag.</li>
                    <li><strong>Embedded style</strong> &mdash; Using the <a href="../info-html/ht_style-tag.html"><code>&lt;style&gt;</code></a> element in the head section of the document.</li>
                    <li><strong>External style sheet</strong> &mdash; Using the <a href="../info-html/ht_link-tag.html"><code>&lt;link&gt;</code></a> element, pointing to an external CSS files.</li>
                </ul>
                <p>In this tutorial we will cover all these different types of style sheet one by one.</p>
                <!--Note box-->
                <div class="color-box space">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> The inline styles have the highest priority, and the external style sheets have the lowest. It means if you specify styles for your paragraphs in both <em>embedded</em> and <em>external</em> style sheets, the conflicting style rules in the embedded style sheet would override the external style sheet.</p>
                        </div>
                    </div>
                </div>
                <!--End:Note box-->
                <!--ads-->
                <div>
                    <script type="text/javascript">
	atOptions = {
		'key' : '25484e9e29be3f9c30cd9a00ccde11ec',
		'format' : 'iframe',
		'height' : 250,
		'width' : 300,
		'params' : {}
	};
	document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.displaycontentnetwork.com/25484e9e29be3f9c30cd9a00ccde11ec/invoke.js"></scr' + 'ipt>');
</script>
                </div>
                <!--ads close-->
                <h2 id="inline-styles">Inline Styles</h2>
                <p>Inline styles are used to apply the unique style rules to an element, by putting the CSS rules directly into the start tag. It can be attached to an element using the <code>style</code> attribute.</p>
                <p>The style attribute includes a series of CSS property and value pairs. Each <code>property: value</code> pair is separated by a semicolon (<code>;</code>), just as you would write into an embedded or external style sheet. But it needs to be all in one line i.e. no line break after the semicolon.</p>
                <p>The following example demonstrates how to set the <a href="../info-css/css-color-property.html"><code>color</code></a> and <a href="../info-css/css-font-size-property.html"><code>font-size</code></a> of the text:</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab5370.html?topic=html&amp;file=inline-styles" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

                        <h1 style="color:red; font-size:30px;">This is a heading</h1>
<p style="color:green; font-size:18px;">This is a paragraph.</p>
<div style="color:green; font-size:18px;">This is some text.</div>
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
                <p>Using the inline styles are generally considered as a bad practice. Because style rules are embedded directly inside the html tag, it causes the presentation to become mixed with the content of the document, which makes updating or maintaining a website very difficult.</p>
                <p>To learn about the various CSS properties in detail, please check out <a href="../des-css/index.html">CSS tutorial</a> section.</p>
                <!--Note box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> It's become impossible to style <a href="../des-css/css-pseudo-elements.html">pseudo-elements</a> and <a href="../des-css/css-pseudo-classes.html">pseudo-classes</a> with inline styles. You should, therefore, avoid the use of <code>style</code> attributes in your markup. Using <a href="#external-style-sheet">external style sheet</a> is the preferred way to add style information to an HTML document.</p>
                        </div>
                    </div>
                </div>
                <!--End:Note box-->
                <hr />
                <h2 id="embedded-style-sheet">Embedded Style Sheets</h2>
                <p>Embedded or internal style sheets only affect the document they are embedded in.</p>
                <p>Embedded style sheets are defined in the <a href="ht_head.html"><code>&lt;head&gt;</code></a> section of an HTML document using the <code>&lt;style&gt;</code> tag. You can define any number of <code>&lt;style&gt;</code> elements inside the <code>&lt;head&gt;</code> section.</p>
                <p>The following example demonstrates how style rules are embedded inside a web page.</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab3abf.html?topic=html&amp;file=embedded-style-sheet" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

                        <head>
    <style>
        body { background-color: YellowGreen; }
		h1 { color: blue; }
        p { color: red; }
    </style>
</head>
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
                <h2 id="external-style-sheet">External Style Sheets</h2>
                <p>An external style sheet is ideal when the style is applied to many pages.</p>
                <p>An external style sheet holds all the style rules in a separate document that you can link from any HTML document on your site. External style sheets are the most flexible because with an external style sheet, you can change the look of an entire website by updating just one file.</p>
                <p class="space">You can attach external style sheets in two ways &mdash; <em>linking</em> and <em>importing</em>:</p>
                <h2>Linking External Style Sheets</h2>
                <p>An external style sheet can be linked to an HTML document using the <a href="../info-html/ht_link-tag.html"><code>&lt;link&gt;</code></a> tag.</p>
                <p>The <code>&lt;link&gt;</code> tag goes inside the <a href="../info-html/ht_head-tag.html"><code>&lt;head&gt;</code></a> section, as shown here:</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab27b7.html?topic=html&amp;file=linking-external-style-sheet" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

                        <head>
    <link rel="stylesheet" href="css/style.css">
</head>
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
                <h2>Importing External Style Sheets</h2>
                <p>The <code>@import</code> rule is another way of loading an external style sheet. The <code>@import</code> statement instructs the browser to load an external style sheet and use its styles.</p>
                <p>You can use it in two ways. The simplest way is to use it within the <a href="../info-html/ht_style-tag.html"><code>&lt;style&gt;</code></a> element in your <code>&lt;head&gt;</code> section. Note that, other CSS rules may still be included in the <code>&lt;style&gt;</code> element.</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab3201.html?topic=html&amp;file=importing-external-style-sheet" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">
                        <style>
    @import url("css/style.css");
    p {
        color: blue;
        font-size: 16px;
    }
</style>
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
                <p>Similarly, you can use the <code>@import</code> rule to import a style sheet within another style sheet.</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab8cc2.html?topic=html&amp;file=css-import-rule" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

                        @import url("css/layout.css");
@import url("css/color.css");
body {
    color: blue;
    font-size: 14px;
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
                <!--Note box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> All <code><a href="../info-css/css-import-rule.html">@import</a></code> rules must occur at the start of the style sheet. Any style rule defined in the style sheet itself override conflicting rule in the imported style sheets. The <code>@import</code> rule may cause performance issues, you should generally avoid importing style sheets.</p>
                        </div>
                    </div>
                </div>
                <!--End:Note box-->
                <!--Bottom Navigation-->
                <div class="bottom-link clearfix">
                    <a href="ht_text-formatting.html" class="previous-page-bottom"><i class="fa fa-arrow-right" aria-hidden="true"></i> Previous</a>
                    <a href="ht_images.html" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
 Page</a>                </div>
            </div>
        </div>        
        <div class="sidebar">
            
        </div>
    </div> 
</div>
	<?php include "../footer.php" ?>

</body>
</html>