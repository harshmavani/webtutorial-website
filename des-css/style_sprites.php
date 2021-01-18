<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="keywords" content="css,css3,CSS Image Sprites">
	  <meta name="author" content="webschooltoday.com">
    <title>How to Create and Use CSS Image Sprites - WebSchool Today</title>
    <meta name="description" content="How to Create and Use CSS Image Sprites" />
    
<style>
table.sprite-demo{width:500px;margin:20px auto 35px}
table.sprite-demo td.normal-menu,table.sprite-demo td.sprite-menu{width:30%}
.sprite-menu ul{list-style:none}
.sprite-menu ul li{padding:5px;width:200px;font-size:16px;font-family:CuprumFFU,"Trebuchet MS",Arial,sans-serif;background-image:none}
.sprite-menu ul li a{height:50px;line-height:50px;display:inline-block;padding-left:60px;color:#3e789f;background:url(../lib/images/mySprite.png) no-repeat}
.sprite-menu ul li a:hover{color:#333}
.sprite-menu ul li.firefox a{background-position:0 0}
.sprite-menu ul li.chrome a{background-position:0 -100px}
.sprite-menu ul li.ie a{background-position:0 -200px}
.sprite-menu ul li.safari a{background-position:0 -300px}
.sprite-menu ul li.opera a{background-position:0 -400px}
.sprite-menu ul li.firefox a:hover{background-position:0 -50px}
.sprite-menu ul li.chrome a:hover{background-position:0 -150px}
.sprite-menu ul li.ie a:hover{background-position:0 -250px}
.sprite-menu ul li.safari a:hover{background-position:0 -350px}
.sprite-menu ul li.opera a:hover{background-position:0 -450px}
.normal-menu ul li{list-style:none;padding:5px;width:200px;background-image:none}
.normal-menu ul li a{height:50px;line-height:50px;display:inline-block;font-family:CuprumFFU,"Trebuchet MS",Arial,sans-serif;font-size:16px;color:#3e789f;padding-left:60px}
.normal-menu ul li a:hover{color:#333}
.normal-menu ul li.firefox a{background:url(../lib/images/mySprite/firefox.png) no-repeat}
.normal-menu ul li.chrome a{background:url(../lib/images/mySprite/chrome.png) no-repeat}
.normal-menu ul li.ie a{background:url(../lib/images/mySprite/ie.png) no-repeat}
.normal-menu ul li.safari a{background:url(../lib/images/mySprite/safari.png) no-repeat}
.normal-menu ul li.opera a{background:url(../lib/images/mySprite/opera.png) no-repeat}
.normal-menu ul li.firefox a:hover{background:url(../lib/images/mySprite/firefox-hover.png) no-repeat}
.normal-menu ul li.chrome a:hover{background:url(../lib/images/mySprite/chrome-hover.png) no-repeat}
.normal-menu ul li.ie a:hover{background:url(../lib/images/mySprite/ie-hover.png) no-repeat}
.normal-menu ul li.safari a:hover{background:url(../lib/images/mySprite/safari-hover.png) no-repeat}
.normal-menu ul li.opera a:hover{background:url(../lib/images/mySprite/opera-hover.png) no-repeat}
</style>
<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">How to Create and Use CSS Image Sprites</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des-css.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="style_opacity.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="style_media-types.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>CSS <span>Sprites</span></h1>
                <p class="summary">CSS sprites technique is a way to reduce the number of HTTP requests made for image resources, by combining images in a single file.</p>
                <h2>What is a Sprite</h2>
                <p>Sprites are two-dimensional images which are made up of combining small images into one larger image at defined X and Y coordinates.</p>
                <p class="space">To display a single image from the combined image, you could use the CSS <a href="../info-css/style_background-position-property.php"><code>background-position</code></a> property, defining the exact position of the image to be displayed.</p>
                <h2>Advantage of Using CSS Image Sprite</h2>
                <p>A web page with many images, particularly many small images, such as icons, buttons, etc. can take a long time to load and generates multiple server requests.</p>
                <p>Using the image sprites instead of separate images will significantly reduce the number of HTTP requests a browser makes to the server, which can be very effective for improving the loading time of web pages and overall site performance.</p>
                <div class="color-box break">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> Reducing the number of HTTP requests has the major impact on reducing response time that makes the web page more responsive for the user.</p>
                        </div>
                    </div>
                </div>
                <p>Checkout the following examples and you will see one visible difference; when you place the mouse pointer over the browser icons in non-sprite version for the first time the hover image will appear after some time, it happens because the hover image is loaded from the server on mouse hover, since the normal and hover images are two different images.</p>
                <p>Whereas in sprite version, since all images are combined in a single image the hover image is displayed immediately on mouse hover that results in smooth hover effect.</p>
                <table class="sprite-demo space">
                    <tr>
                        <td class="normal-menu">
                            <ul>
                                <li class="firefox"><a href="javascript:void(0);">Firefox</a></li>
                                <li class="chrome"><a href="javascript:void(0);">Chrome</a></li>
                                <li class="ie"><a href="javascript:void(0);">Explorer</a></li>
                                <li class="safari"><a href="javascript:void(0);">Safari</a></li>
                                <li class="opera"><a href="javascript:void(0);">Opera</a></li>
                            </ul>
                        </td>
                        <td id="example-a"><img src="../assets/images/example-A.gif" alt="Example A" /></td>
                    </tr>
                </table>
                <table class="sprite-demo">
                    <tr>
                        <td class="sprite-menu">
                            <ul>
                                <li class="firefox"><a href="javascript:void(0);">Firefox</a></li>
                                <li class="chrome"><a href="javascript:void(0);">Chrome</a></li>
                                <li class="ie"><a href="javascript:void(0);">Explorer</a></li>
                                <li class="safari"><a href="javascript:void(0);">Safari</a></li>
                                <li class="opera"><a href="javascript:void(0);">Opera</a></li>
                            </ul>
                        </td>
                        <td id="example-b"><img src="../assets/images/example-B.gif" alt="Example B" /></td>
                    </tr>
                </table>
                <p>Using CSS sprite technique demonstrated in the: [<a href="#example-b">EXAMPLE - B</a>]; we were able to reduce the number of HTTP requests by 9 and the total file size of the image(s) by 38.2 KB as compared to the [<a href="#example-a">EXAMPLE - A</a>];. That's a pretty huge improvement for such a small example. Imagine what you could do on a complete website.</p>
                <p>The whole process of creating this example is explained below.</p>
                <hr />
                <h2>Making the Image Sprite</h2>
                <p>We made this sprite image by combining 10 separate images in a single image (<a href="../lib/images/mySprite.png" target="_blank">mySprite.png</a>).  You can create your own sprite using any image editing tool you like. </p>
                <div class="space"><img src="../lib/images/image-sprite-illustration.jpg" width="600" height="650" alt="Sprite Image Illustration" /></div>
                <div class="color-box space">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"  style="background-color:#fad28c"
>
                            <p><strong>IMportant:</strong> For the sake of simplicity, we have used all icons of same size, and place them closely to each other for easy offset calculation.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Display an Icon from Image Sprite</h2>
                <p>Finally, utilizing CSS, we can display just the part of an image sprite we need.</p>
                <p>First of all, we will create the class <code>.sprite</code> that will load our sprite image. This is to avoid repetition, because all items share the same background-image.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab3f0b.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

.sprite {
    background: url("images/mySprite.png") no-repeat;
}
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
                <p>Now, we must define a class for each item we want to display. For example, to display Internet Explorer icon form the image sprite the CSS code would be.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab3f0b.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

.ie {
    width: 50px; /* Icon width */
    height: 50px; /* Icon height */
    display: inline-block; /* Display icon as inline block */
    background-position: 0 -200px; /* Icon background position in sprite */
}

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
                <p>Now the question arises, how did we get those pixel values for <a href="../info-css/style_background-position-property.php"><code>background-position</code></a>? Let's find out. The first value is the <em>horizontal position</em>, and second is the <em>vertical position</em> of background. As the upper-left corner of Internet Explorer icon touches the left edge so its horizontal distance from the starting point i.e. top-left corner of the image sprite is <b>0</b>, and since it is placed on the <i>5th position</i> so its vertical distance from the starting point of image sprite is <code>4 X 50px = 200px</code>, because height of each icon is <b>50px</b>.</p>
                <p>To show the Internet Explorer icon we have to move its upper-left corner to the starting point i.e. top-left corner of image sprite (mySprite.png). Also, since this icon is placed at the vertical distance of <b>200px</b>, we will need to shift the whole background-image (mySprite.png) vertically up by <b>200px</b>, which requires us to apply the value as a negative number that is <b>-200px</b>, because the negative value makes it go vertically up whereas a positive value would move it down. However, it doesn't require a horizontal offset, since there are no pixels before the upper-left corner of the Internet Explorer icon.</p>
                <div class="color-box space">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"  style="background-color:#fad28c"
>
                            <p><strong>Important:</strong> Just play around with the value of <a href="../info-css/style_background-position-property.php"><code>background-position</code></a> property in the upcoming examples and you will quickly learn how the offsets work.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Creating a Navigation Menu Using CSS Image Sprite</h2>
                <p>In the previous section we have learned, how to display an individual icon from an image sprite. This is the easiest way to use image sprites, now we are going one step ahead by building a navigation menu with <em>rollover effect</em> as demonstrated in [<a href="#example-b">EXAMPLE - B</a>].</p>
                <p class="space">Here we will use the same sprite image (<a href="../lib/images/mySprite.png" target="_blank">mySprite.png</a>) to create our navigation menu.</p>
                <h2>Foundation HTML for Navigation</h2>
                <p>We will start by creating our navigation menu with an HTML <a href="../des-html/html-lists.php#unordered-lists">unordered list</a>.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab86c1.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

<ul class="menu">
    <li class="firefox"><a href="#">Firefox</a></li>
    <li class="chrome"><a href="#">Chrome</a></li>
    <li class="ie"><a href="#">Explorer</a></li>
    <li class="opera"><a href="#">Opera</a></li>
    <li class="safari"><a href="#">Safari</a></li>
</ul>

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
                <h2>Applying the CSS on Navigation</h2>
                <p>The following sections will describes you how to convert the simple unordered list given in example above to a spite image based navigation using the CSS.</p>
                <h3>Step 1: Resetting the List Structure</h3>
                <p>By default, HTML <a href="../des-html/html-lists.php#unordered-lists">unordered lists</a> are displayed with bullets. We'll need to remove the default bullets by setting the <a href="../info-css/style_list-style-type-property.php"><code>list-style-type</code></a> attribute to <code>none</code>.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab6aa5.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

ul.menu {
    list-style-type: none;
}
ul.menu li {
    padding: 5px;
    font-size: 16px;
    font-family: "Trebuchet MS", Arial, sans-serif;
}

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
                <h3>Step 2: Setting Common Properties for Each Links</h3>
                <p>In this step we will set all the common CSS properties that all links are going to share. Such as, <a href="../info-css/style_color-property.php"><code>color</code></a>, <a href="../info-css/style_background-image-property.php"><code>background-image</code></a>, <a href="../info-css/style_display-property.php"><code>display</code></a>, <a href="../info-css/style_padding-property.php"><code>padding</code></a>, etc.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabc97e.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

ul.menu li a {
    height: 50px;
    line-height: 50px;
    display: inline-block;
    padding-left: 60px; /* To sift text off the background-image */
    color: #3E789F;
    background: url("images/mySprite.png") no-repeat; /* As all link share the same background-image */
}

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
                <h3>Step 3: Setting Default State of Each Links</h3>
                <p>Now, we must define a class for each menu item, because every item in the image sprite has different <a href="../info-css/style_background-position-property.php"><code>background-position</code></a>. For example, Firefox icon is placed at the starting point i.e. top-left corner of the image sprite, so there is no need to shift the background-image. Hence the vertical and horizontal position of the background in this case would be 0. Similarly, you can define background-position for other icons within the image sprite.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab2f98.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code6">

ul.menu li a {
    height: 50px;
    line-height: 50px;
    display: inline-block;
    padding-left: 60px; /* To sift text off the background-image */
    color: #3E789F;
    background: url("images/mySprite.png") no-repeat; /* As all link share the same background-image */
}

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
                <h3>Step 4: Adding Hover States of Links</h3>
                <p>Adding hover states owns the same principle as adding the above links. Just move their upper-left corner to the starting point (i.e. top-left corner) of the image sprite as we have done above. You can simply calculate the <a href="../info-css/style_background-position-property.php"><code>background-position</code></a> using the following formula:</p>
                <p><code>Vertical position of hover state = Vertical position of normal state - 50px</code></p>
                <p>As rollover images are just below the default state and height of each icon is equal to 50px. The hover state of icons also doesn't require a horizontal offset, since there are no pixels before the upper-left corner of them.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab3966.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code7">

ul.menu li.firefox a {
    background-position: 0 0;
}
ul.menu li.chrome a {
    background-position: 0 -100px;
}
ul.menu li.ie a {
    background-position: 0 -200px;
}
ul.menu li.safari a {
    background-position: 0 -300px;
}
ul.menu li.opera a {
    background-position: 0 -400px;
}

     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code7"), {
									mode: "text/html",
									tabMode: "indent",
									styleActiveLine: true,
									lineNumbers: true,
									lineWrapping: true
								});

							</script>
                    </div>
                </div>
                <p class="break">Done! Here is our final HTML and CSS code after combining the whole process:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab92dd.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        <textarea id="code9">

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Example of Sprite Navigation Menu</title>
<style>
    ul.menu {
        list-style-type: none;
    }
    ul.menu li {
        padding: 5px;
        font-size: 16px;
        font-family: "Trebuchet MS", Arial, sans-serif;
    }
    ul.menu li a {
        height: 50px;
        line-height: 50px;
        display: inline-block;
        padding-left: 60px; /* To sift text off the background-image */
        color: #3E789F;
        background: url("images/mySprite.png") no-repeat; /* As all link share the same background-image */
    }
    ul.menu li.firefox a {
        background-position: 0 0;
    }
    ul.menu li.chrome a {
        background-position: 0 -100px;
    }
    ul.menu li.ie a {
        background-position: 0 -200px;
    }
    ul.menu li.safari a {
        background-position: 0 -300px;
    }
    ul.menu li.opera a {
        background-position: 0 -400px;
    }
    ul.menu li.firefox a:hover {
        background-position: 0 -50px;
    }
    ul.menu li.chrome a:hover {
        background-position: 0 -150px;
    }
    ul.menu li.ie a:hover {
        background-position: 0 -250px;
    }
    ul.menu li.safari a:hover {
        background-position: 0 -350px;
    }
    ul.menu li.opera a:hover {
        background-position: 0 -450px;
    }
</style>
</head>
<body>
    <ul class="menu">
        <li class="firefox"><a href="#">Firefox</a></li>
        <li class="chrome"><a href="#">Chrome</a></li>
        <li class="ie"><a href="#">Explorer</a></li>
        <li class="opera"><a href="#">Opera</a></li>
        <li class="safari"><a href="#">Safari</a></li>
    </ul>
</body>
</html>

     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code9"), {
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
                    <a href="style_media-types.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="style_opacity.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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