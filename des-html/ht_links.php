
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="How to Create Links to Other Pages in HTML">
	  <meta name="keywords" content="css,css3,How to Create Links to Other Pages in HTML">
	  <meta name="author" content="webschooltoday.com">
    <title>How to Create Links to Other Pages in HTML - WebSchool Today</title>
    <meta name="description" content="Links are the most essential part of the World Wide Web that connects one web resource to another which may be an image, an HTML document, a video clip, etc." />
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">How to Create Links to Other Pages in HTML</div>    
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
<a href="ht_text-formatting.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="ht_paragraphs.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>HTML <span>Links</span></h1>
                <p class="summary">In this tutorial you will learn how to create links to other pages in HTML.</p>
                <h2>Creating Links in HTML</h2>
                <p>A link or hyperlink is a connection from one web resource to another. Links allow users to move seamlessly from one page to another, on any server anywhere in the world.</p>
                <p>A link has two ends, called anchors. The link starts at the source anchor and points to the destination anchor, which may be any web resource, for example, an image, an audio or video clip, a PDF file, an HTML document or an element within the document itself, and so on.</p>
                <p>By default, links will appear as follow in most of the browsers:</p>
                <ul>
                    <li>An <span style="color: blue;text-decoration: underline;">unvisited link</span> is underlined and blue.</li>
                    <li>A <span style="color: purple;text-decoration: underline;">visited link</span> is underlined and purple.</li>
                    <li>An <span style="color: red;text-decoration: underline;">active link</span> is underlined and red.</li>
                </ul>
                <p class="space">However, you can overwrite this using CSS. Learn more about <a href="../des-css/css-links.php">styling links</a>.</p>
                <!--ads-->
                
                <!--ads close-->
                <h2>HTML Link Syntax</h2>
                <p>Links are specified in HTML using the <code>&lt;a&gt;</code> tag.</p>
                <p>A link or hyperlink could be a word, group of words, or image.</p>
                <div class="shadow">
                    <div class="syntax">
                        <span class="tag">&lt;a <span class="attribute">href</span>="<i><span class="attribute-value">url</span></i>"&gt;</span>Link text<span class="tag">&lt;/a&gt;</span>
                    </div>
                </div>
                <p>Anything between the opening <code>&lt;a&gt;</code> tag and the closing <code>&lt;/a&gt;</code> tag becomes the part of the link that the user sees and clicks in a browser. Here are some examples of the links:</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabc0e4.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

                        <a href="https://www.google.com/">Google Search</a>
<a href="https://www.webschooltoday.com/">Tutorial Republic</a>
<a href="images/kites.jpg">
    <img src="kites-thumb.jpg" alt="kites">
</a>
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
                <p>The <code>href</code> attribute specifies the target of the link. Its value can be an absolute or relative URL.</p>
                <p>An absolute URL is the URL that includes every part of the URL format, such as protocol, host name, and path of the document, e.g., <code>https://www.google.com/</code>, <code>https://www.example.com/form.php</code>, etc. While, relative URLs are page-relative paths, e.g., <code>contact.php</code>, <code>images/smiley.png</code>, and so on. A relative URL never includes the <code>http://</code> or <code>https://</code> prefix.</p>
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
                <h2>Setting the Targets for Links</h2>
                <p>The <code>target</code> attribute tells the browser where to open the linked document. There are four defined targets, and each target name starts with an underscore(<code>_</code>) character:</p>
                <ul>
                    <li><code>_blank</code> &mdash; Opens the linked document in a new window or tab.</li>
                    <li><code>_parent</code> &mdash; Opens the linked document in the parent window.</li>
                    <li><code>_self</code> &mdash; Opens the linked document in the same window or tab as the source document. This is the default, hence it is not necessary to explicitly specify this value.</li>
                    <li><code>_top</code> &mdash; Opens the linked document in the full browser window.</li>
                </ul>
                <!--Code box-->
                <p>Try out the following example to understand how the link's target basically works:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabca50.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">
                        <a href="/about-us.php" target="_top">About Us</a>
<a href="https://www.google.com/" target="_blank">Google</a>
<a href="images/sky.jpg" target="_parent">
    <img src="sky-thumb.jpg" alt="Cloudy Sky">
</a>
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
                <!--Tip Box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"  style="background-color:#fad28c"
>
                            <p><strong>Important:</strong> If your web page is placed inside an iframe, you can use the <code>target="_top"</code> on the links to break out of the iframe and show the target page in full browser window.</p>
                        </div>
                    </div>
                </div>
                <!--End:Tip Box-->
                <hr />
                <h2>Creating Bookmark Anchors</h2>
                <p>You can also create bookmark anchors to allow users to jump to a specific section of a web page. Bookmarks are especially helpful if you have a very long web page.</p>
                <p>Creating bookmarks is a two-step process: first add the <code>id</code> attribute on the element where you want to jump, then use that <code>id</code> attribute value preceded by the hash sign (<code>#</code>) as the value of the <code>href</code> attribute of the <code>&lt;a&gt;</code> tag, as shown in the following example:</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab798d.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

                        <a href="#sectionA">Jump to Section A</a>
<h2 id="sectionA">Section A</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
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
                            <p><strong>Important:</strong> You can even jump to a section of another web page by specifying the URL of that page along with the anchor (i.e. <code><em>#elementId</em></code>) in the <code>href</code> attribute, for example, <code>&lt;a&nbsp;href="mypage.php#topicA"&gt;Go to TopicA&lt;/a&gt;</code>.</p>
                        </div>
                    </div>
                </div>
                <!--End:Tip Box-->
                <hr />
                <h2>Creating Download Links</h2>
                <p>You can also create the file download link in exactly the same fashion as placing text links. Just point the destination URL to the file you want to be available for download.</p>
                <p>In the following example we've created the download links for ZIP, PDF and JPG files.</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabbe57-2.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

                        <a href="downloads/test.zip">Download Zip file</a>
<a href="downloads/masters.pdf">Download PDF file</a>
<a href="downloads/sample.jpg">Download Image file</a>
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
                            <p><strong>Read Carefully:</strong> When you click a link that points to a PDF or image file, the file is not downloaded to your hard drive directly. It will only open the file in your web browser. Further you can save or download it to your hard drive on a permanent basis.</p>
                        </div>
                    </div>
                </div>
                <!--End:Note box-->
                <!--Bottom Navigation-->
                <div class="bottom-link clearfix">
                    <a href="ht_paragraphs.php" class="previous-page-bottom"><i class="fa fa-arrow-right" aria-hidden="true"></i> Previous</a>
                    <a href="ht_text-formatting.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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