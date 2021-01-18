<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="Working with PHP Operators">
	  <meta name="keywords" content="php,php basic,Working with PHP Operators">
	  <meta name="author" content="webschooltoday.com">
    <title>Working with PHP Operators - WebSchool Today</title>
	<meta name="description" content="In this tutorial you will learn how to use PHP operators like arithmetic, assignment, comparison, etc. to manipulate or perform operations on variables and values." />
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">Working with PHP Operators</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_php.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="bp_if-else-statements.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="bp_strings.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>PHP <span>Operators</span></h1>
                <p class="summary">In this tutorial you will learn how to manipulate or perform the operations on variables and values using operators in PHP.</p>
                <h2>What is Operators in PHP</h2>
                <p>Operators are symbols that tell the PHP processor to perform certain actions. For example, the addition (<code>+</code>) symbol is an operator that tells PHP to add two variables or values, while the greater-than (<code>&gt;</code>) symbol is an operator that tells PHP to compare two values.</p>
                <p class="space">The following lists describe the different operators used in PHP.</p>
                <h2>PHP Arithmetic Operators</h2>
				<p>The arithmetic operators are used to perform common arithmetical operations, such as addition, subtraction, multiplication etc. Here's a complete list of PHP's arithmetic operators:</p>
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
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab8523.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

&lt;?php
$x = 10;
$y = 4;
echo($x + $y); // 0utputs: 14
echo($x - $y); // 0utputs: 6
echo($x * $y); // 0utputs: 40
echo($x / $y); // 0utputs: 2.5
echo($x % $y); // 0utputs: 2
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
                <hr />
                <h2>PHP Assignment Operators</h2>
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
                            <td><code>$x = $y</code></td>
                            <td><code class="plain">$x = $y</code></td>
                        </tr>
                        <tr>
                        	<td><code>+=</code></td>
			    			<td>Add and assign</td>
                            <td><code>$x += $y</code></td>
                            <td><code class="plain">$x = $x + $y</code></td>
                        </tr>
                        <tr>
                        	<td><code>-=</code></td>
			    			<td>Subtract and assign</td>
                            <td><code>$x -= $y</code></td>
                            <td><code class="plain">$x = $x - $y</code></td>
                        </tr>
                        <tr>
                        	<td><code>*=</code></td>
			    			<td>Multiply and assign</td>
                            <td><code>$x *= $y</code></td>
                            <td><code class="plain">$x = $x * $y</code></td>
                        </tr>
                        <tr>
                        	<td><code>/=</code></td>
			    			<td>Divide and assign quotient</td>
                            <td><code>$x /= $y</code></td>
                            <td><code class="plain">$x = $x / $y</code></td>
                        </tr>                        
                        <tr>
                        	<td><code>%=</code></td>
			    			<td>Divide and assign modulus</td>
                            <td><code>$x %= $y</code></td>
                            <td><code class="plain">$x = $x % $y</code></td>
                        </tr>
                    </table>
                </div>
				<p>The following example will show you these assignment operators in action:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabe937.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        <textarea id="code2">

&lt;?php
$x = 10;
echo $x; // Outputs: 10
 
$x = 20;
$x += 30;
echo $x; // Outputs: 50
 
$x = 50;
$x -= 20;
echo $x; // Outputs: 30
 
$x = 5;
$x *= 25;
echo $x; // Outputs: 125
 
$x = 50;
$x /= 10;
echo $x; // Outputs: 5
 
$x = 100;
$x %= 15;
echo $x; // Outputs: 10
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
                <hr />
                <h2>PHP Comparison Operators</h2>
				<p>The comparison operators are used to compare two values in a Boolean fashion.</p>
                <div class="shadow">
                	<table class="data">
                    	<tr>
                        	<th>Operator</th>
                            <th style="width:28%;">Name</th>
                            <th style="width:15%;">Example</th>
                            <th>Result</th>
                        </tr>
                        <tr>
                        	<td><code>==</code></td>
                            <td>Equal</td>
                            <td><code>$x == $y</code></td>
                            <td>True if $x is equal to $y</td>
                        </tr>
                        <tr>
                        	<td><code>===</code></td>
                            <td>Identical</td>
                            <td><code>$x === $y</code></td>
                            <td>True if $x is equal to $y, and they are of the same type</td>
                        </tr>
                        <tr>
                        	<td><code>!=</code></td>
                            <td>Not equal</td>
                            <td><code>$x != $y</code></td>
                            <td>True if $x is not equal to $y</td>
                        </tr>
                        <tr>
                        	<td><code>&lt;&gt;</code></td>
                            <td>Not equal</td>
                            <td><code>$x &lt;&gt; $y</code></td>
                            <td>True if $x is not equal to $y</td>
                        </tr>
                        <tr>
                        	<td><code>!==</code></td>
                            <td>Not identical</td>
                            <td><code>$x !== $y</code></td>
                            <td>True if $x is not equal to $y, or they are not of the same type</td>
                        </tr>
						<tr>
                        	<td><code>&lt;</code></td>
                            <td>Less than</td>
                            <td><code>$x &lt; $y</code></td>
                            <td>True if $x is less than $y</td>
                        </tr>
                        <tr>
                        	<td><code>&gt;</code></td>
                            <td>Greater than</td>
                            <td><code>$x &gt; $y</code></td>
                            <td>True if $x is greater than $y</td>
                        </tr>                        
                        <tr>
                        	<td><code>&gt;=</code></td>
                            <td>Greater than or equal to</td>
                            <td><code>$x &gt;= $y</code></td>
                            <td>True if $x is greater than or equal to $y</td>
                        </tr>
                        <tr>
                        	<td><code>&lt;=</code></td>
                            <td>Less than or equal to</td>
                            <td><code>$x &lt;= $y</code></td>
                            <td>True if $x is less than or equal to $y</td>
                        </tr>
                    </table>
                </div>
				<p>The following example will show you these comparison operators in action:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab178a.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

&lt;?php
$x = 25;
$y = 35;
$z = "25";
var_dump($x == $z);  // Outputs: boolean true
var_dump($x === $z); // Outputs: boolean false
var_dump($x != $y);  // Outputs: boolean true
var_dump($x !== $z); // Outputs: boolean true
var_dump($x &lt; $y);   // Outputs: boolean true
var_dump($x &gt; $y);   // Outputs: boolean false
var_dump($x &lt;= $y);  // Outputs: boolean true
var_dump($x &gt;= $y);  // Outputs: boolean false
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
                <hr />
                <h2>PHP Incrementing and Decrementing Operators</h2>
                <p>The increment/decrement operators are used to increment/decrement a variable's value.</p>
                <div class="shadow">
                	<table class="data">
                    	<tr>
                        	<th>Operator</th>
                            <th>Name</th>
                            <th>Effect</th>
                        </tr>
                        <tr>
                        	<td><code>++$x</code></td>
                            <td>Pre-increment</td>
                            <td>Increments $x by one, then returns $x</td>
                        </tr>
                        <tr>
                        	<td><code>$x++</code></td>
                            <td>Post-increment</td>
                            <td>Returns $x, then increments $x by one</td>
                        </tr>
						<tr>
                        	<td><code>--$x</code></td>
                            <td>Pre-decrement</td>
                            <td>Decrements $x by one, then returns $x</td>
                        </tr>
                        <tr>
                        	<td><code>$x--</code></td>
                            <td>Post-decrement</td>
                            <td>Returns $x, then decrements $x by one</td>
                        </tr>
                    </table>
                </div>
				<p>The following example will show you these increment and decrement operators in action:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab1ba5.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

&lt;?php
$x = 10;
echo ++$x; // Outputs: 11
echo $x;   // Outputs: 11
 
$x = 10;
echo $x++; // Outputs: 10
echo $x;   // Outputs: 11
 
$x = 10;
echo --$x; // Outputs: 9
echo $x;   // Outputs: 9
 
$x = 10;
echo $x--; // Outputs: 10
echo $x;   // Outputs: 9
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
                <hr />
                <h2>PHP Logical Operators</h2>
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
                        	<td><code>and</code></td>
                            <td>And</td>
                            <td><code>$x and $y</code></td>
                            <td>True if both $x and $y are true</td>
                        </tr>
                        <tr>
                        	<td><code>or</code></td>
                            <td>Or</td>
                            <td><code>$x or $y</code></td>
                            <td>True if either $x or $y is true</td>
                        </tr>
                        <tr>
                        	<td><code>xor</code></td>
                            <td>Xor</td>
                            <td><code>$x xor $y</code></td>
                            <td>True if either $x or $y is true, but not both</td>
                        </tr>
                        <tr>
                        	<td><code>&amp;&amp;</code></td>
                            <td>And</td>
                            <td><code>$x &amp;&amp; $y</code></td>
                            <td>True if both $x and $y are true</td>
                        </tr>
                        <tr>
                        	<td><code>||</code></td>
                            <td>Or</td>
                            <td><code>$x || $y</code></td>
                            <td>True if either $$x or $y is true</td>
                        </tr>
                        <tr>
                        	<td><code>!</code></td>
                            <td>Not</td>
                            <td><code>!$x</code></td>
                            <td>True if $x is not true</td>
                        </tr>
                    </table>
                </div>
				<p>The following example will show you these logical operators in action:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabcc89.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

&lt;?php
$year = 2014;
// Leap years are divisible by 400 or by 4 but not 100
if(($year % 400 == 0) || (($year % 100 != 0) && ($year % 4 == 0))){
    echo "$year is a leap year.";
} else{
    echo "$year is not a leap year.";
}
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
                <h2>PHP String Operators</h2>
                <p>There are two operators which are specifically designed for <a href="bp_strings.php">strings</a>.</p>
                <div class="shadow">
                	<table class="data">
                    	<tr>
                        	<th>Operator</th>
                            <th>Description</th>
                            <th>Example</th>
                            <th>Result</th>
                        </tr>
                        <tr>
                        	<td><code>.</code></td>
                            <td>Concatenation</td>
                            <td><code>$str1 . $str2</code></td>
                            <td>Concatenation of $str1 and $str2</td>
                        </tr>
                        <tr>
                        	<td><code>.=</code></td>
                            <td>Concatenation assignment</td>
                            <td><code>$str1 .= $str2</code></td>
                            <td>Appends the $str2 to the $str1</td>
                        </tr>
                    </table>
                </div>
				<p>The following example will show you these string operators in action:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab14a2.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code6">

&lt;?php
$x = "Hello";
$y = " World!";
echo $x . $y; // Outputs: Hello World!
 
$x .= $y;
echo $x; // Outputs: Hello World!
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
				<h2>PHP Array Operators</h2>
				<p>The array operators are used to compare arrays:</p>
				<div class="shadow">
                	<table class="data">
                    	<tr>
                        	<th>Operator</th>
                            <th>Name</th>
                            <th style="width:15%;">Example</th>
                            <th>Result</th>
                        </tr>
						<tr>
                        	<td><code>+</code></td>
                            <td>Union</td>
                            <td><code>$x + $y</code></td>
                            <td>Union of $x and $y</td>
                        </tr>
                        <tr>
                        	<td><code>==</code></td>
                            <td>Equality</td>
                            <td><code>$x == $y</code></td>
                            <td>True if $x and $y have the same key/value pairs</td>
                        </tr>
                        <tr>
                        	<td><code>===</code></td>
                            <td>Identity</td>
                            <td><code>$x === $y</code></td>
                            <td>True if $x and $y have the same key/value pairs in the same order and of the same types</td>
                        </tr>
                        <tr>
                        	<td><code>!=</code></td>
                            <td>Inequality</td>
                            <td><code>$x != $y</code></td>
                            <td>True if $x is not equal to $y</td>
                        </tr>
                        <tr>
                        	<td><code>&lt;&gt;</code></td>
                            <td>Inequality</td>
                            <td><code>$x &lt;&gt; $y</code></td>
                            <td>True if $x is not equal to $y</td>
                        </tr>
						<tr>
                        	<td><code>!==</code></td>
                            <td>Non-identity</td>
                            <td><code>$x !== $y</code></td>
                            <td>True if $x is not identical to $y</td>
                        </tr>
                    </table>
                </div>
				<p>The following example will show you these array operators in action:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab7b42.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code7">

&lt;?php
$x = array("a" => "Red", "b" => "Green", "c" => "Blue");
$y = array("u" => "Yellow", "v" => "Orange", "w" => "Pink");
$z = $x + $y; // Union of $x and $y
var_dump($z);
var_dump($x == $y);   // Outputs: boolean false
var_dump($x === $y);  // Outputs: boolean false
var_dump($x != $y);   // Outputs: boolean true
var_dump($x &lt;&gt; $y);   // Outputs: boolean true
var_dump($x !== $y);  // Outputs: boolean true
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
				<hr />
				<h2>PHP Spaceship Operator <span class="badge" title="New in PHP 7">PHP 7</span></h2>
				<p>PHP 7 introduces a new spaceship operator (<code>&lt;=&gt;</code>) which can be used for comparing two expressions. It is also known as combined comparison operator.</p>
				<p>The spaceship operator returns <code>0</code> if both operands are equal, <code>1</code> if the left is greater, and <code>-1</code> if the right is greater. It basically provides three-way comparison as shown in the following table:</p>
				<div class="shadow">
                	<table class="data">
						<thead>
							<tr>
								<th>Operator</th>
								<th><code>&lt;=&gt;</code> Equivalent</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><code>$x &lt; $y</code></td>
								<td><code class="plain">($x &lt;=&gt; $y) === -1</code></td>
							</tr>
							<tr>
								<td><code>$x &lt;= $y</code> </td>
								<td><code class="plain">($x &lt;=&gt; $y) === -1 || ($x &lt;=&gt; $y) === 0</code></td>
							</tr>
							<tr>
								<td><code>$x == $y</code></td>
								<td><code class="plain">($x &lt;=&gt; $y) === 0</code></td>
							</tr>
							<tr>
								<td><code>$x != $y</code></td>
								<td><code class="plain">($x &lt;=&gt; $y) !== 0</code></td>
							</tr>
							<tr>
								<td><code>$x &gt;= $y</code></td>
								<td><code class="plain">($x &lt;=&gt; $y) === 1 || ($x &lt;=&gt; $y) === 0</code></td>
							</tr>
							<tr>
								<td><code>$x &gt; $y</code></td>
								<td><code class="plain">($x &lt;=&gt; $y) === 1</code></td>
							</tr>
						</tbody>
					</table>
				</div>
				<p>The following example will show you how spaceship operator actually works:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab78b4.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code8">

&lt;?php
// Comparing Integers 
echo 1 &lt;=&gt; 1; // Outputs: 0
echo 1 &lt;=&gt; 2; // Outputs: -1
echo 2 &lt;=&gt; 1; // Outputs: 1
 
// Comparing Floats
echo 1.5 &lt;=&gt; 1.5; // Outputs: 0
echo 1.5 &lt;=&gt; 2.5; // Outputs: -1
echo 2.5 &lt;=&gt; 1.5; // Outputs: 1
 
// Comparing Strings
echo "x" &lt;=&gt; "x"; // Outputs: 0
echo "x" &lt;=&gt; "y"; // Outputs: -1
echo "y" &lt;=&gt; "x"; // Outputs: 1
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
                <div class="bottom-link clearfix">
                    <a href="bp_strings.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="bp_if-else-statements.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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