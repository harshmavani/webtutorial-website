	<!DOCTYPE html>
	<html lang="en">
	<head>
    <meta name="description" content="Learn how to add dropdown menu to links, buttons, navs and navbar etc. quickly and easily with the Bootstrap dropdown plugin without writing any JavaScript code." />
	  <meta name="keywords" content="Bootstrap,Bootstrap3,Dropdown Menu">
	  <meta name="author" content="webschooltoday.com">
    <title>How to Create Dropdown Menu with Bootstrap 3 - WebSchool Today</title>
  	<?php include "../links.php" ?>
</head>
<body>
<div>
<div class="tital">How to Create Dropdown Menu with Bootstrap 3</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des_bootstap3.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
   </div>
   <a href="bt_tabs.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i>
</a>
                <a href="bt_modals.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i>
</a>

                <h1>Bootstrap <span>Dropdowns</span></h1>
                <p class="summary">In this tutorial you will learn how to add dropdown menus to various components using the Bootstrap dropdown plugin.</p>
                <h2>Creating Dropdown Menus with Bootstrap</h2>
				<p>The dropdown menu is typically used inside the navigation header to display a list of related links when a user mouse hover or click on the trigger element.</p>
                <p class="space">You can use the Bootstrap dropdown plugin to add toggleable dropdown menus (i.e. open and close on click) to almost anything such as links, buttons or button groups, navbar, tabs and pills nav etc. without even writing a single line of JavaScript code.</p>
                <h2>Adding Dropdowns via Data Attributes</h2>
                <p>Bootstrap provides an easy and elegant mechanism for adding the dropdown menu to an element via data attributes. The following example will show you the minimum markup required for adding a dropdown menu to the hyperlink via data attributes.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelab5bdf.html">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<div class="dropdown">
    <a href="#" data-toggle="dropdown" class="dropdown-toggle">Dropdown <b class="caret"></b></a>
    <ul class="dropdown-menu">
        <li><a href="#">Action</a></li>
        <li><a href="#">Another action</a></li>
    </ul>
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
                <p class="space">The above example demonstrates the most basic form of the Bootstrap dropdowns. Let's understand each part of the Bootstrap dropdown component one by one.</p>
                <h2>Explanation of Code</h2>
                <p>The Bootstrap dropdown has basically two components &mdash; the dropdown trigger element which can be a hyperlink or button, and the dropdown menu itself.</p>
                <ul>
                	<li>The <code>.dropdown</code> class specifies a dropdown menu.</li>
                    <li>The <code>.dropdown-toggle</code> class defines the trigger element, which is a hyperlink in our case, whereas the attribute <code>data-toggle="dropdown"</code> is required on the trigger element to toggle the dropdown menu.</li>
                    <li>The <code>.caret</code> element inside the trigger anchor element creates a small down triangle icon which indicates that the link contains a dropdown menu.</li>
                    <li>The unordered list with the class <code>.dropdown-menu</code> is actually building the dropdown menu that typically contains the related links or actions.</li>
                </ul>
                <p>The previous example code has one small problem. If you click the dropdown link it will add a <code>#</code> character to the URL while showing the dropdowns. If you want to keep your URLs intact use the <code>data-target</code> attribute instead of <code>href="#"</code>, like this:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelab25f3.html">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

<div class="dropdown">
    <a data-target="#" href="page.html" data-toggle="dropdown" class="dropdown-toggle">Dropdown <b class="caret"></b></a>
    <ul class="dropdown-menu">
        <li><a href="#">Action</a></li>
        <li><a href="#">Another action</a></li>
    </ul>   
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
				<p>Similarly, you can add the dropdowns to the buttons and nav components. The following section will show you some common implementation of the Bootstrap dropdown.</p>
				<hr />
				<h2>Dropdowns within a Navbar</h2>
                <p>The following examples will show you how to add dropdowns to navbar.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelab9ad0.html">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        <textarea id="code3">

<div class="navbar navbar-static">
    <div class="navbar-inner">
        <a href="#" class="brand">Brand</a>
        <ul role="navigation" class="nav">
            <li><a href="#">Home</a></li>
            <li><a href="#">Profile</a></li>
            <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Messages <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Inbox</a></li>
                    <li><a href="#">Drafts</a></li>
                    <li><a href="#">Sent Items</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Trash</a></li>
                </ul>
            </li>
        </ul>
        <ul class="nav pull-right">
            <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Admin <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Settings</a></li>
                </ul>
            </li>
        </ul>
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

				<div class="color-box">
					<div class="shadow">
						<div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
						<div class="tip-box" style="background-color:#fad28c"
>
							<p><strong>Important:</strong> You can draw a divider line to separate the links inside a dropdown menu by adding the class <code>.divider</code> on a blank list element.</p>
						</div>
					</div>
				</div>
                <hr />
                <h2>Dropdowns within Navs</h2>
                <p>The following example will show you how to add dropdowns to pills navs.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelab12cc.html">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        <textarea id="code4">

<ul class="nav nav-pills">
    <li class="active"><a href="#">Home</a></li>
    <li><a href="#">Profile</a></li>
    <li class="dropdown">
        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Messages <b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li><a href="#">Inbox</a></li>
            <li><a href="#">Drafts</a></li>
            <li><a href="#">Sent Items</a></li>
            <li class="divider"></li>
            <li><a href="#">Trash</a></li>
        </ul>
    </li>
    <li class="dropdown pull-right">
        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Admin <b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li class="divider"></li>
            <li><a href="#">Settings</a></li>
        </ul>
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
				<p>You can simply convert the above example to a tab dropdown by replacing the class <code>.nav-pills</code> with the <code>.nav-tabs</code>, without any further change in markup.</p>
                <hr />
                <h2 id="button-dropdowns">Dropdowns within Buttons</h2>
                <p>The following examples will show you how to add dropdowns to buttons.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelab3aff.html">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

<div class="btn-group">
    <button type="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle">Action <span class="caret"></span></button>
    <ul class="dropdown-menu">
        <li><a href="#">Action</a></li>
        <li><a href="#">Another action</a></li>
        <li class="divider"></li>
        <li><a href="#">Separated link</a></li>
    </ul>
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
                <h2>Bootstrap Split Button Dropdowns</h2>
                <p>The following examples will show you how to add dropdowns to split buttons.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelaba800.html">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code6">

<div class="btn-group">
    <button type="button" class="btn btn-default">Action</button>
    <button type="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle"><span class="caret"></span></button>
    <ul class="dropdown-menu">
        <li><a href="#">Action</a></li>
        <li><a href="#">Another action</a></li>
        <li class="divider"></li>
        <li><a href="#">Separated link</a></li>
    </ul>
</div>

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

                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box" style="background-color:#fad28c"
>
                            <p><strong>Important:</strong> You can use the Bootstrap's button relative sizing classes like <code>.btn-lg</code>, <code>.btn-sm</code> and <code>.btn-xs</code> to further <a target="_blank" href="../codelab34f4.html?topic=bt_3&amp;file=sizing-button-dropdowns">resizing the buttons dropdowns</a>.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Dropdowns Inside Button Groups</h2>
				<p>To create dropdown menus inside a button group just place a <code>.btn-group</code> along with the dropdown markup within another <code>.btn-group</code>.</p>
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelaba17b.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code7">

<div class="btn-group">
    <button type="button" class="btn btn-primary">Button</button>
    <button type="button" class="btn btn-primary">Another Button</button>
    <div class="btn-group">
        <button type="button" data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Dropdown <span class="caret"></span></button>
        <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
        </ul>
    </div>
</div>

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
				<p>Similarly, you can crate dropdown inside vertically stacked button groups, like this:</p>
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab4202.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code8">

<div class="btn-group-vertical">
    <button type="button" class="btn btn-primary">Button</button>
    <button type="button" class="btn btn-primary">Another Button</button>
    <div class="btn-group">
        <button type="button" data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Dropdown <span class="caret"></span></button>
        <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
        </ul>
    </div>
</div>

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
				<hr />
				<h2>Creating the Dropup Menus</h2>
				<p>You can even trigger the dropdown menus above the elements by adding an extra class <code>.dropup</code> to the parent, as given in the example below.</p>
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelabf077.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>

                        <textarea id="code9">

<div class="btn-group dropup">
    <button type="button" class="btn btn-primary">Button</button>
    <button type="button" class="btn btn-primary">Another Button</button>
    <div class="btn-group">
        <button type="button" data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Dropdown <span class="caret"></span></button>
        <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
        </ul>
    </div>
</div>

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
				<hr />
				<h2>Creating the Right Aligned Dropdown Menus</h2>
				<p>By default, the top-left corner of the dropdown menu is positioned at the bottom-left corner of its parent element i.e. 100% from the top and along the left side. To right align the dropdown menu just add an extra class <code>.dropdown-menu-right</code> to the <code>.dropdown-menu</code> base class.</p>
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab6825.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code10">

<div class="btn-group">
    <button type="button" data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Dropdown <span class="caret"></span></button>
    <ul class="dropdown-menu dropdown-menu-right">
        <li><a href="#">Action</a></li>
        <li><a href="#">Another action</a></li>
        <li class="divider"></li>
        <li><a href="#">Separated link</a></li>
    </ul>
</div>

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
				<h2>Adding Headers to Dropdown Items</h2>
				<p>You can optionally add a menu header to label a section of menu items inside a dropdown menu by adding the class <code>.dropdown-header</code> to the list element.</p>
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab7041.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code11">

<div class="btn-group">
    <button type="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle">Products <span class="caret"></span></button>
    <ul class="dropdown-menu">
        <li class="dropdown-header">ELECTRONICS</li>
        <li><a href="#">Mobiles</a></li>
        <li><a href="#">Tablets</a></li>
        <li><a href="#">Laptops</a></li>
        <li class="dropdown-header">FASHION</li>
        <li><a href="#">Clothing</a></li>
        <li><a href="#">Sunglasses</a></li>
    </ul>
</div>

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
				<hr />
				<h2>Disable Items within a Dropdown</h2>
				<p>You can apply the class <code>.disabled</code> on a list element to make the menu item look like disabled. However, the link is still clickable, to disable this you can typically <a href="../faq/how-to-remove-clickable-behavior-from-a-disabled-link-using-jquery.php">remove the anchor's <code>href</code> attribute</a> either using the JavaScript or manually.</p>
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab4d60.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code12">

<div class="btn-group">
    <button type="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle">Report <span class="caret"></span></button>
    <ul class="dropdown-menu">
        <li><a href="#">View</a></li>
        <li><a href="#">Download</a></li>
        <li class="disabled"><a href="#">Edit / Delete</a></li>
    </ul>
</div>

     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code12"), {
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
                <h2>Adding Dropdowns via JavaScript</h2>
                <p>You may also add dropdowns manually using the JavaScript &mdash; just call the <code>dropdown()</code> Bootstrap method with the <code>id</code> or <code>class</code> <a href="../des-css/style_selectors.php">selector</a> of the link or button element in your JavaScript code.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelab7f17.html">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code13">

<script type="text/javascript">
$(document).ready(function(){
    $(".dropdown-toggle").dropdown();
});  
</script>

     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code13"), {
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
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box" style="background-color:#ff8585"
>
							<p><strong>Read Carefully:</strong> The <code>data-toggle="dropdown"</code> is still required for the dropdown's trigger element regardless of whether you call the dropdown via JavaScript or data-api.</p>
						</div>
					</div>
				</div>
                <hr />
                <h2>Options</h2>
                <p><em>None</em></p>
                <hr />
                <h2>Methods</h2>
                <p class="space">This is the standard bootstrap's dropdown method:</p>
                <h2>$().dropdown('toggle')</h2>
                <p>A programmatic api for toggling menus for a given navbar or tabbed navigation.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelab5626.html">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code14">

<script type="text/javascript">
$(document).ready(function(){
    $(".dropdown-toggle").dropdown('toggle');
});  
</script>

     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code14"), {
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
                <p>These are the standard Bootstrap events to enhance the dropdown functionality. All dropdown events are fired at the <code>.dropdown-menu</code>'s parent element.</p>
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
                                <td>show.bs.dropdown</td>
                                <td>This event fires immediately when the show instance method is called.  You can use the <code>event.relatedTarget</code> to target the toggling anchor element.</td>
                            </tr>
                            <tr>
                                <td>shown.bs.dropdown</td>
                                <td>This event is fired when the dropdown has been made visible to the user. It will wait for CSS transitions, to complete. You can use the <code>event.relatedTarget</code> to target the toggling anchor element.</td>
                            </tr>
                            <tr>
                                <td>hide.bs.dropdown</td>
                                <td>This event is fired immediately when the hide instance method has been called. You can use the <code>event.relatedTarget</code> to target the toggling anchor element.</td>
                            </tr>
                            <tr>
                                <td>hidden.bs.dropdown</td>
                                <td>This event is fired when the dropdown has finished being hidden from the user. It will wait for CSS transitions, to complete. You can use the <code>event.relatedTarget</code> to target the toggling anchor element.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p>The following example displays the text content of dropdown link when the users click on it.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelabd6b2.html">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code15">

<script type="text/javascript">
$(document).ready(function(){
    $(".dropdown").on("show.bs.dropdown", function(e){
        var linkText = $(e.relatedTarget).text(); // Get the link text
        alert("Click on OK button to view the dropdown menu for - " + linkText);
    });
});
</script>

     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code15"), {
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
                    <a href="bt_modals.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i>
 Previous</a>
                    <a href="bt_tabs.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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