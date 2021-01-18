
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="How to Create HTML Forms">
	  <meta name="keywords" content="css,css3,How to Create HTML Forms">
	  <meta name="author" content="webschooltoday.com">
    <title>How to Create HTML Forms - WebSchool Today</title>
    <?php include "../links.php" ?>
</head>
<body>
<div>
<div class="tital">How to Create HTML Forms</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="ht_iframes.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="ht_lists.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>HTML <span>Forms</span></h1>
                <p class="summary">In this tutorial you will learn how to create a form in HTML to collect user inputs.</p>
                <h2>What is HTML Form</h2>
                <p>HTML Forms are required to collect different kinds of user inputs, such as contact details like name, email address, phone numbers, or details like credit card information, etc.</p>
                <p>Forms contain special elements called controls like inputbox, checkboxes, radio-buttons, submit buttons, etc. Users generally complete a form by modifying its controls e.g. entering text, selecting items, etc. and submitting this form to a web server for further processing.</p>
                <p>The <a href="../info-html/ht_form-tag.php"><code>&lt;form&gt;</code></a> tag is used to create an HTML form. Here's a simple example of a login form:</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab7705.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">
                        <form>
    <label>Username: <input type="text"></label>
    <label>Password: <input type="password"></label>
    <input type="submit" value="Submit">
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
                <!--End:Code box-->
                <p class="space">The following section describes different types of controls that you can use in your form.</p>
                <h2>Input Element</h2>
                <p>This is the most commonly used element within HTML forms.</p>
                <p>It allows you to specify various types of user input fields, depending on the <code>type</code> attribute. An input element can be of type <em>text field</em>, <em>password field</em>, <em>checkbox</em>, <em>radio button</em>, <em>submit button</em>, <em>reset button</em>, <em>file select box</em>, as well as several <a href="htl_new-input-types.php">new input types</a> introduced in HTML5.</p>
                <p class="space">The most frequently used input types are described below.</p>
                <h2>Text Fields</h2>
                <p>Text fields are one line areas that allow the user to input text.</p>
                <p>Single-line text input controls are created using an <code>&lt;input&gt;</code> element, whose <code>type</code> attribute has a value of <code>text</code>. Here's an example of a single-line text input used to take username:</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab0ddd.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">
                        <form>
    <label for="username">Username:</label>
    <input type="text" name="username" id="username">
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
                <!--End:Code box-->
                <p class="break">&mdash; The output of the above example will look something like this:</p>
                <div class="shadow">
                    <div class="preview-box text-left">
                        <a href="../codelab0ddd.html" target="_blank">
                            <img src="../assets/images/textbox.jpg" width="100%" height="" alt="HTML Text Input Field" />
                        </a>                
                    </div>
                </div>
                <!--Note box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> The <code><a href="../info-html/ht_label-tag.php">&lt;label&gt;</a></code> tag is used to define the labels for <code>&lt;input&gt;</code> elements. If you want your user to enter several lines you should use a <code><a href="../info-html/ht_textarea-tag.php">&lt;textarea&gt;</a></code> instead.</p>
                        </div>
                    </div>
                </div>
                <!--End:Note box-->
                <hr />
                <h2>Password Field</h2>
                <p>Password fields are similar to text fields. The only difference is; characters in a password field are masked, i.e. they are shown as asterisks or dots. This is to prevent someone else from reading the password on the screen. This is also a single-line text input controls created using an <code>&lt;input&gt;</code> element whose <code>type</code> attribute has a value of <code>password</code>.</p>
                <p>Here's an example of a single-line password input used to take user password:</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabab90.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">
                        <form>
    <label for="user-pwd">Password:</label>
    <input type="password" name="user-password" id="user-pwd">
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
                <!--End:Code box-->
                <p class="break">&mdash; The output of the above example will look something like this:</p>
                <div class="shadow">
                    <div class="preview-box text-left">
                        <a href="../codelabab90.html" target="_blank">
                            <img src="../assets/images/password.png" width="100%" height="" alt="HTML Password Input Field" />
                        </a>                
                    </div>
                </div>
                <hr />
                <h2>Radio Buttons</h2>
                <p>Radio buttons are used to let the user select exactly one option from a pre-defined set of options. It is created using an <code>&lt;input&gt;</code> element whose <code>type</code> attribute has a value of <code>radio</code>.</p>
                <p>Here's an example of radio buttons that can be used to collect user's gender information:</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab8df6.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">
                        <form>
    <input type="radio" name="gender" id="male">
    <label for="male">Male</label>
    <input type="radio" name="gender" id="female">
    <label for="female">Female</label>
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
                <!--End:Code box-->
                <p class="break">&mdash; The output of the above example will look something like this:</p>
                <div class="shadow">
                    <div class="preview-box text-left">
                        <a href="../codelab8df6.html" target="_blank">
                            <img src="../assets/images/radio.png" width="620" height="24" alt="HTML Radio Buttons" />
                        </a>               
                    </div>
                </div>                
                <hr />
                <h2>Checkboxes</h2>
                <p>Checkboxes allows the user to select one or more option from a pre-defined set of options. It is created using an <code>&lt;input&gt;</code> element whose <code>type</code> attribute has a value of <code>checkbox</code>.</p>
                <p>Here's an example of checkboxes that can be used to collect information about user's hobbies:</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab5d84.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">
                        <form>
    <input type="checkbox" name="sports" id="soccer">
    <label for="soccer">Soccer</label>
    <input type="checkbox" name="sports" id="cricket">
    <label for="cricket">Cricket</label>
    <input type="checkbox" name="sports" id="baseball">
    <label for="baseball">Baseball</label>
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
                <!--End:Code box-->
                <p class="break">&mdash; The output of the above example will look something like this:</p>
                <div class="shadow">
                    <div class="preview-box text-left">
                        <a href="../codelab5d84.html" target="_blank">
                            <img src="../lib/images/html/checkboxes.png" width="620" height="24" alt="HTML Checkboxes" />
                        </a>              
                    </div>
                </div>
                <!--Note box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> If you want to make a radio button or checkbox selected by default, you can add the attribute <code>checked</code> to the input element, like <code>&lt;input type="checkbox" checked&gt;</code>.</p>
                        </div>
                    </div>
                </div>
                <!--End:Note box-->
                <hr />
                <h2>File Select box</h2>
                <p>The file fields allow a user to browse for a local file and send it as an attachment with the form data. Web browsers such as Google Chrome and Firefox render a file select input field with a Browse button that enables the user to navigate the local hard drive and select a file.</p>
                <p>This is also created using an <code>&lt;input&gt;</code> element, whose <code>type</code> attribute value is set to <code>file</code>.</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab915a.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code6">
                        <form>
    <label for="file-select">Upload:</label>
    <input type="file" name="upload" id="file-select">
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
                <!--End:Code box-->
                <p class="break">&mdash; The output of the above example will look something like this:</p>
                <div class="shadow">
                    <div class="preview-box text-left">
                        <a href="../codelab915a.html" target="_blank">
                            <img src="../assets/images/file-select-box.png" width="620" height="24" alt="HTML File Select Field" />
                        </a>                
                    </div>
                </div>
				<!--Tip Box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"  style="background-color:#fad28c"
>
                            <p><strong>Important:</strong> There are several other input types. Please check out the chapter on <a href="htl_new-input-types.php">HTML5 new input types</a> to learn more about the newly introduced input types.</p>
                        </div>
                    </div>
                </div>
                <!--End:Tip Box-->
                <hr />
                <h2>Textarea</h2>
                <p>Textarea is a multiple-line text input control that allows a user to enter more than one line of text. Multi-line text input controls are created using an <code>&lt;textarea&gt;</code> element.</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabbe3e.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code7">
                        <form>
    <label for="address">Address:</label>
    <textarea rows="3" cols="30" name="address" id="address"></textarea>
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
                <!--End:Code box-->
                <p class="break">&mdash; The output of the above example will look something like this:</p>
                <div class="shadow">
                    <div class="preview-box text-left">
                        <a href="../codelabbe3e.html" target="_blank">
                            <img src="../assets/images/textarea.png" width="620" height="54" alt="HTML Textarea" />
                        </a>                
                    </div>
                </div>
                <hr />
                <h2>Select Boxes</h2>
                <p>A select box is a dropdown list of options that allows user to select one or more option from a pull-down list of options. Select box is created using the <code>&lt;select&gt;</code> element and <code>&lt;option&gt;</code> element.</p>
                <p>The <code>&lt;option&gt;</code> elements within the <code>&lt;select&gt;</code> element define each list item.</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab9e04.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code8">
                        <form>
    <label for="city">City:</label>
    <select name="city" id="city">
        <option value="sydney">Sydney</option>
        <option value="melbourne">Melbourne</option>
        <option value="cromwell">Cromwell</option>
    </select>
</form>
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
                <!--End:Code box-->
                <p class="break">&mdash; The output of the above example will look something like this:</p>
                <div class="shadow">
                    <div class="preview-box text-left">
                        <a href="../codelab9e04.html" target="_blank">
                            <img src="../lib/images/html/select-box.png" width="620" height="24" alt="HTML Select Dropdown" />
                        </a>               
                    </div>
                </div>
                <hr />
                <h2>Submit and Reset Buttons</h2>
                <p>A submit button is used to send the form data to a web server. When submit button is clicked the form data is sent to the file specified in the form's <code>action</code> attribute to process the submitted data.</p>
                <p>A reset button resets all the forms control to default values. Try out the following example by typing your name in the text field, and click on submit button to see it in action.</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab8361.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code9">
                        <form action="action.php" method="post">
    <label for="first-name">First Name:</label>
    <input type="text" name="first-name" id="first-name">
    <input type="submit" value="Submit">
    <input type="reset" value="Reset">
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
                <!--End:Code box-->
                <div class="shadow">
                    <div class="preview-box text-left">
                        <a href="../codelab8361.html" target="_blank">
                            <img src="../assets/images/submit-and-reset-buttons.png" width="620" height="24" alt="HTML Submit and Reset Buttons" />
                        </a>              
                    </div>
                </div>
                <p>Type your name in the text field above, and click on submit button to see it in action.</p>
                <!--Note box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> You can also create buttons using the <code><a href="../info-html/ht_button-tag.php">&lt;button&gt;</a></code> element. Buttons created with the <code>&lt;button&gt;</code> element function just like buttons created with the input element, but they offer richer rendering possibilities by allowing the embedding of other HTML elements.</p>
                        </div>
                    </div>
                </div>
                <!--End:Note box-->
                <hr />
                <h2>Grouping Form Controls</h2>
                <p>You also group logically related controls and labels within a web form using the <code>&lt;legend&gt;</code> element. Grouping form controls into categories makes it easier for users to locate a control which makes the form more user-friendly. Let's try out the following example to see how it works:</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab0284.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code10">
                        <form>
    <fieldset>
        <legend>Contact Details</legend>
        <label>Email Address: <input type="email" name="email"></label>
        <label>Phone Number: <input type="text" name="phone"></label>
    </fieldset>
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
                <!--End:Code box-->
                <hr />
                <h2 class="break">Frequently Used Form Attributes</h2>
                <p>The following table lists the most frequently used form element's attributes:</p>
                <div class="shadow">
                    <table class="data">
                        <tr>
                            <th style="width: 100px;">Attribute</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td><code>name</code></td>
                            <td>Specifies the name of the form.</td>
                        </tr>
                        <tr>
                            <td><code>action</code></td>
                            <td>Specifies the URL of the program or script on the web server that will be used for processing the information submitted via form.</td>
                        </tr>
                        <tr>
                            <td><code>method</code></td>
                            <td>Specifies the HTTP method used for sending the data to the web server by the browser. The value can be either <code>get</code> (the default) and <code>post</code>.</td>
                        </tr>
                        <tr>
                            <td><code>target</code></td>
                            <td>Specifies where to display the response that is received after submitting the form. Possible values are <code>_blank</code>, <code>_self</code>, <code>_parent</code> and <code>_top</code>.</td>
                        </tr>
                        <tr>
                            <td><code>enctype</code></td>
                            <td>Specifies how the form data should be encoded when submitting the form to the server. Applicable only when the value of the <code>method</code> attribute is <code>post</code>.</td>
                        </tr>
                    </table>
                </div>
                <p>There are several other attributes, to know about them please see the <a href="../info-html/ht_form-tag.php"><code>&lt;form&gt;</code></a> tag reference.</p>
                <!--Note box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> The <code>name</code> attribute represents the form's name within the forms collection. Its value must be unique among the forms in a document, and must not be an empty string.</p>
                        </div>
                    </div>
                </div>
                <!--End:Note box-->
                <!--Tip Box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"  style="background-color:#fad28c"
>
                            <p><strong>Important:</strong> All the data sent via <code>get</code> method is visible in the browser's address bar. But, the data sent via <code>post</code> is not visible to the user. Please check out the tutorial on <a href="../php-tutorial/php-get-and-post.php">GET vs. POST</a> to learn about the difference between these two HTTP methods in detail.</p>
                        </div>
                    </div>
                </div>
                <!--End:Tip Box-->
                <!--Bottom Navigation-->
                <div class="bottom-link clearfix">
                    <a href="ht_lists.php" class="previous-page-bottom"><i class="fa fa-arrow-right" aria-hidden="true"></i> Previous</a>
                    <a href="ht_iframes.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
 Page</a>
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