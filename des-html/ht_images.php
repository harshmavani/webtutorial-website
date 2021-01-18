
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="How to Insert Images in HTML Pages">
	  <meta name="keywords" content="css,css3,How to Insert Images in HTML Pages">
	  <meta name="author" content="webschooltoday.com">
    <title>How to Insert Images in HTML Pages - WebSchool Today</title>
    <meta name="description" content="You must have heard the famous quote &quot;A picture is worth a thousand words&quot;, this also true in case of web pages. Placing images, relevant to your content can make your website more attractive." />
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">How to Insert Images in HTML Pages</div>    
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
<a href="ht_tables.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="ht_styles.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>HTML <span>Images</span></h1>
                <p class="summary">In this tutorial you will learn how to include images in an HTML document.</p>
                <h2>Inserting Images into Web Pages</h2>
                <p>Images enhance visual appearance of the web pages by making them more interesting and colorful.</p>
                <p>The <code>&lt;img&gt;</code> tag is used to insert images in the HTML documents. It is an empty element and contains attributes only. The syntax of the <code>&lt;img&gt;</code> tag can be given with:</p>
                <div class="shadow break">
                    <div class="syntax">
                        <span class="tag">&lt;img <span class="attribute">src</span>="<i><span class="attribute-value">url</span></i>" <span class="attribute">al</span>t="<i><span class="attribute-value">some_text</span></i>"&gt;</span>
                    </div>
                </div>
                <p>The following example inserts three images on the web page:</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab47c9.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">
                        <img src="kites.jpg" alt="Flying Kites">
<img src="sky.jpg" alt="Cloudy Sky">
<img src="balloons.jpg" alt="Balloons">
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
                <p>Each image must carry at least two attributes: the <code>src</code> attribute, and an <code>alt</code> attribute.</p>
                <p>The <code>src</code> attribute tells the browser where to find the image. Its value is the URL of the image file.</p>
                <p>Whereas, the <code>alt</code> attribute provides an alternative text for the image, if it is unavailable or cannot be displayed for some reason. Its value should be a meaningful substitute for the image.</p>
                <!--Note box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> Like <code><a href="../info-html/ht_br-tag.php">&lt;br&gt;</a></code> , the <code>&lt;img&gt;</code> element is also an <a href="ht_elements.php#empty-elements">empty element</a>, and does not have a closing tag. However, in XHTML it closes itself ending with "<code>/&gt;</code>".</p>
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
                <!--Tip Box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"  style="background-color:#fad28c"
>
                            <p><strong>Important:</strong> The required <code>alt</code> attribute provides alternative text description for an image if a user for some reason cannot able to view it because of slow connection, image is not available at the specified URL, or if the user uses a screen reader or non-graphical browser.</p>
                        </div>
                    </div>
                </div>
                <!--End:Tip Box-->
                <hr />
                <h2>Setting the Width and Height of an Image</h2>
                <p>The <code>width</code> and <code>height</code> attributes are used to specify the width and height of an image.</p>
                <p>The values of these attributes are interpreted in pixels by default.</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabbb66.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

                        <img src="kites.jpg" alt="Flying Kites" width="300" height="300">
<img src="sky.jpg" alt="Cloudy Sky" width="250" height="150">
<img src="balloons.jpg" alt="Balloons" width="200" height="200">
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
                <p>You can also use the <code>style</code> attribute to specify width and height for the images. It prevents style sheets from changing the image size accidently, since inline style has the highest priority.</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabaac3.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

                        <img src="kites.jpg" alt="Flying Kites" style="width: 300px; height: 300px;">
<img src="sky.jpg" alt="Cloudy Sky" style="width: 250px; height: 150px;">
<img src="balloons.jpg" alt="Balloons" style="width: 200px; height: 200px;">
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
                            <p><strong>Read Carefully:</strong> It's a good practice to specify both the <code>width</code> and <code>height</code> attributes for an image, so that browser can allocate that much of space for the image before it is downloaded. Otherwise, image loading may cause distortion or flicker in your website layout.</p>
                        </div>
                    </div>
                </div>
                <!--End:Note box-->
                <hr />
                <h2>Using the HTML5 Picture Element</h2>
                <p>Sometimes, scaling an image up or down to fit different devices (or screen sizes) doesn't work as expected. Also, reducing the image dimension using the <code>width</code> and <code>height</code> attribute or property doesn't reduce the original file size. To address these problems HTML5 has introduced the <code>&lt;picture&gt;</code> tag that allows you to define multiple versions of an image to target different types of devices.</p>
                <p>The <code>&lt;picture&gt;</code> element contains zero or more <code>&lt;source&gt;</code> elements, each referring to different image source, and one <code>&lt;img&gt;</code> element at the end. Also each <code>&lt;source&gt;</code> element has the <code>media</code> attribute which specifies a media condition (similar to the media query) that is used by the browser to determine when a particular source should be used. Let's try out an example:</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab8609.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

                        <picture>
    <source media="(min-width: 1000px)" srcset="logo-large.png">
    <source media="(max-width: 500px)" srcset="logo-small.png">
    <img src="logo-default.png" alt="My logo">
</picture>
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
                            <p><strong>Read Carefully:</strong> The browser will evaluate each child <code>&lt;source&gt;</code> element and choose the best match among them; if no matches are found, the URL of the <code>&lt;img&gt;</code> element's <code>src</code> attribute is used. Also, the <code>&lt;img&gt;</code> tag must be specified as the last child of the <code>&lt;picture&gt;</code> element.</p>
                        </div>
                    </div>
                </div>
                <!--End:Note box-->
                <hr />
                <h2>Working with Image Maps</h2>
                <p>An image map allows you to define hotspots on an image that acts just like a <a href="ht_links.php">hyperlink</a>.</p>
                <p>The basic idea behind creating image map is to provide an easy way of linking various parts of an image without dividing it into separate image files. For example, a map of the world may have each country hyperlinked to further information about that country.</p>
                <p>Let's try out a simple example to understand how it actually works:</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabcf57.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

                        <img src="objects.png" usemap="#objects" alt="Objects">
<map name="objects">
    <area shape="circle" coords="137,231,71" href="clock.php" alt="Clock">
    <area shape="poly" coords="363,146,273,302,452,300" href="sign.php" alt="Sign">
    <area shape="rect" coords="520,160,641,302" href="book.php" alt="Book">
</map>
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
                <p>The <code>name</code> attribute of the <code>&lt;map&gt;</code> tag is used to reference the map from the <code>&lt;img&gt;</code> tag using its <code>usemap</code> attribute. The <code>&lt;area&gt;</code> tag is used inside the <code>&lt;map&gt;</code> element to define the clickable areas on an image. You can define any number of clickable areas within an image.</p>
                <!--Note box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> The image map should not be used for website navigation. They are not search engine friendly. A valid use of an image map is with a geographical map.</p>
                        </div>
                    </div>
                </div>
                <!--End:Note box-->
                <!--Tip Box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"  style="background-color:#fad28c"
>
                            <p><strong>Important:</strong> There are many online tools available for creating image maps. Some advanced editors like Adobe Dreamweaver also provides a set of tools for easily creating image maps.</p>
                        </div>
                    </div>
                </div>
                <!--End:Tip Box-->
                <!--Bottom Navigation-->
                <div class="bottom-link clearfix">
                    <a href="ht_styles.php" class="previous-page-bottom"><i class="fa fa-arrow-right" aria-hidden="true"></i> Previous</a>
                    <a href="ht_tables.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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