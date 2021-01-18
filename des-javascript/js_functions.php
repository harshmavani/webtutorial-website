<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="JavaScript Functions">
	  <meta name="keywords" content="javascript,js,JavaScript Functions">
	  <meta name="author" content="webschooltoday.com">
    <title>JavaScript Functions - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">JavaScript Functions</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_javascript.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="js_objects.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="js_loops.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>JavaScript <span>Functions</span></h1>
                <p class="summary">In this tutorial you will learn how to define and call a function in JavaScript.</p>
				<h2>What is Function?</h2>
				<p>A function is a group of statements that perform specific tasks and can be kept and maintained separately form main program. Functions provide a way to create reusable code packages which are more portable and easier to debug. Here are some advantages of using functions:</p>
				<ul>
                    <li><strong>Functions reduces the repetition of code within a program</strong> &mdash; Function allows you to extract commonly used block of code into a single component. Now you can perform the same task by calling this function wherever you want within your script without having to copy and paste the same block of code again and again.</li>
                    <li><strong>Functions makes the code much easier to maintain</strong> &mdash; Since a function created once can be used many times, so any changes made inside a function automatically implemented at all the places without touching the several files.</li>
                    <li><strong>Functions makes it easier to eliminate the errors</strong> &mdash; When the program is subdivided into functions, if any error occur you know exactly what function causing the error and where to find it. Therefore, fixing errors becomes much easier.</li>
                </ul>
				<p class="space">The following section will show you how to define and call functions in your scripts.</p>
				<h2>Defining and Calling a Function</h2>
				<p>The declaration of a function start with the <code>function</code> keyword, followed by the name of the function you want to create, followed by parentheses i.e. <code>()</code> and finally place your function's code between curly brackets <code>{}</code>. Here's the basic syntax for declaring a function:</p>
				<div class="shadow">
                    <div class="syntax">
                    <span class="keyword">function</span> functionName() {<br />
                    &nbsp;&nbsp;&nbsp;&nbsp;<span class="comment">// Code to be executed</span><br />
                    } 
                    </div>
                </div>
				<p>Here is a simple example of a function, that will show a hello message:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab5e68.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

                        // Defining function
function sayHello() {
    alert("Hello, welcome to this website!");
}
 
// Calling function
sayHello(); // 0utputs: Hello, welcome to this website!
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
				<p>Once a function is defined it can be called (invoked) from anywhere in the document, by typing its name followed by a set of parentheses, like <code>sayHello()</code> in the example above.</p>
				<!--Note box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585"
>
                            <p><strong>Read Carefully:</strong> A function name must start with a letter or underscore character not with a number, optionally followed by the more letters, numbers, or underscore characters. Function names are case sensitive, just like variable names.</p>
                        </div>
                    </div>
                </div>
                <!--End:Note box-->
				<hr />
				<h2 id="parameters">Adding Parameters to Functions</h2>
				<p>You can specify parameters when you define your function to accept input values at run time. The parameters work like placeholder variables within a function; they're replaced at run time by the values (known as argument) provided to the function at the time of invocation.</p>
				<p>Parameters are set on the first line of the function inside the set of parentheses, like this:</p>
				<div class="shadow">
                    <div class="syntax">
                    <span class="keyword">function</span> functionName(<i>parameter1</i>, <i>parameter2</i>, <i>parameter3</i>) {<br />
                    &nbsp;&nbsp;&nbsp;&nbsp;<span class="comment">// Code to be executed</span><br />
                    } 
                    </div>
                </div>
				<!--Bottom Navigation-->
				<p>The <code>displaySum()</code> function in the following example takes two numbers as arguments, simply add them together and then display the result in the browser.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab71cc.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

                        // Defining function
function displaySum(num1, num2) {
    var total = num1 + num2;
    alert(total);
}
 
// Calling function
displaySum(6, 20); // 0utputs: 26
displaySum(-5, 17); // 0utputs: 12
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
				<p>You can define as many parameters as you like. However for each parameter you specify, a corresponding argument needs to be passed to the function when it is called, otherwise its value becomes <code>undefined</code>. Let's consider the following example:</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab850d.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

                        // Defining function
function showFullname(firstName, lastName) {
    alert(firstName + " " + lastName);
}
 
// Calling function
showFullname("Clark", "Kent"); // 0utputs: Clark Kent
showFullname("John"); // 0utputs: John undefined
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
				<hr />
				<h2>Default Values for Function Parameters <span class="badge js" title="New in ES6">ES6</span></h2>
				<p>With ES6, now you can specify default values to the function parameters. This means that if no arguments are provided to function when it is called these default parameters values will be used. This is one of the most awaited features in JavaScript. Here's an example:</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab8b18.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code4">

                        function sayHello(name = 'Guest') {
    alert('Hello, ' + name);
}

sayHello(); // 0utputs: Hello, Guest
sayHello('John'); // 0utputs: Hello, John
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
				<p>While prior to ES6, to achieve the same we had to write something like this:</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelabd9f6.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code5">

                        function sayHello(name) {
    var name = name || 'Guest'; 
    alert('Hello, ' + name);
}

sayHello(); // 0utputs: Hello, Guest
sayHello('John'); // 0utputs: Hello, John
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
				<p>To learn about other ES6 features, please check out the <a href="js_es6-features.php">JavaScript ES6 features</a> chapter.</p>
				<hr />
				<h2>Returning Values from a Function</h2>
				<p>A function can return a value back to the script that called the function as a result using the <code>return</code> statement. The value may be of any type, including arrays and objects.</p>
				<p>The <code>return</code> statement usually placed as the last line of the function before the closing curly bracket and ends it with a semicolon, as shown in the following example.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab3d9a.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code6">

                        // Defining function
function getSum(num1, num2) {
    var total = num1 + num2;
    return total;
}
 
// Displaying returned value
alert(getSum(6, 20)); // 0utputs: 26
alert(getSum(-5, 17)); // 0utputs: 12
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
				<p>A function <em>can not</em> return multiple values. However, you can obtain similar results by returning an <a href="js_arrays.php">array</a> of values, as demonstrated in the following example.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab60c3.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code7">

                        // Defining function
function divideNumbers(dividend, divisor){
    var quotient = dividend / divisor;
    var arr = [dividend, divisor, quotient];
    return arr;
}
 
// Store returned value in a variable
var all = divideNumbers(10, 2);
 
// Displaying individual values
alert(all[0]); // 0utputs: 10
alert(all[1]); // 0utputs: 2
alert(all[2]); // 0utputs: 5
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
				<hr />
				<h2 id="function-expressions">Working with Function Expressions</h2>
				<p>The syntax that we've used before to create functions is called function declaration. There is another syntax for creating a function that is called a function expression.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab825b.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code8">

                        // Function Declaration
function getSum(num1, num2) {
    var total = num1 + num2;
    return total;
}
 
// Function Expression
var getSum = function(num1, num2) {
    var total = num1 + num2;
    return total;
};
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
				<p>Once function expression has been stored in a variable, the variable can be used as a function:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab2a5f.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code9">

                        var getSum = function(num1, num2) {
    var total = num1 + num2;
    return total;
};
 
alert(getSum(5, 10)); // 0utputs: 15
 
var sum = getSum(7, 25);
alert(sum); // 0utputs: 32
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
                            <p><strong>Read Carefully:</strong> There is no need to put a semicolon after the closing curly bracket in a function declaration. But function expressions, on the other hand, should always end with a semicolon.</p>
                        </div>
                    </div>
                </div>
                <!--End:Note box-->
				<!--Tip Box-->
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
						<div class="tip-box"   style="background-color:#fad28c">
							<p><strong>Important:</strong> In JavaScript functions can be stored in variables, passed into other functions as arguments, passed out of functions as return values, and constructed at run-time.</p>
						</div>
					</div>
				</div>
				<!--End:Tip Box-->
				<p>The syntax of the <em>function declaration</em> and <em>function expression</em> looks very similar, but they differ in the way they are evaluated, check out the following example:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab4e5c.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code10">

                        declaration(); // Outputs: Hi, I'm a function declaration!
function declaration() {
    alert("Hi, I'm a function declaration!");
}
 
expression(); // Uncaught TypeError: undefined is not a function
var expression = function() {
    alert("Hi, I'm a function expression!");
};
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
				<p>As you can see in the above example, the function expression threw an exception when it was invoked before it is defined, but the function declaration executed successfully.</p>
				<p>JavaScript parse declaration function before the program executes. Therefore, it doesn't matter if the program invokes the function before it is defined because JavaScript has <a href="js_hoisting.php">hoisted the function</a> to the top of the current scope behind the scenes. The function expression is not evaluated until it is assigned to a variable; therefore, it is still undefined when invoked.</p>
				<p>ES6 has introduced even shorter syntax for writing function expression which is called <a href="js_es6-features.php#arrow-functions">arrow function</a>, please check out the <a href="js_es6-features.php">JavaScript ES6 features</a> chapter to learn more about it.</p>
				<hr />
				<h2 id="variable-scope">Understanding the Variable Scope</h2>
				<p>However, you can declare the variables anywhere in JavaScript. But, the location of the declaration determines the extent of a variable's availability within the JavaScript program i.e. where the variable can be used or accessed. This accessibility is known as <em>variable scope</em>.</p>
				<p>By default, variables declared within a function have <em>local scope</em> that means they cannot be viewed or manipulated from outside of that function, as shown in the example below:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab4001.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code11">

                        // Defining function
function greetWorld() {
    var greet = "Hello World!";
    alert(greet);
}
 
greetWorld(); // Outputs: Hello World!
 
alert(greet); // Uncaught ReferenceError: greet is not defined
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
                <!--End:Code box-->
				<p>However, any variables declared in a program outside of a function has <em>global scope</em> i.e. it will be available to all script, whether that script is inside a function or outside. Here's an example:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab83c2.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code12">

                        var greet = "Hello World!";
 
 // Defining function
 function greetWorld() {
     alert(greet);
 }
  
 greetWorld();  // Outputs: Hello World!
  
 alert(greet); // Outputs: Hello World!
     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code12"), {
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
				<div class="bottom-link clearfix">
                    <a href="js_loops.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="js_objects.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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