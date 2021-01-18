<!DOCTYPE html>
	<html lang="en">
	<head>
	<meta name="description" content="Learn how to use Bootstrap media object component to create structure like blog comments or tweets where content and image/video displayed side by side as well as nested media list." />
	  <meta name="keywords" content="Bootstrap,Bootstrap3,Media Object Component">
	  <meta name="author" content="webschooltoday.com">
    <title>How to Use Bootstrap 3 Media Object Component - WebSchool Today</title>
	<?php include "../links.php" ?>
</head>
<body>
<div>
<div class="tital">How to Use Bootstrap 3 Media Object Component</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des_bootstap3.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
		   </div>
		   <a href="bt_icons.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i>
</a>
                <a href="bt_images.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i>
</a>

                <h1>Bootstrap <span>Media Objects</span></h1>
                <p class="summary">In this tutorial you will learn how to use the Bootstrap media object component.</p>
                <h2>Using the Bootstrap Media Object</h2>
                <p>If you want to create a layout that contains left- or right-aligned media object like images or video alongside the textual content such as blog comments, Tweets, etc. you can do this easily using the newly introduced Bootstrap media component, like this:</p>
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab867d.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code1">

<div class="media">
    <div class="media-left">
        <a href="#">
            <img src="avatar-tiny.jpg" class="media-object" alt="Sample Image">
        </a>
    </div>
    <div class="media-body">
        <h4 class="media-heading">Jhon Carter <small><i>Posted on January 10, 2014</i></small></h4>
        <p>Excellent feature! I love it. One day I'm definitely going to put this Bootstrap component into use and I'll let you know once I do.</p>
    </div>
</div>

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
                <p>You can also apply image modifier classes like <code>.img-rounded</code>, <code>.img-circle</code> etc. to the embedded image to create other variation of the media component.</p>
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab628c.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code2">

<div class="media">
    <div class="media-left">
        <a href="#">
            <img src="avatar-tiny.jpg" class="media-object img-circle" alt="Sample Image">
        </a>
    </div>
    <div class="media-body">
        <h4 class="media-heading">Jhon Carter <small><i>Posted on January 10, 2014</i></small></h4>
        <p>Excellent feature! I love it. One day I'm definitely going to put this Bootstrap component into use and I'll let you know once I do.</p>
    </div>
</div>

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
				<hr />
				<h2>Alignment of Media Objects</h2>
				<p>You can also align the images or other media at the middle or bottom of the content block using the class <code>.media-middle</code> or <code>.media-bottom</code>. By default it is top aligned.</p>
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab2386.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
						<textarea id="code3">

<!--Top aligned media-->
<div class="media">
    <div class="media-left">
        <a href="#">
            <img src="../images/avatar-tiny.jpg" class="media-object" alt="Sample Image">
        </a>
    </div>
    <div class="media-body">
        <h4 class="media-heading">Top aligned media <small><i>This is Default</i></small></h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit…</p>
    </div>
</div>
 
<!--Middle aligned media-->
<div class="media">
    <div class="media-left media-middle">
        <a href="#">
            <img src="../images/avatar-tiny.jpg" class="media-object" alt="Sample Image">
        </a>
    </div>
    <div class="media-body">
        <h4 class="media-heading">Middle Aligned Media</h4>
        <p>Vestibulum quis quam ut magna consequat faucibus…</p>
    </div>
</div>
 
<!--Bottom aligned media-->
<div class="media">
    <div class="media-left media-bottom">
        <a href="#">
            <img src="../images/avatar-tiny.jpg" class="media-object" alt="Sample Image">
        </a>
    </div>
    <div class="media-body">
        <h4 class="media-heading">Bottom Aligned Media</h4>
        <p>Amet nibh libero, in gravida nulla. Nulla vel metus…</p>
    </div>
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
				<hr />
                <h2>Creating Nested Media List</h2>
				<p>You can also create a list of media object or nested media object using the media list component. It can be useful for comment threads or article lists.</p>
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab5ff4.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
						
	<textarea id="code4">

<ul class="media-list">
    <li class="media">
        <div class="media-left">
            <a href="#">
                <img src="avatar-tiny.jpg" class="media-object" alt="Sample Image">
            </a>
        </div>
        <div class="media-body">
            <h4 class="media-heading">Media Heading</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipis elit…</p>
            <!-- Nested media object -->
            <div class="media">
                <div class="media-left">
                    <a href="#">
                        <img src="avatar-tiny.jpg" class="media-object" alt="Sample Image">
                    </a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">Nested Media Heading</h4>
                    <p>Vestibulum consectetur scelerisque faucibus…</p>
                    <!-- Nested media object -->
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <img src="avatar-tiny.jpg" class="media-object" alt="Sample Image">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Nested Media Heading</h4>
                            <p>Integer pulvinar leo id risus tempor…</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Nested media object -->
            <div class="media">
                <div class="media-left">
                    <a href="#">
                        <img src="avatar-tiny.jpg" class="media-object" alt="Sample Image">
                    </a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">Nested Media Heading</h4>
                    <p>Phasellus vitae suscipit justo mauris…</p>
                </div>
            </div>
        </div>
    </li>
    <li class="media">
        <div class="media-left">
            <a href="#">
                <img src="avatar-tiny.jpg" class="media-object" alt="Sample Image">
            </a>
        </div>
        <div class="media-body">
            <h4 class="media-heading">Media Heading</h4>
            <p>Quisque pharetra velit id velit iaculis pretium…</p>
        </div>
    </li>
</ul>

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
                    <a href="bt_images.php" class="previous-page-bottom"><i class="fa fa-arrow-right" aria-hidden="true"></i>
 Previous</a>
                    <a href="bt_icons.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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