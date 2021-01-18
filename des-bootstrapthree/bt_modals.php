<!DOCTYPE html>
	<html lang="en">
	<head>
    <meta name="description" content="Learn how to implement modal window, dialog box or popup functionality using the Bootstrap modal plugin with minimum effort without writing any JavaScript code." />
	  <meta name="keywords" content="Bootstrap,Bootstrap3,Modals">
	  <meta name="author" content="webschooltoday.com">
    <title>How to Create Modals with Bootstrap 3 - WebSchool Today</title>
    <?php include "../links.php" ?>
</head>
<body>
<div>
<div class="tital">How to Create Modals with Bootstrap 3</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des_bootstap3.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
    </div>
    <a href="bt_dropdowns.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-left" aria-hidden="true"></i>
</a>
                <a href="bt_helper-classes.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i>
</a>

                <h1>Bootstrap <span>Modals</span></h1>
                <p class="summary">In this tutorial you will learn how to create modals with Bootstrap.</p>
                <h2>Creating Modals with Bootstrap</h2>
                <p>Modal is basically a dialog box or popup window that is used to provide important information to the user or prompt user to take necessary actions before moving on. Modals are widely used to warn users for situations like session time out or to receive their final confirmation before going to perform any critical actions such as saving or deleting important data.</p>
                <p>You can easily create very smart and flexible dialog boxes with the Bootstrap modal plugin. The following example will show you how to create a simple modal with a header, message body and the footer containing action buttons for the user.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab5dfd.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        <textarea id="code1">

<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Confirmation</h4>
            </div>
            <div class="modal-body">
                <p>Do you want to save changes you made to document before closing?</p>
                <p class="text-warning"><small>If you don't save, your changes will be lost.</small></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
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
				<div class="color-box break">
					<div class="shadow">
						<div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
						<div class="tip-box" style="background-color:#fad28c"
>
							<p><strong>Important:</strong> Always try to place your modal HTML in a top-level position in your document, preferably before closing of the <code><a href="../info-html/ht_body-tag.php">&lt;body&gt;</a></code> tag (i.e. <code>&lt;/body&gt;</code>) to avoid interference from other elements, otherwise it may affect modal's appearance or functionality.</p>
						</div>
					</div>
				</div>
                <p>Check out the snippets section for examples of some <a href="../snippets/gallery818a.php?tag=modal" target="_blank">beautifully designed Bootstrap modals</a>.</p>
                <hr />
                <h2>Activate Modals via Data Attributes</h2>
                <p>You can activate a Bootstrap modal by clicking on the button or link via data attributes without writing any JavaScript code. See the following example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab82ad.php" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        <textarea id="code2">

<!-- Button HTML (to Trigger Modal) -->
<a href="#myModal" role="button" class="btn btn-large btn-primary" data-toggle="modal">Launch Demo Modal</a>
 
<!-- Modal HTML -->
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Confirmation</h4>
            </div>
            <div class="modal-body">
                <p>Do you want to save changes you made to document before closing?</p>
                <p class="text-warning"><small>If you don't save, your changes will be lost.</small></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
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
                <p class="space">The above example launches the modal window on click of the "Launch Demo Modal" button. Let's go through each part of this modal code one by one for a better understanding.</p>
                <h2>Explanation of Code</h2>
                <p>To activate a Bootstrap modal via data attributes we basically need two components &mdash; the controller element like a button or link, and the modal element itself.</p>
                <ul>
                	<li>The outermost container of every modal in a document must have a unique id (in this case <code>id="myModal"</code>, <i>line no-5</i>), so that it can be targeted via <code>data-target</code> (for buttons) or <code>href</code> (for hyperlinks) attribute of the controller element (<i>line no-2</i>).</li>
                    <li>The attribute <code>data-toggle="modal"</code> is required to add on the controller element (<i>line no-2</i>), like a button or an anchor, along with a attribute <code>data-target="#myModal"</code> or <code>href="#myModal"</code> to target a specific modal to toggle.</li>
                    <li>The <code>.modal-dialog</code> class (<i>line no-6</i>) sets the width as well as horizontal and vertical alignment of the modal box. Whereas the class <code>.modal-content</code> sets the styles like text and background color, borders, rounded corners etc.</li>
                </ul>
                <p>Rest of the thing is self explanatory, such as the <code>.modal-header</code> element defines a header for the modal that usually contains a modal title and a close button, whereas the <code>.modal-body</code> element contains the actual content like text, images, forms etc. and the <code>.modal-footer</code> element defines the footer that typically contains action buttons for the user.</p>
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box" style="background-color:#ff8585"
>
							<p><strong>Read Carefully:</strong> The <code>.fade</code> class on the <code>.modal</code> element adds a fading and sliding animation effect while showing and hiding the modal window. If you want the modal that simply appear without any effect you can just remove this class.</p>
						</div>
					</div>
				</div>
                <hr />
                <h2>Activate Modals via JavaScript</h2>
                <p>You may also activate a Bootstrap modal window via JavaScript &mdash; just call the <code>modal()</code> Bootstrap method with the modal <code>id</code> or <code>class</code> <a href="../des-css/style_selectors.php">selector</a> in your JavaScript code.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab0647.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

<script type="text/javascript">
$(document).ready(function(){
    $(".btn").click(function(){
        $("#myModal").modal('show');
    });
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
				<h2>Changing the Size of Modals</h2>
				<p>Bootstrap gives you option further to scaling a modal up or down. You can make modals larger or smaller by adding an extra class <code>.modal-lg</code> or <code>.modal-sm</code> on <code>.modal-dialog</code>.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabefe2.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        <textarea id="code4">

<!-- Large modal -->
<button class="btn btn-primary" data-toggle="modal" data-target="#largeModal">Large modal</button>
 
<div id="largeModal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Large Modal</h4>
            </div>
            <div class="modal-body">
                <p>Add the <code>.modal-lg</code> class on <code>.modal-dialog</code> to create this large modal.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">OK</button>
            </div>
        </div>
    </div>
</div>
 
<!-- Small modal -->
<button class="btn btn-primary" data-toggle="modal" data-target="#smallModal">Small modal</button>
 
<div id="smallModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Small Modal</h4>
            </div>
            <div class="modal-body">
                <p>Add the <code>.modal-sm</code> class on <code>.modal-dialog</code> to create this small modal.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">OK</button>
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
				<h2>Changing Modal Content Based on Trigger Button</h2>
				<p>Often several modal on a web page has almost same content with minor differences.</p>
                <p>You can use the <a href="#modal-events">modal events</a> to create slightly different modal windows based on the same modal HTML. The following example will change the title of the modal window according to the trigger button's <code>data-title</code> attribute value.</p>
                <div class="my_codeb-rg3-w space">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab7086.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

<script type="text/javascript">
$(document).ready(function(){
    $("#myModal").on('show.bs.modal', function(event){
        // Get button that triggered the modal
        var button = $(event.relatedTarget);
        // Extract value from data-* attributes
        var titleData = button.data('title');
        $(this).find('.modal-title').text(titleData + ' Form');
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
                <hr />
                <h2 id="modals-options">Options</h2>
                <p>There are certain options which can be passed to <code>modal()</code> Bootstrap method to customize the functionality of a modal. Options can be passed via data attributes or JavaScript.</p>
				<p>For setting the modals options via data attributes, just append the option name to <code>data-</code>, like <code>data-backdrop="static"</code>, <code>data-keyboard="false"</code> etc.</p>
                <div class="shadow">
                	<table class="data">
                    	<thead>
                        	<tr>
                            	<th style="width: 70px;">Name</th>
                                <th style="width: 80px;">Type</th>
                                <th>Default&nbsp;Value</th>
                                <th>Description</th>
                            </tr>                        	
                        </thead>
                        <tbody>
                        	<tr>
                            	<td><a href="../codelab5bd3.html" target="_blank">backdrop</a></td>
                                <td>boolean<br /> or the string <code>static</code></td>
                                <td>true</td>
                                <td>Includes a modal-backdrop (black overlay area) element. Alternatively,&thinsp;you may specify <code>static</code> for a backdrop which doesn't close the modal on click.</td>
                            </tr>
                            <tr>
                            	<td><a href="../codelab1081.html" target="_blank">keyboard</a></td>
                                <td>boolean</td>
                                <td>true</td>
                                <td>Closes the modal window on press of escape key.</td>
                            </tr>
                            <tr>
                            	<td><a href="../codelab476d.html" target="_blank">show</a></td>
                                <td>boolean</td>
                                <td>true</td>
                                <td>Shows the modal when initialized or activate.</td>
                            </tr>
                            <tr>
                            	<td><a href="../codelab35cd.html" target="_blank">remote</a></td>
                                <td>URL</td>
                                <td>false</td>
                                <td><a href="../definitions.php#deprecated" class="deprecated" title="Deprecated since Bootstrap v3.3.0">Deprecated</a> If a remote url is provided, content will be loaded one time via jQuery's <a href="../des-jquery/jq_ajax-load.php"><code class="plain">load()</code></a> method and injected into the <code>.modal-content</code> div.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p>Data attributes provides an easy way for setting the modal options, however JavaScript is the more preferable way as it prevents you from repetitive work. See the <code><a href="#modal-options">.modal(options)</a></code> method in the section below to know how to set the options for modals using JavaScript.</p>
				<p>If you're using the data api for setting the options for modal window, you may alternatively use the <code>href</code> attribute to provide the URL of remote source, like this:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab698e.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code6">

<!-- Button HTML (to Trigger Modal) -->
<a href="remote.html" role="button" class="btn btn-large btn-primary" data-toggle="modal" data-target="#myModal">Launch Demo Modal</a>
 
<!-- Modal HTML -->
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Content will be loaded here from "remote.php" file -->
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
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box" style="background-color:#ff8585"
>
							<p><strong>Read Carefully:</strong> The <code>remote</code> option for the Bootstrap modals is deprecated since v3.3.0 and will be removed in upcoming v4. Use the client-side templating or a data binding framework instead, or call the <a href="../des-jquery/jq_ajax-load.php">jQuery <code>load()</code> method</a> yourself.</p>
						</div>
					</div>
				</div>
                <hr />
                <h2>Methods</h2>
                <p class="space">These are the standard bootstrap's modals methods:</p>
                <h2 id="modal-options">.modal(options)</h2>
                <p>This method activates the content as a modal. It also allows you to set <a href="#modals-options">options</a> for them.</p>
				<p>The jQuery code in the following example will prevent the modal from closing when a user clicks on the backdrop i.e. black overlay area behind the modal.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabef27.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code7">

<script type="text/javascript">
$(document).ready(function(){
    $(".launch-modal").click(function(){
        $("#myModal").modal({
            backdrop: 'static'
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
				<p>The following jQuery code will prevent the modal from closing on press of the escape key.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab3b65.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code8">

<script type="text/javascript">
$(document).ready(function(){
    $(".launch-modal").click(function(){
        $("#myModal").modal({
            keyboard: false
        });
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
				<p>The jQuery code in the following example will create a modal in which content of the modal will be inserted from a remote file upon activation.</p>
                <div class="my_codeb-rg3-w space">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabcef6.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code9">

<script type="text/javascript">
$(document).ready(function(){
    $(".launch-modal").click(function(){
        $("#myModal").modal({
            remote: '../remote.php'
        });
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
                <h2>.modal('toggle')</h2>
                <p>This method toggles a modal window manually.</p>
                <div class="my_codeb-rg3-w space">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab2819.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code10">

<script type="text/javascript">
$(document).ready(function(){
    $(".toggle-modal").click(function(){
        $("#myModal").modal('toggle');
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
                <h2>.modal('show')</h2>
                <p>This method can be used to open a modal window manually.</p>
                <div class="my_codeb-rg3-w space">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab3d71.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code11">

<script type="text/javascript">
$(document).ready(function(){
    $(".open-modal").click(function(){
        $("#myModal").modal('show');
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
                <h2>.modal('hide')</h2>
                <p>This method can be used to hide a modal window manually.</p>
                <div class="my_codeb-rg3-w space">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabf80e.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code12">

<script type="text/javascript">
$(document).ready(function(){
    $(".hide-modal").click(function(){
        $("#myModal").modal('hide');
    });
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
				<h2>.modal('handleUpdate')</h2>
                <p>This method readjusts the modal's position to counter the jerk that is occurring due to the appearance of the viewport scrollbar in case if the modal height changes in such a way that it becomes higher than the viewport height while it is open.</p>
				<p>A common example of this scenario is showing the hidden elements inside the modal via JavaScript or loading content inside the modal using Ajax after activation.</p>
                <div class="my_codeb-rg3-w space">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabf632.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code13">

<script type="text/javascript">
$(document).ready(function(){
    $(".show-text").click(function(){
        $('#myModal').find(".lots-of-text").toggle();
        $('#myModal').modal('handleUpdate')
    });
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
                            	<td>show.bs.modal</td>
                                <td>This event fires immediately when the show instance method is called.</td>
                            </tr>
                            <tr>
                            	<td>shown.bs.modal</td>
                                <td>This event is fired when the modal has been made visible to the user. It will wait until the CSS transition process has been fully completed before getting fired.</td>
                            </tr>
                            <tr>
                            	<td>hide.bs.modal</td>
                                <td>This event is fired immediately when the hide instance method has been called.</td>
                            </tr>
                            <tr>
                            	<td>hidden.bs.modal</td>
                                <td>This event is fired when the modal has finished being hidden from the user. It will wait until the CSS transition process has been fully completed before getting fired.</td>
                            </tr>
							<tr>
                            	<td>loaded.bs.modal</td>
                                <td>This event is fired when the modal has loaded content using the <code>remote</code> option.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p>The following example displays an alert message to the user when fade out transition of the modal window has been fully completed.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab98c1.html?topic=bt_3&amp;file=modal-events" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code14">

<script type="text/javascript">
$(document).ready(function(){
    $("#myModal").on('hidden.bs.modal', function(){
        alert("Modal window has been completely closed.");
    });
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
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
						<div class="tip-box" style="background-color:#fad28c"
>
							<p><strong>Important:</strong> See also the <a href="../faq.php#bt_less" target="_blank">Bootstrap FAQ</a> section for more examples on modals, like setting vertical alignment, changing default width, embedding video, etc.</p>
						</div>
					</div>
				</div>
                <div class="bottom-link clearfix">
                    <a href="bt_helper-classes.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i>
Previous</a>
                    <a href="bt_dropdowns.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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