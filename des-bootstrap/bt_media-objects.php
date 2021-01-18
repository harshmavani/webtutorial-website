<!DOCTYPE html>
	<html lang="en">
	<head>
	<meta name="description" content="Bootstrap 4 Media Object Component">
	  <meta name="keywords" content="Bootstrap,Bootstrap4,Bootstrap 4 Media,Media Object Componentbootstrap media">
	  <meta name="author" content="webschooltoday.com">
    <title>Bootstrap 4 Media Object Component - WebSchool Today</title>
    <?php include "../links.php" ?>
</head>
<body>
<div>
<div class="tital">Bootstrap 4 Media Object Component</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des_bootstrap.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
           </div>
           <a href="bt_icons.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i>
</a>
                <a href="bt_cards.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i>
</a>

                <h1>Bootstrap <span>Media Objects</span></h1>
                <p class="summary">In this tutorial you will learn how to use the Bootstrap media object component.</p>
                <h2>Using the Bootstrap Media Object</h2>
                <p>If you want to create a layout that contains left- or right-aligned media object like images or video alongside the textual content such as blog comments, Tweets, etc. you can do this easily using the newly introduced Bootstrap media component, like this:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabf555.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1" >

<div class="media">
    <img src="images/avatar.svg" class="mr-3" alt="Sample Image">
    <div class="media-body">
        <h5 class="mt-0">Jhon Carter <small><i>Posted on January 10, 2019</i></small></h5>
        <p>This is really an excellent feature! I love it. One day I'm definitely going to use this Bootstrap media object component into my application.</p>
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

                <p>You can also create other variation of the media component. Apply the image modifier classes like <code>.rounded</code> or <code>.rounded-circle</code> to the image to create rounded corner or circular image.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab4b37.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2" >

<div class="media">
    <img src="images/avatar.svg" class="rounded-circle mr-3" alt="Sample Image">
    <div class="media-body">
        <h5 class="mt-0">Jhon Carter <small><i>Posted on January 10, 2019</i></small></h5>
        <p>This is really an excellent feature! I love it. One day I'm definitely going to use this Bootstrap media object component into my application.</p>
    </div>
</div>                 </textarea>
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
                <h2>Creating Nested Media Objects</h2>
				<p>Media objects can also be nested inside other media object. It can be very useful for creating comment threads in a blog post. Here's is an example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab69f7.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3" >
<div class="media">
    <img src="images/avatar.svg" class="rounded-circle mr-3" alt="Sample Image">
    <div class="media-body">
        <h5 class="mt-0">Jhon Carter <small><i>Posted on January 10, 2019</i></small></h5>
        <p>This is really an excellent feature! I love it. One day I'm definitely going to use this Bootstrap media object component into my application.</p>
        <!-- Nested media object -->
        <div class="media mt-2">
            <img src="images/avatar.svg" class="rounded-circle mr-3" alt="Sample Image">
            <div class="media-body">
                <h5 class="mt-0">Clark Kent <small><i>Posted on January 12, 2019</i></small></h5>
                <p>Thanks, you found this component useful. Don't forget to check out other Bootstrap components as well. They're also very useful.</p>
            </div>
        </div>
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
                <h2>Alignment of Media Objects</h2>
				<p>You can also change the horizontal alignment of content and media by simply tweaking the HTML code itself, as demonstrated in the following example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab86e7.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4" >
<div class="media">    
    <div class="media-body">
        <h5 class="mt-0">Jhon Carter <small><i>Posted on January 10, 2019</i></small></h5>
        <p>This is really an excellent feature! I love it. One day I'm definitely going to use this Bootstrap media object component into my application.</p>
    </div>
    <img src="images/avatar.svg" class="ml-3" alt="Sample Image">
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

				<p>Besides that you can also align the images or other media at the middle or bottom of the content block using the flexbox utilities classes, for example, you can use the class <code>.align-self-center</code> for vertical center alignment, and the class <code>.align-self-end</code> for bottom alignment. By default, the media inside a media object is top aligned. Here's an example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabf1b3.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        <textarea id="code5" >
<!--Top aligned media-->
<div class="media">
    <img src="images/avatar.svg" class="mr-3" alt="Sample Image">
    <div class="media-body">
        <h5 class="mt-0">Top aligned media <small><i>This is Default</i></small></h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
    </div>
</div>
<hr>
<!--Middle aligned media-->
<div class="media">
    <img src="images/avatar.svg" class="align-self-center mr-3" alt="Sample Image">
    <div class="media-body">
        <h5 class="mt-0">Middle Aligned Media</h5>
        <p>Vestibulum quis quam ut magna consequat faucibus aleo...</p>
    </div>
</div>
<hr>
<!--Bottom aligned media-->
<div class="media">
    <img src="images/avatar.svg" class="align-self-end mr-3" alt="Sample Image">
    <div class="media-body">
        <h5 class="mt-0">Bottom Aligned Media</h5>
        <p>Amet nibh libero, in gravida nulla. Nulla vel metus...</p>
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
                <hr />
                <h2>Creating a Media List</h2>
                <p>You can also create a media list using the HTML list elements and the media object classes. Just apply the class <code>.list-unstyled</code> on the <code>&lt;ul&gt;</code> or <code>&lt;ol&gt;</code> element, and the class <code>.media</code> on the child <code>&lt;li&gt;</code> element, as demonstrated in the following examples:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabfe81.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        <textarea id="code6" >
<ul class="list-unstyled">
    <li class="media">
        <img src="images/avatar.svg" class="mr-3" alt="Sample Image">
        <div class="media-body">
            <h5 class="mt-0">List-based media object</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante.</p>
        </div>
    </li>
    <li class="media my-2">
        <img src="images/avatar.svg" class="mr-3" alt="Sample Image">
        <div class="media-body">
            <h5 class="mt-0">List-based media object</h5>
            <p>Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a mi suscipit tincidunt. Ut tempus dictum risus. Pellentesque viverra sagittis quam at mattis.</p>
        </div>
    </li>
    <li class="media">
        <img src="images/avatar.svg" class="mr-3" alt="Sample Image">
        <div class="media-body">
            <h5 class="mt-0">List-based media object</h5>
            <p>Amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
        </div>
    </li>
</ul>
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
                <div class="bottom-link clearfix">
                    <a href="bt_cards.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i>
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