<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="JavaScript Closures">
	  <meta name="keywords" content="javascript,JavaScript Closures">
	  <meta name="author" content="webschooltoday.com">
    <title>JavaScript Closures - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">JavaScript Closures</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_javascript.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="js_strict-mode.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="js_hoisting.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>JavaScript <span>Closures</span></h1>
                <p class="summary">In this tutorial you will learn what JavaScript closure is and how it works.</p>
				<h2>Understanding the JavaScript Closures</h2>
				<p>In the <a href="js_functions.php#variable-scope">JavaScript functions</a> chapter you've learnt that in JavaScript a variable's scope can be <em>global</em> or <em>local</em>. Since ES6 you can also create <a href="js_es6-features.php#let-keyword">block-scoped variables</a> using the <code>let</code> keyword.</p>
				<p>A global variable can be accessed and manipulated anywhere in the program, whereas a local variable can only be accessed and manipulated by the function they are declared in.</p>
				<p>However, there are certain situations when you want a variable to be available throughout the script, but you don't want just any part of your code to be able to change its value accidently.</p>
				<p>Let's see what happens if you try to achieve this using the global variable:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab2136.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

                        // Global variable
var counter  = 0;

// A function dedicated to manipulate the 'counter' variable
function makeCounter() {
    return counter += 1;
}

// Calling the function
makeCounter();
console.log(counter); // Prints: 1

makeCounter();
console.log(counter); // Prints: 2

// Trying to manipulate the 'counter' variable from outside
counter = 10;
console.log(counter); // Prints: 10
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
				<p>As you can see in the above example, the value of the <code>counter</code> variable can be changed from anywhere in the program, without calling the <code>makeCounter()</code> function (<i>line no-17</i>).</p>
				<p>Now, let's try to achieve the same thing with the local variable and see what happens:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabb320.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

                        function makeCounter() {
    // Local variable
    var counter  = 0;
	
    // Manipulating the 'counter' variable
    return counter += 1;
}

// Calling the function
console.log(makeCounter()); // Prints: 1
console.log(makeCounter()); // Prints: 1
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
				<p>In this case the <code>counter</code> variable cannot be manipulated from outside, since it is local to <code>makeCounter()</code> function, but its value will also not increase after subsequent function call, because every time we call the function it reset the <code>counter</code> variable value, which you can clearly see in the above example (<i>line no-11</i>). The JavaScript closure can solve our problem.</p>
				<p>A closure is basically an inner function that has access to the parent function's scope, even after the parent function has finished executing. This is accomplished by creating a function inside another function. Let's take a look at the following example to see how it works:</p>
				<!--Code box-->
                <div class="example break">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabe4e3.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

                        function makeCounter() {
    var counter = 0;
	
    // Nested function
    function make() {
        counter += 1;
        return counter;
    }
    return make;
}

/* Execute the makeCounter() function and store the
returned value in the myCounter variable */
var myCounter = makeCounter();

console.log(myCounter()); // Prints: 1
console.log(myCounter()); // Prints: 2
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
				<p>As you can see in the above example, the inner function <code>make()</code> is returned from the outer function <code>makeCounter()</code>. So the value of the <code>myCounter</code> is the inner <code>make()</code> function (<i>line no-14</i>), and calling <code>myCounter</code> effectively calls <code>make()</code>. In JavaScript functions can assigned to variables, passed as arguments to other functions, can be nested inside other functions, and more.</p>
				<p>You'll also notice that the inner function <code>make()</code> is still able to access the value of <code>counter</code> variable defined in the outer function, even though the <code>makeCounter()</code> function has already finished executing (<i>line no-14</i>). It happens because functions in JavaScript form closures. Closures internally store references to their <em>outer variables</em>, and can access and update their values.</p>
				<p>In the example above, the <code>make()</code> function is a closure whose code refers to the outer variable <code>counter</code>. This implies that whenever the <code>make()</code> function is invoked, the code inside it is able to access and update the <code>counter</code> variable because it is stored in the closure.</p>
				<p>Finally, since the outer function has finished executing, no other part of the code can access or manipulate the <code>counter</code> variable. Only the inner function has exclusive access to it.</p>
				<p>The previous example can also be written using anonymous function expression, like this:</p>
				<!--Code box-->
                <div class="example break">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabad93.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

                        // Anonymous function expression
var myCounter = (function() {
    var counter = 0;
	
    // Nested anonymous function
    return function() {
        counter += 1;
        return counter;
    }
})();

console.log(myCounter()); // Prints: 1
console.log(myCounter()); // Prints: 2
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
							<p><strong>Important:</strong> In JavaScript, all functions have access to the global scope, as well as the scope above them. As JavaScript supports nested functions, this typically means that the nested functions have access to any value declared in a higher scope including its parent function's scope.</p>
						</div>
					</div>
				</div>
				<!--End:Tip Box-->
				<!--Note box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585"
>
                            <p><strong>Read Carefully:</strong> The global variables live as long as your application (i.e. your web page) lives. Whereas, the local variables have a short life span, they are created when the function is invoked, and destroyed as soon as the function is finished executing.</p>
                        </div>
                    </div>
                </div>
                <!--End:Note box-->
				<hr />
				<h2>Creating the Getter and Setter Functions</h2>
				<p>Here we will create a variable <code>secret</code> and protect it from being directly manipulated from outside code using closure. We will also create getter and setter functions to get and set its value.</p>
				<p>Additionally, the setter function will also perform a quick check whether the specified value is a number or not, and if it is not it will not change the variable value.</p>
				<!--Code box-->
                <div class="example break">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabf3fd.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

                        var getValue, setValue;

// Self-executing function
(function() {
    var secret = 0;
    
    // Getter function
    getValue = function() {
        return secret;
    };
    
    // Setter function
    setValue = function(x) {
        if(typeof x === "number") {
            secret = x;
        }
    };
}());

// Calling the functions
getValue(); // Returns: 0
setValue(10);
getValue(); // Returns: 10
setValue(null);
getValue(); // Returns: 10
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
				<!--Tip Box-->
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
						<div class="tip-box"   style="background-color:#fad28c">
							<p><strong>Important:</strong> Self-executing functions are also called <em>immediately invoked function expression (IIFE)</em>, <em>immediately executed function</em>, or <em>self-executing anonymous function</em>.</p>
						</div>
					</div>
				</div>
				<!--End:Tip Box-->
				<!--Bottom Navigation-->
				<div class="bottom-link clearfix">
                    <a href="js_hoisting.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="js_strict-mode.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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