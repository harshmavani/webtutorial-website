
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="Working with HTML Head Elements">
	  <meta name="keywords" content="css,css3,Working with HTML Head Elements">
	  <meta name="author" content="webschooltoday.com">
    <title>Working with HTML Head Elements - WebSchool Today</title>
    <meta name="description" content="The head section of an HTML document is the container of several elements that provides additional information about the web page such as title, meta data like keywords and descriptions." />
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">Working with HTML Head Elements</div>    
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
<a href="ht_meta.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="ht_layout.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>HTML <span>Head</span></h1>
                <p class="summary">In this tutorial you will learn about the importance of head elements.</p>
                <h2>The HTML head Element</h2>
                <p>The <code>&lt;head&gt;</code> element primarily is the container for all the head elements, which provide extra information about the document (metadata), or reference to other resources that are required for the document to display or behave correctly in a web browser.</p>
                <p>The head elements collectively describes the properties of the document such as title, provide meta information like character set, instruct the browser where to find the style sheets or scripts that allows you to extend the HTML document in a highly active and interactive ways.</p>
                <p class="space">The HTML elements that can be used inside the <a href="../info-html/ht_head-tag.php"><code>&lt;head&gt;</code></a> element are: <a href="../info-html/ht_title-tag.php"><code>&lt;title&gt;</code></a>, <a href="../info-html/ht_base-tag.php"><code>&lt;base&gt;</code></a>, <a href="../info-html/ht_link-tag.php"><code>&lt;link&gt;</code></a>, <a href="../info-html/ht_style-tag.php"><code>&lt;style&gt;</code></a>, <a href="../info-html/ht_meta-tag.php"><code>&lt;meta&gt;</code></a>, <a href="../info-html/ht_script-tag.php"><code>&lt;script&gt;</code></a> and the <a href="../info-html/ht_noscript-tag.php"><code>&lt;noscript&gt;</code></a> element.</p>
                <h2>The HTML title Element</h2>
                <p>The <code>&lt;title&gt;</code> element defines the title of the document.</p>
                <p>The title element is required in all HTML/XHTML documents to produce a valid document. Only one title element is permitted in a document and it must be placed within the <code>&lt;head&gt;</code> element. The title element contains plain text and entities; it may not contain other markup tags.</p>
                <p>The title of the document may be used for different purposes. For example:</p>
                <ul>
                    <li>To display a title in the browser title bar and in the task bar.</li>
                    <li>To provide a title for the page when it is added to favorites or bookmarked.</li>
                    <li>To displays a title for the page in search-engine results.</li>
                </ul>
                <p>The following example demonstrates how to place title in an HTML document.</p>
                <!--Code box-->
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
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab06c3.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">
                        <!DOCTYPE html>
<html lang="en">
<head>
    <title>A simple HTML document</title>
</head>
<body>
    <p>Hello World!</p>
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
                <!--Tip box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"  style="background-color:#fad28c"
>
                            <p><strong>Important:</strong> A good title should be short and specific to the document's content, because search engine's web crawlers pay particular attention to the words used in the title. The title should ideally be less than 65 characters in length. See the <a href="../faq/what-is-the-maximum-length-of-title-and-meta-description-tag.php">guidelines for titles</a>.</p>
                        </div>
                    </div>
                </div>
                <!--End:Tip box-->
                <hr />
                <h2>The HTML base Element</h2>
                <p>The HTML <code>&lt;base&gt;</code> element is used to define a base URL for all relative links contained in the document, e.g. you can set the base URL once at the top of your page, and then all subsequent relative links will use that URL as a starting point. Here's an example:</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab9cad.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">
                        <!DOCTYPE html>
<html lang="en">
<head>
    <title>Defining a base URL</title>
    <base href="https://www.tutorialrepublic.com/">
</head>
<body>
    <p><a href="des-html/ht_head.php">HTML Head</a>.</p>
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
                <!--End:Code box-->
                <p>The hyperlink in the example above will actually resolve to <code>https://www.tutorialrepublic.com/des-html/ht_head.php</code> regardless of the URL of the current page. This is because the relative URL specified in the link: <code>des-html/ht_head.php</code> is added to the end of the base URL: <code>https://www.tutorialrepublic.com/</code>.</p>
                <!--Warning box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab warning-icon" title="Warning"><i></i></div>
                        <div class="warning-box">
                            <p><strong>Warning:</strong> The HTML <code>&lt;base&gt;</code> element must appear before any element that refers to an external resource. HTML permits only one base element for each document. </p>
                        </div>
                    </div>
                </div>
                <!--End:Warning box-->
                <hr />
                <h2>The HTML link Element</h2>
                <p>The <code>&lt;link&gt;</code> element defines the relationship between the current document and an external documents or resources. A common use of link element is to link to external style sheets.</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab55a8.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

                        <head>
    <title>Linking Style Sheets</title>
    <link rel="stylesheet" href="style.css">
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
                <p>Please check out the <a href="../des-css/index.php">CSS tutorial</a> section to learn about style sheets in detail.</p>
                <!--Note box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> An HTML document's <code>&lt;head&gt;</code> element may contain any number of <code>&lt;link&gt;</code> elements. The <code>&lt;link&gt;</code> element has attributes, but no contents.</p>
                        </div>
                    </div>
                </div>
                <!--End:Note box-->
                <hr />
                <h2>The HTML style Element</h2>
                <p>The <code>&lt;style&gt;</code> element is used to define embedded style information for an HTML document. The style rules inside the <code>&lt;style&gt;</code> element specify how HTML elements render in a browser.</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabb5a8.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">
                        <head>
    <title>Embedding Style Sheets</title>
    <style>
        body { background-color: YellowGreen; }
        h1 { color: red; }
        p { color: green; }
    </style>
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
                <!--Note box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> An embedded style sheet should be used when a single document has a unique style. If the same style sheet is used in multiple documents, then an external style sheet would be more appropriate. See the tutorial on <a href="ht_styles.php">HTML styles</a> to learn more about it.</p>
                        </div>
                    </div>
                </div>
                <!--End:Note box-->
                <hr />
                <h2>The HTML meta Element</h2>
                <p>The <code>&lt;meta&gt;</code> element provides metadata about the HTML document. Metadata is a set of data that describes and gives information about other data. Here's an example:</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab7d98.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

                        <head>
    <title>Specifying Metadata</title>
    <meta charset="utf-8">
    <meta name="author" content="John Smith">
</head>
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
                <p>The meta element will be explained in more detail in the <a href="ht_meta.php">next chapter</a>.</p>
                <hr />
                <h2>The HTML script Element</h2>
                <p>The <code>&lt;script&gt;</code> element is used to define client-side script, such as JavaScript in HTML documents.</p>
                <p>The following example will display a greeting message in the browser:</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab4edb.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code6">

                        <head>
    <title>Adding JavaScript</title>
    <script>
        document.write("<h1>Hello World!</h1>") 
    </script>
</head>
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
                <p>The script and noscript element will be explained in detail in the <a href="ht_scripts.php">later chapter</a>.</p>
                <!--Bottom Navigation-->
                <div class="bottom-link clearfix">
                    <a href="ht_layout.php" class="previous-page-bottom"><i class="fa fa-arrow-right" aria-hidden="true"></i> Previous</a>
                    <a href="ht_meta.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
 Page</a>
 </div>
            </div>
        </div>        
        <div class="sidebar">
            <script type="text/javascript">
	atOptions = {
		'key' : '27e35a303413aa9e79e8ad559b8c0c71',
		'format' : 'iframe',
		'height' : 600,
		'width' : 160,
		'params' : {}
	};
	document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.displaycontentnetwork.com/27e35a303413aa9e79e8ad559b8c0c71/invoke.js"></scr' + 'ipt>');
</script>
        </div>
    </div> 
</div>
	<?php include "../footer.php" ?>

</body>
</html>