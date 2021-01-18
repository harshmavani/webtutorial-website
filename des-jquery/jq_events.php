<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="Handling Events in jQuery">
	  <meta name="keywords" content="jquery,jq,js,Handling Events in jQuery">
	  <meta name="author" content="webschooltoday.com">
    <title>Handling Events in jQuery - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">Handling Events in jQuery</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_jquery.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="jq_show-and-hide-effects.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="jq_selectors.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
				<h1>jQuery <span>Events</span></h1>
				<p class="summary">In this tutorial you will learn how to handle events with jQuery.</p>
				<h2>What are Events</h2>
				<p>Events are often triggered by the user's interaction with the web page, such as when a link or button is clicked, text is entered into an input box or textarea, selection is made in a select box, key is pressed on the keyboard, the mouse pointer is moved etc. In some cases, the Browser itself can trigger the events, such as the page load and unload events.</p>
				<p>jQuery enhances the basic event-handling mechanisms by offering the events methods for most native browser events, some of these methods are <code>ready()</code>, <code>click()</code>, <code>keypress()</code>, <code>focus()</code>, <code>blur()</code>, <code>change()</code>, etc. For example, to execute some JavaScript code when the DOM is ready, you can use the jQuery <code>ready()</code> method, like this:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab2e2b.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<script>
$(document).ready(function(){
    // Code to be executed
    alert("Hello World!");
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
				<div class="color-box break">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585"
>
							<p><strong>Read Carefully:</strong> The <code>$(document).ready()</code> is an event that is used to manipulate a page safely with the jQuery. Code included inside this event will only run once the page DOM is ready i.e. when the document is ready to be manipulated.</p>
						</div>
					</div>
				</div>
				<p class="space">In general, the events can be categorized into four main groups &mdash; <a href="#mouse-events">mouse events</a>, <a href="#keyboard-events">keyboard events</a>, <a href="#form-events">form events</a> and <a href="#document-and-window-events">document/window events</a>. The following section will give you the brief overview of all these events as well as related jQuery methods one by one.</p>
				<h2 id="mouse-events" class="section-title"><span>Mouse Events</span></h2>
				<p class="break">A mouse event is fired when the user click some element, move the mouse pointer etc. Here're some commonly used jQuery methods to handle the mouse events.</p>
				<h2>The <code>click()</code> Method</h2>
				<p>The jQuery <code>click()</code> method attach an event handler function to the selected elements for "click" event. The attached function is executed when the user clicks on that element. The following example will hide the <a href="../info-html/html-p-tag.php"><code>&lt;p&gt;</code></a> elements on a page when they are clicked.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab3111.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

<script>
$(document).ready(function(){
    $("p").click(function(){
        $(this).slideUp();
    });
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
				<div class="color-box space">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585"
>
							<p><strong>Read Carefully:</strong> The <code>this</code> keyword inside the jQuery event handler function is a reference to the element where the event is currently being delivered.</p>
						</div>
					</div>
				</div>
				<h2>The <code>dblclick()</code> Method</h2>
				<p>The jQuery <code>dblclick()</code> method attach an event handler function to the selected elements for "dblclick" event. The attached function is executed when the user double-clicks on that element. The following example will hide the <code>&lt;p&gt;</code> elements when they are double-clicked.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab3b84.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

<script>
$(document).ready(function(){
    $("p").dblclick(function(){
        $(this).slideUp();
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
				<h2>The <code>hover()</code> Method</h2>
				<p>The jQuery <code>hover()</code> method attach one or two event handler functions to the selected elements that is executed when the mouse pointer enters and leaves the elements. The first function is executed when the user place the mouse pointer over an element, whereas the second function is executed when the user removes the mouse pointer from that element.</p>
				<p>The following example will highlight <code>&lt;p&gt;</code> elements when you place the cursor on it, the highlighting will be removed when you remove the cursor.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab17cf.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

<script>
$(document).ready(function(){
    $("p").hover(function(){
        $(this).addClass("highlight");
    }, function(){
        $(this).removeClass("highlight");
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
				<div class="color-box space">
					<div class="shadow">
						<div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
						<div class="tip-box"   style="background-color:#fad28c">
							<p><strong>Important:</strong> You can consider the <code>hover()</code> method is a combination of the jQuery <code>mouseenter()</code> and <code>mouseleave()</code> methods.</p>
						</div>
					</div>
				</div>
				<h2>The <code>mouseenter()</code> Method</h2>
				<p>The jQuery <code>mouseenter()</code> method attach an event handler function to the selected elements that is executed when the mouse enters an element. The following example will add the class highlight to the <code>&lt;p&gt;</code> element when you place the cursor on it.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab662c.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

<script>
$(document).ready(function(){
    $("p").mouseenter(function(){
        $(this).addClass("highlight");
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
				<h2>The <code>mouseleave()</code> Method</h2>
				<p>The jQuery <code>mouseleave()</code> method attach an event handler function to the selected elements that is executed when the mouse leaves an element. The following example will remove the class highlight from the <code>&lt;p&gt;</code> element when you remove the cursor from it.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabb592.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code6">

<script>
$(document).ready(function(){
    $("p").mouseleave(function(){
        $(this).removeClass("highlight");
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
				<p>For more mouse event methods, please check out the <a href="../jq_reference/jq_event-methods.php">jQuery Events Reference &raquo;</a></p>
				<hr />
				<h2 id="keyboard-events" class="section-title"><span>Keyboard Events</span></h2>
				<p class="break">A keyboard event is fired when the user press or release a key on the keyboard. Here're some commonly used jQuery methods to handle the keyboard events.</p>
				<h2>The <code>keypress()</code> Method</h2>
				<p>The jQuery <code>keypress()</code> method attach an event handler function to the selected elements (typically form controls) that is executed when the browser receives keyboard input from the user. The following example will display a message when the kypress event is fired and how many times it is fired when you press the key on the keyboard.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab9046.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code7">

<script>
$(document).ready(function(){
    var i = 0;
    $('input[type="text"]').keypress(function(){
        $("span").text(i += 1);
        $("p").show().fadeOut();
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
				<div class="color-box space">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585"
>
							<p><strong>Read Carefully:</strong> The keypress event is similar to the keydown event, except that modifier and non-printing keys such as Shift, Esc, Backspace or Delete, Arrow keys etc. trigger keydown events but not keypress events.</p>
						</div>
					</div>
				</div>
				<h2>The <code>keydown()</code> Method</h2>
				<p>The jQuery <code>keydown()</code> method attach an event handler function to the selected elements (typically form controls) that is executed when the user first presses a key on the keyboard. The following example will display a message when the keydown event is fired and how many times it is fired when you press the key on the keyboard.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab9d64.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code8">

<script>
$(document).ready(function(){
    var i = 0;
    $('input[type="text"]').keydown(function(){
        $("span").text(i += 1);
        $("p").show().fadeOut();
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
				<h2>The <code>keyup()</code> Method</h2>
				<p>The jQuery <code>keyup()</code> method attach an event handler function to the selected elements (typically form controls) that is executed when the user releases a key on the keyboard. The following example will display a message when the keyup event is fired and how many times it is fired when you press and release a key on the keyboard.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab6b82.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code9">

<script>
$(document).ready(function(){
    var i = 0;
    $('input[type="text"]').keyup(function(){
        $("span").text(i += 1);
        $("p").show().fadeOut();
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
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
						<div class="tip-box"   style="background-color:#fad28c">
							<p><strong>Important:</strong> The keyboard events can be attached to any element, but the event is only sent to the element that has the focus. That's why the keyboard events generally attached to the form controls such as text input box or textarea.</p>
						</div>
					</div>
				</div>
				<hr />
				<h2 id="form-events" class="section-title"><span>Form Events</span></h2>
				<p class="break">A form event is fired when a form control receive or loses focus or when the user modify a form control value such as by typing text in a text input, select any option in a select box etc. Here're some commonly used jQuery methods to handle the form events.</p>
				<h2>The <code>change()</code> Method</h2>
				<p>The jQuery <code>change()</code> method attach an event handler function to the <a href="../info-html/html-input-tag.php"><code>&lt;input&gt;</code></a>, <a href="../info-html/html-textarea-tag.php"><code>&lt;textarea&gt;</code></a> and <a href="../info-html/html-select-tag.php"><code>&lt;select&gt;</code></a> elements that is executed when its value changes. The following example will display an alert message when you select any option in dropdown select box.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab2db9-2.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code10">

<script>
$(document).ready(function(){
    $("select").change(function(){
        var selectedOption = $(this).find(":selected").val();
        alert("You have selected - " + selectedOption);
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
				<div class="color-box space">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585"
> 
							<p><strong>Read Carefully:</strong> For select boxes, checkboxes, and radio buttons, the event is fired immediately when the user makes a selection with the mouse, but for the text input and textarea the event is fired after the element loses focus.</p>
						</div>
					</div>
				</div>
				<h2>The <code>focus()</code> Method</h2>
				<p>The jQuery <code>focus()</code> method attach an event handler function to the selected elements (typically form controls and links) that is executed when it gains focus. The following example will display a message when the text input receive focus.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab147f.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code11">

<script>
$(document).ready(function(){
    $("input").focus(function(){
        $(this).next("span").show().fadeOut("slow");
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
				<h2>The <code>blur()</code> Method</h2>
				<p>The jQuery <code>blur()</code> method attach an event handler function to the form elements such as <code>&lt;input&gt;</code>, <code>&lt;textarea&gt;</code>, <code>&lt;select&gt;</code> that is executed when it loses focus. The following example will display a message when the text input loses focus.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab9553.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code12">

<script>
$(document).ready(function(){
    $("input").blur(function(){
        $(this).next("span").show().fadeOut("slow");
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
				<h2>The <code>submit()</code> Method</h2>
				<p>The jQuery <code>submit()</code> method attach an event handler function to the <a href="../info-html/html-form-tag.php"><code>&lt;form&gt;</code></a> elements that is executed when the user is attempting to submit a form. The following example will display a message depending on the value entered when you try to submit the form.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab2053.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code13">

<script>
$(document).ready(function(){
    $("form").submit(function(event){
        var regex = /^[a-zA-Z]+$/;
        var currentValue = $("#firstName").val();
        if(regex.test(currentValue) == false){
            $("#result").php('<p class="error">Not valid!</p>').show().fadeOut(1000);
            // Preventing form submission
            event.preventDefault();
        }
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
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
						<div class="tip-box"   style="background-color:#fad28c">
							<p><strong>Important:</strong> A form can be submitted either by clicking a submit button, or by pressing Enter when certain form elements have focus.</p>
						</div>
					</div>
				</div>
				<hr />
				<h2 id="document-and-window-events" class="section-title"><span>Document/Window Events</span></h2>
				<p class="break">Events are also triggered in a situation when the page DOM (Document Object Model) is ready or when the user resize or scrolls the browser window, etc. Here're some commonly used jQuery methods to handle such kind of events.</p>
				<h2>The <code>ready()</code> Method</h2>
				<p>The jQuery <code>ready()</code> method specify a function to execute when the DOM is fully loaded.</p>
				<p>The following example will replace the paragraphs text as soon as the DOM hierarchy has been fully constructed and ready to be manipulated.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab6f83.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code14">

<script>
$(document).ready(function(){
    $("p").text("The DOM is now loaded and can be manipulated.");
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
				<h2>The <code>resize()</code> Method</h2>
				<p>The jQuery <code>resize()</code> method attach an event handler function to the window element that is executed when the size of the browser window changes.</p>
				<p>The following example will display the current width and height of the browser window when you try to resize it by dragging its corners.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabc9a2.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code15">

<script>
$(document).ready(function(){
    $(window).resize(function() {
        $(window).bind("resize", function(){ 
            $("p").text("Window width: " + $(window).width() + ", " + "Window height: " + $(window).height());
        });
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
				<h2>The <code>scroll()</code> Method</h2>
				<p>The jQuery <code>scroll()</code> method attach an event handler function to the window or scrollable iframes and elements that is executed whenever the element's scroll position changes.</p>
				<p>The following example will display a message when you scroll the browser window.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabfa94.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code16">

<script>
$(document).ready(function(){
    $(window).scroll(function() {
        $("p").show().fadeOut("slow");
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
				<div class="bottom-link clearfix">
					<a href="jq_selectors.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
					<a href="jq_show-and-hide-effects.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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