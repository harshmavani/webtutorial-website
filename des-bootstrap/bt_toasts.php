<!DOCTYPE html>
	<html lang="en">
	<head>
	<meta name="description" content="How to Use Bootstrap 4 Toast Component">
	  <meta name="keywords" content="Bootstrap,Bootstrap4,Toast Component,Use Bootstrap 4 Toast Component">
	  <meta name="author" content="webschooltoday.com">
    <title>How to Use Bootstrap 4 Toast Component - WebSchool Today</title>
    <?php include "../links.php" ?>
</head>
<body>
<div>
<div class="tital">How to Use Bootstrap 4 Toast Component</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des_bootstrap.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
          </div>
          <a href="../twitter-bt_examples.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i>
</a>
                <a href="bt_scrollspy.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i>
</a>

                <h1>Bootstrap <span>Toasts</span></h1>
                <p class="summary">In this tutorial you will learn how to use the Bootstrap toast component.</p>
                <h2>Creating the Toasts with Bootstrap</h2>
                <p>The toast component is newly introduced in Bootstrap 4. They are lightweight notifications similar to push notifications that are shown by web browsers on computer screens. They're built with flexbox, so you can easily align and position them on a web page.</p>
                <p>Additionally, toasts are opt-in for performance reasons, like tooltips, so you must initialize them yourself with <code>toast()</code> method. Also, toasts will automatically hide after 500 milliseconds (0.5 second), if you do not specify <code>autohide: false</code>. Now let's see how to create a toast.</p>
                <h3>Step 1: Adding the Toast Markup</h3>
                <p>Toasts markups are pretty straightforward. The following example will show you how to create a toast component with a header, body, and a close button.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabfd1b.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<div class="toast" id="myToast">
    <div class="toast-header">
        <strong class="mr-auto"><i class="fa fa-grav"></i> We miss you!</strong>
        <small>11 mins ago</small>
        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
    </div>
    <div class="toast-body">
        It's been a long time since you visited us. We've something special for you. <a href="#">Click here!</a>
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
                <h3>Step 2: Triggering the Toasts</h3>
                <p>Toasts can be triggered via JavaScript &mdash; just call the <code>toast()</code> Bootstrap method with the <code>id</code>, <code>class</code> or any <a href="../des-css/style_selectors.php">CSS selector</a> of the target element in your JavaScript code.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabfd1b.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

<script>
$(document).ready(function(){
    $("#myToast").toast('show');
});
</script>

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
                <h2>Stacking Toasts Vertically</h2>
                <p>Multiple toasts are vertically stacked in a readable manner automatically. Here's an example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab27da.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        <textarea id="code3">

<div class="toast fade show">
    <div class="toast-header">
        <strong class="mr-auto"><i class="fa fa-globe"></i> Hello, world!</strong>
        <small class="text-muted">just now</small>
        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
    </div>
    <div class="toast-body">
        This is a basic toast message.
    </div>
</div>

<div class="toast fade show">
    <div class="toast-header">
        <strong class="mr-auto"><i class="fa fa-globe"></i> Hello, world!</strong>
        <small class="text-muted">5 minutes ago</small>
        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
    </div>
    <div class="toast-body">
        See? This is another toast message.
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
                <h2>Placement of Toasts</h2>
                <p>You can place toasts anywhere on your web page using custom CSS. However, the top right or top middle side is recommended for notifications. Also, if you only want to show one toast at a time, put the positioning styles inline i.e. directly on the <code>.toast</code> element.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab382e.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        <textarea id="code4">

<!-- Wrapping element -->
<div style="position: relative; min-height: 300px;">
    <!-- Position toasts -->
    <div style="position: absolute; top: 0; right: 0;">
        <div class="toast fade show">
            <div class="toast-header">
                <strong class="mr-auto"><i class="fa fa-globe"></i> Hello, world!</strong>
                <small class="text-muted">just now</small>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
            </div>
            <div class="toast-body">
                This is a basic toast message.
            </div>
        </div>

        <div class="toast fade show">
            <div class="toast-header">
                <strong class="mr-auto"><i class="fa fa-globe"></i> Hello, world!</strong>
                <small class="text-muted">5 minutes ago</small>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
            </div>
            <div class="toast-body">
                See? This is another toast message.
            </div>
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
                <hr />
                <h2 id="modals-options">Options</h2>
                <p>There are certain options which can be passed to <code>toast()</code> Bootstrap method to customize the functionality of a toast. Options can be passed via data attributes or JavaScript.</p>
				<p>For setting the toast options via data attributes, just append the option name to <code>data-</code>, such as <code>data-autohide="false"</code>, <code>data-delay="3000"</code>, etc.</p>
                <div class="shadow">
                	<table class="data">
                    	<thead>
                        	<tr>
                            	<th style="width: 70px;">Name</th>
                                <th style="width: 90px;">Type</th>
                                <th>Default&nbsp;Value</th>
                                <th>Description</th>
                            </tr>                        	
                        </thead>
                        <tbody>
                        	<tr>
                            	<td>animation</td>
                                <td>boolean</td>
                                <td>true</td>
                                <td>Apply a CSS fade transition to the toast.</td>
                            </tr>
                            <tr>
                            	<td>autohide</td>
                                <td>boolean</td>
                                <td>true</td>
                                <td>Auto hide the toast.</td>
                            </tr>
                            <tr>
                            	<td>delay</td>
                                <td>number</td>
                                <td>500</td>
                                <td>Delay hiding the toast (ms).</td>
                            </tr>                        
                        </tbody>
                    </table>
                </div>
                <p>Data attributes provides an easy way for setting the toast options, however JavaScript is the more preferable way as it prevents you from repetitive work. See the <a href="#toast-options"><code>.toast(options)</code></a> method in the section below to know how to set the options for toasts using JavaScript.</p>
				<p>In the following example we've set the <code>autohide</code> option to <code>false</code> using the data attribute (<i>line no-1</i>) which prevents the toast from closing automatically.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabc73b.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

<div class="toast" data-autohide="false">
    <div class="toast-header">
        <strong class="mr-auto"><i class="fa fa-grav"></i> We miss you!</strong>
        <small>11 mins ago</small>
        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="toast-body">
        <div>It's been a long time since you visited us. We've something special for you. <a href="#">Click here!</a></div>
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
                <h2>Methods</h2>
                <p class="space">These are the standard bootstrap's toast methods:</p>
                <h2 id="modal-options">$().toast(options)</h2>
                <p>This method activates the content as a toast. It also allows you to set <a href="#toast-options">options</a> for them.</p>
				<p>The jQuery code in the following example will prevent the toast from closing automatically.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab880a.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code6">

<script>
$(document).ready(function(){
    $(".show-toast").click(function(){
        $("#myToast").toast({
            autohide: false
        });
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
				<p>The following jQuery code will increase the autohide time of toast to 3 seconds.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab03a4.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code7">

<script>
$(document).ready(function(){
    $(".show-toast").click(function(){
        $("#myToast").toast({
            delay: 3000
        });
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
                <h2>.toast('show')</h2>
                <p>This method is used to display the toast.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab53be.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code8">

<script>
$(document).ready(function(){
    $(".show-toast").click(function(){
        $("#myToast").toast('show');
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
                <h2>.toast('hide')</h2>
                <p>This method is used to hide toast. You've to manually call this method if you set <code>autohide</code> to <code>false</code>.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab53be.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code9">

<script>
$(document).ready(function(){
    $(".hide-toast").click(function(){
        $("#myToast").toast('hide');
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
                <h2>.toast('dispose')</h2>
                <p>This method hides the toast. It will remain on the DOM but won't show anymore.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab53be.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code10">

<script>
$(document).ready(function(){
    $(".dispose-toast").click(function(){
        $("#myToast").toast('dispose');
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
                <h2 id="modal-events">Events</h2>
                <p>Bootstrap's modal class includes few events for hooking into modal functionality.</p>
                <div class="shadow">
                	<table class="data">
                    	<thead>
                        	<tr>
                            	<th style="width: 120px;">Event</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                        	<tr>
                            	<td>show.bs.toast</td>
                                <td>This event fires immediately when the show instance method is called.</td>
                            </tr>
                            <tr>
                            	<td>shown.bs.toast</td>
                                <td>This event is fired when the toast has been made visible to the user. It will wait until the CSS transition process has been fully completed before getting fired.</td>
                            </tr>
                            <tr>
                            	<td>hide.bs.toast</td>
                                <td>This event is fired immediately when the hide instance method has been called.</td>
                            </tr>
                            <tr>
                            	<td>hidden.bs.toast</td>
                                <td>This event is fired when the toast has finished being hidden from the user. It will wait until the CSS transition process has been fully completed before getting fired.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p>The following example displays an alert message to the user when fade out transition of the modal window has been fully completed.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab97f5.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code11">

<script>
$(document).ready(function(){
    $("#myToast").on('hidden.bs.toast', function(){
        alert("Toast component has been completely closed.");
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
                    <a href="bt_scrollspy.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i>
 Previous</a>
                    <a href="../twitter-bt_examples.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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