<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="JavaScript Form Validation">
	  <meta name="keywords" content="javascript,js,JavaScript Form Validation">
	  <meta name="author" content="webschooltoday.com">
    <title>JavaScript Form Validation - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">JavaScript Form Validation</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_javascript.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="js_cookies.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="js_regular-expressions.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>JavaScript <span>Form Validation</span></h1>
                <p class="summary">In this tutorial you will learn how to validate an HTML form using JavaScript.</p>
				<h2>Understanding Client-Side Validation</h2>
				<p>Web forms have become an essential part of web applications. It is often used to collect user's information such as name, email address, location, age, and so on. But it is quite possible that some user might not enter the data what you've expected. So to save bandwidth and avoid unnecessary strain on your server resources you can validate the form data on client-side (i.e. user's system) using JavaScript before passing it onto the web server for further processing.</p>
				<p>Client-side validation is also helpful in creating better user experience, since it is faster because validation occurs within the user's web browser, whereas server-side validation occurs on the server, which require user's input to be first submitted and sent to the server before validation occurs, also user has to wait for server response to know what exactly went wrong.</p>
				<p>In the following section we will take a closer look at how to perform JavaScript form validation and handle any input errors found appropriately and gracefully.</p>				
				<div class="color-box space">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585"
>
							<p><strong>Read Carefully:</strong> Client-side validation is not a substitute or alternative for server-side validation. You should always validate form data on the server-side even if they are already validated on the client-side, because user can disable JavaScript in their browser.</p>
						</div>
					</div>
				</div>
				<h2>Form Validation with JavaScript</h2>
				<p>The form validation process typically consists of two parts&mdash; the <em>required fields validation</em> which is performed to make sure that all the mandatory fields are filled in, and the <em>data format validation</em> which is performed to ensure that the type and format of the data entered in the form is valid.</p>
				<p class="space">Well, let's get straight to it and see how this actually works.</p>
				<h2>Creating the HTML Form</h2>
				<p>Let's first create a simple HTML form that we will validate on client-side using JavaScript when the user clicks on the submit button. Well, let's create an HTML file named "application-form.php" and place the following code in it, then save it somewhere on your system.</p>
				<!--Code box-->
                <div class="example space">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab140b.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        <textarea id="code1">

                        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple HTML Form</title>
    <link rel="stylesheet" href="style.css">
    <script src="validator.js"></script>
</head>
<body>
<form name="contactForm" onsubmit="return validateForm()" action="confirmation.php" method="post">
    <h2>Application Form</h2>
    <div class="row">
        <label>Full Name</label>
        <input type="text" name="name">
        <div class="error" id="nameErr"></div>
    </div>
    <div class="row">
        <label>Email Address</label>
        <input type="text" name="email">
        <div class="error" id="emailErr"></div>
    </div>
    <div class="row">
        <label>Mobile Number</label>
        <input type="text" name="mobile" maxlength="10">
        <div class="error" id="mobileErr"></div>
    </div>
    <div class="row">
        <label>Country</label>
        <select name="country">
            <option>Select</option>
            <option>Australia</option>
            <option>India</option>
            <option>United States</option>
            <option>United Kingdom</option>
        </select> 
        <div class="error" id="countryErr"></div>
    </div>
    <div class="row">
        <label>Gender</label>
        <div class="form-inline">
            <label><input type="radio" name="gender" value="male"> Male</label>
            <label><input type="radio" name="gender" value="female"> Female</label> 
        </div>
        <div class="error" id="genderErr"></div>
    </div>
    <div class="row">
        <label>Hobbies <i>(Optional)</i></label>
        <div class="form-inline">
            <label><input type="checkbox" name="hobbies[]" value="sports"> Sports</label>
            <label><input type="checkbox" name="hobbies[]" value="movies"> Movies</label>
            <label><input type="checkbox" name="hobbies[]" value="music"> Music</label>  
        </div>
    </div>        
    <div class="row">
        <input type="submit" value="Submit">
    </div>
</form>
</body>
</html>
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
				<h2>Building the Form Validation Script</h2>
				<p>Now we're going to create a JavaScript file that holds our complete validation script.</p>
				<p>Well, let's create a JavaScript file named "validator.js" and place the following code inside it, then save it at the same location where you've saved the previous HTML file. Go through each line of the following example code to understand how JavaScript validation works:</p>
				<!--Code box-->
                <div class="example space">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab140b.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        <textarea id="code2">

                        // Defining a function to display error message
function printError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
}

// Defining a function to validate form 
function validateForm() {
    // Retrieving the values of form elements 
    var name = document.contactForm.name.value;
    var email = document.contactForm.email.value;
    var mobile = document.contactForm.mobile.value;
    var country = document.contactForm.country.value;
    var gender = document.contactForm.gender.value;
    var hobbies = [];
    var checkboxes = document.getElementsByName("hobbies[]");
    for(var i=0; i < checkboxes.length; i++) {
        if(checkboxes[i].checked) {
            // Populate hobbies array with selected values
            hobbies.push(checkboxes[i].value);
        }
    }
    
	// Defining error variables with a default value
    var nameErr = emailErr = mobileErr = countryErr = genderErr = true;
    
    // Validate name
    if(name == "") {
        printError("nameErr", "Please enter your name");
    } else {
        var regex = /^[a-zA-Z\s]+$/;                
        if(regex.test(name) === false) {
            printError("nameErr", "Please enter a valid name");
        } else {
            printError("nameErr", "");
            nameErr = false;
        }
    }
    
    // Validate email address
    if(email == "") {
        printError("emailErr", "Please enter your email address");
    } else {
        // Regular expression for basic email validation
        var regex = /^\S+@\S+\.\S+$/;
        if(regex.test(email) === false) {
            printError("emailErr", "Please enter a valid email address");
        } else{
            printError("emailErr", "");
            emailErr = false;
        }
    }
    
    // Validate mobile number
    if(mobile == "") {
        printError("mobileErr", "Please enter your mobile number");
    } else {
        var regex = /^[1-9]\d{9}$/;
        if(regex.test(mobile) === false) {
            printError("mobileErr", "Please enter a valid 10 digit mobile number");
        } else{
            printError("mobileErr", "");
            mobileErr = false;
        }
    }
    
    // Validate country
    if(country == "Select") {
        printError("countryErr", "Please select your country");
    } else {
        printError("countryErr", "");
        countryErr = false;
    }
    
    // Validate gender
    if(gender == "") {
        printError("genderErr", "Please select your gender");
    } else {
        printError("genderErr", "");
        genderErr = false;
    }
    
    // Prevent the form from being submitted if there are any errors
    if((nameErr || emailErr || mobileErr || countryErr || genderErr) == true) {
       return false;
    } else {
        // Creating a string from input data for preview
        var dataPreview = "You've entered the following details: \n" +
                          "Full Name: " + name + "\n" +
                          "Email Address: " + email + "\n" +
                          "Mobile Number: " + mobile + "\n" +
                          "Country: " + country + "\n" +
                          "Gender: " + gender + "\n";
        if(hobbies.length) {
            dataPreview += "Hobbies: " + hobbies.join(", ");
        }
        // Display input data in a dialog box before submitting the form
        alert(dataPreview);
    }
};
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
				<p>The value of an individual form field can be accessed and retrieved using the syntax <code>document.formName.fieldName.value</code> or <code>document.getElementsByName(<em>name</em>).value</code>. But, to get the values from a form field that supports multiple selections, like a group of checkboxes, you need to utilize the <a href="js_loops.php">loop statement</a> as shown in the example above (<i>line no-14 to 21</i>).<p>
				<p>Also, to check whether the format of input data is correct or not we've used the <a href="js_regular-expressions.php"><em>regular expressions</em></a>. It is one of the most effective techniques for validating the user inputs.</p>
				<p>Furthermore, the above script will also display the data entered by the user in an alert dialog box for preview purpose before submitting the form to the web server.</p>
				<!--Tip Box-->
				<div class="color-box space">
					<div class="shadow">
						<div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
						<div class="tip-box"   style="background-color:#fad28c">
							<p><strong>Important:</strong> However, you can validate email format using regular expression. But a user might enter an email that is correctly formatted but does not exist. So for authentic email validation, <a href="../php-tutorial/php-send-email.php">send confirmation email</a> to the user and verify whether the email really exists or not.</p>
						</div>
					</div>
				</div>
				<!--End:Tip Box-->
				<h2>Adding Style Sheet to Beautify the Form</h2>
				<p>Finally, create the file named "style.css" and place the following code in it, then save it also at the same location where you've saved the previous two files. These are the style rules to beautify our form.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="javascript:void(0);" target="_blank" class="try-btn disabled" title="Disabled">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        <textarea id="code3">

                        body {
    font-size: 16px;
    background: #f9f9f9;
    font-family: "Segoe UI", "Helvetica Neue", Arial, sans-serif;
}
h2 {
    text-align: center;
    text-decoration: underline;
}
form {
    width: 300px;
    background: #fff;
    padding: 15px 40px 40px;
    border: 1px solid #ccc;
    margin: 50px auto 0;
    border-radius: 5px;
}
label {
    display: block;
    margin-bottom: 5px
}
label i {
    color: #999;
    font-size: 80%;
}
input, select {
    border: 1px solid #ccc;
    padding: 10px;
    display: block;
    width: 100%;
    box-sizing: border-box;
    border-radius: 2px;
}
.row {
    padding-bottom: 10px;
}
.form-inline {
    border: 1px solid #ccc;
    padding: 8px 10px 4px;
    border-radius: 2px;
}
.form-inline label, .form-inline input {
    display: inline-block;
    width: auto;
    padding-right: 15px;
}
.error {
    color: red;
    font-size: 90%;
}
input[type="submit"] {
    font-size: 110%;
    font-weight: 100;
    background: #006dcc;
    border-color: #016BC1;
    box-shadow: 0 3px 0 #0165b6;
    color: #fff;
    margin-top: 10px;
    cursor: pointer;
}
input[type="submit"]:hover {
    background: #0165b6;
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
				<p>That's all, now open the "application-form.php" file in a web browser and try to fill some data and see how the script respond when an invalid data is entered in a form field.</p>
				<p>To learn about server-side validation, please check out the tutorial on <a href="../php-tutorial/php-form-validation.php">PHP form validation</a></p>
				<!--Bottom Navigation-->
				<div class="bottom-link clearfix">
                    <a href="js_regular-expressions.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="js_cookies.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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