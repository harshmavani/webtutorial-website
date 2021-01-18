<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="JavaScript Dialog Boxes">
	  <meta name="keywords" content="javascript,JavaScript Dialog Boxes">
	  <meta name="author" content="webschooltoday.com">
    <title>JavaScript Dialog Boxes - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">JavaScript Dialog Boxes</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_javascript.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="js_timers.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="js_window-navigator.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>JavaScript <span>Dialog Boxes</span></h1>
                <p class="summary">In this tutorial you will learn how to create dialog boxes in the JavaScript.</p>
				<h2>Creating Dialog Boxes</h2>
				<p>In JavaScript you can create dialog boxes or popups to interact with the user. You can either use them to notify a user or to receive some kind of user input before proceeding.</p>
				<p>You can create three different types of dialog boxes <em>alert</em>, <em>confirm</em>, and <em>prompt</em> boxes.</p>
				<p>The appearance of these dialog boxes is determined by the operating system and/or browser settings, they cannot be modified with the <a href="../des-css/index.php">CSS</a>. Also, dialog boxes are modal windows; when a dialog box is displayed the code execution stops, and resumes only after it has been dismissed.</p>
				<p class="space">In the following section we will discuss each of these dialog boxes in detail.</p>
				<h2>Creating Alert Dialog Boxes</h2>
				<p>An alert dialog box is the most simple dialog box. It enables you to display a short message to the user. It also includes OK button, and the user has to click this OK button to continue.</p>
				<p>You can create alert dialog boxes with the <code>alert()</code> method. You've already seen a lot of alert examples in the previous chapters. Let's take a look at one more example:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabdbf4-2.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

                        var message = "Hi there! Click OK to continue.";
alert(message);
 
/* The following line won't execute until you dismiss previous alert */
alert("This is another alert box.");
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
				<hr />
				<h2>Creating Confirm Dialog Boxes</h2>
				<p>A confirm dialog box allows user to confirm or cancel an action. A confirm dialog looks similar to an alert dialog but it includes a Cancel button along with the OK button.</p>
				<p>You can create confirm dialog boxes with the <code>confirm()</code> method. This method simply returns a Boolean value (<code>true</code> or <code>false</code>) depending on whether the user clicks OK or Cancel button. That's why its result is often assigned to a variable when it is used.</p>
				<p>The following example will print some text in the browser depending on which button is clicked.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab37b6.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

                        var result = confirm("Are you sure?");
 
 if(result) {
     document.write("You clicked OK button!");
 } else {
     document.write("You clicked Cancel button!");
 }
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
				<hr />
				<h2>Creating Prompt Dialog Box</h2>
				<p>The prompt dialog box is used to prompt the user to enter information. A prompt dialog box includes a text input field, an OK and a Cancel button.</p>
				<p>You can create prompt dialog boxes with the <code>prompt()</code> method. This method returns the text entered in the input field when the user clicks the OK button, and <a href="js_data-types.php#null"><code>null</code></a> if user clicks the Cancel button. If the user clicks OK button without entering any text, an empty string is returned. For this reason, its result is usually assigned to a variable when it is used.</p>
				<p>The following example will print the value entered by you when you click the OK button.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab4e30.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

                        var name = prompt("What's your name?");
 
 if(name.length > 0 && name != "null") {
     document.write("Hi, " + name);
 } else {
     document.write("Anonymous!");
 }
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
				<p>The value returned by the <code>prompt()</code> method is always a string. This means if the user enters 10 in the input field, the string "10" is returned instead of the number 10.</p>
				<p>Therefore, if you want to use the returned value as a number you must covert it or <a href="js_type-conversions.php">cast to Number</a>, like this: <code>var age = Number(prompt("What's your age?"));</code></p>
				<!--Tip Box-->
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
						<div class="tip-box"   style="background-color:#fad28c">
							<p><strong>Important:</strong> To display line breaks inside the dialog boxes, use newline character or line feed (<code>\n</code>); a backslash followed by the character n.</p>
						</div>
					</div>
				</div>
				<!--End:Tip Box-->
				<!--Bottom Navigation-->
				<div class="bottom-link clearfix">
                    <a href="js_window-navigator.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="js_timers.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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