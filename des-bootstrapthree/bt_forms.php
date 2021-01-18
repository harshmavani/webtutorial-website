	<!DOCTYPE html>
	<html lang="en">
	<head>
    <meta name="description" content="Learn how to create different types of form layouts such as vertical form, horizontal form and inline from quickly and easily with the Bootstrap framework." />
	  <meta name="keywords" content="Bootstrap,Bootstrap3">
	  <meta name="author" content="webschooltoday.com">
    <title>How to Create Form Layouts with Bootstrap 3 - Webschool Today</title>
  	<?php include "../links.php" ?>
</head>
<body>
<div>
<div class="tital">How to Create Form Layouts with Bootstrap 3</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des_bootstap3.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
          </div>
          <a href="bt_input-groups.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i>
</a>
                <a href="bt_list-groups.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i>
</a>
                <h1>Bootstrap <span>Forms</span></h1>
                <p class="summary">In this tutorial you will learn how to create elegant forms with Bootstrap.</p>
                <h2>Creating Forms with Bootstrap</h2>
                <p>HTML forms are the integral part of the web pages and applications, but styling the form controls manually one by one with CSS are often boring and tedious. Bootstrap greatly simplifies the process of styling and alignment of form controls like labels, input fields, selectboxes, textareas, buttons, etc. through predefined set of classes.</p>
                <p>Bootstrap provides three different types of form layouts:</p>
                <ul>
                    <li>Vertical Form (default form layout)</li>
                    <li>Horizontal Form</li>
                    <li>Inline Form</li>
                </ul>
				<p class="space">The following section will give you the detailed overview of these form layouts as well as the various form related Bootstrap components one by one.</p>
                <h2>Creating Vertical Form Layout</h2>
                <p>This is the default Bootstrap form layout in which styles are applied to form controls without adding any base class to the <code><a href="../des-html/ht_forms.php">&lt;form&gt;</a></code> element or any large changes in the markup.</p>
                <p>The form controls in this layout are stacked with left-aligned labels on the top.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelab30ca.html">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<form>
    <div class="form-group">
        <label for="inputEmail">Email</label>
        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
    </div>
    <div class="form-group">
        <label for="inputPassword">Password</label>
        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
    </div>
    <div class="checkbox">
        <label><input type="checkbox"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
</form>
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
                        <div class="note-box" style="background-color:#ff8585"
>
                            <p><strong>Read Carefully:</strong> In Bootstrap 3 all textual elements like <code><a href="../info-html/ht_input-tag.php">&lt;input&gt;</a></code>, <code><a href="../info-html/ht_textarea-tag.php">&lt;textarea&gt;</a></code>, and <code><a href="../info-html/ht_select-tag.php">&lt;select&gt;</a></code> with the class <code>.form-control</code> are 100% wide by default. To use them inline, you'll have to set a width on the element the form controls used within.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Creating Horizontal Form Layout</h2>
                <p>In horizontal form layout labels are right aligned and floated to left to make them appear on the same line as form controls. The horizontal form layout requires the various markup changes from a default form layout. Steps to achieve this layout are listed below:</p>
                <ul>
                    <li>Add the class <code>.form-horizontal</code> to the <code><a href="../des-html/ht_forms.php">&lt;form&gt;</a></code> element.</li>
                    <li>Wrap labels and form controls in a <code><a href="../info-html/ht_div-tag.php">&lt;div&gt;</a></code> element and apply the class <code>.form-group</code>.</li>
					<li>Use Bootstrap's predefined <a href="bt_grid-system.php">grid classes</a> to align labels and form controls.</li>
                    <li>Add the class <code>.control-label</code> to the <code><a href="../info-html/ht_label-tag.php">&lt;label&gt;</a></code> element.</li>
                </ul>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelabdb16.html">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        <textarea id="code2">

<form class="form-horizontal">
    <div class="form-group">
        <label for="inputEmail" class="control-label col-xs-2">Email</label>
        <div class="col-xs-10">
            <input type="email" class="form-control" id="inputEmail" placeholder="Email">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword" class="control-label col-xs-2">Password</label>
        <div class="col-xs-10">
            <input type="password" class="form-control" id="inputPassword" placeholder="Password">
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-offset-2 col-xs-10">
            <div class="checkbox">
                <label><input type="checkbox"> Remember me</label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-offset-2 col-xs-10">
            <button type="submit" class="btn btn-primary">Login</button>
        </div>
    </div>
</form>

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
                <h2>Creating Inline Form Layout</h2>
                <p>Sometimes you might require to place the form controls side-by-side to compact the layout. You can do this easily by adding the Bootstrap class <code>.form-inline</code> to the <code><a href="../des-html/ht_forms.php">&lt;form&gt;</a></code> element.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelabf743.html">Try this code <span>&raquo;</span></a></div>
                        
	<textarea id="code3">

<form class="form-inline">
    <div class="form-group">
        <label class="sr-only" for="inputEmail">Email</label>
        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
    </div>
    <div class="form-group">
        <label class="sr-only" for="inputPassword">Password</label>
        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
    </div>
    <div class="checkbox">
        <label><input type="checkbox"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
</form>

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
                <div class="color-box break">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box" style="background-color:#ff8585"
>
                            <p><strong>Read Carefully:</strong> It is recommended to include a label for every form inputs otherwise screen readers will have trouble with your forms. However in case of inline form layout you can hide these labels using the <code>.sr-only</code> class.</p>
                        </div>
                    </div>
                </div>
                <p>Check out the snippets section for examples of some <a href="../snippets/gallery7d0e.php?tag=form" target="_blank">beautifully designed Bootstrap forms</a>.</p>
                <hr />
				<h2>Static Form Control</h2>
                <p>There might be a situation when you need to place just plain text next to a form label instead of a form control. You can do this within a horizontal form layout by using the <br /><code>.form-control-static</code> class on a <code><a href="../info-html/ht_p-tag.php">&lt;p&gt;</a></code> element, like this:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelabbebe.php">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        <textarea id="code4">

<form class="form-horizontal">
    <div class="form-group">
        <label for="inputEmail" class="control-label col-xs-2">Email</label>
        <div class="col-xs-10">
            <p class="form-control-static">harrypotter@mail.com</p>
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword" class="control-label col-xs-2">Password</label>
        <div class="col-xs-10">
            <input type="password" class="form-control" id="inputPassword" placeholder="Password">
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-offset-2 col-xs-10">
            <div class="checkbox">
                <label><input type="checkbox"> Remember me</label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-offset-2 col-xs-10">
            <button type="submit" class="btn btn-primary">Login</button>
        </div>
    </div>
</form>

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
				<h2 id="checkbox-and-radio">Placement of Checkboxes and Radios</h2>
				<p>Checkboxes and radio buttons can be placed either <em>stacked</em> or <em>inline</em>.</p>
				<h3>Stacked Checkboxes and Radios</h3>
				<p>To place the checkboxes or radio buttons vertically stacked i.e. line by line, just wrap each control in a <code>&lt;div&gt;</code> element and apply the class <code>.checkbox</code> or <code>.radio</code>, like this:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabe497.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        
	<textarea id="code5">

<form>
    <!-- Vertically stacked checkboxes -->
    <div class="checkbox">
        <label><input type="checkbox" name="sports"> Cricket</label>
    </div>
    <div class="checkbox">
        <label><input type="checkbox" name="sports"> Football</label>
    </div>
    <div class="checkbox">
        <label><input type="checkbox" name="sports"> Tennis</label>
    </div>
    
    <!-- Vertically stacked radios -->
    <div class="radio">
        <label><input type="radio" name="gender"> Male</label>
    </div>
    <div class="radio">
        <label><input type="radio" name="gender"> Female</label>
    </div>
</form>

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
				<h3>Inline Checkboxes and Radios</h3>
				<p>However, to place them inline i.e. side-by-side just use the class <code>.checkbox-inline</code> or <code>.radio-inline</code> on the <code>&lt;label&gt;</code> element, as shown in the following example. No need to wrap the controls in a <code>&lt;div&gt;</code> element unlike stacked version.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab8258.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                      
	<textarea id="code6">

<form>
    <!-- Inline checkboxes -->
    <div>
        <label class="checkbox-inline"><input type="checkbox" name="sports"> Cricket</label>
        <label class="checkbox-inline"><input type="checkbox" name="sports"> Football</label>
        <label class="checkbox-inline"><input type="checkbox" name="sports"> Tennis</label>
    </div>
    
    <!-- Inline radios -->
    <label class="radio-inline"><input type="radio" name="gender"> Male</label>
    <label class="radio-inline"><input type="radio" name="gender"> Female</label>
</form>

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
                <h2>Height Sizing of Inputs and Select Boxes</h2>
                <p>You can easily control the height of your input and select boxes to match the <a href="bt_buttons.php">button sizes</a>. The Bootstrap's relative sizing classes like <code>.input-lg</code>, <code>.input-sm</code> can be used both on <code><a href="../info-html/ht_input-tag.php">&lt;input&gt;</a></code> and <code><a href="../info-html/ht_select-tag.php">&lt;select&gt;</a></code> boxes to create it's larger or smaller sizes.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelab4d41.php">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        <textarea id="code7">

<form>
    <div class="row">
        <div class="col-xs-6">
            <input type="text" class="form-control input-lg" placeholder="Large input">
        </div>
        <div class="col-xs-6">
            <select class="form-control input-lg">
                <option>Large select</option>
            </select>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-xs-6">
            <input type="text" class="form-control" placeholder="Default input">
        </div>
        <div class="col-xs-6">
            <select class="form-control">
                <option>Default select</option>
            </select>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-xs-6">
            <input type="text" class="form-control input-sm" placeholder="Small input">
        </div>
        <div class="col-xs-6">
            <select class="form-control input-sm">
                <option>Small select</option>
            </select>
        </div>
    </div>
</form>

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
				<h2>Height Sizing of Form Groups</h2>
				<p>You can add the relative form sizing classes such as <code>.form-group-lg</code> or <code>.form-group-sm</code> to the <code>.form-group</code> itself to make both the labels and form controls larger or smaller at the same time within the horizontal form layouts.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelabafa8.html">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        
	<textarea id="code9">
<form class="form-horizontal">
    <div class="form-group form-group-lg">
        <label class="col-sm-3 control-label" for="inputLarge">Large label</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="inputLarge" placeholder="Large input">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label" for="inputDefault">Default label</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="inputDefault" placeholder="Default input">
        </div>
    </div>
    <div class="form-group form-group-sm">
        <label class="col-sm-3 control-label" for="inputSmall">Small label</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="inputSmall" placeholder="Small input">
        </div>
    </div>
</form>
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
				<hr />
                <h2>Creating Disabled and Readonly Inputs</h2>
                <p>To create disabled text based inputs just add the attributes <code>disabled</code> to the <code><a href="../info-html/ht_input-tag.php">&lt;input&gt;</a></code> element as shown in example below and Bootstrap will do the rest.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelaba82a.html">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code10">
		
        <form>
            <input type="text" class="form-control" placeholder="Disabled input" disabled="disabled">
        </form>
        
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
                
				<p>However, in case of checkboxes and radio buttons, along with the <code>disabled</code> attribute you'll also need to apply the <code>.disabled</code> class on its parent <code>.checkbox</code>, <code>.radio</code>, <code>.checkbox-inline</code> or <code>.radio-inline</code> element (see <a href="#checkbox-and-radio">placement of checkboxes and radios</a>), otherwise the browser will not show the <a href="../info-css/style_cursor-property.php">"<code>not-allowed</code>" cursor</a> when you put the mouse pointer on label text.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab25f2.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        <textarea id="code11">

<form>
    <!-- Disabled stacked checkboxes -->
    <div class="checkbox disabled">
        <label><input type="checkbox" disabled="disabled"> Disabled checkbox</label>
    </div>
    <div class="checkbox disabled">
        <label><input type="checkbox" disabled="disabled"> Another disabled checkbox</label>
    </div>  
    
    <!-- Disabled stacked radios -->
    <div class="radio disabled">
        <label><input type="radio" disabled="disabled"> Disabled radio</label>
    </div>
    <div class="radio disabled">
        <label><input type="radio" disabled="disabled"> Another disabled radio</label>
    </div>
    
    <!-- Disabled inline checkboxes -->
    <p>
        <label class="checkbox-inline disabled"><input type="checkbox" disabled="disabled"> Disabled checkbox</label>
        <label class="checkbox-inline disabled"><input type="checkbox" disabled="disabled"> Another disabled checkbox</label>
    </p>
    
    <!-- Disabled inline radios -->
    <p>
        <label class="radio-inline disabled"><input type="radio" disabled="disabled"> Disabled radio</label>
        <label class="radio-inline disabled"><input type="radio" disabled="disabled"> Another disabled radio</label>
    </p>
</form>
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
				<p>Similarly, you can use the <code>readonly</code> attribute to create read only text based input controls that prevent user inputs and give the style same as disabled.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelabc134.html">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code12">

<form>
    <input type="text" class="form-control" placeholder="Readonly input" readonly="readonly">
</form>

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
                <hr />
				<h2>Creating Disabled Fieldsets</h2>
				<p>Rather than disabling the form controls individually, you can also disable all form controls within a fieldset at once by adding the <code>disabled</code> attribute to the <code><a href="../info-html/ht_fieldset-tag.php">&lt;fieldset&gt;</a></code> element.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelab99b6.html">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        <textarea id="code13">
		
        <form class="form-horizontal">
            <fieldset disabled="disabled">
                <div class="form-group">
                    <label for="inputEmail" class="control-label col-xs-2">Email</label>
                    <div class="col-xs-10">
                        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword" class="control-label col-xs-2">Password</label>
                    <div class="col-xs-10">
                        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-offset-2 col-xs-10">
                        <div class="checkbox">
                            <label><input type="checkbox"> Remember me</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-offset-2 col-xs-10">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </div>
            </fieldset>
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

				<hr />
                <h2>Placing Help Text around Form Controls</h2>
                <p>Placing help text for the form controls in an efficient way to guide users to enter the correct data in a form. You can place block level help text for the form controls using the class <code>.help-block</code>. The help text is typically displayed at the bottom of the control.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelab906f.html">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code14">

<form>
    <input type="text" class="form-control">
    <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
</form>
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
                        <h2>Bootstrap Form Validation States</h2>
                        <p>Bootstrap provides easy to use and powerful mechanism for styling input controls to present different validation states. Bootstrap includes validation styles for error, warning, and success messages. To use, just add the appropriate class to the surrounding <code>.form-group</code>.</p>
                        <div class="example">
                            <div class="my_codeb">
                                <div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelabf948.html">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                                <textarea id="code15">
        <form class="form-horizontal">
            <div class="form-group has-success">
                <label class="col-xs-2 control-label" for="inputSuccess">Username</label>
                <div class="col-xs-10">
                    <input type="text" id="inputSuccess" class="form-control" placeholder="Input with success">
                    <span class="help-block">Username is available</span>
                </div>
            </div>
            <div class="form-group has-warning">
                <label class="col-xs-2 control-label" for="inputWarning">Password</label>
                <div class="col-xs-10">
                    <input type="password" id="inputWarning" class="form-control" placeholder="Input with warning">
                    <span class="help-block">Password strength: Weak</span>
                </div>
            </div>
            <div class="form-group has-error">
                <label class="col-xs-2 control-label" for="inputError">Email</label>
                <div class="col-xs-10">
                    <input type="email" id="inputError" class="form-control" placeholder="Input with error">
                    <span class="help-block">Please enter a valid email address</span>
                </div>
            </div>
        </form>
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
				<p>You can also add optional feedback icons to your inputs using the class <code>.has-feedback</code> on <code>.form-group</code> and the right glyphicon, like this:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelab04c1.html">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        <textarea id="code16">
<form class="form-horizontal">
    <div class="form-group has-success has-feedback">
        <label class="col-xs-2 control-label" for="inputSuccess">Username</label>
        <div class="col-xs-10">
            <input type="text" id="inputSuccess" class="form-control" placeholder="Input with success">
            <span class="glyphicon glyphicon-ok form-control-feedback"></span>
            <span class="help-block">Username is available</span>
        </div>
    </div>
    <div class="form-group has-warning has-feedback">
        <label class="col-xs-2 control-label" for="inputWarning">Password</label>
        <div class="col-xs-10">
            <input type="password" id="inputWarning" class="form-control" placeholder="Input with warning">
            <span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
            <span class="help-block">Password strength: Weak</span>
        </div>
    </div>
    <div class="form-group has-error has-feedback">
        <label class="col-xs-2 control-label" for="inputError">Email</label>
        <div class="col-xs-10">
            <input type="email" id="inputError" class="form-control" placeholder="Input with error">
            <span class="glyphicon glyphicon-remove form-control-feedback"></span>
            <span class="help-block">Please enter a valid email address</span>
        </div>
    </div>
</form>

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

				<p>In the next chapter you will learn how to create interactive text-based input controls for your forms using the <a href="bt_input-groups.php">Bootstrap input group</a> component.</p>
                <div class="bottom-link clearfix">
                    <a href="bt_list-groups.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i>
 Previous</a>
                    <a href="bt_input-groups.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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