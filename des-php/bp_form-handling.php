<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="How to Access Submitted Form Data in PHP">
	  <meta name="keywords" content="php,php basic,How to Access Submitted Form Data in PHP">
	  <meta name="author" content="webschooltoday.com">
    <title>How to Access Submitted Form Data in PHP - WebSchool Today</title>
	<meta name="description" content="In this tutorial you will learn how to retrieve the form data submitted through a contact form using the PHP superglobal variables $_GET, $_POST and $_REQUEST." />
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">How to Access Submitted Form Data in PHP</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_php.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="bp_form-validation.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="bp_send-email.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>PHP <span>Form Handling</span></h1>
                <p class="summary">In this tutorial you'll learn how to collect user inputs submitted through a form using the PHP superglobal variables  <code>$_GET</code>, <code>$_POST</code> and <code>$_REQUEST</code>.</p>
                <h2>Creating a Simple Contact Form</h2>
                <p>In this tutorial we are going to create a simple HMTL contact form that allows users to enter their comment and feedback then displays it to the browser using PHP.</p>
                <p>Open up your favorite code editor and create a new PHP file. Now type the following code and save this file as "contact-form.php" in the root directory of your project.</p>
                <div class="my_codeb-rg3-w space">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../output_file/bin/contact-form8458.php" target="_top" class="download-btn" title="Download Source Code"><span>Download</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        <textarea id="code1">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Form</title>
</head>
<body>
    <h2>Contact Us</h2>
    <p>Please fill in this form and send us.</p>
    <form action="process-form.php" method="post">
        <p>
            <label for="inputName">Name:<sup>*</sup></label>
            <input type="text" name="name" id="inputName">
        </p>
        <p>
            <label for="inputEmail">Email:<sup>*</sup></label>
            <input type="text" name="email" id="inputEmail">
        </p>
        <p>
            <label for="inputSubject">Subject:</label>
            <input type="text" name="subject" id="inputSubject">
        </p>
        <p>
            <label for="inputComment">Message:<sup>*</sup></label>
            <textarea name="message" id="inputComment" rows="5" cols="30"></textarea>
        </p>

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
                <h2>Explanation of code</h2>
                <p>Notice that there are two attributes within the opening <code>&lt;form&gt;</code> tag:</p>
                <ul>
                    <li>The <code>action</code> attribute references a PHP file "process-form.php" that receives the data entered into the form when user submit it by pressing the submit button.</li>
                    <li>The <code>method</code> attribute tells the browser to send the form data through <a href="bp_get-and-post.php#post-method">POST method</a>.</li>
                </ul>
                <p>Rest of the elements inside the form are basic form controls to receive user inputs. To learn more about HTML form elements please check out the <a href="../des-html/html-forms.php">HTML Forms</a> tutorial.</p>
                <hr />
                <h2>Capturing Form Data with PHP</h2>
                <p>To access the value of a particular form field, you can use the following superglobal variables. These variables are available in all scopes throughout a script.</p>
                <div class="shadow">
                    <table class="data">
                        <thead>
                            <tr>
                            	<th>Superglobal</th>
                            	<th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            	<td><code>$_GET</code></td>
                            	<td>Contains a list of all the field names and values sent by a form using the get method (i.e. via the URL parameters).</td>
                            </tr>
                            <tr>
                            	<td><code>$_POST</code></td>
                            	<td>Contains a list of all the field names and values sent by a form using the post method (data will not visible in the URL).</td>
                            </tr>
                            <tr>
                            	<td><code>$_REQUEST</code></td>
                            	<td>Contains the values of both the <code>$_GET</code> and <code>$_POST</code> variables as well as the values of the <code>$_COOKIE</code> superglobal variable.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p>When a user submit the above contact form through clicking the submit button, the form data is sent to the "process-form.php" file on the server for processing. It simply captures the information submitted by the user and displays it to browser.</p>
                <p>The PHP code of "process-form.php" file will look something like this:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../output_file/bin/process-formbb33.php" target="_top" class="download-btn" title="Download Source Code"><span>Download</span></a></div>
                        <pre class="syntax-highlighter line-numbers"><code class="language-php"><textarea id="code2">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Form</title>
</head>
<body>
    <h1>Thank You</h1>
    <p>Here is the information you have submitted:</p>
    <ol>
        <li><em>Name:</em> <?php echo $_POST["name"]?></li>
        <li><em>Email:</em> <?php echo $_POST["email"]?></li>
        <li><em>Subject:</em> <?php echo $_POST["subject"]?></li>
        <li><em>Message:</em> <?php echo $_POST["message"]?></li>
    </ol>
</body>
</html>

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
                <p>The PHP code above is quite simple. Since the form data is sent through the post method, you can retrieve the value of a particular form field by passing its name to the <code>$_POST</code> superglobal array, and displays each field value using <code>echo()</code> statement.</p>
                <p>In real world you cannot trust the user inputs; you must implement some sort of validation to filter the user inputs before using them. In the next chapter you will learn how sanitize and validate this contact form data and send it through the email using PHP.</p>
                <div class="bottom-link clearfix">
                    <a href="bp_send-email.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="bp_form-validation.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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