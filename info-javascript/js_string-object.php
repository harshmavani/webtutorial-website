<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="JavaScript String Properties and Methods">
	  <meta name="keywords" content="javascript,js,tring Properties and Methods">
	  <meta name="author" content="webschooltoday.com">
    <title>JavaScript String Properties and Methods - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">JavaScript String Properties and Methods</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "info_javascript.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="js_reserved-keywords.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

				<a href="js_number-object.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>JavaScript <span>String Reference</span></h1>
                <p class="summary">This chapter contains a brief overview of the properties and method of the global String object.</p>
				<h2>The JavaScript String Object</h2>
				<p>The JavaScript String object is a global object that is used to store strings. A string is a sequence of letters, numbers, special characters and arithmetic values or combination of all.</p>
				<p>To learn more about String, please check out the <a href="../des-javascript/js_strings.php">JavaScript strings</a> chapter.</p>
				<h2>String Properties</h2>
				<p>The following table lists the standard properties of the String object.</p>
				<div class="shadow">
					<table class="data">
						<tr>
							<th style="width: 170px;">Property</th>
							<th>Description</th>
						</tr>
						<tr>
							<td><code>length</code></td>
							<td>Returns the length of a string.</td>
						</tr>
						<tr>
							<td><code>prototype</code></td>
							<td>Allows you to add new properties and methods to an String object.</td>
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
				<h2>String Methods</h2>
				<p>The following table lists the standard methods of the String object.</p>
				<div class="shadow">
					<table class="data">
						<tr>
							<th style="width: 170px;">Method</th>
							<th>Description</th>
						</tr>
						<tr>
							<td><code>charAt()</code></td>
							<td>Returns the character at the specified index.</td>
						</tr>
						<tr>
							<td><code>charCodeAt()</code></td>
							<td>Returns the Unicode of the character at the specified index.</td>
						</tr>
						<tr>
							<td><code>concat()</code></td>
							<td>Joins two or more strings, and returns a new string.</td>
						</tr>
						<tr>
							<td><code>endsWith()</code></td>
							<td>Checks whether a string ends with a specified substring.</td>
						</tr>
						<tr>
							<td><code>fromCharCode()</code></td>
							<td>Converts Unicode values to characters.</td>
						</tr>
						<tr>
							<td><code>includes()</code></td>
							<td>Checks whether a string contains the specified substring.</td>
						</tr>
						<tr>
							<td><code>indexOf()</code></td>
							<td>Returns the index of the first occurrence of the specified value in a string.</td>
						</tr>
						<tr>
							<td><code>lastIndexOf()</code></td>
							<td>Returns the index of the last occurrence of the specified value in a string.</td>
						</tr>
						<tr>
							<td><code>localeCompare()</code></td>
							<td>Compares two strings in the current locale.</td>
						</tr>						
						<tr>
							<td><code>match()</code></td>
							<td>Matches a string against a regular expression, and returns an array of all matches.</td>
						</tr>						
						<tr>
							<td><code>repeat()</code></td>
							<td>Returns a new string which contains the specified number of copies of the original string.</td>
						</tr>						
						<tr>
							<td><code>replace()</code></td>
							<td>Replaces the occurrences of a string or pattern inside a string with another string, and return a new string without modifying the original string.</td>
						</tr>						
						<tr>
							<td><code>search()</code></td>
							<td>Searches a string against a regular expression, and returns the index of the first match.</td>
						</tr>						
						<tr>
							<td><code>slice()</code></td>
							<td>Extracts a portion of a string and returns it as a new string.</td>
						</tr>
						<tr>
							<td><code>split()</code></td>
							<td>Splits a string into an array of substrings.</td>
						</tr>
						<tr>
							<td><code>startsWith()</code></td>
							<td>Checks whether a string begins with a specified substring.</td>
						</tr>
						<tr>
							<td><code>substr()</code></td>
							<td>Extracts the part of a string between the start index and a number of characters after it.</td>
						</tr>
						<tr>
							<td><code>substring()</code></td>
							<td>Extracts the part of a string between the start and end indexes.</td>
						</tr>
						<tr>
							<td><code>toLocaleLowerCase()</code></td>
							<td>Converts a string to lowercase letters, according to host machine's current locale.</td>
						</tr>
						<tr>
							<td><code>toLocaleUpperCase()</code></td>
							<td>Converts a string to uppercase letters, according to host machine's current locale.</td>
						</tr>
						<tr>
							<td><code>toLowerCase()</code></td>
							<td>Converts a string to lowercase letters.</td>
						</tr>
						<tr>
							<td><code>toString()</code></td>
							<td>Returns a string representing the specified object.</td>
						</tr>
						<tr>
							<td><code>toUpperCase()</code></td>
							<td>Converts a string to uppercase letters.</td>
						</tr>
						<tr>
							<td><code>trim()</code></td>
							<td>Removes whitespace from both ends of a string.</td>
						</tr>
						<tr>
							<td><code>valueOf()</code></td>
							<td>Returns the primitive value of a String object.</td>
						</tr>
					</table>
				</div>
				<div class="bottom-link clearfix">
					<a href="js_number-object.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
					<a href="js_reserved-keywords.php" class="next-page-bottom">Next <i class="fa fa-arrow-left" aria-hidden="true"></i></a>
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