<!DOCTYPE html>
<html lang="en">
<head>
<meta name="description" content="How to Create Dropdown Menu with Bootstrap 4">
  <meta name="keywords" content="Bootstrap,Bootstrap4,Dropdown Menu with Bootstrap 4,Dropdown Menu,Create Dropdown Menu">
  <meta name="author" content="webschooltoday.com">
    <title>How to Create Dropdown Menu with Bootstrap 4 - WebSchool Today</title>
    <?php include "../links.php" ?>
</head>
<body>
<div>
<div class="tital">How to Create Dropdown Menu with Bootstrap 4</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des_bootstrap.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                </div>
                <a href="bt_tabs.php" class="next-page" title="Go to Next Page">	<i class="fa fa-arrow-right" aria-hidden="true"></i>
</a>
                <a href="bt_modals.php" class="previous-page" title="Go to Previous Page">	<i class="fa fa-arrow-left" aria-hidden="true"></i>
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
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab673e.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1" >

<div class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown</a>
    <div class="dropdown-menu">
        <a href="#" class="dropdown-item">Action</a>
        <a href="#" class="dropdown-item">Another action</a>
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
                <p class="space">The above example demonstrates the most basic form of the Bootstrap dropdowns. Let's understand each part of the Bootstrap dropdown component one by one.</p>
                <h2>Explanation of Code</h2>
                <p>The Bootstrap dropdown has basically two components &mdash; the dropdown trigger element which can be a hyperlink or button, and the dropdown menu itself.</p>
                <ul>
                	<li>The <code>.dropdown</code> class specifies a dropdown menu.</li>
                    <li>The <code>.dropdown-toggle</code> class defines the trigger element, which is a hyperlink in our case, whereas the attribute <code>data-toggle="dropdown"</code> is required on the trigger element to toggle the dropdown menu.</li>
                    <li>The <a href="#"><code>&lt;div&gt;</code></a> element with the class <code>.dropdown-menu</code> is actually building the dropdown menu that typically contains the related links or actions.</li>
                </ul>
				<p>Similarly, you can add the dropdowns to the buttons and nav components. The following section will show you some common implementation of the Bootstrap dropdown.</p>
				<hr />
				<h2>Dropdowns within a Navbar</h2>
                <p>The following examples will show you how to add dropdowns to navbar.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab7132.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        <textarea id="code2" >

<nav class="navbar navbar-expand-md navbar-light bg-light">
    <a href="#" class="navbar-brand">Brand</a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div id="navbarCollapse" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="nav-item">
                <a href="#" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Profile</a>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Messages</a>
                <div class="dropdown-menu">
                    <a href="#" class="dropdown-item">Inbox</a>
                    <a href="#" class="dropdown-item">Drafts</a>
                    <a href="#" class="dropdown-item">Sent Items</a>
                    <div class="dropdown-divider"></div>
                    <a href="#"class="dropdown-item">Trash</a>
                </div>
            </li>
        </ul>
        <ul class="nav navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Admin</a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="#" class="dropdown-item">Reports</a>
                    <a href="#" class="dropdown-item">Settings</a>
                    <div class="dropdown-divider"></div>
                    <a href="#"class="dropdown-item">Logout</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
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

				<div class="color-box">
					<div class="shadow">
						<div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
						<div class="tip-box" style="background-color:#fad28c">
							<p><strong>Important:</strong> You can draw a divider line to separate the links inside a dropdown menu by adding the class <code>.dropdown-divider</code> on a blank <code>&lt;div&gt;</code> element.</p>
						</div>
					</div>
				</div>
                <hr />
                <h2>Dropdowns within Navs</h2>
                <p>The following example will show you how to add dropdowns to pills navs.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabad6b.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        <textarea id="code3" >

<ul class="nav nav-pills">
    <li class="nav-item">
        <a href="#" class="nav-link active">Home</a>
    </li>
    <li class="nav-item">
        <a href="#" class="nav-link">Profile</a>
    </li>
    <li class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Messages</a>
        <div class="dropdown-menu">
            <a href="#" class="dropdown-item">Inbox</a>
            <a href="#" class="dropdown-item">Drafts</a>
            <a href="#" class="dropdown-item">Sent Items</a>
            <div class="dropdown-divider"></div>
            <a href="#"class="dropdown-item">Trash</a>
        </div>
    </li>
    <li class="nav-item dropdown ml-auto">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Admin</a>
        <div class="dropdown-menu dropdown-menu-right">
            <a href="#" class="dropdown-item">Reports</a>
            <a href="#" class="dropdown-item">Settings</a>
            <div class="dropdown-divider"></div>
            <a href="#"class="dropdown-item">Logout</a>
        </div>
    </li>
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

				<p>You can simply convert the above example to a tab dropdown by replacing the class <code>.nav-pills</code> with the <code>.nav-tabs</code>, without any further change in markup.</p>
                <hr />
                <h2 id="button-dropdowns">Dropdowns within Buttons</h2>
                <p>The following examples will show you how to add dropdowns to a primary button.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab2663.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4" >

<div class="btn-group">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Action</button>
    <div class="dropdown-menu">
        <a href="#" class="dropdown-item">Action</a>
        <a href="#" class="dropdown-item">Another action</a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">Separated link</a>
    </div>
</div>                </textarea>    
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
                <p>&mdash; Similarly you can add dropdowns to other variants of the buttons, as shown here:</p>
                <hr />
                <h2>Bootstrap Split Button Dropdowns</h2>
                <p>The following examples will show you how to add dropdowns to split buttons.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab1115.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5" >

<div class="btn-group">
    <button type="button" class="btn btn-primary">Action</button>
    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
        <span class="sr-only">Toggle Dropdown</span>
    </button>
    <div class="dropdown-menu">
        <a href="#" class="dropdown-item">Action</a>
        <a href="#" class="dropdown-item">Another action</a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">Separated link</a>
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
                <p>&mdash; Similarly you can add dropdowns to other variants of the buttons, as shown here:</p>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box" style="background-color:#fad28c">
                            <p><strong>Important:</strong> You can use the Bootstrap's button relative sizing classes like <code>.btn-lg</code> and <code>.btn-sm</code> on the <code>.btn</code> element to further <a target="_blank" href="../codelab680c.html?topic=bootstrap&amp;file=sizing-button-dropdowns">resizing the buttons dropdowns</a>.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Dropdowns Inside Button Groups</h2>
				<p>To create dropdown menus inside a button group just place a <code>.btn-group</code> along with the dropdown markup within another <code>.btn-group</code>.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab22ac.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code6" >

<div class="btn-group">
    <button type="button" class="btn btn-primary">Button</button>
    <button type="button" class="btn btn-primary">Another Button</button>
    <div class="btn-group">
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Dropdown</button>
        <div class="dropdown-menu">
            <a href="#" class="dropdown-item">Action</a>
            <a href="#" class="dropdown-item">Another action</a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">Separated link</a>
        </div>
    </div>
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

				<p>Similarly, you can crate dropdown inside vertically stacked button groups, like this:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab7c82.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code7" >

<div class="btn-group">
    <button type="button" class="btn btn-primary">Button</button>
    <button type="button" class="btn btn-primary">Another Button</button>
    <div class="btn-group">
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Dropdown</button>
        <div class="dropdown-menu">
            <a href="#" class="dropdown-item">Action</a>
            <a href="#" class="dropdown-item">Another action</a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">Separated link</a>
        </div>
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
				<hr />
				<h2>Creating Dropup, Dropleft and Dropright Menus</h2>
				<p>You can even trigger the dropdown menus above, as well as, at the left and right of the elements by adding an extra class <code>.dropup</code>, <code>.dropleft</code> and <code>.dropright</code>, respectively to the parent element (i.e. the <code>.btn-group</code> element), as shown in the following example.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabd4aa.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        <textarea id="code8" >

<div class="btn-group">
    <button type="button" class="btn btn-primary">Button</button>
    <button type="button" class="btn btn-primary">Another Button</button>
    <div class="btn-group">
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Dropdown</button>
        <div class="dropdown-menu">
            <a href="#" class="dropdown-item">Action</a>
            <a href="#" class="dropdown-item">Another action</a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">Separated link</a>
        </div>
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
				<h2>Creating the Right Aligned Dropdown Menus</h2>
				<p>By default, the top-left corner of the dropdown menu is positioned at the bottom-left corner of its parent element i.e. 100% from the top and along the left side. To right align the dropdown menu just add an extra class <code>.dropdown-menu-right</code> to the <code>.dropdown-menu</code> base class.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab7a12.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code9" >

<div class="btn-group">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Right-aligned Dropdown Menu</button>
    <div class="dropdown-menu dropdown-menu-right">
        <a href="#" class="dropdown-item">Action</a>
        <a href="#" class="dropdown-item">Another action</a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">Separated link</a>
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
				<h2>Adding Headers to Dropdown Items</h2>
				<p>You can optionally add a menu header to label a section of menu items inside a dropdown menu by adding the class <code>.dropdown-header</code> to the <code>&lt;div&gt;</code> element, like this:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabfef3.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code10" >

<div class="btn-group">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Products</button>
    <div class="dropdown-menu">
        <div class="dropdown-header">ELECTRONICS</div>
        <a href="#" class="dropdown-item">Mobiles</a>
        <a href="#" class="dropdown-item">Tablets</a>
        <a href="#" class="dropdown-item">Laptops</a>
        <div class="dropdown-header">FASHION</div>
        <a href="#" class="dropdown-item">Clothing</a>
        <a href="#" class="dropdown-item">Sunglasses</a>
    </div>
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
				<h2>Disable Items within a Dropdown</h2>
				<p>You can apply the class <code>.disabled</code> to the menu items in the dropdown to make them look like disabled. However, the link is still clickable, to disable this you can typically <a href="../faq/how-to-remove-clickable-behavior-from-a-disabled-link-using-jquery.php">remove the anchor's <code>href</code> attribute</a> either using the JavaScript or manually.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabd726.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code11" >

<div class="btn-group">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Products</button>
    <div class="dropdown-menu">
        <div class="dropdown-header">ELECTRONICS</div>
        <a href="#" class="dropdown-item">Mobiles</a>
        <a href="#" class="dropdown-item">Tablets</a>
        <a href="#" class="dropdown-item">Laptops</a>
        <div class="dropdown-header">FASHION</div>
        <a href="#" class="dropdown-item">Clothing</a>
        <a href="#" class="dropdown-item">Sunglasses</a>
    </div>
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
                <h2>Adding Dropdowns via JavaScript</h2>
                <p>You may also add dropdowns manually using the JavaScript &mdash; just call the <code>dropdown()</code> Bootstrap method with the <code>id</code> or <code>class</code> <a href="../des-css/style_selectors.php">selector</a> of the link or button element in your JavaScript code.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab52d0.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code12" >

<script>
$(document).ready(function(){
    $(".dropdown-toggle").dropdown();
});  
</script>
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
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box" style="background-color:#ff8585">
							<p><strong>Read Carefully:</strong> The <code>data-toggle="dropdown"</code> is still required for the dropdown's trigger element regardless of whether you call the dropdown via JavaScript or data-api.</p>
						</div>
					</div>
				</div>
                <hr />
                <h2>Options</h2>
                <p>There are certain options which can be passed to <code>dropdown()</code> Bootstrap method to customize the functionality of a dropdown. Options can be passed via data attributes or JavaScript.</p>
                <p>For setting the dropdown options via data attributes, just append the option name to <code>data-</code>, like <code>data-offset="10"</code>, <code>data-display="static"</code>, and so on.</p>
                <div class="shadow">
                    <table class="data">
                        <thead>
                            <tr>
                                <th><pre>Name        </pre></th>
                                <th><pre>Type            </pre></th>
                                <th>Default&nbsp;Value</th>
                                <th>Description</th>
                            </tr>                        	
                        </thead>
                        <tbody>
                            <tr>
                                <td>offset</td>
                                <td>number | string | function</td>
                                <td>0</td>
                                <td>Specify the offset of the dropdown relative to its target. <br>You can specify offset in various units, like <code>px</code>, <code>%</code>, <code>vw</code>, <code>vh</code>, etc. Unit-less values interpreted as pixels.</td>
                            </tr>
                            <tr>
                                <td>flip</td>
                                <td>boolean</td>
                                <td>true</td>
                                <td>Allow Dropdown to flip in case of an overlapping on the reference element.</td>
                            </tr>
                            <tr>
                                <td>boundary</td>
                                <td>string | element</td>
                                <td>'scrollParent'</td>
                                <td>Overflow constraint boundary of the dropdown menu. Accepts the values of <code>'viewport'</code>, <code>'window'</code>, <code>'scrollParent'</code>, or an HTMLElement reference (JavaScript only).</td>
                            </tr>
                            <tr>
                                <td>reference</td>
                                <td>string | element</td>
                                <td>'toggle'</td>
                                <td>Reference element of the dropdown menu. Accepts the values of <code>'toggle'</code>, <code>'parent'</code>, or an HTMLElement reference.</td>
                            </tr>
                            <tr>
                                <td>display</td>
                                <td>string</td>
                                <td>'dynamic'</td>
                                <td>Specify the dynamic positioning for dropdowns. You can disable this with the value <code>'static'</code></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
				<div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box" style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> When the boundary is set to any value other than <code>'scrollParent'</code>, the style <code>position: static</code> is applied to the <code>.dropdown</code> container.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Methods</h2>
                <p class="space">This is the standard bootstrap's dropdown method:</p>
                <h2>$().dropdown('toggle')</h2>
                <p>This method toggles the dropdown menu of a given navbar or tabbed navigation.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelaba47a.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code13" >

<script>
$(document).ready(function(){
    $("#myDropdown").dropdown('toggle');
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
                <h2>$().dropdown('show')</h2>
                <p>This method shows the dropdown menu of a given navbar or tabbed navigation.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelaba47a.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code14" >

<script>
$(document).ready(function(){
    $("#myDropdown").dropdown('show');
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
                <h2>$().dropdown('hide')</h2>
                <p>This method hides the dropdown menu of a given navbar or tabbed navigation.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelaba47a.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>

                        <textarea id="code15" >

<script>
$(document).ready(function(){
    $("#myDropdown").dropdown('hide');
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
                <h2>$().dropdown('update')</h2>
                <p>This method updates the position of an element's dropdown.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelaba47a.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code16" >

<script>
$(document).ready(function(){
    $("#myDropdown").dropdown('update');
});  
</script>
              </textarea>    
                            <script>
							var editor = CodeMirror.fromTextArea(document.getElementById("code16"), {
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
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabf931.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code17" >

<script>
$(document).ready(function(){
    $(".dropdown").on("show.bs.dropdown", function(e){
        var linkText = $(e.relatedTarget).text(); // Get the link text
        alert("Click on OK button to view the dropdown menu for - " + linkText);
    });
});
</script>
              </textarea>    
                            <script>
							var editor = CodeMirror.fromTextArea(document.getElementById("code17"), {
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