<!DOCTYPE html>
	<html lang="en">
	<head>
	<meta name="description" content="How to Use Bootstrap 4 Scrollspy Plugin">
	  <meta name="keywords" content="Bootstrap,Bootstrap4,Scrollspy Plugin,Use Bootstrap 4 Scrollspy Plugin">
	  <meta name="author" content="webschooltoday.com">
    <title>How to Use Bootstrap 4 Scrollspy Plugin - Webschool Today</title>
    <?php include "../links.php" ?>
</head>
<body>
<div>
<div class="tital">How to Use Bootstrap 4 Scrollspy Plugin</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des_bootstrap.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
        </div>
                <a href="bt_typeahead.php" class="previous-page" title="Go to Previous Page"></a>
            	<a href="bt_toasts.php" class="next-page" title="Go to Next Page"></a>
                <h1>Bootstrap <span>ScrollSpy</span></h1>
                <p class="summary">In this tutorial you will learn how to create scrollspy with Bootstrap.</p>
                <h2>Creating ScrollSpy with Bootstrap</h2>
                <p>The Bootstrap scrollspy is a navigation mechanism that automatically highlights the nav links based on the scroll position to indicate the visitor where they are currently on the page. The scrollspy will make your web page more elegant and accessible, if you are using the bookmark links for directing the visitors to the different sections of a page that has a huge amount of content.</p>
                <p>Here's a typical example of Bootstrap scrollspy.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelaba8e1.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                       
	<textarea id="code1">

<body data-spy="scroll" data-offset="15" data-target="#myScrollspy">
    <div class="container">
        <div class="row">
            <div class="col-sm-3" id="myScrollspy">
                <div class="list-group">
                    <a class="list-group-item list-group-item-action active" href="#section1">Section One</a>
                    <a class="list-group-item list-group-item-action" href="#section2">Section Two</a>
                    <a class="list-group-item list-group-item-action" href="#section3">Section Three</a>
                </div>
            </div>
            <div class="col-sm-9">
                <div id="section1">
                    <h2>Section One</h2>
                    <p>This is section one content...</p>
                </div>
                <hr>
                <div id="section2">
                    <h2>Section Two</h2>
                    <p>This is section two content...</p>
                </div>
                <hr>
                <div id="section3">
                    <h2>Section Three</h2>
                    <p>This is section three content...</p>
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
                        <div class="note-box" style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> The Bootstrap scrollspy plugin requires the use of a <a href="bt_navs.php">Bootstrap nav component</a> (e.g. navbar, nav tabs or pills) for proper highlighting of active links.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Creating ScrollSpy via Data Attributes</h2>
                <p>You can easily add scrollspy behavior to your topbar navigation via data attributes without writing a single line of JavaScript code. Let's check out the following example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab3dd3.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                       
	<textarea id="code2">
<body data-spy="scroll" data-offset="60" data-target="#myNavbar">
    <nav id="myNavbar" class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <div class="container">
            <a href="#" class="navbar-brand">Navbar</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="nav navbar-nav">
                    <li class="nav-item">
                        <a href="#section1" class="nav-link">Section 1</a>
                    </li>
                    <li class="nav-item">
                        <a href="#section2" class="nav-link">Section 2</a>
                    </li>
                    <li class="nav-item">
                        <a href="#section3" class="nav-link">Section 3</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Section 4<b class="caret"></b></a>
                        <div class="dropdown-menu">
                            <a href="#section4dot1" class="dropdown-item">Section 4.1</a>
                            <a href="#section4dot2" class="dropdown-item">Section 4.2</a>
                            <a href="#section4dot3" class="dropdown-item">Section 4.3</a>
                        </div>
                    </li>
                    <li>
                        <a href="#section5" class="nav-link">Section 5</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div id="section1">
            <h2>Section 1</h2>
            <p>This is section 1 content...</p>
        </div>
        <hr>
        <div id="section2">
            <h2>Section 2</h2>
            <p>This is section 2 content...</p>
        </div>
        <hr>
        <div id="section3">
            <h2>Section 3</h2>
            <p>This is section 3 content...</p>
        </div>
        <hr>
        <h2>Section 4</h2>
        <p>This is section 4 content</p>
        <div id="section4dot1">
            <h3>Section 4.1</h3>
            <p>This is section 4.1 content...</p>
        </div>
        <div id="section4dot2">
            <h3>Section 4.2</h3>
            <p>This is section 4.2 content...</p>
        </div>
        <div id="section4dot3">
            <h3>Section 4.3</h3>
            <p>This is section 4.3 content...</p>
        </div>
        <hr>
        <div id="section5">
            <h2>Section 5</h2>
            <p>This is section 5 content...</p>
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
                <p>The Bootstrap scrollspy has basically two components &mdash; the target nav (e.g. navbar, nav tabs or pills) and the scrollable area to spy on, which is often the <a href="../info-html/ht_body-tag.php"><code>&lt;body&gt;</code></a> section.</p>
                <ul>
                	<li>The <code>data-spy="scroll"</code> attribute (<i>line no-01</i>) is applied to the scrollable element that is being spied on, which is the <code>&lt;body&gt;</code> element.</li>
                    <li>The <code>data-target</code> attribute is added on the scrollable element with the ID or class of the parent element of the Bootstrap <code>.nav</code> component so that nav links can be targeted by the scrollspy for highlighting purpose.</li>
					<li>The optional <code>data-offset</code> attribute specifies the number of pixels to offset from top when calculating the position of scroll. Adjust the offset value if the targeted links are highlighting too early or too late. The default value is 10 pixels.</li>
                </ul>
				<p>Rest of the thing is self explanatory, such as the <code>.navbar</code> element specifies a <a href="bt_navbar.php">Bootstrap navbar</a>, the element <code>&lt;div id="section1"&gt;&lt;/div&gt;</code> (<i>line no-33</i>) create a bookmark with the <code>id</code> attribute, whereas the element <code>&lt;a href="#section1"&gt;Section 1&lt;/a&gt;</code> (<i>line no-17</i>) add a link to this bookmark, from within the same page, and so on.</p>
                <hr />
                <h2>Creating ScrollSpy via JavaScript</h2>
                <p>You may also add scrollspy manually using the JavaScript &mdash; just call the <code>scrollspy()</code> Bootstrap method with the <code>id</code> or <code>class</code> <a href="../des-html/style_selectors.php">selector</a> of the navbar in your JavaScript code.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelaba061.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">
<script>
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
                            <tr>
                                <td>method</td>
                                <td>string</td>
                                <td>auto</td>
                                <td>Finds which section the spied element is in. The value <code>auto</code> will choose the best method get scroll coordinates. Whereas, the value <code>offset</code> will use jQuery offset method to get scroll coordinates, and the value <code>position</code> will use jQuery position method to get scroll coordinates.</td>
                            </tr>
                            <tr>
                                <td>target</td>
                                <td>string</td>
                                <td></td>
                                <td>Specifies element to apply Scrollspy plugin.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
				<p>You can also set this options for scrollspy using the data attributes &mdash; just append the option name to <code>data-</code>, like <code>data-offset="0"</code>, <code>data-method="position"</code>, and so on.</p>
                <hr />
                <h2>Methods</h2>
                <p class="space">These are the standard bootstrap's scrollspy methods:</p>
                <h2>.scrollspy('refresh')</h2>
                <p>When using scrollspy in conjunction with adding or removing of elements from the DOM, you'll need to call the refresh method like this:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab2a77.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

<script>
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
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab6ceb.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

<script>
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
                    <a href="bt_toasts.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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