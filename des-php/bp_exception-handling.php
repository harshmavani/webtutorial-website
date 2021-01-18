<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="PHP Exception Handling">
	  <meta name="keywords" content="php,php basic,PHP Exception Handling">
	  <meta name="author" content="webschooltoday.com">
    <title>PHP Exception Handling - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">PHP Exception Handling</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_php.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="bp_mysql-introduction.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="bp_regular-expressions.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>PHP <span>Exception Handling</span></h1>
                <p class="summary">In this tutorial you will learn how to throw and catch exceptions in PHP.</p>
                <h2>What is an Exception</h2>
                <p>An exception is a signal that indicates some sort of exceptional event or error has occurred. Exceptions can be caused due to various reasons, for example, database connection or query fails, file that you're trying to access doesn't exist, and so on.</p>
				<p class="space">PHP provides a powerful exception handling mechanism that allows you to handle exceptions in a graceful way. As opposed to PHP's traditional <a href="bp_error-handling.php">error-handling</a> system, exception handling is the <a href="bp_classes-and-objects.php">object-oriented</a> method for handling errors, which provides more controlled and flexible form of error reporting. Exception model was first introduced in PHP 5.</p>
				<h2>Using Throw and Try...Catch Statements</h2>
				<p>In exception-based approach, program code is written in a <code>try</code> block, an exception can be thrown using the <code>throw</code> statement when an exceptional event occurs during the execution of code in a <code>try</code> block. It is then caught and resolved by one or more <code>catch</code> blocks.</p>
				<p>The following example demonstrates how exception handling works:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../output_file/bin/throw-catch-exceptions832c.php" target="_top" class="download-btn" title="Download Source Code"><span>Download</span></a></div>
                        <textarea id="code1">

&lt;?php
function division($dividend, $divisor){
    // Throw exception if divisor is zero
    if($divisor == 0){
        throw new Exception('Division by zero.');
    } else{
        $quotient = $dividend / $divisor;
        echo "&lt;p&gt;$dividend / $divisor = $quotient&lt;/p&gt;";
    }
}
 
try{
    division(10, 2);
    division(30, -4);
    division(15, 0);
    
    // If exception is thrown following line won't execute
    echo '&lt;p&gt;All divisions performed successfully.&lt;/p&gt;';
} catch(Exception $e){
    // Handle the exception
    echo "&lt;p&gt;Caught exception: " . $e-&gt;getMessage() . "&lt;/p&gt;";
}
 
// Continue execution
echo "&lt;p&gt;Hello World!&lt;/p&gt;";
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
				<p class="space">You might be wondering what this code was all about. Well, let's go through each part of this code one by one for a better understanding.</p>
				<h2>Explanation of Code</h2>
				<p>The PHP's exception handling system has basically four parts: <code>try</code>, <code>throw</code>, <code>catch</code>, and the Exception class. The following list describes how each part exactly works.</p>
				<ul>
					<li>The <code>division()</code> function in the example above checks if a divisor is equal to zero. If it is, an exception is thrown via PHP's <code>throw</code> statement. Otherwise this function perform the division using given numbers and display the result.</li>
					<li>Later, the <code>division()</code> function is called within a <code>try</code> block with different arguments. If an exception is generated while executing the code within the <code>try</code> block, PHP stops execution at that point and attempt to find the corresponding <code>catch</code> block. If it is found, the code within that <code>catch</code> block is executed, if not, a fatal error is generated.</li>
					<li>The <code>catch</code> block typically catch the exception thrown within the <code>try</code> block and creates an object (<code>$e</code>) containing the exception information. The error message from this object can be retrieved using the Exception's <code>getMessage()</code> method.</li>
				</ul>
				<p>The PHP's Exception class also provides <code>getCode()</code>, <code>getFile()</code>, <code>getLine()</code> and <code>getTraceAsString()</code> methods that can be used to generate detailed debugging information.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../output_file/bin/exception-class-methods992e.php" target="_top" class="download-btn" title="Download Source Code"><span>Download</span></a></div>
                        <textarea id="code2">

&lt;?php
// Turn off default error reporting
error_reporting(0);
 
try{
    $file = "somefile.txt";
    
    // Attempt to open the file
    $handle = fopen($file, "r");
    if(!$handle){
        throw new Exception("Cannot open the file!", 5);
    }
    
    // Attempt to read the file contents
    $content = fread($handle, filesize($file));
    if(!$content){
        throw new Exception("Could not read file!", 10);
    }
    
    // Closing the file handle
    fclose($handle);
    
    // Display file contents
    echo $content;
} catch(Exception $e){
    echo "&lt;h3&gt;Caught Exception!&lt;/h3&gt;";
    echo "&lt;p&gt;Error message: " . $e-&gt;getMessage() . "&lt;/p&gt;";    
    echo "&lt;p&gt;File: " . $e-&gt;getFile() . "&lt;/p&gt;";
    echo "&lt;p&gt;Line: " . $e-&gt;getLine() . "&lt;/p&gt;";
    echo "&lt;p&gt;Error code: " . $e-&gt;getCode() . "&lt;/p&gt;";
    echo "&lt;p&gt;Trace: " . $e-&gt;getTraceAsString() . "&lt;/p&gt;";
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
				<p>The Exception's constructor optionally takes an exception message and an exception code. While the exception message is typically used to display generic information on what went wrong, the exception code can be used to categorize the errors. The exception code provided can be retrieved later via Exception's <code>getCode()</code> method.</p>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"   style="background-color:#fad28c">
                            <p><strong>Important:</strong> Exception should only be used to denote exceptional conditions; they should not be used to control normal application flow e.g., jump to another place in the script at a particular point. Doing that would adversely affect your application's performance.</p>
                        </div>
                    </div>
                </div>
				<hr />
				<h2>Defining Custom Exceptions</h2>
				<p>You can even define your own custom exception handlers to treat different types of exceptions in a different way. It allows you to use a separate <code>catch</code> block for each exception type.</p>
				<p>You can define a custom exception by extending the Exception class, because Exception is the base class for all exceptions. The custom exception class inherits all the properties and methods from PHP's Exception class. You can also add your custom methods to the custom exception class. Let's check out the following example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../output_file/bin/using-custom-exceptionsa1f6.php" target="_top" class="download-btn" title="Download Source Code"><span>Download</span></a></div>

                        <textarea id="code3">

&lt;?php
// Extending the Exception class
class EmptyEmailException extends Exception {}
class InvalidEmailException extends Exception {}
 
$email = "someuser@example..com";
 
try{
    // Throw exception if email is empty
    if($email == ""){
        throw new EmptyEmailException("&lt;p&gt;Please enter your E-mail address!&lt;/p&gt;");
    }
    
    // Throw exception if email is not valid
    if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {           
        throw new InvalidEmailException("&lt;p&gt;&lt;b&gt;$email&lt;/b&gt; is not a valid E-mail address!&lt;/p&gt;");
    }
    
    // Display success message if email is valid
    echo "&lt;p&gt;SUCCESS: Email validation successful.&lt;/p&gt;";
} catch(EmptyEmailException $e){
    echo $e-&gt;getMessage();
} catch(InvalidEmailException $e){
    echo $e-&gt;getMessage();
}
?&gt;

 </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code3"), {
									mode: "text/html",
									tabMode: "indent",
									styleActiveLine: true,
									lineNumbers: true,
									lineWrapping: true
								});

							</script>                    </div>
                </div>
				<p>In the above example we've derived two new exception classes: <b>EmptyEmailException</b>, and <b>InvalidEmailException</b> from the Exception base class. Multiple <code>catch</code> blocks are used to display different error messages, depending on the type of exception generated.</p>
				<p>Since these custom exception classes inherits the properties and methods from the Exception class, so we can use the Exception's class methods like <code>getMessage()</code>, <code>getLine()</code>, <code>getFile()</code>, etc. to retrieve error information from the exception object.</p>
				<hr />
				<h2>Setting a Global Exception Handler</h2>
				<p>As we've discussed earlier in this chapter if an exception is not caught, PHP generates a Fatal Error with an "Uncaught Exception ..." message. This error message may contain sensitive information like file name and line number where the problem occurs. If you don't want to expose such information to the user, you can create a custom function and register it with the <code>set_exception_handler()</code> function to handle all uncaught exceptions.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../output_file/bin/set-a-default-exception-handlerd5cd.php" target="_top" class="download-btn" title="Download Source Code"><span>Download</span></a></div>
                        <textarea id="code4">

&lt;?php
function handleUncaughtException($e){
    // Display generic error message to the user
    echo "Opps! Something went wrong. Please try again, or contact us if the problem persists.";
    
    // Construct the error string
    $error = "Uncaught Exception: " . $message = date("Y-m-d H:i:s - ");
    $error .= $e-&gt;getMessage() . " in file " . $e-&gt;getFile() . " on line " . $e-&gt;getLine() . "\n";
    
    // Log details of error in a file
    error_log($error, 3, "var/log/exceptionLog.log");
}
 
// Register custom exception handler
set_exception_handler("handleUncaughtException");
 
// Throw an exception
throw new Exception("Testing Exception!");
?&gt;

 </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code4"), {
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
                        <p><strong>Read Carefully:</strong> An uncaught exception will always result in script termination. So if you want the script to continue executing beyond the point where the exception occurred, you must have have at least one corresponding <code>catch</code> block for each <code>try</code> block.</p>
                    </div>
                    </div>
                </div>
                <div class="bottom-link clearfix">
                    <a href="bp_regular-expressions.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="bp_mysql-introduction.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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