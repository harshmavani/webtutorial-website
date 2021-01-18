
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="Importance of Meta Tag for Search Engines">
	  <meta name="keywords" content="css,css3,Importance of Meta Tag for Search Engines">
	  <meta name="author" content="webschooltoday.com">
    <title>Importance of Meta Tag for Search Engines - WebSchool Today</title>

	<style>
    .viewport-demo div{float:left;width:42%;padding:15px 0 25px;text-align:center}
    .viewport-demo a{display:inline-block;color:#333;font-weight:700;font-size:90%}
    .viewport-demo a span{display:block;text-decoration:underline}
	.viewport-demo div:first-child{margin-right:50px}
	@media screen and (max-width: 800px) {
		.viewport-demo div{width:48%}
		.viewport-demo div:last-child{float:right}
		.viewport-demo div:first-child{margin:0}
	}
    </style>
   	<?php include "../links.php" ?>
</head>
<body>
<div>
<div class="tital">Importance of Meta Tag for Search Engines</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="ht_scripts.html" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="ht_head.html" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>HTML <span>Meta</span></h1>
                <p class="summary">In this tutorial you will learn how to use meta tags to provide metadata about a web page.</p>
                <h2>Defining Metadata</h2>
                <p>The <code>&lt;meta&gt;</code> tags are typically used to provide structured metadata such as a document's <em>keywords</em>, <em>description</em>, <em>author name</em>, <em>character encoding</em>, and other metadata. Any number of meta tags can be placed inside the <a href="ht_head.html">head section</a> of an HTML or XHTML document.</p>
                <p class="break">Metadata will not be displayed on the web page, but will be machine parsable, and can be used by the browsers, search engines like Google or other web services.</p>  
                <p>The following section describes the use of meta tags for various purposes.</p>
                <h2>Declaring Character Encoding in HTML</h2>
                <p>Meta tag typically used to declare character encoding inside HTML document.</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab1eb3.html?topic=html&amp;file=meta-character-encoding" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

                        <!DOCTYPE html>
<html lang="en">
<head>
    <title>Declaring Character Encoding</title> 
    <meta charset="utf-8">
</head>
<body>
    <h1>Hello World!</h1>
</body>
</html>
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
                <p>To set the character encoding inside a CSS document, the <a href="../info-css/css-charset-rule.html"><code>@charset</code></a> at-rule is used.</p>
                <!--Note box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> <a href="https://en.wikipedia.org/wiki/UTF-8" rel="nofollow" target="_blank">UTF-8</a> is a very versatile and recommended character encoding to choose. However, if this is not specified, then the default encoding of the platform is used.</p>
                        </div>
                    </div>
                </div>
                <!--End:Note box-->
                <hr />
                <h2>Defining the Author of a Document</h2>  
                <p>You can also use the meta tag to clearly define who is the author or creator of the web page.</p>
                <p>The author can be an individual, the company as a whole or a third party.</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab5515.html?topic=html&amp;file=meta-author-name" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

                        <head>
    <title>Defining Document's Author</title>
    <meta name="author" content="Alexander Howick">
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
                <!--Note box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> The <code>name</code> attribute of the meta tag defines the name of a piece of document-level metadata, while the <code>content</code> attribute gives the corresponding value. The <code>content</code> attribute value may contain text and entities, but it may not contain HTML tags.</p>
                        </div>
                    </div>
                </div>
                <!--End:Note box-->
                <hr />
                <h2>Keywords and Description for Search Engines</h2>
                <p>Some search engines use metadata especially keywords and descriptions to index web pages; however this may not necessarily be true. Keywords giving extra weight to a document's keywords and description provide a short synopsis of the page. Here's an example:</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelaba80b.html?topic=html&amp;file=meta-keywords-and-description" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

                        <head>
    <title>Defining Keywords and Description</title>  
    <meta name="keywords" content="HTML, CSS, javaScript">
    <meta name="description" content="Easy to understand tutorials and references on HTML, CSS, javaScript and more..."> 
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
                <!--Tip Box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"  style="background-color:#fad28c"
>
                            <p><strong>Important:</strong> Search engines will often use the meta description of a page to create short synopsis for the page when it appear in search results. See the <a href="../faq/what-is-the-maximum-length-of-title-and-meta-description-tag.html">guidelines for meta description</a>.</p>
                        </div>
                    </div>
                </div>
                <!--End:Tip Box-->
                <hr />
                <h2>Configuring the Viewport for Mobile Devices</h2>
                <p>You can use the viewport meta tag to display the web pages correctly on mobile devices.</p>
                <p>Without a viewport meta tag, mobile browsers render the web pages at typical desktop screen widths, and then scale it down to fit the mobile screen. As a result, it requires pinch-and-zoom to view the web page properly in mobile devices, which is very inconvenient.</p>
                <p>The following demonstration shows two web pages &mdash; one <em>with viewport meta tag</em> and other <em>without viewport meta tag</em> set. Open these links on mobile devices to see how it works.</p>
                <div class="viewport-demo clearfix">
                    <div>                        
                        <a href="../output_file/html/page-with-viewport-meta-tag.html" target="_blank">
                            <img src="../assets/images/with-viewport-meta-tag.png" alt="Web Page with Viewport Meta Tag"> 
                            <span>With Viewport Meta Tag</span>
                        </a>
                    </div>
                    <div>
                        <a href="../output_file/html/page-without-viewport-meta-tag.html" target="_blank">
                            <img src="../lib/images/without-viewport-meta-tag.png" alt="Web Page without Viewport Meta Tag"> 
                            <span>Without Viewport Meta Tag</span>
                        </a>
                    </div>
                </div>
				<p>The viewport meta tag allows you to set the best viewport size and scaling limits for viewing the web pages on mobile devices. A typical viewport meta tag definition will look as follows:</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab2aba.html?topic=html&amp;file=meta-viewport-tag" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

                        <head>
    <title>Configuring the Viewport</title> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
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
                <p>The <code>width=device-width</code> key-value pair inside the <code>content</code> attribute sets the width of the viewport to same as the screen width of the device, whereas the <code>initial-scale=1</code> sets the initial scale or zoom level to 100% when the page is first loaded by the browser.</p>
                <!--Tip Box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"  style="background-color:#fad28c"
>
                            <p><strong>Important:</strong> Always use the <code>&lt;meta&gt;</code> viewport tag in your web pages. It will make your website user-friendly and more accessible on mobile devices like cell phones and tablets.</p>
                        </div>
                    </div>
                </div>
                <!--End:Tip Box-->
                <!--Bottom Navigation-->
                <div class="bottom-link clearfix">
                    <a href="ht_head.html" class="previous-page-bottom"><i class="fa fa-arrow-right" aria-hidden="true"></i> Previous</a>
                    <a href="ht_scripts.html" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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