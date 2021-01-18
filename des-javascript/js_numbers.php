<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="JavaScript Numbers">
	  <meta name="keywords" content="javascript,js,JavaScript Numbers">
	  <meta name="author" content="webschooltoday.com">
    <title>JavaScript Numbers - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">JavaScript Numbers</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_javascript.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="js_if-else-statements.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="js_strings.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>JavaScript <span>Numbers</span></h1>
                <p class="summary">In this tutorial you will learn how to represent numbers in JavaScript.</p>
				<h2>Working with Numbers</h2>
				<p>JavaScript supports both integer and floating-point numbers that can be represented in decimal, hexadecimal or octal notation. Unlike other languages, JavaScript does not treat integer and floating-point numbers differently. All numbers in JavaScript are represented as floating-point numbers. Here's an example demonstrating the numbers in different formats:</p>
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab21dd.php?topic=javascript&amp;file=numbers" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code1">

						var x = 2;  // integer number
var y = 3.14;  // floating-point number
var z = 0xff;  // hexadecimal number
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
				<p>Extra large numbers can be represented in exponential notation e.g. 6.02e+23 (same as 6.02x10<sup>23</sup>).</p>
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelabf2c8.php?topic=javascript&amp;file=representing-numbers-in-exponential-notation" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code2">

						var x = 1.57e4;  // same as 15700
var y = 4.25e+6;  // same as 4.25e6 or 4250000
var z = 4.25e-6;  // same as 0.00000425
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
				<!--Tip Box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"   style="background-color:#fad28c">
                            <p><strong>Important:</strong> The biggest safe integer in JavaScript is <code>9007199254740991 (2<sup>53</sup>-1)</code>, whereas the smallest safe integer is <code>-9007199254740991 (-(2<sup>53</sup>-1))</code>.</p>
                        </div>
                    </div>
                </div>
                <!--End:Tip Box-->
				<p>Numbers can also be represented in hexadecimal notation (base 16). Hexadecimal numbers are prefixed with <code>0x</code>. They are commonly used to represent <a href="../info-css/css-color-values.php">colors</a>. Here's an example:</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelabae27.php?topic=javascript&amp;file=representing-numbers-in-hexadecimal-notation" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code3">

						var x = 0xff;  // same as 255
var y = 0xb4;  // same as 180
var z = 0x00;  // same as 0
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
				<div class="color-box space">
					<div class="shadow">
						<div title="Important Notes" class="info-tab note-icon"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585"
>
							<p><strong>Read Carefully:</strong> Integers can be represented in decimal, hexadecimal, and octal notation. Floating-point numbers can be represented in decimal or exponential notation.</p>
						</div>
					</div>
				</div>
				<!--End:Note box-->
				<hr />
				<h2>Operating on Numbers and Strings</h2>
				<p>As you know from the previous chapters, the <code>+</code> operator is used for both addition and concatenation. So, performing mathematical operations on numbers and strings may produce interesting results. The following example will show you what happens when you add numbers and strings:</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelabfa9f.php?topic=javascript&amp;file=adding-numbers-and-strings" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code4">

						var x = 10;
var y = 20;
var z = "30";

// Adding a number with a number, the result will be sum of numbers
console.log(x + y); // 30

// Adding a string with a string, the result will be string concatenation
console.log(z + z); // '3030'

// Adding a number with a string, the result will be string concatenation
console.log(x + z); // '1030'

// Adding a string with a number, the result will be string concatenation
console.log(z + x); // '3010'

// Adding strings and numbers, the result will be string concatenation
console.log("The result is: " + x + y); // 'The result is: 1020'

// Adding numbers and strings, calculation performed from left to right
console.log(x + y + z); // 'The result is: 3030'
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
				<p>If you observe the above example carefully, you will find that the result of the last operation is not just a simple string concatenation, because operators with the same precedence are evaluated from <em>left to right</em>. That's why, since variables x and y both are numbers they are added first then the result is concatenated with the variable z which is a string, hence final result is <code>30 + "30" = "3030"</code>.</p>
				<p>But, if you perform other mathematical operations like multiplication, division, or subtraction the result will be different. JavaScript will automatically convert <em>numeric strings</em> (i.e. strings containing numeric values) to <em>numbers</em> in all numeric operations, as shown in the following example:</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab3fc3.php?topic=javascript&amp;file=automatic-conversion-of-numeric-strings-to-numbers" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code5">

						var x = 10;
var y = 20;
var z = "30";

// Subtracting a number from a number
console.log(y - x); // 10

// Subtracting a number from a numeric string
console.log(z - x); // 20

// Multiplying a number with a numeric string
console.log(x * z); // 300

// Dividing a number with a numeric string
console.log(z / x); // 3
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
				<p>Moreover, if you try to multiply or divide numbers with strings that are not numeric, it returns <code>NaN</code> (Not a Number). Also, if you use <code>NaN</code> in a mathematical operation, the result will also be <code>NaN</code>.</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab5b70.php?topic=javascript&amp;file=performing-mathematical-operation-on-non-numeric-values" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code6">

						var x = 10;
var y = "foo";
var z = NaN;

// Subtracting a number from a non-numeric string
console.log(y - x); // NaN

// Multiplying a number with a non-numeric string
console.log(x * y); // NaN

// Dividing a number with a non-numeric string
console.log(x / y); // NaN

// Adding NaN to a number 
console.log(x + z); // NaN
						
// Adding NaN to a string 
console.log(y + z); // fooNaN
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
				<h2>Representing Infinity</h2>
				<p>Infinity represents a number too big for JavaScript to handle. JavaScript has special keyword <code>Infinity</code> and <code>-Infinity</code> to represent positive and negative infinity respectively. For example, dividing by <code>0</code> returns <code>Infinity</code>, as demonstrated below:</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab070e.php?topic=javascript&amp;file=representing-infinity" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code8">

						var x = 5 / 0;
console.log(x); // Infinity

var y = -5 / 0;
console.log(y); // -Infinity
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
				<!--Note box-->
				<div class="color-box space">
					<div class="shadow">
						<div title="Important Notes" class="info-tab note-icon"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585"
>
							<p><strong>Read Carefully:</strong> Infinity is a special value that represents the mathematical Infinity <code>&#8734;</code>, which is greater than any number. The <a href="js_data-types.php#typeof"><code>typeof</code></a> operator return number for an Infinity value.</p>
						</div>
					</div>
				</div>
				<!--End:Note box-->				
				<hr />
				<h2>Avoiding Precision Problems</h2>
				<p>Sometimes, operations on floating-point numbers produce unexpected results, as shown here:</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelabf229.php?topic=javascript&amp;file=adding-floating-point-numbers" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code8">

						var x = 0.1 + 0.2;
console.log(x) // 0.30000000000000004
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
				<p>As you can see the result is <code>0.30000000000000004</code> rather than the expected <code>0.3</code>. This difference is called <em>representation error</em> or <em>roundoff error</em>. It occurs because JavaScript and many other languages uses binary (base 2) form to represent decimal (base 10) numbers internally. Unfortunately, most decimal fractions can't be represented exactly in binary form, so small differences occur.</p>
				<p>To avoid this problem you can use the solution something like this:</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelabadbd.php?topic=javascript&amp;file=fixing-roundoff-error" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code9">

						var x = (0.1 * 10 + 0.2 * 10) / 10;
console.log(x) // 0.3
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
				<p>JavaScript round floating-point numbers to 17 digits, which is enough precision or accuracy in most cases. Also, in JavaScript integers (numbers without fractional parts or exponential notation) are accurate is up to 15 digits, as demonstrated in the following example:</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelabcd1f.php?topic=javascript&amp;file=precision-problem-with-integers" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code10">

						var x = 999999999999999;
console.log(x); // 999999999999999

var y = 9999999999999999;
console.log(y); // 10000000000000000
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
				<hr />
				<h2 class="section-title"><span>Performing Operations on Numbers</span></h2>
				<p>JavaScript provides several properties and methods to perform operations on number values. As you already know from the previous chapters, in JavaScript primitive data types can act like objects when you refer to them with the property access notation (i.e. dot notation).</p>
				<p class="space">In the following sections, we will look at the number methods that are most commonly used.</p>
				<h2>Parsing Integers from Strings</h2>
				<p>The <code>parseInt()</code> method can be used to parse an integer from a string. This method is particularly handy in situations when you are dealing with the values like CSS units e.g. <code>50px</code>, <code>12pt</code>, etc. and you would like to extract the numeric value out of it.</p>
				<p>If the <code>parseInt()</code> method encounters a character that is not numeric in the specified base, it stops parsing and returns the integer value parsed up to that point. If the first character cannot be converted into a number, the method will return <code>NaN</code> (not a number).</p>
				<p>Leading and trailing spaces are allowed. Here's an example:</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelabb426.php?topic=javascript&amp;file=parse-integers-from-strings" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code11">

						console.log(parseInt("3.14"));  // 3
console.log(parseInt("50px"));  // 50
console.log(parseInt("12pt"));  // 12
console.log(parseInt("0xFF", 16));  // 255
console.log(parseInt("20 years"));  // 20
console.log(parseInt("Year 2048"));  // NaN
console.log(parseInt("10 12 2018"));  // 10
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
				<!--Note box-->
				<div class="color-box">
					<div class="shadow">
						<div title="Important Notes" class="info-tab note-icon"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585"
>
							<p><strong>Read Carefully:</strong> The <code>parseInt()</code> method truncates numbers to integer values, but it should not be used as a substitute for <code><a href="js_math-operations.php#floor">Math.floor()</a></code> method.</p>
						</div>
					</div>
				</div>
				<!--End:Note box-->
				<p>Similarly, you can use the <code>parseFloat()</code> method to parse floating-point number from a string. The <code>parseFloat()</code> method works the same way as the <code>parseInt()</code> method, except that it retrieves both integers and numbers with decimals.</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelabf9d9.php?topic=javascript&amp;file=parse-floating-point-numbers-from-strings" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code12">

						console.log(parseFloat("3.14"));  // 3.14
console.log(parseFloat("50px"));  // 50
console.log(parseFloat("1.6em"));  // 1.6
console.log(parseFloat("124.5 lbs"));  // 124.5
console.log(parseFloat("weight 124.5 lbs"));  // NaN
console.log(parseFloat("6.5 acres"));  // 6.5
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
				<hr />
				<h2>Converting Numbers to Strings</h2>
				<p>The <code>toString()</code> method can be used to convert a number to its string equivalent. This method optionally accepts an integer parameter in the range 2 through 36 specifying the base to use for representing numeric values. Here's an example:</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab82c5.php?topic=javascript&amp;file=convert-numbers-to-strings" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code13">

						var x = 10;
var y = x.toString();
console.log(y);  // '10'
console.log(typeof y);  // string
console.log(typeof x);  // number

console.log((12).toString());  // '12'
console.log((15.6).toString());  // '15.6'
console.log((6).toString(2));  // '110'
console.log((255).toString(16));  // 'ff'
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
				<hr />
				<h2>Formatting Numbers in Exponential Notation</h2>
				<p>You can use the <code>toExponential()</code> method to format or represent a number in exponential notation. This method optionally accepts an integer parameter specifying the number of digits after the decimal point. Also, the returned value is a string not a number. Here's an example:</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab56f8.php?topic=javascript&amp;file=format-a-number-in-exponential-notation" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code14">

						var x = 67.1234;

console.log(x.toExponential());  // 6.71234e+1
console.log(x.toExponential(6));  // 6.712340e+1
console.log(x.toExponential(4));  // 6.7123e+1
console.log(x.toExponential(2));  // 6.71e+1
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
				<!--Note box-->
				<div class="color-box">
					<div class="shadow">
						<div title="Important Notes" class="info-tab note-icon"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585"
>
							<p><strong>Read Carefully:</strong> Exponential notation is useful for representing numbers that are either very large or very small in magnitude. For example, 62500000000 can be written as 625e+8 or 6.25e+10.</p>
						</div>
					</div>
				</div>
				<!--End:Note box-->
				<hr />
				<h2>Formatting Numbers to Fixed Decimals</h2>
				<p>You can use the <code>toFixed()</code> method when you want to format a number with a fixed number of digits to the right of the decimal point. The value returned by this method is a string and it has exactly specified number of <code>digits</code> after the decimal point. If the <code>digits</code> parameter is not specified or omitted, it is treated as 0. Here's an example:</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelabe383.php?topic=javascript&amp;file=format-numbers-to-fixed-decimal-places" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code15">

						var x = 72.635;

console.log(x.toFixed());  // '73' (note rounding, no fractional part)
console.log(x.toFixed(2));  // '72.64' (note rounding)
console.log(x.toFixed(1));  // '72.6'

var y = 6.25e+5;
console.log(y.toFixed(2)); // '625000.00'

var z = 1.58e-4;
console.log(z.toFixed(2));  // '0.00' (since 1.58e-4 is equal to 0.000158)
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
				<hr />
				<h2>Formatting Numbers with Precision</h2>
				<p>If you want most appropriate form of a number, you can use the <code>toPrecision()</code> method instead. This method returns a string representing the number to the specified precision.</p>
				<p>If precision is large enough to include all the digits of the integer part of number, then the number is formatted using fixed-point notation. Otherwise, the number is formatted using exponential notation. The precision parameter is optional. Here's an example:</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab2db9.php?topic=javascript&amp;file=format-numbers-with-precision" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code16">

						var x = 6.235;

console.log(x.toPrecision());  // '6.235'
console.log(x.toPrecision(3));  // '6.24' (note rounding)
console.log(x.toPrecision(2));  // '6.2'
console.log(x.toPrecision(1));  // '6'

var y = 47.63;
console.log(y.toPrecision(2)); // '48' (note rounding, no fractional part)

var z = 1234.5;
console.log(z.toPrecision(2));  // '1.2e+3'
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
				<h2>Finding the Largest and Smallest Possible Numbers</h2>
				<p>The Number object also has several properties associated with it. The <code>Number.MAX_VALUE</code> and <code>Number.MIN_VALUE</code> properties of the Number object represent the largest and smallest (closest to zero, not most negative) possible positive numbers that JavaScript can handle. They are constants and their actual values are <code>1.7976931348623157e+308</code>, and <code>5e-324</code>, respectively.</p>
				<p>A number that falls outside of the range of possible numbers is represented by a constant <code>Number.POSITIVE_INFINITY</code> or <code>Number.NEGATIVE_INFINITY</code>. Here's an example:</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab7772.php?topic=javascript&amp;file=largest-and-smallest-possible-pumbers" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code17">

						var a = Number.MAX_VALUE;
console.log(a); // 1.7976931348623157e+308

var b = Number.MIN_VALUE;
console.log(b); // 5e-324

var x = Number.MAX_VALUE * 2;
console.log(x); // Infinity

var y = -1 * Number.MAX_VALUE * 2;
console.log(y); // -Infinity
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
				<p>Also, check out the <a href="js_math-operations.php">JavaScript math operations</a> chapter to learn about rounding numbers, generating a random number, finding maximum or minimun value from a set of numbers, etc.</p>
				<!--Bottom Navigation-->
				<div class="bottom-link clearfix">
                    <a href="js_strings.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="js_if-else-statements.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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