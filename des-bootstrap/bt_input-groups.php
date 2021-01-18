<!DOCTYPE html>
	<html lang="en">
	<head>
	<meta name="description" content="How to Use Bootstrap 4 Input Group Component">
	  <meta name="keywords" content="Bootstrap,Bootstrap4,input,input group,Input Group Component,Bootstrap 4 Input">
	  <meta name="author" content="webschooltoday.com">
    <title>How to Use Bootstrap 4 Input Group Component - WebSchool Today</title>
    <?php include "../links.php" ?>
</head>
<body>
<div>
<div class="tital">How to Use Bootstrap 4 Input Group Component</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des_bootstrap.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
            </div>
            <a href="bt_buttons.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i>
</a>
                <a href="bt_custom-forms.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i>
</a>

                <h1>Bootstrap <span>Input Groups</span></h1>
                <p class="summary">In this tutorial you will learn how to use the Bootstrap input group component.</p>
                <h2>Extending Form Controls with Bootstrap</h2>
                <p>Bootstrap input group component is very flexible and powerful component for creating the interactive and elegant form controls, however it is limited to textual input only.</p>
				<p class="space">In the following sections you'll see how to extend text-based input fields by adding the text, icons or buttons before, after, or on both sides of it to make your form more attractive.</p>
                <h2>Creating Prepended and Appended Inputs</h2>
                <p>Input groups are created using the class <code>.input-group</code>. It act as a container for inputs and addons.</p>
                <p>Further, use the class <code>.input-group-prepend</code> to place the addons before the input, whereas use the class <code>.input-group-append</code> to place the addons after the input.</p>
                <p>Also, be sure to wrap the text or icon in a <a href="../info-html/ht_span-tag.php"><code>&lt;span&gt;</code></a> and apply the class <code>.input-group-text</code> on it for proper rendering and styling. Try out the following example to see how it works:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabacf6.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1" >

<div class="row">
    <div class="col-sm-4">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <span class="fa fa-user"></span>
                </span>                    
            </div>
            <input type="text" class="form-control" placeholder="Username">
        </div>
    </div>
    <div class="col-sm-4">
        <div class="input-group">            
            <input type="text" class="form-control" placeholder="Amount">
            <div class="input-group-append">
                <span class="input-group-text">.00</span>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">$</span>
            </div>
            <input type="text" class="form-control" placeholder="US Dollar">
            <div class="input-group-append">
                <span class="input-group-text">.00</span>
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
              
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box" style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> Bootstrap's prepending or appending addons feature is only available to text-based inputs. It does not support <code>&lt;select&gt;</code> or <code>&lt;textarea&gt;</code> elements.</p>
                        </div>
                    </div>
                </div>
				<hr />
				<h2>Checkboxes and Radio Buttons Addons</h2>
				<p>Similarly, you can place checkbox or radio button within input group's addon instead of text.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab32fe.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2" >

<div class="row">
    <div class="col-sm-6">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <input type="checkbox">
                </span>
            </div>
            <input type="text" class="form-control">
        </div>
    </div>
    <div class="col-sm-6">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <input type="radio">
                </span>
            </div>
            <input type="text" class="form-control">
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

                <hr />
                <h2>Placing Multiple Inputs or Addons</h2>
                <p>You can also place multiple inputs side-by-side within an input group easily, like this:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabbfed.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3" >

<div class="input-group">
    <div class="input-group-prepend">
        <span class="input-group-text">Your Name</span>
    </div>
    <input type="text" class="form-control" placeholder="First name">
    <input type="text" class="form-control" placeholder="Last name">
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

                <p>Similarly, you can also place multiple addons side-by-side within an input group. You can also mix it with checkbox and radio inputs, as shown in the following example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab4cb9.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4" >

<div class="row">
    <div class="col-sm-6">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <input type="checkbox">
                </span>
                <span class="input-group-text">$</span>
            </div>
            <input type="text" class="form-control">
        </div>
    </div>
    <div class="col-sm-6">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">$</span>
                <span class="input-group-text">0.00</span>
            </div>
            <input type="text" class="form-control">
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
				<h2>Buttons Addons for Text Inputs</h2>
                <p>You can also prepend or append buttons instead of text. Simply, place as many buttons as you like within the <code>.input-group-prepend</code> or <code>.input-group-append</code>, as shown below:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab290f.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5" >

<div class="row">    
    <div class="col-sm-5">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search...">
            <div class="input-group-append">
                <button type="button" class="btn btn-secondary">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
    </div>
    <div class="col-sm-7">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Type something...">
            <div class="input-group-append">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </div>
        </div>
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
                <h2>Adding Button Dropdowns to Text Inputs</h2>
                <p>You can even add buttons with dropdowns to a text input, if you want to perform more than one action from a button. Also, in case of input group you don't need the <code>.dropdown</code> rg3-w element, which is otherwise  normally required. Let's check out an example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabaab3.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code6" >

<div class="row">
    <div class="col-sm-6">
        <div class="input-group">
            <div class="input-group-prepend">
                <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown">Dropdown</button>
                <div class="dropdown-menu">
                    <a href="#" class="dropdown-item">Action</a>
                    <a href="#" class="dropdown-item">Another action</a>
                </div>
            </div>
            <input type="text" class="form-control">
        </div>
    </div>
    <div class="col-sm-6">
        <div class="input-group">
            <input type="text" class="form-control">
            <div class="input-group-append">
                <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown">Dropdown</button>
                <div class="dropdown-menu">
                    <a href="#" class="dropdown-item">Action</a>
                    <a href="#" class="dropdown-item">Another action</a>
                </div>
            </div>                
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

				<hr />
                <h2>Adding Segmented Dropdown Button Groups</h2>
                <p>Similarly, you can define the segmented dropdown button group where dropdown button is placed besides the other buttons, as shown in the following example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab45d8.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code7" >

<div class="row">
    <div class="col-sm-6">
        <div class="input-group">
            <div class="input-group-prepend">
                <button type="button" class="btn btn-outline-secondary">Action</button>
                <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
                    <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu">
                    <a href="#" class="dropdown-item">Action</a>
                    <a href="#" class="dropdown-item">Another action</a>
                </div>
            </div>
            <input type="text" class="form-control">
        </div>
    </div>
    <div class="col-sm-6">
        <div class="input-group">
            <input type="text" class="form-control">
            <div class="input-group-append">
                <button type="button" class="btn btn-outline-secondary">Action</button>
                <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
                    <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu">
                    <a href="#" class="dropdown-item">Action</a>
                    <a href="#" class="dropdown-item">Another action</a>
                </div>
            </div>                
        </div>
    </div>
</div>
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
				<h2>Height Sizing of Input Groups</h2>
				<p>You can also add the relative form sizing classes such as <code>.input-group-lg</code> or <code>.input-group-sm</code> to the <code>.input-group</code> element itself to make it larger or smaller in height.</p>
				<p>The contents within the <code>.input-group</code> will automatically resize &mdash; there is no need for repeating the form control size classes on each element. Here's an example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabb325.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code8" >

<!-- Larger input group -->
<div class="input-group input-group-lg">
    <div class="input-group-prepend">
        <span class="input-group-text">Large</span>
    </div>
    <input type="text" class="form-control">
</div>
<!-- Default input group -->
<div class="input-group mt-2">
    <div class="input-group-prepend">
        <span class="input-group-text">Default</span>
    </div>
    <input type="text" class="form-control">
</div>
<!-- Smaller input group -->
<div class="input-group input-group-sm mt-2">
    <div class="input-group-prepend">
        <span class="input-group-text">Small</span>
    </div>
    <input type="text" class="form-control">
</div>
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
              
                <div class="bottom-link clearfix">
                    <a href="bt_custom-forms.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i>
 Previous</a>
                    <a href="bt_buttons.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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