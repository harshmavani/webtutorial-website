<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="PHP 7 Date and Time Functions">
	  <meta name="keywords" content="php,backend,Date and Time Functions">
	  <meta name="author" content="webschooltoday.com">
    <title>PHP 7 Date and Time Functions - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">PHP 7 Date and Time Functions</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "info_php.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="bp_calendar-functions.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="bp_file-system-functions.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>PHP 7 <span>Date</span> and <span>Time</span> Functions</h1>
                <p class="summary">The following section contains a list of useful PHP date and time functions.</p>
                <h2>PHP Date and Time Functions</h2>
                <p>The following date and time functions are the part of the PHP core so you can use these functions within your script without any further installation.</p>
                <div class="shadow">
                    <table class="data">
                    	<thead>
                        	<tr>
                                <th>Function</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>checkdate()</code></td>
                                <td>Validates a Gregorian date</td>
                            </tr>
                            <tr>
                                <td><code>date_add()</code></td>
                                <td>Adds an amount of days, months, years, hours, minutes and seconds to a date</td>
                            </tr>
                            <tr>
                                <td><code>date_create_from_format()</code></td>
                                <td>Returns a new DateTime object formatted according to the specified format</td>
                            </tr>
                            <tr>
                                <td><code>date_create()</code></td>
                                <td>Returns new DateTime object</td>
                            </tr>
                            <tr>
                                <td><code>date_date_set()</code></td>
                                <td>Sets a new date</td>
                            </tr>
                            <tr>
                                <td><code>date_default_timezone_get()</code></td>
                                <td>Returns the default timezone used by all date/time functions in a script</td>
                            </tr>
                            <tr>
                                <td><code>date_default_timezone_set()</code></td>
                                <td>Sets the default timezone used by all date/time functions in a script</td>
                            </tr>
                            <tr>
                                <td><code>date_diff()</code></td>
                                <td>Returns the difference between two dates</td>
                            </tr>
                            <tr>
                                <td><code>date_format()</code></td>
                                <td>Returns a date formatted according to a specified format</td>
                            </tr>
                            <tr>
                                <td><code>date_get_last_errors()</code></td>
                                <td>Returns the warnings and errors found while parsing a date/time string</td>
                            </tr>
                            <tr>
                                <td><code style="width:205px;display:block;word-wrap:break-word;">date_interval_create_from_date_string()</code></td>
                                <td>Sets up a DateInterval from the relative parts of the string</td>
                            </tr>
                            <tr>
                                <td><code>date_interval_format()</code></td>
                                <td>Formats the interval</td>
                            </tr>
                            <tr>
                                <td><code>date_isodate_set()</code></td>
                                <td>Set a date according to the ISO 8601 standard</td>
                            </tr>
                            <tr>
                                <td><code>date_modify()</code></td>
                                <td>Modifies the timestamp</td>
                            </tr>
                            <tr>
                                <td><code>date_offset_get()</code></td>
                                <td>Returns the timezone offset</td>
                            </tr>
                            <tr>
                                <td><code>date_parse_from_format()</code></td>
                                <td>Returns an associative array with detailed info about given date formatted according to the specified format</td>
                            </tr>
                            <tr>
                                <td><code>date_parse()</code></td>
                                <td>Returns associative array with detailed info about a specified date</td>
                            </tr>
                            <tr>
                                <td><code>date_sub()</code></td>
                                <td>Subtracts an amount of days, months, years, hours, minutes and seconds from a date</td>
                            </tr>
                            <tr>
                                <td><code>date_sun_info()</code></td>
                                <td>Returns an array with information about sunset/sunrise and twilight begin/end for a specified day and location</td>
                            </tr>
                            <tr>
                                <td><code>date_sunrise()</code></td>
                                <td>Returns time of sunrise for a given day and location</td>
                            </tr>
                            <tr>
                                <td><code>date_sunset()</code></td>
                                <td>Returns time of sunset for a given day and location</td>
                            </tr>
                            <tr>
                                <td><code>date_time_set()</code></td>
                                <td>Sets the time</td>
                            </tr>
                            <tr>
                                <td><code>date_timestamp_get()</code></td>
                                <td>Returns the Unix timestamp representing the date</td>
                            </tr>
                            <tr>
                                <td><code>date_timestamp_set()</code></td>
                                <td>Sets the date and time based on an Unix timestamp</td>
                            </tr>
                            <tr>
                                <td><code>date_timezone_get()</code></td>
                                <td>Return time zone relative to given DateTime</td>
                            </tr>
                            <tr>
                                <td><code>date_timezone_set()</code></td>
                                <td>Sets the time zone for the DateTime object</td>
                            </tr>
                            <tr>
                                <td><code>date()</code></td>
                                <td>Formats a local date and time</td>
                            </tr>
                            <tr>
                                <td><code>getdate()</code></td>
                                <td>Returns date/time information of the timestamp or the current local date/time</td>
                            </tr>
                            <tr>
                                <td><code>gettimeofday()</code></td>
                                <td>Returns the current time</td>
                            </tr>
                            <tr>
                                <td><code>gmdate()</code></td>
                                <td>Formats a GMT/UTC date and time</td>
                            </tr>
                            <tr>
                                <td><code>gmmktime()</code></td>
                                <td>Get Unix timestamp for a GMT date</td>
                            </tr>
                            <tr>
                                <td><code>gmstrftime()</code></td>
                                <td>Formats a GMT/UTC date and time according to locale settings</td>
                            </tr>
                            <tr>
                                <td><code>idate()</code></td>
                                <td>Formats a local time/date as integer</td>
                            </tr>
                            <tr>
                                <td><code>localtime()</code></td>
                                <td>Returns the local time</td>
                            </tr>
                            <tr>
                                <td><code>microtime()</code></td>
                                <td>Return the current Unix timestamp with microseconds</td>
                            </tr>
                            <tr>
                                <td><code>mktime()</code></td>
                                <td>Returns the Unix timestamp for a date</td>
                            </tr>
                            <tr>
                                <td><code>strftime()</code></td>
                                <td>Formats a local time/date according to locale settings</td>
                            </tr>
                            <tr>
                                <td><code>strptime()</code></td>
                                <td>Parses a time/date generated with strftime()</td>
                            </tr>
                            <tr>
                                <td><code>strtotime()</code></td>
                                <td>Parses an English textual datetime into a Unix timestamp</td>
                            </tr>
                            <tr>
                                <td><code>time()</code></td>
                                <td>Returns the current time as a Unix timestamp</td>
                            </tr>
                            <tr>
                                <td><code>timezone_abbreviations_list()</code></td>
                                <td>Returns associative array containing dst, offset and the timezone name</td>
                            </tr>
                            <tr>
                                <td><code>timezone_identifiers_list()</code></td>
                                <td> Returns an indexed array containing all defined timezone identifiers</td>
                            </tr>
                            <tr>
                                <td><code>timezone_location_get()</code></td>
                                <td>Returns the location information for a specified timezone</td>
                            </tr>
                            <tr>
                                <td><code>timezone_name_from_abbr()</code></td>
                                <td>Returns the timezone name from abbreviation</td>
                            </tr>
                            <tr>
                                <td><code>timezone_name_get()</code></td>
                                <td>Returns the name of the timezone</td>
                            </tr>
                            <tr>
                                <td><code>timezone_offset_get()</code></td>
                                <td>Returns the timezone offset from GMT</td>
                            </tr>
                            <tr>
                                <td><code>timezone_open()</code></td>
                                <td> Creates new DateTimeZone object</td>
                            </tr>
                            <tr>
                                <td><code>timezone_transitions_get()</code></td>
                                <td>Returns all transitions for the timezone</td>
                            </tr>
                            <tr>
                                <td><code>timezone_version_get()</code></td>
                                <td>Returns the current version of the timezonedb</td>
                            </tr>
                        </tbody>
                	</table>
                </div>
                <div class="bottom-link clearfix">
                    <a href="bp_file-system-functions.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="bp_calendar-functions.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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