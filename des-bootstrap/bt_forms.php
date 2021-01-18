<!DOCTYPE html>
<html lang="en">
<head>
<meta name="description" content="How to Create Form Layouts with Bootstrap 4">
  <meta name="keywords" content="Bootstrap,Bootstrap4,Create Form Layouts with Bootstrap 4,form,bootstarp form,html form">
  <meta name="author" content="webschooltoday.com">
    <title>How to Create Form Layouts with Bootstrap 4 - WebSchool Today</title>
    <?php include "../links.php" ?>
</head>
<body>
<div>
<div class="tital">How to Create Form Layouts with Bootstrap 4</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_bootstrap.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                </div>
                <a href="bt_custom-forms.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i>
</a>
                <a href="bt_list-groups.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i>
</a>

                <h1>Bootstrap <span>Forms</span></h1>
                <p class="summary">In this tutorial you will learn how to create elegant forms with Bootstrap.</p>
                <h2>Creating Forms with Bootstrap</h2>
                <p>HTML forms are the integral part of the web pages and applications, but creating the form layouts or styling the form controls manually one by one using CSS are often boring and tedious. Bootstrap greatly simplifies the process of styling and alignment of form controls like labels, input fields, selectboxes, textareas, buttons, etc. through predefined set of classes.</p>
                <p>Bootstrap provides three different types of form layouts:</p>
                <ul>
                    <li>Vertical Form (default form layout)</li>
                    <li>Horizontal Form</li>
                    <li>Inline Form</li>
                </ul>
				<p class="space">The following section will give you the detailed overview of all these form layouts as well as the various form related Bootstrap components one by one. Well let's get started.</p>
                <h2>Creating Vertical Form Layout</h2>
                <p>This is the default Bootstrap form layout in which styles are applied to form controls without adding any base class to the <a href="../des-html/ht_forms.php"><code>&lt;form&gt;</code></a> element or any large changes in the markup.</p>
                <p>The form controls in this layout are stacked with left-aligned labels on the top.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab35bd.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1" >

<form>
    <div class="form-group">
        <label for="inputEmail">Email</label>
        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
    </div>
    <div class="form-group">
        <label for="inputPassword">Password</label>
        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
    </div>
    <div class="form-group">
        <label class="form-check-label"><input type="checkbox"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-primary">Sign in</button>
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
                        <div class="note-box" style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> All textual form controls, like <code><a href="../info-html/ht_input-tag.php">&lt;input&gt;</a></code>, <code><a href="../info-html/ht_textarea-tag.php">&lt;textarea&gt;</a></code>, and <code><a href="../info-html/ht_select-tag.php">&lt;select&gt;</a></code> require the  class <code>.form-control</code> for general styling. The <code>.form-control</code> class also makes them 100% wide. To change their width or use them inline, you can utilize the predefined grid classes.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Creating Horizontal Form Layout</h2>
                <p>You can also create horizontal form layouts where labels and form controls are aligned side-by-side using the Bootstrap grid classes. To create a horizontal form layout add the class <code>.row</code> on form groups and use the <code>.col-*-*</code> grid classes to specify the width of your labels and controls.</p>
                <p>Also, be sure to apply the class <code>.col-form-label</code> on the <a href="../info-html/ht_label-tag.php"><code>&lt;label&gt;</code></a> elements, so that they're vertically centered with their associated form controls. Let's check out an example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab99b9.php" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2" >

<form>
    <div class="form-group row">
        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail" placeholder="Email">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword" placeholder="Password">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10 offset-sm-2">
            <label class="form-check-label"><input type="checkbox"> Remember me</label>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10 offset-sm-2">
            <button type="submit" class="btn btn-primary">Sign in</button>
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
                <p>Sometimes you may want to display a series of labels, form controls, and buttons on a single horizontal row to compact the layout. You can do this easily by adding the class <code>.form-inline</code> to the <a href="../des-html/ht_forms.php"><code>&lt;form&gt;</code></a> element. However, form controls only appear inline in viewports that are at least 576px wide.</p>
                <p>Let's take a look at following example to see how it actually works:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab9e33.php" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3" >

<form class="form-inline">
    <div class="form-group mr-2">
        <label class="sr-only" for="inputEmail">Email</label>
        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
    </div>
    <div class="form-group mr-2">
        <label class="sr-only" for="inputPassword">Password</label>
        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
    </div>
    <div class="form-group mr-2">        
        <label><input type="checkbox" class="mr-1"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-primary">Sign in</button>
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
                        <div class="note-box" style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> It is recommended to include a label for every form inputs otherwise screen readers will have trouble with your forms. However, in case of inline form layouts you can hide the labels using the <code>.sr-only</code> class, so that only screen readers can read it.</p>
                        </div>
                    </div>
                </div>
                <hr />
				<h2>Creating Static Form Control</h2>
                <p>There might be a situation when you just want to display a plain text value next to a form label instead of a working form control. You can do this easily by replacing the class <code>.form-control</code> with the <code>.form-control-plaintext</code> and applying the attribute <code>readonly</code>.</p>
                <p>The <code>.form-control-plaintext</code> class removes the default styling from the form field, but preserves the correct margin and padding. Let's take a look at an example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabe0d0.php" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4" >

<form class="form-inline">
    <div class="form-group mr-2">
        <label class="sr-only" for="inputEmail">Email</label>
        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
    </div>
    <div class="form-group mr-2">
        <label class="sr-only" for="inputPassword">Password</label>
        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
    </div>
    <div class="form-group mr-2">        
        <label><input type="checkbox" class="mr-1"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-primary">Sign in</button>
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
				<p>To place the checkboxes or radio buttons vertically stacked i.e. line by line, just wrap all controls in a form group and apply the class <code>.d-block</code> on each <a href="../info-html/ht_label-tag.php"><code>&lt;label&gt;</code></a>. Additionally, use the margin utility classes for proper spacing, as shown in the following example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab6af5.php" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5" >

<form class="form-inline">
    <div class="form-group mr-2">
        <label class="sr-only" for="inputEmail">Email</label>
        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
    </div>
    <div class="form-group mr-2">
        <label class="sr-only" for="inputPassword">Password</label>
        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
    </div>
    <div class="form-group mr-2">        
        <label><input type="checkbox" class="mr-1"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-primary">Sign in</button>
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
				<p>However, to place them inline i.e. side-by-side just place all form controls in a form group and use margin utility classes to ensure proper spacing. No need to use the <code>.d-block</code> class on the <code>&lt;label&gt;</code> element in this case. Let's check out the following example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab573f.php" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code6" >

<form class="form-inline">
    <div class="form-group mr-2">
        <label class="sr-only" for="inputEmail">Email</label>
        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
    </div>
    <div class="form-group mr-2">
        <label class="sr-only" for="inputPassword">Password</label>
        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
    </div>
    <div class="form-group mr-2">        
        <label><input type="checkbox" class="mr-1"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-primary">Sign in</button>
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
                <h2>Creating Disabled Form Controls</h2>
                <p>To disable individual form controls such as <code>&lt;input&gt;</code>, <code>&lt;textarea&gt;</code>, <code>&lt;select&gt;</code> just add the attributes <code>disabled</code> to them and Bootstrap will do the rest. Here's an example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab09a3.php" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code7" >

<form class="form-inline">
    <div class="form-group mr-2">
        <label class="sr-only" for="inputEmail">Email</label>
        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
    </div>
    <div class="form-group mr-2">
        <label class="sr-only" for="inputPassword">Password</label>
        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
    </div>
    <div class="form-group mr-2">        
        <label><input type="checkbox" class="mr-1"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-primary">Sign in</button>
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

                <p>However, if you want to disable all controls within a <a href="../info-html/ht_form-tag.php"><code>&lt;form&gt;</code></a> at once place them inside a <a href="../html-reference/html-fieldset-tag.php"><code>&lt;fieldset&gt;</code></a> element and apply the attribute on it, as shown in the following example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab17e9.php" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        <textarea id="code86" >

<input type="text" class="form-control mb-2" value="This input value cannot be changed." readonly>
<textarea rows="3" class="form-control" readonly>This textarea value cannot be changed.</textarea>
              </textarea>    
                            <script>
							var editor = CodeMirror.fromTextArea(document.getElementById("code86"), {
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
				<h2>Creating Readonly Inputs</h2>
                <p>You can also add the <code>readonly</code> boolean attribute on an input or textarea to prevent the modification of its value. Read-only inputs appear in lighter background (just like disabled inputs), but it retain the standard text cursor. Check out the following example to see how it works:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab3c09.php" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code85" >

<input type="text" class="form-control mb-2" value="This input value cannot be changed." readonly>
<textarea rows="3" class="form-control" readonly>This textarea value cannot be changed.</textarea>
              </textarea>    
                            <script>
							var editor = CodeMirror.fromTextArea(document.getElementById("code85"), {
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
                <h2>Column Sizing of Inputs, Textareas and Select Boxes</h2>
                <p>You can also match the sizes of your form controls to the Bootstrap grid column sizes. Just wrap your form controls (i.e. <a href="../info-html/ht_input-tag.php"><code>&lt;input&gt;</code></a>, <a href="../html-reference/html-textarea-tag.php"><code>&lt;textarea&gt;</code></a>, and <a href="../html-reference/html-select-tag.php"><code>&lt;select&gt;</code></a>) in grid columns, or any custom element and apply the <a href="bt_grid-system.php">grid classes</a> on it, as shown in the following example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabcbb4.php" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code84" >

<div class="form-row">
    <div class="form-group col-sm-6">
        <label for="inputCity">City</label>
        <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-sm-4">
        <label for="inputState">State</label>
        <select id="inputState" class="form-control">
            <option>Select</option>
        </select>
    </div>
    <div class="form-group col-sm-2">
        <label for="inputZip">Zip</label>
        <input type="text" class="form-control" id="inputZip">
    </div>
</div>
              </textarea>    
                            <script>
							var editor = CodeMirror.fromTextArea(document.getElementById("code84"), {
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
						<div class="tip-box" style="background-color:#fad28c">
							<p><strong>Important:</strong> You can alternatively use the class <code>.form-row</code> in place of <code>.row</code> while creating form layouts. The <code>.form-row</code> class is a variation of standard Bootstrap grid <code>.row</code> which overrides the default column gutters for tighter and more compact layouts.</p>
						</div>
					</div>
				</div>
                <hr />
                <h2>Height Sizing of Inputs and Select Boxes</h2>
                <p>You can easily change the height of your text input and select boxes to match the <a href="bt_buttons.php">button sizes</a>. Use the form control height sizing classes like <code>.form-control-lg</code>, <code>.form-control-sm</code> on the <a href="../html-reference/html-input-tag.php"><code>&lt;input&gt;</code></a> and <a href="../html-reference/html-select-tag.php"><code>&lt;select&gt;</code></a> boxes to create it's larger or smaller sizes.</p>
                <p>Also, be sure to apply the class <code>.col-form-label-sm</code> or <code>.col-form-label-lg</code> on the <a href="../info-html/ht_label-tag.php"><code>&lt;label&gt;</code></a> or <a href="../html-reference/html-legend-tag.php"><code>&lt;legend&gt;</code></a> elements to correctly resize the label accordion to the form controls.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab9240.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        <textarea id="code83" >

<form>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label col-form-label-lg">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control form-control-lg" placeholder="Large input">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" placeholder="Default input">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control form-control-sm" placeholder="Small input">
        </div>
    </div>
    <hr>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label col-form-label-lg">State</label>
        <div class="col-sm-10">
            <select class="form-control form-control-lg">
                <option>Large select</option>
            </select>
        </div>
    </div>    
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">State</label>
        <div class="col-sm-10">
            <select class="form-control">
                <option>Default select</option>
            </select>
        </div>
    </div>    
    <div class="form-group row">
        <label class="col-sm-2 col-form-label col-form-label-sm">State</label>
        <div class="col-sm-10">
            <select class="form-control form-control-sm">
                <option>Small select</option>
            </select>
        </div>
    </div>
</form>
              </textarea>    
                            <script>
							var editor = CodeMirror.fromTextArea(document.getElementById("code83"), {
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
                <p>Placing help text for the form controls in an efficient way to guide users to enter the correct data in a form. You can place block level help text for a form control using the class <code>.form-text</code>. The block help text is typically displayed at the bottom of the control. Here's an example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab6e9a.php" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code82" >

<div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control">
    <small class="form-text text-muted">
        Your password must be 8-20 characters long, contain letters, numbers and special characters, but must not contain spaces.
    </small>
</div>
              </textarea>    
                            <script>
							var editor = CodeMirror.fromTextArea(document.getElementById("code82"), {
								mode: "text/html",
								tabMode: "indent",
								styleActiveLine: true,
								lineNumbers: true,
								lineWrapping: true
							});
						</script>
                    </div>
                </div>
                <p>Similarly, you can also place inline help text using the <code>&lt;small&gt;</code> element. No need to use <code>.form-text</code> in this case. The following example shows how to implement this:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabdcc9.php" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code81" >

<form class="form-inline">
    <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control mx-sm-3">
        <small class="text-muted">Must be 8-20 characters long.</small>
    </div>
</form>
              </textarea>    
                            <script>
							var editor = CodeMirror.fromTextArea(document.getElementById("code81"), {
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
                <h2>Bootstrap Form Validation</h2>
                <p>Bootstrap 4 provides an easy and quick way to validate web forms on client-side. It uses browser's native form validation API to validate the form. Form validation styles are applied via CSS <code>:invalid</code> and <code>:valid</code> pseudo-classes. It applies to <code>&lt;input&gt;</code>, <code>&lt;select&gt;</code>, and <code>&lt;textarea&gt;</code> elements.</p>
                <p>Let's check out the following example to see how it actually works:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab9a18.php" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code75" >

<form class="needs-validation" novalidate>
    <div class="form-group">
        <label for="inputEmail">Email</label>
        <input type="email" class="form-control" id="inputEmail" placeholder="Email" required>
        <div class="invalid-feedback">Please enter a valid email address.</div>
    </div>
    <div class="form-group">
        <label for="inputPassword">Password</label>
        <input type="password" class="form-control" id="inputPassword" placeholder="Password" required>
        <div class="invalid-feedback">Please enter your password to continue.</div>
    </div>
    <div class="form-group">
        <label class="form-check-label"><input type="checkbox"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-primary">Sign in</button>
</form>
                        </textarea>
                            <script>
                            var editor = CodeMirror.fromTextArea(document.getElementById("code75"), {
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
                            <p><strong>Read Carefully:</strong> For custom Bootstrap form validation messages, you'll need to disables the browser default feedback tooltips by adding the <code>novalidate</code> boolean attribute to the <code>&lt;form&gt;</code> element. However, it still provides access to the form validation APIs in JavaScript.</p>
                        </div>
                    </div>
                </div>
                <p>Here's the custom JavaScript code that displays error messages and disables form submission if there are invalid fields. See the <a href="../des-javascript/js_closures.php">JavaScript closures</a> chapter to learn about self-executing function.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab9a18.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code74" >

<script>
    // Self-executing function
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>    
</textarea>
                            <script>
                            var editor = CodeMirror.fromTextArea(document.getElementById("code74"), {
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
                        <div class="tip-box" style="background-color:#fad28c">
                            <p><strong>Important:</strong> To reset the appearance of the form programmatically, remove the class <code>.was-validated</code> class from the <code>&lt;form&gt;</code> element after submission. This class is applied automatically on the form by the Bootstrap when you click the submit button.</p>
                        </div>
                    </div>
                </div>
                <p>If you require server-side validation, you can indicate invalid and valid form fields with the <code>.is-invalid</code> and <code>.is-valid</code>. The <code>.invalid-feedback</code> and <code>.valid-feedback</code> are also supported with these classes. Try out the following example to see how it works:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab05b7.php" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code73" >

<form>
    <div class="form-group">
        <label for="inputEmail">Email</label>
        <input type="email" class="form-control is-valid" id="inputEmail" placeholder="Email" value="peterparker@example.com" required>
        <div class="valid-feedback">Good! Your email address looks valid.</div>
    </div>
    <div class="form-group">
        <label for="inputPassword">Password</label>
        <input type="password" class="form-control is-invalid" id="inputPassword" placeholder="Password" required>
        <div class="invalid-feedback">Opps! You have entered an invalid password.</div>
    </div>
    <div class="form-group">
        <label class="form-check-label"><input type="checkbox"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-primary">Sign in</button>
</form>    
</textarea>
                            <script>
                            var editor = CodeMirror.fromTextArea(document.getElementById("code73"), {
                                mode: "text/html",
                                tabMode: "indent",
                                styleActiveLine: true,
                                lineNumbers: true,
                                lineWrapping: true
                            });
                        </script>
                    </div>
                </div>
                <p>You can alternatively swap the <code>.{valid|invalid}-feedback</code> classes for <code>.{valid|invalid}-tooltip</code> classes to display the validation feedback text in a tooltip style.</p>
                <p>Also, be sure to apply the style <code>position: relative</code> or class <code>.position-relative</code> on the parent element for proper feedback tooltip positioning. Here's an example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab9319.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code72" >

<form>
    <div class="form-group position-relative">
        <label for="inputEmail">Email</label>
        <input type="email" class="form-control is-valid" id="inputEmail" placeholder="Email" value="peterparker@example.com" required>
        <div class="valid-tooltip">Good! Your email address looks valid.</div>
    </div>
    <div class="form-group position-relative">
        <label for="inputPassword">Password</label>
        <input type="password" class="form-control is-invalid" id="inputPassword" placeholder="Password" required>
        <div class="invalid-tooltip">Opps! You have entered an invalid password.</div>
    </div>
    <div class="form-group">
        <label class="form-check-label"><input type="checkbox"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-primary">Sign in</button>
</form>    
</textarea>
                            <script>
                            var editor = CodeMirror.fromTextArea(document.getElementById("code72"), {
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
                            <p><strong>Read Carefully:</strong> Background icons for <code>&lt;select&gt;</code> elements only work properly with <code>.custom-select</code>, not with <code>.form-control</code>. We will learn about <a href="bt_custom-forms.php">Bootstrap custom forms</a> in next chapter.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <div class="bottom-link clearfix">
                    <a href="bt_list-groups.php" class="previous-page-bottom">Previous Page</a>
                    <a href="bt_custom-forms.php" class="next-page-bottom"  style="float: right;">Next Page</a>
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