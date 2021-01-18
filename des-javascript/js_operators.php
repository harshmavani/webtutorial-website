<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="JavaScript Operators">
	  <meta name="keywords" content="javascript,js,JavaScript Operators">
	  <meta name="author" content="webschooltoday.com">
    <title>JavaScript Operators - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">JavaScript Operators</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_javascript.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="js_events.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="js_data-types.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
				<h1>JavaScript <span>Operators</span></h1>
                <p class="summary">In this tutorial you will learn how to manipulate or perform the operations on variables and values using the operators in JavaScript.</p>
				<h2>What are Operators in JavaScript</h2>
				<p>Operators are symbols or keywords that tell the JavaScript engine to perform some sort of actions. For example, the addition (<code>+</code>) symbol is an operator that tells JavaScript engine to add two variables or values, while the equal-to (<code>==</code>), greater-than (<code>&gt;</code>) or less-than (<code>&lt;</code>) symbols are the operators that tells JavaScript engine to compare two variables or values, and so on.</p>
				<p class="space">The following sections describe the different operators used in JavaScript.</p>
				<h2 id="arithmetic">JavaScript Arithmetic Operators</h2>
				<p>The arithmetic operators are used to perform common arithmetical operations, such as addition, subtraction, multiplication etc. Here's a complete list of JavaScript's arithmetic operators:</p>
                <div class="shadow">
                	<table class="data">
                    	<tr>
                        	<th>Operator</th>
                            <th>Description</th>
                            <th>Example</th>
                            <th>Result</th>
                        </tr>
                        <tr>
                        	<td><code>+</code></td>
                            <td>Addition</td>
                            <td><code>$x + $y</code></td>
                            <td>Sum of $x and $y</td>
                        </tr>
                        <tr>
                        	<td><code>-</code></td>
                            <td>Subtraction</td>
                            <td><code>$x - $y</code></td>
                            <td>Difference of $x and $y.</td>
                        </tr>
                        <tr>
                        	<td><code>*</code></td>
                            <td>Multiplication</td>
                            <td><code>$x * $y</code></td>
                            <td>Product of $x and $y.</td>
                        </tr>
                        <tr>
                        	<td><code>/</code></td>
                            <td>Division</td>
                            <td><code>$x / $y</code></td>
                            <td>Quotient of $x and $y</td>
                        </tr>
                        <tr>
                        	<td><code>%</code></td>
                            <td>Modulus</td>
                            <td><code>$x % $y</code></td>
                            <td>Remainder of $x divided by $y</td>
                        </tr>
                    </table>
                </div>
				<p>The following example will show you these arithmetic operators in action:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabd63e.php?topic=javascript&amp;file=arithmetic-operators" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

                        var x = 10;
var y = 4;
alert(x + y); // 0utputs: 14
alert(x - y); // 0utputs: 6
alert(x * y); // 0utputs: 40
alert(x / y); // 0utputs: 2.5
alert(x % y); // 0utputs: 2
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
				<h2 id="assignment">JavaScript Assignment Operators</h2>
				<p>The assignment operators are used to assign values to variables.</p>
				<div class="shadow">
                	<table class="data">
                    	<tr>
                        	<th>Operator</th>
			    			<th style="width: 40%;">Description</th>
                            <th>Example</th>
                            <th>Is The Same As</th>
                        </tr>
                        <tr>
                        	<td><code>=</code></td>
			    			<td>Assign</td>
                            <td><code>x = y</code></td>
                            <td><code class="plain">x = y</code></td>
                        </tr>
                        <tr>
                        	<td><code>+=</code></td>
			    			<td>Add and assign</td>
                            <td><code>x += $</code></td>
                            <td><code class="plain">x = x + y</code></td>
                        </tr>
                        <tr>
                        	<td><code>-=</code></td>
			    			<td>Subtract and assign</td>
                            <td><code>x -= y</code></td>
                            <td><code class="plain">x = x - y</code></td>
                        </tr>
                        <tr>
                        	<td><code>*=</code></td>
			    			<td>Multiply and assign</td>
                            <td><code>x *= y</code></td>
                            <td><code class="plain">x = x * y</code></td>
                        </tr>
                        <tr>
                        	<td><code>/=</code></td>
			    			<td>Divide and assign quotient</td>
                            <td><code>x /= y</code></td>
                            <td><code class="plain">x = x / y</code></td>
                        </tr>                        
                        <tr>
                        	<td><code>%=</code></td>
			    			<td>Divide and assign modulus</td>
                            <td><code>x %= y</code></td>
                            <td><code class="plain">x = x % y</code></td>
                        </tr>
                    </table>
                </div>
				<p>The following example will show you these assignment operators in action:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabd176.php?topic=javascript&amp;file=assignment-operators" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">
                        var x;    // Declaring Variable
 
 x = 10;
 alert(x); // Outputs: 10
  
 x = 20;
 x += 30;
 alert(x); // Outputs: 50
  
 x = 50;
 x -= 20;
 alert(x); // Outputs: 30
  
 x = 5;
 x *= 25;
 alert(x); // Outputs: 125
  
 x = 50;
 x /= 10;
 alert(x); // Outputs: 5
  
 x = 100;
 x %= 15;
 alert(x); // Outputs: 10
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
				<h2 id="string">JavaScript String Operators</h2>
				<p>There are two operators which can also used be for strings.</p>
				<div class="shadow">
                	<table class="data">
                    	<tr>
                        	<th>Operator</th>
                            <th>Description</th>
                            <th>Example</th>
                            <th>Result</th>
                        </tr>
                        <tr>
                        	<td><code>+</code></td>
                            <td>Concatenation</td>
                            <td><code>str1 + str2</code></td>
                            <td>Concatenation of str1 and str2</td>
                        </tr>
                        <tr>
                        	<td><code>+=</code></td>
                            <td>Concatenation assignment</td>
                            <td><code>str1 += str2</code></td>
                            <td>Appends the str2 to the str1</td>
                        </tr>
                    </table>
                </div>
				<p>The following example will show you these string operators in action:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab141d.php?topic=javascript&amp;file=string-operators" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

                        var str1 = "Hello";
var str2 = " World!";
 
alert(str1 + str2); // Outputs: Hello World!
 
str1 += str2;
alert(str1); // Outputs: Hello World!
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
				<h2 id="incrementing-decrementing">JavaScript Incrementing and Decrementing Operators</h2>
				<p>The increment/decrement operators are used to increment/decrement a variable's value.</p>
				<div class="shadow">
                	<table class="data">
                    	<tr>
                        	<th>Operator</th>
                            <th>Name</th>
                            <th>Effect</th>
                        </tr>
                        <tr>
                        	<td><code>++x</code></td>
                            <td>Pre-increment</td>
                            <td>Increments x by one, then returns x</td>
                        </tr>
                        <tr>
                        	<td><code>x++</code></td>
                            <td>Post-increment</td>
                            <td>Returns x, then increments x by one</td>
                        </tr>
						<tr>
                        	<td><code>--x</code></td>
                            <td>Pre-decrement</td>
                            <td>Decrements x by one, then returns x</td>
                        </tr>
                        <tr>
                        	<td><code>x--</code></td>
                            <td>Post-decrement</td>
                            <td>Returns x, then decrements x by one</td>
                        </tr>
                    </table>
                </div>
				<p>The following example will show you how increment and decrement operators actually work:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabf63e.php?topic=javascript&amp;file=increment-decrement-operators" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

                        var x; // Declaring Variable
 
 x = 10;
 alert(++x); // Outputs: 11
 alert(x);   // Outputs: 11
  
 x = 10;
 alert(x++); // Outputs: 10
 alert(x);   // Outputs: 11
  
 x = 10;
 alert(--x); // Outputs: 9
 alert(x);   // Outputs: 9
  
 x = 10;
 alert(x--); // Outputs: 10
 alert(x);   // Outputs: 9
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
				<h2 id="logical">JavaScript Logical Operators</h2>
				<p>The logical operators are typically used to combine conditional statements.</p>
                <div class="shadow">
                	<table class="data">
                    	<tr>
                        	<th>Operator</th>
                            <th style="width:12%;">Name</th>
                            <th>Example</th>
                            <th>Result</th>
                        </tr>
                        <tr>
                        	<td><code>&amp;&amp;</code></td>
                            <td>And</td>
                            <td><code>x &amp;&amp; y</code></td>
                            <td>True if both x and y are true</td>
                        </tr>
                        <tr>
                        	<td><code>||</code></td>
                            <td>Or</td>
                            <td><code>x || y</code></td>
                            <td>True if either x or y is true</td>
                        </tr>
                        <tr>
                        	<td><code>!</code></td>
                            <td>Not</td>
                            <td><code>!x</code></td>
                            <td>True if x is not true</td>
                        </tr>
                    </table>
                </div>
				<p>The following example will show you how these logical operators actually work:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab719a.php?topic=javascript&amp;file=logical-operators" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">
                        var year = 2018;
 
 // Leap years are divisible by 400 or by 4 but not 100
 if((year % 400 == 0) || ((year % 100 != 0) && (year % 4 == 0))){
     alert(year + " is a leap year.");
 } else{
     alert(year + " is not a leap year.");
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
				<p>You will learn about conditional statements in <a href="js_if-else-statements.php">JavaScript if/else</a> chapter.</p>
				<hr />
				<h2 id="comparison">JavaScript Comparison Operators</h2>
				<p>The comparison operators are used to compare two values in a Boolean fashion.</p>
                <div class="shadow">
                	<table class="data">
                    	<tr>
                        	<th>Operator</th>
                            <th style="width:25%;">Name</th>
                            <th style="width:15%;">Example</th>
                            <th>Result</th>
                        </tr>
                        <tr>
                        	<td><code>==</code></td>
                            <td>Equal</td>
                            <td><code>x == y</code></td>
                            <td>True if x is equal to y</td>
                        </tr>
                        <tr>
                        	<td><code>===</code></td>
                            <td>Identical</td>
                            <td><code>x === y</code></td>
                            <td>True if x is equal to y, and they are of the same <a href="js_data-types.php">type</a></td>
                        </tr>
                        <tr>
                        	<td><code>!=</code></td>
                            <td>Not equal</td>
                            <td><code>x != y</code></td>
                            <td>True if x is not equal to y</td>
                        </tr>
                        <tr>
                        	<td><code>!==</code></td>
                            <td>Not identical</td>
                            <td><code>x !== y</code></td>
                            <td>True if x is not equal to y, or they are not of the same type</td>
                        </tr>
						<tr>
                        	<td><code>&lt;</code></td>
                            <td>Less than</td>
                            <td><code>x &lt; y</code></td>
                            <td>True if x is less than y</td>
                        </tr>
                        <tr>
                        	<td><code>&gt;</code></td>
                            <td>Greater than</td>
                            <td><code>x &gt; y</code></td>
                            <td>True if x is greater than y</td>
                        </tr>                        
                        <tr>
                        	<td><code>&gt;=</code></td>
                            <td>Greater than or equal to</td>
                            <td><code>x &gt;= y</code></td>
                            <td>True if x is greater than or equal to y</td>
                        </tr>
                        <tr>
                        	<td><code>&lt;=</code></td>
                            <td>Less than or equal to</td>
                            <td><code>x &lt;= y</code></td>
                            <td>True if x is less than or equal to y</td>
                        </tr>
                    </table>
                </div>
				<p>The following example will show you these comparison operators in action:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabb134.php?topic=javascript&amp;file=comparison-operators" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code6">

                        var x = 25;
var y = 35;
var z = "25";
 
alert(x == z);  // Outputs: true
alert(x === z); // Outputs: false
alert(x != y);  // Outputs: true
alert(x !== z); // Outputs: true
alert(x < y);   // Outputs: true
alert(x > y);   // Outputs: false
alert(x <= y);  // Outputs: true
alert(x >= y);  // Outputs: false
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
                <!--Bottom Navigation-->
                <div class="bottom-link clearfix">
                    <a href="js_data-types.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="js_events.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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