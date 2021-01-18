<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content=">How to Send Text and HTML Emails in PHP">
	  <meta name="keywords" content="php,php basic,>How to Send Text and HTML Emails in PHP">
	  <meta name="author" content="webschooltoday.com">
    <title>How to Send Text and HTML Emails in PHP - WebSchool Today</title>
	<meta name="description" content="In this tutorial you will learn how easily you can send text and HTML emails to one or more recipients using the PHP mail() function." />
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">>How to Send Text and HTML Emails in PHP</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_php.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="bp_form-handling.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="bp_sessions.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>PHP <span>Send Emails</span></h1>
                <p class="summary">In this tutorial you will learn how to send simple text or HTML emails directly from the script using the PHP <code>mail()</code> function.</p>
                <h2>The PHP <code>mail()</code> Function</h2>
                <p>Sending email messages are very common for a web application, for example, sending welcome email when a user create an account on your website, sending newsletters to your registered users, or getting user feedback or comment through website's contact form, and so on.</p>
                <p>You can use the PHP built-in <code>mail()</code> function for creating and sending email messages to one or more recipients dynamically from your PHP application either in a plain-text form or formatted HTML. The basic syntax of this function can be given with:</p>
                <div class="shadow">
                    <div class="syntax"><span class="keyword">mail</span>(<i>to</i>, <em>subject</em>, <em>message</em>, <em>headers</em>, <em>parameters</em>)</div>
                </div>
                <p>The following table summarizes the parameters of this function.</p>
                <div class="shadow">
                    <table class="data">
                    <thead>
                        <tr>
                        	<th>Parameter</th>
                        	<th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        	<td class="section" colspan="2"><strong>Required</strong> &mdash; The following parameters are required</td>
                        </tr>
                        <tr>
                        	<td><code>to</code></td>
                        	<td>The recipient's email address.</td>
                        </tr>
                        <tr>
                        	<td><code>subject</code></td>
                        	<td>Subject of the email to be sent. This parameter i.e. the subject line cannot contain any newline character (<code>\n</code>).</td>
                        </tr>
                        <tr>
                        	<td><code>message</code></td>
                        	<td>Defines the message to be sent. Each line should be separated with a line feed-LF (<code>\n</code>). Lines should not exceed 70 characters.</td>
                        </tr>
                        <tr>
                        	<td class="section" colspan="2"><strong>Optional</strong> &mdash; The following parameters are optional</td>
                        </tr>
                        <tr>
                        	<td><code>headers</code></td>
                        	<td>This is typically used to add extra headers such as "From", "Cc", "Bcc". The additional headers should be separated with a carriage return plus a line feed-CRLF (<code>\r\n</code>).</td>
                        </tr>
                        <tr>
                        	<td><code>parameters</code></td>
                        	<td>Used to pass additional parameters.</td>
                        </tr>
                    </tbody>
                    </table>
                </div>
                <hr />
                <h2>Sending Plain Text Emails</h2>
                <p>The simplest way to send an email with PHP is to send a text email. In the example below we first declare the variables &mdash; recipient's email address, subject line and message body &mdash; then we pass these variables to the <code>mail()</code> function to send the email.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../output_file/bin/send-text-email26d4.php" target="_top" class="download-btn" title="Download Source Code"><span>Download</span></a></div>
                        <textarea id="code1">

&lt;?php
$to = 'maryjane@email.com';
$subject = 'Marriage Proposal';
$message = 'Hi Jane, will you marry me?'; 
$from = 'peterparker@email.com';
 
// Sending email
if(mail($to, $subject, $message)){
    echo 'Your mail has been sent successfully.';
} else{
    echo 'Unable to send email. Please try again.';
}
?&gt;

 </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code1"), {
									mode: "text/html",
									tabMode: "indent",
									styleActiveLine: true,
									lineNumbers: true,
									lineWrapping: true
								});

							</script>                    </div>
                </div>
                <hr />
                <h2>Sending HTML Formatted Emails</h2>
                <p>When you send a text message using PHP, all the content will be treated as simple text. We're going to improve that output, and make the email into a HTML-formatted email.</p>
				<p>To send an HTML email, the process will be the same. However, this time we need to provide additional headers as well as an HTML formatted message.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../output_file/bin/send-html-email893f.php" target="_top" class="download-btn" title="Download Source Code"><span>Download</span></a></div>
                        <textarea id="code2">

&lt;?php
$to = 'maryjane@email.com';
$subject = 'Marriage Proposal';
$from = 'peterparker@email.com';
 
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
$message = '&lt;html&gt;&lt;body&gt;';
$message .= '&lt;h1 style="color:#f40;"&gt;Hi Jane!&lt;/h1&gt;';
$message .= '&lt;p style="color:#080;font-size:18px;"&gt;Will you marry me?&lt;/p&gt;';
$message .= '&lt;/body&gt;&lt;/html&gt;';
 
// Sending email
if(mail($to, $subject, $message, $headers)){
    echo 'Your mail has been sent successfully.';
} else{
    echo 'Unable to send email. Please try again.';
}
?&gt;

 </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code2"), {
									mode: "text/html",
									tabMode: "indent",
									styleActiveLine: true,
									lineNumbers: true,
									lineWrapping: true
								});

							</script>                    </div>
                </div>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585"
>
                            <p><strong>Read Carefully:</strong> However, the PHP <code>mail()</code> function is a part of the PHP core but you need to set up a mail server on your machine to make it really work.</p>
                        </div>
                    </div>
                </div>
                <p>In the next two chapters (<a href="bp_form-handling.php">PHP Form Handling</a> and <a href="bp_form-validation.php">PHP Form Validation</a>) you will learn how to implement an interactive contact form on your website to receive the user's comment and feedback through emails using this PHP send mail feature.</p>
                <div class="bottom-link clearfix">
                    <a href="bp_sessions.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="bp_form-handling.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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