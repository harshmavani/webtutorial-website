<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="JavaScript While, Do-While, For and For-In Loops">
	  <meta name="keywords" content="javascript,js,JavaScript While, Do-While, For and For-In Loops">
	  <meta name="author" content="webschooltoday.com">
    <title>JavaScript While, Do-While, For and For-In Loops - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">JavaScript While, Do-While, For and For-In Loops</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_javascript.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="js_functions.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="js_sorting-arrays.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>JavaScript <span>Loops</span></h1>
                <p class="summary">In this tutorial you will learn how to repeat a series of actions using loops in JavaScript.</p>
				<h2>Different Types of Loops in JavaScript</h2>
				<p>Loops are used to execute the same block of code again and again, as long as a certain condition is met. The basic idea behind a loop is to automate the repetitive tasks within a program to save the time and effort. JavaScript now supports five different types of loops:</p>
                <ul>
                	<li><strong>while</strong> &mdash; loops through a block of code as long as the condition specified evaluates to true.</li>
                    <li><strong>do&hellip;while</strong> &mdash; loops through a block of code once; then the condition is evaluated. If the condition is true, the statement is repeated as long as the specified condition is true.</li>
                    <li><strong>for</strong> &mdash; loops through a block of code until the counter reaches a specified number.</li>
                    <li><strong>for&hellip;in</strong> &mdash; loops through the properties of an object.</li>
                    <li><strong>for&hellip;of</strong> &mdash; loops over iterable objects such as arrays, strings, etc.</li>
                </ul>
				<p>In the following sections, we will discuss each of these loop statements in detail.</p>
				<hr />
				<h2 id="while">The while Loop</h2>
				<p>This is the simplest looping statement provided by JavaScript.</p>
				<p>The <code>while</code> loop loops through a block of code as long as the specified condition evaluates to true. As soon as the condition fails, the loop is stopped. The generic syntax of the while loop is:</p>
				<div class="shadow break">
                    <div class="syntax">
                        <span class="keyword">while</span>(<em>condition</em>) {<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;<em>// Code to be executed</em><br />
                        }
                    </div>
                </div>
                <p>The following example defines a loop that will continue to run as long as the variable <code>i</code> is less than or equal to 5. The variable <code>i</code> will increase by 1 each time the loop runs:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabb7d8.php?topic=javascript&amp;file=while-loop" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

                        var i = 1;
while(i <= 5) {    
    document.write("<p>The number is " + i + "</p>");
    i++;
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
				<!--Note box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585"
>
                            <p><strong>Read Carefully:</strong> Make sure that the condition specified in your loop eventually goes false. Otherwise, the loop will never stop iterating which is known as infinite loop. A common mistake is to forget to increment the counter variable (variable <code>i</code> in our case). </p>
                        </div>
                    </div>
                </div>
                <!--End:Note box-->
				<hr />
				<h2 id="do-while">The do...while Loop</h2>
                <p>The <code>do-while</code> loop is a variant of the <code>while</code> loop, which evaluates the condition at the end of each loop iteration. With a <code>do-while</code> loop the block of code executed once, and then the condition is evaluated, if the condition is true, the statement is repeated as long as the specified condition evaluated to is true. The generic syntax of the do-while loop is:</p>
                <div class="shadow break">
                    <div class="syntax">
                        <span class="keyword">do</span> {<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;<em>// Code to be executed</em><br />
                        }<br />
                        <span class="keyword">while</span>(<em>condition</em>);
                    </div>
                </div>
                <p>The JavaScript code in the following example defines a loop that starts with <code>i=1</code>. It will then print the output and increase the value of variable <code>i</code> by 1. After that the condition is evaluated, and the loop will continue to run as long as the variable <code>i</code> is less than, or equal to 5.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabcd86.php?topic=javascript&amp;file=do-while-loop" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

                        var i = 1;
do {
    document.write("<p>The number is " + i + "</p>");
    i++;
}
while(i <= 5);
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
				<h2>Difference Between while and do...while Loop</h2>
                <p>The <code>while</code> loop differs from the <code>do-while</code> loop in one important way &mdash; with a <code>while</code> loop, the condition to be evaluated is tested at the beginning of each loop iteration, so if the conditional expression evaluates to false, the loop will never be executed.</p>
                <p>With a <code>do-while</code> loop, on the other hand, the loop will always be executed once even if the conditional expression evaluates to false, because unlike the <code>while</code> loop, the condition is evaluated at the end of the loop iteration rather than the beginning.</p>
				<hr />
				<h2 id="for">The for Loop</h2>
                <p>The <code>for</code> loop repeats a block of code as long as a certain condition is met. It is typically used to execute a block of code for certain number of times. Its syntax is:</p>
                <div class="shadow break">
                    <div class="syntax">
                        <span class="keyword">for</span>(<em>initialization</em>; <em>condition</em>; <em>increment</em>) {<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;<em>// Code to be executed</em><br />
                        }
                    </div>
                </div>
                <p>The parameters of the <code>for</code> loop statement have following meanings:</p>
                <ul>
                	<li><strong><em>initialization</em></strong> &mdash; it is used to initialize the counter variables, and evaluated once unconditionally before the first execution of the body of the loop.</li>
                    <li><strong><em>condition</em></strong> &mdash; it is evaluated at the beginning of each iteration. If it evaluates to <code>true</code>, the loop statements execute. If it evaluates to <code>false</code>, the execution of the loop ends.</li>
                    <li><strong><em>increment</em></strong> &mdash; it updates the loop counter with a new value each time the loop runs.</li>
                </ul>
                <p>The following example defines a loop that starts with <code>i=1</code>. The loop will continued until the value of variable <code>i</code> is less than or equal to 5. The variable <code>i</code> will increase by 1 each time the loop runs:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabdd60.php?topic=javascript&amp;file=for-loop" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

                        for(var i=1; i<=5; i++) {
    document.write("<p>The number is " + i + "</p>");
}
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
				<p>The <code>for</code> loop is particularly useful for iterating over an array. The following example will show you how to print each item or element of the <a href="js_arrays.php">JavaScript array</a>.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab8f21.php?topic=javascript&amp;file=iterate-over-an-array-using-for-loop" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

                        // An array with some elements
var fruits = ["Apple", "Banana", "Mango", "Orange", "Papaya"];
 
// Loop through all the elements in the array 
for(var i=0; i<fruits.length; i++) {
    document.write("<p>" + fruits[i] + "</p>");
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
				<hr />
				<h2 id="for-in">The for...in Loop</h2>
				<p>The <code>for-in</code> loop is a special type of a loop that iterates over the properties of an <a href="js_objects.php">object</a>, or the elements of an array. The generic syntax of the <code>for-in</code> loop is:</p>
				<div class="shadow break">
                    <div class="syntax">
                        <span class="keyword">for</span>(<em>variable</em> <span class="keyword">in</span> <em>object</em>) {<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;<em>// Code to be executed</em><br />
                        }
                    </div>
                </div>
				<p>The loop counter i.e. <em>variable</em> in the <code>for-in</code> loop is a string, not a number. It contains the name of current property or the index of the current array element.</p>
				<p>The following example will show you how to loop through all properties of a JavaScript object.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabbd43.php?topic=javascript&amp;file=for-in-loop" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

                        // An object with some properties 
var person = {"name": "Clark", "surname": "Kent", "age": "36"};
 
// Loop through all the properties in the object  
for(var prop in person) {  
    document.write("<p>" + prop + " = " + person[prop] + "</p>"); 
}
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
				<p>Similarly, you can loop through the elements of an array, like this:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab5710.php?topic=javascript&amp;file=iterate-over-an-array-using-for-in-loop" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code6">

                        // An array with some elements
var fruits = ["Apple", "Banana", "Mango", "Orange", "Papaya"];
 
// Loop through all the elements in the array 
for(var i in fruits) {  
    document.write("<p>" + fruits[i] + "</p>");
}
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
				<!--Note box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585"
>
                            <p><strong>Read Carefully:</strong> The <code>for-in</code> loop should not be used to iterate over an array where the index order is important. You should better use a <code>for</code> loop with a numeric index.</p>
                        </div>
                    </div>
                </div>
                <!--End:Note box-->
                <hr />
				<h2>The for...of Loop <span class="badge js" title="New in ES6">ES6</span></h2>
				<p>ES6 introduces a new <code>for-of</code> loop which allows us to iterate over <a href="js_arrays.php">arrays</a> or other iterable objects (e.g. <a href="js_strings.php">strings</a>) very easily. Also, the code inside the loop is executed for each element of the iterable object.</p>
				<p>The following example will show you how to loop through arrays and strings using this loop.</p>				
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab71ab.php?topic=javascript&amp;file=es6-for-of-loop" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code7">

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
                <p>To learn about other ES6 features, please check out the <a href="js_es6-features.php">JavaScript ES6 features</a> chapter.</p>
				<!--Note box-->
                <div class="color-box">
                    <div class="shadow">
                        <div title="Important Notes" class="info-tab note-icon">&nbsp;</div>
                        <div class="note-box"  style="background-color:#ff8585"
>
                            <p><strong>Read Carefully:</strong> The <code>for...of</code> loop doesn't work with objects because they are not iterable. If you want to iterate over the properties of an object you can use the <a href="js_loops.php#for-in"><code>for-in</code></a> loop.</p>
                        </div>
                    </div>
                </div>
                <!--End:Note box-->
				<!--Bottom Navigation-->
                <div class="bottom-link clearfix">
                    <a href="js_sorting-arrays.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="js_functions.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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