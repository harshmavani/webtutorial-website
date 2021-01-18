<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="JavaScript Strict Mode">
	  <meta name="keywords" content="javascript,js,JavaScript Strict Mode">
	  <meta name="author" content="webschooltoday.com">
    <title>JavaScript Strict Mode - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">JavaScript Strict Mode</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_javascript.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="js_json-parsing.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="js_closures.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>JavaScript <span>Strict Mode</span></h1>
                <p class="summary">In this tutorial you will learn how to execute your code in strict mode in JavaScript.</p>
				<h2>What is Strict Mode</h2>
				<p>The <em>strict mode</em> was introduced in ECMAScript 5 (ES5). It is a semantically stricter or restricted version of JavaScript language that produces errors for those mistakes that are handled silently otherwise. For example, in <em>non-strict</em> mode if you initialize a variable without declaring it using the <code>var</code> keyword (e.g.&nbsp;<code>x = 5;</code>), JavaScript interpreter will assume that you were referring to a global variable and if no such variable existed, it will automatically create one.</p>
				<p class="space">Also, features that are deprecated may also generate errors in strict mode. Hence, strict mode reduces bugs, improves security and overall performance of your application.</p>
				<h2>Enabling Strict Mode</h2>
				<p>To enable strict mode all you need to do is just add the string <code>"use strict"</code> at the beginning of your script, as shown in the following example:</p>
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab1727-2.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code1">
						"use strict";

// All your code goes here
x = 5; // ReferenceError: x is not defined
console.log(x);
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
				<p>If you add the <code>"use strict"</code> directive as the first line of your JavaScript program, strict mode applies to the entire script. But, you can also turn on strict mode only within a function, like this:</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab598c.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code2">

						x = 5;
console.log(x); // 5

function sayHello() {
    "use strict";
    str = "Hello World!"; // ReferenceError: str is not defined
    console.log(str);
}
sayHello();
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
				<!--Note box-->
				<div class="color-box">
					<div class="shadow">
						<div title="Important Notes" class="info-tab note-icon"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585"
>
							<p><strong>Read Carefully:</strong> The <code>"use strict"</code> directive is only recognized at the beginning of a script or a function. All modern browsers support <code>"use strict"</code> directive except Internet Explorer 9 and lower versions. Additionally, the browsers that don't support the <code>"use strict"</code> directive silently ignore it and parse the JavaScript in non-strict mode.</p>
						</div>
					</div>
				</div>
				<!--End:Note box-->
				<hr />
				<h2>General Restrictions in Strict Mode</h2>
				<p>Strict mode changes both syntax and runtime behavior. In the following sections, we will look at the general restrictions that are enforced in the strict mode:</p>
				<h3>Undeclared Variables are Not Allowed</h3>
				<p>As you already know, in strict mode, all variables must be declared. if you assign a value to an identifier that is not a declared variable, a ReferenceError will be thrown.</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab9f0f.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code3">

						"use strict";

function doSomething() {
    msg = "Hi, there!"; // ReferenceError: msg is not defined
    return msg;
}
console.log(doSomething());
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
				<h3>Deleting a Variable or a Function is Not Allowed</h3>
				<p>In strict mode, if you try to delete a variable or a function, a syntax error will be thrown. Whereas, in non-strict mode, such attempt fails silently and the delete expression evaluates to <code>false</code>.</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab2eb1.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code4">

						"use strict";

var person = {name: "Peter", age: 28};
delete person; // SyntaxError
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
				<p>Similarly, when you try to delete a function in strict mode you will get an syntax error:</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab0025.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code5">

						"use strict";

function sum(a, b) {
    return a + b;
}
delete sum; // SyntaxError
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
				<h3>Duplicating a Parameter Name is Not Allowed</h3>
				<p>In strict mode, a syntax error will be thrown, if a function declaration has two or more parameters with the same name. In non-strict mode, no error occurs.</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelabc7b6.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code6">

						"use strict";

function square(a, a) { // SyntaxError
    return a * a;
}
console.log(square(2, 2));
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
                <h3>The eval Method Cannot Alter Scope</h3>
				<p>In strict mode, for security reasons, code passed to <code>eval()</code> cannot declare/modify variables or define functions in the surrounding scope as it can in non-strict mode.</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelabcb5d.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code7">

						"use strict";

eval("var x = 5;");
console.log(x); // ReferenceError: x is not defined
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
                <h3>The eval and arguments Cannot be Used as Identifiers</h3>
				<p>In strict mode, the names <code>eval</code> and <code>arguments</code> are treated like keywords, so they cannot be used as variable names, function names, or as function parameter names, etc.</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab2441.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code8">

						"use strict";

var eval = 10; // SyntaxError
console.log(eval);
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
                <h3>The with Statement is Not Allowed</h3>
				<p>In strict mode, the <code>with</code> statement is not allowed. The <code>with</code> statement adds the properties and methods of the <a href="js_objects.php">object</a> to the current scope. So, the statements nested inside the <code>with</code> statement can call the properties and methods of the object directly without referring it.</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelabc48c.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code9">

						"use strict";

// Without with statement
var radius1 = 5;
var area1 = Math.PI * radius1 * radius1;

// Using with statement
var radius2 = 5;
with(Math) { // SyntaxError
    var area2 = PI * radius2 * radius2;
} 
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
                <h3>Writing to a Read-only Property is Not Allowed</h3>
				<p>In strict mode, assigning value to a non-writable property, a get-only property or a non-existing property will throw an error. In non-strict mode, these attempts fail silently.</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab55ed.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code10">

						"use strict";

var person = {name: "Peter", age: 28};

Object.defineProperty(person, "gender", {value: "male", writable: false});
person.gender = "female"; // TypeError
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
                <h3>Adding a New Property to a Non-extensible Object is Not Allowed</h3>
				<p>In strict mode, attempts to create new properties on non-extensible or non-existing objects will also throw an error. But in non-strict mode, these attempts fail silently.</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab9e21.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code11">

						"use strict";

var person = {name: "Peter", age: 28};

console.log(Object.isExtensible(person)); // true
Object.freeze(person); // lock down the person object
console.log(Object.isExtensible(person)); // false
person.gender = "male"; // TypeError
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
                <h3>Octal Numbers are Not Allowed</h3>
				<p>In strict mode, octal numbers (numbers prefixed with a zero e.g. 010, 0377) are not allowed. Though, it is supported in all browsers in non-strict mode. However, in ES6 octal numbers are supported by prefixing a number with <code>0o</code> i.e. 0o10, 0o377, etc.</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab51f1.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code12">

						"use strict";

var x = 010; // SyntaxError
console.log(parseInt(x));
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
				<p>You can clearly see in the above examples how strict mode can help you prevent making common mistakes that often go unnoticed while writing a JavaScript program.</p>
				<h3>Keywords Reserved for Future are Not Allowed</h3>
				<p>As you already know from the previous chapters, the <em>reserved words</em> cannot be used as identifier (variable names, function names, and loop labels) in a JavaScript program. In addition to that the strict mode also imposes restrictions on uses of those keywords that are reserved for future.</p>
				<p>As per the latest ECMAScript 6 (or ES6) standards, these keywords are reserved keywords when they are found in strict mode code: <code>await</code>, <code>implements</code>, <code>interface</code>, <code>package</code>, <code>private</code>, <code>protected</code>, <code>public</code>, and <code>static</code>. However, for optimal compatibility you should avoid using the reserved keywords as variable names or function names in your program.</p>
				<!--Tip Box-->
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
						<div class="tip-box"   style="background-color:#fad28c">
							<p><strong>Important:</strong> Reserved words, which are also called keywords, are special words that are part of the JavaScript language syntax, for example, <code>var</code>, <code>if</code>, <code>for</code>, <code>function</code>, etc. See the <a href="../info-javascript/js_reserved-keywords.php">JS reserved keywords reference</a> for a complete list of all reserved words in JavaScript.</p>
						</div>
					</div>
				</div>
				<!--End:Tip Box-->
				<!--Bottom Navigation-->
				<div class="bottom-link clearfix">
                    <a href="js_closures.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="js_json-parsing.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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