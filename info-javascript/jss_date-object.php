<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="JavaScript Date Properties and Methods">
	  <meta name="keywords" content="javascript,js,Date Properties and Methods">
	  <meta name="author" content="webschooltoday.com">
    <title>JavaScript Date Properties and Methods - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">JavaScript Date Properties and Methods</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "info_javascript.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="js_math-object.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

				<a href="js_boolean-object.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>JavaScript <span>Date Reference</span></h1>
                <p class="summary">This chapter contains a brief overview of the properties and method of the global Date object.</p>
				<h2>The JavaScript Date Object</h2>
				<p>The JavaScript Date object is a global object that is used to work with dates and times. The Date objects are based on a time value that is the number of milliseconds since January 1, 1970 UTC.</p>
				<p>To learn more about the Date, please check out the <a href="../des-javascript/js_date-and-time.php">JavaScript date and time</a> chapter.</p>
				<h2>Date Properties</h2>
                <p>The following table lists the standard properties of the Date object.</p>
				<div class="shadow">
					<table class="data">
						<tr>
							<th style="width: 180px;">Property</th>
							<th>Description</th>
						</tr>
						<tr>
							<td><code>prototype</code></td>
							<td>Allows you to add new properties and methods to a Date object.</td>
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
				<h2>Date Methods</h2>
                <p>The following table lists the standard methods of the Date object.</p>
				<div class="shadow">
					<table class="data">
						<tr>
							<th style="width: 180px;">Method</th>
							<th>Description</th>
						</tr>
						<tr>
							<td><code>getDate()</code></td>
							<td>Returns the day of the month (from 1-31).</td>
						</tr>
						<tr>
							<td><code>getDay()</code></td>
							<td>Returns the day of the week (from 0-6).</td>
						</tr>
						<tr>
							<td><code>getFullYear()</code></td>
							<td>Returns the year (four digits).</td>
						</tr>
						<tr>
							<td><code>getHours()</code></td>
							<td>Returns the hour (from 0-23).</td>
						</tr>
						<tr>
							<td><code>getMilliseconds()</code></td>
							<td>Returns the milliseconds (from 0-999).</td>
						</tr>
						<tr>
							<td><code>getMinutes()</code></td>
							<td>Returns the minutes (from 0-59).</td>
						</tr>
						<tr>
							<td><code>getMonth()</code></td>
							<td>Returns the month (from 0-11).</td>
						</tr>
						<tr>
							<td><code>getSeconds()</code></td>
							<td>Returns the seconds (from 0-59).</td>
						</tr>
						<tr>
							<td><code>getTime()</code></td>
							<td>Returns the number of milliseconds since midnight Jan 1, 1970.</td>
						</tr>
						<tr>
							<td><code>getTimezoneOffset()</code></td>
							<td>Returns the time difference between UTC time and local time, in minutes.</td>
						</tr>
						<tr>
							<td><code>getUTCDate()</code></td>
							<td>Returns the day of the month, according to universal time (from 1-31).</td>
						</tr>
						<tr>
							<td><code>getUTCDay()</code></td>
							<td>Returns the day of the week, according to universal time (from 0-6).</td>
						</tr>
						<tr>
							<td><code>getUTCFullYear()</code></td>
							<td>Returns the year, according to universal time.</td>
						</tr>
						<tr>
							<td><code>getUTCHours()</code></td>
							<td>Returns the hour, according to universal time (from 0-23).</td>
						</tr>
						<tr>
							<td><code>getUTCMilliseconds()</code></td>
							<td>Returns the milliseconds, according to universal time (from 0-999)</td>
						</tr>
						<tr>
							<td><code>getUTCMinutes()</code></td>
							<td>Returns the minutes, according to universal time (from 0-59).</td>
						</tr>
						<tr>
							<td><code>getUTCMonth()</code></td>
							<td>Returns the month, according to universal time (from 0-11).</td>
						</tr>
						<tr>
							<td><code>getUTCSeconds()</code></td>
							<td>Returns the seconds, according to universal time (from 0-59).</td>
						</tr>
						<tr>
							<td>getYear()</td>
							<td><span class="deprecated">Deprecated.</span> Use the <code>getFullYear()</code> method instead.</td>
						</tr>
						<tr>
							<td><code>now()</code></td>
							<td>Returns the number of milliseconds since midnight Jan 1, 1970.</td>
						</tr>
						<tr>
							<td><code>parse()</code></td>
							<td>Parses a date string and returns the number of milliseconds since Jan 1, 1970.</td>
						</tr>
						<tr>
							<td><code>setDate()</code></td>
							<td>Sets the day of the month of a date object.</td>
						</tr>
						<tr>
							<td><code>setFullYear()</code></td>
							<td>Sets the full year of a date object.</td>
						</tr>
						<tr>
							<td><code>setHours()</code></td>
							<td>Sets the hours of a date object.</td>
						</tr>
						<tr>
							<td><code>setMilliseconds()</code></td>
							<td>Sets the milliseconds of a date object.</td>
						</tr>
						<tr>
							<td><code>setMinutes()</code></td>
							<td>Set the minutes of a date object.</td>
						</tr>
						<tr>
							<td><code>setMonth()</code></td>
							<td>Sets the month of a date object.</td>
						</tr>
						<tr>
							<td><code>setSeconds()</code></td>
							<td>Sets the seconds of a date object.</td>
						</tr>
						<tr>
							<td><code>setTime()</code></td>
							<td>Sets a date to a specified number of milliseconds after/before Jan 1, 1970.</td>
						</tr>
						<tr>
							<td><code>setUTCDate()</code></td>
							<td>Sets the day of the month of a date object, according to universal time.</td>
						</tr>
						<tr>
							<td><code>setUTCFullYear()</code></td>
							<td>Sets the year of a date object, according to universal time.</td>
						</tr>
						<tr>
							<td><code>setUTCHours()</code></td>
							<td>Sets the hours of a date object, according to universal time.</td>
						</tr>
						<tr>
							<td><code>setUTCMilliseconds()</code></td>
							<td>Sets the milliseconds of a date object, according to universal time.</td>
						</tr>
						<tr>
							<td><code>setUTCMinutes()</code></td>
							<td>Set the minutes of a date object, according to universal time.</td>
						</tr>
						<tr>
							<td><code>setUTCMonth()</code></td>
							<td>Sets the month of a date object, according to universal time.</td>
						</tr>
						<tr>
							<td><code>setUTCSeconds()</code></td>
							<td>Set the seconds of a date object, according to universal time.</td>
						</tr>
						<tr>
							<td><code>setYear()</code></td>
							<td><span class="deprecated">Deprecated.</span> Use the <code>setFullYear()</code> method instead.</td>
						</tr>
						<tr>
							<td><code>toDateString()</code></td>
							<td>Converts the date portion of a Date object into a human readable form.</td>
						</tr>
						<tr>
							<td><code>toGMTString()</code></td>
							<td><span class="deprecated">Deprecated.</span> Use the <a>toUTCString()</a> method instead</td>
						</tr>
						<tr>
							<td><code>toISOString()</code></td>
							<td>Returns the date as a string, formatted according to ISO standard.</td>
						</tr>
						<tr>
							<td><code>toJSON()</code></td>
							<td>Returns the date as a string, formatted as a JSON date.</td>
						</tr>
						<tr>
							<td><code>toLocaleDateString()</code></td>
							<td>Returns the date portion of a Date object as a locally formatted string.</td>
						</tr>
						<tr>
							<td><code>toLocaleTimeString()</code></td>
							<td>Returns the time portion of a Date object as a locally formatted string.</td>
						</tr>
						<tr>
							<td><code>toLocaleString()</code></td>
							<td>Converts a Date object to a locally formatted string.</td>
						</tr>
						<tr>
							<td><code>toString()</code></td>
							<td>Converts a Date object to a string.</td>
						</tr>
						<tr>
							<td><code>toTimeString()</code></td>
							<td>Converts the time portion of a Date object to a string.</td>
						</tr>
						<tr>
							<td><code>toUTCString()</code></td>
							<td>Converts a Date object to a string, according to universal time.</td>
						</tr>
						<tr>
							<td><code>UTC()</code></td>
							<td>Returns the number of milliseconds in a Date object since January 1, 1970, 00:00:00 (midnight), universal time.</td>
						</tr>
						<tr>
							<td><code>valueOf()</code></td>
							<td>Returns the primitive value of a Date object.</td>
						</tr>						
					</table>
				</div>
				<div class="bottom-link clearfix">
					<a href="js_boolean-object.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
					<a href="js_math-object.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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