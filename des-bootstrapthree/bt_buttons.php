<!DOCTYPE html>
	<html lang="en">
	<head>
	<meta name="description" content="Bootstrap 3 Button Styles">
	  <meta name="keywords" content="Bootstrap,Bootstrap3,button,style,Bootstrap 3 Button Styles">
	  <meta name="author" content="webschooltoday.com">
    <title>Bootstrap 3 Button Styles - WebSchool Today</title>
    <?php include "../links.php" ?>
</head>
<body>
<div>
<div class="tital">Bootstrap 3 Button Styles</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des_bootstap3.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
            </div>
            <a href="bt_button-groups.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i>
</a>
                <a href="bt_input-groups.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i>
</a>

                <h1>Bootstrap <span>Buttons</span></h1>
                <p class="summary">In this tutorial you will learn how to create and modify buttons with Bootstrap.</p>
                <h2>Creating Buttons with Bootstrap</h2>
                <p class="space">Buttons are the integral part of a website and application. They are used for various purposes like, submit or reset an <a href="../des-html/ht_forms.php">HTML form</a>, performing interactive actions such as showing or hiding something on a web page on click of the button, etc. The Bootstrap button CSS provides the quick and easy way to create and customize the buttons.</p>
				<h2>Bootstrap Button Styles</h2>
                <p>Different classes are available in Bootstrap for styling the buttons as well as to indicate the different states. Button styles can be applied to any element. However, it is applied normally to the <code><a href="../info-html/ht_a-tag.php">&lt;a&gt;</a></code>, <code><a href="../info-html/ht_input-tag.php">&lt;input&gt;</a></code>, and <code><a href="../info-html/ht_button-tag.php">&lt;button&gt;</a></code> elements for the best rendering.</p>
                <p>The following table lists the different buttons which are available in the Bootstrap:</p>
                <div class="shadow">
                    <table class="data">
                        <thead>
                            <tr>
                                <th>Button</th>
                                <th>Class</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img src="../assets/images/bt_default-button.png" width="71" height="34" alt="Default" /></td>
                                <td><pre><code>btn&nbsp;btn-default</code></pre></td>
                                <td>Default gray button with gradient.</td>
                            </tr>
                            <tr>
                                <td><img src="../assets/images/bt_primary-button.png" width="75" height="34" alt="Primary" /></td>
                                <td><code>btn&nbsp;btn-primary</code></td>
                                <td>Provides extra visual weight to indicate primary action button in a set of buttons.</td>
                            </tr>
                            <tr>
                                <td><img src="../assets/images/bt_info-button.png" width="50" height="34" alt="Info" /></td>
                                <td><code>btn&nbsp;btn-info</code></td>
                                <td>Can be used as an alternative to the default button.</td>
                            </tr>
                            <tr>
                                <td><img src="../assets/images/bt_success-button.png" width="79" height="34" alt="Success" /></td>
                                <td><code>btn&nbsp;btn-success</code></td>
                                <td>Indicates a successful or positive action.</td>
                            </tr>
                            <tr>
                                <td><img src="../assets/images/bt_warning-button.png" width="78" height="34" alt="Warning" /></td>
                                <td><code>btn&nbsp;btn-warning</code></td>
                                <td>Indicates caution should be taken with this action.</td>
                            </tr>
                            <tr>
                                <td><img src="../assets/images/bt_danger-button.png" width="73" height="34" alt="Danger" /></td>
                                <td><code>btn&nbsp;btn-danger</code></td>
                                <td>Indicates a dangerous or potentially negative action.</td>
                            </tr>
                            <tr>
                                <td><img src="../assets/images/bt_link-button.png" width="52" height="34" alt="Link" /></td>
                                <td><code>btn&nbsp;btn-link</code></td>
                                <td>Deemphasize a button by making it look like a link while maintaining button behavior.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p>The following example will show you these buttons in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelabcad1.html">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<button type="button" class="btn btn-default">Default</button>
<button type="button" class="btn btn-primary">Primary</button>
<button type="button" class="btn btn-info">Info</button>
<button type="button" class="btn btn-success">Success</button>
<button type="button" class="btn btn-warning">Warning</button>
<button type="button" class="btn btn-danger">Danger</button>
<button type="button" class="btn btn-link">Link</button>

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
                        <div class="info-tab warning-icon" title="Warning"><i></i></div>
                        <div class="warning-box">
                            <p><strong>Warning:</strong> Internet Explorer 9 doesn't crop background gradients on rounded corners, so gradient is removed from buttons.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Changing the Sizes of Buttons</h2>
                <p>Bootstrap gives you option further to scaling a button up or down. You can make buttons larger or smaller through adding an extra class <code>.btn-lg</code>, <code>.btn-sm</code>, or <code>.btn-xs</code>.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelaba0a6.html">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        <textarea id="code2">

<p>
    <button type="button" class="btn btn-primary btn-lg">Large button</button>
    <button type="button" class="btn btn-default btn-lg">Large button</button>
</p>
<p>
    <button type="button" class="btn btn-primary">Default button</button>
    <button type="button" class="btn btn-default">Default button</button>
</p>
<p>
    <button type="button" class="btn btn-primary btn-sm">Small button</button>
    <button type="button" class="btn btn-default btn-sm">Small button</button>
</p>
<p>
    <button type="button" class="btn btn-primary btn-xs">Extra small button</button>
    <button type="button" class="btn btn-default btn-xs">Extra small button</button>
</p>

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
                <p>You can also create block level buttons (buttons that covers the full width of the parent elements) by adding an extra class <code>.btn-block</code>.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelabfe95.html">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

<button type="button" class="btn btn-primary btn-lg btn-block">Block level button</button>
<button type="button" class="btn btn-default btn-lg btn-block">Block level button</button>

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
                <h2>Bootstrap Disabled Buttons</h2>
                <p class="break">Sometimes we need to disable a button for certain reasons like, a user in case is not eligible to perform this particular action, or we want to ensure that user should performed all other required actions before proceed to this particular action.</p>
                <h3>Creating Disabled Buttons Using Anchor Elements</h3>
                <p>Buttons created through <code><a href="../info-html/ht_a-tag.php">&lt;a&gt;</a></code> tag can be disabled by adding the class <code>.disabled</code>.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelabd343.html">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

<a href="#" class="btn btn-primary btn-lg disabled">Primary link</a>
<a href="#" class="btn btn-default btn-lg disabled">Link</a>
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
                            <p><strong>Read Carefully:</strong> The <code>.disabled</code> class only changes the visual appearance of the link by making it gray and removing the hover effect, however the link will remain clickable unless you remove the <code>href</code> attribute. Alternatively, you could implement custom <a href="../faq/how-to-remove-clickable-behavior-from-a-disabled-link-using-jquery.php">JavaScript to prevent those clicks</a>.</p>
                        </div>
                    </div>
                </div>
				<h3>Creating Disabled Buttons Using Button and Input Element</h3>
                <p>Buttons created through <code><a href="../info-html/ht_button-tag.php">&lt;button&gt;</a></code> or <code><a href="../info-html/ht_input-tag.php">&lt;input&gt;</a></code> tag can be disabled by adding the <code>disabled</code> attribute to the respective element.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelabd699.html">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

<button type="button" class="btn btn-primary btn-lg disabled" disabled="disabled">Primary button</button>
<button type="button" class="btn btn-default btn-lg" disabled="disabled">Button</button>
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
				<p>In the next chapter you will learn how to combine multiple buttons horizontally or vertically in a line like toolbars using the <a href="bt_button-groups.php">Bootstrap button groups</a> component.</p>
                <div class="bottom-link clearfix">
                    <a href="bt_input-groups.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i>
 Previous</a>
                    <a href="bt_button-groups.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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


