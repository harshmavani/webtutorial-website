<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="JavaScript Borrowing Methods">
	  <meta name="keywords" content="javascript,JavaScript Borrowing Methods">
	  <meta name="author" content="webschooltoday.com">
    <title>JavaScript Borrowing Methods - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">JavaScript Borrowing Methods</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_javascript.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="js_hoisting.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="js_event-propagation.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>JavaScript <span>Borrowing Methods</span></h1>
                <p class="summary">In this tutorial you will learn how to borrow functionality from existing objects in JavaScript.</p>
				<h2>Borrowing Methods from Objects</h2>
				<p>In JavaScript, you can borrow methods from other objects to build some functionality without inheriting all their properties and methods.</p>
				<p>JavaScript provides two methods for all function objects, <code>call()</code> and <code>apply()</code>, that allow a function to be invoked as if it were a method of another object. Here's an example:</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab7263.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code1">

						var objA = {
    name: "object A",
    say: function(greet) {
        alert(greet + ", " + this.name);
    }
}

objA.say("Hi"); // Displays: Hi, object A

var objB = {
    name: "object B"
}

/* The objA doesn't have say() method, but it can borrow it from objA */
objA.say.call(objB, "Hello"); // Displays: Hello, object B
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
				<hr />
				<h2>Difference Between <code>call()</code> and <code>apply()</code> Methods</h2>
				<p>The syntax of the <code>apply()</code> method is almost identical to <code>call()</code>, the only difference is, the <code>call()</code> method takes a list of arguments like <code>call(<em>thisObj</em>, <i>arg1</i>, <i>arg2</i>, ...)</code>, while the <code>apply()</code> method takes a single array of arguments like <code>apply(<em>thisObj</em>, [<i>argsArray</i>])</code>.</p>
				<p>Notice the square brackets (<code>[]</code>), which denotes an array, in the last line of the following example:</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab7912.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code2">

						var objA = {
    name: "object A",
    say: function(greet) {
        alert(greet + ", " + this.name);
    }
}

objA.say("Hi"); // Displays: Hi, object A

var objB = {
    name: "object B"
}

/* The objA doesn't have say() method, but it can borrow it from objA */
objA.say.apply(objB, ["Hello"]); // Displays: Hello, object B
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
				<h2>Using Built-in Methods</h2>
				<p>The <code>apply()</code> method also allows you to use built-in methods for performing some tasks quickly and easily. One such example is using the <code>Math.max()</code>/<code>Math.min()</code> to find out the maximum or minimum value in an array, that would otherwise require looping over the array values.</p>
				<p>As you already know from the previous chapters JavaScript arrays do not have a <code>max()</code> method, but <a href="js_math-operations.php">Math</a> has, so we can apply the <code>Math.max()</code> method, like this:</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelabb31b.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code3">

						var numbers = [2, 5, 6, 4, 3, 7];

// Using Math.max apply
var max = Math.max.apply(null, numbers);
alert(max); // Outputs: 7
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
				<div class="color-box">
					<div class="shadow">
						<div title="Important Notes" class="info-tab note-icon"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585"
>
							<p><strong>Read Carefully:</strong> The first argument to both <code>call()</code> and <code>apply()</code> is the object on which the function is to be invoked. Using <code>null</code> as the first argument is like calling the function without providing any object for the <code>this</code> pointer inside the function.</p>
						</div>
					</div>
				</div>
				<!--End:Note box-->
				<p>The new ES6 <a href="js_es6-features.php#spread-operator">spread operator</a> provides a shorter way to obtain the maximum or minimum value from an array without using the <code>apply()</code> method. Here's an example:</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab5662.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code4">

						var numbers = [2, 5, 6, 4, 3, 7];

// Using spread operator
var max = Math.max(...numbers);
alert(max); // Outputs: 7
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
				<p>However, both spread (<code>...</code>) and <code>apply()</code> will either fail or return the incorrect result if the array has too many elements (e.g. tens of thousands). In that case you can use the <code>Array.reduce()</code> to find the maximum or minimum value in a numeric array, by comparing each value, like this:</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab64b0.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code5">

						var numbers = [2, 5, 6, 4, 3, 7];

// Using reduce method
var max = numbers.reduce(function(a, b) {
    return Math.max(a, b);
});
alert(max); // Outputs: 7
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
				<!--Bottom Navigation-->
				<div class="bottom-link clearfix">
                    <a href="js_event-propagation.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="js_hoisting.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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