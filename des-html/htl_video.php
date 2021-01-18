
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="How to Embed Video in HTML5">
	  <meta name="keywords" content="css,css3,How to Embed Video in HTML5">
	  <meta name="author" content="webschooltoday.com">
    <title>How to Embed Video in HTML5 - WebSchool Today</title>
    <meta name="description" content="In this tutorial you will the various techniques of inserting videos in an HTML document such as the new HTML5 video tag or the all time favorite YouTube videos." />
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">How to Embed Video in HTML5</div> <?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="htl_web-storage.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

            	<a href="htl_audio.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>HTML5 <span>Video</span></h1>
                <p class="summary">In this tutorial you will learn how to embed video into an HTML document.</p>
                <h2>Embedding Video in HTML Document</h2>
                <p>Inserting video onto a web page was not relatively easy, because web browsers did not have a uniform standard for defining embedded media files like video.</p>
                <p class="space">In this chapter we'll demonstrates some of the many ways of adding videos on web pages, from the latest HTML5 <code>&lt;video&gt;</code> element to the popular YouTube videos.</p>
                <h2>Using the HTML5 video Element</h2>
                <p>The newly introduced HTML5 <code>&lt;video&gt;</code> element provides a standard way to embed video in web pages. However, the video element is relatively new, but it works in most of the modern web browsers.</p>
				<p>The following example simply inserts a video into the HTML document, using the browser default set of controls, with one source defined by the <code>src</code> attribute.</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab97bb.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

                        <video controls="controls" src="media/shuttle.mp4">
    Your browser does not support the HTML5 Video element.
</video>
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
                <p>A video, using the browser default set of controls, with alternative sources.</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab983d.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

                        <video controls="controls">
    <source src="media/shuttle.mp4" type="video/mp4">
    <source src="media/shuttle.ogv" type="video/ogg">
    Your browser does not support the HTML5 Video element.
</video>
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
                <h2>Using the object Element</h2>
                <p>The <code>&lt;object&gt;</code> element is used to embed different kinds of media files into an HTML document. Initially, this element was used to insert ActiveX controls, but according to the specification, an object can be any media object such as video, audio, PDF files, Flash animations or even images.</p>
                <p>The following code fragment embeds a Flash video into a web page.</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab9051.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

                        <object data="media/blur.swf" width="400px" height="200px"></object>

     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code3"), {
									mode: "text/html",
									tabMode: "indent",
									styleActiveLine: true,
									lineNumbers: true,
									lineWrapping: true
								});
							</script>                    </div>
                </div>
                <!--End:Code box-->
                <p>Only browsers or applications that support Flash will play this video.</p>
                <!--Warning box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab warning-icon" title="Warning"><i></i></div>
                        <div class="warning-box">
                            <p><strong>Warning:</strong> The <code><a href="../info-html/ht_object-tag.php">&lt;object&gt;</a></code> element is not supported widely and very much depends on the type of the object that's being embedded. Other methods could be a better choice in many cases. iPad and iPhone device cannot display Flash videos.</p>
                        </div>
                    </div>
                </div>
                <!--End:Warning box-->
                <hr />
                <h2>Using the embed Element</h2>
                <p>The <code>&lt;embed&gt;</code> element is used to embed multimedia content into an HTML document.</p>
                <p>The following code fragment embeds a Flash video into a web page.</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab60ca.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">
                        <embed src="media/blur.swf" width="400px" height="200px">

     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code4"), {
									mode: "text/html",
									tabMode: "indent",
									styleActiveLine: true,
									lineNumbers: true,
									lineWrapping: true
								});
							</script>                    </div>
                </div>
                <!--End:Code box-->
                <!--Warning box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab warning-icon" title="Warning"><i></i></div>
                        <div class="warning-box">
                            <p><strong>Warning:</strong> However, the <code>&lt;embed&gt;</code> element is very well supported in current web browsers and it is also defined as standard in HTML5, but your video might not played due to lack of browser support for Flash or unavailability of plugins.</p>
                        </div>
                    </div>
                </div>
                <!--End:Warning box-->
                <hr />
                <h2>Embedding the YouTube Videos</h2>
                <p>This is the easiest and popular way to embed videos files in the web pages. Just upload the video on YouTube and insert HTML code to display that video in your web page.</p>
                <p>Here's a live example followed by the explanation of whole process:</p>
                <h3>Step 1: Upload video</h3>
                <p class="break">Go to YouTube upload video page and follow the instructions to upload your video.</p>
                <h3>Step 2: Creating the HTML Code to embed the video</h3>
                <p class="break">When you open your uploaded video in YouTube you will see something like the following figure at the bottom of the video. Browse and open your uploaded video in YouTube. Now look for the share button which is located just below the video as shown in the figure.</p>
                <div><img src="../lib/images/share-panel.png" alt="Share YouTube Videos" /></div>
                <p class="break">When you click the share button, a share panel will open displaying some more buttons.  Now click on the Embed button, it will generate the HTML code to directly embed the video into the web pages. Just copy and paste that code into your HTML document where you want to display the video and you're all set. By default video embedded inside an iframe.</p>
                <div><img src="../lib/images/embed-code.png" alt="Share YouTube Videos" /></div>
                <p>You can further customize this embed code such as changing the video size by selecting the customization option given just below the embed-code input box.</p>
				<p>The following example simply embeds a video from the YouTube. Let's try it out:</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabd953.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

                        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>YouTube Video</title>
</head>
<body>
    <iframe width="560" height="315" src="//www.youtube.com/embed/YE7VzlLtp-4" frameborder="0" allowfullscreen></iframe>
</body>
</html>
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
				<!--Bottom Navigation-->
                <div class="bottom-link clearfix">
                    <a href="htl_audio.php" class="previous-page-bottom"><i class="fa fa-arrow-right" aria-hidden="true"></i> Previous</a>
                    <a href="htl_web-storage.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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