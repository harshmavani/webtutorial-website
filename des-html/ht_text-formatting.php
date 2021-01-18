
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="Working with HTML Text Formatting Tags">
	  <meta name="keywords" content="css,css3,Working with HTML Text Formatting Tags">
	  <meta name="author" content="webschooltoday.com">
    <title>Working with HTML Text Formatting Tags - WebSchool Today</title>
    <meta name="description" content="Some time you need to display some worlds appear differently than others. HTML formatting tags can do this by making your text bold, italic, underline, and much more." />
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">Working with HTML Text Formatting Tags</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="ht_styles.html" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="ht_links.html" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>HTML <span>Text Formatting</span></h1>
                <p class="summary">In this tutorial you will learn how to format the text on the web pages using HTML tags.</p>
                <h2>Formatting Text with HTML</h2>
                <p>HTML provides several tags that you can use to make some text on your web pages to appear differently than normal text, for example, you can use the tag <code>&lt;b&gt;</code> to make the text bold, tag <code>&lt;i&gt;</code> to make the text italic, tag <code>&lt;mark&gt;</code> to highlight the text, tag <code>&lt;code&gt;</code> to display a fragment of computer code, tags <code>&lt;ins&gt;</code> and <code>&lt;del&gt;</code> for marking editorial insertions and deletions, and more.</p>
                <p>The following example demonstrates the most commonly used formatting tags in action. Now, let's try this out to understand how these tags basically work:</p>
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
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabbcd9.html?topic=html&amp;file=text-formatting" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

                        <p>This is <b>bold text</b>.</p>
<p>This is <strong>strongly important text</strong>.</p>
<p>This is <i>italic text</i>.</p>
<p>This is <em>emphasized text</em>.</p>
<p>This is <mark>highlighted text</mark>.</p>
<p>This is <code>computer code</code>.</p>
<p>This is <small>smaller text</small>.</p>
<p>This is <sub>subscript</sub> and <sup>superscript</sup> text.</p>
<p>This is <del>deleted text</del>.</p>
<p>This is <ins>inserted text</ins>.</p>
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
                <p>By default, the <code>&lt;strong&gt;</code> tag is typically rendered in the browser as <code>&lt;b&gt;</code>, whereas the <code>&lt;em&gt;</code> tag is rendered as <code>&lt;i&gt;</code>. However, there is a difference in the meaning of these tags.</p>
                <h3>Difference between &lt;strong&gt; and &lt;b&gt; tag</h3>
                <p>Both <code>&lt;strong&gt;</code> and <code>&lt;b&gt;</code> tags render the enclosed text in a bold typeface by default, but the <code>&lt;strong&gt;</code> tag indicates that its contents have strong importance, whereas the <code>&lt;b&gt;</code> tag is simply used to draw the reader's attention without conveying any special importance.</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabe61d.html?topic=html&amp;file=strong-vs-b-tag" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

                        <p><strong>WARNING!</strong> Please proceed with caution.</p>
<p>The concert will be held at <b>Hyde Park</b> in London.</p>
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
                <h3>Difference between &lt;em&gt; and &lt;i&gt; tag</h3>
                <p>Similarly, both <code>&lt;em&gt;</code> and <code>&lt;i&gt;</code> tags render the enclosed text in italic type by default, but the <code>&lt;em&gt;</code> tag indicates that its contents have stressed emphasis compared to surrounding text, whereas the <code>&lt;i&gt;</code> tag is used for marking up text that is set off from the normal text for readability reasons, such as a technical term, an idiomatic phrase from another language, a thought, etc.</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab76fb.html?topic=html&amp;file=em-vs-i-tag" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

                        <p>Cats are <em>cute</em> animals.</p>
<p>The <i>Royal Cruise</i> sailed last night.</p>
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
                            <p><strong>Read Carefully:</strong> Use the <a href="../info-html/ht_em-tag.html"><code>&lt;em&gt;</code></a> and <a href="../info-html/ht_strong-tag.html"><code>&lt;strong&gt;</code></a> tags when the content of your page requires that certain words or phrases should have strong emphasis or importance. Also, in HTML5 the <code>&lt;b&gt;</code> and <code>&lt;i&gt;</code> tags have been redefined, earlier they don't have semantic meaning.</p>
                        </div>
                    </div>
                </div>
                <!--End:Note box-->                
                <hr />
                <h2>Formatting Quotations</h2>    
                <p>You can easily format the quotation blocks from other sources with the HTML <code>&lt;blockquote&gt;</code> tag.</p>
                <p>Blockquotes are generally displayed with indented left and right margins, along with a little extra space added above and below. Let's try an example to see how it works:</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab670b.html?topic=html&amp;file=block-quotations" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

                        <blockquote>
    <p>Learn from yesterday, live for today, hope for tomorrow. The important thing is not to stop questioning.</p>
    <cite>— Albert Einstein</cite>
</blockquote>
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
                <!--Tip Box-->
				<div class="color-box break">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"  style="background-color:#fad28c"
>
                            <p><strong>Important:</strong> The <a href="../info-html/ht_cite-tag.html"><code>cite</code></a> tag is used to describe a reference to a creative work. It must include the title of that work or the name of the author (people or organization) or an URL reference.</p>
                        </div>
                    </div>
                </div>
                <!--End:Tip Box-->
                <p>For short inline quotations, you can use the HTML <code>&lt;q&gt;</code> tag. Most browsers display inline quotes by surrounding the text in quotation marks. Here's an example:</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab4918.html?topic=html&amp;file=inline-quotations" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

                        <p>According to the World Health Organization (WHO): <q>Health is a state of complete physical, mental, and social well-being.</q></p>
     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code5"), {
									mode: "text/html",
									tabMode: "indent",
									styleActiveLine: true,
									lineNumbers: true,
									lineWrapping: true
								});
							</script>                    </div>
                </div>
                <!--End:Code box-->
                <hr />
                <h2>Showing Abbreviations</h2>
                <p>An abbreviation is a shortened form of a word, phrase, or name.</p>
                <p>You can use the <code>&lt;abbr&gt;</code> tag to denote an abbreviation. The <code>title</code> attribute is used inside this tag to provide the full expansion of the abbreviation, which is displayed by the browsers as a tooltip when the mouse cursor is hovered over the element. Let's try out an example:</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabcaf6.html?topic=html&amp;file=showing-abbreviations" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code6">

                        <p>The <abbr title="World Wide Web Consortium">W3C</abbr> is the main international standards organization for the <abbr title="World Wide Web">WWW or W3</abbr>. It was was founded by Tim Berners-Lee.</p>
     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code6"), {
									mode: "text/html",
									tabMode: "indent",
									styleActiveLine: true,
									lineNumbers: true,
									lineWrapping: true
								});
							</script>                    </div>
                </div>
                <!--End:Code box-->
                <hr />
                <h2>Marking Contact Addresses</h2>
                <p>Web pages often include street or postal addresses. HTML provides a special tag <code>&lt;address&gt;</code> to represent contact information (physical and/or digital) for a person, people or organization.</p>
                <p>This tag should ideally used to display contact information related to the document itself, such as article's author. Most browsers display an address block in italic. Here's an example:</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab17b8.html?topic=html&amp;file=formatting-addresses" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code7">

                        <address>
Mozilla Foundation<br>
331 E. Evelyn Avenue<br>
Mountain View, CA 94041, USA
</address>
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
                <p>Please check out the HTML reference section for a complete list of <a href="../info-html/htl_tags.html#formatting-tags">HTML formatting tags</a>.</p>
                <!--Bottom Navigation-->
                <div class="bottom-link clearfix">
                    <a href="ht_links.html" class="previous-page-bottom"><i class="fa fa-arrow-right" aria-hidden="true"></i> Previous</a>
                    <a href="ht_styles.html" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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