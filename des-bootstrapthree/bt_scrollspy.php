<!DOCTYPE html>
	<html lang="en">
	<head>
    <meta name="description" content="Learn how to use Bootstrap ScrollSpy plugin to automatically update or highlight nav targets inside a navbar based on the scroll position." />
	  <meta name="keywords" content="Bootstrap,Bootstrap3,Scrollspy Plugin">
	  <meta name="author" content="webschooltoday.com">
    <title>How to Use Bootstrap 3 Scrollspy Plugin - WebSchool Today</title>
    <?php include "../links.php" ?>
</head>
<body>
<div>
<div class="tital">How to Use Bootstrap 3 Scrollspy Plugin</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des_bootstap3.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
          </div>
          <a href="bt_affix.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-left" aria-hidden="true"></i>
</a>
                <a href="bt_typeahead.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i>
</a>

                <h1>Bootstrap <span>ScrollSpy</span></h1>
                <p class="summary">In this tutorial you will learn how to create scrollspy with Bootstrap.</p>
                <h2>Creating ScrollSpy with Bootstrap</h2>
                <p>The Bootstrap scrollspy is a navigation mechanism that automatically highlights the nav links based on the scroll position to indicate the visitor where they are currently on the page. The scrollspy will make your web page more elegant and accessible, if you are using the bookmark links for directing the visitors to the different sections of a page that has a huge amount of content. Here's a typical example of Bootstrap scrollspy.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabb920.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        <textarea id="code1">
<body data-spy="scroll" data-target="#myScrollspy">
<div class="container">
    <div class="row">
        <div class="col-sm-3" id="myScrollspy">
            <ul class="nav nav-tabs nav-stacked" data-offset-top="120" data-spy="affix">
                <li class="active"><a href="#section1">Section One</a></li>
                <li><a href="#section2">Section Two</a></li>
                <li><a href="#section3">Section Three</a></li>
            </ul>
        </div>
        <div class="col-sm-9">
            <div id="section1">
                <h2>Section One</h2>
                <p>This is section one content…</p>
            </div>
            <hr>
            <div id="section2">
                <h2>Section Two</h2>
                <p>This is section two content…</p>
            </div>
            <hr>
            <div id="section3">
                <h2>Section Three</h2>
                <p>This is section three content…</p>
            </div>
        </div>
    </div>
</div>
</body>

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
                <div class="color-box space">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box" style="background-color:#ff8585"
>
                            <p><strong>Read Carefully:</strong> The Bootstrap scrollspy plugin requires the use of a <a href="bt_navs.php">Bootstrap nav component</a> (e.g. navbar, nav tabs or pills) for proper highlighting of active links.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Creating ScrollSpy via Data Attributes</h2>
                <p>You can easily add scrollspy behavior to your topbar navigation via data attributes without writing a single line of JavaScript code. Let's check out the following example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab748f.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        <textarea id="code2">

<body data-spy="scroll" data-target="#myNavbar" data-offset="70">
    <nav id="myNavbar" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse"> 
                    <span class="sr-only">Toggle navigation</span> 
                    <span class="icon-bar"></span> 
                    <span class="icon-bar"></span> 
                    <span class="icon-bar"></span> 
                </button>
                <a class="navbar-brand" href="#">Scrollspy</a>
            </div>
            <!-- Collection of nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#section1">Section 1</a></li>
                    <li><a href="#section2">Section 2</a></li>
                    <li><a href="#section3">Section 3</a></li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Section 4<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#section4dot1">Section 4.1</a></li>
                            <li><a href="#section4dot2">Section 4.2</a></li>
                            <li><a href="#section4dot3">Section 4.3</a></li>
                        </ul>
                    </li>
                    <li><a href="#section5">Section 5</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div id="section1">
            <h2>Section 1</h2>
            <p>This is section 1 content…</p>
        </div>
        <hr>
        <div id="section2">
            <h2>Section 2</h2>
            <p>This is section 2 content…</p>
        </div>
        <hr>
        <div id="section3">
            <h2>Section 3</h2>
            <p>This is section 3 content…</p>
        </div>
        <hr>
        <h2>Section 4</h2>
        <p>This is section 4 content</p>
        <div id="section4dot1">
            <h3>Section 4.1</h3>
            <p>This is section 4.1 content…</p>
        </div>
        <div id="section4dot2">
            <h3>Section 4.2</h3>
            <p>This is section 4.2 content…</p>
        </div>
        <div id="section4dot3">
            <h3>Section 4.3</h3>
            <p>This is section 4.3 content…</p>
        </div>
        <hr>
        <div id="section5">
            <h2>Section 5</h2>
            <p>This is section 5 content…</p>
        </div>
    </div>
</body>

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
                <p class="space">You might be thinking what this code was all about. Ok, let's go through each part of this scrollspy code one by one for a better understanding.</p>
                <h2>Explanation of Code</h2>
                <p>The Bootstrap scrollspy has basically two components &mdash; the target nav (e.g. navbar, nav tabs or pills) and the scrollable area to spy on, which is often the <code><a href="../info-html/ht_body-tag.php">&lt;body&gt;</a></code> section.</p>
                <ul>
                	<li>The <code>data-spy="scroll"</code> attribute (<i>line no-01</i>) is applied to the scrollable element that is being spied on, which is the <code>&lt;body&gt;</code> element.</li>
                    <li>The <code>data-target</code> attribute is added on the scrollable element with the ID or class of the parent element of the Bootstrap <code>.nav</code> component so that nav links can be targeted by the scrollspy for highlighting purpose.</li>
					<li>The optional <code>data-offset</code> attribute specifies the number of pixels to offset from top when calculating the position of scroll. Adjust the offset value if the targeted links are highlighting too early or too late. The default value is 10 pixels.</li>
                </ul>
				<p>Rest of the thing is self explanatory, such as the <code>.navbar</code> element specifies a <a href="bt_navbar.php">Bootstrap navbar</a>, the element <code>&lt;div id="section1"&gt;&lt;/div&gt;</code> (<i>line no-33</i>) create a bookmark with the <code>id</code> attribute, whereas the element <code>&lt;a href="#section1"&gt;Section 1&lt;/a&gt;</code> (<i>line no-17</i>) add a link to this bookmark, from within the same page, and so on.</p>
                <hr />
                <h2>Creating ScrollSpy via JavaScript</h2>
                <p>You may also add scrollspy manually using the JavaScript &mdash; just call the <code>scrollspy()</code> Bootstrap method with the <code>id</code> or <code>class</code> <a href="../css-tutorial/css-selectors.php">selector</a> of the navbar in your JavaScript code.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab7970.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

<script type="text/javascript">
$(document).ready(function(){
    $("body").scrollspy({
        target: "#myNavbar",
        offset: 70
    }) 
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
                <p>There are certain options which may be passed to <code>scrollspy()</code> Bootstrap method to customize the functionality of a scrollspy.</p>
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
                            	<td>offset</td>
                                <td>number</td>
                                <td>10</td>
                                <td>Number of pixels to offset from top when calculating position of scroll.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
				<p>You can also set this options for scrollspy using the data attributes &mdash; just append the option name to <code>data-</code>, like <code>data-offset="0"</code>.</p>
                <hr />
                <h2>Methods</h2>
                <p class="space">These are the standard bootstrap's scrollspy methods:</p>
                <h2>.scrollspy('refresh')</h2>
                <p>When using scrollspy in conjunction with adding or removing of elements from the DOM, you'll need to call the refresh method like this:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabd486.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

<script type="text/javascript">
$(document).ready(function(){
    $('[data-spy="scroll"]').each(function(){
        var $spy = $(this).scrollspy('refresh');
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
                <h2>Events</h2>
                <p>Bootstrap's scrollspy class includes few events for hooking into scrollspy functionality.</p>
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
                            	<td>activate.bs.scrollspy</td>
                                <td>This event fires whenever a new item becomes activated by the scrollspy.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p>The following example displays an alert message to the user when a new item becomes highlighted by the scrollspy.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab9083.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

<script type="text/javascript">
$(document).ready(function(){
    $("#myNavbar").on("activate.bs.scrollspy", function(){
        var currentItem = $(".nav li.active > a").text();
        $("#info").empty().html("Currently you are viewing - " + currentItem);
    })
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
                <div class="bottom-link clearfix">
                    <a href="bt_typeahead.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i>
 Previous</a>
                    <a href="bt_affix.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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