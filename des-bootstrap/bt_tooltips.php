<!DOCTYPE html>
	<html lang="en">
	<head>
	<meta name="description" content="How to Create Tooltips with Bootstrap 4">
	  <meta name="keywords" content="Bootstrap,Bootstrap4,tooltips with bootstrap4">
	  <meta name="author" content="webschooltoday.com">
    <title>How to Create Tooltips with Bootstrap 4 - WebSchool Today</title>
    <?php include "../links.php" ?>
</head>
<body>
<div>
<div class="tital">How to Create Tooltips with Bootstrap 4</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des_bootstrap.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
              </div>
              <a href="bt_popovers.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i>
</a>
                <a href="bt_tabs.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i>
</a>

                <h1>Bootstrap <span>Tooltips</span></h1>
                <p class="summary">In this tutorial you will learn how to create tooltips with Bootstrap.</p>
                <h2>Creating the Tooltips with Bootstrap</h2>
                <p>A tooltip is a small pop&thinsp;up that appears when user places the mouse pointer over an element such as link or buttons to provide hint or information about the element being hovered.</p>
                <p>Tooltips can be very helpful for the new visitors of your website because they enable the user to know the purpose of icons and links by placing the mouse pointer over them.</p>
                <h3>Step 1: Adding the Tooltip Markup</h3>
				<p>To create a tooltip, you need to add the <code>data-toggle="tooltip"</code> attribute to an element. Tolltip text that would display on hover can be specified using the <code>title</code> attribute.</p>
				<p>Here is the standard markup for adding a tolltip to a hyperlink.</p>
				<div class="shadow">
                    <div class="syntax">
                        <span class="tag">&lt;a <span class="attribute">href</span>="<span class="attribute-value">#</span>" <span class="attribute">data-toggle</span>="<span class="attribute-value">tooltip</span>" <span class="attribute">title</span>="<span class="attribute-value">Some text</span>"&gt;</span>Hover over me<span class="tag">&lt;/a&gt;</span>
                    </div>
                </div>
				<p>Similarly, you can add tooltips to the other elements such as buttons, icons, etc.</p>
				<!--Note box-->
                <div class="color-box break">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box" style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> For performance reasons the tooltip data-apis are opt in, means to use tooltips you must initialize them yourself with <code>tooltip()</code> method.</p>
                        </div>
                    </div>
                </div>
				<h3>Step 2: Triggering the Tooltips</h3>
                <p>Tooltips can be triggered via JavaScript &mdash; just call the <code>tooltip()</code> Bootstrap method with the <code>id</code>, <code>class</code> or any <a href="../des-css/style_selectors.php">CSS selector</a> of the target element in your JavaScript code.</p>
                <p>You can either initialize tooltips individually or all in one go. The following jQuery code will initialize all tooltips on a page by selecting them by their <code>data-toggle</code> attribute.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab0343.php" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
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
                <h2>Setting the Directions of Tooltips</h2>
                <p>You can set tooltips to appear on top, right, bottom and left sides of an element.</p>
				<h3>Positioning of Tooltips via Data Attributes</h3>
				<p>The following example will show you how to set the direction of tooltips via data attributes.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab4073.php" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

<a href="#" data-toggle="tooltip" data-placement="top" title="Default tooltip">Tooltip</a>
<a href="#" data-toggle="tooltip" data-placement="right" title="Another tooltip">Another tooltip</a>
<a href="#" data-toggle="tooltip" data-placement="bottom" title="A much longer tooltip to demonstrate the max-width of the Bootstrp tooltip.">Large tooltip</a>
<a href="#" data-toggle="tooltip" data-placement="left" title="The last tip!">Last tooltip</a>

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
				<h3>Positioning of Tooltips via JavaScript</h3>
				<p>The following example will show you how to set the direction of tooltips via JavaScript.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab6316.php" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

<script>
$(document).ready(function(){
    $(".tip-top").tooltip({placement : 'top'});
    $(".tip-right").tooltip({placement : 'right'});
    $(".tip-bottom").tooltip({placement : 'bottom'});
    $(".tip-left").tooltip({ placement : 'left'});
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
                <p>There are certain options which may be passed to <code>tooltip()</code> Bootstrap method to customize the functionality of the tooltip plugin.</p>
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
                                <td>Apply a CSS fade transition to the tooltip.</td>
                            </tr>
                            <tr>
                            	<td>html</td>
                                <td>boolean</td>
                                <td>false</td>
                                <td>Insert html into the tooltip. If false, jQuery's <code>text()</code> method will be used to insert content into the DOM. Use text if you're worried about XSS attacks.</td>
                            </tr>
                            <tr>
                            	<td>placement</td>
                                <td>string | function</td>
                                <td>'top'</td>
                                <td>Sets the position of the tooltip &mdash; top | bottom | left | right | auto. When "auto" value is specified, it will dynamically reorient the tooltip.</td>
                            </tr>
                            <tr>
                            	<td>selector</td>
                                <td>string</td>
                                <td>false</td>
                                <td>If a selector is provided, tooltip objects will be attached to the specified targets.</td>
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
                                <td>'hover focus'</td>
                                <td>Specify how tooltip is triggered &mdash; click | hover | focus | manual. Note you case pass trigger mutliple, space seperated, trigger types.</td>
                            </tr>
                            <tr>
                            	<td>delay</td>
                                <td>number | object</td>
                                <td>0</td>
                                <td>
                                	<p>Time to delay in showing and hiding the tooltip (ms) &mdash; does not apply to manual trigger type.</p>
                                    <p>If a number is supplied, delay is applied to both hide/show Object structure is:<br> <code>delay: {&thinsp;show: 500, hide: 100&thinsp;}</code></p>
                                </td>
                            </tr>
                            <tr>
                            	<td>container</td>
                                <td>string | false</td>
                                <td>false</td>
                                <td>Appends the tooltip to a specific element <code>container: 'body'</code></td>
                            </tr>
							<tr>
								<td>template</td>
								<td>string</td>
								<td><p style="font-size: 12px;"><code>'&lt;div class="tooltip" role="tooltip"&gt;&lt;div class="tooltip-arrow"&gt;&lt;/div&gt;&lt;div class="tooltip-inner"&gt;&lt;/div&gt;&lt;/div&gt;'</code></p></td>
								<td>
									<p>Base HTML to use when creating the tooltip. The tooltip's title will be inserted into the element having the class <code>.tooltip-inner</code> and the element with the class <code>.tooltip-arrow</code> will become the tooltip's arrow.</p>
									<p>The outermost rg3-w element should have the <code>.tooltip</code> class.</p>
								</td>
							</tr>
							<tr>
								<td>viewport</td>
								<td>string | object</td>
								<td><code>{ selector: 'body', padding: 0 }</code></td>
								<td>Keeps the tooltip within the bounds of this element. Example: <code>viewport: '#viewport'</code> or <code>{&thinsp;selector: '#viewport', padding: 0&thinsp;}</code></td>
                            </tr>
                            <tr>
                            	<td>offset</td>
                                <td>number | string</td>
                                <td>0</td>
                                <td>Offset of the tooltip relative to its target.</td>
                            </tr>
                            <tr>
                            	<td>fallbackPlacement</td>
                                <td>string | array</td>
                                <td>'flip'</td>
                                <td>Allows you to specify which position Popper will use on fallback.</td>
                            </tr>
                            <tr>
                            	<td>boundary</td>
                                <td>string | element</td>
                                <td>'scrollParent'</td>
                                <td>Overflow constraint boundary of the tooltip. Accepts the values of <code>'viewport'</code>, <code>'window'</code>, <code>'scrollParent'</code>, or an HTMLElement reference (JavaScript only).</td>
                            </tr>
                            <tr>
                            	<td>sanitize</td>
                                <td>boolean</td>
                                <td>true</td>
                                <td>Enable or disable the sanitization. If activated 'template' and 'title' options will be sanitized.</td>
                            </tr>
                            <tr>
                            	<td>whiteList</td>
                                <td>object</td>
                                <td><a rel="nofollow" href="https://getbootstrap.com/docs/4.3/getting-started/javascript/#sanitizer" target="_blank"><i>value</i></a></td>
                                <td>Object which contains allowed attributes and tags.</td>
                            </tr>
                            <tr>
                            	<td>sanitizeFn</td>
                                <td>null | function</td>
                                <td>null</td>
                                <td>Allows you to specify your own sanitize function.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p>You may set these options either through the use of data attributes or JavaScript. For setting the tooltips options via data attributes, just append the option name to <code>data-</code> along with the correct value, like <code>data-animation="false"</code>, <code>data-placement="bottom"</code> etc.</p>
				<p>However, JavaScript is the more preferable way for setting these options as it prevents you from repetitive work. See the tooltip's method <a href="#tooltip-options"><code>$().tooltip(options)</code></a> in the section below to know how to set the options for tooltips using the JavaScript.</p>
                <hr />
                <h2>Methods</h2>
                <p class="space">These are the standard Bootstrap's tooltip methods:</p>
                <h2 id="tooltip-options">$().tooltip(options)</h2>
                <p>This method attaches the tooltip handler to a group of elements. It also allows you to set the options for the tooltips, so that you can customize them according to your needs.</p>
				<p>The following example will insert the specified text inside the tooltips if the value of the <code>title</code> attribute is omitted or missing from the selected elements:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab2877.php" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

<script>
$(document).ready(function(){
    $("#myTooltips a").tooltip({
        title: "This will show in absence of title attribute."
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
				<p>The following example will show you how to place the HTML content inside a tooltip:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabf8ab.php" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

<script>
$(document).ready(function(){
    $("#myTooltip").tooltip({
        title: "<h4><img src='images/smiley.png' alt='Smiley'> Hello, <b>I'm</b> <i>Smiley!</i></h4>",  
        html: true
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
				<p>The following example will show you how to control the timing of showing and hiding of the tooltip using the tooltip's <code>delay</code> option via JavaScript.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab327d" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>

                        <textarea id="code6">

<script>
$(document).ready(function(){
    // Showing and hiding tooltip with same speed
    $(".tooltip-tiny").tooltip({
        delay: 500
    });
    
    // Showing and hiding tooltip with different speed
    $(".tooltip-large").tooltip({
        delay: {show: 0, hide: 500}
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
				<p>The following example will show you how you can create your own custom template for the Bootstrap tooltips instead of using the default one.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab6e69.php" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code7">

<script>
$(document).ready(function(){
    $("#myTooltips a").tooltip({
        template: '<div class="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-head"><h3><span class="glyphicon glyphicon-info-sign"></span> Tool Info</h3></div><div class="tooltip-inner"></div></div>'
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
				<p>The following example will insert the dynamically generated HTML code of the tooltip at the end of a <code>.rg3-w</code> element instead of the <a href="../info-html/ht_body-tag.php"><code>&lt;body&gt;</code></a> element.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabfdb9.php" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code8">

<script>
$(document).ready(function(){
    // Append tooltip HTML to rg3-w element
    $("#myTooltips a").tooltip({container: ".rg3-w"}); 
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
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box" style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> Overriding the tooltip's default <code>container</code> option value does not produce any visible difference on the page. To see the actual result you need inspect the resulting DOM using the Firebug or Developer tools.</p>
                        </div>
                    </div>
                </div>
				<p class="space">Similarly, you can set other options for the tooltips using the <code>$().tooltip(options)</code> method. Let's check out the other methods of the Bootstrap tooltip plugin.</p>
                <h2>.tooltip('show')</h2>
                <p>This method reveals an element's tooltip.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab0a96.php" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code9">

<script>
$(document).ready(function(){
    $(".show-tooltip").click(function(){
        $("#myTooltip").tooltip('show');
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
                <h2>.tooltip('hide')</h2>
                <p>This method hides an element's tooltip.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab0a96.php" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code10">

<script>
$(document).ready(function(){
    $(".show-tooltip").click(function(){
        $("#myTooltip").tooltip('show');
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
                <h2>.tooltip('toggle')</h2>
                <p>This method toggles an element's tooltip.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab0a96.php" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code11">

<script>
$(document).ready(function(){
    $(".toggle-tooltip").click(function(){
        $("#myTooltip").tooltip('toggle');
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
				<h2>.tooltip('dispose')</h2>
                <p>This method hides and destroys an element's tooltip.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab0a96.php" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code12">

<script>
$(document).ready(function(){
    $(".destroy-tooltip").click(function(){
        $("#myTooltip").tooltip('dispose');
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
                <h2>.tooltip('enable')</h2>
                <p>This method gives an element's tooltip the ability to be shown. Tooltips are enabled by default.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab0a96.php" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code13">

<script>
$(document).ready(function(){
    $(".enable-tooltip").click(function(){
        $("#myTooltip").tooltip('enable');
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
                <h2>.tooltip('disable')</h2>
                <p>This method removes the ability for an element's tooltip to be shown. The tooltip will only be able to be shown if it is re-enabled.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab0a96.php" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code14">

<script>
$(document).ready(function(){
    $(".disable-tooltip").click(function(){
        $("#myTooltip").tooltip('disable');
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
                <h2>.tooltip('toggleEnabled')</h2>
                <p>This method toggles the ability for an element's tooltip to be shown or hidden.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab0a96" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code15">

<script>
$(document).ready(function(){
    $(".toggle-enabled-tooltip").click(function(){
        $("#myTooltip").tooltip('toggleEnabled');
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
                <h2>.tooltip('update')</h2>
                <p>This method updates the position of an element's tooltip.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab0a96.php" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code16">

<script>
$(document).ready(function(){
    $(".update-tooltip").click(function(){
        $("#myTooltip").tooltip('update');
    }); 
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
				<p>Bootstrap's tooltip class includes few events for hooking into tooltip functionality.</p>
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
                            	<td>show.bs.tooltip</td>
                                <td>This event fires immediately when the show instance method is called.</td>
                            </tr>
                            <tr>
                            	<td>shown.bs.tooltip</td>
                                <td>This event is fired when the tooltip has been made visible to the user. It will wait until the CSS transition process has been fully completed before getting fired.</td>
                            </tr>
                            <tr>
                            	<td>hide.bs.tooltip</td>
                                <td>This event is fired immediately when the hide instance method has been called.</td>
                            </tr>
                            <tr>
                            	<td>hidden.bs.tooltip</td>
                                <td>This event is fired when the tooltip has finished being hidden from the user. It will wait until the CSS transition process has been fully completed before getting fired.</td>
                            </tr>
                            <tr>
                            	<td>inserted.bs.tooltip</td>
                                <td>This event is fired after the <code>show.bs.tooltip</code> event when the tooltip template has been added to the DOM.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
				<p>The following example will display an alert message to the user when the fade out transition of the tooltip has been fully completed.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabd306.php" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code17">

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').on('hidden.bs.tooltip', function(){
        alert("Tooltip has been completely closed.");
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
                    <a href="bt_tabs.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i>
 Previous</a>
                    <a href="bt_popovers.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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