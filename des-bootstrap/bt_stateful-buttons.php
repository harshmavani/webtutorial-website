<!DOCTYPE html>
	<html lang="en">
	<head>
	<meta name="description" content="Bootstrap 4 Checkbox and Radio Toggle Buttons">
	  <meta name="keywords" content="Bootstrap,Bootstrap4,Checkbox,Radio,Toggle Buttons,Bootstrap 4 Checkbox">
	  <meta name="author" content="webschooltoday.com">
    <title>Bootstrap 4 Checkbox and Radio Toggle Buttons - WebSchool Today</title>
    <?php include "../links.php" ?>
</head>
<body>
<div>
<div class="tital">Bootstrap 4 Checkbox and Radio Toggle Buttons</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des_bootstrap.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                  </div>
                  <a href="bootstrap-accordion.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i>
</a>
                <a href="bootstrap-alerts.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i>
</a>

                <h1>Bootstrap <span>Stateful Buttons</span></h1>
                <p class="summary">In this tutorial you will learn how to create toggle buttons with Bootstrap.</p>
                <h2>Controlling Button States</h2>
                <p class="space">In the previous section you've learnt about the <a href="bootstrap-buttons.php">Bootstrap button styling and the modifications</a> as well as how to create <a href="bootstrap-button-groups.php">button groups and toolbars</a>. With Bootstrap you can do even more with the buttons like controlling the states of buttons, make checkbox and radio inputs behaves like toggle buttons, and so on. In the following section we will discuss them in detail.</p>
                <h2>Creating Single Toggle Button</h2>
                <p>You can activate toggling (i.e. change the normal state of a button to a push state and vice versa) on a single button by simply adding the data attribute <code>data-toggle="button"</code>.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab2861.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">
<button type="button" class="btn btn-primary" data-toggle="button" autocomplete="off">Single Toggle Button</button>

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

                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box" style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> The Mozilla Firefox browser persists the button state across page loads, to prevent this behavior, you may simply set the attribute <code>autocomplete="off"</code> on the form containing the buttons, or directly to the input or button element.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Creating Buttons Checkbox</h2>
                <p>You can add the attribute <code>data-toggle="buttons"</code> to a group of checkboxes for checkbox style toggling on button groups. You can also add the class <code>.active</code> on input's <a href="../info-html/ht_label-tag.php"><code>&lt;label&gt;</code></a> if you want options pre-checked by default. Try out the following example to see how it works:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab7654.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>

                        <textarea id="code2">

<div class="btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-primary active">
        <input type="checkbox" name="options" autocomplete="off" checked> Option A
    </label>
    <label class="btn btn-primary">
        <input type="checkbox" name="options" autocomplete="off"> Option B
    </label>
    <label class="btn btn-primary active">
        <input type="checkbox" name="options" autocomplete="off" checked> Option C
    </label>
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

                <div class="color-box break">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box" style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> The <code>.active</code> class only changes the visual appearance of the buttons radio and checkboxes to make them look like selected. To actually preselect them you need to apply the <code>checked</code> attribute on the input element yourself.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Creating Buttons Radio</h2>
                <p>Similarly, you can add the attribute <code>data-toggle="buttons"</code> to a group of radio inputs for radio buttons style toggling on button groups, as shown in the following example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabf99c.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

<div class="btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-primary">
        <input type="radio" name="options" autocomplete="off"> Option A
    </label>
    <label class="btn btn-primary active">
        <input type="radio" name="options" autocomplete="off" checked> Option B
    </label>
    <label class="btn btn-primary">
        <input type="radio" name="options" autocomplete="off"> Option C
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
                <hr />
                <h2>Methods</h2>
                <p class="space">These are the standard bootstrap's buttons methods:</p>
                <h2>$().button('toggle')</h2>
                <p>This method toggles push state of the button. It changes the appearance of the button, and makes it look like that it has been activated. You can also enable auto toggling of a button by simply using the <code>data-toggle</code> attribute. Let's take a look at the following example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabd6c9.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

<script>
$(document).ready(function(){
    $("#myButton").click(function(){
        $(this).button('toggle');
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
                <div class="bottom-link clearfix">
                    <a href="bootstrap-alerts.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i>
 Previous</a>
                    <a href="bootstrap-accordion.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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