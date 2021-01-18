<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="JavaScript Math Properties and Methods">
	  <meta name="keywords" content="javascript,js,Math Properties and Methods">
	  <meta name="author" content="webschooltoday.com">
    <title>JavaScript Math Properties and Methods - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">JavaScript Math Properties and Methods</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "info_javascript.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="js_number-object.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

				<a href="js_date-object.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>JavaScript <span>Math Reference</span></h1>
                <p class="summary">This chapter contains a brief overview of the properties and method of the global Math object.</p>
				<h2>The JavaScript Math Object</h2>
				<p>The JavaScript Math object is used to perform mathematical tasks. The Math object is a static built-in object, so you won't need to instantiate it, all its properties and methods can be accessed directly.</p>
				<p>To learn more about Math, please check out the <a href="../des-javascript/js_math-operations.php">JavaScript math operations</a> chapter.</p>
				<h2>Math Properties</h2>
                <p>The following table lists the standard properties of the Math object.</p>
				<div class="shadow">
					<table class="data">
						<tr>
							<th style="width: 130px;">Property</th>
							<th>Description</th>
						</tr>
						<tr>
							<td><code>E</code></td>
							<td>Returns Euler's number, the base of natural logarithms, <code>e</code>, approximately 2.718</td>
						</tr>
						<tr>
							<td><code>LN2</code></td>
							<td>Returns the natural logarithm of 2, approximately 0.693</td>
						</tr>
						<tr>
							<td><code>LN10</code></td>
							<td>Returns the natural logarithm of 10, approximately 2.302</td>
						</tr>
						<tr>
							<td><code>LOG2E</code></td>
							<td>Returns the base 2 logarithm of <code>e</code>, approximately 1.442</td>
						</tr>
						<tr>
							<td><code>LOG10E</code></td>
							<td>Returns the base 10 logarithm of <code>e</code>, approximately 0.434</td>
						</tr>
						<tr>
							<td><code>PI</code></td>
							<td>Returns the ratio of the circumference of a circle to its diameter (i.e. <code>&pi;</code>). The approximate value of PI is 3.14159</td>
						</tr>
						<tr>
							<td><code>SQRT1_2</code></td>
							<td>Returns the square root of 1/2, approximately 0.707</td>
						</tr>
						<tr>
							<td><code>SQRT2</code></td>
							<td>Returns the square root of 2, approximately 1.414</td>
						</tr>
					</table>
				</div>
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box">
							<p><strong>Note:</strong> The Math object is just a collection of static functions and constants. The Math object is different from other built-in objects (e.g. Date, Array, String, etc.), because it has no constructor, so there is no way to create an instance of Math.</p>
						</div>
					</div>
				</div>
				<hr />
				<h2>Math Methods</h2>
                <p>The following table lists the standard methods of the Math object.</p>
				<div class="shadow">
					<table class="data">
						<tr>
							<th style="width: 130px;">Method</th>
							<th>Description</th>
						</tr>
						<tr>
							<td><code>abs()</code></td>
							<td>Returns the absolute value of a number.</td>
						</tr>
						<tr>
							<td><code>acos()</code></td>
							<td>Returns the arccosine of a number, in radians.</td>
						</tr>
						<tr>
							<td><code>acosh()</code></td>
							<td>Returns the hyperbolic arccosine of a number.</td>
						</tr>
						<tr>
							<td><code>asin()</code></td>
							<td>Returns the arcsine of a number, in radians</td>
						</tr>
						<tr>
							<td><code>asinh()</code></td>
							<td>Returns the hyperbolic arcsine of a number.</td>
						</tr>
						<tr>
							<td><code>atan()</code></td>
							<td>Returns the arctangent of a number, in radians.</td>
						</tr>
						<tr>
							<td><code>atan2(y, x)</code></td>
							<td>Returns the arctangent of the quotient of its arguments.</td>
						</tr>
						<tr>
							<td><code>atanh()</code></td>
							<td>Returns the hyperbolic arctangent of a number.</td>
						</tr>
						<tr>
							<td><code>cbrt()</code></td>
							<td>Returns the cube root of a number.</td>
						</tr>
						<tr>
							<td><code>ceil()</code></td>
							<td>Returns the next integer greater than or equal to a given number (rounding up).</td>
						</tr>
						<tr>
							<td><code>cos()</code></td>
							<td>Returns the cosine of the specified angle. The angle must be specified in radians.</td>
						</tr>
						<tr>
							<td><code>cosh()</code></td>
							<td>Returns the hyperbolic cosine of a number.</td>
						</tr>
						<tr>
							<td><code>exp(x)</code></td>
							<td>Returns <code>e<sup>x</sup></code>, where <code>x</code> is the argument, and <code>e</code> is Euler's number (also known as Napier's constant), the base of the natural logarithms.</td>
						</tr>
						<tr>
							<td><code>floor()</code></td>
							<td>Returns the next integer less than or equal to a given number (rounding down).</td>
						</tr>
						<tr>
							<td><code>log()</code></td>
							<td>Returns the natural logarithm (base <code>e</code>) of a number.</td>
						</tr>
						<tr>
							<td><code>max(x, y, ...)</code></td>
							<td>Returns the highest-valued number in a list of numbers.</td>
						</tr>
						<tr>
							<td><code>min(x, y, ...)</code></td>
							<td>Returns the lowest-valued number in a list of numbers.</td>
						</tr>
						<tr>
							<td><code>pow(x, y)</code></td>
							<td>Returns the base to the exponent power, that is, <code>x<sup>y</sup></code>.</td>
						</tr>
						<tr>
							<td><code>random()</code></td>
							<td>Returns a random number between 0 and 1 (including 0, but not 1).</td>
						</tr>
						<tr>
							<td><code>round()</code></td>
							<td>Returns the value of a number rounded to the nearest integer.</td>
						</tr>
						<tr>
							<td><code>sin()</code></td>
							<td>Returns the sign of a number (given in radians).</td>
						</tr>
						<tr>
							<td><code>sinh()</code></td>
							<td>Returns the hyperbolic sine of a number.</td>
						</tr>
						<tr>
							<td><code>sqrt()</code></td>
							<td>Returns the square root of a number.</td>
						</tr>
						<tr>
							<td><code>tan()</code></td>
							<td>Returns the tangent of a number.</td>
						</tr>
						<tr>
							<td><code>tanh()</code></td>
							<td>Returns the hyperbolic tangent of a number.</td>
						</tr>
						<tr>
							<td><code>trunc(x)</code></td>
							<td>Returns the integer part of a number by removing any fractional digits.</td>
						</tr>					
					</table>
				</div>
				<div class="bottom-link clearfix">
					<a href="js_date-object.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
					<a href="js_number-object.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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