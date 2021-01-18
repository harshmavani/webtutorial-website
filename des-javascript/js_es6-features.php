<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="JavaScript ES6 Features">
	  <meta name="keywords" content="javascript,js,JavaScript ES6 Features">
	  <meta name="author" content="webschooltoday.com">
    <title>JavaScript ES6 Features - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">JavaScript ES6 Features</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_javascript.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="../js_examples.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="js_ajax.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>JavaScript <span>ES6 Features</span></h1>
                <p class="summary">In this tutorial you will learn about the new features in latest version of JavaScript.</p>
				<h2>What is ECMAScript 6 (or ES6)</h2>
				<p>ECMAScript 2015 (or ES6) is the sixth and major edition of the ECMAScript language specification standard. It defines the standard for the JavaScript implementation.</p>
				<p class="space">ES6 brought significant changes to the JavaScript language. It introduces several new features such as, block-scoped variables, new loop for iterating over arrays and objects, template literals, and many other enhancements to make JavaScript programming easier and more fun. In this chapter, we will discuss some of the best ES6 features that you can use in your everyday JavaScript coding.</p>
				<h2 id="let-keyword">The <code>let</code> Keyword</h2>
				<p>ES6 introduces the new <code>let</code> keyword for declaring variables. Prior to ES6, the only way to declare a variable in JavaScript was the <code>var</code> keyword. Let's see what's the difference between them is.</p>
				<p>There are two critical differences between the <code>var</code> and <code>let</code>. Variables declared with the <code>var</code> keyword are <a href="js_functions.php#variable-scope">function-scoped</a> and <a href="js_hoisting.php">hoisted</a> at the top within its scope, whereas variables declared with <code>let</code> keyword are block-scoped (<code>{}</code>) and they are not hoisted.</p>
				<p>Block scoping simply means that a new scope is created between a pair of curly brackets i.e. <code>{}</code>. Therefore, if you declare a variable with the <code>let</code> keyword inside a loop, it does not exist outside of the loop, as demonstrated in the following example:</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab2b9f.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code1">

						// ES6 syntax
for(let i = 0; i < 5; i++) {
    console.log(i); // 0,1,2,3,4
}
console.log(i); // undefined


// ES5 syntax
for(var i = 0; i < 5; i++) {
    console.log(i); // 0,1,2,3,4
}
console.log(i); // 5
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
				<p>As you can see in the above example the variable <code>i</code> in the first block is not accessible outside the <code>for</code> loop. This also enables us to reuse the same variable name multiple times as its scope is limited to the block (<code>{}</code>), which results in less variable declaration and more cleaner code.</p>
				<hr />
				<h2>The <code>const</code> Keyword</h2>
				<p>The new <code>const</code> keyword makes it possible to define constants. Constants are read-only, you cannot reassign new values to them. They are also block-scoped like <code>let</code>.</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab37a0.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code2">

						const PI = 3.14;
console.log(PI); // 3.14

PI = 10; // error
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
				<p>However, you can still change object properties or array elements:</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab6b29.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code3">

						// Changing object property value
const PERSON = {name: "Peter", age: 28};
console.log(PERSON.age); // 28
PERSON.age = 30;
console.log(PERSON.age); // 30

// Changing array element
const COLORS = ["red", "green", "blue"];
console.log(COLORS[0]); // red
COLORS[0] = "yellow";
console.log(COLORS[0]); // yellow
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
				<h2>The <code>for...of</code> Loop</h2>
				<p>The new <code>for...of</code> loop allows us to iterate over arrays or other iterable objects very easily. Also, the code inside the loop is executed for each element of the iterable object. Here's an example:</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab71ab.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code4">

						// Iterating over array
let letters = ["a", "b", "c", "d", "e", "f"];

for(let letter of letters) {
    console.log(letter); // a,b,c,d,e,f
}

// Iterating over string
let greet = "Hello World!";

for(let character of greet) {
    console.log(character); // H,e,l,l,o, ,W,o,r,l,d,!
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
				<p>The <code>for...of</code> loop doesn't work with objects because they are not iterable. If you want to iterate over the properties of an object you can use the <a href="js_loops.php#for-in"><code>for-in</code></a> loop.</p>
				<hr />
				<h2 id="template-literals">Template Literals</h2>
				<p>Template literals provide an easy and clean way create multi-line strings and perform string interpolation. Now we can embed variables or expressions into a string at any spot without any hassle.</p>
				<p>Template literals are created using back-tick (<code>` `</code>) (grave accent) character instead of the usual double or single quotes. Variables or expressions can be placed inside the string using the <code>${...}</code> syntax. Compare the following examples and see how much useful it is:</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab4729.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code5">

						// Simple multi-line string
let str = `The quick brown fox
    jumps over the lazy dog.`;

// String with embedded variables and expression
let a = 10;
let b = 20;
let result = `The sum of ${a} and ${b} is ${a+b}.`;
console.log(result); // The sum of 10 and 20 is 30.
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
				<p>While in ES5, to achieve the same we had to write something like this:</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelabc960.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code6">

						// Multi-line string
var str = 'The quick brown fox\n\t'
    + 'jumps over the lazy dog.';

// Creating string using variables and expression
var a = 10;
var b = 20;
var result = 'The sum of ' + a + ' and ' + b + ' is ' + (a+b) + '.';
console.log(result); // The sum of 10 and 20 is 30.
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
				<hr />
				<h2>Default Values for Function Parameters</h2>
				<p>Now, in ES6 you can specify default values to the <a href="js_functions.php#parameters">function parameters</a>. This means that if no arguments are provided to function when it is called these default parameters values will be used. This is one of the most awaited features in JavaScript. Here's an example:</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab8b18.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code7">

						function sayHello(name='World') {
    return `Hello ${name}!`;
}

console.log(sayHello()); // Hello World!
console.log(sayHello('John')); // Hello John!
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
				<p>While in ES5, to achieve the same we had to write something like this:</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelabd9f6.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code8">

						function sayHello(name) {
    var name = name || 'World'; 
    return 'Hello ' +  name + '!';
}

console.log(sayHello()); // Hello World!
console.log(sayHello('John')); // Hello John!
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
				<hr />
				<h2 id="arrow-functions">Arrow Functions</h2>
				<p>Arrow Functions are another interesting feature in ES6. It provides a more concise syntax for writing <a href="js_functions.php#function-expressions">function expressions</a> by opting out the <code>function</code> and <code>return</code> keywords.</p>
				<p>Arrow functions are defined using a new syntax, the fat arrow (<code>=&gt;</code>) notation. Let's see how it looks:</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab89c1.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code9">

						// Function Expression
var sum = function(a, b) {
    return a + b;
}
console.log(sum(2, 3)); // 5

// Arrow function
var sum = (a, b) => a + b;
console.log(sum(2, 3)); // 5
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
				<p>As you can see thre is no <code>function</code> and <code>return</code> keyword in arrow function declaration.</p>
				<p>You can also skip the parentheses i.e. <code>()</code> in case when there is exactly one parameter, but you will always need to use it when you have zero or more than one parameter.</p>
				<p>Additionally, if there's more than one expression in the function body, you need to wrap it braces (<code>{}</code>). In this case you also need to use the <code>return</code> statement to return a value.</p>
				<p>There are several variations of how you can write arrow functions. Here are the most commonly used:</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelabf6f1.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code10">

						// Single parameter, single statement
var greet = name => alert("Hi " + name + "!");
greet("Peter"); // Hi Peter!

// Multiple arguments, single statement
var multiply = (x, y) => x * y;
alert(multiply(2, 3)); // 6


// Single parameter, multiple statements
var test = age => {
    if(age > 18) {
        alert("Adult");
    } else {
        alert("Teenager");
    }
}
test(21); // Adult

// Multiple parameters, multiple statements
var divide = (x, y) => {
    if(y != 0) {
        return x / y;
    }
}
alert(divide(10, 2)); // 5

// No parameter, single statement
var hello = () => alert('Hello World!');
hello(); // Hello World!
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
				<p>There is an important difference between regular functions and arrow functions. Unlike a normal function, an arrow function does not have its own <code>this</code>, it takes <code>this</code> from the outer function where it is defined. In JavaScript, <code>this</code> is the current execution context of a function.</p>
				<p>To understand this clearly, let's check out the following examples:</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab7c51.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code11">

						function Person(nickname, country) {
    this.nickname = nickname;
    this.country = country;
    
    this.getInfo = function() {
        // Outer function context (Person object)
        return function() {
            // Inner function context (Global object 'Window')
            alert(this.constructor.name); // Window
            alert("Hi, I'm " + this.nickname + " from " + this.country);
        };
    }
}

var p = new Person('Rick', 'Argentina');
var printInfo = p.getInfo();
printInfo(); // Hi, I'm undefined from undefined
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
				<p>Rewriting the same example using ES6 template literals and arrow function:</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelabaec0.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code12">

						function Person(nickname, country) {
    this.nickname = nickname;
    this.country = country;
    
    this.getInfo = function() {
        // Outer function context (Person object)
        return () => {
            // Inner function context (Person object)
            alert(this.constructor.name); // Person
            alert(`Hi, I'm ${this.nickname} from ${this.country}`);
        };
    }
}

let p = new Person('Rick', 'Argentina');
let printInfo = p.getInfo();
printInfo(); // Hi, I'm Rick from Argentina
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
				<p>As you can clearly see, the <code>this</code> keyword in the above example refers to the context of the function enclosing the arrow function which is Person object (<i>line no-9</i>), unlike the previous example where it referred to the global object <a href="js_window.php">Window</a> (<i>line no-9</i>).</p>
				<hr />
				<h2>Classes</h2>
				<p>In ECMAScript 5 and earlier, classes were never existed in JavaScript. Classes are introduced in ES6 which looks similar to classes in other object oriented languages, such as Java, PHP, etc., however they do not work exactly the same way. ES6 classes make it easier to create objects, implement inheritance by using the <code>extends</code> keyword, and reuse the code.</p>
				<p>In ES6 you can declare a class using the new <code>class</code> keyword followed by a class-name. By convention class names are written in TitleCase (i.e. capitalizing the first letter of each word).</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab21c8.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code13">

						class Rectangle {
    // Class constructor
    constructor(length, width) {
        this.length = length;
        this.width = width;
    }
    
    // Class method
    getArea() {
        return this.length * this.width;
    }
}

// Square class inherits from the Rectangle class
class Square extends Rectangle {
    // Child class constructor
    constructor(length) {
        // Call parent's constructor
        super(length, length);
    }
    
    // Child class method
    getPerimeter() {
        return 2 * (this.length + this.width);
    }
}

let rectangle = new Rectangle(5, 10);
alert(rectangle.getArea()); // 50

let square = new Square(5);
alert(square.getArea()); // 25
alert(square.getPerimeter()); // 20

alert(square instanceof Square); // true
alert(square instanceof Rectangle); // true
alert(rectangle instanceof Square); // false
     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code13"), {
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
				<p>In the above example the Square class inherits from Rectangle using the <code>extends</code> keyword. Classes that inherit from other classes are referred to as derived classes or child classes.</p>
				<p>Also, you must call <code>super()</code> in the child class constructor before accessing the context (<code>this</code>). For instance, if you omit the <code>super()</code> and call the <code>getArea()</code> method on square object it will result in an error, since <code>getArea()</code> method require access to <code>this</code> keyword.</p>
				<!--Note box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585"
>
                            <p><strong>Raed Carefully:</strong> Unlike function declarations, class declarations are not hoisted. Class declarations reside in the temporal dead zone (TDZ) until the execution reaches the point of class declaration, similar to <code>let</code> and <code>const</code> declarations. Therefore, you need to declare your class before accessing it, otherwise a ReferenceError will occur.</p>
                        </div>
                    </div>
                </div>
                <!--End:Note box-->
				<hr />
				<h2>Modules</h2>
				<p>Prior to ES6, there were no native support for modules in JavaScript. Everything inside a JavaScript application, for example variables across different JavaScript files, shared the same scope.</p>
				<p>ES6 introduces file based module, in which each module is represented by a separate <code>.js</code> file. Now, you can use the <code>export</code> or <code>import</code> statement in a module to export or import variables, functions, classes or any other entity to/from other modules or files.</p>
				<p>Let's create a module i.e. a JavaScript file "main.js" and place the following code in it:</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="javascript:void(0);" target="_blank" class="try-btn disabled" title="Disabled">Try this code <span>&raquo;</span></a></div>
						<textarea id="code14">

						let greet = "Hello World!";
const PI = 3.14; 

function multiplyNumbers(a, b) {
    return a * b;
}

// Exporting variables and functions
export { greet, PI, multiplyNumbers };
     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code14"), {
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
				<p>Now create another JavaScript file "app.js" with the following code:</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="javascript:void(0);" target="_blank" class="try-btn disabled" title="Disabled">Try this code <span>&raquo;</span></a></div>
						<textarea id="code15">

						import { greet, PI, multiplyNumbers } from './main.js';

alert(greet); // Hello World!
alert(PI); // 3.14
alert(multiplyNumbers(6, 15)); // 90
     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code15"), {
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
				<p>Finally create a HTML file "test.php" and with the following code and open this HTML file in your browser using HTTP protocol (or use localhost). Also notice the <code>type="module"</code> on script tag.</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab0d9a.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code16">

						<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>ES6 Module Demo</title>
</head>
<body>
    <script type="module" src="app.js"></script>
</body>
</html>
     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code16"), {
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
				<h2 id="rest-operator">The Rest Parameters</h2>
				<p>ES6 introduces rest parameters that allow us to pass an arbitrary number of parameters to a function in the form of an array. This is particularly helpful in situations when you want to pass parameters to a function but you have no idea how many you will need.</p>
				<p>A rest parameter is specified by prefixing a named parameter with rest operator (<code>...</code>) i.e. three dots. Rest parameter can only be the last one in the list of parameters, and there can only be one rest parameter. Take a look at the following example, to see how it works:</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab6987.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code17">

						function sortNames(...names) {
    return names.sort();
}

alert(sortNames("Sarah", "Harry", "Peter")); // Harry,Peter,Sarah
alert(sortNames("Tony", "Ben", "Rick", "Jos")); // John,Jos,Rick,Tony
     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code17"), {
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
				<p>When the rest parameter is the only parameter in a function, it gets all the arguments passed to the function, otherwise it gets the rest of the arguments that exceeds the number of named parameters.</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelabc836.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code18">

						function myFunction(a, b, ...args) {
    return args;
}

alert(myFunction(1, 2, 3, 4, 5)); // 3,4,5
alert(myFunction(-7, 5, 0, -2, 4.5, 1, 3)); // 0,-2,4.5,1,3
     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code18"), {
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
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585"
>
                            <p><strong>Read Carefully:</strong> Don't confuse the term rest parameters with the REST (REpresentational State Transfer). This has nothing to do with RESTful web services.</p>
                        </div>
                    </div>
                </div>
                <!--End:Note box-->
				<hr />
				<h2 id="spread-operator">The Spread Operator</h2>
				<p>The spread operator, which is also denoted by (<code>...</code>), performs the exact opposite function of the rest operator. The spread operator spreads out (i.e. splits up) an array and passes the values into the specified function, as shown in the following example:</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab7387.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code19">

						function addNumbers(a, b, c) {
    return a + b + c;
}

let numbers = [5, 12, 8];

// ES5 way of passing array as an argument of a function
alert(addNumbers.apply(null, numbers)); // 25

// ES6 spread operator
alert(addNumbers(...numbers)); // 25
     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code19"), {
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
				<p>The spread operator can also be used to insert the elements of an array into another array without using the array methods like <code>push()</code>, <code>unshift()</code> <code>concat()</code>, etc.</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab0a3d.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code20">

						let pets = ["Cat", "Dog", "Parrot"];
let bugs = ["Ant", "Bee"];

// Creating an array by inserting elements from other arrays
let animals = [...pets, "Tiger", "Wolf", "Zebra", ...bugs];

alert(animals); // Cat,Dog,Parrot,Tiger,Wolf,Zebra,Ant,Bee
     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code20"), {
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
				<h2>Destructuring Assignment</h2>
				<p>The destructuring assignment is an expression that makes it easy to extract values from arrays, or properties from objects, into distinct variables by providing a shorter syntax.</p>
				<p>There are two kinds of destructuring assignment expressions&mdash;the <em>array</em> and <em>object</em> destructuring assignment. Well, let's see how each of them exactly works:</p>
				<h3>The array destructuring assignment</h3>
				<p>Prior to ES6, to get an individual value of an array we need to write something like this:</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab4a76.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code21">

						// ES5 syntax
var fruits = ["Apple", "Banana"];

var a = fruits[0];
var b = fruits[1];
alert(a); // Apple
alert(b); // Banana
     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code21"), {
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
				<p>In ES6, we can do the same thing in just one line using the array destructuring assignment:</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab1282.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code22">

						// ES6 syntax
let fruits = ["Apple", "Banana"];

let [a, b] = fruits; // Array destructuring assignment

alert(a); // Apple
alert(b); // Banana
     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code22"), {
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
				<p>You can also use <a href="#rest-operator">rest operator</a> in the array destructuring assignment, as shown here:</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab9b73.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code23">

						// ES6 syntax
let fruits = ["Apple", "Banana", "Mango"];

let [a, ...r] = fruits;

alert(a); // Apple
alert(r); // Banana,Mango
alert(Array.isArray(r)); // true
     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code23"), {
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
				<h3>The object destructuring assignment</h3>
				<p>In ES5 to extract the property values of an object we need to write something like this:</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelabc37d.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code24">

						// ES5 syntax
var person = {name: "Peter", age: 28};

var name = person.name;
var age = person.age;

alert(name); // Peter
alert(age); // 28
     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code24"), {
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
				<p>But in ES6, you can extract object's property values and assign them to the variables easily like this:</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab40b0.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code25">

						// ES6 syntax
let person = {name: "Peter", age: 28};

let {name, age} = person; // Object destructuring assignment

alert(name); // Peter
alert(age); // 28
     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code25"), {
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
				<p>Most of the features we've discussed above are supported in the latest version of the major web browsers such as Google Chrome, Mozilla Firefox, Microsoft Edge, Safari, etc.</p>
                <p>Alternatively, you can use the online transpilers (source-to-source compilers) like <a rel="nofollow" href="https://babeljs.io/repl/" target="_blank">Babel</a> free of cost to transpile your current ES6 code to ES5 for better browser compatibility without leaving out the benefits of enhanced syntax and capabilities of ES6.</p>
				<!--Bottom Navigation-->
				<div class="bottom-link clearfix">
                    <a href="js_ajax.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="../js_examples.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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