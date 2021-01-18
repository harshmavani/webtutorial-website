<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="JavaScript Event Listeners">
	  <meta name="keywords" content="javascript,js,JavaScript Event Listeners">
	  <meta name="author" content="webschooltoday.com">
    <title>JavaScript Event Listeners - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">JavaScript Event Listeners</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_javascript.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="js_event-propagation.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="js_type-conversions.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>JavaScript <span>Event Listeners</span></h1>
                <p class="summary">In this tutorial you will learn about DOM event listeners in JavaScript.</p>
				<h2>Understanding Event Listeners</h2>
				<p>The event listeners are just like <a href="js_events.php">event handlers</a>, except that you can assign as many event listeners as you like to a particular event on particular element.</p>
				<p>To understand how event listeners actually works let's check out a simple example. Suppose that you've created two functions and you try to execute both of them on click of the button using the <code>onclick</code> event handler, as shown in the following example:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab71e4.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

                        <button id="myBtn">Click Me</button>
 
 <script>
 // Defining custom functions
 function firstFunction() {
     alert("The first function executed successfully!");
 }
  
 function secondFunction() {
     alert("The second function executed successfully");
 }
  
 // Selecting button element
 var btn = document.getElementById("myBtn");
  
 // Assigning event handlers to the button
 btn.onclick = firstFunction;
 btn.onclick = secondFunction; // This one overwrite the first
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
                <!--End:Code box-->
				<p>If you run the above example and click the button element, only <code>secondFunction()</code> will be executed, because assigning the second event handler overwrites the first.</p>
				<p>This is the main shortcoming of this classic event model&mdash;you can only assign one event handler to a particular event on a particular element i.e. a single function per event per element. To deal with this problem W3C introduced more flexible event-model called <em>event listeners</em>.</p>
				<p>Any HTML element can have multiple event listeners, therefore you can assign multiple functions to the same event for the same element, as demonstrated in following example:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab986b.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

                        <button id="myBtn">Click Me</button>
 
 <script>
 // Defining custom functions
 function firstFunction() {
     alert("The first function executed successfully!");
 }
  
 function secondFunction() {
     alert("The second function executed successfully");
 }
  
 // Selecting button element
 var btn = document.getElementById("myBtn");
  
 // Assigning event listeners to the button
 btn.addEventListener("click", firstFunction);
 btn.addEventListener("click", secondFunction);
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
				<p>Now, if you run the above example and click the button, both functions will be executed.</p>
				<p>In addition to the event <em>type</em> and <em>listener</em> function parameter the <code>addEventListener()</code> accepts one more Boolean parameter <em>useCapture</em>. This is an optional parameter which specifies whether to use <em>event bubbling</em> or <em>event capturing</em>. Its basic syntax is:</p>
				<div class="shadow">
                    <div class="syntax">
						<em>target</em>.<span class="keyword">addEventListener</span>(<em>event</em>, <em>function</em>, <em>useCapture</em>);
                    </div>
                </div>
				<p>Event bubbling and capturing are two ways of propagating events. We will learn about <a href="js_event-propagation.php">event propagation</a> in detail in the upcoming chapter.</p>
				<hr />
				<h2>Adding Event Listeners for Different Event Types</h2>
				<p>Like event handler, you can assign different event listeners to different event types on the same element. The following example will assign different event-listener functions to the "click", "mouseover", and "mouseout" events of a button element.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabddc2.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

                        <button id="myBtn">Click Me</button>
 
 <script>
 // Selecting button element
 var btn = document.getElementById("myBtn");
  
 // Defining custom functions
 function sayHello() {
     alert("Hi, how are you doing?");
 }
  
 function setHoverColor() {
     btn.style.background = "yellow";
 }
  
 function setNormalColor() {
     btn.style.background = "";
 }
  
 // Assigning event listeners to the button
 btn.addEventListener("click", sayHello);
 btn.addEventListener("mouseover", setHoverColor);
 btn.addEventListener("mouseout", setNormalColor);
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
                <!--End:Code box-->
				<hr />
				<h2>Adding Event Listeners to Window Object</h2>
				<p>The <code>addEventListener()</code> method allows you to add event listeners to any HTML DOM elements, the document object, the window object, or any other object that support events, e.g, <code>XMLHttpRequest</code> object. Here's an example that attaches an event listener to the window "resize" event:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab9718-2.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

                        <div id="result"></div>
 
 <script>
 // Defining event listener function
 function displayWindowSize() {
     var w = window.innerWidth;
     var h = window.innerHeight;
     var size = "Width: " + w + ", " + "Height: " + h;
     document.getElementById("result").innerHTML = size;
 }
  
 // Attaching the event listener function to window's resize event
 window.addEventListener("resize", displayWindowSize);
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
                <!--End:Code box-->
				<hr />
				<h2>Removing Event Listeners</h2>
				<p>You can use the <code>removeEventListener()</code> method to remove an event listener that have been previously attached with the <code>addEventListener()</code>. Here's an example:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab64ae.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

                        <button id="myBtn">Click Me</button>
 
 <script> 
 // Defining function
 function greetWorld() {
     alert("Hello World!");
 }
  
 // Selecting button element
 var btn = document.getElementById("myBtn");
  
 // Attaching event listener
 btn.addEventListener("click", greetWorld);
  
 // Removing event listener
 btn.removeEventListener("click", greetWorld);
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
                <!--End:Code box-->
				<!--Note box-->
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585"
>
							<p><strong>Read Carefully:</strong> The <code>addEventListener()</code> and <code>removeEventListener()</code> methods supported in all major browsers. Not supported in IE 8 and earlier, and Opera 6.0 and earlier versions.</p>
						</div>
					</div>
				</div>
				<!--End:Note box-->
				<!--Bottom Navigation-->				
                <div class="bottom-link clearfix">
                    <a href="js_type-conversions.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="js_event-propagation.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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