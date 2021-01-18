
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="How to Embed Audio in HTML5">
	  <meta name="keywords" content="css,css3,How to Embed Audio in HTML5">
	  <meta name="author" content="webschooltoday.com">
    <title>How to Embed Audio in HTML5 - WebSchool Today</title>
    <meta name="description" content="In this tutorial you learn the various techniques of playing sounds on the web pages such as the new HTML5 audio tag, Google MP3 player or Yahoo web player." />
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">How to Embed Audio in HTML5</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
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
<a href="htl_video.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

            	<a href="htl_svg.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>HTML5 <span>Audio</span></h1>
                <p class="summary">In this tutorial you will learn how to embed audio into an HTML document.</p>
                <h2>Embedding Audio in HTML Document</h2>
                <p>Inserting audio onto a web page was not easy before, because web browsers did not have a uniform standard for defining embedded media files like audio.</p>
                <p class="space">In this chapter we'll demonstrates some of the many ways to embed sound in your webpage, from the use of a simple link to the use of the latest HTML5 <code>&lt;audio&gt;</code> element.</p>
                <h2>Using the HTML5 audio Element</h2>
                <p>The newly introduced HTML5 <code>&lt;audio&gt;</code> element provides a standard way to embed audio in web pages. However, the audio element is relatively new but it works in most of the modern web browsers.</p>
				<p>The following example simply inserts an audio into the HTML5 document, using the browser default set of controls, with one source defined by the <code>src</code> attribute.</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab9834.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">
                        <audio controls="controls" src="media/birds.mp3">
    Your browser does not support the HTML5 Audio element.
</audio>
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
                <p>An audio, using the browser default set of controls, with alternative sources.</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab8a1b.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">
                        <audio controls="controls">
    <source src="media/birds.mp3" type="audio/mpeg">
    <source src="media/birds.ogg" type="audio/ogg">
    Your browser does not support the HTML5 Audio element.
</audio>
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
                <p>The 'ogg' track in the above example works in Firefox, Opera and Chrome, while the same track in the 'mp3' format is added to make the audio work in Internet Explorer and Safari.</p>
                <hr />
                <h2>Linking Audio Files</h2>
                <p>You can make links to your audio files and play it by ticking on them.</p>
				<p>Let's try out the following example to understand how this basically works:</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabd720.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">
                        <a href="media/sea.mp3">Track 1</a>
<a href="media/wind.mp3">Track 2</a>
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
                <hr />
                <!--ads-->
                
                <!--ads close-->
                <h2>Using the object Element</h2>
                <p>The <code>&lt;object&gt;</code> element is used to embed different kinds of media files into an HTML document. Initially, this element was used to insert ActiveX controls, but according to the specification, an object can be any media object such as audio, video, PDF files, Flash animations or even images.</p>
				<p>The following example code embeds a simple audio file into a web page.</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab20d0.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">
                        <object data="media/sea.mp3"></object>
<object data="media/sea.ogg"></object>
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
                <!--Warning box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab warning-icon" title="Warning"><i></i></div>
                        <div class="warning-box">
                            <p><strong>Warning:</strong> The <code><a href="../info-html/ht_object-tag.php">&lt;object&gt;</a></code> element is not supported widely and very much depends on the type of the object that's being embedded. Other methods like HTML5 <code>&lt;audio&gt;</code> element or third-party HTML5 audio players could be a better choice in many cases.</p>
                        </div>
                    </div>
                </div>
                <!--End:Warning box-->
                <hr />
                <h2>Using the embed Element</h2>
                <p>The <code>&lt;embed&gt;</code> element is used to embed multimedia content into an HTML document.</p>
                <p>The following code fragment embeds audio files into a web page.</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab37ae.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">
                        <embed src="media/wind.mp3">
<embed src="media/wind.ogg">
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
                <!--Warning box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab warning-icon" title="Warning"><i></i></div>
                        <div class="warning-box">
                            <p><strong>Warning:</strong> However the <code>&lt;embed&gt;</code> element is very well supported in current browsers and defined as standard in HTML5, but your audio might not played due to lack of browser support for that file format or unavailability of plugins.</p>
                        </div>
                    </div>
                </div>
                <!--End:Warning box-->
                <!--Bottom Navigation-->
                <div class="bottom-link clearfix">
                    <a href="htl_svg.php" class="previous-page-bottom"><i class="fa fa-arrow-right" aria-hidden="true"></i> Previous</a>
                    <a href="htl_video.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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