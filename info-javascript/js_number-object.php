<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="JavaScript Number Properties and Methods">
	  <meta name="keywords" content="javascript,js,Number Properties and Methods">
	  <meta name="author" content="webschooltoday.com">
    <title>JavaScript Number Properties and Methods - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">JavaScript Number Properties and Methods</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "info_javascript.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="js_string-object.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

				<a href="js_math-object.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>JavaScript <span>Number Reference</span></h1>
                <p class="summary">This chapter contains a brief overview of the properties and method of the global Number object.</p>
				<h2>The JavaScript Number Object</h2>
				<p>The JavaScript Number object acts as a rg3-w for primitive numeric values. JavaScript has only one kind of number data type and it doesn't distinguish between integers and floating-point values.</p>
				<p>To learn more about Number, please check out the <a href="../des-javascript/js_numbers.php">JavaScript numbers</a> chapter.</p>
				<h2>Number Properties</h2>
                <p>The following table lists the standard properties of the Number object.</p>
				<div class="shadow">
					<table class="data">
						<tr>
							<th style="width: 130px;">Property</th>
							<th>Description</th>
						</tr>
						<tr>
							<td><code>MIN_SAFE_INTEGER</code></td>
							<td>Represents the maximum safe integer in JavaScript (253 - 1).</td>
						</tr>
						<tr>
							<td><code>MAX_VALUE</code></td>
							<td>Returns the largest numeric value representable in JavaScript, approximately 1.79E+308. Values larger than <code>MAX_VALUE</code> are represented as <code>Infinity</code>.</td>
						</tr>
						<tr>
							<td><code>MIN_SAFE_INTEGER</code></td>
							<td>Represents the minimum safe integer in JavaScript (-(253 - 1)).</td>
						</tr>
						<tr>
							<td><code>MIN_VALUE</code></td>
							<td>Returns the smallest positive numeric value representable in JavaScript, approximately 5e-324. It is closest to 0, not the most negative number. Values smaller than <code>MIN_VALUE</code> are converted to 0.</td>
						</tr>
						<tr>
							<td><code>NEGATIVE_INFINITY</code></td>
							<td>Represents the negative infinity value.</td>
						</tr>
						<tr>
							<td><code>NaN</code></td>
							<td>Represents "Not-A-Number" value.</td>
						</tr>
						<tr>
							<td><code>POSITIVE_INFINITY</code></td>
							<td>Represents the infinity value.</td>
						</tr>
						<tr>
							<td><code>prototype</code></td>
							<td>Allows you to add new properties and methods to a Number object.</td>
						</tr>
					</table>
				</div>
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box">
							<p><strong>Note:</strong> Every object in JavaScript has a <code>constructor</code> property that refers to the constructor function that was used to create the instance of that object.</p>
						</div>
					</div>
				</div>
				<hr />
				<h2>Number Methods</h2>
                <p>The following table lists the standard methods of the Number object.</p>
				<div class="shadow">
					<table class="data">
						<tr>
							<th style="width: 130px;">Method</th>
							<th>Description</th>
						</tr>
						<tr>
							<td><code>isFinite()</code></td>
							<td>Checks whether the passed value is a finite number.</td>
						</tr>
						<tr>
							<td><code>isInteger()</code></td>
							<td>Checks whether the passed value is an integer.</td>
						</tr>
						<tr>
							<td><code>isNaN()</code></td>
							<td>Checks whether the passed value is <code>NaN</code> and its type is Number.</td>
						</tr>
						<tr>
							<td><code>isSafeInteger()</code></td>
							<td>Checks whether a value is a safe integer.</td>
						</tr>
						<tr>
							<td><code>toExponential()</code></td>
							<td>Converts a number to exponential notation.</td>
						</tr>
						<tr>
							<td><code>toFixed()</code></td>
							<td>Formats a number using fixed-point notation.</td>
						</tr>
						<tr>
							<td><code>toPrecision()</code></td>
							<td>Returns a string representing the number to the specified precision.</td>
						</tr>
						<tr>
							<td><code>toString()</code></td>
							<td>Converts a number to a string.</td>
						</tr>
						<tr>
							<td><code>valueOf()</code></td>
							<td>Returns the primitive value of a Number object.</td>
						</tr>
					</table>
				</div>
				<div class="bottom-link clearfix">
					<a href="js_math-object.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
					<a href="js_string-object.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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