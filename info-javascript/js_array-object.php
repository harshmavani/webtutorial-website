<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="JavaScript Array Properties and Methods">
	  <meta name="keywords" content="javascript,js,Array Properties and Methods">
	  <meta name="author" content="webschooltoday.com">
    <title>JavaScript Array Properties and Methods - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">JavaScript Array Properties and Methods</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "info_javascript.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="js_boolean-object.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

				<a href="javascript:void(0);" class="previous-page disabled" title="Go to Previous Page : Disabled"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>JavaScript <span>Array Reference</span></h1>
                <p class="summary">This chapter contains a brief overview of the properties and method of the global array object.</p>
				<h2>The JavaScript Array Object</h2>
				<p>The JavaScript Array object is a global object that is used in the construction of arrays. An array is a special type of variable that allows you to store multiple values in a single variable.</p>
				<p>To learn more about Arrays, please check out the <a href="../des-javascript/js_arrays.php">JavaScript array</a> chapter.</p>
				<h2>Array Properties</h2>
                <p>The following table lists the standard properties of the Array object.</p>
				<div class="shadow">
					<table class="data">
						<tr>
							<th style="width: 130px;">Property</th>
							<th>Description</th>
						</tr>
						<tr>
							<td><code>length</code></td>
							<td>Sets or returns the number of elements in an array.</td>
						</tr>
						<tr>
							<td><code>prototype</code></td>
							<td>Allows you to add new properties and methods to an Array object.</td>
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
				<h2>Array Methods</h2>
                <p>The following table lists the standard methods of the Array object.</p>
				<div class="shadow">
					<table class="data">
						<tr>
							<th style="width: 130px;">Method</th>
							<th>Description</th>
						</tr>
						<tr>
							<td><code>concat()</code></td>
							<td>Merge two or more arrays, and returns a new array.</td>
						</tr>
						<tr>
							<td><code>copyWithin()</code></td>
							<td>Copies part of an array to another location in the same array and returns it.</td>
						</tr>
						<tr>
							<td><code>entries()</code></td>
							<td>Returns a key/value pair Array Iteration Object.</td>
						</tr>
						<tr>
							<td><code>every()</code></td>
							<td>Checks if every element in an array pass a test in a testing function.</td>
						</tr>
						<tr>
							<td><code>fill()</code></td>
							<td>Fill the elements in an array with a static value.</td>
						</tr>
						<tr>
							<td><code>filter()</code></td>
							<td>Creates a new array with all elements that pass the test in a testing function.</td>
						</tr>
						<tr>
							<td><code>find()</code></td>
							<td>Returns the value of the first element in an array that pass the test in a testing function.</td>
						</tr>
						<tr>
							<td><code>findIndex()</code></td>
							<td>Returns the index of the first element in an array that pass the test in a testing function.</td>
						</tr>
						<tr>
							<td><code>forEach()</code></td>
							<td>Calls a function once for each array element.</td>
						</tr>						
						<tr>
							<td><code>from()</code></td>
							<td>Creates an array from an object.</td>
						</tr>
						<tr>
							<td><code>includes()</code></td>
							<td>Determines whether an array includes a certain element.</td>
						</tr>
						<tr>
							<td><code>indexOf()</code></td>
							<td>Search the array for an element and returns its first index.</td>
						</tr>
						<tr>
							<td><code>isArray()</code></td>
							<td>Determines whether the passed value is an array.</td>
						</tr>
						<tr>
							<td><code>join()</code></td>
							<td>Joins all elements of an array into a string.</td>
						</tr>
						<tr>
							<td><code>keys()</code></td>
							<td>Returns a Array Iteration Object, containing the keys of the original array.</td>
						</tr>
						<tr>
							<td><code>lastIndexOf()</code></td>
							<td>Search the array for an element, starting at the end, and returns its last index.</td>
						</tr>
						<tr>
							<td><code>map()</code></td>
							<td>Creates a new array with the results of calling a function for each array element.</td>
						</tr>
						<tr>
							<td><code>pop()</code></td>
							<td>Removes the last element from an array, and returns that element.</td>
						</tr>
						<tr>
							<td><code>push()</code></td>
							<td>Adds one or more elements to the end of an array, and returns the array's new length.</td>
						</tr>
						<tr>
							<td><code>reduce()</code></td>
							<td>Reduce the values of an array to a single value (from left-to-right).</td>
						</tr>
						<tr>
							<td><code>reduceRight()</code></td>
							<td>Reduce the values of an array to a single value (from right-to-left).</td>
						</tr>
						<tr>
							<td><code>reverse()</code></td>
							<td>Reverses the order of the elements in an array.</td>
						</tr>
						<tr>
							<td><code>shift()</code></td>
							<td>Removes the first element from an array, and returns that element.</td>
						</tr>
						<tr>
							<td><code>slice()</code></td>
							<td>Selects a part of an array, and returns the new array.</td>
						</tr>
						<tr>
							<td><code>some()</code></td>
							<td>Checks if any of the elements in an array passes the test in a testing function.</td>
						</tr>
						<tr>
							<td><code>sort()</code></td>
							<td>Sorts the elements of an array.</td>
						</tr>
						<tr>
							<td><code>splice()</code></td>
							<td>Adds/Removes elements from an array.</td>
						</tr>
						<tr>
							<td><code>toString()</code></td>
							<td>Converts an array to a string, and returns the result.</td>
						</tr>
						<tr>
							<td><code>unshift()</code></td>
							<td>Adds new elements to the beginning of an array, and returns the array's new length.</td>
						</tr>
						<tr>
							<td><code>values()</code></td>
							<td>Returns a Array Iteration Object, containing the values of the original array.</td>
						</tr>
					</table>
				</div>
				<div class="bottom-link clearfix">
					<a href="javascript:void(0);" class="previous-page-bottom disabled" title="Disabled"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
					<a href="js_boolean-object.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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