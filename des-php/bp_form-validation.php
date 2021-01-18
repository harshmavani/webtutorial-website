<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="PHP Form Validation">
	  <meta name="keywords" content="php,php basic,PHP Form Validation">
	  <meta name="author" content="webschooltoday.com">
    <title>PHP Form Validation - WebSchool Today</title>
	<meta name="description" content="In this tutorial you will learn how to sanitize and validate the user inputs submitted through a contact form using the PHP filters." />
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">PHP Form Validation</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_php.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="bp_filters.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="bp_form-handling.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>PHP <span>Form Validation</span></h1>
                <p class="summary">In this tutorial you'll learn how to sanitize and validate form data using PHP filters.</p>
                <h2>Sanitizing and Validating Form Data</h2>
                <p>As you have seen in the previous tutorial, the process of capturing and displaying the submitted form data is quite simple. In this tutorial you will learn how to implement a simple contact form on your website that allows the user to send their comment and feedback through email. We will use the same <a href="bp_send-email.php">PHP <code>mail()</code> function</a> to send the emails.</p>
                <p>We are also going to implement some basic security feature like sanitization and validation of the user's input so that user can not insert potentially harmful data that compromise the website security or might break the application.</p>
                <p>The following is our all-in-one PHP script which does the following things:</p>
                <ul>
                	<li>It will ask the users to enter his comments about the website.</li>
                    <li>The same script displays the contact form and process the submitted form data.</li>
                    <li>The script sanitizes and validates the user inputs. If any required field (marked with <code title="asterisk">*</code>) is missing or validation failed due to incorrect inputs the script redisplays the form with an error message for corresponding form field.</li>
                    <li>The script remembers which fields the user has already filled in, and prefills those fields when the form redisplayed due to validation error.</li>
                    <li>If the data submitted by the user are acceptable and everything goes well it will send an email to the website administrator and display a success message to the user.</li>
                </ul>
                <p>Type the following code in "contact.php" file and save in your project root directory:</p>
                <!--Code box-->
                <div class="my_codeb-rg3-w space">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../output_file/bin/contact0cf8.php" target="_top" class="download-btn" title="Download Source Code"><span>Download</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        <pre class="syntax-highlighter line-numbers scroll xxlarge"><code class="language-php">&lt;?php
// Functions to filter user inputs
function filterName($field){
    // Sanitize user name
    $field = filter_var(trim($field), FILTER_SANITIZE_STRING);
    
    // Validate user name
    if(filter_var($field, FILTER_VALIDATE_REGEXP, array("options"=&gt;array("regexp"=&gt;"/^[a-zA-Z\s]+$/")))){
        return $field;
    } else{
        return FALSE;
    }
}    
function filterEmail($field){
    // Sanitize e-mail address
    $field = filter_var(trim($field), FILTER_SANITIZE_EMAIL);
    
    // Validate e-mail address
    if(filter_var($field, FILTER_VALIDATE_EMAIL)){
        return $field;
    } else{
        return FALSE;
    }
}
function filterString($field){
    // Sanitize string
    $field = filter_var(trim($field), FILTER_SANITIZE_STRING);
    if(!empty($field)){
        return $field;
    } else{
        return FALSE;
    }
}
 
// Define variables and initialize with empty values
$nameErr = $emailErr = $messageErr = "";
$name = $email = $subject = $message = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate user name
    if(empty($_POST["name"])){
        $nameErr = "Please enter your name.";
    } else{
        $name = filterName($_POST["name"]);
        if($name == FALSE){
            $nameErr = "Please enter a valid name.";
        }
    }
    
    // Validate email address
    if(empty($_POST["email"])){
        $emailErr = "Please enter your email address.";     
    } else{
        $email = filterEmail($_POST["email"]);
        if($email == FALSE){
            $emailErr = "Please enter a valid email address.";
        }
    }
    
    // Validate message subject
    if(empty($_POST["subject"])){
        $subject = "";
    } else{
        $subject = filterString($_POST["subject"]);
    }
    
    // Validate user comment
    if(empty($_POST["message"])){
        $messageErr = "Please enter your comment.";     
    } else{
        $message = filterString($_POST["message"]);
        if($message == FALSE){
            $messageErr = "Please enter a valid comment.";
        }
    }
    
    // Check input errors before sending email
    if(empty($nameErr) && empty($emailErr) && empty($messageErr)){
        // Recipient email address
        $to = 'webmaster@example.com';
        
        // Create email headers
        $headers = 'From: '. $email . "\r\n" .
        'Reply-To: '. $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
        
        // Sending email
        if(mail($to, $subject, $message, $headers)){
            echo '&lt;p class="success"&gt;Your message has been sent successfully!&lt;/p&gt;';
        } else{
            echo '&lt;p class="error"&gt;Unable to send email. Please try again!&lt;/p&gt;';
        }
    }
}
?&gt;
&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;title&gt;Contact Form&lt;/title&gt;
    &lt;style type="text/css"&gt;
        .error{ color: red; }
        .success{ color: green; }
    &lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h2&gt;Contact Us&lt;/h2&gt;
    &lt;p&gt;Please fill in this form and send us.&lt;/p&gt;
    &lt;form action="contact.php" method="post"&gt;
        &lt;p&gt;
            &lt;label for="inputName"&gt;Name:&lt;sup&gt;*&lt;/sup&gt;&lt;/label&gt;
            &lt;input type="text" name="name" id="inputName" value="&lt;?php echo $name; ?&gt;"&gt;
            &lt;span class="error"&gt;&lt;?php echo $nameErr; ?&gt;&lt;/span&gt;
        &lt;/p&gt;
        &lt;p&gt;
            &lt;label for="inputEmail"&gt;Email:&lt;sup&gt;*&lt;/sup&gt;&lt;/label&gt;
            &lt;input type="text" name="email" id="inputEmail" value="&lt;?php echo $email; ?&gt;"&gt;
            &lt;span class="error"&gt;&lt;?php echo $emailErr; ?&gt;&lt;/span&gt;
        &lt;/p&gt;
        &lt;p&gt;
            &lt;label for="inputSubject"&gt;Subject:&lt;/label&gt;
            &lt;input type="text" name="subject" id="inputSubject" value="&lt;?php echo $subject; ?&gt;"&gt;
        &lt;/p&gt;
        &lt;p&gt;
            &lt;label for="inputComment"&gt;Message:&lt;sup&gt;*&lt;/sup&gt;&lt;/label&gt;
            &lt;textarea name="message" id="inputComment" rows="5" cols="30"&gt;&lt;?php echo $message; ?&gt;&lt;/textarea&gt;
            &lt;span class="error"&gt;&lt;?php echo $messageErr; ?&gt;&lt;/span&gt;
        &lt;/p&gt;
        &lt;input type="submit" value="Send"&gt;
        &lt;input type="reset" value="Reset"&gt;
    &lt;/form&gt;
&lt;/body&gt;
&lt;/html&gt;</code></pre>
                    </div>
                </div>
                <!--End:Code box-->
                <h2>Explanation of code</h2>
                <p>You might think what that code was all about. OK, let's get straight into it.</p>
                <ul>
                    <li>The <code>filterName()</code> function (<i>line no-03</i>) validate input value as person's name. A valid name can only contain alphabetical characters (a-z, A-Z).</li>
                    <li>The <code>filterEmail()</code> function (<i>line no-14</i>) validate input value as email address.</li>
                    <li>The <code>filterString()</code> function (<i>line no-25</i>) only sanitize the input value by stripping HTML tags and special characters. It doesn't validate the input value&thinsp;against&thinsp;anything.</li>
                    <li>The attribute <code>action="contact.php"</code> (<i>line no-111</i>) inside the <a href="../info-html/html-form-tag.php"><code>&lt;form&gt;</code></a> tag specifies that the same <code>contact.php</code> file display the form as well as process the form data.</li>
                    <li>The PHP code inside the value attribute of <a href="../info-html/html-input-tag.php"><code>&lt;input&gt;</code></a> and <a href="../info-html/html-textarea-tag.php"><code>&lt;textarea&gt;</code></a> e.g. <code>&lt;?php echo $name; ?&gt;</code> display prefilled value when form is redisplayed upon validation error.</li>
                    <li>The PHP code inside the <code>.error</code> class e.g. <code>&lt;span class="error"&gt;&lt;?php echo $nameErr; ?&gt;&lt;/span&gt;</code> display error for corresponding field.</li>
                </ul>
                <p>Rest the thing we have already covered in previous chapters. To learn more about sanitize and validate filters, please check out the <a href="../bp_reference/bp_filters.php">PHP Filter</a> reference.</p>
                <!--Note box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585"
>
                            <p><strong>Read Carefully:</strong> You need to setup a mail server on your machine for the PHP <code>mail()</code> function to work. If you just want to implement the form validation you can replace the mail part (line no. <code>81</code> to <code>94</code>) with your own custom code.</p>
                        </div>
                    </div>
                </div>
                <!--End:Note box-->
                <!--Bottom Navigation-->
                <div class="bottom-link clearfix">
                    <a href="bp_form-handling.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="bp_filters.php" class="next-page-bottom">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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