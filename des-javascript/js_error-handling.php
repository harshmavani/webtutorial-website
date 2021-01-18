<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="JavaScript Error Handling">
	  <meta name="keywords" content="javascript,js,JavaScript Error Handling">
	  <meta name="author" content="webschooltoday.com">
    <title>JavaScript Error Handling - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">JavaScript Error Handling</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_javascript.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="js_regular-expressions.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="js_json-parsing.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>JavaScript <span>Error Handling</span></h1>
                <p class="summary">In this tutorial you will learn how to deal with errors gracefully in JavaScript.</p>
				<h2>Handling Errors</h2>
                <p>Sometimes your JavaScript code does not run as smooth as expected, resulting in an error. There are a number of reasons that may cause errors, for instance:</p>
                 <ul>
                    <li>A problem with network connection</li>
                    <li>A user might have entered an invalid value in a form field</li>
                    <li>Referncing objects or functions that do not exist</li>
                    <li>Incorrect data being sent to or received from the web server</li>
                    <li>A service that the application needs to access might be temporarily unavailable</li>
                </ul>
                <p class="space">These types of errors are known as runtime errors, because they occur at the time the script runs. A professional application must have the capabilities to handle such runtime error gracefully. Usually this means informing the user about the problem more clearly and precisely.</p>
				<h2>The try...catch Statement</h2>
				<p>JavaScript provides the <code>try-catch</code> statement to trap the runtime errors, and handle them gracefully.</p>
				<p>Any code that might possibly throw an error should be placed in the <code>try</code> block of the statement, and the code to handle the error is placed in the <code>catch</code> block, as shown here:</p>
				<div class="shadow break">
                    <div class="syntax">
                        <span class="keyword">try</span> {<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;<span class="comment"><em>// Code that may cause an error</em></span><br />
                        } <span class="keyword">catch</span>(error) {<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;<span class="comment"><em>// Action to be performed when an error occurs</em></span><br />
                        }
                    </div>
                </div>
				<p>If an error occurs at any point in the <code>try</code> block, code execution immediately transferred from the <code>try</code> block to the <code>catch</code> block. If no error occurs in the <code>try</code> block, the <code>catch</code> block will be ignored, and the program will continue executing after the <code>try-catch</code> statement.</p>
				<p>The following example demonstrates how the <code>try-catch</code> statement actually works:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabaf4d.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

                        try {
    var greet = "Hi, there!";
    document.write(greet);
    
    // Trying to access a non-existent variable
    document.write(welcome);
    
    // If error occurred following line won't execute
    alert("All statements are executed successfully.");
} catch(error) {
    // Handle the error
  alert("Caught error: " + error.message);
}
 
// Continue execution
document.write("<p>Hello World!</p>");
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
				<p>The above script will generate an error that is displayed in an alert dialog box, instead of printing it to browser console. Besides that, the program didn't stop abruptly even though an error has occurred.</p>
				<p>Also, note that the <code>catch</code> keyword is followed by an identifier in parentheses. This identifier is act like a function parameter. When an error occurs, the JavaScript interpreter generates an object containing the details about it. This error object is then passed as an argument to <code>catch</code> for handling.</p>
				<!--Tip Box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"   style="background-color:#fad28c">
                            <p><strong>Important:</strong> The <code>try-catch</code> statement is an exception handling mechanism. An exception is signal that indicates that some sort of exceptional condition or error has occurred during the execution of a program. The terms "exception" and "error" are often used interchangeably.</p>
                        </div>
                    </div>
                </div>
                <!--End:Tip Box-->
				<hr />
				<h2>The try...catch...finally Statement</h2>
				<p>The <code>try-catch</code> statement can also have a <code>finally</code> clause. The code inside the <code>finally</code> block will always execute, regardless of whether an error has occurred in the <code>try</code> block or not.</p>
				<p>The following example will always display the total time taken to complete the execution of the code.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab37d1.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

                        // Assigning the value returned by the prompt dialog box to a variable
var num = prompt("Enter a positive integer between 0 to 100");

// Storing the time when execution start
var start = Date.now();

try {
    if(num > 0 && num <= 100) {
        alert(Math.pow(num, num)); // the base to the exponent power
    } else {
        throw new Error("An invalid value is entered!");
    }
} catch(e) {
    alert(e.message);
} finally {
    // Displaying the time taken to execute the code
    alert("Execution took: " + (Date.now() - start) + "ms");
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
				<h2>Throwing Errors</h2>
				<p>So far we've seen the errors that are automatically thrown by JavaScript parser when an error occurs. However, it is also possible to throw an error manually by using the <code>throw</code> statement.</p>
				<p>The general form (or syntax) of the <code>throw</code> statement is: <code>throw <em>expression</em>;</code></p>
				<p>The <code><em>expression</em></code> can be a object or a value of any data type. However, it's better to use the objects, preferably with <code>name</code> and <code>message</code> properties. The JavaScript built-in <code>Error()</code> constructor provides a convenient way create an error object. Let's look at some examples:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab2662.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

                        throw 123;
throw "Missing values!";
throw true;
throw { name: "InvalidParameter", message: "Parameter is not a number!" };
throw new Error("Something went wrong!");
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
				<!--Note box-->
                <div class="color-box break">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585"
>
                            <p><strong>Read Carefully:</strong> If you're using the JavaScript built-in error constructor functions (e.g. <code>Error()</code>, <code>TypeError()</code>, etc.) for creating error objects, then the <code>name</code> property is same as the name of the constructor, and the <code>message</code> is equal to the argument passed to the constructor function.</p>
                        </div>
                    </div>
                </div>
                <!--End:Note box-->
				<p>Now we're going to create a function <code>squareRoot()</code> to find the square root of a number. This can be done simply by using the JavaScript built-in function <code>Math.sqrt()</code>, but the problem here is, it returns <code>NaN</code> for negative numbers, without providing any hint on what has gone wrong.</p>
				<p>We're going to fix this problem by throwing a custom error if a negative number is supplied.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab5b8e.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

                        function squareRoot(number) {
    // Throw error if number is negative
    if(number < 0) {
        throw new Error("Sorry, can't calculate square root of a negative number.");
    } else {
        return Math.sqrt(number);
    }
}
    
try {
    squareRoot(16);
    squareRoot(625);
    squareRoot(-9);
    squareRoot(100);
    
    // If error is thrown following line won't execute
    alert("All calculations are performed successfully.");
} catch(e) {
    // Handle the error
    alert(e.message);
}
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
				<!--Tip Box-->
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
						<div class="tip-box"   style="background-color:#fad28c">
							<p><strong>Important:</strong> Theoretically it is possible to calculate the square root of negative number by using the imaginary number <code><i>i</i></code>, where <code><i>i</i><sup>2</sup> = -1</code>. Therefore square root of <code>-4</code> is <code>2i</code>, square root of <code>-9</code> is <code>3i</code>, and so on. But imaginary numbers are not supported in JavaScript.</p>
						</div>
					</div>
				</div>
				<!--End:Tip Box-->
				<hr />
				<h2 class="section-title"><span>Error Types</span></h2>
				<p>The <code>Error</code> object is the base type of all errors and it has two main properties &mdash; a <code>name</code> property that specifies the <em>type of error</em>, and a <code>message</code> property that holds a message describing the error in more detail. Any error thrown will be an instance of the <code>Error</code> object. </p>
				<p>There are several different types of error that can occur during the execution of a JavaScript program, such as <code>RangeError</code>, <code>ReferenceError</code>, <code>SyntaxError</code>, <code>TypeError</code>, and <code>URIError</code>.</p>
				<p>The following section describes each one of these error type in more detail:</p>
				<h2>RangeError</h2>
				<p>A <code>RangeError</code> is thrown when you use a number that is outside the range of allowable values. For example, creating an array with a negative length will throw <code>RangeError</code>.</p>
				<!--Code box-->
                <div class="example space">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabffde.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

                        var num = 12.735;
num.toFixed(200); // throws a range error (allowable range from 0 to 100)

var array = new Array(-1); // throws a range error
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
				<h2>ReferenceError</h2>
				<p>A <code>ReferenceError</code> is typically thrown when you try to reference or access a variable or object that doesn't exist. The following example shows how the <code>ReferenceError</code> occurs.</p>
				<!--Code box-->
                <div class="example space">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab4b3a.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code6">

                        var firstName = "Harry";
console.log(firstname); // throws a reference error (variable names are case-sensitive)

undefinedObj.getValues(); // throws a reference error

nonexistentArray.length; // throws a reference error
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
				<h2>SyntaxError</h2>
				<p>A <code>SyntaxError</code> is thrown at runtime if there is any syntax problem in your JavaScript code. For example, if closing bracket is missing, loops are not structured properly, and so on.</p>
				<!--Code box-->
                <div class="example space">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabb9b8.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code7">

                        var array = ["a", "b", "c"];
document.write(array.slice(2); // throws a syntax error (missing bracket)

alert("Hello World!'); // throws a syntax error (quote mismatch)
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
				<h2>TypeError</h2>
				<p>A <code>TypeError</code> is thrown when a value is not of the expected type. For example, calling a string method on number, calling an array method on string, and so on.</p>
				<!--Code box-->
                <div class="example space">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabbfaf.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code8">

                        var num = 123;
num.toLowerCase(); /* throws a type error (since toLowerCase() is a string method, a number can't be converted to lowercase) */

var greet = "Hello World!"
greet.join() // throws a type error (since join() is an array method)
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
				<h2>URIError</h2>
				<p>A <code>URIError</code> is thrown when you specified an invalid URI (<i>stands for</i> Uniform Resource Identifier) to the URI-related functions such as <code>encodeURI()</code> or <code>decodeURI()</code>, as shown here:</p>
				<!--Code box-->
                <div class="example space">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab910b.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code9">

                        var a = "%E6%A2%B";
decodeURI(a);  // throws a URI error

var b = "\uD800";
encodeURI(b);   // throws a URI error
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
				<!--Note box-->
				<div class="color-box break">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585"
>
							<p><strong>Read Carefully:</strong> There is one more error type <code>EvalError</code> which is thrown when an error occurs during the execution of code via <code>eval()</code> function. But, this error is not thrown by JavaScript anymore, however this object still remains for backward compatibility.</p>
						</div>
					</div>
				</div>
				<!--End:Note box-->
				<p>The specific error type can also be thrown manually using their respective constructor and the <code>throw</code> statement, e.g., to throw a <code>TypeError</code> you can use the <code>TypeError()</code> constructor, like this:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab3fec.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code10">

                        var num = prompt("Please enter a number");

try {
    if(num != "" && num !== null && isFinite(+num)) {
        alert(Math.exp(num));
    } else {
        throw new TypeError("You have not entered a number.");
    }
} catch(e) {
    alert(e.name);
    alert(e.message);
    alert(e.stack); // non-standard property
}
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
				<!--Note box-->
                <div class="color-box break">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585"
>
                            <p><strong>Read Carefully:</strong> The <code>Error</code> object also supports some non-standard properties. One of the most widely used such property is: <code>stack</code>, which returns the <em>stack trace</em> for that error. You can use it for debugging purposes, but don't use it on production sites.</p>
                        </div>
                    </div>
                </div>
                <!--End:Note box-->
				<!--Bottom Navigation-->
				<div class="bottom-link clearfix">
                    <a href="js_json-parsing.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="js_regular-expressions.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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