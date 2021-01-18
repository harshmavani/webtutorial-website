<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="JavaScript Hoisting">
	  <meta name="keywords" content="javascript,js,JavaScript Hoisting">
	  <meta name="author" content="webschooltoday.com">
    <title>JavaScript Hoisting - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">JavaScript Hoisting</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_javascript.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="js_closures.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="js_borrowing-methods.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>JavaScript <span>Hoisting</span></h1>
                <p class="summary">In this tutorial you will learn about the hoisting behavior of JavaScript.</p>
				<h2>What is Hoisting</h2>
				<p class="space">In JavaScript, all <a href="js_variables.php">variable</a> and <a href="js_functions.php">function</a> declarations are moved or <em>hoisted</em> to the top of their current scope, regardless of where it is defined. This is the default behavior of JavaScript interpreter which is called <em>hoisting</em>. In the following sections we'll take a closer look at how it actually works.</p>
				<h2>Function Hoisting</h2>
				<p>Functions that are defined using a function declaration are automatically hoisted. That means they can be called before they have been defined. Let's understand this with an example:</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab87eb.php?topic=javascript&amp;file=function-hoisting" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code1">

h1, h2, h3, h4, h5, h6 {
    voice-family: male;
    stress: 20;
    richness: 90;
    cue-before: url("pop.au");
}
p {
    azimuth: center-left;
}
quotes {
    volume: x-soft;
}
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
				<p>As you can see, we've called the <code>sayHello()</code> function before it is defined, but the code still works. This is because the function declaration is hoisted to the top automatically behind the scenes.</p>
				<hr />
				<h2>Variable Hoisting</h2>
				<p>Similarly, the variable declarations are also hoisted to the top of their current scope automatically. This means that if the variable is declared inside a function block, it will be moved at the top of the function, but if it is declared outside any function it will be moved to top of the script and become globally available. Take a look at the following example, to see how this works:</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelabb8b2.php?topic=javascript&amp;file=using-a-variable-before-it-is-declared" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code2">

						// Calling function before declaration
sayHello(); // Outputs: Hello, I'm hoisted!

function sayHello() {
    alert("Hello, I'm hoisted!");
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
				<p>However, JavaScript only hoists declarations, not initializations. That means if a variable is declared and initialized after using it, the value will be <code>undefined</code>. For example:</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelabb215.php?topic=javascript&amp;file=using-a-variable-before-it-is-initialized" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code3">

						str = "Hello World!";
alert(str); // Outputs: Hello World!
var str;
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
				<p>Here's another example demonstrating the variable hoisting behavior of JavaScript:</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelabd981.php?topic=javascript&amp;file=variable-hoisting" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code4">

						var i = 1; // Declare and initialize i
alert(i + ", " + j); // Outputs: 1, undefined
var j = 2; // Declare and initialize j

var x = 5; // Declare and initialize x
var y; // Declare y
alert(x + ", " + y); // Outputs: 5, undefined
y = 10; // Initialize y

var a = 3; // Declare and initialize a
b = 6; // Initialize b
alert(a + ", " + b); // Outputs: 3, 6
var b; // Declare b

var u = 4; // Declare and initialize u
alert(u + ", " + v); // Outputs: 4, undefined
var v; // Declare v
v = 8; // Initialize v
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
				<p>Variable hoisting may seem a little bit confusing at first glance, but if you go through these examples carefully you will easily understand how it works.</p>
				<!--Note box-->
				<div class="color-box">
					<div class="shadow">
						<div title="Important Notes" class="info-tab note-icon"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585"
>
							<p><strong>Read Carefully:</strong> It is considered best practice to declare your variables at the top of the current scope, because of hoisting behavior. Also, using a variable without declaring is not allowed in <a href="js_strict-mode.php">JavaScript strict mode</a>. See the next chapter to learn more about the strict mode.</p>
						</div>
					</div>
				</div>
				<!--End:Note box-->
				<!--Bottom Navigation-->
				<div class="bottom-link clearfix">
                    <a href="js_borrowing-methods.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="js_closures.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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