<!DOCTYPE html>
	<html lang="en">
	<head>
	<meta name="description" content="Bootstrap 4 Responsive Images and Videos">
	  <meta name="keywords" content="Bootstrap,Bootstrap4,Bootstrap 4 Responsive Images and Videos,images in bootstrap,video in bootstrap,responsive image,responsive video">
	  <meta name="author" content="webschooltoday.com">
    <title>Bootstrap 4 Responsive Images and Videos - WebSchool Today</title>
    <?php include "../links.php" ?>
</head>
<body>
<div>
<div class="tital">Bootstrap 4 Responsive Images and Videos</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_bootstrap.php" ?>
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
             <a href="bt_cards.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i>
</a>
                <a href="bt_button-groups.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i>
</a>

                <h1>Bootstrap <span>Images</span></h1>
                <p class="summary">In this tutorial you will learn how to style images, as well as how to create responsive images and videos using Bootstrap.</p>
                <h2>Styling Images with Bootstrap</h2>
                <p>Images are very common in modern web design. So styling images and placing it properly on the web pages is very important for improving the user experience.</p>
				<p>Using the Bootstrap built-in classes you can easily style images such as making the round cornered or circular images, or give them effect like thumbnails.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabf991.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2" >

<img src="images/avatar.svg" class="rounded" alt="Rounded Image">
<img src="images/avatar.svg" class="rounded-circle" alt="Circular Image">
<img src="images/avatar.svg" class="img-thumbnail" alt="Thumbnail Image">

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
                <p>&mdash; The output of the above example will look something like this:</p>
  				<hr />
				<h2>Creating Responsive Images and Videos</h2>
				<p>With Bootstrap you can make the images responsive too. Just add the class <code>.img-fluid</code> to the <a href="../info-html/ht_img-tag.php"><code>&lt;img&gt;</code></a> tag. This class mainly applies the styles <code>max-width:&thinsp;100%;</code> and <code>height:&thinsp;auto;</code> to the image so that it scales nicely to fit the containing element &mdash; in case if the width of the image is larger than the containing element itself. Check out the following example to see how it works:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabe6c0.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1" >

<img src="images/kites.jpg" class="img-fluid" alt="Flying Kites">
<img src="images/sky.jpg" class="img-fluid" alt="Cloudy Sky">
<img src="images/balloons.jpg" class="img-fluid" alt="Hot Air Balloons">

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
				<div class="color-box break">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box" style="background-color:#ff8585">
							<p><strong>Read Carefully:</strong> When making the responsive layouts consider making your images responsive too, otherwise if an image width is larger than the parent element's width in any case, it will overflow and may break your web page layout.</p>
						</div>
					</div>
				</div>
                <p>You can also make the <a href="../des_html/htl_video.php">video</a> or slideshow embedded in a web page responsive without affecting its original aspect ratio. To do this wrap any embed like an <a href="../info-html/ht_iframe-tag.php"><code>&lt;iframe&gt;</code></a>, or <a href="../info-html/htl_video-tag.php"><code>&lt;video&gt;</code></a> in a <a href="../info-html/ht_div-tag.php"><code>&lt;div&gt;</code></a> element and apply the class <code>.embed-responsive</code>, and an aspect ratio class such as <code>.embed-responsive-16by9</code>.</p>
                <p>You can optionally apply an explicit descendant class <code>.embed-responsive-item</code> on the embedded element to match the styling for other attributes. Here's is an example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab2a57.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3" >

<!-- 21:9 aspect ratio -->
<div class="embed-responsive embed-responsive-21by9">
    <iframe class="embed-responsive-item" src="//www.youtube.com/embed/YE7VzlLtp-4"></iframe>
</div>

<!-- 16:9 aspect ratio -->
<div class="embed-responsive embed-responsive-16by9">
    <iframe class="embed-responsive-item" src="//www.youtube.com/embed/YE7VzlLtp-4"></iframe>
</div>

<!-- 4:3 aspect ratio -->
<div class="embed-responsive embed-responsive-4by3">
    <iframe class="embed-responsive-item" src="//www.youtube.com/embed/YE7VzlLtp-4"></iframe>
</div>

<!-- 1:1 aspect ratio -->
<div class="embed-responsive embed-responsive-1by1">
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
				<p>In the above example, we've created the 4 responsive videos with 4 different aspect ratios (<strong>21:9</strong>, <strong>16:9</strong>, <strong>4:3</strong>, and <strong>1:1</strong>) by using the classes <code>.embed-responsive-21by9</code>, <code>.embed-responsive-16by9</code>, <code>.embed-responsive-4by3</code>, and <code>.embed-responsive-1by1</code>, respectively.</p>
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
						<div class="tip-box" style="background-color:#fad28c">
							<p><strong>Important:</strong> The aspect ratio of an image describes the proportional relationship between its width and its height. Two common videographic aspect ratios are 16:9 and 4:3.</p>
						</div>
					</div>
				</div>
				<hr />
				<!--ads-->
				<div>
				    <script async="async" data-cfasync="false" src="//pl15836387.cpmprofitablenetwork.com/a10153215a0b1494db9fb84541764f6b/invoke.js"></script>
<div id="container-a10153215a0b1494db9fb84541764f6b"></div>
				</div>
				<!--ads close-->
                <h2>Horizontal Alignment of Images</h2>
                <p>You can align the images left or right within a larger box using the <code>.pull-left</code> or <code>.pull-right</code> classes. You can also use the text alignment classes such as <code>.text-left</code>, <code>.text-right</code>, and <code>.text-center</code> on the parent container to align the inline images horizontally left, right, and center.</p>
                <p>However, to center align the block-level images you need to use the <code>.mx-auto</code> margin utility class.</p>
                <p>Let's take a look at the following example to see how it works:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab2ea7.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4" >

<!-- Horizontal alignment using float classes -->
<div class="box clearfix">
    <img src="images/avatar.svg" class="pull-left" alt="Sample Image">
    <img src="images/avatar.svg" class="pull-right" alt="Sample Image">
</div>

<!-- Left alignment using text alignment classes -->
<div class="box text-left">
    <img src="images/avatar.svg" alt="Sample Image">
</div>

<!-- Right alignment using text alignment classes -->
<div class="box text-right">
    <img src="images/avatar.svg" alt="Sample Image">
</div>

<!-- Center alignment using text alignment classes -->
<div class="box text-center">
    <img src="images/avatar.svg" alt="Sample Image">
</div>

<!-- Center alignment of block-level image using auto margin -->
<div class="box">
    <img src="images/avatar.svg" class="d-block mx-auto" alt="Sample Image">
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
                <div class="bottom-link clearfix">
                    <a href="bt_button-groups.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i>
 Previous</a>
                    <a href="bt_cards.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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