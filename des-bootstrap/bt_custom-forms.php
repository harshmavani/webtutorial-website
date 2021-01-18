<!DOCTYPE html>
<html lang="en">
<head>
<meta name="description" content="How to Create Custom Forms with Bootstrap 4">
  <meta name="keywords" content="Bootstrap,Bootstrap4,Custom Forms with Bootstrap 4,forms,custom forms,bootstrap4 form">
  <meta name="author" content="webschooltoday.com">
    <title>How to Create Custom Forms with Bootstrap 4 - WebSchool Today</title>
    <?php include "../links.php" ?>
</head>
<body>
<div>
<div class="tital">How to Create Custom Forms with Bootstrap 4</div>

<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des_bootstrap.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
               </div>
               <a href="bt_input-groups.php" class="next-page" title="Go to Next Page">	<i class="fa fa-arrow-right" aria-hidden="true"></i>
</a>
                <a href="bt_forms.php" class="previous-page" title="Go to Previous Page">	<i class="fa fa-arrow-left" aria-hidden="true"></i>
</a>

                <h1>Bootstrap <span>Custom Forms</span></h1>
                <p class="summary">In this tutorial you will learn how to create custom form controls with Bootstrap.</p>
                <h2>Creating Custom Form Controls</h2>
                <p>Bootstrap 4 enables you to customize the browser's default form controls to create even more elegant form layouts. Now you can create completely customized and cross-browser compatible radio buttons and checkboxes, file inputs, select dropdowns, range inputs, and more.</p>
                <p class="space">In the following sections, you'll see how to create those custom form elements one by one.</p>
                <h2>Creating Custom Checkboxes</h2>
                <p>To create custom checkboxes wrap each checkbox <code>&lt;input&gt;</code> and their corresponding <code>&lt;label&gt;</code> in a <code>&lt;div&gt;</code> element, and apply the classes as shown in the following example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabae57.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        
<textarea id="code1" >

<div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" name="customCheck" id="customCheck1">
    <label class="custom-control-label" for="customCheck1">Custom checkbox</label>
</div>
<div class="custom-control custom-checkbox mt-2">
    <input type="checkbox" class="custom-control-input" name="customCheck" id="customCheck2" checked>
    <label class="custom-control-label" for="customCheck2">Another custom checkbox</label>
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
                
                <hr />
                <h2>Creating Custom Radio Buttons</h2>
                <p>Similarly, you can create custom radio buttons using the Bootstrap like this:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabe5f6.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2" >

<div class="custom-control custom-radio">
    <input type="radio" class="custom-control-input" name="customRadio" id="customRadio1">
    <label class="custom-control-label" for="customRadio1">Custom radio</label>
</div>
<div class="custom-control custom-radio mt-2">
    <input type="radio" class="custom-control-input" name="customRadio" id="customRadio2" checked>
    <label class="custom-control-label" for="customRadio2">Another custom radio</label>
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
                
                <p>You can also place these custom checkboxes and radio buttons inline by simply adding a class <code>.custom-control-inline</code> on the rg3-w <code>&lt;div&gt;</code> element, like this:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabf7e0.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3" >

<div class="custom-control custom-radio custom-control-inline">
    <input type="radio" class="custom-control-input" name="customRadio" id="customRadio1">
    <label class="custom-control-label" for="customRadio1">Custom radio</label>
</div>
<div class="custom-control custom-radio custom-control-inline">
    <input type="radio" class="custom-control-input" name="customRadio" id="customRadio2" checked>
    <label class="custom-control-label" for="customRadio2">Another custom radio</label>
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
                <h2>Disabling Custom Checkboxes and Radios</h2>
                <p>Custom checkboxes and radio buttons can also be disabled. Just add the boolean attribute <code>disabled</code> to the <code>&lt;input&gt;</code> element, as shown in the following example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabbb72-2.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4" >

<div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="customCheck" disabled>
    <label class="custom-control-label" for="customCheck">Disabled custom checkbox</label>
</div>
<div class="custom-control custom-radio mt-2">
    <input type="radio" class="custom-control-input" id="customRadio" disabled>
    <label class="custom-control-label" for="customRadio">Disabled custom radio</label>
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
                <h2>Creating Toggle Switches</h2>
                <p>The switch markup is similar to custom checkbox, the only difference is it uses the <code>.custom-switch</code> class in place of <code>.custom-checkbox</code> to render a toggle switch.</p>
                <p>Switches also support the <code>disabled</code> attribute. Let's check out an example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab4841.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5" >

<div class="custom-control custom-switch">
    <input type="checkbox" class="custom-control-input" id="customSwitch1">
    <label class="custom-control-label" for="customSwitch1">Toggle switch</label>
</div>
<div class="custom-control custom-switch mt-2">
    <input type="checkbox" class="custom-control-input" disabled id="customSwitch2">
    <label class="custom-control-label" for="customSwitch2">Disabled switch element</label>
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
                <h2>Creating Custom Select Menu</h2>
                <p>Custom select menus can be created simply by adding the class <code>.custom-select</code> on the <code>&lt;select&gt;</code> element. However, custom styling of the select menus are limited only to the initial appearance and cannot modify the <code>&lt;option&gt;</code>s due to browser limitations. Here's an example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab6129.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code6" >

<select class="custom-select">
    <option selected>Custom select menu</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
</select>

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

                <p>You can also create small and large custom selects to match similarly sized <a href="bt_forms.php">Bootstrap text inputs</a>.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab7f1f.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code7" >

<select class="custom-select custom-select-lg">
    <option selected>Large custom select menu</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
</select>
<select class="custom-select mt-3">
    <option selected>Default custom select menu</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
</select>
<select class="custom-select custom-select-sm mt-3">
    <option selected>Small custom select menu</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
</select>

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
                
                <p>Bootstrap custom select also supports <code>multiple</code> and <code>size </code> attributes like normal select:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab3ed3.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code8" >

<select class="custom-select" size="3" multiple>
    <option selected>Open this select menu</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
</select>

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
                <hr />
                <h2>Creating Custom Range Inputs</h2>
                <p>To create custom range inputs just apply the class <code>.custom-range</code> to the <code><code>&lt;input type="range"&gt;</code></code>.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab3370.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code9" >

<label for="customRange">Custom range</label>
<input type="range" class="custom-range" id="customRange">

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
                
                <p>By default range inputs have implicit values for min and max&mdash;0 and 100, respectively. But, you may specify new values for those using the <code>min</code> and <code>max</code> attributes.</p>
                <p>Also, range inputs "snap" to integer values by default. To change this, you can specify a <code>step</code> value. In the following example, we've doubled the number of steps by using the <code>step="0.5"</code>.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelaba76d.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code10" >

<label for="customRange">Custom range</label>
<input type="range" class="custom-range" min="0" max="10" step="0.5" id="customRange">

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
                <hr />
                <h2>Creating Custom File Inputs</h2>
                <p>With Bootstrap 4 you can also create custom file inputs which are elegant and render consistently across browsers. Let's try out the following example to see how it works:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabe092.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code11" >

<div class="custom-file">
    <input type="file" class="custom-file-input" id="customFile">
    <label class="custom-file-label" for="customFile">Choose file</label>
</div>
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
                
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"style="background-color:#fad28c" >
                            <p><strong>Important:</strong> Bootstrap hides the default file <code>&lt;input&gt;</code> via <a href="../des-css/style_opacity.php"><code>opacity</code></a> and style the <code>&lt;label&gt;</code> to look like an input instead. The button is generated and positioned with <a href="../css-tutorial/css-pseudo-elements.php"><code>::after</code></a> pseudo element. Finally, the transparent <code>&lt;input&gt;</code> is placed above the styled <code>&lt;label&gt;</code> using the <a href="../css-tutorial/css-position.php">CSS positioning</a> with proper <code>width</code> and <code>height</code> to trigger the file picker dialog box.</p>
                        </div>
                    </div>
                </div>
                <div class="bottom-link clearfix">
                    <a href="bt_forms.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i>
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