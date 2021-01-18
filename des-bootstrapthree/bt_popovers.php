<!DOCTYPE html>
	<html lang="en">
	<head>
    <meta name="description" content="Learn how to use Bootstrap popover plugin to create iPad like small overlay of content to provide secondary information to the user on click of the element." />
	  <meta name="keywords" content="Bootstrap,Bootstrap3,Create Popovers">
	  <meta name="author" content="webschooltoday.com">
    <title>How to Create Popovers with Bootstrap 3 - WebSchool Today</title>
    <?php include "../links.php" ?>
</head>
<body>
<div>
<div class="tital">How to Create Popovers with Bootstrap 3</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des_bootstap3.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
       </div>
       <a href="bt_alerts.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i>
</a>
                <a href="bt_tooltips.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i>
</a>

                <h1>Bootstrap <span>Popovers</span></h1>
                <p class="summary">In this tutorial you will learn how to create popovers with Bootstrap.</p>
                <h2>Creating Popovers with Bootstrap</h2>
                <p>Popover is a small overlay of content that is used to display secondary information of any element when it is clicked by a user, like those on the iPad.</p>
                <h3>Step 1: Adding the Popover Markup</h3>
				<p>To create a popover, you need to add the <code>data-toggle="popover"</code> attribute to an element. Whereas, popover's title and its content that would display upon trigger or activation can be specified using the <code>title</code> and <code>data-content</code> attribute respectively.</p>
				<p>Here is the standard markup for adding a popover to a button.</p>
				<div class="shadow break">
                    <div class="syntax">
                        <span class="tag">&lt;button <span class="attribute">type</span>="<span class="attribute-value">button</span>" <span class="attribute">data-toggle</span>="<span class="attribute-value">popover</span>" <span class="attribute">title</span>="<span class="attribute-value">Popover title</span>" <span class="attribute">data-content</span>="<span class="attribute-value">Here's some amazing content.</span>"&gt;</span>Click to toggle popover<span class="tag">&lt;/button&gt;</span>
                    </div>
                </div>
				<p>Similarly, you can add popovers to the other elements such as links, icons, etc.</p>
                <div class="color-box break">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box" style="background-color:#ff8585"
>
                            <p><strong>Read Carefully:</strong> For performance reasons the popovers data-apis are opt in like <a href="bt_tooltips.php">tooltips</a>, means to use popovers you must initialize them yourself with <code>popover()</code> method.</p>
                        </div>
                    </div>
                </div>
				<h3>Step 2: Triggering the Popovers</h3>
                <p>Popovers can be triggered via JavaScript &mdash; just call the <code>popover()</code> Bootstrap method with the <code>id</code>, <code>class</code> or any <a href="../css-tutorial/css-selectors.html">CSS selector</a> of the required element in your JavaScript code.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabb9bc.php" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<script type="text/javascript">
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>

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
                <hr />
                <h2>Setting the Directions of Popovers</h2>
                <p>You can set popovers to appear on top, right, bottom and left sides of an element.</p>
				<h3>Positioning of Popovers via Data Attributes</h3>
				<p>The&thinsp;following example will show you how to set the direction of popovers via data attributes.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab00e8.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

<button type="button" class="btn btn-primary" data-toggle="popover" data-placement="top" title="Popover title" data-content="Default popover">Popover on top</button>
<button type="button" class="btn btn-success" data-toggle="popover" data-placement="right" title="Popover title" data-content="Popover on right.">Popover on right</button>
<button type="button" class="btn btn-info" data-toggle="popover" data-placement="bottom" title="Popover title" data-content="Popover on bottom.">Popover on bottom</button>
<button type="button" class="btn btn-warning" data-toggle="popover" data-placement="left" title="Popover title" data-content="Popover on left.">Popover on left</button>

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
				<h3>Positioning of Popovers via JavaScript</h3>
				<p>The following example will show you how to set the direction of popovers via JavaScript.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab7d40.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

<script type="text/javascript">
$(document).ready(function(){
    $(".pop-top").popover({placement : 'top'});
    $(".pop-right").popover({placement : 'right'});
    $(".pop-bottom").popover({placement : 'bottom'});
    $(".pop-left").popover({ placement : 'left'});
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
				<h2>Hiding the Popovers on Next Click</h2>
				<p>By default popovers are not hiding until you click the trigger element once again. You can use the focus trigger to hide the popovers when the user makes the next click.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab011a.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

<a href="#" class="btn btn-primary btn-lg" data-toggle="popover" tabindex="0" data-trigger="focus" title="Popover title" data-content="Here's some amazing content.">Dismissible popover</a>


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
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box" style="background-color:#ff8585"
>
                            <p><strong>Read Carefully:</strong> To make this feature work properly across the browsers, you must use the <code><a href="../info-html/ht_a-tag.php">&lt;a&gt;</a></code> tag, not the <code><a href="../info-html/ht_button-tag.php">&lt;button&gt;</a></code> tag, and you also must include a <code>tabindex</code> attribute.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Options</h2>
                <p>There are certain options which may be passed to <code>popover()</code> Bootstrap method to customize the functionality of the tooltip plugin.</p>
                <div class="shadow">
                	<table class="data">
                    	<thead>
                        	<tr>
                            	<th>Name</th>
                                <th>Type</th>
                                <th style="width: 130px;">Default&nbsp;Value</th>
                                <th>Description</th>
                            </tr>                        	
                        </thead>
                        <tbody>
                        	<tr>
                            	<td>animation</td>
                                <td>boolean</td>
                                <td>true</td>
                                <td>Apply a CSS fade transition to the popover.</td>
                            </tr>
                            <tr>
                            	<td>html</td>
                                <td>boolean</td>
                                <td>false</td>
                                <td>Insert html into the popover. If false, jQuery's <code>text()</code> method will be used to insert content into the DOM. Use text if you're worried about XSS attacks.</td>
                            </tr>
                            <tr>
                            	<td>placement</td>
                                <td>string | function</td>
                                <td>'right'</td>
                                <td>
                                	<p>Sets the position of the popover &mdash; top | bottom | left | right | auto. When "auto" value is specified, it will dynamically reorient the popover.</p>
                                	<p>For example, if placement value is "auto left", the popover will display to the left when possible, otherwise it will display to right.</p>
                                </td>
                            </tr>
                            <tr>
                            	<td>selector</td>
                                <td>string</td>
                                <td>false</td>
                                <td>If a selector is provided, popover objects will be attached to the specified targets.</td>
                            </tr>
                            <tr>
                            	<td>title</td>
                                <td>string | function</td>
                                <td>''</td>
                                <td>Sets the default <code>title</code> value if title attribute isn't present.</td>
                            </tr>
                            <tr>
                            	<td>trigger</td>
                                <td>string</td>
                                <td>'click'</td>
                                <td>Specify how popover is triggered &mdash; click | hover | focus | manual.</td>
                            </tr>                            
                            <tr>
                            	<td>content</td>
                                <td>string | function</td>
                                <td>''</td>
                                <td>Sets the default content value if <code>data-content</code> attribute isn't present.</td>
                            </tr>
                            <tr>
                            	<td>delay</td>
                                <td>number | object</td>
                                <td>0</td>
                                <td>
                                	<p>Time to delay in showing and hiding the popover (ms) &mdash; does not apply to manual trigger type.</p>
                                    <p>If a number is supplied, delay is applied to both hide/show Object structure is: <code>delay: { show: 500, hide: 100 }</code></p>
                                </td>
                            </tr>
                            <tr>
                            	<td>container</td>
                                <td>string | false</td>
                                <td>false</td>
                                <td>Appends the popover to a specific element <code>container: 'body'</code></td>
                            </tr>
							<tr>
								<td>template</td>
								<td>string</td>
								<td><p style="font-size: 12px;"><code>'&lt;div class="popover"&gt;<br />&lt;div class="arrow"&gt;&lt;/div&gt;&lt;h3 class="popover-title"&gt;&lt;/h3&gt;&lt;div class="popover-content"&gt;&lt;/div&gt;&lt;/div&gt;'</code></p></td>
								<td>
									<p>Base HTML to use when creating the popover. The popover's title and content will be inserted into the elements having the class <code>.popover-title</code>  and <code>.popover-content</code> respectively. Whereas the element with the class <code>.arrow</code> will become the popover's arrow.</p>
									<p>The outermost rg3-w element should have the <code>.popover</code> class.</p>
								</td>
							</tr>
							<tr>
								<td>viewport</td>
								<td>string | object</td>
								<td><code>{ selector: 'body', padding: 0 }</code></td>
								<td>Keeps the popover within the bounds of this element. Example: <code>viewport: '#viewport'</code> or <code>{&thinsp;selector: '#viewport', padding: 0&thinsp;}</code></td>
							</tr>
                        </tbody>
                    </table>
                </div>
                <p>You may set these options either through the use of data attributes or JavaScript. For setting the popovers options via data attributes, just append the option name to <code>data-</code> along with the correct value, like <code>data-animation="false"</code>, <code>data-placement="bottom"</code> etc.</p>
				<p>However, JavaScript is the more preferable way for setting these options as it saves you from doing the repetitive work. See the popover's method <code><a href="#popover-options">$().popover(options)</a></code> in the section below to know how to set the options for popovers using the JavaScript.</p>
                <hr />
                <h2>Methods</h2>
                <p class="space">These are the standard Bootstrap's popover methods:</p>
                <h2 id="popover-options">$().popover(options)</h2>
				<p>This method attaches the popover handler to a group of elements. It also allows you to set the options for the popovers so that you can customize them according to your needs.</p>
				<p>The following example will insert the specified text inside the popovers title if the value of the <code>title</code> attribute is omitted or missing from the selected elements:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabd819.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

<script type="text/javascript">
$(document).ready(function(){
    $("#myPopovers a").popover({
        title: 'Default title value'
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
                <p>The following jQuery code will trigger the popovers on mouse hover instead of click:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab1552.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code6">

<script type="text/javascript">
$(document).ready(function(){
    $('[data-toggle="popover"]').popover({
        trigger: 'hover'
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
				<p>The following example will show you how to place the HTML content inside a popover:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab3530.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code7">

<script type="text/javascript">
$(document).ready(function(){
    $("#myPopover").popover({
        title: '<h3 class="custom-title"><span class="glyphicon glyphicon-info-sign"></span> Popover Info</h3>',
        content: '<p>This is a <em>simple example</em> demonstrating how to insert HTML code inside <mark><strong>Bootstrap popover</strong></mark>.</p>',
        html: true
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
				<p>The following example will show you how to control the timing of showing and hiding of the popover using the popover's <code>delay</code> option via JavaScript.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab4693.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code8">

<script type="text/javascript">
$(document).ready(function(){
    // Showing and hiding popover with same speed
    $(".popover-tiny").tooltip({
        delay: 500
    });
    
    // Showing and hiding popover with different speed
    $(".popover-large").tooltip({
        delay: {show: 0, hide: 2000}
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
				<p>The following example will show you how you can create your own custom template for the Bootstrap popovers instead of using the default one.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabc5d3.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code9">

<script type="text/javascript">
$(document).ready(function(){
    $('[data-toggle="popover"]').popover({
        html: true,
        template: '<div class="popover"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div><div class="popover-footer"><a href="#" class="btn btn-info btn-sm">Close</a></div></div>'
    });
    
    // Custom jQuery to hide popover on click of the close button
    $(document).on("click", ".popover-footer .btn" , function(){
        $(this).parents(".popover").popover('hide');
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
				<p>The following example will insert the dynamically generated HTML code of the popover at the end of a <code>.rg3-w</code> element instead of the <code><a href="../info-html/ht_body-tag.php">&lt;body&gt;</a></code> element.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab1564.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code10">

<script type="text/javascript">
$(document).ready(function(){
    // Append popover HTML to rg3-w element
    $("#myPopovers a").popover({container: '.rg3-w'}); 
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
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box" style="background-color:#ff8585"
>
                            <p><strong>Read Carefully:</strong> Overriding the popover's default <code>container</code> option value does not produce any visible difference on the page. To see the actual result you need inspect the resulting DOM using the Firebug or Developer tools.</p>
                        </div>
                    </div>
                </div>
				<p class="space">Similarly, you can set other options for the popovers using the <code>$().popover(options)</code> method. Let's check out the other methods of the Bootstrap popover plugin.</p>
                <h2>.popover('show')</h2>
                <p>This method reveals an element's popover.</p>
                <div class="my_codeb-rg3-w space">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab1986.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code11">

<script type="text/javascript">
$(document).ready(function(){
    $(".show-popover").click(function(){
        $("#myPopover").popover('show');
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
                <h2>.popover('hide')</h2>
                <p>This method hides an element's popover.</p>
                <div class="my_codeb-rg3-w space">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab1986.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code12">

<script type="text/javascript">
$(document).ready(function(){
    $(".hide-popover").click(function(){
        $("#myPopover").popover('hide');
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
                <h2>.popover('toggle')</h2>
                <p>This method toggles an element's popover.</p>
                <div class="my_codeb-rg3-w space">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab1986.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code13">

<script type="text/javascript">
$(document).ready(function(){
    $(".toggle-popover").click(function(){
        $("#myPopover").popover('toggle');
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
                <h2>.popover('destroy')</h2>
                <p>This method hides and destroys an element's popover.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab1986.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code14">

<script type="text/javascript">
$(document).ready(function(){
    $(".destroy-popover").click(function(){
        $("#myPopover").popover('destroy');
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
				<hr />
				<h2>Events</h2>
				<p>Bootstrap's popover class includes few events for hooking into popover functionality.</p>
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
                            	<td>show.bs.popover</td>
                                <td>This event fires immediately when the show instance method is called.</td>
                            </tr>
                            <tr>
                            	<td>shown.bs.popover</td>
                                <td>This event is fired when the popover has been made visible to the user. It will wait until the CSS transition process has been fully completed before getting fired.</td>
                            </tr>
                            <tr>
                            	<td>hide.bs.popover</td>
                                <td>This event is fired immediately when the hide instance method has been called.</td>
                            </tr>
                            <tr>
                            	<td>hidden.bs.popover</td>
                                <td>This event is fired when the popover has finished being hidden from the user. It will wait until the CSS transition process has been fully completed before getting fired.</td>
                            </tr>
                            <tr>
                            	<td>inserted.bs.popover</td>
                                <td>This event is fired after the <code>show.bs.popover</code> event when the popover template has been added to the DOM.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
				<p>The following example displays an alert message to the user when fade out transition of the popover has been fully completed.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab6640.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code15">

<script type="text/javascript">
$(document).ready(function(){
    $('[data-toggle="popover"]').on('hidden.bs.popover', function(){
        alert("Popover has been completely closed.");
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
                    <a href="bt_tooltips.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i>
  Previous</a>
                    <a href="bt_alerts.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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