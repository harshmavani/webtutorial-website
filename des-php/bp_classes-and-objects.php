<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="Object Oriented Programming in PHP">
	  <meta name="keywords" content="php,php basic,Object Oriented Programming in PHP">
	  <meta name="author" content="webschooltoday.com">
    <title>Object Oriented Programming in PHP - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">Object Oriented Programming in PHP</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_php.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="bp_magic-constants.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="bp_error-handling.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>PHP <span>Classes</span> and <span>Objects</span></h1>
                <p class="summary">In this tutorial you will learn how to write code in object-oriented style in PHP.</p>
                <h2>What is Object Oriented Programming</h2>
                <p>Object-Oriented Programming (OOP) is a programming model that is based on the concept of classes and objects. As opposed to procedural programming where the focus is on writing procedures or functions that perform operations on the data, in object-oriented programming the focus is on the creations of objects which contain both data and functions together.</p>
				<p>Object-oriented programming has several advantages over conventional or procedural style of programming. The most important ones are listed below:</p>
				<ul>
					<li>It provides a clear modular structure for the programs.</li>
					<li>It helps you adhere to the "don't repeat yourself" (DRY) principle, and thus make your code much easier to maintain, modify and debug.</li>
					<li>It makes it possible to create more complicated behavior with less code and shorter development time and high degree of reusability.</li>
				</ul>
				<p>The following sections will describe how classes and objects work in PHP.</p>
                <div class="color-box space hide">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"   style="background-color:#fad28c">
                            <p><strong>Important:</strong> A program written in <em>procedural programming</em> style, meaning a program is made of one or more procedures. Whereas, a procedure is a set of programming statements that together, perform a specific task.</p>
                        </div>
                    </div>
                </div>
                <div class="color-box space">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"   style="background-color:#fad28c">
                            <p><strong>Important:</strong> The idea behind Don't Repeat Yourself (DRY) principle is reducing the repetition of code by abstracting out the code that are common for the application and placing them at a single place and reuse them instead of repeating it.</p>
                        </div>
                    </div>
                </div>
				<hr />
                <h2>Understanding Classes and Objects</h2>
                <p>Classes and objects are the two main aspects of object-oriented programming. A class is a self-contained, independent collection of variables and functions which work together to perform one or more specific tasks, while objects are individual instances of a class.</p>
				<p>A class acts as a template or blueprint from which lots of individual objects can be created. When individual objects are created, they inherit the same generic properties and behaviors, although each object may have different values for certain properties.</p>
				<p>For example, think of a class as a blueprint for a house. The blueprint itself is not a house, but is a detailed plan of the house. While, an object is like an actual house built according to that blueprint. We can build several identical houses from the same blueprint, but each house may have different paints, interiors and families inside, as shown in the illustration below.</p>
                <p class="text-center"><img src="../assets/images/php2.jpg" alt="Class Object Relationship Illustration" /></p>
				<p>A class can be declared using the <code>class</code> keyword, followed by the name of the class and a pair of curly braces (<code>{}</code>), as shown in the following example.</p>
                <p>Let's create a PHP file named Rectangle.php and put the following example code inside it so that our class code should be separated from rest of the program. We can then use it wherever it's needed by simply including the Rectangle.php file.</p>
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../output_file/bin/Rectangle2d42.php" target="_top" class="download-btn" title="Download Source Code"><span>Download</span></a></div>
                        <textarea id="code1">

&lt;?php
class Rectangle
{
    // Declare  properties
    public $length = 0;
    public $width = 0;
    
    // Method to get the perimeter
    public function getPerimeter(){
        return (2 * ($this->length + $this->width));
    }
    
    // Method to get the area
    public function getArea(){
        return ($this->length * $this->width);
    }
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

							</script>

					</div>
				</div>
				<p>The <code>public</code> keyword before the properties and methods in the example above, is an <a href="#oop-access-modifier">access modifier</a>, which indicates that this property or method is accessible from anywhere. We will learn more about this a little later in this chapter.</p>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585"
>
                            <p><strong>Read Carefully:</strong> Syntactically, variables within a class are called <em>properties</em>, whereas functions are called <em>methods</em>. Also class names conventionally are written in PascalCase i.e. each concatenated word starts with an uppercase letter (e.g. MyClass).</p>
                        </div>
                    </div>
                </div>
				<p>Once a class has been defined, objects can be created from the class with the <code>new</code> keyword. Class methods and properties can directly be accessed through this object instance.</p>
				<p>Create another PHP file name test.php and put the following code inside it.</p>
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab9052.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

&lt;?php
// Include class definition
require "Rectangle.php";
 
// Create a new object from Rectangle class
$obj = new Rectangle;
 
// Get the object properties values
echo $obj->length; // 0utput: 0
echo $obj->width; // 0utput: 0
 
// Set object properties values
$obj->length = 30;
$obj->width = 20;
 
// Read the object properties values again to show the change
echo $obj->length; // 0utput: 30
echo $obj->width; // 0utput: 20
 
 
// Call the object methods
echo $obj->getPerimeter(); // 0utput: 100
echo $obj->getArea(); // Output: 600
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

							</script>
					</div>
				</div>
                <p>The arrow symbol (<code>-&gt;</code>) is an OOP construct that is used to access contained properties and methods of a given object. Whereas, the pseudo-variable <code>$this</code> provides a reference to the calling object i.e. the object to which the method belongs.</p>
                <p>The real power of object oriented programming becomes evident when using multiple instances of the same class, as shown in the following example:</p>
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab1b4f.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

&lt;?php
// Include class definition
require "Rectangle.php";
 
// Create multiple objects from the Rectangle class
$obj1 = new Rectangle;
$obj2 = new Rectangle;
 
// Call the methods of both the objects
echo $obj1->getArea(); // Output: 0
echo $obj2->getArea(); // Output: 0
 
// Set $obj1 properties values
$obj1->length = 30;
$obj1->width = 20;
 
// Set $obj2 properties values
$obj2->length = 35;
$obj2->width = 50;
 
// Call the methods of both the objects again
echo $obj1->getArea(); // Output: 600
echo $obj2->getArea(); // Output: 1750
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

							</script>
					</div>
				</div>
				<p>As you can see in the above example, calling the <code>getArea()</code> method on different objects causes that method to operate on a different set of data. Each object instance is completely independent, with its own properties and methods, and thus can be manipulated independently, even if they're of the same class.</p>
                <hr />
                <h2>Using Constructors and Destructors</h2>
                <p>To make the object-oriented programming easier, PHP provides some magic methods that are executed automatically when certain actions occur within an object.</p>
                <p>For example, the magic method <code>__construct()</code> (known as <em>constructor</em>) is executed automatically whenever a new object is created. Similarly, the magic method <code>__destruct()</code> (known as <em>destructor</em>) is executed automatically when the object is destroyed. A destructor function cleans up any resources allocated to an object once the object is destroyed.</p>
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelabd7f2.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

&lt;?php
class MyClass
{
    // Constructor
    public function __construct(){
        echo 'The class "' . __CLASS__ . '" was initiated!&lt;br&gt;';
    }
    
    // Destructor
    public function __destruct(){
        echo 'The class "' . __CLASS__ . '" was destroyed.&lt;br&gt;';
    }
}

// Create a new object
$obj = new MyClass;

// Output a message at the end of the file
echo "The end of the file is reached.";
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

							</script>
					</div>
				</div>
				
				<p>The PHP code in the above example will produce the following output:</p>
				<div class="output-box">
The class "MyClass" was initiated!<br />
The end of the file is reached.<br />
The class "MyClass" was destroyed.
                </div>
				<p>A destructor is called automatically when a scripts ends. However, to explicitly trigger the destructor, you can destroy the object using the PHP <code>unset()</code> function, as follow:</p>
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab448c.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

&lt;?php
class MyClass
{
    // Constructor
    public function __construct(){
        echo 'The class "' . __CLASS__ . '" was initiated!&lt;br&gt;';
    }
    
    // Destructor
    public function __destruct(){
    echo 'The class "' . __CLASS__ . '" was destroyed.&lt;br&gt;';
    }
}
 
// Create a new object
$obj = new MyClass;
 
// Destroy the object
unset($obj);
 
// Output a message at the end of the file
echo "The end of the file is reached.";
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

							</script>
					</div>
				</div>
				<p>Now, the PHP code in the above example will produce the following output:</p>
				<div class="output-box">
The class "MyClass" was initiated!<br>
The class "MyClass" was destroyed.<br>
The end of the file is reached.
                </div>
                <div class="color-box space">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"   style="background-color:#fad28c">
                            <p><strong>Important:</strong> PHP automatically clean up all resources allocated during execution when the script is finished, e.g. closing database connections, destroying objects, etc.</p>
                        </div>
                    </div>
                </div>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585"
>
                            <p><strong>Read Carefully:</strong> The <code>__CLASS__</code> is a <a href="bp_magic-constants.php">magic constant</a> which contains the name of the class in which it is occur. It is empty, if it occurs outside of the class.</p>
                        </div>
                    </div>
                </div>
				<hr />
				<h2>Extending Classes through Inheritance</h2>
				<p>Classes can inherit the properties and methods of another class using the <code>extends</code> keyword. This process of extensibility is called inheritance. It is probably the most powerful reason behind using the object-oriented programming model.</p>
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab4395.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code6">

&lt;?php
// Include class definition
require "Rectangle.php";
 
// Define a new class based on an existing class
class Square extends Rectangle
{   
    // Method to test if the rectangle is also a square
    public function isSquare(){
        if($this->length == $this->width){
            return true; // Square
        } else{
            return false; // Not a square
        }
    }
}
 
// Create a new object from Square class
$obj = new Square;
 
// Set object properties values
$obj->length = 20;
$obj->width = 20;
 
// Call the object methods
if($obj->isSquare()){
    echo "The area of the square is ";
} else{
    echo "The area of the rectangle is ";
};
echo $obj->getArea();
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

							</script>
					</div>
				</div>
				<p>The PHP code in the above example will produce the following output:</p>
				<div class="output-box">The area of the square is 400</div>
				<p>As you can see in the above example, even though the class definition of Square doesn't explicitly contain <code>getArea()</code> method nor the <code>$length</code> and <code>$width</code> property, instances of the Square class can use them, as they inherited from the parent Rectangle class.</p>
                <div class="color-box space">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"   style="background-color:#fad28c">
                            <p><strong>Important:</strong> Since a child class is derived from a parent class, it is also referred to as a derived class, and its parent is called the base class.</p>
                        </div>
                    </div>
                </div>
				<hr />
				<h2 id="oop-access-modifier">Controlling the Visibility of Properties and Methods</h2>
				<p>When working with classes, you can even restrict access to its properties and methods using the <em>visibility keywords</em> for greater control. There are three visibility keywords (from most visible to least visible): <code>public</code>, <code>protected</code>, <code>private</code>, which determines how and from where properties and methods can be accessed and modified.</p>
				<ul>
					<li><strong>public</strong> &mdash; A public property or method can be accessed anywhere, from within the class and outside. This is the default visibility for all class members in PHP.</li>
					<li><strong>protected</strong> &mdash;  A protected property or method can only be accessed from within the class itself or in child or inherited classes i.e. classes that extends that class.</li>
					<li><strong>private</strong> &mdash; A private property or method is accessible only from within the class that defines it. Even child or inherited classes cannot access private properties or methods.</li>
				</ul>
				<p>The following example will show you how this visibility actually works:</p>
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../output_file/bin/access-control-modifiers9ee5.php" target="_top" class="download-btn" title="Download Source Code"><span>Download</span></a></div>
                        <textarea id="code7">

&lt;?php
// Class definition
class Automobile
{
    // Declare  properties
    public $fuel;
    protected $engine;
    private $transmission;
}
class Car extends Automobile
{
    // Constructor
    public function __construct(){
        echo 'The class "' . __CLASS__ . '" was initiated!&lt;br&gt;';
    }
}
 
// Create an object from Automobile class
$automobile = new Automobile;
 
// Attempt to set $automobile object properties
$automobile->fuel = 'Petrol'; // ok
$automobile->engine = '1500 cc'; // fatal error
$automobile->transmission = 'Manual'; // fatal error
 
// Create an object from Car class
$car = new Car;
 
// Attempt to set $car object properties
$car->fuel = 'Diesel'; // ok
$car->engine = '2200 cc'; // fatal error
$car->transmission = 'Automatic'; // undefined
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

							</script>
					</div>
				</div>
                <hr />
                <h2>Static Properties and Methods</h2>
				<p>In addition to the visibility, properties and methods can also be declared as <code>static</code>, which makes them accessible without needing an instantiation of the class. Static properties and methods can be accessed using the scope resolution operator (<code>::</code>), like this: <code>ClassName::$property</code> and <code>ClassName::method()</code>.</p>
				<p>A property declared as static cannot be accessed via the object of that class though a static method can be, as demonstrated in the following example:</p>
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../output_file/bin/static-properties-and-methods6f6d.php" target="_top" class="download-btn" title="Download Source Code"><span>Download</span></a></div>
                        <textarea id="code8">

&lt;?php
// Class definition
class HelloClass
{
    // Declare a static property
    public static $greeting = "Hello World!";
    
    // Declare a static method
    public static function sayHello(){
        echo self::$greeting;
    }
}
// Attempt to access static property and method directly
echo HelloClass::$greeting; // Output: Hello World!
HelloClass::sayHello(); // Output: Hello World!
 
// Attempt to access static property and method via object
$hello = new HelloClass;
echo $hello->greeting; // Strict Warning
$hello->sayHello(); // Output: Hello World!
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

							</script>
					</div>
				</div>
				<p>The keyword <code>self</code> in the above example means "the current class". It is never preceded by a dollar sign (<code>$</code>) and always followed by the <code>::</code> operator (e.g. <code>self::$name</code>).</p>
				<p>The <code>self</code> keyword is different from the <code>this</code> keyword which means "the current object" or&nbsp; "the current instance of a class". The <code>this</code> keyword is always preceded by a dollar sign (<code>$</code>) and followed by the <code>-&gt;</code> operator (e.g. <code>$this->name</code>).</p>
                <div class="color-box break">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585"
>
                            <p><strong>Read Carefully:</strong> Since static methods can be called without an instance of a class (i.e. object), the pseudo-variable <code>$this</code> is not available inside the method declared as static.</p>
                        </div>
                    </div>
                </div>
				<p>We hope you've understood the basic concepts of object-oriented programming by now. You'll find more examples on OOP in PHP and MySQL database section.</p>
                <div class="bottom-link clearfix">
                    <a href="bp_error-handling.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="bp_magic-constants.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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