<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="JavaScript Event Propagation">
	  <meta name="keywords" content="javascript,js,JavaScript Event Propagation">
	  <meta name="author" content="webschooltoday.com">
    <title>JavaScript Event Propagation - WebSchool Today</title>
    
    <style>
		.event-demo{
			margin: 15px 0;
		}
		.event-demo *{
			margin: 8px 0;
			padding: 8px 28px;			
			display: block;
			font-family: Consolas,Monaco,'Andale Mono','Ubuntu Mono',monospace!important;
			font-size: 14px;
			background: #fff;
			color: #000;
		}
		.event-demo div{
			background: #eee;
		}
		.event-demo p{
			background: #ddd;
		}
		.event-demo a{
			background: #ccc;
            cursor: pointer;
		}
	</style>
     <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">JavaScript Event Propagation</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_javascript.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="js_borrowing-methods.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="js_event-listeners.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>JavaScript <span>Event Propagation</span></h1>
                <p class="summary">In this tutorial you will learn how events propagate in the DOM tree in JavaScript.</p>
				<h2>Understanding the Event Propagation</h2>				
				<p>Event propagation is a mechanism that defines how events propagate or travel through the DOM tree to arrive at its target and what happens to it afterward.</p>
				<p>Let's understand this with the help of an example, suppose you have assigned a click <a href="js_events.php">event handler</a> on a hyperlink (i.e. <a href="../info-html/html-a-tag.php"><code>&lt;a&gt;</code></a> element) which is nested inside a paragraph (i.e. <a href="../info-html/html-p-tag.php"><code>&lt;p&gt;</code></a> element). Now if you click on that link, the handler will be executed. But, instead of link, if you assign the click event handler to the paragraph containing the link, then even in this case, clicking the link will still trigger the handler. That's because events don't just affect the target element that generated the event&mdash;they travel up and down through the DOM tree to reach their target. This is known as event propagation</p>
				<p>In modern browser event propagation proceeds in two phases: <strong><em>capturing</em></strong>, and <strong><em>bubbling</em></strong> phase. Before we proceed further, take a look at the following illustration:</p>
				<p><img src="../assets/images/Event1.png" alt="Event Propagation Demo" style="width: 620px;"></p>
				<p>Above image demonstrates how event travels in the DOM tree during different phases of the event propagation when an event is fired on an element that has parent elements.</p>
				<p>The concept of event propagation was introduced to deal with the situations in which multiple elements in the DOM hierarchy with a parent-child relationship have event handlers for the same event, such as a mouse click. Now, the question is which element's click event will be handled first when the user clicks on the inner element&mdash;the click event of the outer element, or the inner element.</p>
				<p>In the following sections of this chapter we will discuss each phases of the event propagation in greater detail and find out the answer of this question.</p>
				<!--Note box-->
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585"
>
							<p><strong>Read Carefully:</strong> Formally there are 3 phases, <em>capture</em>, <em>target</em> and <em>bubble</em> phase. But, the 2nd phase i.e. the target phase (occurs when the event arrives at the target element that has generated the event) is not handled separately in modern browsers, handlers registered for both <em>capturing</em> and <em>bubbling</em> phases are executed in this phase.</p>
						</div>
					</div>
				</div>
				<!--End:Note box-->
				<p class="space"></p>
				<h2>The Capturing Phase</h2>
				<p>In the capturing phase, events propagate from the <a href="js_window.php">Window</a> down through the DOM tree to the target node. For example, if the user clicks a hyperlink, that click event would pass through the <a href="../info-html/html-html-tag.php"><code>&lt;html&gt;</code></a> element, the <a href="../info-html/html-body-tag.php"><code>&lt;body&gt;</code></a> element, and the <a href="../info-html/html-p-tag.php"><code>&lt;p&gt;</code></a> element containing the link.</p>
				<p>Also if any ancestor (i.e. parent, grandparent, etc.) of the target element and the target itself has a specially registered <strong>capturing event listener</strong> for that type of event, those listeners are executed during this phase. Let's check out the following example:</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab4f21.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
						<textarea id="code1">

						<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Event Capturing Demo</title>
<style type="text/css">
    div, p, a{
        padding: 15px 30px;
        display: block;
        border: 2px solid #000;
        background: #fff;
    }
</style>
</head>
<body>
<div id="wrap">DIV
    <p class="hint">P
        <a href="#">A</a>
    </p>
</div>

<script>
    function showTagName() {
        alert("Capturing: "+ this.tagName);
    }
    
    var elems = document.querySelectorAll("div, p, a");
    for(let elem of elems) {
        elem.addEventListener("click", showTagName, true);
    }
</script>
</body>
</html>
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
                <!--End:Code box-->
				<p class="break">Here is a simple demonstration that we've created utilizing the above example to show you how event capturing works. Click on any element and observe in which order alert pop-ups appears.</p>
				<div class="event-demo" id="captureDemo">
					<div>&lt;div id="wrap"&gt;
						<p>&lt;p class="hint"&gt;
							<a>&lt;a href="#"&gt;Click Me&lt;/a&gt;</a>
							&lt;/p&gt;
						</p>
						&lt;/div&gt;
					</div>
				</div>
				<script>
					function showTagName() {
						alert("Capturing: "+ this.tagName);
					}
				
					var elems = document.querySelectorAll("#captureDemo *");
					for(let elem of elems) {
						elem.addEventListener("click", showTagName, true);
					}
				</script>
				<p>Event capturing is not supported in all browsers and rarely used. For instance, Internet Explorer prior to version 9.0 does not support event capturing.</p>
				<p>Also, event capturing only works with event handlers registered with the <code>addEventListener()</code> method when the third argument is set to <code>true</code>. The traditional method of assigning event handlers, like using <code>onclick</code>, <code>onmouseover</code>, etc. won't work here. Please check out the <a href="js_event-listeners.php">JavaScript event listeners</a> chapter to learn more about event listeners.</p>
				<hr />				
				<h2>The Bubbling Phase</h2>
				<p>In the bubbling phase, the exact opposite occurs. In this phase event propagates or bubbles back up the DOM tree, from the target element up to the <a href="js_window.php">Window</a>, visiting all of the ancestors of the target element one by one. For example, if the user clicks a hyperlink, that click event would pass through the <code>&lt;p&gt;</code>  element containing the link, the <code>&lt;body&gt;</code> element, the <code>&lt;html&gt;</code> element, and the <code>document</code> node.</p>
				<p>Also, if any ancestor of the target element and the target itself has event handlers assigned for that type of event, those handlers are executed during this phase. In modern browsers, all event handlers are registered in the bubbling phase, by default. Let's check out an example:</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelabf292.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
						<textarea id="code2">

						<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Event Bubbling Demo</title>
<style type="text/css">
    div, p, a{
        padding: 15px 30px;
        display: block;
        border: 2px solid #000;
        background: #fff;
    }
</style>
</head>
<body>
<div onclick="alert('Bubbling: ' + this.tagName)">DIV
    <p onclick="alert('Bubbling: ' + this.tagName)">P
        <a href="#" onclick="alert('Bubbling: ' + this.tagName)">A</a>
    </p>
</div>
</body>
</html>
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
				<p>Here is a simple demonstration that we've created utilizing the above example to show you how event bubbling works. Click on any element and observe in which order alert pop-ups appears.</p>
				<div class="event-demo">
					<div onclick="alert('Bubbling: ' + this.tagName)">&lt;div id="wrap"&gt;
						<p onclick="alert('Bubbling: ' + this.tagName)">&lt;p class="hint"&gt;
							<a onclick="alert('Bubbling: ' + this.tagName)">&lt;a href="#"&gt;Click Me&lt;/a&gt;</a>
							&lt;/p&gt;
						</p>
						&lt;/div&gt;
					</div>
				</div>
				<p>Event bubbling is supported in all browsers, and it works for all handlers, regardless of how they are registered e.g. using <code>onclick</code> or <code>addEventListener()</code> (unless they are registered as <a href="js_event-listeners.php">capturing event listener</a>). That's why the term event propagation is often used as a synonym of event bubbling.</p>
				<hr />
				<h2>Accessing the Target Element</h2>
				<p>The target element is the <a href="js_dom-nodes.php">DOM node</a> that has generated the event. For example, if the user clicks a hyperlink, the target element is the hyperlink.</p>
				<p>The target element is accessible as <code>event.target</code>, it doesn't change through the event propagation phases. Additionally, the <code>this</code> keyword represents the current element (i.e. the element that has a currently running handler attached to it). Let's check out an example:</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelabfc70.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
						<textarea id="code3">

						<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Event Target Demo</title>
<style type="text/css">
    div, p, a{
        padding: 15px 30px;			
        display: block;
        border: 2px solid #000;
        background: #fff;
    }
</style>
</head>
<body>
<div id="wrap">DIV
    <p class="hint">P
        <a href="#">A</a>
    </p>
</div>

<script>
    // Selecting the div element
    var div = document.getElementById("wrap");

    // Attaching an onclick event handler
    div.onclick = function(event) {
        event.target.style.backgroundColor = "lightblue";

        // Let the browser finish rendering of background color before showing alert
        setTimeout(() => {
            alert("target = " + event.target.tagName + ", this = " + this.tagName);
            event.target.style.backgroundColor = ''
        }, 0);
    }
</script>
</body> 
</html>
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
				<p class="break">Here is a simple demonstration that we've created utilizing the above example. Click on any element and it will show you the tag name of the target element and the current element.</p>
				<div class="event-demo">
					<div id="wrap">&lt;div id="wrap"&gt;
						<p>&lt;p class="hint"&gt;
							<a>&lt;a href="#"&gt;Click Me&lt;/a&gt;</a>
							&lt;/p&gt;
						</p>
						&lt;/div&gt;
					</div>
				</div>
				<script>
					// Selecting the div element
					var div = document.getElementById("wrap");
					
					// Attaching an onclick event handler
					div.onclick = function(event) {
						event.target.style.backgroundColor = "lightblue";
						
						// Let the browser finish rendering of background color before showing alert
						setTimeout(() => {
							alert("target = " + event.target.tagName + ", this = " + this.tagName);
							event.target.style.backgroundColor = ''
						}, 0);
					}
				</script>
				<p>The fat arrow (<code>=&gt;</code>) sign we've used in the example above is an arrow function expression. It has a shorter syntax than a function expression, and it would make the <code>this</code> keyword behave properly. Please check out the tutorial on <a href="js_es6-features.php">ES6 features</a> to learn more about arrow function.<p>
				<hr />
				<h2>Stopping the Event Propagation</h2>
				<p>You can also stop event propagation in the middle if you want to prevent any ancestor element's event handlers from being notified about the event.</p>
				<p>For example, suppose you have nested elements and each element has <code>onclick</code> event handler that displays an alert dialog box. Normally, when you click on the inner element all handlers will be executed at once, since event bubble up to the DOM tree.</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab602e.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
						<textarea id="code4">

						<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Event Propagation Demo</title>
<style type="text/css">
    div, p, a{
        padding: 15px 30px;
        display: block;
        border: 2px solid #000;
        background: #fff;
    }
</style>
</head>
<body>
<div id="wrap">DIV
    <p class="hint">P
        <a href="#">A</a>
    </p>
</div>

<script>
    function showAlert() {
        alert("You clicked: "+ this.tagName);
    }

    var elems = document.querySelectorAll("div, p, a");
    for(let elem of elems) {
        elem.addEventListener("click", showAlert);
    }
</script>
</body>
</html>
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
				<p class="break">Here's a simple demonstration that we've created utilizing the above example. If you click on any child element, event handler on parent elements are also executed and you may see multiple alert boxes.</p>
				<div class="event-demo" id="eventPropagation">
					<div>&lt;div id="wrap"&gt;
						<p>&lt;p class="hint"&gt;
							<a>&lt;a href="#"&gt;Click Me&lt;/a&gt;</a>
							&lt;/p&gt;
						</p>
						&lt;/div&gt;
					</div>
				</div>
				<script>
					function showAlert(event) {
						alert("You clicked: "+ this.tagName);
					}
				
					var elems = document.querySelectorAll("#eventPropagation *");
					for(var elem of elems) {
						elem.addEventListener("click", showAlert);
					}
				</script>				
				<p>To prevent this situation you can stop event from bubbling up the DOM tree using the <code>event.stopPropagation()</code> method. In the following example click event listener on the parent elements will not execute if you click on the child elements.</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab314e.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
						<textarea id="code5">
						<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Stop Event Propagation Demo</title>
<style type="text/css">
    div, p, a{
        padding: 15px 30px;
        display: block;
        border: 2px solid #000;
        background: #fff;
    }
</style>
</head>
<body>
<div id="wrap">DIV
    <p class="hint">P
        <a href="#">A</a>
    </p>
</div>

<script>
    function showAlert(event) {
        alert("You clicked: "+ this.tagName);
        event.stopPropagation();
    }

    var elems = document.querySelectorAll("div, p, a");
    for(let elem of elems) {
        elem.addEventListener("click", showAlert);
    }
</script>
</body>
</html>
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
				<p>Here's is the updated demonstration. Now if you click on any child element only one alert will appear.</p>
				<div class="event-demo" id="stopPropagation">
					<div>&lt;div id="wrap"&gt;
						<p>&lt;p class="hint"&gt;
							<a>&lt;a href="#"&gt;Click Me&lt;/a&gt;</a>
							&lt;/p&gt;
						</p>
						&lt;/div&gt;
					</div>
				</div>
				<script>
					function showNewAlert(event) {
						alert("You clicked: "+ event.target.tagName);
						event.stopPropagation();
					}
				
					var elems = document.querySelectorAll("#stopPropagation *");
					for(let elem of elems) {
						elem.addEventListener("click", showNewAlert);
					}
				</script>
				<p>Additionally, you can even prevent any other listeners attached to the same element for the same event type from being executed using the <code>stopImmediatePropagation()</code> method.</p>
				<p>In the following example we've attached multiple listeners to the hyperlink, but only one listener for the hyperlink will execute when you click the link, and you will see only one alert.</p>
				<!--Code box-->
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab079d.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
						<textarea id="code6">

						<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Stop Immediate Propagation Demo</title>
<style type="text/css">
    div, p, a{
        padding: 15px 30px;
        display: block;
        border: 2px solid #000;
        background: #fff;
    }
</style>
</head>
<body>
<div onclick="alert('You clicked: ' + this.tagName)">DIV
    <p onclick="alert('You clicked: ' + this.tagName)">P
        <a href="#" id="link">A</a>
    </p>
</div>

<script>
    function sayHi() {
        alert("Hi, there!");
        event.stopImmediatePropagation();
    }
    function sayHello() {
        alert("Hello World!");
    }
    
    // Attaching multiple event handlers to hyperlink
    var link = document.getElementById("link");
    link.addEventListener("click", sayHi);  
    link.addEventListener("click", sayHello);
</script>
</body>
</html>
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
				<!--Note box-->
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585"
>
							<p><strong>Read Carefully:</strong> If several listeners are attached to the same element for the same event type, they are executed in order in which they have been added. But, if any listener calls the <code>event.stopImmediatePropagation()</code> method, no remaining listeners will be executed.</p>
						</div>
					</div>
				</div>
				<!--End:Note box-->
				<hr />
				<h2>Preventing the Default Action</h2>
				<p>Some events have a default action associated with them. For example, if you click on a link browser takes you to the link's target, when you click on a form submit button browser submit the form, etc. You can prevent such default actions with the <code>preventDefault()</code> method of the event object.</p>
                <p>However, preventing the default actions does not stop event propagation; the event continues to propagate to the DOM tree as usual. Here's is an example:</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelabc305.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
						<textarea id="code7">

						<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Prevent Default Demo</title>
</head>
<body>
<form action="/output_file/html/action.php" method="post" id="users">
    <label>First Name:</label>
    <input type="text" name="first-name" id="firstName">
    <input type="submit" value="Submit" id="submitBtn">
</form>

<script>
    var btn = document.getElementById("submitBtn");
    
    btn.addEventListener("click", function(event) {
        var name = document.getElementById("firstName").value;
        alert("Sorry, " + name + ". The preventDefault() won't let you submit this form!");
        event.preventDefault(); // Prevent form submission
    });
</script>
</body>
</html>
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
				<!--Bottom Navigation-->
				<div class="bottom-link clearfix">
                    <a href="js_event-listeners.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="js_borrowing-methods.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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