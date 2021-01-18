<!DOCTYPE html>
<html lang="en">
<head>
<meta name="description" content="How to Create Carousel with Bootstrap 4">
  <meta name="keywords" content="Bootstrap,Bootstrap4,Carousel with Bootstrap 4,Carousel,Create Carousel">
  <meta name="author" content="webschooltoday.com">
    <title>How to Create Carousel with Bootstrap 4 - WebSchool Today</title>
    <?php include "../links.php" ?>

    </head>
<body>
    <div>
<div class="tital">How to Create Carousel with Bootstrap 4</div>
    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des_bootstrap.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                </div>
                <a href="bt_typeahead.php" class="next-page" title="Go to Next Page">	<i class="fa fa-arrow-right" aria-hidden="true"></i>
</a>
                <a href="bt_accordion.php" class="previous-page" title="Go to Previous Page">	<i class="fa fa-arrow-left" aria-hidden="true"></i>
</a>

                <h1>Bootstrap <span>Carousel</span></h1>
                <p class="summary">In this tutorial you will learn how to create carousels with Bootstrap.</p>
                <h2>Creating Carousels with Bootstrap</h2>
                <p>The carousel also known as slideshow or image slider is some of the best way of showcasing the huge amount of contents within a small space on the web pages. It is a dynamic presentation of contents where text and images are made visible or accessible to the user by cycling through several items.</p>
                <p>The following example will show you how to build a simple carousel like image rotator or slideshow using the Bootstrap carousel plugin.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab2a5b.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1" >

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Carousel indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <!-- rg3-w for carousel items -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/slide1.png" alt="First Slide">
        </div>
        <div class="carousel-item">
            <img src="images/slide2.png" alt="Second Slide">
        </div>
        <div class="carousel-item">
            <img src="images/slide3.png" alt="Third Slide">
        </div>
    </div>
    <!-- Carousel controls -->
    <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
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
                
                <p>Check out the snippets section for examples of some <a href="../snippets/gallery92a0.html?tag=carousel" target="_blank">beautifully designed Bootstrap carousels</a>.</p>
				<p>You can also add captions such as heading or description text to the individual slides of the carousel, please check out the next example.</p>
                <hr />
                <h2>Activate Carousels via Data Attributes</h2>
                <p>With Bootstrap you can create carousels very easily via data attributes without writing a single line of JavaScript code. Let's go through the following example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabdbaf.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2" >

<div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
    <!-- Carousel indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <!-- rg3-w for carousel items -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/slide1.png" alt="First Slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="images/slide2.png" alt="Second Slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="images/slide3.png" alt="Third Slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div>
        </div>
    </div>
    <!-- Carousel controls -->
    <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
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
				<p class="space">You might be wondering what this code was all about. Ok, let's go through each part of this carousel code one by one for a better understanding.</p>
				<h2>Explanation of Code</h2>
				<p>The Bootstrap carousel has basically three components &mdash; carousel indicators (<em>small circles</em>), carousel controls (<em>previous and next arrows</em>) and the carousel items or slides.</p>
				<ul>
					<li>The outermost container of every carousel requires a unique <code>id</code> (in our case <code>id="myCarousel"</code>) so that it can be targeted by the carousel indicators (<i>line no-4,5,6</i>) and carousel controls (<i>line no-33,36</i>) to function properly.</li>
					<li>The <code>data-ride="carousel"</code> attribute of the <code>.carousel</code> element tells the Bootstrap to start animating the carousel immediately when the page load. Whereas the <code>data-interval</code> attribute specifies the time delay between two slides.</li>				
					<li>The <code>.data-slide-to</code> attribute (<i>line no-4,5,6</i>) move the slide position to a particular item  (index beginning with 0) when clicking on the specific carousel indicator.</li>
					<li>The slides are specified within the <code>.carousel-inner</code> (<i>line no-9</i>) and the content of each slide is defined within the <code>.carousel-item</code> element that can be text and images.</li>
					<li>The <code>data-slide</code> attribute on carousel controls (<i>line no-33,36</i>) accepts the keywords <code>prev</code> or <code>next</code>, which alters the slide position relative to its current position.</li>
				</ul>
                <p>Rest of the thing is self explanatory, such as the <code>.carousel</code> element specifies the Bootstrap carousel, the <code>.carousel-indicators</code> element indicates how many slides are there in the carousel and which slide is currently active, the <code>.carousel-caption</code> element used within the <code>.carousel-item</code> element defines the caption for that slide etc.</p>
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
						<div class="tip-box" style="background-color:#fad28c">
							<p><strong>Important:</strong> It is required to add the class <code>.active</code> to one of the slides (i.e. on the <code>.carousel-item</code> element). Otherwise, the carousel will not be visible.</p>
						</div>
					</div>
				</div>
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box" style="background-color:#ff8585">
							<p><strong>Read Carefully:</strong> The <code>.slide</code> class on the <code>.carousel</code> element adds CSS slide transition animation to the carousel that makes the carousel items slide when showing the new item.</p>
						</div>
					</div>
				</div>
                <hr />
                <h2>Activate Carousels via JavaScript</h2>
                <p>You may also activate a carousel manually using the JavaScript &mdash; just call the <code>carousel()</code> method with the <code>id</code> or <code>class</code> <a href="../des-css/style_selectors.php">selector</a> of the rg3-w element in your JavaScript code.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab7a1f.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3" >

<script>
$(document).ready(function(){
        $("#myCarousel").carousel();
});
</script>

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
                <h2>Options</h2>
                <p>There are certain options which can be passed to <code>carousel()</code> Bootstrap method to customize the functionality of a carousel. Options can be passed via data attributes or JavaScript.</p>
                <p>For setting the modals options via data attributes, just append the option name to <code>data-</code>, such as <code>data-interval="3000"</code>, <code>data-pause="hover"</code>, and so on.</p>
				<div class="shadow">
                	<table class="data">
                    	<thead>
                        	<tr>
                            	<th>Name</th>
                                <th>Type</th>
                                <th>Default&nbsp;Value</th>
                                <th>Description</th>
                            </tr>                        	
                        </thead>
                        <tbody>
                        	<tr>
                            	<td>interval</td>
                                <td>number</td>
                                <td>5000</td>
                                <td>Specifies the amount of time to delay (in milliseconds) between one slide to another in automatic cycling. If <code>false</code>, carousel will not automatically cycle.</td>
                            </tr>
                            <tr>
                            	<td>pause</td>
                                <td>string <br />null</td>
                                <td>"hover"</td>
								<td>Pauses the cycling of the carousel when mouse pointer enters the carousel and resumes the cycling when mouse pointer leaves the carousel, by default. If set to <code>null</code>, hovering over the carousel won't pause it.</td>
                            </tr>
                            <tr>
                            	<td>wrap</td>
                                <td>boolean</td>
                                <td>true</td>
                                <td>Specifies whether the carousel should cycle continuously or have hard stops (i.e stop at the last slide).</td>
                            </tr>
							<tr>
                            	<td>keyboard</td>
                                <td>boolean</td>
                                <td>true</td>
                                <td>Specifies whether the carousel should react to keyboard events. By default it is <code>true</code> that means if carousel has focus you can go to its previous and next slide using the left and right arrow keys on the keyboard.</td>
                            </tr>
                            <tr>
                            	<td>ride</td>
                                <td>string</td>
                                <td>false</td>
                                <td>Autoplays the carousel after the user manually cycles the first item. If "carousel", autoplays the carousel on load.</td>
                            </tr>
                            <tr>
                            	<td>touch</td>
                                <td>boolean</td>
                                <td>true</td>
                                <td>Specifies whether the carousel should support left/right swipe interactions on touchscreen devices.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
				<p>Data attributes provides an easy way for setting the carousel options, however JavaScript is the more preferable way as it prevents you from repetitive work. See the <a href="#carousel-options"><code>.carousel(options)</code></a> method in the section below to know how to set the options for carousels using JavaScript.</p>
                <hr />
				<h2>Disable Auto Sliding in Bootstrap Carousel</h2>
				<p>By default Bootstrap carousel is started playing or sliding automatically when the page loads. However, you can turn off this auto sliding by either setting the carousel <code>interval</code> option via data attribute like <code>data-interval="false"</code> on the <code>.carousel</code> element, or via JavaScript using the <a href="#carousel-options"><code>.carousel(options)</code></a>, as shown in the following example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab2d0e.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4" >

<script>
$(document).ready(function(){
    $("#myCarousel").carousel({
        interval : false
    });
});
</script>

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
				<hr />
                <h2>Methods</h2>
                <p class="space">These are the standard bootstrap's carousels methods:</p>
                <h2 id="carousel-options">.carousel(options)</h2>
                <p>This method initializes the carousel with optional options and starts cycling through items.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab3d30.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <script>
$(document).ready(function(){
    $("#myCarousel").carousel({
        interval : 3000
    });
});
</script>

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
                <h2>.carousel('cycle')</h2>
                <p>This method start carousel for cycling through the items from left to right.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab3d30.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <script>
$(document).ready(function(){
    $(".start-slide").click(function(){
        $("#myCarousel").carousel('cycle');
    });
});
</script>

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
                <h2>.carousel('pause')</h2>
                <p>This method stops the carousel from cycling through items.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab3d30.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code7" >

<script>
$(document).ready(function(){
    $(".pause-slide").click(function(){
        $("#myCarousel").carousel('pause');
    });
});
</script>

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
                <h2>.carousel(number)</h2>
                <p>This method cycles the carousel to a particular frame (start with 0, similar to an array).</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab3d30.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code8" >

<script>
$(document).ready(function(){
    $(".slide-three").click(function(){
        $("#myCarousel").carousel(3);
    });
});
</script>

                </textarea>    
                            <script>
							var editor = CodeMirror.fromTextArea(document.getElementById("code8"), {
								mode: "text/html",
								tabMode: "indent",
								styleActiveLine: true,
								lineNumbers: true,
								lineWrapping: true
							});
						</script>
                    </div>
                </div>
                <h2>.carousel('prev')</h2>
                <p>This method cycles the carousel to the previous item.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab3d30.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code9" >

<script>
$(document).ready(function(){
    $(".prev-slide").click(function(){
        $("#myCarousel").carousel('prev');
    });
});
</script>

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
                <h2>.carousel('next')</h2>
                <p>This method cycles the carousel to the next item.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab3d30.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code10" >

<script>
$(document).ready(function(){
    $(".next-slide").click(function(){
        $("#myCarousel").carousel('next');
    });
});
</script>

                </textarea>    
                            <script>
							var editor = CodeMirror.fromTextArea(document.getElementById("code10"), {
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
                <h2>Events</h2>
                <p>Bootstrap's carousel class includes few events for hooking into carousel functionality.</p>
                <div class="shadow">
                	<table class="data">
                    	<thead>
                        	<tr>
                            	<th>Event</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                        	<tr>
                            	<td>slide.bs.carousel</td>
                                <td>This event fires immediately when the slide instance method is called.</td>
                            </tr>
                            <tr>
                            	<td>slid.bs.carousel</td>
                                <td>This event is fired when the carousel has completed its slide transition.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p>The following example displays an alert message to the user when sliding transition of a carousel item has been fully completed.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab5447.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code11" >

<script>
$(document).ready(function(){
    $('#myCarousel').on('slid.bs.carousel', function(){
        alert("The sliding transition of previous carousel item has been fully completed.");
    }); 
});
</script>

                </textarea>    
                            <script>
							var editor = CodeMirror.fromTextArea(document.getElementById("code11"), {
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
                    <a href="bt_accordion.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i>
 Previous</a>
                    <a href="bt_typeahead.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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