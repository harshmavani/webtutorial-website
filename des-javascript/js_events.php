<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="JavaScript Events">
	  <meta name="keywords" content="javascript,js,JavaScript Events">
	  <meta name="author" content="webschooltoday.com">
    <title>JavaScript Events - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">JavaScript Events</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_javascript.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="js_strings.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="js_operators.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>JavaScript <span>Events</span></h1>
                <p class="summary">In this tutorial you will learn how to handle events in JavaScript.</p>
				<h2>Understanding Events and Event Handlers</h2>
				<p>An event is something that happens when user interact with the web page, such as when he clicked a link or button, entered text into an input box or textarea, made selection in a select box, pressed key on the keyboard, moved the mouse pointer, submits a form, etc. In some cases, the Browser itself can trigger the events, such as the page load and unload events.</p>
				<p>When an event occur, you can use a JavaScript event handler (or an event listener) to detect them and perform specific task or set of tasks. By convention, the names for event handlers always begin with the word "on", so an event handler for the click event is called <code>onclick</code>, similarly an event handler for the load event is called <code>onload</code>, event handler for the blur event is called <code>onblur</code>, and so on.</p>
				<p>There are several ways to assign an event handler. The simplest way is to add them directly to the start tag of the HTML elements using the special event-handler attributes. For example, to assign a click handler for a button element, we can use <code>onclick</code> attribute, like this:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab443d.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

                        <button type="button" onclick="alert('Hello World!')">Click Me</button>

     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code1"), {
									mode: "text/html",
									tabMode: "indent",
									styleActiveLine: true,
									lineNumbers: true,
									lineWrapping: true
								});
							</script>                    </div>
                </div>
                <!--End:Code box-->
				<p>However, to keep the JavaScript seperate from HTML, you can set up the event handler in an external JavaScript file or within the <code>&lt;script&gt;</code> and <code>&lt;/script&gt;</code> tags, like this:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabbdd3.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

                        <button type="button" id="myBtn">Click Me</button>
<script>
    function sayHello() {
        alert('Hello World!');
    }
    document.getElementById("myBtn").onclick = sayHello;
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
                <!--End:Code box-->
				<!--Note box-->
				<div class="color-box break">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585"
>
							<p><strong>Important:</strong> Since HTML attributes are case-insensitive so <code>onclick</code> may also be written as <code>onClick</code>, <code>OnClick</code> or <code>ONCLICK</code>. But its <em>value</em> is case-sensitive.</p>
						</div>
					</div>
				</div>
				<!--End:Note box-->
				<p class="space">In general, the events can be categorized into four main groups &mdash; <a href="#mouse-events">mouse events</a>, <a href="#keyboard-events">keyboard events</a>, <a href="#form-events">form events</a> and <a href="#document-and-window-events">document/window events</a>. There are many other events, we will learn about them in later chapters. The following section will give you a brief overview of the most useful events one by one along with the real life practice examples.</p>
				<h2 id="mouse-events" class="section-title"><span>Mouse Events</span></h2>
				<p class="room">A mouse event is triggered when the user click some element, move the mouse pointer over an element, etc. Here're some most important mouse events and their event handler.</p>
				<h2>The Click Event (onclick)</h2>
				<p>The click event occurs when a user clicks on an element on a web page. Often, these are form elements and links. You can handle a click event with an <code>onclick</code> event handler.</p>
				<p>The following example will show you an alert message when you click on the elements.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab457a.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

                        <button type="button" onclick="alert('You have clicked a button!');">Click Me</button>
<a href="#" onclick="alert('You have clicked a link!');">Click Me</a>
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
                <!--End:Code box-->
				<h2>The Contextmenu Event (oncontextmenu)</h2>
				<p>The contextmenu event occurs when a user clicks the right mouse button on an element to open a context menu. You can handle a contextmenu event with an <code>oncontextmenu</code> event handler.</p>
				<p>The following example will show an alert message when you right-click on the elements.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab8cb5.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

                        <button type="button" oncontextmenu="alert('You have right-clicked a button!');">Right Click on Me</button>
<a href="#" oncontextmenu="alert('You have right-clicked a link!');">Right Click on Me</a>
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
                <!--End:Code box-->
				<h2>The Mouseover Event (onmouseover)</h2>
				<p>The mouseover event occurs when a user moves the mouse pointer over an element.</p>
				<p>You can handle the mouseover event with the <code>onmouseover</code> event handler. The following example will show you an alert message when you place mouse over the elements.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabdee8.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

                        <button type="button" onmouseover="alert('You have placed mouse pointer over a button!');">Place Mouse Over Me</button>
<a href="#" onmouseover="alert('You have placed mouse pointer over a link!');">Place Mouse Over Me</a>
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
                <!--End:Code box-->
				<h2>The Mouseout Event (onmouseout)</h2>
				<p>The mouseout event occurs when a user moves the mouse pointer outside of an element.</p>
				<p>You can handle the mouseout event with the <code>onmouseout</code> event handler. The following example will show you an alert message when the mouseout event occurs.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab9b15.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code6">

                        <button type="button" onmouseout="alert('You have moved out of the button!');">Place Mouse Inside Me and Move Out</button>
<a href="#" onmouseout="alert('You have moved out of the link!');">Place Mouse Inside Me and Move Out</a>
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
                <!--End:Code box-->
				<hr />
				<h2 id="keyboard-events" class="section-title"><span>Keyboard Events</span></h2>
				<p class="room">A keyboard event is fired when the user press or release a key on the keyboard. Here're some most important keyboard events and their event handler.</p>
				<h2>The Keydown Event (onkeydown)</h2>
				<p>The keydown event occurs when the user presses down a key on the keyboard.</p>
				<p>You can handle the keydown event with the <code>onkeydown</code> event handler. The following example will show you an alert message when the keydown event occurs.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab15db.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code7">

                        <input type="text" onkeydown="alert('You have pressed a key inside text input!')">
<textarea onkeydown="alert('You have pressed a key inside textarea!')"></textarea>
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
                <!--End:Code box-->
				<h2>The Keyup Event (onkeyup)</h2>
				<p>The keyup event occurs when the user releases a key on the keyboard.</p>
				<p>You can handle the keyup event with the <code>onkeyup</code> event handler. The following example will show you an alert message when the keyup event occurs.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabc74b.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code8">

                        <input type="text" onkeyup="alert('You have released a key inside text input!')">
<textarea onkeyup="alert('You have released a key inside textarea!')"></textarea>
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
                <!--End:Code box-->
				<h2>The Keypress Event (onkeypress)</h2>
				<p>The keypress event occurs when a user presses down a key on the keyboard that has a character value associated with it. For example, keys like Ctrl, Shift, Alt, Esc, Arrow keys, etc. will not generate a keypress event, but will generate a keydown and keyup event.</p>
				<p>You can handle the keypress event with the <code>onkeypress</code> event handler. The following example will show you an alert message when the keypress event occurs.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab434a.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code9">

                        <input type="text" onkeypress="alert('You have pressed a key inside text input!')">
<textarea onkeypress="alert('You have pressed a key inside textarea!')"></textarea>
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
                <!--End:Code box-->
                <hr />
				<h2 id="form-events" class="section-title"><span>Form Events</span></h2>
				<p class="room">A form event is fired when a form control receive or loses focus or when the user modify a form control value such as by typing text in a text input, select any option in a select box etc. Here're some most important form events and their event handler.</p>
				<h2>The Focus Event (onfocus)</h2>
				<p>The focus event occurs when the user gives focus to an element on a web page.</p>
				<p>You can handle the focus event with the <code>onfocus</code> event handler. The following example will highlight the background of text input in yellow color when it receives the focus.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab7337.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code10">

                        <script>
    function highlightInput(elm){
        elm.style.background = "yellow";
    }    
</script>
<input type="text" onfocus="highlightInput(this)">
<button type="button">Button</button>
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
                <!--End:Code box-->
				<!--Note box-->
				<div class="color-box space">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585"
>
							<p><strong>Important:</strong> The value of <code>this</code> keyword inside an event handler refers to the element which has the handler on it (i.e. where the event is currently being delivered).</p>
						</div>
					</div>
				</div>
				<!--End:Note box-->
				<h2>The Blur Event (onblur)</h2>
				<p>The blur event occurs when the user takes the focus away from a form element or a window.</p>
				<p>You can handle the blur event with the <code>onblur</code> event handler. The following example will show you an alert message when the text input element loses focus.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabfb2b.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code11">

                        <input type="text" onblur="alert('Text input loses focus!')">
<button type="button">Submit</button>
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
                <!--End:Code box-->
				<p class="space">To take the focus away from a form element first click inside of it then press the tab key on the keyboard, give focus on something else, or click outside of it.</p>
				<h2>The Change Event (onchange)</h2>
				<p>The change event occurs when a user changes the value of a form element.</p>
				<p>You can handle the change event with the <code>onchange</code> event handler. The following example will show you an alert message when you change the option in the select box.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabb0a7.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code12">

                        <select onchange="alert('You have changed the selection!');">
    <option>Select</option>
    <option>Male</option>
    <option>Female</option>
</select>
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
                <!--End:Code box-->
				<h2>The Submit Event (onsubmit)</h2>
				<p>The submit event only occurs when the user submits a form on a web page.</p>
				<p>You can handle the submit event with the <code>onsubmit</code> event handler. The following example will show you an alert message while submitting the form to the server.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab4eee.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code13">

                        <form action="action.php" method="post" onsubmit="alert('Form data will be submitted to the server!');">
    <label>First Name:</label>
    <input type="text" name="first-name" required>
    <input type="submit" value="Submit">
</form>
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
                <!--End:Code box-->
				<hr />
				<h2 id="document-and-window-events" class="section-title"><span>Document/Window Events</span></h2>
				<p class="break">Events are also triggered in situations when the page has loaded or when user resize the browser window, etc. Here're some most important document/window events and their event handler.</p>
				<h2>The Load Event (onload)</h2>
				<p>The load event occurs when a web page has finished loading in the web browser.</p>
				<p>You can handle the load event with the <code>onload</code> event handler. The following example will show you an alert message as soon as the page finishes loading.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab987a.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code14">

                        <body onload="window.alert('Page is loaded successfully!');">
    <h1>This is a heading</h1>
    <p>This is paragraph of text.</p>
</body>
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
                <!--End:Code box-->
				<h2>The Unload Event (onunload)</h2>
				<p>The unload event occurs when a user leaves the current web page.</p>
				<p>You can handle the unload event with the <code>onunload</code> event handler. The following example will show you an alert message when you try to leave the page.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab2899.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code15">

                        <body onunload="alert('Are you sure you want to leave this page?');">
    <h1>This is a heading</h1>
    <p>This is paragraph of text.</p>
</body>
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
                <!--End:Code box-->
				<h2>The Resize Event (onresize)</h2>
				<p>The resize event occurs when a user resizes the browser window. The resize event also occurs in situations when the browser window is minimized or maximized.</p>
				<p>You can handle the resize event with the <code>onresize</code> event handler. The following example will show you an alert message when you resize the browser window to a new width and height.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabd984.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code16">

                        <p id="result"></p>
<script>
    function displayWindowSize() {
        var w = window.outerWidth;
        var h = window.outerHeight;
        var txt = "Window size: width=" + w + ", height=" + h;
        document.getElementById("result").innerHTML = txt;
    }
    window.onresize = displayWindowSize;
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
                <!--End:Code box-->
				<!--Bottom Navigation-->				
                <div class="bottom-link clearfix">
                    <a href="js_operators.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="js_strings.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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