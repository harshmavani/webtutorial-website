<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="How to Define and Call a Function in PHP">
	  <meta name="keywords" content="php,php basic,How to Define and Call a Function in PHP">
	  <meta name="author" content="webschooltoday.com">
    <title>How to Define and Call a Function in PHP - WebSchool Today</title>
	<meta name="description" content="In this tutorial you will learn how to define and call a custom function in PHP to save the repetition of code and make your code much easier to maintain." />    
    <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">How to Define and Call a Function in PHP</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_php.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="bp_math-operations.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="bp_loops.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>PHP <span>Functions</span></h1>
                <p class="summary">In this tutorial you will learn how to create your own custom functions in PHP.</p>
                <h2>PHP Built-in Functions</h2>
				<p>A function is a self-contained block of code that performs a specific task.</p>
                <p>PHP has a huge collection of internal or built-in functions that you can call directly within your PHP scripts to perform a specific task, like <code>gettype()</code>, <code>print_r()</code>, <code>var_dump</code>, etc.</p>
                <p class="space">Please check out PHP reference section for a complete list of useful PHP built-in functions.</p>
                <h2>PHP User-Defined Functions</h2>
                <p>In addition to the built-in functions, PHP also allows you to define your own functions. It is a way to create reusable code packages that perform specific tasks and can be kept and maintained separately form main program. Here are some advantages of using functions:</p>
                <ul>
                    <li><strong>Functions reduces the repetition of code within a program</strong> &mdash; Function allows you to extract commonly used block of code into a single component. Now you can perform the same task by calling this function wherever you want within your script without having to copy and paste the same block of code again and again.</li>
                    <li><strong>Functions makes the code much easier to maintain</strong> &mdash; Since a function created once can be used many times, so any changes made inside a function automatically implemented at all the places without touching the several files.</li>
                    <li><strong>Functions makes it easier to eliminate the errors</strong> &mdash; When the program is subdivided into functions, if any error occur you know exactly what function causing the error and where to find it. Therefore, fixing errors becomes much easier.</li>
                    <li><strong>Functions can be reused in other application</strong> &mdash; Because a function is separated from the rest of the script, it's easy to reuse the same function in other applications just by including the php file containing those functions.</li>
                </ul>
				<p>The following section will show you how easily you can define your own function in PHP.</p>
                <hr />
                <h2>Creating and Invoking Functions</h2>
                <p>The basic syntax of creating a custom function can be give with:</p>
                <div class="shadow">
                    <div class="syntax">
                    <span class="keyword">function</span> functionName(){<br />
                    &nbsp;&nbsp;&nbsp;&nbsp;<span class="comment">// Code to be executed</span><br />
                    } 
                    </div>
                </div>
                <p>The declaration of a user-defined function start with the word <code>function</code>, followed by the name of the function you want to create followed by parentheses i.e. <code>()</code> and finally place your function's code between curly brackets <code>{}</code>.</p>
                <p>This is a simple example of an user-defined function, that display today's date:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab5d7c.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

&lt;?php
// Defining function
function whatIsToday(){
    echo "Today is " . date('l', mktime());
}
// Calling function
whatIsToday();
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
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585"
>
                            <p><strong>Read Carefully:</strong> A function name must start with a letter or underscore character not with a number, optionally followed by the more letters, numbers, or underscore characters. Function names are case-insensitive.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Functions with Parameters</h2>
                <p>You can specify parameters when you define your function to accept input values at run time.
                The parameters work like placeholder variables within a function; they're replaced at run time by the values (known as argument) provided to the function at the time of invocation. </p>
                <div class="shadow">
                    <div class="syntax">
                    <span class="keyword">function</span> myFunc($oneParameter, $anotherParameter){<br />
                    &nbsp;&nbsp;&nbsp;&nbsp;<span class="comment">// Code to be executed</span><br />
                    } 
                    </div>
                </div>
                <p>You can define as many parameters as you like. However for each parameter you specify, a corresponding argument needs to be passed to the function when it is called.</p>
                <p>The <code>getSum()</code> function in following example takes two integer values as arguments, simply add them together and then display the result in the browser.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelaba27b.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

&lt;?php
// Defining function
function getSum($num1, $num2){
  $sum = $num1 + $num2;
  echo "Sum of the two numbers $num1 and $num2 is : $sum";
}
 
// Calling function
getSum(10, 20);
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
                <p>The output of the above code will be:</p>
                <div class="output-box">
                    Sum of the two numbers 10 and 20 is : 30
                </div>
                <div class="color-box">
                    <div class="shadow">
                    <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                    <div class="tip-box"   style="background-color:#fad28c">
                        <p><strong>Important:</strong> An argument is a value that you pass to a function, and a parameter is the variable within the function that receives the argument. However, in common usage these terms are interchangeable i.e. an argument is a parameter is an argument.</p>
                    </div>
                    </div>
                </div>
                <hr />
                <h2>Functions with Optional Parameters and Default Values</h2>
                <p>You can also create functions with optional parameters &mdash; just insert the parameter name, followed by an equals (<code>=</code>) sign, followed by a default value, like this.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab2f52.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

&lt;?php
// Defining function
function customFont($font, $size=1.5){
    echo "&lt;p style=\"font-family: $font; font-size: {$size}em;\"&gt;Hello, world!&lt;/p&gt;";
}
 
// Calling function
customFont("Arial", 2);
customFont("Times", 3);
customFont("Courier");
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
                <p>As you can see the third call to <code>customFont()</code> doesn't include the second argument. This causes PHP engine to use the default value for the <code>$size</code> parameter which is 1.5.</p>
                <hr />
                <h2>Returning Values from a Function</h2>
                <p>A function can return a value back to the script that called the function using the return statement. The value may be of any type, including arrays and objects.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabf8ca.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

&lt;?php
// Defining function
function getSum($num1, $num2){
    $total = $num1 + $num2;
    return $total;
}
 
// Printing returned value
echo getSum(5, 10); // Outputs: 15
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
				<p>A function can not return multiple values. However, you can obtain similar results by returning an array, as demonstrated in the following example.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab50bf.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

&lt;?php
// Defining function
function divideNumbers($dividend, $divisor){
    $quotient = $dividend / $divisor;
    $array = array($dividend, $divisor, $quotient);
    return $array;
}
 
// Assign variables as if they were an array
list($dividend, $divisor, $quotient) = divideNumbers(10, 2);
echo $dividend;  // Outputs: 10
echo $divisor;   // Outputs: 2
echo $quotient;  // Outputs: 5
?&gt;

	 </textarea>
		                            <script>
									var editor = CodeMirror.fromTextArea(document.getElementById("code5"), {
										mode: "text/html",
										tabMode: "indent",
										styleActiveLine: true,
										lineNumbers: true,
										lineWrapping: true
									});

								</script>                    </div>
                </div>
				<hr />
				<h2>Passing Arguments to a Function by Reference</h2>
				<p>In PHP there are two ways you can pass arguments to a function: <em>by value</em> and <em>by reference</em>. By default, function arguments are passed by value so that if the value of the argument within the function is changed, it does not get affected outside of the function. However, to allow a function to modify its arguments, they must be passed by reference.</p>
				<p>Passing an argument by reference is done by prepending an ampersand (<code>&amp;</code>) to the argument name in the function definition, as shown in the example below:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabe308.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code6">

&lt;?php
/* Defining a function that multiply a number
by itself and return the new value */
function selfMultiply(&amp;$number){
    $number *= $number;
    return $number;
}
 
$mynum = 5;
echo $mynum; // Outputs: 5
 
selfMultiply($mynum);
echo $mynum; // Outputs: 25
?&gt;

	 </textarea>
		                            <script>
									var editor = CodeMirror.fromTextArea(document.getElementById("code6"), {
										mode: "text/html",
										tabMode: "indent",
										styleActiveLine: true,
										lineNumbers: true,
										lineWrapping: true
									});

								</script>                    </div>
                </div>
				<hr />
				<h2>Understanding the Variable Scope</h2>
				<p>However, you can declare the variables anywhere in a PHP script. But, the location of the declaration determines the extent of a variable's visibility within the PHP program i.e. where the variable can be used or accessed. This accessibility is known as <em>variable scope</em>.</p>
				<p>By default, variables declared within a function are local and they cannot be viewed or manipulated from outside of that function, as demonstrated in the example below:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabd76c.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code7">

&lt;?php
// Defining function
function test(){
    $greet = "Hello World!";
    echo $greet;
}
 
test(); // Outputs: Hello World!
 
echo $greet; // Generate undefined variable error
?&gt;

	 </textarea>
		                            <script>
									var editor = CodeMirror.fromTextArea(document.getElementById("code7"), {
										mode: "text/html",
										tabMode: "indent",
										styleActiveLine: true,
										lineNumbers: true,
										lineWrapping: true
									});

								</script>                    </div>
                </div>
				<p>Similarly, if you try to access or import an outside variable inside the function, you'll get an undefined variable error, as shown in the following example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelaba552.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code8">

&lt;?php
$greet = "Hello World!";
 
// Defining function
function test(){
    echo $greet;
}
 
test();  // Generate undefined variable error
 
echo $greet; // Outputs: Hello World!
?&gt;

	 </textarea>
		                            <script>
									var editor = CodeMirror.fromTextArea(document.getElementById("code8"), {
										mode: "text/html",
										tabMode: "indent",
										styleActiveLine: true,
										lineNumbers: true,
										lineWrapping: true
									});

								</script>                    </div>
                </div>
				<p>As you can see in the above examples the variable declared inside the function is not accessible from outside, likewise the variable declared outside of the function is not accessible inside of the function. This separation reduces the chances of variables within a function getting affected by the variables in the main program.</p>
                <div class="color-box space">
                    <div class="shadow">
						<div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
						<div class="tip-box"   style="background-color:#fad28c">
							<p><strong>Important:</strong> It is possible to reuse the same name for a variable in different functions, since local variables are only recognized by the function in which they are declared.</p>
						</div>
                    </div>
                </div>
				<h2>The global Keyword</h2>
				<p>There may be a situation when you need to import a variable from the main program into a function, or vice versa. In such cases, you can use the <code>global</code> keyword before the variables inside a function. This keyword turns the variable into a global variable, making it visible or accessible both inside and outside the function, as show in the example below:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab515e.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code9">

&lt;?php
$greet = "Hello World!";
 
// Defining function
function test(){
    global $greet;
    echo $greet;
}
 
test(); // Outpus: Hello World!
echo $greet; // Outpus: Hello World!
 
// Assign a new value to variable
$greet = "Goodbye";
 
test(); // Outputs: Goodbye
echo $greet; // Outputs: Goodbye
?&gt;

	 </textarea>
		                            <script>
									var editor = CodeMirror.fromTextArea(document.getElementById("code9"), {
										mode: "text/html",
										tabMode: "indent",
										styleActiveLine: true,
										lineNumbers: true,
										lineWrapping: true
									});

								</script>                    </div>
                </div>
				<p>You will learn more about visibility and access control in <a href="bp_classes-and-objects.php">PHP classes and objects</a> chapter.</p>
				<hr />
				<h2>Creating Recursive Functions</h2>
				<p>A recursive function is a function that calls itself again and again until a condition is satisfied. Recursive functions are often used to solve complex mathematical calculations, or to process deeply nested structures e.g., printing all the elements of a deeply nested array.</p>
				<p>The following example demonstrates how a recursive function works.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab9e82.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        <textarea id="code10">

&lt;?php
// Defining recursive function
function printValues($arr) {
    global $count;
    global $items;
    
    // Check input is an array
    if(!is_array($arr)){
        die("ERROR: Input is not an array");
    }
    
    /*
    Loop through array, if value is itself an array recursively call the
    function else add the value found to the output items array,
    and increment counter by 1 for each value found
    */
    foreach($arr as $a){
        if(is_array($a)){
            printValues($a);
        } else{
            $items[] = $a;
            $count++;
        }
    }
    
    // Return total count and values found in array
    return array('total' => $count, 'values' => $items);
}
 
// Define nested array
$species = array(
    "birds" => array(
        "Eagle",
        "Parrot",
        "Swan"
    ),
    "mammals" => array(
        "Human",
        "cat" => array(
            "Lion",
            "Tiger",
            "Jaguar"
        ),
        "Elephant",
        "Monkey"
    ),
    "reptiles" => array(
        "snake" => array(
            "Cobra" => array(
                "King Cobra",
                "Egyptian cobra"
            ),
            "Viper",
            "Anaconda"
        ),
        "Crocodile",
        "Dinosaur" => array(
            "T-rex",
            "Alamosaurus"
        )
    )
);
 
// Count and print values in nested array
$result = printValues($species);
echo $result['total'] . ' value(s) found: ';
echo implode(', ', $result['values']);
?&gt;

	 </textarea>
		                            <script>
									var editor = CodeMirror.fromTextArea(document.getElementById("code10"), {
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
                            <p><strong>Read Carefully:</strong> Be careful while creating recursive functions, because if code is written improperly it may result in an infinite loop of function calling.</p>
                        </div>
                    </div>
                </div>
                <div class="bottom-link clearfix">
                    <a href="bp_loops.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="bp_math-operations.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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