
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="HTML Paragraphs and Line Breaks">
	  <meta name="keywords" content="css,css3,HTML Paragraphs and Line Breaks">
	  <meta name="author" content="webschooltoday.com">
    <title>HTML Paragraphs and Line Breaks - WebSchool Today</title>
    <meta name="description" content="HTML paragraph is one of the basic building blocks of web pages. The &lt;p&gt; element is used to define paragraph in HTML." />
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">HTML Paragraphs and Line Breaks</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="ht_links.html" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="ht_headings.html" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>HTML <span>Paragraphs</span></h1>
                <p class="summary">In this tutorial you will learn how to create paragraphs in HTML.</p>
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
                <h2>Creating Paragraphs</h2>
                <p>Paragraph element is used to publish text on the web pages.</p>
                <p>Paragraphs are defined with the <code>&lt;p&gt;</code> tag. Paragraph tag is a very basic and typically the first tag you will need to publish your text on the web pages. Here's an example:</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabf37e.html?topic=html&amp;file=paragraphs" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

                        <p>This is a paragraph.</p>
<p>This is another paragraph.</p>
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
                <!--Note box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> Browsers built-in style sheets automatically create some space above and below the content of a paragraph (called <a href="../info-css/css-margin-property.html">margin</a>), but you can override it using CSS.</p>
                        </div>
                    </div>
                </div>
                <!--End:Note box-->
                <hr />
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
                <h2>Closing a Paragraph Element</h2>
                <p>In HTML 4 and earlier versions, it was enough to initiate a new paragraph using the opening tag. Most browsers will display HTML correctly even if you forget the end tag. For example:</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabc741.html?topic=html&amp;file=paragraphs-without-end-tags" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">
                        <p>This is a paragraph.
<p>This is another paragraph.
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
                <p>The HTML code in the example above will work in most of the web browsers, but don't rely on it. Forgetting the end tag can produce unexpected results or errors.</p>
                <!--Note box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> For the purposes of forwards-compatibility and good coding practice, it's advisable to use both the opening and closing tags for the paragraphs.</p>
                        </div>
                    </div>
                </div>
                <!--End:Note box-->
                <hr />
                <h2>Creating Line Breaks</h2>
                <p>The <code>&lt;br&gt;</code> tag is used to insert a line break on the web page.</p>
                <p>Since the <code>&lt;br&gt;</code> is an <a href="ht_elements.html#empty-elements">empty element</a>, so there is no need of corresponding <code>&lt;/br&gt;</code> tag.</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabe374.html?topic=html&amp;file=insert-line-breaks" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">
                        <p>This is a paragraph <br> with line break.</p>
<p>This is <br>another paragraph <br> with line breaks.</p>
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
                <!--Note box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> Don't use the empty paragraph i.e. <code>&lt;p&gt;&lt;/p&gt;</code> to add extra space in your web pages. The browser may ignore the empty paragraphs since it is logical tag. Use the CSS <code><a href="../info-css/css-margin-property.html">margin</a></code> property instead to adjust the space around the elements.</p>
                        </div>
                    </div>
                </div>
                <!--End:Note box-->
                <hr />
                <h2>Creating Horizontal Rules</h2>
                <p>You can use the <code>&lt;hr&gt;</code> tag to create horizontal rules or lines to visually separate content sections on a web page. Like <code>&lt;br&gt;</code>, the <code>&lt;hr&gt;</code> tag is also an empty element. Here's an example:</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab53cc.html?topic=html&amp;file=create-horizontal-lines" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

                        <p>This is a paragraph.</p>
<hr>
<p>This is another paragraph.</p>
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
                <hr />
                <h2>Managing White Spaces</h2>
                <p>Normally the browser will display the multiple spaces created inside the HTML code by pressing the <em>space-bar key</em> or <em>tab key</em> on the keyboard as a single space. Multiple line breaks created inside the HTML code through pressing the enter key is also displayed as a single space.</p>
                <p>The following paragraphs will be displayed in a single line without any extra space:</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                            <div class="my_codeb-title"><h4>Example</h4><a href="../codelabd058.html?topic=html&amp;file=paragraph-with-multiple-spaces-and-line-breaks" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                            <textarea id="code5">

                            <p>This paragraph contains  multiple   spaces    in the source code.</p>
<p>
    This paragraph
    contains multiple tabs and line breaks
    in the source code.
</p>
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
                <p>Insert <code>&amp;nbsp;</code> for creating extra consecutive spaces, while insert <code>&lt;br&gt;</code> tag for creating line breaks on your web pages, as demonstrated in the following example:</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                            <div class="my_codeb-title"><h4>Example</h4><a href="../codelabe538-2.html?topic=html&amp;file=preserving-white-space" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                            <textarea id="code6">

                            <p>This paragraph has multiple&nbsp;&nbsp;&nbsp;spaces.</p>
<p>This paragraph has multiple<br><br>line<br><br><br>breaks.</p>
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
				<hr />
				<h2>Defining Preformatted Text</h2>
                <p>Sometimes, using <code>&amp;nbsp;</code>, <code>&lt;br&gt;</code>, etc. for managing spaces isn't very convenient. Alternatively, you can use the <code>&lt;pre&gt;</code> tag to display spaces, tabs, line breaks, etc. exactly as written in the HTML file. It is very helpful in presenting text where spaces and line breaks are important like poem or code.</p>
                <p>The following example will display the text in the browser as it is in the source code:</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabee0c.html?topic=html&amp;file=preformatted-text" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code7">

                        <pre>
    Twinkle, twinkle, little star, 
    How I wonder what you are! 
    Up above the world so high, 
    Like a diamond in the sky.
</pre>
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
                <!--Tip Box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"  style="background-color:#fad28c"
>
                            <p><strong>Important:</strong> Text within the <code>&lt;pre&gt;</code> element is typically rendered by the browsers in a monospace or fixed-width font, such as Courier, but you can override this using the CSS <a href="../info-css/css-font-property.html"><code>font</code></a> property.</p>
                        </div>
                    </div>
                </div>
                <!--End:Tip Box-->
                <!--Bottom Navigation-->
                <div class="bottom-link clearfix">
                    <a href="ht_headings.html" class="previous-page-bottom"><i class="fa fa-arrow-right" aria-hidden="true"></i> Previous</a>
                    <a href="ht_links.html" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
 Page</a>
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