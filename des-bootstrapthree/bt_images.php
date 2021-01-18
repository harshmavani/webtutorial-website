<!DOCTYPE html>
	<html lang="en">
	<head>
    <meta name="description" content="Learn how to create responsive images and videos with Bootstrap as well as image gallery, circular or rounded corners images, grids of thumbnails and much more." />
	  <meta name="keywords" content="Bootstrap,Bootstrap3,images,videos">
	  <meta name="author" content="webschooltoday.com">
    <title>Bootstrap 3 Responsive Images and Videos - WebSchool Today</title>
    <?php include "../links.php" ?>
</head>
<body>
<div>
<div class="tital">Bootstrap 3 Responsive Images and Videos</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des_bootstap3.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
           </div>
           <a href="bt_media-objects.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i>
</a>
                <a href="bt_button-groups.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i>
</a>

                <h1>Bootstrap <span>Images</span></h1>
                <p class="summary">In this tutorial you will learn how to style images, creating thumbnails, grids of images and videos, and so on using Bootstrap.</p>
                <h2>Styling Images with Bootstrap</h2>
                <p>Images are very common in modern web design. So styling images and placing it properly on the web pages is very important for improving the user experience.</p>
				<p>Using the Bootstrap built-in classes you can easily style images such as making the round cornered or circular images, or give them effect like thumbnails.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab141a.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<img src="125x125.jpg" class="img-rounded" alt="Rounded Image">
<img src="125x125.jpg" class="img-circle" alt="Circular Image">
<img src="125x125.jpg" class="img-thumbnail" alt="Thumbnail Image">

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
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab warning-icon" title="Warning"><i></i></div>
						<div class="warning-box">
							<p><strong>Warning:</strong> The classes <code>.img-rounded</code> and <code>.img-circle</code> do not work in IE8 and lower versions due to lack of support for CSS <code><a href="../info-css/stylel_border-radius-property.php">border-radius</a></code> property.</p>
						</div>
					</div>
				</div>
				<hr />
				<h2>Creating Responsive Images and Videos</h2>
				<p>In Bootstrap you can make the images responsive too. Just add the class <code>.img-responsive</code> to the <code><a href="../info-html/ht_img-tag.php">&lt;img&gt;</a></code> tag. This class mainly applies the styles <code>max-width:&thinsp;100%;</code> and <code>height:&thinsp;auto;</code> to the image so that it scales nicely to fit the containing element &mdash; in case if the width of the image is larger than the containing element itself.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabc57f.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

<img src="kites.jpg" class="img-responsive" alt="Flying Kites">
<img src="sky.jpg" class="img-responsive" alt="Cloudy Sky">
<img src="balloons.jpg" class="img-responsive" alt="Hot Air Balloons">

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
				<div class="color-box break">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box" style="background-color:#ff8585"
>
							<p><strong>Read Carefully:</strong> When making the responsive layouts consider making your images responsive too, otherwise if an image width is larger than the parent element's width in any case it will overflow and may break your layout.</p>
						</div>
					</div>
				</div>
				<p>You can also make the <a href="../html-tutorial/html5-video.html">video</a> or slideshow embedded in a web page responsive without affecting its original aspect ratio. The Bootstrap responsive embed classes can be applied directly to the <code><a href="../info-html/ht_iframe-tag.php">&lt;iframe&gt;</a></code>, <code><a href="../info-html/htl_embed-tag.php">&lt;embed&gt;</a></code>, <code><a href="../info-html/htl_video-tag.php">&lt;video&gt;</a></code>, and <code><a href="../info-html/ht_object-tag.php">&lt;object&gt;</a></code> elements.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab4b6e.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

<!-- 16:9 aspect ratio -->
<div class="embed-responsive embed-responsive-16by9">
    <iframe class="embed-responsive-item" src="//www.youtube.com/embed/YE7VzlLtp-4"></iframe>
</div>
 
<!-- 4:3 aspect ratio -->
<div class="embed-responsive embed-responsive-4by3">
    <iframe class="embed-responsive-item" src="//www.youtube.com/embed/YE7VzlLtp-4"></iframe>
</div>

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
				<p>In the above example, we've created the two responsive videos with two different aspect ratios (<strong>16:9</strong> and <strong>4:3</strong>) by adding the classes <code>.embed-responsive-16by9</code> and <code>.embed-responsive-4by3</code> to their containing blocks respectively and the class <code style="white-space: pre;">.embed-responsive-item</code> to the descendant <code>&lt;iframe&gt;</code> element.</p>
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
						<div class="tip-box" style="background-color:#fad28c"
>
							<p><strong>Important:</strong> The aspect ratio of an image describes the proportional relationship between its width and its height. Two common videographic aspect ratios are 16:9 and 4:3.</p>
						</div>
					</div>
				</div>
				<hr />
				<h2>Bootstrap Thumbnails</h2>
				<p>The Bootstrap thumbnail component is very useful for creating grids of images or videos, lists of products, portfolios, and much more. The following example will show you how to create thumbnails to showcase linked images.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabeffc.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                       
	<textarea id="code4">

<div class="container">
    <div class="row">
        <div class="col-xs-3">
            <a href="#" class="thumbnail">
                <img src="125x125.jpg" alt="125x125">
            </a>
        </div>
        <div class="col-xs-3">
            <a href="#" class="thumbnail">
                <img src="125x125.jpg" alt="125x125">
            </a>
        </div>
        <div class="col-xs-3">
            <a href="#" class="thumbnail">
                <img src="125x125.jpg" alt="125x125">
            </a>
        </div>
        <div class="col-xs-3">
            <a href="#" class="thumbnail">
                <img src="125x125.jpg" alt="125x125">
            </a>
        </div>
    </div>
</div>

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
				<p>You can also insert HTML content like headings, paragraphs, or buttons into thumbnails.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabbc2f.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        <textarea id="code5">

<div class="container">
    <div class="row">
        <div class="col-xs-6">
            <div class="thumbnail">
                <img src="avatar.jpg" alt="Sample Image">
                <div class="caption">
                    <h3>Thumbnail label</h3>
                    <p>Thumbnail description…</p>
                    <p><a href="#" class="btn btn-primary">Share</a> <a href="#" class="btn btn-default">Download</a></p>
                </div>
            </div>
        </div>
        <div class="col-xs-6">
            <div class="thumbnail">
                <img src="avatar.jpg" alt="Sample Image">
                <div class="caption">
                    <h3>Thumbnail label</h3>
                    <p>Thumbnail description…</p>
                    <p><a href="#" class="btn btn-primary">Share</a> <a href="#" class="btn btn-default">Download</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

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
				<div class="color-box">
					<div class="shadow break">
						<div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
						<div class="tip-box" style="background-color:#fad28c"
>
							<p><strong>Important:</strong> The thumbnails component uses existing grid classes like <code>.col-xs-*</code>, <code>.col-sm-*</code>, <code>.col-md-*</code>, <code>.col-lg-*</code>, etc. for controlling the dimensions of thumbnails.</p>
						</div>
					</div>
				</div>
                <div class="bottom-link clearfix">
                    <a href="bt_button-groups.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i>
 Previous</a>
                    <a href="bt_media-objects.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
</a>
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