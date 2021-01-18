<!DOCTYPE html>
	<html lang="en">
	<head>
    <meta name="description" content="Learn how to create toggle and loading buttons as well as how to enable radio and checkbox inputs like toggling on button groups without writing any JavaScript code." />
	  <meta name="keywords" content="Bootstrap,Bootstrap3,Loading and Toggle Buttons">
	  <meta name="author" content="webschooltoday.com">
    <title>Bootstrap 3 Loading and Toggle Buttons - WebSchool Today</title>
    <?php include "../links.php" ?>
</head>
<body>
<div>
<div class="tital">Bootstrap 3 Loading and Toggle Buttons</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des_bootstap3.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
          </div>
          <a href="bt_accordion.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i>
</a>
                <a href="bt_alerts.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i>
</a>

                <h1>Bootstrap <span>Stateful Buttons</span></h1>
                <p class="summary">In this tutorial you will learn how to create toggle and loading Bootstrap buttons.</p>
                <h2>Controlling Button States</h2>
                <p class="space">In the previous section you've learnt about the <a href="bt_buttons.php">Bootstrap button styling and the modifications</a> as well as how to create <a href="bt_button-groups.php">button groups and toolbars</a>. With Bootstrap you can do even more with buttons like controlling the states of buttons, make checkbox and radio inputs behaves like toggle buttons, etc. Well, let's discuss about them in detail.</p>
                <h2>Creating Single Toggle Button</h2>
                <p>You can activate toggling (i.e. change the normal state of a button to a push state and vice versa) on a single button by simply adding the data attribute <code>data-toggle="button"</code>.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelab629c.html">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<button type="button" class="btn btn-primary" data-toggle="button">Single Toggle Button</button>


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
				<h2>Add Loading State on Buttons</h2>
                <p>You can change the normal state of a button to a loading state by simply adding the data attribute <code>data-loading-text="Loading..."</code> to a button.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelab8321-2.html">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

<button type="button" class="btn btn-primary" data-loading-text="Loading...">Loading state</button>


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
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box" style="background-color:#ff8585"
>
                            <p><strong>Read Carefully:</strong> Mozilla firefox persists the disabled state across page loads, to prevent this behavior, you may simply set <code>autocomplete="off"</code> on the form containing the buttons, or directly to the input or button element.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Creating Buttons Checkbox</h2>
                <p>You can add the attribute <code>data-toggle="buttons"</code> to a group of checkboxes for checkbox style toggling on button groups, as shown in the following example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelab3c58.html">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

<div class="btn-group" data-toggle="buttons">
    <label class="btn btn-primary">
        <input type="checkbox" name="options"> Option 1
    </label>
    <label class="btn btn-primary">
        <input type="checkbox" name="options"> Option 2
    </label>
    <label class="btn btn-primary">
        <input type="checkbox" name="options"> Option 3
    </label>
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
				<p>Add the class <code>.active</code> on input's label element if you want options pre-checked by default.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelab2edb.html">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

<div class="btn-group" data-toggle="buttons">
    <label class="btn btn-primary active">
        <input type="checkbox" name="options"> Option 1
    </label>
    <label class="btn btn-primary">
        <input type="checkbox" name="options"> Option 2
    </label>
    <label class="btn btn-primary active">
        <input type="checkbox" name="options"> Option 3
    </label>
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
                <div class="color-box break">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box" style="background-color:#ff8585"
>
                            <p><strong>Read Carefully:</strong> The <code>.active</code> class only changes the visual appearance of buttons radio and checkboxes to make them look like selected. To actually preselect them you need to apply the <code>checked</code> attribute on the input element yourself.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Creating Buttons Radio</h2>
                <p>Similarly, you can add the attribute <code>data-toggle="buttons"</code> to a group of radio inputs for radio buttons style toggling on button groups, like this:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelab7d2e.html">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

<div class="btn-group" data-toggle="buttons">
    <label class="btn btn-primary">
        <input type="radio" name="options"> Option 1
    </label>
    <label class="btn btn-primary">
        <input type="radio" name="options"> Option 2
    </label>
    <label class="btn btn-primary">
        <input type="radio" name="options"> Option 3
    </label>
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
				<p>Add the class <code>.active</code> on input's label element if you want an option pre-selected by default.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelabaf4b.html">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code6">

<div class="btn-group" data-toggle="buttons">
    <label class="btn btn-primary active">
        <input type="radio" name="options"> Option 1
    </label>
    <label class="btn btn-primary">
        <input type="radio" name="options"> Option 2
    </label>
    <label class="btn btn-primary">
        <input type="radio" name="options"> Option 3
    </label>
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
                <hr />
                <h2>Enable Buttons via JavaScript</h2>
                <p>You may also enable buttons via JavaScript:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelab810c.html">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code7">

<script type="text/javascript">
$(document).ready(function(){
    $(".nav-tabs a").click(function(){
        $(this).button('loading').delay(500).queue(function(){
            $(this).button('reset');
            $(this).dequeue();
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
                <hr />
                <h2>Options</h2>
                <p><em>None</em></p>
                <hr />
                <h2>Methods</h2>
                <p class="space">These are the standard bootstrap's buttons methods:</p>
                <h2>$().button('toggle')</h2>
                <p>This method toggles push state of the button. It changes the appearance of the button, and makes it look like that it has been activated. You can also enable auto toggling of a button by using the <code>data-toggle</code> attribute.</p>
                <div class="my_codeb-rg3-w space">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelab55e4.html">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code8">
		
        <script type="text/javascript">
        $(document).ready(function(){
            $("#myButton").click(function(){
                $(this).button('toggle');
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
                <h2>$().button('loading')</h2>
                <p>This method sets the button state to loading. When loading, the button is disabled and the text is swapped with the value of <code>data-loading-text</code> attribute of button element.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelab71c8.html">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code9">

<script type="text/javascript">
$(document).ready(function(){
    $("#myButton").click(function(){
        $(this).button('loading');
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
                <div class="color-box space">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box" style="background-color:#ff8585"
>
                            <p><strong>Read Carefully:</strong> The use of <code>data-loading-text</code> and <code>$().button('loading')</code> has been deprecated since Bootstrap v3.3.6 and will be removed from v4. You should better use <code>$().button(string)</code> method to ensure future compatibility.</p>
                        </div>
                    </div>
                </div>
                <h2>$().button('reset')</h2>   
                <p>This method resets button state by swapping text to original text.</p>
                <div class="my_codeb-rg3-w space">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelab2abf.html">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code10">

<script type="text/javascript">
$(document).ready(function(){
    $("#myButton").click(function(){
        $(this).button('loading').delay(1000).queue(function(){
            $(this).button('reset');
            $(this).dequeue();
        });        
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
                <h2>$().button(string)</h2>
                <p>This method resets button state by swapping text to any data defined text state.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelab2cf5.html">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code11">

<script type="text/javascript">  
$(document).ready(function(){
    $("#myButton").click(function(){
        $(this).button('loading').delay(1000).queue(function() {
            $(this).button('complete');
            $(this).dequeue();
        });        
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
                    <a href="bt_alerts.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i>
 Previous</a>
                    <a href="bt_accordion.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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